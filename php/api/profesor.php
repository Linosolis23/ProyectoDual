<?php
include "../lib/consultas.php";

class profesor extends DB{
	function __construct(){
		parent::__construct();

	}

	public function mostrarprofesorapi(){ 
		$sql="SELECT * FROM profesor";
		$resultado =$this->realizarConsulta($sql);
		$count=mysqli_num_rows($resultado);
        header('Content-Type:application/json');
		if ($count>0){
			while($row=mysqli_fetch_assoc($resultado)){
				$arr[]=$row;
			}
				echo json_encode(['status'=>true, 'data'=>$arr, 'result'=>'found']);
			}else{
				echo json_encode(['status'=>true, 'data'=>'No data found', 'result'=>'not']);
		}
		return $count;
	}
	
}	
?>