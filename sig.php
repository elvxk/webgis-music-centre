<!DOCTYPE html>
     <?php
        include 'config.php';
        $data = mysqli_query($connection, "SELECT * from studio");
        $no=1;
        ?>
<html>
<head>
	<title>Music Centre Kota Malang</title>
	<link rel="shortcut icon" href="images/pusat.png">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
		integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
		crossorigin=""/>
	<link rel="stylesheet" href="assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.css" />
	<style type="text/css">
		#mapid { height: 90vh; }
		
		.sec1{ 
				background:url(images/bg.jpg); 
				background-size:100%;
				background-position:center;
				width: 100%;}	
}
    .inner_main_menu {
                margin:0 auto;
                width:1178px;
            }
            
            .inner_main_menu ul {
                margin:0 auto; 
                padding:0; 
                list-style:none; 
                text-align:right;
            }
            
            .inner_main_menu ul li{
                float:none; 
                display:inline-block;
            }
            
            .inner_main_menu ul li a{
                color: #FFFFFF; 
                font-size:17px; 
                text-decoration:none; 
                display:block; 
                padding: 18px 28px;
                transition: opacity 0.2s ease-in; /* vendorless fallback */
                -o-transition: opacity 0.2s ease-in; /* opera */
                -ms-transition: opacity 0.2s ease-in; /* IE 10 betas, not needed in final build. */
                -moz-transition: opacity  0.2s ease-in; /* Firefox */
                -webkit-transition: opacity 0.2s ease-in; /*safari and chrome */
            }
            
            .inner_main_menu ul li a:hover{
                opacity:0.3;
                transition: opacity 0.2s ease-in; /* vendorless fallback */
                -o-transition: opacity 0.2s ease-in; /* opera */
                -ms-transition: opacity 0.2s ease-in; /* IE 10 betas, not needed in final build. */
                -moz-transition: opacity  0.2s ease-in; /* Firefox */
                -webkit-transition: opacity 0.2s ease-in; /*safari and chrome */
            }
            
            #main_menu{
                margin :-px;
                position: fixed; /* Set the navbar to fixed position */
                top:10px; /* Position the navbar at the top of the page */
                width: 100%; /* Full width */
                opacity:0.75;
                transition: opacity 0.5s ease-in; /* vendorless fallback */
                -o-transition: opacity 0.5s ease-in; /* opera */
                -ms-transition: opacity 0.5s ease-in; /* IE 10 betas, not needed in final build. */
                -moz-transition: opacity  0.5s ease-in; /* Firefox */
                -webkit-transition: opacity 0.5s ease-in; /*safari and chrome */
            }
            
            #main_menu:hover{
            opacity:1;
                transition: opacity 0.5s ease-in; /* vendorless fallback */
                -o-transition: opacity 0.5s ease-in; /* opera */
                -ms-transition: opacity 0.5s ease-in; /* IE 10 betas, not needed in final build. */
                -moz-transition: opacity  0.5s ease-in; /* Firefox */
                -webkit-transition: opacity 0.5s ease-in; /*safari and chrome */
            }
	</style>
	<link rel="stylesheet" href="icon.css" />
</head>
<body style="background-color:#262626;">
    <div id="main_menu">
            <div class="inner_main_menu">
                <ul>
                   <li><a href="index.php">ʜᴏᴍᴇ</a></li>
                   <li><a href="data.php">ᴅᴀᴛᴀ</a></li>
                    <li><a href="https://leafletjs.com/reference-1.6.0.html" target="_blank">ᴅᴏᴄᴜᴍᴇɴᴛ</a></li>
                </ul>
            </div>
        </div>
		<section class="sec1">
			<a href="index.php"><img src="images/logo.png" width="150"></a>
		</section>
	<div id="mapid"></div>
</body>
	 <!-- Make sure you put this AFTER Leaflet's CSS -->
	 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
	   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
	   crossorigin=""></script>
	  
	<script src="assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>
	  
	<script type="text/javascript">
	   var mymap = L.map('mapid').setView([-7.99391166667, 112.637333333], 12);
	   
	   var Layer = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
     maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
});
	mymap.addControl(Layer);


