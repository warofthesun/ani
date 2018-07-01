<?php
 if ( get_field( 'include_info_nav' ) ): include 'info-nav.php'; else: endif;

  // check if the flexible content field has rows of data
  if( have_rows('info_page_content') ): ?>
    <ul class="content__flexible">

    <?php
       // loop through the rows of data
      while ( have_rows('info_page_content') ) : the_row();
          if( get_row_layout() == 'content_block' ): ?>

          <li class="block">
            <a name="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"></a>
            <h2><?php the_sub_field('header'); ?></h2>
            <h3><?php the_sub_field('sub-header'); ?></h3>
            <?php the_sub_field('content'); ?>
          </li>
        <?php elseif( get_row_layout() == 'distinctions' ): ?>

          <li class="distinctions">
            <a name="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"></a>
            <h2><?php the_sub_field('header'); ?></h2>
            <h3><?php the_sub_field('sub-header'); ?></h3>
              <?php if( have_rows('distinctions-repeater') ): ?>
                <ul>
                  <?php while ( have_rows('distinctions-repeater') ) : the_row(); ?>
                  <li class="row">
                    <div>
                      <?php if (get_sub_field('year') ): ?>
                      <span><?php the_sub_field('year'); ?></span> -
                    <?php endif; ?>
                    </div>
                    <div>
                      <?php the_sub_field('distinction'); ?>
                    </div>

                  </li>
                  <?php endwhile; ?>
                </ul>

            <?php the_sub_field('content'); ?>
          </li>
        <?php endif; ?>
      <?php elseif( get_row_layout() == 'fees' ): ?>

        <li class="fees">
          <a name="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"></a>
          <h2><?php the_sub_field('header'); ?></h2>
          <h3><?php the_sub_field('sub-header'); ?></h3>
          <?php the_sub_field('upper_content'); ?>
            <?php if( have_rows('fees-repeater') ): ?>
              <ul class="fees--repeater">
                <li class="row description">
                  <div>CPT</div>
                  <div>CPT Description</div>
                  <div>Medicare Limiting Charge</div>
                  <div>Prompt Pay</div>
                </li>
                <?php while ( have_rows('fees-repeater') ) : the_row(); ?>
                <li class="row">
                  <div><?php the_sub_field('cpt'); ?></div>
                  <div><?php the_sub_field('cpt_description'); ?></div>
                  <div><?php the_sub_field('medicare_limiting_charge'); ?></div>
                  <div><?php the_sub_field('prompt_pay'); ?></div>
                </li>
                <?php endwhile; ?>
              </ul>
          <?php the_sub_field('content'); ?>
        </li>
      <?php endif; ?>

          <?php elseif( get_row_layout() == 'in-house_procedures' ): ?>

            <li class="in-house_procedures">
              <a name="<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"></a>
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
                <?php the_sub_field('content'); ?>
              </li>
            <?php endif;


      endwhile;

  else :

      // no layouts found ?>
</ul>

<?php  endif; ?>
