<?php get_header(); ?>
<main>
  <section class="l-mv p-mv">
    <h3 class="c-section-title">あああ</h3>
  </section>
  <div class="l-tomorrow p-tomorrow">
    <ul class="p-tomorrow__lists">
      <li class="p-tomorrow__list p-tomorrow__list--left">
        <picture class="p-tomorrow__left">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/tomorrow_left.png" media="(min-width: 768px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/tomorrow_left_sp.png" alt="よりよき明日を目指して">
        </picture>
      </li>
      <li class="p-tomorrow__list p-tomorrow__list--center">
        <picture class="p-tomorrow__img">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/tomorrow_text.png" media="(min-width: 768px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/tomorrow_text_sp.png" alt="よりよき明日を目指して">
        </picture>
      </li>
      <li class="p-tomorrow__list p-tomorrow__list--right">
        <picture class="p-tomorrow__right">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/tomorrow_right.png" media="(min-width: 768px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/tomorrow_right_sp.png" alt="よりよき明日を目指して">
        </picture>
      </li>
    </ul>
  </div>
  <section class="l-target p-target" data-company="target">
    <div class="l-inner">
      <a class="p-target__hover" href="<?php echo esc_url(home_url('/reading/')); ?>">
        <div class="p-target__content">
          <div class="p-target__title-wrapper">
            <div class="p-target__title">
              <h3 class="c-company-title">company</h3>
            </div>
            <div class="p-target__jp">
              <div class="p-target__smallTitle">
                <p class="c-small-title">先をよむ</p>
              </div>
              <div class="p-target__subTitle">
                <h4 class="c-big-title">ターゲット領域</h4>
              </div>
            </div>
            <div class="p-target__btn">
              <div class="c-btn">Read&nbsp;more</div>
            </div>
          </div>
          <figure class="p-target__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/target_img.jpg" alt="先をよむターゲット領域">
          </figure>
        </div>
      </a>
    </div>
  </section>
  <section class="l-pioneer p-pioneer" data-company="pioneer">
    <div class="l-inner">
      <a href="<?php echo esc_url(home_url('/other/')); ?>" class="p-pioneer__hover">
        <div class="p-pioneer__content">
          <div class="p-pioneer__title-wrapper">
            <div class="p-pioneer__title">
              <h3 class="c-company-title">company</h3>
            </div>
            <div class="p-pioneer__jp">
              <div class="p-pioneer__subTitle">
                <h4 class="c-big-title">“他がやらない”</h4>
              </div>
              <div class="p-pioneer__smallTitle">
                <p class="c-small-title">エンプラスの事業</p>
              </div>
              <div class="p-pioneer__btn">
                <div class="c-btn">Read&nbsp;more</div>
              </div>

            </div>
          </div>
          <figure class="p-pioneer__img1">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/pioneer_img1.jpg" alt="先をよむターゲット領域">
          </figure>
        </div>
      </a>
    </div>
  </section>
  <section class="l-target p-target" data-company="challenge">
    <div class="l-inner">
      <a href="<?php echo esc_url(home_url('/challenge/')); ?>" class="p-target__hover">
        <div class="p-target__content">
          <div class="p-target__title-wrapper">
            <div class="p-target__title">
              <h3 class="c-company-title">company</h3>
            </div>
            <div class="p-target__jp">
              <div class="p-target__smallTitle">
                <p class="c-small-title">エンプラス</p>
              </div>
              <div class="p-target__subTitle">
                <h4 class="c-big-title">挑戦<span>の</span>軌跡</h4>
              </div>
              <div class="p-target__btn">
                <div class="c-btn">Read&nbsp;more</div>
              </div>
            </div>
          </div>
          <figure class="p-target__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/top_challenge_img.jpg" alt="挑戦の軌跡">
          </figure>
        </div>
      </a>
    </div>
  </section>
  <section class="l-pioneer p-pioneer" data-company="future">
    <div class="l-inner">
      <a href="<?php echo esc_url(home_url('/future/')); ?>" class="p-pioneer__hover">
        <div class="p-pioneer__content">
          <div class="p-pioneer__title-wrapper">
            <div class="p-pioneer__title">
              <h3 class="c-company-title">company</h3>
            </div>
            <div class="p-pioneer__jp">
              <div class="p-pioneer__smallTitle">
                <p class="c-small-title">エンプラスが</p>
              </div>
              <div class="p-pioneer__subTitle p-pioneer__subTitle--next">
                <h4 class="c-big-title">目指すこと</h4>
              </div>

              <div class="p-pioneer__btn">
                <div class="c-btn">Read&nbsp;more</div>
              </div>

            </div>
          </div>
          <figure class="p-pioneer__img1">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/message_img.jpg" alt="先をよむターゲット領域">
          </figure>
        </div>
      </a>
    </div>
  </section>
  <section class="l-top-number p-top-number">
    <div class="l-menu-inner">
      <a href="<?php echo esc_url(home_url('/number/')); ?>" class="p-top-number__content">
        <div class="p-top-number__title-wrapper">
          <h3 class="p-top-number__title">数字を見る</h3>
        </div>
      </a>
    </div>
  </section>
  <section class="l-work p-work">
    <div class="l-menu-inner">
      <a href="<?php echo esc_url(home_url('/introduce/')); ?>" class="p-work__content">
        <div class="p-work__title-wrapper">
          <h3 class="p-work__title">職種紹介</h3>
        </div>
      </a>
    </div>
  </section>
  <section class="l-slider p-slider">
    <div class="l-work-inner">
      <div class="p-slider__inner">
        <div class="p-slider__title-wrapper">
          <h3 class="p-slider__title">社員インタビュー</h3>
        </div>
        <div class="p-slider__btn">
          <a href="<?php echo esc_url(home_url('/interview/')); ?>" class="c-btn">Read&nbsp;more</a>
        </div>
      </div>
    </div>
    <!-- Slider main container -->
    <div class="swiper p-slider__swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <?php
        // パラメータの設定
        $args = array(
          'posts_per_page' => 15,
          'post_status' => 'publish',
          'post_type' => 'post',
          'orderby' => 'date',
        );
        // WP_Queryインスタンスの生成
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
          while ($my_query->have_posts()) : $my_query->the_post();
        ?>
            <div class="swiper-slide p-slider__card">
              <a href="<?php the_permalink(); ?>" class="p-slider__link">
                <figure class="p-slider__img">
                  <img src="<?php the_field('group_img_top') ?>" alt="<?php the_title(); ?>">
                </figure>
                <div class="p-slider__detail">
                  <h4 class="p-slider__subTitle"><?php the_field('group_name') ?></h4>
                  <p class="p-slider__text"><?php the_field('group_year') ?></p>
                </div>
              </a>
            </div>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
  <section class="l-menu p-menu">
    <div class="l-second-inner">
      <div class="p-menu__content">
        <ul class="p-menu__cards">
          <li class="p-menu__card">
            <figure class="p-menu__img">
              <img src="<?php echo get_template_directory_uri() ?>/images/common/menu_img1.jpg" alt="研修制度">
            </figure>
            <div class="p-menu__detail">
              <h3 class="p-menu__title">研修制度</h3>
              <div class="p-menu__btn">
                <a href="<?php echo esc_url(home_url('/training/')); ?>" class="c-btn">Read&nbsp;more</a>
              </div>
            </div>
          </li>
          <li class="p-menu__card">
            <figure class="p-menu__img">
              <img src="<?php echo get_template_directory_uri() ?>/images/common/menu_img2.jpg" alt="福利厚生">
            </figure>
            <div class="p-menu__detail">
              <h3 class="p-menu__title">福利厚生</h3>
              <div class="p-menu__btn">
                <a href="<?php echo esc_url(home_url('/environment/')); ?>" class="c-btn">Read&nbsp;more</a>
              </div>
            </div>
          </li>
          <li class="p-menu__card">
            <figure class="p-menu__img">
              <img src="<?php echo get_template_directory_uri() ?>/images/common/menu_img3.jpg" alt="エンプラスの取り組み">
            </figure>
            <div class="p-menu__detail">
              <h3 class="p-menu__title">ギャラリー</h3>
              <div class="p-menu__btn">
                <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="c-btn">Read&nbsp;more</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="l-information p-information">
    <div class="l-inner">
      <div class="p-information__title-wrapper">
        <h3 class="p-information__title">採用情報</h3>
      </div>
      <div class="p-information__content">
        <div class="p-information__btn-wrapper">
          <a href="<?php echo esc_url(home_url('/question/')); ?>" class="p-information__btn">Q&A</a>
        </div>
        <div class="p-information__btn-wrapper">
          <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="p-information__btn">新卒採用募集要項</a>
        </div>
        <div class="p-information__btn-wrapper">
          <a href="<?php echo esc_url(home_url('/career/')); ?>" class="p-information__btn">中途採用募集要項</a>
        </div>
      </div>
    </div>
    <figure class="p-information__img">
      <img src="<?php echo get_template_directory_uri() ?>/images/common/recruit_bg.jpg" alt="採用情報">
    </figure>
  </section>
  <?php get_template_part('includes/banner'); ?>
</main>
<?php get_footer(); ?>