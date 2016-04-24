<?php 
  include "controller/obat.php";
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
              <li class="active">
                <a href="index.php" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Home</span>
                </a>               
              </li>
              <li>
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
                <li class="active"><i class="fa fa-angle-right"></i>Transaksi Obat</li>
              </ul>
          </div>

          <div class="bg-light lter b-b wrapper-md padder-md">
            <h1 class="m-n font-semibold h4 text-grey padder">Transaksi Obat</h1>
          </div>

          <div class="wrapper-lg">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="controls" id="profs"> 
                      <div class="container">
                          <div class="control-group" id="fields"> 
                            <div class="controls">
                              <form action="pembayaran.php" role="form" autocomplete="off" method = "post"> 
                                <div class="row">
                                  <div class ="col-md-1">
                                    <h1 class="m-n font-semibold h6 text-grey padder" style="position: relative; transform: translateY(50%)">ID Pasien: </h1>
                                  </div>
                                  <div class="col-sm-2">
                                    <input class="form-control" name="id_pasien" type="text" placeholder="ID Pasien" style="margin-left: 10px; margin-top: 10px"/>
                                  </div>
                                </div>
                                <div class="entry input-group" style="margin-left: 10px; margin-top: 10px">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <select class="form-control" name="id_obat[]">
                                        <option value="">Nama Obat</option>
                                        <?php
                                          $daftarObat = json_decode(read(),true);
                                          foreach ($daftarObat as $obat) {
                                            echo '<option value="'. $obat["id_obat"] . '">' . $obat['nama_obat'] . '</option>';
                                          }
                                        ?>
                                      </select>
                                    </div>
                                    <div class="col-md-3">
                                      <input class="form-control" name="jumlah[]" type="text" placeholder="jumlah" />
                                    </div>
                                    <div class="col-md-3">
                                      <button class="btn btn-success btn-add" type="button"> 
                                        Tambah Item 
                                      </button> 
                                    </div>
                                  </div>
                                </div> 
                            </div> 
                            </div> 
                      </div>
                      <br>
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Ke Pembayaran">
          </form> 
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
<script src="js/dynamic-form.js"></script>

</body>
</html>
