<?php 
class API_SinhVien extends Controller{
       public function DanhSach(){
           // goi model
           $sinhvien = $this->model("SinhVienModel");
           $sv = $sinhvien->SinhVien();
           $mang = [];
           while($s = mysqli_fetch_array($sv)){
               array_push($mang, new SinhVien($s["ID"], $s["HOTEN"], $s["NAMSINH"]));
           }
           echo json_encode($mang);
       }
      
}


?>