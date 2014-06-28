<div class="container" id="newcustomer">
    <div class="row">

		<?php echo form_open('customer/update/' . $this->uri->segment(3)); ?>
		<div class="col-md-7">
	        <h1><?php echo $page_title; ?></h1>
    	</div>
        <div class="col-md-5 text-right" style="position:relative; top:20px; margin-bottom:20px;">
	        <a href="<?php echo $this->config->item('base_url');?>index.php/customer/"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>
            <a href="<?php echo $this->config->item('base_url');?>index.php/customer/update"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Save</button></a>
    	</div>
    </div><!--/row-->

    <div class="row">
<!--column 1-->
		<div class="col-md-4">
        	<h4>Company Details</h4>
        	 <div class="form-group">  
            	<label for="customer_name">Account ID</label>
                <input type="text" name="customer_code" id="customer_code" class="form-control" value="<?php echo $customer[0]['account_no'];?>"/>
			</div>
            <div class="form-group">  
            	<label for="customer_name">Customer Name</label>
                <input type="text" name="customer_name" id="customer_name" class="form-control" value="<?php echo $customer[0]['name'];?>"/>
			</div>
             <div class="form-group">  
            	<label for="customer_address">Address</label>
                <textarea name="customer_address" id="customer_address" class="form-control" rows="4"><?php echo $customer[0]['address1'] . "\n" . $customer[0]['address2'] . "\n" . $customer[0]['address3'] . "\n" . $customer[0]['address4'];?>
                </textarea>
			</div>
			<div class="form-group">  
            	<label for="customer_postcode">Postcode</label>
                <input type="text" name="customer_postcode" id="customer_postcode" class="form-control" value="<?php echo $customer[0]['postcode'];?>"/>
			</div>
            <div class="form-group">  
            	<label for="customer_tel_no">Telephone</label>
                <input type="text" name="customer_tel_no" id="customer_tel_no" class="form-control" value="<?php echo $customer[0]['tel_no'];?>"/>
			</div>
            <div class="form-group">  
            	<label for="customer_fax">Fax</label>
                <input type="text" name="customer_fax" id="customer_fax" class="form-control" value="<?php echo $customer[0]['fax_no'];?>"/>
			</div>
			<div class="form-group">  
            	<label for="customer_email">Email</label>
                <input type="text" name="customer_email" id="customer_email" class="form-control" value="<?php echo $customer[0]['email'];?>"/>
			</div>
		</div><!--emd column 1-->
        
        <div class="col-md-4">
        	<h4>Rates</h4>
        	<div class="form-group">  
            	<label for="customer_plumbing_rate">Plumbing Rate</label>
                <input type="text" name="customer_plumbing_rate" id="customer_plumbing_rate" class="form-control"/>
			</div>
			<div class="form-group">  
            	<label for="customer_cctv_rate">CCTV Rate</label>
                <input type="text" name="customer_cctv_rate" id="customer_cctv_rate" class="form-control"/>
			</div>
            <div class="form-group">  
            	<label for="customer_tanker_rate">Tanker rate</label>
                <input type="text" name="customer_tanker_rate" id="customer_tanker_rate" class="form-control"/>
			</div>
            <div class="form-group">  
            	<label for="customer_jetting_rate">Jetting Rate</label>
                <input type="text" name="customer_jetting_rate" id="customer_jetting_rate" class="form-control"/>
			</div>
            
            <h4>Limits</h4>
        	<div class="form-group">  
            	<label for="customer_vo_limit">VO Limit</label>
                <input type="text" name="customer_vo_limit" id="customer_vo_limit" class="form-control"/>
			</div>
            
		</div><!--emd column 2-->  
 
 		<!--column 3-->  
        <div class="col-md-4">
           <h4>Notes</h4>
           <div class="form-group">
           		<label for="customer_notes">Notes</label>  
                <textarea name="customer_notes" id="customer_notes" class="form-control" rows="10"><?php echo $customer[0]['notes'];?>
                </textarea>
			</div>
            
        </div>       
	</div><!--/row-->

		
		<?php echo form_close(); ?>