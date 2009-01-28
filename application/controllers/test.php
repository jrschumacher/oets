<?php
  class Test_Controller extends Template_Controller {
    
    
    public $template = 'kohana/template';
  
    public function index() {
      $this->template->title = "Test Controller";
      
      Conversation::factory();
      Conversation::last_conversation()->view();
      $this->template->content = Conversation::last_conversation()->flushBuffer();
      
      $form = new Forge;
      print_r(class_parents($form));
    }
  }
?>