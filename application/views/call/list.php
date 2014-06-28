<div class="container">
	
    <div class="row">
		<div class="col-md-6">
            <h1><?php echo $page_title; ?></h1>
        </div>    
    	<div class="col-md-6" style="position:relative; top:20px; margin-bottom:20px; text-align:right;">
             <a href="<?php echo $this->config->item('base_url');?>index.php/call/addnew"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-star"></span> New Call</button></a>
        </div>    
    </div>
    <div class="table-responsive">
    <table class="table table-hover table-striped table-condensed table-bordered" id="call_list">

			<thead>
                <th>Call</th>
                <th>Customer Call</th>
                <th>Logged</th>
                <th>Customer</th>
                <th>Account ID</th>
                <th>Site Address</th>
                <th>Postcode</th>
                <th>Tel</th>
                <th>Invoice</th>
                <th>Description</th>
            </thead>        

        	<tbody>
			<?php 
                foreach($calls as $call){
					
				$link = $this->config->item('base_url') . $this->config->item('index_page') . '/call/edit/' . $call['id'];
					
                    echo '<tr>';
                    echo 	'<td><a href="' . $link . '">' . $call['id'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $call['customer_call_id'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $call['logged_date'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $call['name'] . '</a></td>';
					 echo 	'<td><a href="' . $link . '">' . $call['account_no'] . '</a></td>';
					echo 	'<td><a href="' . $link . '">' . $call['site_address'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $call['site_postcode'] . '</a></td>';
					echo 	'<td><a href="' . $link . '">' . $call['site_telno'] . '</a></td>';
					echo 	'<td><a href="' . $link . '">' . $call['invoice_no'] . '</a></td>';
					echo 	'<td><a href="' . $link . '">' . $call['description'] . '</a></td>';
					echo'</tr>';
                }
            ?>
            </tbody>
	</table>
    </div><!--responsive table wrapper-->
</div><!--/container-->
