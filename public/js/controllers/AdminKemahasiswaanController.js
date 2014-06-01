
function AdminKemahasiswaanBacaMahasiswaController($scope, $http) {

	alert('test');

	$http.get('/public/admin_kemahasiswaan/baca/mahasiswa').success(function(data_m) {
		$scope.data_mahasiswa = data_m;
	});

	$scope.getData = function (){
		$http.get('/public/admin_kemahasiswaan/baca/mahasiswa').success(function(data_m) {
			$scope.data_mahasiswa = data_m;
		});
	}

	$scope.modal_test_mahasiswa = function(dm) {
		alert(dm);
	}

	$scope.modal_tambah_mahasiswa = function() {
		$('.modal_tambah').load(url_admin_kemahasiswaan_modal_tambah_mahasiswa , function() {
			$('.modal_tambah').modal('show');	
			
		});
	}

	$scope.modal_ubah_mahasiswa = function(id_mahasiswa) {
		$('.modal').load(url_admin_kemahasiswaan_modal_ubah_mahasiswa + '?id_mahasiswa=' + id_mahasiswa, function() {
			$('.modal').modal('show');
		});
	}

	$scope.modal_hapus_mahasiswa = function(id_mahasiswa, nama) {
		$('.modal').load(url_admin_kemahasiswaan_modal_hapus_mahasiswa + '?id_mahasiswa=' + id_mahasiswa + '&nama=' + nama, function() {
			$('.modal').modal('show');
		});
	}

	$scope.modal_detail_mahasiswa = function(id){
		 $('.modal').load(url_admin_kemahasiswaan_modal_detail_mahasiswa + '?id_mahasiswa=' + id, function() {
		 	$('.modal').modal('show');
		 });
	}

	$scope.tesUbah_mahasiswa = function(){
		alert("tes");
	}

	$scope.query = {};
	$scope.model_pilihan_cari = 'nim';

	$scope.typeOptions_jurusan = [
	    { name: 'Pilih Jurusan', value: 'null' }, 
	    { name: 'Teknik Elektro', value: '1' }, 
	    { name: 'Teknik Grafika', value: '2' },
	    { name: 'Teknik Mesin', value: '3' },
	    { name: 'Teknik Penerbangan', value: '4' },
	    { name: 'Administrasi Niaga', value: '5'}
    ];

    $scope.form_pilihan_jurusan = {type : $scope.typeOptions_jurusan[0].value};
} 

function AdminKemahasiswaan_action($scope, $http){
	alert("action alert");
}


function AdminKemahasiswaanBacaPermohonanMahasiswaController($scope, $http) {
	$http.get('/public/admin_kemahasiswaan/baca/permohonan').success(function(data_kelas) {
    	$scope.permohonan = data_kelas;
  	});

  	$scope.modal_tambah_permohonan = function() {
  		$('.modal').load(url_admin_kemahasiswaan_modal_tambah_permohonan , function() {
			$('.modal').modal('show');	
		});
  	}

  	$scope.modal_ubah_permohonan = function(id_mahasiswa_permohonan) {
  		$('.modal').load(url_admin_kemahasiswaan_modal_ubah_permohonan + '?id_mahasiswa_permohonan=' + id_mahasiswa_permohonan, function() {
			$('.modal').modal('show');
		});
  	}

  	$scope.modal_hapus_permohonan = function(id_mahasiswa_permohonan, nama) {
  		var nama_pemohon = nama;
  		$('.modal').load(url_admin_kemahasiswaan_modal_hapus_permohonan + '?id_mahasiswa_permohonan=' + id_mahasiswa_permohonan + '&nama=' + encodeURIComponent(nama_pemohon), function() {
			$('.modal').modal('show');
		});
  	}

  	$scope.query_permohonan = {};
	$scope.model_pilihan_permohonan_cari = 'nama';

	$scope.typeOptions_jurusan = [
	    { name: 'Pilih Jurusan', value: 'null' }, 
	    { name: 'Teknik Elektro', value: '1' }, 
	    { name: 'Teknik Grafika', value: '2' },
	    { name: 'Teknik Mesin', value: '3' },
	    { name: 'Teknik Penerbangan', value: '4' },
	    { name: 'Administrasi Niaga', value: '5'}
    ];

    $scope.form_pilihan_jurusan = {type : $scope.typeOptions_jurusan[0].value};
}


function calendar() {

	$('#tanggal_lahir input').datepicker({
    todayBtn: true,
    todayHighlight: true
	});

}

function idam(id){
	$('.modal').load(url_admin_kemahasiswaan_modal_detail_mahasiswa + '?id_mahasiswa=' + id, function() {
		 $('.modal').modal('show');
	});
}

$(document).ready(function(){


	function idam(){
		alert("idam");
	}
});

// function tambah_mahasiswa() {

// 	//AdminKemahasiswaanBacaMahasiswaController();

// 	var dataForm = $("#form_tambah_mahasiswa").serialize();
// 	//alert(dataForm);

	
// 	 $.ajax({
// 	 	url:"/public/admin_kemahasiswaan/tambah/mahasiswa",
// 	 	data: dataForm,
// 	 	success:function(result){
//      		//alert("sukses");
//      		//baca_mahasiswa($scope, $http);
//      		AdminKemahasiswaanBacaMahasiswaController();
//    		}
//    	});
// }