<section class="col-lg-12 connectedSortable">
    <div class="card card-info">
        <div class="card-header"><h3 class="card-title-new">Rejected Application</h3></div>
            <div class="card-body">
            <table id="example2" class="table m-0 table-bordered">
                <thead class="tablehead">
                <tr>
                    <th>Applicant Id</th>
                    <th>Rejection Reason</th>
                    <th>Rejection Date</th>
                    <th>Deadline for filing application</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td class="boldtext"><?php echo $is_appl_rejected['customer_id']; ?></td>
                    <td ><?php echo $is_appl_rejected['remark']; ?></td>
                    <td><?php
                     $date = $is_appl_rejected['created'];
                     $dateTime = DateTime::createFromFormat('d/m/Y H:i:s', $date);
                    echo $dateTime->format('d/m/Y'); ?></td>
                    <td><?php
                    $DeadlineDate = date ("d/m/Y", strtotime ( $dateTime->format('d-m-Y') ."+30 days"));
                    echo $DeadlineDate; ?>
                    </td>
                    <td>
                    <?php
                      if(empty($is_appl_rejected['appeal_id']) && date("d-m-Y")>$DeadlineDate)  { ?>
                       <a target="blank" href="<?php echo $this->request->getAttribute("webroot");?>application/application-type/12" class="nav-link">Click here for Appeal</a>

                      <?php }
                      elseif (!empty($is_appl_rejected['appeal_id'])){?>
                        Appeal Reference: <?php $is_appl_rejected['appeal_id'];?>
                      <?php }
                      else
                      { ?>
                        Appeal deadline has passed.
                      <?php } ?>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<div class="modal fade" id="confirm_action"  data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Appeal Initiation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
            <form>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Grounds/Reason for appeal: </label>
            <textarea class="form-control" id="message-text"></textarea>

          </div>

          <div class="form-group">
    <label for="exampleFormControlFile1">Supporting Document: </label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
        </form>
				<div class="clearfix"></div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success" id="final_submit" ><i class="fa fa-check-circle"></i> Submit</button>
				<button class="btn btn-danger" data-dismiss="modal"><i class="far fa-times-circle"></i> Close</button>
			</div>
		</div>
	</div>
</div>
