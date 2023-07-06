<?php





class SubjectDao{

    public $conn;
    // $public_table_name="subjectdetail"


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

    // // get subject by id
    // function get_subject_by_id($id)
    // {


    //     $query="select * from subject where id =? ";

    //     return $result;

    // }

}

// function etc....

















?>