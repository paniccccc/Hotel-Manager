<?php
include_once 'admin/include/class.user.php';
$user = new User();
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
            background: rgba(0, 0, 0, 0.85);
            border: none 4px;
            height: 650px;
            width: 50%;
            text-align: center;
        }

        body {
            background-image: url('https://source.unsplash.com/2048x900/?Mykonos');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        h1 {
            color: #ffffff;
            text-align: center;
            font-weight: bolder;
			border:black;
		
        }

        a {
            color: #ffffff;
            font-weight: bolder;
        }

        h4 {
            color: #ffbb2b;
            text-align: center;
        }

        h6 {
            color: navajowhite;
            font-family: monospace;
            text-align: justify;
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
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li class="active"><a href="places.php">Places to visit !</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>
                </ul>
            </div>
        </nav>



        <div class='row'>
            <h1>Places to visit</h1>


            <div class="col-md-4 well">
                <h4>Mykonos Windmills</h4>
                <img src="https://www.greeka.com/seedo/photos/49/mykonos-windmills-top-2-1280.webp" style="width: 100%; height:290px"></img>
                <hr>

                <h6>The windmills are the quintessential features of Mykonos landscape. There are plenty of them that have become a part and parcel of Mykonos. Visitors to Mykonos can see the windmills irrespective of the locale. From a distance, one can easily figure out the windmills, courtesy of their silhouette. They are primarily concentrated in the neighborhood of Chora and some are also located in and around Alevkantra.
                    These innovative wheels were primarily used for crushing agricultural yields.
                    In all, there were 16 such windmills in operation.</h6>
                <a href="https://goo.gl/maps/88SLYu8THYgTVciS9">Google Maps Coordinates</a>
            </div>




            <div class="col-md-4 well">
                <h4>Old Port of Mykonos</h4>
                <img src="https://www.greeka.com/seedo/photos/1341/mykonos-the-old-port-of-mykonos-top-1-1280.webp" style="width: 100%; height:290px"></img>
                <hr>
                <h6>The Old Port of Mykonos is located in Mykonos town, just behind the famous Little Venice.
                    The southern part of the Port is a place full of life 24 hours a day, as it attracts many visitors thanks to its central location.
                    Many shops, bars, restaurants, hotels and the traditional fish market of the island are located nearby and can be discovered while walking through the town’s picturesque alleys.
                </h6>
                <a href="https://goo.gl/maps/B4ef9PMFY2FF5aHe7"> Google Maps Coordinates</a>
            </div>



            <div class='col-md-4 well'>
                <h4>Delos Island</h4>
                <img src="https://www.greeka.com/seedo/photos/37/mykonos-delos-island-top-3-1280.webp" style="width: 100%; height:290px"></img>
                <hr>
                <h6>The island of Delos holds a very important place in ancient Greek history, especially so politically and spiritually.
                    It was blessed with a great geopolitical position, as the epicenter of the Cyclades complex which literally translates into "those who encircle [Delos]".
                    First inhabited by the Carians in the 3rd millennium BC, it was approximately in the beginning of 1.000 BC that Delos first became a worship destination of ancient Greeks. Around the same time it was declared as the epicenter of the Aegean islands' Alliance.
                    It was almost 6 centuries later that the Athenians attempted dominating the sacred island.
                </h6>
                <a href="https://goo.gl/maps/rTTJwtxDLySjwAp56"> Google Maps Coordinates</a>
            </div>



            <div class='col-md-4 well'>
                <h4>Panagia Paraportiani</h4>
                <img src="https://www.greeka.com/seedo/photos/44/mykonos-panagia-paraportiani-top-2-1280.webp" style="width: 100%; height:290px"></img>
                <hr>
                <h6>The lovely church of Panagia (Virgin Mary) Paraportiani is among the most photographed churches not only in Mykonos but in the whole world.
                    It is located at the entrance of Kastro neighborhood, right by the sea. Its name (Paraportiani) actually means standing next to the entrance door,
                    meaning that the church was next to the Castle door.
                </h6>
                <a href="https://goo.gl/maps/joant29eLToqWZmC8"> Google Maps Coordinates</a>
            </div>


            <div class='col-md-4 well'>
                <h4>Catholic Church</h4>
                <img src="https://www.greeka.com/seedo/photos/834/mykonos-catholic-church-top-1-1280.webp" style="width: 100%; height:290px"></img>
                <hr>
                <h6>The Catholic Church of Panagia Rodario is located in Alefkandra square, close to the windmills above Chora town.
                    This is the only Catholic church on Mykonos and serves the Catholics that live permanently on the island and the thousands of foreign tourists that visit Mykonos every summer.
                    Constructed in 1668, the church was renovated in 1677 by bishop Leandros Xanthakis, as shown in an inscription above the entrance.
                </h6>
                <a href="https://goo.gl/maps/Ucr2D6GXTCHE3Xjx9"> Google Maps Coordinates</a>
            </div>



            <div class='col-md-4 well'>
                <h4>Gyzi Castle</h4>
                <img src="https://www.greeka.com/seedo/photos/50/mykonos-gyzi-castle-top-1-1280.webp" style="width: 100%; height:290px"></img>
                <hr>
                <h6>The castle of Gyzi lies on a hill above the village of Ano Mera, in the center of Mykonos island.
                    It dates from the 13th century and only some ruins of it remain today.
                    It was built during the rule of the Gyzi family, a noble Venetian family that was ruling the Cyclades in the Medieval times, to protect the island from pirates and enemy attacks.
                </h6>
                <a href="https://goo.gl/maps/VUNFn3dnzTEhETsg7"> Google Maps Coordinates</a>
            </div>

            <div class='col-md-4 well'>
                <h4>Chora Castle</h4>
                <img src="https://www.greeka.com/seedo/photos/1383/mykonos-chora-castle-top-1-1280.webp" style="width: 100%; height:290px"></img>
                <hr>
                <h6>As most Greek Islands, Mykonos used to face serious problems because of the pirates’ attacks in the past.
                    The Venetian Castle of Chora was built on a hill providing a panoramic view of the sea to offer protection to the locals.
                    Until the 17th century, the residents of Chora were living inside the Castle’s area, which was shielded thanks to the reinforced stone walls along with the 3-4 defensive turrets that were constructed for maximum security.
                    Today, the Castle of Chora is a beautiful spot in Mykonos with picturesque whitewashed alleys, narrow streets, and interesting worth-visiting sights.
                </h6>
                <a href="https://goo.gl/maps/KzmpUTZaJQoSbfgC9"> Google Maps Coordinates</a>
            </div>

            <div class='col-md-4 well'>
                <h4>Paleokastro Monastery</h4>
                <img src="https://www.greeka.com/seedo/photos/46/mykonos-paleokastro-monastery-top-1-1280.webp" style="width: 100%; height:290px"></img>
                <hr>
                <h6>The Monastery of Paleokastro is located on a hill close to Ano Mera, the second village of Mykonos, in one of the greenest spots on the island.
                    This is a nunnery (female monastery) and it dates from the 18th century. Its architecture is typical Cycladic and it took its name from the close remains of the Gizi Castle,
                    which is also known as Paleokastro (meaning Old Castle in Greek).
                </h6>
                <a href="https://goo.gl/maps/S9Ux6ExpfYhQbqnq7"> Google Maps Coordinates</a>
            </div>


        </div>









        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script src="js/bootstrap.min.js"></script>
</body>

</html>