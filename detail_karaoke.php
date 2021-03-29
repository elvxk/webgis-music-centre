<!DOCTYPE html>
 <?php
 $id=$_GET['id'];
 include 'config.php';
    $data = mysqli_query($connection, "SELECT * from karaoke where id_kar='$id'");
    foreach ($data as $row){ 
    	$row["nama_kar"];
    }
?>
<html>
<head>
	<title>Music Centre Kota Malang</title>
	<link rel="shortcut icon" href="images/pusat.png">
	<style>
		.sec1{ 
				text-align: center; 
				background-size:100%;
				background-position:center;
				width: 100%;}	
		.sec2{ 
				text-align: center; 
				background-size:100%;
				background-position:center;
				width: 100%;}	
		h1{
			color: #FFFFFF;
				text-shadow: 2px 2px 4px #000000;
		}
		table {
			border-radius: 20px;
				margin-left:auto; 
				margin-right:auto;
				font-family: sans-serif;
				color: #FFFFFF;
				border-collapse: collapse;
				width: 50%;
				background-color:#262626;
			}
			table tr th{
				background: #262626;
				color: #fff;
				font-weight: normal;
			}
			 
			table, th, td {
				padding: 8px 20px;
				text-align: center;
			}
			 
			table tr:hover {
				opacity:0.75;
			}
			 
			table tr:nth-child(even) {
				background-color: #151515;
			}
			table-wrapper{
				height: 300px;
				overflow: auto;
			}
	</style>
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
	<script type="text/javascript">
	function initMap() {
		var map = new google.maps.Map(document.getElementById('show_maps'), {
		  center: {lat: -1.035721, lng: 118.436931},
		  zoom: 5
		});
	}
</script>
</head>
<body style="background:url(images/bg.jpg) fixed;background-repeat:no-repeat; background-size: 150%;">
		<section class="sec1">
			<img src="images/ilogo.png" width="250">
		</section>
		<section class="sec2">
			<h1><?php echo $row["nama_kar"]; ?></h1>
			<img src="images/karaoke/<?php echo $id ?>.png" width="250" style="border-radius:20px;">
			<img src="images/karaoke/s<?php echo $id ?>.png" width="250" style="border-radius:20px;"><br>
			<?php
			foreach ($data as $row){ ?>
			<table>
    			<tr>
    				<td>JAM BUKA</td>
    				<td><?php echo $row["jam_kar"]; ?></td>
    			</tr>
    			<tr>
    				<td>ALAMAT</td>
    				<td><?php echo $row["alamat_kar"]; ?></td>
    			</tr>
    			<tr>
    				<td>JARAK DARI PUSAT KOTA</td>
    				<td><?php echo $row["jrk_karaoke"]; ?>km</td>
    			</tr>
    			<tr>
    				<td>SEWA /JAM</td>
    				<td><?php echo $row["sewa_kar"] ?></td>
    			</tr>
    			<tr>
    				<td>TELP</td>
    				<td><?php echo $row["telp_kar"]; ?></td>
    			</tr>
    			<tr>
    				<td>LATITUDE,LONGITUDE</td>
    				<td><?php echo $row["coor_kar"] ?></td>
    			</tr>
    		</table>
   			<?php }
   			 ?>
   			 <br><h1>PETA LOKASI</h1>
		<?php echo $row["map"] ?>
		</section>
</body>
</html>
