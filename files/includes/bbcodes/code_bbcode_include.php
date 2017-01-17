<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2009 Nick Jones
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: code_bbcode_include.php
| Author: Wooya
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

if (preg_match("/\/forum\//i", FUSION_REQUEST)) global $data;

$code_count = substr_count($text, "[code]");

if ($code_count>0 && !defined('cfsDONE') && function_exists('add_to_head')) {
	add_to_head('<script type="text/javascript" src="'.INCLUDES.'bbcodes/code_helper.js"></script>');
	define('cfsDONE',true);
}

for ($i=0; $i < $code_count; $i++) {
	if (phpversion()>5.4) {
		$text = preg_replace_callback(
			"#\[code\](.*?)\[/code\]#si",
			function($m) use (&$i) {
				global $data;
				require LOCALE.LOCALESET."bbcodes/code.php";
				if (preg_match("/\/forum\//i", FUSION_REQUEST) && isset($data['post_id'])) {
					$code_save = "<a href='".INCLUDES."bbcodes/code_bbcode_save.php?thread_id=".$_GET['thread_id']."&amp;post_id=".$data['post_id']."&amp;code_id=".$i."'><img src='".INCLUDES."bbcodes/images/code_save.png' alt='".$locale['bb_code_save']."' title='".$locale['bb_code_save']."' style='border:none' /></a>&nbsp;&nbsp;";
				} else {
					$code_save = "<img src=\'".INCLUDES."bbcodes/images/code_save.png\' alt=\'\' title=\'\' style=\'border:none\' /> ";
				}
				$i++;
				return "<div class='code_bbcode'><div class='tbl-border tbl2' style='width:430px'>".$code_save."<strong>".$locale['bb_code_code']."</strong> <a class='sel_code' href='#\'><img src='".INCLUDES."bbcodes/images/mouse.png' alt='".$locale['bb_code_selall']."' title='".$locale['bb_code_selall']."' style='border:none' /></a></div>
                    <div class='tbl-border tbl1' style='width:430px; white-space:nowrap;overflow:auto;'><code style='white-space:nowrap'>".formatcode($m['1'])."</code></div></div>";
			}, $text);
	} else {



	if (preg_match("/\/forum\//i", FUSION_REQUEST) && isset($data['post_id'])) {
	   $code_save = "<a href=\'".INCLUDES."bbcodes/code_bbcode_save.php?thread_id=".$_GET['thread_id']."&amp;post_id=".$data['post_id']."&amp;code_id=".$i."\'><img src=\'".INCLUDES."bbcodes/images/code_save.png\' alt=\'".$locale['bb_code_save']."\' title=\'".$locale['bb_code_save']."\' style=\'border:none\' /></a>&nbsp;&nbsp;";
	} else {
	   $code_save = "<img src=\'".INCLUDES."bbcodes/images/code_save.png\' alt=\'\' title=\'\' style=\'border:none\' /> ";
	}
	$text = preg_replace("#\[code\](.*?)\[/code\]#sie", "'<div class=\'code_bbcode\'><div class=\'tbl-border tbl2\' style=\'width:430px\'>".$code_save."<strong>".$locale['bb_code_code']."</strong> <a class=\'sel_code\' href=\'#\'><img src=\'".INCLUDES."bbcodes/images/mouse.png\' alt=\'".$locale['bb_code_selall']."\' title=\'".$locale['bb_code_selall']."\' style=\'border:none\' /></a></div><div class=\'tbl-border tbl1\' style=\'width:430px;white-space:nowrap;overflow:auto\'><code style=\'white-space:nowrap\'>'.formatcode('\\1').'</code></div></div>'", $text, 1);
}
}
?>