<?php
//TODO: connect to DB

if(isset($_POST['query'])){
    //TODO: Filter database entries
}else{
    //TODO: get all DB entries
}

//TODO: Loop through entries & echo in this template

$obj = "
<div class='card col'>
    <div class='font-header entry-name card-center'>
        First entry
    </div>
    <section  class='entry-author'>
        Author A
    </section>
    <p class='entry-description spacer-xs'>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, officiis esse. Praesentium voluptate, blanditiis nobis numquam magnam aliquid quaerat, odio inventore, consectetur rerum beatae iste error a id dicta culpa?
    </p>
    <button class='btn-simple spacer-xs entry-btn'>
        Download - 5Mb
    </button>
</div>";