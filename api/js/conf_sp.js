$(function () {
  // 画面内アンカースクロール(lazy対応)
  $('a[href^="#"]').click(function (e) {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;

    $.when(
      $("html, body").animate(
        {
          scrollTop: position,
        },
        400,
        "swing"
      ),
      e.preventDefault()
    ).done(function () {
      var diff = target.offset().top;
      if (diff === position) {
      } else {
        $("html, body").animate(
          {
            scrollTop: diff,
          },
          10,
          "swing"
        );
      }
    });
  });

  // アニメーションを隠す
  $(".anim").addClass("animhide");

  // カリスマカルーセル
  $("#charisma__sl").owlCarousel({
    loop: true,
    margin: 0,
    stagePadding: $(".charisma").width() * 0.18,
    autoplay: true,
    autoplayTimeout: 6000,
    autoplaySpeed: 2000,
    autoplayHoverPause: true,
    nav: true,
    dots: true,
    items: 1,
  });

  //shop写真カルーセル
  $(".shop__sl").owlCarousel({
    loop: true,
    margin: 0,
    stagePadding: $(".charisma").width() * 0.18,
    autoplay: true,
    autoplayTimeout: 6000,
    autoplaySpeed: 2000,
    autoplayHoverPause: true,
    nav: true,
    dots: true,
    items: 1,
  });

  var hi = 0;
  var hj = 0;
  var i = 0;
  var i2 = 0;
  var fixstartOffset = $("#fixstart").offset().top - $(window).height();
  var fixendOffset = $("#fixend").offset().top - $(window).height();
  var fixbtnConf = "fixstartOffset >= sct ";

  $(".cta").each(function () {
    var ctaOfset = $(this).offset().top - $(window).height() * 0.5;
    var ctaOfsetEnd =
      $(this).offset().top + $(this).height() - $(window).height() * 0.5;
    if (fixbtnConf != "") {
      fixbtnConf = fixbtnConf + " || ";
    }
    fixbtnConf =
      fixbtnConf + "( sct >= " + ctaOfset + " && " + ctaOfsetEnd + " >= sct )";
  });
  $("body").bind("touchstart", function () {
    scrollEvent();
  });

  function scrollEvent() {
    //var graph1 = $('#keep__gr').offset().top - $(window).height();
    var graph2 = $("#break__gr").offset().top - $(window).height();
    var sct = $(window).scrollTop();
    $(".anim").each(function () {
      var effOfset = $(this).offset().top - $(window).height() * 0.5;
      if (sct >= effOfset) {
        $(this).removeClass("animhide");
      }
    });

    //if(sct >= graph1 && i === 0){
    //  graph(92,8,"#keep__gr",'#f34877');
    //  i++;
    //};
    if (sct >= graph2 && i2 === 0) {
      graph(92, 8, "#break__gr", "#f34877");
      i2++;
    }
    if (eval(fixbtnConf + " || sct >= fixendOffset ")) {
      $("#fixbtn").removeClass("fixbtn--visible");
    } else {
      $("#fixbtn").addClass("fixbtn--visible");
    }
  }

  // デバイスサイズに応じてGooglemapを操作
  if ($(window).width() > 500) {
    $(".shop_map").css("width", 480 + "px");
    $(window).height() * 0.28 < 300
      ? $(".shop_map").css("height", $(window).height() * 0.28 + "px")
      : $(".shop_map").css("height", 300 + "px");
    $(".shop_map_2").css("width", 725 + "px");
    $(window).height() * 0.43 < 450
      ? $(".shop_map_2").css("height", $(window).height() * 0.43 + "px")
      : $(".shop_map_2").css("height", 450 + "px");
    $(".shop-photo").css("top", 14 + "%");
  } else {
    $(".shop_map").css("width", $(window).width() * 0.75 + "px");
    //  $('.shop_map').css('height', $(window).height() * 0.2 + 'px');
    $(".shop_map").css("height", 200 + "px");
    $(".shop_map_2").css("width", $(window).width() * 0.85 + "px");
    $(window).height() * 0.23 > 200
      ? $(".shop_map_2").css("height", $(window).height() * 0.23 + "px")
      : $(".shop_map_2").css("height", 200 + "px");
  }
});

$(window).load(function () {
  if ($("#fixbtn").length) {
    //固定ボタン用

    var fixstartOffset = $("#fixstart").offset().top - $(window).height();
    var fixendOffset = $("#fixend").offset().top - $(window).height();
    var fixbtnConf = "fixstartOffset >= sct ";

    $(".cta").each(function () {
      var ctaOfset = $(this).offset().top - $(window).height() * 0.5;
      var ctaOfsetEnd =
        $(this).offset().top + $(this).height() - $(window).height() * 0.5;
      if (fixbtnConf != "") {
        fixbtnConf = fixbtnConf + " || ";
      }
      fixbtnConf =
        fixbtnConf +
        "( sct >= " +
        ctaOfset +
        " && " +
        ctaOfsetEnd +
        " >= sct )";
    });

    $(window).scroll(function () {
      scrollEvent2();
    });
    $("body").bind("touchstart", function () {
      scrollEvent2();
    });
    function scrollEvent2() {
      var sct = $(window).scrollTop();

      if (eval(fixbtnConf + " || sct >= fixendOffset ")) {
        $("#fixbtn").removeClass("fixbtn--visible");
      } else {
        $("#fixbtn").addClass("fixbtn--visible");
      }
    }
  }
});

$(function () {
  $(".slider").slick({
    autoplay: true, //自動再生する
    autoplaySpeed: 6000, //自動再生するスピード 4秒
    dots: true, //ドット部分を表示する
  });
});
