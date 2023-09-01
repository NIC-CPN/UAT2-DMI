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
                    <th>Original Application Type</th>
                </tr>
                </thead>
                <tbody>
                <?php
               
                foreach ($appeal_details as $each_record) { 
                  $pdfs=$supportingDocuments[$each_record['appeal_id']];
                    ?>
                <tr>
                    <td class="boldtext"><?php echo $each_record['customer_id']; ?></td>
                    <td>
    <table>
        <?php
        foreach ($pdfs as $apl_pdf_record) {
            $split_file_path = explode("/", $apl_pdf_record['pdf_file']);
            $file_name = end($split_file_path);
            ?>
            <tr>
                <td style="border: none;">
                    <a target="_blank" href="<?php echo $apl_pdf_record['pdf_file']; ?>">
                        <?php echo $file_name; ?>
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</td>


                    <td><?php
                     $date = $each_record['created'];
                     $dateTime = DateTime::createFromFormat('d/m/Y H:i:s', $date);
                    echo $dateTime->format('d/m/Y'); ?></td>
                    <td><?php
                     $status = $each_record['status'];
                     $associated_appl_type=$each_record['associated_appl_type'];
                    echo $status; ?></td>
                    <td>
                       <a title="Open" target="blank" href="<?php echo $this->request->getAttribute("webroot");?>application/application-type/12?associated-rejectedapp=<?php echo $associated_appl_type?>" ><span class="glyphicon glyphicon-new-window"></span></a>
                    </td>
                    <td ><?php echo $appl_mapping[$associated_appl_type]; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
