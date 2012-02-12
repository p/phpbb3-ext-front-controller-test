<?php

class phpbb_ext_foobar_controller implements phpbb_extension_controller_interface
{
	/**
	* @var phpBB User object
	*/
	private $user = null;

	/**
	* @var phpBB DBAL object
	*/
	private $db = null;

	/**
	* @var phpBB Template object
	*/
	private $template = null;

	/**
	* @var phpBB Request object
	*/
	private $request = null;

	/**
	* Handle the display of the page
	*
	* @return null
	*/
	public function handle()
	{
		global $user, $template, $db, $request;
		global $phpbb_root_path, $phpEx;
		$this->user = $user;
		$this->db = $db;
		$this->template = $template;
		$this->request = $request;

		$this->user->add_ext_lang('foobar', 'foobar');

		$this->template->set_ext_dir_prefix($phpbb_root_path . 'ext/foobar/');

		$this->template->set_filenames(array(
			'body' => 'foobar_body.html'
		));

		$this->template->assign_var('MESSAGE' => $this->get_message());

		$this->template->display('body');
	}

	/**
	* Trigger error to display the page
	*
	*/
	private function get_message()
	{
		return 'Hello, ' . $this->user->data['username'] . '!<br />You are viewing the front page of the foobar extension.';
	}
}
