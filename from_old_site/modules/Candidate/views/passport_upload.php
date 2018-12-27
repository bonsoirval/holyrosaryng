
  <div class="well">
            <div class="tab-content">
                
                <div class="tab-pane fade in active" id="tab1">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h1>Candidate's Biodata</h1>
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
                    <input type='submit' id='passport_upload' name="passport_upload" class='btn-success' value='Upload Pix'/>
                        <!--        <div class="tab-pane fade in" id="tab3">
                                  <h3>This is tab 3</h3>
                                </div>-->
                <?php //echo form_close(); ?>
               
                </div>
            
            


            <!-- passport upload section end -->
    </div>
    
    </div>
                </div>
            </div>
  </div>
    <script lang='javascript' type='text/javascript' >
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

    