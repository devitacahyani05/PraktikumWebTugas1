<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="form_nilai.php" method="GET" class="mt-3">
            
            <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="nama__lengkap" value="" class="form-control">
                </div>
                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" name="nim__" value="" class="form-control">
                </div>
                <label for="">Lesson</label>
                <select name="mata__kuliah" class="form-select form-control" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="Web programming">Web Programming</option>
                    <option value="Database">Database</option>
                    <option value="Statistik">Statiska</option>
                    <option value="PKn">PKN</option>
                    <option value="uiux">UI/UX</option>
                </select>
                <div class="form-group">
                    <label for=""> UTS Value</label>
                    <input type="text" name="nilai__uts" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">UAS Value</label>
                    <input type="text" name="nilai__uas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assignment Value</label>
                    <input type="text" name="nilai__tugas" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses__" class="btn btn-primary btn-sm btn-block">
            </form>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <br>
                <ul class="list-group list-group-flush">
                <?php
                    $proses = $_GET['proses__'];
                    $nama_siswa = $_GET['nama__lengkap']; 
                    $mata_kuliah = $_GET['mata__kuliah'];
                    $nilai_uts = $_GET['nilai__uts'];
                    $nilai_uas = $_GET['nilai__uas'];
                    $nilai_tugas = $_GET['nilai__tugas'];
                    $nim = $_GET['nim__'];

                    echo '<li class="list-group-item">Name : '.$nama_siswa.'</li>';
                    echo '<li class="list-group-item">Nim : ' .$nim.  '</li>';
                    echo '<li class="list-group-item">Lesson: ' .$mata_kuliah. '</li>';
                    echo '<li class="list-group-item"> UTS Value : ' .$nilai_uts. '</li>';
                    echo '<li class="list-group-item">UAS Value : ' .$nilai_uas. '</li>';
                    echo '<li class="list-group-item">Assignment Value : '.$nilai_tugas. '</li>';
                    $hasil_nilai = ($nilai_uts['nilai__uts']+$nilai_uas['nilai__uas']+$nilai_tugas['nilai__tugas'])/3;
                    echo '<li class="list-group-item">Value Total : '.number_format($hasil_nilai,2,',','.').  '</li>';
                    ?>
                    <!-- <li class="list-group-item">Name :</li>
                    <li class="list-group-item">Nim :</li>
                    <li class="list-group-item">Lesson:</li>
                    <li class="list-group-item"> UTS Value : </li>
                    <li class="list-group-item">UAS Value: </li>
                    <li class="list-group-item">Assignment Value </li>
                    <li class="list-group-item">Value Total:  </li> -->
                    <!-- <li class="list-group-item">Value in Alphabet: </li> -->
                </ul>
                </div>
            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">C : Less than 40 </li>
                    
                    
                </ul>
                </div>
        </div>
        
    </div>
</body>
</html>