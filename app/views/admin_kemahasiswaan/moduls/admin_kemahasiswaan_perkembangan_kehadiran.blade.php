

  

<link rel="stylesheet" type="text/css" href="http://www.prioritymarketers.com/jqplot/src/jquery.jqplot.css">



<script type='text/javascript' src="http://www.prioritymarketers.com/jqplot/src/jquery.jqplot.js"></script>
  


<script type='text/javascript'>//<![CDATA[ 

$.jqplot.config.enablePlugins = true;
var chartData = [["19-Jan-2012", 2.61], ["20-Jan-2012", 5.00], ["21-Jan-2012", 6.00]];

// add a custom tick formatter, so that you don't have to include the entire date renderer library.
$.jqplot.DateTickFormatter = function(format, val) {
    // for some reason, format isn't being passed through properly, so just going to hard code for purpose of this jsfiddle
    val = (new Date(val)).getTime();
    format = '%b&nbsp%#d'
    return $.jsDate.strftime(val, format);
};

function PlotChart(chartData, extraDays) {
    // if you want extra days, just append them to your chartData array.
    if (typeof extraDays === "number") {
        for (var i = 0; i < extraDays; i++) {
            var actualDate = new Date(chartData[chartData.length - 1]); // convert last entry to actual date
            var newDate = new Date(actualDate.getFullYear(), actualDate.getMonth(), actualDate.getDate() + 1); // create new increased date
            chartData.push([newDate, 0]);
        }
    }

    var plot2 = $.jqplot('chart1', [chartData], {
        title: 'Mouse Cursor Tracking',
        seriesDefaults: {
            renderer: $.jqplot.BarRenderer,
            rendererOptions: {
                barPadding: 1,
                barWidth: 50
            },
            pointLabels: {
                show: true
            }
        },
        axes: {
            xaxis: {
                pad: 1,
                // a factor multiplied by the data range on the axis to give the            
                renderer: $.jqplot.CategoryAxisRenderer,
                // renderer to use to draw the axis,     
                tickOptions: {
                    formatString: '%b %#d',
                    formatter: $.jqplot.DateTickFormatter
                }
            },
            yaxis: {
                tickOptions: {
                    formatString: '$%.2f'
                }
            }
        },
        highlighter: {
            sizeAdjust: 7.5
        },
        cursor: {
            show: true
        }
    });
}

PlotChart(chartData, 3);


</script>

  <!--[if lt IE 9]>
  <script src="http://www.prioritymarketers.com/jqplot/src/excanvas.min.js"></script>
<![endif]-->

<div id="chart1" style="margin-top:20px; margin-left:20px; width:600px; height:300px;"></div>




