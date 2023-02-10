<?php
    class Membre {
        protected $_lastName;
        protected $_firstName;
        protected $_email;
        protected $_phone;

        public function getLastName() {
            return $this->_lastName;
        }

        public function setLastname($lastName) {
            return $this->_lastName = $lastName;
        }

        public function getfirstName() {
            return $this->_firstName;
        }

        public function setFirstname($firstName) {
            return $this->_firstName = $firstName;
        }

        public function getEmail() {
            return $this->_email;
        }

        public function setEmail($email) {
            return $this->_email = $email;
        }

        public function getPhone() {
            return $this->_phone;
        }

        public function setPhone($phone) {
            return $this->_phone = $phone;
        }

        public function hydrate($arrData){
			foreach($arrData as $key=>$value){
				$strMethod = "set".ucfirst(str_replace("offre_", "", $key));
				if (method_exists($this, $strMethod)){
					$this->$strMethod($value); 
				}
			}
		}
    }
?>