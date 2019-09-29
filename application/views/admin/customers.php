<?php $this->load->view('admin/head'); ?>
<div class="container bg-white shadow" style="padding-top:75px; padding-bottom: 20px;"> 
	<div class="row">
		<?php $this->load->view('admin/menu'); ?>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<h4 class="menu-head">Customers</h4>
					<table id="liste" class="display">
					    <thead>
					        <tr>
					        	<th>Reseller</th>
					        	<th>Username</th>
					            <th>Password</th>
					            <th>Expire Date</th>
					            <th></th>
					        </tr>
					    </thead>
					    <tbody>
					    	<?php 
					    		foreach ($users as $key) {
					    			echo '<tr class="'.($key->exp_date < time() ? 'danger' : '').'">
						    				<td>'.$key->reseller.'</td>
						    				<td>'.$key->username.'</td>
						    				<td>'.$key->password.'</td>
						    				<td >'. date('Y-m-d H:i:s', $key->exp_date).'</td>
						    				<td>'.$key->reseller_notes.'</td>
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