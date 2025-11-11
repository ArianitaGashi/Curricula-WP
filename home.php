<?php
$news = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => -1,
    'category_name'  => 'News',
    'orderby'        => 'date',
    'order'          => 'DESC',
  ]); ?>

<?php get_header(); ?>

<main class="blog-list">
  <h1 class="blog-title">Latest Blog Posts</h1>

  <?php if ($news->have_posts()):  ?>
    <?php while ($news->have_posts()): $news->the_post(); ?>
      <article <?php post_class('blog-item'); ?>>
        <h2 class="blog-item__title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <p class="blog-item__excerpt">
          <?php the_excerpt(); ?>
        </p>
      </article>
    <?php endwhile; ?>

    <nav class="pagination">
      <?php the_posts_pagination(); ?>
    </nav>

  <?php else : ?>
    <p>No posts found</p>
  <?php endif;   wp_reset_postdata();?>
</main>

<?php get_footer(); ?>
