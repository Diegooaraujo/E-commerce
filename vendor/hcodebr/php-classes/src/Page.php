<?php

    namespace Hcode;

    use Rain\Tpl;

    class Page{
        private $tpl;
        private $options = [];
        private $defaults=[
            "data"=>[]
        ];

        public function __construct($opts=array()){
            $this->options = array_merge($this->defaults,$opts);

            $config = array(
                "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views/",
                "cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/viewscache/",
                "debug"         => false, // set to false to improve the speed
            );
            Tpl::configure( $config );

            $this->tpl = new Tpl;

            foreach($this->options["data"] as $key => $value){
                $this->tpl->assign($key,$value);
            }

// assign a variable
            $tpl->assign( "name", "Obi Wan Kenoby" );

// assign an array
            $tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
            $this->tpl->draw( "header" );


        }
        public function setTpl($name,$data=array(),$returnHTML = false){
            foreach($this->options["data"] as $key => $value){
                $this->tpl->assign($key,$value);
            }
        }
        public function __destruct()
        {
            $this->tpl->draw("footer");
        }
        

    }

?>