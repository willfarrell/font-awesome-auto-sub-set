<?php

//-- Customize to meet your needs --//

// relative path to web app
$dir = "../src/";
$dir_component = "../src/components/font-awesome/build/";

// file extensions of files to search in
$exts = array('html', 'js', 'kit');

// folder not to scan
$black_folders = array('components','img', 'js', 'php', 'json', 'lang', 'font');

//-- End Customize --//

// Font-Awesome classes, but not icons
$not_icons = array('', 'large', '2x', '3x', '4x', 'spin', 'muted' ,'border');

// http://icnfnt.com/app/js/controllers.js (bottom on file)
$master_icons = json_decode('[
  {"name":"glass",                "uni":"000","file":""},
  {"name":"music",                "uni":"001","file":""},
  {"name":"search",               "uni":"002","file":""},
  {"name":"envelope",             "uni":"003","file":""},
  {"name":"heart",                "uni":"004","file":""},
  {"name":"star",                 "uni":"005","file":""},
  {"name":"star-empty",           "uni":"006","file":""},
  {"name":"user",                 "uni":"007","file":""},
  {"name":"film",                 "uni":"008","file":""},
  {"name":"th-large",             "uni":"009","file":""},
  {"name":"th",                   "uni":"00a","file":""},
  {"name":"th-list",              "uni":"00b","file":""},
  {"name":"ok",                   "uni":"00c","file":""},
  {"name":"remove",               "uni":"00d","file":""},
  {"name":"zoom-in",              "uni":"00e","file":""},

  {"name":"zoom-out",             "uni":"010","file":""},
  {"name":"off",                  "uni":"011","file":""},
  {"name":"signal",               "uni":"012","file":""},
  {"name":"cog",                  "uni":"013","file":""},
  {"name":"trash",                "uni":"014","file":""},
  {"name":"home",                 "uni":"015","file":""},
  {"name":"file",                 "uni":"016","file":""},
  {"name":"time",                 "uni":"017","file":""},
  {"name":"road",                 "uni":"018","file":""},
  {"name":"download-alt",         "uni":"019","file":""},
  {"name":"download",             "uni":"01a","file":""},
  {"name":"upload",               "uni":"01b","file":""},
  {"name":"inbox",                "uni":"01c","file":""},
  {"name":"play-circle",          "uni":"01d","file":""},
  {"name":"repeat",               "uni":"01e","file":""},

  {"name":"refresh",              "uni":"021","file":""},
  {"name":"list-alt",             "uni":"022","file":""},
  {"name":"lock",                 "uni":"023","file":""},
  {"name":"flag",                 "uni":"024","file":""},
  {"name":"headphones",           "uni":"025","file":""},
  {"name":"volume-off",           "uni":"026","file":""},
  {"name":"volume-down",          "uni":"027","file":""},
  {"name":"volume-up",            "uni":"028","file":""},
  {"name":"qrcode",               "uni":"029","file":""},
  {"name":"barcode",              "uni":"02a","file":""},
  {"name":"tag",                  "uni":"02b","file":""},
  {"name":"tags",                 "uni":"02c","file":""},
  {"name":"book",                 "uni":"02d","file":""},
  {"name":"bookmark",             "uni":"02e","file":""},
  {"name":"print",                "uni":"02f","file":""},

  {"name":"camera",               "uni":"030","file":""},
  {"name":"font",                 "uni":"031","file":""},
  {"name":"bold",                 "uni":"032","file":""},
  {"name":"italic",               "uni":"033","file":""},
  {"name":"text-height",          "uni":"034","file":""},
  {"name":"text-width",           "uni":"035","file":""},
  {"name":"align-left",           "uni":"036","file":""},
  {"name":"align-center",         "uni":"037","file":""},
  {"name":"align-right",          "uni":"038","file":""},
  {"name":"align-justify",        "uni":"039","file":""},
  {"name":"list",                 "uni":"03a","file":""},
  {"name":"indent-left",          "uni":"03b","file":""},
  {"name":"indent-right",         "uni":"03c","file":""},
  {"name":"facetime-video",       "uni":"03d","file":""},
  {"name":"picture",              "uni":"03e","file":""},

  {"name":"pencil",               "uni":"040","file":""},
  {"name":"map-marker",           "uni":"041","file":""},
  {"name":"adjust",               "uni":"042","file":""},
  {"name":"tint",                 "uni":"043","file":""},
  {"name":"edit",                 "uni":"044","file":""},
  {"name":"share",                "uni":"045","file":""},
  {"name":"check",                "uni":"046","file":""},
  {"name":"move",                 "uni":"047","file":""},
  {"name":"step-backward",        "uni":"048","file":""},
  {"name":"fast-backward",        "uni":"049","file":""},
  {"name":"backward",             "uni":"04a","file":""},
  {"name":"play",                 "uni":"04b","file":""},
  {"name":"pause",                "uni":"04c","file":""},
  {"name":"stop",                 "uni":"04d","file":""},
  {"name":"forward",              "uni":"04e","file":""},

  {"name":"fast-forward",         "uni":"050","file":""},
  {"name":"step-forward",         "uni":"051","file":""},
  {"name":"eject",                "uni":"052","file":""},
  {"name":"chevron-left",         "uni":"053","file":""},
  {"name":"chevron-right",        "uni":"054","file":""},
  {"name":"plus-sign",            "uni":"055","file":""},
  {"name":"minus-sign",           "uni":"056","file":""},
  {"name":"remove-sign",          "uni":"057","file":""},
  {"name":"ok-sign",              "uni":"058","file":""},
  {"name":"question-sign",        "uni":"059","file":""},
  {"name":"info-sign",            "uni":"05a","file":""},
  {"name":"screenshot",           "uni":"05b","file":""},
  {"name":"remove-circle",        "uni":"05c","file":""},
  {"name":"ok-circle",            "uni":"05d","file":""},
  {"name":"ban-circle",           "uni":"05e","file":""},

  {"name":"arrow-left",           "uni":"060","file":""},
  {"name":"arrow-right",          "uni":"061","file":""},
  {"name":"arrow-up",             "uni":"062","file":""},
  {"name":"arrow-down",           "uni":"063","file":""},
  {"name":"share-alt",            "uni":"064","file":""},
  {"name":"resize-full",          "uni":"065","file":""},
  {"name":"resize-small",         "uni":"066","file":""},
  {"name":"plus",                 "uni":"067","file":""},
  {"name":"minus",                "uni":"068","file":""},
  {"name":"asterisk",             "uni":"069","file":""},
  {"name":"exclamation-sign",     "uni":"06a","file":""},
  {"name":"gift",                 "uni":"06b","file":""},
  {"name":"leaf",                 "uni":"06c","file":""},
  {"name":"fire",                 "uni":"06d","file":""},
  {"name":"eye-open",             "uni":"06e","file":""},

  {"name":"eye-close",            "uni":"070","file":""},
  {"name":"warning-sign",         "uni":"071","file":""},
  {"name":"plane",                "uni":"072","file":""},
  {"name":"calendar",             "uni":"073","file":""},
  {"name":"random",               "uni":"074","file":""},
  {"name":"comment",              "uni":"075","file":""},
  {"name":"magnet",               "uni":"076","file":""},
  {"name":"chevron-up",           "uni":"077","file":""},
  {"name":"chevron-down",         "uni":"078","file":""},
  {"name":"retweet",              "uni":"079","file":""},
  {"name":"shopping-cart",        "uni":"07a","file":""},
  {"name":"folder-close",         "uni":"07b","file":""},
  {"name":"folder-open",          "uni":"07c","file":""},
  {"name":"resize-vertical",      "uni":"07d","file":""},
  {"name":"resize-horizontal",    "uni":"07e","file":""},

  {"name":"bar-chart",            "uni":"080","file":""},
  {"name":"twitter-sign",         "uni":"081","file":""},
  {"name":"facebook-sign",        "uni":"082","file":""},
  {"name":"camera-retro",         "uni":"083","file":""},
  {"name":"key",                  "uni":"084","file":""},
  {"name":"cogs",                 "uni":"085","file":""},
  {"name":"comments",             "uni":"086","file":""},
  {"name":"thumbs-up",            "uni":"087","file":""},
  {"name":"thumbs-down",          "uni":"088","file":""},
  {"name":"star-half",            "uni":"089","file":""},
  {"name":"heart-empty",          "uni":"08a","file":""},
  {"name":"signout",              "uni":"08b","file":""},
  {"name":"linkedin-sign",        "uni":"08c","file":""},
  {"name":"pushpin",              "uni":"08d","file":""},
  {"name":"external-link",        "uni":"08e","file":""},

  {"name":"signin",               "uni":"090","file":""},
  {"name":"trophy",               "uni":"091","file":""},
  {"name":"github-sign",          "uni":"092","file":""},
  {"name":"upload-alt",           "uni":"093","file":""},
  {"name":"lemon",                "uni":"094","file":""},
  {"name":"phone",                "uni":"095","file":""},
  {"name":"check-empty",          "uni":"096","file":""},
  {"name":"bookmark-empty",       "uni":"097","file":""},
  {"name":"phone-sign",           "uni":"098","file":""},
  {"name":"twitter",              "uni":"099","file":""},
  {"name":"facebook",             "uni":"09a","file":""},
  {"name":"github",               "uni":"09b","file":""},
  {"name":"unlock",               "uni":"09c","file":""},
  {"name":"credit-card",          "uni":"09d","file":""},
  {"name":"rss",                  "uni":"09e","file":""},

  {"name":"hdd",                  "uni":"0a0","file":""},
  {"name":"bullhorn",             "uni":"0a1","file":""},
  {"name":"bell",                 "uni":"0a2","file":""},
  {"name":"certificate",          "uni":"0a3","file":""},
  {"name":"hand-right",           "uni":"0a4","file":""},
  {"name":"hand-left",            "uni":"0a5","file":""},
  {"name":"hand-up",              "uni":"0a6","file":""},
  {"name":"hand-down",            "uni":"0a7","file":""},
  {"name":"circle-arrow-left",    "uni":"0a8","file":""},
  {"name":"circle-arrow-right",   "uni":"0a9","file":""},
  {"name":"circle-arrow-up",      "uni":"0aa","file":""},
  {"name":"circle-arrow-down",    "uni":"0ab","file":""},
  {"name":"globe",                "uni":"0ac","file":""},
  {"name":"wrench",               "uni":"0ad","file":""},
  {"name":"tasks",                "uni":"0ae","file":""},

  {"name":"filter",               "uni":"0b0","file":""},
  {"name":"briefcase",            "uni":"0b1","file":""},
  {"name":"fullscreen",           "uni":"0b2","file":""},

  {"name":"group",                "uni":"0c0","file":""},
  {"name":"link",                 "uni":"0c1","file":""},
  {"name":"cloud",                "uni":"0c2","file":""},
  {"name":"beaker",               "uni":"0c3","file":""},
  {"name":"cut",                  "uni":"0c4","file":""},
  {"name":"copy",                 "uni":"0c5","file":""},
  {"name":"paper-clip",           "uni":"0c6","file":""},
  {"name":"save",                 "uni":"0c7","file":""},
  {"name":"sign-blank",           "uni":"0c8","file":""},
  {"name":"reorder",              "uni":"0c9","file":""},
  {"name":"list-ul",              "uni":"0ca","file":""},
  {"name":"list-ol",              "uni":"0cb","file":""},
  {"name":"strikethrough",        "uni":"0cc","file":""},
  {"name":"underline",            "uni":"0cd","file":""},
  {"name":"table",                "uni":"0ce","file":""},

  {"name":"magic",                "uni":"0d0","file":""},
  {"name":"truck",                "uni":"0d1","file":""},
  {"name":"pinterest",            "uni":"0d2","file":""},
  {"name":"pinterest-sign",       "uni":"0d3","file":""},
  {"name":"google-plus-sign",     "uni":"0d4","file":""},
  {"name":"google-plus",          "uni":"0d5","file":""},
  {"name":"money",                "uni":"0d6","file":""},
  {"name":"caret-down",           "uni":"0d7","file":""},
  {"name":"caret-up",             "uni":"0d8","file":""},
  {"name":"caret-left",           "uni":"0d9","file":""},
  {"name":"caret-right",          "uni":"0da","file":""},
  {"name":"columns",              "uni":"0db","file":""},
  {"name":"sort",                 "uni":"0dc","file":""},
  {"name":"sort-down",            "uni":"0dd","file":""},
  {"name":"sort-up",              "uni":"0de","file":""},

  {"name":"envelope-alt",         "uni":"0e0","file":""},
  {"name":"linkedin",             "uni":"0e1","file":""},
  {"name":"undo",                 "uni":"0e2","file":""},
  {"name":"legal",                "uni":"0e3","file":""},
  {"name":"dashboard",            "uni":"0e4","file":""},
  {"name":"comment-alt",          "uni":"0e5","file":""},
  {"name":"comments-alt",         "uni":"0e6","file":""},
  {"name":"bolt",                 "uni":"0e7","file":""},
  {"name":"sitemap",              "uni":"0e8","file":""},
  {"name":"umbrella",             "uni":"0e9","file":""},
  {"name":"paste",                "uni":"0ea","file":""},
  {"name":"lightbulb",            "uni":"0eb","file":""},
  {"name":"exchange",             "uni":"0ec","file":""},
  {"name":"cloud-download",       "uni":"0ed","file":""},
  {"name":"cloud-upload",         "uni":"0ee","file":""},

  {"name":"user-md",              "uni":"0f0","file":""},
  {"name":"stethoscope",          "uni":"0f1","file":""},
  {"name":"suitcase",             "uni":"0f2","file":""},
  {"name":"bell-alt",             "uni":"0f3","file":""},
  {"name":"coffee",               "uni":"0f4","file":""},
  {"name":"food",                 "uni":"0f5","file":""},
  {"name":"file-alt",             "uni":"0f6","file":""},
  {"name":"building",             "uni":"0f7","file":""},
  {"name":"hospital",             "uni":"0f8","file":""},
  {"name":"ambulance",            "uni":"0f9","file":""},
  {"name":"medkit",               "uni":"0fa","file":""},
  {"name":"fighter-jet",          "uni":"0fb","file":""},
  {"name":"beer",                 "uni":"0fc","file":""},
  {"name":"h-sign",               "uni":"0fd","file":""},
  {"name":"plus-sign-alt",        "uni":"0fe","file":""},

  {"name":"double-angle-left",    "uni":"100","file":""},
  {"name":"double-angle-right",   "uni":"101","file":""},
  {"name":"double-angle-up",      "uni":"102","file":""},
  {"name":"double-angle-down",    "uni":"103","file":""},
  {"name":"angle-left",           "uni":"104","file":""},
  {"name":"angle-right",          "uni":"105","file":""},
  {"name":"angle-up",             "uni":"106","file":""},
  {"name":"angle-down",           "uni":"107","file":""},
  {"name":"desktop",              "uni":"108","file":""},
  {"name":"laptop",               "uni":"109","file":""},
  {"name":"tablet",               "uni":"10a","file":""},
  {"name":"mobile-phone",         "uni":"10b","file":""},
  {"name":"circle-blank",         "uni":"10c","file":""},
  {"name":"quote-left",           "uni":"10d","file":""},
  {"name":"quote-right",          "uni":"10e","file":""},

  {"name":"spinner",              "uni":"110","file":""},
  {"name":"circle",               "uni":"111","file":""},
  {"name":"reply",                "uni":"112","file":""},
  {"name":"github-alt",           "uni":"113","file":""},
  {"name":"folder-close-alt",     "uni":"114","file":""},
  {"name":"folder-open-alt",      "uni":"115","file":""}
]', true);

