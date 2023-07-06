<?php 

class TopicDao{

    public $conn;

    function __constructor($conn){
        $this->conn=$conn;
    }


    //insert topic

    function insert_topic($topic){

        $query="insert into topic(title,sub_id)values(?,?)";

        $stmt=$this->conn->prepare($query,$topic);

        




    }


}


?>