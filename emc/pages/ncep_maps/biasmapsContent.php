<?php include '../../data.php'?>
<?php include '../../form.php' ?>

<div id="mainHeader">
    <div class="header">
    <div id="buttonContainer">
        <form action="../diffmaps/index.php">
        <button class="btn btn-primary">Diffmaps</button>
        </form action = "">
        <form action="../biasmaps/index.php">
        <button class="btn btn-primary">Biasmaps</button>
        </form>
        <form action="../biaspdf/index.php">
        <button class="btn btn-primary">Biaspdf</button>
        </form>
    </div>

    </div>
</div>
<div id="mapsContainer">
        <form class="form-group mapsMenu" action="" method="post">  
                            <label>Map</label>
                        <select class="form-control" name="map">
                                <option><?php echo $biasmapsOption  ?></option>
                        </select>                  
                        <label>Varname</label>
                        <select class="form-control" name="varname">
                            <?php foreach($biasmapsVarname as $varname) { ?>
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
                            <?php foreach($biasmapsSeason as $season) { ?>
                                <option><?php echo $season  ?></option>
                            <?php } ?>
                        </select>
                        <label>N</label>
                        <select class="form-control" name="n">
                            <?php foreach($biasmapsNs as $n) { ?>
                                <option><?php echo $n  ?></option>
                            <?php } ?>
                        </select>
                        <label>Domain</label>
                        <select class="form-control" name="domain">
                            <?php foreach($biasmapsDomain as $domain) { ?>
                                <option><?php echo $domain  ?></option>
                            <?php } ?>
                        </select>
                        <label>Period</label>
                        <select class="form-control" name="period">
                            <?php foreach($biasmapsPeriod as $period) { ?>
                                <option><?php echo $period  ?></option>
                            <?php } ?>
                        </select>
                        <br>
                   
                        <button class="btn btn-primary" name="submitBtn">Submit</button>
                </form>

    <div id="mapsImages">
    <?php echo $content ?>
   </div>
    </div>
</div>




 