var baseLayers =
	{
		"OpenStreetMap" : Layer,
		"Dark": L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png'),
		"Light":  L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth/{z}/{x}/{y}{r}.png'),
		"Old": L.tileLayer('http://a.tiles.mapbox.com/v4/mapbox.pirates/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'),
		"BnW": L.tileLayer('http://a.tiles.mapbox.com/v4/mapbox.high-contrast/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'),
		"France Style": L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png'),
		"Paint" :  L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.jpg'),
		"Canvas":  L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}'),
		"Bike": L.tileLayer('http://a.tiles.mapbox.com/v4/mapbox.run-bike-hike/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'),
		"Jalan Basic":  L.tileLayer('http://a.tiles.mapbox.com/v4/mapbox.streets-basic/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'),
		"Esri" :  L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}'),
		"CartoDB" :  L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png'),
		"Topo" :  L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png'),
		"CyclOSM" :  L.tileLayer('https://dev.{s}.tile.openstreetmap.fr/cyclosm/{z}/{x}/{y}.png'),
		"StamenBG" :  L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/toner-background/{z}/{x}/{y}{r}.png'),
	};
var Istudio = L.icon({
    iconUrl: 'images/studio.png',
    iconSize:     [50, 50], // size of the icon
});
var Dstudio = L.icon({
    iconUrl: 'images/st_dekat.png',
    iconSize:     [50, 50], // size of the icon
});
var Jstudio = L.icon({
    iconUrl: 'images/st_jauh.png',
    iconSize:     [50, 50], // size of the icon
});
var Istore = L.icon({
    iconUrl: 'images/store.png',
    iconSize:     [50, 50], // size of the icon
});
var Dstore = L.icon({
    iconUrl: 'images/sto_dekat.png',
    iconSize:     [50, 50], // size of the icon
});
var Jstore = L.icon({
    iconUrl: 'images/sto_jauh.png',
    iconSize:     [50, 50], // size of the icon
});
var Icafe = L.icon({
    iconUrl: 'images/icafe.png',
    iconSize:     [50, 50], // size of the icon
});
var Dcafe = L.icon({
    iconUrl: 'images/cf_dekat.png',
    iconSize:     [50, 50], // size of the icon
});
var Jcafe = L.icon({
    iconUrl: 'images/cf_jauh.png',
    iconSize:     [50, 50], // size of the icon
});
var Iclub = L.icon({
    iconUrl: 'images/iclub.png',
    iconSize:     [50, 50], // size of the icon
});
var Dclub = L.icon({
    iconUrl: 'images/cl_dekat.png',
    iconSize:     [50, 50], // size of the icon
});
var Jclub = L.icon({
    iconUrl: 'images/cl_jauh.png',
    iconSize:     [50, 50], // size of the icon
});
var Ikaraoke = L.icon({
    iconUrl: 'images/ikaraoke.png',
    iconSize:     [50, 50], // size of the icon
});
var Dkaraoke = L.icon({
    iconUrl: 'images/kar_dekat.png',
    iconSize:     [50, 50], // size of the icon
});
var Jkaraoke = L.icon({
    iconUrl: 'images/kar_jauh.png',
    iconSize:     [50, 50], // size of the icon
});
var Ipusat = L.icon({
    iconUrl: 'images/pusat.png',
    iconSize:     [60, 60], // size of the icon
});
var Lstudio = L.icon({
    iconUrl: 'images/Lstudio.png',
    iconSize:     [60, 60], // size of the icon
});
var Hkaraoke = L.icon({
    iconUrl: 'images/Hkaraoke.png',
    iconSize:     [60, 60], // size of the icon
});
var Lkaraoke = L.icon({
    iconUrl: 'images/Lkaraoke.png',
    iconSize:     [60, 60], // size of the icon
});
var Vstudio = L.icon({
    iconUrl: 'images/Vstudio.png',
    iconSize:     [60, 60], // size of the icon
});

