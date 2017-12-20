<?php
	require 'header.php';
?>
    <!-- ################################################################################################ -->
    <div id="homepage" class="clear">
	  <p>Hello and welcome to Great Old Games! You can download retro PC games for free or play them right on this site! If downloaded, these games will require <a href="https://www.dosbox.com/" target="_blank">DOSBox</a> to play which is easy and free to download and install.<p>
      <!-- ################################################################################################ -->
      <div class="divider2"></div>
      <!-- ################################################################################################ -->
      <section class="clear">
	  <center><h1><u>Popular Games or <a href = 'search.php?gamesbyletter=a''>Browse</a> over a 1000 games.</u></h1></center>
        <ul class="nospace center clear">
			<?php
				require "connect.php";
				$sql="SELECT Title, Pic, Description, GameFile, ID FROM games_DOS Where ID IN (1393, 1389, 1390, 1391, 1392, 849)";

				if ($result=mysqli_query($conn,$sql)) {
						$countrow = 1;
						while ($row=mysqli_fetch_row($result)) {
							if ($countrow % 4 == 0 && $countrow >=4) {
								echo "<li class='one_third first'>";
							} else {
								echo "<li class='one_third'>";
							}
									
							echo "<article>";
							echo "<div class='.boxholder_no_border push30'><img src='images/game_images/" . $row[1] . ".jpg' alt='' style='max-height: 200px;'></div>";
							echo "<h1><span class='icon-fullscreen'></span>" . $row[0] . "</h1>";
							echo "<footer><a href='game.php?Game=" . $row[4] . "' class='button small orange rnd5'>Play or Download &raquo;</a></footer>";
							echo "</article>";
							echo "</li>";
								
							$countrow +=1;
						}
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
			 ?>
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