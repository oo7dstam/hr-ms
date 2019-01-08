<?php

class CategoriesModel {
	
	public $con;
	public $user;
	const STATUS_ACTIVE = 1;
	const STATUS_INACTIVE = 2;
    function __construct() {
        $mysql =  new MysqlCon();
		
		$this->con = $mysql->con;
		$this->user = $_SESSION['account'];
		
		
    }

    public function getAllCategories($params = array()){
		$query = 'SELECT * FROM categories 
				';
		
		$result = $this->con->prepare($query);
		$result->execute();
		$return = $result->fetchAll(PDO::FETCH_ASSOC);	
		return $return;
		
	}
    
    public function getAllCategoriesById($params = array()){     
        $query = 'SELECT * FROM categories as c where c.id = ?
            ';

        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);  

        return $return;
    }
	
    public function getEmployeeCategories($params = array()){
		$query = 'SELECT * FROM categories where id=?
				';
		
		$result = $this->con->prepare($query);
		$result->execute($params);
		$return = $result->fetch(PDO::FETCH_ASSOC);	
		return $return;
		
	}
	
    public function checkCategories($name)
	{	
		$params = array('name'=>$name);
		$query = 'SELECT * from `categories` where name =:name';
	
		
		
		$result = $this->con->prepare($query);
		$result->execute($params);
		$return = $result->fetch(PDO::FETCH_ASSOC);	
		
		if($return){
			return false;
		}
		return true;
	}

	public function addCategories($params){
		if(isset($params['name'])){
			if(!$this->checkCategories($params['name'])){
				
				return 3;//username already exist
			}else{
				$query = 'Insert Into categories(name) values(:name)';
				$result = $this->con->prepare($query);
				$result->execute($params);
				
				if($result){
					return 1;//save
				}
			}
		}
		
		
		return 2;//not save
		
	}	
    
    public function updateCategories($id,$name){
        if(isset($name)){
                $query = "UPDATE categories SET name = '$name' WHERE id = '$id'";
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
