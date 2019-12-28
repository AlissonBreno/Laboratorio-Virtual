<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Laboratório de Anatomia Virtual - IF Sul de Minas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" type="image" href="<?=base_url()?>media/imagens/Logo.png" />
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/Style.css">

  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Lato|Slabo+27px" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">

</head>
<body style="background: url('<?=base_url()?>media/imagens/what-the-hex.png');">
 <div class="row content">
  <div class="col-md-3" style="border-bottom: 1px solid gray;height: 650px;box-shadow: 0px 2px 5px;overflow: scroll;">
    <a href="simulacao_radio.php">
      <div style="margin-top: 60px;" class="col-md-10 painel" >   
        <img src="<?=base_url()?>media/imagens/painel01.jpg" class="img_pain">
      </div>
    </a>

    <a href="<?=base_url()?>ossos">
      <div style="margin-top: 35px;" class="col-md-10 painel" >
        <img src="<?=base_url()?>media/imagens/painel02.jpg" class="img_pain">
      </div>
    </a>
    <a target="_blank" href="https://www.facebook.com/pg/ifsuldeminasmuzambinho/about/?ref=page_internal">

      <div style="margin-top: 35px;" class="col-md-10 painel" >
        <img src="<?=base_url()?>media/imagens/painel03.jpg" class="img_pain">
      </div>
    </a>
  </div>
  <div class="col-md-9" style="background-color: black;height: 650px;border-bottom:1px solid gray;border-left:1px solid gray;box-shadow: -2px 2px 5px;">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="row content">
        <div class="col-md-12" style="height: 400px;margin-top:100px;background-color: white;border-radius: 10px;">
          
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
    
  </div>

</div>

<script>

  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-50px";
    }
    prevScrollpos = currentScrollPos;
  }

  </script>
