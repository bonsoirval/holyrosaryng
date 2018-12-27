<?php 

    $profile = $this->candidate->get_profile();
?>
        <div class="well">
            <div class="tab-content">
                
                <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Candidate's Next of Kin Details</h1>
                                        <div class="clearfix"></div>
                                        
                                    </div>
                                    
                                     <?php 
                    $data = array(
                            'id' => 'next_kin',
                            'name' => 'next_kin'
                        );
                    echo form_open("Candidate/next_kin", $data); 
                ?>   
                    <div class="form-group">
                        <label for="realname">Next Kin Name</label>
                        <?php 
                            $data = array(
                                //'value'=> mb_strtoupper($name), //$name, //'Real Name', 
                                //'readonly'=>'readonly', 
                                'name' => 'next_kin_name',
                                'required' => 'required',
                                'type' => 'text',
                                'id' => 'next_kin_name',
                                'placeholder' => 'Next of Kin name',
                                'class' => 'form-control',
                            );
                            echo form_input($data);
                        ?>
                    </div>
                  
                    <div class="form-group">
                        <label for="email">Next Kin Address</label>
                        <?php 
                            $data = array(
                                'id' => 'next_kin_address',
                                //'value' => $email,
                                'name' => 'next_kin_address',
                                'required' => 'required',
                                'type' => 'text',
                                'placeholder' => 'Next of Kin address',
                                'class' => 'form-control',
                            );
                            echo form_input($data);
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Next Kin Phone</label>
                        <?php 
                            $data = array(
                                'id' => 'next_kin_phone',
                                //'value' => $email,
                                'name' => 'next_kin_phone',
                                'required' => 'required',
                                'placeholder' => 'Next of Kin active phone number',
                                'type' => 'text',
                                'class' => 'form-control',
                            );
                            echo form_input($data);
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Next Kin Relationship</label>
                        <select class="form-control" name='next_kin_relationship'>
                            <option value="">--Select Next of Kin Relationship</option>
                            <option value="brother">Brother</option>
                            <option value="sister">Sister</option>
                            <option value="father">Father</option>
                            <option value="mother">Mother</option>
                            <option value="son">Son</option>
                            <option value="aunt">Aunt</option>
                            <option value="uncle">Uncle</option>
                            <option value="cousin">Cousin</option>
                            <option value="nephew">Nephew</option>
                            <option value="daugther">Daughter</option>
                            <option value="Husband">Husband</option>
                            <option value="wife">Wife</option>
                            
                        </select>
                    </div>
                   
                    <div class="form-group">
                        
                        <input width="100" id='sub_profile' class="form-control btn-success" type="submit" value="Send Now" />
                    </div>
                        
                                </form> 
                                </div>
                            </div>

                       
            <!-- /page content -->
<div class="clearfix"></div>
   
    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>  
            <div class="clearfix"></div>
                
                </div>
            <!-- passport upload section start-->
           
            
                <div class="tab-pane fade in" id="passport">
                    <?php //echo form_open('staff/ImageUpload.php'); 
                        $attributes = array('name' => 'passport_upload_form', 'id' => 'passport_upload_form');
                        echo form_open_multipart('Candidate/passport_upload', $attributes);
                    ?>


                    
                        <div class="form-group">
                        <div class="form-group">
                            <div class="form-group">

                                <label for="passportupload">Passport Upload</label>
                                <!--p><input name="image_name" id="image_name" readonly="readonly" type="file" /></p>
                                <p><input name="image_upload" value="Upload Image" type="submit" /></p-->

                                <input id="passport" name="passport" type='file' onchange="readURL(this);" />
                                <img id="blah" src="#" alt="your image" />

                            </div>
                        </div>
                    </div>
                    <input type='submit' id='passport_upload' name="passport_upload" class='btn-success' value='Upload Passport'/>
                        <!--        <div class="tab-pane fade in" id="tab3">
                                  <h3>This is tab 3</h3>
                                </div>-->
                <?php echo form_close(); ?>
                        
               
                </div>
            
            
            <div id="custom_notifications" class="custom-notifications dsp_none">
                <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
                </ul>
                <div class="clearfix"></div>
                <div id="notif-group" class="tabbed_notifications"></div>
            </div>  
            <div class="clearfix"></div>
                
            <!-- passport upload section end -->
    </div>
    
    </div>























