<?php
global $browser_title;
 $browser_title = 'NOAH-LSM';
 include '../../portal_header.php';?>

<?php include 'sidebar.php';?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!--<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>-->
            <button id="export" type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>
     <h2 id="section-title">NOAH-Land Surface</h2>
        <div id="description">


<H4>NCEP Near-surface and Surface NAM/NDAS Verification</H4>
<UL>
   <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/research/nearsfc/nearsfc.verf.html">
       Monthly 2m and 10m NAM Verification Stats</A>
   <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/board/board.html">
       NAM Daily Verification at Selected Surface Stations</A>
</UL>


<UL>
   <LI> Precipitation observations/forecast verification
   <UL>
      <LI><A HREF="http://wwwt.emc.ncep.noaa.gov/mmb/ylin/pcpanl/">
          NCEP Hourly precipitation analyses (Stage II and Stage IV) </A>
      <LI><A HREF="http://wwwt.emc.ncep.noaa.gov/mmb/ylin/pcpverif/daily/">
           Daily Observed vs. Forecast 24h Precipitation Plots</A>

      <LI><A HREF="http://wwwt.emc.ncep.noaa.gov/mmb/ylin/pcpverif/scores">
           QPF Verfication Scores</A>
      <LI><A HREF="http://wwwt.emc.ncep.noaa.gov/mmb/gcp/h2o/index.html">Monthly Precipitation/Water Budget Maps</A>
      <LI><A HREF="http://wwwt.emc.ncep.noaa.gov/mmb/gcp/cpcrfc/cpc3090.html">CPC 30- and 90-day Precipitation Images</A>
   </UL>
</UL>

<UL>

   <LI>GOES verification of NAM fields (skin temperature, insolation, total 
       cloud amount)
   <UL>
      <LI><A HREF="http://orbit-net.nesdis.noaa.gov/goes/gcip">CONUS Maps</A>
      <LI><A HREF=
          "http://orbit-net.nesdis.noaa.gov/goes/gcip/html/scatter.html">
           Scatter plots</A>
   </UL>
</UL>
<UL>
   <LI><A HREF="http://wwwt.emc.ncep.noaa.gov/mmb/gcp/cycle.log">

      Log of missed NDAS cycles since 1 Apr 1995</A>
   <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/research/eta.log.html">Log of NAM model code changes</A>
   <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/mmbpll/eta.log.para.html">Log of NAM model test runs</A>
</UL>


<H4>Problems and fixes:</H4>
<UL>
<LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/wind.html">Correction of wind rotation error (Prior to 1 Aug 1995) </A>
</UL>
<?php include 'footer.php';?>
