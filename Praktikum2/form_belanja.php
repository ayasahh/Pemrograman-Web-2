<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h2>Belanja Online</h2>
<hr>
  <form method="POST" action="form_belanja.php">
  <div class="container">
  <div class="container">
  <div class="form-group row">
    <label for="kostumer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="kostumer" name="kostumer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
   </div>
  <div class="form-group row ml-auto mr-auto">
    <label for="produk" class="col-4">Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="televisi"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin cuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row ml-auto mr-auto">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row ml-auto mr-auto">
    <div class="offset-4 col-8">
    <button name="proses" type="submit" value="Simpan" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
</hr>  
<?php
$proses = $_POST['kirim'];
$kostumer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

if ($produk == "TV") {
    $harga = 4200000;
}
elseif($produk == "Kulkas") {
    $harga = 3100000;
}
else{
    $harga = 3800000;
}

$total = $harga * $jumlah;
  
echo 'Nama Customer : '.$customer;
echo "<br>Produk Pilihan : $produk";
echo '<br>Jumlah Beli : '.$jumlah;
echo '<br>Total Belanja : Rp. '.$total;
?>  
</body>
</html>