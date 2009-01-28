<?php
  class Tickets {
    static function factory($ticket_type) {
      return ORM::factory('ticket_'.$ticket_type);
    }
  }
  
  /**
   * Ticket Modules, a class which contains very basic information regarding ticket modules
   * 
   * Ticket Modules is intended to help with the loading and execution of ticket modules.
   */
  class Ticket_Modules {
    static function factory($ticket_module) {
      return ORM::factory('ticket_module_'.$ticket_module);
    }
  }
?>