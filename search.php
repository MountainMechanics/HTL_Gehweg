<?php
//TODO: connect to DB
require "db_conn.php";

$sql = "SELECT * from entry";
//$stmnt = $conn->prepare($sql);
//$stmnt->bind_param(..., ...);
$stmnt->execute();
$stmnt->store_results();
$stmnt->bind_results($id, $title, $desc, $data, $author);
$stmnt->fetch();
$stmnt->close();

$result = mysqli_query($conn, $sql);

if(isset($_POST['query'])){
    //TODO: Filter database entries

}else{
    //TODO: get all DB entries
}

//TODO: Loop through entries & echo in this template

echo "
<div class='card col'>
    <div class='font-header entry-name card-center'>
        ".$title."
    </div>
    <section  class='entry-author'>
        ".$author."
    </section>
    <p class='entry-description spacer-xs'>
        ".$desc."
    </p>
    <button class='btn-simple spacer-xs entry-btn'>
        Download - 5Mb
    </button>
</div>";