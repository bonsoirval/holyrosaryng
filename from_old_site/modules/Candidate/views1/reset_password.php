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
                        echo form_open('Candidate/forgot_password', $attribute); ?>
                    
                        <h1>Password Reset System</h1>
                        
                        <div>
                            <?php 
                                $attributes = array(
                                    'type' => 'email',
                                    'class' => 'form-control',
                                    'placeholder' => 'Enter Your Registered Email',
                                    'name' => 'email',
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
                                    'value' => 'Recover Password',
                                   // 'name' => 'password',
                                    
                                    'required' => 'required',
                                );
                                
                                echo form_input($attributes);
                            ?>
                            <?php echo anchor('Welcome/create_account',  'Create Account'); ?>
                            
                            <a class="reset_pass" href="<?php echo base_url();?>Candidate/login">Login</a>
                        </div>
                        <div class="clearfix"></div>
                        
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            
        </div>
    </div>
