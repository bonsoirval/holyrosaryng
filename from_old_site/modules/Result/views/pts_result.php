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
                            <td colspan='3'><h2><center>Holy Rosary School of Nursing (<?php echo strtoupper($this->session->school); ?>)</center></h2></td>
			</tr>
			<tr>
				<td colspan="3"><h3><hr/>Personal Information<hr/></h3></td>
			</tr>
		  <tr>
			<td><b>Name : </b></td>
			<td><?php echo $result->name; ?></td>
			
		  </tr>      
		  <tr class="success">
			<td><b>Exam Number : </b></td>
			<td><?php echo $result->user_id; ?></td>
			
		  </tr>
		  
		  <tr>
		  
			<td colspan='3'><h3><br/><hr/>Performance<hr/></h3></td>
		  </tr>
		   <tr>
			<td><b>Score : </b></td>
			<td><?php echo $result->total; ?></td>
		  </tr>
		 
		  <tr class="danger">
			<td><b>Remark : </b></td>
			<td><?php echo $result->remark; ?></td>
			
		  </tr>
		  
		  
		  <tr>
			<td colspan= '2'><input type="button" value="Print" onclick="printMe()"></td>
		  </tr>
		</tbody>
	  </table>
	<?php echo "Student Key : ".md5(date('Y-m-d  H:i:s')); ?><br/>
        <?php
        if($result->remark == 'PASS')
       
            echo "NOTE";
        ?>
        <table>
            <tr>
                <td>ITEM</td><td>VALUE</td>
                
            </tr>
            <tr><td colspan="2"><b>Tuition and other fees</b></td></tr>
            <tr><td>Male : </td><td>N145 000.00</td></tr>
            <tr><td>Female : </td><td>N169 000.00</td></tr>
            
            <tr><td colspan="2"><b>Payment Details</b></td></tr>
            <tr><td>Acount Name : </td><td>Holy Rosary Hospital Schools</td></tr>
            <tr><td>Account Number : </td><td>1000271078</td></tr>
            <tr><td>Bank : </td><td>UBA NO 4 MBARI STREEET OWERRRI</td></tr>
        </table>
       
</center>
<script>
function printMe() {
    window.print()
}
</script>
