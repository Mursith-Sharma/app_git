<?php

function load_template($name){                        
    // print("including $name.php");            
    include __DIR__."/../_templates/$name.php";       
    include $_SERVER['DOCUMENT_ROOT']."/mursith-015/app/_templates/$name.php";    
}
?>

<!-- 
இது ஒரு user-defined function. இதில் ஒரு parameter $name எடுக்கறீங்க 
(அதாவது எந்த template name-ஐ load செய்யணுமோ அதை argument-ஆக் கொடுக்கலாம்). __DIR__ ithai magic function enpom
print code write panna reason success aaga work aagiratha enpathai kandu pidikka
இதில் $name = 'header' =>   include __DIR__."/../_templates/$name.php";
இந்த மாதிரியான file-ஐ include செய்யும்: include __DIR__."/../_templates/header.php";
matrum $name kku pathilaga _header.php ena include pannalam. but athai vida $name ivvaru variable pass pannuvathan moolam inha function palamurai use pannalam
 -->