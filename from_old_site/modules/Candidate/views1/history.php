<?php 

    $profile = $this->candidate->get_profile();
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
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="Please upload you passport" src="<?php echo $passport; ?>" /> <!--public/images/candidate/".$this->session->user_id."$image"; //base_url(); ?-->
        </div>
        <div class="card-info"> <span class="card-title"><?php echo mb_strtoupper($name);?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#employment" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Employment</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#education" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Educational Qualification</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#change_password" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Professional Qualification</div>
            </button>
        </div>
    </div>

        <div class="well">
            <div class="tab-content">
                
                <div class="tab-pane fade in active" id="employment">
                   
                <?php 
                    $data = array(
                            'id' => 'profile',
                            'name' => 'profile'
                        );
                    echo form_open("Candidate/history/1", $data); 
                ?>   
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="realname">Present Employer:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php 
                            $data = array(
                                //'value'=> mb_strtoupper($name), //$name, //'Real Name', 
                                //'readonly'=>'readonly', 
                                'name' => 'employer',
                                'type' => 'text',
                                'id' => 'employer',
                                'required' => 'required',
                                'placeholder' => 'Enter Your Pressent Employer',
                                'class' => 'form-control',
                            );
                            echo form_input($data);
                        ?>
                    </div>
                    </div>
                    <div class="clearfix"></div>
                    <br/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Employer's Address:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php 
                            $data = array(
                                'id' => 'emp_address',
                                //'value' => $email,
                                'name' => 'emp_address',
                                'required' => 'required',
                                'type' => 'text',
                                'placeholder' => 'Enter Your Employer\'s Address',
                                'class' => 'form-control',
                            );
                            echo form_input($data);
                        ?>
                    </div>
                    </div>
                    <div class="clearfix"></div>
                    <br/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Position Held:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php 
                            $data = array(
                                'id' => 'position',
                                'placeholder' => 'Enter Your Present Position',
                                'name' => 'position',
                                'type' => 'text',
                                'required' => 'required',
                                'class' => 'form-control',
                            );
                            echo form_input($data);
                        ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <br/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Employer's Phone:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php 
                            $data = array(
                                'id' => 'emp_phone',
                                'placeholder' => 'Enter Employer\'s Phone',
                                'name' => 'emp_phone',
                                'type' => 'text',
                                'required' => 'required',
                                'class' => 'form-control',
                            );
                            echo form_input($data);
                        ?>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                   <div class="form-group">
                        
                        <input width="100" id='sub_profile' class="form-control btn-success" type="submit" value="Send Now" />
                    </div>
                        
                    </form>
                </div>
            <!-- passport upload section start-->
           
            
                <div class="tab-pane fade in" id="education">
                    <form action='<?php echo base_url("Candidate/history/2"); ?>' method="post" name="education">
                    <table class="table table-bordered" id="education">
                    <thead> 
                        <tr>
<!--                                                <th>SN</th>-->
                            <th>SCHOOL ATTENDED</th>
                            <th>YEAR</th>
                            <th>QUALIFICATION</th>
                            <!--th>DATE</th-->
                        </tr>
                    </thead>
                    <tbody>
                        <tr id='row1'>
                            <td><input name="edu11" type="text" class="form-control input1" required="required"/></td>
                            <td><input name="edu12" type="text" class="form-control input2" required="required"/></td>
                            <td><input name="edu13" type="text" class="form-control input" required="required"/></td>
                            
                        </tr>
                        <tr id="row2">
                            <td><input name="edu21" type="text" class="form-control input1" required="required" /></td>
                            <td><input name="edu22" type="text" class="form-control input2" required="required" /></td>
                            <td><input name="edu23" type="text" class="form-control input" required="required" /></td>
                        </tr>
                        <tr  id="row3">
                            <td><input name="edu31" type="text" class="form-control input1" required="required" /></td>
                            <td><input name="edu32" type="text" class="form-control input2" required="required" /></td>
                            <td><input name="edu33" type="text" class="form-control input3" required="required" /></td>
                        
                        </tr>
                        <tr  id="row4">
                            <td><input name="edu41" type="text" class="form-control input1" required="required" /></td>
                            <td><input name="edu42" type="text" class="form-control input2" required="required" /></td>
                            <td><input name="edu43" type="text" class="form-control input3" required="required" /></td>
                        
                        </tr>
                    </tbody>
                </table>
                <center>
                    <div>
                        <button id="save" class="btn-app btn-success">Save and Continue</button>
                    </div>
                </center>
                </form>
                </div>
                <div class="tab-pane fade in" id="change_password">
                    <form action='<?php echo base_url("Candidate/history/3"); ?>' method="post" name="education">
                    <table class="table table-bordered" id="education">
                    <thead> 
                        <tr>
<!--                                                <th>SN</th>-->
                            <th>SCHOOL ATTENDED</th>
                            <th>YEAR</th>
                            <th>QUALIFICATION</th>
                            <!--th>DATE</th-->
                        </tr>
                    </thead>
                    <tbody>
                        <tr id='row1'>
                            <td><input name="edu11" type="text" class="form-control input1" required="required"/></td>
                            <td><input name="edu12" type="text" class="form-control input2" required="required"/></td>
                            <td><input name="edu13" type="text" class="form-control input" required="required"/></td>
                            
                        </tr>
                        <tr id="row2">
                            <td><input name="edu21" type="text" class="form-control input1" required="required" /></td>
                            <td><input name="edu22" type="text" class="form-control input2" required="required" /></td>
                            <td><input name="edu23" type="text" class="form-control input" required="required" /></td>
                        </tr>
                        <tr  id="row3">
                            <td><input name="edu31" type="text" class="form-control input1" required="required" /></td>
                            <td><input name="edu32" type="text" class="form-control input2" required="required" /></td>
                            <td><input name="edu33" type="text" class="form-control input3" required="required" /></td>
                        
                        </tr>
                        <tr  id="row4">
                            <td><input name="edu41" type="text" class="form-control input1" required="required" /></td>
                            <td><input name="edu42" type="text" class="form-control input2" required="required" /></td>
                            <td><input name="edu43" type="text" class="form-control input3" required="required" /></td>
                        
                        </tr>
                    </tbody>
                </table>
                <center>
                    <div>
                        <button id="save" class="btn-app btn-success">Save and Continue</button>
                    </div>
                </center>
                </form>
               
                </div>
            
            


            <!-- passport upload section end -->
    </div>
    
    </div>
     