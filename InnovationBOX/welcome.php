
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="welcome.css">
  <link rel="stylesheet" href="login.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>InnovationBOX</title>
  </head>
  <body class="body1">
  
        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
            <div class="container">
              <a id="innoBOX" class="navbar-brand" href="#">InnovationBOX</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php"><span class="colorme">Home</span>
                          <span class="sr-only">(current)</span>
                        </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php"><span class="colorme">Logout</span></a>
                  </li>
                 
                </ul>
              </div>
            </div>
          </nav>
          <h1 id="welcome-msg">Welcome Prakarsh Sharma!</h1>
          <form id="form-box">
  
  </div>
  <fieldset class="form-group">
  <div id="name-box" class="form-group">
    <label for="exampleInputEmail1">Enter your details here.</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First name here."><br>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Middle name here."><br>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last name here."><br>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your employee id"><br>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Designation.">
    
  </div>
    <div class="row">
      <legend id="field-tick" class="col-form-label">Which field is your idea related to?<span id="mcq"></span></legend>
      
      <div id="bnj" class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Related to the business model of the company.
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Related to IT department
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Related to HR department
          </label>
        </div><div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Related to A department
          </label>
        </div><div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Related to B department
          </label>
        </div><div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Related to C department
          </label>
        </div><div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Related to D department
          </label>
        </div><div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Related to E department
          </label>
        </div><div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Related to F department
          </label>
        </div>
      
      </div>
    </div>
  </fieldset>
  <div id="hja" class="form-group row">
    <div>Urgent or Important</div>
    <div>
      <div class="form-check">
        <input id="ghs" class="form-check-input" type="checkbox" id="gridCheck1">
        <label id="jhg" class="form-check-label" for="gridCheck1">
          Tick if yes.
        </label>
      </div>
    </div>
  </div>
 <div id="jnk">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Give a brief description of your idea in not more than 200 words.</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label id="pop" for="exampleFormControlTextarea1">How do you think is thisgoing to affect the company's sales/profits/customer satisfaction/employee effectiveness.</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div id="pops" class="form-group">
    <label for="exampleFormControlTextarea1">Suggest ways to implement this idea if you were the authority responsible to bring this into action.</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  </div>
  <div id="lkl" class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit Idea</button>
    </div>
  </div>
</form>
<style>
      
</style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
