<style type="text/css">
#bro {
	position:absolute;
	left:10px;
	top:375px;
	width:0px;
	height:0;
	z-index:1;
	overflow: hidden;
}
.style1 {
	color: #0066FF;
	font-weight: bold;
	line-height: 18px;
}
.close {	font-family: verdana;
	font-size: 9px;
	text-decoration: none;
	color: #000000;
	text-align: right;
}
#examplediv {
	border-radius: 4px;
	border: 1px solid #dd4b39;
}
</style>
<?php
include "../../dist/koneksi.php";
$inbox=mysql_query("select * from tb_deposit where notif_dep='N' limit 1");
$adaInbox=mysql_num_rows($inbox);
	if ($adaInbox>='1'){
		?>
		<div id="examplediv" style="width:200px; padding: 5px; background: #F5F5F5">
		<?php 
		echo"<i class='fa fa-bell-o'></i> Received Deposit"; 
		while($tinbox=mysql_fetch_array($inbox)){
			// Update data menjadi Y sebagai tanda	
			$up=mysql_query("update tb_deposit set notif_dep='Y' where id_deposit='$tinbox[id_deposit]'");
		}
		?>
		<div id="bro">
			<audio controls="controls" autoplay="autoplay">
				<source src="plugins/notifsound/sound.mp3" type="audio/mpeg" />
				<embed src="plugins/notifsound/sound.mp3" />
			</audio>
		</div>
		<?php
		}
		?>
		</div>
<?php
include "../../dist/koneksi.php";
$inboxw=mysql_query("select * from tb_withdraw where notif_with='N' limit 1");
$adaInboxw=mysql_num_rows($inboxw);
	if ($adaInboxw>='1'){
		?>
		<div id="examplediv" style="width:200px; padding: 5px; background: #F5F5F5">
		<?php 
		echo"<i class='fa fa-bell-o'></i> Received Withdraw"; 
		while($tinboxw=mysql_fetch_array($inboxw)){
			// Update data menjadi Y sebagai tanda	
			$up=mysql_query("update tb_withdraw set notif_with='Y' where id_withdraw='$tinboxw[id_withdraw]'");
		}
		?>
		<div id="bro">
			<audio controls="controls" autoplay="autoplay">
				<source src="plugins/notifsound/sound.mp3" type="audio/mpeg" />
				<embed src="plugins/notifsound/sound.mp3" />
			</audio>
		</div>
		<?php
		}
		?>
		</div>