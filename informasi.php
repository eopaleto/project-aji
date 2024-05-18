<!DOCTYPE html>
<html lang="en">
   <head>
   <title>Informasi | Portal Biro Umum</title>
      <?php
      include "part/head.php";
      ?>
   </head>

<!-- Body -->
   <body class="main-layout">

<!-- Loading Pages -->

      <div class="loader_bg"> 
         <div class="loader"><img src="assets/img/loading.gif" alt="#" /></div>
            <div class="content">
               <h1><img src="assets/img/icon_remove.png" alt="" height="50px" width="50px"><span>GAME</span></h1>
               <p>General Affair Management  <span>BPKP</span></p>
               <p>Silahkan tunggu...</p>
            </div>
      </div>

<!-- End Loading Pages -->

<!-- Header -->
    <?php
        include "part/navbar.php";
    ?>
<!-- End Header -->

<!-- Informasi Publik -->
<div class="informasi">
    <div class="informasi-container">
        <div class="row">
            <div class="col-md-12">
                <div class="informasi-title">
                    <h2>Informasi Publik</h2>
                </div>

                <div class="subjudul">
                    <h3>Pedoman</h3>
                    <hr>
                </div>
                    <ul>
                        <li>1. SOP Permintaan Ruangan <a class="lihat" href="https://www.youtube.com/" target="_blank">lihat</a></li>
                        <li>2. SOP Permintaan Perbaikan Kendaraan Dinas <a class="lihat" href="https://www.youtube.com/" target="_blank">lihat</a></li>
                        <li>3. SOP Penanganan Bencana Alam <a class="lihat" href="https://www.youtube.com/" target="_blank">lihat</a></li>
                        <li>4. SOP Pembuatan Naskah Dinas <a class="lihat" href="https://www.youtube.com/" target="_blank">lihat</a></li>
                        <li>5. SOP Penermintaan Barang<a class="lihat" href="https://www.youtube.com/" target="_blank">lihat</a></li>
                        <li>6. SOP Pendaftaran LPSE <a class="lihat" href="https://www.youtube.com/" target="_blank">lihat</a></li>
                    </ul>

                    <div class="mt-4 subjudul">
                    <h3>Laporan</h3>
                    <hr>
                </div>
                    <ul>
                        <li class="bg-grey">1. Laporan Kinerja 2019 <a class="lihat" href="https://www.youtube.com/" target="_blank">lihat</a></li>
                        <li>2. Laporan Kinerja 2020 <a class="lihat" href="https://www.youtube.com/" target="_blank">lihat</a></li>
                        <li>3. Laporan Kinerja 2021 <a class="lihat" href="https://www.youtube.com/" target="_blank">lihat</a></li>
                        <li>4. Laporan Kinerja 2022 <a class="lihat" href="https://www.youtube.com/" target="_blank">lihat</a></li>
                        <li>5. Laporan Kinerja 2023<a class="lihat" href="https://www.youtube.com/" target="_blank">lihat</a></li>
                    </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Informasi Publik -->

<!-- Footer -->

   <?php
      include "part/footer.php";
   ?>

<!-- End Footer -->

        <script>

            $(document).ready(function(){
            $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
            
            $(".zoom").hover(function(){
            
            $(this).addClass('transition');
            }, function(){
            
            $(this).removeClass('transition');
            });
            });
        
        </script> 

    </body>
</html>