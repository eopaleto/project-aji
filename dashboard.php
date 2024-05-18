<?php
include "auth/connect.php"; 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png" />
        <title>Dashboard | Portal Biro Umum</title>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    
    <!-- Navbar -->
            <?php include "part_dashboard/navbar.php"; ?>
    <!-- End Navbar -->
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 judul">Dashboard</h1>
                            <!-- Analyses -->
                            <div class="analyse">
                                <div class="sales">
                                    <div class="status">
                                        <div class="info">
                                            <h3>PAGU ANGGARAN</h3>
                                            <h1>Rp 7.1 M</h1>
                                        </div>
                                        <!--<div class="progresss">
                                            <svg>
                                                <circle cx="38" cy="38" r="36"></circle>
                                            </svg>
                                            <div class="percentage">
                                                <p>+81%</p>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>

                                <div class="visits bg-warning">
                                    <div class="status">
                                        <div class="info">
                                            <h3>SALDO ANGGARAN</h3>
                                            <h1>Rp 3.1 M</h1>
                                        </div>
                                        <!--<div class="progresss">
                                            <svg>
                                                <circle cx="38" cy="38" r="36"></circle>
                                            </svg>
                                            <div class="percentage">
                                                <p>-48%</p>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>

                                <div class="searches bg-success">
                                    <div class="status">
                                        <div class="info">
                                            <h3>REALISASI</h3>
                                            <h1>Rp 5 M</h1>
                                        </div>
                                        <!--<div class="progresss">
                                            <svg>
                                                <circle cx="38" cy="38" r="36"></circle>
                                            </svg>
                                            <div class="percentage">
                                                <p>+21%</p>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>

                                <div class="searches bg-light">
                                    <div class="status">
                                        <div class="info">
                                            <h3>PENYERAPAN</h3>
                                            <h1>21 %</h1>
                                        </div>
                                        <!--<div class="progresss">
                                            <svg>
                                                <circle cx="38" cy="38" r="36"></circle>
                                            </svg>
                                            <div class="percentage">
                                                <p>+21%</p>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>

                            </div>

                        </div>

                        <?php
                        // Bar Chart
                            $resultBar = $conn->query("SELECT ikk, persentase FROM data_ikk");

                            $labelsBar = [];
                            $dataBar = [];

                            while ($rowBar = $resultBar->fetch_assoc()) {
                                $labelsBar[] = $rowBar['ikk'];
                                $dataBar[] = $rowBar['persentase'];
                            }
                        
                        // Pie Chart
                            $result = $conn->query("SELECT Kel_Jab, COUNT(Nama) AS jumlah_nama FROM daftar_pegawai GROUP BY Kel_Jab");

                            // Inisialisasi array untuk labels dan data
                            $labelsPie = [];
                            $dataPie = [];
                            
                            // Ambil data Kel_Jab dan jumlah nama dari hasil query dan tambahkan ke dalam array
                            while ($row = $result->fetch_assoc()) {
                                $labelsPie[] = $row['Kel_Jab'];
                                $dataPie[] = $row['jumlah_nama'];
                            }
                            ?>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Indikator Kinerja Kegiatan
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="20" height="20"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Capaian Kinerja
                                    </div>
                                    <div class="card-body"><canvas id="myPieChart" width="20" height="20"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    
                                </table>
                            </div>
                        </div>-->
                    </div>
                </main>
                <!-- <footer class="py-4 bg-light mt-auto">
                        <?php include "part_dashboard/footer.php"; ?>
                </footer> -->
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <!-- <script src="assets/demo/area-chart.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script> -->
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const dataBar = {
                labels: <?php echo json_encode($labelsBar); ?>,
                datasets: [{
                    label: 'IKK',
                    data: <?php echo json_encode($dataBar); ?>,
                }]
            };

            const dataPie = {
                labels: <?php echo json_encode($labelsPie); ?>,
                datasets: [{
                    label: 'Jumlah Nama',
                    data: <?php echo json_encode($dataPie); ?>,
                }]
            };

            // Konfigurasi grafik batang
            const configBar = {
                type: 'bar',
                data: dataBar,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                    var dataset = data.datasets[tooltipItem.datasetIndex];
                                    var currentValue = dataset.data[tooltipItem.index];
                                    var label = data.labels[tooltipItem.index];
                                    return label + ': ' + currentValue;
                                }
                            }
                        }
                    }
                }
            };

            // Konfigurasi grafik lingkaran
            const configPie = {
            type: 'pie',
            data: dataPie,
            options: {
                responsive: true,
                width: 20,
                height: 20,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem, data) {
                                var dataset = data.datasets[tooltipItem.datasetIndex];
                                var currentValue = dataset.data[tooltipItem.index];
                                var label = data.labels[tooltipItem.index];
                                return label + ': ' + currentValue;
                            }
                        }
                    }
                }
            }
        };

            // Inisialisasi grafik batang
            var myBarChart = new Chart(
                document.getElementById('myBarChart'),
                configBar
            );

            // Inisialisasi grafik lingkaran
            var myPieChart = new Chart(
                document.getElementById('myPieChart'),
                configPie
            );
        </script>

    </body>
</html>
