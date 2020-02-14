    <script src="../../assets/vendors/js/vendors.min.js"></script>
    <script src="../../assets/vendors/js/charts/raphael-min.js"></script>
    <script src="../../assets/vendors/js/charts/morris.min.js"></script>
    <script src="../../assets/vendors/js/extensions/unslider-min.js"></script>
    <script src="../../assets/vendors/js/timeline/horizontal-timeline.js"></script>
    <script src="../../assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="../../assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
    <script src="../../assets/vendors/js/tables/buttons.colVis.min.js"></script>
    <script src="../../assets/vendors/js/tables/buttons.print.min.js"></script>
    <script src="../../assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="../../assets/js/core/app-menu.min.js"></script>
    <script src="../../assets/js/core/app.min.js"></script>
    <script src="../../assets/js/scripts/customizer.min.js"></script>
    <script src="../../assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
    <script src="../../assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-print.min.js"></script>   
    <script src="../../assets/js/scripts/tables/datatables/datatable-basic.min.js"></script>
  
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min">
    <script src="../../assets/js/bootstrap.min"></script>

    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>



    <script src="../../config.js"></script>
    <script src="../../jquery.min.js"></script>
    <script type="text/javascript" src="../../assets/vendors/sweetalert/sweetalert.min.js"></script>

<script>
$('#toggle1').click(function () {
  //check if checkbox is checked
  if ($(this).is(':checked')) {

      $('#foto1').removeAttr('disabled'); //enable input

  } else {
      $('#foto1').attr('disabled', true); //disable input
  }
});
</script>

<script>
$('#toggle2').click(function () {
  //check if checkbox is checked
  if ($(this).is(':checked')) {

      $('#foto2').removeAttr('disabled'); //enable input

  } else {
      $('#foto2').attr('disabled', true); //disable input
  }
});
</script>

<script src="login/js/main.js"></script>

<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart);

// Add data
chart.data = [ {
  "country": "Lithuania",
  "litres": 501.9
}, {
  "country": "Czech Republic",
  "litres": 301.9
}, {
  "country": "Ireland",
  "litres": 201.1
}, {
  "country": "Germany",
  "litres": 165.8
}, {
  "country": "Australia",
  "litres": 139.9
}, {
  "country": "Austria",
  "litres": 128.3
}, {
  "country": "UK",
  "litres": 99
}, {
  "country": "Belgium",
  "litres": 60
}, {
  "country": "The Netherlands",
  "litres": 50
} ];

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "litres";
pieSeries.dataFields.category = "country";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

}); // end am4core.ready()
</script>
