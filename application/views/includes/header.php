<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Laboratório de Anatomia Virtual - IF Sul de Minas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  <link rel="icon" type="image" href="<?=base_url()?>assets/imagens/Logo.png" />
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/Style.css">

  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">


<div class="row content">
  <div class="col-md-12s" >
    <div class="topnav" id="myTopnav">
      <li class="logo_lab">Laboratório de Anatomia <img class="img_men" src="<?=base_url()?>media/imagens/logo.png"></li>
        <div class="topnav-right">
          <a href="<?=base_url()?>problemas">Problemas</a>
          <a href="<?=base_url()?>home">Inicio</a>                 
          <a href="<?=base_url()?>colaboradores">Colaboradores</a>         
          <a href="<?=base_url()?>contato">Contato</a>         
          <a href="<?=base_url()?>quemsomos">Quem somos</a>
          <a href="<?=base_url()?>perfil">Perfil</a>
          <?php
            $tipo = $this->session->userdata('tipo'); 
            if($tipo != 1){ 
          ?>
              <a href="<?=base_url()?>dashboard">Painel</a>
          <?php 
            }
          ?>
          <a href="<?=base_url()?>login/sair"><span class="glyphicon glyphicon-log-out"></span> Sair</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>
</div>
<body style="background: url('<?=base_url()?>media/imagens/what-the-hex.png');">
    <br>