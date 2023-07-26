<?php
	namespace app\Model\Table;
	use Cake\ORM\Table;
	use App\Model\Model;
	use Cake\ORM\TableRegistry;

	class DmiAplFormDetailsTable extends Table{

	var $name = "DmiAplFormDetails";

	public function applicationCurrentUsers($customer_id)
	{
		$fetch_data = $this->find('all',array('fields'=>'current_user_email_id','conditions'=>array('customer_id IS'=>$customer_id),'order'=>array('id DESC')))->first();

		return $fetch_data;
	}



	public function userCurrentApplications($user_email_id)
	{
		$fetch_data = $this->find('all',array('conditions'=>array('current_user_email_id IS'=>$user_email_id)))->toArray();

		return $fetch_data;
	}


	public function currentUserEntry($customer_id,$user_email_id,$current_level)
	{
		$Entity = $this->newEntity(array(
			'customer_id'=>$customer_id,
			'current_level'=>$current_level,
			'current_user_email_id'=>$user_email_id,
			'created'=>date('Y-m-d H:i:s')
		 ));
		 $this->save($Entity);

	}


	public function currentUserUpdate($customer_id,$user_email_id,$current_level)
	{

		$find_row_id = $this->find('all',array('fields'=>'id', 'conditions'=>array('customer_id IS'=>$customer_id),'order'=>array('id DESC')))->first();
		$row_id = $find_row_id['id'];

		$newEntity = $this->newEntity(array(
			'id'=>$row_id,
			'current_level'=>$current_level,
			'current_user_email_id'=>$user_email_id,
			'modified'=>date('Y-m-d H:i:s')
		 ));

		 $this->save($newEntity);
		return true;
	}

    	// Fetch form section all details
	public function sectionFormDetails($customer_id){

		$latest_id = $this->find('list', array('valueField'=>'id', 'conditions'=>array('customer_id IS'=>$customer_id)))->toArray();

		if($latest_id != null){
			$form_fields = $this->find('all', array('conditions'=>array('id'=>MAX($latest_id))))->first();

			$form_fields_details = $form_fields;

		}else{

			$form_fields_details = Array ( 'id'=>"",'created' => "", 'modified' =>"", 'customer_id' => "", 'reffered_back_comment' => "",
											'reffered_back_date' => "", 'form_status' =>"", 'customer_reply' =>"", 'customer_reply_date' =>"",
											'approved_date' => "",'current_level' => "",'mo_comment' =>"", 'mo_comment_date' => "",
											'ro_reply_comment' =>"", 'ro_reply_comment_date' =>"", 'delete_mo_comment' =>"", 'delete_ro_reply' => "",
											'delete_ro_referred_back' => "", 'delete_customer_reply' => "", 'ro_current_comment_to' => "",
											'rb_comment_ul'=>"",'mo_comment_ul'=>"",'rr_comment_ul'=>"",'cr_comment_ul'=>"",
											'reason' =>"",
											'required_document' => "",
											'is_surrender_published'=>"",
											'is_surrender_published_docs'=>"",
											//'is_cabook_submitted'=>"", -> This field is not required as UAT Suggestion by DMI - Akash [12-05-2023]
											//'is_cabook_submitted_docs'=>"" ,-> This field is not required as UAT Suggestion by DMI - Akash [12-05-2023]
											'is_ca_have_replica'=>"",
											'is_replica_submitted'=>"",
											'is_replica_submitted_docs'=>"",
											'is_balance_printing_submitted'=>"",
											'is_balance_printing_submitted_docs'=>"",
											'printing_declaration'=>"",
											'printing_declaration_docs'=>"",
											'is_packers_conveyed'=>"",
											'is_packers_conveyed_docs'=>"",
											'noc_for_lab'=>"",
											'noc_for_lab_docs'=>"",
											'is_lab_packers_conveyed'=>"",
											'is_lab_packers_conveyed_docs'=>""

										);

		}

		$DmiFirms = TableRegistry::getTableLocator()->get('DmiFirms');
		$MCommodity = TableRegistry::getTableLocator()->get('MCommodity');

		$firmDetails = $DmiFirms->firmDetails($customer_id);
		$sub_comm_id = explode(',',(string) $firmDetails['sub_commodity']); #For Deprecations
		$sub_commodity_value = $MCommodity->find('list',array('valueField'=>'commodity_name', 'conditions'=>array('commodity_code IN'=>$sub_comm_id)))->toList();

		return array($form_fields_details,$sub_commodity_value);

	}


}

?>
