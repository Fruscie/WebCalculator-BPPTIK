<style>
  html {
    scroll-behavior: smooth;
  }
</style>
<head>
  <link rel="stylesheet" href="css/style.css" />
</head>
<h1 id="ikb9j" data-anim-type="fadeInUp" class="gpd-header">Calculator App</h1>
<section id="iqqo1" class="gpd-section">
  <div id="iost7" class="gpd-container">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" data-redirect="" class="form" id="i79i">
      <div class="form-group">
        <label class="label" id="ins3"><b>Bilangan 1 :</b></label>
        <input
          type="text"
          placeholder="Masukkan bilangan 1"
          name="bil1"
          required
          class="input"
          id="ituv"
        />
      </div>
      <br/>
      <div class="form-group">
        <label class="label" id="id4oy"><b>Bilangan 2 :</b></label>
        <input
          type="text"
          placeholder="Masukkan bilangan 1"
          name="bil2"
          class="input"
          id="ial3j"
        />
      </div>
      <div class="form-group" id="iao9w">
        <button type="submit" id="ivbh2" class="button" name="proses">Hitung</button>
      </div>
    </form>
   <?php
   $bil1 = 0;
   $bil2 = 0;
  function tambah($angka1, $angka2){
    return $angka1 + $angka2;
  };
  function kurang($angka1, $angka2){
      return $angka1 - $angka2;
    };
  function kali($angka1, $angka2){
      return $angka1 * $angka2;
    };
  function bagi($angka1, $angka2){
    if($angka2==0){
      return "Tidak dapat dibagi 0";
    }else{
      return $angka1/$angka2;
    }
    };

   if(isset($_POST['proses'])){
     $bil1 = $_POST['bil1'];
     $bil2 = $_POST['bil2'];
     echo '<div class="gpd-text" id="idkmx">Hasil Penjumlahan adalah : '.tambah($bil1,$bil2);
     echo '<br>Hasil Pengurangan adalah : '.kurang($bil1,$bil2);
     echo '<br>Hasil Perkalian adalah : '.kali($bil1,$bil2);
     echo '<br>Hasil Pembagian adalah : '.bagi($bil1,$bil2);
     echo '</div>';
   }
   ?>
  </div>
</section>
