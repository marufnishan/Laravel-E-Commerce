<div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha512-vBmx0N/uQOXznm/Nbkp7h0P1RfLSj0HQrFSzV8m7rOGyj30fYAOKHYvCNez+yM8IrfnW0TCodDEjRqf6fodf/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div style="background: white;min-height:400px;margin-left:0 !importent">
        <canvas id="barChart"></canvas>
    </div>
    

    <script>
        $(function () {
                var datas = <?php echo json_encode($datas); ?>;
                var barCanvas = $("#barChart");
                var barChart = new Chart(barCanvas, {
                    type: 'bar',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug',
                            'Sep',
                            'Oct', 'Nov', 'Dec'
                        ],
                        datasets: [{
                            label: 'New Order Growth , <?php echo date("Y"); ?>',
                            data: datas,
                            backgroundColor: ['red', 'orange', 'yellow', 'green', 'blue', 'indigo',
                                'violet', 'purple', 'pink', 'silver', 'gold', 'brown'
                            ]
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            }

        )

    </script>
</div>
