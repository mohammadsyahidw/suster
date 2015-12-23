<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css"  media="screen,projection"/>
	    <link type="text/css" rel="stylesheet" href="styles/css/dropzone.css"  media="screen,projection"/>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	    <link type="text/css" rel="stylesheet" href="styles/style.css"  media="screen,projection"/>

	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		<div class='jumbotron jumbotron-firstpage'>
			<div class='container'>
				<center><p>Selamat Datang di Octoprint, print online mahasiswa Fasilkom.</p></center>
			</div>	
		</div>
		<div class='container'>
			<div class='pilih-berkas border text-center'>      
	            <div id="dragandrophandler" class="drag-drop-first-page">
	                <center><h4>Seret Berkas Di Sini</h4></center>
	            </div>
	            <input type='file' title="foo">
	            <div id="statusbar" class="table-responsive"></div>
	            <a href="index.php"><button id="unggahBerkas" class='btn btn-default'>Unggah Berkas</button></a>
	        </div>
		</div>
	</body>
	 <script src="styles/js/jquery.min.js"></script>
	<script src="styles/js/dropzone.js"></script>
</html>