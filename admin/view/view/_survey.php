<?php
	$q1Y ="";
	$q1N ="";
	$q2Y ="";
	$q2YDetails ="";
	$q2N ="";
	$q3Y ="";
	$q3N ="";
	$q4Y ="";
	$q4YDetails ="";
	$q4N ="";
	$q5Y ="";
	$q5YDetails ="";
	$q5N ="";
	$q6Y ="";
	$q6YDetails ="";
	$q6N ="";
	$q7Y ="";
	$q7YDetails ="";
	$q7N ="";
	$q8Y ="";
	$q8YDetails ="";
	$q8N ="";
	$q9Y ="";
	$q9YDetails ="";
	$q9N ="";
	$q10Y ="";
	$q10YDetails ="";
	$q10N ="";
	$q11Y ="";
	$q11YDetails ="";
	$q11N ="";
	$q12Y ="";
	$q12YDetails ="";
	$q12N ="";
	
	if(!empty($questionDetails)){
		foreach($questionDetails as $data){
			if($data['id_no'] == 1){
				
				if($data['check_box'] == 1){
					$q1Y ="checked";
				}else{
					$q1N ="checked";
				}
			}else if($data['id_no'] == 2){
				if($data['check_box'] == 1){
					$q2Y ="checked";
					$q2YDetails =$data['details'];
				}else{
					$q2N ="checked";
				}
			}else if($data['id_no'] == 3){
				
				if($data['check_box'] == 1){
					$q3Y ="checked";
				}else{
					$q3N ="checked";
				}
			}else if($data['id_no'] == 4){
				
				if($data['check_box'] == 1){
					$q4Y ="checked";
					$q4YDetails =$data['details'];
				}else{
					$q4N ="checked";
				}
			}else if($data['id_no'] == 5){
				
				if($data['check_box'] == 1){
					$q5Y ="checked";
					$q5YDetails =$data['details'];
				}else{
					$q5N ="checked";
				}
			}else if($data['id_no'] == 6){
				
				if($data['check_box'] == 1){
					$q6Y ="checked";
					$q6YDetails =$data['details'];
				}else{
					$q6N ="checked";
				}
			}else if($data['id_no'] == 7){
				
				if($data['check_box'] == 1){
					$q7Y ="checked";
					$q7YDetails =$data['details'];
				}else{
					$q7N ="checked";
				}
			}else if($data['id_no'] == 8){
				
				if($data['check_box'] == 1){
					$q8Y ="checked";
					$q8YDetails =$data['details'];
				}else{
					$q8N ="checked";
				}
			}else if($data['id_no'] == 9){
				
				if($data['check_box'] == 1){
					$q9Y ="checked";
					$q9YDetails =$data['details'];
				}else{
					$q9N ="checked";
				}
			}else if($data['id_no'] == 10){
				
				if($data['check_box'] == 1){
					$q10Y ="checked";
					$q10YDetails =$data['details'];
				}else{
					$q10N ="checked";
				}
			}else if($data['id_no'] == 11){
				
				if($data['check_box'] == 1){
					$q11Y ="checked";
					$q11YDetails =$data['details'];
				}else{
					$q11N ="checked";
				}
			}else if($data['id_no'] == 12){
				
				if($data['check_box'] == 1){
					$q12Y ="checked";
					$q12YDetails =$data['details'];
				}else{
					$q12N ="checked";
				}
			}
		}
	}
?>
<div class="col-xs-12 col-md-12 col-lg-12">
	
</br>
</br>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<p>
						Are you related by consanguinity or affinity to the appointing
						or recommending authority, or to the chief of bureau or office or to the
						person who has immediate supervision over you in the office,
						Bureau of Department where you will be appointed.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<p>a. within the third degree?</p>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-6">
							<input type="radio" name="q1" id="q1_yes" value="1" <?php echo $q1Y; ?> disabled /> Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="q1" id="q1_no" value="2" <?php echo $q1N; ?> disabled /> No
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<p>b. within the fourth degree(for Local Government Unit - Career Employees)?</p>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-6">
							<input type="radio" name="q2" id="q2_yes" value="1" <?php echo $q2Y; ?> disabled /> Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="q2" id="q2_no" value="2" <?php echo $q2N; ?> disabled /> No
						</div>
					</div>
					<div class="row q2_yes_details">
						<div class="col-md-12">
							if YES, give details:
						</div>
						<?php echo $q2YDetails; ?>
					</div>
				</div>
				
			</div>
			
			
		</div>
		
	</div>
	</br>
	<div class="row">
		<div class="col-md-12">
			
			<div class="row">
				<div class="col-md-9">
					<p>a. Have you ever been found guilty of any administrative offense?</p>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-6">
							<input type="radio" name="q3" id="q3_yes" value="1" <?php echo $q3Y; ?> disabled /> Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="q3" id="q3_no" value="2" <?php echo $q3N; ?> disabled /> No
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<p>b. Have you been criminally charged before any count?</p>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-6">
							<input type="radio" name="q4" id="q4_yes" value="1" <?php echo $q4Y; ?> disabled /> Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="q4" id="q4_no" value="2" <?php echo $q4N; ?> disabled /> No
						</div>
					</div>
					<div class="row q4_yes_details">
						<div class="col-md-12">
							if YES, give details:
						</div>
						<?php echo $q4YDetails; ?>
					</div>
				</div>
			</div>
			
			
		</div>
		
	</div>
	</br>
	<div class="row">
		<div class="col-md-12">
			
			<div class="row">
				<div class="col-md-9">
					<p>
						Have you ever been convicted of any crime or violation of any law, decree, 
						ordinance or regulation by any court or tribunal?
					</p>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-6">
							<input type="radio" name="q5" id="q5_yes" value="1" <?php echo $q5Y; ?> disabled /> Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="q5" id="q5_no" value="2" <?php echo $q5N; ?> disabled /> No
						</div>
					</div>
					<div class="row q5_yes_details">
						<div class="col-md-12">
							if YES, give details:
						</div>
						<?php echo $q5YDetails; ?>
					</div>
				</div>
			</div>
			
			
		</div>
		
	</div>
