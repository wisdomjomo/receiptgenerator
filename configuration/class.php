<?php
    require_once("db.php");
?>
<?php
class confi {
    private $id;
    private $sendername;
    private $amount;
    private $receivername;
    private $accountnumber;
    private $phonenumber;
    private $bank;
    private $status;
    private $date;
    private $time;
    private $naration;
    private $transferid;
    public $conn;
    public function __construct($id=0, $sendername="", $amount="", $receivername="", $accountnumber="", $phonenumber="", $bank="", $status="", $date="", $time="", $naration="", $transferid=""){
        $this->id = $id;
        $this->sendername = $sendername;
        $this->amount =  $amount;
        $this->receivername = $receivername;
        $this->accountnumber =  $accountnumber;
        $this->phonenumber =  $phonenumber;
        $this->bank = $bank;
        $this->status = $status;
        $this->date =  $date;
        $this->time =  $time;
        $this->naration =  $naration;
        $this->transferid = $transferid;
        $this->conn = new PDO("mysql:host=localhost;dbname=transfer", "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function setid($id) {
        $this->id = $id;
    }
    public function getid() {
        return $this->id;
    }
    public function setsendername($sendername) {
        $this->sendername = $sendername;
    }
    public function getsendername() {
        return $this->sendername;
    }
    public function setamount($amount) {
        $this->amount = $amount;
    }
    public function getamount() {
    return $this->amount;
    }
    public function setreceivername($receivername) {
        $this->receivername = $receivername;
    }
    public function getreceivername() {
        return $this->receivername;
    }
    public function setaccountnumber($accountnumber) {
        $this->accountnumber = $accountnumber;
    }
    public function getaccountnumber() {
        return $this->accountnumber;
    }
    public function setphonenumber($phonenumber) {
        $this->phonenumber = $phonenumber;
    }
    public function getphonenumber() {
        return $this->phonenumber;
    }
    public function setbank($bank) {
        $this->bank = $bank;
    }
    public function getbank() {
        return $this->bank;
    }
    public function setstatus($status) {
        $this->status = $status;
    }
    public function getstatus() {
        return $this->status;
    }
    public function setdate($date) {
        $this->date =  $date;
    }
    public function getdate() {
        return $this->date;
    }
    public function settime($time) {
        $this->time = $time;
    }
    public function gettime() {
        return $this->time;
    }
    public function setnaration($naration) {
        $this->naration = $naration;
    }
    public function getnaration() {
        return $this->naration;
    }
    public function settransferid($transferid) {
        $this->transferid = $transferid;
    }
    public function gettransferid() {
        return $this->transferid;
    }
    public function transfermoney() {
        try{
            $stmt = $this->conn->prepare("INSERT INTO bank (sendername, amount, receivername, accountnumber, phonenumber, bank, status, date, time, naration, transferid) 
            VALUES (:sendername, :amount, :receivername, :accountnumber, :phonenumber, :bank, :status, :date, :time, :naration, :transferid)");
             $stmt->bindParam(':sendername', $this->sendername);
             $stmt->bindParam(':amount', $this->amount);
             $stmt->bindParam(':receivername', $this->receivername);
             $stmt->bindParam(':accountnumber', $this->accountnumber);
             $stmt->bindParam(':phonenumber', $this->phonenumber);
             $stmt->bindParam(':bank', $this->bank);
             $stmt->bindParam(':status', $this->status);
             $stmt->bindParam(':date', $this->date);
             $stmt->bindParam(':time', $this->time);
             $stmt->bindParam(':bank', $this->bank);
             $stmt->bindParam(':naration', $this->naration);
             $stmt->bindParam(':transferid', $this->transferid);
             $stmt->execute();
             header("location:../assest/index.php");
             die();
        }
        catch(PDOException $e) {
            echo "ERROR: " . $e->getMessage();
   }  
  }
  public function collectreceipt() {
    try{
        $stmt = $this->conn->prepare("SELECT * FROM bank");
        // $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
  }
  public function onetransfer($id){
        
    try{
        $stmt = $this->conn->prepare("SELECT id, sendername, amount, receivername, accountnumber, bank, status, date, time, naration, transferid FROM bank WHERE id = :id");
        $stmt->bindParam('id', $this->id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        // return $_SESSION['user_id'];
    }
    catch(PDOException $e) {
        echo "ERROR: " . $e->getMessage();
}  
}
public function delettransfer() {
    try{
        $stmt = $this->conn->prepare("DELETE FROM bank WHERE id = ?");
        $stmt->execute([$this->id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        header("location:../assest/index.php");
    }
    catch(PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
}

}


?>