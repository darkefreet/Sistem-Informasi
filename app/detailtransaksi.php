<?php 
  include "controller/transaksi.php";
  $id_pembelian = $_GET['id_pembelian'];
  $items = json_decode(getItems($id_pembelian), true);
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
              <li class="active">
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
                </a></li>
                <li class="active"><a href>Home</a></li>                
                <li><i class="fa fa-angle-right"></i>Detail Transaksi</li>
              </ul>
          </div>

          <div class="bg-light lter b-b wrapper-md padder-md">
            <h1 class="m-n font-semibold h4 text-grey padder">Detail Transaksi #<?php echo $id_pembelian?></h1>
          </div>
          <div class="wrapper-lg">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading font-semibold">
                    <?php 
                      $query = "SELECT * FROM `pembelian_obat` WHERE id_pembelian=" . $id_pembelian;
                      $rq = mysqli_query($conn, $query);
                      $item_pembelian = mysqli_fetch_array($rq, MYSQLI_ASSOC);
                      $id_pasien = $item_pembelian["id_pasien"];
                      $nama_pasien = readPasien($id_pasien)["nama_pasien"];
                    ?>
                    Nama Pasien : <?php echo $nama_pasien ?></br>
                  </div>
                  <div class="panel-body">
                    <div class="col-sm-12 table-responsive">
                    <table class="table table-striped b-t b-b">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Obat</th>
                          <th>Jumlah</th>
                          <th>Harga/obat</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $number = 1 ?>
                        <?php foreach ($items as $item): ?>
                          <?php 
                            $query = "SELECT * FROM `obat` WHERE id_obat=" . $item['id_obat'];
                            $rq = mysqli_query($conn, $query);
                            $obat = mysqli_fetch_array($rq, MYSQLI_ASSOC);
                          ?>                     
                          <tr>
                            <td><?php echo $number++; ?></td>
                            <td><?php echo $obat["nama_obat"]; ?></td>
                            <td><?php echo $item["jumlah"]; ?></td>
                            <td>Rp1000 </td>
                            <td>Rp<?php echo $item["jumlah"]*1000; ?></td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                    Total: Rp<?php echo countNumbers($id_pembelian)*1000; ?>
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
