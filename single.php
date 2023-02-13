<?php get_header(); ?>
<main>
  <section class="l-single p-single">
    <h2 class="p-single__title c-section-title">work</h2>
    <figure class="p-single__img">
      <?php the_post_thumbnail('large')?>
    </figure>
    <div class="p-single__subTitle-wrapper">
      <p class="p-single__subTitle">社員インタビュー</p>
    </div>
    <div class="l-second-inner">
      <h3 class="p-single__sub"><?php the_field('group_reason') ?></h3>
      <div class="p-single__occupation-wrapper">
        <p class="p-single__occupation"><?php the_field('group_name') ?><?php the_field('group_year') ?></p>
      </div>
    </div>
  </section>
  <section class="l-column p-column">
    <div class="l-inner">
      <div class="p-column__contents">
        <div class="p-column__content">
          <figure class="p-column__img">
            <img src="<?php the_field('group_column_img1') ?>" alt="紹介画像1">
          </figure>
          <div class="p-column__detail">
            <div class="p-column__title">
              <h4 class="c-column-title"><?php the_field('group_column_title1') ?></h4>
            </div>
            <div class="p-column__text-wrapper">
              <div class="p-column__text">
                <p class="c-solution-text"><?php the_field('group_column_text1') ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="p-column__content">
          <figure class="p-column__img">
            <img src="<?php the_field('group_column_img2') ?>" alt="紹介画像2">
          </figure>
          <div class="p-column__detail">
            <div class="p-column__title">
              <h4 class="c-column-title"><?php the_field('group_column_title2') ?></h4>
            </div>
            <div class="p-column__text-wrapper">
              <div class="p-column__text">
                <p class="c-solution-text"><?php the_field('group_column_text2') ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="p-column__content">
          <figure class="p-column__img">
            <img src="<?php the_field('group_column_bottom') ?>" alt="紹介画像3">
          </figure>
          <div class="p-column__detail">
            <div class="p-column__title">
              <h4 class="c-column-title"><?php the_field('group_column_title3') ?></h4>
            </div>
            <div class="p-column__text-wrapper">
              <div class="p-column__text">
                <p class="c-solution-text"><?php the_field('group_column_text3') ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="l-schedule p-schedule">
    <div class="l-inner">
      <div class="p-schedule__content">
        <div class="p-schedule__title-wrapper">
          <h3 class="p-schedule__title">1日のスケジュール</h3>
        </div>
        <div class="p-schedule__dl">
          <?php if (have_rows('group_schedule')) : ?>
            <?php while (have_rows('group_schedule')) : the_row(); ?>
              <div class="p-schedule__row">
                <div class="p-schedule__time-wrapper">
                  <time class="p-schedule__time"><?php the_sub_field('group_schedule_time'); ?></time>
                </div>
                <?php if (get_sub_field('group_schedule_img')) : ?>
                  <figure class="p-schedule__img">
                    <img src="<?php the_sub_field('group_schedule_img'); ?>" alt="9:00">
                  </figure>
                <?php endif; ?>
                <div class="p-schedule__text">
                  <p class="c-solution-text"><?php the_sub_field('group_schedule_text'); ?></p>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <div class="p-pager">
    <div class="l-inner">
      <div class="p-pager__content">
        <?php $prevpost = get_adjacent_post(false, '', true);
        if ($prevpost) : ?>
          <div class="p-pager__link-wrapper">
            <a href="<?php echo get_permalink($prevpost->ID); ?>" class="p-pager__link">
              <div class="p-pager__box">
                <p class="p-pager__prev">prev</p>
                <div class="p-pager__detail">
                  <figure class="p-pager__img">
                    <img src="<?php echo get_the_post_thumbnail($prevpost->ID); ?>" alt="前に戻る">
                  </figure>
                  <div class="p-pager__data">
                    <p class="p-pager__text">生産本部生産部</p>
                    <p class="p-pager__text">品質管理G</p>
                    <p class="p-pager__text">2020年入社</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php endif; ?>
        <div class="p-pager__center">
          <a href="<?php echo esc_url(home_url('/interview/')); ?>" class="p-pager__all">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/pager_center.png" alt="all">
          </a>
        </div>
        <?php $nextpost = get_adjacent_post(false, '', false);
        if ($nextpost) : ?>
          <div class="p-pager__link-wrapper--next">
            <a href="<?php echo get_permalink($nextpost->ID); ?>" class="p-pager__link">
              <div class="p-pager__box p-pager__box--next">
                <p class="p-pager__next">next</p>
                <div class="p-pager__detail p-pager__detail--next">
                  <figure class="p-pager__img">
                    <img src="<?php echo get_the_post_thumbnail($nextpost->ID); ?>" alt="前に戻る">
                  </figure>
                  <div class="p-pager__data">
                    <p class="p-pager__text">生産本部生産部</p>
                    <p class="p-pager__text">品質管理G</p>
                    <p class="p-pager__text">2020年入社</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php get_template_part('includes/banner'); ?>

</main>
<?php get_footer(); ?>