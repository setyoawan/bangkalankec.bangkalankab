<section class="ftco-section ftco-no-pb">
    <div class="container">
        <!-- <div class="row no-gutters"> -->
        <div id="container"></div>
        <!-- </div> -->
    </div>
</section>

<br>
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <!-- <div class="row no-gutters"> -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td colspan="4" class="text-center font-weight-bold">Tabel Data Penduduk</td>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Laki Laki</td>
                    <td><?php echo $lakilaki ?> Orang</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Perempuan</td>
                    <td><?php echo $perempuan ?> Orang</td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Kepala Keluarga</td>
                    <td><?php echo $kepala_keluarga ?> Orang</td>

                </tr>
                <tr>
                    <!-- <td scope="row"> </td> -->
                    <td colspan="2" class="text-center font-weight-bold">Total</td>
                    <td colspan="2"><?php echo $lakilaki + $perempuan + $kepala_keluarga ?> Orang</td>
                </tr>

            </tbody>
        </table>
        <!-- </div> -->
    </div>
</section>

<br>



<script>
    Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Grafik Statistik Penduduk'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f} %</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || ' '
                    }
                }
            }
        },
        series: [{
            name: 'Jumlah',
            colorByPoint: true,
            data: [{
                name: 'Laki Laki',
                y: <?php echo $lakilaki ?>
            }, {
                name: 'Perempuan',
                y: <?php echo $perempuan ?>
            }, {
                name: 'Kepala Keluarga',
                y: <?php echo $kepala_keluarga ?>
            }]
        }]
    });
</script>