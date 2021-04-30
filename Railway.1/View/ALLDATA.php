<?php  
require_once '../model/model.php';
require_once '../controller/delete.php';

$data = getTableData();

?>
<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
    <title></title>
</head>
<body style=" background-image: url(abc.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
    <h1 align="center" >TRAIN SCHEDULE</h1>>


<br><br>
<table >
    <thead>
        <tr>
            <th>Train No</th>
            <th>Train Name</th>
            <th>Starting Point</th>
            <th>Arrival Time</th>
            <th>Destination Point</th>
            <th>Departure Time</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>


        <?php foreach ($data as $i => $da): ?>
            <tr>
                <td><?php echo $da['TrainNo'] ?></td>
                <td><?php echo $da['TrainName'] ?></td>
                <td><?php echo $da['StartingPoint'] ?></td>
                <td><?php echo $da['ArrivalTime'] ?></td>
                <td><?php echo $da['Destinationpoint'] ?></td>
                <td><?php echo $da['DepartureTime'] ?></td>
                <td><?php echo $da['Date'] ?></td>
            </tr>
        <?php endforeach; ?>
        

    </tbody>
    

</table>
<?php
    echo '<a href ="TRAININSERT.php"> <button>Insert Data</button></a> ';
    ?><br><br>

<form method="post">
    <input type="text" name="id" placeholder="Enter Train no">
    <input type="submit" name="submit" value="Delete" >
</form>

</body>
</html>