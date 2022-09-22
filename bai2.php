<?php include ("class/clsuploadfile.php");
$p=new myupload();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>upload filet</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <label for="fileField">Chọn File:</label>
    <input type="file" name="myfile" id="fileField">
  </p>
  <p>
    <input type="submit" name="nut" id="nut" value="Submit">
  </p>
</form>
</body>
<?php
	switch($_REQUEST['nut'])
	{
		case 'Submit':
		{
			$name = $_FILES['myfile']['name'];
			$size = $_FILES['myfile']['size'];
			$type = $_FILES['myfile']['type'];
			$tmpname = $_FILES['myfile']['tmp_name'];
			$name = time().'_'.$name;
		 if($tmpname!=''){
			if($p->uploadfile($tmpname, "data", $name) == 1)
			{
				echo 'Upload thành công';
			
			}else
			{
				echo'Upload thất bại';
			}
		}
		else{
			echo'vui lòng chọn file';
		}
	}
	break;
}
	
	
?>
</html>