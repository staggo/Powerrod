<div class="container">
	
    <div class="row">
		<div class="col-md-6">
            <h1><?php echo $page_title; ?></h1>
        </div>    
    	<div class="col-md-6" style="position:relative; top:20px; margin-bottom:20px; text-align:right;">
             <a href="<?php echo $this->config->item('base_url');?>index.php/user/addnew"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-user"></span> New User</button></a>
        </div>    
    </div>
    
    <div class="table-responsive">
    <table class="table table-hover table-striped table-condensed table-bordered" id="example">

			<thead>
				<tr>
	                <th>User ID</th>
    	            <th>First Name</th>
        	        <th>Last Name</th>
            	    <th>email</th>
                	<th>active</th>
				</tr>
            </thead>        
        	<tbody>
			<?php 
                foreach($users as $user){
					
				$link = $this->config->item('base_url') . $this->config->item('index_page') . '/user/edit/' . $user['id'];
					
                    echo '<tr>';
                    //echo 	'<td><a href="' . $link . '">' . $call['id'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $user['id'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $user['firstname'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $user['lastname'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $user['email'] . '</a></td>';
					echo 	'<td><a href="' . $link . '">' . $user['active'] . '</a></td>';
                    echo'</tr>';
                }
            ?>
            </tbody>
	</table>
    </div><!--responsive table wrapper-->
</div><!--/container-->
