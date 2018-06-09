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
	  <center><h1><u>Popular Games or <a href = 'search.php?gamesbyletter=a''>Browse</a> over a 1000 games.</u></h1>
				<b>Search By First Letter:</b>
				<a href = 'search.php?gamesbyletter=[0-9]'>[0-9]</a>
				<a href = 'search.php?gamesbyletter=a'>A</a>
				<a href = 'search.php?gamesbyletter=b'>B</a>
				<a href = 'search.php?gamesbyletter=c'>C</a>
				<a href = 'search.php?gamesbyletter=d'>D</a>
				<a href = 'search.php?gamesbyletter=e'>E</a>
				<a href = 'search.php?gamesbyletter=f'>F</a>
				<a href = 'search.php?gamesbyletter=g'>G</a>
				<a href = 'search.php?gamesbyletter=h'>H</a>
				<a href = 'search.php?gamesbyletter=i'>I</a>
				<a href = 'search.php?gamesbyletter=j'>J</a>
				<a href = 'search.php?gamesbyletter=k'>K</a>
				<a href = 'search.php?gamesbyletter=l'>L</a>
				<a href = 'search.php?gamesbyletter=m'>M</a>
				<a href = 'search.php?gamesbyletter=n'>N</a>
				<a href = 'search.php?gamesbyletter=o'>O</a>
				<a href = 'search.php?gamesbyletter=p'>P</a>
				<a href = 'search.php?gamesbyletter=q'>Q</a>
				<a href = 'search.php?gamesbyletter=r'>R</a>
				<a href = 'search.php?gamesbyletter=s'>S</a>
				<a href = 'search.php?gamesbyletter=t'>T</a>
				<a href = 'search.php?gamesbyletter=u'>U</a>
				<a href = 'search.php?gamesbyletter=v'>V</a>
				<a href = 'search.php?gamesbyletter=w'>W</a>
				<a href = 'search.php?gamesbyletter=x'>X</a>
				<a href = 'search.php?gamesbyletter=y'>Y</a>
				<a href = 'search.php?gamesbyletter=z'>Z</a>
				</center>
				<br />
        <ul class="nospace center clear">
			<?php
				$result = get_home_list();

						$countrow = 1;
						while ($row=mysqli_fetch_row($result)) {
							if ($countrow % 4 == 0 && $countrow >=4) {
								echo "<li class='one_third first'>";
							} else {
								echo "<li class='one_third'>";
							}

							echo "<article>";
							echo "<div class='.boxholder_no_border push30'><img src = '" . $row[1] . "'><br /></div>";
							echo "<h1><span class='icon-fullscreen'></span>" . $row[0] . "</h1>";
							echo "<footer><a href='game.php?Game=" . $row[4] . "' class='button small orange rnd5'>Play or Download &raquo;</a></footer>";
							echo "</article>";
							echo "</li>";

							$countrow +=1;
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
