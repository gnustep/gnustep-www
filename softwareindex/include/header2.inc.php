<?php

/*
 FIXME:
 -
 */

function selectionlist($name, $values, $default="", $onchange="")
{
	echo "<select name=\"$name\"";
	if($onchange)
		echo " onchange=\"location=this.options[this.selectedIndex].value;\"";
	echo ">\n";
	reset($values);
	while(list($key, $value)=each($values))
		{
		//		echo $value."<->".$default."<br>";
		echo "<option";
		if($onchange)
			{
			if($value == "---")
				echo " value=\"".$onchange."?".$name."=".$default."\"";
			else if($value == "Any")
				echo " value=\"".$onchange."\"";
			else
				echo " value=\"".$onchange."?".$name."=".$value."\"";
			}
		if($value == $default)
			echo " selected>".htmlentities($value);
		else
			echo ">".htmlentities($value)."\n";
		}
	echo "</select>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>		
	<title><?php echo $TITLE;?></title>
	<META NAME="DESCRIPTION" CONTENT="<?php echo $CONTENT;?>">
	<META NAME="KEYWORDS" CONTENT="<?php echo $KEYWORDS;?>">
	<link rel="stylesheet" type="text/css" href="css/swi.css"/>
</head>

<body>
<table border="0">
	<tr class="listing">
		<td colspan="2" align="center">
<?php include "include/banner.inc.php"; ?>
		</td>
	</tr>
	<tr>
		<td valign="top">
			<a href="index.php"><?php echo $MAIN;?></a>
			
<?php
// create category list

	
/*
$query="select count(category1) as count,category1 from ${DB_TABLE}";
$query.=" where approved=1 group by category1 order by category1 asc;";
$result=query($sql);
 */

 $query="create table if not exists ${DB_TABLE}_temp (category1 varchar(50)) type=heap";
 query($query);
 $query="delete from ${DB_TABLE}_temp";
 query($query);
 $query="insert into ${DB_TABLE}_temp select category1 from ${DB_TABLE} where approved=1 and category1<>''";
 query($query);
 $query="insert into ${DB_TABLE}_temp select category2 from ${DB_TABLE} where approved=1 and category2<>''";
 query($query);
 $query="insert into ${DB_TABLE}_temp select category3 from ${DB_TABLE} where approved=1 and category3<>''";
 query($query);
 $query="insert into ${DB_TABLE}_temp select category4 from ${DB_TABLE} where approved=1 and category4<>''";
 query($query);
 $query="select count(category1) as count,category1 from ${DB_TABLE}_temp group by category1 order by category1 asc";
 $result=query($query);


/*
SELECT t.category1, count( t.category1 ) AS count
FROM (
	  
	  SELECT category1, id
	  FROM `${DB_TABLE}` 
	  WHERE approved = 1 AND category1 <> ''
	  UNION SELECT category2, id
	  FROM `${DB_TABLE}` 
	  WHERE approved = 1 AND category2 <> ''
	  UNION SELECT category3, id
	  FROM `${DB_TABLE}` 
	  WHERE approved = 1 AND category3 <> ''
	  UNION SELECT category4, id
	  FROM `${DB_TABLE}` 
	  WHERE approved = 1 AND category4 <> ''
	  ) AS t
GROUP BY t.category1
ORDER BY t.category1 ASC
*/
/*
$sql = 'SELECT t.category1, count( t.category1 ) AS count ';
$sql .= 'FROM ( ';
$sql .= 'SELECT category1, id ';
$sql .= 'FROM `${DB_TABLE}` ';
$sql .= 'WHERE approved = 1 AND category1 <> \'\' ';
$sql .= 'UNION SELECT category2, id ';
$sql .= 'FROM `${DB_TABLE}` ';
$sql .= 'WHERE approved = 1 AND category2 <> \'\' ';
$sql .= 'UNION SELECT category3, id ';
$sql .= 'FROM `${DB_TABLE}` ';
$sql .= 'WHERE approved = 1 AND category3 <> \'\' ';
$sql .= 'UNION SELECT category4, id ';
$sql .= 'FROM `${DB_TABLE}` ';
$sql .= 'WHERE approved = 1 AND category4 <> \'\' ) AS t ';
$sql .= 'GROUP BY t.category1 ';
$sql .= 'ORDER BY t.category1 ASC';
	$result=query($sql);
*/

	while($row=mysql_fetch_array($result))
		{
//		if(!$row['category1'])
//			continue;	// skip "none"
		echo "<a href='showapps.php?cat=".$row['category1'];
		if($_GET['rom'])
			echo "&rom=".rawurlencode($_GET['rom']);

		echo "'>".$row['category1']."(".$row['count'].")</a><br/>";
		}
	mysql_free_result($result);
?>
					</td>

					<td valign="top">
						<table width="100%">
							<tr>
								<td valign="top" align=left>
									<table border=0>
									<tr>
									<td>
									<form method="get" action="search.php">
										<label><b>Search for</b></label>
										<input type="text" id="query" name="q" size="15" value="">
										<input type="image" border="0" value="Go" src="images/srch_32.png" alt="Go" width="20" height="20" align="top">
									</form>
									</td>
									<td>
									<form method="get" action="index.php">
										<label><b>Filter by OS</b></label>
<?php
selectionlist("rom", array("Any",
						   "---",
						   "Sharp ROM",
						   "Cacko", 
						   "pdaXrom", 
						   "Open Zaurus",
						   "QuantumSTEP",
						   "MacOS X",
						   "Linux x86", 
						   "Other",
						   ), $_GET['rom'], "index.php");
?>
										<label><b>Filter by Model</b></label>
<?php
selectionlist("model", array("Any",
						   "---",
						   "SL5x00",
						   "C7x0", 
						   "C860", 
						   "C1000",
						   "C3000",
						   "SL6000",
						   ), $_GET['model'], "index.php");
?>
									</form>
									</td>
								<td valign="top" align="right">
						[ <a href="topten.php">Top 10</a> |
						  <a href="submit.php">New Entry</a> |
						  <a href="comment.php?cmd=all">Comments</a> |
						  <a href="stats.php">Pending</a> |
						  <a href="rss.php?<?php echo autologin()?>">RSS</a> |
						  <a href="plist.php">.plist</a>
						  <?php
						  if(!isloggedin())
							echo " | <a href=\"login.php\">Login</a>";
						  else
							{
							echo " | <a href=\"login.php?cmd=logout\">Logout ".loginname()."</a>";
							echo " | <a href=\"mysubscriptions.php\">Subscriptions</a>";
							
							}
						  ?>
						]
						<br/>
						<br/>
						<br/>
								</td>
									</table>
								</td>
							</tr>
						</table>
				<table width="100%" bgcolor=white>
				<tr>
					<td>
<?php global $CONTENT; echo $CONTENT;?>
					</td>
				</tr>
			</table>
<p>