<?php
  $url = "https://www.fire-method.com/lp/monitor-limit.json";
  $json = file_get_contents($url);
  $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
  $arr = json_decode($json,true);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>FIRE CLINIC-ファイヤークリニック-｜医療の力で痩せるダイエット専門クリニック</title>
  <meta name="description" content="新常識の医療ダイエットで痩せ体質をつくる。医師・管理栄養士によるオーダーメイド施術＆処方" />
  <meta name="keywords" content="FIRE CLINIC,ファイヤークリニック,ダイエット" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
  <meta name="format-detection" content="telephone=no">
  <link rel="canonical" href="https://www.fire-method.com/lp/01/">
  <link rel="stylesheet" href="js/owl/assets/owl.carousel.min.css"/>
  <link rel="stylesheet" href="css/jquery.modal.min.css"/>
  <link rel="stylesheet" href="css/style.css?230228"/>
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <!-- OGP -->
  <meta property="og:site_name" content="ファイヤークリニック【医療ダイエット専門】">
  <meta property="og:title" content="FIRE CLINIC（ファイヤークリニック）｜医療ダイエット・医療痩身専門クリニック">
  <meta property="og:description" content="医療ダイエット/痩身専門のクリニック。過度な運動・食事制限無しのパーソナル型医療ダイエット。医療ダイエットモニターも募集中。痩せホルモンGLP1や脂肪溶解注射「カベリン」など次世代痩身医療を提供。新宿/渋谷/銀座/名古屋に立地。">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo("http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);?>"/>
  <!-- <meta property="og:url" content="http://www.fire-method.com/lp/01/g/"> -->
  <meta property="og:image" content="https://www.fire-method.com/wp-content/themes/fire-method/static/img/og_image.png">
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@FIRECLINIC" />
  <!-- /OGP -->
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T835H88');</script>
  <!-- End Google Tag Manager -->
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T835H88"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
<div id="lpbox">
  <div id="top_floating_banner">
    <a href="/">
      <img src="img/top_button_01.jpg" alt="FIRE CLINIC" width="191" height="77" loading="lazy">
    </a>
    <div>
      <span class="cta__popup">
        <img src="img/top_button_02.jpg" alt="無料カウンセリング予約" width="191" height="77" loading="lazy">
      </span>
      <span class="top_floating_banner_trigger">
        <img src="img/top_button_03.jpg" alt="委員の場所を確認する" width="191" height="77" loading="lazy">
      </span>
    </div>
  </div>
  <header id="fv">
    <div class="header" style="display:none; padding: 10px 16px;">
      <p style="width: 150px;margin-left: 0;">
        <a href="/" data-gtm="click" data-gtm-click="headerLogo"><img src="img/cmn_logo01.svg" alt="FIRE CLINIC" width="191" height="77" loading="lazy"></a>
      </p>
    </div>
    <h1><picture><source type="image/webp" srcset="img/webp/fv_01.webp"><img src="img/fv_01.png" alt="FIRE CLINIC-ファイヤークリニック-　新常識の医療ダイエットで痩せ体質を作る"></picture></h1>
    <p class="fv_02">
      <picture><source type="image/webp" srcset="img/webp/fv_02_ptnb.webp"><img src="img/fv_02_ptnb.png" alt="医師・管理栄養士によるオーダーメイド施術＆処方"></picture>
      <picture class="fv_02_cta cta__popup"><img src="img/button_01.png" alt="無料カウンセリングを予約"></picture>_
    </p>
  </header>

  <section>
    <p><picture><source type="image/webp" srcset="img/webp/aboutus.webp?20230606"><img src="img/aboutus.jpg?20230606" alt="FIRE CLINICは我慢を必要としないダイエットを提供します。"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/henkin_04.webp"><img src="img/henkin_04.jpg?220621" alt="途中解約OK! 21日以内なら全額返金保証"></picture></p>
    <p style="padding-top: 16px;"><picture><source type="image/webp" srcset="img/webp/henkin_06.webp"><img src="img/henkin_06.jpg?220621" alt="メディカルダイエット"></picture></p>
    <p><picture><img src="img/01.jpg" alt="さらに今なら!先着10名様限定!通常価格より最大50％OFF"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/henkin_05.webp"><img src="img/henkin_05.jpg?220621" alt="まずは無料カウンセリングへ"></picture></p>
    <p><picture><img src="img/02.jpg" alt="カウンセリングは2つの方法からお選びいただけます"></picture></p>
    <p style="padding-top: 8px;"><picture><img src="img/03.jpg" alt="1.オンラインにて 2.クリニックに来院"></picture></p>
    <p style="padding-top: 8px;"><picture><img src="img/04.jpg" alt="相談だけでもOK!気軽にお申し込みください"></picture></p>
  </section>

  <section class="reflection-parent">
    <a class="expand-non">
      <p class="cta__popup">
        <picture><img src="img/counseling.png" alt="無料カウンセリングへ ご予約はこちら"></picture>
        <div class="reflection"></div>
      </p>
    </a>
  </section>

  <section class="monitor" id="monitor">
    <div>
      <a onclick="toggleMonitorModal()">
        <picture>
          <img src="img/05.jpg" alt="ダイエットモニター募集中">
        </picture>
      </a>
    </div>
  </section>

  <section id="voice" class="voice">
    <h2><picture><source type="image/webp" srcset="img/webp/voice_00.webp"><img src="img/voice_00.jpg" alt="最短2ヶ月で結果にコミット"></picture></h2>
    <picture><source type="image/webp" srcset="img/webp/voice_01.webp"><img src="img/voice_01.png" alt="実際の成功体験をご紹介"></picture>
    <ul class="slider">
        <li><picture><source type="image/webp" srcset="img/webp/voice_slide_01.webp"><img src="img/voice_slide_01.jpg" alt="S様37歳の場合"></picture></li>
        <li><picture><source type="image/webp" srcset="img/webp/voice_slide_02.webp"><img src="img/voice_slide_02.jpg" alt="N様33歳の場合"></picture></li>
        <li><picture><source type="image/webp" srcset="img/webp/voice_slide_03.webp"><img src="img/voice_slide_03.jpg" alt="A様33歳の場合"></picture></li>
    </ul>
  </section>

  <section id="feature">
    <h2><picture><source type="image/webp" srcset="img/webp/feature_01.webp"><img src="img/feature_01.jpg" alt="最短2ヶ月で結果にコミット"></picture></h2>
    <picture><source type="image/webp" srcset="img/webp/feature_02.webp"><img src="img/feature_02.jpg" alt=""></picture>
    <section style="padding-top: 16px;" class="reflection-parent">
    <a class="expand-non">
      <p class="cta__popup">
        <picture><img src="img/counseling.png" alt="無料カウンセリングへ ご予約はこちら"></picture>
        <div class="reflection"></div>
      </p>
    </a>
  </section>

  <section class="monitor" id="monitor">
    <div>
      <a onclick="toggleMonitorModal()">
        <picture>
          <img src="img/05.jpg" alt="ダイエットモニター募集中">
        </picture>
      </a>
    </div>
  </section>
  </section>

  <section class="monitor" id="monitor">
    <div>
      <a onclick="toggleMonitorModal()">
        <picture>
          <source type="image/webp" srcset="img/webp/monitor2.webp"><img src="img/monitor2.png" alt="ダイエットモニター募集中">
        </picture>
      </a>
    </div>
  </section>

  <section id="message" class="message">
    <h2><picture><source type="image/webp" srcset="img/webp/message_01_new.webp"><img src="img/message_01_new.jpg" alt="医師と専門スタッフがあなただけのプランを提案します"></picture></h2>
    <p><picture><source type="image/webp" srcset="img/webp/message_02_new.webp"><img src="img/message_02_new.jpg" alt="短期集中で成功するためのヒミツ ダイエットは我慢しなくていい時代です"></picture></p>
  </section>

  <div class="reason">
    <p><picture><source type="image/webp" srcset="img/webp/reason.webp"><img src="img/reason.png" alt="FIRE CLINIC-ファイヤークリニック-が選ばれる理由"></picture></p>
  </div>

  <div class="media">
    <p><picture><source type="image/webp" srcset="img/webp/media.webp"><img src="img/media.png" alt="メディアでも話題に！"></picture></p>
  </div>

  <section class="charisma">
    <h2><picture><source type="image/webp" srcset="img/webp/charisma_01.webp"><img src="img/charisma_01.png" alt="その実績と話題で多くのカリスマ女子にご愛顧いただいています"></picture></h2>
    <div class="charisma__box">
      <p><picture><source type="image/webp" srcset="img/webp/charisma_02.webp"><img src="img/charisma_02.png" alt=""></picture></p>
      <div class="charisma__item">
        <div id="charisma__sl" class="owl-carousel">
          <div class="item"><picture><source type="image/webp" srcset="img/webp/sl_01.webp"><img src="img/sl_01.png" alt=""></picture></div>
          <div class="item"><picture><source type="image/webp" srcset="img/webp/sl_02.webp"><img src="img/sl_02.png" alt=""></picture></div>
          <div class="item"><picture><source type="image/webp" srcset="img/webp/sl_03.webp"><img src="img/sl_03.png" alt=""></picture></div>
          <div class="item"><picture><source type="image/webp" srcset="img/webp/sl_04.webp"><img src="img/sl_04.png" alt=""></picture></div>
          <div class="item"><picture><source type="image/webp" srcset="img/webp/sl_05.webp"><img src="img/sl_05.png" alt=""></picture></div>
        </div>
      </div>
    </div>
  </section>

  <div class="mybusiness">
    <p><picture><source type="image/webp" srcset="img/webp/mybusiness.webp"><img src="img/mybusiness.png" alt="『Googleマイビジネス』でも高評価"></picture></p>
  </div>

  <section class="break anim">
    <h2><picture><source type="image/webp" srcset="img/webp/break_01.webp"><img src="img/break_01.jpg" alt="楽して脂肪を破壊！"></picture></h2>
    <div class="break__box">
      <p><picture><source type="image/webp" srcset="img/webp/break_02.webp"><img src="img/break_02.jpg" alt="FIRE CLINIC-ファイヤークリニック-"></picture></p>
      <div class="break__item">
        <div>
          <p><picture><source type="image/webp" srcset="img/webp/break_gr_txt.webp"><img src="img/break_gr_txt.png" alt="リバウンドしない率92％"></picture></p>
          <svg id="break__gr"></svg>
        </div>
      </div>
    </div>

    <div class="cta__item reflection-parent">
      <a class="expand-non">
        <p class="cta__popup">
          <picture><img src="img/counseling.png" alt="無料カウンセリングへ ご予約はこちら"></picture>
          <div class="reflection"></div>
        </p>
      </a>
    </div>
  </section>

  <section class="trouble">
    <h2><picture><source type="image/webp" srcset="img/webp/trouble_01.webp"><img src="img/trouble_01.jpg" alt="今までのダイエットにこんな挫折はありませんか？"></picture></h2>
    <p><picture><source type="image/webp" srcset="img/webp/trouble_02.webp"><img src="img/trouble_02.jpg" alt="失敗続きなのは努力が足りないせい？"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/trouble_03.webp"><img src="img/trouble_03.png" alt="痩せにくい体質の特徴"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/trouble_04.webp"><img src="img/trouble_04.png" alt="GLP-1の分泌量が少ない"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/trouble_05.webp"><img src="img/trouble_05.png" alt="痩せやすい体質に欠かせない「GLP-1」"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/trouble_06.webp"><img src="img/trouble_06.png" alt="脂肪細胞が多い"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/trouble_07.webp"><img src="img/trouble_07.png" alt="リバウンドの原因になる脂肪細胞"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/trouble_08.webp"><img src="img/trouble_08.png" alt="だからファイヤークリニックの医療ダイエットで体質から変える"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/trouble_09_ex.webp?220324"><img src="img/trouble_09_ex.jpg?220324" alt="お悩みや目標に合わせてご提案します"></picture></p>

  </section>
  <section class="method">
    <div class="method__title">
      <h2><picture><source type="image/webp" srcset="img/webp/method_01.webp"><img src="img/method_01.png" alt="ダイエットの常識を変える"></picture></h2>
    </div>
    <p><picture><source type="image/webp" srcset="img/webp/trouble_10.webp?20230606"><img src="img/trouble_10.png?20230606" alt="新宿/渋谷/銀座/名古屋とオンライン診療にも対応"></picture></p>

    <!-- 動画パターン -->
    <div style="">
      <div class="method__catch anim">
         <h3 class="fadein"><picture><source type="image/webp" srcset="img/webp/method_ttl.webp"><img src="img/method_ttl.png" alt="独自のファイヤーメソッド"></picture></h3>
         <p><picture><source type="image/webp" srcset="img/webp/method_ex.webp"><img src="img/method_ex.jpg" alt="痩せやすい体質へ＆リバウンド防止"></picture></p>
      </div>
      <!-- 動画追加 -->
      <div class="method_movie">
          <video src="img/method_movie_01.mp4" controls muted autoplay playsinline loop></video>
          <p><picture><source type="image/webp" srcset="img/webp/movie_ttl_02.webp"><img src="img/movie_ttl_02.jpg" alt="脂肪溶解注射ってどんな人にぴったりでしょうか？"></picture></p>
          <video src="img/method_movie_02.mp4" controls muted autoplay playsinline loop></video>
          <p><picture><source type="image/webp" srcset="img/webp/movie_ttl_03.webp"><img src="img/movie_ttl_03.jpg" alt="せっかく痩せても、すぐにリバウンドはしないのでしょうか？"></picture></p>
          <video src="img/method_movie_03.mp4" controls muted autoplay playsinline loop></video>
          <p><picture><source type="image/webp" srcset="img/webp/method_24.webp"><img src="img/method_24.png" alt="医師や管理栄養士がカウンセリングし、あなたに合った施術、処方をします"></picture></p>
      </div>
      <!-- 動画追加 -->
    </div>

    <div id="menu" class="method__stitle anim">
      <div class="method__stitle__num fadein"><picture><source type="image/webp" srcset="img/webp/method_label_01.webp"><img src="img/method_label_01.png" alt="01"></picture></div>
      <h3 class="method__stitle__text fadein"><picture><source type="image/webp" srcset="img/webp/method_ttl_01.webp"><img src="img/method_ttl_01.png" alt="ＧＬＰ－１サクセンダ"></picture></h3>
      <div><picture><source type="image/webp" srcset="img/webp/method_03.webp"><img src="img/method_03.png" alt=""></picture></div>
    </div>
    <p><picture><source type="image/webp" srcset="img/webp/method_04.webp?220627"><img src="img/method_04.png?220627" alt="食欲を抑え痩せやすい体質へ導く"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/method_05.webp"><img src="img/method_05.png" alt="健康的に体重が減少する"></picture></p>
    <div class="method__stitle anim">
      <div class="method__stitle__num fadein"><picture><source type="image/webp" srcset="img/webp/method_label_02.webp"><img src="img/method_label_02.png" alt="02"></picture></div>
      <h3 class="method__stitle__text fadein"><picture><source type="image/webp" srcset="img/webp/method_ttl_02.webp"><img src="img/method_ttl_02.png" alt="脂肪溶解注射「カベリン」"></picture></h3>
      <div><picture><source type="image/webp" srcset="img/webp/method_06.webp"><img src="img/method_06.png" alt=""></picture></div>
    </div>
    <p><picture><source type="image/webp" srcset="img/webp/method_07.webp"><img src="img/method_07.png" alt="部分痩せにも効果的"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/method_08.webp"><img src="img/method_08.png" alt="脂肪をピンポイントで狙い撃つカベリンのメイン成分"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/method_09.webp"><img src="img/method_09.png" alt=""></picture></p>
    <div class="method__stitle anim">
      <div class="method__stitle__num fadein"><picture><source type="image/webp" srcset="img/webp/method_label_03.webp"><img src="img/method_label_03.png" alt="03"></picture></div>
      <h3 class="method__stitle__text fadein"><picture><source type="image/webp" srcset="img/webp/method_ttl_03.webp?220722"><img src="img/method_ttl_03.png?220722" alt="医療用ＥＭＳ"></picture></h3>
      <div><picture><source type="image/webp" srcset="img/webp/method_10.webp?220722"><img src="img/method_10.png?220722" alt=""></picture></div>
    </div>
    <p><picture><source type="image/webp" srcset="img/webp/method_11.webp?220722"><img src="img/method_11.png?220722" alt="リバウンドの元・脂肪細胞を破壊"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/method_12.webp?220722"><img src="img/method_12.png?220722" alt="筋肉を収縮させて脂肪細胞を破壊！"></picture></p>
    <div class="method__stitle anim method__title--04">
      <div class="method__stitle__num fadein"><picture><source type="image/webp" srcset="img/webp/method_label_04.webp"><img src="img/method_label_04.png" alt="04"></picture></div>
      <h3 class="method__stitle__text fadein"><picture><source type="image/webp" srcset="img/webp/method_ttl_04.webp"><img src="img/method_ttl_04.png" alt="ダイエット薬"></picture></h3>
      <div><picture><source type="image/webp" srcset="img/webp/method_13.webp"><img src="img/method_13.png" alt=""></picture></div>
    </div>
    <p><picture><source type="image/webp" srcset="img/webp/method_14.webp"><img src="img/method_14.png" alt="あなたに合わせてダイエット薬をカスタマイズします"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/method_15.webp"><img src="img/method_15.png" alt="脂肪を燃やす"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/method_16.webp"><img src="img/method_16.png" alt="糖の吸収抑制"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/method_17.webp"><img src="img/method_17.png" alt="排出を促す"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/method_18.webp"><img src="img/method_18.png" alt="ダイエット漢方薬"></picture></p>
    <div class="method__stitle anim">
      <div class="method__stitle__num fadein"><picture><source type="image/webp" srcset="img/webp/method_label_05.webp"><img src="img/method_label_05.png" alt="05"></picture></div>
      <h3 class="method__stitle__text fadein"><picture><source type="image/webp" srcset="img/webp/method_ttl_05.webp"><img src="img/method_ttl_05.png" alt="ダイエット食事療法"></picture></h3>
      <div><picture><source type="image/webp" srcset="img/webp/method_19.webp"><img src="img/method_19.png" alt=""></picture></div>
    </div>
    <p><picture><source type="image/webp" srcset="img/webp/method_20.webp"><img src="img/method_20.png" alt="無理せず健康的な食生活をサポート"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/method_21.webp"><img src="img/method_21.png" alt="「認知行動療法」とは？"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/method_22.webp"><img src="img/method_22.png" alt="医療の力で根本から変われる"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/method_23.webp"><img src="img/method_23.jpg" alt="FIRE CLINIC-ファイヤークリニック-"></picture></p>
  </section>

  <section class="henkin">
    <h2><picture><source type="image/webp" srcset="img/webp/henkin_01.webp?20230522"><img src="img/henkin_01.png?20230522" alt="新宿、渋谷、銀座、名古屋 オンライン診察にも対応 医療の力で痩せるダイエット専門クリニック FIRE CLINIC-ファイヤークリニック-　"></picture></h2>
    <p><picture><source type="image/webp" srcset="img/webp/henkin_02.webp"><img src="img/henkin_02.jpg?220621" alt="挑戦してみたい!変わりたい と思うものの"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/henkin_03.webp"><img src="img/henkin_03.jpg?220621" alt="こんな不安ありますよね? 万が一こんな場合でも"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/henkin_04.webp"><img src="img/henkin_04.jpg?220621" alt="途中解約OK! 21日以内なら全額返金保証"></picture></p>
    <p style="padding-top: 16px;"><picture><source type="image/webp" srcset="img/webp/henkin_06.webp"><img src="img/henkin_06.jpg?220621" alt="メディカルダイエット"></picture></p>
    <p><picture><img src="img/01.jpg" alt="さらに今なら!先着10名様限定!通常価格より最大50％OFF"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/henkin_05.webp"><img src="img/henkin_05.jpg?220621" alt="まずは無料カウンセリングへ"></picture></p>
    <p><picture><img src="img/02.jpg" alt="カウンセリングは2つの方法からお選びいただけます"></picture></p>
    <p style="padding-top: 8px;"><picture><img src="img/03.jpg" alt="1.オンラインにて 2.クリニックに来院"></picture></p>
    <p style="padding-top: 8px;"><picture><img src="img/04.jpg" alt="相談だけでもOK!気軽にお申し込みください"></picture></p>
    <p style="padding-bottom: 16px;" class="reflection-parent">
      <a class="expand-non">
        <p class="cta__popup" style="padding-bottom: 16px;">
          <picture><img src="img/counseling.png" alt="無料カウンセリングへ ご予約はこちら"></picture>
          <div class="reflection"></div>
        </p>
      </a>
    </p>
  </section>

  <section class="step">
       <!-- ここにカルーセル追加-->
      <h2><picture><source type="image/webp" srcset="img/webp/step_01.webp"><img src="img/step_01.png" alt="ファイヤーメソッド施術の流れ"></picture></h2>
          <ul class="slider">
              <li><picture><source type="image/webp" srcset="img/webp/step_slide_01.webp"><img src="img/step_slide_01.jpg" alt="カウンセリング"></picture></li>
              <li><picture><source type="image/webp" srcset="img/webp/step_slide_02.webp"><img src="img/step_slide_02.jpg" alt="医師による問診"></picture></li>
              <li><picture><source type="image/webp" srcset="img/webp/step_slide_03.webp"><img src="img/step_slide_03.jpg" alt="ファイヤーメソッド開始"></picture></li>
              <li><picture><source type="image/webp" srcset="img/webp/step_slide_04.webp"><img src="img/step_slide_04.jpg" alt="ダイエット食事指導"></picture></li>
              <li><picture><source type="image/webp" srcset="img/webp/step_slide_05.webp"><img src="img/step_slide_05.jpg" alt="施術"></picture></li>
              <li><picture><source type="image/webp" srcset="img/webp/step_slide_06.webp"><img src="img/step_slide_06.jpg" alt="ファイヤーメソッド終了"></picture></li>
      </ul>
      <!-- ここにカルーセル追加-->
  </section>

  <section class="faq">
    <h2><picture><source type="image/webp" srcset="img/webp/faq_title.webp"><img src="img/faq_title.jpg" alt="よくあるご質問"></picture></h2>

    <div class="accordion-area">
      <div>
        <h3 class="question">
          <p><picture><source type="image/webp" srcset="img/webp/faq_01_q.webp"><img src="img/faq_01_q.jpg" alt="副作用・ダウンタイムはどんなものがありますか？"></picture></p>
        </h3>
        <div class="answer">
          <p><picture><source type="image/webp" srcset="img/webp/faq_01_a.webp"><img src="img/faq_01_a.jpg" alt="施術によって様々ですが、多くの施術の副作用は数日程度、長くても1･2週間程度です。"></picture></p>
        </div>
      </div>

      <div>
        <h3 class="question">
          <p><picture><source type="image/webp" srcset="img/webp/faq_02_q.webp"><img src="img/faq_02_q.jpg" alt="なぜリバウンドしないのですか？"></picture></p>
        </h3>
        <div class="answer">
          <p><picture><source type="image/webp" srcset="img/webp/faq_02_a.webp"><img src="img/faq_02_a.jpg" alt="リバウンドの原因は一時的に小さくなった脂肪細胞が再び大きくなることです。"></picture></p>
        </div>
      </div>

      <div>
        <h3 class="question">
          <p><picture><source type="image/webp" srcset="img/webp/faq_03_q.webp"><img src="img/faq_03_q.jpg" alt="どれくらいの期間で変化が表れますか？"></picture></p>
        </h3>
        <div class="answer">
          <p><picture><source type="image/webp" srcset="img/webp/faq_03_a.webp"><img src="img/faq_03_a.jpg" alt="早い方だと2週間目ごろから変化が表れ始めますが、人によって、また施術の内容によって様々です。"></picture></p>
        </div>
      </div>

      <div>
        <h3 class="question">
          <p><picture><source type="image/webp" srcset="img/webp/faq_05_q.webp"><img src="img/faq_05_q.jpg" alt="1回だけの体験はできるのでしょうか？ "></picture></p>
        </h3>
        <div class="answer">
          <p><picture><source type="image/webp" srcset="img/webp/faq_05_a.webp"><img src="img/faq_05_a.jpg" alt="初めての方であれば医療EMSを1回体験できます。"></picture></p>
        </div>
      </div>

      <div class="txt-hide">

          <div>
            <h3 class="question">
              <p><picture><source type="image/webp" srcset="img/webp/faq_06_q.webp"><img src="img/faq_06_q.jpg" alt="注射が苦手なのですが、それ以外の施術も対応してくれますか？"></picture></p>
            </h3>
            <div class="answer">
              <p><picture><source type="image/webp" srcset="img/webp/faq_06_a.webp"><img src="img/faq_06_a.jpg" alt="GLP-1は注射タイプだけではなく経口タイプの飲み薬もご用意しておりますので"></picture></p>
            </div>
          </div>

          <div>
            <h3 class="question">
              <p><picture><source type="image/webp" srcset="img/webp/faq_07_q.webp"><img src="img/faq_07_q.jpg" alt="中途解約はできますか？その場合、返金はできますか？"></picture></p>
            </h3>
            <div class="answer">
              <p><picture><source type="image/webp" srcset="img/webp/faq_07_a.webp"><img src="img/faq_07_a.jpg" alt="万が一、ご満足いただけない、思っていたのと違った、目標が変わった場合など。"></picture></p>
            </div>
          </div>

          <div>
            <h3 class="question">
              <p><picture><source type="image/webp" srcset="img/webp/faq_08_q.webp"><img src="img/faq_08_q.jpg" alt="本当に２カ月で結果がでますか？ "></picture></p>
            </h3>
            <div class="answer">
              <p><picture><source type="image/webp" srcset="img/webp/faq_08_a.webp"><img src="img/faq_08_a.jpg" alt="治療にはもちろん個人差がありますが、早い方だと２週間程度で効果が表れ始めます。"></picture></p>
            </div>
          </div>

          <div>
            <h3 class="question">
              <p><picture><source type="image/webp" srcset="img/webp/faq_09_q.webp"><img src="img/faq_09_q.jpg" alt="カウンセリング当日は何を持って行けばいいですか？ "></picture></p>
            </h3>
            <div class="answer">
              <p><picture><source type="image/webp" srcset="img/webp/faq_09_a.webp"><img src="img/faq_09_a.jpg" alt="必須の持ち物はありませんが、お支払い手段（現金、カード）と身分証明書をお持ちいただくと施術の開始までスムーズに行えます。"></picture></p>
            </div>
          </div>

          <div>
            <h3 class="question">
              <p><picture><source type="image/webp" srcset="img/webp/faq_10_q.webp"><img src="img/faq_10_q.jpg" alt="友人と一緒にカウンセリングを受けることはできますか？"></picture></p>
            </h3>
            <div class="answer">
              <p><picture><source type="image/webp" srcset="img/webp/faq_10_a.webp"><img src="img/faq_10_a.jpg" alt="はい、可能です。その場合はお電話またはLINEからご予約ください。"></picture></p>
            </div>
          </div>

          <div>
            <h3 class="question">
              <p><picture><source type="image/webp" srcset="img/webp/faq_11_q.webp"><img src="img/faq_11_q.jpg" alt="施術時間はどれくらいですか？"></picture></p>
            </h3>
            <div class="answer">
              <p><picture><source type="image/webp" srcset="img/webp/faq_11_a.webp"><img src="img/faq_11_a.jpg" alt="治療内容にもよりますが、おおよそ1時間～1時間半程度となります。"></picture></p>
            </div>
          </div>

          <div>
            <h3 class="question">
              <p><picture><source type="image/webp" srcset="img/webp/faq_12_q.webp"><img src="img/faq_12_q.jpg" alt="支払方法について詳しく教えてください"></picture></p>
            </h3>
            <div class="answer">
              <p><picture><source type="image/webp" srcset="img/webp/faq_12_a.webp"><img src="img/faq_12_a.jpg" alt="現金、クレジットカード、振込、医療ローンからお選びいただけます。"></picture></p>
            </div>
          </div>

      </div>
      <button class="more"></button>

    </div>

  </section>

    <!-- ここに表追加-->
    <section class="chart_img">
         <p><picture><source type="image/webp" srcset="img/webp/chart_01.webp"><img src="img/chart_01.jpg" alt="人生最後のダイエットにしたいあなたは医療ダイエットがおすすめ"></picture></p>
     </section>
    <!-- ここに表追加-->

  <section class="success anim">
    <h2><picture><source type="image/webp" srcset="img/webp/success_01.webp"><img src="img/success_01.png" alt="挫折続きだった私でも今度こそ大成功"></picture></h2>
    <p><picture><source type="image/webp" srcset="img/webp/success_02.webp"><img src="img/success_02.jpg" alt="２か月で平均－８ｋｇ"></picture></p>
    <p><picture><source type="image/webp" srcset="img/webp/success_03.webp"><img src="img/success_03.png" alt=""></picture></p>
    <p class="success__img"><picture><source type="image/webp" srcset="img/webp/success_img.webp"><img src="img/success_img.png" alt=""></picture></p>
    <p class="success__text"><picture><source type="image/webp" srcset="img/webp/success_txt.webp"><img src="img/success_txt.png" alt="医師のカウンセリング×オーダーメイド FIRE CLINIC-ファイヤークリニック-"></picture></p>
    <p class="success__item success__item--01"><picture><source type="image/webp" srcset="img/webp/success_item_01.webp"><img src="img/success_item_01.png" alt="食欲を抑えるGLP-1注射"></picture></p>
    <p class="success__item success__item--02"><picture><source type="image/webp" srcset="img/webp/success_item_02.webp"><img src="img/success_item_02.png" alt="部分痩せ 脂肪溶解注射"></picture></p>
    <p class="success__item success__item--03"><picture><source type="image/webp" srcset="img/webp/success_item_03.webp"><img src="img/success_item_03.png" alt="リバウンド防止 脂肪細胞破壊"></picture></p>
  </section>
  <div id="fixend"></div>
  <section class="cta" id="offer">
    <h2><picture><source type="image/webp" srcset="img/webp/cta_01.webp"><img src="img/cta_01.png" alt="まずは無料カウンセリングへ"></picture></h2>
    <p><picture><source type="image/webp" srcset="img/webp/cta_02.webp?220223"><img src="img/cta_02.jpg?220223" alt="メディカルダイエット"></picture></p>
    <div class="cta__box">
      <p><picture><source type="image/webp" srcset="img/webp/cta_03.webp"><img src="img/cta_03.png" alt=""></picture></p>
      <div class="cta__btn">
        <div class="cta__item reflection-parent">
          <a class="expand-non">
            <p class="cta__popup">
              <picture><img src="img/counseling2.png" alt="無料カウンセリングへ ご予約はこちら"></picture>
              <div class="reflection"></div>
            </p>
          </a>
        </div>
        <!-- <div class="cta__item reflection-parent"><a href="https://www.fire-method.com/reservation/" class="expand-non"><picture><source type="image/webp" srcset="img/webp/cta_btn_counseling.webp"><img src="img/cta_btn_counseling.png" alt="無料カウンセリングへ ご予約はこちら"></picture><div class="reflection"></div></a></div> -->
        <!-- <div class="cta__item reflection-parent"><a href="https://liff.line.me/1656492178-Qp5La6Xv/landing?follow=%40278poxzo&lp=tTxazV&liff_id=1656492178-Qp5La6Xv" class="expand-non" id="lineLink1"><picture><source type="image/webp" srcset="img/webp/cta_btn_line.webp"><img src="img/cta_btn_line.png" alt="気軽にご利用ください LINEでの相談はこちら"></picture><div class="reflection"></div></a></div> -->
      </div>
    </div>
    <p><picture><source type="image/webp" srcset="img/webp/cta_04.webp"><img src="img/cta_04.png" alt=""></picture></p>
    <div class="cta__tel">
      <p><picture><source type="image/webp" srcset="img/webp/cta_05.webp"><img src="img/cta_05.png" alt=""></picture></p>
      <div class="cta__tel__btn"><a href="tel:0120-685-832"><picture><source type="image/webp" srcset="img/webp/cta_tel.webp"><img src="img/cta_tel.png" alt="お電話でのお問い合わせもお気軽にどうぞ"></picture></a></div>
    </div>
  </section>

  <section id="access" class="access">
  <h2><picture><source type="image/webp" srcset="img/webp/access_01.webp"><img src="img/access_01.png" alt="クリニックへのアクセス"></picture></h2>    
  <!-- Shibuya -->
  <div class="shop-panel">
    <p>
      <picture>
        <source type="image/webp" srcset="img/webp/07_access_shibuya_short.webp?220423"><img src="img/07_access_shibuya_short.jpg?220423" alt="FIRE CLINIC-ファイヤークリニック-　渋谷院">
      </picture>
    </p>
    <div class="shop-photo">
      <div class="charisma__box">
        <div class="charisma__item margin-x-2">
          <div class="shop__sl owl-carousel">
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_1_cut.webp"><img src="img/shibuya_1_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_2_cut.webp"><img src="img/shibuya_2_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_3_cut.webp"><img src="img/shibuya_3_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_4.webp"><img src="img/shibuya_4.jpg" alt=""></picture></div>
          </div>
        </div>
      </div>
    </div>
    <div class="embed-google-map">
      <iframe class="shop_map_2"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.57471011546!2d139.69837341525832!3d35.66284848019867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d16528583a7%3A0x2d0adc152acd5c1d!2z44OV44Kh44Kk44Ok44O844Kv44Oq44OL44OD44Kv5riL6LC36Zmi!5e0!3m2!1sja!2sjp!4v1650767488165!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div class="height-fix-5"></div>

  <!-- Ginza -->
  <div class="shop-panel">
    <p>
      <picture>
        <source type="image/webp" srcset="img/webp/08_access_ginza_short.webp?220423"><img src="img/08_access_ginza_short.jpg?220423" alt="FIRE CLINIC-ファイヤークリニック-　銀座院">
      </picture>
    </p>

    <div class="shop-photo">
      <div class="charisma__box">
        <div class="charisma__item margin-x-2">
          <div class="shop__sl owl-carousel">
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/ginza_1_cut.webp"><img src="img/ginza_1_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/ginza_2_cut.webp"><img src="img/ginza_2_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/ginza_3_cut.webp"><img src="img/ginza_3_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/ginza_4_cut.webp"><img src="img/ginza_4_cut.jpg" alt=""></picture></div>
          </div>
        </div>
      </div>
    </div>
    <div class="embed-google-map">
      <iframe class="shop_map_2"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.05512868455!2d139.76618911555082!3d35.675644537885134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf45d60e571%3A0x8130f1e3943b2610!2z44OV44Kh44Kk44Ok44O844Kv44Oq44OL44OD44Kv6YqA5bqn6Zmi!5e0!3m2!1sja!2sjp!4v1650767531994!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div class="height-fix-5"></div>

  <!-- Shinjuku -->
  <div class="shop-panel">
    <p>
      <picture>
        <source type="image/webp" srcset="img/webp/05_access_shinjuku_short.webp?220423"><img src="img/05_access_shinjuku_short.jpg?220423" alt="FIRE CLINIC-ファイヤークリニック-　新宿院情報">
      </picture>
    </p>
    <section class="shop-photo">
      <div class="charisma__box ">
        <div class="charisma__item margin-x-2">
          <div class="shop__sl owl-carousel">
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shinjuku_1.webp"><img src="img/shinjuku_1.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shinjuku_2.webp"><img src="img/shinjuku_2.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shinjuku_3.webp"><img src="img/shinjuku_3.jpg" alt=""></picture></div>
          </div>
        </div>
      </div>
    </section>
    <div class="embed-google-map">
      <iframe class="shop_map_2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4172539861797!2d139.7045653155512!3d35.69134843702367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d2d652fa63f%3A0x3a4b33fbaabfac5!2z44OV44Kh44Kk44Ok44O844Kv44Oq44OL44OD44Kv5paw5a6_6Zmi!5e0!3m2!1sja!2sjp!4v1650764359756!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div class="height-fix-5"></div>
 
  <!-- Nagoya -->
  <div class="shop-panel">
    <p>
      <picture>
        <source type="image/webp" srcset="img/webp/07_access_nagoya_short.webp?220423"><img src="img/07_access_nagoya_short.jpg?220423" alt="FIRE CLINIC-ファイヤークリニック-　名古屋院">
      </picture>
    </p>
    <div class="shop-photo">
      <div class="charisma__box">
        <div class="charisma__item margin-x-2">
          <div class="shop__sl owl-carousel">
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_1_cut.webp"><img src="img/shibuya_1_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_2_cut.webp"><img src="img/shibuya_2_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_3_cut.webp"><img src="img/shibuya_3_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_4.webp"><img src="img/shibuya_4.jpg" alt=""></picture></div>
          </div>
        </div>
      </div>
    </div>
    <div class="embed-google-map">
      <iframe class="shop_map_2"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13046.248653343187!2d136.9050226!3d35.1675387!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600371a72c5fee65%3A0x9887b8765444244a!2z44OV44Kh44Kk44Ok44O844Kv44Oq44OL44OD44Kv5ZCN5Y-k5bGL6Zmi!5e0!3m2!1sja!2sjp!4v1683113084639!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div class="height-fix-5"></div>

  <p class="height-fix-5"></p>
  <p class="add-pointer">
    <a href="https://www.fire-method.com/reservation/" >
      <picture>
        <source type="image/webp" srcset="img/webp/06_access_btn.webp?220423"><img src="img/06_access_btn.png?220423" alt="無料カウンセリングを予約">
      </picture>
    </a>
  </p>

  </section>

</div>


<!--mordal_monitor-->
    <div id="js-monitorModal" onclick="toggleMonitorModal()" class="monitorModalOverlay">
        <div class="monitorModalInner">
          <div class="monitor_main">
            <h2>モニター募集</h2>
            <p>
              ファイヤークリニックでは、痩身医療の症例の蓄積の為に、2～3か月間の医療ダイエットのモニターにご協力頂ける方募集しています。
              <br>通常の価格よりも割引が適応される代わりに、最後までやりきる強い意志をお持ちの方にご協力頂いております。
            </p>
          </div>
          <div class="monitor_matter">
            <h2>応募要件</h2>
            <ul>
              <li>18歳以上の方</li>
              <li>過去の当院でモニターとなったことがない方</li>
              <li>週に1回程度でご来院が可能な方</li>
              <li>施術の症例写真などデータの提供にご協力頂ける方。</li>
              <li>ダイエットに本気で取り組みたい方</li>
            </ul>
            <p>※ご来院時に当院で審査を行います。全ての方がダイエットモニターに選ばれるものではございません。</p>
          </div>
          <p class="monitor_period">応募締め切り：<?php echo $arr['date']?></p>
          <p class="monitor_message">
            モニターをご希望の方は
            <br><span>無料カウンセリング</span>を予約後
            <br>ご来院時にモニター希望とお伝えください。
          </p>
          <p class="monitor_form_cta reflection-parent">
            <a href="https://www.fire-method.com/reservation/">
              <img src="img/button_01.png" alt="無料カウンセリングへ ご予約はこちら">
            <div class="reflection"></div>
            </a>
          </p>
        </div>
    </div>
<!--/mordal_monitor-->


 <footer id="lpfooter">
   <ul class="footer__link">
     <li style="display:none;">
        <a style="display:inline-block;" data-gtm="click" data-gtm-click="footerLogo" href="/">
          <img src="img/cmn_logo01.svg" alt="FIRE CLINIC" width="191" height="77" loading="lazy">
        </a>
     </li>
     <li><a href="https://www.fire-method.com/privacypolicy/" target="_blank">プライバシーポリシー</a></li>
     <li><a href="https://www.fire-method.com/commercial/" target="_blank">特定商取引法に基づく表示</a></li>
   </ul>
   <div id="copy">&copy; FIRE clinic All rights reserved</div>
 </footer>

<!-- Modal -->
<div class="modal" id="shops_popup_modal">

  <!-- Shibuya -->
  <div class="shop-panel">
    <p>
      <picture>
        <source type="image/webp" srcset="img/webp/07_access_shibuya_short.webp?220423"><img src="img/07_access_shibuya_short.jpg?220423" alt="FIRE CLINIC-ファイヤークリニック-　渋谷院">
      </picture>
    </p>
    <div class="shop-photo">
      <div class="charisma__box">
        <div class="charisma__item">
          <div class="shop__sl owl-carousel">
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_1_cut.webp"><img src="img/shibuya_1_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_2_cut.webp"><img src="img/shibuya_2_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_3_cut.webp"><img src="img/shibuya_3_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_4.webp"><img src="img/shibuya_4.jpg" alt=""></picture></div>
          </div>
        </div>
      </div>
    </div>
    <div class="embed-google-map">
      <iframe class="shop_map"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.57471011546!2d139.69837341525832!3d35.66284848019867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d16528583a7%3A0x2d0adc152acd5c1d!2z44OV44Kh44Kk44Ok44O844Kv44Oq44OL44OD44Kv5riL6LC36Zmi!5e0!3m2!1sja!2sjp!4v1650767488165!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div class="height-fix-5"></div>
  <p class="add-pointer">
    <a href="https://www.fire-method.com/reservation/">
      <picture>
        <img src="img/button_02.png?220423" alt="無料カウンセリングを予約">
      </picture>
    </a>
  </p>

  <!-- Ginza -->
  <div class="shop-panel">
    <p>
      <picture>
        <source type="image/webp" srcset="img/webp/08_access_ginza_short.webp?220423"><img src="img/08_access_ginza_short.jpg?220423" alt="FIRE CLINIC-ファイヤークリニック-　銀座院">
      </picture>
    </p>
    <div class="shop-photo">
      <div class="charisma__box">
        <div class="charisma__item">
          <div class="shop__sl owl-carousel">
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/ginza_1_cut.webp"><img src="img/ginza_1_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/ginza_2_cut.webp"><img src="img/ginza_2_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/ginza_3_cut.webp"><img src="img/ginza_3_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/ginza_4_cut.webp"><img src="img/ginza_4_cut.jpg" alt=""></picture></div>
          </div>
        </div>
      </div>
    </div>
    <div class="embed-google-map">
      <iframe class="shop_map"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.05512868455!2d139.76618911555082!3d35.675644537885134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf45d60e571%3A0x8130f1e3943b2610!2z44OV44Kh44Kk44Ok44O844Kv44Oq44OL44OD44Kv6YqA5bqn6Zmi!5e0!3m2!1sja!2sjp!4v1650767531994!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div class="height-fix-5"></div>
  <p class="add-pointer">
    <a href="https://www.fire-method.com/reservation/">
      <picture>
      <img src="img/button_03.png?220423" alt="無料カウンセリングを予約">
      </picture>
    </a>
  </p>

  <!-- Shinjuku -->
  <div class="shop-panel">
    <p>
      <picture>
        <source type="image/webp" srcset="img/webp/05_access_shinjuku_short.webp?220423"><img src="img/05_access_shinjuku_short.jpg?220423" alt="FIRE CLINIC-ファイヤークリニック-　新宿院情報">
      </picture>
    </p>
    <section class="shop-photo">
      <div class="charisma__box">
        <div class="charisma__item">
          <div class="shop__sl owl-carousel">
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shinjuku_1.webp"><img src="img/shinjuku_1.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shinjuku_2.webp"><img src="img/shinjuku_2.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shinjuku_3.webp"><img src="img/shinjuku_3.jpg" alt=""></picture></div>
          </div>
        </div>
      </div>
    </section>
    <div class="embed-google-map">
      <iframe class="shop_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4172539861797!2d139.7045653155512!3d35.69134843702367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d2d652fa63f%3A0x3a4b33fbaabfac5!2z44OV44Kh44Kk44Ok44O844Kv44Oq44OL44OD44Kv5paw5a6_6Zmi!5e0!3m2!1sja!2sjp!4v1650764359756!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div class="height-fix-5"></div>
  <p class="add-pointer">
    <a href="https://www.fire-method.com/reservation/">
      <picture>
      <img src="img/button_04.png?220423" alt="無料カウンセリングを予約">
      </picture>
    </a>
  </p>

  <!-- Nagoya -->
  <div class="shop-panel">
    <p>
      <picture>
        <source type="image/webp" srcset="img/webp/07_access_nagoya_short.webp"><img src="img/07_access_nagoya_short.jpg" alt="FIRE CLINIC-ファイヤークリニック-　名古屋院">
      </picture>
    </p>
    <div class="shop-photo">
      <div class="charisma__box">
        <div class="charisma__item">
          <div class="shop__sl owl-carousel">
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_1_cut.webp"><img src="img/shibuya_1_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_2_cut.webp"><img src="img/shibuya_2_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_3_cut.webp"><img src="img/shibuya_3_cut.jpg" alt=""></picture></div>
            <div class="item border-white"><picture><source type="image/webp" srcset="img/webp/shibuya_4.webp"><img src="img/shibuya_4.jpg" alt=""></picture></div>
          </div>
        </div>
      </div>
    </div>
    <div class="embed-google-map">
      <iframe class="shop_map"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13046.248653343187!2d136.9050226!3d35.1675387!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600371a72c5fee65%3A0x9887b8765444244a!2z44OV44Kh44Kk44Ok44O844Kv44Oq44OL44OD44Kv5ZCN5Y-k5bGL6Zmi!5e0!3m2!1sja!2sjp!4v1683113084639!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div class="height-fix-5"></div>
  <p class="add-pointer">
    <a href="https://www.fire-method.com/reservation/">
      <picture>
      <img src="img/button_05.png?220423" alt="無料カウンセリングを予約">
      </picture>
    </a>
  </p>
</div>

<div class="modal" id="cta-popup">
  <div class="yoyaku">
    <div class="counseling">無料カウンセリング</div>
    <a class="yoyaku-btn margin" href="https://www.fire-method.com/reservation/" target="_blank" rel="noreferrer">予約へすすむ</a>
  </div>

  <p>
    <picture>
      <source type="image/webp" srcset="img/webp/popup_01.webp?220621"><img src="img/popup_01.jpg?220621" alt="無料カウンセリングはどんな疑問が解消できる?">
    </picture>
  </p>
  <p>
    <picture><img src="img/popup_02.png" alt="無料カウンセリングはどんな内容なの?"></picture>
  </p>

  <div class="schedule">
    <p>まずは無料カウンセリングへ</p>
    <a class="yoyaku-btn" href="https://www.fire-method.com/reservation/" target="_blank" rel="noreferrer">予約へすすむ</a>
  </div>
</div>

 <!-- js -->
 <script src="js/jquery-1.12.1.min.js"></script>
 <script src="js/d3.v3.min.js"></script>
 <script src="js/graph.js?220704"></script>
 <!-- <script src="js/activeParam.js"></script> -->
 <script src="js/owl/owl.carousel.min.js"></script>
 <script src="js/conf_sp.js?220704"></script>
 <script src="js/modal.js?220704"></script>
 <script src="js/jquery.modal.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="/lp/common/js/gclid.js"></script>

  <!-- sitest -->
  <script type="text/javascript">
  (function(){
    window.sitest_sent_html = document.getElementsByTagName("html")[0].outerHTML;
    var pid = "624eb2c14ead3";
    var dev = "";
    if (navigator.userAgent){
      dev = navigator.userAgent.match(/(android.*mobile|iphone|ipod|mobile\ssafari|iemobile|opera\smini|windows\sphone)/i)? "(sp)": "(pc)";
    }else{
      dev = "";
    }
    var name = dev + decodeURIComponent(location.hostname + location.pathname);
    var script_elm = document.createElement("script");
    script_elm.src = "//sitest.jp/tracking/sitest_js?p=" + pid + "&dynamic=true&urlname=" + encodeURIComponent(name);
    script_elm.async = true;
    document.head.appendChild(script_elm);
  })();
  </script>
</body>
</html>
