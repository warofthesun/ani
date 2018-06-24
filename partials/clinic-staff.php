<section class="content staff wrap row">
<?php
// check if the repeater field has rows of data
if( have_rows('staff') ):
  $i=0;
  // loop through the rows of data
    while ( have_rows('staff') ) : the_row(); ?>

    <?php
       $attachment_id = get_sub_field('photo');
       $size = "staff-image"; // (thumbnail, medium, large, full or custom size)
       $image = wp_get_attachment_image_src( $attachment_id, $size );
       // url = $image[0];
       // width = $image[1];
       // height = $image[2];
     ?>
     <?php //if ( $i > 4 ) { break; } ?>
     <?php if ( get_sub_field( 'extra_info_tf' ) ): ?>
       <div class="row">
       <div class="col-xs-12 col-sm-6 content-block extra-info" style="background-image:url('<?php echo $image[0]; ?>')">
         <?php if ( get_sub_field( 'category' ) ): ?>
          <div class="staff__category col-xs-12"><?php the_sub_field('category'); ?></div>
        <?php endif; ?>
        <div>

          <div class="staff__name"><span class="highlight highlight--wrapping"><?php the_sub_field('first_name'); ?></br><?php the_sub_field('last_name'); ?></span></div>
          <div class="staff__role"><span class="highlight highlight--wrapping"><?php the_sub_field('role'); ?></span></div>
          <div class="staff__qualifications"><span class="highlight highlight--wrapping"><?php the_sub_field('qualifications'); ?></span></div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 content-block extra-info"><?php the_sub_field('extra_info'); ?></div>
      </div>
      <?php else: // field_name returned false ?>

        <div class="col-xs-12 col-sm-4 content-block" style="background-image:url('<?php echo $image[0]; ?>');">
          <?php if ( get_sub_field( 'category' ) ): ?>
           <div class="staff__category col-xs-12"><?php the_sub_field('category'); ?></div>
         <?php endif; ?>
          <div>
            <div class="staff__name"><span class="highlight highlight--wrapping"><?php the_sub_field('first_name'); ?></br><?php the_sub_field('last_name'); ?></span></div>
            <div class="staff__role"><span class="highlight highlight--wrapping"><?php the_sub_field('role'); ?></span></div>
            <div class="staff__qualifications"><span class="highlight highlight--wrapping"><?php the_sub_field('qualifications'); ?></span></div>
          </div>
        </div>

      <?php endif; // end of if field_name logic ?>

      <?php $i++; ?>
    <?php endwhile;
else :
    // no rows found
endif;//endwhile;
?>

</section>
