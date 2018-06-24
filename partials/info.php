<?php

  // check if the flexible content field has rows of data
  if( have_rows('info_page_content') ):

       // loop through the rows of data
      while ( have_rows('info_page_content') ) : the_row();

          if( get_row_layout() == 'content_block' ): ?>

            <h2><?php the_sub_field('header'); ?></h2>
            <h3><?php the_sub_field('sub-header'); ?></h3>
            <?php the_sub_field('content');

          elseif( get_row_layout() == 'distinctions' ): ?>
          <h2><?php the_sub_field('header'); ?></h2>
          <h3><?php the_sub_field('sub-header'); ?></h3>
            <?php if( have_rows('distinctions-repeater') ): ?>
              <ul>
                <?php while ( have_rows('distinctions-repeater') ) : the_row(); ?>
                <li>
                  <?php the_sub_field('year');
                  the_sub_field('distinction'); ?>
                </li>
                <?php endwhile; ?>
              </ul>

          <?php the_sub_field('content'); ?>
        <?php endif; ?>
          <?php elseif( get_row_layout() == 'in-house_procedures' ): ?>

            <h2><?php the_sub_field('header'); ?></h2>
            <h3><?php the_sub_field('sub-header'); ?></h3>

            <?php

              // check if the nested repeater field has rows of data
              if( have_rows('in-house_procedures-repeater') ):

              echo '<ul>';

              // loop through the rows of data
                while ( have_rows('in-house_procedures-repeater') ) : the_row(); ?>

                <li>
                  <?php the_sub_field('procedure'); ?>
                </li>

                <?php	endwhile; 	echo '</ul>'; 	endif; ?>
                <?php the_sub_field('content');

              endif;


      endwhile;

  else :

      // no layouts found

  endif;

?>
