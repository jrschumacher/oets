<?php
  class Discussion_Model extends ORM {
    
    private $has_many = array('comments');
    
    public function create() {}
    
    public function modify() {}
    
    public function delete() {}
    
    public function view() {
      // Display the discussion
      
    }
    
  }
?>