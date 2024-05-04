document.addEventListener('DOMContentLoaded', function() {
    const responsiveImage = document.getElementById('responsiveImage1');
    const message = document.getElementById('message');
    let messageVisible = false;

    responsiveImage.addEventListener('click', function() {
        if (messageVisible) {
            message.style.display = 'none';
            messageVisible = false;
        } else {
            message.style.display = 'block';
            messageVisible = true;
        }
    });
});


google.charts.load('current', { packages: ['corechart'] });
google.charts.setOnLoadCallback(drawCharts);

function drawCharts() {
  drawChart('chart_div1', [['Year', 'Sales', 'Expenses'], ['2004', 1000, 400], ['2005', 1170, 460], ['2006', 660, 1120], ['2007', 1030, 540]], 'Company Performance', 'red');
  drawChart('chart_div2', [['Year', 'Sales', 'Expenses'], ['2013', 1000, 400], ['2014', 1170, 460], ['2015', 660, 1120], ['2016', 1030, 540]], 'Company Performance', '#333');
}

function drawChart(containerId, dataTable, title, axisColor) {
  var data = google.visualization.arrayToDataTable(dataTable);
  var options = {
    title: title,
    hAxis: { title: 'Year', titleTextStyle: { color: axisColor } },
    vAxis: { minValue: 0 }
  };
  var chart = new google.visualization.AreaChart(document.getElementById(containerId));
  chart.draw(data, options);
}

// Redraw charts on window resize
window.onresize = function () {
  drawCharts();
};
