<?php
	$arrayvar = array(
		'arrayitem1',
		'arrayitem2',
		'arrayitem3'
	);
	//custom field 'campo':
	$etapa = get_field('campo');
	//include
	include( locate_template( 'path/to/include.php', false, false ) );
?>

<!-- Loop Example -->
<?php $images = get_field('galeria');
if( $images ): ?>
  <?php foreach( $images as $image ): ?>
    <article class="swipe-card" style="background-image: url('<?php echo $image['sizes']['medium']; ?>')">
          <img src="<?php echo $image['sizes']['medium']; ?>"
            data-original-src="<?php echo $image['url']; ?>"
            data-original-src-width="<?php echo $image['width']; ?>"
            data-original-src-height="<?php echo $image['height']; ?>"
            alt="<?php echo $image['alt']; ?>">
    </article>
    <?php endforeach; ?>
<?php endif; ?>

<!-- Include Stuff 1 -->
<?php
 $etapa = get_field('etapas');
?>
<section class="wave-section"> 
  <div class="wave-btn-container"> 
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2839 410"> 
      <defs> 
        <style> 
          #wave0{fill:url(#item0)}
          #wave1{fill:url(#item1)}
          #wave2{fill:url(#item2)}
          #wave-none{fill:url(#item-none)}
        </style> 
        <linearGradient id="item-none" y1="50%" x2="100%" y2="50%"> 
          <stop offset="0" stop-color="<?php echo $edgeColor;?>" /> 
          <stop offset="0.5" stop-color="#A1CD3A"/> 
          <stop offset="1" stop-color="<?php echo $edgeColor;?>" /> 
        </linearGradient> 
        <linearGradient id="item0" y1="50%" x2="100%" y2="50%"> 
          <stop offset="0.2" stop-color="<?php echo $edgeColor;?>" /> 
          <stop offset="0.36" stop-color="#A1CD3A"/> 
          <stop offset="0.5" stop-color="<?php echo $edgeColor;?>" /> 
        </linearGradient> 
        <linearGradient id="item1" y1="50%" x2="100%" y2="50%"> 
          <stop offset="0.35" stop-color="<?php echo $edgeColor;?>" /> 
          <stop offset="0.50" stop-color="#A1CD3A"/> 
          <stop offset="0.65" stop-color="<?php echo $edgeColor;?>" /> 
        </linearGradient> 
        <linearGradient id="item2" y1="50%" x2="100%" y2="50%"> 
          <stop offset="0.50" stop-color="<?php echo $edgeColor;?>" /> 
          <stop offset="0.64" stop-color="#A1CD3A"/> 
          <stop offset="0.78" stop-color="<?php echo $edgeColor;?>" /> 
        </linearGradient> 
      </defs> 
      <path id="wave0" class="wave-thing wave-bg" d="M2634.5.5C2521.56.5,2430,92.06,2430,205a200.5,200.5,0,0,1-401,0c0-.15,0-.3,0-.44s0,0,0-.06C2029,91.56,1937.44,0,1824.5,0S1620,91.56,1620,204.5a200.5,200.5,0,0,1-401,0C1219,91.56,1127.44,0,1014.5,0S810,91.56,810,204.5c0,0,0,0,0,.06s0,.3,0,.44a200.5,200.5,0,0,1-401,0C409,92.06,317.44.5,204.5.5S0,92.06,0,205a2,2,0,0,0,2,2v-2H4a200.5,200.5,0,0,1,401,0c0,112.94,91.56,204.5,204.5,204.5S814,317.94,814,205a200.5,200.5,0,1,1,401,0h0c.27,112.71,91.72,204,204.49,204S1623.72,317.71,1624,205h0a200.5,200.5,0,0,1,401,0c0,112.94,91.56,204.5,204.5,204.5S2434,317.94,2434,205a200.5,200.5,0,1,1,401,0h2v2a2,2,0,0,0,2-2C2839,92.06,2747.44.5,2634.5.5Z"/> 
      <path id="wave1" class="wave-thing wave-bg" d="M2634.5.5C2521.56.5,2430,92.06,2430,205a200.5,200.5,0,0,1-401,0c0-.15,0-.3,0-.44s0,0,0-.06C2029,91.56,1937.44,0,1824.5,0S1620,91.56,1620,204.5a200.5,200.5,0,0,1-401,0C1219,91.56,1127.44,0,1014.5,0S810,91.56,810,204.5c0,0,0,0,0,.06s0,.3,0,.44a200.5,200.5,0,0,1-401,0C409,92.06,317.44.5,204.5.5S0,92.06,0,205a2,2,0,0,0,2,2v-2H4a200.5,200.5,0,0,1,401,0c0,112.94,91.56,204.5,204.5,204.5S814,317.94,814,205a200.5,200.5,0,1,1,401,0h0c.27,112.71,91.72,204,204.49,204S1623.72,317.71,1624,205h0a200.5,200.5,0,0,1,401,0c0,112.94,91.56,204.5,204.5,204.5S2434,317.94,2434,205a200.5,200.5,0,1,1,401,0h2v2a2,2,0,0,0,2-2C2839,92.06,2747.44.5,2634.5.5Z"/> 
      <path id="wave2" class="wave-thing wave-bg" d="M2634.5.5C2521.56.5,2430,92.06,2430,205a200.5,200.5,0,0,1-401,0c0-.15,0-.3,0-.44s0,0,0-.06C2029,91.56,1937.44,0,1824.5,0S1620,91.56,1620,204.5a200.5,200.5,0,0,1-401,0C1219,91.56,1127.44,0,1014.5,0S810,91.56,810,204.5c0,0,0,0,0,.06s0,.3,0,.44a200.5,200.5,0,0,1-401,0C409,92.06,317.44.5,204.5.5S0,92.06,0,205a2,2,0,0,0,2,2v-2H4a200.5,200.5,0,0,1,401,0c0,112.94,91.56,204.5,204.5,204.5S814,317.94,814,205a200.5,200.5,0,1,1,401,0h0c.27,112.71,91.72,204,204.49,204S1623.72,317.71,1624,205h0a200.5,200.5,0,0,1,401,0c0,112.94,91.56,204.5,204.5,204.5S2434,317.94,2434,205a200.5,200.5,0,1,1,401,0h2v2a2,2,0,0,0,2-2C2839,92.06,2747.44.5,2634.5.5Z"/> 
      <path id="wave-none" class="wave-thing wave-bg active" d="M2634.5.5C2521.56.5,2430,92.06,2430,205a200.5,200.5,0,0,1-401,0c0-.15,0-.3,0-.44s0,0,0-.06C2029,91.56,1937.44,0,1824.5,0S1620,91.56,1620,204.5a200.5,200.5,0,0,1-401,0C1219,91.56,1127.44,0,1014.5,0S810,91.56,810,204.5c0,0,0,0,0,.06s0,.3,0,.44a200.5,200.5,0,0,1-401,0C409,92.06,317.44.5,204.5.5S0,92.06,0,205a2,2,0,0,0,2,2v-2H4a200.5,200.5,0,0,1,401,0c0,112.94,91.56,204.5,204.5,204.5S814,317.94,814,205a200.5,200.5,0,1,1,401,0h0c.27,112.71,91.72,204,204.49,204S1623.72,317.71,1624,205h0a200.5,200.5,0,0,1,401,0c0,112.94,91.56,204.5,204.5,204.5S2434,317.94,2434,205a200.5,200.5,0,1,1,401,0h2v2a2,2,0,0,0,2-2C2839,92.06,2747.44.5,2634.5.5Z"/> 
    </svg>
    <ul class="tabs justify-content-center"> 
    <?php foreach( $etapa as $key=>$value ): ?>
   	<li data-id="<?php echo $key; ?>">
    	<a data-id="<?php echo $key; ?>" class="wave-btn wave-thing">
				<span class="caption"><?= $etapa[$key]['nome_da_etapa']; ?></span>
			</a>
    </li>
    <?php endforeach; ?>
	</ul>
 </div>
	<div class="container">
		<ul class="row tab__content">
			<li class="active col-md-6"><div class="content__wrapper"></div></li>
      <?php foreach( $etapa as $key=>$value ): ?>
        <li class="offset-md-3 col-md-6">
          <div class="content__wrapper text-center">
            <h2><?= $etapa[$key]['nome_da_etapa']; ?></h2>
					  <p><?= $etapa[$key]['conteudo']; ?></p>
          </div>
        </li>
      <?php endforeach; ?>
		</ul>
	</div>
