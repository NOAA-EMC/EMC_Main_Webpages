<?php




$biasmapsOption = "biasmaps";
$diffmapsOption = "diffmaps";
$biaspdfOption = "biaspdf";
$varNameOption = array("prate", "t2max", "t2min", "tmpsfc","ulwrftoa");
$modelOldOption = array("ufs_p5");
$modelNewOption = array("ufs_p6");




$biasmapsVarname = array("prate","t2max","t2min","tmp2m","tmpsfc","ulwrftoa");
$biasmapsSeason = array("AllAvailable","DJF","JJA","MAM","SON");
$biasmapsNs = array(28,7);
$biasmapsDomain = array("Global50");
$biasmapsPeriod = array("d1-d7","d8-d14","d15-d21","d15-28","d1-d35");

$biaspdfVarname = array("prate","tmp2m","tmpsfc","ulwrtoa");
$biaspdfSeason = array("AllAvailable","DJF","JJA","MAM","SON");
$biaspdfNs = array(7,28);
$biaspdfDomain = array("GlobalTropics");
$biaspdfMask = array("oceanonly","landonly","nomask");

$diffmapsVarname = array("cloudbdry","cloudhi","cloudlow","cloudmid","dswrf","icetk","prate","pwat","snod","soilm02m","spfh2m","tmp2m","tmpsfc","ulwrf","ulwrtoa","uswrf");
$diffmapsSeason = array("AllAvailable","DJF","JJA","MAM","SON");
$diffmapsNs = array(7,28);
$diffmapsDomain = array("Global");
$diffmapsPeriod = array("d1-d7","d8-d14","d15-d21","d15-28","d1-d35");






