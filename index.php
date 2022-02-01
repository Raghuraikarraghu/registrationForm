<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Registration Form</title>
</head>
<body>

<div class="container py-4">
    <div class="row" style="margin-left:150px">
        <div class="col-md-8">


        <?php

            if(isset($_SESSION['success']) && $_SESSION['success']!='') {
                echo'<div class="alert-success text-center font-weight-bold" role="alert">'.$_SESSION['success'].'</div>';
                unset($_SESSION['success']);
            }

            if(isset($_SESSION['failure']) && $_SESSION['failure']!='') {
                echo'<div class="alert-danger text-center font-weight-bold" role="alert">'.$_SESSION['failure'].'</div>';
                unset($_SESSION['failure']);
            }

        ?>
            <div class="card">
                <h1 class="text-primary font-weight-bold text-center">INSERT DATA</h1>

                <div class="card-body">

                <form action="insert.php" method="POST">
                    <div class="form-group">
                        <label class="font-weight-weight-bold text-success">NAME :</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-weight-bold text-success">ADDRESS :</label>
                        <input type="text" name="address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-weight-bold text-success">GMAIL :</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-weight-bold text-success">PHONE :</label>
                        <input type="text" name="phone" class="form-control">
                    </div>

                    <div class="text-center">
                        
                        <input type="submit" name="submit" value="submit" class="btn btn-primary>
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>
    




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>