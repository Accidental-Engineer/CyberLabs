<div class="box1">
    <h3 class="box1-title">Register</h3>
    <br/>
    <form class = "box1-form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <ul>
    	<li>
    		<label>Name</label>
      </li><li>
    		<input type="text" name="name" class="box1-form-control" />
    	</li><li>
    		<label>Email</label>
      </li><li>
    		<input type="text" name="email" class="box1-form-control" />
    	</li><li>
    		<label>Password</label>
      </li><li>
    		<input type="password" name="password" class="box1-form-control" />
    	</li>
      <li>
    	   <input class="box1-btn-submit" name="submit" type="submit" value="Submit" />
      </li>
    </ul>
    </form>
</div>
