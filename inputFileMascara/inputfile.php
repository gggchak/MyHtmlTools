<?php
  var_dump( $_REQUEST );

?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
      .login_photo1 {
        opacity:0.2;
        position:absolute;
        z-index:1;
      }
      .login_photo2{
         position:absolute;
         z-index:0;
      }
    </style>

  </head>
  <body>
	  <div class="container">

      <section class="login">
        <div class="container">
          <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
              <div class="panel-heading">
                <div class="panel-title">Acceder</div>
                <div class="panel-title" style="float:right; font-size: 80%; position: relative; top:-10px"><a href="olvido.php">Olvidó su clave?</a></div>
              </div>
              <div style="padding-top:30px" class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform"  action='inputfile.php' method='post' class="form-horizontal" role="form">

                    <input type='hidden' name='submitted' id='submitted' value='1'/>

                    <div style="margin-bottom: 25px" class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <?php
                          if($fueCompletado){
                          echo '<input id="login-email" type="text" class="form-control" name="email" value="' . $_REQUEST["email"] . '" placeholder="email">';
                        } else {
                          echo '<input id="login-email" type="text" class="form-control" name="email" value="" placeholder="email">';
                        }
                        ?>
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input id="login-password" type="password" class="form-control" name="password" placeholder="clave">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <div class="login_photo2">
                        <img src="client2.png" /> </div>
                      </div>
                      <div class="login_photo1">
                        <input id="login-photo" type="file" class="form-control-photo" name="photo" placeholder="Foto">
                      </div>

                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input id="login-password" type="password" class="form-control" name="password" placeholder="clave">
                    </div>
                    <div class="input-group">
                      <div class="checkbox">
                        <label>
                          <input id="login-remember" type="checkbox" name="remember" value="1"> Recuerdame por favor!!!
                        </label>
                      </div>
                    </div>

                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                          <input id="btn-login" class="btn btn-success" type='submit' value='Acceder' />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 control">
                          <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                            Si en verdad no tienes una cuenta!
                            <a href="register.php" onClick="$('#loginbox').hide(); $('#signupbox').show()"><strong>Registrate aquí</strong></a>
                          </div>
                        </div>
                    </div>

                  </form>
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>
  </body>
</html>
