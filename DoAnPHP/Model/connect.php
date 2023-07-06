<?php
    class connect{
        //Thuộc tính
        var $db = null;
        //Hàm tạo , thực hiện công việc connect với database bằng
        //PDB(dsn , user,pass,array...)
        public function __construct()
        {   
            $dsn='mysql:host=localhost; dbname=xshop';
            $user = 'root';
            $pass = ''; // $pass ='root';
            try {
                $this -> db = new PDO($dsn,$user,$pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
            } catch (\Throwable $th) {
                echo " Thất bại";
            }
        // Phương thức trả về nhiều đối tượng khi thực thi câu truy vấn select
        }
        public function getList($select)
        {
            // query thực thi câu select , mà query thuộc về phương thức của PDO
            $result=$this->db->query($select);
            return $result;
        }
        //phương thức trả về 1 object
        public function getInstance($select)
        {
            // query thực thi câu select , mà query thuộc về phương thức của PDO
            $result=$this->db->query($select);
            $result=$result->fetch();// một mảng
            return $result;
        }
        public function exec ($query){
            $result = $this->db->exec($query);
            return $result;
        }

    }
?>