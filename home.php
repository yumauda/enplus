<?php get_header(); ?>
<main>
  <section class="l-page-mv p-page-mv p-page-mv--interview">
    <h2 class="c-section-title">work</h2>
    <p class="p-page-mv__text">社員インタビュー</p>
  </section>
  <div class="l-inner">
    <ul class="p-interview">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
          <?php the_post(); ?>
          <li class="p-interview__list">
            <a href="<?php the_permalink(); ?>" class="p-interview__link">
              <figure class="p-interview__img">
                <img src="<?php the_field('group_img_top') ?>" alt="人物写真">
              </figure>
              <div class="p-interview__detail">
                <p class="p-interview__cardTitle"><?php the_field('group_name') ?></p>
                <p class="p-interview__cardTitle"><?php the_field('group_year') ?></p>
                <div class="p-interview__name-wrapper">
                  <h3 class="p-interview__name"><?php the_title(); ?></h3>
                </div>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
  </div>
  <?php get_template_part('includes/banner'); ?>

</main>
<?php get_footer(); ?>