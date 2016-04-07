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
  

    <!-- header -->
  <header id="header" class="app-header navbar" role="menu">
      <!-- navbar header -->
      <div class="navbar-header bg-info">
        <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">          
          <img src="img/logo-small.png" alt="." class="small-logo hide">
          <img src="img/logo.png" alt="." class="large-logo">
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse bg-info">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
                  
        </div>
        <!-- / buttons -->

        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
          <li>
            <a href="#">HOME</a>
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
              <span>PAGES</span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              
              <li>
                <a href="#">
                  <span class="badge bg-danger pull-right">5</span>
                  <span>Form Elements</span>
                </a>
              </li>
              
            </ul>
          </li>
        </ul>
        <!-- / link and dropdown -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="icon-bdg_search text14"></i>              
            </a>
            <!-- dropdown -->
             <div class="search_wrapper pull-right w-xl animated fadeIn">
              <form action="">
                <i class="pull-left glyphicon glyphicon-search"></i>
                  <input type="text" class="pull-left" placeholder="Type Here">
                <a href="#" class="remove-search"><i class="pull-right icon-bdg_cross"></i></a>
              </form>
            </div>
            <!-- / dropdown -->
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="bg-blue profile-header dropdown-toggle clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-left m-t-n-sm m-b-n-sm m-r-sm">
                <img src="img/01.jpg" alt="...">                
              </span>
              <span class="hidden-sm hidden-md m-r-xl">User</span> <i class="text14 icon-bdg_setting3 pull-right"></i>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeIn w-ml">             
              <li>
                <a>Logout</a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->
      </div>
      <!-- / navbar collapse -->
  </header>
  <!-- / header -->


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
                <a href="index.html" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Home</span>
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
                  <form>
                    Search: 
                    <input type="text" name="search" placeholder="Ketik disini">
                    <select name="jenis">
                      <option value="nama_pasien">Nama Pasien</option>
                      <option value="id_pasien">ID Pasien</option>
                      <option value="golongan_darah">Golongan Darah</option>
                      <option value="jenis_kelamin">Jenis Kelamin</option>
                      <option value="alamat">Alamat</option>
                      <option value="no_telp">No. Telpon</option>
                    </select>
                    <button>Go</button>
                  </form> 
                  <br>
                    <div class="table-responsive">
                    
                    <?php
                      $result = getPasien();

                      if ($result->num_rows > 0) {
                        echo'
                          <table class="table table-striped b-t b-b">
                          
                            <thead>
                              <tr>
                                <th  style="width:13%;text-align:center;">ID Pasien</th>
                                <th  style="width:20%;text-align:center;">Nama Pasien</th>
                                <th  style="width:10%;text-align:center;">Jenis Kelamin</th>
                                <th  style="width:15%;text-align:center;">Golongan Darah</th>
                                <th  style="width:30%;text-align:center;">Alamat</th>
                                <th  style="width:20%;text-align:center;">No. Telpon</th>

                                <th  style="width:5%"></th>
                              </tr>
                            </thead>
                        ';
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          echo'
                            <tbody>
                              <tr>
                                <th  style="text-align:center;font-weight:normal">'.$row["id_pasien"].'</th>
                                <th  style="text-align:center;font-weight:normal">'.$row["nama_pasien"].'</th>
                                <th  style="text-align:center;font-weight:normal">'.$row["jenis_kelamin"].'</th>
                                <th  style="text-align:center;font-weight:normal">'.$row["golongan_darah"].'</th>
                                <th  style="text-align:center;font-weight:normal">'.$row["alamat"].'</th>
                                <th  style="text-align:center;font-weight:normal">'.$row["no_telp"].'</th>
                                <th  style="font-weight:normal;"><a href="formpasien.php?id_pasien='. $row["id_pasien"].'">Edit</a></th>
                              </tr>
                            </tbody>
                          ';
                        }
                        echo'
                          </table>
                        ';
                      } else {
                        echo "Data tidak ditemukan";
                      }
                    ?>
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
