<?php get_header(); ?>
<main>
  <section class="l-page-mv p-page-mv p-page-mv--career">
    <h2 class="c-section-title">recruiting</h2>
    <p class="p-page-mv__text">キャリア募集要項</p>
  </section>
  <section class="l-invite p-invite">
    <div class="l-inner">
      <div class="p-invite__content">
        <div class="p-invite__title">
          <h3 class="c-page-sectionTitle">募集案内</h3>
        </div>
        <ul class="p-invite__lists">
          <?php if (get_field('occupation')) : ?>
            <?php if (have_rows('occupation')) : ?>
              <?php while (have_rows('occupation')) : the_row(); ?>
                <li class="p-invite__list">
                  <a href="<?php the_sub_field('occupation_kind'); ?>" class="p-invite__link" download><?php the_sub_field('occupation_name'); ?></a>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          <?php else : ?>
            <p class="c-solution-text">現在応募している職種はございません。</p>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </section>
  <section class="l-flow p-flow">
    <div class="l-inner">
      <div class="p-flow__content">
        <div class="p-flow__title">
          <h3 class="c-page-sectionTitle">選考フロー</h3>
        </div>
        <div class="p-flow__dl">
          <?php if (have_rows('flow')) : ?>
            <?php while (have_rows('flow')) : the_row(); ?>
              <div class="p-flow__row">
                <div class="p-flow__dt">
                  <p class="p-flow__subTitle" data-number="<?php the_sub_field('flow_number'); ?>"><?php the_sub_field('flow_title'); ?></p>
                </div>
                <div class="p-flow__dd">
                  <p class="p-flow__description"><?php the_sub_field('flow_detail'); ?></p>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <div class="l-recruit p-recruit">
    <div class="l-inner">
      <div class="p-recruit__title">
        <h3 class="c-page-sectionTitle">募集要項</h3>
      </div>
      <div class="p-recruit__table p-table">
        <table class="p-table__table p-table__table--possible">
          <?php if (have_rows('recruit')) : ?>
            <?php while (have_rows('recruit')) : the_row(); ?>
              <tr>
                <th class="p-table__item"><?php the_sub_field('recruit_title'); ?></th>
                <td class="p-table__body">
                  <div class="p-table__select">
                    <p class="p-table__top"><?php the_sub_field('recruit_detail'); ?></p>
                  </div>
                </td>
              </tr>
            <?php endwhile; ?>
          <?php endif; ?>
        </table>
      </div>
    </div>
  </div>
  <div class="l-recruit p-recruit p-recruit--bottom">
    <div class="l-inner">
      <div class="p-recruit__title">
        <h3 class="c-page-sectionTitle">採用後の待遇</h3>
      </div>
      <div class="p-recruit__table p-table">
        <table class="p-table__table p-table__table--possible">
          <?php if (have_rows('after')) : ?>
            <?php while (have_rows('after')) : the_row(); ?>
              <tr>
                <th class="p-table__item"><?php the_sub_field('after_title'); ?></th>
                <td class="p-table__body">
                  <div class="p-table__select">
                    <p class="p-table__top"><?php the_sub_field('after_detail'); ?></p>
                  </div>
                </td>
              </tr>
            <?php endwhile; ?>
          <?php endif; ?>
        </table>
      </div>
    </div>
  </div>
  <section class="l-invite p-invite p-invite--bottom">
    <div class="l-inner">
      <div class="p-invite__content">
        <div class="p-invite__title">
          <h3 class="c-page-sectionTitle">労働施策総合推進法に基づく<br class="u-mobile">中途採用比率の公表</h3>
        </div>
        <div class="p-invite__text-wrapper">
          <p class="p-invite__text">当社における正規雇用労働者の中途採用比率は下記の通りでございます。<br>
            公表日：2022年8月1日</p>
        </div>
        <ul class="p-invite__lists">
          <li class="p-invite__list">
            <div class="p-invite__link p-invite__list--percent">
              <p class="p-invite__year">2019年度</p>
              <p class="p-invite__percent">41%</p>
            </div>
          </li>
          <li class="p-invite__list">
            <div class="p-invite__link p-invite__list--percent">
              <p class="p-invite__year">2020年度</p>
              <p class="p-invite__percent">30%</p>
            </div>
          </li>
          <li class="p-invite__list">
            <div class="p-invite__link p-invite__list--percent">
              <p class="p-invite__year">2021年度</p>
              <p class="p-invite__percent">45%</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <?php get_template_part('includes/banner'); ?>

</main>
<?php get_footer(); ?>