var pusat = L.marker([-7.982623, 112.630728],{icon: Ipusat}).bindPopup("<img src='images/alun.png' width='150'><h1>ALUN_ALUN KOTA MALANG</h1><br>PUSAT KOTA");
 <?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * from studio");
    foreach ($data as $row){ ?> 
		var <?php echo $row["id_studio"];?> = L.marker([<?php echo $row["latitide"].','.$row["longitude"]?>],{icon: Istudio}).bindPopup("<img src='images/studio/<?php echo $row["id_studio"]; ?>.png' width='100'><h1><?php echo $row["nama_studio"]?></h1><br><?php echo $row["alamat_studio"]?><br><br>Buka &emsp; : <?php echo $row["jam_studio"]?><br>No.Telp &emsp;: <?php echo $row["telp_studio"]?><br>Sewa &emsp; : <?php echo $row["sewa_studio"]?><br>jumlah studio &emsp; : <?php echo $row["jumlah_studio"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_studio"]?> km<br>lihat detail : <a href='detail_studio.php?id=<?php echo $row["id_studio"]; ?>' target='blank'>detail</a>") <?php 
    }
?>
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * from cafe");
    foreach ($data as $row){  ?> 
		var <?php echo $row["id_cafe"];?> = L.marker([<?php echo $row["coor_cafe"]?>],{icon: Icafe}).bindPopup("<img src='images/cafe/<?php echo $row["id_cafe"]; ?>.png' width='100'><h1><?php echo $row["nama_cafe"]?></h1><br><?php echo $row["alamat_cafe"]?><br><br>Buka &emsp; : <?php echo $row["jam_cafe"]?><br>No.Telp &emsp;: <?php echo $row["telp_cafe"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_cafe"]?> km<br>lihat detail : <a href='detail_cafe.php?id=<?php echo $row["id_cafe"]; ?>' target='blank'>detail</a>") <?php 
    }
?>
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * from club");
    foreach ($data as $row){  ?> 
		var <?php echo $row["id_club"];?> = L.marker([<?php echo $row["coor_club"]?>],{icon: Iclub}).bindPopup("<img src='images/club/<?php echo $row["id_club"]; ?>.png' width='100'><h1><?php echo $row["nama_club"]?></h1><br><?php echo $row["alamat_club"]?><br><br>Buka &emsp; : <?php echo $row["jam_club"]?><br>No.Telp &emsp;: <?php echo $row["telp_club"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_club"]?> km<br>lihat detail : <a href='detail_club.php?id=<?php echo $row["id_club"]; ?>' target='blank'>detail</a>") <?php 
    }
?>
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * from toko");
    foreach ($data as $row){  ?> 
		var <?php echo $row["id_toko"];?> = L.marker([<?php echo $row["coor_toko"]?>],{icon: Istore}).bindPopup("<img src='images/toko/<?php echo $row["id_toko"]; ?>.png' width='100'><h1><?php echo $row["nama_toko"]?></h1><br><?php echo $row["alamat_toko"]?><br><br>Buka &emsp; : <?php echo $row["jam_toko"]?><br>No.Telp &emsp;: <?php echo $row["telp_toko"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_toko"]?> km<br>lihat detail : <a href='detail_toko.php?id=<?php echo $row["id_toko"]; ?>' target='blank'>detail</a>") <?php 
    }
?>
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * from karaoke");
    foreach ($data as $row){  ?> 
		var <?php echo $row["id_kar"];?> = L.marker([<?php echo $row["coor_kar"]?>],{icon: Ikaraoke}).bindPopup("<img src='images/karaoke/<?php echo $row["id_kar"]; ?>.png' width='100'><h1><?php echo $row["nama_kar"]?></h1><br><?php echo $row["alamat_kar"]?><br><br>Buka &emsp; : <?php echo $row["jam_kar"]?><br>No.Telp &emsp;: <?php echo $row["telp_kar"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_karaoke"]?> km<br>sewa &emsp; :<?php echo $row["sewa_kar"] ?>/jam<br>lihat detail : <a href='detail_karaoke.php?id=<?php echo $row["id_kar"]; ?>' target='blank'>detail</a>") <?php 
    }
