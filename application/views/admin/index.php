<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row p-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow-sm h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">PENDAFTAR BELUM DI VERIFIKASI</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $id_siswa['jumlah'] ?> Pendaftar</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow-sm h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">PENDAFTAR DI TERIMA</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $nik_siswa['diterima'] ?> Pendaftar</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-check fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow-sm h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">PENDAFTAR TIDAK DI TERIMA</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $nama_siswa['tdkditerima'] ?> Pendaftar</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-times fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow-sm h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">AKUN ADMIN</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $email['jumlahon'] ?> Akun</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-cog fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-7 ">
            <div class="card shadow-sm mb-4 mt-3">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Statistik Pendaftar Diterima Berdasarkan Gender</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small p-4">
                        <span class="">
                            <i class="fas fa-circle text-success"></i>Wanita
                        </span>
                        <span class="">
                            <i class="fas fa-circle text-primary"></i>Pria
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <div class="card shadow-sm mb-4 mt-3">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Calender</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div id="container" class="calendar-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>
<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    (Chart.defaults.global.defaultFontFamily = "Nunito"),
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = "#858796";

    // Pie Chart Exampl

    var ctx = document.getElementById("myPieChart");
    var wanita = <?= $Wanita['Wanita'] ?>;
    var pria = <?= $Pria['Pria'] ?>;

    var myPieChart = new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: ["Pria", "Wanita"],
            datasets: [{
                data: [pria, wanita],
                backgroundColor: ["#4e73df", "#1cc88a", "#36b9cc"],
                hoverBackgroundColor: ["#2e59d9", "#17a673", "#2c9faf"],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }, ],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: "#dddfeb",
                borderWidth: 3,
                xPadding: 20,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false,
            },
            cutoutPercentage: 80,
        },
    });
</script>