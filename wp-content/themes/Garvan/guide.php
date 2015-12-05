<?php
function theme_guide(){
add_theme_page( 'Theme guide','Theme documentation','edit_themes', 'theme-documentation', 'fabthemes_theme_guide');
}
add_action('admin_menu', 'theme_guide');

function fabthemes_theme_guide(){
		echo '
		
<div id="welcome-panel" class="about-wrap">

	<div class="wpbadge" style="float:left; margin-right:30px; "><img src="'. get_template_directory_uri() . '/screenshot.png" width="250" height="200" /></div>

	<div class="welcome-panel-content">
	
	<h1>Welcome to '.wp_get_theme().' WordPress theme!</h1>
	
	<p class="about-text"> Garvan is a video blogging theme. This theme makes it easy to post video content on your site with no effort at all. This is a WordPress 3+ ready theme with features like custom menu, widgetized area, featured images, widgetized sidebar etc. Theme also comes with an option panel. The theme uses Featured video plus plugin to manage the video content. </p>
	
	
	
	

	
	

		<div class="changelog ">
		<h3>Required plugins </h3>
		<p>The theme often requires few plugins to work the way it is originally intented to. You will find a notification on the admin panel prompting you to install the required plugins. Please install and activate the plugins.  </p>
		<ol>
			<li><a href="http://wordpress.org/extend/plugins/options-framework/">Options framework</a></li>
			<li><a href="http://wordpress.org/support/plugin/featured-video-plus">Featured video plus</a></li>
		</ol>
		</div>
	
	
		<div class="changelog ">
		
		<h3>Theme options explained</h3>
		<p>The theme contains an options page using which you adjust various settings available on the theme. </p>
		

		<p><b>Site intro:</b>
		Use this option to add a custom intro message to the homepage of the site.</p>

		<p><b>Banner setting:</b>
		Configure the banner ads on the sidebar </p>

		</div>
	

		<div class="changelog">
		<h3> Posting video post</h3>
		<p> Once the Featured video plus plugin is installed, you will find an additional meta box in the post editor section to add featured video. 
		All you need to do is just add the video url there. The <a href="http://wordpress.org/extend/plugins/featured-video-plus/">Featured video plus plugin</a> and the theme will take care of the rest. </p>
		<p><iframe src="http://www.screenr.com/embed/bSa7" width="650" height="396" frameborder="0"></iframe></p>
		</div>



				
		<div class="changelog ">
		' . file_get_contents(dirname(__FILE__) . '/FT/license-html.php') . '
		</div>
	
				

	<p class="welcome-panel-dismiss">WordPress theme designed by <a href="http://www.fabthemes.com">FabThemes.com</a>.</p>

	</div>
	</div>
		
		';
		

}