?>
//studio
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM studio WHERE jumlah_studio = (SELECT MAX(jumlah_studio) FROM studio)");
    foreach ($data as $row){  ?> 
        var st_jumlah = L.marker([<?php echo $row["latitide"].','.$row["longitude"]?>],{icon: Vstudio}).bindPopup("<img src='images/studio/<?php echo $row["id_studio"]; ?>.png' width='100'><h1><?php echo $row["nama_studio"]?></h1><br><?php echo $row["alamat_studio"]?><br><br>Buka &emsp; : <?php echo $row["jam_studio"]?><br>No.Telp &emsp;: <?php echo $row["telp_studio"]?><br>Sewa &emsp; : <?php echo $row["sewa_studio"]?><br>jumlah studio &emsp; : <?php echo $row["jumlah_studio"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_studio"]?> km<br>lihat detail : <a href='detail_studio.php?id=<?php echo $row["id_studio"]; ?>' target='blank'>detail</a>") <?php
    }
?>
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM studio WHERE sewa_studio = (SELECT MIN(sewa_studio) FROM studio)");
    foreach ($data as $row){  ?> 
        var st_murah = L.marker([<?php echo $row["latitide"].','.$row["longitude"]?>],{icon: Lstudio}).bindPopup("<img src='images/studio/<?php echo $row["id_studio"]; ?>.png' width='100'><h1><?php echo $row["nama_studio"]?></h1><br><?php echo $row["alamat_studio"]?><br><br>Buka &emsp; : <?php echo $row["jam_studio"]?><br>No.Telp &emsp;: <?php echo $row["telp_studio"]?><br>Sewa &emsp; : <?php echo $row["sewa_studio"]?><br>jumlah studio &emsp; : <?php echo $row["jumlah_studio"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_studio"]?> km<br>lihat detail : <a href='detail_studio.php?id=<?php echo $row["id_studio"]; ?>' target='blank'>detail</a>") <?php
    }
?>

//jauh dekat studio
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM studio WHERE jrk_studio = (SELECT MIN(jrk_studio) FROM studio)");
    foreach ($data as $row){  ?> 
		var st_dekat = L.marker([<?php echo $row["latitide"].','.$row["longitude"]?>],{icon: Dstudio}).bindPopup("<img src='images/studio/<?php echo $row["id_studio"]; ?>.png' width='100'><h1><?php echo $row["nama_studio"]?></h1><br><?php echo $row["alamat_studio"]?><br><br>Buka &emsp; : <?php echo $row["jam_studio"]?><br>No.Telp &emsp;: <?php echo $row["telp_studio"]?><br>Sewa &emsp; : <?php echo $row["sewa_studio"]?><br>jumlah studio &emsp; : <?php echo $row["jumlah_studio"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_studio"]?> km<br>lihat detail : <a href='detail_studio.php?id=<?php echo $row["id_studio"]; ?>' target='blank'>detail</a>") <?php
    }
?>
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM studio WHERE jrk_studio = (SELECT MAX(jrk_studio) FROM studio)");
    foreach ($data as $row){  ?> 
		var st_jauh = L.marker([<?php echo $row["latitide"].','.$row["longitude"]?>],{icon: Jstudio}).bindPopup("<img src='images/studio/<?php echo $row["id_studio"]; ?>.png' width='100'><h1><?php echo $row["nama_studio"]?></h1><br><?php echo $row["alamat_studio"]?><br><br>Buka &emsp; : <?php echo $row["jam_studio"]?><br>No.Telp &emsp;: <?php echo $row["telp_studio"]?><br>Sewa &emsp; : <?php echo $row["sewa_studio"]?><br>jumlah studio &emsp; : <?php echo $row["jumlah_studio"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_studio"]?> km<br>lihat detail : <a href='detail_studio.php?id=<?php echo $row["id_studio"]; ?>' target='blank'>detail</a>") <?php
    }
