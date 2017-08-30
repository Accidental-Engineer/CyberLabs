<div>
	<?php if(isset($_SESSION['is_logged_in']) && isset($_SESSION['user_data']['admin_auth']) && $_SESSION['user_data']['admin_auth']) : ?>
	<p><a class="btn-share box1-btn-submit" href="<?php echo ROOT_PATH; ?>shares/add"><i class = "shares-options fa fa-envelope-open fa-2x" aria-hidden="true"></i>&nbsp;Share Your Idea</a></p><br/>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="box1">
			<small><?php echo $item['create_date']; ?></small>
			<i class = "shares-options fa fa-bookmark fa-2x" aria-hidden="true"></i>
			<h3><i class = "shares-options fa fa-quote-left fa-2x" aria-hidden="true"></i>&nbsp;<?php echo $item['title']; ?><i class = "shares-options fa fa-quote-right fa-2x" aria-hidden="true"></i></h3>
			<small><?php echo $item['user']; ?></small>
			<hr />
			<p><?php echo $item['body']; ?></p>
			<br/>
			<i class = "shares-options fa fa-thumbs-up fa-2x" aria-hidden="true"></i>
			<i class = "shares-options fa fa-thumbs-down fa-2x" aria-hidden="true"></i>
			<i class = "shares-options fa fa-user-secret fa-2x" aria-hidden="true"></i>
			<i class = "shares-options fa fa-edit fa-2x" aria-hidden="true"></i>
			<i class = "shares-options fa fa-trash fa-2x" aria-hidden="true"></i>
			<a href = "<?php echo $item['link']; ?>" target = "_blank"><i class = "shares-options fa fa-external-link fa-2x" aria-hidden="true"></i></a>
			<a href="<?php if(isset($_SESSION['user_data'])) { echo ROOT_URL.'discuss/'.$item['id']; }else { echo ROOT_URL.'users/login'; }?>"><i class = "shares-options fa fa-comments fa-2x" aria-hidden="true"></i></a>
			<hr/>
			<i class="fa fa-tag" aria-hidden="true"></i>
			<input type = "text" id = "<?php echo $item['id']; ?>" class = "box1-form-control" name = "comment" style = "display: none;" placeholder = "Your argument ....."/>
			<br/>
		</div>
		<br/>
	<?php endforeach; ?>
</div>
