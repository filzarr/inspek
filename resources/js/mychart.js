import Chart from 'chart.js/auto';

const labels = [
    'Pejabat Struktural II',
    'Pejabat Struktural III',
    'Pejabat Struktural IV',
    'Auditor Ahli Madya',
    'Auditor Ahli Muda',
    'Auditor Ahli Pertama',
    'Auditor Ahli Penyelia',
    'Auditor Pelaksana Lanjutan',
    'PPUD Madya',
    'PPUD Muda',
    'PPUD Pertama',
    'Jabatan Fungsional Umumu',
];

const data = {
    labels: labels,
    datasets: [{
        label: 'My First Dataset',
        data: [1, 6, 3, 8, 24, 20, 1, 1, 29, 16, 2, 40],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          'rgb(235, 229, 52)',
          'rgb(147, 235, 52)',
          'rgb(52, 235, 107)',
          'rgb(52, 235, 174)',
          'rgb(113, 52, 235)',
          'rgb(165, 52, 235)',
          'rgb(235, 83, 52)',
          'rgb(125, 104, 74)',
          'rgb(60, 94, 34)',

        ],
        hoverOffset: 1
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
                        var size = Math.round(width / 40);
        
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
                    var size = Math.round(width / 15);
    
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