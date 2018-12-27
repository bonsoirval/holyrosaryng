<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <?php 
                    
                        $attribute = array(
                            'id' => 'login_form',
                        ); 
                        echo form_open('Candidate/login', $attribute); ?>
                    
                        <h1>Candidate's Login</h1>
                        <div>
						<label>Enter Card Serial Number </label>
                            <?php 
                                $attributes = array(
                                    'type' => 'text',
                                    'class' => 'form-control',
                                    'placeholder' => 'Username',
                                    'name' => 'identity', //username',
                                    'id' => 'username',
                                    'required' => 'required',
                                );
                                
                                echo form_input($attributes);
                            ?>
                            
                        </div>
                        <div>
						<label>Enter Your Choosen Password </label>
                            <?php 
                                $attributes = array(
                                    'type' => 'password',
                                    'class' => 'form-control',
                                    'placeholder' => 'Password',
                                    'name' => 'password',
                                    'id' => 'password',
                                    'required' => 'required',
                                );
                                
                                echo form_input($attributes);
                            ?>
                            
                            
                        </div>
						<p>
    <?php //echo lang('login_remember_label', 'remember');?>
    <?php //echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>

                        <div>
                            <?php 
                                $attributes = array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-default submit login',
                                    'value' => 'Log in',
                                   // 'name' => 'password',
                                    
                                    'required' => 'required',
                                );
                                
                                echo form_input($attributes);
                            ?>
                            <?php echo anchor('Welcome/create_account',  'Create Account'); ?>
                            
                            <a class="reset_pass" href="<?php echo base_url();?>Candidate/forgot">Lost your password?</a>
                        </div>
                        <div class="clearfix"></div>
                        
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            
        </div>
    </div>
