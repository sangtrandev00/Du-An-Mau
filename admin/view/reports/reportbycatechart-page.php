<div class="report-chart p-3">
    <h1>Biểu đồ hình tròn thống kê</h1>
    <div id="piechart"></div>
</div>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        <?php
$reportList = report_list_select();
foreach ($reportList as $report) {
    # code...
    echo "
    ['" . $report['tendm'] . "', " . $report['so_luong'] . "],
    ";
}
?>


        // ['Work', 12],
        // ['Eat', 2],
        // ['TV', 4],
        // ['Gym', 2],
        // ['Sleep', 8]
    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {
        'title': 'Thống kê số lượng đơn hàng theo loại',
        'width': 800,
        'height': 400
    };

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}
</script>