<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
// defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();



// SCRIPT MENAMPILKAN FOTO dengan TAG
// $account = 'infomugi';
// $html = file_get_contents('https://www.instagram.com/'.$account.'/');
// preg_match_all('~("code": "(.*?)",)~', $html, $matches);
// $kode = ($matches[2]);
// $no = 0;
// foreach ($kode as $kd) {
// 	$no = $no + 1;
// 	$html_kd = file_get_contents('https://www.instagram.com/p/'.$kd.'/');
// 	//echo $html_kd;
// 	preg_match_all('~({"text": "(.*?)"}}]})~', $html_kd, $isi);
// 	preg_match_all('~(display_url": "(.*?)", )~', $html_kd, $images);
// 	$res[$no]['isi'] = array_unique ($isi[2]);
// 	$res[$no]['images'] = array_unique ($images[2]);

// }
// foreach ($res as $r) {
// 	echo '<img src="'.$r['images'][0].'"> <br />';
// 	$a = array('\u', '\n');
// 	$b   = array('&#x', '<br />');
// 	if(isset($r['isi'][0])) {
// 		echo str_replace($a, $b, $r['isi'][0]);
// 	}
// 	echo '<hr />';
// }
