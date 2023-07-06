<style>
  .card-custom input{
    width: 400px;
    height: 40px;
  }
  .card-custom input[type="placeholder"]{
    font-size: 15px;
  }
  #chart_div {
  position: relative;
  width: 100%;
  height: 400px; /* Kích thước mặc định cho biểu đồ */
}

/* Media queries */
@media (max-width: 600px) {
  #chart_div {
    height: 300px; /* Kích thước cho màn hình có chiều rộng tối đa là 600px */
  }
}

@media (max-width: 400px) {
  #chart_div {
    height: 200px; /* Kích thước cho màn hình có chiều rộng tối đa là 400px */
  }
}

</style>
<section class="row no-gutters col-md-12 col-md-offset-4 mt-3">
  <div class="">
    <h1><b>THỐNG KÊ</b></h1>
  </div>
  <div class="card-body col-md-12 card-custom">
    <div class="">
      <div>
        <form class="" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
          <h4>Ngày:</h4>
          <input class="text-dark" type="number" name="so_ngay" value="" placeholder="Nhập ngày...">
         
          <h4>Tháng:</h4><input class="text-dark" type="number" name="so_thang" value="" placeholder="Nhập tháng...">
         
          <h4>Năm:</h4><input class="text-dark" type="number" name="so_nam" value="" placeholder="Nhập năm..."><h4> đến nay</h4>
        
          <button class="btn btn-success w-100 h-50" type="submit" name="thong_ke"> Thống kê</button>
        </form>
      </div>
      <div id="chart_div"></div>
    </div>
  </div>
  <!--Load the AJAX API-->
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load('visualization', '1.0', {
      'packages': ['corechart']
    });
    google.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
      //thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
      // B1: tạo bảng 
      var data = new google.visualization.DataTable();
      // + lấy dự liệu từ database ra để tạo dòng
      var tenhh = new Array();
      var soluongban = new Array();
      var dataten = 0;
      var slb = 0;
      var rows = new Array();

      <?php
      $hh = new hanghoa();
      $ngay = $_POST['so_ngay'];
      $thang = $_POST['so_thang'];
      $nam = $_POST['so_nam'];

      $result = $hh->getThongKeMatHang($ngay, $thang, $nam);
      while ($set = $result->fetch()) {
        $tenhh = $set['tenhh'];
        $soluong = $set['soluong'];
        echo "tenhh.push('" . $tenhh . "');";
        echo "soluongban.push('" . $soluong . "');";
      }
      ?>

      // tạo dòng
      for (var i = 0; i < tenhh.length; i++) {
        dataten = tenhh[i];
        slb = parseInt(soluongban[i]);
        rows.push([dataten, slb]);
      }
      // tạo cột
      data.addColumn('string', 'Hàng Hóa');
      data.addColumn('number', 'Số lượng bán');
      data.addRows(rows);
      // B2: tạo option
      var options = {
  title: 'Thống kê mặt hàng đã bán',
  backgroundColor: '#fff',
  is3D: true,

};


      // B3: tiến hành vẽ khi có dữ liệu (database) và options
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);


    }
  </script>
</section>