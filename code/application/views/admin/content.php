
			<!-- <div class="col-md-8 right"> -->
			<p class="text-center" style="padding-top: 15px;">Xin chào
				<span style="color: red">
					<?php echo $this->session->userdata('login');?>
				</span>
			</p>
			<!-- <a href="<?php echo site_url("user/logout");?>"> -->
				<i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
			<table id="example" class="table table-hover table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<td>ID</td>
						<td>Username</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach($list as $d){ ?>
					<tr>
						<td>
							<?php echo $d['id'] ?>
						</td>
						<td>
							<?php echo $d['username'] ?>
						</td>
					</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td>ID</td>
						<td>Username</td>
					</tr>
				</tfoot>
			</table>