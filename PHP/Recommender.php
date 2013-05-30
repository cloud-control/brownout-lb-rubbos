	// Display recommendations
	print("Similar stories: <br>");
	/*$result = mysql_query(
		"SELECT ".//MAX_STATEMENT_TIME=1000
			"c2.story_id, count(c2.story_id) as popularity, c2.date ".
		"FROM ".
			"comments AS c ".
			"LEFT JOIN comments AS c2 ON (c.writer=c2.writer) ".
		"WHERE c.story_id=".$storyId. " AND c2.story_id!=".$storyId." ".
		"GROUP BY c2.story_id ".
		"ORDER BY popularity DESC, c2.date DESC LIMIT 5;", $link);
	
	$recommendedStoryIds = "";
	while ($row = mysql_fetch_array($result))
	{
		$recommendedStoryIds .= $row['story_id'] . ",";
	}
	mysql_free_result($result);

	$result = mysql_query("SELECT * FROM stories WHERE id IN (".$recommendedStoryIds."0)");
	while ($row = mysql_fetch_array($result))
	{
		print("<a href=\"/PHP/ViewStory.php?storyId=".$row['id']."\">".$row['title']."</a> | ");
	}
	mysql_free_result($result);*/

