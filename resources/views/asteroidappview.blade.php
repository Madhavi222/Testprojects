	
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Asteroid Neo App</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
<body>
	<div class="container">
		<div class="card bg-light text-dark">
			<div class="card-header">
				<h3>Enter Details to View Neo Stats</h3><br><br>	
			</div>
			<div class="card-body">
		 <div class="row">
          <div class="form-group col-md-3">
          	<label for="start_date">Start Date</label>
          </div>
          <div class="form-group col-md-3">
          	<input type="date" class="form-control" name="start_date" id="start_date">
          </div><!-- closing of form group class -->
		</div><!-- closing of row class-->
       <div class="row">
          <div class="form-group col-md-3">
          	<label for="end_date">End Date</label>
          </div>
          <div class="form-group col-md-3">
          	<input type="date" class="form-control" name="end_date" id="end_date">
          </div>
      </div><!-- closing of form group class -->
		</div><!-- closing of row class-->
	</div> <!-- closing of card-body -->
	<div class="card-footer" align="center">
		<div class="row">
          <div class="form-group col-md-3">
          	<a href="" class="btn btn-success">Submit</a>
          	 </div><!-- closing of form group class -->
		</div><!-- closing of row class-->
	</div><!-- closing of Card footer -->
</div><!-- closing of Class Container -->
</body>
</html>