?>

//jauh dekat cafe
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM cafe WHERE jrk_cafe = (SELECT MIN(jrk_cafe) FROM cafe)");
    foreach ($data as $row){  ?> 
		var cf_dekat = L.marker([<?php echo $row["coor_cafe"]?>],{icon: Dcafe}).bindPopup("<img src='images/cafe/<?php echo $row["id_cafe"]; ?>.png' width='100'><h1><?php echo $row["nama_cafe"]?></h1><br><?php echo $row["alamat_cafe"]?><br><br>Buka &emsp; : <?php echo $row["jam_cafe"]?><br>No.Telp &emsp;: <?php echo $row["telp_cafe"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_cafe"]?> km<br>lihat detail : <a href='detail_cafe.php?id=<?php echo $row["id_cafe"]; ?>' target='blank'>detail</a>") <?php
    }
?>
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM cafe WHERE jrk_cafe = (SELECT MAX(jrk_cafe) FROM cafe)");
    foreach ($data as $row){  ?> 
		var cf_jauh = L.marker([<?php echo $row["coor_cafe"]?>],{icon: Jcafe}).bindPopup("<img src='images/cafe/<?php echo $row["id_cafe"]; ?>.png' width='100'><h1><?php echo $row["nama_cafe"]?></h1><br><?php echo $row["alamat_cafe"]?><br><br>Buka &emsp; : <?php echo $row["jam_cafe"]?><br>No.Telp &emsp;: <?php echo $row["telp_cafe"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_cafe"]?> km<br>lihat detail : <a href='detail_cafe.php?id=<?php echo $row["id_cafe"]; ?>' target='blank'>detail</a>") <?php
    }
?>

