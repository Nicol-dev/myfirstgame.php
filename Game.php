<?php  
  echo "Welcome To My Game\n";  
while(true) {
    echo "====== Game Tebak Angka ======\n";
    echo "Tebak sebuah angka antara 1 dan 9!\n";
    $computer = rand(1,9); //rand = acak
    echo "Masukkan Tebakanmu : ";
    $player = trim(fgets(STDIN)); // trim = menghapus space kosong awal inputan, fgets = mengambil inputan, STDIN = membaca karakter
     if ($player == $computer){
      echo "Menang. Angka komputer adalah $computer.\n";
      exit;
    }else{
      echo "Kalah. Angka komputer adalah $computer.\n";
    }
}  
?>