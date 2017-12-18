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
            <h1>Hello, world!</h1>
            <hr />
            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-12">
                    <a href="<?php echo base_url() . 'student/addform'; ?>" class="btn btn-default pull-right">Add</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th class="text-center">Class</th>
                            <th class="text-center">First Name</th>
                            <th class="text-center">Last Name</th>
                            <th class="text-center">Date Modify</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($results->num_rows() > 0) {
                            foreach ($results->result() as $row) {
                                ?>
                                <tr>
                                    <td></td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="5" class="text-center">NO RESULTS</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="<?php echo base_url() . 'assets/js/jquery.min.js'; ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js'; ?>"></script>
    </body>
</html>