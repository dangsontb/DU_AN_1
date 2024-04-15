
<script src="https://www.gstatic.com/charts/loader.js"></script>


<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
 <?php 
    $list = count($list_bieudo);
    $i =1;
    foreach ($list_bieudo as $item) {
        ($i == $list) ? $dauphay ="" : $dauphay=",";
        echo "['".$item['brand_name']."', ".$item['soluongmua']."]".$dauphay;
        $i++;
    }
 
 ?>
]);

// Set Options
const options = {
  title:'Biểu đồ thương hiệu bán chạy nhất',
  is3D:true
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>


