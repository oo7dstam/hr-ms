<?php

class FileUploadModel {
	
	public $con;
	public $user;

    function __construct() {
        $mysql =  new MysqlCon();
		
		$this->con = $mysql->con;
		$this->user = $_SESSION['account'];
		
		
    }
	
	public function uploadProfileImage($params)
	{
		
		$query = '
			Insert into `employee_has_fileuploads` (`file_name`,`path`,`name`,`employee_id`) 
								VALUES(:file_name,:target_dir,:name,:id);
		';
		
		
		$result = $this->con->prepare($query);
		$result->execute($params);
			
		return true;
		
	}
	
}
