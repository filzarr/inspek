<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });

    google.charts.setOnLoadCallback(drawChart)

    function drawChart() {

        var data = new google.visualization.arrayToDataTable([
            // var pegawai = @json($datapegawai),
            ['Nama', 'Jumlah'],
            @php
                foreach ($datapegawai as $data) {
                    echo "['" . $data->nama . "', " . $data->jumlah . '],';
                }
            @endphp
        ])
        // pegawai.forEach(function(pegawai) { console.log(pegawai.nama); });
        // ['Work',     11],
        // ['Eat',      2],
        // ['Commute',  2],
        // ['Watch TV', 2],
        // ['Sleep',    7],
        // ['game',    7],

        const mediaQuery = window.matchMedia('(min-width: 900px)')
        if (mediaQuery.matches) {
            var options = {
            title: 'Data Pegawai Inspektorat',
            titleTextStyle: {
              fontSize: 30,

            },
   
          
          
            pieHole: 0.5,
        };
        }
        if (!mediaQuery.matches) {
            var options = {
            title: 'Data Pegawai Inspektorat',
            titleTextStyle: {
              fontSize: 15,

            },
            fontSize: 6,
          
          
            pieHole: 0.5,
        };
        }

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }
</script>



            <div class="shadow-lg" id="donutchart"  ></div>

  
<script type="text/javascript">
    const labels = [
        'January',
        'February',
        'March',



    ];

    const data = {
        labels: labels,
        font: {
            size: 200;
        }
        datasets: [{
            label: 'My First Dataset',
            datasets: [{
                [300, 50, 100],
                font: {
                    size: 200
                }
            }]
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
    };
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
<script>
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>

<script src={!! asset('https://cdn.jsdelivr.net/npm/chart.js') !!}></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="js/chart.min.js"></script>
<script src="{{ mix('/js/app.js') }}"></script>
