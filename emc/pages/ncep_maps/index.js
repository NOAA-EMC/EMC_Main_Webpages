class MyClass {
    map = '';
    varname = '';
    modelFive = '';
    modelSix = '';
    season = '';
    n = '';
    domain = '';
    period = '';
    result = '';
    
    myArray = [
            "biasmaps.prate.ufs_p6.AllAvailable.28ICs.Global50.d1-d35.png",
            "biasmaps.prate.ufs_p6.AllAvailable.28ICs.Global50.d1-d7.png",
            "biasmaps.prate.ufs_p6.AllAvailable.28ICs.Global50.d15-d21.png",
            "biasmaps.prate.ufs_p6.AllAvailable.28ICs.Global50.d15-d28.png",
            "biasmaps.prate.ufs_p6.AllAvailable.28ICs.Global50.d8-d14.png",
            "biasmaps.prate.ufs_p6.DJF.7ICs.Global50.d1-d35.png",
            "biasmaps.prate.ufs_p6.DJF.7ICs.Global50.d1-d7.png",
            "biasmaps.prate.ufs_p6.DJF.7ICs.Global50.d15-d21.png",
            "biasmaps.prate.ufs_p6.DJF.7ICs.Global50.d15-d28.png",
            "biasmaps.prate.ufs_p6.DJF.7ICs.Global50.d8-d14.png",
            "biasmaps.prate.ufs_p6.JJA.7ICs.Global50.d1-d35.png",
            "biasmaps.prate.ufs_p6.JJA.7ICs.Global50.d1-d7.png",
            "biasmaps.prate.ufs_p6.JJA.7ICs.Global50.d15-d21.png",
            "biasmaps.prate.ufs_p6.JJA.7ICs.Global50.d15-d28.png",
            "biasmaps.prate.ufs_p6.JJA.7ICs.Global50.d8-d14.png",
            "biasmaps.prate.ufs_p6.MAM.7ICs.Global50.d1-d35.png",
            "biasmaps.prate.ufs_p6.MAM.7ICs.Global50.d1-d7.png",
            "biasmaps.prate.ufs_p6.MAM.7ICs.Global50.d15-d21.png",
            "biasmaps.prate.ufs_p6.MAM.7ICs.Global50.d15-d28.png",
            "biasmaps.prate.ufs_p6.MAM.7ICs.Global50.d8-d14.png",
            "biasmaps.prate.ufs_p6.SON.7ICs.Global50.d1-d35.png",
            "biasmaps.prate.ufs_p6.SON.7ICs.Global50.d1-d7.png",
            "biasmaps.prate.ufs_p6.SON.7ICs.Global50.d15-d21.png",
            "biasmaps.prate.ufs_p6.SON.7ICs.Global50.d15-d28.png",
            "biasmaps.prate.ufs_p6.SON.7ICs.Global50.d8-d14.png",
            "biasmaps.t2max.ufs_p6.AllAvailable.28ICs.Global50.d1-d35.png",
            "biasmaps.t2max.ufs_p6.AllAvailable.28ICs.Global50.d1-d7.png",
            "biasmaps.t2max.ufs_p6.AllAvailable.28ICs.Global50.d15-d21.png",
            "biasmaps.t2max.ufs_p6.AllAvailable.28ICs.Global50.d15-d28.png",
            "biasmaps.t2max.ufs_p6.AllAvailable.28ICs.Global50.d8-d14.png",
            "biasmaps.t2max.ufs_p6.DJF.7ICs.Global50.d1-d35.png",
            "biasmaps.t2max.ufs_p6.DJF.7ICs.Global50.d1-d7.png",
            "biasmaps.t2max.ufs_p6.DJF.7ICs.Global50.d15-d21.png",
            "biasmaps.t2max.ufs_p6.DJF.7ICs.Global50.d15-d28.png",
            "biasmaps.t2max.ufs_p6.DJF.7ICs.Global50.d8-d14.png",
            "biasmaps.t2max.ufs_p6.JJA.7ICs.Global50.d1-d35.png",
            "biasmaps.t2max.ufs_p6.JJA.7ICs.Global50.d1-d7.png",
            "biasmaps.t2max.ufs_p6.JJA.7ICs.Global50.d15-d21.png",
            "biasmaps.t2max.ufs_p6.JJA.7ICs.Global50.d15-d28.png",
            "biasmaps.t2max.ufs_p6.JJA.7ICs.Global50.d8-d14.png",
            "biasmaps.t2max.ufs_p6.MAM.7ICs.Global50.d1-d35.png",
            "biasmaps.t2max.ufs_p6.MAM.7ICs.Global50.d1-d7.png",
            "biasmaps.t2max.ufs_p6.MAM.7ICs.Global50.d15-d21.png",
            "biasmaps.t2max.ufs_p6.MAM.7ICs.Global50.d15-d28.png",
            "biasmaps.t2max.ufs_p6.MAM.7ICs.Global50.d8-d14.png",
            "biasmaps.t2max.ufs_p6.SON.7ICs.Global50.d1-d35.png",
            "biasmaps.t2max.ufs_p6.SON.7ICs.Global50.d1-d7.png",
            "biasmaps.t2max.ufs_p6.SON.7ICs.Global50.d15-d21.png",
            "biasmaps.t2max.ufs_p6.SON.7ICs.Global50.d15-d28.png",
            "biasmaps.t2max.ufs_p6.SON.7ICs.Global50.d8-d14.png",
            "biasmaps.t2min.ufs_p6.AllAvailable.28ICs.Global50.d1-d35.png",
            "biasmaps.t2min.ufs_p6.AllAvailable.28ICs.Global50.d1-d7.png",
            "biasmaps.t2min.ufs_p6.AllAvailable.28ICs.Global50.d15-d21.png",
            "biasmaps.t2min.ufs_p6.AllAvailable.28ICs.Global50.d15-d28.png",
            "biasmaps.t2min.ufs_p6.AllAvailable.28ICs.Global50.d8-d14.png",
            "biasmaps.t2min.ufs_p6.DJF.7ICs.Global50.d1-d35.png",
            "biasmaps.t2min.ufs_p6.DJF.7ICs.Global50.d1-d7.png",
            "biasmaps.t2min.ufs_p6.DJF.7ICs.Global50.d15-d21.png",
            "biasmaps.t2min.ufs_p6.DJF.7ICs.Global50.d15-d28.png",
            "biasmaps.t2min.ufs_p6.DJF.7ICs.Global50.d8-d14.png",
            "biasmaps.t2min.ufs_p6.JJA.7ICs.Global50.d1-d35.png",
            "biasmaps.t2min.ufs_p6.JJA.7ICs.Global50.d1-d7.png",
            "biasmaps.t2min.ufs_p6.JJA.7ICs.Global50.d15-d21.png",
            "biasmaps.t2min.ufs_p6.JJA.7ICs.Global50.d15-d28.png",
            "biasmaps.t2min.ufs_p6.JJA.7ICs.Global50.d8-d14.png",
            "biasmaps.t2min.ufs_p6.MAM.7ICs.Global50.d1-d35.png",
            "biasmaps.t2min.ufs_p6.MAM.7ICs.Global50.d1-d7.png",
            "biasmaps.t2min.ufs_p6.MAM.7ICs.Global50.d15-d21.png",
            "biasmaps.t2min.ufs_p6.MAM.7ICs.Global50.d15-d28.png",
            "biasmaps.t2min.ufs_p6.MAM.7ICs.Global50.d8-d14.png",
            "biasmaps.t2min.ufs_p6.SON.7ICs.Global50.d1-d35.png",
            "biasmaps.t2min.ufs_p6.SON.7ICs.Global50.d1-d7.png",
            "biasmaps.t2min.ufs_p6.SON.7ICs.Global50.d15-d21.png",
            "biasmaps.t2min.ufs_p6.SON.7ICs.Global50.d15-d28.png",
            "biasmaps.t2min.ufs_p6.SON.7ICs.Global50.d8-d14.png",
            "biasmaps.tmp2m.ufs_p6.AllAvailable.28ICs.Global50.d1-d35.png",
            "biasmaps.tmp2m.ufs_p6.AllAvailable.28ICs.Global50.d1-d7.png",
            "biasmaps.tmp2m.ufs_p6.AllAvailable.28ICs.Global50.d15-d21.png",
            "biasmaps.tmp2m.ufs_p6.AllAvailable.28ICs.Global50.d15-d28.png",
            "biasmaps.tmp2m.ufs_p6.AllAvailable.28ICs.Global50.d8-d14.png",
            "biasmaps.tmp2m.ufs_p6.DJF.7ICs.Global50.d1-d35.png",
            "biasmaps.tmp2m.ufs_p6.DJF.7ICs.Global50.d1-d7.png",
            "biasmaps.tmp2m.ufs_p6.DJF.7ICs.Global50.d15-d21.png",
            "biasmaps.tmp2m.ufs_p6.DJF.7ICs.Global50.d15-d28.png",
            "biasmaps.tmp2m.ufs_p6.DJF.7ICs.Global50.d8-d14.png",
            "biasmaps.tmp2m.ufs_p6.JJA.7ICs.Global50.d1-d35.png",
            "biasmaps.tmp2m.ufs_p6.JJA.7ICs.Global50.d1-d7.png",
            "biasmaps.tmp2m.ufs_p6.JJA.7ICs.Global50.d15-d21.png",
            "biasmaps.tmp2m.ufs_p6.JJA.7ICs.Global50.d15-d28.png",
            "biasmaps.tmp2m.ufs_p6.JJA.7ICs.Global50.d8-d14.png",
            "biasmaps.tmp2m.ufs_p6.MAM.7ICs.Global50.d1-d35.png",
            "biasmaps.tmp2m.ufs_p6.MAM.7ICs.Global50.d1-d7.png",
            "biasmaps.tmp2m.ufs_p6.MAM.7ICs.Global50.d15-d21.png",
            "biasmaps.tmp2m.ufs_p6.MAM.7ICs.Global50.d15-d28.png",
            "biasmaps.tmp2m.ufs_p6.MAM.7ICs.Global50.d8-d14.png",
            "biasmaps.tmp2m.ufs_p6.SON.7ICs.Global50.d1-d35.png",
            "biasmaps.tmp2m.ufs_p6.SON.7ICs.Global50.d1-d7.png",
            "biasmaps.tmp2m.ufs_p6.SON.7ICs.Global50.d15-d21.png",
            "biasmaps.tmp2m.ufs_p6.SON.7ICs.Global50.d15-d28.png",
            "biasmaps.tmp2m.ufs_p6.SON.7ICs.Global50.d8-d14.png",
            "biasmaps.tmpsfc.ufs_p6.AllAvailable.28ICs.Global50.d1-d35.png",
            "biasmaps.tmpsfc.ufs_p6.AllAvailable.28ICs.Global50.d1-d7.png",
            "biasmaps.tmpsfc.ufs_p6.AllAvailable.28ICs.Global50.d15-d21.png",
            "biasmaps.tmpsfc.ufs_p6.AllAvailable.28ICs.Global50.d15-d28.png",
            "biasmaps.tmpsfc.ufs_p6.AllAvailable.28ICs.Global50.d8-d14.png",
            "biasmaps.tmpsfc.ufs_p6.DJF.7ICs.Global50.d1-d35.png",
            "biasmaps.tmpsfc.ufs_p6.DJF.7ICs.Global50.d1-d7.png",
            "biasmaps.tmpsfc.ufs_p6.DJF.7ICs.Global50.d15-d21.png",
            "biasmaps.tmpsfc.ufs_p6.DJF.7ICs.Global50.d15-d28.png",
            "biasmaps.tmpsfc.ufs_p6.DJF.7ICs.Global50.d8-d14.png",
            "biasmaps.tmpsfc.ufs_p6.JJA.7ICs.Global50.d1-d35.png",
            "biasmaps.tmpsfc.ufs_p6.JJA.7ICs.Global50.d1-d7.png",
            "biasmaps.tmpsfc.ufs_p6.JJA.7ICs.Global50.d15-d21.png",
            "biasmaps.tmpsfc.ufs_p6.JJA.7ICs.Global50.d15-d28.png",
            "biasmaps.tmpsfc.ufs_p6.JJA.7ICs.Global50.d8-d14.png",
            "biasmaps.tmpsfc.ufs_p6.MAM.7ICs.Global50.d1-d35.png",
            "biasmaps.tmpsfc.ufs_p6.MAM.7ICs.Global50.d1-d7.png",
            "biasmaps.tmpsfc.ufs_p6.MAM.7ICs.Global50.d15-d21.png",
            "biasmaps.tmpsfc.ufs_p6.MAM.7ICs.Global50.d15-d28.png",
            "biasmaps.tmpsfc.ufs_p6.MAM.7ICs.Global50.d8-d14.png",
            "biasmaps.tmpsfc.ufs_p6.SON.7ICs.Global50.d1-d35.png",
            "biasmaps.tmpsfc.ufs_p6.SON.7ICs.Global50.d1-d7.png",
            "biasmaps.tmpsfc.ufs_p6.SON.7ICs.Global50.d15-d21.png",
            "biasmaps.tmpsfc.ufs_p6.SON.7ICs.Global50.d15-d28.png",
            "biasmaps.tmpsfc.ufs_p6.SON.7ICs.Global50.d8-d14.png",
            "biasmaps.ulwrftoa.ufs_p6.AllAvailable.28ICs.Global50.d1-d35.png",
            "biasmaps.ulwrftoa.ufs_p6.AllAvailable.28ICs.Global50.d1-d7.png",
            "biasmaps.ulwrftoa.ufs_p6.AllAvailable.28ICs.Global50.d15-d21.png",
            "biasmaps.ulwrftoa.ufs_p6.AllAvailable.28ICs.Global50.d15-d28.png",
            "biasmaps.ulwrftoa.ufs_p6.AllAvailable.28ICs.Global50.d8-d14.png",
            "biasmaps.ulwrftoa.ufs_p6.DJF.7ICs.Global50.d1-d35.png",
            "biasmaps.ulwrftoa.ufs_p6.DJF.7ICs.Global50.d1-d7.png",
            "biasmaps.ulwrftoa.ufs_p6.DJF.7ICs.Global50.d15-d21.png",
            "biasmaps.ulwrftoa.ufs_p6.DJF.7ICs.Global50.d15-d28.png",
            "biasmaps.ulwrftoa.ufs_p6.DJF.7ICs.Global50.d8-d14.png",
            "biasmaps.ulwrftoa.ufs_p6.JJA.7ICs.Global50.d1-d35.png",
            "biasmaps.ulwrftoa.ufs_p6.JJA.7ICs.Global50.d1-d7.png",
            "biasmaps.ulwrftoa.ufs_p6.JJA.7ICs.Global50.d15-d21.png",
            "biasmaps.ulwrftoa.ufs_p6.JJA.7ICs.Global50.d15-d28.png",
            "biasmaps.ulwrftoa.ufs_p6.JJA.7ICs.Global50.d8-d14.png",
            "biasmaps.ulwrftoa.ufs_p6.MAM.7ICs.Global50.d1-d35.png",
            "biasmaps.ulwrftoa.ufs_p6.MAM.7ICs.Global50.d1-d7.png",
            "biasmaps.ulwrftoa.ufs_p6.MAM.7ICs.Global50.d15-d21.png",
            "biasmaps.ulwrftoa.ufs_p6.MAM.7ICs.Global50.d15-d28.png",
            "biasmaps.ulwrftoa.ufs_p6.MAM.7ICs.Global50.d8-d14.png",
            "biasmaps.ulwrftoa.ufs_p6.SON.7ICs.Global50.d1-d35.png",
            "biasmaps.ulwrftoa.ufs_p6.SON.7ICs.Global50.d1-d7.png",
            "biasmaps.ulwrftoa.ufs_p6.SON.7ICs.Global50.d15-d21.png",
            "biasmaps.ulwrftoa.ufs_p6.SON.7ICs.Global50.d15-d28.png",
            "biasmaps.ulwrftoa.ufs_p6.SON.7ICs.Global50.d8-d14.png",
            "biaspdf.prate.ufs_p5.ufs_p6.AllAvailable.28ICs.GlobalTropics.oceanonly.png",
            "biaspdf.prate.ufs_p5.ufs_p6.DJF.7ICs.GlobalTropics.oceanonly.png",
            "biaspdf.prate.ufs_p5.ufs_p6.JJA.7ICs.GlobalTropics.oceanonly.png",
            "biaspdf.prate.ufs_p5.ufs_p6.MAM.7ICs.GlobalTropics.oceanonly.png",
            "biaspdf.prate.ufs_p5.ufs_p6.SON.7ICs.GlobalTropics.oceanonly.png",
            "biaspdf.tmp2m.ufs_p5.ufs_p6.AllAvailable.28ICs.GlobalTropics.landonly.png",
            "biaspdf.tmp2m.ufs_p5.ufs_p6.DJF.7ICs.GlobalTropics.landonly.png",
            "biaspdf.tmp2m.ufs_p5.ufs_p6.JJA.7ICs.GlobalTropics.landonly.png",
            "biaspdf.tmp2m.ufs_p5.ufs_p6.MAM.7ICs.GlobalTropics.landonly.png",
            "biaspdf.tmp2m.ufs_p5.ufs_p6.SON.7ICs.GlobalTropics.landonly.png",
            "biaspdf.tmpsfc.ufs_p5.ufs_p6.AllAvailable.28ICs.GlobalTropics.oceanonly.png",
            "biaspdf.tmpsfc.ufs_p5.ufs_p6.DJF.7ICs.GlobalTropics.oceanonly.png",
            "biaspdf.tmpsfc.ufs_p5.ufs_p6.JJA.7ICs.GlobalTropics.oceanonly.png",
            "biaspdf.tmpsfc.ufs_p5.ufs_p6.MAM.7ICs.GlobalTropics.oceanonly.png",
            "biaspdf.tmpsfc.ufs_p5.ufs_p6.SON.7ICs.GlobalTropics.oceanonly.png",
            "biaspdf.ulwrftoa.ufs_p5.ufs_p6.AllAvailable.28ICs.GlobalTropics.nomask.png",
            "biaspdf.ulwrftoa.ufs_p5.ufs_p6.DJF.7ICs.GlobalTropics.nomask.png",
            "biaspdf.ulwrftoa.ufs_p5.ufs_p6.JJA.7ICs.GlobalTropics.nomask.png",
            "biaspdf.ulwrftoa.ufs_p5.ufs_p6.MAM.7ICs.GlobalTropics.nomask.png",
            "biaspdf.ulwrftoa.ufs_p5.ufs_p6.SON.7ICs.GlobalTropics.nomask.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.cloudbdry.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.cloudhi.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.cloudlow.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.cloudmid.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.dswrf.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.icetk.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.icetk.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.icetk.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.icetk.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.icetk.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.icetk.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.icetk.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.icetk.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.icetk.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.icetk.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.icetk.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.icetk.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.prate.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.pwat.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.snod.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.soilm02m.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.spfh2m.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.tmp2m.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.tmpsfc.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.ulwrf.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.ulwrftoa.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d35.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d1-d7.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d21.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d15-d28.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.AllAvailable.28ICs.d8-d14.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d35.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d1-d7.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d21.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d15-d28.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.DJF.7ICs.d8-d14.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d35.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d1-d7.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d21.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d15-d28.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.JJA.7ICs.d8-d14.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d35.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d1-d7.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d21.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d15-d28.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.MAM.7ICs.d8-d14.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d35.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.SON.7ICs.d1-d7.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d21.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.SON.7ICs.d15-d28.Global.png",
            "diffmaps.uswrf.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png"  
    ]


//if season is all available set to 28 else 7
// create filte thatr checks if selected values are in string if not disabled those options else show them 


    setResult(pResult){
        this.result = pResult;
    }

    
    //"biasmaps.tmp2m.ufs_p6.MAM.7ICs.Global50.d8-d14.png",
   
    updateArray() {

        for (let i = 0; i < this.myArray.length; i++){
            if(this.myArray[i].includes(this.map) && this.map != '' && this.map.includes("biasmaps")){
               if(this.myArray[i].includes(this.varname) && this.varname != ''){
                    if(this.myArray[i].includes(this.modelSix) && this.modelSix != ''){
                        if(this.myArray[i].includes(this.season) && this.season != ''){
                            if(this.myArray[i].includes(this.n) && this.n != ''){
                                if(this.myArray[i].includes(this.domain) && this.domain != ''){
                                if(this.myArray[i].includes(this.period) && this.period != ''){
                                    let src = this.myArray[i];
                                    this.generateImage(src)
                                    this.generateButton(src)
                                    }
                                
                                }
                            }
                        }
           
                    }
                }
            }
          
   // "biaspdf.tmpsfc.ufs_p5.ufs_p6.DJF.7ICs.GlobalTropics.oceanonly.png",

            if(this.myArray[i].includes(this.map) && this.map != '' && this.map.includes("biaspdf")){
                if(this.myArray[i].includes(this.varname) && this.varname != ''){
                    if(this.myArray[i].includes(this.modelFive) && this.modelFive != ''){
                    if(this.myArray[i].includes(this.modelSix) && this.modelSix != ''){
                        if(this.myArray[i].includes(this.season) && this.season != ''){
                            if(this.myArray[i].includes(this.n) && this.n != ''){
                                if(this.myArray[i].includes(this.domain) && this.domain != ''){
                                if(this.myArray[i].includes(this.mask) && this.mask != ''){
                                    let src = this.myArray[i];
                                    this.generateImage(src)
                                    this.generateButton(src)
                                    }
                                 }
                            }
                        }

                        }
                    }
                }
            }

            if(this.myArray[i].includes(this.map) && this.map != '' && this.map.includes("diffmaps")){
                this.show("#modelFiveLabel")
                this.show("#modelFive")
                if(this.myArray[i].includes(this.varname) && this.varname != ''){
                    if(this.myArray[i].includes(this.modelFive) && this.modelFive != ''){
                    if(this.myArray[i].includes(this.modelSix) && this.modelSix != ''){
                        if(this.myArray[i].includes(this.season) && this.season != ''){
                            if(this.myArray[i].includes(this.n) && this.n != ''){
                                if(this.myArray[i].includes(this.period) && this.period != ''){
                                if(this.myArray[i].includes(this.domain) && this.domain != ''){
                                    let src = this.myArray[i];
                                    this.generateImage(src)
                                    this.generateButton(src)
                                   
                                    }
                                
                                 }
                            }
                        }

                        }
                    }
                }
            }

            
        }

    }

    //varname options
    biasmapsVarname = ['Varname','prate', 't2max','t2min','tmp2m','tmpsfc','ulwrftoa'];
    biaspdfVarname = ['Varname','prate','tmp2m','tmpsfc','ulwrftoa']
    diffmapsVarname = ['cloudbdry','cloudhi','cloudlow','cloudmid','dswrf','icetk','prate','pwat','snod','soilm02m','spfh2m','tmp2m','tmpsfc','ulwrf','ulwrftoa','uswrf'];
    N28 = [28]
    N7 = [7]
    ocean = ['oceanonly']
    land = ['landonly']
    nomask = ['nomask']
    
    //season options
    updateMap(event){
     this.refresh()

        this.map = event.target.value;
        if(this.map === "biasmaps"){
            this.hide("#noMask")
            this.hide("#landMask")
            this.hide("#oceanMask")
            this.hide("#modelFiveLabel")
            this.hide("#modelFive")
            this.hide("#biaspdfDomain");
            this.hide("#diffmapsDomain")
            this.show("#biasmapsDomain")
            this.hide('#maskLabel')
            this.show("#periodLabel")
            this.show("#periodSelect")
            document.getElementById("varname").innerHTML = "";
            this.generateOptions(this.biasmapsVarname, 'varname')
            this.updateArray();
        }

   //"diffmaps.uswrf.ufs_p6.vs.ufs_p5.SON.7ICs.d8-d14.Global.png"  

        if(this.map === "diffmaps"){
            this.show("#modelFiveLabel")
            this.show("#modelFive")
            this.hide('#maskLabel')
            this.hide("#biaspdfDomain")
            this.hide("#biasmapsDomain")
            this.show("#periodLabel")
            this.show("#periodSelect")
            this.show("#diffmapsDomain")
        document.getElementById("varname").innerHTML = "";
        this.generateOptions(this.diffmapsVarname, 'varname')
        this.updateArray();

        }
   // "biaspdf.tmpsfc.ufs_p5.ufs_p6.DJF.7ICs.GlobalTropics.oceanonly.png",

        if(this.map === "biaspdf"){
            this.show("#modelFiveLabel")
            this.show("#modelFive")
            this.hide('#maskLabel')
            this.show("#biaspdfDomain")
            this.hide("#biasmapsDomain")
            this.hide("#diffmapsDomain")

            this.hide("#periodLabel")
            this.hide("#periodSelect")


            document.getElementById("varname").innerHTML = "";
            this.generateOptions(this.biaspdfVarname, 'varname')

            
        this.updateArray();

        }

    }
    updateVarname(event){
        this.varname = event.target.value;
      this.refresh()
       
         this.updateArray();

        
        if(this.map === "biaspdf"){
      this.refresh()

         if(this.varname == "tmpsfc"){
      this.refresh()

            this.show("#maskLabel")
            this.hide("#noMask")
            this.hide("#landMask")
            this.show("#oceanMask")
        this.updateArray();
        }

        if(this.varname == "prate"){
      this.refresh()

            this.show("#maskLabel")
            this.hide("#noMask")
            this.hide("#landMask")
            this.show("#oceanMask")
        this.updateArray();
        }
        

        if(this.varname === "tmp2m"){
            this.hide("#oceanMask")
            this.hide("#noMask")
            this.show("#maskLabel")
            this.show("#landMask")
        this.updateArray();

        }

        if(this.varname === "ulwrftoa"){
      this.refresh()

            this.show("#maskLabel")
            this.hide("#oceanMask")
            this.hide("#landMask")
            this.show("#maskLabel")
            this.show("#noMask")
            this.updateArray();
        }

    }

 
    }
    refresh(){
        let refreshButton  = document.querySelector('div#downloadImage a.source')
        if(refreshButton != undefined){
            refreshButton.remove()
        }
    }

    updateModelSix(event){
        this.refresh()

        this.modelSix = event.target.value
        this.updateArray();
    }

    updateModelFive(event){
        this.refresh()

        this.modelFive = event.target.value
        this.updateArray();
    }
    updateSeason(event){
        this.refresh()

        this.season = event.target.value;
        if(this.season === "AllAvailable"){
            this.show("#n28")
            this.hide("#n7")
            this.updateArray();


        }else{
            this.show("#n7")
            this.hide("#n28")
            this.updateArray();
        }
        

    }


    updateN(event){
        this.refresh()

        this.n = event.target.value;
        this.updateArray();
    }
    updateDomain(event){
        this.refresh()

        this.domain = event.target.value;
        this.updateArray();
    }

    updateMask(event){
        this.refresh()

        this.mask = event.target.value;
        this.updateArray();
    }

    updatePeriod(event){
        this.refresh()

        this.period = event.target.value;
        this.updateArray();
    }

   hide(elem){
   let selector = document.querySelector(`${elem}`)
    selector.style.display = 'none';
  }

  show(elem){
    let selector = document.querySelector(`${elem}`)
     selector.style.display = 'block';
   }

   disable(elem){
     let selector = document.querySelector(`${elem}`)
     selector.setAttribute("disabled", true);
   
   }


generateOptions(arr, selector){
    let select = document.getElementById(`${selector}`);
    for (let i = 0; i < arr.length; i++){
    let option = document.createElement("option");
    option.value = arr[i];
    option.text = arr[i];
    select.appendChild(option)
  }

}

  generateImage (src) {
    let selector = document.getElementById("text");
    while (selector.hasChildNodes()) { 
        selector.removeChild(selector.lastChild); 
    } 
   
    let img = document.createElement("img");
    img.src = `./images/P6/${this.map}/${src}`;
    selector.appendChild(img);

  



  }

  generateButton(src){
    
    let btnSelector = document.getElementById("downloadImage")
    let link = document.createElement('a');


    

     while (link.hasChildNodes()) { 
        link.removeChild(link.lastChild); 
        link.textContent = '';

   
    } 
    
   
    link.setAttribute('class','source');
    link.textContent = 'Download Map';
    link.href = `./images/P6/${this.map}/${src}`;
    link.download = `${this.map}/${src}`;
    
    // this.show("#downloadImage")

    btnSelector.appendChild(link);
  }



}






  var mapsObject = new MyClass();
mapsObject.result
// mapsObject.hide("#downloadImage")
