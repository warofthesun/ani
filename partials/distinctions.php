<?php

  // check if the flexible content field has rows of data
  if( have_rows('info_page_content') ): ?>
    <ul class="content__flexible">

    <?php
       // loop through the rows of data
      while ( have_rows('info_page_content') ) : the_row();

      if( get_row_layout() == 'distinctions' ): ?>
          <li class="distinctions">
            <a name="<?php $page_link = sanitize_title_for_query( get_sub_field('section_title') ); echo esc_attr( $page_link ); ?>"></a>
            <h2 class="reduced"><?php the_sub_field('header'); ?></h2>
            <!--h3><?php //the_sub_field('sub-header'); ?></h3-->
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
          </li>
        <?php endif; endif; endwhile; else :
          // no layouts found ?>
    </ul>

<?php  endif; ?>
