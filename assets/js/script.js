jQuery(function($) {
    //ヘッダーがファーストビューを超えたら色を変える
    $(window).on('load scroll', function() {
        if ($(this).scrollTop() > $('.fv').outerHeight()) {
            $('.header').addClass('white');
            $('.humburger-btn__line').addClass('black');
        } else {
            $('.header').removeClass('white');
            $('.humburger-btn__line').removeClass('black');
        }
    });

    //ハンバーガーメニュー用
    $('.humburger-btn').on('click',function(){
        $('.humburger-btn').toggleClass('cross');
        $('.humburger-nav-wrapper').toggleClass('open');
    });

    //ハンバーガーメニュー用スムーススクロール
    $('.humburger-nav__item a[href^="#"]').click(function(){
      var speed = 300;
      var adjust = $('.header').outerHeight();
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top - adjust;
      $('.humburger-nav-wrapper').removeClass('open');    //ハンバーガーメニューのリンクを押したらメニューを閉じる
      $('.humburger-btn').removeClass('cross');    //ハンバーガーメニューのリンクを押したらメニューを閉じる
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });

    //グローバルメニュー用スムーススクロール
    $('.header__nav a[href^="#"]').click(function(){
        var speed = 300;
        var adjust = $('.header').outerHeight();
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - adjust;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });

    //すべての項目を入力したら送信可能にする
    const $submitBtn = $('#submit')
    $('#form input,#form textarea').on('input', function () {
        if (
          $('#form input[type="text"]').val() !== "" &&
          $('#form input[type="email"]').val() !== "" &&
          $('#form textarea').val() !== ""
        ) {
          $submitBtn.removeClass('disable');
          $submitBtn.prop('disabled', false);

        } else {
          $submitBtn.addClass('disable');
          $submitBtn.prop('disabled', true);
        }
    });
});