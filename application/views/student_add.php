<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>

        <link href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <h1>[ Add ] Hello, world!</h1>
            <hr />
            <form action="<?php echo base_url() . 'student/add'; ?>" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-3 control-label">First Name</label>
                    <div class="col-md-6">
                        <input type="text" name="studnet_fname" class="form-control" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-6">
                        <input type="text" name="studnet_lname" class="form-control" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Submit!</button>
                        <a href="<?php echo base_url() . 'student'; ?>" class="btn btn-default">Back</a>
                    </div>
                </div>
            </form>
        </div>

        <script src="<?php echo base_url() . 'assets/js/jquery.min.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js'; ?>"></script>
    </body>
</html>