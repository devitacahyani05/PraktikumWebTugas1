<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form  method="POST" action="tugas2.php" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="nama__customer" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio1" value="TV">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="Kulkas">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio3" value="mesin cuci">
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="jumlah" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for=""></label>
                    <input type="date" name="waktu" value="" class="form-control">
                </div>
                <label for="">Courier Type</label>
                <select name="nama__kurir" class="form-select form-control" class="form-control">
                    <option selected>Choose Courier Type :</option>
                    <option value="Tiki">Tiki</option>
                    <option value="Si Cepat">Si Cepat</option>
                    <option value="Pos">Pos</option>
                    <option value="Grab">Grab</option>
                    <option value="Gojek">Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea name="alamat__pengirim" class="form-control" name="" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="text" name="biaya__kurir" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="text" name="biaya__jaminan" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="proses" class="btn btn-success btn-sm btn-block">
            </form>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <br>
                <ul class="list-group list-group-flush">
                    <?php
                    $proses= $_POST['proses']; 
                    $nama_customer = $_POST['nama__customer'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['jumlah'];
                    $kurir = $_POST['nama__kurir'];
                    $biaya_kurir = $_POST['biaya__kurir'];
                    $alamat = $_POST['alamat__pengirim'];
                    $biaya_jaminan = $_POST['biaya__jaminan'];
                    
                    // $data = $_POST['waktu'];
                    // $kurir = $_POST['nama__kurir']
                    // $alamat = $_POST['alamat__pengirim']
                    // $biaya_kurir = $_POST['biaya__kurir']
                    // $biaya_jaminan = $_POST['biaya__jaminan']

                    echo '<li class="list-group-item">Customer : '.$nama_customer.'</li>';
                    echo '<li class="list-group-item">Item : ' .$produk.  '</li>';
                    echo '<li class="list-group-item">Date Shipping : ' .$jumlah. '</li>';
                    echo '<li class="list-group-item">Courier Type : ' .$kurir. '</li>';
                    echo '<li class="list-group-item">Shipping Address : ' .$alamat. '</li>';
                    echo '<li class="list-group-item">Courier Cost : '.$biaya_kurir. '</li>';
                    echo '<li class="list-group-item">Assurance Cost : '.$biaya_jaminan.  '</li>';
                    if($produk == "TV") {
                        echo "<br>Total : " . 3000000 * $jumlah;
                        }
                        else if ($produk == "Kulkas") {
                        echo "<br>Total : " . 6000000 * $jumlah;
                        }
                        else {
                        echo "<br>Total : " . 4000000 * $jumlah + $biaya_kurir + $biaya_jaminan;
                    }
                    /*
                    
                    
                    
                    
                    
                    
                   
                    echo '<br/>Nama Customer: '.$nama_customer;
                    echo '<br/>Pilihan Produk : '.$produk;
                    echo '<br/>Jumlah Beli : '.$jumlah;
                    
                     */
                    ?>
                    
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3000.000</li>
                    <li class="list-group-item">Refrigator : Rp.6000.000</li>
                    <li class="list-group-item">Washing Machine : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>