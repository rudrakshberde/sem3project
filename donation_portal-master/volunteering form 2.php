<?php session_start();

          include('dbconnection.php');
          $id=$_POST['id'];
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="volunt.css">
    <title>Volunteer form</title>
</head>
<body style="background-color:#61ED1C;">
<form action="volinsert.php" method="POST">

<div class="wrapper">
    <div class="title">
      Volunteer Form
    </div>
    <div class="form">
       <div class="inputfield " >
          <label>First Name</label>
          <input  name="firstname" type="text" class="input" required>
       </div>
        <div class="inputfield">
          <label>Last Name</label>
          <input  name="lastname"type="text" class="input" required>
       </div>

       <div class="inputfield">
        <label>Previous Volunteer Experience</label>
        <div class="custom_select">
          <select name="expert">
            <option value="" >Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>
</div>
       <div class="inputfield">
        <label>Organisation</label>
        <div class="custom_select">
          <select class="" name="org">


          <?php

          $query="SELECT organisation FROM volunteering_advertisement WHERE id='$id'";
          if($result = mysqli_query($con, $query)){


        $row = mysqli_fetch_assoc($result)
            ?>





        <option value="<?php echo $row['organisation'] ?>"> <?php  $o=$row['organisation'];
                     $org=explode(".",$row['organisation']);
                               echo $org[0];
                              ?> </option>';


      <?php

      }
      ?>
      </select>
      <?php
mysqli_free_result($result);


      ?>
        </div>
     </div>
     <div class="inputfield">
        <label>Event</label>
        <div class="custom_select">
          <select class="" name="event">


          <?php

          $query="SELECT eventtitle FROM volunteering_advertisement WHERE id='$id'";
          if($result = mysqli_query($con, $query)){


        $row = mysqli_fetch_assoc($result)
            ?>





        <option value="<?php echo $row['eventtitle'] ?>"> <?php echo $row['eventtitle'] ?></option>';


      <?php

      }
      ?>
      </select>
      <?php
mysqli_free_result($result);

      mysqli_close($con);
      ?>
        </div>
     </div>
        <div class="inputfield">
          <label>Email Address</label>
          <input name="email" type="text" class="input" required>
       </div>
      <div class="inputfield">
          <label>Phone Number</label>
          <input name="phone" type="text" class="input" required>
       </div>
      <div class="inputfield">
          <label>Address</label>
          <textarea name="address" class="textarea"></textarea>
       </div>
       <div class="inputfield">
          <label>Are u a NSS member?</label>
          <div class="custom_select">
            <select name="nss">
              <option  value="">Select</option>
              <option value="yes">Yes </option>
              <option value="no">No</option>
            </select>
          </div>
    </div>
    <div class="inputfield">
        <input type="submit" name="submit" class="btn">
        </div>
</div>

</form>



</body>
</html>
