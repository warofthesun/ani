<ul class="info-nav">
<?php

  // check if the flexible content field has rows of data
  if( have_rows('info_page_content') ): ?>

      <li>
        jump to
      </li>

      <?php
         // loop through the rows of data
        while ( have_rows('info_page_content') ) : the_row();
            if( get_row_layout() == 'content_block' ): ?>

            <li>
              <a href="#<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"><?php the_sub_field('header'); ?></a>
            </li>
          <?php elseif( get_row_layout() == 'distinctions' ): ?>

            <li>
              <a href="#<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"><?php the_sub_field('header'); ?></a>
            </li>

            <?php elseif( get_row_layout() == 'in-house_procedures' ): ?>

              <li>
                <a href="#<?php $page_link = sanitize_title_for_query( get_sub_field('header') ); echo esc_attr( $page_link ); ?>"><?php the_sub_field('header'); ?></a>
              </li>


        <?php endif; endwhile; else :

      // no layouts found ?>

<?php  endif; ?>
</ul>
