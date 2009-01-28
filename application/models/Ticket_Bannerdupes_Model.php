<?php

class Ticket_Bannerdupes_Model extends Ticket_Model {
  
  public $has_one = array('discussion');
  public $has_many = array('ticketphases');
  
  public $good_id;
  public $bad_id;
  public $comment;
  
  // Create
  public function create() {
    // Display a page to create a new ticket
    if($this->validate()) {
      // Create the ticket instance
      $ticket = Tickets::factory('bannerdupes');
      // Store data into ticket
      $this->postToVar();
    }
    else {
      $view = new View('bannerdupes');
      $view->action = 'create';
      $view->good_id = $this->good_id;
      $view->bad_id = $this->bad_id;
      $view->comment = $this->comment;
      $view->render();
    }
  }
  
  public function save() {
    // Create new ticket based on form submission
    // Create a new phase set; wait till version 1.0
  }
  
  // View
  public function view($id = NULL) {
    // If no id is passed then show catalog
    
    $ticket = Tickets::factory('bannerdupes');
    
    // Load the ticket view
    $view = new View('bannerdupes');
    $view->action = 'view';
    $view->good_id = $this->good_id;
    $view->bad_id = $this->bad_id;
    $view->comment = $this->comment;
    
    //TODO: Find a way to hook modules into the view
    
    // Load the discussion module
    $discussion = Ticket_Modules::factory('discussion');
    $discussion->view('view', &$view);
    
    // Load the ticketphase module
    $phase = Ticket_Modules::factory('phaseset');
    $phase->view('view', &$view);
    
    $view->render();
  }
  
  public function catalog() {
    
  }
  
  // Validation rules
  public function validation_settings(Validation $v) {
    // Rules
    $v->add_rules('good_id', 'required', 'numeric', 'length[30]', array($v, 'unique_ids'));
    $v->add_rules('bad_id', 'required', 'numeric', 'length[30]', array($v, 'unique_ids'));
    
    // Errors
  }
  
  public function unique_ids(Validation $v, $field) {
    return ($v['good_id'] == $v['bad_id']) ? FALSE : TRUE;
  }
  
}

?>