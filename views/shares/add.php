
<div class="box1">
    <h3 class="box1-title">Share Your Idea</h3>
    <br/>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <ul>
      	<li>
    		<label>Title</label>
        </li><li>
    		<input type="text" name="title" class="box1-form-control" />
        </li><li>
    		<label>Body</label>
        </li><li>
    		<textarea name="body" class="box1-form-control"></textarea>
        </li><li>
        <label>Link</label>
        </li><li>
    		<input type="text" name="link" class="box1-form-control" />
        </li><li>
    	  <input class="box1-btn-submit" name="submit" type="submit" value="Submit" />
        <input class="box1-btn-cancel" name="cancel" type = "submit" value="Cancel" />
        </li>
      </ul>
    </form>
</div>
