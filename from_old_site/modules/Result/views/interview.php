
			<?php 
				
				$data = array(
					'class' => 'form-horizontal form-label-left'
				);
				echo form_open('Result/interview/check', $data); 
			?>
			
		<br/><br/>
                                       
                                        <div class="form-group">
                                            <?php 
												$data = array(
													'class' => 'control-label col-md-3 col-sm-3 col-xs-12',
												);
												echo form_label('Exam Number', 'exam_number', $data);
												// Would produce:  <label for="username">What is your Name</label>
											?>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?php 
													$data = array(
														'id' => 'exam_number',
														'name' => 'exam_number',
														'required' => 'required',
														'placeholder' => 'Enter your student ID here',
														'class' => 'form-control col-md-7 col-xs-12',
														'required' => 'required',
														'type' => 'number',
													);
													echo form_input($data); 
												?>
												
                                            </div>
                                        </div>
										<div class="form-group">
                                            <?php 
												$data = array(
													'class' => 'control-label col-md-3 col-sm-3 col-xs-12',
												);
												echo form_label('Phone Number', 'phone', $data);
												// Would produce:  <label for="username">What is your Name</label>
											?>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?php 
													$data = array(
														'id' => 'phone',
														'name' => 'phone',
														'required' => 'required',
														'placeholder' => 'Enter your scratch card serial number here',
														'class' => 'form-control col-md-7 col-xs-12',
														'type' => 'number',
													);
													echo form_input($data); 
												?>
												
                                            </div>
                                        </div>
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
												<?php 
													$data = array('type'=> 'submit', 'class' => 'btn btn-primary', 'content' => 'Cancel'); 
													echo form_button($data);
												?>
												<?php 
													$data = array('type' => 'submit', 'class' => 'btn btn-success', 'content' => 'Check Result');
													echo form_button($data);
												?>
												
                                            </div>
                                        </div>

                                    </form>
                                   