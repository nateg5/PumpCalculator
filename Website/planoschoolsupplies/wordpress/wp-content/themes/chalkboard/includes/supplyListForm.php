<form action="?page_id=350" method="post">
	<table align="center">
		<tr><td><table>
		<tr>
			<td>
				Select School
			</td>
			<td>
				<select id="school" name="school" onchange="getSchoolGrades()">
					<?php
					/*$result = mysql_query("SELECT * FROM ss_schools");*/
					$result = mysql_query("SELECT p.ID, p.post_title, pm.meta_value FROM wp_posts p, wp_postmeta pm WHERE p.ID=pm.post_id AND pm.meta_key='tcp_order' AND p.ID in (SELECT id_from FROM wp_tcp_rel_entities) AND p.ID not in (SELECT id_to FROM wp_tcp_rel_entities) ORDER BY p.post_title");

					while($row = mysql_fetch_array($result))
					{
						echo "<option value=\"" . $row["ID"] . "\">" . $row["post_title"] . "</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Select Grade
			</td>
			<td id="grade">
				<select name="grade">
					<!-- will be loaded through AJAX -->
				</select>
				<!-- initialize selection -->
				<script type="text/javascript">getSchoolGrades();</script>
			</td>
		</tr>
		</table></td></tr>
		<tr>
			<td>
				<input type="submit" value="Get Your Supply List &gt;&gt;" />
			</td>
		</tr> 
	</table>
</form>