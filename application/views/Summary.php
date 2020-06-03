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
            <!-- Loho -->
            <div id="history-btn">
                <img src="<?php echo base_url(); ?>css/tri.png" style="width:100%">
            </div>
            <!-- Logo -->
            <!-- content -->
            <div class="row">
                <div class="col-md-12">
                <h2 >Summary</h2><br />
                </div>
                <div class="col-md-12" >
                    <h3>Hello : <?php echo $summary['Username'] ?></h3>
                    <h4>Here are the answers selected:</h4>
                    <h5><b>Who is the best cricketer in the world?</b></h5>
                    <p><span><b>Answer:</b></span> <?php echo $summary['Cricketer'] ?></p>
                    <h5><b>What are the colors in the national flag?</b></h5>
                    <p><span><b>Answer:</b></span> <?php echo $summary['FlagColor'] ?></p>
                    <a type="button" name="Finish" id="Finish" class="btn btn-success" href="<?php echo base_url(); ?>index.php/Game/index">Finish</a>
                </div>
            </div>
            <!-- content -->
        </div>
    </body>
   
</html>






