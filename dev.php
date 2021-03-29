<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Music Centre Kota Malang</title>
    <link rel="shortcut icon" href="images/pusat.png">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-tidth, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<style type="text/css">
			body{
				background:url(images/bg.jpg) fixed;
				background-repeat:no-repeat;
				background-color: #262626;
				background-size: auto 120%; 
				font-family:'Oswald',sans-serif;
				font-size: 15px;
				font-weight: 400;
				line-height: 1.5em;
				background-position:center;
			}
			
			h1{
				text-shadow: 2px 2px 4px #000000;
				font-size:5em;
				padding:0;
				margin:0;
				text-align:center;
				font-family: 'arial';
				position:absolute;
				top: 15%;
				left:50%;
				transform: translateX(-50%) translateY(-50%);
				color:#FFFFFF;
			}
			h2{
				text-shadow: 2px 2px 4px #000000;
				font-size:15px;
				padding:0;
				margin:0;
				//text-align:center;
				position:absolute;
				top: 53%;
				left:54%;
				transform: translateX(-50%) translateY(-50%);
				color:#FFFFFF;
				line-height:1;
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
			
			.logo_area{
				position:absolute; 
				top:0; 
				margin-left:10px; 
				content:"";
			}
			
			.logo_area a img{
				height:100px;
			}
			.sec2{ 
				text-align: center; 
				margin-top:52%; 
				margin-bottom:75%; 
				background:url(https://vignette.wikia.nocookie.net/gtawiki/images/5/59/The_Lost_Clubhouse_4.jpg); 
				background-size:250%;
				background-position:center;
				width: 100%;
				padding-top:50px;
				padding-bottom:200px;}
			.field {
				clear: both;
				margin-bottom: 10px
			}
			.gredient_input {
				border: 1px solid rgba(0, 0, 0, 0.0);
				height: 15px;
				padding: 5px 10px 5px 5px;
				font-size: 15px;
				/*border-radius*/
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
				border-radius: 3px;
				width: 200px
			}

			html {
			  scroll-behavior: smooth;
			}
			
			.tablelbl {
				margin-left:auto; 
				margin-right:auto;
				font-family: sans-serif;
				color: #FFFF;
				border-collapse: collapse;
				width: 50%;
			}
			
			.table1 {

                margin-top:16%;
				margin-left:auto; 
				margin-right:auto;
				font-family: sans-serif;
				color: #FFFFFF;
				border-collapse: collapse;
				width: 50%;
				background-color:#262626;
			}
			.table2 {
				margin-left:auto; 
				margin-right:auto;
				margin-bottom:20px;
				font-family: sans-serif;
				color: #444;
				width: 100%;
			}
			 
			.table1 tr th{
				background: #262626;
				color: #fff;
				font-weight: normal;
			}
			 
			.table1, th, td {
				padding: 8px 20px;
				text-align: center;
			}
			 
			
			 
			.table1 tr:nth-child(even) {
				background-color: #151515;
			}
			.table-wrapper{
				height: 300px;
				overflow: auto;
			}
			
			.button-success,
        .button-error,
        .button-warning,
        .button-secondary {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .button-success {
            background: rgb(28, 184, 65);
            /* this is a green */
        }

        .button-error {
            background: rgb(202, 60, 60);
            /* this is a maroon */
        }

        .button-warning {
            background: rgb(223, 117, 20);
            /* this is an orange */
        }

        .button-secondary {
            background: rgb(66, 184, 221);
            /* this is a light blue */
        }
		</style>
	</head>
	<body>
		<section class="sec1">
			<h1>
            <img src="images/ilogo.png" width="400px"></h1>
            <table class="table1">
            	<tr>
            		<td><img src="images/profil.png" width="200px"><br>
            			<h3>RHEZA CHANDRA K</h3>
            			171111019@mhs.stiki.ac.id
            		</td>
            		<td><img src="images/profil.png" width="200px"><br>
            			<h3>PRADIPTA RAMADAN S</h3>
            			171111059@mhs.stiki.ac.id
            		</td>
            	</tr>
            </table>
		</section>
	</body>
</html>