</section>
<!-- Include Stuff 2 -->
<section class="container-fluid degrade-icons">
	<div class="row">
    <ul class="justify-content-center">
		<li data-id="0">
      <a class="wave-btn wave-thing" href="#bottom-sheet0" >
				<img src="<?php echo get_bloginfo('template_url') ?><?php echo $itemSVG[0];?>">
				<span class="caption"><?php echo $itemCaption[0];?></span>
			</a>
    </li>
		<li data-id="1"><a data-id="1" href="#bottom-sheet1" class="wave-btn wave-thing">
				<img src="<?php echo get_bloginfo('template_url') ?><?php echo $itemSVG[1];?>">
				<span class="caption"><?php echo $itemCaption[1];?></span>
		</a></li>
		<li data-id="2">
    	<a data-id="2" class="wave-btn wave-thing" href="#bottom-sheet2" >
					<img src="<?php echo get_bloginfo('template_url') ?><?php echo $itemSVG[2];?>">
					<span class="caption"><?php echo $itemCaption[2];?></span>
			</a>
    </li>
	</ul>
 </div>
</section>

<div id="bottom-sheet0" class="overlay">
			<aside class="social" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
				<img src="<?php echo get_bloginfo('template_url') ?><?php echo $itemSVG[0];?>">
				<h2><?php echo $itemCaption[0];?></h2>
				<p class="text-left"><?php echo $itemText[0];?></p>
				<a href="soundhunter" class="btn btn-primary">Veja mais</a>
			</aside>
	<a href="#close" class="btn-close" aria-hidden="true"><span class="sr-only">Close</span></a>
</div>
<div id="bottom-sheet1" class="overlay">
			<aside class="social" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
				<img src="<?php echo get_bloginfo('template_url') ?><?php echo $itemSVG[1];?>">
				<h2><?php echo $itemCaption[1];?></h2>
				<p class="text-left"><?php echo $itemText[1];?></p>
				<a href="audio-effects" class="btn btn-primary">Veja mais</a>
			</aside>
	<a href="#close" class="btn-close" aria-hidden="true"><span class="sr-only">Close</span></a>
</div>
<div id="bottom-sheet2" class="overlay">
			<aside class="social" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
				<img src="<?php echo get_bloginfo('template_url') ?><?php echo $itemSVG[2];?>">
				<h2><?php echo $itemCaption[2];?></h2>
				<p class="text-left"><?php echo $itemText[2];?></p>
				<a href="virtual-reality" class="btn btn-primary">Veja mais</a>
			</aside>
	<a href="#close" class="btn-close" aria-hidden="true"><span class="sr-only">Close</span></a>
</div>
