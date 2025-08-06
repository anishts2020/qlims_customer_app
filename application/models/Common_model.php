<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function logins($nam, $pwd)
	{
		$sql = "
			SELECT COUNT(*) as cnt, U.Usr_Id, C.Cu_Name
			FROM tblQmsUsers U
			INNER JOIN tblQmsCustomer C ON C.Cu_ID = U.Usr_Id
			WHERE U.Usr_Login = ?
			AND U.Usr_Pswd = ?
			AND U.Usr_Active = 1
			GROUP BY U.Usr_Id, C.Cu_Name
		";

		$query = $this->db->query($sql, array($nam, $pwd))->row_array();
		return $query;
	}

	public function get_tickets()
	{
		$custmr_id=$this->session->userdata('userid');
		$query=$this->db->query("     Select top 25 PRDH_DeliveryID ,Convert(varchar(12),PRDH_DeliveryDate, 103) ReportDate, PRDH_DeliveryRefNo as ReportRefNo, prs.PRS_Name ReportStatus ,  PRDH_Status  , PRDH_PrintStatus  , 
		[dbo].[fncGetTicketInfo](thd.TkHd_ID, 1) DespatchInfo,  case when thd.TkHd_Status=1 then  'Despatched' else '' end as  DespatchStatus, convert(varchar(12),thd.TkHd_Date,103) as DespatchDate, Rhd.SR_RefApplicationNo , Rhd.SR_ApplicationId
		from tblQmsSamplePartialResultDeliveryHD  PHd
		inner join tblQmsSampleReceiptHD Rhd  on  
		Rhd.SR_ApplicationId=Phd.SR_ApplicationNoId
		Left outer join  tblQmsPartialDeliveryResultStatus prs on prs.PRS_ID = Phd.PRDH_Status
		Left outer join tblQmsTicketHD thd on thd.TT_ID=4 and   thd.TKHD_SrcRefID = PHd.PRDH_DeliveryID
		Left outer join tblQmsTicketHD TktVerify on TktVerify.TT_ID=1 and   TktVerify.TKHD_SrcRefID = PHd.PRDH_DeliveryID
		where SR_CustomerID=? and PRDH_Status  in (2, 3)
		order by Phd.PRDH_DeliveryDate desc",array($custmr_id))->result_array();
		return $query;
	}
	public function get_samplereceipts()
	{
		$custmr_id=$this->session->userdata('userid');
		$query=$this->db->query("Select top 50 SR_ApplicationId ,SR_RefApplicationNo, convert(varchar(12),SR_ReceiptDate ,103) as   SR_ReceiptDate , SR_CustReference,  ras.Aps_Code  as 'ReceiptStatus' , rhd.Aps_ID as Aps_ID
		from  tblQmsSampleReceiptHD rhd
		left outer join tblQmsApplicationStatus ras on  rhd.Aps_ID = ras.ApS_Id
		where SR_CustomerID =?  order by  SR_ApplicationId desc",array($custmr_id))->result_array();
		return $query;
	}
}