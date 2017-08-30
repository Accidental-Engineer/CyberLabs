
	<?php if(!isset($_SESSION['is_logged_in'])) header('Location: '.ROOT_URL.'users/login');
        else{

          list($root_url, $class, $useless, $post_id) = split('/', $_SERVER["REQUEST_URI"], 4);
          //$post_id is the id of the post for which we have to open a discussion
          $id = (int)$post_id;
          $viewmodel->query('SELECT * FROM shares WHERE id = :postId');
          $viewmodel->bind(':postId', $id);
      		$rows = $viewmodel->resultSet();
          foreach($rows as $item): ?>

            <div class="box1">
        			<small><?php echo $item['create_date']; ?></small>
        			<i class = "shares-options fa fa-bookmark fa-2x" aria-hidden="true"></i>
        			<h3><i class = "shares-options fa fa-quote-left fa-2x" aria-hidden="true"></i>&nbsp;<?php echo $item['title']; ?><i class = "shares-options fa fa-quote-right fa-2x" aria-hidden="true"></i></h3>
        			<small><?php echo $item['user']; ?></small>
        			<hr />
        			<p><?php echo $item['body']; ?></p>
        			<br/>
<?php     endforeach;

          $viewmodel->query('SELECT * FROM discussions WHERE post_id = :postId');
          $viewmodel->bind(':postId', $id);
      		$rows = $viewmodel->resultSet();
	        foreach($rows as $item){
            echo "<hr/><h3><strong><i class = 'fa fa-comment' aria-hidden = 'true'></i>&nbsp;&nbsp;".$item['comment_title']."</strong></h3><h5>".$item['comment_body']."</h5><small>---".$item['user_name'];
          }

        }
        ?>
      </div>
