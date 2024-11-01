<?php

// create custom plugin settings menu
add_action('admin_menu', 'sns_create_menu');

function sns_create_menu() {

	//create new top-level menu
	add_menu_page('Default Settings', 'SNS', '8', __FILE__, 'sns_settings_page',WP_PLUGIN_URL .'/social-network-sharer/images/social-network-sharer.jpg', '8');
    add_submenu_page(__FILE__, 'Social Network Sharer | Usage', 'Usage', 8, WP_PLUGIN_DIR .'/social-network-sharer/menu/usage.php');
    //add_submenu_page(__FILE__, 'Simple Website Screenshot | Details', 'Details', 8, WP_PLUGIN_DIR .'/wordpress-simple-website-screenshot/doc/details.php');
    //add_submenu_page(__FILE__, 'Social Network Sharer | Plugin Homepage', 'Plugin Homepage', 8, WP_PLUGIN_DIR .'/wp-simple-website-screenshot/plugin_page.php');
	//call register settings function
	add_action( 'admin_init', 'register_snssettings' );
}


function register_snssettings() {
	//register our settings
	register_setting( 'sns-settings-group', 'facebook' );
	register_setting( 'sns-settings-group', 'twitter' );
	register_setting( 'sns-settings-group', 'friendfeed' );
	register_setting( 'sns-settings-group', 'digg' );
	register_setting( 'sns-settings-group', 'stumbleupon' );
	register_setting( 'sns-settings-group', 'google_buzz' );
	register_setting( 'sns-settings-group', 'yahoo_buzz' );
	register_setting( 'sns-settings-group', 'rss' );
	register_setting( 'sns-settings-group', 'vertical' );
}

