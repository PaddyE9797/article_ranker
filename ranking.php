<?php

if($_POST['rank1']) {
    $rank1 = $_POST['rank1'];
    $rank2 = $_POST['rank2'];
    $rank3 = $_POST['rank3'];
    $rank4 = $_POST['rank4'];
    $rank5 = $_POST['rank5'];

    $score = array("Article 1"=>$rank1, "Article 2"=>$rank2, "Article 3"=>$rank3,  "Article 4"=>$rank4, "Article 5"=>$rank5);
    arsort($score);

    foreach($score as $name => $rank) {
        echo $name . " has the ranking of " . $rank;
        echo "<br>";
    }
}
else {
    echo 'nothing';
}
?>