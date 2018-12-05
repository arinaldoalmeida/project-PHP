<?php if(isset($_GET['msg']) && isset($_GET['tipo_msg'])){?>
			<div class="alert alert-<?php echo $_GET['tipo_msg']; ?> esconde col-12">
				<?php echo $_GET['msg']; ?>
			</div>
			<?php } ?>