<?php
require "global.php";
require "model/connection.php";
require "model/cart.php";
require "model/change_pass.php";
require "model/chi_tiet_gio_hang.php";
require "model/dung_tich.php";
require "model/hang.php";
require "model/loai.php";
require "model/san_pham.php";
require "model/user.php";
require "model/anh_san_pham.php";
require "model/chi_tiet_don_hang.php";
require "model/yeu_thich.php";
require "controllers/site/home.php";
require "controllers/site/chi_tiet_san_pham.php";
require "controllers/site/don_hang.php";
require "controllers/site/yeu_thich.php";
require "controllers/site/san_pham.php";
require "controllers/site/bill.php";
require "controllers/site/cart.php";
require "controllers/site/user.php";

 $ctl= $_GET['ctl'] ?? '';
 switch($ctl){
  case '':
  case 'home':
    home_page();
    break;
  case 'login':
    login();
    break;
  case 'register':
    register();
    break;
  case "btn_login":
    user_login();
    break;
  case "btn_register":
    user_register();
    break;
  case 'change_pass':
    change_pass();
    break;
  case 'logout':
    user_logout();
    break;
  // case 'product':
  //   san_pham();
  //   break;
  case 'btn_change':
    update_pass();
    break;
  case "don_hang":
    don_hang();
    break;
  case 'product_datail':
    chi_tiet_san_pham();
    break;
  case 'add_to_cart':
    cart();
    break;
  // case 'search':
  //   search();
  //   break;
  case 'sanpham':
    san_pham();
  // case 'by-loai':
  //   select_sp_by_loai();
  //   break;
  // case 'by-hang':
  //   select_sp_by_hang();
    break;
  case 'bill':
    bill();
    break;
  case 'cart':
    list_cart();
    break;
  case 'yeu_thich':
    yeu_thich();
    break;
  default: echo "Page not pound";
  
 }
?>