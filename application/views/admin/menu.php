<div class="col-md-3">
			<div class="row ">
				<div class="col-md-12">
					<h4 class="menu-head">Dashboard</h4>
					<div class="user-panel text-center">
						<span class="font-weight-bold">Serkan AYTAŞ</span>
						<span>Son Giriş <?=date('d-m-Y H:i:s') ?></span>
					</div>
					<ul class="menu" style="overflow: auto">
						<li> <a href=""><i class="fas fa-file-alt"></i> MAIN</a> 
							<ul class="sub-menu">
								<li>Server Connection</li>
								<li>Client Connection Log</li>
							</ul>
						</li>
						<li> <a href=""><i class="fas fa-comment-dots"></i> STREAMING LINES</a> 
							<ul class="sub-menu">
								<li>Create New Line</li>
								<li><a href="<?=base_url('admin/customers') ?>">Manage Lines</a></li>
							</ul>
						</li>
						<li> <a href=""><i class="fas fa-house-damage"></i> LIVE STREAMS/VOD </a> 
							<ul class="sub-menu">
								<li>Add New Stream</li>
								<li><a href="<?=base_url('admin/streams') ?>">Manage Streams</a></li>
								<li>Manage EPG</li>
								<li>Add New Movie</li>
								<li>Import Multiple Movies</li>
								<li>Manage Movies</li>
								<li>Create Channel</li>
								<li>Manage Created Channels</li>
								<li>Mass edit streams</li>
								<li>Transcoding Profiles</li>
								<li>Manage Categories</li>
								<li>Stream tools</li>
							</ul>
						</li>
						<li> <a href=""><i class="fas fa-users"></i> STREAMING SERVERS</a> 
							<ul class="sub-menu">
								<li>Add New Server</li>
								<li>Manage Servers</li>
							</ul>
						</li>
						<li> <a href=""><i class="fas fa-users"></i> BOUQUETS</a> 
							<ul class="sub-menu">
								<li>Add New Bouquet</li>
								<li>Manage Bouquets</li>
							</ul>
						</li>
						<li> <a href=""><i class="fas fa-users"></i> REGISTERED USERS</a> 
							<ul class="sub-menu">
								<li>Register New User</li>
								<li>Manage Registered Users</li>
								<li>Manage Group Members</li>
							</ul>
						</li>
						<li> <a href=""><i class="fas fa-users"></i> RESELLERS</a> 
							<ul class="sub-menu">
								<li>New Package</li>
								<li>Manage Packages</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>