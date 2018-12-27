<?php 
    $user = $this->candidate->get_user();
    
    $profile = $this->candidate->get_profile();
    $next_of_kin = $this->candidate->get_next_kin();
    $olevel1 = $this->candidate->get_olevel();
    $olevel2 = $this->candidate->get_olevel(2);
    $employment = $this->candidate->get_employment();
    $professional = $this->candidate->get_professional();
?>

<style>
    table{
    border: 1px solid black;
}
    th, td {
    border: 0px solid black;
}

.table th, .table td { 
        border-top: none !important;
        border-left: none !important;
    }
</style>


<table class="table table-responsive">
    <thead>
        <tr><th colspan=3><center><img width="50" height="50" src="<?php echo base_url("public/images/schools/").'/'.$user->school.'.png'; ?>"</center></th>
            	</tr>
                <tr><th colspan=3><h2><center><b>HOLY ROSARY HOSPITAL, EMEKUKU, SCHOOL OF <?php echo strtoupper($user->school); ?> APPLICATION FORM</b></center></h2></th>
		</tr>
    </thead>
<tbody>
    <tr><td colspan=3><h2><b><center>PHOTO CARD</center></b></h2></td></tr>
    <tr><td width ="20" align="left" colspan="2" ><strong>PERSONAL INFORMATION<strong></td><td rowspan="6"><img src="<?php echo $passport; ?>" alt="Avatar"></td></tr>
    <tr><td>STUDENT ID:</td><td><?php echo $user->id; ?></td></tr>
    <!--tr><td>EXAMINATION:</td><td>< ?php echo $user->id; ?></td></tr-->
    <tr><td>SURNAME:</td><td><?php echo strtoupper($user->last_name); ?></td></tr>
    <tr><td>OTHER NAMES</td><td><?php echo strtoupper($user->first_name); ?></td></tr>
    <tr><td>GENDER</td><td><?php echo strtoupper($profile->gender); ?></td></tr>
    <tr><td>DATE OF BIRTH:</td><td><?php echo $profile->dob; ?></td></tr>
    <tr><td>STATE:</td><td><?php echo strtoupper($this->candidate->get_state('states',$profile->origin_state)); ?></td><td></td></tr>
    <tr><td>ADDRESS:</td><td colspan="2"><?php echo strtoupper($this->candidate->get_contact()); ?></td></tr>
    <tr><td width ="20" align="left" colspan="2"><b>EDUATIONAL INFORMATION</b></td><td rowspan="6"></td></tr>
    <tr><td>INSTITUTION LAST ATTENDED</td><td><?php echo strtoupper($olevel1->exam_center); ?></td></tr>
    <tr><td>HIGHEST CERTIFICATE OBTAINED</td><td><?php echo strtoupper($olevel1->examination); ?></td></tr>
    <tr><td>NUMBER OF CREDITS AND ABOVE</td><td><?php echo $this->candidate->more_than_c(); ?></td></tr>
    <tr><td>SCHOOL OF CHOICE</td><td><?php echo strtoupper($user->school); ?></td></tr>
    <tr><td>CARD SERIAL NUMBER</td><td><?php echo $user->username; ?></td></tr>
</tbody>  
<a onclick="window.print();" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Print</a>
<table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
