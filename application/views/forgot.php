 
 <html>
     <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
    </head>
    <body>
        <div class="container" style="width:500px;margin-top:100px">
          <h1>Change Password</h1>
            <form method="post" action="form.php">
                <div class="form-group">
                    <label for="New password">New Password</label>
                    <input type="password" class="form-control" placeholder="Enter NewPassword" name="new_pwd">
                </div>
                <div class="form-group">
                    <label for=" Confirm password">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm  Password" name="confirm_pwd"><br>
                </div>
                <button type="submit" class="btn btn-primary">Change Password</button><br>  
            </form>
        </div>
    </body>
</html>