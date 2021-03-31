<html>  
    <head>  
        <title>Sign Up Page</title>  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
    
    </head>  

    <body>  
        <div class="container" style="width:500px;margin-top:100px">
         <h1>Sign Up</h1>
            <form action="form.php" method="post">

            <div class="form-group"> 
                <label for="first name">First Name</label>
                <input type="name" class="form-control" name="first_name">
            </div>
            <div class="form-group">
                 <label for="second name">Second Name</label>
                <input type="name" class="form-control" name="second_name">
            </div>
            <div class="form-group">
                <label for="email">Email Id</label>
                 <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">  
                 <label for="Password">Password</label>
                <input type="password" class="form-control" name="pwd">
            </div>
            <input type="submit"  class="btn btn-primary" value="Sign Up">
            </form>  
        </div>

        <!-- <a href="index.php/form/login"></a> -->

    </body>  
</html>  