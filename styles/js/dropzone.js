



function sendFileToServer(formData,status)
{
    var uploadURL ="http://hayageek.com/examples/jquery/drag-drop-file-upload/upload.php"; //Upload URL
    var extraData ={}; //Extra Data.
    var jqXHR=$.ajax({
            xhr: function() {
            var xhrobj = $.ajaxSettings.xhr();
            if (xhrobj.upload) {
                    xhrobj.upload.addEventListener('progress', function(event) {
                        var percent = 0;
                        var position = event.loaded || event.position;
                        var total = event.total;
                        if (event.lengthComputable) {
                            percent = Math.ceil(position / total * 100);
                        }
                        //Set progress
                        // status.setProgress(percent);
                    }, false);
                }
            return xhrobj;
        },
    url: uploadURL,
    type: "POST",
    contentType:false,
    processData: false,
        cache: false,
        data: formData,
        success: function(data){
            status.setProgress(100);
 
            $("#status1").append("File upload Done<br>");         
        }
    }); 
 
    status.setAbort(jqXHR);
}
 
var rowCount=0;
function createStatusbar(obj)
{
     rowCount++;
     var row="odd";
     if(rowCount %2 ==0) row ="even";
     this.statusbar = $("<table class='table "+row+"'></table>");
     this.tableHead = $("<thead></thead>").appendTo(this.statusbar);
     this.tr = $("<tr></tr>").appendTo(this.tableHead);
     this.filename = $("<th></th>").appendTo(this.tr);
     
     //this.progressBar = $("<div class='progressBar'><div></div></div>").appendTo(this.statusbar);
     this.abort = $("<th><a href=#><i class='fa fa-times'></a></i></th>").appendTo(this.tr);
     var obj1 = $("#statusbar");
     obj1.html(this.statusbar);
     $("#unggahBerkas").show();
     

    this.setFileNameSize = function(name,size)
    {
        var sizeStr="";
        var sizeKB = size/1024;
        if(parseInt(sizeKB) > 1024)
        {
            var sizeMB = sizeKB/1024;
            sizeStr = sizeMB.toFixed(2)+" MB";
        }
        else
        {
            sizeStr = sizeKB.toFixed(2)+" KB";
        }
        yangDilihatSekarang = name;
        if(counterGlobal++==0){
          unggahBerkas(name);
        }
          
        
        this.filename.html(name);
    }
    this.setAbort = function(jqxhr)
    {
        var sb = this.statusbar;
        this.abort.click(function()
        {
            jqxhr.abort();
            sb.hide();
            $("#unggahBerkas").hide();
        });
    }

    
}
function handleFileUpload(files,obj)
{
   for (var i = 0; i < files.length; i++) 
   {
        var fd = new FormData();
        fd.append('file', files[i]);
 
        var status = new createStatusbar(obj); //Using this we can set progress.
        status.setFileNameSize(files[i].name,files[i].size);
        sendFileToServer(fd,status);
 
   }
}

function unggahBerkas(namefile){
  console.log("masuk");
  $("#unggahBerkas").click(function(){
       
       if(!isHistory1Hidden && !isHistory2Hidden){
          alert("ga bisa lebih dari 2");
       }
       else{
          if(isHistory1Hidden){
            $("#history1").show();
            $("#judulHistory1").html(yangDilihatSekarang);
            yangDilihatSekarangDok = 1;
            $("#judulHistory1").attr("style", "color:red");
            $("#judulHistory2").attr("style", "color:black");
            isHistory1Hidden = false;
            console.log("satu"); 
          }
          else if(isHistory2Hidden){
            $("#history2").show();
            $("#judulHistory2").html(yangDilihatSekarang);
            isHistory2Hidden = false;
            yangDilihatSekarangDok = 2;
            $("#judulHistory1").attr("style", "color:black");
            $("#judulHistory2").attr("style", "color:red");
            console.log("dua");
          }
          $("#judulPrintPreview").html(yangDilihatSekarang);
          $("#gambarberkas").attr("src", fotoHalamanSatu);
          $("#statusbar").html("");
          $("#unggahBerkas").hide();
          $("#pengaturan").show();
          $("#print").show();  
       } 
       
       
  })  
  
   
  
}




