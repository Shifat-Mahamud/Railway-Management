<html>
<head>
<title>TrainInformationInsertion</title>
</head>
<body style=" background-image: url(traininfo.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
	

<h1 align="center" style="color:blue">Enter Train Information</h1>
<form name="dform" align="center" method="post">

 <?php 
    if(isset($error))
    {
        echo $error;
    }
    ?> 
	
Train No : <input class="textBox" type="text" name="trno" placeholder="Enter Train No"><br><br>
Train name : <input class="textBox" type="text" name="trname" placeholder="Enter Train name"><br><br>
Starting Point Name : <input class="textBox" type="text" name="stpoint" placeholder="Enter Starting Point Name"><br><br>
Arrival Time : <input class="textBox" type="Time" name="artime" placeholder="Enter Arrival Time"><br><br>
Destination Point Name : <input class="textBox" type="text" name="dspoint" placeholder="Enter Destination Point Name"><br><br>

Departure Time : <input class="textBox" type="Time" name="detime" placeholder="Enter Departure Time"><br><br>
Date : <input type="date" name="date"><br><br>

<input type ="submit" name="submit" value="Insert" style="color:blue">
<input type="reset" name="reset" id="reset" value="Reset" style="color:blue"><br><br>
<?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>
</form>
</body>
</html>