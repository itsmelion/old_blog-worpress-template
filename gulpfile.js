const project = 'Planet Expat'; // Project name, used for build zip.
const appURL = 'http://wp.planetexpat/'; // Local Development URL for BrowserSync. Change as-needed.
const build = './theme/'; // Files that you want to package into a zip go here
const source = './src';
const dist = './build';

const vendors = [
  "./node_modules/jquery/dist/jquery.js",
  "./node_modules/gsap/TweenLite.js",
  source + '/scripts/vendors/*.js'
];

const buildInclude = [
  // include common file types
  '**/*.php',
  '**/*.html',
  '**/*.css',
  '**/*.js',
  '**/*.svg',
  '**/*.ttf',
  '**/*.otf',
  '**/*.eot',
  '**/*.woff',
  '**/*.woff2',
  // include specific files and folders
  'screenshot.png',
  // exclude files and folders
  '!node_modules/**/*',
  '!style.css.map',
  '!src/*'
];
const gulp = require('gulp');
const autoprefixer = require('autoprefixer');
const browserSync = require('browser-sync').create();
const postcss = require('gulp-postcss');
const del = require('del');
const mqpacker = require('css-mqpacker');
const cssnano = require('cssnano');
const babel = require('gulp-babel');
const eslint = require('gulp-eslint');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const cache = require('gulp-cache');
const htmlmin = require('html-minifier').minify;
const gulpif = require('gulp-if');
const imageMin = require('gulp-imagemin');
const sass = require('gulp-sass');
const maps = require('gulp-sourcemaps');
const runsequence = require('run-sequence');
const size = require('gulp-size');
const gzip = require('gulp-gzip');
const rev = require('gulp-rev');
const notify = require('gulp-notify');
const newer = require('gulp-newer');
const argv = require('yargs').argv;
const reload = browserSync.reload;

gulp.task('build', () => {
  runsequence([
    //Scripts
    'vendors', 'scripts', 'lazy',
    //Styles
    'coreStyles', 'asyncStyles',
    //other
    'fonts', 'images'
  ])
});

gulp.task('zip', () => {
  runsequence('buildFiles', 'buildZip')
})

gulp.task('serve', () => {
  runsequence('build', () => {
    browserSync.init({
      proxy: appURL,
      notify: true,
      open: true,
      port: 9000
    });

    gulp.watch([
      source + '/**/*.html',
      dist + '/images/**/*',
      './**/*.php'
    ]).on('change', reload);

    gulp.watch(source + '/images/**/*', ['images']);
    gulp.watch(source + '/scss/**/*.scss', ['coreStyles', 'asyncStyles']);
    gulp.watch(source + '/scripts/**/*.js', ['scripts', 'vendors', 'lazy']);
  });
});

gulp.task('coreStyles', () => {
  return gulp.src(source + '/scss/style.scss')
    .pipe(sass.sync({
      outputStyle: 'expanded',
      precision: 3
    }).on('error', sass.logError))
    .pipe(postcss([mqpacker(), autoprefixer(), cssnano({
      safe: true,
      autoprefixer: false
    })]))
    .pipe(gulp.dest('./'))
    .pipe(reload({
      stream: true
    }));
});

gulp.task('asyncStyles', () => {
  return gulp.src(source + '/scss/async.scss')
    .pipe(sass.sync({
      outputStyle: 'expanded',
      precision: 3
    }).on('error', sass.logError))
    .pipe(postcss([mqpacker(), autoprefixer(), cssnano({
      safe: true,
      autoprefixer: false
    })]))
    .pipe(gulp.dest(dist))
    .pipe(reload({
      stream: true
    }));
});

gulp.task('scripts', () => {
  return gulp.src(source + '/scripts/core/**/*.js')
    .pipe(concat('app.js'))
    .pipe(babel({
      "presets": ["env"]
    }))
    .pipe(gulpif(argv.production, uglify()))
    .pipe(gulp.dest(dist + '/scripts'))
    .pipe(reload({
      stream: true
    }))
    .pipe(notify({
      message: 'scripts complete',
      onLast: true
    }));
});

gulp.task('vendors', () => {
  return gulp.src(vendors)
    .pipe(concat('vendors.js'))
    .pipe(gulpif(argv.production, uglify()))
    .pipe(gulp.dest(dist + '/scripts'))
    .pipe(reload({
      stream: true
    }))
    .pipe(notify({
      message: 'scripts complete',
      onLast: true
    }));;
});

gulp.task('lazy', () => {
  return gulp.src(source + '/scripts/lazy/*.js')
    .pipe(concat('lazy.js'))
    .pipe(gulpif(argv.production, uglify()))
    .pipe(gulp.dest(dist + '/scripts'))
    .pipe(reload({
      stream: true
    }));
});

gulp.task('html', () => {
  return gulp.src(source + '/components/**/*.html')
    .pipe(htmlmin({
      collapseWhitespace: false,
      minifyCSS: false,
      minifyJS: false,
      ignoreCustomFragments: [/<%[\s\S]*?%>/, /<\?[\s\S]*?\?>/],
      processConditionalComments: false,
      removeComments: false,
      removeEmptyAttributes: false,
      removeStyleLinkTypeAttributes: false,
      removeScriptTypeAttributes: false,
      sortAttributes: false,
      sortClassName: false,
      useShortDoctype: false
    }))
    .pipe(gulp.dest(dist + '/components/'));
});

gulp.task('images', () => {
  return gulp.src(source + '/images/**/*')
    .pipe(newer(dist + '/images'))
    .pipe(imageMin({
      interlaced: true,
      progressive: true,
      optimizationLevel: 5,
      svgoPlugins: [{
        removeViewBox: true
      }]
    }))
    .pipe(gulp.dest(dist + '/images'));
});

gulp.task('gzip', () => {
  return gulp.src([dist + '/**/*.js', dist + '/**/*.css', './style.css'])
    .pipe(gzip())
    .pipe(gulp.dest(dist));
});


gulp.task('fonts', () => {
  return gulp.src(source + '/fonts/**/*.{eot,svg,ttf,woff,woff2}')
    .pipe(gulp.dest(dist + '/fonts'));
});


gulp.task('clear', function () {
  cache.clearAll();
});
gulp.task('clean', function () {
  return gulp.src(['**/.sass-cache', '**/.DS_Store'], {
    read: false
  })
  del.bind(null, ['.tmp', dist])
    .pipe(ignore('node_modules/**'))
});

gulp.task('buildFiles', function () {
  return gulp.src(buildInclude)
    .pipe(gulp.dest(build))
    .pipe(notify({
      message: 'Copy from ' + buildInclude + 'to' + build + 'complete',
      onLast: true
    }));
});
gulp.task('buildZip', function () {
  return gulp.src(build)
    .pipe(zip(project + '.zip'))
    .pipe(gulp.dest('./'))
    .pipe(notify({
      message: 'Theme built and zipped',
      onLast: true
    }));
});