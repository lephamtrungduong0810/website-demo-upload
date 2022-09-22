<?php
	class myupload {
		
		function uploadfile($tmpname, $folder, $name){
			$name =  $folder ."/". $name;
			if(move_uploaded_file($tmpname, $name)){
				return 1;
			}else{
				return 0;
			}
		}
	}
?>