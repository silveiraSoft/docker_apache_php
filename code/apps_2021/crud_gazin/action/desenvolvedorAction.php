<?php
require_once(realpath(dirname(__FILE__)) . '/../config.inc.php');
$action     = (isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : 1));
//$action   = (isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : $decrypt[0]));
switch ($action) {
    case "listar":
		/*
		if($_POST['filtro']=='previsao'){
            unset($_SESSION['filtro']['previsao_listar']);
			$_SESSION['filtro']['previsao_listar'] = array('ano'=>$_POST['ano'], 'semestre'=>$_POST['semestre'],'curso'=>$_POST['curso'], 'unidade_fisica'=>$_POST['unidade_fisica'], 'departamento'=>$_POST['departamento']);  
		}else if(!$_SESSION['filtro']['previsao_listar']){

            $arrAnoTodosLyceum = Lista::AnoTodosLyceum();

            $_SESSION['filtro']['previsao_listar'] = array('ano'=>$arrAnoTodosLyceum[0]['ANO']);
            
        }

		$previsaoController->listar($_POST['acao']);
		*/
        break;
    case "gerar":
        break;
    case "atualizar":
        break;
    default:
        
        break;
}