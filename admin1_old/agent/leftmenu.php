<?php
$usernm=$_SESSION['agentid'];
$sql=mysql_query("select * from `login` where `username`='$usernm'");
$res=mysql_fetch_array($sql);
//echo $res['status'].$res['type'];
?>
<style>
.bck{
background:#08C;
}
.bckk{
background:#fff;
text-shadow:none;
}
.back{
background:#cdcdcd;
text-shadow:none;
}
</style>
						<div class="list_menu">
						<ul class="accordion" id="accordion-5">
								 
										<li class="active">
											<i class="icon-chevron-right"></i> Dashboard
										</li>
									
										<li>
											<a href="addfeedback.php" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Add Customers Feedback</a>
										</li>
										<?php
										if($res['status']==1){
										?>
										<li>
											<a href="agent.php" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Add Agent</a>
										</li>
										<li class="bck"><a href="#" style="color:#fff; text-shadow:none;">Reports</a>
												<ul>
														<li>
														<a href="viewreport.php" class="back">View Report</a>
														</li>					
												</ul>
										</li>
										<?php
										}
										elseif($res['status']==2 && $res['type']=="doctor"){
										?>
										<li>
											<a href="doctor.php" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Add Doctor</a>
										</li>
										<li>
											<a href="addimage.php" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Add Small Images</a>
										</li>
										<li class="bck"><a href="#" style="color:#fff; text-shadow:none;">Reports</a>
												<ul>
														<li>
														<a href="viewreport.php" class="back">View Report</a>
														</li>														
												</ul>
										</li>
										<?php
										}
										else
										{
										?>
										<li>
											<a href="customer.php" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Add customer</a>
										</li>
										<li>
											<a href="balance.php" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Add Balance</a>
										</li>
										<li class="bck"><a href="#" style="color:#fff; text-shadow:none;">Reports</a>
												<ul>
														<li>
														<a href="viewreport.php" class="back">View Report</a>
														</li>	
														<li>
														<a href="viewappointmentreport.php" class="back">View Appointment Report</a>
														</li>														
												</ul>
										</li>
										<?php
										}
										?>
										
										<li>
											<a href="../adminlogout.php" class="bckk"><i class="icon-chevron-right"><img src="image/1.png" /></i>Log Out</a>
										</li>
										
										
						</ul>
						</div>
