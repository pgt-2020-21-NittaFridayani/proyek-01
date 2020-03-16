<?php //memasukkan file config.php
include('crud.php'); ?> 
<!DOCTYPE html> 
<html> 
<head>  
<title>Punya Nitta</title>  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous">   
</head> 
<body><link rel="stylesheet" href="mbcsmbinsmenu0.css" type="text/css" />


<!-- Navigation menus created with the free version of Easy CSS Menu downloaded from www.easycssmenu.com
     You are free to use this menu code for personal, non-commercial use only. Any other use is a serious violation of copyright laws.
     You are required to retain this comment block in your website code in an unchanged fashion.
     The above limitations do not apply on menus created with the paid version of the software. -->
     <center>
<div id="mbinsmenu0ebul_wrapper" style="max-width: 434px;">
  <ul id="mbinsmenu0ebul_table" class="mbinsmenu0ebul_menulist css_menu">
  <li class="first_button"><div class="buttonbg gradient_button gradient42" style="width: 67px;"><a href="index.php">Home<br /></a></div></li>
  <li><div class="buttonbg gradient_button gradient42" style="width: 115px;"><div class="arrow"><a class="button_2">Mahasiswa</a></div></div>
    <ul>
    <li class="gradient_menuitem gradient33 first_item"><a title=""><a href="mahasiswa.php">View</a></li>
    <li class="gradient_menuitem gradient33"><a title=""><a href="tambah.php">Tambah</a></li>
    <li class="gradient_menuitem gradient33 last_item"><a title="">Edit</a></li>
    </ul></li>
  <li><div class="buttonbg gradient_button gradient42"><div class="arrow"><a class="button_3">Dosen</a></div></div>
    <ul>
    <li class="gradient_menuitem gradient33 first_item"><a title=""><a href="dosen.php">View</a></li>
    <li class="gradient_menuitem gradient33"><a title="">Tambah</a></li>
    <li class="gradient_menuitem gradient33 last_item"><a title="">Edit</a></li>
    </ul></li>
  <li><div class="buttonbg gradient_button gradient42" style="width: 100px;"><a href="matakuliah.php">Matakuliah</a></div></li>
  <li class="last_button"><div class="buttonbg gradient_button gradient42" style="width: 59px;"><a href="nilai.php">Nilai</a></div></li>
  </ul>
</div>
<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability, compatibility with very old web browsers
     and support for touch screen devices. -->
<script type="text/javascript" src="mbjsmbinsmenu0.js"></script><link rel="stylesheet" href="mbcsmbrfzq.css" type="text/css" />




                      <div class="container" style="margin-top:20px">
                        <h2>Daftar Nilai</h2>
                        <hr>      <table class="table table-striped table-hover table-sm table-bordered">    <thead class="thead-dark">
    <tr>
        <th>KODE MATAKULIAH</th>
           <th>NIM</th>
              <th>ABSEN</th>
                <th>KUIS</th>
                 <th>TUGAS</th>
                 <th>UTS</th>
                 <th>UAS</th>
                 <th>KODE DOSEN</th>
                  </tr>
                  </thead>
                   <tbody>
                        <?php     //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
                          $sql = mysqli_query($koneksi, "SELECT a.kd_mk,a.nim,a.absen,a.kuis,a.tugas,a.uts,a.uas,a.kd_dosen FROM nilai as a")
                          or die(mysqli_error($koneksi));     //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                            if(mysqli_num_rows($sql) > 0)
                            {      //membuat variabel $no untuk menyimpan nomor urut
                                 $no = 1;      //melakukan perulangan while dengan dari dari query $sql
                                    while($data = mysqli_fetch_assoc($sql)){       //menampilkan data perulangan
                              echo '       <tr>
                                    <td>'.$no.'</td>
                                         <td>'.$data['kd_mk'].'</td>
                                           <td>'.$data['nim'].'</td>
                                               <td>'.$data['absen'].'</td>
                                                 <td>'.$data['kuis'].'</td>
                                                 <td>'.$data['tugas'].'</td>
                                                 <td>'.$data['uts'].'</td>
                                                 <td>'.$data['uas'].'</td>
                                                 <td>'.$data['kd_dosen'].'</td>
                                                      <td>         <a href="edit.php?id='.$data['kd_mk'].'" class="badge badge-warning">Edit</a>
                                                           <a href="delete.php?id='.$data['kd_mk'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>        </td>
                                                          </tr>
                                                             ';
                                                                $no++;     }     //jika query menghasilkan nilai 0
                                                             }else
                                                             {
                                                                 echo '
                                                                  <tr>
                                                                    <td colspan="6">Tidak ada data.</td>
                                                               </tr>      ';     }     ?>
                                                                 <tbody>
  </table>
  </div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       </body>
       </html>


