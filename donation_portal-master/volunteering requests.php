<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style media="screen">
      form{
        text-align:center;
        font-size:20px;
      }
      table{
        margin-left:300px;
        margin-right: 300px;
      }
      textarea{
        height:200px;
        width:300px;

      }
      .log{
      width:100px;
      height:40px;
      background-color:green;
      border:none;
      color:white;
      }
      button#publish:hover {
        background-color: #ffff;
        color:Black;
        border: 1px solid #111;
      }
      th#btn{
        text-align: center;
      }
      h1{
      text-decoration: underline;

      text-decoration-color:rgb(56, 189, 56);
    }



    </style>
  </head>
  <body>
  <?php
  session_start();
  include_once('./link.php');
  include_once('./header1.php');
  
 ?>

  <div>
    <br><br>  <br><br>
   
  <form method='post'  action='publish.php'>
    <fieldset>
      <legend><h1>Volunteering Advertisement</h1></legend>

    <table align='center'>
    <tr>
    <th>

      <label for="eventtitle">Enter name of event:</label></th>

    <th>
      <br>
      <br>
        <input Type="text" name="eventtitle" id="eventtitle" required>  </th>
  </tr>

    <tr>
    <th>

      <label for="request">Enter description of the volunteering role:</label></th>

    <th>
      <br>
      <br>
        <textarea name="request" id="request" required></textarea>  </th>
  </tr>
      <tr>
        <th>
          <br>
          <br>
          <label for="deadline">Enter the deadline to apply:</label>  </th>
      <th>
        <br>
        <br>
        <input type='date' name="deadline" id="deadline" required></input>  </th>
    </tr>
    <tr>
        <th>
          <br>
          <br>
          <label for="eventdate">Enter date of event:</label>  </th>
      <th>
        <br>
        <br>
        <input type='date' name="eventdate" id="eventdate" required></input>  </th>
    </tr>
    <tr>
      <th>
        <br>
        <br>

        <label for="noofvol">No of volunteers needed:</label>  </th>
      <th>
        <br>
        <br>
        <input type="number" name="noofvol" id='noofvol' required></input> </th>
    </tr>


    <tr>
      <th colspan="2" id='btn' >
        <br>
        <br>
        <button Type="submit" name="publish" id="publish" class="log">Publish</button>


  </div>

</table>
</fieldset>
</form>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
      <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

  </body>
</html>
