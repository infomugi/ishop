<?php
/* @var $this SiteController */
$this->pageTitle='Dashboard';

?>

<div class="row">
	<div class="col-md-4 col-sm-6 col-xs-12">
		<section class="panel">
			<div class="panel-body">
				<div class="circle-icon bg-info">
					<i class="fa fa-user"></i>
				</div>
				<div>
					<h3 class="no-margin"><?php echo Setting::model()->totalCustomer(); ?></h3>
					Pelanggan Bulan ini
				</div>
			</div>
		</section>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-12">
		<section class="panel">
			<div class="panel-body">
				<div class="circle-icon bg-warning">
					<i class="fa fa-archive"></i>
				</div>
				<div>
					<h3 class="no-margin"><?php echo Setting::model()->totalTransaction(); ?></h3>
					Penjualan Bulan Ini
				</div>
			</div>
		</section>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-12">
		<section class="panel">
			<div class="panel-body">
				<div class="circle-icon bg-success">
					<i class="fa fa-tags"></i>
				</div>
				<div>
					<h3 class="no-margin"><?php echo Product::model()->rupiah(Setting::model()->paymentTransaction()); ?></h3>
					Pendapatan Bulan Ini
				</div>
			</div>
		</section>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12 hidden-xs">
		<section class="panel">
			<div class="panel-body">

             <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

             <?php 
             echo $this->renderPartial('dashboard_transaction', array(
                 'dataProvider1'=>$dataProvider1,
                 'dataProvider2'=>$dataProvider2,
                 'dataProvider3'=>$dataProvider3,
                 'dataProvider4'=>$dataProvider4,
                 'dataProvider5'=>$dataProvider5
                 )); ?>


             </div>
         </section>
     </div>

 </div>

 <script src="https://code.highcharts.com/highcharts.js"></script>
 <script src="https://code.highcharts.com/modules/exporting.js"></script>
 <script type="text/javascript">

    $(function () {
        Highcharts.chart('container', {
            chart: {type: 'areaspline'}, 
            title: {text: 'Laporan Penjualan Barang'},
            legend: {layout: 'vertical', align: 'left', verticalAlign: 'top', x: 150, y: 100, floating: true, borderWidth: 1, backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'}, xAxis: {
            categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember', ], 
            plotBands: [{from: 200.5, to: 100.5, color: 'rgba(68, 170, 213, .2)'}] }, 
            yAxis: {title: {text: 'Barang'} }, 
            tooltip: {shared: true, valueSuffix: ' unit'}, 
            credits: {enabled: false }, 
            plotOptions: {areaspline: {fillOpacity: 0.5 } }, 
            series: [{
                name: 'Penjualan',
                data: [<?php for ($i=1; $i <= 12; $i++) {echo Transaction::model()->monthReport($i).","; } ?> ] 
                },]
            });
    });
</script>        