<?php
    class popupPlugin extends Plugin {
       
        public function init(){
            $this->dbFields = array(
        'popup-checkbox'=> '',
        'datePicker'=>'',
        'popupdata'=>'',
        'post-content'=>'',
   
            );
        }
        
        public function form(){
       include($this->phpPath().'php/popupsettings.php');
        }

        public function siteBodyBegin(){

            if($this->getValue('popup-checkbox')=="on"){
                include($this->phpPath().'php/popupfront.php');
            }

        }

        public function siteHead(){
echo '<link rel="stylesheet" href="'.$this->domainPath().'css/popup-style.css">';
		}


       

		public function siteBodyEnd(){
        echo '<script src="'.$this->domainPath().'js/popup-script.js"></script>';
		}


    }
?>