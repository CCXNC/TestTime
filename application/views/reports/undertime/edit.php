  <style type="text/css">
	.container {
		margin-top: 60px;
		margin-left: 250px;
	}
	h3,h5 {
		color: green;
	}
	.row {
		margin-left: 50px;
	}
</style>
<div class="container">

	<div class="col-sm-8">
	  <div class="panel panel-primary">
	    <div class="panel-heading">
	        <h3 class="panel-title">UNDERTIME FORM</h3>
        	
	    </div>
	    <div class="panel-body">
	    	<?php if($this->session->flashdata('add_msg')) : ?>
			     <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('add_msg'); ?></p>
				<?php endif; ?>
	    	<center><h3>NEW HORIZON FINANCE CORP</h3></center>
	    	<center><h5>REQUEST FOR UNDERTIME</h5></center>
	    	<br><br><br>
	    	<form method="POST" action="<?php echo base_url(); ?>index.php/reports/edit_undertime/<?php echo $undertime->id; ?>">
	    		<div style="color:red"><?php echo validation_errors(); ?> </div>
			   	<div class="row">
			   		<div class="col-md-10">
	            <div class="form-group">
              	<label for="form_name">EMPLOYEE NAME</label>
	              	<input id="form_name" type="text" class="form-control" readonly="" value="<?php echo $undertime->name ?>">
									<input type="hidden" name="name" value="<?php echo $undertime->name . '|' . $undertime->employee_number; ?>">
	            </div>
			   		</div>
			   	</div>	
			    		
		    	<div class="row">
	          <div class="col-md-5">
	            <div class="form-group">
	                <label for="form_name">DATE</label>
	                <input id="form_name" type="date" readonly="" name="date_ut" class="form-control" value="<?php echo $undertime->date_ut;?>">
	            </div>
	          </div>
	          <div class="col-md-5">
	            <div class="form-group">
	                <label for="form_name">TIME OUT</label>
	                <input id="form_name" type="time" name="time_out" class="form-control" value="<?php echo $undertime->time_out;?>">
	            </div>
	          </div>
	        </div> 
	        <div class="row">
	          <div class="col-md-10">
	            <div class="form-group">
	                <label for="form_name">REASON</label>
	                <input id="form_name" type="text" name="reason" class="form-control" value="<?php echo $undertime->reason; ?>">
	            </div>
	          </div>
	        </div> 
         	<div class="row">
	          <div class="col-md-10">
	              <center><input type="submit" class="btn btn-primary btn-send" value="Update"></center>
	          </div>
		      </div>
	    	</form>
	    </div>  
	  </div>
	</div> 
</div>
