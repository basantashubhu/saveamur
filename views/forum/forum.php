<?php require('views/includes/head.php'); ?>
<div class="container">
	<h2 class="font-weight-bold mt-2 clearfix"><span class="float-left">
	Forum
	<small class="new-forum d-none">| New&nbsp;Forum</small></span>
	<span class="btn btn-sm btn-primary mt-1 float-right" id="create-forum">Create Forum</span>
	</h2>
	<hr class="mt-0 mb-0 bg-success">
	<div class="new-forum d-none" style="border: 1px solid #ccc;">
		<form action="/forum/create" method="POST">
			<div class="row">
				<div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1">
					<div class="mt-3">
						<label class="text-center h4 d-block mb-2">Title</label>
						<input type="text" name="title" class="form-control" required>
					</div>
				</div>
			</div>
			<div class="form-group text-center">
				<input type="submit" value="Create" class="mt-3 btn btn-primary">
			</div>
		</form>
	</div>
	<div class="forums-container mt-3">
		<?php foreach($posts as $post): ?>
		<div class="mb-3">
			<h5><?= $post["forum"] ?></h5>
			<?php foreach($post["posts"] as $body): ?>
			<div class="bg-light p-1 px-2">
				<?= $body->body ?>
			</div>
			<small class="d-block text-right mb-2">By : <?= $body->user_name.", ".date_create($body->created_at)->format("d M Y") ?></small>
			<?php endforeach; ?>
		</div>
		<form action="/post/create" method="POST">
			<div class="form-group">
				<textarea name="body" rows="3" class="form-control" required 
				placeholder="Write your message here.."></textarea>
				<input type="submit" value="Post" class="px-4 mt-2">
				<input type="hidden" name="forum_id" value="<?= $post["id"] ?>">
			</div>
		</form>
		<?php endforeach; ?>		
	</div>
</div>
<hr class="mt-0 mb-0 bg-success">
<?php require('views/includes/footer.php'); ?>