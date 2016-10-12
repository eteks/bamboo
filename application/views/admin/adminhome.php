<?php include "templates/header.php" ?>
<div class="ch-container">
    <div class="row footer_content">
	     <div class="row">
	        <div class="col-md-12 center login-header">
	            <h2>Welcome to Admin</h2>
	        </div>
	        <!--/span-->
	    </div><!--/row-->
    <div class="row">
        <div class="well col-md-5 center login-box">
            <!-- <div class="alert alert-info">
                Please login with your Username and Password.
            </div> -->
            
          
            <?php if (isset($error_message)){
                echo "<p class='error_msg_reg alert alert-info'>".$error_message."</p>";
            }?>
            <?php echo form_open('admin','name="login_form" id="login_form" role="form"'); ?>
           	<?php echo form_fieldset(); ?>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user users-icons"></i></span>
                        <?php echo form_input(array('name'=> 'username','id'=> 'username','value'=> '','maxlength'=> '100','class'=>'form-control','placeholder'=>'Username')); ?>
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock users-icons"></i></span>
                        <?php echo form_password(array('name'=> 'password','id'=> 'password','value'=> '','maxlength'=> '100','class'=>'form-control','placeholder'=>'Password')); ?>
                    </div>
                    <div class="clearfix"></div>

                    <!-- <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                    </div> -->
                    <div class="clearfix"></div>
                    <p class="center col-md-5">
                    	<?php echo form_submit('adminlogin', 'Login','class="btn btn-primary login-btn"'); ?>
                        <!-- <button type="submit" class="btn btn-primary login-btn">Login</button> -->
                    </p>
            <?php echo form_fieldset_close(); ?>
            <?php echo form_close(); ?>
            
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->
<?php include "templates/footer.php" ?>