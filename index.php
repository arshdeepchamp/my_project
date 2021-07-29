<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--use to link bootstrap file-->
    <link rel="stylesheet" href="mystyle.css"><!--use to link bootstrap file-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
    
</head>
<body >
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary panel_margin">
                    <div class="panel-heading">
                        <h3>Login</h3>
                    </div>
                    <?php
                    if(@$_GET['Empty']==true){?>
                        <div class="message text-danger margin"><?php echo $_GET['Empty']; ?></div>
                        <?php  } ?>
                    <?php
                    if(@$_GET['Invalid']==true){?>
                        <div class="message text-danger margin"><?php echo $_GET['Invalid']; ?></div>
                        <?php  } ?>
                   
                    
                    <div class="panel-body">
                        <form method="POST" action="process.php">
                            <input type="text" placeholder="User Name" name="email" class="form-control ">
                            <input type="password" placeholder="Password" name="password" class="form-control margin">
                            <button class="margin btn btn-primary" name="login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>