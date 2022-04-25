<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
<form action="discard.php" method="post">
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ENTER THE REASON TO DECLINE THE ITEM</h5>
             <button type="button" class="close" data-dismiss="modal"  onclick="goBack()">&times;</button>
            </div>
            <div class="modal-body">
				
                
                   
                    <div class="form-group">
                    <textarea name='reason'style="width:400px;"></textarea>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $_POST['id'];?>"></input>
                    <button type="button" class="btn btn-primary" style="background-color:green;color:white"onclick="goBack()" >Go Back</button>
                    <button type="submit" class="btn btn-primary"  style="background-color:green;color:white">Submit</button>
                
            </div>
        </div>
    </div>
</div>
</form>

<script>
        function goBack() {
            window.history.back();
            window.location.replace('welcome.php');
        }
</script>
</body>
</html>