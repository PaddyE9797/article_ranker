<?php

if($_POST['rank1']) {
    $rank1 = $_POST['rank1'];
    $rank2 = $_POST['rank2'];
    $rank3 = $_POST['rank3'];
    $rank4 = $_POST['rank4'];
    $rank5 = $_POST['rank5'];

    $score = array("Lorem ipsum dolor sit amet, consectetur adipiscing elit"=>$rank1,
        "Praesent bibendum nec velit a fringilla. Nulla facilisi"=>$rank2,
        "Vestibulum posuere orci ullamcorper nisi porta, sit amet tempus nibh porta"=>$rank3,
        "Maecenas venenatis lorem ut erat dictum, sed varius est porta"=>$rank4,
        "Nulla nibh erat, pharetra at ultricies nec, tincidunt luctus arcu"=>$rank5);

    arsort($score);

    $number = 1;

    foreach($score as $name => $rank) {
        echo $number . ". " . $name;
        $number++;
        echo "<br><br>";
    }
}
?>