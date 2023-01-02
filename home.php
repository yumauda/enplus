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
              <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
            </figure>
            <div class="p-interview__detail">
              <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
              <p class="p-interview__cardTitle">2020年入社</p>
              <div class="p-interview__name-wrapper">
                <h3 class="p-interview__name">M.H</h3>
              </div>
            </div>
            <a href="#" class="p-interview__link"></a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>

      <!-- <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li>
      <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li>
      <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li>
      <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li>
      <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li>
      <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li>
      <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li>
      <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li>
      <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li>
      <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li>
      <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li>
      <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li>
      <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li>
      <li class="p-interview__list">
        <figure class="p-interview__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/card_img.jpg" alt="人物写真">
        </figure>
        <div class="p-interview__detail">
          <p class="p-interview__cardTitle">生産本部生産部品質管理G</p>
          <p class="p-interview__cardTitle">2020年入社</p>
          <div class="p-interview__name-wrapper">
            <h3 class="p-interview__name">M.H</h3>
          </div>
        </div>
        <a href="#" class="p-interview__link"></a>
      </li> -->
    </ul>
  </div>
</main>
<?php get_footer(); ?>