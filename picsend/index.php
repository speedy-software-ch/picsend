<?php
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
if(stripos($ua,'android') !== false) { // && stripos($ua,'mobile') !== false) {
		echo "<html><head><title>PicSend the only plattform that verifies you get a picture</title></head>
<script src='http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places'></script>
<script src='jquery2.min.js'></script>
<script src='jquery.geocomplete.js'></script>
<script src='jquery.geocomplete.js'></script><body>
<div align='center'><h1> Sign up</h1>
<form action='sign_up.php' method='get'>
<font size='2'><b>First Name:</b><input type='text' id='firstname' name='firstname' width='30%'><br>
<b>Last Name:</b><input type='text' id='lastname' name='lastname' width='30%'><br>
<b>Gender: </b><select><option id='1'>Male</option><option id='2'>Female</option></select><br>
<b>Birthday: </b><input type='date' id='birthday'><br>
<b>City:</b><input type='text' id='city'><br>
<b>State: </b><input type='text' id='state'><br><br><input type='submit' value='Sign Up!'></form><br></font>     <script>$(function(){
        
        $('#city').geocomplete()
          .bind('geocode:result', function(event, result){
            $.log('Result: ' + result.formatted_address);
          })
          .bind('geocode:error', function(event, status){
            $.log('ERROR: ' + status);
          })
          .bind('geocode:multiple', function(event, results){
            $.log('Multiple: ' + results.length + ' results found');
          });
 $('#examples a').click(function(){
          $('#city').val($(this).text()).trigger('geocode');
          return false;
        })});</script>";
	exit();
}
else
{
echo "not Android App";
}
?>
<?php
 ?></body></html>