function sns_settings_page() {

?>
<div class="wrap">
<h2>Social Network Sharer | Settings Page</h2>
<p style="float:right;margin-left:15px"><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="Z2HB86TG9VGLN">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="item_name" value="Pigi - Simple Website Screenshot">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
<input type="image" src="https://www.paypal.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypal.com/it_IT/i/scr/pixel.gif" width="1" height="1">
</form>
<br />
</p>



<form method="post" action="options.php">
    <?php settings_fields( 'sns-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
		<th scope="row"><?php _e('Layout Settings', ''); ?></th>
		<td><input name="vertical" id="vertical" value='1' <?php if (get_option('vertical') == '1') { echo "checked='checked'"; } ?> type="checkbox" /> <label for="advanced_settings"> <?php _e('Display in Vertical?'); ?></label></td> 
        <td><?php _e('If not checked YOU WILL SEE WIDGET IN HORIZONTAL'); ?></td>
        </tr>
        
      	<tr valign="top">
		<th scope="row"><?php _e('Choose Service You Want', ''); ?></th>
		<td><input name="facebook" id="facebook" value='1' <?php if (get_option('facebook') == '1') { echo "checked='checked'"; } ?> type="checkbox" /> <label for="advanced_settings"> <?php _e('Display Facebook?'); ?></label></td>
		<td><input name="stumbleupon" id="stumbleupon" value='1' <?php if (get_option('stumbleupon') == '1') { echo "checked='checked'"; } ?> type="checkbox" /> <label for="advanced_settings"> <?php _e('Display StumbleUpon?'); ?></label></td>
		<td><input name="yahoo_buzz" id="yahoo_buzz" value='1' <?php if (get_option('yahoo_buzz') == '1') { echo "checked='checked'"; } ?> type="checkbox" /> <label for="advanced_settings"> <?php _e('Display Yahoo Buzz?'); ?></label></td>
		
		
		</tr>
       	<tr valign="top">
       	<th scope="row"></th>
		<td><input name="rss" id="rss" value='1' <?php if (get_option('rss') == '1') { echo "checked='checked'"; } ?> type="checkbox" /> <label for="advanced_settings"> <?php _e('Display Rss?'); ?></label></td>
		<td><input name="twitter" id="twitter" value='1' <?php if (get_option('twitter') == '1') { echo "checked='checked'"; } ?> type="checkbox" /> <label for="advanced_settings"> <?php _e('Display Twitter?'); ?></label></td>
		<td><input name="digg" id="digg" value='1' <?php if (get_option('digg') == '1') { echo "checked='checked'"; } ?> type="checkbox" /> <label for="advanced_settings"> <?php _e('Display Digg?'); ?></label></td>
		
		</tr>
		
		<tr vakugb="top">
		<th scope="row"></th>
		<td><input name="news_broadcaster" id="news_broadcaster" value='1' <?php if (get_option('news_broadcaster') == '1') { echo "checked='checked'"; } ?> type="checkbox" /> <label for="advanced_settings"> <?php _e('Display News-Broadcaster.com?'); ?></label></td>
		<td><input name="friendfeed" id="friendfeed" value='1' <?php if (get_option('friendfeed') == '1') { echo "checked='checked'"; } ?> type="checkbox" /> <label for="advanced_settings"> <?php _e('Display FriendFeed?'); ?></label></td>
		<td><input name="google_buzz" id="google_buzz" value='1' <?php if (get_option('google_buzz') == '1') { echo "checked='checked'"; } ?> type="checkbox" /> <label for="advanced_settings"> <?php _e('Display Google Buzz?'); ?></label></td>
		</tr>
    </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>

<h2>Live Preview:</h2>
<br />
<link rel="stylesheet" type="text/css" href="/wp-content/plugins/social-network-sharer/css/social-network-sharer.css" media="screen" title="blue" />
<p style="float:right;margin-left:15px;">
<b>Useful Links:</b></br /></br />
<a href="<?php bloginfo('url'); ?>/wp-admin/admin.php?page=social-network-sharer/menu/usage.php"><img src="<?php bloginfo('url')?>/wp-content/plugins/social-network-sharer/images/usage.jpg" width="60" height="60" border="0" Title="Social Network Sharer Usage"></a>
<a href="http://www.digg-it.info" target="_blank"><img src="<?php bloginfo('url')?>/wp-content/plugins/social-network-sharer/images/homepage.jpg" width="60" height="60" border="0" Title="'Social Network Sharer' Home Page"></a>
<br /><br />
I Will Be Very happy if you will share <br /> "Social Network Sharer" Post <br />on Facebook and Twitter;<br /> it's free for you, but very important for me<br /><br />
<a name="fb_share" type="box_count" share_url="http://www.digg-it.info/social-network-sharer-0-1b" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
<script type="text/javascript">
tweetmeme_url = 'http://www.digg-it.info/social-network-sharer-0-1b';
</script>
<script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
</p>

<?php if (get_option('vertical') == 1) { ?> <div id="contenitore_verticale"> <?php } else { ?> <div id="contenitore_orizzontale"> <?php } ?>
<?php if (get_option('rss') == 1) { ?> <p style="float:left;margin-right:12px;">
<a href="<?php bloginfo_rss('url') ?>/feed" target="_blank"><img src="<?php bloginfo('url')?>/wp-content/plugins/social-network-sharer/images/rss.png" border="0" height="55" width="55" title="Subscribe '<?php bloginfo('name') ?>' Feeds"></a>
</p><?php } ?>


<?php if (get_option('facebook') == 1) { ?> <p style="float:left;margin-right:12px;">
<a name="fb_share" type="box_count" share_url="<?php the_permalink(); ?>" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
</p><?php } ?>

<?php if (get_option('twitter') == 1) { ?> <p style="float:left;margin-right:12px;">
<script type="text/javascript">
tweetmeme_url = '<?php the_permalink(); ?>';
</script>
<script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
</p><?php } ?>

<?php if (get_option('friendfeed') == 1) { ?> <p style="float:left;margin-right:12px;">

<a href="http://friendfeed.com/?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><img src="<?php bloginfo('url')?>/wp-content/plugins/social-network-sharer/images/friendfeed.png" border="0" width="55" height="55" title="Share <?php the_title();?> on Friendfeed"></a>
</p><?php } ?>

<?php if (get_option('digg') == 1) { ?> <p style="float:left;margin-right:12px;">

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
</p><?php } ?>

<?php if (get_option('stumbleupon') == 1) { ?> <p style="float:left;margin-right:12px;">

<script src="http://www.stumbleupon.com/hostedbadge.php?s=5&r=<?php the_permalink(); ?>"></script>
</p><?php } ?>

<?php if (get_option('google_buzz') == 1) { ?> <p style="float:left;margin-right:12px;">

<a title="Post to Google Buzz" class="google-buzz-button" href="http://www.google.com/buzz/post" data-button-style="normal-count"></a>
<script type="text/javascript" src="http://www.google.com/buzz/api/button.js"></script>
</p><?php } ?>

<?php if (get_option('yahoo_buzz') == 1) { ?> <p style="float:left;margin-right:12px;">

<script type="text/javascript"
	src="http://d.yimg.com/ds/badge2.js"
	badgetype="square">
	<?php the_permalink(); ?>
</script>
</p><?php } ?>
</div>
</div>
<?php } ?>