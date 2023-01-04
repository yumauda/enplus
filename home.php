<?php get_header(); ?>
<main>
  <section class="l-page-mv p-page-mv p-page-mv--interview">
    <h2 class="c-section-title">work</h2>
    <img src="<?php echo get_template_directory_uri() ?>/images/common/page_interview_img.jpg" alt="社員インタビュー">
  </section>
  <div class="l-inner">

    <ul class="p-interview">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
          <?php the_post(); ?>
          <li class="p-interview__list">
            <figure class="p-interview__img">
              <img src="<?php the_post_thumbnail('large'); ?>" alt="人物写真">
            </figure>
            <div class="p-interview__detail">
              <p class="p-interview__cardTitle"><?php the_field('group_name')?></p>
              <p class="p-interview__cardTitle"><?php the_field('group_year')?></p>
              <div class="p-interview__name-wrapper">
                <h3 class="p-interview__name"><?php the_title(); ?></h3>
              </div>
            </div>
            <a href="<?php the_permalink(); ?>" class="p-interview__link"></a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
  </div>
</main>
<?php get_footer(); ?>