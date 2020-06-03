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
            <!-- Logo -->
            <div id="history-btn">
                <img src="<?php echo base_url(); ?>css/tri.png" style="width:100%">
            </div>
            <!-- Logo -->

            <!-- history btn -->
            <div id="history-btn">
                <a type="button" name="Finish" id="Finish" class="btn btn-success" href="<?php echo base_url(); ?>index.php/Game/History">History</a>
            </div>
            <!-- history btn -->
            <!-- Multipart form -->
            <form method="post" style="display:block" id="register_form" action="<?php echo base_url(); ?>index.php/Game/SubmitData">
                
                <div class="tab-content" style="margin-top:16px;">
                    <!-- tab 1 -->
                    <div class="tab-pane active" id="tab1_details"> 
                        <div class="panel panel-default">
                            <div class="panel-heading"> Enter Your Name</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        
                                        <input type="text" name="Uname" id="Uname" class="form-control" />
                                        <span id="error_Uname" class="text-danger"></span>
                                    </div>
                                    <div align="center">
                                        <button type="button" name="btn_tab1_details" id="btn_tab1_details" class="btn btn-info btn-lg">Next</button>
                                    </div>
                                </div>                            
                            </div>
                    </div>
                    <!-- tab 1 -->

                    <!-- tab 2 -->
                    <div class="tab-pane fade" id="tab2_details">
                        <div class="panel panel-default">
                            <div class="panel-heading">Select Your Favrite Crickter</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input type="radio" name="crickter" value="Sachin Tendulkar"> Sachin Tendulkar
                                    </label>
                                    <br/>
                                    <label class="radio-inline">
                                        <input type="radio" name="crickter" value="Virat Kohli">Virat Kohli
                                    </label>
                                    <br/>
                                    <label class="radio-inline">
                                        <input type="radio" name="crickter" value="Adam Gilchirst">Adam Gilchirst
                                    </label>
                                    <br/>
                                    <label class="radio-inline">
                                        <input type="radio" name="crickter" value="Jacques Kallis">Jacques Kallis
                                    </label>
                                    <br/>
                                    <span id="error_crickter" class="text-danger"></span>
                                </div>
                                <div align="center">
                                    <button type="button" name="previous_btn_tab2_details" id="previous_btn_tab2_details" class="btn btn-default btn-lg">Previous</button>
                                    <button type="button" name="btn_tab2_details" id="btn_tab2_details" class="btn btn-info btn-lg">Next</button>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <!-- tab 2 -->

                    <!-- tab 3 -->
                    <div class="tab-pane fade" id="tab3_details">
                        <div class="panel panel-default">
                            <div class="panel-heading">Select Nation Flag Color</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="FlagColor[]" class="Fcolor" value="White"> White
                                    </label>
                                    <br/>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="FlagColor[]" class="Fcolor" value="Orange"> Orange
                                    </label>
                                    <br/>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="FlagColor[]" class="Fcolor" value="Green"> Green
                                    </label>
                                    <br/>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="FlagColor[]" class="Fcolor" value="Yellow"> Yellow
                                    </label>
                                    <br/>
                                    <span id="error_FlagColor" class="text-danger"></span>
                                </div>                                
                            </div>
                            <div align="center">
                            <button type="button" name="previous_btn_tab3_details" id="previous_btn_tab3_details" class="btn btn-default btn-lg">Previous</button>
                            <button type="button" name="btn_tab3_details" id="btn_tab3_details" class="btn btn-success btn-lg">Register</button>
                           
                        </div>
                    </div>
                    <!-- tab 3 -->
                </div>        
            </form>
            <!-- Multipart form -->
        </div>
    </body>
    <script type='text/javascript' src="<?php echo base_url(); ?>js/Game.js"></script>
</html>






