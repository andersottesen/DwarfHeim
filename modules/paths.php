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

$crew = array(
   "alban" => $root."/crew/alban.php",
   "alexf" => $root."/crew/alexf.php",
   "alexj" => $root."/crew/alexj.php",
   "anders" => $root."/crew/anders.php",
   "eirikf" => $root."/crew/eirikf.php",
   "eirikh" => $root."/crew/eirikh.php",
   "hans" => $root."/crew/hans.php",
   "john" => $root."/crew/john.php",
   "knut" => $root."/crew/knut.php",
   "marius" => $root."/crew/marius.php",
);

$page = array(
   "homepage" => $root."/homepage.php",
   "about" => $root."/about.php",
   "faq" => $root."/faq.php",
   "dwarfheim" => $root."/dwarfheim.php",
   "contact" => $root."/contact.php",
   "investor" => $root."/investors.php",
   "media" => $root."/media.php",
   "landingpage" => $root."/landingpage.php",
);

