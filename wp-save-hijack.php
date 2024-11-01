<?php
/*
Plugin Name: WordPress Save Hijack
Plugin URI: http://pressedsites.com/wordpress-save-hijack/
Description: Enable Ctrl+s/Cmd+s to saves in posts through wordpress admin panel.
Author: Mitchell Bray
Version: 1.0.0
Author URI: http://pressedsites.com/
*/
add_action('admin_head', 'wp_save_hijack');

function wp_save_hijack(){
	$file = end(explode('/',$_SERVER['SCRIPT_NAME']));
	if($file == 'page.php' || $file == 'page-new.php' || $file == 'post.php' || $file == 'post-new.php'){
?>
<script type="text/javascript">
document.addEventListener("keydown",function(e){83===e.keyCode&&(navigator.platform.match("Mac")?e.metaKey:e.ctrlKey)&&(document.getElementById("publish").click(),e.preventDefault())},!1);
</script>
<?php
	}
}
?>