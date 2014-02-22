<?php if($sf_user->isAuthenticated()):?>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="http://udc.edu.ar" class="pull-left" target="_blank"><img id="escudo" src="<?php echo image_path("iso-UDC-lineal.png");?>" rel="tooltip" alt="Logo UDC"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $sf_user->getUsername();?> <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo url_for('sfGuardUser/changePassword');?>">Cambiar clave</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo url_for('@sf_guard_signout');?>">Salir</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>
<?php endif;?>