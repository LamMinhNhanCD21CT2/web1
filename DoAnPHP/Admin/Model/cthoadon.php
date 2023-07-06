<?php
class cthoadon
{
    public function __construct()
    {}

    function getCTHoaDonAll()
    {
        $db =  new connect();
        $select = "select *  from cthoadon1 ORDER BY mahh asc";
        $result = $db->getList($select);
        return $result;
    }
    public function getcthoadonId($mahh) {
        $db = new connect();
        $select = "select * from cthoadon1 where mahh = $mahh";
        $result = $db->getInstance($select);
        return $result;
    }

    function updatecthoadon($mahh,$soluongmua, $mausac,$size,$thanhtien,$tinhtrang) {
        $db=new connect();
        $query="update cthoadon1 set mahh=$mahh, soluongmua=$soluongmua, mausac='$mausac' ,size='$size', thanhtien=$thanhtien,tinhtrang=$tinhtrang 
        where mahh=$mahh";
        $db->exec($query);
    }

    function deletecthoadon($mahh) {
        $db=new connect();
        $query = "delete from cthoadon1 where mahh=$mahh";
        $db->exec($query);
    }
}
?>