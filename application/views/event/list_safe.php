<div class="container">

 <?php print_r($events); ?>	
    <div class="table-responsive">
    <table class="table table-hover table-striped table-condensed table-bordered"> <!--id="example"-->
        <tr>
			<thead>
       			<!--th>id</th-->
                <th>Call</th>
                <th>Date</th>
                <th>Logged By</th>
                <th>Description</th>
            </thead>        
        </tr> 
        <tr>
        	<tbody>
			<?php 
                

				
				foreach($events as $event){
					
				$link = $this->config->item('base_url') . $this->config->item('index_page') . '/event/edit/';
					
                    echo '<tr>';
                    echo 	'<td><a href="' . $link . '">' . $call['id'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $call['logged_date'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $call['logged_by'] . '</a></td>';
                    echo 	'<td><a href="' . $link . '">' . $call['description'] . '</a></td>';
                    echo'</tr>';
                }
            ?>
            </tbody>
        </tr>
	</table>
    </div><!--responsive table wrapper-->
</div><!--/container-->
