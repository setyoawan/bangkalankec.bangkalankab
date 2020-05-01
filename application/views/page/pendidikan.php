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
                    <td>SD/Sederajat</td>
                    <td><?php echo $sd ?></td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>SMP/Sederajat</td>
                    <td><?php echo $smp ?></td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>SMA/Sederajat</td>
                    <td><?php echo $sma ?></td>

                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Akademi</td>
                    <td><?php echo $akademi ?></td>

                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Sarjana</td>
                    <td><?php echo $sarjana ?></td>

                </tr>
                <tr>
                    <!-- <td scope="row"> </td> -->
                    <td colspan="2" class="text-center">Total</td>
                    <td colspan="2"><?php echo $sd + $smp + $sma + $akademi + $sarjana ?> </td>
                </tr>

            </tbody>
        </table>

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
            text: 'Grafik Statistik Pendidikan'
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
                name: 'SD/Sederajat',
                y: <?php echo $sd ?>
            }, {
                name: 'SMP/Sederajat',
                y: <?php echo $smp ?>
            }, {
                name: 'SMA/Sederajat',
                y: <?php echo $sma ?>
            }, {
                name: 'Akademi',
                y: <?php echo $akademi ?>
            }, {
                name: 'Sarjana',
                y: <?php echo $sarjana ?>
            }]
        }]
    });
</script>