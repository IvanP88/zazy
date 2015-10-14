<div id="head1">
			<div id="topS">
			<!-- link_menu -->
				<?
					include('menu_ua.html'); 
				?>
				<div id="head_2">
				<img id="zaz" src="my_Website/zaz.png"/>
				</div>
				<div id="head_3">				 
				<?
					$pictures= array("my_Website/head_1.png", "my_Website/head_2.png", "my_Website/head_3.png");
					shuffle($pictures);
					echo "<img src=$pictures[0] id=head_Conternt_car>";
				?>
				</div>
			<!--  -->
		</div>