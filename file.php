<?php 
/*
Array
(
    [file] => Array
        (
            [name] => 15814776561.html
            [type] => text/html
            [tmp_name] => C:\wamp\tmp\phpC9D7.tmp
            [error] => 0
            [size] => 19583
        )

)
*/
 // echo $_POST['filename'];
	if (count($_FILES)>0) {
		// print_r($_FILES);
		// var_dump($_FILES);
		// return json_encode($_FILES['file']);
		echo json_encode(['data'=>"上传了 ".count($_FILES)."个文件，文件名".$_FILES['file']['name']."大小：".$_FILES['file']['size']]);
		// return "上传了 ".count($_FILES)."个文件，文件名".$_FILES[0]['name']."大小：".$_FILES[0]['size'];
	}else{
		echo json_encode(['a'=>'上传文件为空。。。。']);
	}
	

 ?>