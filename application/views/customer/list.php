<div class="container">
	
    <div class="row">
		<div class="col-md-6">
            <h1><?php echo $page_title; ?></h1>
        </div>    
    	<div class="col-md-6" style="position:relative; top:20px; margin-bottom:20px; text-align:right;">
             <a href="<?php echo $this->config->item('base_url');?>index.php/customer/addnew"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-tag"></span> New Customer</button></a>
        </div>    
    </div>
    
    <div class="table-responsive">
    <table class="table table-hover table-striped table-condensed table-bordered" id="example">
			<thead>
				<tr>
                    <th>ID</th>
                    <th>Account ID</th>
                    <th>Name</th>
                    <th>Telephone</th>
                    <th>Active</th>
				</tr>
            </thead>        

        	<tbody>
			<?php 
                foreach($customers as $customer){
					
				$link = $this->config->item('base_url') . $this->config->item('index_page') . '/customer/edit/' . $customer['id'];
					
                    echo '<tr>';
                    echo 	'<td><a href="' . $link . '">' . $customer['id'] . '</a></td>';
					echo 	'<td><a href="' . $link . '">' . $customer['account_no'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $customer['name'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $customer['tel_no'] . '</a></td>';
					echo 	'<td><a href="' . $link . '">' . $customer['active'] . '</a></td>';
                    echo'</tr>';
                }
            ?>
            </tbody>
	</table>
    </div><!--responsive table wrapper-->
</div><!--/container-->
