</body>
<script src="<?php echo base_url(); ?>public/js/jquery-1.8.3.min.js" type="text/javascript"></script> 
 <script type="text/javascript" lang="javascript">
       /* $(document).ready(function(){
            $(function($) {
            // this script needs to be loaded on every page where an ajax POST may happen
            $.ajaxSetup({
                data: {
                    '< ?php echo $this->security->get_csrf_token_name(); ?>' : '< ?php echo $this->security->get_csrf_hash(); ?>'
                }
            });


             // now write your ajax script
            $("#login_form").submit(function (e){
                
                //prevent form submit throught the form action
                e.preventDefault();
               
                var username = $('#username').val();
                var password = $('#password').val();
                var csrf_lisgrey = $("input[name=csrf_lisgrey]").val();
               
                $.ajax({
                    url: "< ?php echo base_url(); ?>Candidate/login",
                    type: "POST",
                    data: 
                    {
                      //"username":username,
                      "identity":username,
                       "password":password,
                       "csrf_lisgrey":csrf_lisgrey,
                    },
                    ContentType: "json",
                     success: function(json)
                    {
                        try{		
                                var obj = jQuery.parseJSON(json);
                               if(obj['STATUS'] == true)
                                {
                                    alert("User found");
                                    window.location.href = "< ?php echo base_url(); ?>"+obj['type']+"/index";
                                }else if(obj['STATUS'] != true){
                                    alert("User Not found or incorrect username and password");
                                }
                        }catch(e) {		
                            //var obj = jQuery.parseJSON(json);
                            //alert(obj['STATUS']);

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
        */
    </script>
</html>