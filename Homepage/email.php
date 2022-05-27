<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/webp" sizes="32x32" href="reconnect-logo.jpg">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <title>Subscription Status - ReconnectNaija</title>
</head>
<body>
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Merriweather&family=Roboto+Slab&display=swap');
.breadcrump-con{
   margin: 0;
    padding: 10px 12px;
    padding-left: 12px;
    background-color: #cfcfcf;
}
.breadcrump{
   display: flex;
   flex-wrap: wrap;
   list-style-type: none;
}
.breadcrump li a{
   text-decoration: none;
   color: green;
   margin: 0 3px;
   font-size: 17px;
   text-transform: capitalize;
}
.breadcrump li a:hover{
   color: blue;
}
.bread:before{
   content: "/";
   margin: 0 2px;
}
#crump{
   color: #9b9b9b;
   font-size: 17px;
   text-transform: capitalize;
}
.h1{
   margin: 30px 0 10px 0;
   text-transform: uppercase;
}
.read-top{
   display: flex;
   flex-direction: row;
   flex-wrap: wrap;
}
.read-top li a{
   text-decoration: none;
   color: green;
}
.read-top li a:hover{
   color: blue;
}
.read-top li{
   margin: 20px 40px 10px 0;
   list-style-type: none;
   font-size: 17px;
}
.read-top li i{
   margin-right: 3px;
   color: black;
}
.read-top li a i{
   color: green;
}
.read-con{
   /*width: 1030px;*/
   width: 98%;
   height: auto;
   padding: 15px;
   margin: 10px 10px 50px 0;
   background-color: white;
   box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
}
.read ul li{
   list-style-type: none;
   font-size: 19px;
   margin: 10px 0;
}
.read li a{
   color: green;
   text-decoration: none;
   font-size: 19px;
}
.read li a:hover{
   color: blue;
}
.breadcrump li a:hover{
   color: blue;
}
#spec{
   background-color: #404040;
}

/*Responsivesness*/

@media screen and (max-width: 576px) {
   .breadcrump-con{
      margin-left: 10px;
   }
   .h1{
      margin-left: 10px;
   }
   .read-top li{
   margin: 10px 5px 5px 12px;
   list-style-type: none;
   font-size: 15px;
   }
   .read-con{
   width: 97%;
   margin: 10px 10px 50px 7px;
    }
    .read #img1{
   width: 250px;
   height: 250px;
   object-fit: cover;
   margin: 15px;  
    }
    .read p{
   margin-bottom: 25px;
   font-size: 18px;
   line-height: 1.6;
    }
    .follow{
      margin-top: 40px;
    }
    .follow p{
      /*font-size: 10px;*/
      font-size: 17px;
    }
}

@media screen and (min-width: 700px) and (max-width: 950px) {
   .breadcrump-con{
      margin-left: 20px;
   }
   .h1{
      margin-left: 20px;
   }
   .read-top li{
   margin: 10px 5px 5px 22px;
   list-style-type: none;
   font-size: 15px;
   }
   .read-con{
   /*width: 725px;*/
   width: 98%;
   margin: 10px 10px 50px 20px;
    }
    .read #img1{
   width: 550px;
   height: 350px;
   object-fit: cover;
   margin: 20px;  
    }
    .read p{
   margin-bottom: 25px;
   font-size: 18px;
   line-height: 1.6;
    }
    .follow{
      margin-top: 50px;
    }
    .follow p{
      /*font-size: 10px;*/
      font-size: 18px;
    }
    .advert3{
      margin: 3rem 13rem !important;
    }
}

@media screen and (min-width: 1000px) and (max-width: 1300px) {
   .breadcrump-con{
      margin-left: 25px;
   }
   .h1{
      margin-left: 25px;
   }
   .read-top li{
   margin: 10px 5px 5px 27px;
   list-style-type: none;
   font-size: 15px;
   }
   .read-con{
   /*width: 725px;*/
   width: 98%;
   margin: 10px 10px 50px 26px;
    }
    .read #img1{
   width: 650px;
   height: 400px;
   object-fit: cover;
   margin: 25px;  
    }
    .read p{
   margin-bottom: 25px;
   font-size: 19px;
   line-height: 1.6;
    }
    .follow{
      margin-top: 50px;
    }
    .follow p{
      /*font-size: 10px;*/
      font-size: 18px;
    }
    .advert3{
      margin: 3rem 21rem !important;
    }

}
@media screen and (max-width: 290px) {
   .read #img1{
      width: 150px;
      height: 150px;
   }
   .cont-ad{
      width: 250px;
      height: 250px;
   }
   .cont-ad p{
      padding: 10px;
   }
}
   </style>
    <header>
        <div class="header-container">
            <div class="advert">
                <p class="ad">Place your advertisement here</p>
            </div>
            <div class="top">
                <!-- <a href="#" class="logo-link"><img src="link.jfif" alt="ReconnectNaija Logo"></a> -->
                <button class="menu-drawer"><a href="#nav-id" id="btn">☰</a></button>
                <p class="name"><a href="index.html" title="ReconnectNaija Homepage">ReconnectNaija</a></p>
                <div class="nav">
                <ul class="nav-ul" id="nav-id">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="../Law/index.html">Law</a></li>
                    <li><a href="../News/index.html">News</a></li>
                    <li><a href="../Government/index.html">Government</a></li>
                    <li><a href="../Education/index.html">Education</a></li>
                    <li><a href="../Article/index.html">Article</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
                </div>
            </div>
        </div>
        <div class="search">
            <form>
                <input type="text" placeholder="Search...." name="search">
                <button class="search-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
    </header>
    <section class="below-search">
        <div class="advert1" id="show-ad1">
            <p class="ad1">Ad go here</p>
        </div>
        <div class="advert1" id="show-ad2">
            <p class="ad1">Ad go here</p>
        </div>
     </section>   
     <div class="content">
         <div class="content-main">
            <nav class="breadcrump-con">
                <ul class="breadcrump">
                    <li><a href="#">Home</a></li>
                    <li class="bread" id="crump">Subscription Status</li>
                </ul>
            </nav>
            <h1 class="h1">SUBSCRIPTION STATUS</h1>
            <ul class="read-top">
                <!-- <li><a href="#" title="Published by"><i class="fa fa-user" aria-hidden="true"></i>Idemudia Philip</a></li> -->
                <!-- <li title="Date Written"><i class="fa fa-calendar" aria-hidden="true"></i>23/05/2022 5:43pm</li> -->
            </ul>
            <div class="read-con">
                <div class="read">


