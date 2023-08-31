<?php foreach ($is_appl_rejected as $each_record) {

	//Joshi, Akash, Adding below logic to stop alert for those rejected applictions for which appeal 
	//has been raised. [28-08-2023]
	if(!empty($appealMap)){
	  $appealDetailInfo=$appealMap[$each_record['appeal_id']];
	  if(!empty($appealDetailInfo) && !empty($appealDetailInfo['is_final_submitted']) && $appealDetailInfo['is_final_submitted'] =='yes'){
		  continue;
	  }
	} ?>
<div class="row">
	<div class="col-lg-12">
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h5><i class="icon fas fa-info"></i> Please Note !</h5>
			<?php
                $date = $each_record['created'];
                $dateTime = DateTime::createFromFormat('d/m/Y H:i:s', $date);
                $cancelled_date = $dateTime->format('d/m/Y');
                $appl_type= $each_record['appl_type'];
				$message = <<<EOD
					Application for $appl_mapping[$appl_type]  is rejected by the competent Agmark Authority
					For the reason of  <b>{$each_record['remark']}</b>
					on dated <b>{$cancelled_date}</b>.
					Applicant can appeal within 30 Days of rejection.
					EOD;

				echo $message;
			?>
		</div>
	</div>
</div>
<?php } ?>