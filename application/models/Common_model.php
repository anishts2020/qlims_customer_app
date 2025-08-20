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
	public function analytical_report_form($params)
	{
		$custmr_id = $this->session->userdata('userid');
		$draw      = (int)$params['draw'];
		$start     = (int)$params['start'];
		$length    = (int)$params['length'];
		$colIdx    = (int)$params['order'][0]['column'];
		$dir       = strtolower($params['order'][0]['dir']) === 'asc' ? 'ASC' : 'DESC';
		$search    = trim($params['search']['value']);

		// Map DataTables columns to real DB columns (avoid SQL injection)
		$columns = [
			0 => 'PHd.PRDH_DeliveryID',
			1 => 'PHd.PRDH_DeliveryDate',
			2 => 'PHd.PRDH_DeliveryRefNo',
			3 => 'prs.PRS_Name',
			4 => 'thd.TkHd_Date',
			5 => 'Rhd.SR_RefApplicationNo'
		];
		$orderCol = isset($columns[$colIdx]) ? $columns[$colIdx] : 'PHd.PRDH_DeliveryDate';

		// --- TOTAL (without search)
		$this->db->from('tblQmsSamplePartialResultDeliveryHD PHd')
				->join('tblQmsSampleReceiptHD Rhd', 'Rhd.SR_ApplicationId = PHd.SR_ApplicationNoId', 'inner')
				->join('tblQmsPartialDeliveryResultStatus prs', 'prs.PRS_ID = PHd.PRDH_Status', 'left')
				->join('tblQmsTicketHD thd', 'thd.TT_ID = 4 AND thd.TKHD_SrcRefID = PHd.PRDH_DeliveryID', 'left')
				->join('tblQmsTicketHD TktVerify', 'TktVerify.TT_ID = 1 AND TktVerify.TKHD_SrcRefID = PHd.PRDH_DeliveryID', 'left')
				->where('Rhd.SR_CustomerID', $custmr_id)
				->where_in('PHd.PRDH_Status', [2,3]);

		$totalRecords = $this->db->count_all_results(); // no search

		// --- FILTERED + DATA (with search)
		$this->db->select("
			PHd.PRDH_DeliveryID,
			CONVERT(VARCHAR(12), PHd.PRDH_DeliveryDate, 103) AS ReportDate,
			PHd.PRDH_DeliveryRefNo AS ReportRefNo,
			prs.PRS_Name AS ReportStatus,
			PHd.PRDH_Status,
			PHd.PRDH_PrintStatus,
			dbo.fncGetTicketInfo(thd.TkHd_ID, 1) AS DespatchInfo,
			CASE WHEN thd.TkHd_Status = 1 THEN 'Despatched' ELSE '' END AS DespatchStatus,
			CONVERT(VARCHAR(12), thd.TkHd_Date, 103) AS DespatchDate,
			Rhd.SR_RefApplicationNo,
			Rhd.SR_ApplicationId
		", false)
		->from('tblQmsSamplePartialResultDeliveryHD PHd')
		->join('tblQmsSampleReceiptHD Rhd', 'Rhd.SR_ApplicationId = PHd.SR_ApplicationNoId', 'inner')
		->join('tblQmsPartialDeliveryResultStatus prs', 'prs.PRS_ID = PHd.PRDH_Status', 'left')
		->join('tblQmsTicketHD thd', 'thd.TT_ID = 4 AND thd.TKHD_SrcRefID = PHd.PRDH_DeliveryID', 'left')
		->join('tblQmsTicketHD TktVerify', 'TktVerify.TT_ID = 1 AND TktVerify.TKHD_SrcRefID = PHd.PRDH_DeliveryID', 'left')
		->where('Rhd.SR_CustomerID', $custmr_id)
		->where_in('PHd.PRDH_Status', [2,3]);

		if ($search !== '') {
			$this->db->group_start()
					->like('PHd.PRDH_DeliveryID', $search)
					->or_like('PHd.PRDH_DeliveryRefNo', $search)
					->or_like('prs.PRS_Name', $search)
					->group_end();
		}

		// Count after search
		$filteredRecords = $this->db->count_all_results('', false); // don't reset query

		// Order + Paginate
		$this->db->order_by($orderCol, $dir)
				->limit($length, $start);

		$records = $this->db->get()->result_array();

		return [
			'draw' => $draw,
			'iTotalRecords' => $totalRecords,
			'iTotalDisplayRecords' => $filteredRecords,
			'aaData' => $records
		];
	}
	public function sample_report_form($params)
	{
		$custmr_id = $this->session->userdata('userid');
		$draw      = (int)$params['draw'];
		$start     = (int)$params['start'];
		$length    = (int)$params['length'];
		$colIdx    = (int)$params['order'][0]['column'];
		$dir       = strtolower($params['order'][0]['dir']) === 'asc' ? 'ASC' : 'DESC';
		$search    = trim($params['search']['value']);

		// Map DataTables columns to DB columns
		$columns = [
			0 => 'rhd.SR_ApplicationId',
			1 => 'rhd.SR_RefApplicationNo',
			2 => 'rhd.SR_ReceiptDate',
			3 => 'rhd.SR_CustReference',
			4 => 'ras.Aps_Code',
			5 => 'rhd.Aps_ID'
		];
		$orderCol = isset($columns[$colIdx]) ? $columns[$colIdx] : 'rhd.SR_ApplicationId';

		// --- TOTAL RECORDS (no search)
		$this->db->from('tblQmsSampleReceiptHD rhd')
			->join('tblQmsApplicationStatus ras', 'rhd.Aps_ID = ras.Aps_Id', 'left')
			->where('rhd.SR_CustomerID', $custmr_id);

		$totalRecords = $this->db->count_all_results();

		// --- FILTERED + DATA (with search)
		$this->db->select("
			rhd.SR_ApplicationId,
			rhd.SR_RefApplicationNo,
			CONVERT(VARCHAR(12), rhd.SR_ReceiptDate, 103) AS SR_ReceiptDate,
			rhd.SR_CustReference,
			ras.Aps_Code AS ReceiptStatus,
			rhd.Aps_ID
		", false)
		->from('tblQmsSampleReceiptHD rhd')
		->join('tblQmsApplicationStatus ras', 'rhd.Aps_ID = ras.Aps_Id', 'left')
		->where('rhd.SR_CustomerID', $custmr_id);

		if ($search !== '') {
			$this->db->group_start()
				->like('rhd.SR_ApplicationId', $search)
				->or_like('rhd.SR_RefApplicationNo', $search)
				->or_like('rhd.SR_CustReference', $search)
				->or_like('ras.Aps_Code', $search)
				->group_end();
		}

		// Count after search
		$filteredRecords = $this->db->count_all_results('', false); // don't reset query

		// Order + Paginate
		$this->db->order_by($orderCol, $dir)
			->limit($length, $start);

		$records = $this->db->get()->result_array();

		return [
			'draw' => $draw,
			'iTotalRecords' => $totalRecords,
			'iTotalDisplayRecords' => $filteredRecords,
			'aaData' => $records
		];
	}
}