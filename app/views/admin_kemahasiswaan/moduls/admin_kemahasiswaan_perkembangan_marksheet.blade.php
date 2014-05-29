
{{HTML::script('js/highcharts.js')}}
{{HTML::script('js/modules/exporting.js')}}

<script type="text/javascript">

	var is_load_data = "yes";

	
	function nilai_uas(semester, uas, uts){


$('#grafik_nilai').html('');

			$('#grafik_nilai').highcharts({
				title: {
					text: 'Nilai UAS',
					x: -20 //center
				},

				subtitle: {
					text: 'Mahasiswa PNJ',
					x: -20
				},
				xAxis: {
					title: {
					text:'Semester'
				},

				categories: semester

				},
				
				yAxis: {
					title: {	
					text: 'Nilai'
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
					name: 'Ujian Tengah Semester',
					data: uts
					}, {
					name: 'Ujian Akhir Semester',
					data: uas
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


<div ng-controller="AdminKemahasiswaanBacaMahasiswaController" id="div-controller">

	<div class="row broccoli-rowKepala">
		<h1> Perkembangan Marksheet <small> Grafik perkembangan marksheet mahasiswa </small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-3 broccoli-mojok-kiri">
			<select class="form-control">
				<option>NIM</option> 
				<option>Nama</option> 
				<option>Jurusan</option> 
				<option>Prodi</option> 
			</select>
		</div><!--/navigasiKiri-->

		<div class="col-md-3 broccoli-mojok-kiri">
			<input class="form-control" ng-model="query[model_pilihan_cari]" placeholder="Cari . . . ."/>	
		</div><!--/navigasiKiri-->

		<div class="col-md-3 broccoli-mojok-kiri">
			<input class="form-control" ng-model="query[model_pilihan_cari]" placeholder="Cari . . . ."/>	
		</div><!--/navigasiKiri-->
		
	</div>

	<div class="row broccoli-rowIsi">

		<div id="grafik_nilai">

		</div>

	</div>

</div>