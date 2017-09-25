<?php if ( is_singular() ) :?>
<?php $image = get_field('hero');?>
<style>
	header#post-<?php the_ID(); ?>{
		background-image: url('<?php echo $image['url']; ?>');
	}
	@media screen and (max-width: 48.9em){
		header#post-<?php the_ID(); ?>{
			max-height: <?php echo $image['sizes'][ 'medium_large-height' ];?>px;
			background-image: url('<?php echo $image['sizes'][ 'medium' ];?>');
		}
	}
</style>
<header id="post-<?php the_ID(); ?>" class="post-header">
	<div class="flex-initial"><h1><?php the_title(); ?><?php the_field('bold-title'); ?></h1></div>
</header>
<span id="nav-attach"></span>
<aside id="NAV-OVERVIEW" class="layout-row-wrap-around">
	<li id="top"><?php the_title(); ?><?php the_field('bold-title'); ?></li>
	<li id="spec">Especificações</li>
	<li id="geo">Geometria</li>
	<li id="tech">Tecnologia</li>
	<li id="gal">Galeria</li>
	<li id="commend">Mais produtos</li>
</aside>

<section id="BIKE-OVERVIEW" class="layout-row-between wrap">

	<div class="overview-paragraph">
		<div class="paragraph-title">
			<?php if( get_field('arte_do_titulo') ) : ?>
			<img src="<?php the_field('arte_do_titulo'); ?>" />
			<?php endif; ?>
			<?php if ( the_field('Bikename') ) : ?>
			<h2><?php the_field('Bikename'); ?></h2>
			<?php endif; ?>
		</div>
		<div class="paragraph-description">
			<?php if ( !the_field('descricao_ou_imagem' && !the_field('description')) ) : ?>
			<?php the_content(); ?>
			<?php endif; ?>
			<?php if ( the_field('descricao_ou_imagem	') ) : ?>
			<img src="<?php the_field('imagem_da_descricao'); ?>">
			<?php else : ?> 
			<p><?php the_field('description'); ?></p>
			<?php endif; ?>
		</div>
	</div>


<!-- ######## ADD ZOOM ####### -->
<article>
	<div class="color-picker">
	<?php if( have_rows('bike_color') ): ?>
	<?php while( have_rows('bike_color') ): the_row(); 

		$img = get_sub_field('foto');
		$color = get_sub_field('cor');

	?>
		<img src="<?php echo $img; ?>" class="bike-color" />
	

	<?php endwhile; ?>

	<ol class="layout-row">
		<?php while( have_rows('bike_color') ): the_row(); 
			$color = get_sub_field('cor');
		?>	
		<li><span style="background-color: <?php echo $color; ?>"></span></li>
		<?php endwhile; ?>
	</ol>
	<?php endif; ?>

</div>
</article>

</section>

<section class="tecnologia-h1">
<h1>ESPECIFICAÇÕES</h1>
</section>
<section id="SPECS" class="layout-column">

<div id="especificacoes">
	<table>
		<tbody>
			<tr>
				<td>
					<?php if( have_rows('specs') ):
					while ( have_rows('specs') ) : the_row();
					if( get_row_layout() == 'Conjunto do quadro' ):
					if( have_rows('quadro') ): echo '<table><tbody><th colspan="2">Conjunto do Quadro</th>';
						while ( have_rows('quadro') ) : the_row();
						$spec_name = get_sub_field('spec_name');
						$spec_data = get_sub_field('spec_data');
						echo '<tr><td>' . $spec_name . '</td><td>' . $spec_data . '</td></tr>';
						endwhile;
						echo '</tbody></table>';
					endif;
					endif;	
					endwhile;
					else : echo '<p>no layouts found :/</p>';
					endif; ?>
				</td>
				<td>
				<?php if( have_rows('specs') ):
				 while ( have_rows('specs') ) : the_row();
					if( get_row_layout() == 'roda' ):
						if( have_rows('roda') ): echo '<table><tbody><th colspan="2">RODA</th>';
							while ( have_rows('roda') ) : the_row();
							$spec_name = get_sub_field('spec_name');
							$spec_data = get_sub_field('spec_data');
							echo '<tr><td>' . $spec_name . '</td><td>' . $spec_data . '</td></tr>';
							endwhile;
							echo '</tbody></table>';
					endif;
					endif;
					endwhile;
				endif; ?>
				</td>
			</tr>
			<tr>
				<td>
				<?php if( have_rows('specs') ):
					while ( have_rows('specs') ) : the_row();
					if( get_row_layout() == 'Transmissão' ):
						if( have_rows('transmissao') ): echo '<table><tbody><th colspan="2">Transmissão</th>';
							while ( have_rows('transmissao') ) : the_row();
		
							$spec_name = get_sub_field('spec_name');
							$spec_data = get_sub_field('spec_data');
		
							echo '<tr><td>' . $spec_name . '</td><td>' . $spec_data . '</td></tr>';
		
							endwhile;
							echo '</tbody></table>';
		
						endif;
					endif;
					endwhile;
				endif; ?>
				</td>
				<td>
					<?php if( have_rows('specs') ):
						while ( have_rows('specs') ) : the_row();
						if( get_row_layout() == 'Componentes' ):
							if( have_rows('comps') ): echo '<table><tbody><th colspan="2">Componentes</th>';
								while ( have_rows('comps') ) : the_row();
			
								$spec_name = get_sub_field('spec_name');
								$spec_data = get_sub_field('spec_data');
			
								echo '<tr><td>' . $spec_name . '</td><td>' . $spec_data . '</td></tr>';
			
								endwhile;
								echo '</tbody></table>';
			
							endif;
						endif;
						endwhile; endif; ?>
					</td>
			</tr>
		</tbody>
	</table>
	<?php if( have_rows('specs') ):
