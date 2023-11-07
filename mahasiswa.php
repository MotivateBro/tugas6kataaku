<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  <h3 align="center">NILAI MAHASISWA</h3>
  <div class="container">
    <form action="" method="POST" name="NILAI_MAHASISWA">
      <div class="mb-3">
        <label class="form-label">nama mahasiswa</label>
        <input type="text" class="form-control" id="nama_mahasiswa" name="nm">
      </div>
      <div class="mb-3">
        <label class="form-label">kelas mahasiswa</label>
        <input type="text" class="form-control" id="kelas_mahasiswa" name="kls">
      </div>
      <div class="mb-3">
        <label class="form-label">absensi</label>
        <input type="text" class="form-control" id="absensi_mahasiswa" name="abs">
      </div>
      <div class="mb-3">
        <label class="form-label">tugas</label>
        <input type="text" class="form-control" id="tugas_mahasiswa" name="tgs">
      </div>
      <div class="mb-3">
        <label class="form-label">UTS (ujian Tengah Semester)</label>
        <input type="text" class="form-control" id="UTS_mahasiswa" name="uts">
      </div>
      <div class="mb-3">
        <label class="form-label">UAS (Ujian Akhir Semester)</label>
        <input type="text" class="form-control" id="UAS_mahasiswa"  name="uas">
      </div>
      <div class="btn-group" role="group" arial-label="Basic example">
        <button type="submit" class="btn btn-primary" name="submit"> Hitung </button>
      </div>
    </form>
  </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html><br>

<?php
if (isset($_POST['submit'])){
  $nama = $_POST['nm'];
  $kelas  = $_POST['kls'];
  $absensi = $_POST['abs'];
  $tugas = $_POST['tgs'];
  $uts = $_POST['uts'];
  $uas = $_POST['uas'];

  $absensi2 = 0.2 * $absensi;
  $tugas2 = 0.25 * $tugas;
  $uts2 = 0.20 * $uts;
  $uas2 = 0.35 * $uas;
  $nilaiakhir = $absensi2 * $tugas2 * $uts2 * $uas2;

  echo"<div class='container'>";
  echo"<h3>NILAI MAHASISWA</h3>";
  echo"Nama           : $nama</br>";
  echo"Kelas          : $kelas</br>";
  echo"Nilai Absen    : $absensi2</br>";
  echo"Nilai Tugas    : $tugas2</br>"; 
  echo"Nilai UTS      : $uts2</br>"; 
  echo"Nilai UAS      : $uas2</br>"; 
  echo"Nilai Total    : $nilaiakhir</br>"; 

}
?>