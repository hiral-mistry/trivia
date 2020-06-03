<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Welcome to Trivia App</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />	
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" />	
</head>
<body>

        <div class="container box">
            <!-- logo -->
            <div id="history-btn">
                <img src="<?php echo base_url(); ?>css/tri.png" style="width:100%">
            </div>
            <!-- logo -->

            <!-- Home Btn -->
            <div id="history-btn">
            <a type="button" name="Finish" id="Finish" class="btn btn-success" href="<?php echo base_url(); ?>index.php/Game/index">Home</a>
            </div>
            <!-- Home btn -->

            <!-- content -->
            <div class="row">
                <div class="col-md-12">
                <h2 >History</h2><br />
                </div>
                
                <?php
                $count =1;
               
                foreach($history as $val){
                   
                    $date=date_create($val['CreateTime']);
                    $date = date_format($date,"d/m/Y H:i:s");
                ?>
                <div class="col-md-12" >
                    <h4 class="rowtab"><b>Game <?php echo $count; ?> - <?php echo $date ?></b></h4>
                    <h5><b>Name : </b><?php echo $val['Username'] ?></h5>
                    <h5><b>Who is the best cricketer in the world?</b></h5>
                    <p><span><b>Answer:</b></span> <?php echo $val['Cricketer'] ?></p>
                    <h5><b>What are the colors in the national flag?</b></h5>
                    <p><span><b>Answer:</b></span> <?php echo $val['FlagColor'] ?></p>
                    
                </div>
                <?php
                $count++;
                }
                ?>

            </div>
            <!-- content -->
        </div>
    </body>
   
</html>






