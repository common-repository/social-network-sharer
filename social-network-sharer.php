<?php
/*
Plugin Name: Social Network Sharer
Plugin URI: http://www.digg-it.info/wordpress-simple-website-screenshot-v-0-5
Description: The Simpliest way to share YOUR CONTENT around the Web
Version: 0.1b
Author: Pigi
Author URI: http://www.digg-it.info
License: GPL2
*/


/*  Copyright 2010  Pigi  (email : pigi.bari@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

require_once('menu/menu.php');


/* Here Starts real sharer function */

function sharer() {
?>
<link rel="stylesheet" type="text/css" href="/wp-content/plugins/social-network-sharer/css/social-network-sharer.css" media="screen" title="blue" />
<?php if (get_option('vertical') == 1) { ?> <div id="contenitore_verticale"> <?php } else { ?> <div id="contenitore_orizzontale"> <?php } ?>
<?php /* START RSS FEED */?>
<?php if (get_option('rss') == 1) { ?> <p style="float:left;margin-right:12px;">
<a href="<?php bloginfo_rss('url') ?>/feed" target="_blank"><img src="<?php bloginfo('url')?>/wp-content/plugins/social-network-sharer/images/rss.png" border="0" height="55" width="55" title="Subscribe '<?php bloginfo('name') ?>' Feeds"></a>
</p><?php } ?>
<?php /* END RSS FEED */?>

<?php /* START FACEBOOK */?>
<?php if (get_option('facebook') == 1) { ?> 
<p style="float:left;margin-right:12px;">
<a name="fb_share" type="box_count" share_url="<?php the_permalink(); ?>" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
</p>
<?php } ?>
<?php /* END FACEBOOK */?>

<?php /* START TWITTER */?>
<?php if (get_option('twitter') == 1) { ?> 
<p style="float:left;margin-right:12px;">
<script type="text/javascript">
tweetmeme_url = '<?php the_permalink(); ?>';
</script>
<script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script> 
</p>
<?php } ?>
<?php /* END TWITTER */?>

<?php /* START FRIENDFEED */?>
<?php if (get_option('friendfeed') == 1) { ?>
<p style="float:left;margin-right:12px;">
<a href="http://friendfeed.com/?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><img src="<?php bloginfo('url')?>/wp-content/plugins/social-network-sharer/images/friendfeed.png" border="0" width="55" height="55" title="Share <?php the_title();?> on Friendfeed" ></a>
</p>
<?php } ?>
<?php /* END FRIENDFEED */?>

<?php /* START DIGG */?>
<?php if (get_option('digg') == 1) { ?>
<p style="float:left;margin-right:12px;">
<script type="text/javascript">
(function() {
var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
s.type = 'text/javascript';
s.async = true;
s.src = 'http://widgets.digg.com/buttons.js';
s1.parentNode.insertBefore(s, s1);
})();
</script>
<a class="DiggThisButton DiggMedium"></a>
</p>
<?php } ?>
<?php /* END DIGG */?>

<?php /* START STUMBLEUPON */?>
<?php if (get_option('stumbleupon') == 1) { ?>
<p style="float:left;margin-right:12px;">
<script src="http://www.stumbleupon.com/hostedbadge.php?s=5&r=<?php the_permalink(); ?>"></script>
</p>
<?php } ?>
<?php /* END STUMBLEUPON */?>

<?php /* START Google Buzz */?>
<?php if (get_option('google_buzz') == 1) { ?>
<p style="float:left;margin-right:12px;">
<a title="Post to Google Buzz" class="google-buzz-button" href="http://www.google.com/buzz/post" data-button-style="normal-count"></a>
<script type="text/javascript" src="http://www.google.com/buzz/api/button.js"></script>
</p>
<?php } ?>
<?php /* END Google Buzz */?>

<?php /* START Yahoo Buzz */?>
<?php if (get_option('yahoo_buzz') == 1) { ?>
<p style="float:left;margin-right:12px;">
<script type="text/javascript"
	src="http://d.yimg.com/ds/badge2.js"
	badgetype="square">
	<?php the_permalink(); ?>
</script>
</p>
<?php } ?>
<?php /* END Yahoo Buzz */?>

</div>
<?php 

}
?>