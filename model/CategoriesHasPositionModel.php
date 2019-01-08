<?php

class CategoriesHasPositionModel {
	
	public $con;
	public $user;
	const STATUS_ACTIVE = 1;
	const STATUS_INACTIVE = 2;
    function __construct() {
        $mysql =  new MysqlCon();
		
		$this->con = $mysql->con;
		$this->user = $_SESSION['account'];
		
		
    }

	public function getEmployeePosition($params = array()){
		$query = 'SELECT * FROM category_has_position
				where id = ?
			';
		
		$result = $this->con->prepare($query);
		$result->execute($params);
		$return = $result->fetch(PDO::FETCH_ASSOC);	
		return $return;
		
	}
	public function getAllPosition($params = array()){
		$query = 'SELECT chp.*, 
				shg.salary_grade,
				c.name 
				FROM category_has_position chp
				Left Join salary_has_grades as shg on shg.id = chp.salary_grade_id
				Left Join categories as c on c.id = chp.category_id
			
			';
		
		$result = $this->con->prepare($query);
		$result->execute();
		$return = $result->fetchAll(PDO::FETCH_ASSOC);	
		return $return;
		
	}
    
    public function getAllPositionById($params = array()){
        $query = 'SELECT chp.*, 
				shg.salary_grade,
				c.name 
				FROM category_has_position chp
				Left Join salary_has_grades as shg on shg.id = chp.salary_grade_id
				Left Join categories as c on c.id = chp.category_id
				WHERE chp.id = ?

			';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	
        return $return;

    }
    
	public function getAllBaseOnCategoryPosition($params = array()){
		$query = 'SELECT chp.*, 
				shg.salary_grade,
				c.name 
				FROM category_has_position chp
				Left Join salary_has_grades as shg on shg.id = chp.salary_grade_id
				Left Join categories as c on c.id = chp.category_id
				where chp.category_id = ?
			
			';
		
		$result = $this->con->prepare($query);
		$result->execute($params);
		$return = $result->fetchAll(PDO::FETCH_ASSOC);	
		return $return;
		
	}
	public function getEmployeeEmploymentDetails($params = array())
	{
		$query = 'SELECT *
				from `employee_has_employment_details` 
				where employee_id = ?
				';
		
		$result = $this->con->prepare($query);
		$result->execute($params);
		$return = $result->fetch(PDO::FETCH_ASSOC);	

		return $return;
		
	}
    
    public function checkPosition($position)
    {	
        $params = array('position'=>$position);
        $query = 'SELECT * from `category_has_position` where position =:position';



        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetch(PDO::FETCH_ASSOC);	

        if($return){
            return false;
        }
        return true;
    }
    
	public function addPosition($params)
	{
				$query = 'Insert Into category_has_position(position,category_id,salary_grade_id) values(:position,:category_id,:salary_grade_id)';
				$result = $this->con->prepare($query);
				$result->execute($params);
				
				if($result){
					return 1;//save
				}			
		
		
		return 2;//not save
		
	}	
    
    public function updatePosition($id,$position,$category,$salary_grade){
        if(isset($position)){
                $query = "UPDATE category_has_position SET 
                            position = '$position' ,
                            category_id = '$category',
                            salary_grade_id = '$salary_grade'
                            WHERE id = '$id'";
                $result = $this->con->prepare($query);
                $result->execute(array());

                if($result){
                    return 1;//save
                }
            
        }

        //        json_encode(var_dump($id,$name));
        return 2;//not save

    }
	
}
