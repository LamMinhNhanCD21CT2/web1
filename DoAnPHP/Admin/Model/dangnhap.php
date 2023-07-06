<?php
class dangnhap
{
    function __construct()
    {
    }

    function loginAdmin($username, $password)
    {
        $db = new connect();
        $select = "select * from admin where username='$username' and password='$password'";
        $result = $db->getInstance($select);
        return $result;
    }
    function getEmail($email) {
        $db = new connect();
        $select = "select * from admin where email='$email'";
        $result = $db->getInstance($select);
        return $result;
    }

    function updateEmail($emailOld, $passnew) {
        $db = new connect();
        $query = "update admin set password = '$passnew' where email = '$emailOld'";
        $db->exec($query);
    }
}
