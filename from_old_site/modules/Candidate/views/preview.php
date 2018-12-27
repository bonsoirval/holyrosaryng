<?php 

    $profile = $this->candidate->get_profile();
    $next_of_kin = $this->candidate->get_next_kin();
    $olevel1 = $this->candidate->get_olevel();
    $olevel2 = $this->candidate->get_olevel(2);
    $employment = $this->candidate->get_employment();
    $professional = $this->candidate->get_professional();
?>

<!-- Load jQuery from Google's CDN -->
    <!-- Load jQuery UI CSS  -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    
    <!-- Load jQuery JS -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Load jQuery UI Main JS  -->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
    <style>
        h1 {
            font-family: Helvetica;
            font-weight: 100;
          }
          body {
            color:#333;
            text-align:center;
          }
    </style>
    
    
    
<style>
    /* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}


</style>
<!-- image upload preview start-->
<!--link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" /-->
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<!-- image upload preview end-->

<div class="col-lg-12 col-sm-12">
<!--    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
             http://lorempixel.com/850/280/people/9/ 
        </div>
        <div class="useravatar">
            <img alt="Please upload you passport" src="< ?php echo $passport; ?>" /> public/images/candidate/".$this->session->user_id."$image"; //base_url(); ?
        </div>
        <div class="card-info"> <span class="card-title">< ?php echo mb_strtoupper($name);?></span>

        </div>
    </div>-->
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Preview Profile</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#contact" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Preview Contact</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#next_of_kin" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Preview Next of Kin</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#olevel1" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Preview Olevel</div>
            </button>
        </div>   
       
    </div>

        <div class="well">
            <div class="tab-content">
                
                <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Profile Final Preview</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <form id="profile" method='post' action="<?php echo base_url(); ?>Candidate/preview/" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php echo validation_errors(); ?>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Gender: <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?php 
                                                    $data = array(
                                                        //'value'=> mb_strtoupper($name), //$name, //'Real Name', 
                                                        'readonly'=>'readonly', 
                                                        'name' => 'surname',
                                                        'type' => 'text',
                                                        'id' => 'surname',
                                                        'value' => $profile->gender,
                                                        'class' => 'form-control',
                                                    );
                                                    echo form_input($data);
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?php 
                                                    $data = array(
                                                        //'value'=> mb_strtoupper($name), //$name, //'Real Name', 
                                                        'readonly'=>'readonly', 
                                                        'name' => 'othernames',
                                                        'type' => 'text',
                                                        'value' => $profile->dob,
                                                        'id' => 'othernames',
                                                        'class' => 'form-control',
                                                    );
                                                    echo form_input($data);
                                                ?>
                                                
                                            </div>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">Place of Birth<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <?php 
                                                    $data = array(
                                                        'readonly' => 'readonly',
                                                        'id' => 'birth_town',
                                                        'placeholder' => 'Enter Town of Birth',
                                                        'name' => 'birth_town',
                                                        'type' => 'birth_town',
                                                        'value' => $profile->birth_town,
                                                        'class' => 'form-control',
                                                        'placeholder' => 'dd/mm/yyyy',
                                                    );
                                                    echo form_input($data);
                                                ?>
                                                
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">LGA Of Origin<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <?php 
                                                    $data = array(
                                                        'readonly' => 'readonly',
                                                        'id' => 'birth_town',
                                                        'placeholder' => 'Enter Town of Birth',
                                                        'name' => 'birth_town',
                                                        'type' => 'birth_town',
                                                        'value' => $profile->lga,
                                                        'class' => 'form-control',
                                                        'placeholder' => 'dd/mm/yyyy',
                                                    );
                                                    echo form_input($data);
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">State Of Origin<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <?php 
                                                    $data = array(
                                                        'readonly' => 'readonly',
                                                        'value' => $this->candidate->get_state('states',$profile->origin_state),
                                                        'class' => 'form-control',
                                                        
                                                    );
                                                    echo form_input($data);
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">Country Of Origin<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <?php 
                                                    $data = array(
                                                        'readonly' => 'readonly',
                                                        'value' => $this->candidate->get_state('countries',$profile->nationality),
                                                        'class' => 'form-control',
                                                        
                                                    );
                                                    echo form_input($data);
                                                ?>
                                                
                                            </div>
                                        </div>
                                        </form>
                                </div>
                            </div>

                       
            <!-- /page content -->

   
    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>  
            <div class="clearfix"></div>
                
                </div>
            <!-- passport upload section start-->
           
                <div class="tab-pane fade in" id="contact">
                     <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Contact Final Preview</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <form id="profile" method='post' action="<?php echo base_url(); ?>Candidate/profile" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php echo validation_errors(); ?>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Contact Address <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?php 
                                                    $data = array(
                                                        //'value'=> mb_strtoupper($name), //$name, //'Real Name', 
                                                        'readonly'=>'readonly',
                                                        'type' => 'text',
                                                        'rows'        => '5',
                                                        'cols'        => '5',
                                                        'value' =>  $this->candidate->get_contact(),
                                                        'class' => 'form-control',
                                                    );
                                                    echo form_textarea($data);
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Permanent Address<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?php 
                                                    $data = array(
                                                        //'value'=> mb_strtoupper($name), //$name, //'Real Name', 
                                                        'readonly'=>'readonly', 
                                                        'value' =>  $this->candidate->get_contact('permanent_address'),
                                                        'type' => 'text',
                                                        'id' => 'othernames',
                                                        'rows'        => '5',
                                                        'cols'        => '5',
                                                        'class' => 'form-control',
                                                    );
                                                    echo form_textarea($data);
                                                ?>
                                                
                                            </div>
                                        </div>
             
                                        </form>
                                </div>
                            </div>

                       
            <!-- /page content -->

   
    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>  
            <div class="clearfix"></div>
                
                </div>        
               
                </div>
             
            
           
                <div class="tab-pane fade in" id="next_of_kin">
                     <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Next of Kin Final Preview</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <form id="profile" method='post' action="<?php echo base_url(); ?>Candidate/profile" data-parsley-validate class="form-horizontal form-label-left">
                                        <?php echo validation_errors(); ?>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Next of Kin Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?php 
                                                    $data = array(
                                                        //'value'=> mb_strtoupper($name), //$name, //'Real Name', 
                                                        'readonly'=>'readonly', 
                                                        'value' => $next_of_kin->name,
                                                        'type' => 'text',
                                                        'id' => 'surname',
                                                        'class' => 'form-control',
                                                    );
                                                    echo form_input($data);
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Next of Kin Address<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?php 
                                                    $data = array(
                                                        //'value'=> mb_strtoupper($name), //$name, //'Real Name', 
                                                        'readonly'=>'readonly', 
                                                        'value' => $next_of_kin->nextkin_address,
                                                        'type' => 'text',
                                                        'id' => 'othernames',
                                                        'class' => 'form-control',
                                                    );
                                                    echo form_input($data);
                                                ?>
                                                
                                            </div>
                                        </div>
                                     
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">Next of Kin Phone<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <?php 
                                                    $data = array(
                                                        'readonly'=>'readonly', 
                                                        'id' => 'birth_town',
                                                        'placeholder' => 'Enter Town of Birth',
                                                        'value' => $next_of_kin->nextkin_phone,
                                                        'type' => 'birth_town',
                                                 
                                                        'class' => 'form-control',
                                                
                                                    );
                                                    echo form_input($data);
                                                ?>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="town_of_birth">Next of Kin Relationship<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <?php 
                                                    $data = array(
                                                        'readonly'=>'readonly', 
                                                        'id' => 'birth_town',
                                                        'placeholder' => 'Enter Town of Birth',
                                                        'value' => $next_of_kin->relationship,
                                                        'type' => 'birth_town',
                                                        
                                                        'class' => 'form-control',
                                                    
                                                    );
                                                    echo form_input($data);
                                                ?>
                                                
                                            </div>
                                        </div>
                                   
                                        </form>
                                </div>
                            </div>

                       
            <!-- /page content -->

   
    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>  
            <div class="clearfix"></div>
                
                </div>        
               
                </div>
             
           
           
            
            <div class="tab-pane fade in" id="olevel1">
                     <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Olevel Final Preview</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <form id="profile" method='post' action="<?php echo base_url(); ?>Candidate/profile" data-parsley-validate class="form-horizontal form-label-left">
                                            <table class="table table-bordered">
                                         <thead>
                                           <tr>
                                             <th></th>
                                             <th>FIRST SITTING GRADE</th>
                                             <th>SECOND SITTING GRADE</th>

                                           </tr>
                                         </thead>
                                         <tbody>
                                         <tr>
                                           <td>Examination</td>
                                           <td><?php echo $olevel1->examination; ?></td>
                                           <td><?php echo $olevel2->examination; ?></td>
                                        </tr>
                                         <tr>
                                           <td>Examination Number</td>
                                           <td><?php echo $olevel1->exam_number; ?></td>
                                           <td><?php echo $olevel2->exam_number; ?></td>
                                         </tr>
                                         <tr>
                                           <td>Examination Year</td>
                                           <td><?php echo $olevel1->exam_year; ?></td>
                                           <td><?php echo $olevel2->exam_year; ?></td>
                                         </tr>
                                         <tr>
                                           <td>English Language</td>
                                           <td><?php echo $olevel1->english; ?></td>
                                           <td><?php echo $olevel2->english; ?></td>
                                         </tr>
                                         <tr>
                                           <td>Mathematics</td>
                                           <td><?php echo $olevel1->mathematics; ?></td>
                                           <td><?php echo $olevel2->mathematics; ?></td>
                                         </tr>
                                         <tr>
                                           <td>Physics</td>
                                           <td><?php echo $olevel1->physics; ?></td>
                                           <td><?php echo $olevel2->physics; ?></td>
                                         </tr>
                                         <tr>
                                           <td>Chemistry</td>
                                           <td><?php echo $olevel1->chemistry; ?></td>
                                           <td><?php echo $olevel2->chemistry; ?></td>
                                         </tr>
                                         <tr>
                                           <td>Biology</td>
                                           <td><?php echo $olevel1->biology; ?></td>
                                           <td><?php echo $olevel2->biology; ?></td>
                                         </tr>
                                         </tbody>
                                       </table>          
                                    </form>
                                </div>
                            </div>

                       
            <!-- /page content -->

   
    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>  
            <div class="clearfix"></div>
                
                </div>        
               
                </div>
        
            <div class="tab-pane fade in" id="employment">
                     <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Empployment Final Preview</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                      <form id="profile" method='post' action="<?php echo base_url(); ?>Candidate/profile" data-parsley-validate class="form-horizontal form-label-left">
                                            <table class="table table-bordered">
                                         <thead>
                                           <tr>
                                             <th>EMPLOYER</th>
                                             <th>ADDRESS</th>
                                             <th>POSITION HELD</th>
                                             <th>PHONE</th>

                                           </tr>
                                         </thead>
                                         <tbody>
                                         <tr>
                                           <td><?php echo $employment->employer; ?></td>
                                           <td><?php echo $employment->address; ?></td>
                                           <td><?php echo $employment->position_held; ?></td>
                                           <td><?php echo $employment->phone; ?></td>
                                        </tr>
                                    
                                         </tbody>
                                       </table>          
                                    </form>
                                </div>
                            </div>

                       
            <!-- /page content -->

   
    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>  
            <div class="clearfix"></div>
                
                </div>        
               
                </div>
            <div class="tab-pane fade in" id="professional">
                     <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Professional Final Preview</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                      <form id="profile" method='post' action="<?php echo base_url(); ?>Candidate/profile" data-parsley-validate class="form-horizontal form-label-left">
                                            <table class="table table-bordered">
                                         <thead>
                                           <tr>
                                             <th>SCHOOL</th>
                                             <th>YEAR</th>
                                             <th>QUALIFICATION</th>

                                           </tr>
                                         </thead>
                                         <tbody>
                                         <tr>
                                           <td><?php echo $professional->school1; ?></td>
                                           <td><?php echo $professional->year1; ?></td>
                                           <td><?php echo $professional->qualification1; ?></td>
                                        </tr>
                                         <tr>
                                           <td><?php echo $professional->school2; ?></td>
                                           <td><?php echo $professional->year2;?></td>
                                           <td><?php echo $professional->qualification2; ?></td>
                                        </tr>
                                         <tr>
                                           <td><?php echo $professional->school3; ?></td>
                                           <td><?php echo $professional->year3; ?></td>
                                           <td><?php echo $professional->qualification3; ?></td>
                                        </tr>
                                         <tr>
                                           <td><?php echo $professional->school4; ?></td>
                                           <td><?php echo $professional->year4; ?></td>
                                           <td><?php echo $professional->qualification4; ?></td>
                                        </tr>
                                        
                                         </tbody>
                                       </table>          
                                    </form>
                                </div>
                            </div>

                       
            <!-- /page content -->

   
    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>  
            <div class="clearfix"></div>
                
                </div>        
               
                </div>
            <a href="<?php echo base_url("Candidate/submit"); ?>" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Final Submission</a>
<!-- daterangepicker -->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/bootstrap/daterangepicker/js/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/bootstrap/daterangepicker/js/daterangepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/bootstrap/daterangepicker/js/date.js"></script>


    <script lang='javascript' type='text/javascript' >
        
        $(document).ready(function(){
            $('#dob').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });


            /*image preview start*/
            $("#imgInp").change(function(){
                readURL(this);
            });

            /*image preview end*/
        });
        

         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#passport')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        
        
        <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
</script> 
    <script lang="javascript" type="text/javascript">
                                            
        $(document).ready(function () {
            
            //alert("Hi");
            ajax_nationality();
            //ajax_states();

            $("select#nationality").change(function(){
                  ajax_states();
              });

            $("select#origin_state").change(function(){
                  //alert("hi"); //
                  ajax_cities();
              });
        });

        function ajax_nationality() {
           
          //$('.show-veg').click(function () {
          //alert("Countries");
            $.ajax({
              url: "<?php echo base_url(); ?>Candidate/nationality",
              async: false,
              type: "POST",
              //data: {},
              dataType: "html",
              success: function(data) {
                 // alert(data);
                $('#nationality').html(data);
              }
            })
          //});

        }

        function ajax_states() { 
            var country_id = $("#nationality").val();
            //$()
            $.ajax({
              url: "<?php echo base_url(); ?>Candidate/state",
              //async: false,
              type: "POST",
              data: 
                {
                    'country_id':country_id, 	
                },
            ContentType: "application/json",

             // dataType: "html",
              success: function(data) {
                 // alert(data);
                $('#origin_state').html(data);
              }
            })
          //});

        }
</script>

