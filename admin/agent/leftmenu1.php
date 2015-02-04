	<?php
	$sqlser=mysql_query("select * from `details` where `slno`='$id'");
	$reser=mysql_fetch_array($sqlser);
	$uid=$reser['uniqueid'];
	?>
	<div class="list_menu">
						<ul class="accordion" id="accordion-5">
								 
										<li class="active">
											<i class="icon-chevron-right"></i> Dashboard
										</li>
										<li>
											<a href="doctor.php" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Add Doctor</a>
										</li>
										<li>
											<a href="edit_service.php?uniqueid=<?php echo $uid;?>&slno=<?php echo $id;?>" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Edit Services</a>
										</li>
										<li>
											<a href="edit_specialize.php?uniqueid=<?php echo $uid;?>&slno=<?php echo $id;?>" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Edit Specialization</a>
										</li>
										<li>
											<a href="edit_education.php?uniqueid=<?php echo $uid;?>&slno=<?php echo $id;?>" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Edit Education</a>
										</li>
										<li>
											<a href="edit_experience.php?uniqueid=<?php echo $uid;?>&slno=<?php echo $id;?>" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Edit Experience</a>
										</li>
										<li>
											<a href="edit_award.php?uniqueid=<?php echo $uid;?>&slno=<?php echo $id;?>" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Edit Awards and Recognitions</a>
										</li>
										<li>
											<a href="edit_member.php?uniqueid=<?php echo $uid;?>&slno=<?php echo $id;?>" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Edit Memberships</a>
										</li>
										<li>
											<a href="edit_registration.php?uniqueid=<?php echo $uid;?>&slno=<?php echo $id;?>" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Edit Registrations</a>
										</li>
										<li>
											<a href="../adminlogout.php" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Log Out</a>
										</li>
										
										
						</ul>
	</div>