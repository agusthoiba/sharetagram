<?php if (! defined('BASEPATH')) exit('No direct script access allowed');/*	Get Info contains :	about, privacy, TOS (term and condition), and info*/class Info extends CI_Controller{	public function __construct()    {		parent::__construct();		$this->load->model('mod_contest','C');	}		public function index()    {		$this->about();	}	public function about()    {		$data['meta_title'] = "Sharetagram - Instagram Web Viewer"; 		$data['meta_description'] = "ABOUT | Use Instagram online! Sharetagram is the Best Instagram Web Viewer!";		$data['meta_keywords'] = "Instagram, IG, web, viewer, stats, photo, video, Facebook";		$q = $this->C->getInfo('about')->row();		$data['title'] = $q->info_name; 		$data['desc'] = $q->info_content; 		$data['content'] = 'info/index';		$this->load->view('layout/dashboard_view',$data);	}		public function privacy()    {		$data['meta_title'] = "Sharetagram - Instagram Web Viewer"; 		$data['meta_description'] = "PRIVACY POLICY |Use Instagram online! Sharetagram is the Best Instagram Web Viewer!";		$data['meta_keywords'] = "privacy,policy,Sharetagram,Share,Instagram,IG,PC,Web,Viewer, Facebook";		$q = $this->C->getInfo('privacy')->row();		$data['title'] = $q->info_name; 		$data['desc'] = $q->info_content; 		$data['content'] = 'info/index';		$this->load->view('layout/dashboard_view',$data);	}		public function tos()    {		$data['meta_title'] = "Terms Of Services - Sharetagram"; 		$data['meta_description'] = "Terms Of Services |Use Instagram online! Sharetagram is the Best Instagram Web Viewer!";		$data['meta_keywords'] = "terms,service,Sharetagram,Share,Instagram,IG,PC,Web,Viewer, Facebook";		$q = $this->C->getInfo('terms')->row();		$data['title'] = $q->info_name; 		$data['desc'] = $q->info_content; 		$data['content'] = 'info/index';		$this->load->view('layout/dashboard_view',$data);	}}