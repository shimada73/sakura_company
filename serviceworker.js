var LOG_SERVER = 'https://api.webpush.jp/';
var DEFAULT_CONF = {title: 'サイトからのお知らせ', body: '＊＊＊', url: 'https://www.sakura-communication.co.jp/index2.html', icon: 'https://cdn.webpush.jp/20000184/76a3579377504f619cf26201bbb3155a.jpg?20181122152752', message_id: ''};
var JAVA_SCRIPT_TAG = 'https://cdn.webpush.jp/js/coinssw.js';
var NOW_DATE = new Date();

importScripts(JAVA_SCRIPT_TAG + '?ver=' + NOW_DATE.getFullYear() + "" + (NOW_DATE.getMonth()+1) + "" + NOW_DATE.getDate());

firebase.initializeApp({
  'messagingSenderId': '503629673634'
});
