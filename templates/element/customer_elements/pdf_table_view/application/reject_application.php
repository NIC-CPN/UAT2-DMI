<section class="col-lg-12 connectedSortable">
    <div class="card card-info">
        <div class="card-header"><h3 class="card-title"> Rejected Application </h3></div>
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
                    $cutoffDate =  date ("Y-m-d", strtotime ( $dateTime->format('d-m-Y') ."+30 days"));
                    $deadlineDateForDisplay = date ("d/m/Y", strtotime ( $dateTime->format('d-m-Y') ."+30 days"));
                    echo $deadlineDateForDisplay; ?>
                    </td>
                    <td>
                    <?php
                    //@@Author: Joshi, Akash
                    //Below method will compare provided time with current time
                    //Parameter: Date in Y-m-d format
                    //Return: Meaningfull boolean value.
                    function hasCutoffDatePassed($cutoffDate)
                    {
                      return strtotime(date("Y-m-d"))> strtotime($cutoffDate);
                    }
                      if(!empty($final_apl_submit_status) && $final_apl_submit_status !='no_final_submit')  { ?>
                        <a target="blank" href="<?php echo $this->request->getAttribute("webroot");?>application/application-type/12" class="nav-link">Appeal Reference</a>
                      <?php }
                      elseif(hasCutoffDatePassed($cutoffDate))  { ?>
                        Appeal deadline has passed.
                      <?php }
                      elseif ($final_apl_submit_status =='no_final_submit' && !empty($is_appl_rejected['appeal_id']))
                      {
                        ?>
                        <a target="blank" href="<?php echo $this->request->getAttribute("webroot");?>application/application-type/12" class="nav-link">Complete Appeal Application</a>
                      <?php
                      }
                      elseif (empty($is_appl_rejected['appeal_id'])){?>
                         <a target="blank" href="<?php echo $this->request->getAttribute("webroot");?>application/application-type/12" class="nav-link">Initiate Appeal</a>
                      <?php } ?>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
