import Chart from 'chart.js/auto';

const labels = [
    'Red',
    'Blue',
    'Yellow'
];

const data = {
    labels: labels,
    datasets: [{
        label: 'My First Dataset',
        data: [300, 50, 100],
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
    options: {
        plugins: {
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    font: function(context) {
                        var width = context.chart.width;
                        var size = Math.round(width / 25);
        
                        return {
                            weight: 'bold',
                            size: size
                        };
                    }
                }
            },
            title: {
                display: true,
                text: 'Data Pegawai 2022',
                font: function(context) {
                    var width = context.chart.width;
                    var size = Math.round(width / 10);
    
                    return {
                        weight: 'bold',
                        size: size
                    };
                },
                padding: {
                 
                    bottom: 30
                }
            }
        }
    }
  };

new Chart(
    document.getElementById('myChart'),
    config
);