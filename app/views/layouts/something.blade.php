<!doctype html>
<html ng-app="plunker">
  <head>
    {{HTML::script('js/angular.min.js')}}
    {{HTML::script('js/ui-bootstrap-tpls-0.11.0.min.js')}}
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

<script>
angular.module('plunker', ['ui.bootstrap']);
function AdminKemahasiswaanBacaMahasiswaController($scope, $http) {

  $scope.selected = undefined;
  $http.get('/public/admin_kemahasiswaan/baca/ruang_kelas').success(function(data_kelas) {
    $scope.ruang_kelas = data_kelas;
  });

}
</script>


<script type="text/ng-template" id="form_placeholder.html">
  <a>
      <span bind-html-unsafe="match.label | typeaheadHighlight:query"></span>
  </a>
</script>
<div class='container-fluid' ng-controller="AdminKemahasiswaanBacaMahasiswaController">
    <input type="text" ng-model="customSelected" placeholder="Kelas" typeahead="r as r.nama_ruang_kelas for r in ruang_kelas | filter:{nama_ruang_kelas:$viewValue}" typeahead-template-url="form_placeholder.html" class="form-control">
</div>

  </body>
</html>
