<?php

/**

 * The template used for displaying page content in page.php

 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

                <?php

                if($_POST["school"] != NULL && $_POST["grade"] != NULL)
                {
                    $result = mysql_query("SELECT s.school_name, g.grade_name FROM ss_schools s, ss_grades g WHERE s.school_id=" . $_POST["school"] . " AND g.grade_id=" . $_POST["grade"] . "");

                    $row = mysql_fetch_array($result);

                    echo "<h1 class='entry-title'>" . $row["school_name"] . " " . $row["grade_name"] . "</h1>";
                }
                else if($_GET["category_id"] != NULL && $_GET["category_description"] != NULL)
                {
                    echo "<h1 class='entry-title'>" . $_GET["category_description"] . "</h1>";
                }
                else
                {
                    ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php
                }

                ?>

	</header><!-- .entry-header -->



	<div class="entry-content">

		<?php the_content(); ?>

		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>

		<?php edit_post_link( __( 'Edit', 'toolbox' ), '<span class="edit-link">', '</span>' ); ?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->