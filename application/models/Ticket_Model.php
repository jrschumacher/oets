<?php

class Ticket_Model extends ORM {
  
  private $has_one = array('discussion');
  
  private $validation_rules = array();
  
  public function __construct() {
  }
  
  
  // Ticket Form Construction
  
  // Data to variables
  public function postToVar($post = NULL) {
    // Use $post or POST
    $post = is_null($post) ? $_POST : $post;
    foreach(get_object_vars($this) as $var) {
      if(isset($_POST[$var])) $this->$var = $_POST[$var];
    }
  }
  
  // Ticket Validation
  public function validate() {
    $v = new Validation();
    
    // Add the rules
    $this->validation_rules($v);
    
    // Run validation
    return $v->validate() ? TRUE : $v->errors();
  }
  
  abstract private function validation_rules($v) {}
  
  
}

?>