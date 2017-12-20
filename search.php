<?php
	require 'header.php';
?>
    <!-- ################################################################################################ -->
    <div id="homepage" class="clear">
      <!-- ################################################################################################ -->
      <div class="divider2"></div>
      <!-- ################################################################################################ -->
      <section class="clear">
	  	  <center><h1>Search by First Letter</h1></center>
        <ul class="nospace center clear">
			<li class="one_half first">
				<p style = "font-size:20px;">
				<a href = 'search.php?gamesbyletter=a'>A</a><br />
				<a href = 'search.php?gamesbyletter=b'>B</a><br />
				<a href = 'search.php?gamesbyletter=c'>C</a><br />
				<a href = 'search.php?gamesbyletter=d'>D</a><br />
				<a href = 'search.php?gamesbyletter=e'>E</a><br />
				<a href = 'search.php?gamesbyletter=f'>F</a><br />
				<a href = 'search.php?gamesbyletter=g'>G</a><br />
				<a href = 'search.php?gamesbyletter=h'>H</a><br />
				<a href = 'search.php?gamesbyletter=i'>I</a><br />
				<a href = 'search.php?gamesbyletter=j'>J</a><br />
				<a href = 'search.php?gamesbyletter=k'>K</a><br />
				<a href = 'search.php?gamesbyletter=l'>L</a><br />
				<a href = 'search.php?gamesbyletter=m'>M</a><br />
				<a href = 'search.php?gamesbyletter=n'>N</a><br />
				<a href = 'search.php?gamesbyletter=o'>O</a><br />
				<a href = 'search.php?gamesbyletter=p'>P</a><br />
				<a href = 'search.php?gamesbyletter=q'>Q</a><br />
				<a href = 'search.php?gamesbyletter=r'>R</a><br />
				<a href = 'search.php?gamesbyletter=s'>S</a><br />
				<a href = 'search.php?gamesbyletter=t'>T</a><br />
				<a href = 'search.php?gamesbyletter=u'>U</a><br />
				<a href = 'search.php?gamesbyletter=v'>V</a><br />
				<a href = 'search.php?gamesbyletter=w'>W</a><br />
				<a href = 'search.php?gamesbyletter=x'>X</a><br />
				<a href = 'search.php?gamesbyletter=y'>Y</a><br />
				<a href = 'search.php?gamesbyletter=z'>Z</a>
				</p>
			</li>
			<li class="one_half" style="text-align:left;">
				<?php
				if(!empty($_GET["gamesbyletter"])) {
					if(htmlspecialchars($_GET["gamesbyletter"]) != "" and htmlspecialchars($_GET["gamesbyletter"]) != null) {
						require "connect.php";
						$sql="SELECT Title, Pic, Description, GameFile, ID FROM games_DOS WHERE Title LIKE '" . htmlspecialchars($_GET["gamesbyletter"]) . "%'";

						if ($result=mysqli_query($conn,$sql)) {
								while ($row=mysqli_fetch_row($result)) {
									echo "<a href='game.php?Game=" . $row[4] . "'>" . $row[0] . "</a><br />";
								}
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
					}
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