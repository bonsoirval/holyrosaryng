<style>
table {border:1px solid}
</style>

<center>
	<table class="table">
		<thead>
		  <tr>
		  <td><?php echo date('Y-m-d  H:i:s'); ?></td>
		  <td><img src="<?php echo base_url().'public/images/schools/nursing.png'; ?>"/></td>
		  <td>Holy Rosary Hospital Emekuku</td>
		  </tr>
		</thead>
		<tbody>
			<tr>
				<td colspan='3'><h2><center>Holy Rosary School of Nursing</center></h2></td>
			</tr>
			<tr>
				<td colspan="3"><h3><hr/>Personal Information<hr/></h3></td>
			</tr>
		  <tr>
			<td><b>Name : </b></td>
			<td><?php echo $name; ?></td>
			
		  </tr>      
		  <tr class="success">
			<td><b>Exam Number : </b></td>
			<td><?php echo $exam_num; ?></td>
			
		  </tr>
		  
		  <tr>
		  
			<td colspan='3'><h3><br/><hr/>Performance<hr/></h3></td>
		  </tr>
		   <tr>
			<td><b>Total Grade : </b></td>
			<td><?php echo $total_grade; ?></td>
		  </tr>
		 
		  <tr class="danger">
			<td><b>Remark : </b></td>
			<td><?php echo "Passed"; ?></td>
			
		  </tr>
		  
		  
		  <tr>
			<td colspan= '2'><input type="button" value="Print" onclick="printMe()">&nbsp;<a href = "<?php echo base_url(); ?>Result/interview/admission_letter/<?php echo $id; ?>" class = 'btn btn-success' target = '_blank' >Print Admission Letter</a></td>
			
		  </tr>
		</tbody>
	  </table>
	<?php echo "Student Key : ".md5(date('Y-m-d  H:i:s')); ?><br/>
<b><center>FEE PAYABLE BY PTS STUDENTS</center></b>
	<center>Female 	-	₦331,500  ,   	Male	-	₦266,000</center>
	<center><b>BANK:</b> &nbsp;&nbsp;UBA<br/><b>ACCOUNT NUMBER:</b>&nbsp;&nbsp;1000271078 <br/><b>ACCOUNT NAME:</b>&nbsp;&nbsp;HOLY ROSARY HOSPITAL EMEKUKU 
	<br/></center>

</center>
<script>
function printMe() {
    window.print()
}
</script>

