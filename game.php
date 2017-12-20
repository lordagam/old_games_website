<?php
	require 'header.php';
	
	//if issue is reported 
	if(isset($_POST['reportIssue'])) { 
		// the message
		$msg = "There was an issue with" . $_POST["ID"];

		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);

		// send email
		mail("chrono232003@yahoo.com","Issue with " . $_POST["ID"],$msg); 
	} 
?>
<script>
	var fireAlert = function() {
		alert("Thank you for letting us know there is an issue with this page, we will look into it.");
	}
</script>
    <!-- ################################################################################################ -->
    <div id="homepage" class="clear">
	    <!-- ################################################################################################ -->
      <div class="divider2"></div>
      <!-- ################################################################################################ -->
      <section class="clear">
		<p>Play this game directly on the browser or download from the link below. If needed, get DOSBox <a href="https://www.dosbox.com/" target="_blank">here</a><br /></p>
		<p>If you have issues loading a game, please report with button below:</p>
		<form style = "width:100px;" action="<?=$_SERVER['PHP_SELF'];?>" method="post"><input type="hidden" name="ID" value=<?php htmlspecialchars($_GET["Game"]); ?>><input type="button" name="reportIssue" value="Report Issue" onclick="return fireAlert();"></form>
           
        <ul class="nospace center clear">
            <li class="one_half first">
				<article>
				<div id="dosbox"></div>
				<br/>
				<button class='button small orange rnd5' onclick="dosbox.requestFullScreen();">Make fullscreen</button>
			</li>
			<li class="one_half">
		<?php
			require "connect.php";
			//grab the game data from the data base
			$sql="SELECT Title, Pic, Description, GameFile, ExecutePath FROM games_DOS WHERE ID = " . htmlspecialchars($_GET["Game"]);
			if ($result=mysqli_query($conn,$sql)) {
				while ($row=mysqli_fetch_row($result)) {
					
					echo "<script type='text/javascript' src='https://js-dos.com/cdn/js-dos-api.js'></script>";
					echo "<script type='text/javascript'>";
					echo "var dosbox = new Dosbox({";
					echo "id: 'dosbox',";
					echo "onload: function (dosbox) {";
					echo "dosbox.run('games/" .$row[3] . "','./" . $row[4] . "')";
					echo "},";
					echo "onrun: function (dosbox, app) {";
					echo "}";
					echo "});";
					echo "</script>";
						
					echo "<article>";
					echo "<div class='.boxholder_no_border push30'><img src='images/game_images/" . $row[1] . ".jpg' alt='' style='max-height: 200px;'></div>";
					echo "<h1><span class='icon-fullscreen'></span>" . $row[0] . "</h1>";
					echo "<p>" . $row[2] . "</p>";
					echo "<a href='games/" . $row[3] . "' class='button small orange rnd5'>Download Now</a>";
					echo "</article>";
					echo "</li>";
				}
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			 ?>
			</li>
        </ul>
      </section>
      <!-- ################################################################################################ -->
      <div class="divider2"></div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<?php
	require 'footer.php';
?>