<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>donate</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      //Call the method on pageload
      $(window).load(function(){
        //Disply the modal popup
          $('#myModal').modal('show');
      });
    </script>
    <style>
    body{
      
      background-image:url('images/pexels-harsha-vardhan-2940334.jpg');
      background-size:cover;
     
}


    }

    table{
    align="center"

    }

    form{


    margin-left:300px;
    margin-right:300px;
    margin-top:100px;
    margin-bottom:100px;
    font-size:15px;
    background-color:white;
      border-radius:25px;

    }

    .log{
    width:100px;
    height:40px;
    background-color:black;
    border:none;
    color:white;
    }
    textarea{
      font-size:15px;
    }
    input#donate:hover {
      background-color: #ffff;
      color:Black;
      border: 1px solid #111;
    }


    </style>





    </script>
  </head>
  <body>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                               <h4 class="modal-title" id="myModalLabel" align="center">Instructions regarding Donation</h4>
                                           </div>
                                           <div class="modal-body">
                                               <ul>
                                                 <li>MAKE SURE THE ITEM IS IN GOOD CONDITION</li>
                                                 <br>
                                                 <li>UPLOADING THE IMAGE OF THE ITEM IS MANDATORY</li>
                                                 <br>
                                                 <li>the IMAGE SIZE SHOULD NOT BE GREATER THAN 60KB</li>
                                                 <br>
                                                 <li>YOU WILL BE CONTACTED BY THE LOGISTICS PERSON SOON(INCASE OF DONATION OF ITEMS)</li>

                                               </ul>
                                           </div>
                                           <div class="modal-footer">
                                               <button type="button" class="log" data-dismiss="modal">Close</button>

                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
    <form action="check.php" method="post" enctype="multipart/form-data">
      <fieldset align="center">
      <legend><h2 style="color:black;">Donation Form</h2>
       </legend>

       <table align="center">
         <tr>


         <td>
         <br>
         <br>
          <label for="fullname">Full Name</label>         </td>
         <td>
         <br>
         <br>
            <input type="text" name="fullname" required id="fullname">  </input></td>
         </tr>
         <tr>
         <td>
         <br>

                <label for="emailid">Email Id</label>  </td>

         <td>
         <br>

         <input type="email" required name="emailid"  id="emailid" >  </input></td>

         </tr>

         <tr>

         <td>
         <br>

              <label for="contactno">Contact No</label> </td>

         <td>
         <br>

              <input type="number" name="contactno" required id="contactno" >   </input><br>
            <small> Format:123456789</small> </td>
         </tr>
         <tr>

         <td>
         <br>

              <label for="contactno">Address</label> </td>

         <td>
         <br>

              <textarea rows="5"name="address" required id="address"> </textarea><br>
             </td>
         </tr>
         <tr>

         <td>
         <br>

        <label for="typeofdonation">TYPE OF DONATION</label></td>

         <td>
         <br>
<ul style="list-style-type: none;">
<select class="" name="typeofdonation">

<option  value="clothes">select</option>
  <option  value="clothes">Clothes</option>
  <option value="fooditems">Food Items</option>

<option value="paper" id="paper">paper</option>
<option value="E-waste" id="money">E-waste</option>
<option  value="PLastic" id="money">plastic</option>
<option value="other">Other</option>
</select>

</ul></td>
         </tr>
         <tr>

         <td>
         <br>

      <label for="ORGANISATION">ORGANISATION</label></td>

         <td>
         <br>


  <ul style="list-style-type: none;">
    <select class="" name="organisation">
      <option  value="clothes">select</option>


    <?php



    session_start();
    error_reporting(0);
    include('dbconnection.php');
    $query="SELECT * from admin";
    if($result = mysqli_query($con, $query)){


      while($row = mysqli_fetch_array($result)){
      ?>





  <option value="<?php echo $row['username'] ?>"> <?php echo $row['name'] ?></option>';


<?php

}
?>
</select>

<?php
mysqli_free_result($result);
}

mysqli_close($con);

   ?>

</td>

         </tr>
         <tr>

         <td>
         <br>

         <label for="image"> UPLOAD THE IMAGE OF<br> THE ARTICLE HERE</label>    </td>

         <td>
         <br>

              <input type="file" id="image" name="image" required></input><br>
             </td>
         </tr>



         <tr >

         <td colspan="2" align="center">
           <br>
           <br>
           <input type="submit" name="donate" value="Donate" class="log" id="donate">
         <br>
       <br></td>


         </tr>



      </table>




</fieldset>
  </form>


  </body>
</html>
