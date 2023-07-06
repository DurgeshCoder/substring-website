
<?php
include  "../../helper/subject_helper.php";
include "../../helper/database.php";
header('Content-Type: application/json');
$subject_dao=new SubjectDao($conn);
$subjects=$subject_dao->get_subjects();
echo json_encode($subjects);
?>