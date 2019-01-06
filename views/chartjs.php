

<script>
 function funProducts() {

     Morris.Bar({
         element: 'chart',
         data: [<?php echo $chart_data2; ?>],
         xkey: 'service',
         ykeys: ['profit'],
         labels: ['Profit', 'Purchase', 'Sale'],
         hideHover: 'auto',
         stacked: true,
         barColors: ['#5045EB'],
         axes: true,
         grid: true
     });
 }

 function funAppointments() {

     Morris.Bar({
         element: 'chart',
         data: [<?php echo $chart_data; ?>],
         xkey: 'service',
         ykeys: ['profit'],
         labels: ['Profit', 'Purchase', 'Sale'],
         hideHover: 'auto',
         stacked: true,
         barColors: ['#5045EB'],
         axes: true,
         grid: true
     });
 }


</script>
