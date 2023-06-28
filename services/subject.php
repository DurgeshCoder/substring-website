<?php

class SubjectService{


  function transformData($oldSubject) {
    $newData = array();
    $oldSubtopic = null;
    $oldSubjectIndex = -1;
    $ob = null;
  
    foreach ($oldSubject as $subtopics) {
      if ($oldSubtopic == null) {
        // first subject topic
        $ob = array(
          "subject" => $subtopics["sub_name"],
          "shortDescription" => $subtopics["short_description"],
          "longDescription" => $subtopics["long_description"],
          "languages" => $subtopics["language"],
          "ratings" => $subtopics["rating"],
          "coverImages" => $subtopics["cover_img"],
          "topics" => array(
            array(
              "topic_id" => $subtopics["top_id"],
              "topic" => $subtopics["topic_tittle"],
              "subtopicsArray" => array(
                array(
                  "subtopicTitle" => $subtopics["sub_topic_tittle"],
                ),
              ),
            ),
          ),
        );
        $newData[] = $ob;
        $oldSubjectIndex += 1;
      } else {
        // second, third, fourth
        if ($oldSubtopic["sub_name"] === $subtopics["sub_name"]) {
          $ind = -1;
          foreach ($newData[$oldSubjectIndex]["topics"] as $key => $t) {
            if ($t["topic"] === $subtopics["topic_tittle"]) {
              $ind = $key;
              break;
            }
          }
  
          if ($ind >= 0) {
            $newData[$oldSubjectIndex]["topics"][$ind]["subtopicsArray"][] = array(
              "subtopicTitle" => $subtopics["sub_topic_tittle"],
            );
          } else {
            $newData[$oldSubjectIndex]["topics"][] = array(
              "topic" => $subtopics["topic_tittle"],
              "subtopicsArray" => array(
                array(
                  "subtopicTitle" => $subtopics["sub_topic_tittle"],
                ),
              ),
            );
          }
        } else {
          // different subject
          $ob = array(
            "subject" => $subtopics["sub_name"],
            "topics" => array(
              array(
                "topic" => $subtopics["topic_tittle"],
                "subtopicsArray" => array(
                  array(
                    "subtopicTitle" => $subtopics["sub_topic_tittle"],
                  ),
                ),
              ),
            ),
          );
          $newData[] = $ob;
          $oldSubjectIndex += 1;
        }
      }
  
      $oldSubtopic = $subtopics;
    }
  
    return $newData;
  }
};























?>