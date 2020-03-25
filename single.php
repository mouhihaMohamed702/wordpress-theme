<?php get_header(); ?>
<section class="section">
<div class="container">

    <?php if(has_post_thumbnail()):?>

        <img src="<?php
             the_post_thumbnail_url('post-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">

    <?php endif;?>
   
    <h1>
     <?php the_title();?>
     </h1>

    <?php
     get_template_part('includes/section','postcontent'); 
     ?>


</div>
</section>


<?php
 get_footer(); 
 ?>