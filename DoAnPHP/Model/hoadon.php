<?php
  class HoaDon {
    function __construct() {}

    public function InsertOrder($makh) {
        $db = new connect();
        $date = new DateTime("now");
        $datecreate = $date->format("Y-m-d");
        $query = "INSERT INTO hoadon1(masohd, makh, ngaydat, tongtien) VALUES (NULL, '$makh','$datecreate', 0)";
        $db->exec($query);
        $int = $db->getInstance("SELECT masohd FROM hoadon1 ORDER BY masohd DESC LIMIT 1");
        return $int[0];
    }

    function inserOrderDetail($masohd, $mahh, $soluong, $thanhtien) {
        $db = new connect();
        $query = "INSERT INTO cthoadon1(masohd, mahh, soluongmua, thanhtien) VALUES ($masohd, $mahh, $soluong, $thanhtien)";
        $db->exec($query);
    }

    function updateOrderTotal($sohd, $tongtien) {
        $db = new connect();
        $query = "UPDATE hoadon1 SET tongtien = $tongtien WHERE masohd = $sohd";
        $db->exec($query);
    }

    function getOrder($sohdid) {
        $db = new connect();
        $select = "SELECT b.masohd, a.tenkh, a.diachi, a.sodienthoai, b.ngaydat 
                   FROM khachhang1 a 
                   INNER JOIN hoadon1 b ON a.makh = b.makh 
                   WHERE b.masohd = $sohdid";
        $result = $db->getInstance($select);
        return $result;
    }

    function getOrderDetail($sohdid) {
        $db = new connect();
        $select = "SELECT a.tenhh, a.dongia, b.mausac, b.size, b.soluongmua, b.thanhtien 
                   FROM hanghoa a 
                   INNER JOIN cthoadon1 b ON a.mahh = b.mahh 
                   WHERE b.masohd = '$sohdid'";
        $result = $db->getList($select);
        return $result;
    }

    function saveOrder($sohd, $tenkh, $diachi, $sodt, $ngaydat) {
        $db = new connect();
        $query = "INSERT INTO hoadon1(masohd, tenkh, diachi, sodienthoai, ngaydat, tongtien) 
                  VALUES ('$sohd', '$tenkh', '$diachi', '$sodt', '$ngaydat', 0)";
        $db->exec($query);

        foreach ($_SESSION['cart'] as $key => $item) {
            $mahh = $item['mahh'];
            $soluong = $item['soluong'];
            $thanhtien = $item['dongia'] * $soluong;
            $query = "INSERT INTO cthoadon1(masohd, mahh, soluongmua, thanhtien) 
                      VALUES ('$sohd', '$mahh', '$soluong', '$thanhtien')";
            $db->exec($query);
        }
    }

    function getOrderHistory($makh) {
        $db = new connect();
        $select = "SELECT * FROM hoadon1 WHERE makh = '$makh'";
        $result = $db->getList($select);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC); // Lấy tất cả các dòng dữ liệu trả về
        return $rows;
    }
    
}

?>