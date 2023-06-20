<?php





class SubjectDao{

    public $conn;


    function __construct($conn){
     
        $this->conn=$conn;       
    }

    //  get subjects 
    function get_subjects(){
        $query="select * from subjects";
        $statement=$this->conn->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;

    }

}

















?>