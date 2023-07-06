<?php
    class user{
        function __contruct(){}
        function InsertUser ($tenkh , $user, $matkhau , $email, $diachi , $dt)
        {
            $db = new connect();
            $query =" insert into khachhang1(makh,tenkh,username,matkhau,email,diachi,sodienthoai,vaitro)
            value (NULL,'$tenkh','$user','$matkhau','$email','$diachi','$dt',default)";
            //ai thực query=exec thực thi những câu insert,delete,update
            //echo $query;
            $db->exec($query);
        }
        //viết pthuc đăng nhập
        function loginUser($username,$matkhau)
        {
            $db= new connect();
            $select = " select * from khachhang1 where username ='$username' and matkhau = '$matkhau'";
            echo $select ;
            $result = $db->getList($select);
            $set = $result->fetch();
            return $set;
        }
        function insertcomment($mahh,$makh,$noidung)
        {
            $db= new connect();
            $date = new DateTime("now");
            $datecreate= $date->format("Y-m-d");
            $query = " insert into binhluan1(mabl,mahh,makh,ngaybl,noidung)values(Null,$mahh,$makh,'datecreate','$noidung')";
            $db->exec($query);
        }
        function getCountHH($mahh)
        {
            $db= new connect();
            $select="select count(mabl) from binhluan1 where mahh=$mahh";
            $result=$db->getInstance($select);
            return $result[0];
        }
        function getComment($mahh)
        {
            $db = new connect();
            $select = "select a.noidung,a.ngaybl,b.username from binhluan1 a inner join khachhang1 b on  a.makh=b.makh where a.mahh=$mahh";
            $result=$db->getList($select);
            return $result;
        }
        function getEmail($email)
        {
            $db = new connect();
            $select = "select * from khachhang1 where email ='$email'";
            // echo $select;
            $result = $db ->getInstance($select);
            return $result;
        }
        function UpdateEmail($emailold,$passnew)
        {
            $db = new connect();
            $query = "update khachhang1 set matkhau ='$passnew' where email ='$emailold'";
            $db->exec($query);
        }
    }
?>