<?php





class SubjectDao{

    public $conn;


    function __construct($conn){
     
        $this->conn=$conn;       
    }

    //  get subjects 
    function get_subjects(){
        $query="select * from subjects ";
        $statement=$this->conn->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll();
        return $result;

    }
function get_subjects_topic_subtopic($slug){

$query="select subjects.sub_name,subjects.short_description,subjects.long_description,subjects.language,subjects.cover_img,subjects.rating,topic.top_id,topic.topic_tittle,sub_toppic.sub_top_id,sub_toppic.sub_topic_tittle from subjects INNER JOIN topic  ON
topic.sub_id=subjects.sub_id INNER JOIN sub_toppic ON topic.top_id=sub_toppic.top_id where subjects.slug=?";
$statement=$this->conn->prepare($query);
$statement->bindValue(1, $slug);
$statement->execute();
$result=$statement->fetchAll();
return $result;
}
}

















?>