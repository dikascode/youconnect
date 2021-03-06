<?php
    abstract class Controller {
        protected $request;
        protected $action;

        public function __construct($action, $request) {
            $this->action = $action;
            $this->request = $request;
        }

        public function executeAction() {
            return $this->{$this->action}();
        }

        //return view

        protected function returnView($viewmodel, $fullview) {
            //name views folder same as class, file should also be named whatever the action is

           $view = 'views/'. get_class($this). '/' . $this->action. '.php'; // use this for localhost

           // $view = get_class($this). '/' . $this->action. '.php'; //deployed state is including app/views cos it's mvc

            if($fullview) {
                //load main layout file (html, head tags or things you want on every single page) that wraps around view
                if($_SERVER['REQUEST_URI'] == "/daveTicket/index" || $_SERVER['REQUEST_URI'] == "/index" || $_SERVER['REQUEST_URI'] == "/daveTicket/index?" || $_SERVER['REQUEST_URI'] == "/index?" || $_SERVER['REQUEST_URI'] == "index?controller=transactions&txref=txref&amt=amount&cur=currency&name=cust_name"){
                    include('views/main2.php');
                } else{
                    include('views/main.php');
                }
                
            } else {
                
                include($view);
            }
        }
    }
?>