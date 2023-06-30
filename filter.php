<?php 

include "./helper/subject_dao.php";
include "./helper/database.php";
$subject_dao=new SubjectDao($conn);

$subjects=$subject_dao->get_subjects();





?>

<?php 
foreach($subjects as $key => $value){
    ?>
    <h1><?= $value["rating"]?></h1>
 <?php   
};
?>
