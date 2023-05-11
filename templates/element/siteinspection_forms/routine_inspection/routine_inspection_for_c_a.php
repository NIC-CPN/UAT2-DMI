<?php //pr($section_form_details);die; ?>
<?php echo $this->Form->create(null, array('type'=>'file', 'enctype'=>'multipart/form-data', 'id'=>$section)); ?>
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<label class="badge badge-info">Routine Inspection Report (CA-Packer)</label>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><?php echo $this->Html->link('Dashboard', array('controller' => 'customers', 'action'=>'primary_home'));?></li>
						<li class="breadcrumb-item active">Routine Inspection Report (CA-Packer)</li>
					</ol>
				</div>
			</div>
		</div>
	</div>  
<section id="form_outer_main" class="content form-middle">
<div class="container-fluid">
<h5 class="mt-1 mb-2">Routine Inspection Report (CA-Packer)</h5>
<div id='form_inner_main'>
<div class="row">
<div class="col-md-12">
<div class="card card-success" id="form_outer_main">
<div class="card-header"><h3 class="card-title">Initial Details</h3></div>
<?php echo $this->Form->create(); ?>
<div class="card card-success">
<div class="form-horizontal">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-5 col-form-label">Date of Last Inspection <span class="cRed">*</span></label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->control('date_last_inspection', array('type'=>'text', 'id'=>'date_last_inspection', 'value'=>$section_form_details[0]['date_last_inspection'], 'class'=>'form-control input-field', 'placeholder'=>'Enter DD/MM/YYYY', 'label'=>false)); ?>
                        <span id="error_date_last_inspection" class="error invalid-feedback"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-5 col-form-label">Date & Time of present Inspection <span class="cRed">*</span></label>
                    <div class="col-sm-7">
                    <?php echo $this->Form->control('date_p_inspection', array('type'=>'text', 'id'=>'date_p_inspection', 'escape'=>false, 'placeholder'=>'Enter DD/MM/YYYY',
                    'value'=>$section_form_details[0]['date_p_inspection'],'maxlength'=>'10', 'minlength'=>'10', 'class'=>' form-control input-field', 'disabled'=>false, 'label'=>false)); ?>
                    <span id="error_date_p_inspection" class="error invalid-feedback"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<!-- 1. Name of Authorized Packer -->
<div class="card-header sub-card-header-firm"><h3 class="card-title">Name of Authorized Packer</h3></div>
    <div class="form-horizontal">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-5 col-form-label">Firm Name <span class="cRed">*</span></label>
                        <div class="col-sm-7">
                        <?php echo $this->Form->control('name_authorized_packer', array('type'=>'text', 'id'=>'name_authorized_packer','value'=>$firm_details['firm_name'],'class'=>'form-control','label'=>false)); ?>
                        <span id="error_name_authorized_packer" class="error invalid-feedback"></span>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>

<!-- 2. Address of the Authorized Premises -->
<div class="card-header sub-card-header-firm"><h3 class="card-title">Address of the Authorized Premises</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Address<span class="cRed">*</span></label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->control('street_address', array('type'=>'textarea', 'id'=>'street_address','value'=>$firm_details['street_address'],'readonly'=>true,  'class'=>'form-control input-field', 'label'=>false)); ?>
                        <span id="error_street_address" class="error invalid-feedback"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 3. Contact Details of the packer -->
<div class="card-header sub-card-header-firm"><h3 class="card-title">Contact Details of the packer</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Email ID<span class="cRed">*</span></label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->control('email', array('type'=>'email', 'id'=>'email', 'class'=>'form-control', 'label'=>false,'value'=>base64_decode($firm_details['email']),'readonly'=>true,)); ?>
                        <span id="error_email" class="error invalid-feedback"></span>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-5 col-form-label">Mobile No.<span class="cRed">*</span></label>
                <div class="col-sm-7">
                    <?php echo $this->Form->control('mobile_no', array('type'=>'text','value'=>base64_decode($firm_details['mobile_no']),'readonly'=>true, 'id'=>'mobile_no', 'class'=>'form-control', 'label'=>false)); ?>
                     <span id="error_mobile_no" class="error invalid-feedback"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 4. Certificate of Authorization No. and valid upto -->