//jauh dekat club
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM club WHERE jrk_club = (SELECT MIN(jrk_club) FROM club)");
    foreach ($data as $row){  ?> 
		var cl_dekat = L.marker([<?php echo $row["coor_club"]?>],{icon: Dclub}).bindPopup("<img src='images/club/<?php echo $row["id_club"]; ?>.png' width='100'><h1><?php echo $row["nama_club"]?></h1><br><?php echo $row["alamat_club"]?><br><br>Buka &emsp; : <?php echo $row["jam_club"]?><br>No.Telp &emsp;: <?php echo $row["telp_club"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_club"]?> km<br>lihat detail : <a href='detail_club.php?id=<?php echo $row["id_club"]; ?>' target='blank'>detail</a>") <?php 
?>
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM club WHERE jrk_club = (SELECT MAX(jrk_club) FROM club)");
    foreach ($data as $row){  ?> 
		var cl_jauh = L.marker([<?php echo $row["coor_club"]?>],{icon: Jclub}).bindPopup("<img src='images/club/<?php echo $row["id_club"]; ?>.png' width='100'><h1><?php echo $row["nama_club"]?></h1><br><?php echo $row["alamat_club"]?><br><br>Buka &emsp; : <?php echo $row["jam_club"]?><br>No.Telp &emsp;: <?php echo $row["telp_club"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_club"]?> km<br>lihat detail : <a href='detail_club.php?id=<?php echo $row["id_club"]; ?>' target='blank'>detail</a>") <?php 
    }
?>

//jauh dekat karaoke
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM karaoke WHERE jrk_karaoke = (SELECT MIN(jrk_karaoke) FROM karaoke)");
    foreach ($data as $row){  ?> 
		var k_dekat = L.marker([<?php echo $row["coor_kar"]?>],{icon: Dkaraoke}).bindPopup("<img src='images/karaoke/<?php echo $row["id_kar"]; ?>.png' width='100'><h1><?php echo $row["nama_kar"]?></h1><br><?php echo $row["alamat_kar"]?><br><br>Buka &emsp; : <?php echo $row["jam_kar"]?><br>No.Telp &emsp;: <?php echo $row["telp_kar"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_karaoke"]?> km<br>sewa &emsp; :<?php echo $row["sewa_kar"] ?>/jam<br>lihat detail : <a href='detail_karaoke.php?id=<?php echo $row["id_kar"]; ?>' target='blank'>detail</a>") <?php 
    }
?>
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM karaoke WHERE jrk_karaoke = (SELECT MAX(jrk_karaoke) FROM karaoke)");
    foreach ($data as $row){  ?> 
		var k_jauh = L.marker([<?php echo $row["coor_kar"]?>],{icon: Jkaraoke}).bindPopup("<img src='images/karaoke/<?php echo $row["id_kar"]; ?>.png' width='100'><h1><?php echo $row["nama_kar"]?></h1><br><?php echo $row["alamat_kar"]?><br><br>Buka &emsp; : <?php echo $row["jam_kar"]?><br>No.Telp &emsp;: <?php echo $row["telp_kar"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_karaoke"]?> km<br>sewa &emsp; :<?php echo $row["sewa_kar"] ?>/jam<br>lihat detail : <a href='detail_karaoke.php?id=<?php echo $row["id_kar"]; ?>' target='blank'>detail</a>") <?php 
    }
?>


//murah mahal karaoke
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM karaoke WHERE sewa_kar = (SELECT MIN(sewa_kar) FROM karaoke)");
    foreach ($data as $row){  ?> 
        var k_murah = L.marker([<?php echo $row["coor_kar"]?>],{icon: Lkaraoke}).bindPopup("<img src='images/karaoke/<?php echo $row["id_kar"]; ?>.png' width='100'><h1><?php echo $row["nama_kar"]?></h1><br><?php echo $row["alamat_kar"]?><br><br>Buka &emsp; : <?php echo $row["jam_kar"]?><br>No.Telp &emsp;: <?php echo $row["telp_kar"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_karaoke"]?> km<br>sewa &emsp; :<?php echo $row["sewa_kar"] ?>/jam<br><br>lihat detail : <a href='detail_karaoke.php?id=<?php echo $row["id_kar"]; ?>' target='blank'>detail</a>") <?php 
    }
?>
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM karaoke WHERE sewa_kar = (SELECT MAX(sewa_kar) FROM karaoke)");
    foreach ($data as $row){  ?> 
        var k_mahal = L.marker([<?php echo $row["coor_kar"]?>],{icon: Hkaraoke}).bindPopup("<img src='images/karaoke/<?php echo $row["id_kar"]; ?>.png' width='100'><h1><?php echo $row["nama_kar"]?></h1><br><?php echo $row["alamat_kar"]?><br><br>Buka &emsp; : <?php echo $row["jam_kar"]?><br>No.Telp &emsp;: <?php echo $row["telp_kar"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_karaoke"]?> km<br>sewa &emsp; :<?php echo $row["sewa_kar"] ?>/jam<br><br>lihat detail : <a href='detail_karaoke.php?id=<?php echo $row["id_kar"]; ?>' target='blank'>detail</a>") <?php 
    }
?>

//jauh dekat toko
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM toko WHERE jrk_toko = (SELECT MIN(jrk_toko) FROM toko)");
    foreach ($data as $row){  ?> 
		var tk_dekat =L.marker([<?php echo $row["coor_toko"]?>],{icon: Dstore}).bindPopup("<img src='images/toko/<?php echo $row["id_toko"]; ?>.png' width='100'><h1><?php echo $row["nama_toko"]?></h1><br><?php echo $row["alamat_toko"]?><br><br>Buka &emsp; : <?php echo $row["jam_toko"]?><br>No.Telp &emsp;: <?php echo $row["telp_toko"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_toko"]?> km<br>lihat detail : <a href='detail_toko.php?id=<?php echo $row["id_toko"]; ?>' target='blank'>detail</a>") <?php 
    }
?>
<?php
    include 'config.php';
    $data = mysqli_query($connection, "SELECT * FROM toko WHERE jrk_toko = (SELECT MAX(jrk_toko) FROM toko)");
    foreach ($data as $row){  ?> 
		var tk_jauh = L.marker([<?php echo $row["coor_toko"]?>],{icon: Jstore}).bindPopup("<img src='images/toko/<?php echo $row["id_toko"]; ?>.png' width='100'><h1><?php echo $row["nama_toko"]?></h1><br><?php echo $row["alamat_toko"]?><br><br>Buka &emsp; : <?php echo $row["jam_toko"]?><br>No.Telp &emsp;: <?php echo $row["telp_toko"]?><br><br>jarak dari pusat kota &emsp; : <?php echo $row["jrk_toko"]?> km<br>lihat detail : <a href='detail_toko.php?id=<?php echo $row["id_toko"]; ?>' target='blank'>detail</a>") <?php 
    }
    }
