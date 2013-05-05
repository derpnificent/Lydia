<?php
/**
 * Holding a instance of CDerp to enable use of $this in subclasses and provide some helpers.
 *
 * @package Derp
 */
class CObject {

  /**
   * Members
   */
  protected $de;
  protected $config;
  protected $request;
  protected $data;
  protected $db;
  protected $views;
  protected $session;
  protected $user;


  /**
   * Constructor, can be instantiated by sending in the $de reference.
   */
  protected function __construct($de=null) {
    if(!$de) {
      $de = CDerp::Instance();
    } 
    $this->de       = &$de;
    $this->config   = &$de->config;
    $this->request  = &$de->request;
    $this->data     = &$de->data;
    $this->db       = &$de->db;
    $this->views    = &$de->views;
    $this->session  = &$de->session;
    $this->user     = &$de->user;
  }


  /**
   * Wrapper for same method in CDerp. See there for documentation.
   */
  protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->de->RedirectTo($urlOrController, $method, $arguments);
  }


  /**
   * 
   * Wrapper for same method in CLydia. See there for documentation.
   */
  protected function RedirectToController($method=null, $arguments=null) {
    $this->de->RedirectToController($method, $arguments);
  }


  /**
   *
   * Wrapper for same method in CDerp. See there for documentation.
   */
  protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->de->RedirectToControllerMethod($controller, $method, $arguments);
  }


  /**
   * 
   * Wrapper for same method in CDerp. See there for documentation.
   */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->de->AddMessage($type, $message, $alternative);
  }


  /**
   * 
   * Wrapper for same method in CDerp. See there for documentation.
   */
  protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->de->CreateUrl($urlOrController, $method, $arguments);
  }


}