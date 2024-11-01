<?php
/*
Plugin Name:TsovWeather
Version: 1.52
Plugin URI: http://tsov.net/wordpress-plus-weather
Author: Simonsu -Tsov.net
Author URI: http://www.tsov.net
Description: 这是一个由SIMONSU开发的免费天气插件。目前支持中国国内所有城市。可根据访客IP自动获取所在城市的天气。目前已开发成wordpress插件（Widget工具）的方式，方便一些朋友安装。 使用方法：1、下载此插件并上传到wp-content\plugins目录中；2、登录网站后台安装此插件；3、然后进入“外观”，“小工具”，把“Tsov Weather” widget小工具拖到右侧即可。
*/

// 注册widget
function widget_tsovweather_register() {
	function widget_tsovweather($args) {
		extract($args);
		echo $before_widget;
 
		// 加入一个层标签，方便我们使用css样式
		echo '<div id="tsovweather">';
 
		// widget的标题
		echo $before_title . '天气预报' . $after_title;
 
		// 标题之后是正文，先获得信息
		//$crinfo = mfp_addCopyright();
		echo '<iframe src="http://tq.tsov.net/weather.php" width="100%" height="250" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" border="0"/></iframe>'; 
 
		// 层标签终止
		echo '</div>'; 
		echo $after_widget;
	}
	register_sidebar_widget('TsovWeather', 'widget_tsovweather', null, 'TsovWeather');
}
 
// 调用add_action注册widget
add_action('init', 'widget_tsovweather_register');

 
// 定义widget的css样式
//function mfp_copyright_widget_style() {

//}
// 使用add_action在网页头部插入上面的css代码段
//add_action('wp_head', 'mfp_copyright_widget_style');
?>