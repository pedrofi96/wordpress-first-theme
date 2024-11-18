<?php get_header();
//SIngle serve para ir as páginas dos posts.

?>

<div class="row">

  <div class="col-md-8 col-sm-12">

    <!--
   Se houver posts ele entra no loop while mostrando os posts, entretanto
  caso não haja ele pega o template de error 404
  
  -->
    <?php if (have_posts()) : while (have_posts()) : the_post() ?>
        <div class="blog-post">
          <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded')); ?>

          <h3 class="mb-3 mt-4 pb-2 border-bottom"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

          <?php the_content(); ?>

          <p class="text-muted">Publicado em: <span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y'); ?></span></p>
        </div>

        <?php comments_template(); ?>

      <?php endwhile; ?>
    <?php else: get_404_template();
    endif; ?>

  </div>



  <?php get_sidebar() ?>
</div>

</div>

<?php get_footer() ?>