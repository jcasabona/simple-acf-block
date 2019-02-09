<?php
/**
 * Block Name: Timeline
 *
 * This is the template that displays the testimonial block.
 */

// create id attribute for specific styling
$id = 'timeline-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<style type="text/css">
   .timeline { 
       border: 1px solid #999999;
       padding: 10px;
   }

   .timeline li {
        border-bottom: 1px solid #999999;
        padding: 5px;
        list-style-type: none;
   }

   .timeline li .year {
       color: #880000;
       font-weight: bold;
       text-align: left;
       display: inline-block;
       width: 25%;
   }

   .timeline li .event {
       text-align: right;
       display: inline-block;
       width: 70%;
   }

</style>
<ol class="timeline <?php echo $align_class; ?>" id="<?php echo $id; ?>">
    <?php
        if ( have_rows( 'events' ) ) :
        while ( have_rows( 'events' ) ) : the_row();
    ?>
        <li><span class="year"><?php the_sub_field( 'event_year' ); ?></span> <span class="event"><?php the_sub_field( 'event' ); ?></li>
    <?php
        endwhile;
        endif;
    ?>
</ol>