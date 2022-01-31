/*
 * optimizationHeader
 */
//var timer = null;
var header = document.getElementsByClassName('header')[0];
var y;

window.addEventListener('scroll', optimizationHeader, false);

function optimizationHeader() {
  /*clearTimeout(timer);
  timer = setTimeout(function() {
    y = window.pageYOffset;
    (y > 10)? header.classList.add('js-scroll'): header.classList.remove('js-scroll');
  }, 100);*/

  y = window.pageYOffset;
  (y > 100)? header.classList.add('js-scroll'): header.classList.remove('js-scroll');



  var fadeStart = 0,
      fadeUntil = 800;

  var $slogan = $('.slogan'),
      $translation = $('.translation'),
      pos = $(this).scrollTop(),
      opacity = 0;

  if( pos<=fadeStart ){
    opacity=1;
  }else if( pos<=fadeUntil ){
    opacity=1-pos/fadeUntil;
  }

  $slogan.css({
    'transform': 'translateY(' + parseInt(pos/2) + 'px' + ')',
    'opacity': opacity
  });
  $translation.css({
    'transform': 'translate(-50%, -50%) scale(' + (1 - pos/2000) + ')'
  });
}

$('#message a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})


/*
-------------------------------------------------------------------------------
 * ページの遷移でタイトル変換
 ------------------------------------------------------------------------------
 */
function overviewDisplay() {
  document.getElementById("sub-title").innerHTML = "会社概要";
  document.title = "株式会社さくらコミュニケーション -　会社概要";
}

function msgDisplay() {
  document.getElementById("sub-title").innerHTML = "社長挨拶";
  document.title = "株式会社さくらコミュニケーション -　社長挨拶";
}

function philosophyDisplay() {
  document.getElementById("sub-title").innerHTML = "経営理念";
  document.title = "株式会社さくらコミュニケーション -　経営理念";
}

function accessDisplay() {
  document.getElementById("sub-title").innerHTML = "アクセスマップ";
  document.title = "株式会社さくらコミュニケーション -　アクセスマップ";
}

function servicesDisplay() {
  document.getElementById("sub-title").innerHTML = "事業内容";
  document.title = "株式会社さくらコミュニケーション -　事業内容";
}

function resultsDisplay() {
  document.getElementById("sub-title").innerHTML = "実績";
  document.title = "株式会社さくらコミュニケーション -　実績";
}

function skillmapDisplay() {
  document.getElementById("sub-title").innerHTML = "ITソリューションスキルマップ";
  document.title = "株式会社さくらコミュニケーション -　ITソリューションスキルマップ";
}

function it_subsidyDisplay() {
  document.getElementById("sub-title").innerHTML = "IT導入補助金";
  document.title = "株式会社さくらコミュニケーション -　IT導入補助金";
}

function allianceDisplay() {
  document.getElementById("sub-title").innerHTML = "業務提携";
  document.title = "株式会社さくらコミュニケーション -　業務提携";
}

function managementsDisplay() {
  document.getElementById("sub-title").innerHTML = "サービス運営";
  document.title = "株式会社さくらコミュニケーション -　サービス運営";
}

/*
-------------------------------------------------------------------------------
 * スマホ・iPadメニュー遷移
 ------------------------------------------------------------------------------
 */
document.addEventListener('DOMContentLoaded', function(){
  var btnOpen = document.getElementById('js-mobile-nav_open'),
      btnClose = document.getElementById('js-mobile-nav_close'),
      mobileNav = document.getElementsByClassName('mobile-nav'),
      mobileOverlay = document.getElementsByClassName('mobile-nav_overlay'),
      wrapper = document.getElementsByClassName('wrapper');


  btnOpen.addEventListener('click', function(event){
    event.preventDefault();
    toggleNav(true);
  });

  btnClose.addEventListener('click', function(event){
    event.preventDefault();
    toggleNav(false);
  });

  mobileOverlay[0].addEventListener('click', function(event){
    event.preventDefault();
    toggleNav(false);
  });

  function toggleNav(bool) {
    mobileNav[0].classList.toggle('is-visible', bool);
    mobileOverlay[0].classList.toggle('is-visible', bool);
    mobileNav[0].classList.toggle('is-visible', bool);
    wrapper[0].classList.toggle('scale-down', bool);
    document.body.classList.toggle('scale-down', bool);
  }
});

/*
-------------------------------------------------------------------------------
 * グラフ作成
 ------------------------------------------------------------------------------
 */
/*
-------------------------------------------------------------------------------
 * 開発機種
 ------------------------------------------------------------------------------
 
window.onload = function () {

  var chart1 = new CanvasJS.Chart("dev-models",
  {
    interactivityEnabled: false,
    backgroundColor: "transparent",
      animationEnabled: true,
    legend:{
      fontColor: "white",
      fontFamily: "Lato",
      verticalAlign: "bottom",
      horizontalAlign: "center"
    },
    toolTip:{
      enabled: false
    },
    data: [
    {        
      indexLabelFontSize: 12,
      indexLabelFontFamily: "Lato",       
      indexLabelFontColor: "white", 
      indexLabelLineColor: "white",        
      indexLabelPlacement: "outside",
      type: "pie",
      startAngle:  -90,       
      showInLegend: true,
      toolTipContent: "{legendText} - <strong>#percent%</strong>",
      yValueFormatString: "#percent %",
      dataPoints: [
        {  y: 47, legendText:"メインフレーム（汎用機）", indexLabel: "メインフレーム（汎用機）: 47%", color:"#2F619E" },
        {  y: 28, legendText:"Windows", indexLabel: "Windows: 28%", color:"#B13431" },
        {  y: 25, legendText:"UNIX", indexLabel: "UNIX: 25%", color:"#8BB040" }
      ]
    }
    ]
  });

/*
-------------------------------------------------------------------------------
 * プログラム言語
 ------------------------------------------------------------------------------
 
  var chart2 = new CanvasJS.Chart("prog-lang",
  {
    interactivityEnabled: false,
    backgroundColor: "transparent",
      animationEnabled: true,
    legend:{
      fontColor: "white",
      fontFamily: "Lato",
      verticalAlign: "bottom",
      horizontalAlign: "center"
    },
    toolTip:{
      enabled: false
    },
    data: [
    {        
      indexLabelFontSize: 12,
      indexLabelFontFamily: "Lato",       
      indexLabelFontColor: "white", 
      indexLabelLineColor: "white",        
      indexLabelPlacement: "outside",
      type: "pie",
      startAngle:  -90,       
      showInLegend: true,
      toolTipContent: "{legendText} - <strong>#percent%</strong>",
      yValueFormatString: "#percent %",
      dataPoints: [
        {  y: 60, legendText:"COBOL", indexLabel: "COBOL: 60%", color:"#2F619E" },
        {  y: 25, legendText:"Java", indexLabel: "Java: 25%", color:"#B13431" },
        {  y: 7, legendText:"PHP", indexLabel: "PHP: 7%", color:"#8BB040" },
        {  y: 8, legendText:"VB他", indexLabel: "VB他: 8%", color:"#75539D" }
      ]
    }
    ]
  });

/*
-------------------------------------------------------------------------------
 * 内容・作業フェーズ
 ------------------------------------------------------------------------------
 
  var chart3 = new CanvasJS.Chart("workduty",
  {
    interactivityEnabled: false,
    backgroundColor: "transparent",
      animationEnabled: true,
    legend:{
      fontColor: "white",
      fontFamily: "Lato",
      verticalAlign: "bottom",
      horizontalAlign: "center"
    },
    toolTip:{
      enabled: false
    },
    data: [
    {        
      indexLabelFontSize: 12,
      indexLabelFontFamily: "Lato",       
      indexLabelFontColor: "white", 
      indexLabelLineColor: "white",        
      indexLabelPlacement: "outside",
      type: "pie",
      startAngle:  -90,       
      showInLegend: true,
      toolTipContent: "{legendText} - <strong>#percent%</strong>",
      yValueFormatString: "#percent %",
      dataPoints: [
        {  y: 50, legendText:"設計・構築", indexLabel: "設計・構築: 50%", color:"#2F619E" },
        {  y: 20, legendText:"運用・保守", indexLabel: "運用・保守: 20%", color:"#B13431" },
        {  y: 15, legendText:"業務コンサルティング", indexLabel: "業務コンサルティング: 15%", color:"#8BB040" },
        {  y: 5, legendText:"通訳・翻訳", indexLabel: "通訳・翻訳: 5%", color:"#75539D" },
        {  y: 5, legendText:"事務サポート", indexLabel: "事務サポート: 5%", color:"#2B92AE" },
        {  y: 5, legendText:"その他", indexLabel: "その他: 5%", color:"#E07922" }
      ]
    }
    ]
  });

/*
-------------------------------------------------------------------------------
 * 事業領域
 ------------------------------------------------------------------------------
 
  var chart4 = new CanvasJS.Chart("biz-areas",
  {
    interactivityEnabled: false,
    backgroundColor: "transparent",
      animationEnabled: true,
    legend:{
      fontColor: "white",
      fontFamily: "Lato",
      verticalAlign: "bottom",
      horizontalAlign: "center"
    },
    toolTip:{
      enabled: false
    },
    data: [
    {        
      indexLabelFontSize: 12,
      indexLabelFontFamily: "Lato",       
      indexLabelFontColor: "white", 
      indexLabelLineColor: "white",        
      indexLabelPlacement: "outside",
      type: "pie",
      startAngle:  -90,       
      showInLegend: true,
      toolTipContent: "{legendText} - <strong>#percent%</strong>",
      yValueFormatString: "#percent %",
      dataPoints: [
        {  y: 60, legendText:"金融", indexLabel: "金融: 60%", color:"#2F619E" },
        {  y: 10, legendText:"アパレル", indexLabel: "アパレル: 10%", color:"#B13431" },
        {  y: 8, legendText:"公共", indexLabel: "公共: 8%", color:"#8BB040" },
        {  y: 6, legendText:"エネルギー", indexLabel: "エネルギー: 6%", color:"#75539D" },
        {  y: 4, legendText:"通信", indexLabel: "通信: 4%", color:"#2B92AE" },
        {  y: 12, legendText:"その他", indexLabel: "その他: 12%", color:"#E07922" }
      ]
    }
    ]
  });

  chart1.render();
  chart2.render();
  chart3.render();
  chart4.render();
}

/*
-------------------------------------------------------------------------------
 * 採用応募フォームのチェックボックスの入力チェック
 ------------------------------------------------------------------------------ */
var requiredCheckboxes = $(':checkbox[required]');
requiredCheckboxes.on('change', function(e) {
  var checkboxGroup = requiredCheckboxes.filter('[name="' + $(this).attr('name') + '"]');
  var isChecked = checkboxGroup.is(':checked');
  checkboxGroup.prop('required', !isChecked);
});

/* エンターキーを押しても、メール送信できない　*/
/* エンターキーのコードは13です。　*/
$(document).ready(function(){
    $('#name').keypress(function(e){
      if(e.keyCode==13)
        return false;
    });
    $('#email').keypress(function(e){
      if(e.keyCode==13)
        return false;
    });
    $('#age').keypress(function(e){
      if(e.keyCode==13)
        return false;
    });
    $('#phone').keypress(function(e){
      if(e.keyCode==13)
        return false;
    });
    $('#address').keypress(function(e){
      if(e.keyCode==13)
        return false;
    });
    $('#company').keypress(function(e){
      if(e.keyCode==13)
        return false;
    });
});

/* Control of timing of displaying error message when form elements focused 
$("input, textarea, select").click(function(){
  $("input, textarea, select").removeAttr('required');
}); */




