<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<style>
    #card{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  margin:10px;
  padding:5px;
  
  }
</style>
</head>
<body>
    <section class="sub-header">
        <div class="heads">
       
            <ul>
                <li><button class="button"><a href=""></a>DONATE</button></li>
                <li><button class="button"><a href=""></a>VOLUNTEER</button></li>
            </ul>
        </div>
        <nav>
            <a href="index.php"><img  style=" border-radius:50%;"src="images/nss2-removebg-preview-removebg-preview.jpg"></a>
            <div class="nav-links" id="navLinks">  
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="activities.php">ACTIVITIES</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
            <h1>Our Courses</h1>
    </section>
    
    
    <h1 align="center">ACTIVITIES</h1>
        <p align="center">All the latest activities posted by NGOS.</p>
    
    
    

    
    <section class="facility" >
   <?php
                include('dbconnection.php');
            $sql = "SELECT * FROM activities ORDER BY date_time desc";
          ?>
  <div class="row"  style="display:flex;
  flex-wrap: wrap;" >
 
<?php
            if($result = mysqli_query($con, $sql)){
                if(mysqli_num_rows($result) > 0){

                  while($row = mysqli_fetch_array($result)){
                    $imageURL = 'actposter/'.$row['image']; 
                  ?>
                <div class="facility-col">
                <img src="<?php echo $imageURL; ?>" alt="no image found" onerror="this.src='default_poster.jpeg'">
                    <h3><?php echo $row['eventtitle']?></h3>
                    <p><?php echo $row['eventdesc']?></p>
                    <h5>ORGANIZED BY:<?php $org=strtoupper($row['organisation']);
                     $o=explode(".",$org);
                   echo $o[0]; ?></h5>
                       <h5>EVENT DATE:<?php echo $row['date']?></h5>

                </div>
                <?php   }


mysqli_free_result($result);
}
} ?>

               
 </div>
           
    </section>
   
    
<!-------- footer ---------->

<section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet turpis nulla, eleifend faucibus est<br>sollicitudin ut. Maecenas ut venenatis ex, et dapibus purus.</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
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