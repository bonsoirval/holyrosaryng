@extends('layouts.backend.admin.nursing.nursing_admin_login')

@section('content')
<div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
        <div id="login" class="animate form">
            <section class="login_content">
                <form action="{{route('nursing_admin_login_submit')}}" id="login_form" method="post" accept-charset="utf-8">
                  {{ csrf_field() }}
                    <h1>Nursing Admin's Login</h1>
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


@endsection
