<script>
$(document).ready(function(){
 
    $('#btn_tab1_details').click(function(){
    
        var error_uname = '';
        //var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var filter = /^([a-zA-Z0-9_\.\-]{2,15})+$/;
        
        if($.trim($('#Uname').val()).length == 0)
        {
            error_uname = 'Name is required';
            $('#error_Uname').text(error_uname);
            $('#Uname').addClass('has-error');
        }
        else
        {
            if (!filter.test($('#Uname').val()))
            {
                error_uname = 'Invalid Name';
                $('#error_Uname').text(error_uname);
                $('#Uname').addClass('has-error');
            }
            else
            {
                error_uname = '';
                $('#error_Uname').text(error_uname);
                $('#Uname').removeClass('has-error');
            }
        }
        
        
        if(error_uname != '')
        {
            return false;
        }
        else
        {
            $('#list_tab1_details').removeClass('active active_tab1');
            $('#list_tab1_details').removeAttr('href data-toggle');
            $('#tab1_details').removeClass('active');
            $('#list_tab1_details').addClass('inactive_tab1');
            $('#list_tab2_details').removeClass('inactive_tab1');
            $('#list_tab2_details').addClass('active_tab1 active');
            $('#list_tab2_details').attr('href', '#tab2_details');
            $('#list_tab2_details').attr('data-toggle', 'tab');
            $('#tab2_details').addClass('active in');
        }
    });
 

    $('#previous_btn_tab2_details').click(function(){ // previous_btn_personal_details = previous_btn_tab2_details
        $('#list_tab2_details').removeClass('active active_tab1');
        $('#list_tab2_details').removeAttr('href data-toggle');
        $('#tab2_details').removeClass('active in');
        $('#list_tab2_details').addClass('inactive_tab1');
        $('#list_tab1_details').removeClass('inactive_tab1');
        $('#list_tab1_details').addClass('active_tab1 active');
        $('#list_tab1_details').attr('href', '#tab1_details');
        $('#list_tab1_details').attr('data-toggle', 'tab');
        $('#tab1_details').addClass('active in');
    });
 
    $('#btn_tab2_details').click(function(){
        var error_cricket = '';
        //var error_last_name = '';
        if ($('input[name="crickter"]:checked').length == 0) {
            error_cricket = 'Select your favrite Cricketer';
            $('#error_crickter').text(error_cricket);
            $('#error_crickter').addClass('has-error');
        }else{
            error_cricket = '';
            $('#error_crickter').text(error_cricket);
            $('#error_crickter').removeClass('has-error');
        }
        
        if(error_cricket != ''){
            return false;
        }else{
            $('#list_tab2_details').removeClass('active active_tab1');
            $('#list_tab2_details').removeAttr('href data-toggle');
            $('#tab2_details').removeClass('active');
            $('#list_tab2_details').addClass('inactive_tab1');
            $('#list_tab3_details').removeClass('inactive_tab1');
            $('#list_tab3_details').addClass('active_tab1 active');
            $('#list_tab3_details').attr('href', '#tab3_details');
            $('tab3_details').attr('data-toggle', 'tab');
            $('#tab3_details').addClass('active in');
        }
    });
    
    $('#previous_btn_tab3_details').click(function(){
        $('#list_tab3_details').removeClass('active active_tab1');
        $('#list_tab3_details').removeAttr('href data-toggle');
        $('#tab3_details').removeClass('active in');
        $('#list_tab3_details').addClass('inactive_tab1');
        $('#list_tab2_details').removeClass('inactive_tab1');
        $('#list_tab2_details').addClass('active_tab1 active');
        $('#list_tab2_details').attr('href', '#tab2_details');
        $('#list_tab2_details').attr('data-toggle', 'tab');
        $('#tab2_details').addClass('active in');
    });
 
    $('#btn_tab3_details').click(function(){
        var error_FlagColor = '';
        var fields = $("input[name='FlagColor']").serializeArray(); 
        
        if (fields.length >= 2) {
            error_FlagColor = '';
            $('#error_FlagColor').text(error_FlagColor);
            $('#error_FlagColor').removeClass('has-error');
        }else{
            error_FlagColor = 'Select Atleast Two Colour';
            $('#error_FlagColor').text(error_FlagColor);
            $('#error_FlagColor').addClass('has-error');            
        }
        if(error_FlagColor != '' )
        {
            return false;
        }
        else
        {
            //$('#btn_tab3_details').attr("disabled", "disabled");
            //$(document).css('cursor', 'prgress');
           // $("#register_form").submit();
        }
        
    });
 
});
</script>
