	<!-- <?php echo $this->Html->css('Reports/primary_user_details_report') ?> -->

	<?php  // Change on 13/3/2023 :This template Used for REnewal DUe REcords- Yashwant ?>

	<div class="content-wrapper bg-bg">
		<div class="content-header page-header" id="page-load">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h6 class="m-0 ml-3"><?php echo $report_heading; ?></h6>
					</div>
					<div class="col-sm-6 my-auto">
						<ol class="breadcrumb float-sm-right">
							<span class="badge bg-light my-auto"><?php echo $this->Html->link('Dashboard', array('controller' => 'dashboard', 'action'=>'home'));?></a></span>
							<span class="my-auto"><i class="fas fa-chevron-right px-2 fs80"></i><span class="badge bg-light"><?php echo $this->Html->link('All Reports', array('controller' => 'reports', 'action'=>'report_types'));?></a></span></span>
							<span class=""><i class="fas fa-chevron-right px-2 fs80"></i><span class="badge page-header">
								<?php echo $report_heading; ?></span>
							</span>
						</ol>
					</div>
					<div class="clearfix"></div>
				</div>
	    	</div>
	  	</div>

		<div class="bg-bg">
		 	<div class="container-fluid">
	      		<div class="row">
	        		<div class="col-md-12">
						<div class="mx-5">
							<?php ?> <span class="badge bg-light shadow">RESULT</span><i class="fas fa-chevron-right px-2 fs80"></i> <?php
								
					
							?>
						</div>
					</div>
	      		</div>
	    	</div>

			<section class="content form-middle">
				<div class="container-fluid border rounded-lg border-light bg-light p-3 shadow">
					<div class="row">
						<div class="col-md-12">
							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header px-3 py-1 page-header">
											<h5 class="modal-title" id="exampleModalLabel">
												<span>Primary User</span><i class="fas fa-caret-right px-2"></i>
												<span class="bg-light rounded px-1 fwb" id="customer_id"></span><i class="fas fa-chevron-right px-2 fs80"></i>
												<span>Added Firms Details</span>
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body py-1" id="model-body">
											<div class="table-responsive report-table-format">
												<table class="table table-sm rounded mt-2" id="firm_details_table">
													<thead class="table-light">
														<tr class="rounded">
															<th class="text-right"><span class="table-heading">Firm/Primises ID</span></th>
															<th><span class="table-heading">Firm/Primises Name</span></th>
															<th><span class="table-heading">Application Type</span>
															</th>
															<th>
																<span class="table-heading">Application Form</span>
															</th>
															<th class="text-right"><span class="table-heading">State</span></th>
															<th><span class="table-heading">District</span></th>
															<th class="text-right"><span class="table-heading">Date</span></th>
															<th><span class="table-heading">Time</span></th>
														</tr>
													</thead>
													<tbody>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="table-responsive report-table-format">
								<table class="table table-sm rounded" id="Renewaldue_report_table">
									<thead class="table-light text-center">
										<tr class="rounded">
											<th><span class="table-heading">S.No</span></th>
											<th><span class="table-heading">Application ID</span></th>
											<th ><span class="table-heading">Application Type</span></th>
											<th><span class="table-heading">Application Form</span></th>
											<th ><span class="table-heading">State</span></th>
											<th><span class="table-heading">District</span></th>
											<th ><span class="table-heading">Date</span></th>
											<th><span class="table-heading">Time</span></th>
											<!-- <th class="text-center"><span class="table-heading">+</span></th> -->
										</tr>
									</thead>
									<tbody class="">
										<?php

										//echo"<pre>";print_r($current_Renewaldue_details);exit;

										if(!empty($current_Renewaldue_details)) {
											$sr_no = 1 ;
										}
										for ($i=0; $i<sizeof($current_Renewaldue_details); $i++) { ?>
										<tr id="table_row" class="row-hover border border-light text-center" data-toggle="modal" data-target="#exampleModal">
											<td>
												<span class="badge subtitle mb-1 borderless hover-border"><?php echo $sr_no; ?></span>
											</td>
											<td class="title borderless fs75fwb">
												<?php echo  $current_Renewaldue_details[$i]['customer_id']; ?>
											</td>
											<td class="center">
												<?php $explode_app_type = explode('(',$application_type[$i]); ?>
												<span class="badge title borderless">
													<?php echo $explode_app_type[0]; ?> 													<!-- <//?php echo $application_type[$i]; ?> --> 

												</span>
											</td>
											<td>
												<?php $explode_app_type = explode('(',$application_type[$i]); ?>
											<span class="badge subtitle borderless">(<?php echo $explode_app_type[1]; ?></span>
											</td>
											<td class="text-center">
												<span class="badge subtitle borderless">
												<?php echo  $all_states[$current_Renewaldue_details[$i]['state']]; ?>
												</span>
											</td>
											<td>
												<span class="badge subtitle borderless">
													<?php echo  $all_district[$current_Renewaldue_details[$i]['district']]; ?>
												</span>
											</td>

											<?php $explode_date = explode(' ',$current_Renewaldue_details[$i]['created']); ?>

											<td class="text-right">
												<?php if($current_Renewaldue_details[$i]['created'] == null) 
												{ echo $current_Renewaldue_details[$i]['created']; } else { ?>
												<span class="badge title borderless"><?php echo $explode_date[0]; } ?></span>
											</td>

											<td><?php if($current_Renewaldue_details[$i]['created'] == null) { echo $current_Renewaldue_details[$i]['created']; } else { ?> 
												<span class="badge subtitle subtitle-2 rounded px-1 borderless"><?php echo $explode_date[1]; } ?></span>
											</td>
											<!-- <td class="text-center"><span class="badge title mb-1 borderless hover-border"><//?php echo '+ FIRM DETAILS'; ?></span></td> -->
										</tr>

										<?php $sr_no++; } if(empty($current_Renewaldue_details)) { ?>
										<tr>
											<td colspan="7" class="fs-4"><?php echo "NO Records Available"; ?></td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<div class="ml-3 mt-3">
			<h5><a href="<?php echo $this->request->getAttribute('webroot');?>reports/<?php echo $backAction; ?>" class="report-back-button btn back-btn shadow" role="button">Back to All Reports</a>
				<?php //echo $this->Html->link('Back', array('controller' => 'reports', 'action'=>'report_types')); ?>
			</h5>
		</div>
		<?php echo $this->Form->end(); ?>
	</div>

	<?php echo $this->Html->script('Reports/renewal_due_firm_details'); ?>