<div class="card-header sub-card-header-firm"><h3 class="card-title">Certificate of Authorization No. and valid upto</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Certificate No.<span class="cRed">*</span></label>
                    <div class="col-sm-7">
                     <?php echo $this->Form->control('certificate_no', array('type'=>'text', 'id'=>'certificate_no','value'=>$firm_details['customer_id'],'readonly'=>true,  'class'=>'form-control', 'label'=>false)); ?>
                     <span id="error_certificate_no" class="error invalid-feedback"></span>
                    </div>
                </div>
            </div>
           
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-5 col-form-label">Valid Upto.<span class="cRed">*</span></label>
                <div class="col-sm-7">
                  <?php echo $this->Form->control('valid_upto', array('type'=>'text', 'id'=>'valid_upto', 'class'=>'form-control','value'=>$section_form_details[2],'label'=>false,'readonly'=>true,)); ?>
                    <span id="error_valid_upto" class="error invalid-feedback"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 5. Commodity (ies) for which CA is granted -->
 <div class="card-header sub-card-header-firm"><h3 class="card-title">Commodity (ies) for which CA is granted</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Commodity<span class="cRed">*</span></label>
                    <div class="col-sm-7">
                         <?php echo $this->Form->control('sub_commodity', array('type'=>'select', 'options'=>$section_form_details[3], 'multiple'=>'multiple', 'label'=>false, 'disabled'=>'disabled', 'class'=>'form-control')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 6. Name of the grading Laboratory -->
<div class="card-header sub-card-header-firm"><h3 class="card-title">Name of the grading Laboratory</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Grading laboratory<span class="cRed">*</span></label>
                    <div class="col-sm-7">
                        <?php if($section_form_details[4] != null){?>  
                        <?php echo $this->Form->control('grading_lab', array('type'=>'text', 'id'=>'grading_lab', 'value'=>$section_form_details[4],'readonly'=>true,   'class'=>'form-control', 'label'=>false, 'required'=>true)); ?>
                        <?php }else {?>
                        <?php echo $this->Form->control('grading_lab', array('type'=>'text', 'id'=>'grading_lab','class'=>'form-control','readonly'=>true, 'label'=>false, 'required'=>true)); ?>
                        <div class="colorWarning margin5 header-text">Laboratory must be mapped by CA on the System</div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 7. Name of approved Printing Press -->
<div class="card-header sub-card-header-firm"><h3 class="card-title">Name of approved Printing Press</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Printing press <span class="cRed">*</span></label>
                    <div class="col-sm-7">
                    <?php if($section_form_details[5] != null){?>  
                        <?php echo $this->Form->control('printing_press', array('type'=>'text', 'value'=>$section_form_details[5],'readonly'=>true,'id'=>'printing_press', 'class'=>'form-control input-field', 'label'=>false)); ?>
                        <span id="error_printing_press" class="error invalid-feedback"></span>
                        <?php }else { ?>
                        <?php echo $this->Form->control('printing_press', array('type'=>'text','readonly'=>true,'id'=>'printing_press', 'class'=>'form-control input-field', 'label'=>false)); ?>
                        <span id="error_printing_press" class="error invalid-feedback"></span>
                        <div class="colorWarning margin5 header-text">Printing Press must by mapped by CA on the System</div>
                        <?php } ?>
                    </div>
                </div>
            </div>
           
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-5 col-form-label"> Record of invoice of print Agmark replica is upto date or not?<span class="cRed">*</span></label>
                            <div class="col-sm-7">
                            <?php 
                                    $i=1;
                                    $record_of_invice = $section_form_details[0]['record_of_invice'];
                            
                                        if($record_of_invice == 'yes'){
                                            $checked_yes = 'checked';
                                            $checked_no = '';
                                        } else {

                                            $checked_yes = '';
                                            $checked_no = 'checked';
                                        }
                                    $i++;
                                ?>
                                <div class="col-sm-7">
                                    <div class=" d-inline">
                                        <input type="radio" name="record_of_invice" checked="" id="record_of_invice-yes" value="yes"<?php echo $checked_yes; ?>>
                                        <label for="record_of_invice-yes">Yes
                                        </label>
                                    </div>
                                <div class=" d-inline">
                                    <input type="radio" name="record_of_invice" id="record_of_invice-no" value="no" <?php echo $checked_no; ?>>
                                    <label for="record_of_invice-no">No
                                    </label>
                                </div>
                                <span id="error_record_of_invice" class="error invalid-feedback"></span>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
<!-- 8. Name of the chemist Incharge Whether present at the time of Inspection -->
  <div class="card-header sub-card-header-firm"><h3 class="card-title">Name of the chemist Incharge Whether present at the time of Inspection</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Chemist Incharge<span class="cRed">*</span></label>
                    <div class="col-sm-7">
                        <?php if($section_form_details[6] != null){?>    
                            <?php echo $this->Form->control('fax_no', array('type'=>'text', 'placeholder'=>'Enter name of the chemist incharge','value'=>$section_form_details[6][0]['chemist_fname']." ".$section_form_details[6][0]['chemist_lname'],'readonly'=>true, 'id'=>'fax_no', 'class'=>'form-control input-field', 'label'=>false)); ?>
                        <?php }else{ ?>
                            <?php echo $this->Form->control('fax_no', array('type'=>'text', 'readonly'=>true, 'id'=>'fax_no', 'class'=>'form-control input-field', 'label'=>false)); ?>
                                <div class="colorWarning margin5 header-text col-form-label"> Chemist Registr and and mapped by CA on the System</div>
                            <span id="error_fax_no" class="error invalid-feedback"></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-header sub-card-header-firm"><h3 class="card-title">Is the premises adequately lighted, ventilated & hygienic</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Is the premises adequately lighted, ventilated & hygienic<span class="cRed">*</span></label>
                    <div class="col-sm-7">
                        <?php
                            $i=1;
                            $premises_adequately = $section_form_details[0]['premises_adequately'];
                            
                            if($premises_adequately == 'yes'){
                                $checked_yes = 'checked';
                                $checked_no = '';
                            } else {

                                $checked_yes = '';
                                $checked_no = 'checked';
                            }
                            $i++;
                            ?>
                    
                            <div class=" d-inline">
                                <input type="radio" name="premises_adequately" checked="" id="premises_adequately-yes" value="yes" <?php echo $checked_yes; ?>>
                                <label for="premises_adequately-yes">Yes
                                </label>
                            </div>
                            <div class=" d-inline">
                                <input type="radio" name="premises_adequately" id="premises_adequately-no" value="no" <?php  echo $checked_no; ?>>
                                <label for="premises_adequately-no">No
                                </label>
                            </div>
                        <span id="error_premises_adequately" class="error invalid-feedback"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                           
<div class="card-header sub-card-header-firm"><h3 class="card-title">Is the laboratory properly equipped</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Is the laboratory properly equipped<span class="cRed">*</span></label>
                    <div class="col-sm-7">
                        <?php
                            $i=1;
                            $lab_properly_equipped = $section_form_details[0]['lab_properly_equipped'];
                            
                            if($lab_properly_equipped == 'yes'){
                                $checked_yes = 'checked';
                                $checked_no = '';
                            } else {

                                $checked_yes = '';
                                $checked_no = 'checked';
                            }
                            $i++;
                            ?>
                            <div class=" d-inline">
                                <input type="radio" name="lab_properly_equipped" checked="" id="lab_properly_equipped-yes" value="yes" <?php echo $checked_yes; ?>>
                                <label for="lab_properly_equipped-yes">Yes
                                </label>
                            </div>
                            <div class=" d-inline">
                                <input type="radio" name="lab_properly_equipped" id="lab_properly_equipped-no" value="no" <?php echo $checked_no; ?>>
                                <label for="lab_properly_equipped-no">No
                                </label>
                            </div>
                        <span id="error_lab_properly_equipped" class="error invalid-feedback"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-header sub-card-header-firm"><h3 class="card-title">Grading Records</h3></div>
        <div class="form-horizontal">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-5 col-form-label">Are they up to date<span class="cRed">*</span></label>
                            <?php
                            $i=1;
                            $are_you_upto_date = $section_form_details[0]['are_you_upto_date'];
                            
                                if($are_you_upto_date == 'yes'){
                                    $checked_yes = 'checked';
                                    $checked_no = '';
                                } else {

                                    $checked_yes = '';
                                    $checked_no = 'checked';
                                }
                                $i++;
                            ?>
                                <div class=" d-inline">
                                    <input type="radio" name="are_you_upto_date" checked="" id="are_you_upto_date-yes" value="yes" <?php echo $checked_yes; ?>>
                                    <label for="are_you_upto_date-yes">Yes
                                    </label>
                                </div>
                                <div class=" d-inline">
                                    <input type="radio" name="are_you_upto_date" id="are_you_upto_date-no" value="no" <?php  echo $checked_no; ?>>
                                    <label for="are_you_upto_date-no">No
                                    </label>
                                </div>
                                <span id="error_are_you_upto_date" class="error invalid-feedback"></span>
                        </div>
                </div>
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-7 col-form-label">Are they being forwarded to the concerned offices in time? <span class="cRed">*</span></label>
                    <?php
                    $i=1;
                    $concerned_offices = $section_form_details[0]['concerned_offices'];
                    
                        if($concerned_offices == 'yes'){
                            $checked_yes = 'checked';
                            $checked_no = '';
                        } else {

                            $checked_yes = '';
                            $checked_no = 'checked';
                        }
                        $i++;
                    ?>
                        <div class=" d-inline">
                            <input type="radio" name="concerned_offices" checked="" id="concerned_offices-yes" value="yes" <?php echo $checked_yes; ?>>
                            <label for="concerned_offices-yes">Yes
                            </label>
                        </div>
                        <div class=" d-inline">
                            <input type="radio" name="concerned_offices" id="concerned_offices-no" value="no" <?php echo $checked_no; ?>>
                            <label for="concerned_offices-no">No
                            </label>
                        </div>
                    <span id="error_concerned_offices" class="error invalid-feedback"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-header sub-card-header-firm"><h3 class="card-title">Last Lot No. Dated And its Analytical Results</h3></div>
    <div class="form-horizontal">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group row">
                        <label for="inputLastlotno" class="col-sm-4 col-form-label">Last lot No.<span class="cRed">*</span></label>
                        <div class="col-sm-7">
                            <?php echo $this->Form->control('last_lot_no', array('type'=>'text', 'id'=>'last_lot_no', 'class'=>'form-control input-field', 'value '=>$section_form_details[0]['last_lot_no'],'placeholder'=>'Last lot No.', 'label'=>false)); ?>
                            <span id="error_last_lot_no" class="error invalid-feedback error_last_lot_no"></span>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-4">
                    <div class="form-group row">
                        <label for="inputLastlotno" class="col-sm-2 col-form-label">Date<span class="cRed">*</span></label>
                        <div class="col-sm-7">
                           <?php echo $this->Form->control('last_lot_date', array('type'=>'text', 'id'=>'date_last_inspection', 'value'=>$section_form_details[0]['date_last_inspection'], 'class'=>'form-control input-field', 'placeholder'=>'Enter DD/MM/YYYY', 'label'=>false)); ?>
                            <span id="error_date_last_inspection" class="error invalid-feedback"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Analytical Results<span class="cRed"> * </span></label>
                        <div class="col-sm-7">
                            <?php echo $this->Form->control('quantity_graded', array('type'=>'textarea', 'id'=>'quantity_graded', 'class'=>'form-control input-field', 'placeholder'=>'Type here..','value '=>$section_form_details[0]['quantity_graded'], 'label'=>false)); ?>
                            <span id="error_quantity_graded" class="error invalid-feedback"></span>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>


<div class="card-header sub-card-header-firm"><h3 class="card-title">Quantity Graded During Current Month Upto</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Quantity Graded During Current Month Upto<span class="cRed">*</span></label>
                    <div class="col-sm-7">
                         <?php echo $this->Form->control('last_lot_date', array('type'=>'text', 'id'=>'date_last_inspection', 'value'=>$section_form_details[0]['date_last_inspection'], 'class'=>'form-control input-field', 'placeholder'=>'Enter DD/MM/YYYY', 'label'=>false)); ?>
                        <span id="error_date_last_inspection" class="error invalid-feedback"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-header sub-card-header-firm"><h3 class="card-title">Is the Agmark Replica account correct?</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                         <label for="inputEmail3" class="col-sm-5 col-form-label">Is the Agmark Replica account correct? <span class="cRed">*</span></label>
                    <div class="col-sm-7">
                         <?php
                            $i=1;
                            $replica_account_correct = $section_form_details[0]['replica_account_correct'];
                        
                            if($replica_account_correct == 'yes'){
                                $checked_yes = 'checked';
                                $checked_no = '';
                            } else {

                                $checked_yes = '';
                                $checked_no = 'checked';
                            }
                            $i++;
                        ?>
                        <div class="d-inline">
                            <input type="radio" name="replica_account_correct" checked="" id="replica_account_correct-yes" value="yes" <?php echo $checked_yes; ?>>
                            <label for="replica_account_correct-yes">Yes
                            </label>
                        </div>
                        <div class=" d-inline">
                            <input type="radio" name="replica_account_correct" id="replica_account_correct-no" value="no" <?php echo $checked_no; ?>>
                            <label for="replica_account_correct-no">No
                            </label>
                        </div>
                        <div class="col-sm-9" id="hide_disc_replica">
                            <?php echo $this->Form->control('discrepancies_replica_aco', array('type'=>'textarea', 'id'=>'discrepancies_replica_aco', 'escape'=>false, 'value'=>$section_form_details[0]['discrepancies_replica_aco'], 'class'=>'form-control input-field', 'label'=>false, 'placeholder'=>'Enter discrepancies here...')); ?>
                            <span id="error_discrepancies_replica_aco" class="error invalid-feedback"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-header sub-card-header-firm"><h3 class="card-title">Is the packer getting its lots tested by FSSAI approved Lab for food safety parameters every 6 months?</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                       <label for="inputEmail3" class="col-sm-5 col-form-label">Is the packer getting its lots tested by FSSAI approved Lab for food safety parameters every 6 months?<span class="cRed">*</span></label>
                    <div class="col-sm-7">
                         <?php
                        $i=1;
                        $fssai_approved = $section_form_details[0]['fssai_approved'];
                        
                            if($fssai_approved == 'yes'){
                                $checked_yes = 'checked';
                                $checked_no = '';
                            } else {

                                $checked_yes = '';
                                $checked_no = 'checked';
                            }
                            $i++;
                        ?>
                        <div class="d-inline">
                            <input type="radio" name="fssai_approved" checked="" id="fssai_approved-yes" value="yes" <?php echo $checked_yes; ?>>
                            <label for="fssai_approved-yes">Yes
                            </label>
                        </div>
                        <div class=" d-inline">
                            <input type="radio" name="fssai_approved" id="fssai_approved-no" value="no" <?php echo $checked_no; ?>>
                            <label for="fssai_approved-no">No
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 16.Collection of check samples -->
<div class="card-header sub-card-header-firm"><h3 class="card-title">Collection of check samples </h3></div>
     <?php echo $this->element('rti_addmore_element/rti_addmore_element'); ?>
</div>

<!-- 17.Enumerate briefly suggestions given during last inspection and state, if carried out -->
<div class="card-header sub-card-header-firm"><h3 class="card-title">Enumerate briefly suggestions given during last inspection and state, if carried out</h3></div>
    <div class="form-horizontal">
        <div class="card-body">
             <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Enumerate briefly suggestions given during last inspection and state, if carried out: <span class="cRed">*</span></label>
                            <?php
                                $i=1;
                                $e_briefly_suggestions_radio = $section_form_details[0]['e_briefly_suggestions_radio'];
                                
                                    if($e_briefly_suggestions_radio == 'yes'){
                                        $checked_yes = 'checked';
                                        $checked_no = '';
                                    } else {

                                        $checked_yes = '';
                                        $checked_no = 'checked';
                                    }
                                    $i++;
                                ?>
                                <div class="d-inline">
                                    <input type="radio" name="e_briefly_suggestions_radio" checked="" id="e_briefly_suggestions_radio-yes" value="yes" <?php echo $checked_yes; ?>>
                                    <label for="e_briefly_suggestions_radio-yes">Yes
                                    </label>
                                </div>
                                <div class=" d-inline">
                                    <input type="radio" name="e_briefly_suggestions_radio" id="e_briefly_suggestions_radio-no" value="no" <?php echo $checked_no; ?>>
                                    <label for="e_briefly_suggestions_radio-no">No
                                    </label>
                                </div>
                                <div class="col-sm-9" id="hide_enumerate_briefly_suggestions">
                                    <?php echo $this->Form->control('enumerate_briefly_suggestions', array('type'=>'textarea', 'id'=>'enumerate_briefly_suggestions', 'escape'=>false, 'value'=>$section_form_details[0]['enumerate_briefly_suggestions'], 'class'=>'form-control input-field', 'label'=>false, 'placeholder'=>'Enter discrepancies here...')); ?>
                                    <span id="error_enumerate_briefly_suggestions" class="error invalid-feedback"></span>
                                </div>    
                             </div>
                       </div>
                  </div>
             </div>
        </div>
    </div>
</div>

<!-- 18. Shortcomings noticed in present inspection -->
<div class="card-header sub-card-header-firm"><h3 class="card-title">Shortcomings noticed in present inspection</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Shortcomings noticed in present inspection:<span class="cRed"> * </span></label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->control('email', array('type'=>'email', 'id'=>'email', 'class'=>'form-control', 'label'=>false,'value'=>base64_decode($firm_details['email']))); ?>
                        <span id="error_email" class="error invalid-feedback"></span>
                    </div>
                    
                </div>
            </div>
           
            <div class="col-sm-6">
                <div class="form-group row">
                   <label for="inputEmail3" class="col-sm-3 col-form-label">Attach file</label>
                    <?php if(!empty($section_form_details[0]['fssai_approved_docs'])){?>
                        <a id="fssai_approved_docs_value" target="blank" href="<?php  echo str_replace("D:/xampp/htdocs","",$section_form_details[0]['fssai_approved_docs']); ?>">Preview</a>
                    <?php } ?>
                  
                    <div class="custom-file col-sm-9">
                        <input type="file" name="fssai_approved_docs" class="form-control" id="fssai_approved_docs" multiple='multiple'>
                        <span id="error_fssai_approved_docs" class="error invalid-feedback"></span>
                        <span id="error_type_fssai_approved_docs" class="error invalid-feedback"></span>
                        <span id="error_size_fssai_approved_docs" class="error invalid-feedback"></span>
                    </div>
                </div>
                 <p class="lab_form_note float-right mt-3"><i class="fa fa-info-circle"></i> File type: PDF, jpg &amp; max size upto 2 MB</p>
            </div>
        </div>
    </div>
</div>

<!-- 19.Suggestions -->

<div class="card-header sub-card-header-firm"><h3 class="card-title">Suggestions</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Suggestions<span class="cRed">*</span></label>
                    <div class="col-sm-7">
                         <?php echo $this->Form->control('last_lot_date', array('type'=>'textarea', 'id'=>'date_last_inspection', 'value'=>$section_form_details[0]['date_last_inspection'], 'class'=>'form-control input-field', 'placeholder'=>'Enter DD/MM/YYYY', 'label'=>false)); ?>
                        <span id="error_date_last_inspection" class="error invalid-feedback"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Signnature and Name of the Packer or his representative                         -->                         
<div class="card-header sub-card-header-firm"><h3 class="card-title">Signnature and Name of the Packer or his representative</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Signnature and Name of the Packer or his representative<span class="cRed"> * </span></label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->control('email', array('type'=>'email', 'id'=>'email', 'class'=>'form-control', 'label'=>false,'value'=>base64_decode($firm_details['email']))); ?>
                        <span id="error_email" class="error invalid-feedback"></span>
                    </div>
                    
                </div>
            </div>
           
            <div class="col-sm-6">
                <div class="form-group row">
                   <label for="inputEmail3" class="col-sm-3 col-form-label">Attach file</label>
                    <?php if(!empty($section_form_details[0]['fssai_approved_docs'])){?>
                        <a id="fssai_approved_docs_value" target="blank" href="<?php  echo str_replace("D:/xampp/htdocs","",$section_form_details[0]['fssai_approved_docs']); ?>">Preview</a>
                    <?php } ?>
                  
                    <div class="custom-file col-sm-9">
                        <input type="file" name="fssai_approved_docs" class="form-control" id="fssai_approved_docs" multiple='multiple'>
                        <span id="error_fssai_approved_docs" class="error invalid-feedback"></span>
                        <span id="error_type_fssai_approved_docs" class="error invalid-feedback"></span>
                        <span id="error_size_fssai_approved_docs" class="error invalid-feedback"></span>
                    </div>
                </div>
                 <p class="lab_form_note float-right mt-3"><i class="fa fa-info-circle"></i> File type: PDF, jpg &amp; max size upto 2 MB</p>
            </div>
        </div>
    </div>
</div>
<!-- Signnature and Name of the Inspecting Officer -->                         
<div class="card-header sub-card-header-firm"><h3 class="card-title">Signnature and Name of the Inspecting Officer</h3></div>
    <div class="form-horizontal">
         <div class="card-body">
             <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Signnature and Name of the Inspecting Officer<span class="cRed"> * </span></label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->control('email', array('type'=>'email', 'id'=>'email', 'class'=>'form-control', 'label'=>false,'value'=>base64_decode($firm_details['email']))); ?>
                        <span id="error_email" class="error invalid-feedback"></span>
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-5 col-form-label">Designation:<span class="cRed"> * </span></label>
                    <div class="col-sm-7">
                        <?php echo $this->Form->control('designation_inspecting_officer', array('type'=>'text', 'id'=>'designation_inspecting_officer', 'class'=>'form-control input-field','value '=>$section_form_details[0]['designation_inspecting_officer'], 'placeholder'=>'Please Enter Designation', 'label'=>false)); ?>
                        <span id="error_designation_inspecting_officer" class="error invalid-feedback"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group row">
                   <label for="inputEmail3" class="col-sm-3 col-form-label">Attach file</label>
                    <?php if(!empty($section_form_details[0]['fssai_approved_docs'])){?>
                        <a id="fssai_approved_docs_value" target="blank" href="<?php  echo str_replace("D:/xampp/htdocs","",$section_form_details[0]['fssai_approved_docs']); ?>">Preview</a>
                    <?php } ?>
                  
                    <div class="custom-file col-sm-9">
                        <input type="file" name="fssai_approved_docs" class="form-control" id="fssai_approved_docs" multiple='multiple'>
                        <span id="error_fssai_approved_docs" class="error invalid-feedback"></span>
                        <span id="error_type_fssai_approved_docs" class="error invalid-feedback"></span>
                        <span id="error_size_fssai_approved_docs" class="error invalid-feedback"></span>
                    </div>
                </div>
                 <p class="lab_form_note float-right mt-3"><i class="fa fa-info-circle"></i> File type: PDF, jpg &amp; max size upto 2 MB</p>
            </div>
        </div>
    </div>
</div>
</section>
</div>

<input type="hidden" id="final_submit_status_id" value="<?php echo $final_submit_status; ?>">
<input type="hidden" id="application_mode" value="<?php echo $_SESSION['application_mode']; ?>">
<input type="hidden" id="application_type_id" value="<?php echo $_SESSION['application_type']; ?>">
<?php echo $this->Html->script('routininspection/routin_inspection');?>

