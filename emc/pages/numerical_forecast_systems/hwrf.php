<?php 
global $browser_title;
 $browser_title = 'HWRF';   
 include '../portal_header.php';?>
 
 <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
		</ul>
        
		<!-- The file that contains the Resource links to VLAB & Help -->
		<?php include '../portal_resources_sidelnks.php';?>
		  
		 
      </div>
    </nav>

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
     <h2 id="section-title">HWRF</h2>
     <img src="../../pages/disclaimer/disclaimer_small.png"  />
     	<div id="description">
				<div id="header" style="background: url(http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/web/images/hwrfheader1600x80.png) repeat-y rgb(119, 210, 255); color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; position: relative; height: 78px;"><a href="http://www.noaa.gov/" target="_blank"><img alt="NOAA logo - Click to go to the NOAA homepage" src="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/web/images/transparent.png" title="NOAA logo - Click to go to the NOAA home page" width="180px" height="78px" border="0"></a><span>&nbsp;</span><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/" target="_blank"><img alt="EMC Hurricane Team" src="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/web/images/transparent.png" title="HWRF logo - Click to go to EMC/HWRF home page" width="400" height="78px" border="0"></a>
<div id="headerRight" style="float: right; position: relative; width: 300px; height: 78px;"><a href="http://www.nws.noaa.gov/" target="_blank"><img alt="NWS logo - Click to go to the NWS homepage" src="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/web/images/nws_logo80.png" title="NWS logo - Click to go to the NWS home page" height="45px" border="0" align="right"></a><a href="http://www.ncep.noaa.gov/" target="_blank"><img alt="NCEP logo - Click to go to the NCEP homepage" src="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/web/images/ncep_logo80.gif" title="NCEP logo - Click to go to the NCEP home page" height="45px" border="0" align="right"></a><a href="http://www.emc.ncep.noaa.gov/" target="_blank"><img alt="EMC logo - Click to go to the EMC homepage" src="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/web/images/emc_logo.png" title="EMC logo - Click to go to the EMC home page" height="45px" border="0" align="right"></a><a href="http://www.hfip.org/" target="_blank"><img alt="HFIP logo - Click to go to the HFIP homepage" src="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/web/images/hfip_logo.png" title="HFIP logo - Click to go to the HFIP home page" height="33px" border="0" align="right"></a></div>
</div>

<div id="sidebar1" style="float: left; width: 180px; height: auto; background: rgb(204, 204, 204); font-size: 0.9em; color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" align="center">
<h4>NCEP/EMC HWRF for Global TCs</h4>

<hr>
<div>
<p><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/index.php"><span style="text-decoration: underline; width: 176.391px;">Current Active TCs</span></a></p>
</div>

<hr>
<div>
<p><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/tcall.php"><span style="text-decoration: underline; width: 176.391px;">All Archived TCs</span></a></p>
</div>

<hr>
<div>
<p><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/tclist.php"><span style="text-decoration: underline; width: 176.391px;">TC List for Years</span></a></p>
</div>

<hr>
<div>
<p><a href="https://www.emc.ncep.noaa.gov/gc_wmb/vxt/HMON/index.php"><span style="text-decoration: underline; width: 176.391px;">HMON</span></a></p>

<p><a href="http://www.emc.ncep.noaa.gov/HWRF/HWRFEPS/index.php"><span style="text-decoration: underline; width: 176.391px;">Parallel HWRF Ensemble</span></a></p>

<p><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRFGenesis/index.php"><span style="text-decoration: underline; width: 176.391px;">Parallel HWRF TC Genesis</span></a></p>
</div>

<hr>
<p><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/about.php?branch=link"><span style="text-decoration: underline; width: 176.391px;">Useful Links</span></a></p>

<p><a href="https://www.weather.gov/disclaimer">Disclaimer</a></p>

<div id="usefulLink"><a href="http://www.nhc.noaa.gov/" style="font-size: 0.9em; color: rgb(0, 0, 0);" target="_blank">NHC</a><span>&nbsp;</span>|<span>&nbsp;</span><a href="http://www.prh.noaa.gov/cphc/" style="font-size: 0.9em; color: rgb(0, 0, 0);" target="_blank">CPHC</a><span>&nbsp;</span>|<span>&nbsp;</span><a href="http://www.usno.navy.mil/JTWC/" style="font-size: 0.9em; color: rgb(0, 0, 0);" target="_blank">JTWC</a><span>&nbsp;</span><br>
<a href="http://www.nrlmry.navy.mil/atcf_web/index1.html" style="font-size: 0.9em; color: rgb(0, 0, 0);" target="_blank">ATCF</a><span>&nbsp;</span>|<span>&nbsp;</span><a href="http://www.hfip.org/" style="font-size: 0.9em; color: rgb(0, 0, 0);" target="_blank">HFIP</a><span>&nbsp;</span>and<span>&nbsp;</span><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/about.php?branch=link" style="font-size: 0.9em; color: rgb(0, 0, 0);">more</a><span>&nbsp;</span></div>

