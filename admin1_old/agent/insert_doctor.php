<?php
include_once("../function.php");
$name=htmlentities($_POST['name'],ENT_QUOTES);
$special=htmlentities($_POST['special'],ENT_QUOTES);
$gender=htmlentities($_POST['gender'],ENT_QUOTES);
$date=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
$qualify=htmlentities($_POST['qualify'],ENT_QUOTES);
$building_permanent=htmlentities($_POST['building_permanent'],ENT_QUOTES);
$street_permanent=htmlentities($_POST['street_permanent'],ENT_QUOTES);
$landmark_permanent=htmlentities($_POST['landmark_permanent'],ENT_QUOTES);
$area_permanent=htmlentities($_POST['area_permanent'],ENT_QUOTES);
$pin_permanent=htmlentities($_POST['pin_permanent'],ENT_QUOTES);
$city_permanent=htmlentities($_POST['city_permanent'],ENT_QUOTES);
$state_permanent=htmlentities($_POST['state_permanent'],ENT_QUOTES);
$country_permanent=htmlentities($_POST['country_permanent'],ENT_QUOTES);
$building_correspondence=htmlentities($_POST['building_correspondence'],ENT_QUOTES);
$street_correspondence=htmlentities($_POST['street_correspondence'],ENT_QUOTES);
$landmark_correspondence=htmlentities($_POST['landmark_correspondence'],ENT_QUOTES);
$area_correspondence=htmlentities($_POST['area_correspondence'],ENT_QUOTES);
$pin_correspondence=htmlentities($_POST['pin_correspondence'],ENT_QUOTES);
$city_correspondence=htmlentities($_POST['city_correspondence'],ENT_QUOTES);
$state_correspondence=htmlentities($_POST['state_correspondence'],ENT_QUOTES);
$country_correspondence=htmlentities($_POST['country_correspondence'],ENT_QUOTES);
$contact_personal=htmlentities($_POST['contact_personal'],ENT_QUOTES);
$email_personal=htmlentities($_POST['email_personal'],ENT_QUOTES);
$contact_booking=htmlentities($_POST['contact_booking'],ENT_QUOTES);
$email_booking=htmlentities($_POST['email_booking'],ENT_QUOTES);
$person_name=htmlentities($_POST['person_name'],ENT_QUOTES);
$designation=htmlentities($_POST['designation'],ENT_QUOTES);
$exp_year=htmlentities($_POST['exp_year'],ENT_QUOTES);
$exp_month=htmlentities($_POST['exp_month'],ENT_QUOTES);
$organization=htmlentities($_POST['organization'],ENT_QUOTES);
$address_org=htmlentities($_POST['address_org'],ENT_QUOTES);
$service=htmlentities($_POST['service'],ENT_QUOTES);
$specialist=htmlentities($_POST['specialist'],ENT_QUOTES);
$award=htmlentities($_POST['award'],ENT_QUOTES);
$bank=htmlentities($_POST['bank'],ENT_QUOTES);
$branch_name=htmlentities($_POST['branch_name'],ENT_QUOTES);
$branch_address=htmlentities($_POST['branch_address'],ENT_QUOTES);
$account=htmlentities($_POST['account'],ENT_QUOTES);
$fsc=htmlentities($_POST['fsc'],ENT_QUOTES);

$image=$_FILES['picture']['name'];
echo $image;
$ext1=end(explode(".", $_FILES["picture"]["name"]));
	if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif")

                                               {
                                                $folder="../upload/";

                                                $filename = $folder . $image ;
												
                                               
                                                $copied = copy($_FILES['picture']['tmp_name'], $filename);
												
												}
												
												
	mysql_query("insert into `doctor_details` set `name`='$name',`specialization`='$special',`gender`='$gender',`dob`='$date',`qualification`='$qualify',`permanent_building`='$building_permanent',`permanent_street`='$street_permanent',`permanent_landmark`='$landmark_permanent',`permanent_area`='$area_permanent',`permanent_pincode`='$pin_permanent',`permanent_city`='$city_permanent',`permanent_state`='$state_permanent',`permanent_country`='$country_permanent',`correspondence_building`='$building_correspondence',`correspondence_street`='$street_correspondence',`correspondence_landmark`='$landmark_correspondence',`correspondence_area`='$area_correspondence',`correspondence_pincode`='$pin_correspondence',`correspondence_city`='$city_correspondence',`correspondence_state`='$state_correspondence',`correspondence_country`='$country_correspondence',`contact`='$contact_personal',`email`='$email_personal',`booking_contact`='$contact_booking',`booking_email`='$email_booking',`person_name`='$person_name',`person_designation`='$designation',`expr_year`='$exp_year',`expr_month`='$exp_month',`organization`='$organization',`organization_address`='$address_org',`service`='$service',`specialist`='$specialist',`award`='$award',`bank`='$bank',`branch`='$branch_name',`branch_address`='$branch_address',`accountno`='$account',`fsc_code`='$fsc',`picture`='$filename'");	
	$msg="Succesfully Added";
	$id=mysql_insert_id();

header("location:schedule.php?id=$id");
?>