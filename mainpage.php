<!DOCTYPE html>
<html>
  <head>

    <link type="text/css" rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="styles/css/dropzone.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="styles/css/bootly.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/style.css"  media="screen,projection"/>




    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>OctoPrint</title>

  </head>

  <body>
    <nav class="navbar navbar-static">
   <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" target="ext"><b>Octoprint</b></a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
    </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-right navbar-nav">
            <li><a href="login.html">Logout</a></li>
        </ul>
      </div>
    </div>
</nav>
  <div class='container'>
    <div class='row'>
      <div id="kolkiri" class="col-cus-3  border-cus">
        <div class='pilih-berkas text-center'>
            <div id="dragandrophandler" >
                <center><h4>Seret Berkas Di Sini</h4></center>
            </div>
            <span class="btn btn-default btn-file">
              Browse <input type="file">
            </span>
            <div id="statusbar" class="table-responsive"></div>
            <button id="unggahBerkas" class='btn btn-default'>Unggah Berkas</button>
        </div>
        <hr size="30">
        <div id="" style=" height:56vh;">
          <div class='list-file'>
            <div class="row table-responsive">
              <table class="table">
                <thead>
                </thead>
                <tbody>
                  <tr id="history1" class='file'>
                    <th><a href="#"><h4 id="judulHistory1">Berkas1.pdf</h4></a></th>
                    <th><h5 id="statusHistory1">Belum Tercetak</h5></th>
                    <th><a id="deleteHistoryFile-1" href='#'><i class='fa fa-times'></i></a></th>
                  </tr>
                  <tr id="history2"class='file' hidden>
                    <th><a href="#"><h4 id="judulHistory2">Berkas1.pdf<br>(2 halaman)</h4></a></th>
                    <th><h5 id="statusHistory2">Belum Tercetak</h5></th>
                    <th><a id="deleteHistoryFile-2" href='#'><i class='fa fa-times'></i></a></th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div  class='preview text-center'>
          <h3 id="judulPrintPreview">Berkas1.pdf</h3>
          <div>
            <a  href="#keHalamanKiri"><span id="keHalamanKiri" class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></a>
            <img id="gambarberkas" class='gambar-berkas' src="assets/halaman1.JPG">
            <a  href="#keHalamanKanan"><span id="keHalamanKanan" class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
          </div>
        </div>

      </div>

      <div id="kolkanan" class="col-cusl-3 border-cusl">
        <div class='profil text-center'>
          <div>Mohamad Syahid Wildan</div>
          <div>
              <h3>Saldo: <span id="saldo" class='label label-default'>Rp 5000</span></h3>
          </div>
        </div>
        <hr size="30">
        <div id="pengaturan" class='pengaturan'>
        <form role='form'>
          <h3 class='text-center'>Pengaturan</h3>
          <div class='warna'>
            <div class="radio">
              <label>
                <input type="radio" id="optionsRadios1" value="option1" name="pengaturanWarna" checked>
                Hitam Putih
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" id="optionsRadios2" value="option2" name="pengaturanWarna">
                Berwarna
              </label>
            </div>
          </div>

          <div class='halaman'>
            <div class="radio">
              <label>
                <input type="radio" id="optionsRadios1" value="option1" name="pengaturanHalaman" checked>
                Semua Halaman
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" id="optionsRadios2" value="option2" name="pengaturanHalaman">
                Pilih Halaman
              </label>
            </div>
            <div class="form">
              <label> Halaman:
                <input type="text" id="optionsRadios2" placeholder="1,2,3">
              </label>
            </div>
          </div>

          <div class='jumlah'>
            <div class="form">
              <label>
                Jumlah Halaman
                <!-- <div class="col-xs-4"> -->
                  <input type="number" class="form-control" id="optionsRadios2" value='1'>
                <!-- </div> -->
              </label>
            </div>
          </div>
          </form>
        </div>
        <hr size="30">
        <div id="print" class='harga text-center'>
          <div class='print' style="margin-top: 60px;">

            <div>
              <h3>Harga: <span class='label label-default'>Rp 1000</span></h3>
            </div>
            <button id="printButton" class='btn btn-default btn-lg'>PRINT</button>
          </div>
          <div class='print-lagi' hidden>
            <div>
              <h3>Harga: <span class='label label-default'>Rp 5000</span></h3>
              <div>
                <div>Sudah Tercetak</div>
                  <button class='btn btn-default btn-lg'>PRINT LAGI</button>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
  <script src="styles/js/jquery.min.js"></script>
  <script src="styles/js/dropzone.js"></script>
  <script src="styles/js/bootly.js"></script>
  <script>
  $(document).ready(function(){
  $('.col-cusl-3').height($(window).height()-50);
  });
  </script>
</html>
