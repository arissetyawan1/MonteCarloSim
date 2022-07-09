 <?php require 'templates/header.php'; ?>
  <?php require 'templates/side_bar.php'; ?>

    <div class="container-fluid">
      <div class="jumbotron">
        <h1>
          Tugas Akhir Penelitian
          <br />
          <!-- <small>Fixed to Left or Right</small> -->
        </h1>
        <!-- <p>
          <strong>
            Use classic Bootstrap navbar as sidebar, on left or right side.
          </strong>
        </p> -->
        <p>
          
        </p>
        <!-- <p>
          Same when using <code>.navbar-fixed-top</code> - add class
          <code>.navbar-fixed-left</code> or
          <code>.navbar-fixed-right</code> where needed.
        </p> -->
        <p>
          <b>Topik yang diambil pada Tugas Akhir  Teknik Simulasi dengan Simulasi Monte Carlo pada Studi Kasus Toko Keluarga</b>
        </p>
        <p>
          Nurul Aini - 1810512022 | Sistem Informasi S-1
        </p>
        <p>
          <!-- <span class="btn-group">
            <a data-class="navbar-fixed-left" class="btn btn-lg btn-default">
              <i class="fa fa-arrow-left"></i>
              Fixed Left
            </a>
            <a data-class="navbar-fixed-top" class="btn btn-lg btn-default">
              <i class="fa fa-arrow-up"></i>
              Fixed Top
              <small>(original)</small>
            </a>
            <a data-class="navbar-fixed-right" class="btn btn-lg btn-default">
              <i class="fa fa-arrow-right"></i>
              Fixed Right
            </a>
          </span> -->
          <a class="btn btn-lg btn-primary" href="prediksi_permintaan.php"> Mulai Perhitungan</a>
        </p>
      </div>
      <script>
          $("#datepicker").datepicker({
              format: " yyyy", // Notice the Extra space at the beginning
              viewMode: "years", 
              minViewMode: "years"
          });
          console.log($("#datepicker").val());
          $("#datepicker").on("change",function(){
            var selected = $(this).val();
            console.log(selected);
            $(".year").val(selected);
          });
      </script>
  <?php 
    // require 'templates/footer.php';
  
  ?> 