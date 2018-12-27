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
                        echo form_open('Login/Login/login', $attribute); ?>
                    
                        <h1>System's Login</h1>
                        <div>
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
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
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
                            <?php echo anchor('Candidate/create_account',  'Create Account'); ?>
                            
                            <a class="reset_pass" href="<?php echo base_url();?>Login/forget">Lost your password?</a>
                        </div>
                        <div class="clearfix"></div>
                        
                    </form-->
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            
        </div>
    </div>
</body>
 <script type="text/javascript" lang="javascript">
        $(document).ready(function(){
            $(function($) {
            // this script needs to be loaded on every page where an ajax POST may happen
            $.ajaxSetup({
                data: {
                    '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
                }
            });


             // now write your ajax script
            $("#login_form").submit(function (e){
                
                //prevent form submit throught the form action
                e.preventDefault();
               
                var username = $('#username').val();
                var password = $('#password').val();
                var csrf_umsci = $("input[name=csrf_umsci]").val();
               
                $.ajax({
                    url: "<?php echo base_url(); ?>Login/Login/login",
                    type: "POST",
                    data: 
                    {
                      //"username":username,
                      "identity":username,
                       "password":password,
                       "csrf_umsci":csrf_umsci,
                    },
                    ContentType: "html",
                    success: function(json)
                    {
						//console.log(json);
						
                        try{		
								
                                var obj = jQuery.parseJSON(json);

                                //alert(obj['STATUS']);

                                if(obj['STATUS'] == true)
                                {
                                    alert("User found");
                                    window.location.href = "<?php echo base_url(); ?>"+obj['type']+"/index";
                                }else if(obj['STATUS'] != true){
                                    alert("User Not found or incorrect username and password");
                                }


                        }catch(e) {		
                            //var obj = jQuery.parseJSON(json);
                            //alert(obj['STATUS']);
							console.log('my message' + e);
							alert('Exception while request..');
                        }
                    },
                    error: function(){						
                            alert('Error while request..');
                    }

                  })
              });
            });

         
            
        });
    </script>
</html>