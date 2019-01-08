<?php

class AttendanceModel {

    public $con;
    function __construct() {
        $mysql =  new MysqlCon();
        $this->con = $mysql->con;
    }
    
    public function getAllAttendanceById($params = array()){
        $query = 'SELECT * from `employee_has_attendance` as eha
                    Left join employees as e on e.id = eha.employee_id
                    Where eha.employee_id = ?

		';
        $result = $this->con->prepare($query);
        $result->execute($params);
        $return = $result->fetchAll(PDO::FETCH_ASSOC);	

        return $return;

    }

}
