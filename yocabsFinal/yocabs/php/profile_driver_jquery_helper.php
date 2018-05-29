<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<style> 
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}


#panel {
    padding: 5px;
    display: none;
}
</style>

 
<div id="flip">Click to know last trip details</div>
<div id="panel">
	
	
	 <div class="container">
	 	<div class="row">
	 		<div class="col-md-4">

	 		</div>
	 		<div class="col-md-4">
	 			<h3 style="margin-left:10px;">Email : <b><?php  echo $client_email; ?></b>	</h3>
				  <div class="card" style="width:400px">
				    <img class="card-img-top" src="<?php echo $client_image;?>" alt="Card image" style="width:100%">
				    <div class="card-body">
				      <h4 class="card-title"><?php echo $client_name;?></h4>
				      <p class="card-text">contact Number :<?php echo $client_contact_number?></br>Current Location:<b> <?php echo $client_address?></b><br>TRIP TIME :<?php echo $trip_time;?></p>
				      <a href="b.php" target="_BLANK" class="btn btn-primary">I want to know my all tour</a>
				    </div>
				  </div>
  
  
  
	 		
	 		<div class="col-md-4">

	 		</div>


	 	</div>
	 </div>
</div>
<?php