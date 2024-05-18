<!DOCTYPE html>
<html lang="en">
   <head>
   <title>Berita | Portal Biro Umum</title>
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