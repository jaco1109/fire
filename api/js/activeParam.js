// LINE追加URLを変更
function changeUrl(){
  // URLのパラメータを取得
  var urlParam = location.search.substring(1);
  if(urlParam) {
    // 「&」が含まれている場合は「&」で分割
    var param = urlParam.split('&');
    var paramArray = [];

    // 用意した配列にパラメータを格納
    for (i = 0; i < param.length; i++) {
      var paramItem = param[i].split('=');
      paramArray[paramItem[0]] = paramItem[1];
    }
    // 条件ごとに実行
    if (paramArray.utm_source == 'facebook' ) {
      if (paramArray.utm_campaign.match(/^11.*/) != null){
        for (var i = 0; i < 2; i++) {
          var link = 'lineLink' + [i];
          document.getElementById(link).removeAttribute('href');
          document.getElementById(link).setAttribute('href','https://liff.line.me/1656492178-Qp5La6Xv/landing?follow=%40278poxzo&lp=0hjiLH&liff_id=1656492178-Qp5La6Xv');
        }
      }else {
        if (paramArray.utm_campaign.match(/^16.*/) != null){
          for (var i = 0; i < 2; i++) {
            var link = 'lineLink' + [i];
            document.getElementById(link).removeAttribute('href');
            document.getElementById(link).setAttribute('href','https://liff.line.me/1656492178-Qp5La6Xv/landing?follow=%40278poxzo&lp=zNPRjX&liff_id=1656492178-Qp5La6Xv');
          }
        }else {
          if (paramArray.utm_campaign.match(/^18.*/) != null){
            for (var i = 0; i < 2; i++) {
              var link = 'lineLink' + [i];
              document.getElementById(link).removeAttribute('href');
              document.getElementById(link).setAttribute('href','https://liff.line.me/1656492178-Qp5La6Xv/landing?follow=%40278poxzo&lp=XK8ZmN&liff_id=1656492178-Qp5La6Xv');
            }
          }
        }
      }
    }
  }
}
