<?php 
    class loai {
        public function __construct() {}
        // phương thức thanh toán admin
        public function getLoai() {
            $db = new connect();
            $select = "select * from loai";
            $result = $db->getList($select);
            return $result;
        }
        public function getCategoryId($maloai) {
            $db = new connect();
            $select = "select * from loai where maloai = $maloai";
            $result = $db->getInstance($select);
            return $result;
        }

        function updateCategory($maloai,$tenloai,$idmaloai) {
            $db=new connect();
            $query="update loai set maloai=$maloai,tenloai='$tenloai', idmaloai=$idmaloai where maloai=$maloai";
            $db->exec($query);
        }

        function deleteCategory($maloai) {
            $db=new connect();
            $query = "delete from loai where maloai=$maloai";
            $db->exec($query);
        }

        function createCategory($maloai,$tenloai,$idmaloai) {
            $db=new connect();
            $query = "INSERT INTO loai (`maloai`,`tenloai`, `idmaloai`) VALUES ($maloai,'$tenloai', '$idmaloai')";
            $db->exec($query);
        }
    }
?>