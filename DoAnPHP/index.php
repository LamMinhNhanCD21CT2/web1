  <?php
  session_start();
  include "Model/class.phpmailer.php";
  set_include_path(get_include_path() . PATH_SEPARATOR . 'Model/');
  spl_autoload_extensions('.php');
  spl_autoload_register();
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- link icon cua boostrap4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- link font awnsome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- link style bootstrap cdn link -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- link style của trang web -->
    <link rel="stylesheet" type="text/css" href="/assets/CSS/web.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- Title của trang web -->
    <title>Freedman</title>
    <link rel="icon" href="https://images.hdqwalls.com/download/naruto-logo-anime-8k-qz-1680x1050.jpg" type="image/x-icon">
  </head>

  <body>
    <!-- Hiển thi header -->
    <header>
      <?php
        include "./View/header/layout2.php"
      ?>
    </header>
    <!-- Phần hiển thị nội dung của trang web -->
      <!-- Hiệu ứng loader khi chuyển trang -->
      <div id="loader"></div>
      <!-- Kết thúc hiệu ứng -->
      <div id="content" class="container-fluid main-ctn position-relative">
          <!-- Hiển thị nội dung bằng phương thức action Control PHP -->
          <?php
            $ctrl = "news";
            if (isset($_GET["action"])) {
              $ctrl = $_GET["action"];
            }
            include "Controller/" . $ctrl . ".php";
          ?>
      </div>

    <!-- hiên thị footer -->
    <footer>
      <?php
      include "./View/footer/layout1.php"
      ?>
    </footer>
    
    <!-- Script xử lí hiệu ứng của trang web -->
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        var loader = document.getElementById("loader");
        var content = document.getElementById("content");

        // Hiển thị loader
        loader.style.display = "block";

        // Ẩn nội dung trang chọn
        content.style.display = "none";

        // Đặt thời gian delay của loader 5 giây
        var delayInMilliseconds = 800;

        // Tạo setTimeout để ẩn loader và hiển thị nội dung sau
        //  khi delay kết thúc
        setTimeout(function() {
          loader.style.display = "none";
          content.style.display = "block";
        }, delayInMilliseconds);
      });

      // Hiện thông báo trên thanh tab title của trang web
      let alertShow = false;
      setInterval(() => {
        document.title =
          alertShow ? "Welcom to freedman" :
                      "Follow for more!";
        alertShow = !alertShow;
      }, 1000)
    </script>


  </body>
  </html>