<hr>
<div id="flagCounter">
<p>Since May 2015<span>&nbsp;</span><a href="http://info.flagcounter.com/qzgB"><img alt="Free counters!" src="http://s01.flagcounter.com/count/qzgB/bg_FFFFFF/txt_000000/border_CCCCCC/columns_3/maxflags_60/viewers_0/labels_0/pageviews_1/flags_1/percent_0/" width="178px" border="0"></a></p>
</div>

<div id="maplocoCounter" style="display: block;">
<p><a href="http://m.maploco.com/details/746554ja"><img alt="Locations of Site Visitors" src="http://www.maploco.com/vmap/s/8637238.png" style="border: 0px;" title="Locations of Site Visitors"></a></p>
</div>
</div>

<div id="mainContent" style="margin: 0px 0px 0px 180px; background: rgb(255, 255, 255); color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
<div class="container_h" style="width: 1172px; margin: 0px;">
<ul class="chul" style="height: 20px; line-height: 20px; background-color: rgb(119, 210, 255); margin: 0px; padding: 0px;">
	<li style="float: left; padding: 0px 5px; text-align: center; list-style: none; border-right: 1px solid rgb(255, 255, 255); height: 20px; line-height: 20px;"><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/about.php?branch=summary" style="font-size: 0.9em; color: rgb(255, 255, 255);">HWRF at EMC</a></li>
	<li style="float: left; padding: 0px 5px; text-align: center; list-style: none; border-right: 1px solid rgb(255, 255, 255); height: 20px; line-height: 20px;"><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/about.php?branch=mdls" style="font-size: 0.9em; color: rgb(255, 255, 255);">Model</a></li>
	<li style="float: left; padding: 0px 5px; text-align: center; list-style: none; border-right: 1px solid rgb(255, 255, 255); height: 20px; line-height: 20px;"><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/about.php?branch=doc" style="font-size: 0.9em; color: rgb(255, 255, 255);">Documentation</a></li>
	<li style="float: left; padding: 0px 5px; text-align: center; list-style: none; border-right: 1px solid rgb(255, 255, 255); height: 20px; line-height: 20px;"><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/about.php?branch=impl" style="font-size: 0.9em; color: rgb(255, 255, 255);">Implementation</a></li>
	<li style="float: left; padding: 0px 5px; text-align: center; list-style: none; border-right: 1px solid rgb(255, 255, 255); height: 20px; line-height: 20px;"><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/about.php?branch=runs" style="font-size: 0.9em; color: rgb(255, 255, 255);">Operational</a></li>
	<li style="float: left; padding: 0px 5px; text-align: center; list-style: none; border-right: 1px solid rgb(255, 255, 255); height: 20px; line-height: 20px;"><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/about.php?branch=ppl" style="font-size: 0.9em; color: rgb(255, 255, 255);">People</a></li>
	<li style="float: left; padding: 0px 5px; text-align: center; list-style: none; border-right: 1px solid rgb(255, 255, 255); height: 20px; line-height: 20px;"><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/about.php?branch=collab" style="font-size: 0.9em; color: rgb(255, 255, 255);">Collaborators</a></li>
	<li style="float: left; padding: 0px 5px; text-align: center; list-style: none; border-right: 1px solid rgb(255, 255, 255); height: 20px; line-height: 20px;"><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/about.php?branch=link" style="font-size: 0.9em; color: rgb(255, 255, 255);">Links</a></li>
	<li style="float: left; padding: 0px 5px; text-align: center; list-style: none; border-right: 1px solid rgb(255, 255, 255); height: 20px; line-height: 20px;"><a href="http://www.emc.ncep.noaa.gov/gc_wmb/vxt/HWRF/about.php?branch=news" style="font-size: 0.9em; color: rgb(255, 255, 255);">News</a></li>
</ul>
</div>

<h3 style="color: red;" align="center"><b>HWRF HURRICANE MODELING AT EMC</b></h3>

<div id="textContent" style="padding: 15px; color: black;">
<p>The HWRF group at EMC works in conjunction with members of all three EMC branches to continually make improvements to the Hurricane Weather Research and Forecast (HWRF) modeling system for each hurricane season. Extensive testing and evaluation is completed for each new model configuration before these changes are incorporated into the operational model. Collaboration from organizations like GFDL, DTC, NHC, and HRD is also essential to the hurricane team's progress.</p>

