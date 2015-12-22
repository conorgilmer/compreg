<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register for Chess Competition</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register for Chess Competition</h2>
  <form role="form">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="firstname" class="form-control" id="fname" placeholder="Enter first name">
    </div>
    <div class="form-group">
      <label for="sname">Surname:</label>
      <input type="surname" class="form-control" id="sname" placeholder="Enter surname">
    </div>
    <div class="form-group">
      <label for="icu">ICU Code:</label>
      <input type="icu_code" class="form-control" id="icu" placeholder="Enter ICU Code">
    </div>
    <div class="form-group">
      <label for="icurating">ICU Rating:</label>
      <input type="icu_rating" class="form-control" id="icurating" placeholder="Enter ICU Rating">
    </div>
    <div class="form-group">
      <label for="fiderating">FIDE Rating:</label>
      <input type="fide_rating" class="form-control" id="fiderating" placeholder="Enter FIDE Rating">
    </div>
    <div class="form-group">
      <label for="blitzrating">Blitz Rating:</label>
      <input type="blitz_rating" class="form-control" id="blitzrating" placeholder="Enter Blitz Rating">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Accept Terms and Conditions</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

