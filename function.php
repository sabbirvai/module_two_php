<?php
function doTaskA(){
    echo "Step A done\n";
}
function doTaskB(){
    echo "Step B done\n";
}
function doTaskC(){
    echo "Step C done\n";
}
function doTaskD(){
    echo "Step D done\n";
}
function doTaskE(){
    echo "Step E done\n";
}

function doTheLargerTask(){
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}
doTheLargerTask();