</br>
	<div class="row">
		<div class="col-md-12">
			
			<div class="row">
				<div class="col-md-9">
					<p>
						Have you ever been separated from the service in any of the following modes: 
						resignation,retirement, dropped from the rolls, dismissal, termination, end of term, 
						finished contract or phased out(abolition) in the public or private sector?
					</p>
				</div>
				<div class="col-md-3">
			
					<div class="row">
						<div class="col-md-6">
							<input type="radio" name="q6" id="q6_yes" value="1" <?php echo $q6Y; ?> disabled /> Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="q6" id="q6_no" value="2" <?php echo $q6N; ?> disabled /> No
						</div>
					</div>
					
					<div class="row q6_yes_details">
						<div class="col-md-12">
							if YES, give details:
						</div>
						<?php echo $q6YDetails; ?>
					</div>
				</div>
			</div>
			
			
		</div>
		
	</div>
</br>
	<div class="row">
		<div class="col-md-12">
			
			<div class="row">
				<div class="col-md-9">
					<p>	
						a. Have you ever been a candidate in a national or local education held 
						within the last year(except barangay election)?
					</p>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-6">
							<input type="radio" name="q7" id="q7_yes" value="1" <?php echo $q7Y; ?> disabled /> Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="q7" id="q7_no" value="2" <?php echo $q7N; ?> disabled /> No
						</div>
					</div>
					
					<div class="row q7_yes_details">
						<div class="col-md-12">
							if YES, give details:
						</div>
						<?php echo $q7YDetails; ?>
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-9">
					<p>b. Have you resigned from the government service during the three (3)
					-month period before the last election to promote/actively campaign for a national
					or local candidate?</p>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-6">
							<input type="radio" name="q8" id="q8_yes" value="1" <?php echo $q8Y; ?> disabled /> Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="q8" id="q8_no" value="2" <?php echo $q8N; ?> disabled /> No
						</div>
					</div>
					<div class="row q8_yes_details">
						<div class="col-md-12">
							if YES, give details:
						</div>
						<?php echo $q8YDetails; ?>
					</div>
				</div>
			</div>

		</div>
		
	</div>
	</br>
	<div class="row">
		<div class="col-md-12">
			
			<div class="row">
				<div class="col-md-9">
					<p>
						Have you acquired the status of an immigrant or permanent resident of another country?
					</p>
				</div>
				<div class="col-md-3">
			
					<div class="row">
						<div class="col-md-6">
							<input type="radio" name="q9" id="q9_yes" value="1" <?php echo $q9Y; ?> disabled /> Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="q9" id="q9_no" value="2" <?php echo $q9N; ?> disabled /> No
						</div>
					</div>
					
					<div class="row q9_yes_details">
						<div class="col-md-12">
							if YES, give details(country):
						</div>
						<?php echo $q9YDetails; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</br>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<p>
						Pursuant tp: (a) Indigenous People's Act(RA 8371);(b)Magna Carta for Disabled 
						Persons(RA 7277); and (c) Solo Parent Welfare Act of 2000 (RA 8972), please
						answer the following items:
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<p>a. Are you a member of any indigenous group?</p>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-6">
							<input type="radio" name="q10" id="q10_yes" value="1" <?php echo $q10Y; ?> disabled /> Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="q10" id="q10_no" value="2" <?php echo $q10N; ?> disabled /> No
						</div>
					</div>
					<div class="row q10_yes_details">
						<div class="col-md-12">
							if YES, give details:
						</div>
						<?php echo $q10YDetails; ?>
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-9">
					<p>b. Are you a person with disability?</p>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-6">
							<input type="radio" name="q11" id="q11_yes" value="1" <?php echo $q11Y; ?> disabled /> Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="q11" id="q11_no" value="2" <?php echo $q11N; ?> disabled /> No
						</div>
					</div>
					<div class="row q11_yes_details">
						<div class="col-md-12">
							if YES, give details:
						</div>
						<?php echo $q11YDetails; ?>
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-9">
					<p>c. Are you a solo parent?</p>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-6">
							<input type="radio" name="q12" id="q12_yes" value="1" <?php echo $q12Y; ?> disabled /> Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="q12" id="q12_no" value="2" <?php echo $q12N; ?> disabled /> No
						</div>
					</div>
					<div class="row q12_yes_details">
						<div class="col-md-12">
							if YES, give details:
						</div>
						<?php echo $q12YDetails; ?>
					</div>
				</div>
			</div>
			
			
		</div>
		
	</div>
	</br>
</div>
