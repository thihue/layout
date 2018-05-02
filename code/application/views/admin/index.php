<html>
	<head>
		<!--liên kết đến file head -->
        <?php $this->load->view('admin/head') ?>
	</head>
	<body>
		<div id="container">
			<div class="col-md-4 left">
				<?php $this->load->view('admin/menu') ?>
			</div>
			<div class="col-md-8">
				<div id="top">
	                <?php $this->load->view('admin/top')?>
				</div>
				<div class="right">
					<?php 
					$this->load->view($template,$b);
					// $this->load->view('admin/content') 
					?>
				</div>
			</div>
		</div>
	</body>
</html>