

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>  </title>

  {{HTML::script('js/jquery.min.js')}}
  {{HTML::script('js/bootstrap.min.js')}}
  {{HTML::script('js/highcharts.js')}}
  {{HTML::script('js/modules/exporting.js')}}


  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
    <h2 style="text-align: center;">Bootstrap 3.1.0 - Modal Demo</h2>
    
    <hr>
    <div class="row text-center">
      <h3>The Large Modal</h3>
      <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#largeModal">Click to open Modal</a>
    </div>
    <hr>
    

  </div>

  

  <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Large Modal</h4>
        </div>
        <div class="modal-body">

          <div id="container" style=" width:800px; height: 400px; margin: 0 auto">

          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  <div id="testval">
  </div>

  


  <script type="text/javascript">



  var chart;

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



      nilai_uas(semester, uas, uts);

      $( "#testval" ).html( uas[0] + semester[0] );
      
    });

  });

  // function nilai_uas(semester, uas, uts) {

  //   alert('hai');

  //       $('#container').highcharts({
  //           title: {
  //               text: 'Monthly Average Temperature',
  //               x: -20 //center
  //           },
  //           subtitle: {
  //               text: 'Source: WorldClimate.com',
  //               x: -20
  //           },
  //           xAxis: {
  //               categories: semester
  //           },
  //           yAxis: {
  //               title: {
  //                   text: 'Nilai'
  //               },
  //               plotLines: [{
  //                   value: 0,
  //                   width: 1,
  //                   color: '#808080'
  //               }]
  //           },
  //           tooltip: {
  //               valueSuffix: '°C'
  //           },
  //           legend: {
  //               layout: 'vertical',
  //               align: 'right',
  //               verticalAlign: 'middle',
  //               borderWidth: 0
  //           },
  //           series: [{
  //               name: 'Ujian Tengah Semester',
  //               data: uts
  //           }, {
  //               name: 'Ujian Akhir Semester',
  //               data: uas
  //           }]
  //       });
  //   }


  function nilai_uas(semester, uas, uts){

     $('#container').highcharts({
      title: {
          text: 'Monthly Average Temperature',
          x: -20 //center
      },
      subtitle: {
          text: 'Source: WorldClimate.com',
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

    
  }


  </script>

  

  

