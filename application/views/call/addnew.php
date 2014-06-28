<div class="container" id="newcall">
    <div class="row">
	
		<?php echo validation_errors(); ?>

		<?php echo form_open('call/insert'); ?>
		<div class="col-md-7">
	        <h1>Add New Call</h1>
    	</div>
        <div class="col-md-5 text-right" style="position:relative; top:20px; margin-bottom:20px;">
	        <a href="<?php echo $this->config->item('base_url');?>index.php/call/"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>
            <a href="<?php echo $this->config->item('base_url');?>index.php/call/insert"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Save</button></a>
    	</div>
    </div><!--/row-->

    <div class="row">
<!--column 1-->
		<div class="col-md-4">
        	<div class="row">
	            <div class="col-md-6">
		        	 <div class="form-group ">  
		            	<label for="logged_date">Logged Date</label>
		                <div class="input-group ">
							<input type="date" name="logged_date" id="logged_date" class="form-control input-append datetime" data-format="MM/dd/yyyy HH:mm:ss" value="<?php echo date('Y-m-d H:i'); ?>"/>
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
		        	</div>
	            </div>
                
                <div class="col-md-6">
		            <div class="form-group">  
			            <label for="logged_by">Logged By</label>
		    	        <?php
							$options = $logged_by_list;
							$element = 'id="logged_by" class="form-control"';
							echo form_dropdown('logged_by', $options, $_SESSION['user_id'], $element);
						?>
		        	</div>
		        </div>
            </div><!--/row-->    
            <div class="form-group">  
	            <label for="customer_call_id">Customer Call #</label>
    	        <input type="text" name="customer_call_id" id="customer_call_id" class="form-control"/>
        	</div>    
            <!--div class="form-group">  
	            <label for="powerrod_call_ref">Customer Name</label>
    	        <?php//$this->load->view('call/modules/customers_select'); ?>
        	</div-->
			  
			<div class="form-group">  
	            <label for="customer_name">Customer Name</label>
    	         <?php $this->load->view('call/modules/customers_select'); ?>
        	</div>    
            
            <div class="form-group">  
	            <label for="customer_call_ref">Customer Telephone</label>
    	        <input type="text" name="customer_tel_no" id="customer_tel_no" class="form-control"/>
        	</div>  
            
            
		</div><!--emd column 1-->            
<!--column 2-->          
            
		<div class="col-md-4">
            <div class="form-group">  
	            <label for="customer_call_ref">Site Contact</label>
    	        <input type="text" name="site_contact" id="site_contact" class="form-control"/>
        	</div>
            
            <div class="form-group">  
	            <label for="customer_call_ref">Site Address</label>
    	        <textarea name="site_address" id="site_address" class="form-control" rows="3"></textarea>
        	</div>       
           
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">  
                        <label for="site_postcode">Site Postcode</label>
                        <input type="text" name="site_postcode" id="site_postcode" class="form-control"/>
                    </div>  
				</div>
                <div class="col-md-6">
                
	                <div class="form-group">  
    	                <label for="site_telno">Site Telephone</label>
        	            <input type="text" name="site_telno" id="site_telno" class="form-control"/>
            	    </div>       
				</div>
            </div>
		</div><!--emd column 2-->
 
<!--column 3-->          
            
		<div class="col-md-4">
            <div class="form-group">  
	            <label for="engineer">Engineer</label>
				<?php
					//create dropdown using CI syntax
                    $options = $engineers;
                    $element = 'id="engineer" class="form-control"';
                    echo form_dropdown('engineer', $options, 0, $element);
                ?>
        	</div>    
            
            <div class="form-group">  
	            <label for="invoice_no">Invoice</label>
    	        <input type="text" name="invoice_no" id="invoice_no" class="form-control"/>
        	</div> 
            
            <div class="row">
                <div class="col-md-6">
                	<div class="form-group ">  
               			<label for="logged_date">Appointment Date</label>
                		<div class="input-group ">
			                <input type="date" name="logged_date" id="logged_date" class="form-control input-append datetime" data-format="MM/dd/yyyy"/>
                			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		                </div>
        	        </div>
            	</div>
            
            <div class="col-md-6">
                	<div class="form-group ">  
               			<label for="logged_date">Appointment Time</label>
                		<div class="input-group ">
			                <input type="time" name="logged_date" id="logged_date" class="form-control input-append datetime" data-format="HH:mm:ss"/>
                			<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
		                </div>
        	        </div>
            	</div>
            
            </div><!--/row-->
            
               
		</div><!--emd column 3-->
	</div><!--end row-->
    <div class="row">
    	<div class="col-md-12">
        <div class="form-group">  
	            <label for="description">Description</label>
    	        <textarea name="description" id="description" class="form-control"></textarea>
        	</div>    
        </div>
    </div>
		
		<?php echo form_close(); ?>