<?php
if (!empty($_FILES)) {
    $tempFile = $_FILES['Filedata']['tmp_name'];                          // 1
     
    $targetPath = $_SERVER['DOCUMENT_ROOT'] . $_REQUEST['folder'] . '/';  // 2
    $targetFile =  str_replace('//','/',$targetPath) . $_FILES['Filedata']['name']; // 3
         
    if( move_uploaded_file($tempFile,$targetFile)){                       // 4
        echo true;
    }else{
        echo false;
    }
         
}
?>   