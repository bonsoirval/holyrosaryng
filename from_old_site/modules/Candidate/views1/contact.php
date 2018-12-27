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
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
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
            <img alt="Please upload you passport" src="<?php echo $passport; ?>" />

        
        </div>
         <div class="card-info"> <span class="card-title"><?php echo mb_strtoupper($name); ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Contact Address</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#next_kin" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Next of Kin</div>
            </button>
        </div>
        
    </div>

        <div class="well">
            <div class="tab-content">
                
                <div class="tab-pane fade in active" id="tab1">
                   
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
            <!-- passport upload section start-->
           
            
                <div class="tab-pane fade in" id="next_kin">
                   
                <div class="tab-pane fade in active" id="tab1">
                   
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
							<option value="niece">Niece</option>
							<option value="cousin">Cousin</option>
                            <option value="sister">Sister</option>
							<option value="aunt">Aunt</option>
							<option value="uncle">Uncle</option>
                            <option value="father">Father</option>
                            <option value="mother">Mother</option>
                            <option value="son">Son</option>
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
               


            <!-- passport upload section end -->
    </div>
    
    </div>
            
    <script lang='javascript' type='text/javascript' >

        $(document).ready(function(){
            //alert(2);
            $(function($) {
 
            // this script needs to be loaded on every page where an ajax POST may happen
            $.ajaxSetup({
                data: {
                    '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
                }
            });


            //add you code here
            $('#profile').submit(function (e){
                e.preventDefault();

                var email = $('#email').val();
                var curr_password = $('#curr_password').val();
                var new_password = $('#new_password').val();
                var conf_password = $('#conf_password').val();

                //alert(" current password : "+curr_password);
                if(curr_password != '')
                {
                    if(new_password =='')
                    {
                        alert("New Password cannot be empty!");
                        $('#new_password').focus();
                    }else if(conf_password == '')
                    {
                        alert("You must Confirm the New Password.");
                        $('#conf_password').focus();
                    }else if(conf_password != new_password){
                        alert("New Password Must be confirmed. Start all over please!");
                        $('#curr_password').val(''); //empty the form fields
                        $('#new_password').val('');
                        $('#conf_password').val('');

                        $('#curr_password').focus();

                        $('#conf_password').val() ='';
                    }else{
                        
                        //validation successful.
                        //continue with attempt with password change
                        $.ajax({
                            url:"<?php echo base_url(); ?>Staff/update_profile",
                            async: false,
                            type: "POST",
                            data: 
                            {
                                "email":email,
                                "curr_password":curr_password,
                                "new_password" :new_password,
                                "conf_password":conf_password,
                            },
                            ContentType: "html",
                            /*success: function(data) {
                                alert("Data : "+data); //
                                //window.location.href = "<?php echo base_url(); ?>applicant/Dashboard/education";
                            },*/
                            success: function(json)
                            {
                                try{        
                                    var obj = jQuery.parseJSON(json);

                                    //alert(obj['STATUS']);

                                    if(obj['STATUS'] == true)
                                    {
                                        alert("Password Update Successful");
                                        //window.location.href = "<?php echo base_url(); ?>"+obj['type']+"/index";
                                    }else if(obj['STATUS'] != true){
                                        alert("Password Update Failed");
                                    }
                                }catch(e) {     
                                    //var obj = jQuery.parseJSON(json);
                                    //alert(obj['STATUS']);

                                        alert('Exception while request..');
                                }
                            },
                        })
                    }
                }

                //alert("HI "+email);
            });

            });

         
            
        });

         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script> 

    