<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CodeIgniter Pagination</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">       
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <style type="text/css">
            body {
                font-family: 'Source Sans Pro', sans-serif;
                font-size: 16px;
            }
            #wrapper {
                padding: 20px;
            }
        </style>
    </head>
  <body>


      <div id="wrapper">

        <h1>CodeIgniter Pagination</h1>
        <br>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive table-bordered">
                    <table class="table">

                    <tr>
                        <th>Index</th>
                        <th>Userame</th>
                        <th>Email</th>
                        <th>Change</th>
                        <th>Remove</th>
                    </tr>`

                    <?php if (count($users)): ?>

                    <?php foreach ($users as $row): ?>

                    <tr>
                        <td><?php echo $row->indexno; ?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><a href="#"><button type='submit' class='btn btn-primary'>update</button></a></td>
                        <td><a href="#"><button type='submit' class='btn btn-danger'>Delete</button></a></td>

                    <?php endforeach; ?>

                    <?php else: ?>
                        <center><p style="margin: 20px;">No users registered</p></center>
                    <?php endif ?>
        
                    </table>
                </div>
                <br>
                <?php echo $link ?>  
            </div>
        </div>
        
        
          
        </div>

    <!-- JavaScript -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
