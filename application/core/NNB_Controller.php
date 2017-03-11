<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class NNB_Controller extends CI_Controller
{
  function __construct() {
  		parent::__construct();
        header("Content-Type: text/html; charset=utf-8",true);


  		// $exception_uri = array('activation', 'passrecovery', 'passgenerator');
      //
  		// try{
  		// 	$user_id = $this->session->userdata('id');
  		// 	$user = $this->user->getUserObject($user_id);
      //
  		// 	if( !in_array($this->uri->segment(2), $exception_uri) && (empty($user_id) || !empty($user->getDeleteDate()) || !$user->getStatus()) ) {
  		// 		throw new Exception('user_not_valid_session');
  		// 	}
  		// }
  		// catch(Exception $e) {
  		// 	$this->setExceptionFlashdata($e);
  		// 	redirect(DWPANEL . '/logout');
  		// }

  		// $this->commonData = array_merge($this->commonData, array(
  		// 															'langList'		=> self::getLanguageList()
  		// 														));

  	}

}
