<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Data Pegawai | Portal Biro Umum</title>
        <?php
            include "part_dashboard/head.php";
        ?>
    </head>

    <!-- Navbar -->
    <?php include "part_dashboard/navbar.php"; ?>
    <!-- End Navbar -->

    <!-- Body -->
        <body>
            <div id="layoutSidenav_content">
                <main>
                    <div class="tabel-container">
                        <div class="row">
                            <div class="container-fluid px-4">
                                <h3> Daftar Pegawai</h3>
                                <table class="table">
                                    <tr class="text-center text-">
                                        <th>No</th>
                                        <th>Nip</th>
                                        <th>Nama</th>
                                        <th>Gol/Pangkat</th>
                                        <th>Jabatan</th>
                                        <th>Status Pegawai</th>
                                    </tr>
                                <?php
                                include "./auth/connect.php";
                                $no=1;
                                $ambildata=mysqli_query($conn,"SELECT * FROM daftar_pegawai");
                                while ($tampil = mysqli_fetch_array($ambildata)){
                                    echo"
                                    <tr>
                                        <td>$no</td>
                                        <td>$tampil[Nip]</td>
                                        <td>$tampil[Nama]</td>
                                        <td>$tampil[Gol_Ruang]</td>
                                        <td>$tampil[Jabatan]</td>
                                        <td>$tampil[Status_Pegawai]</td>
                                    </tr>";
                                    $no++;
                                }
                                ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
        <!-- Footer -->
                <footer class="py-4 bg-light mt-auto">
                    <?php include "part_dashboard/footer.php"; ?>
                </footer>
        <!-- End Footer -->

            </div>
        </div>
    </body>
</html>
