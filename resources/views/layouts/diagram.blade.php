<div class="container mt-5 mb-5" style="background-color: white">
    <div class="d-flex justify-content-center">
        <div class=" col-5 pt-5 pb-5" >
            <canvas id="myChart" width="500" height="500">
            </canvas>
        </div>
    </div>
</div>
<script type="text/javascript">
 const labels = [
    'January', 
    'February',
    'March',

    
    
  ];

  const data = {
    labels: labels,
    font:{
        size: 200;
    }
    datasets: [{
    label: 'My First Dataset',
    datasets:[{ 
        [300, 50, 100],
        font:{
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
  
<script src={!! asset("https://cdn.jsdelivr.net/npm/chart.js"  ) !!}></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="js/chart.min.js"></script>
<script src="{{ mix('/js/app.js') }}"></script>