  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="" class="text-success"><b>TT</b>v2.0</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?= $this->Form->create(); ?>
          <div class="form-group has-feedback">
            <?= $this->Form->input('username'); ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <?= $this->Form->input('password'); ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-sm-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
          
          
        </form>

        <div class="row">
        <a href="#">I forgot my password</a><br>
        </div>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->