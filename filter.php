<?php
    $cursor = $collection->find();

    if(isset($_POST["brooklyn"])){
        $cursor = $collection->find(["borough"=>$_POST["brooklyn"]]);
    }elseif(isset($_POST["queens"])){
        $cursor = $collection->find(['borough'=>$_POST["queens"]]);
    }elseif(isset($_POST["manhattan"])){
        $cursor = $collection->find(['borough'=>$_POST["manhattan"]]);
    }elseif(isset($_POST["bronx"])){
        $cursor = $collection->find(['borough'=>$_POST["bronx"]]);
    }elseif(isset($_POST["staten"])){
        $cursor = $collection->find(['borough'=>$_POST["staten"]]);
    }elseif(isset($_POST["keyword"])){
        $cursor = $collection->find(array('$or' => array(
            array("name" => $_POST["keyword"]),
            array("cuisine" => $_POST["keyword"])
          )));
    }
    if(isset($_POST["all"])){
        $cursor = $collection->find();
    }
?>