 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

 <script>
     const orderChart = new Chart(document.getElementById('orderChart'), {
         type: 'line',
         data: {
             labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
             datasets: [{
                 label: 'Orders',
                 data: [80, 90, 95, 100, 115, 130, 140, 145],
                 fill: true,
                 borderColor: '#3b82f6',
                 backgroundColor: 'rgba(59,130,246,0.1)',
                 tension: 0.4
             }]
         },
         options: {
             plugins: {
                 legend: {
                     display: false
                 }
             }
         }
     });

     // Custom plugin for center text
     Chart.register({
         id: 'doughnutCenterText',
         beforeDraw(chart) {
             if (chart.config.type !== 'doughnut') return;

             const width = chart.width;
             const height = chart.height;
             const ctx = chart.ctx;
             ctx.restore();
             const fontSize = (height / 114).toFixed(2);
             ctx.font = `${fontSize}em sans-serif`;
             ctx.textBaseline = "middle";
             ctx.fillStyle = "#10b981";

             const text = '65%';
             const textX = Math.round((width - ctx.measureText(text).width) / 2);
             const textY = height / 2.2;
             ctx.fillText(text, textX, textY);
             ctx.save();
         }
     });

     const ctx2 = document.getElementById('shipmentSuccessChart').getContext('2d');
     new Chart(ctx2, {
         type: 'doughnut',
         data: {
             labels: ['Success', 'Not Yet'],
             datasets: [{
                 data: [65, 35],
                 backgroundColor: ['rgba(16, 185, 129, 0.7)', 'rgba(229, 231, 235, 1)'],
                 borderColor: ['rgba(16, 185, 129, 1)', 'rgba(229, 231, 235, 1)'],
                 borderWidth: 1
             }]
         },
         options: {
             responsive: true,
             plugins: {
                 legend: {
                     position: 'bottom'
                 }
             }
         }
     });
 </script>