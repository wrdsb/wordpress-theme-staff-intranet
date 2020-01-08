<?php
		/* Student Information */

		if ($fields['student_first_name_1570108024972']['value'] != '') {
			$student_name = $fields['student_first_name_1570108024972']['value'] . ' ' . $fields['student_last_name_1570108042822']['value'];
			$student_name_letter = '<strong>' . $fields['student_first_name_1570108024972']['value'] . ' ' . $fields['student_last_name_1570108042822']['value'] . '</strong>';
			$student_name_letter_start = '<strong>' . $fields['student_first_name_1570108024972']['value'] . ' ' . $fields['student_last_name_1570108042822']['value'] . '</strong>';
		} else {
			$student_name = '';
			$student_name_letter = "your son/daughter";
			$student_name_letter_start = "Student";
		}

		$student_phone = $fields['student_phone_1571753490946']['value'];
		$student_homeschool = $fields['student_s_home_school_1570108084565']['value'];

		$student_learning_expectations = $fields['learning_expectations_1570108687861']['value'];
		$student_accommodations = $fields['accommodations_modifications_and_learning_strategies_per_iep_s_instructional_and_environmental_accommodations_1570108730050']['value'];
		
		$student_placement_type = $fields['placement_type_1570108112545']['value'];

		if ($student_placement_type == 'Group') {
			$placement_type_group = ' checked';
		} else if ($student_placement_type == 'Individual') {
			$placement_type_individual= ' checked';
		} else  {
			$placement_type_group = '';
			$placement_type_individual = '';
		}

		$student_photos = $fields['permission_to_show_students_in_photos_media_is-19-l_1570108297025']['value'];

		if ($student_photos == '1') {
			$photo = ' checked';
		} else {
			$photo = '';
		}

		$student_accident_insurance = $fields['student_accident_insurance_obtained_1570108158187']['value'];

		if ($student_accident_insurance == '1') {
			$sai = ' checked';
		} else {
			$sai = '';
		}

		$student_allergies = $fields['allergies_1570108226738']['value'];
		$student_medications = $fields['medications_1570108238187']['value'];
		$student_medical_conditions = $fields['medical_conditions_e_g_seizures_diabetes_asthma_etc_1570108266201']['value'];

		/* Teacher Information */

		if ($fields['teacher_first_name_1570107972696']['value'] != '') {
			$teacher_name = $fields['teacher_first_name_1570107972696']['value'] . ' ' . $fields['teacher_last_name_1570107963832']['value'];
			$teacher_name_signature = $fields['teacher_first_name_1570107972696']['value'] . ' ' . $fields['teacher_last_name_1570107963832']['value'];
		} else {
			$teacher_name = '';
			$teacher_name_signature = "Teacher";
		}

		$teacher_phone = $fields['teacher_phone_1570107944137']['value'];

		/* Organization Information */

		$org_name = $fields['organization_name_1570109126162']['value'];
		$org_dept = $fields['department_name_1570109173920']['value'];
		$org_phone = $fields['organization_phone_1570109183806']['value'];
		$transpo_method = $fields['transportation_plan_and_requirements_1570109564624']['value'];
		$org_address = $fields['address_1570108899210']['value'];
		$org_city = $fields['city_1570108900424']['value'];
		$org_postal_code = $fields['postal_code_1570109143008']['value'];

		if ($org_address != '') {
			$org_full_address = $org_address . ', ' . $org_city . ', ON, ' . $org_postal_code;
		} else {
			$org_full_address = '';
		}

		if ($fields['direct_supervisor_first_name_1570109201565']['value'] != '') {
			$org_direct_supervisor = $fields['direct_supervisor_first_name_1570109201565']['value'] . ' ' . $fields['direct_supervisor_last_name_1570109222668']['value'];
			$org_direct_supervisor_signature = $fields['direct_supervisor_first_name_1570109201565']['value'] . ' ' . $fields['direct_supervisor_last_name_1570109222668']['value'];
		} else {
			$org_direct_supervisor = '';
			$org_direct_supervisor_signature = "Placement Supervisor";
		}	

		$org_direct_supervisor_phone = $fields['direct_supervisor_phone_1570109232171']['value'];
		$org_direct_supervisor_email = $fields['direct_supervisor_email_1570109245542']['value'];
		$school_monitors = $fields['school_monitor_s_1570109284129']['value'];
		$days_of_work = $fields['days_of_work_1570109424722']['value'];

		$days = $days_of_work['0'].' '.$days_of_work['1'].' '.$days_of_work['2'].' '.$days_of_work['3'].' '.$days_of_work['4'].' '.$days_of_work['5'].' '.$days_of_work['6'].' '.$days_of_work['7'];

		$hours_start = $fields['hours_start_time_1570109458411']['value'];
		$hours_end = $fields['hours_end_time_1570109517130']['value'];
		$dress_code = $fields['dress_code_1570109582368']['value'];
		$ppe_required = $fields['describe_ppe_required_1573569145000']['value'];
		$tasks = $fields['tasks_1570109534174']['value'];

		/* Parent Information */

		if ($fields['parent_guardian_first_name_1570108330437']['value'] != '') {
			$guardian_name = $fields['parent_guardian_first_name_1570108330437']['value'] . ' ' . $fields['parent_guardian_last_name_1570108427317']['value'];
			$guardian_name_letter = $fields['parent_guardian_first_name_1570108330437']['value'] . ' ' . $fields['parent_guardian_last_name_1570108427317']['value'];
		} else {
			$guardian_name = '';
			$guardian_name_letter = "parent/guardian";
			$guardian_name_letter_start = "Parent/guardian";
		}

		$guardian_phone = $fields['parent_guardian_phone_1570111729633']['value'];
		$guardian_email = $fields['parent_guardian_email_1570111734152']['value'];

		/* Placement Information */

		$student_job_title = $fields['student_job_title_1570109098642']['value'];

		/* Field list from Ninja Forms
		$fields['']['value'];
		Describe PPE required {field:describe_ppe_required_1573569145000}
		Submitter email address {field:submitter_email_address_1570107790788}
		Teacher first name {field:teacher_first_name_1570107972696}
		Teacher last name {field:teacher_last_name_1570107963832}
		Teacher phone {field:teacher_phone_1570107944137}
		Student first name {field:student_first_name_1570108024972}
		Student last name {field:student_last_name_1570108042822}
		Student phone {field:student_phone_1571753490946}
		Student's home school {field:student_s_home_school_1570108084565}
		Learning expectations {field:learning_expectations_1570108687861}
		Accommodations, modifications and learning strategies (per IEP's instructional and environmental accommodations) {field:accommodations_modifications_and_learning_strategies_per_iep_s_instructional_and_environmental_accommodations_1570108730050}
		Placement Type {field:placement_type_1570108112545}
		Permission to show students in photos, media (IS-19-L) {field:permission_to_show_students_in_photos_media_is-19-l_1570108297025}
		Student Accident Insurance obtained? {field:student_accident_insurance_obtained_1570108158187}
		Parent/Guardian first name {field:parent_guardian_first_name_1570108330437}
		Parent/Guardian last name {field:parent_guardian_last_name_1570108427317}
		Parent/Guardian phone {field:parent_guardian_phone_1570111729633}
		Parent/Guardian email {field:parent_guardian_email_1570111734152}
		Allergies {field:allergies_1570108226738}
		Medications {field:medications_1570108238187}
		Medical conditions (e.g., seizures, diabetes, asthma, etc.) {field:medical_conditions_e_g_seizures_diabetes_asthma_etc_1570108266201}
		Student job title {field:student_job_title_1570109098642}
		Organization name {field:organization_name_1570109126162}
		Department Name {field:department_name_1570109173920}
		Organization phone {field:organization_phone_1570109183806}
		Address {field:address_1570108899210}
		City {field:city_1570108900424}
		Postal Code {field:postal_code_1570109143008}
		Direct Supervisor first name {field:direct_supervisor_first_name_1570109201565}
		Direct Supervisor last name {field:direct_supervisor_last_name_1570109222668}
		Direct Supervisor phone {field:direct_supervisor_phone_1570109232171}
		Direct Supervisor email {field:direct_supervisor_email_1570109245542}
		School Monitor(s) {field:school_monitor_s_1570109284129}
		Days of work {field:days_of_work_1570109424722}
		Hours: start time {field:hours_start_time_1570109458411}
		Hours: end time {field:hours_end_time_1570109517130}
		Dress code {field:dress_code_1570109582368}
		Personal Protective Equipment (PPE) required? {field:personal_protective_equipment_ppe_required_1570109551171}
		Tasks {field:tasks_1570109534174}
		Transportation plan and requirements {field:transportation_plan_and_requirements_1570109564624}
		*/

