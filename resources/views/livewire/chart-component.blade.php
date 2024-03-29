<div>
    <div id="container"></div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var userData = <?php echo json_encode($datas)?>;
    Highcharts.chart('container', {
        title: {
            text: 'New User Growth, <?php echo date("Y"); ?>'
        },
        subtitle: {
            text: 'Source: shop.nishanbd.com'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug',
                            'Sep',
                            'Oct', 'Nov', 'Dec'
            ]
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: userData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>
</div>