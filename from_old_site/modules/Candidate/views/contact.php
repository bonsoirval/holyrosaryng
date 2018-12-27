<?php 

    $profile = $this->candidate->get_profile();
?>
        <div class="well">
            <div class="tab-content">
                
                <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Candidate's Contact Details</h1>
                                        <div class="clearfix"></div>
                                        
                                    </div>
                                    
                       
                <?php 
                    $data = array(
                            'id' => 'contact',
                            'name' => 'contact'
                        );
                    echo form_open("Candidate/contact", $data); 
                ?>   
                    <div class="form-group">
                        <label for="realname">Contact Address</label>
                        <?php 
                            $data = array(
                                //'value'=> mb_strtoupper($name), //$name, //'Real Name', 
                                //'readonly'=>'readonly', 
                                'name' => 'contact_add',
                                'required' => 'required',
                                'type' => 'text',
                                'id' => 'contact_add',
                                'class' => 'form-control',
                            );
                            echo form_input($data);
                        ?>
                    </div>
                  
                    <div class="form-group">
                        <label for="email">Permanent Address</label>
                        <?php 
                            $data = array(
                                'id' => 'permanent_add',
                                //'value' => $email,
                                'name' => 'permanent_add',
                                'required' => 'required',
                                'type' => 'permanent_add',
                                'class' => 'form-control',
                            );
                            echo form_input($data);
                        ?>
                    </div>
                   
                    <div class="form-group">
                        
                        <input width="100" id='sub_profile' class="form-control btn-success" type="submit" value="Send Now" />
                    </div>
                        
                    </form>
                                </div>
                            </div>

                       
            <!-- /page content -->
<div class="clearfix"></div>
   
                
            <!-- passport upload section end -->
    </div>
    
    </div>
            
        </div>
