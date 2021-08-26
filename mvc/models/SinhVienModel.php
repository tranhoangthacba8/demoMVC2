<?php 
class SinhVienModel extends DB{
    public function GetSV(){
        // connect db: trong buoi lam viec voi database
        return "Tran Viet Hoang";
    }
    public function Tong($a, $b){
         return $a + $b;
    }
    public function SinhVien(){
        $qr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $qr);
    }
}

?>