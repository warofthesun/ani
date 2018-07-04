<?php

  // check if the flexible content field has rows of data
  if( have_rows('specialties_content') ): ?>
    <ul class="content__flexible">

    <?php
       // loop through the rows of data
      while ( have_rows('specialties_content') ) : the_row();

      if( get_row_layout() == 'content_section' ): ?>
          <li class="education">
            <a name="<?php $page_link = sanitize_title_for_query( get_sub_field('section_title') ); echo esc_attr( $page_link ); ?>"></a>
            <h2 class="reduced"><?php the_sub_field('section_title'); ?></h2>
            <!--h3><?php //the_sub_field('sub-header'); ?></h3-->
              <?php if( have_rows('section_items') ): ?>
                <ul>
                  <?php while ( have_rows('section_items') ) : the_row(); ?>
                  <li class="row">
                    <div>
                      <?php the_sub_field('item'); ?>
                    </div>
                  </li>
                  <?php endwhile; ?>
                </ul>
          </li>
        <?php endif; endif; endwhile; else :
          // no layouts found ?>
    </ul>

<?php  endif; ?>
