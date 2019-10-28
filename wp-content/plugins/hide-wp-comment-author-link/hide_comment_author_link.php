<?php
/*
Plugin Name: Hide Comment Author Link
Plugin URI: https://www.usefulblogging.com/remove-comment-author-link-in-wordpress/
Description: Use Hide Comment Author Link plugin and easily disable comment author url from your wordpress site.
Author: Ataul Ghani
Version: 1.4
Author URI: https://www.usefulblogging.com
*/

	if( !function_exists("disable_comment_author_links")){
		function disable_comment_author_links( $author_link ){
			return strip_tags( $author_link );
		}
		add_filter( 'get_comment_author_link', 'disable_comment_author_links' );
	}

?>