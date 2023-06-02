<?php 
require_once("../config/conexion.php");
require_once("../models/buscar.php");

switch ($_GET['action']) {
	case 'crear':
		if ($_SERVER['REQUEST_METHOD']==='POST') {
			$cat=$_POST['cat'];
			$des=$_POST['des'];
			$can=$_POST['can'];
			$pre=$_POST['pre'];	

			$buscar=new buscar();

			$buscar->guardar([
				'cat'=>$cat,
				'des'=>$des,
				'can'=>$can,
				'pre'=>$pre
			]);

			echo "success";
		}

		break;
	
}
/*
class producto
{
	
	public function crear(){

		if ($_SERVER['REQUEST_METHOD']==='POST') {
			$cat=$_POST['cat'];
			$des=$_POST['des'];
			$can=$_POST['can'];
			$pre=$_POST['pre'];	

			$buscar=new buscar();
			$buscar->guardar([
				'cat'=>$cat,
				'des'=>$des,
				'can'=>$can,
				'pre'=>$pre
			]);

			//
			if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
				echo 'success';
			}else{
				echo "error";
			}
		}
		
	}
}
*/

#prueba 01
/*switch ($_GET['op']) {
	
	case 'insert':
		$buscar->guardar($_POST['text_cat'],$_POST['text_des'],$_POST['text_can'],$_POST['text_pre']);				
		break;	

	case 'buscar':
		$datos=$buscar->buscar($_POST['search']);
		$data=array();
		foreach ($datos as $row) {
			$sub_array=array();
			$sub_array['id_pro']=$row['id_pro'];
			$sub_array['des_pro']=$row['des_pro'];
			$sub_array['can_pro']=$row['can_pro'];
			$data[]=$sub_array;
		}
		echo json_encode($data);
		break;
	



}
*/


# meotod para hacer la casilla buscar
/*
$datos=$buscar->buscar($_POST['search']);
$data=array();
foreach ($datos as $row) {
	$sub_array=array();
	$sub_array['id_pro']=$row['id_pro'];
	$sub_array['des_pro']=$row['des_pro'];
	$sub_array['can_pro']=$row['can_pro'];
	$data[]=$sub_array;
}
echo json_encode($data);
 ?>