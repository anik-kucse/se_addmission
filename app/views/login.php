<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://localhost/se_addmission/vendors/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/se_addmission/vendors/css/site.css">
    <title>Login</title>
    <script src="http://localhost/se_addmission/vendors/js/jquery-3.2.1.slim.min.js" charset="utf-8"></script>
    <script src="http://localhost/se_addmission/vendors/js/popper.min.js" charset="utf-8"></script>
    <script src="http://localhost/se_addmission/vendors/js/bootstrap.min.js" charset="utf-8"></script>

</head>
<body>
<div class="container-fluid" >
    <div class=" row justify-content-around" style="padding-top: 300px">

           <div class="col-5">
               <div class="card">
                   <div class="card-block">
                       <h1 style="text-align: center">Login</h1>
                       <form action="#" method="post" class="row justify-content-around" style="padding-top: 10px">
                           <div class="col-9 form-group row">
                               <label for="username" class="col-2 col-form-label">Username</label>
                               <div class="col-10">
                                   <input class="form-control" type="text" id="username" required>
                               </div>
                           </div>
                           <div class="col-9 form-group row">
                               <label for="password" class="col-2 col-form-label">Password</label>
                               <div class="col-10">
                                   <input class="form-control" type="password" id="password" required>
                                  <div class="row justify-content-between">
                                      <a  href="">Forget Password</a>
                                      <a  href=" ">Register now</a>
                                  </div>
                               </div>
                           </div>

                           <div class="col-9 justify-content-around form-group row">
                               <button class="btn btn-outline-info" type="submit">Login</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>

    </div>


</div>

</body>
</html>