<p>The atmosphere-ocean coupled Hurricane Weather Research and Forecast (HWRF) modeling system runs in the NCEP production suite on the NOAA Central Computer System. This system is developed and supported by the Environmental Modeling Center (EMC) and operated by NCEP Central Operations (NCO) since 2007. HWRF consists of multiple movable two-way interactive nested grids that follow the projected path of the storm. Atmospheric component of the HWRF model was coupled to the Princeton Ocean Model (POM) developed by GFDL/URI using a sophisticated coupler developed at NCEP for providing accurate representation of air-sea interactions. An advanced vortex initialization scheme and NCEP GSI based HWRF Data Assimilation System (HDAS) provide means to represent the initial location, intensity, size and structure of the inner core of a hurricane and it's large-scale environment. The NCEP Global Forecast System (GFS) analysis and forecasts provide initial and boundary conditions for the HWRF model. POM uses a feature based initialization procedure for representing oceanic features such as the loop current, warm/cold core rings and the cold wake generated by the storm.</p>

<p>HWRF team at EMC has also been providing experimental real-time forecast guidance for all tropical cyclone basins in the world (including Western North Pacific, Southern Pacific, North Indian and South Indian Ocean regions) to the Joint Typhoon Warning Center (JTWC) and National Weather Service (NWS) Pacific Region (PR) with support from NOAA's Hurricane Forecast Improvement Project (HFIP) and using HFIP Research&amp;Development computational resources on Jet supercomputers. Based on the demonstration of superior performance from HWRF compared to other regional models, JTWC has included HWRF model guidance in their operational consensus forecasts.</p>

<p>The objective of the HWRF team is to implement planned scientific and product enhancements to the operational HWRF annually, with an aim towards improved forecast performance using state-of-the-art numerical techniques. The HWRF project is an NCEP Annual Operating Plan (AOP) milestone which maps to NCEP's strategic goal to produce and deliver the best products and services, and prepare for a Weather Ready Nation.</p>

<h3 style="color: red;">Highlights for HWRF's FY2018 implementation:</h3>

<ol>
	<li><b>HWRF Infrastructure Enhancements</b>:<span>&nbsp;</span><br>
            <ul type="circle">
               <li> Upgrade dynamic core from WRF3.8.1a to WRF3.9.1
               <li> Test and evaluation with 2017 4D-Hybrid GDAS/GFS initial and boundary conditions
               <li> Increase horizontal resolution from (18/6/2-km) to (13.5/4.5/1.5-km), with slightly reduced domain sizes for the two nested domains
               <li> Unify the vertical level configuration for the JTWC basins (WPAC, NIO, and SH) to be the same as the NHC and CPHC basins (NATL, EPAC, and CPAC), which has 75 vertical levels with a model top of 10 hPa
	</ul>
	</li>
	<li><b>HWRF Vortex Initialization and Data Assimilation Improvements</b>:<span>&nbsp;</span>
	<ul type="circle">
                <li> GSI code upgrades and changes to disable assimilating SSMI channel 2 data
                <li> Stochastic physics for self-cycled DA ensemble members
                <li> Admit new data sets (GOES-16 AMVs, NOAA-20, SFMR, TDR from G-IV)
                <li> Considering dropsonde drifting
	</ul>
	</li>
	<li><b>HWRF Physics Advancements</b>:<span>&nbsp;</span>
	<ul type="circle">
                <li> Upgrade the RRTMG scheme with a modified cloud overlap method
                <li> Adjust the horizontal diffusion and convergence damping coefficients
	</ul>
	</li>
	<li><b>HWRF Air-Sea Interaction and Coupling Upgrades</b>:<span>&nbsp;</span>
	<ul type="circle">
                <li> Unified HWRF/HMON coupler with double precision coordinates from the HWRF component
                <li> Add a POM ocean domain for the CPAC basin
                <li> Enable ocean coupling (with HYCOM) for Southern Hemisphere basins
                <li> Sea surface wave initial condition from global wave model
                <li> Add ocean coupling (HYCOM) for Southern Hemisphere basins
	</ul>
	</li>
	<li><b>HWRF Post-Processing and Product Upgrades</b>:<span>&nbsp;</span><br>
	<ul type="circle">
                <li> File name and resolution changes in HWRF storm and core GRIB2 files
                <li> Add the instantaneous precipitation rate variable (PRATE) in HWRF GRIB2 files
                <li> Change maximum number of storms running in operational from 8 to 7 storms
	</ul>
	</li>
</ol>
</div>
</div>
			  </div>
     
	  <br/>
      
    </main>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <!--<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
	  <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>-->
	  
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>

</body>
      
</html>
 
