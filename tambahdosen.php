<?php 
include('index.php'); 
?>
 <!DOCTYPE html> 
 <html> 
     <head> 
          <title>Punya Nitta</title> 
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  
         </head>
          <body> 
               <nav class="navbar navbar-expand-lg navbar-light bg-light">  
                    <div class="container"> 
                           <marquee><a class="navbar-brand" href="#" align="center">Selalu Bahagia</a></marquee>  
                             <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">    
                                  <span class="navbar-toggler-icon"></span>  
                                  </button> 
 
   <div class="collapse navbar-collapse" id="navbarSupportedContent">   
             
                                        </div>  
                                         </div> 
                                          </nav>
                                          <div class="container" style="margin-top:20px"> 
                                            <h2>Tambah Dosen</h2>  
                                                <hr>   
                                                   <?php 
                                                     if(isset($_POST['submit']))
                                                     {   
                                                          $nim   = $_POST['kd_dosen'];  
                                                          $nama   = $_POST['nama_dosen'];    
                                                          $jenis_kelamin = $_POST['alamat']; 
                                                           $jurusan  = $_POST['email'];   
                                                           $jurusan  = $_POST['hp'];       
                                                           $cek = mysqli_query($koneksi, "INSERT INTO dosen (kd_dosen, nama_dosen, alamat, email, hp) VALUES ();") or die(mysqli_error($koneksi));        
                                                           if(mysqli_num_rows($cek) == 0){     
                                                               $sql = mysqli_query($koneksi, "INSERT INTO dosen (kd_dosen, nama_dosen, alamat, email, hp) VALUES ('$kd_dosen', '$nama_dosen', '$alamat', '$email', '$hp')") or die(mysqli_error($koneksi));         
                                                                if($sql){      echo '<script>alert("Berhasil menambahkan data."); document.location="tambahdosen.php";</script>';     
                                                                }else{      
                                                                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';     }   
                                                                     }else{     
                                                                         echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';    }   }   ?>      
                                                                         <form action="tambahdosen.php" method="post">    
                                                                             <div class="form-group row">     
                                                                                 <label class="col-sm-2 col-form-label">KODE DOSEN</label>     
                                                                                 <div class="col-sm-10">     
                                                                                      <input type="text" name="kd_dosen" class="form-control" size="4" required>     
                                                                                    </div>    
                                                                                </div>    
                                                                                <div class="form-group row">     
                                                                                    <label class="col-sm-2 col-form-label">NAMA DOSEN</label>     
                                                                                    <div class="col-sm-10">     
                                                                                         <input type="text" name="nama_dosen" class="form-control" required>    
                                                                                         </div>   
                                                                                         </div>   
                                                                                          <div class="form-group row">    
                                                                                               <label class="col-sm-2 col-form-label">ALAMAT</label>    
                                                                                                <div class="col-sm-10">     
                                                                                         <input type="text" name="alamat" class="form-control" required>    
                                                                                         </div>      
                                                                                        </div>    </div>    
                                                                                        <div class="form-group row">    
                                                                                               <label class="col-sm-2 col-form-label">EMAIL</label>    
                                                                                                <div class="col-sm-10">     
                                                                                         <input type="text" name="alamat" class="form-control" required>    
                                                                                         </div>      
                                                                                        </div>    </div> 
                                                                                        <div class="form-group row">    
                                                                                               <label class="col-sm-2 col-form-label">NO.HP</label>    
                                                                                                <div class="col-sm-10">     
                                                                                         <input type="text" name="alamat" class="form-control" required>    
                                                                                         </div>      
                                                                                        </div>    </div>  
                                                                                                    <div class="form-group row">    
                                                                                                         <label class="col-sm-2 col-form-label">&nbsp;</label>     
                                                                                                         <div class="col-sm-10">     
                                                                                                              <input type="submit" name="submit" class="btn btnprimary" value="SIMPAN">    
                                                                                                             </div>    </div>  
                                                                                                             </form>     
                                                                                                            </div>   
                                                                                                             <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  
                                                                                                             <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>  
                                                                                                             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
                                                                                                            </body> 
                                                                                                            </html> 
 
 