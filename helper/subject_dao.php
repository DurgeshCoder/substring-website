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

function search_data($filter_data){
    $searchTerm = $filter_data;
    $query ="SELECT * FROM subjects WHERE sub_name LIKE :searchTerm";
    $stmt = $this->conn->prepare($query);
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%');
    $stmt->execute();
    $filteredData = $stmt->fetchAll(); 
    return $filteredData;
}

function insert_subject_data($subjectData){
   $query = ("INSERT INTO  subjects (sub_name, short_description, long_description, fee, discount, fee_after_discount, slug, language, rating ) 
              VALUES (:subject_name, :short_description, :long_description, :fee, :discount, :fee_after_discount, :slug, :language, :rating)");
              $stmt = $this->conn->prepare($query);
          
              $stmt->bindParam(':subject_name',     $subjectData['subjectName']);
              $stmt->bindParam(':short_description', $subjectData['shortDes']);
              $stmt->bindParam(':long_description',  $subjectData['longDes']);
              $stmt->bindParam(':fee',  $subjectData['Fee']);
              $stmt->bindParam(':discount',  $subjectData['Discount']);
              $stmt->bindParam(':fee_after_discount',  $subjectData['discountFee']);
              $stmt->bindParam(':slug',  $subjectData['Slug']);
              $stmt->bindParam(':language',  $subjectData['Language']);
              $stmt->bindParam(':rating',  $subjectData['Rating']);
     
            //   insert a row 

            // $subjectName= $_POST['sub_name'];
            // $shortDes= $_POST['short_description'];
            // $longDes = $_POST['long_description'];
            // $Fee = $_POST['fee'];
            // $Discount = $_POST['discount'];
            // $discountFee = $_POST['fee_after_discount'];
            // $Slug = $_POST['slug'];
            // $Language = $_POST['language'];
            // $Rating = $_POST['rating'];
            $stmt->execute();
}
}

















?>