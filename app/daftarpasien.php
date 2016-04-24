<?php 
  include "controller/rekam_medis.php";

  if (!empty($_POST)) {
      postPasien($_POST);
  }
?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <title>Bina Medika</title>
  <meta name="description" content="Bandung Web Kit" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="../libs/assets/animate.css/animate.css" type="text/css" />
  <link rel="stylesheet" href="../libs/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../libs/assets/simple-line-icons/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="../libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<div class="app app-header-fixed ">
  

<?php include 'navigationbar.php' ?>

    <!-- aside -->
  <aside id="aside" class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
         <!-- nav -->
          <nav ui-nav class="navi clearfix">
            <ul class="nav">
              <li class="hidden-folded m-t text-dark-grey text-xs padder-md padder-v-sm">
                <span>Navigation</span>
              </li>
              <li>
                <a href="index.php" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Home</span>
                </a>               
              </li>
              <li class="active">
                <a href="daftarpasien.php" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Daftar Pasien</span>
                </a>               
              </li>
              <li>
                <a href="daftarobat.php" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Daftar Obat</span>
                </a>              
              </li>
              <li>
                <a href="riwayattransaksi.php" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Daftar Transaksi</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- nav -->
        </div>
      </div>
  </aside>
  <!-- / aside -->

<!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="hbox hbox-auto-xs hbox-auto-sm ng-scope">
      <div class="col">
        <div class="app-content-body ">

          <div class="bg-light lter">    
              <ul class="breadcrumb bg-grey-breadcrumb m-b-none">
                <li><a href="#" class="btn no-shadow" ui-toggle-class="app-aside-folded" target=".app">
                  <i class="icon-bdg_expand1 text"></i>
                  <i class="icon-bdg_expand2 text-active"></i>
                </a>   </li>
                <li><a href>Home</a></li>                
                <li class="active"><i class="fa fa-angle-right"></i>Daftar Pasien</li>
              </ul>
          </div>

          <div class="bg-light lter b-b wrapper-md padder-md">
            <h1 class="m-n font-semibold h4 text-grey padder">Daftar Pasien</h1>
          </div>

          <div class="wrapper-lg">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading font-semibold">
                    Pasien
                  </div>
                  <div class="panel-body">
                    <div class="col-sm-10">
                      <form>
                        Search: 
                        <input type="text" name="search" class= "input-sm form-control w-sm inline v-middle"placeholder="Ketik disini">
                        <select name="jenis" class="input-sm form-control w-sm inline v-middle">
                          <option value="nama_pasien">Nama Pasien</option>
                          <option value="id_pasien">ID Pasien</option>
                          <option value="golongan_darah">Golongan Darah</option>
                          <option value="jenis_kelamin">Jenis Kelamin</option>
                          <option value="alamat">Alamat</option>
                          <option value="no_telp">No. Telpon</option>
                        </select>
                        <button class= "btn btn-sm btn-default">Go</button>
                      </form> 
                    </div>
                    <div class="col-sm-2">
                    <a href = "formpasien.php">
                      <button class = "btn m-b-sm m-r-sm btn-success btn-sm"><i class = "m-r-xs fa fa-plus"></i>
                        Add Pasien</button></a>
                    </div>
                  <br>
                    <div class="col-sm-12 table-responsive">
                    <table class="table table-striped b-t b-b">
                      <thead>
                        <tr>
                          <th>ID Pasien</th>
                          <th>Nama Pasien</th>
                          <th>Jenis Kelamin</th>
                          <th>Golongan Darah</th>
                          <th>Alamat</th>
                          <th>No. Telpon</th>
                          <th style="width:3%"></th>
                          <th style="width:3%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $result = getPasien();

                          foreach ($result as $row) {
                            echo'
                              <tr>
                                <td>'.$row["id_pasien"].'</td>
                                <td>'.$row["nama_pasien"].'</td>
                                <td>'.$row["jenis_kelamin"].'</td>
                                <td>'.$row["golongan_darah"].'</td>
                                <td>'.$row["alamat"].'</td>
                                <td>'.$row["no_telp"].'</td>
                                <td><button class = "btn m-b-sm m-r-sm btn-info btn-sm"><a href="riwayatpasien.php?id_pasien='. $row["id_pasien"].'">Riwayat</a></button></td>
                                <td><button class = "btn m-b-sm m-r-sm btn-success btn-sm"><a href="formpasien.php?id_pasien='. $row["id_pasien"].'">Edit</a></button></td>
                              </tr>
                              ';
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- /content -->
<!-- KONTEN DI SINI!!-->
             

   <!-- footer -->
  <footer id="footer" class="app-footer" role="footer">
    <div class="wrapper-md padder-lg b-t bg-light">
      <span class="pull-right">&copy; Copyright Bandung <a href ui-scroll="app" class="m-l-sm text-muted"><i class="icon-bdg_arrow11"></i></a></span>
     Made with <i class="text-danger fa fa-heart"></i> in Bandung
    </div>
  </footer>
  <!-- / footer -->



</div>

<script src="../libs/jquery/jquery/dist/jquery.js"></script>
<script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="js/ui-load.js"></script>
<script src="js/ui-jp.config.js"></script>
<script src="js/ui-jp.js"></script>
<script src="js/ui-nav.js"></script>
<script src="js/ui-toggle.js"></script>
<script src="js/ui-client.js"></script>

</body>
</html>
