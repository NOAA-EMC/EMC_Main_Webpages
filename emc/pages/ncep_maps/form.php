<?php

if(empty($_POST['map'])){
    $map = null;
}

if(isset($_POST['map'])){
  
    $map = $_POST['map'];
}
if(empty($_POST['varname'])){
    $varname = null;
}
if(isset($_POST['varname'])){
    $varname = $_POST['varname'];
}
if(empty($_POST['modelNew'])){
    $modelNew = null;
}
if(isset($_POST['modelNew'])){
    $modelNew = $_POST['modelNew'];
}
if(empty($_POST['modelOld'])){
    $modelOld = null;
}
if(isset($_POST['modelOld'])){
    $modelOld = $_POST['modelOld'];
}
if(empty($_POST['season'])){
    $season = null;
}

if(empty($_POST['season'])){
    $season = null;
}
if(isset($_POST['season'])){
    $season =  $_POST['season'];
}

if(empty($_POST['n'])){
    $n = null;
}

if(isset($_POST['n'])){
    $n = $_POST['n'];
}

if(empty($_POST['domain'])){
    $domain = null;
}else if(isset($_POST['domain'])){
    $domain = $_POST['domain'];
}

if(empty($_POST['mask'])){
    $mask = null;
}else if(isset($_POST['mask'])){
    $mask = $_POST['mask'];
}
if(empty($_POST['period'])){
    $period = null;
}else if(isset($_POST['period'])){
    $period = $_POST['period'];
}



function generateSourcePath($map, $varname, $modelOld, $modelNew, $season, $n, $domain, $period, $mask){
    $imageSrc = null;
    if($map === "biasmaps"){
        $imageSrc = $map.'.'.$varname.'.'.$modelNew.'.'.$season.'.'.$n.'ICs'.'.'.$domain.'.'.$period.'.png';

    }

    if($map === "diffmaps"){
        $imageSrc = $map.'.'.$varname.'.'.$modelNew.'.vs.'.$modelOld.'.'.$season.'.'.$n.'ICs'.'.'.$period.'.'.$domain.'.png';
    }

    if($map === "biaspdf"){
       $imageSrc = $map.'.'.$varname.'.'.$modelOld.'.'.$modelNew.'.'.$season.'.'.$n.'ICs'.'.'.$domain.'.'.$mask.'.png';
    }

    return $imageSrc;

}

$imageStr = generateSourcePath($map, $varname,$modelOld,$modelNew, $season, $n, $domain, $period, $mask);

$img = " ";



function generateImg($img,$map, $imageStr){
if(isset($_POST['submitBtn'])){
    $img =  '<img class="map" src='. "../../images/P6/". $map. "/".$imageStr. ' />';
    return $img;
}
}
   

$content = generateImg($img, $map, $imageStr);

