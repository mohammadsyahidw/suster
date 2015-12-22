<!DOCTYPE html>
<html>
  <head>

    <link type="text/css" rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="styles/css/dropzone.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/style.css"  media="screen,projection"/>

    


    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>OctoPrint</title>

  </head>

  <body>
    <div class='row'>
      <div class="col-md-3">
        <div class='pilih-berkas border text-center'>      
            <div id="dragandrophandler">
                <center><h4>Seret Berkas Di Sini</h4></center>
            </div>
            <input type='file' title="foo">
            <div id="statusbar" class="table-responsive"></div>
            <button id="unggahBerkas" class='btn btn-default'>Unggah Berkas</button>
        </div>
        <div class='list-file'>
          <div class='file border'>
            <div class='row'>
              <div class='col-md-6 isi-file text-center'>
                <h4>Berkas1.pdf</h4>
                <h5>( 3 halaman )</h5>
              </div>
              <div class='col-md-6 isi-file text-center'>
                <h5>Sudah Tercetak</h5>
              </div>
            </div>
          </div>
          <div class='file border'>
            <div class='row'>
              <div class='col-md-6 isi-file text-center'>
                <h4>Berkas1.pdf</h4>
                <h5>( 3 halaman )</h5>
              </div>
              <div class='col-md-6 isi-file text-center'>
                <h5>Sudah Tercetak</h5>
              </div>
            </div>
          </div>
          <div class='file border'>
            <div class='row'>
              <div class='col-md-6 isi-file text-center'>
                <h4>Berkas1.pdf</h4>
                <h5>( 3 halaman )</h5>
              </div>
              <div class='col-md-6 isi-file text-center'>
                <h5>Sudah Tercetak</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class='preview text-center'>
          <h3>Berkas1.pdf</h3>
          <div >
            <img id="gambarberkas" class='gambar-berkas' src="">
          </div>          
          <a id="keHalamanKiri" href="#"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></a>
          <span>Halaman</span>
          <a id="keHalamanKanan" href="#"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
        </div>
        
      </div>

      <div class="col-md-3">
        <div class='profil border text-center'>
          <div>Mohamad Syahid Wildan</div>
          <div>
              <h3>Saldo: <span class='label label-default'>Rp 5000</span></h3>
          </div>
        </div>

        <div class='pengaturan border'>
          <h3 class='text-center'>Pengaturan</h3>
          <div class='warna'>
            <div class="radio">
              <label>
                <input type="radio" id="optionsRadios1" value="option1" checked>
                Hitam Putih
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" id="optionsRadios2" value="option2">
                Berwarna
              </label>
            </div>
          </div>

          <div class='halaman'>
            <div class="radio">
              <label>
                <input type="radio" id="optionsRadios1" value="option1" checked>
                Semua Halaman
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" id="optionsRadios2" value="option2">
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
        </div>

        <div class='harga border text-center'>          
          <div class='print'>

            <div>
              <h3>Harga: <span class='label label-default'>Rp 5000</span></h3>
            </div>
            <button class='btn btn-default btn-lg'>PRINT</button>
          </div>
          <div class='print-lagi'>
            <div>
              <h3>Harga: <span class='label label-default'>Rp 5000</span></h3>
              <div>
                <div>Sudah Tercetak</div>
                  <button class='btn btn-default btn-lg'>PRINT LAGI</button>
              </div>

            </div>
        
          </div>
        </div>



  </body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="styles/js/dropzone.js"></script>
</html>