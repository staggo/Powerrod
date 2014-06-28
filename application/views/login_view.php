<div class="container">

		<p><?php //echo sha1('test'); ?></p>
      
      <?php
	      $attributes = array('class' => 'form-signin', 'role' => 'form');
		  echo form_open('login', $attributes);
		?>
      
      <!--form class="form-signin" role="form"-->
        <h2 class="form-signin-heading">Please log in</h2>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->