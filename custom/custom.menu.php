<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<?php

///////////////////////////////////////////////////
// BEGIN TUTORIAL ON ADDING IN YOUR CUSTOM LINKS //
///////////////////////////////////////////////////
//
// ..examples..
//
// $appURL = "https://" . $_SERVER['HTTP_HOST'] . ":0000/"; # links to custom app install on your server
// $mysiteURL = "https://www.mydomain.com/"; # links to custom external source of your choosing
//
// Now, let's add them to the menu!
//
// <li><a class="grayscale" href="<?php echo "$appURL"; ?//>" target="_blank"><img src="img/brands/app.png" class="brand-ico"> <span>Custom App</span></a></li>
// <li><a class="grayscale" href="<?php echo "$mysiteURL"; ?//>" target="_blank"><img src="img/brands/sitelogo.png" class="brand-ico"> <span>My External Site</span></a></li>
//
// You'll notice in the examples above that after (for instance) "$appURL"; ?
// there are two forward slashes (//). Remove these on live examples.
// These were included to avoid php collisions within the examples.
//
//----------------------
// Adding Logo Images //
//----------------------
//
// You can add custom logos to your created menu items by placing the logos
// within the /srv/panel/img/brands/ directory. For best results, add
// images to be no greater than 128x128 pixels in size.
// Remember to change the image source to the name you have given your logo icon.
// Any image format is acceptable: (jpg,png,svg,gif)
// <img src="img/brands/CHANGETHIS.png" class="brand-ico">
//
//
///////////////////////////////////////////////////
//  END TUTORIAL ON ADDING IN YOUR CUSTOM LINKS  //
///////////////////////////////////////////////////


// INSERT YOUR CUSTOM EXTERNAL or INTERNAL LINKS HERE! //
//$quickboxURL = "https://quickbox.io/donate/";//
$plex = "https://app.plex.tv/desktop#";
$emby = "https://app.plex.tv/desktop#";
$nextcloud = "https://app.plex.tv/desktop#";
$account = " https://sdedikool.me/"







?> <!-- Do not remove this closing (?>) -->


<!-- // INSERT YOUR CUSTOM EXTERNAL or INTERNAL MENU ITEMS HERE! // -->
  <li><a class="grayscale" href="<?php echo "$plex"; ?>" target="_blank"><img src="img/brands/plex.png" class="brand-ico"> <span>Plex</span></a></li>
  <li><a class="grayscale" href="<?php echo "$emby"; ?>" target="_blank"><img src="img/brands/emby.png" class="brand-ico"> <span>Emby</span></a></li>
  <li><a class="grayscale" href="<?php echo "$nextcloud"; ?>" target="_blank"><img src="img/brands/nextcloud.png" class="brand-ico"> <span>Nextcloud</span></a></li>
  <li><a class="grayscale" href="<?php echo "$account"; ?>" target="_blank"><i class="fas fa-user"></i> <span>Mon Compte</span></a></li>
