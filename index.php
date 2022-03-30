<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="./font/css/font-awesome.min.css"/> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>index</title>
</head>
<style>
    body{
        background-color:yellow;
        border: 15px solid gray ;
    }
    #form1{
        background-color: orange;
        background-size:cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    /* #logo{
        width: 120px;
        height: 120px;
    } */
     
</style>
<body>
    <div class=".container-sm" id="menu">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark .sticky">
            <div class="container-sm">
                <a class="navbar-brand" href="#">
                    <img src="./images/logo.png" alt="" width="150" height="150" class="d-inline-block align-text-top">
                  </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <i class="fa-solid fa-user"></i>
              <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Home
                      <span class="visually-hidden">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Historics</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">login</a>
                  </li>
                  
                    </div>
                  </li>
                </ul>
                </div>
                <!--Form to fill-->
                <form class="d-flex">
                  <input class="form-control me-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          

            <!--container form-->
        <div class="container ms-40 me-40" id="form1">
          <form>
            <fieldset>
                <label for="formFile" class="form-label mt-4"></label>
                 <input class="form-control" type="file" id="formFile">
              <div class="form-group">
                <label for="InputEmail1" class="form-label mt-4">Email To</label>
                <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>

              <div class="form-group">
                <label for="InputEmail2" class="form-label mt-4"> Your Email</label>
                <input type="email" class="form-control" id="InputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="title1" class="form-label mt-4">Your title</label>
                <input type="text" class="form-control" id="title1" aria-describedby="form-text" placeholder="Enter your title">
              </div>
              <div class="form-group">
                <label for="InputPassword1" class="form-label mt-4">Password</label>
                <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleTextarea" class="form-label mt-4">Type your Message</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
              </div>
             
              <fieldset class="form-group">
            
               
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
          </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</body>
</html>
