<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller {

	public function index()
	{
		$this->load->view('Game');
	}

	public function SubmitData()
	{
		$this->load->model('GameModel');
		$data = array();
		$data['Username'] = $this->input->post("Uname");
		$data['Cricketer'] = $this->input->post("crickter");
		$fcolor = implode(",", $this->input->post("FlagColor"));
		$data['FlagColor'] = $fcolor;

		$result = $this->GameModel->ins("GameData", $data);

		if($result){
			$SummaryData['summary'] = $this->GameModel->GetWhereData("GameData", array("id"=>$result));
			//print_r($SummaryData);
			$this->load->view('Summary',$SummaryData);
		}
		
	}

	public function History()
	{
		$this->load->model('GameModel');
		$HistoryData['history'] = $this->GameModel->GetData("GameData");
		$this->load->view('History',$HistoryData);
		
	}

	
		
}
