<?php include_once "image-slider.php"; ?>
<footer id="page-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="text-white mt-3">
					<h4>SAVE AN AMUR LEOPARD</h4>
					<address style="color: #ccc;">
						1250 24th Street, N.W. <br>
						Washington, DC 20037-1193 <br>
						UNITED STATES <br>
						(202) 293-4800
					</address>
				</div>
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="col-md-5">
						<div class="mt-3 text-white">
							<h4>Live Chat</h4>
							<div class="table-bordered p-2">
								Chat from here!
							</div>
						</div>
					</div>
					<div class="col-md-7 clearfix">
						<div class="mt-3 text-white float-md-right">
							<h4 class="text-center">NEWSLETTER</h4>
							<form action="/newsletter" method="POST" class="mb-3">
								<input type="email" name="email" class="mb-3 mt-2 rounded-0 form-control"
								placeholder="john@gmail.com" autocomplete="off" required>
								<input type="submit" value="Subscribe" 
								class="btn btn-success rounded-0 d-block m-auto">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'bottom-footer.view.php'; ?>

</footer>

<script src="/public/js/jquery.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/jquery.rotating-slider.min.js"></script>
<script src="/public/js/custom.js"></script>
<script>
	$('html').not(document.getElementsByClassName('.person-name')).on('click', function(event) {
		$('ul.person-dropdown').slideUp();
	});
	$('.person-name').off('click').on({
		click: function (event) {
			event.stopPropagation();
			$(this).children('ul.person-dropdown').slideToggle();
		}
	});
</script>