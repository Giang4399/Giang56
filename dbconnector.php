<?php 
class DBconnector{
    var $servername = "ec2-184-72-237-95.compute-1.amazonaws.com";
    var $username = "xuqieqxlgdfwvzr";
    var $password = "5c03f5021f8bcb4b59c00e260f27722574c3509750bffa286796ac602635a883";
    var $dbname = "dbpar43msqr860";
    var $port = "5432";
    var $conn;
           public function runQuery($sql)
           {
            $conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //doc het cau truy van, tra ve mot mang
            $rows = pg_fetch_all($result);
            //dong ket noi   
            $conn=pg_close($conn);
            return $rows;     
           }
           public function execStatement($sql)
           {
            $conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //dong ket noi   
            $conn=pg_close($conn);
            return $result;   
           }
} ?>