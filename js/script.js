
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });
  jQuery('.p-drawer-icon').on('click',function(e){
    e.preventDefault();
    jQuery('.p-drawer-icon').toggleClass('is-active');
    jQuery('.p-drawer-content').toggleClass('is-active');
    jQuery('.p-drawer-background').toggleClass('is-active');
    return false;
  });
  jQuery('.modalClose').on('click',function(e){
    e.preventDefault();
    jQuery('.p-modal').removeClass('is-active');
    return false;
  });



  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });
  $(function () {
    $(window).on("scroll", function () {
      const sliderHeight = $(".p-page-mv,.p-tomorrow,.p-future-mv").height();
      if (sliderHeight - 30 < $(this).scrollTop()) {
        $(".js-background").addClass("headerBack");
        $(".js-text").addClass("textBlack");
      } else {
        $(".js-background").removeClass("headerBack");
        $(".js-text").removeClass("textBlack");
      }
    });
  });

});
