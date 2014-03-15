<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <?php echo image_tag("iso-UDC-lineal.png");?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Iniciar sesión</h3>
      </div>
      <div class="panel-body">
        <form accept-charset="UTF-8" role="form" action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
          <fieldset>
            <?php echo $form->renderGlobalErrors();?>
          <div class="form-group">
            <?php echo $form['username']->renderError(); ?>
            <?php echo $form['username']->render(array("class"=>"form-control", "placeholder" => "Usuario")); ?>
          </div>
          <div class="form-group">
            <?php echo $form['username']->renderError(); ?>
            <?php echo $form['password']->render(array("class"=>"form-control", "placeholder" => "Contraseña")); ?>
          </div>			    		
          <input class="btn btn-lg btn-success btn-block" type="submit" value="Ingresar">
          </fieldset>
          <?php echo $form->renderHiddenFields();?>
        </form>
      </div>
    </div>
  </div>
</div>

<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
