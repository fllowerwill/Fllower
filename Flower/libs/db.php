<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/28 0028
 * Time: 17:21
 */

//class db
//{
//    public $host="";
//    public $username="";
//    public $pass="";
//    public $dbname="";
//    public $port="";
//    public $db="";
//    function __construct($host="localhost",$username="root",$pass="",$dbname="wui1708",$port=3306)
//    {
//        $this->host = $host;
//        $this->username = $username;
//        $this->passwd = $passwd;
//        $this->dbname = $dbname;
//        $this->port = $port;
//        $this->db->query("set names utf8");
//    }
//    function  select($flied,$where){
//        $sql=" select "."$flied"."from" .""
//    }
//    function close(){
//        $this->db->close();
//    }
//
//
//}
//$obj=new db();




class db{
    private $host='localhost';
    private $username='root';
    private $pass='';
    private $dbname='comany';
    private $port='3306';
    public $table='user';
    public $db='';




   function __construct($table)
   {
       $this->db=new mysqli($this->host,$this->username,$this->pass,$this->dbname,$this->port);
       $this->db->query('set names utf8');
       $this->table=$table;
   }

    function selAll($field='*',$where=null){
        if($where){
            $sql="select ".$field." from ".$this->table." where ".$where;

        }else{
            $sql="select ".$field." from ".$this->table;

        }

       $result=$this->db->query($sql);
//       echo json_encode($result->fetch_all(MYSQLI_ASSOC));
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    function selOne($field,$where){
        if($where){
            $sql="select ".$field." from ".$this->table." where ".$where;
        }else{
            $sql="select ".$field." from ".$this->table;
        }

        $result=$this->db->query($sql);
//       echo json_encode($result->fetch_all(MYSQLI_ASSOC));
        return $result->fetch_assoc();
    }
    function del($where){
        $sql="delete from ".$this->table." where ".$where;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function add($field,$values){
        $sql="insert into ".$this->table." ( ".$field." ) values ( ".$values." ) ";
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function update($field,$where){
        $sql="update ".$this->table." set ".$field." where ".$where;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }

    function  close(){
        $this->db->close();
    }

}

/*$db=new db('user');
echo $db->selOne('*','zhanghao="an"');*/

