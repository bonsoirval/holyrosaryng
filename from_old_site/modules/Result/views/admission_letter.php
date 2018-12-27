<style>
.page{
	height: 842px;
	width: 595px;
	/* to centre page on screen*/
	margin-left: auto;
	margin-right: auto;
	font-size:12pt;
	text-align: justify;
    text-justify: inter-word;
}
table {border:1px solid}
</style>
<div class = 'page'>
	<center><img src="<?php echo base_url().'public/images/schools/holy_header.jpg'; ?>" width='100%'></center>
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<div align = 'right'><?php echo date('d-m-Y'); ?></div>
	Sir,
	<h2><b><center>OFFER OF PROVISIONAL ADMISSION</center></b></h2></td>
		<b><?php echo $this->session->name; ?></b>, you have been offered a provisional admission into the PTS programme of the school of Nursing, Holy 
		Rosary Hospital, Emekuku the 2017 academic session.
	The condition attached to this admission is the complete payment of the attached fee and presentation of 
	the Bank teller to the school accounts office as evidence of acceptance on or before 30th August 2017. Else you forfeit the admission.
			<p>
			<b><center>FEE PAYABLE BY PTS STUDENTS</center></b>
	<center>Female 	-	₦331,500  ,   	Male	-	₦266,000</center>
	<center><b>BANK:</b> &nbsp;&nbsp;UBA<br/><b>ACCOUNT NUMBER:</b>&nbsp;&nbsp;1000271078 <br/><b>ACCOUNT NAME:</b>&nbsp;&nbsp;HOLY ROSARY HOSPITAL EMEKUKU 
	<br/></center>
	Note: Admission into the PTS programmes is not automatic admission into the school of Nursing. Admission into full Nursing Programme will be determined by your success at the end of the PTS programme.
	<br/><br/>
	Congratulations!
	<br/><br/>
	……………………..
	<br/><br/>
	Director
	<br/><br/>
	<input type="button" value="Print" onclick="printMe()" />
</div>
<script>
function printMe() {
    window.print()
}
</script>
