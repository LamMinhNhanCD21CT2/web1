<?php
class customer
{
    public function __construct()
    {}

    function getCustomerAll()
    {
        $db =  new connect();
        $select = "select *  from khachhang1 ORDER BY makh asc";
        $result = $db->getList($select);
        return $result;
    }
    public function getCustomerId($makh) {
        $db = new connect();
        $select = "select * from khachhang1 where makh = $makh";
        $result = $db->getInstance($select);
        return $result;
    }

    function updatecustomer($makh, $tenkh, $user, $matkhau, $email, $diachi, $dt,$vaitro) {
        $db=new connect();
        $query="update khachhang1 set makh=$makh, tenkh='$tenkh', username='$user', matkhau='$matkhau', email='$email', diachi='$diachi', 
        sodienthoai=$dt vaitro=$vaitro where makh=$makh";
        $db->exec($query);
    }

    function deletecustomer($makh) {
        $db=new connect();
        $query = "delete from khachhang1 where makh=$makh";
        $db->exec($query);
    }
}
?>
