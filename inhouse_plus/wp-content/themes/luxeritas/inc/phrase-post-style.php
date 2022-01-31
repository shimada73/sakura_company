<?php
/**
 * Luxeritas WordPress Theme - free/libre wordpress platform
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * @copyright Copyright (C) 2015 Thought is free.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 * @author LunaNuko
 * @link https://thk.kanzae.net/
 * @translators rakeem( http://rakeem.jp/ )
 */

?>
<style>
#thk-phrase-form, #thk-phrase-form2,
#thk-shortcode-form, #thk-shortcode-form2 {
	display: none;
}
#thk-phrase-form2, #thk-shortcode-form2 {
	max-width: 640px;
}
#thk-phrase-form input[type="radio"],
#thk-shortcode-form input[type="radio"] {
	position: absolute;
	visibility: hidden;
	display: none;
}

#thk-phrase-form label,
#thk-shortcode-form label {
	display: inline-block;
	-webkit-box-flex: 1 0 auto;
	-ms-flex: 1 0 auto;
	flex: 1 0 auto;
	cursor: pointer;
	margin: 3px;
	-moz-box-shadow:inset 0px 1px 0px 0px #fff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #fff;
	box-shadow:inset 0px 1px 0px 0px #fff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9));
	background:-moz-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-webkit-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-o-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-ms-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9',GradientType=0);
	background-color:#f9f9f9;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#444;
	font-size:12px;
	padding: 5px 10px;
	text-decoration:none;
	text-shadow:0px 1px 0px #fff;
}
#thk-phrase-form label:hover,
#thk-shortcode-form label:hover {
	-moz-box-shadow:inset 0px 1px 0px 0px #fff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #fff;
	box-shadow:inset 0px 1px 0px 0px #fff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
	background:-moz-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-webkit-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-o-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:-ms-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
	background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf',GradientType=0);
	background-color:#ededed;
}

#thk-phrase-form input[type="radio"]:checked + label,
#thk-shortcode-form input[type="radio"]:checked + label {
	-moz-box-shadow:inset 0px 1px 0px 0px #dcecfb;
	-webkit-box-shadow:inset 0px 1px 0px 0px #dcecfb;
	box-shadow:inset 0px 1px 0px 0px #dcecfb;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bddbfa), color-stop(1, #80b5ea));
	background:-moz-linear-gradient(top, #bddbfa 5%, #80b5ea 100%);
	background:-webkit-linear-gradient(top, #bddbfa 5%, #80b5ea 100%);
	background:-o-linear-gradient(top, #bddbfa 5%, #80b5ea 100%);
	background:-ms-linear-gradient(top, #bddbfa 5%, #80b5ea 100%);
	background:linear-gradient(to bottom, #bddbfa 5%, #80b5ea 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bddbfa', endColorstr='#80b5ea',GradientType=0);
	background-color:#bddbfa;
	border:1px solid #84bbf3;
	color:#fff;
	text-shadow:0px 1px 0px #528ecc;
}

#thk-phrase-form .radio-group,
#thk-shortcode-form .radio-group {
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-wrap: wrap;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
	max-width: 640px;
}
#thk-phrase-form2 textarea,
#thk-shortcode-form2 textarea {
	width: 100%;
	height
}
#fp-code-before, #fp-code-after,
#sc-code-before, #sc-code-after {
	margin: 0;
	padding: .5em 0;
}
#fp-code-before span, #fp-code-after span,
#sc-code-before span, #sc-code-after span {
	display: block;
	overflow: hidden;
	white-space: nowrap;
	margin: 0;
	padding: .3em .5em;
	background: #eee;
	background: -moz-linear-gradient(left, #ededed, #fff);
	background: -webkit-linear-gradient(left, #ededed, #fff);
	background: linear-gradient(to right, #ededed, #fff);
}

i.mce-i-thk-phrase-button:before,
i.mce-i-thk-shortcode-button:before {
	font: 400 20px/1 dashicons;
	line-height: 20px;
	width: 20px;
	height: 20px;
	color: #fff;
	background: #666;
	border-radius: 4px;
}
i.mce-i-thk-phrase-button:before {
	content: "\f478";
}
i.mce-i-thk-shortcode-button:before {
	content: "\f475";
}
body .ui-dialog {
	max-width: 100%;
}
body .ui-dialog-titlebar {
	height: auto;
	font-size: 12px;
	line-height: normal;
}
body .ui-button,
body .ui-button:focus {
	display: inline-block;
	font-size: 12px;
	line-height: 28px;
	height: 28px;
	padding: 0 12px 2px;
	cursor: pointer;
	border-width: 1px;
	border-style: solid;
	-webkit-appearance: none;
	border-radius: 3px;
	white-space: nowrap;
	box-sizing: border-box;
	color: #fff;
	border-color: #b78b66;
	background: #c7a589;
	box-shadow: 0 1px 0 #ccc;
	vertical-align: top;
}
body .ui-button:hover {
	background: #ccad93;
	border-color: #ae7d55;
	color: #fff;
	box-shadow: 0 1px 0 #ae7d55;
}
body .ui-button-icon-only .ui-icon {
	background-color: #f6f6f6;
	border: 1px solid #c5c5c5;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -8px;
	margin-left: -8px;
}
body .ui-dialog .ui-dialog-titlebar-close {
	position: absolute;
	right: .3em;
	top: 50%;
	width: 16px;
	margin: -10px 0 0 0;
	padding: 1px;
	height: 16px;
}
</style>
