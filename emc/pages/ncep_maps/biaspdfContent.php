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
                                <option><?php echo $biaspdfOption  ?></option>
                        </select>                    
                        <label>Varname</label>
                        <select class="form-control" name="varname">
                            <?php foreach($biaspdfVarname as $varname) { ?>
                                <option><?php echo $varname  ?></option>
                            <?php } ?>
                        </select>
                        <label>Model Old </label>
                        <select class="form-control" name="modelOld">
                            <?php foreach($modelOldOption as $modelOld) { ?>
                                <option><?php echo $modelOld  ?></option>
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
                            <?php foreach($biaspdfSeason as $season) { ?>
                                <option><?php echo $season  ?></option>
                            <?php } ?>
                        </select>
                        <label>N</label>
                        <select class="form-control" name="n">
                            <?php foreach($biaspdfNs as $n) { ?>
                                <option><?php echo $n  ?></option>
                            <?php } ?>
                        </select>
                        <label>Domain</label>
                        <select class="form-control" name="domain">
                            <?php foreach($biaspdfDomain as $domain) { ?>
                                <option><?php echo $domain  ?></option>
                            <?php } ?>
                        </select>
                        <label>mask</label>
                        <select class="form-control" name="mask">
                            <?php foreach($biaspdfMask as $mask) { ?>
                                <option><?php echo $mask  ?></option>
                            <?php } ?>
                        </select>
                        <br>
                   
                        <button class="btn btn-primary" name="submitBtn">Submit</button>
                </form>
                        
    <div id="mapsImages">
    <?php  echo $content ?>
    </div>
    </div>
</div>




 



