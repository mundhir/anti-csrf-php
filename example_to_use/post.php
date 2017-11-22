<?php
require_once("class.xcsrf.php");
$CSRFToken = new xcsrf;
if(isset($_POST['nama']) && isset($_POST['X-Csrf-Token']) && isset($_POST['alamat']) && isset($_POST['Submit'])){
	if($CSRFToken->validateToken($_POST['X-Csrf-Token'])){ 
		echo "<b>Csrf token Validate Success</b>";
	}else{
		echo "<b>Csrf token Validate Failed</b>";
	}
}
?>