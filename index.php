<?php
include 'header.php';
?><h1>A small example page to insert some data in to the MySQL database using PHP</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-md-offset-6">
            <form class="form-inline" action="insert.php" method="post">
                <div class=" form-group has-success has-feedback">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                        <input type="text" class="form-control" name="firestname" placeholder="Your Name" >
                    </div>
                </div>
                <div class="form-group has-success has-feedback">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                        <input type="text" class="form-control" name="adress" placeholder="Adress" >
                    </div>
                </div>
                <div class="form-group has-success has-feedback">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                        <input type="text" class="form-control" name="phone" placeholder="phone" >
                    </div>
                </div>
                <div class="form-group has-success has-feedback">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                        <input type="text" class="form-control" name="zip" placeholder="Zip" >
                    </div>
                </div>  <div class="form-group has-success has-feedback">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                        <input type="text" class="form-control" name="userid" placeholder="User ID" >
                    </div>
                </div>
                <div class="form-group has-success has-feedback">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                        <input type="Password" class="form-control" name="password" placeholder="Password" >
                    </div>
                </div>
                <div class="form-group has-success has-feedback">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                        <input type="text" class="form-control" name="passwordtwo" placeholder="Retype Password" >
                    </div>
                </div>  <div class="form-group has-success has-feedback">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                        <input type="text" class="form-control" name="website"placeholder="web site"  >
                    </div>
                </div>
                <div class="form-group has-success has-feedback">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                        <input type="text" class="form-control" name="nationalid" placeholder="N id" >
                    </div>
                </div>
                
                <div class="form-group has-success has-feedback">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                        <input type="text" class="form-control" name="updatetime" placeholder="updatetime" >
                    </div>
                </div>               
                
                    <div class="form-group has-success has-feedback">

                <button type="submit" class="btn btn-default">Submit</button>
                    </div>
            </form>  
        </div>
    </div>
</div>
<!----<form action="" method="post">

    Firstname: <input type="text" name="firstname" /><br><br>

    Lastname: <input type="text" name="lastname" /><br><br>
    <input type="submit" />
</form>--->

</body>
</html>