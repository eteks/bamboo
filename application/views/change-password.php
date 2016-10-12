<?php include "templates/header.php"; ?>
            <div class="col-md-3 visible-lg">
            	
                <ul class="breadcrumb pull-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Change Password</a>
                    </li>
                </ul>
                
            </div>
        </div>        
    
    </div>
</nav>
<!-- End class="navigation" -->

			
			<!-- Content section -->	
			<section class="main">
			
				

<!-- Change password -->
<section class="change_password">
	<div class="container">
	    <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
	            <div class="box">
	                <hgroup class="title">
	                    <h3>Change your password</h3>
	                    <h5>Need to change your password? Don't worry, it's easy! Just fill out the form below.</h5>
	                </hgroup>
	
	                <div class="box-content">
	                    <div class="row">
	                        <div class="col-sm-6">
	                            <div class="control-group">
	                                <label class="control-label" for="password">New password</label>
	
	                                <div class="controls">
	                                    <input class="form-control" id="password" name="password" type="password" value="">
	                                </div>
	                            </div>
	                        </div>
	
	                        <div class="col-sm-6">
	                            <div class="control-group">
	                                <label class="control-label" for="password_confirm">New password (again)</label>
	
	                                <div class="controls">
	                                    <input class="form-control" id="password_confirm" name="password_confirm" type="password" value="">
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	
	                    <div class="row">
	                        <div class="col-sm-12">
	                            <div class="control-group">
	                                <label class="control-label" for="old_password">Old password</label>
	
	                                <div class="controls">
	                                    <input class="form-control" id="old_password" name="old_password" type="password" value="">
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	
	                <div class="buttons">
	                    <button class="btn btn-primary btn-sm btn-block-xs" name="password_restore" type="submit" value="Submit">Change my password</button>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</section>             
<!-- End Reset password -->
			
			</section>
			<!-- End class="main" -->
			
<?php include "templates/footer.php"; ?>