<?php 
include('index.php'); ?>
 <!DOCTYPE html>
  <html> 
      <head> 
           <title>Punya Nitta</title>  
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   
        </head> 
        <body>  
            <nav class="navbar navbar-expand-lg navbar-light bg-light">   
                <div class="container">    
                    <a class="navbar-brand" href="#">CRDU PHP</a>    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">     
                        <span class="navbar-toggler-icon"></span>   
                     </button> 
 
   <div class="collapse navbar-collapse" id="navbarSupportedContent">     
       <ul class="navbar-nav mr-auto">     
            <li class="nav-item">     
                  <a class="nav-link" href="index.php">Home</a>    
                    </li>      
                    <li class="nav-item">     
                          <a class="nav-link" href="tambah.php">Tambah</a>     
                           </li>  
                              </ul>   
                               </div> 
                                 </div> 
                                  </nav>   
   <div class="form-group row">     <label class="col-sm-2 col-form-label">JURUSAN</label>     <div class="col-sm-10">      <select name="jurusan" class="form-control" required>       <option value="">PILIH JURUSAN</option>       <option value="TEKNIK INFORMATIKA" <?php if($data['jurusan'] == 'TEKNIK INFORMATIKA'){ echo 'selected'; } ?>>TEKNIK INFORMATIKA</option>       <option value="TEKNIK SIPIL" <?php if($data['jurusan'] == 'TEKNIK SIPIL'){ echo 'selected'; } ?>>TEKNIK SIPIL</option>       <option value="PERTANIAN" <?php if($data['jurusan'] == 'PERTANIAN'){ echo 'selected'; } ?>>PERTANIAN</option>      </select>     </div>    </div>    <div class="form-group row">     <label class="col-sm-2 col-form-label">&nbsp;</label>     <div class="col-sm-10">      <input type="submit" name="submit" class="btn btnprimary" value="SIMPAN">      <a href="index.php" class="btn btn-warning">KEMBALI</a>     </div>    </div>   </form>     </div>    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   </body> </html> 