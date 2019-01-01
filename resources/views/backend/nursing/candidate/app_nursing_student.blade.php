<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/css/font-awesome.min.css') }}" rel="stylesheet">

         <link href="{{asset('css/custom.css')}}" rel="stylesheet">

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Styles -->

</head>

<script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='http://10.71.184.6:8080/www/default/base.js'></script>
<style>
    .sticky {
        position:fixed;
        top:0;
    }
</style>

            <body style="background:#F7F7F7;">

    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form action="{{route('nursing_student_login_submit')}}" id="login_form" method="post" accept-charset="utf-8">
                      {{ csrf_field() }}
                        <h1>Nursing Student's Login</h1>
                        <div>
                            <label class="" >Student Username:<span class="required">*</span></label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Username" id="username" required="required"  />

                        </div>
                        <div> <label class="" >Student Password:<span class="required">*</span></label>
                            <input type="password" name="password" value="" class="form-control" placeholder="Password" id="password" required="required"  />


                        </div>
						<p>
          </p>

                        <div>
                            <input type="submit" value="Log in" class="btn btn-default submit login" required="required"  />
                            <a href="http://www.holyrosaryng.net/Welcome/create_account">Recover Password</a>
                            <!--a class="reset_pass" href="http://www.holyrosaryng.net/Candidate/forgot">Lost your password?</a-->
                        </div>
                        <div class="clearfix"></div>

                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>

        </div>
    </div>
            </body>
<script src="http://www.holyrosaryng.net/public/js/jquery-1.8.3.min.js" type="text/javascript"></script>
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
