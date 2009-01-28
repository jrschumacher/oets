<?php

class Ticket extends Controller {
  
  public function index() {}
  
  // Client Functions
  
  public function open($ticket_type, $id = NULL) {}
  
  public function close($ticket_type, $id = NULL) {}

  // Administrator Functions
  
  public function claim($ticket_type, $id = NULL) {}
  
  public function transfer($ticket_type, $id = NULL) {}
  
}

?>