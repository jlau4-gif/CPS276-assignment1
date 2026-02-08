<!DOCTYPE html>
<html lang ="en">
<head>
    <title>Form Project</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="container">
<!--html lang="en"> <label for="inputCity" class="form-label">City</label> <input type="text" class="form-control" id="inputCity"-->
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputfirstname" class="form-label">First Name</label>
    <input type="Firstname" class="form-control" id="firstname">
  </div>
<!--the set of options chosen by the same name="contact" -->  
  <div class="col-md-6">
    <label for="inputlastname" class="form-label">Last Name</label>
    <input type="lastname" class="form-control" id="lastname">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
<!--The ID =inputstate" --Michigan is listed as 'selected option' and in 3rd position -->  
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option value="Ohio">Ohio</option>
      <option value="New York">New York</option>
      <option value="Michigan" selected>Michigan</option>
      <option value="Florida">Florida</option>
      <option value="Texas">Texas</option>
    </select>
  </div>
<div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>

  <div class="col-md-2">
    <label for="inputPhone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="inputPhone">
  </div>

  <div class="col-md-3">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail">
  </div>    
    <div>
  <div class="col-md-5">
    <label class="form-label d-block">Preferred method of contact</label>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="emailCheck">
      <label class="form-check-label" for="emailCheck">Email</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="textCheck">
      <label class="form-check-label" for="textCheck">Text</label>
    </div>
  </div>
 
  <div class="col-14">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</body>
</html>
    
