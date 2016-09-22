<?php
	//header
	 get_header(); ?>
<body class="bg">
  <div class="w-container">
    <div class="main-row w-row">
      <div class="w-col w-col-4">
        <div class="logo-block">
          <div class="jolili-line-down"></div>
          <div class="jolili-line-side"></div><img class="logo" src="<?php echo get_template_directory_uri() ?>/images/jolili.svg" width="225">
          <p class="logo-subtitle">koffie • lunch •&nbsp;bar</p>
          <div>
            <div class="fullsign">
              <div class="open-sign">Wij zijn open!</div><img class="sign-holder" src="<?php echo get_template_directory_uri() ?>/images/signholder.svg" width="100">
            </div>
          </div>
		  
		  <!-- Navigation Menu -->
         <?php echo wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>
 
		 	<?php
			 	$mo = get_option('jolili_mo');
			 	$tue = get_option('jolili_tue');
			 	$wed = get_option('jolili_wed');
			 	$thu = get_option('jolili_thu');
			 	$fri = get_option('jolili_fri');
			 	$sat = get_option('jolili_sat');
			 	$sun = get_option('jolili_sun');
			 	//if ($mo !== '' && $tue !== '' && $wed !== '' && $thu !== '' && $fri !== ''):
			?>
			
          <div class="openingsurenblock">
            <h3 class="title-openingsuren">Openingsuren:</h3>
            <div class="openingsuren-block w-row">
              <div class="w-col w-col-10">
                <p class="openingsuren-start">
	              <?php if(!empty($mo)): ?>
	              <strong>Ma :   </strong><?php print $mo; ?>
	              <?php endif; ?>
	              <?php if(!empty($tue)): ?>
                  <br><strong>Di :   </strong><?php print $tue; ?>
                  <?php endif; ?>
                  <?php if(!empty($wed)): ?>
                  <br><strong>Wo :   </strong><?php print $wed; ?>
                  <?php endif; ?>
                  <?php if(!empty($thu)): ?>
                  <br><strong>Do :   </strong><?php print $thu; ?>
                  <?php endif; ?>
                  <?php if(!empty($fri)): ?>
                  <br><strong>Vr :   </strong><?php print $fri; ?>
                  <?php endif; ?>
                  <?php if(!empty($sat)): ?>
                  <br><strong>Za :   </strong><?php print $sat; ?>
                  <?php endif; ?>
                  <?php if(!empty($sun)): ?>
                  <br><strong>Zo :   </strong><?php print $sun; ?>
                  <?php endif; ?>
                </p>
                 <p class="openingsuren-start">
		           <?php print get_option('opening_text'); ?>
	            </p>
              </div>
              
            </div>
          </div>
          <?php //endif; ?>
        </div>
      </div>
      <div class="content w-col w-col-8">
	      <?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<h1 class="title"><?php the_title(); ?></h1>
        <p class="p"><?php the_content(); ?></p>
		<?php endwhile; endif; ?>
        <div class="content-item first-item w-clearfix">
          <div class="jolili-line-content-up"></div>
          <div class="jolili-line-content"></div>
          <div class="content-row w-row">
            <div class="content-row w-col w-col-8">
              <p class="content-item-p">Elke vrijdag van 17-20 u , reserveer tijdig uw plaats!</p>
            </div>
            <div class="w-col w-col-4"><img class="content-item-image" src="<?php echo get_template_directory_uri() ?>/images/14064012_1064297510333845_6103669927563593716_n__1__png.png" width="200">
            </div>
          </div>
        </div>
        <div class="content-item first-item w-clearfix">
          <div class="jolili-line-content-up left"></div>
          <div class="jolili-line-content"></div>
          <div class="content-row w-row">
            <div class="content-row w-col w-col-4"><img class="content-item-image" src="<?php echo get_template_directory_uri() ?>/images/14089126_1062427147187548_7400831291502616616_n-1.jpg" width="200">
            </div>
            <div class="w-col w-col-8">
              <p class="content-item-p">May your coffee be strong and your Monday be short. #takeawaykoffie</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
	//footer
	 get_footer(); ?>