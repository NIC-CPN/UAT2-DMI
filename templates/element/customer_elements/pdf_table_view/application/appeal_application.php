<section class="col-lg-12 connectedSortable">
    <div class="card card-info">
        <div class="card-header"><h3 class="card-title"> Appeal Application </h3></div>
            <div class="card-body">
            <table id="example2" class="table m-0 table-bordered">
                <thead class="tablehead">
                <tr>
                    <th>Applicant Id</th>
                    <th>Appeal PDF</th>
                    <th>Appeal Submission Date</th>
                    <th>Status</th>
                    <th>Appeal Application</th>
                    <th>Rejected Application</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td class="boldtext"><?php echo $appeal_details['customer_id']; ?></td>
                    <td><?php $split_file_path = explode("/",$apl_pdfs_records['pdf_file']); $file_name = $split_file_path[count($split_file_path) - 1]; ?>
                            <a target="blank" href="<?php echo $apl_pdfs_records['pdf_file']; ?>"><?php echo $file_name; ?></a>
                    </td>
                    <td><?php
                     $date = $appeal_details['created'];
                     $dateTime = DateTime::createFromFormat('d/m/Y H:i:s', $date);
                    echo $dateTime->format('d/m/Y'); ?></td>
                    <td><?php
                     $status = $appeal_details['status'];
                    echo $status; ?></td>
                    <td>
                       <a title="Open" target="blank" href="<?php echo $this->request->getAttribute("webroot");?>application/application-type/12" ><span class="glyphicon glyphicon-new-window"></span></a>
                    </td>
                    <td>
                       <a title="Open" target="blank" href="<?php echo $this->request->getAttribute("webroot");?>application/application-type/<?php echo $is_appl_rejected['appl_type']?>"><span class="glyphicon glyphicon-new-window"></span></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
