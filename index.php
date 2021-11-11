<?php
 require 'PhpcURL.php';

// PAGINACION ------------------->
$pa = new PhpcURL();
 if( isset($_GET['page']) ){
	$page = $pa->Paginacion($_GET['page']);
	if($page == 1){
		header('Location: ./');
	}
  } else {
	$page = 1;
  }

// Coneccion Api------------------------>  
$Conne= new PhpcURL();
$data = $Conne->ApiStagingeb($page);
$contents = $Conne->DataApi($data);

if($contents == null){
  header('Location: ./');
} else{
  include "./vista.php";
}

