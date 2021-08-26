<?php 
class Home extends Controller{
       function SayHi(){
          $hoang = $this->model("SinhVienModel");
          echo $hoang->GetSV();
          //view
      }
       public function Show($a, $b){
         // model
        $hoang = $this->model("SinhVienModel");
        $tong = $hoang->Tong($a, $b);
        // View
        $this->view("aoDep", ["Page"=>"news",
          "Number"=>$tong,
          "Mau"=>"red",
          "SoThich"=>["A","B","C"],
          "SV" => $hoang->SinhVien()
        ]);
      }
      
}
?>