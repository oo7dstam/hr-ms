<?php
class ApplicantModel {
	
	public $con;
//    public $id = $_GET['id'];
    const STATUS_ACTIVE = 1;
    
    function __construct() {
        $mysql =  new MysqlCon();
		$this->con = $mysql->con;
    }
    
    public function getAllApplicant($params = array()){
		$query = 'SELECT * FROM applicants';
		
		$result = $this->con->prepare($query);
		$result->execute($params);
		$return = $result->fetchAll(PDO::FETCH_ASSOC);	

		return $return;
	}
    
    	
	
}
