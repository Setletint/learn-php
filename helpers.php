<?php

function view($viewName, $variables=[]){
    extract($variables);
    include __DIR__ . "/views/$viewName.php";
}