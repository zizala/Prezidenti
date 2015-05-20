<?php if(have_posts()) while (have_posts()) : the_post(); ?>
	<section style="background-color: <?php the_field('barva-pozadi'); ?>;">
    	<div class="container">
            <div class="prezident-poradi">
                <?php the_field('poradi'); ?>. prezident
            </div>
            <div class="prezident-poradi-big">
            	<svg version="1.1" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 250 50" enable-background="new 0 0 250 50" xml:space="preserve">
                <path id="SVGID_x5F_1_x5F_" fill="none" d="M0,155.8c0-69,56-125,125-125s125,56,125,125"/>
                <text><textPath  xlink:href="#SVGID_x5F_1_x5F_" startOffset="44.7%">
                <tspan fill="#FFFFFF"><?php the_field('poradi'); ?>. prezident</tspan></textPath>
                </text>
                </svg>
            </div>
            <div class="prezident-jmeno" style="color: <?php the_field('barva-pisma'); ?>;">
            	<?php the_title(); ?>
            </div> 
            <div class="citat">
                <div class="uvozovka1">"</div>
                	<?php the_field('citat'); ?> 
                <div class="uvozovka2">"</div>
            </div> 	     
        </div>
        <img src="<?php the_field('obrazek'); ?>" alt="<?php the_title(); ?>" class="prezident-img">
        <div class="rok">
        	<?php the_field('rok-od'); ?>-<?php the_field('rok-do'); ?>
        </div>
    </section>
<?php endwhile; ?> 	