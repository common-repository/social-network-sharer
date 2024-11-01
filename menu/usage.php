<div class="wrap">
<h2>Social Network Sharer | Usage</h2>
<br /><br />
In this page you can learn how to Set <b>Social Network Sharer</b> Plugin:
<br /><br />

<h3>1. Set up Your Preference:</h3>
- Go to Dashboard --> SNS --> SNS<br />
- Choose if you want display plugin in Horizontal or in Vertical<br />
- Choose Service you want Display<br />
<br /><br />
<h3>2. Edit your <em>SINGLE.PHP</em> Template file</h3>
- Go to Dashboard --> Appearance --> Editor --> Single.php <br />
- Find "<em><"?php the_content(); ?"> </em>" line; please remove <b>all "</b><br />
- If you have been set the Vertical Layout, before <em>the_content</em> line insert:<br /><br />
"<em><"?php if(function_exists('sharer')) { sharer(); } ?"></em>"<br /><br /> <b>please remove all "</b><br /><br />
- If you have been set the Horizontal Layout, after <em>the_content</em> line insert:<br /><br />
"<em><"?php if(function_exists('sharer')) { sharer(); } ?"></em>" <br /><br /> <b>please remove all "</b><br /><br />
- Save Changes
<br /><br />
<h3>3. That's All</h3>
</div>