// clean up
SureRemoveDir('tmp', true);

$list = php_grep($dir, $exts);
$list = array_unique($list);
if (!sizeof($list)) {
	echo "No icons found.";
	exit;
}

// format request
$json_data = array();
foreach($master_icons as $icon) {
	if (in_array($icon['name'], $list)) {
		$json_data[] = $icon;
	}
}

//$output = system("curl --request POST 'http://www.icnfnt.com/api/createpack' --data 'json_data=".json_encode($json_data)."'");
$output = system("curl --request POST 'http://www.icnfnt.com/api/createpack' --data 'json_data=".'[{"name":"glass","uni":"000","file":""}]'."'");

$output = system("curl 'http://www.icnfnt.com$output' -o 'tmp.zip'");

$zip = new ZipArchive;
$res = $zip->open('tmp.zip');
if ($res === TRUE) {
    $zip->extractTo('tmp');
    $zip->close();
} else {
    echo 'failed, code:' . $res;
}
unlink('tmp.zip');

// copy to componets
mkdir_recursive($dir_component);
recurse_copy('tmp/', $dir_component);

function php_grep($path, $ext){
	global $black_folders;
	 
	$return = array();
	$fp = opendir($path);
	while($f = readdir($fp)){
		if( preg_match("#^\.+$#", $f) ) continue; 		// ignore symbolic links
		if( in_array($f, $black_folders) ) continue;	// open source projects or system files
		
		$file_full_path = $path.$f;
		$path_parts = pathinfo($file_full_path);
		
		if (is_dir($file_full_path)) {
			$return = array_merge($return, php_grep($file_full_path.'/', $ext));
		} else if (isset($path_parts['extension']) && in_array($path_parts['extension'],$ext)) {
			$file = file_get_contents($file_full_path);
			$count = preg_match_all("/[=\"' ]?icon-([a-z0-9\-]*)/", $file, $matches);
			//echo $file_full_path;
			//print_r($matches);
			if ($count) $return = array_merge($return, $matches[1]);
		} else {
			
		}
	}
	return $return;
}

function mkdir_recursive($pathname, $mode = 0777) {
    if (!is_dir(dirname($pathname))) {	// for files and folders without trailing '/'
		mkdir(dirname($pathname), $mode, true);
	}
	if(pathinfo($pathname, PATHINFO_EXTENSION) == '' && !is_dir($pathname)) {
		mkdir($pathname, $mode, true);
	}
    return ;
}

function save($file, $data) {
	mkdir_recursive($file);
	$fh = fopen($file, 'w') or print("can't open file");
	fwrite($fh, $data);
	fclose($fh);
}

function SureRemoveDir($dir, $DeleteMe) {
    if(!$dh = @opendir($dir)) return;
    while (false !== ($obj = readdir($dh))) {
        if($obj=='.' || $obj=='..') continue;
        if (!@unlink($dir.'/'.$obj)) SureRemoveDir($dir.'/'.$obj, true);
    }
    if ($DeleteMe){
        closedir($dh);
        @rmdir($dir);
    }
}

function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
} 

?>
