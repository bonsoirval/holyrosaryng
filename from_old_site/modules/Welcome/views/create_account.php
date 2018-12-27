<section class="flat-row">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="flat-events">
						<?php echo form_open('Welcome/create_account'); ?>
                            <h1><center>Fill the form below and submit to create your account, then login</center></h1>
						<div class="form-group">
						<?php echo form_error('email'); ?>
						<?php 
							$attribute = array(
								'type' => 'email',
								'class' => 'form-control',
								'id' => 'email',
								'name' => 'email',
								'value' => set_value('email'),
								'required' => 'required',
								'placeholder' => 'Enter Valid and Functional Email Address',
							);
							echo form_input($attribute); 
						?>
						<div class="form-group">
						</div>
						<?php echo form_error('phone'); ?>
						<?php 
							$attribute = array(
								'type' => 'text',
								'class' => 'form-control',
								'required' => 'required',
								'value' => set_value('phone'),
								'id' => 'phone',
								'name' => 'phone',
								'placeholder' => 'Enter Phone : 0801-234-5678',
							);
							echo form_input($attribute); 
						?>
						</div>
						<div class="form-group">
						<?php echo form_error('username'); ?>
						<?php
							$attribute = array(
								'type' => 'text',
								'class' => 'form-control',
								//'required' => 'required',
								'id' => 'username',
								'value' => set_value('username'),
								'name' => 'username',
								'placeholder' => 'Enter Scratch Card Serial - This is your username',
							);
							echo form_input($attribute); 
						?>
						</div>
                            
						<div class="form-group">
						<?php echo form_error('pin'); ?>
						<?php
							$attribute = array(
								'type' => 'text',
								'class' => 'form-control',
								//'required' => 'required',
								'id' => 'pin',
								'value' => set_value('pin'),
								'name' => 'pin',
								'placeholder' => 'Enter Scratch Card Pin',
							);
							echo form_input($attribute); 
						?>
						</div>
                            
						<div class="form-group">
						<?php
							$attribute = array(
								'type' => 'password',
								'class' => 'form-control',
								'required' => 'required',
								'id' => 'password',
								'name' => 'password',
								'placeholder' => 'Enter Password',
							);
							echo form_input($attribute); 
						?>
						
						<?php
							$attribute = array(
								'type' => 'password',
								'class' => 'form-control',
								'required' => 'required',
								'id' => 'password_confirm',
								'name' => 'password_confirm',
								'placeholder' => 'Confirm Password',
							);
							echo form_input($attribute); 
						?>
						<?php echo form_error('receipt_number'); ?>
						<?php
							$attribute = array(
								'type' => 'number',
								'class' => 'form-control',
								'required' => 'required',
								'id' => 'receipt_number',
								'name' => 'receipt_number',
								"oninput"=>"javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);",
								'maxlength' => 6,
								'type' => "number",
								'placeholder' => 'Payment Receipt Number',
							);
							echo form_input($attribute); 
						?>
							<script>        
                                                            function reciept_number(){          
                                                             $('#reciept_number').keypress(function(e) {
                                                                 var a = [];
                                                                 var k = e.which;

                                                                 for (i = 48; i < 58; i++)
                                                                     a.push(i);

                                                                 if (!(a.indexOf(k)>=0))
                                                                     e.preventDefault();
                                                             });
                                                         }
                                                        </script>
						</div>
							  
							  
							   <div class="form-group">
								<select name='school' required>
									<option value="" >--Select School--</option>
									<option value="nursing">School of Nursing</option>
									<option value="midwifery">School of Midwifery</option>
									<option value="medlab">School of Medical Laboratory Science</option>
								</select>
								</div>
							  <button type="submit" class="btn btn-default">Create Account</button>
						</form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<br/><br/><br/><br/>