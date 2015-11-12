<?php
if(file_exists("config/config.php")){
   require_once "config/config.php";
}elseif(file_exists("../config/config.php")){
   require_once "../config/config.php";
}

$css = array(
   "style" => $root."/css/style.css",
   "grid" => $root."/css/grid.css",
    "media" => $root."/css/media.css",
);

$js = array(
   "contactform" => $root."/js/contactform.js",
   "faq" => $root."/js/faq.js",
   "gallery" => $root."/js/gallery.js",
   "lazyloading" => $root."/js/lazyloading.js",
   "lp_cookie" => $root."/js/lp_cookie.js",
   "hp_cookie" => $root."/js/hp_cookie.js",
);

$page = array(
   "homepage" => $root."/homepage",
   "about" => $root."/about",
   "faq" => $root."/faq",
   "dwarfheim" => $root."/dwarfheim",
   "contact" => $root."/contact",
   "investor" => $root."/investors",
   "media" => $root."/media.php",
   "videos" => $root."/media.php",
   "images" => $root."/media.php",
   "landingpage" => $root."/landingpage",
);

