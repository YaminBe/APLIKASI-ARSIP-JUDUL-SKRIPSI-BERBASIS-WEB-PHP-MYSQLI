
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
                <h5 class="breadcrumbs-title">Grafik Data</h5>
                <ol class="breadcrumbs">
                    <li><a href="">Grafik Skripsi</a></li>
                    <li class="active">Grafik Kategori Skripsi</li>
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
<script src="../_assets/chart/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<?php 
include '../koneksi.php';
// 2007
$apk =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='1' AND tahun='2007' "));
$si =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='2' AND tahun='2007' "));
$md =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='5' AND tahun='2007' "));
$jr =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='7' AND tahun='2007' "));
$pd =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='6' AND tahun='2007' "));
// 2008
$apk1 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='1' AND tahun='2008' "));
$si1 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='2' AND tahun='2008' "));
$md1 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='5' AND tahun='2008' "));
$jr1 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='7' AND tahun='2008' "));
$pd1 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='6' AND tahun='2008' "));
// 2009
$apk2 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='1' AND tahun='2009' "));
$si2 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='2' AND tahun='2009' "));
$md2 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='5' AND tahun='2009' "));
$jr2 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='7' AND tahun='2009' "));
$pd2 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='6' AND tahun='2009' "));
// 2010
$apk3 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='1' AND tahun='2010' "));
$si3 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='2' AND tahun='2010' "));
$md3 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='5' AND tahun='2010' "));
$jr3 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='7' AND tahun='2010' "));
$pd3 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='6' AND tahun='2010' "));
// 2011
$apk4 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='1' AND tahun='2011' "));
$si4 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='2' AND tahun='2011' "));
$md4 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='5' AND tahun='2011' "));
$jr4 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='7' AND tahun='2011' "));
$pd4 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='6' AND tahun='2011' "));

// 2012
$apk5 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='1' AND tahun='2012' "));
$si5 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='2' AND tahun='2012' "));
$md5 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='5' AND tahun='2012' "));
$jr5 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='7' AND tahun='2012' "));
$pd5 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='6' AND tahun='2012' "));

// 2013

$apk6 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='1' AND tahun='2013' "));
$si6=mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='2' AND tahun='2013' "));
$md6 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='5' AND tahun='2013' "));
$jr6 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='7' AND tahun='2013' "));
$pd6 =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_kategori='6' AND tahun='2013' "));
 ?>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<script>
 
Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Grafik Jumlah Judul Skripsi Berdasarkan Kategori Setiap Angkatan'
    },
    subtitle: {
        text: 'Pendidikan Teknik Informatika dan Komputer'
    },
    xAxis: {
        categories: ['2007', '2008', '2009', '2010', '2011', '2012', '2013'],
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: 'Satuan Jumlah'
        },
        labels: {
            formatter: function () {
                return this.value;
            }
        }
    },
    tooltip: {
        split: true,
        valueSuffix: ' Orang'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [{
        name: 'Aplikasi',
        data: [<?php echo $apk; ?>, <?php echo $apk1; ?>, <?php echo $apk2; ?>, <?php echo $apk3; ?>, <?php echo $apk4; ?>, <?php echo $apk5; ?>, <?php echo $apk6; ?>]
    }, {
        name: 'Sistem Informasi',
        data: [<?php echo $si; ?>, <?php echo $si1; ?>, <?php echo $si2; ?>, <?php echo $si3; ?>, <?php echo $si4; ?>, <?php echo $si5; ?>, <?php echo $si6; ?>]
    }, {
        name: 'Media Pembelajaran',
        data: [<?php echo $md; ?>, <?php echo $md1; ?>, <?php echo $md2; ?>, <?php echo $md3; ?>, <?php echo $md4; ?>, <?php echo $md5; ?>, <?php echo $md6; ?>]
    }, {
        name: 'Jaringan',
        data: [<?php echo $jr; ?>, <?php echo $jr1; ?>, <?php echo $jr2; ?>, <?php echo $jr3; ?>, <?php echo $jr4; ?>, <?php echo $jr5; ?>, <?php echo $jr6; ?>]
    }, {
        name: 'Kependidikan',
        data: [<?php echo $pd; ?>, <?php echo $pd1; ?>, <?php echo $pd2; ?>, <?php echo $pd3; ?>, <?php echo $pd4; ?>, <?php echo $pd4; ?>, <?php echo $pd6; ?>]
    }]
});
</script>

  </div>
</div>
</div>
        
         <br><br><br><br><br><br><br><br><br><br><br><br><br>
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">

                <a href="javascript:history.back()" class="btn tooltipped btn-floating btn-large" data-position="left" data-delay="50" data-tooltip="Kembali">
                  <i class="mdi-content-undo"></i>
                </a>
            

            </div>
            <!-- Floating Action Button -->