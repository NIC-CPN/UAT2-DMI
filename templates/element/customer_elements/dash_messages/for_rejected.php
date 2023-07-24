<div class="row">
	<div class="col-lg-12">
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h5><i class="icon fas fa-info"></i> Please Note !</h5>
			<?php
                $date = $is_appl_rejected['created'];
                $dateTime = DateTime::createFromFormat('d/m/Y H:i:s', $date);
                $cancelled_date = $dateTime->format('d/m/Y');

				$message = <<<EOD
					This application is rejected by the competent Agmark Authority
					For the reason of  <b>{$is_appl_rejected['remark']}</b>
					on dated <b>{$cancelled_date}</b>.
					Applicant can appeal within 30 Days of rejection.
					EOD;

				echo $message;
			?>
		</div>
	</div>
</div>
