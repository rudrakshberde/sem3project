<?php session_start();
                include('dbconnection.php');
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>home page</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  #card{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  margin:10px;
  padding:5px;
  width:35vw;
  height:15vh:
  }
  button#volunteer:hover {
      background-color: #ffff;
      color:Black;
      border: 1px solid #111;

    }
    .log{
    width:100px;
    height:40px;
    background-color:black;
    border:none;
    color:white;
    border-radius: 13px;
  align: center;
    }


</style>
</head>
<body>
    <section class="header">



        <nav>

        <div class="navimage">
       <a href="index.html"><img style=" border-radius:50%;" src="images/nss2-removebg-preview-removebg-preview.jpg"></a>
       </div>
            <div class="nav-links" id="navLinks">

                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="activities.php">ACTIVITIES</a></li>

            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <br>
        <br>
        <div class="text-box" style="margin-top:50px;">
            <h1>NSS WEBSITE VIDYALANKAR</h1>
            <p><br> THIS WEBSITE IS FOR NSS.</p>
            <a href="donation form.php" class="hero-btn" style="margin:10px;" target="_blank">DONATE</a>
            <a href="volunteering form.php" class="hero-btn"style="margin:10px;" target="_blank">VOLUNTEER</a>
        </div>
    </section>

<!---------- course ----------->

    <section class="course">
        <h1>OUR KEY FEATURES</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="row">
            <div class="course-col">
                <h3>DONATE</h3>
                <p>Readily donate clothing items, food or other options in order to help underprivileged people through NSS or an NGO of your choice. </p>
            </div>
            <div class="course-col">
                <h3>VOLUNTEER</h3>
                <p>Contribute to the community by helping the ones in need through volunteering for various upcoming activities for different NGOs</p>
            </div>
            <div class="course-col">
                <h3>EXPLORE</h3>
                <p>Discover and explore several NGOs, gaining information about them in order to help you select the right NGO or to increase awareness.</p>
            </div>
        </div>
    </section>

<!---------- campus ---------->

    <h1 align="center">ACTIVITIES</h1>
        <p align="center">some of the upcoming activities.</p>





    <section class="facility"  >
   <?php


            $sql = "SELECT * FROM activities  ORDER BY date_time desc  LIMIT 3";
          ?>
  <div class="row">

<?php
            if($result = mysqli_query($con, $sql)){
                if(mysqli_num_rows($result) > 0){


                  while($row = mysqli_fetch_array($result)){
                    $imageURL = 'actposter/'.$row['image'];
                  ?>
                <div class="facility-col">
                <p>event posted on:<?php echo $row['date_time']?></p>
                <img src="<?php echo $imageURL; ?>" alt="no image found" onerror="this.src='default_poster..jpeg'">
                    <h3><?php echo strtoupper($row['eventtitle']);?></h3>
                    <p><?php echo $row['eventdesc']?></p>
                    <h5>ORGANIZED BY:<?php $orga=explode(".",$row['organisation']);
                    echo strtoupper($orga['0']);?></h5>
                       <h5>EVENT DATE:<?php echo $row['date']?></h5>

                </div>
                <?php   }


mysqli_free_result($result);
}
} ?>


 </div>

    </section>
    <section style="padding-left: 550px;">

        <a href="activities.php"target="_blank"><button style="background-color:black; color:white;font-size:30px; border-radius:12px; padding:10px; margin-left:150px;">EXPLORE</button></a>
    </section>

    <section class="cta">

        <h1>BECOME A PART OF US , TO HELP THE NEEDY</h1>
         <a href="volunteering form.php" class="hero-btn" target="_blank">VOLUNTEER HERE</a>

 </section>

<!---------- Facilities ---------->

    <section class="facility">
        <h1>OTHER ORGANISATIONS</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="row">
                <div class="facility-col">
                    <img src="image1.jpeg">
                    <h3>NGO 1</h3>
                    <p>this organisation works in educating rural and uderpriviledged children</p>
                </div>
                <div class="facility-col">
                    <img src="image2.jpeg">
                    <h3>NGO 2</h3>
                    <p>this organisation works in children and women empowerment</p>
                </div>
                <div class="facility-col">
                    <img src="image6.jpeg">
                    <h3>NGO 3</h3>
                    <p>this organisation works towards helping the elderly</p>
                </div>
            </div>
    </section>
    <section style="padding-left: 550px;">

    <a href="otherorg.html" target="_blank"><button style="background-color:black; color:white; width:auto; height:auto; font-size:30px; border-radius:12px; padding:10px;margin-left:150px;">EXPLORE</button></a>
    </section>
    <h1 align="center">LATEST VOLUNTEERING REQUESTS</h1>
        <p align="center">Checkout the latest volunteering opportunities posted by NGOS</p>

    <section class="facility"  style="  display:flex;
  flex-wrap: wrap;" >
    <?php


$sql = "SELECT * FROM volunteering_advertisement ORDER BY date_time desc";
$e;
?>

        <?php
                  if($result = mysqli_query($con, $sql)){
                      if(mysqli_num_rows($result) > 0){


                        while($row = mysqli_fetch_assoc($result)){


                        ?>

            <div id="card">


                <div class="facility-col">
                    <form action="volunteering form 2.php" method="post">
                <p>Request posted on:<?php echo $row['date_time']; ?></p>
                <input type="hidden"  name="id"value="<?php  echo $row['id'];?>"></input>

                    <h3>Event name:<?php $e=$row['eventtitle'];
                     echo $row['eventtitle'];?>
                    </h3>

                    <h3>organisation:<ins><?php $o=$row['organisation'];
                     $org=explode(".",$row['organisation']);
                               echo $org[0];
                              ?></ins></h3>
                    <p style="width:25vw;"><?php  echo $row['volunteering_add'];  ?></p>
                    <h5>No of volunteers required:<?php  echo $row['no'];  ?></h5>
                    <h4>Event Date:<?php  echo $row['eventdate'];  ?></h4>
                    <h4>Apply Before:<?php  echo $row['deadline'];  ?></h4>
                    <?php
                    $q="SELECT COUNT(org) AS don_count  FROM volunteer where org='$o' and event='$e';";

                    $check=mysqli_query($con,$q);
                    $row = mysqli_fetch_assoc($check);
                    $res=$row['don_count'];




                    ?>
                    <h4>No of applications received:<?php  echo $res  ?></h4>


                    <br>
                    <br>
                    <p  align="center"><button  type="submit" class="log" id="volunteer">Volunteer</button></p>
                    </form>
                </div>

            </div>
            <?php   }


mysqli_free_result($result);
mysqli_close($con);
}

} ?>

    </section>

<section class="cta">

       <h1>REGISTERED NGOS CAN LOGIN TO ACCESS THE DASHBOARD</h1>
        <a href="login R.php" class="hero-btn" target="_blank">NGO LOGIN</a>

</section>



<section class="footer">
        <h4>About Us</h4>
        <p>We provide a user friendly interface for both donors/volunteers and NGOs to publish donation and volunteering requests online.</p>
        <div class="icons">
            <a href="https://www.youtube.com/c/EasyTutorialsVideo?sub_confirmation=1"><i class="fa fa-facebook"></i></a>
            <a href="https://www.youtube.com/c/EasyTutorialsVideo?sub_confirmation=1"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/c/EasyTutorialsVideo?sub_confirmation=1"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/c/EasyTutorialsVideo?sub_confirmation=1"><i class="fa fa-linkedin"></i></a>

        </div>

</section>


<!----JavaScript for toggle menu---->
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px";
    }
</script>

</body>
</html>
