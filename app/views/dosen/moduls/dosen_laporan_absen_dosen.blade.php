
{{HTML::script('js/highcharts.js')}}
{{HTML::script('js/modules/exporting.js')}}

<script type="text/javascript">

	var is_load_data = "yes";

	
	function absen_dosen(jam, hari){


$('#grafik_absen').html('');

			$('#grafik_absen').highcharts({
				title: {
					text: 'Absensi',
					x: -20 //center
				},

				subtitle: {
					text: 'Dosen',
					x: -20
				},
				xAxis: {
					title: {
					text:'Jam'
				},

				categories: Jam

				},
				
				yAxis: {
					title: {	
					text: 'Hari'
				},

				plotLines: [{
					value: 0,
					width: 1,
					color: '#808080'
					}]
				},
				
				tooltip: {
					valueSuffix: '°C'
				},

				legend: {
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'middle',
					borderWidth: 0
				},

				series: [{
					name: 'Hari',
					data: hari
					}]

			});

 			alert('test-chart');

	};



	$(document).ready(function() {

		$.get( "http://localhost/public/testnilai", { "nama" : "Bassamtiano" }, function( data ) {

			var uas = new Array();
			var semester = new Array();
			var uts = new Array();


			for(var i = 0; i < data.length; i++) {

				uas.push(data[i].uas);
				semester.push(data[i].semester);
				uts.push(data[i].uts);

			}


			for(var i = 0; i < uas.length; i++) {
				uas[i] = parseFloat(uas[i], 10);
			}

			for(var i = 0; i < uts.length; i++) {
				uts[i] = parseFloat(uts[i], 10);
			}    

			alert('test'); 

			nilai_uas(semester, uas, uts);



			

		});

	});



</script>


<style type="text/css">
	#tbl_h {
		cursor: pointer;
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$(".pull-downs").each(function(){
			$(this).css('margin-top', $(this).parent().height() - $(this).height());
		});
	});
</script>


<!-- Edited:almerps 240414 -->
<!-- Awal Title -->
<div class="row">
Laporan Absen Dosen
</div>
<!-- Akhir Title -->

<!-- Awal Content -->
<div class="row moduls-main-content"><!-- Awal row content -->
	<div class="col-md-12"><!-- Awal col-md-12 -->
		<br />

	</div><!-- akhir col-md-12 -->
</div><!-- Akhir row content -->

<!-- Akhir Content -->