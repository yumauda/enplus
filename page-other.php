<?php get_header(); ?>
<main>
  <section class="l-page-mv p-page-mv p-page-mv--other">
    <h2 class="c-section-title">company</h2>
    <p class="p-page-mv__text">"他がやらない"エンプラスの事業</p>
  </section>
  <section class="l-wide p-wide">
    <div class="l-inner">
      <div class="p-wide__content">
        <div class="p-wide__title-wrapper">
          <h3 class="c-page-sectionTitle">幅広い！<br class="u-mobile">エンプラスの活躍分野</h3>
        </div>
        <div class="p-wide__text-wrapper">
          <p class="c-page-text">エンプラスの活躍フィールドは実にさまざま。<br class="u-mobile">部品でできている製品であれば、<br>どんなものでも活躍できる可能性を<br class="u-mobile">秘めています。</p>
        </div>
      </div>
      <div class="p-wide__btns">
        <div class="p-wide__btn-wrapper--mecha">
          <a href="<?php echo esc_url(home_url('/other#conductor')); ?>" class="p-wide__btn">半導体分野</a>
        </div>
        <div class="p-wide__btn-wrapper--optics">
          <a href="<?php echo esc_url(home_url('/other#conductor')); ?>" class="p-wide__btn">ライフサイエンス分野</a>
        </div>
        <div class="p-wide__btn-wrapper--conductor">
          <a href="<?php echo esc_url(home_url('/other#optics')); ?>" class="p-wide__btn">光学分野</a>
        </div>
        <div class="p-wide__btn-wrapper--bio">
          <a href="<?php echo esc_url(home_url('/other#mecha')); ?>" class="p-wide__btn">メカ分野</a>
        </div>
        <figure class="p-wide__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/wide_img.png" alt="エンプラスの活躍分野">

        </figure>
      </div>
      <div class="p-wide__subText-wrapper">
        <p class="p-wide__subText">エンプラスの製品は、決して表からは見えないけれど、自動車、家電製品、ライフサイエンス、インターネット、照明、など４つの分野で活躍しています。<br>
          未来に向けては、私たちの生活に必要不可欠なEssential領域に対してソリューションを提供し、社会課題を解決し、豊かで活力ある未来に貢献していきます。<br>
          ※Essential領域：人と地球のQOL （クオリティ・オブ・ライフ）を高める領域</p>
      </div>
    </div>
  </section>
  <section class="l-technique p-technique">
    <div class="l-inner">
      <div class="p-technique__content">
        <div class="p-technique__title-wrapper">
          <h3 class="p-technique__title">世界の最先端技術を追求し､<br>
            将来のモノ・世の中を予測する</h3>
        </div>
        <div class="p-technique__detail">
          <figure class="p-technique__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/technique_img.png" alt="世界の最先端技術を追求し、将来のモノ・世の中を予測する">
          </figure>
          <div class="p-technique__text">
            <p class="c-solution-text">エンプラスは創業時から「つぶれない会社」であることを大切にし、企業活動をしてきました。<br>
              その時代に必要とされる製品は何か？<br>
              既成概念にとらわれず、常に「新しい」を追い求めてきた結果、現在の幅広い事業領域に結びついています。</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="l-conductor p-conductor" id="conductor">
    <div class="p-conductor__title">
      <h3 class="c-solution-title c-solution-title--long" data-solution="semiconductor">半導体分野</h3>
    </div>
    <div class="l-inner">
      <div class="p-conductor__contents">
        <div class="p-conductor__content">
          <figure class="p-conductor__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/conductor_img.jpg" alt="半導体機器事業">
          </figure>
          <div class="p-conductor__detail">
            <div class="p-conductor__subTitle">
              <h4 class="c-solution-subTitle" data-subtitle="Semiconductor Business">スマート社会の<br>実現に貢献</h4>
            </div>
            <div class="p-conductor__row">
              <div class="p-conductor__text">
                <p class="c-solution-text">私たちの生活に欠かせない半導体。スマート社会の実現に向け、より高品質・高性能な半導体が求められています。エンプラスの製品であるICソケットは半導体製造の後工程の出荷前検査で、高い信頼性の半導体を世の中に提供するために貢献しています。</p>
              </div>
              <div class="p-conductor__sub">
                <figure class="p-conductor__small">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/conductor_sub1.jpg" alt="パーソインソケット">
                  <div class="p-conductor__small-text">
                    <p class="c-solution-text">パーソインソケット</p>
                  </div>
                </figure>
                <figure class="p-conductor__small">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/conductor_sub2.jpg" alt="テストソケット">
                  <div class="p-conductor__small-text">
                    <p class="c-solution-text">テストソケット</p>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p-conductor__under p-icons">
        <div class="p-icons__box">
          <p class="p-icons__boxText">こんなところで社会に貢献！</p>
          <div class="p-icons__icons">
            <figure class="p-icons__icon p-icons__icon--car">
              <img src="<?php echo get_template_directory_uri() ?>/images/common/icon_car.png" alt="自動車">
              <p class="p-icons__icon-text">自動車</p>
            </figure>
            <figure class="p-icons__icon p-icons__icon--pc">
              <img src="<?php echo get_template_directory_uri() ?>/images/common/icon_pc.png" alt="サーバー・PC">
              <p class="p-icons__icon-text">サーバー・PC</p>
            </figure>
            <figure class="p-icons__icon">
              <img class="p-icons__icon--mobile" src="<?php echo get_template_directory_uri() ?>/images/common/icon_mobile.png" alt="モバイル機器向け">
              <p class="p-icons__icon-text">モバイル機器向け</p>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="l-life p-life" id="life">
    <div class="p-life__title">
      <h3 class="c-solution-title c-solution-title--long" data-solution="life science">ライフサイエンス分野</h3>
    </div>
    <div class="l-inner">
      <div class="p-life__contents">
        <div class="p-life__content">
          <figure class="p-life__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/life_img.jpg" alt="ライフサイエンス分野">
          </figure>
          <div class="p-life__detail">
            <div class="p-life__subTitle">
              <h4 class="c-solution-subTitle" data-subtitle="Life Science Business">安心安全・信頼される<br>医療に貢献</h4>
            </div>
            <div class="p-life__row">
              <div class="p-life__text">
                <p class="c-solution-text">ライフサイエンス分野では、樹脂製マイクロ流路チップを用いた生化学分析、PCR検査等の即時検査、迅速な創薬開発に貢献しています。また環境分野、食品衛生分野への応用にも取り組んでいます。</p>
              </div>
              <div class="p-life__sub">
                <figure class="p-life__small">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/life_sub.jpg" alt="パーソインソケット">
                  <div class="p-life__small-text">
                    <p class="c-solution-text">マイクロ流路チップ</p>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p-life__under p-icons">
        <div class="p-icons__box">
          <p class="p-icons__boxText">こんなところで社会に貢献！</p>
          <div class="p-icons__icons">
            <figure class="p-icons__icon p-icons__icon--gene">
              <img src="<?php echo get_template_directory_uri() ?>/images/common/icon_gene.png" alt="遺伝子検査">
              <p class="p-icons__icon-text">遺伝子検査</p>
            </figure>
            <figure class="p-icons__icon p-icons__icon--medical">
              <img src="<?php echo get_template_directory_uri() ?>/images/common/icon_medical.png" alt="創薬開発">
              <p class="p-icons__icon-text">創薬開発</p>
            </figure>
            <figure class="p-icons__icon p-icons__icon--food">
              <img class="p-icons__icon--food" src="<?php echo get_template_directory_uri() ?>/images/common/icon_food.png" alt="食品・農業">
              <p class="p-icons__icon-text">食品・農業</p>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="l-digital p-digital" id="digital">
    <div class="p-digital__title">
      <h3 class="c-solution-title c-solution-title--long" data-solution="digital communication">半導体分野</h3>
    </div>
    <div class="l-inner">
      <div class="p-digital__contents">
        <div class="p-digital__content">
          <figure class="p-digital__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/digital_img.jpg" alt="デジタル・インフラ業界の豊かな社会の発展に貢献"">
          </figure>
          <div class=" p-digital__detail">
            <div class="p-digital__subTitle">
              <h4 class="c-solution-subTitle" data-subtitle="Network Solution">デジタル・インフラ業界の<br>豊かな社会の発展に貢献</h4>
            </div>
            <div class="p-digital__row">
              <div class="p-digital__text">
                <p class="c-solution-text">さまざまなものがインターネットにつながる世の中で、インターネットトラフィックの速度と量は年々増加傾向にあります。エンプラスの光トランシーバ用レンズは大規模データセンタの通信など発展するIoT社会に貢献しています。</p>
              </div>
              <div class="p-digital__sub">
                <figure class="p-digital__small">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/digital_1.jpg" alt="パラレル通信向けレンズアレイ">
                  <div class="p-digital__small-text">
                    <p class="c-solution-text">パラレル通信向けレンズアレイ</p>
                  </div>
                </figure>
              </div>
            </div>
        </div>
      </div>
      <div class="p-digital__content">
        <figure class="p-digital__img">
          <img src="<?php echo get_template_directory_uri() ?>/images/common/led_img.jpg" alt="LEDの光を自在にコントロール">
        </figure>
        <div class="p-digital__detail">
          <div class="p-digital__subTitle">
            <h4 class="c-solution-subTitle" data-subtitle="Display Solution">LEDの光を<br>自在にコントロール</h4>
          </div>
          <div class="p-digital__row">
            <div class="p-digital__text">
              <p class="c-solution-text">低消費電力・長寿命・環境配慮に優れたLEDの光を光速制御技術によって自在にコントロールし、ディスプレイの軽量化、LED灯数削減、省電力化に貢献しています。</p>
            </div>
            <div class="p-digital__sub">
              <figure class="p-digital__small">
                <img src="<?php echo get_template_directory_uri() ?>/images/common/led_sub.jpg" alt="パラレル通信向けレンズアレイ">
                <div class="p-digital__small-text">
                  <p class="c-solution-text">Light Enhancer Cap™</p>
                </div>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="p-digital__under p-icons">
      <div class="p-icons__box">
        <p class="p-icons__boxText">こんなところで社会に貢献！</p>
        <div class="p-icons__icons">
          <figure class="p-icons__icon p-icons__icon--data">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/icon_data.png" alt="データセンター">
            <p class="p-icons__icon-text">データセンター</p>
          </figure>
          <figure class="p-icons__icon p-icons__icon--tv">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/icon_tv.png" alt="テレビ">
            <p class="p-icons__icon-text">テレビ</p>
          </figure>
          <figure class="p-icons__icon">
            <img class="p-icons__icon--sai" src="<?php echo get_template_directory_uri() ?>/images/common/icon_sai.png" alt="サイネージ">
            <p class="p-icons__icon-text">サイネージ</p>
          </figure>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="l-mecha p-mecha" id="mecha">
    <div class="p-mecha__title">
      <h3 class="c-solution-title c-solution-title--long" data-solution="mechanics">メカ分野</h3>
    </div>
    <div class="l-inner">
      <div class="p-mecha__contents">
        <div class="p-mecha__content">
          <figure class="p-mecha__img">
            <img src="<?php echo get_template_directory_uri() ?>/images/common/mecha_img.jpg" alt="メカ分野">
          </figure>
          <div class="p-mecha__detail">
            <div class="p-mecha__subTitle">
              <h4 class="c-solution-subTitle" data-subtitle="Energy Saving Solution Business">エネルギー効率化･<br>
                快適性･安全性への貢献</h4>
            </div>
            <div class="p-mecha__row">
              <div class="p-mecha__text">
                <p class="c-solution-text">エンプラスのギヤは、自動車、家電製品等の静音化、耐久性向上、小型軽量化などお客様の様々な課題を解決する、『静音性×耐久性×高性能ギヤ』を提供しています。動力伝動装置としてのギヤから、エネルギー制御、快適さ、安全性につながる価値を提供しています。</p>
              </div>
              <div class="p-mecha__sub">
                <figure class="p-mecha__small">
                  <img src="<?php echo get_template_directory_uri() ?>/images/common/mecha_sub.jpg" alt="高精度ギヤ">
                  <div class="p-mecha__small-text">
                    <p class="c-solution-text">高精度ギヤ</p>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p-mecha__under p-icons">
        <div class="p-icons__box">
          <p class="p-icons__boxText">こんなところで社会に貢献！</p>
          <div class="p-icons__icons">
            <figure class="p-icons__icon p-icons__icon--car">
              <img src="<?php echo get_template_directory_uri() ?>/images/common/icon_car.png" alt="自動車">
              <p class="p-icons__icon-text">自動車</p>
            </figure>
            <figure class="p-icons__icon p-icons__icon--printer">
              <img src="<?php echo get_template_directory_uri() ?>/images/common/icon_printer.png" alt="プリンタ">
              <p class="p-icons__icon-text">プリンター</p>
            </figure>
            <figure class="p-icons__icon p-icons__icon--souji">
              <img src="<?php echo get_template_directory_uri() ?>/images/common/icon_souji.png" alt="掃除機">
              <p class="p-icons__icon-text">掃除機</p>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('includes/banner'); ?>

</main>
<?php get_footer(); ?>