while ( have_rows('specs') ) : the_row();
if( get_row_layout() == 'Garantia' ):
	$garantia = get_sub_field('warranty');
	if( $garantia ):
		echo '<h2>Garantia</h2>';
		echo '<p>' . $garantia . '</p>';
	endif;
	endif;
endwhile; endif; ?>
</div>

	<div id="geometria" class="layout-row-center-wrap">
		<div class="geometria-design">
			<img src="<?php the_field('foto_geometria'); ?>" alt="Geometria"/>
		</div>
		<div class="geometria-table">
			<table>
			<tbody>
				<?php if( have_rows('geometry') ): ?>
				<th colspan="4">Geometria</th>
				<?php while( have_rows('geometry') ): the_row(); 

					$letra = get_sub_field('letra');
					$nome = get_sub_field('nome');
					$val1 = get_sub_field('valor_1');
					$val2 = get_sub_field('value_2');

				?>
				<tr>
					<td><?php echo $letra; ?></td>
					<td><?php echo $nome; ?></td>
					<td><?php echo $val1; ?></td>
					<td><?php echo $val2; ?></td>
				</tr>
				<?php endwhile; ?>
				<?php endif; ?>
			</tbody>
			</table>
		</div>
	</div>
</section>

<section class="tecnologia-h1">
<h1>TECNOLOGIA</h1>
</section>
<section id="TECNOLOGIA">
<div class="layout-row-center-wrap">
<?php $tech = get_field("tecnologia");	if( $tech ): ?>
<?php foreach( $tech as $post): ?>
<ul class="flex-25 layout-row-center-nowrap">
<?php setup_postdata($post); ?>
<li>
	<?php the_post_thumbnail('thumbnail'); ?>
</li>
<li>
	<h3><?php the_title(); ?></h3>
	<span><?php the_content(); ?></span>
</li>
</ul>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
</div>
</section>

<section class="tecnologia-h1" style="text-align: right">
<h1 style="width: 100%">GALERIA</h1>
</section>
<section id="GALERIA">
	<?php $images = get_field('galeria');

	if( $images ): ?>
		<?php foreach( $images as $image ): ?>
			<div class="swipe-card" style="background-image: url('<?php echo $image['sizes']['medium']; ?>')">
						<img src="<?php echo $image['sizes']['medium']; ?>"
							data-original-src="<?php echo $image['url']; ?>"
							data-original-src-width="<?php echo $image['width']; ?>"
							data-original-src-height="<?php echo $image['height']; ?>"
							alt="<?php echo $image['alt']; ?>">
			</div>
			<?php endforeach; ?>
	<?php endif; ?>
</section>

<section class="tecnologia-h1">
<h1>OUTROS MODELOS</h1>
</section>
<section id="RECOMENDADAS" class="layout-row-around">
 <?php $bikes_afins = get_field('bikes_afins');
	if( $bikes_afins ): ?>
			<?php foreach( $bikes_afins as $post): ?>
					<?php setup_postdata($post); get_template_part( 'loop', get_post_format() );?>
			<?php endforeach; ?>
			<?php wp_reset_postdata();?>
	<?php endif; ?>
</section>

<?php endif; ?>