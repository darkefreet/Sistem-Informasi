<?php
  $id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : '';
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

          <div class="bg-light lter">    
              <ul class="breadcrumb bg-grey-breadcrumb m-b-none">
                <li><a href="#" class="btn no-shadow" ui-toggle-class="app-aside-folded" target=".app">
                   <i class="icon-bdg_expand1 text"></i>
                  <i class="icon-bdg_expand2 text-active"></i>
                </a>   </li>
                <li><a href>Home</a></li>
                <li><i class="fa fa-angle-right"></i><a href>Form Pengobatan</a></li>
              </ul>
          </div>

          <div class="bg-light lter b-b wrapper-md padder-md">
            <h1 class="m-n font-bold h4 padder">Form Pengobatan</h1>
          </div>      
      <!-- App-content-body -->  

<div class="wrapper-lg bg-light" ng-controller="FormDemoCtrl">
  <div class="panel panel-default">
    <div class="panel-body">
      <form action="<?php echo 'riwayatpasien.php?id_pasien='.$id_pasien?>" class="form-horizontal" method="post">        
        <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $id_pasien ?>">
          <label  class="col-sm-2 control-label" for="input-id-1">Nama Dokter</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="dokter" required>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>

        <div class="form-group">
          <label  class="col-sm-2 control-label" for="input-id-1">Keluhan</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="keluhan"></textarea>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>

        <div class="form-group">
          <label  class="col-sm-2 control-label" for="input-id-1">Nama Pengobatan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="namaPengobatan" required>
          </div>
        </div>
         <div class="line line-dashed b-b line-lg pull-in"></div>

         <div class="form-group">
          <label  class="col-sm-2 control-label" for="input-id-1">Honor</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="honor" required>
          </div>
        </div>
         <div class="line line-dashed b-b line-lg pull-in"></div>
        
        <div class="form-group">
          <div class="col-sm-4 col-sm-offset-2">
            <button type="submit" class="btn btn-info">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

  </div>
    <!-- end hbox hbox-auto-xs -->
</div>


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

