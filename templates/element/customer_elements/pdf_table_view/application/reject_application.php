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
                        Appeal Reference: <?php echo $is_appl_rejected['appeal_id'];?>
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
