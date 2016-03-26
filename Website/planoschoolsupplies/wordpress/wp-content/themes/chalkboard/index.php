<?php

/**

 * The main template file.

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 */

get_header(); ?>

		<div id="primary">

			<div id="content" role="main">

			<p>It's that time of year again! It's time for the treasure hunt that is the yearly school supply list ... Wild Goose Chase is more like it! Avoid long hours going store to store in search of every specific item on your chhild's supply list. In a few easy steps you can have everything ordered within minutes!</p>

                        <?php include("wp-content/themes/chalkboard/includes/supplyListForm.php"); ?>

			</div><!-- #content -->

		</div><!-- #primary -->

<?php get_footer(); ?>