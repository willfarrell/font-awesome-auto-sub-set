<?php

//-- Customize to meet your needs --//

// relative path to web app
$dir = "../app/";

// file extensions of files to search in
$exts = array('html', 'js', 'kit');

// folder not to scan
$black_folders = array('img', 'php', 'json', 'lang', 'font', 'test');

// auto place files into app folder - future feature
$auto_place = false; // false will download the zip file

//-- End Customize --//

// Font-Awesome classes, but not icons
$not_icons = array('', 'large', '2x', '3x', '4x', 'spin', 'muted' ,'border');

// http://icnfnt.com/app/js/controllers.js (bottom on file)
$master_icons = json_decode('[
  {"name":"glass",                "uni":"000"},
  {"name":"music",                "uni":"001"},
  {"name":"search",               "uni":"002"},
  {"name":"envelope",             "uni":"003"},
  {"name":"heart",                "uni":"004"},
  {"name":"star",                 "uni":"005"},
  {"name":"star-empty",           "uni":"006"},
  {"name":"user",                 "uni":"007"},
  {"name":"film",                 "uni":"008"},
  {"name":"th-large",             "uni":"009"},
  {"name":"th",                   "uni":"00a"},
  {"name":"th-list",              "uni":"00b"},
  {"name":"ok",                   "uni":"00c"},
  {"name":"remove",               "uni":"00d"},
  {"name":"zoom-in",              "uni":"00e"},

  {"name":"zoom-out",             "uni":"010"},
  {"name":"off",                  "uni":"011"},
  {"name":"signal",               "uni":"012"},
  {"name":"cog",                  "uni":"013"},
  {"name":"trash",                "uni":"014"},
  {"name":"home",                 "uni":"015"},
  {"name":"file",                 "uni":"016"},
  {"name":"time",                 "uni":"017"},
  {"name":"road",                 "uni":"018"},
  {"name":"download-alt",         "uni":"019"},
  {"name":"download",             "uni":"01a"},
  {"name":"upload",               "uni":"01b"},
  {"name":"inbox",                "uni":"01c"},
  {"name":"play-circle",          "uni":"01d"},
  {"name":"repeat",               "uni":"01e"},

  {"name":"refresh",              "uni":"021"},
  {"name":"list-alt",             "uni":"022"},
  {"name":"lock",                 "uni":"023"},
  {"name":"flag",                 "uni":"024"},
  {"name":"headphones",           "uni":"025"},
  {"name":"volume-off",           "uni":"026"},
  {"name":"volume-down",          "uni":"027"},
  {"name":"volume-up",            "uni":"028"},
  {"name":"qrcode",               "uni":"029"},
  {"name":"barcode",              "uni":"02a"},
  {"name":"tag",                  "uni":"02b"},
  {"name":"tags",                 "uni":"02c"},
  {"name":"book",                 "uni":"02d"},
  {"name":"bookmark",             "uni":"02e"},
  {"name":"print",                "uni":"02f"},

  {"name":"camera",               "uni":"030"},
  {"name":"font",                 "uni":"031"},
  {"name":"bold",                 "uni":"032"},
  {"name":"italic",               "uni":"033"},
  {"name":"text-height",          "uni":"034"},
  {"name":"text-width",           "uni":"035"},
  {"name":"align-left",           "uni":"036"},
  {"name":"align-center",         "uni":"037"},
  {"name":"align-right",          "uni":"038"},
  {"name":"align-justify",        "uni":"039"},
  {"name":"list",                 "uni":"03a"},
  {"name":"indent-left",          "uni":"03b"},
  {"name":"indent-right",         "uni":"03c"},
  {"name":"facetime-video",       "uni":"03d"},
  {"name":"picture",              "uni":"03e"},

  {"name":"pencil",               "uni":"040"},
  {"name":"map-marker",           "uni":"041"},
  {"name":"adjust",               "uni":"042"},
  {"name":"tint",                 "uni":"043"},
  {"name":"edit",                 "uni":"044"},
  {"name":"share",                "uni":"045"},
  {"name":"check",                "uni":"046"},
  {"name":"move",                 "uni":"047"},
  {"name":"step-backward",        "uni":"048"},
  {"name":"fast-backward",        "uni":"049"},
  {"name":"backward",             "uni":"04a"},
  {"name":"play",                 "uni":"04b"},
  {"name":"pause",                "uni":"04c"},
  {"name":"stop",                 "uni":"04d"},
  {"name":"forward",              "uni":"04e"},

  {"name":"fast-forward",         "uni":"050"},
  {"name":"step-forward",         "uni":"051"},
  {"name":"eject",                "uni":"052"},
  {"name":"chevron-left",         "uni":"053"},
  {"name":"chevron-right",        "uni":"054"},
  {"name":"plus-sign",            "uni":"055"},
  {"name":"minus-sign",           "uni":"056"},
  {"name":"remove-sign",          "uni":"057"},
  {"name":"ok-sign",              "uni":"058"},
  {"name":"question-sign",        "uni":"059"},
  {"name":"info-sign",            "uni":"05a"},
  {"name":"screenshot",           "uni":"05b"},
  {"name":"remove-circle",        "uni":"05c"},
  {"name":"ok-circle",            "uni":"05d"},
  {"name":"ban-circle",           "uni":"05e"},

  {"name":"arrow-left",           "uni":"060"},
  {"name":"arrow-right",          "uni":"061"},
  {"name":"arrow-up",             "uni":"062"},
  {"name":"arrow-down",           "uni":"063"},
  {"name":"share-alt",            "uni":"064"},
  {"name":"resize-full",          "uni":"065"},
  {"name":"resize-small",         "uni":"066"},
  {"name":"plus",                 "uni":"067"},
  {"name":"minus",                "uni":"068"},
  {"name":"asterisk",             "uni":"069"},
  {"name":"exclamation-sign",     "uni":"06a"},
  {"name":"gift",                 "uni":"06b"},
  {"name":"leaf",                 "uni":"06c"},
  {"name":"fire",                 "uni":"06d"},
  {"name":"eye-open",             "uni":"06e"},

  {"name":"eye-close",            "uni":"070"},
  {"name":"warning-sign",         "uni":"071"},
  {"name":"plane",                "uni":"072"},
  {"name":"calendar",             "uni":"073"},
  {"name":"random",               "uni":"074"},
  {"name":"comment",              "uni":"075"},
  {"name":"magnet",               "uni":"076"},
  {"name":"chevron-up",           "uni":"077"},
  {"name":"chevron-down",         "uni":"078"},
  {"name":"retweet",              "uni":"079"},
  {"name":"shopping-cart",        "uni":"07a"},
  {"name":"folder-close",         "uni":"07b"},
  {"name":"folder-open",          "uni":"07c"},
  {"name":"resize-vertical",      "uni":"07d"},
  {"name":"resize-horizontal",    "uni":"07e"},

  {"name":"bar-chart",            "uni":"080"},
  {"name":"twitter-sign",         "uni":"081"},
  {"name":"facebook-sign",        "uni":"082"},
  {"name":"camera-retro",         "uni":"083"},
  {"name":"key",                  "uni":"084"},
  {"name":"cogs",                 "uni":"085"},
  {"name":"comments",             "uni":"086"},
  {"name":"thumbs-up",            "uni":"087"},
  {"name":"thumbs-down",          "uni":"088"},
  {"name":"star-half",            "uni":"089"},
  {"name":"heart-empty",          "uni":"08a"},
  {"name":"signout",              "uni":"08b"},
  {"name":"linkedin-sign",        "uni":"08c"},
  {"name":"pushpin",              "uni":"08d"},
  {"name":"external-link",        "uni":"08e"},

  {"name":"signin",               "uni":"090"},
  {"name":"trophy",               "uni":"091"},
  {"name":"github-sign",          "uni":"092"},
  {"name":"upload-alt",           "uni":"093"},
  {"name":"lemon",                "uni":"094"},
  {"name":"phone",                "uni":"095"},
  {"name":"check-empty",          "uni":"096"},
  {"name":"bookmark-empty",       "uni":"097"},
  {"name":"phone-sign",           "uni":"098"},
  {"name":"twitter",              "uni":"099"},
  {"name":"facebook",             "uni":"09a"},
  {"name":"github",               "uni":"09b"},
  {"name":"unlock",               "uni":"09c"},
  {"name":"credit-card",          "uni":"09d"},
  {"name":"rss",                  "uni":"09e"},

  {"name":"hdd",                  "uni":"0a0"},
  {"name":"bullhorn",             "uni":"0a1"},
  {"name":"bell",                 "uni":"0a2"},
  {"name":"certificate",          "uni":"0a3"},
  {"name":"hand-right",           "uni":"0a4"},
  {"name":"hand-left",            "uni":"0a5"},
  {"name":"hand-up",              "uni":"0a6"},
  {"name":"hand-down",            "uni":"0a7"},
  {"name":"circle-arrow-left",    "uni":"0a8"},
  {"name":"circle-arrow-right",   "uni":"0a9"},
  {"name":"circle-arrow-up",      "uni":"0aa"},
  {"name":"circle-arrow-down",    "uni":"0ab"},
  {"name":"globe",                "uni":"0ac"},
  {"name":"wrench",               "uni":"0ad"},
  {"name":"tasks",                "uni":"0ae"},

  {"name":"filter",               "uni":"0b0"},
  {"name":"briefcase",            "uni":"0b1"},
  {"name":"fullscreen",           "uni":"0b2"},

  {"name":"group",                "uni":"0c0"},
  {"name":"link",                 "uni":"0c1"},
  {"name":"cloud",                "uni":"0c2"},
  {"name":"beaker",               "uni":"0c3"},
  {"name":"cut",                  "uni":"0c4"},
  {"name":"copy",                 "uni":"0c5"},
  {"name":"paper-clip",           "uni":"0c6"},
  {"name":"save",                 "uni":"0c7"},
  {"name":"sign-blank",           "uni":"0c8"},
  {"name":"reorder",              "uni":"0c9"},
  {"name":"list-ul",              "uni":"0ca"},
  {"name":"list-ol",              "uni":"0cb"},
  {"name":"strikethrough",        "uni":"0cc"},
  {"name":"underline",            "uni":"0cd"},
  {"name":"table",                "uni":"0ce"},

  {"name":"magic",                "uni":"0d0"},
  {"name":"truck",                "uni":"0d1"},
  {"name":"pinterest",            "uni":"0d2"},
  {"name":"pinterest-sign",       "uni":"0d3"},
  {"name":"google-plus-sign",     "uni":"0d4"},
  {"name":"google-plus",          "uni":"0d5"},
  {"name":"money",                "uni":"0d6"},
  {"name":"caret-down",           "uni":"0d7"},
  {"name":"caret-up",             "uni":"0d8"},
  {"name":"caret-left",           "uni":"0d9"},
  {"name":"caret-right",          "uni":"0da"},
  {"name":"columns",              "uni":"0db"},
  {"name":"sort",                 "uni":"0dc"},
  {"name":"sort-down",            "uni":"0dd"},
  {"name":"sort-up",              "uni":"0de"},

  {"name":"envelope-alt",         "uni":"0e0"},
  {"name":"linkedin",             "uni":"0e1"},
  {"name":"undo",                 "uni":"0e2"},
  {"name":"legal",                "uni":"0e3"},
  {"name":"dashboard",            "uni":"0e4"},
  {"name":"comment-alt",          "uni":"0e5"},
  {"name":"comments-alt",         "uni":"0e6"},
  {"name":"bolt",                 "uni":"0e7"},
  {"name":"sitemap",              "uni":"0e8"},
  {"name":"umbrella",             "uni":"0e9"},
  {"name":"paste",                "uni":"0ea"},
  {"name":"lightbulb",            "uni":"0eb"},
  {"name":"exchange",             "uni":"0ec"},
  {"name":"cloud-download",       "uni":"0ed"},
  {"name":"cloud-upload",         "uni":"0ee"},

  {"name":"user-md",              "uni":"0f0"},
  {"name":"stethoscope",          "uni":"0f1"},
  {"name":"suitcase",             "uni":"0f2"},
  {"name":"bell-alt",             "uni":"0f3"},
  {"name":"coffee",               "uni":"0f4"},
  {"name":"food",                 "uni":"0f5"},
  {"name":"file-alt",             "uni":"0f6"},
  {"name":"building",             "uni":"0f7"},
  {"name":"hospital",             "uni":"0f8"},
  {"name":"ambulance",            "uni":"0f9"},
  {"name":"medkit",               "uni":"0fa"},
  {"name":"fighter-jet",          "uni":"0fb"},
  {"name":"beer",                 "uni":"0fc"},
  {"name":"h-sign",               "uni":"0fd"},
  {"name":"plus-sign-alt",        "uni":"0fe"},

  {"name":"double-angle-left",    "uni":"100"},
  {"name":"double-angle-right",   "uni":"101"},
  {"name":"double-angle-up",      "uni":"102"},
  {"name":"double-angle-down",    "uni":"103"},
  {"name":"angle-left",           "uni":"104"},
  {"name":"angle-right",          "uni":"105"},
  {"name":"angle-up",             "uni":"106"},
  {"name":"angle-down",           "uni":"107"},
  {"name":"desktop",              "uni":"108"},
  {"name":"laptop",               "uni":"109"},
  {"name":"tablet",               "uni":"10a"},
  {"name":"mobile-phone",         "uni":"10b"},
  {"name":"circle-blank",         "uni":"10c"},
  {"name":"quote-left",           "uni":"10d"},
  {"name":"quote-right",          "uni":"10e"},

  {"name":"spinner",              "uni":"110"},
  {"name":"circle",               "uni":"111"},
  {"name":"reply",                "uni":"112"},
  {"name":"github-alt",           "uni":"113"},
  {"name":"folder-close-alt",     "uni":"114"},
  {"name":"folder-open-alt",      "uni":"115"}
]');

