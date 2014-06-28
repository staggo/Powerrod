<div class="container">
	
    <div class="row">
		<div class="col-md-6">
            <h1><?php echo $page_title; ?></h1>
        </div>    
    	<div class="col-md-6" style="position:relative; top:20px; margin-bottom:20px; text-align:right;">
             <a href="<?php echo $this->config->item('base_url');?>index.php/engineer/addnew"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-wrench"></span> New Engineer</button></a>
        </div>    
    </div>
    
    <div class="table-responsive">
    <table class="table table-hover table-striped table-condensed table-bordered" id="example">

			<thead>
            	<tr>
	                <th>ID</th>
    	            <th>Name</th>
        	        <th>Type</th>
                    <th>Telephone</th>
                    <th>Vehicle</th>
            	    <th>Active</th>
            	</tr>
            </thead>        
            </tfoot>
        	<tbody>
			<?php 
                foreach($engineers as $engineer){
					
				$link = $this->config->item('base_url') . $this->config->item('index_page') . '/engineer/edit/' . $engineer['id'];
					
                    echo '<tr>';
                    echo 	'<td><a href="' . $link . '">' . $engineer['id'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $engineer['name'] . '</a></td>';
					echo 	'<td><a href="' . $link . '">' . $engineer['type'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $engineer['tel_no'] . '</a></td>';
					echo 	'<td><a href="' . $link . '">' . $engineer['vehicle'] . '</a></td>';
  					echo 	'<td><a href="' . $link . '">' . $engineer['active'] . '</a></td>';
                    echo'</tr>';
					
                
				
				}
            ?>
            </tbody>
	</table>
    </div><!--responsive table wrapper-->
</div><!--/container-->
