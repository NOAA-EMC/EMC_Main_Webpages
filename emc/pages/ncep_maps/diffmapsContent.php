<?php include './data.php'?>
<?php include './form.php' ?>

<div id="mainHeader">
    <div class="header">
    </div>
</div>
<div id="mapsContainer">
        <form class="form-group mapsMenu" action="" method="post"> 
                        <label>Map</label>
                        <select class="form-control" name="map">
                                <option><?php echo $diffmapsOption  ?></option>
                        </select>  
                        <label>Varname</label>
                        <select class="form-control" name="varname">
                            <?php foreach($varNameOption as $varname) { ?>
                                <option><?php echo $varname  ?></option>
                            <?php } ?>
                        </select>                   
                        <label>Varname</label>
                        <select class="form-control" name="varname">
                            <?php foreach($varNameOption as $varname) { ?>
                                <option><?php echo $varname  ?></option>
                            <?php } ?>
                        </select>
                        <label>Model New </label>
                        <select class="form-control" name="modelNew">
                            <?php foreach($modelNewOption as $modelNew) { ?>
                                <option><?php echo $modelNew  ?></option>
                            <?php } ?>
                        </select>
                        <label>Season</label>
                        <select class="form-control" name="season">
                            <?php foreach($seasonOption as $season) { ?>
                                <option><?php echo $season  ?></option>
                            <?php } ?>
                        </select>
                        <label>N</label>
                        <select class="form-control" name="n">
                            <?php foreach($nOption as $n) { ?>
                                <option><?php echo $n  ?></option>
                            <?php } ?>
                        </select>
                        <label>Domain</label>
                        <select class="form-control" name="domain">
                            <?php foreach($domainOption as $domain) { ?>
                                <option><?php echo $domain  ?></option>
                            <?php } ?>
                        </select>
                        <label>Period</label>
                        <select class="form-control" name="period">
                            <?php foreach($periodOption as $period) { ?>
                                <option><?php echo $period  ?></option>
                            <?php } ?>
                        </select>
                        <br>
                   
                        <button class="btn btn-primary" name="submitBtn">Submit</button>
                </form>
                        
     <div class="mapsImages">
    <?php if($content === "image not found"){ return " ";}?>
    <img src="<?php echo $content ?>" />
    </div>
    </div>
</div>




 



