<?php $this->load->view('admin/head'); ?>
<div class="container bg-white shadow" style="padding-top:75px; padding-bottom: 20px;"> 
	<div class="row">
		<?php $this->load->view('admin/menu'); ?>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<h4 class="menu-head mb-2">Streams</h4>
					<table id="liste" class="display">
					    <thead>
					        <tr>
					        	<th>Categori</th>
					        	<th>Name</th>
					            <th>Source</th>
					            <th>Create Date</th>
					            <th></th>
					            <th class="text-center" width="40px"></th>
					        </tr>
					    </thead>
					    <tbody>
					    	<?php 
					    		foreach ($users as $key) {
					    			echo '<tr>
						    				<td>'.$key->category_id.'</td>
						    				<td>'.$key->stream_display_name.'</td>
						    				<td>'.stripslashes($key->stream_source).'</td>
						    				<td >'. date('Y-m-d H:i:s', $key->added).'</td>
						    				<td>'.$key->notes.'</td>
						    				<td class="text-center">
						    					<button type="button" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></button>
						    					<button type="button" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
						    				</td>
						    			</tr>';
					    		}

					    	 ?>
					    </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('admin/foot'); ?>