var isHistory1Hidden = false;
var isHistory2Hidden = true;
var yangDilihatSekarang = "Berkas1.pdf";
var yangDilihatSekarangDok = 1;
var counterGlobal = 0;
var saldo = 2000;
var fotoHalamanSatu = "assets/halaman1.JPG"
var fotoHalamanDua = "assets/halaman2.JPG"


$(document).ready(function()
{
var obj = $("#dragandrophandler");

obj.on('dragenter', function (e) 
{
    e.stopPropagation();
    e.preventDefault();
    $(this).css('border', '2px solid #0B85A1');
});
obj.on('dragover', function (e) 
{
     e.stopPropagation();
     e.preventDefault();
});
obj.on('drop', function (e) 
{
 
     $(this).css('border', '2px dotted #0B85A1');
     e.preventDefault();
     var files = e.originalEvent.dataTransfer.files;
 
     //We need to send dropped files to Server
     handleFileUpload(files,obj);
});
$(document).on('dragenter', function (e) 
{
    e.stopPropagation();
    e.preventDefault();
});
$(document).on('dragover', function (e) 
{
  e.stopPropagation();
  e.preventDefault();
  obj.css('border', '2px dotted #0B85A1');
});
$(document).on('drop', function (e) 
{
    e.stopPropagation();
    e.preventDefault();
});

//--------------yang wildan koding-------------------------
var fileHasChoosen = false;

var clicksRadioButton = new Array();
    clicksRadioButton[0] = 1 //default
$('input[name$="pengaturanHalaman"]').change(function(){
  if(clicksRadioButton[0] == 1){
    $('#pilihHalamanTertentu').show();
    clicksRadioButton[0] = 0;
  }
  else{
    $('#pilihHalamanTertentu').hide();
    clicksRadioButton[0] = 1; 
  }
  
});

$("#unggahBerkas").hide();

$('#choosefile').click(function () {
    $("input[type='file']").trigger('click');
})

$("#deleteHistoryFile-1").click(function(){
  $("#history1").hide();
  isHistory1Hidden = true;
})
$("#deleteHistoryFile-2").click(function(){
  $("#history2").hide();
  isHistory2Hidden = true;
})
$("input[type='file']").change(function () {
    var namefile = this.value.replace(/C:\\fakepath\\/i, '');
    var content = "<table class='table odd'><thead><tr><th>"+namefile+"</th><th><a id='memilihFile' href='#''><i class='fa fa-times'></i></a></th></tr></thead></table>";
    $("#statusbar").html(content);
    $("#unggahBerkas").show();
    $("#memilihFile").click(function(){
        $("#statusbar").html("");
        $("#unggahBerkas").hide();
    })
    yangDilihatSekarang = namefile;
    if(counterGlobal++==0){
      unggahBerkas(namefile);  
    }
})

$("#saldo").html("Rp " + saldo); 
$("#keHalamanKanan").click(function(){
  if(!fileHasChoosen){
    $("#gambarberkas").attr("src", fotoHalamanDua);
  }
  $("#keteranganHalaman").html("Halaman 2 dari 2");
})

$("#keHalamanKiri").click(function(){
  if(!fileHasChoosen){
    $("#gambarberkas").attr("src", fotoHalamanSatu);
  }
  $("#keteranganHalaman").html("Halaman 1 dari 2");
})

$("#printButton").click(function(){
  if(saldo <1000){
    alert("Saldo anda tidak cukup");
  }
  else
  {
    saldo = saldo - 1000;
    $("#statusHistory"+yangDilihatSekarangDok).html("tercetak");
    $("#saldo").html("Rp "+saldo);
    alert("Anda telah berhasil mencetak berkas, silahkan ambil berkas di lab Babe")  
  }
  
})

$("#judulHistory1").click(function(){
    yangDilihatSekarangDok = 1;
    yangDilihatSekarang = $("#judulHistory1").html();
    $("#judulHistory1").attr("style", "color:red");
    $("#judulHistory2").attr("style", "color:black");
    $("#judulPrintPreview").html(yangDilihatSekarang);
    $("#gambarberkas").attr("src", fotoHalamanSatu);
})

$("#judulHistory2").click(function(){
    yangDilihatSekarangDok = 2;
    yangDilihatSekarang = $("#judulHistory2").html();
    $("#judulHistory2").attr("style", "color:red");
    $("#judulHistory1").attr("style", "color:black");
    $("#judulPrintPreview").html(yangDilihatSekarang);
    $("#gambarberkas").attr("src", fotoHalamanSatu);
})

});