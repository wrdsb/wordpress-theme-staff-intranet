<?php
/**
* PDF Included With Form Submission
*
* @author 	Suzanne Carter
* @version  1.0.0
*/

	// Context
	$site_id = site_url();
	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

	// Staff Intranet: Special Education Guide WATS Forms
	if (($site_id == 'https://wrdsbstaff04.wpengine.com/special-education') AND ($form_ID == '2')) {
		include ("wats_variables.php");
		?>

		<html>
			<head>
				<link type="text/css" href="<?php echo $css_path; ?>" rel="stylesheet" />
				<link type="text/css" href="pdf.css" rel="stylesheet" />
			</head>
			<body>
				<div class="header">
					<img src="https://wrdsb-ui-assets.s3.amazonaws.com/intranet/2/2.2.0/images/wats_wrdsb.png" alt="WRDSB Work and Transition Support (WATS)" style="height: 100px; width: 247px; float: left;"/>
					<h1><span>WATS-01 [2019-09]</span><br />Parent/Guardian Consent</h1>
				</div>
				<div class="letter">
					<p>Parent/Guardian:</p>

					<p>Enclosed are the permission forms for <?php echo $student_name_letter; ?> to participate in an experiential learning placement as part of the Work and Transition Support portion of their alternative program.</p>
					<p>In-school pre-placement preparation in areas such as health and safety, resume writing, and interview skills will help prepare <?php echo $student_name_letter; ?> for a placement. The placement will provide extended learning opportunities. In order to determine <?php echo $student_name_letter; ?>'s level of employability and/or community participation, careful monitoring and evaluation of <?php echo $student_name_letter; ?> will occur.</p>

					<p style="margin-left: 30px;"><input type="checkbox"<?php echo $placement_type_group; ?>> <strong>Group Placement</strong>: Students will travel and participate in small groups directly supported by classroom staff or the Work and Transition Support team. The classroom teacher will report on student participation during reporting periods.</p>
					<p style="margin-left: 30px;"><input type="checkbox"<?php echo $placement_type_individual; ?>> <strong>Independent Placement</strong>: Students will travel and participate independently with supervision primarily provided by the placement supervisor. However, the classroom teacher, an educational assistant, or the Work and Transition Support team will establish and provide initial supervision and training, job coaching and regular monitoring. The classroom teacher will complete performance appraisals in consultation with the placement supervisor for reporting periods.</p>

					<p>Workplace Safety and Insurance Board (WSIB) coverage is provided by the Ministry of Education under the Workplace Safety and Insurance Act. Generally, students are not paid since the placement is part of their school curriculum. Additional requirements (e.g., police check, TB skin test, uniforms, etc.) may be requested for some placements. You will be advised if this is necessary.</p>
					<p>If you wish <?php echo $student_name_letter; ?> to participate in a placement, please sign the enclosed forms, paying close attention to any medical information which should be shared with the placement.</p>
				</div>

				<h2>Acknowledgement and Consent</h2>
				<table>
					<tr>
						<th style="width: 14%;">Student</th>
						<td style="width: 38%;" class="signature-entry"><?php echo $student_name; ?></td>
						<th style="width: 12%;">Teacher</th>
						<td style="width: 39%;" class="signature-entry"><?php echo $teacher_name; ?></td>
					</tr>
					<tr>
						<th>Placement</th>
						<td class="signature-entry"><?php echo $org_name; ?></td>
						<th>Job Title</th>
						<td class="signature-entry"><?php echo $student_job_title; ?></td>
					</tr>
				</table>
				<table>
					<tr>
						<th style="width: 27%;">Transportation method</th>
						<td class="signature-entry" style="padding-bottom: 15pt;"><?php echo $transpo_method; ?></td>
					</tr>
				</table>
				<table style="margin-top: 10pt;">
					<tr>
						<td>Student Accident Insurance Obtained (<strong>highly recommended</strong>)</td>
						<td style="width: 15%;"><input type="checkbox"<?php echo $sai; ?>> Yes <input type="checkbox"<?php echo $sai; ?>> No</td>
					</tr>
					<tr>
						<td>A photograph of my child may be taken as they participate at the workplace. These pictures may be used by the classroom, school, or employer for recognition purchases.</td>
						<td><input type="checkbox"<?php echo $photo; ?>> Yes <input type="checkbox"<?php echo $photo; ?>> No</td>
					</tr>
					<tr>
						<td>I authorize my child's participation in a placement and understand that the pertinent information will be shared to promote their safety and success (e.g., relevant IEP and medical information).</td>
						<td><input type="checkbox"<?php echo $placement_approval; ?>> Yes <input type="checkbox"<?php echo $placement_approval; ?>> No</td>
					</tr>
				</table>
				<table>
					<tr>
						<th style="width:23%">Signatures: Student</th>
						<td style="width:23%" class="signature-entry"></td>
						<th style="width:21%">Parent/Guardian</th>
						<td style="width:23%" class="signature-entry"></td>
						<th style="width:5%">Date</th>
						<td style="width:5%" class="signature-entry"></td>
					</tr>
				</table>

				<p style="page-break-after: always;" class="internaluse">Copies to: <input type="checkbox"> Parent / Guardian / Student <input type="checkbox"> Teacher <input type="checkbox"> WATS</p>

				<!-- WATS #2 Responsibilities and Contact -->
				<div class="header">
					<img src="https://wrdsb-ui-assets.s3.amazonaws.com/intranet/2/2.2.0/images/wats_wrdsb.png" alt="WRDSB Work and Transition Support (WATS)" style="height: 100px; width: 247px; float: left;"/>
					<h1><span>WATS-02 [2019-09]</span><br />Participant Responsibilities and Emergency Contact Information</h1>
				</div>

				<table class="info">
					<tr>
						<td style="width: 50%;"><h2>Placement Supervisor</h2></td>
						<td style="width: 50%;"><h2>Teacher</h2></td>
					</tr>
					<tr>
						<td style="width: 50%;">
							<ul>
								<li>Provide a safe working and learning environment</li>
								<li>Provide orientation and placement-specific health and safety training</li>
								<li>Direct and guide students' learning through on-site supervision</li>
								<li>Help students function as an integral part of a team</li>
								<li>Inform staff who will be working directly with the student of their special needs and accommodations as well as the Personalized Placement Learning Plan (PPLP)</li>
								<li>In case of an accident, administer first aid as per your organization's procedures</li>
								<li>Report any accident or incident <strong>immediately</strong> to the classroom teacher</li>
								<li>Report student absences to the classroom teacher</li>
								<li>Work with students and teachers to ensure any problems are dealt with immediately</li>
								<li>Notify the teacher of any changes or additions to tasks</li>
								<li>Jointly assess student progress with the classroom teacher to complete the written performance appraisal</li>
								<li>Assume responsibility for insurance coverage under the Workplace Safety &amp; Insurance Act for the student if the student will be working outside the hours stipulated in the Work Education Agreement.</li>
							</ul>
						</td>
						<td style="width: 50%;">
							<ul>
								<li>Provide required pre-placement health and safety instruction</li>
								<li>Plan for and provide transportation training priot to the first day</li>
								<li>Provide all necessary pre-placement/ongoing instruction to prepare and support student learning (e.g., communication, social skills, specific task training, etc.)</li>
								<li>Complete Placement Assessment Criteria (PAC) prior to placement</li>
								<li>Complete and review the Personalized Placement Learning Plan (PPLP) with the supervisor and student and update as required</li>
								<li>Review and discuss student responsibilities with the student</li>
								<li>Ensure all forms are completed <strong>prior</strong> to placement</li>
								<li>File all appropriate forms in the OSR</li>
								<li>Retain forms in the student's file for a <strong>minimum</strong> of 12 months after the completion of the placement</li>
								<li>Monitor regularly (minimum once a month) and review with the student</li>
								<li>Complete the appropriate performance appraisals with the supervisor and share with the student</li>
								<li>Provide on-site job coaching and assistance as necessary</li>
								<li>Review the procedure for accident reporting with the student and supervisor</li>
								<li>Follow the Accident/Incident Reporting Procedure</li>
								<li>Track and submit student's actual hours at placement for year-end WSIB reporting (WATS-11 2020-01)</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td style="width: 50%;"><h2>Student</h2></td>
						<td style="width: 50%;"><h2>Parent/Guardian</h2></td>
					</tr>
					<tr>
						<td style="width: 50%;">
							<ul>
								<li>Report to your placement as scheduled on the Work Education Agreement. Notify your classroom teacher <strong>AND</strong> supervisor well before your starting time if unable to attend due to illness or emergency.</li>
								<li>Report any accident immediately to your supervisor and teacher</li>
								<li>Follow health and safety regulations and know fire procedures/exits specific to your placement</li>
								<li>Report unsafe practices to supervisor and teacher</li>
								<li>Work in a courteous, honest, punctual and responsible manner</li>
								<li>Understand tasks and expectations as outlined in the PPLP</li>
								<li>Learn the names of your co-workers and supervisor and know who to report to</li>
								<li>Follow placement expectations (e.g., cell phone usage, dress code, behaviour, confidentiality, break-times, attendance, punctuality, etc.)</li>
							</ul>
						</td>
						<td>
							<p>In order to best support <?php echo $student_name_letter; ?> with their placement, please:</p>
							<ul>
								<li>Review student responsibilities</li>
								<li>Encourage dependability, punctuality, and good work habits</li>
								<li>Consider purchasing additional student accident insurance coverage by visiting insuremykids.com</li>
								<li>Ensure absences are reported to both the classroom teacher <strong>AND</strong> the supervisor</li>
							</ul>
							<p>Please contact the classroom teacher directly if you have any concerns with the placement.</p>
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td style="width: 75%;"><h2>Emergency Contacts and Signatures</h2></td>
						<th style="width: 5%;">Date</th>
						<td style="width: 20%;" class="signature-entry"></td>
					</tr>
				</table>
				<table>
					<tr>
						<th style="width: 10%;">Student</th>
						<td style="width: 25%;" class="signature-entry"><?php echo $student_name; ?></td>
						<th style="width: 10%;">Phone</th>
						<td style="width: 15%;" class="signature-entry"><?php echo $student_phone; ?></td>
						<th style="width: 10%;">Signature</th>
						<td style="width: 30%;" class="signature-entry"></td>
					</tr>
					<tr>
						<th>Teacher</th>
						<td class="signature-entry"><?php echo $teacher_name; ?></td>
						<th>Phone</th>
						<td class="signature-entry"><?php echo $teacher_phone; ?></td>
						<th>Signature</th>
						<td class="signature-entry"></td>
					</tr>
					<tr>
						<th>Parent/Guardian</th>
						<td class="signature-entry"><?php echo $guardian_name; ?></td>
						<th>Phone</th>
						<td class="signature-entry"><?php echo $guardian_phone; ?></td>
						<th>Signature</th>
						<td class="signature-entry"></td>
					</tr>
					<tr>
						<th>Supervisor</th>
						<td class="signature-entry"><?php echo $org_direct_supervisor; ?></td>
						<th>Phone</th>
						<td class="signature-entry"><?php echo $org_direct_supervisor_phone; ?></td>
						<th>Signature</th>
						<td class="signature-entry"></td>
					</tr>
				</table>
				<h2>Medical Information</h2>
				<table>
					<tr>
						<th style="width: 20%;">Allergies:</th>
						<td style="width: 80%;" class="signature-entry"><?php echo $student_allergies; ?></td>
					</tr>
					<tr>
						<th>Medications:</th>
						<td class="signature-entry"><?php echo $student_medications; ?></td>
					</tr>
					<tr>
						<th>Medical Condition(s)</th>
						<td class="signature-entry"><?php echo $student_medical_conditions; ?></td>
					</tr>
					<tr>
						<td></td>
						<td>(e.g., seizures, diabetes, asthma, etc.)</td>
					</tr>
				</table>

				<p style="page-break-after: always;" class="internaluse">Copies to: <input type="checkbox"> Parent / Guardian / Student <input type="checkbox"> Placement Supervisor <input type="checkbox"> Teacher <input type="checkbox"> WATS</p>

				<!-- WATS #3 PPLP -->
				<div class="header">
					<img src="https://wrdsb-ui-assets.s3.amazonaws.com/intranet/2/2.2.0/images/wats_wrdsb.png" alt="WRDSB Work and Transition Support (WATS)" style="height: 100px; width: 247px; float: left;"/>
					<h1><span>WATS-03 [2019-09]</span><br />Personalized Placement Learning Plan (PPLP)</h1>
				</div>

				<p>This <strong>Personalized Placement Learning Plan</strong> is the student's course of study while at their placement. This plan is to be completed by the <strong>teacher</strong> in consultation with the placement supervisor and discussed with the student prior to the placement start date.</p>

				<h2>Student Information</h2>
				<table>
					<tr>
						<th style="width: 25%;">Student</th>
						<td style="width: 25%;" class="signature-entry"><?php echo $student_name; ?></td>
						<th style="width: 25%;">Teacher</th>
						<td style="width: 25%;" class="signature-entry"><?php echo $teacher_name; ?></td>
					</tr>
					<tr>
						<th>School Monitor(s)</th>
						<td class="signature-entry" colspan="3"><?php echo $school_monitors; ?></td>
					</tr>
					<tr>
						<th>Type of Placement</th>
						<td><input type="checkbox"<?php echo $placement_type_individual; ?>> Individual <input type="checkbox"<?php echo $placement_type_group; ?>> Group</td>
					</tr>
				</table>

				<h2>Placement Information</h2>

				<table>
					<tr>
						<th style="width: 16%;">Placement</th>
						<td style="width: 32%;" class="signature-entry"><?php echo $org_name; ?></td>
						<th style="width: 16%;">Placement Job Title</th>
						<td style="width: 48%;" colspan="3" class="signature-entry"><?php echo $student_job_title; ?></td>
					</tr>
					<tr>
						<th>Placement Supervisor</th>
						<td class="signature-entry"><?php echo $org_direct_supervisor; ?></td>
						<th>Supervisor Phone/Extension</th>
						<td style="width: 16%;" class="signature-entry"><?php echo $org_direct_supervisor_phone; ?></td>
						<th style="width: 16%;">Supervisor Email</th>
						<td style="width: 16%;" class="signature-entry"><?php echo $org_direct_supervisor_email; ?></td>
					</tr>
					<tr>
						<th>Days</th>
						<td class="signature-entry"><?php echo $days; ?></td>
						<th>Actual Start Time</th>
						<td class="signature-entry"><?php echo $hours_start; ?></td>
						<th>Actual End Time</th>
						<td class="signature-entry"><?php echo $hours_end; ?></td>
					</tr>
				</table>		
				<table>
					<tr>
						<th style="width: 16%;">Dress code</th>
						<td style="width: 16%;" class="signature-entry"><?php echo $dress_code; ?></td>
						<th style="width: 20%;">Personal Protective Equipment</th>
						<td style="width: 58%;" colspan="5" class="signature-entry"><?php echo $ppe_required; ?></td>
					</tr>
				</table>		


				<h2>Learning Expectations to be Achieved <span>(as per WATS page of  IEP)</span></h2>

				<p class="bigtext"><?php echo $student_learning_expectations; ?></p>

				<h2>Tasks to be Performed <span>(developed in conjunction with placement supervisor)</span></h2>

				<p class="hugetext"><?php echo $tasks; ?></p>

				<h2>Accommodations / Modifications / Learning Strategies <span>(as per student's IEP instructional and environmental accommodations)</span></h2>

				<p class="bigtext"><?php echo $student_accommodations; ?></p>

<p style="page-break-after: always;">&nbsp;</p>

				<h2>Change(s)/Addition(s) to Original Tasks</h2>

				<table class="chart">
					<tr>
						<th style="width: 15%;">Date</th>
						<th style="width: 75%;">Task</th>
						<th style="width: 10%;">Teacher initial</th>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>

				<h3>Student Pre-Placement Preparation</h3>
				
				<table class="none">
					<tr>
						<td style="width: 25%;"><input type="checkbox"> Yes  <input type="checkbox"> No</td>
						<th style="width: 25%;">Date</th>
						<td style="width: 25%;" class="signature-entry">&nbsp;</td>
					</tr>
					<tr>
						<th colspan="2">Health and Safety (minimum of 10 hours) instruction occurred prior to placement start date.</th>
						<th>Teacher initials</th>
						<td class="signature-entry"></td>
					</tr>
				</table>		

				<h2>Acknowledgement</h2>

				<table>
					<tr>
						<th style="width: 15%;"><?php echo $student_name_letter_start; ?></th>
						<td style="width: 35%;" class="signature-entry"></td>
						<th style="width: 15%;">Date</th>
						<td style="width: 35%;" class="signature-entry"></td>
					</tr>
					<tr>
						<th><?php echo $teacher_name_signature; ?></th>
						<td class="signature-entry"></td>
						<th>Date</th>
						<td class="signature-entry"></td>
					</tr>
					<tr>
						<th><?php echo $org_direct_supervisor_signature; ?></th>
						<td class="signature-entry"></td>		
						<th>Date</th>
						<td class="signature-entry"></td>
					</tr>
				</table>

				<p class="internaluse">Copies to: <input type="checkbox"> Parent / Guardian / Student <input type="checkbox"> Placement Supervisor <input type="checkbox"> Teacher <input type="checkbox"> WATS</p>

				<p style="page-break-after: always;">&nbsp;</p>

				<!-- WATS #4 Placement Assessment Criteria (PAC) -->
				<div class="header">
					<img src="https://wrdsb-ui-assets.s3.amazonaws.com/intranet/2/2.2.0/images/wats_wrdsb.png" alt="WRDSB Work and Transition Support (WATS)" style="height: 100px; width: 247px; float: left;"/>
					<h1><span>WATS-04 [2019-09]</span><br />Placement Assessment Criteria (PAC)</h1>
				</div>

				<h2>Placement Information</h2>

				<table>
					<tr>
						<th style="width: 15%;">Placement</th>
						<td style="width: 35%;" class="signature-entry"><?php echo $org_name; ?></td>
						<th style="width: 15%;">Department</th>
						<td style="width: 35%;" class="signature-entry"><?php echo $org_dept; ?></td>
					</tr>
					<tr>
						<th>Address</th>
						<td class="signature-entry"><?php echo $org_full_address; ?></td>
						<th>Phone</th>
						<td class="signature-entry"><?php echo $org_phone; ?></td>
					</tr>
					<tr>
						<th>Direct Supervisor</th>
						<td class="signature-entry"><?php echo $org_direct_supervisor; ?></td>
						<th>Student's Job Title</th>
						<td class="signature-entry"><?php echo $student_job_title; ?></td>
					</tr>
				</table>

				<h2>Discussion Criteria for Placement Assessment</h2>

				<p>The following discussion items must be addressed bewteen the Organization Representative and the School Board Representative during a <strong><em>personal visit</em></strong> each placement, each year, and will reflect the individual needs of the student.</p>

				<ol>
					<li><strong>Review the Purpose of the PAC</strong>. The Ministry of Education <cite>Co-operative Education</cite> policy document requires the teacher to document that an organization will provide a safe and appropriate learning and working environment for the student. This PAC form is <strong>not</strong> an inspection under the terms of the Occupational Health &amp; Safety Act.</li>
					<li><strong>Review the Organization's roles and responsibilities</strong>
						<ul class="checkbox">
							<li><input type="checkbox"> awareness of OHSA Supervisor Training (http://www.labour.gov.on.ca/english/hs/pubs/sup_employerguide.php)</li>
							<li><input type="checkbox"> designate one or more employees to be responsible for supervising, directing and assessing the student</li>
							<li><input type="checkbox"> meet with the teacher to discuss the student's learning (Monitoring)</li>
							<li><input type="checkbox"> work with the teacher to develop the Personalized Placement Learning Plan (PPLP) for the student</li>
							<li><input type="checkbox"> provide appropriate training and a safe working and learning environment</li>
							<li><input type="checkbox"> complete orientation and workplace health and safety training with the student</li>
							<li><input type="checkbox"> be aware of and follow the accident reporting procedures for the student</li>
							<li><input type="checkbox"> provide a range and scope of learning opportunities appropriate for the student</li>
							<li><input type="checkbox"> provide a consistent level of supervision and training if the student is working at alternate sites</li>
							<li><input type="checkbox"> provide an environment that is free from discrimination and harassment</li>
							<li><input type="checkbox"> accomodate students' special needs</li>
						</ul>

						<p style="width: 100%;" class="signature-entry"><strong>Comments</strong>:</p>
						<p style="width: 100%;height: 10pt;" class="signature-entry"></p>
					</li>
					<li><strong>Identification and Control of Hazards. The student will be:</strong>
						<ul class="checkbox">
							<li><strong>Yes</strong> <strong>No</strong></li>
							<li><input type="checkbox"> <input type="checkbox"> working independently and/or alone</li>
							<li><input type="checkbox"> <input type="checkbox"> instructed about procedures for safe and heavy lifting (if applicable)</li>
							<li><input type="checkbox"> <input type="checkbox"> working at heights</li>
							<li><input type="checkbox"> <input type="checkbox"> working in environments where there is extreme noise, temperature, vibration, or radiation</li>
							<li><input type="checkbox"> <input type="checkbox"> entering into confined spaces that have limited openings for entry and exit (e.g., tanks, silos, sewers, tunnels, etc.)</li>
							<li><input type="checkbox"> <input type="checkbox"> working with or around chemicals, or biological, or infectious agents/instruments</li>
							<li><input type="checkbox"> <input type="checkbox"> working with machinery that has moving parts that require guards and lock-out procedures</li>
							<li><input type="checkbox"> <input type="checkbox"> working with power tools</li>
							<li><input type="checkbox"> <input type="checkbox"> working with animals: <input type="checkbox"> farm <input type="checkbox"> domestic <input type="checkbox"> exotic</li>
							<li><input type="checkbox"> <input type="checkbox"> using PPE (Personal Protective Equipment): please identify:
								<span class="signature-entry" style="width: 250pt;"><?php echo $ppe_required; ?></span></li>
						</ul>
						<p style="width: 100%;" class="signature-entry">If <strong>Yes</strong>, please explain:</p>
						<p style="width: 100%;height: 10pt;" class="signature-entry"></p>
					</li>
					<li><strong>Identification and Control of Hazards – Motorized Vehicles. The student will be:</strong>
						<ul class="checkbox">
							<li><strong>Yes</strong> <strong>No</strong></li>
							<li><input type="checkbox"> <input type="checkbox"> operating licensed motorized vehicles, including customer vehicles</li>
							<li><input type="checkbox"> <input type="checkbox"> operating mobile equipment (e.g., forklifts, ride-on lawn equipment, tractors, etc.)</li>
							<li><input type="checkbox"> <input type="checkbox"> transported from one location to another by the organization supervisor or designate on a regular basis</li>
						</ul>

						<p style="width: 100%;" class="signature-entry">If <strong>Yes</strong>, please explain:</p>
						<p style="width: 100%;height: 10pt;" class="signature-entry"></p>
					</li>

						<div style="margin: auto; margin: 25pt 0; border: 1px solid #000; padding: 15pt;">
							<p><strong>Important information – Motorized Vehicles</strong>:</p>
							<ul>
								<li>The operation of <strong>ANY</strong> motorized vehicle by a student is a high-risk activity and should be avoided if possible. The School Board provides "secondary" liability insurance coverage for students operatin, or being a passenger in, a licensed motorized vehicle while at their placement. The insurance on the vehicle is primary and, therefore, the organization needs to be aware that they assume primary liability if they choose to have students drive or be a passenger in a licensed motorized vehicle while on their placement.</li>
								<li>Operating mobile equipments is also a high-risk activity for students. The organization must exercise caution, ensure that the student has received appropriate training and certification, and provide ongoing supervision.</li>
								<li>It is highly recommended that the organization consult with their insurance provider to ensure there is coverage for students.</li>
								<li><strong>Note:</strong> The OSBIE Volunteer Driver Form (FS-19-IA5) must be completed by the driver and WATS Transportation at the placement. Form WATS-12 must be signed by the parent/guardian if the student will be transported at the placement.</li>
							</ul>
						</div>
					<li><strong>Determine that the Organization</strong>:
						<ul class="checkbox">
							<li><input type="checkbox"> has a Joint Health &amp; Safety Committee or Health & Safety Representative <input type="checkbox"> Not Applicable</li>
							<li><input type="checkbox"> provides mandatory workplace Health &amp; Safety Training: <input type="checkbox"> General Health & Safety <input type="checkbox"> Workplace Violence and Harassment <input type="checkbox"> WHMIS</li>
							<li><input type="checkbox"> has Safety Data Sheets available for all hazardous materials</li>
							<li><input type="checkbox"> provides training for emergency procedures for fire</li>
							<li><input type="checkbox"> provides any necessary safety equipment and/or work clothing (PPE)</li>
							<li><input type="checkbox"> has the Employment Standards Act (ESA) poster posted in the workplace (http://www.labour.gov.on.ca/english/es/tools/esworkbook/esaposter.php)</li>
						</ul>
						<p style="width: 100%;" class="signature-entry"><strong>Comments</strong>:</p>
						<p style="width: 100%;height: 10pt;" class="signature-entry"></p>
					</li>
				</ol>

				<h2>School Board Representative Placement Assessment Recommendation</h2>

				<table>
					<tr>
						<th style="width: 50%;">Placement Representative Name<br />(please print & initial):</th>
						<td style="width: 50%;" class="signature-entry"></td>
					</tr>
					<tr>
						<th style="width: 50%;">School Board Representative Name<br />(please print & initial):</th>
						<td style="width: 50%;" class="signature-entry"></td>
					</tr>
				</table>

				<p class="internaluse"><input type="checkbox"> Acceptable <input type="checkbox">  Acceptable with certain conditions (see comments) <input type="checkbox"> Not acceptable (contact WATS Office)</p>

				<h2>Comments</h2>

				<p class="bigtext"></p>

				<table wdith="50%" align="left">
					<tr>
						<th>Date</th>
						<td width="75%" class="signature-entry"></td>
					</tr>
				</table>

				<h2>Subsequent Semester Placement Assessment Review Meetings</h2>

				<p>WHAT SHOULD GO HERE?!</p>

				<p class="internaluse">Copies to: <input type="checkbox"> Teacher <input type="checkbox"> WATS</p>

				<p style="page-break-after: always;">&nbsp;</p>

				<!-- WATS #5 First Day Safety Orientation Report -->
				<div class="header">
					<img src="https://wrdsb-ui-assets.s3.amazonaws.com/intranet/2/2.2.0/images/wats_wrdsb.png" alt="WRDSB Work and Transition Support (WATS)" style="height: 100px; width: 247px; float: left;"/>
					<h1><span>WATS-05 [2019-09]</span><br />First Day Safety Orientation Report</h1>
				</div>

				<p class="urgent">This form must be used to document the student's completion of the required Health &amp; Safety orientation. This will be lead by the placement supervisor and supported by school staff.</p>

				<table>
					<tr>
						<th style="width: 17%;">Student</th>
						<td style="width: 33%;" class="signature-entry"><?php echo $student_name; ?></td>
						<th style="width: 17%;">Placement</th>
						<td style="width: 33%;" class="signature-entry"><?php echo $org_name; ?></td>
					</tr>
					<tr>
						<th>Completed by</th>
						<td class="signature-entry"></td>
						<th>Date</th>
						<td class="signature-entry"></td>
					</tr>
				</table>

				<h2>Start of the First Day</h2>

				<ul class="checkbox">
					<li><input type="checkbox"> Ensure supervisor has copies of all completed and signed forms</li>
					<li><input type="checkbox"> Review PPLP expectations with assigned staff and ensure they understand the student's needs and necessary accommodations</li>
					<li><input type="checkbox"> Ensure student knows where to store their personal belongings</li>
					<li><input type="checkbox"> Ensure student knows location of washrooms</li>
					<li><input type="checkbox"> Ensure student and supervisor know transportation arrangements and contact information</li>
					<li><input type="checkbox"> Review daily routines with student (e.g., break times, lunch, etc.) and record them____________________________________________________________________________________</li>
					<li><input type="checkbox"> Introduce student to and record the name(s) of the placement supervisor(s)
						<p class="smalltext"></p>
					</li>
					<li><input type="checkbox"> Introduce student to and list names of co-workers
						<p class="smalltext"></p>
					</li>
				</ul>

				<h2>Safety Orientation</h2>

				<ul class="checkbox">
					<li><input type="checkbox"> Ensure student and staff know the accident/injury reporting procedure (teacher/school must be notified)</li>
					<li><input type="checkbox"> Fire exit locations
						<p class="smalltext"></p>
					</li>
					<li><input type="checkbox"> Fire Evacuation / Emergency Procedures 
						<p class="smalltext"></p>
					</li>
					<li><input type="checkbox"> Fire Aid Station / Boxes Location
						<p class="smalltext"></p>
					</li>
					<li><input type="checkbox"> Eyewash Station(s) Location
						<p class="smalltext"></p>
					</li>
					<li><input type="checkbox"> Cellphone Policy (when permitted)
						<p class="smalltext"></p>
					</li>
					<li><input type="checkbox"> Required Personal Protective Equipement (PPE) and Proper Use / Disposal of PPE
						<p class="smalltext"></p>
					</li>
					<li><input type="checkbox"> Name of the placement's Health &amp; Safety Committee Representative (or Safety Representative)
						<p class="smalltext"></p>
					</li>
					<li><input type="checkbox"> What to do and who to see if a student has a concern about safety
						<p class="smalltext"></p>
					</li>
				</ul>

				<h3>Specific information needed to assist student with learning/completing work tasks <span>(e.g., security codes, passwords, location of cleaning products, etc.)</span></h3>

				<p class="hugesttext"></p>

				<h2>At End of Day</h2>

				<ul class="checkbox">
					<li><input type="checkbox"> Student says good-bye and thank you to appropriate supervisor and/or co-workers so staff know when student leaves</li>
					<li><input type="checkbox"> Record student comments about first day<p class="smalltext"></p></li>
					<li><input type="checkbox"> Record placement staff comments about first day<p class="smalltext"></p></li>
					<li><input type="checkbox"> Record school staff comments about first day<p class="smalltext"></p></li>
				</ul>

				<h2>Next Steps</h2>

				<table>
					<tr>
						<td style="width: 10%;"><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td style="width: 90%;">Student requires school staff support for their next shift?</td>
					</tr>
					<tr>
						<td style="width: 10%;"><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td style="width: 90%;">Student requires additional transportation training?</td>
					</tr>
					<tr>
						<td style="width: 10%;"><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td style="width: 90%;">Student requires monitoring prior to the minimum requirement of one (1) month?</td>
					</tr>
					<tr>
						<td style="width: 10%;"><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td style="width: 90%;">Student requires placement specific training in the classroom?</td>
					</tr>
					<tr>
						<td style="width: 10%;">&nbsp;</td>
						<td style="width: 90%;">If yes, describe (e.g., visual/checklist for task completion, knife skills, mopping, tying garbage bags, etc.)<br />
						{{lines}}
						</td>
					</tr>
				</table>

				<h2>Acknowledgement</h2>

				<table>
					<tr>
						<th style="width: 20%;">Placement Staff Signature</th>
						<td style="width: 50%;" class="signature-entry"></td>
						<td style="width: 30%;" colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<th style="width: 20%;">School Staff Signature Signature</th>
						<td style="width: 50%;" class="signature-entry"></td>
						<td style="width: 30%;" colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<th style="width: 20%;">Student Signature</th>
						<td style="width: 50%;" class="signature-entry"></td>
						<th style="width: 5%;">Date</th>
						<td style="width: 20%;" class="signature-entry"></td>
					</tr>
				</table>

				<p class="internaluse">Copies to: <input type="checkbox"> Teacher</p>

				<p style="page-break-after: always;">&nbsp;</p>

				<!-- WATS #6 Monitoring Report -->
				<div class="header">
					<img src="https://wrdsb-ui-assets.s3.amazonaws.com/intranet/2/2.2.0/images/wats_wrdsb.png" alt="WRDSB Work and Transition Support (WATS)" style="height: 100px; width: 247px; float: left;"/>
					<h1><span>WATS-06 [2019-09]</span><br />Monitoring Report</h1>
				</div>

				<h2>Student Information</h2>

				<table>
					<tr>
						<th style="width: 15%;">Student</th>
						<td style="width: 35%;" class="signature-entry"><?php echo $student_name; ?></td>
						<th style="width: 15%;">Placement</th>
						<td style="width: 35%;" class="signature-entry"><?php echo $org_name; ?></td>
					</tr>
					<tr>
						<th>Completed by</th>
						<td class="signature-entry"></td>
						<th>Type</th>
						<td><br /><input type="checkbox"> visit <input type="checkbox"> phone call <input type="checkbox"> email</td>
					</tr>
					<tr>
						<td colspan="3">&nbsp;</td>
						<td><strong>Note:</strong> on-site visit is required once a month at minimum</td>
					</tr>
					<tr>
						<th colspan="2">Placement staff consulted</th>
						<td colspan="2" class="signature-entry"><?php echo $org_name; ?></td>
					</tr>
					<tr>
						<th>Date</th>
						<td colspan="3" class="signature-entry"></td>
					</tr>
				</table>

				<h2>Learning Expectations to be Achieved <span>(as outlined on the student's PPLP)</span></h2>

				<p class="bigtext"></p>

				<h2>Tasks / Expectations <span>(as outlined on student's PPLP)</span></h2>

				<p class="hugetext"></p>

				<h2>Record of Job Coaching and Monitoring</h2>

				<p>While at the placement, the student:</p>

				<table>
					<tr>
						<td style="width: 20%;"><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td style="width: 80%">Informs placement staff of arrival/departure</td>
					</tr>
					<tr>
						<td><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td>Is punctual</td>
					</tr>
					<tr>
						<td><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td>Attends regularly</td>
					</tr>
					<tr>
						<td><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td>Informs placement staff of absences</td>
					</tr>
					<tr>
						<td><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td>Follows direction</td>
					</tr>
					<tr>
						<td><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td>Manages time appropriately (e.g., breaks, etc.)</td>
					</tr>
					<tr>
						<td><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td>Completes tasks at an appropriate pace</td>
					</tr>
					<tr>
						<td><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td>Interacts appropriately with co-workers</td>
					</tr>
				</table>

				<p style="page-break-after: always;">&nbsp;</p>

				<h2>Comments / Observations of expectations AND tasks <span>(from PPLP)</span></h2>

				<h3>Staff Comments <span>(include student strengths and needs)</span></h3>

				<p class="hugetext"></p>

				<h3>Student Comments <span>(include likes, challenges, questions, etc.)</span></h3>

				<p class="bigtext"></p>

				<h3>Placement Staff Comments <span>(include student's strengths, needs and placement concerns)</span></h2>

				<p class="hugetext"></p>

				<h2>Next Steps</h2>

				<table>
					<tr>
						<td style="width: 20%;"><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td style="width: 80%">Student requires school staff support for their next shift?</td>
					</tr>
					<tr>
						<td><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td>Student requires monitoring prior to the minimum requirement of one (1) month?</td>
					</tr>
					<tr>
						<td><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td>Have additional tasks been added? If yes, list and add to PPLP<br />
						{{lines}}</td>
					</tr>
					<tr>
						<td><input type="checkbox"> Yes <input type="checkbox"> No</td>
						<td>Student requires placement specific training in the classroom?</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>If yes, describe (e.g., visual/checklist for task completion, knife skills, mopping, tying garbage bags, etc.)<br />
						{{lines}}</td>
					</tr>
				</table>

				<p class="internaluse">Copies to: <input type="checkbox"> Teacher</p>

				<p style="page-break-after: always;">&nbsp;</p>

				<!-- WATS #7 Performance Appraisal -->
				<div class="header">
					<img src="https://wrdsb-ui-assets.s3.amazonaws.com/intranet/2/2.2.0/images/wats_wrdsb.png" alt="WRDSB Work and Transition Support (WATS)" style="height: 100px; width: 247px; float: left;"/>
					<h1><span>WATS-07 [2019-09]</span><br />Performance Appraisal</h1>
				</div>

				<p class="urgent">This must be completed by a qualified teacher in consultation with the placement supervisor and shared with the student.</p>

				<table>
					<tr>
						<th style="width: 15%;">Teacher/Student</th>
						<td style="width: 35%;" class="signature-entry"><?php echo $teacher_name; ?> <?php echo $student_name; ?></td>
						<th style="width: 15%;">Supervisor</th>
						<td style="width: 35%;" class="signature-entry"><?php echo $org_direct_supervisor; ?></td>
					</tr>
					<tr>
						<th>School</th>
						<td class="signature-entry"><?php echo $student_homeschool; ?></td>
						<th>Placement</th>
						<td class="signature-entry"><?php echo $org_name; ?></td>
					</tr>
					<tr>
						<th>Date</th>
						<td class="signature-entry"></td>
						<th>Job Title</th>
						<td class="signature-entry"><?php echo $student_job_title; ?></td>
					</tr>
					<tr>
						<th>Placement Type</th>
						<td colspan="3"><input type="checkbox"> Traditional Work Setting <input type="checkbox"> Traditional Volunteer Setting</td>
					</tr>
				</table>

				<table class="chart small" style="margin-top: 15pt;">
					<tr>
						<th style="width: 18%; font-size: 8pt;">E | Excellent</th>
						<th style="width: 18%; font-size: 8pt;">G | Good</th>
						<th style="width: 18%; font-size: 8pt;">S | Satisfactory</th>
						<th style="width: 26%; font-size: 8pt;">N | Needs Improvement</th>
						<th style="width: 20%; font-size: 8pt;">N/A | Not Applicable</th>
					</tr>
					<tr>
						<td style="vertical-align: top; font-size: 8pt;">Performance <strong>consistently exceeds</strong> placement requirements.</td>
						<td style="vertical-align: top; font-size: 8pt;">Performance is well done and <strong>consistently meets</strong> placement requirements.</td>
						<td style="vertical-align: top; font-size: 8pt;">Performance meets placement requirements and is in the acceptable range.</td>
						<td style="vertical-align: top; font-size: 8pt;">Performance does not meet placement requirements.</td>
						<td style="vertical-align: top; font-size: 8pt;">Does not apply.</td>
					</tr>
				</table>

				<table class="chart" style="margin-top: 15pt;">
					<tr>
						<th style="text-align: left; font-size: 8pt; text-transform: uppercase; font-weight: normal;"><strong>Instructions</strong>: Check the letter that most appropriately describes the quality of the student's placement tasks. For the skills that students require support to perform, check the <strong>with support</strong> box.</th>
						<th width="5%">E</th>
						<th width="5%">G</th>
						<th width="5%">S</th>
						<th width="5%">N</th>
						<th width="7%">N/A</th>
						<th width="15%" style="font-size: 8pt;">With Support</th>
					</tr>
					<tr>
						<th style="text-align: left;" colspan="7">Responsibility</th>
					</tr>
					<tr>
						<td>Fulfills responsibilities and commitments (e.g., comes prepared, arrives on time, follows dress code, etc.)</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Completes assigned tasks according to the supervisor's expectations (e.g., quality)</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Completes assigned tasks according to the established timelines (e.g., pace)</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Demonstrates an understanding of confidentiality at the placement</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th style="text-align: left;" colspan="7">Independence</th>
					</tr>
					<tr>
						<td>Follows and completes assigned daily routines</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Follows instructions with minimal supervision</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th style="text-align: left;" colspan="7">Initiative</th>
					</tr>
					<tr>
						<td>Demonstrates curiosity and interest in learning and a willingness to try new tasks</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Seeks assistance when needed to complete tasks</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Advocates appropriately for self (e.g., calls supervisor when ill, requests time off for appointments)</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th style="text-align: left;" colspan="7">Organization</th>
					</tr>
					<tr>
						<td>Demonstrates an ability to prioritize tasks (e.g., cleaning up spills immediately, etc.)</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Maintains an organized work area and returns tools / equipment to proper places</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th style="text-align: left;" colspan="7">Collaboration</th>
					</tr>
					<tr>
						<td>Responds positively to the ideas, opinions, values, and traditions of others</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Interacts appropriately at placement (e.g., polite, respects boundaries, etc.)</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Works with others to resolve conflicts and deal with issues that may arise</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th style="text-align: left;" colspan="7">Self-regulation</th>
					</tr>
					<tr>
						<td>Takes responsibility for and manages their own behaviour</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Responds appropriately and positively to constructive feedback</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Perseveres and makes an effort when responding to challenges</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Approaches all tasks with a positive attitude</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Shares personal information appropriately at the placement (e.g., limited sharing of personal information, social life, relationships, etc.)</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>

				<table class="chart" style="page-break-before: always;">
					<tr>
						<th style="text-align: left; font-size: 8pt; text-transform: uppercase; font-weight: normal;"><strong>Instructions</strong>: Check the letter that most appropriately describes the quality of the student's placement tasks. For the skills that students require support to perform, check the <strong>with support</strong> box.</th>
						<th width="5%">E</th>
						<th width="5%">G</th>
						<th width="5%">S</th>
						<th width="5%">N</th>
						<th width="7%">N/A</th>
						<th width="15%" style="font-size: 8pt;">With Support</th>
					</tr>
					<tr>
						<th style="text-align: left;" colspan="7">Tasks (as outlined in the student's PPLP)</th>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>

				<h2>Attendance Record</h2>

				<table>
					<tr>
						<th width="10%"># absences</th>
						<td width="40%" class="signature-entry"></td>
						<th width="10%"># lates</th>
						<td width="40%" class="signature-entry"></td>
					</tr>
					<tr>
						<th width="70%">Informed Placement Supervisor of absences/lates</th>
						<td width="30%"><input type="checkbox"> Always <input type="checkbox"> Sometimes <input type="checkbox"> Never</td>
					</tr>
				</table>

				<h2>Placement Supervisor's Comments <span>(strengths / next steps)</span></h2>

				<p class="bigtext"></p>

				<p>Complete <strong><em>one</em></strong> of the boxes below, based on the student's current placement type.</p>

				<table>
					<tr>
						<td style="border: 1px solid #000;width: 45%;">				
							<table>
								<tr>
									<th style="text-align: left;">Traditional Work Setting</th>
								</tr>
								<tr>
									<td>Is this student competitively employable? <input type="checkbox"> Yes <input type="checkbox"> No</td>
								</tr>
								<tr>
									<td><p class="smalltext">Explain:</p>
										<p class="smalltext"></p>
										<p class="smalltext"></p>
										<p class="smalltext"></p></td>
								</tr>
							</table>
						</td>
						<td style="vertical-align: middle;text-align: center;width: 10%;"> <strong>OR</strong> </td>
						<td style="border: 1px solid #000;width: 45%;">
							<table>
								<tr>
									<th style="text-align: left;">Traditional Volunteer Setting</th>
								</tr>
								<tr>
									<td>Is this student a suitable volunteer candidate? <input type="checkbox"> Yes <input type="checkbox"> No</td>
								</tr>
								<tr>
									<td><p class="smalltext">Explain:</p>
										<p class="smalltext"></p>
										<p class="smalltext"></p>
										<p class="smalltext"></p></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>

				<h2>Student's Comments</h2>

				<p class="bigtext"></p>

				<table>
					<tr>
						<th style="width: 30%;">Placement Supervisor</th>
						<td style="width: 20%;" class="signature-entry"><span style="color: #eee;">please print</span><?php echo $org_direct_supervisor; ?></td>
						<th style="width: 30%;">Date</th>
						<td style="width: 20%;" class="signature-entry"></td>
					</tr>
					<tr>
						<th><?php echo $org_direct_supervisor; ?> Signature</th>
						<td class="signature-entry"></td>
						<th><?php echo $student_name_letter_start; ?> Signature</th>
						<td class="signature-entry"></td>
					</tr>
				</table>

				<p class="internaluse"><strong>RETENTION:</strong> The Ministry of Education requires a copy of this form be kept in the student's file for 12 months following completion of the program.</p>

				<p class="internaluse">Copies to: <input type="checkbox"> OSR <input type="checkbox"> Placement Supervisor <input type="checkbox"> WATS  <input type="checkbox"> Teacher<br />
					<input type="checkbox"> Parent / Guardian / Student (with Student Achievement Report Card)</p>

				<p style="page-break-after: always;"></p>

				<!-- WATS #8 Work Education Agreement (WEA) Addendum -->
				<div class="header">
					<img src="https://wrdsb-ui-assets.s3.amazonaws.com/intranet/2/2.2.0/images/wats_wrdsb.png" alt="WRDSB Work and Transition Support (WATS)" style="height: 100px; width: 247px; float: left;"/>
					<h1><span>WATS-08 [2019-09]</span><br />Work Education Agreement (WEA) Addendum</h1>
				</div>

				<p><strong>Important</strong>: This addendum <strong>must</strong> be completed and signed every time a change in days and/or hours is made from the original Work Education Agreement (WEA).</p>

				<table>
					<tr>
						<th style="width: 10%;">Student</th>
						<td style="width: 20%;" class="signature-entry"><?php echo $student_name; ?></td>
						<th style="width: 10%;">Placement</th>
						<td style="width: 20%;" class="signature-entry"><?php echo $org_name; ?></td>
						<th style="width: 10%;">Date</th>
						<td style="width: 20%;" class="signature-entry"></td>
					</tr>
					<tr>
						<th>Teacher</th>
						<td class="signature-entry"><?php echo $teacher_name; ?></td>
						<th>School</th>
						<td colspan="3" class="signature-entry"><?php echo $student_homeschool; ?></td>
					</tr>
				</table>

				<p class="urgent">Complete <strong>EITHER</strong> Section A: Permanent Change <strong>OR</strong> Section B: Temporary Change</p>

				<h2>Section A: Permanent Change</h2>

				<p>Record the <strong>original Work Education Agreement (WEA)</strong> days/hours/dates in the left column. Record <strong>new</strong> days/hours/dates in the right column. Hours should include half an hour before and after actual start and end time.</p>

				<table class="chart">
					<tr>
						<th>Original WEA Days/Hours</th>
						<th>New WEA Days/Hours</th>
					</tr>
					<tr>
						<td>Original Hours:</td>
						<td>New Hours:</td>
					</tr>
					<tr>
						<td>Start Date (on WEA):</td>
						<td>Date Effective:</td>
					</tr>
					<tr>
						<td>End Date (on WEA):</td>
						<td>End Date:</td>
					</tr>
				</table>


				<h2>Section B: Temporary Change</h2>

				<p>Record the <strong>temporary change</strong> to the original WEA (e.g., temporary extra day(s) during employer's busy season or special event(s).)</p>

				<table class="chart">
					<tr>
						<td>Date(s):</td>
					</tr>
					<tr>
						<td>Hour(s):</td>
					</tr>
				</table>

				<h2>Signatures of Parties to the Agreement</h2>

				<p>Please sign the appropriate space below to acknowledge agreement to this change. This form is to be completed and returned to the classroom teacher <strong>prior to the effective date of this change</strong>.</p>

				<table>
					<tr>
						<th style="width: 10%;">Student</th>
						<td style="width: 40%;" class="signature-entry"></td>
						<th style="width: 10%;">Parent/Guardian</th>
						<td style="width: 40%;" class="signature-entry"></td>
					</tr>
					<tr>
						<th style="width: 10%;">Placement</th>
						<td style="width: 40%;" class="signature-entry"></td>
						<th style="width: 10%;">Teacher</th>
						<td style="width: 40%;" class="signature-entry"></td>
					</tr>
				</table>				

				<p class="internaluse">Copies to: <input type="checkbox"> OSR (attach to original WEA) <input type="checkbox"> Parent / Guardian / Student <input type="checkbox"> Placement Supervisor <input type="checkbox"> Teacher <input type="checkbox"> WATS</p>

				<p style="page-break-after: always;">&nbsp;</p>

				<!-- WATS #9 Student Withdrawal from Placement -->
				<div class="header">
					<img src="https://wrdsb-ui-assets.s3.amazonaws.com/intranet/2/2.2.0/images/wats_wrdsb.png" alt="WRDSB Work and Transition Support (WATS)" style="height: 100px; width: 247px; float: left;"/>
					<h1><span>WATS-09 [2019-09]</span><br />Student Withdrawal from Placement</h1>
				</div>

				<p class="urgent"><strong>Important</strong>: Notify Work &amp; Transition Support staff <strong>immediately</strong> and forward a copy of this form.</p>

				<h2>Current Placement Information</h2>

				<table>
					<tr>
						<th style="width: 10%;">Student</th>
						<td style="width: 40%;" class="signature-entry"><?php echo $student_name; ?></td>
						<th style="width: 15%;">Teacher / School</th>
						<td style="width: 35%;" class="signature-entry"><?php echo $teacher_name; ?> <?php echo $student_homeschool; ?></td>
					</tr>
					<tr>
						<th style="width: 10%;">Placement</th>
						<td style="width: 40%;" class="signature-entry"><?php echo $org_name; ?></td>
						<th style="width: 15%;">Placement Supervisor</th>
						<td style="width: 35%;" class="signature-entry"><?php echo $org_direct_supervisor; ?></td>
					</tr>
				</table>

				<h2>Student Withdrawal from Placement Information</h2>

				<table class="chart">
					<tr>
						<th style="width: 25%;">Start date of Placement</th>
						<td></td>
					</tr>
					<tr>
						<th>Date removed from Placement</th>
						<td></td>
					</tr>
					<tr>
						<th>Number of shifts attended</th>
						<td></td>
					</tr>
					<tr>
						<th>Reason</th>
						<td><br /><br /><br /><br /><br /><br /><br /><br /></td>
					</tr>
					<tr>
						<th>Method of follow-up with the Placement Supervisor</th>
						<td><input type="checkbox"> Visit <input type="checkbox"> Phone call <input type="checkbox"> Email</td>
					</tr>
					<tr>
						<th>Placement Supervisor Comments</th>
						<td><br /><br /><br /><br /><br /><br /><br /><br /></td>
					</tr>
					<tr>
						<th>Was a Performance Appraisal completed upon termination?</th>
						<td><input type="checkbox"> Yes <input type="checkbox"> No</td>
					</tr>
					<tr>
						<th>Considerations for future placements</th>
						<td><br /><br /><br /><br /><br /><br /><br /><br /></td>
					</tr>
				</table>

				<h2>Completed by</h2>

				<table>
					<tr>
						<th style="width: 10%;">Teacher</th>
						<td style="width: 40%;" class="signature-entry"><?php echo $teacher_name; ?></td>
						<th style="width: 10%;">Date</th>
						<td style="width: 40%;" class="signature-entry"></td>
					</tr>
				</table>

				<p class="internaluse">Copies to: <input type="checkbox"> OSR <input type="checkbox"> Parent / Guardian / Student <input type="checkbox"> Teacher <input type="checkbox"> WATS</p>

				<p style="page-break-after: always;">&nbsp;</p>

				<!-- WATS #10 Student Volunteer Criminal Records Check -->
				<div class="header">
					<img src="https://wrdsb-ui-assets.s3.amazonaws.com/intranet/2/2.2.0/images/wats_wrdsb.png" alt="WRDSB Work and Transition Support (WATS)" style="height: 100px; width: 247px; float: left;"/>
					<h1><span>WATS-10 [2019-09]</span><br />Student Volunteer Vulnerable Sector Check<br /><span>(applicable only to students 18+)</span></h1>
				</div>

				<div class="letter">

					<p>Waterloo Regional Police Services<br />
					Reporting Centre<br />
					200 Maple Grove Road<br />
					Cambridge ON &nbsp;N3H 5M1</p>

					<p>To whom it may concern:</p>

					<p><strong>Re: Student Volunteer Vulnerable Sector Check</strong></p>

					<table>
						<tr>
							<th style="width: 25%;">Student</th>
							<td style="width: 25%;" class="signature-entry"><?php echo $student_name; ?></td>
							<th style="width: 25%;">Date</th>
							<td style="width: 25%;" class="signature-entry"></td>
						</tr>
						<tr>
							<th>Placement</th>
							<td class="signature-entry"><?php echo $org_name; ?></td>
							<th>Placement Job Title</th>
							<td class="signature-entry"><?php echo $student_job_title; ?></td>
						</tr>
					</table>

					<p>This is to inform you the above student will be participating in a school community placement and requires a Vulnerable Sector Check, as per placement requirements.</p>

					<p>Should you have any questions, please contact:</p>

					<table>
						<tr>
							<th style="width: 10%;">Teacher</th>
							<td colspan="3" class="signature-entry"><?php echo $teacher_name; ?></td>
						</tr>
						<tr>
							<th style="width: 10%;">School</th>
							<td style="width: 60%;" class="signature-entry"><?php echo $student_homeschool; ?></td>
							<th style="width: 10%;">Telephone</th>
							<td style="width: 20%;" class="signature-entry"><?php echo $teacher_phone; ?></td>
						</tr>
					</table>

					<p>Thank you for your assistance.</p>

					<p>Yours sincerely,<br /><br /><br /><br /><br /><br />WRDSB Classroom Teacher</p>

				</div>				

				<p style="page-break-after: always;">&nbsp;</p>

				<!-- WATS #11 Data Collection of Student Placement Hours to the Ministry of Education -->

				<div class="header">
					<img src="https://wrdsb-ui-assets.s3.amazonaws.com/intranet/2/2.2.0/images/wats_wrdsb.png" alt="WRDSB Work and Transition Support (WATS)" style="height: 100px; width: 247px; float: left;"/>
					<h1><span>WATS-11 [2019-09]</span><br />Data Collection of Student Placement Hours to the Ministry of Education</h1>
				</div>

				<table>
					<tr>
						<th width="20%">For School Year Ending</th>
						<th width="10%">Month</th>
						<td width="30%" class="signature-entry"></td>
						<th width="10%">Year</th>
						<td width="30%" class="signature-entry"></td>
					</tr>
				</table>

				<h2>Teacher Instructions</h2>

				<p>Teachers are required to report all hours completed by students who participated in a placement.</p>

				<p><strong>Note</strong>: To calculate total actual hours, subtract days absent from total scheduled hours.</p>

				<p class="urgent"><strong>Submit form to Learning Support Services &ndash; Experiential Learning, Education Centre PRIOR to the last day of school.</strong></p>

				<h2>School Information</h2>

				<table>
					<tr>
						<th style="width: 10%;">School</th>
						<td style="width: 20%;" class="signature-entry"><?php echo $student_homeschool; ?></td>
						<th style="width: 10%;">Teacher</th>
						<td style="width: 20%;" class="signature-entry"><?php echo $teacher_name; ?></td>
						<th style="width: 10%;">Date</th>
						<td style="width: 30%;" class="signature-entry"></td>
					</tr>
				</table>


				<h2>Student Placement Hours <span>(Note: one line per student per placement)</span></h2>

				<table class="chart">
					<tr>
						<th width="40%">Name of Student</th>
						<th width="15%">Placement start date</th>
						<th width="15%">Placement end date</th>
						<th width="15%">Total actual unpaid hours completed</th>
						<th width="15%">Total actual paid hours completed</th>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th colspan="3" style="text-align: right;">TOTAL HOURS</th>
						<td></td>
						<td></td>
					</tr>					
				</table>

				<p style="page-break-after: always;">&nbsp;</p>

				<!-- WATS #12 Transportation at the Placement, Parent/Guardian Content -->
				<div class="header">
					<img src="https://wrdsb-ui-assets.s3.amazonaws.com/intranet/2/2.2.0/images/wats_wrdsb.png" alt="WRDSB Work and Transition Support (WATS)" style="height: 100px; width: 247px; float: left;"/>
					<h1><span>WATS-12 [2019-12]</span><br />Transportation at the Placement<br />
					Parent/Guardian Consent</h1>
				</div>

				<h2>Student Information</h2>

				<table>
					<tr>
						<th style="width: 10%;">Student</th>
						<td style="width: 40%;" class="signature-entry"><?php echo $student_name; ?></td>
						<th style="width: 10%;">Placement</th>
						<td style="width: 40%;" class="signature-entry"><?php echo $org_name; ?></td>
					</tr>
					<tr>
						<th style="width: 10%;">School</th>
						<td style="width: 40%;" class="signature-entry"><?php echo $student_homeschool; ?></td>
						<th style="width: 10%;">School Year</th>
						<td style="width: 40%;" class="signature-entry"></td>
					</tr>
				</table>

				<h2>Parent/Guardian Information</h2>

				<h3>Transportation at the Placement</h3>
				<ul>
					<li>As part of your child's placement, they may be required to be transported from one location to another by the placement supervisor or designate on a regular basis.</li>
					<li>The employer must ensure that any individual who transports the student in the course of the placement be properly licensed and insured and have completed the WRDSB/OSBIE Volunteer Driver - Authorization to Transport Students form (FS-18-IA5).</li>
				</ul>

				<h2>Acknowledgement and Consent</h2>

				<p>We have read the information on the transportation at the placement and hereby grant permission for <?php echo $student_name; ?> to participate in the placement according to the information outlined above.</p>

				<table>
					<tr>
						<th style="width: 10%;">Student</th>
						<td style="width: 40%;" class="signature-entry"><?php echo $student_name; ?></td>
						<th style="width: 10%;">Parent/Guardian</th>
						<td style="width: 40%;" class="signature-entry"><?php echo $org_name; ?></td>
					</tr>
					<tr>
						<th style="width: 10%;">Date</th>
						<td style="width: 40%;" class="signature-entry"><?php echo $student_homeschool; ?></td>
						<th style="width: 10%;">&nbsp;</th>
						<td style="width: 40%;">&nbsp;</td>
					</tr>
				</table>
			</body>
		</html>

<?php }