
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Halaman Mahasiswa</h5>
                <ol class="breadcrumbs">
                    <li><a href="">Dashboard</a></li>
                    <li class="active"> Welcome !</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">
            <div class="card-panel">
              <!-- Grafik -->
  <script src="../_assets/chart/highcharts.js"></script>
<script src="../_assets/chart/data.js"></script>
<script src="../_assets/chart/drilldown.js"></script>
<?php 
include '../koneksi.php';
$apk =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='1' "));

$si =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='2' "));
$md =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='5' "));
$jr =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='7' "));
$pd =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='6' "));

 ?>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<script>
  
// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Skripsi PTIK Berdasarkan Kategori Semua Angkatan'
    },
    // subtitle: {
    //     text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    // },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Satuan Jumlah Angka'
        }

    },
    legend: {
        enabled: true
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: false,
                // format: '{point.y:1} Orang'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:15px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2}</b> Orang<br/>'
    },

    "series": [
        {
            "name": "Kategori Judul Skripsi Mahasiswa",
            "colorByPoint": true,
            "data": [
                {
                    "name": "Aplikasi",
                    "y": <?php echo "".$apk." ";?>,
                    "drilldown": "Aplikasi"
                },
                {
                    "name": "Sistem Informasi",
                    "y": <?php echo "".$si." ";?>,
                    "drilldown": "Sistem Informasi"
                },
                {
                    "name": "Media Pembelajaran",
                    "y": <?php echo "".$md." ";?>,
                    "drilldown": "Media Pembelajaran"
                },
                {
                    "name": "Jaringan",
                    "y": <?php echo "".$jr." ";?>,
                    "drilldown": "Jaringan"
                },
                {
                    "name": "Kependidikan",
                    "y": <?php echo "".$pd." ";?>,
                    "drilldown": "Kependidikan"
                }
            ]
        }
    ]
    
});
</script>
</div>
            <div class="divider"></div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>

          
        
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a class="btn-floating btn-large">
                  <i class="mdi-action-stars"></i>
                </a>
                <ul>
                  <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                  <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                  <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                  <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul>
            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->