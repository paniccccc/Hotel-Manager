<?php
include_once 'admin/include/class.user.php'; 
$user=new User();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
    
    <style>
          
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 250px;
			width:50%;
			text-align:center;
        }
        
        body
        {
            background-image: url('https://images.unsplash.com/photo-1624594895779-14457ba78dcd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        h4 {
            color: #ffbb2b;
			text-align:center;
        }
        h6
        {
            color: navajowhite;
            font-family:  monospace;
        }


    </style>
    
    
</head>

<body>
    <div class="container">
      
      
       <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
					<li><a href="places.php">Places to visit !</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>
        
        
        
        <?php
        
        $sql="SELECT * FROM room_category";
        $result = mysqli_query($user->db, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
//              
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo "
                            <div class='row'>
                            <div class='col-md-3'></div>
                            <div class='col-md-6 well'>
                                <h4>".$row['roomname']."</h4>
								<hr>
                                <h6>No of Beds: ".$row['no_bed']." ".$row['bedtype']." bed.</h6>
                                <h6>Facilities: ".$row['facility']."</h6>
                                <h6>Price: ".$row['price']." INR/night.</h6>
								
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
								<a href='./booknow.php?roomname=".$row['roomname']."'><button class='btn btn-primary button'>Book Now</button></a>
                            </div>
                            </div>
                            
                        
                    
                         "; //echo end
                    
                    
                }
                
                
                          
            }
            else
            {
                echo "No Data Found";
            }
        }
        else
        {
            echo "Cannot connect to server".$result;
        }
        
        
        
        
        
        ?>


    </div>
    
    
    
    
    





    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
</body>

</html>