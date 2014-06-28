<!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Powerrod<!--img width="200"src="<?php //echo $this->config->item('img_path');?>/logo.png"/ alt="Powerrod"--></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo $this->config->item('base_url') ;?>index.php/call/">Calls</a></li>
            <li><a href="#about">Invoices</a></li>
            <li><a href="<?php echo $this->config->item('base_url') ;?>index.php/reports/">Reports</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $this->config->item('base_url') ;?>index.php/customer/">Customers</a></li>
                <li><a href="<?php echo $this->config->item('base_url') ;?>index.php/engineer/">Engineers</a></li>
                <li class="divider"></li>
                 <li><a href="<?php echo $this->config->item('base_url') ;?>index.php/user/">Users</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $this->config->item('base_url'); ?>/index.php/user/edit/<?php echo $_SESSION['user_id']; ?>"><?php echo $_SESSION['username']; ?></a></li>
            <li><a href="<?php echo $this->config->item('base_url'); ?>/index.php/login/logout">Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>