<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laboratório de Anatomia Virtual - IF Sul de Minas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image" href="imagens/Logo.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body{
    padding: 25px;
  }
  * {box-sizing: border-box;}
  .img-comp-container {
    position: relative;
    height: 200px; /*should be the same height as the images*/
  }
  .img-comp-img {
    position: absolute;
    width: auto;
    height: auto;
    overflow:hidden;
  }
  .img_radio{
    border:1px solid black;

  }
  .img-comp-img img {
    display:block;
    vertical-align:middle;
  }
  .img-comp-slider {
    position: absolute;
    z-index:9;
    cursor: ew-resize;
    /*set the appearance of the slider:*/
    width: 40px;
    height: 40px;
    background-color: #2196F3;
    opacity: 0.7;
    border-radius: 50%;
  }
  ul.none {
    list-style-type: none;
  }

</style>
</head>
<body style="background: url('<?=base_url()?>media/imagens/what-the-hex.png');">

  <div class="row">

    <div class="col-lg-3"></div>

    <div class="col-lg-6" style="border:0.6px solid black;margin-top: 60px;margin-bottom: 40px;background-color: #F5F5F5;box-shadow: 2px 2px 7px;border-radius: 5px;
    ">
    
    <form method="post" action="<?=base_url()?>login/logar" style="padding: 60px;padding-top:40px;margin-bottom: 30px;">
      <div class="row content">
        <div class="col-md-12">
          <img src="<?=base_url()?>media/imagens/logo_anatomia.png" style="width:70%;margin-left:15%;height:;border-radius:10px;">
        </div>
      </div>     
      <div class="row" style="margin-top: 40px;">

        <div class="col-md-12">
          <div class="form-group">
            <label for="fname">Email</label>
            <input required type="text" name ="email" id="fname" class="form-control" placeholder="Email">
          </div>
        </div>


        <div class="col-md-12">
          <div class="form-group">
            <label for="lname">Senha</label>
            <input required type="password" name="senha" id="lname" class="form-control" placeholder="Senha">
          </div>
        </div>

        <div class="col-md-12">

          <input type="submit" value="Logar" class="btn btn-success">

        </div>
      </div>
    </form>
  </div>


</div>