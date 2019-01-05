<?php


 

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Country City State Demo</title>



 
  <script src="jquery.min.js"></script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script>
       window.load=$( document ).ready(function() {
	
	 $.ajax({
                type:'POST',
                url:'countryAjaxData.php',
                success:function(html){
                    $('#region').html(html);
                
                                      }
                   }); 
				   
				    });  
					
					
				   $( document ).ready(function() {
					   
					   $('#region').on('change',function(){//change function on country to display all state 
        var regionID = $(this).val();
        if(regionID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'region_id='+regionID,
                success:function(html){
                    $('#district').html(html);
                    
                                      }
                   }); 
                      }else{
                           $('#district').html('<option value="">Select region first</option>');
                    
                           }
    });
    
    $('#district').on('change',function(){//change state to display all city
        var districtID = $(this).val();
        if(districtID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'district_id='+districtID,
                success:function(html){
                   $('#facility').html(html);
                                      }
                   }); 
                    }else{
                           $('#facility').html('<option value="">Select district first</option>');
                    
                           }
    });
                       
     $('#facility').on('change',function(){//change state to display all facility
        var facilityID = $(this).val();
        if(facilityID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'facility_id='+facilityID,
                success:function(html){
                   
                                      }
                   }); 
                    }
    });
	
	});
	 
				   </script>

</head>
	   <p id="profile1" style="color:red;margin-left:700px;margin-top:100px"><b>Populate Region and district </b></p><br>

                         	 <div class="row">
					 
		
		  <div class="col-md-1 col-sm-12" id="lable1"></div>
                    
					 <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Region</div>
                    <div class="col-md-2">
                     
					<select name="region" id="region"   
 data-live-search="true" class="chosen selectpicker form-control" required>
					<option value="">Select Region</option>
					
                    </select>

                    </div>

                    

                 <div class="col-md-1 col-sm-12">District</div>
                    <div class="col-md-2">
                    <select class="selectpicker form-control" name="district" id="district" standard title="Select an Option" autofocus="autofocus" required>
                    <option value="">Select District</option>
                    </select></div>
                    
                <div class="col-md-1 col-sm-12">Facility</div>
                    <div class="col-md-2">
                    <select class="selectpicker form-control" name="facility" id="facility" standard title="Select an Option" autofocus="autofocus" required>
                    <option value="">Select facility</option>
                    </select></div>
					
                  </div>
    </div>
  
        
                  
				
				
                    <!--start 6 row-->
               
