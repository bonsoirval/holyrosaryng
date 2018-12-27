@extends('layouts.backend.medlab.app-medlab')

@section('content')
<style>
  table
  {
    border: 1px solid black;
  }

  th, td
  {
    border: 0px solid black;
  }

  .table th,
  .table td
  {
      border-top: none !important;
      border-left: none !important;
  }
</style>


<a onclick="window.print();" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Print</a>
<table class="table table-responsive">
    <thead>
        <tr><th colspan="3"><center>

          <img src="{{ URL::to("images/schools/medlab.png") }} "  center="" width="50" height="50"></center></th>
            	</tr>
                <tr><th colspan="3"><h2><center><b>HOLY ROSARY HOSPITAL, EMEKUKU, SCHOOL OF MEDLAB APPLICATION FORM</b></center></h2></th>
		</tr>
    </thead>
<tbody>
    <tr><td colspan="3"><h2><b><center>PHOTO CARD</center></b></h2></td></tr>
    <tr>
    <td colspan="2" width="20" align="left"><strong>PERSONAL INFORMATION<strong></strong></strong></td><td rowspan="6">
      <img src="{{ URL::to("images/candidates/medlab/$passport") }}" alt="Candidate Passport" width='70' lenght= '70' ></td></tr>
    <tr><td>STUDENT ID:</td><td>{{ Auth::user()->id }}</td></tr>
    <!--tr><td>EXAMINATION:</td><td>< ?php echo $user->id; ?></td></tr-->
    <tr><td>SURNAME:</td><td>{{ strtoupper(Auth::user()->name) }}</td></tr>
    <tr><td>GENDER</td><td>{{ strtoupper($user_profile['gender']) }}</td></tr>
    <tr><td>PHONE</td><td>{{ strtoupper(Auth::user()->phone) }}</td></tr>
    <tr><td>DATE OF BIRTH:</td><td>{{ $user_profile['dob'] }}</td></tr>
    <tr><td>STATE:</td><td>{{ strtoupper($origin_state) }}</td><td></td></tr>
    <tr><td>ADDRESS:</td><td colspan="2">{{ $address }}</td></tr>

    <!--tr><td colspan="2" width="20" align="left"><b>EDUATIONAL INFORMATION</b></td><td rowspan="6"></td></tr>
    <tr><td>INSTITUTION LAST ATTENDED</td><td></td></tr>
    <tr><td>HIGHEST CERTIFICATE OBTAINED</td><td>0</td></tr>
    <tr><td>NUMBER OF CREDITS AND ABOVE</td><td>0</td></tr>
    <tr><td>SCHOOL OF CHOICE</td><td>MEDLAB</td></tr>
    <tr><td>CARD SERIAL NUMBER</td><td>1807780246</td></tr-->

</tbody>

</table>
<br/>
<br/>
<br/>
<br/>

@endsection