$list = php_grep($dir, $exts);
$list = array_unique($list);
if (!sizeof($list)) {
	echo "No icons found.";
	exit;
}

// format request
$json_data = array();
foreach($master_icons as $icon) {
	if (in_array($icon->name, $list)) {
		$json_data[] = $icon;
	}
}

// CURL
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://icnfnt.com/api/createpack',
    CURLOPT_USERAGENT => 'icnfnt API cURL Request',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        "json_data" => json_encode($json_data)
    )
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
// End CURL


if ($auto_place) {
	
} else {
	header("Location: http://icnfnt.com$resp");
}


function php_grep($path, $ext){
	global $black_folders;
	 
	$return = array();
	$fp = opendir($path);
	while($f = readdir($fp)){
		if( preg_match("#^\.+$#", $f) ) continue; 		// ignore symbolic links
		if( in_array($f.'/', $black_folders) ) continue;	// open source projects or system files
		
		$file_full_path = $path.$f;
		$path_parts = pathinfo($file_full_path);
		
		if (is_dir($file_full_path)) {
			$return = array_merge($return, php_grep($file_full_path.'/', $ext));
		} else if (isset($path_parts['extension']) && in_array($path_parts['extension'],$ext)) {
			$file = file_get_contents($file_full_path);
			$count = preg_match_all("/[=\"' ]?icon-([a-z0-9\-]*)/", $file, $matches);
			//print_r($matches);
			if ($count) $return = array_merge($return, $matches[1]);
		} else {
			
		}
	}
	return $return;
}


?>