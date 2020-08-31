<?php
  session_start();

  //load koneksi
  require_once('models/koneksi.php');

  //cek session terdaftar
  $status   = isset($_SESSION['status']) ? $_SESSION['status'] : '';
  $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

  //cek pengaksesan file sidebar(aside) berdasarkan level
  if(!empty($status))
  {
    switch ($status) 
    {
      case 'Admin':
        require_once('header.php');
        require_once('aside.php');
        break;
      default:
        break;
    }
  }
  else
  {
    header('location: login');
  }
?>

  <!--load body (kontent dinamis)-->
  <div class="content-wrapper">
  <?php
    $pages_dir = "views";
    if(!empty($_GET['page']))
    {
      $pages = scandir($pages_dir, 0);
      unset($pages[0], $pages[1]);
      $halaman = $_GET['page'];
      if(in_array($halaman.".php", $pages))
      {
        include($pages_dir."/".$halaman.".php");
      }
      else
      {
        echo "Halaman Kosong";
      }
    }
    else
    {
      include($pages_dir."/beranda.php");
    }
  ?>
  </div>

<?php
  //load kaki
  require_once('footer.php'); 
?>