?>
	
//layer group
<?php 
$data = mysqli_query($connection,"SELECT * FROM studio");
$jumlah_row = mysqli_num_rows($data);
?>
var Gstudio = L.layerGroup([<?php 
for ($x = 1; $x <= $jumlah_row; $x++) {
  echo "s$x,"; } ?>]).addTo(mymap);

<?php 
$data = mysqli_query($connection,"SELECT * FROM cafe");
$jumlah_row = mysqli_num_rows($data);
?>
var Gcafe = L.layerGroup([<?php 
for ($x = 1; $x <= $jumlah_row; $x++) {
  echo "cf$x,"; } ?>]);

<?php 
$data = mysqli_query($connection,"SELECT * FROM club");
$jumlah_row = mysqli_num_rows($data);
?>
var Gclub = L.layerGroup([<?php 
for ($x = 1; $x <= $jumlah_row; $x++) {
  echo "cl$x,"; } ?>]);

<?php 
$data = mysqli_query($connection,"SELECT * FROM toko");
$jumlah_row = mysqli_num_rows($data);
?>
var Gtoko = L.layerGroup([<?php 
for ($x = 1; $x <= $jumlah_row; $x++) {
  echo "tk$x,"; } ?>]);
  
<?php 
$data = mysqli_query($connection,"SELECT * FROM karaoke");
$jumlah_row = mysqli_num_rows($data);
?>
var Gkaraoke = L.layerGroup([<?php 
for ($x = 1; $x <= $jumlah_row; $x++) {
  echo "k$x,"; } ?>]);
  
var Gpusat = L.layerGroup([pusat]).addTo(mymap);

var Gs = L.layerGroup([st_dekat, st_jauh]);
var Gc = L.layerGroup([cf_dekat, cf_jauh]);
var Gcl = L.layerGroup([cl_dekat, cl_jauh]);
var Gk = L.layerGroup([k_dekat, k_jauh]);
var Gt = L.layerGroup([tk_dekat, tk_jauh]);
var Gsm = L.layerGroup([st_murah]);
var Gsj = L.layerGroup([st_jumlah]);
var Gkl = L.layerGroup([k_murah]);
var Gkh = L.layerGroup([k_mahal]);
  
  
var overlayMaps= {
	"pusat kota" : Gpusat,
	"studio musik" : Gstudio,
	"cafe musik" : Gcafe,
	"club musik" : Gclub,
	"toko musik" : Gtoko,
	"karaoke" : Gkaraoke,
}

var banding = {
	"pusat kota" : Gpusat,
	"Studio terdekat dan terjauh" : Gs,
	"Cafe terdekat dan terjauh" : Gc,
	"Club terdekat dan terjauh" : Gcl,
	"Karaoke terdekat dan terjauh" : Gk,
	"Toko terdekat dan terjauh" : Gt,
    "Studio Musik Termurah" : Gsm,
    "Studio Terbanyak" : Gsj,
    "Sewa Karaoke Termahal" : Gkh,
    "Sewa Karaoke Termurah" : Gkl,
}

//add layer control
L.control.layers(baseLayers,overlayMaps).addTo(mymap);
L.control.layers(null,banding).addTo(mymap);
	</script>
</html>