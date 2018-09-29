<?php

	class Employee{
		public $id;
		public $name;
		public $nic;
		public $email;
		public $tpno;
		public $address;
		public $password;
		public $gender;
		public $city;
		public $district;
		protected $con;

		public function __construct(){
			$this->con = Database::getConnection();
		}

		public function getEmployee($uname)
		{
			$sql = "select * from employee where email=?;";
	        $stmt = $this->con->prepare($sql);
	        $stmt->bind_param("s",$uname);
	        if($stmt->execute())
	        {
	            return $stmt;
	        }
			else
	        {
            	return null;
        	}
		}

		public function getAll(){
			$sql = "select id,NIC,name,tpno,email,address,gender,city,district from employee;";


	        if(($stmt = $this->con->prepare($sql)))
	        {
	            if($stmt->execute())
	            {
	                return $stmt;
	            }
	        }
	        return null;
		}
	}

?>