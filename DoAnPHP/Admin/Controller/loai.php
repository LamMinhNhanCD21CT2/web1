<?php
    $act="loai";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'loai':
        include "./View/addloaisanpham.php";
        break;
    case 'loai_action':
        if(isset($_POST['submit_file']))
    {
        // b1: lấy file vě
        $file=$_FILES['file']['tmp_name'];
        // loại bỏ những ký tự đặc biệt khi upload XEF, XBB,XBF
        file_put_contents($file, str_replace("\xEF\xBB\xBF","", file_get_contents($file)));
        // b2: mở file ra
        $file_open=fopen($file, "r");
        // b3: tiến hành đọc nội dung của file fgetc,fgets,fgg
        while(($csv=fgetcsv($file_open,1000,","))!==false)
        {
            $db=new connect();
            $maloai=$csv[0];//null
            $tenloai=$csv[1];// túi xách 1s
            $idmaloai=$csv[2];//5
            $query="insert into loai (maloai, tenloai, idmaloai) values ($maloai, '$tenloai', $idmaloai)";
            $db->exec($query);
        }
    }
    include "./View/addloaisanpham.php";
    break;
 }
?>