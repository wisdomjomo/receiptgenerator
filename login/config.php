<?php
require('db.php');

class login{
    private $id;
    private $name;
    private $email;
    private $password;
    public $conn;

    public function __construct($id=0, $name="", $email="", $password="") {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->conn = new PDO("mysql:host=localhost;dbname=transfer", "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function setid($id){
        $this->id = $id;
    }
    public function getid() {
        return $this->id;
    }
    public function setname($name){
        $this->name = $name;
    }
    public function getname() {
        return $this->name;
    }
    public function setemail($email){
        $this->email = $email;
    }
    public function getemail() {
        return $this->email;
    }
    public function setpassword($password){
        $this->password = $password;
    }
    public function getpassword() {
        return $this->password;
    }
    public function loginpage($email, $password) {
        try {
            $stmt = $this->conn->prepare("SELECT id FROM login WHERE email = :email AND password = :password");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $all = $stmt->fetch();
            if ($all) {
                return $all['id'];
            }
            return false;
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }
    public function updatedetails($name, $email, $password, $id) {
        try {
            if(!empty($password)) {
            
            $stmt = $this->conn->prepare("UPDATE login SET name = ?, email = ?, password = ? WHERE id = ?");
            $result = $stmt->execute([$name,$email,$password,$id]);
           
        }
        else {
            $stmt = $this->conn->prepare("UPDATE login SET name = ?, email = ? WHERE id = ?");
            $result = $stmt->execute([$name,$email,$id]);
        }
            if($result) {
                header("location:../assest/index.php");
            }
            // header("location:../assest/index.php");
            // die();
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }
    public function fetchdetails(){
        try{
            $stmt = $this->conn->prepare("SELECT id, name, email, password FROM login WHERE id=?");
            $stmt->execute([$this->id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    
}

?>