<?php

class GroupDeletionResponse
{

  /**
   * 
   * @var boolean $response
   * @access public
   */
  public $response;

  /**
   * 
   * @param boolean $response
   * @access public
   */
  public function __construct($response)
  {
    $this->response = $response;
  }

}
