<?php
$con = mysql_connect("schoolsuppliesdb.db.7095101.hostedresource.com", "schoolsuppliesdb", "NateJoni-41");

if(!$con)
{
   die('Could not connect: ' . mysql_error());
}

mysql_select_db("schoolsuppliesdb", $con);

$result = mysql_query("SELECT * FROM wp_posts WHERE ID=" . $_GET["school_id"] . "");

if($row = mysql_fetch_array($result))
{
        $schoolName = $row["post_title"];
}

/*$result = mysql_query("SELECT * FROM ss_grades where grade_id in (SELECT grade_id FROM ss_school_grades where school_id=" . $_GET["school_id"] . ")");*/
$result = mysql_query("SELECT p.ID, p.post_title, pm.meta_value FROM wp_posts p, wp_postmeta pm WHERE p.ID=pm.post_id AND pm.meta_key='tcp_order' AND p.ID in (SELECT id_to FROM wp_tcp_rel_entities WHERE id_from=" . $_GET["school_id"] . ") ORDER BY pm.meta_value");

while($row = mysql_fetch_array($result))
{
	echo "<option value=\"" . $row["ID"] . "\">" . substr($row["post_title"], strlen($schoolName)) . "</option>";
}

mysql_close($con);
?>