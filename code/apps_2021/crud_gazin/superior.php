<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#">
    <title>CRUD 2021</title>  
    <!-- Bootstrap CSS -->
    <?php //echo $_SERVER["DOCUMENT_ROOT"]."/apps_2021/crud_gazin";?>
    <link rel="stylesheet" href="/apps_2021/crud_gazin/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/apps_2021/crud_gazin/datatables/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="/apps_2021/crud_gazin/datatables/DataTables-1.10.24/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="/apps_2021/crud_gazin/main.css">
  </head>
  <body>
    <header>
       <h1 class="text-center text-light text-uppercase">CRUD PARA TESTE DE CONHECIMENTO</h1>
    <!--

    <h1 class="text-center text-light">Cómo usar <span class="badge badge-danger">datatable</span></h1>   
    -->
    </header>
    
       
    <div style="height:10px"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <?php
        include_once( $_SERVER["DOCUMENT_ROOT"]."/apps_2021/crud_gazin"."/menu.php");            
