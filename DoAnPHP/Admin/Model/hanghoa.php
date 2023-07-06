<?php
class hanghoa
{
    public function __construct()
    {
    }

    function getHangHoaAll()
    {
        $db =  new connect();
        $select = "select *  from hanghoa";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaId($id)
    {
        $db = new connect();
        $select = "select * from hanghoa where mahh = $id";
        $result = $db->getInstance($select);
        return $result; //Kết quả trả về 
    }

    function getLoai()
    {
        $db = new connect();
        $select = "select * from loai";
        $result = $db->getList($select);
        return $result;
    }

    function updatesp($id, $tenhh, $dongia, $giamgia, $hinh, $Nhom, $maloai, $dacbiet, $soluotxem, $ngaylap, $mota, $soluongton, $mausac, $size)
    {
        $db = new connect();
        $query = "update hanghoa set tenhh='$tenhh', dongia=$dongia, 
        giamgia=$giamgia, hinh='$hinh', Nhom=$Nhom, maloai=$maloai, dacbiet=$dacbiet, soluotxem=$soluotxem, ngaylap='$ngaylap', 
        mota='$mota', soluongton=$soluongton, mausac='$mausac', size='$size' where mahh=$id";
        $db->exec($query);
    }

    function deleteProd($id) {
        $db=new connect();
        $query = "delete from hanghoa where mahh=$id";
        $db->exec($query);
    }

    function createProd($mahh,$tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton,$mausac,$size) {
        $db=new connect();
        $query = "INSERT INTO hanghoa (`mahh`, `tenhh`, `dongia`, `giamgia`, `hinh`, `Nhom`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `mota`, `soluongton`, `mausac`, `size`) VALUES 
        ($mahh, '$tenhh', $dongia,  $giamgia, '$hinh', $Nhom, $maloai, $dacbiet, $soluotxem, $ngaylap, '$mota', $soluongton, '$mausac', '$size')";
        $db->exec($query);
    }
        // phương thức insert hang hoa        
        function insertsp($tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton,$mausac,$size)
        {$date=new DateTime($ngaylap);$ngay=$date->format("Y-m-d");
             $db=new connect();
             $query="insert into hanghoa(mahh,tenhh,dongia,giamgia,hinh,Nhom,maloai,dacbiet,soluotxem,ngaylap,mota,soluongton,mausac,size)
              values (NULL,'$tenhh',$dongia,$giamgia,'$hinh',$Nhom,$maloai,$dacbiet,$soluotxem,'$ngay','$mota',$soluongton,'$mausac',$size)";
            $db->exec($query);
        }


        function getThongKeMatHang($ngay, $thang, $nam) {
            $db=new connect();
            $select = "SELECT c.ngaydat, b.tenhh, sum(a.soluongmua) as soluong FROM cthoadon1 a, hanghoa b, hoadon1 c WHERE a.mahh=b.mahh and c.masohd=a.masohd and day(c.ngaydat) = '$ngay' and month(c.ngaydat) = '$thang' and year(c.ngaydat) = '$nam'  GROUP BY b.tenhh, c.ngaydat";
            $result = $db->getList($select);
            return $result;
        }
}
