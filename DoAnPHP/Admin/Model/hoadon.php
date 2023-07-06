<?php
class hoadon
{
    public function __construct()
    {}
    function getHoaDonAll()
    {
        $db =  new connect();
        $select = "select *  from hoadon1 ORDER BY masohd asc";
        $result = $db->getList($select);
        return $result;
    }
    public function gethoadonId($masohd) {
        $db = new connect();
        $select = "select * from hoadon1 where masohd = $masohd";
        $result = $db->getInstance($select);
        return $result;
    }

    function updatehoadon($masohd,$makh,$ngaydat, $tongtien) {
        $db=new connect();
        $query="update hoadon1 set masohd=$masohd, makh=$makh, ngaydat='$ngaydat', tongtien=$tongtien where masohd=$masohd";
        $db->exec($query);
    }

    function deletehoadon($masohd) {
        $db=new connect();
        $query = "delete from hoadon1 where masohd=$masohd";
        $db->exec($query);
    }
}
?>
