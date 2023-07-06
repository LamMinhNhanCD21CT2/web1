<?php
    class hanghoa{
        //thuộc tính
        // hàm tạo
        public function __construct(){}
            //thực hiện pthuc lấy 12 spham về để đổ lên view
            public function getHangHoaNew()
            {
                //B1: kết nối vs database
                $db = new connect();
                //B2: dùng select để truy vấn
                $select="select * from hanghoa ORDER by mahh desc limit 12";
                $result=$db->getList($select);
                return $result;//đây chính là bảng lấy về 12 spham
            }
            public function getHangHoaSale()
            {
                $db=new connect();
                $select= "select * from hanghoa WHERE giamgia>0 LIMIT 4";
                $result=$db->getList($select);
                return $result;// đây chính là bảng lấy về 4 sản phẩm
            }
            //lấy tất cả spham trong bảng hàng hóa
            public function getHangHoaAll()
            {
                $db=new connect();
                $select= "select * from hanghoa ";
                $result=$db->getList($select);
                return $result;// đây chính là bảng lấy về 4 sản phẩm
            }
            public function getHangHoaAllSale()
            {
                $db=new connect();
                $select= "select * from hanghoa where giamgia>0";
                $result=$db->getList($select);
                return $result;// đây chính là bảng lấy về 4 sản phẩm
            }
            //phương thức lấy thông tin của 1 sp
            public function getHangHoaID($id)
            {
                $db=new connect();
                // $select= "select * from hanghoa where mahh=$id";
                $select= "select * from hanghoa where mahh='$id'";

                $result=$db->getInstance($select);
                return $result;// đây chính là bảng lấy về 4 sản phẩm
            }
            //phương thức lấy màu và hình
            public function getHangHoaNhom($nhom)
            {
                $db=new connect();
                // $select= "select mausac,hinh from hanghoa where Nhom = $nhom";
                $select= "select mausac,hinh from hanghoa where Nhom = '$nhom'";

                $result=$db->getList($select);
                return $result;// đây chính là bảng lấy về 4 sản phẩm
            }
            public function getHangHoaNhomSize($nhom)
            {
                $db=new connect();
                // $select= "select DISTINCT size FROM hanghoa where nhom=$nhom order by size ASC";
                $select= "select DISTINCT size FROM hanghoa where nhom='$nhom' order by size ASC";

                $result=$db->getList($select);
                return $result;// đây chính là bảng lấy về 4 sản phẩm
            }
            // phương thức tìm tổng số sp
            public function getCountHH(){
                $db=new connect();
                $select = "select count(*) from hanghoa";
                $result=$db->getInstance($select);
                return $result;
            }
            // phân trang
            public function getListHangHoaAllPage($start,$limit){
                $db=new connect();
                $select = "select * from hanghoa limit " .$start.",".$limit;
                $results=$db->getList($select);
                return $results;
            }
            public function getTimKiem($timkiem){
                $db=new connect();
                $select = "select * from hanghoa WHERE tenhh like '%$timkiem%'";
                $results=$db->getList($select);
                return $results;
            }
    }
?>