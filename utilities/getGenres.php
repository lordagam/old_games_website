<?php
namespace Messerli90\IGDB;
include 'IGDB.php';
require "connect.php";

$sql = "SELECT Title, Description FROM games_dos";

if ($result=mysqli_query($conn,$sql)) {
	while ($row=mysqli_fetch_row($result)) {
		if ($row[1] == '') {
			echo $row[0] . "<br />";
			$api_key  = 'ba989492667e36e4abe1f3cc47d2d10a';
			$url = 'https://api-2445582011268.apicast.io';
			$igdb = new IGDB($api_key, $url);
			$arr1 = $igdb->{'searchGames'}($row[0]);
			//$myJSON = json_encode($arr1);
			$summary = $arr1[0]->summary;
			$pic = (isset($arr1[0]->cover->url)) ? $arr1[0]->cover->url : $arr1[0]->screenshots[0]->url;
			if (isset($pic)) {
				$pic = str_replace('thumb', 'cover_big' , $pic);
				echo $pic;
				$sql2 = "UPDATE games_dos SET Pic = '" . $pic . "' WHERE Title = '" . $row[0] . "'";
				if ($conn->query($sql2) === TRUE) {
						echo "Updated PIC";
					} else {
						echo "console.log('Error updating record: ' . $conn->error . ')";
					}
				$sql3 = "UPDATE games_dos SET Description = '" . $summary . "' WHERE Title = '" . $row[0] . "'";
				if ($conn->query($sql3) === TRUE) {
						echo "Updated Summary";
					} else {
						echo "console.log('Error updating record: ' . $conn->error . ')";
					}
			} else {
				echo "no pic found!";
				$sql4 = "UPDATE games_dos SET Description = '" . $summary . "' WHERE Title = '" . $row[0] . "'";
				if ($conn->query($sql4) === TRUE) {
						echo "Updated Summary";
					} else {
						echo "console.log('Error updating record: ' . $conn->error . ')";
					}
			}
			
		}
	}
			

	}			
?>