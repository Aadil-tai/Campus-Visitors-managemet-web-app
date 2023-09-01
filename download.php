<?php
if(!empty($_GET['file'])){
   $qrimage = basename($_GET['file']);
    $filePath = 'userQr/'.$qrImgName;
    if(!empty($qrImgName) && file_exists($filePath)){
        // Define headers
        header('Content-Length: ' . filesize($filePath));  
        header('Content-Encoding: none');
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$qrImgName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
        readfile($filePath);
        exit;
    }else{
        echo 'The File '.$$qrImgName.' does not exist.';
    }
}