<?php

   $email = $_POST['email'];

   // Database Connection

   $host = "localhost";
   $user = "philip";
   $password = "idephi2002";

   $db = "reconnectnaija";
   $conn = mysqli_connect($host,$user,$password,$db);

   if ($conn === false) {
   	die("database is not connected");
   }
   else{
   	$stmt = $conn->prepare("insert into email(email) value(?)");
      // $stmt = $conn->prepare("select * from email where email = ?");
   	$stmt->bind_param("s",$email);
   	$stmt->execute();
   	echo "Subscription of $email to ReconnectNaija was Succesful";
   	$stmt->close();
   	$conn->close();
   }


?>

</div>
            </div>
            <!-- Trending section in the homepage -->
             <div class="group" id="spec">
                 <h3 class="group-name">Government</h3>
             </div>
             <div class="group-content">
                 <div class="group-content-one">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
             </div>
             <div class="more">
                     <p class="more-para"><a href="">More....</a></p>
                 </div>
         </div>

         <!-- Aside -->
         <div class="content-side">
            <!-- News sectionin the homepage -->
             <div class="group">
                 <h3 class="group-name-s"><i class="fa fa-line-chart">Trending.....</i></h3>
             </div>
             <div class="group-content-s">
                 <div class="group-content-one-s">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one-s">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one-s">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one-s">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one-s">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one-s">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
             </div>
             <div class="more-s">
                     <p class="more-para-s"><a id="delete" href="../News/index.html">More....</a></p>
                 </div>

                 <!-- Advert 3 -->
                 <div class="advert3">
                     <p class="ad3">Ad go here</p>
                 </div>

                 <!-- Government sectionin the homepage -->
             <div class="group-s">
                 <h3 class="group-name-s">Article</h3>
             </div>
             <div class="group-content-s">
                 <div class="group-content-one-s">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one-s">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one-s">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one-s">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one-s">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
                 <div class="group-content-one-s">
                     <img src="link.jfif" alt="picture of chain">
                     <a href="#">Picture of a green chain</a>
                 </div>
             </div>
             <div class="more-s">
                     <p class="more-para-s"><a href="../Government/index.html">More....</a></p>
                 </div>
         </div>
     </div>

     <!-- below content advertisement -->
     <section class="below-content">
        <div class="below-advert1" id="show-ad1">
            <p class="below-ad1">Ad go here</p>
        </div>
     </section>   
     <footer>
         <div class="foot-container">
             <form>
                <p class="keep-up">Subscribe to get our articles, uploads and stay updated.</p>
                 <input type="email" name="email" placeholder="Email Address..." id="space">
                 <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Subscribe</a>
             </form>
             <hr>
             <div class="details">
                 <div class="social">
                    <a href="tel:09053430155" target="_blank" title="Our call number"><i id="telephone" class="fa fa-phone"></i></a>
                    <a href="#" target="_blank" title="Follow us on IG to get updates"><i id="instagram" class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank" title="Follow us on twitter"><i id="twitter" class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#" target="_blank" title="Send us a whatsapp message"><i id="whatsapp" class="fa fa-whatsapp"></i></a>
                    <a href="#" target="_blank" title="Send us an Email"><i id="mail" class="fa fa-envelope"></i></a>
                 </div>
                 <div class="others">
                     <ul>
                         <li><a href="index.html">Home</a></li>
                         <li><a href="#">About Us</a></li>
                         <li><a href="#">Contact Us</a></li>
                         <li><a href="#">Advertise With Us</a></li>
                         <li><a href="#">Privacy Policy</a></li>
                     </ul>
                 </div>
                 <div class="copyright">
                     <p>©All Rights Reserved (Reconnectnaija 2022).</p>
                 </div>
             </div>
         </div>
     </footer>
    <script src="main.js"></script>
    <!-- <script src="main.js"></script> -->
</body>
</html>