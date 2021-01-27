<?php
class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function fungsi()
	{
		$this->load->view('header');
		$this->load->view('fungsi');
		$this->load->view('footer');
	}
	public function permasalahan()
	{
		$this->load->view('header');
		$this->load->view('permasalahan');
		$this->load->view('footer');
	}
	public function galeri()
	{
		$this->load->view('header');
		$this->load->view('galeri');
		$this->load->view('footer');
	}
	public function peta()
	{
		$this->load->view('header');
		$this->load->view('peta');
		$this->load->view('footer');
	}
	public function tentangkami()
	{
		$this->load->view('header');
		$this->load->view('tentangkami');
		$this->load->view('footer');
	}
	public function tersumbat()
	{
		$this->load->view('header');
		$this->load->view('tersumbat');
		$this->load->view('footer');
	}
	public function perumnas()
	{
		$this->load->view('header');
		$this->load->view('perumnas');
		$this->load->view('footer');
	}
	public function griya()
	{
		$this->load->view('header');
		$this->load->view('griya');
		$this->load->view('footer');
	}
	public function green()
	{
		$this->load->view('header');
		$this->load->view('green');
		$this->load->view('footer');
	}
	public function permata()
	{
		$this->load->view('header');
		$this->load->view('permata');
		$this->load->view('footer');
	}
	public function kering()
	{
		$this->load->view('header');
		$this->load->view('kering');
		$this->load->view('footer');
	}
}
