<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css"  media="screen,projection"/>
	    <link type="text/css" rel="stylesheet" href="styles/css/dropzone.css"  media="screen,projection"/>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	    <link type="text/css" rel="stylesheet" href="styles/style.css"  media="screen,projection"/>
			<link type="text/css" rel="stylesheet" href="styles/css/bootly.css"  media="screen,projection"/>

	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		<nav class="navbar navbar-static">
   <div class="container">
    <div class="navbar-header">
      <p class="navbar-brand" ><b>Octoprint</b></p>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
    </div>

      <div class="navbar-collapse collapse">
      	<ul class="nav navbar-nav">
      		<li><a href="faq.php">FAQ</a></li>
      	</ul>
        <ul class="nav navbar-right navbar-nav">
            <li><a href="login.php">Logout</a></li>
        </ul>
      </div>
    </div>
		</nav>
		<div class='container'>
			<div class='jumbotron jumbotron-firstpage'>
				<center><h4>
					Selamat Datang di Octoprint, print online untuk mahasiswa Fasilkom UI.
					Octoprint saat ini dikelola oleh lembaga asisten di lab Babe</h4>
				</center>
			</div>
			<div class='profil text-center'>
	          <div>Mohamad Syahid Wildan</div>
	          <div>
	              <h3>Saldo: <span id="saldo" class='label label-default'>Rp 5000</span></h3>
	          </div>
	        </div>
	        <div class='pilih-berkas text-center'>
	            <div id="dragandrophandler" class="drag-drop-first-page">
	                <center><h4>Seret Berkas Di Sini</h4></center>
	            </div>
	            <!--<center><input type='file' title="foo"></center>-->
				<span class="btn btn-default btn-file">Browse <input type="file"></span>
	            <div id="statusbar" class="table-responsive"></div>
	            <a href="mainpage.php"><button id="unggahBerkas" class='btn btn-default'>Unggah Berkas</button></a>
	        </div>
	        <div class='list-file'>
	            <h4>Riwayat</h4>
	            <div class="row table-responsive">
	              <table class="table">
	                <thead>
	                </thead>
	                <tbody>
	                  <tr id="history1" class='file'>
	                    <th><a href="#"><h4 id="judulHistory1">Berkas1.pdf</h4></a></th>
	                    <th><h5 id="statusHistory1">Sudah Tercetak</h5></th>
	                    <th><a id="deleteHistoryFile-1" href='#'><i class='fa fa-times'></i></a></th>
	                  </tr>
	                  <tr id="history2"class='file' hidden>
	                    <th><a href="#"><h4 id="judulHistory2">Berkas1.pdf<br>(2 halaman)</h4></a></th>
	                    <th><h5 id="statusHistory2">Sudah Tercetak</h5></th>
	                    <th><a id="deleteHistoryFile-2" href='#'><i class='fa fa-times'></i></a></th>
	                  </tr>
	                </tbody>
	              </table>
	            </div>
	          </div>
		</div>
		
	</body>
	 <script src="styles/js/jquery.min.js"></script>
	<script src="styles/js/dropzone.js"></script>
	<script src="styles/js/bootly.js"></script>
</html>
