<?php


class MysqlCon{
    
    //cloud 000webhost
//    public $con;
//    public $servername="localhost";
//    public $username="id6443457_hrms_user";
//    public $password="hrmsdhvtsu";
//    public $dbName="id6443457_hrms";
//    public $port="";
	
    //cloud bacolor
        public $con;
        public $servername="localhost";
        public $username="id6846423_bacolor_hrms";
        public $password="bacolorhrms";
        public $dbName="id6846423_bacolor_hrms";
        public $port="";
    
//    
// 	public $con;
// 	public $servername="localhost";
// 	public $username="root";
// 	public $password="";
//     public $dbName="id6846423_bacolor_hrms";
// 	public $port="3306";

	
	function __construct() {
        
    
		try {
			$this->con = new PDO("mysql:host=".$this->servername.";port=".$this->port.";dbname=".$this->dbName, $this->username, $this->password);
			// set the PDO error mode to exception
			$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		}catch(PDOException $e){
			echo "Connection failed: " . $e->getMessage();
		}
	
	}
	
	//arrayed params
	public static function insert($tableName,$params){
		$values=array();
		$columns=array();
		foreach($params as $key=>$data){
			$values[]=$data;
			$columns[]=$key;
		}
		$query = "
			INSERT INTO $tableName (".implode(",",$columns).")
			VALUES (".implode(",",$values).")";
			
		if($this->con->exec($query)){
			return true;
		}
		
		return false;
		
	}
	
	//arrayed params
	public static function update($tableName,$params){
		$values=array();
		$columns=array();
		
		$id="";
		$query = "UPDATE $tableName SET ";
		$where = " WHERE ";
		
		$paramsField =array();
		$whereField =array();
		$ctr=0;
		
		if(isset($params['params'])){
			$paramsField = $params['params'];
		}
		
		if(isset($params['where'])){
			$whereField = $params['where'];
		}
		
		$counterField = count($paramsField)-1;		
		
		
		foreach($paramsField as $key=>$data){

			$query+=$key."=".$data;
			
			if($ctr < counterField){
				$query+=",";
				$ctr++;
			}
				
		}
		
		$counterWhere = count($whereField)-1;
		$ctr = 0;
		
		foreach($whereField as $key=>$data){

			$where+=$key."=".$data;
			
			if($ctr < $counterWhere){
				$where+=" AND ";
				$ctr++;
			}
			
		}
		
		
		$query+=$where;
		$updateQuery = $this->con->prepare($query);

		if($updateQuery->execute()){
			return true;
		}
		
		return false;
		
	}
	
	
	//arrayed params
	
	/* 
	example params
	$params = array(
				array(//inside of the array is and
					'field_name'=>array(1,2,3),//for in(condition)
					'field_name2'=>"test", // for = condition
					'field_name3'=>array(
							'not'=>array(1,2,3)//for not in(condition)
						),
					'field_name3'=>array('not'=>"test")//for != condition
						),
				array(//new array means OR condition
					'field_name4'=>"test"
				)
			); */
	
	public static function delete($tableName,$params){
		$values=array();
		$columns=array();
		
		$query = "DELETE FROM $tableName WHERE ";
		$ctr=0;
		$counter = count($params)-1;		
		
		$where = "";
		foreach($params as $datas){
			
			if($where !=""){
				$where+=" OR ";
			}
			$and = "";
			if(is_array($datas)){
				
				foreach($datas as $key=>$newDatas){
					
					if(is_array($newDatas)){
						
						if(isset($newDatas[$key]['not'])){
							
							if(is_array($newDatas[$key]['not'])){
								
								if($and == ""){
									$and = " ".$key." not in(".implode(",",$newDatas[$key]['not']).") ";
								}else{
									$and = " AND ".$key." in(".implode(",",$newDatas[$key]['not']).") ";
								}
								
							}else{
								if($and == ""){
									$and = " ".$key." in(".implode(",",$newDatas[$key]['equal']).") ";
								}else{
									$and = " AND ".$key." in(".implode(",",$newDatas[$key]['equal']).") ";
								}
							}
							
						}
						
					}else{
						if($and == ""){
							$and = " ".$key."=".$newDatas;
						}else{
							$and = " AND ".$key."=".$newDatas;
						}
					}
				}
				
			}
			$where+=$and;
		}
		
		$query+=$where;
			
		if($conn->query($query) === TRUE){
			return true;
		}
		
		return false;
		
	}
	
}
?>