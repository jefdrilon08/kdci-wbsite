<?php
	class Database extends pdo{
		private $dbtype;
		private $host;
		private $user;
		private $pass;
		private $database;
		
		public function __construct(){
			$this->dbtype='mysql';
			$this->host='localhost';
			$this->user='root';
			$this->pass='';
			$this->database='dbkasaganaka';
			
			
			/*$this->host='192.168.0.110';
			$this->user='ariel';
			$this->pass='';
			$this->database='dbkasaganaka';
				/*$this->host='localhost';
			$this->user='kasagana_kdciweb';
			$this->pass='97E1O3ONQl,d';
			$this->database='kasagana_dbkasaganaka';
			*/
			try {
			$dns = $this->dbtype.':dbname='.$this->database.";host=".$this->host;
			parent::__construct( $dns, $this->user, $this->pass );
			} catch (PDOException $e) {
			//$dns = $this->dbtype.':dbname='.$this->database.";host=".$this->host;
			//$dns = $this->dbtype.':dbname='.$this->database.";host=".$this->host; 
			
			//parent::__construct( $dns, $this->user, $this->pass ); 
			    echo 'Connection failed: ' . $e->getMessage();
			}
		}
	}


	

?>