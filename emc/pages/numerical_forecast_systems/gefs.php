<?php 
global $browser_title;
 $browser_title = 'GEFS';   
 include '../portal_header.php';?>
 
<?php include 'gefs/sidebar.php'?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!--<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>-->
            <button id="export" type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>
     <h2 id="section-title">Global Ensemble Forecast System</h2>
     	<div id="description">
				<p style="margin-left:0px; margin-right:0px; text-align:start"><span style="font-size:14.4px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"></span></span></span></p>

<!--<center style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;"><span style="font-size:24px;"><span style="font-family:arial,helvetica,sans-serif;"><u>Global Ensemble Forecast System (GEFS)</u></span></span></center>-->

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%; page-break-before: always" lang="en-GB" align="justify"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="en-US"><b>1. Introduction / History</b></span></span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px none; outline: 0px none; background: transparent none repeat scroll 0% 0%; vertical-align: baseline; font-family: &quot;Open Sans&quot;,Helvetica,Verdana,Arial,sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">The Global Ensemble Forecast System (GEFS) has been run in NCEP's Production Suite since December 1992, initially using the NCEP Global Spectral Model. GEFS currenty runs four times per day (0000, 0600, 1200 and 1800 UTC) out to 16 days. Table 1 below describes the evolution of the GEFS since its introduction to the NCEP Production Suite:</span></span></p>

<p style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><img alt="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gefs/gefshistory1.PNG" class="transparent" src="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gefs/gefshistory1.PNG" width="1000" height="805"></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px none; outline: 0px none; background: transparent none repeat scroll 0% 0%; vertical-align: baseline; font-family: &quot;Open Sans&quot;,Helvetica,Verdana,Arial,sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">In the initial implementation of GEFS, 10 (5 pairs) perturbed members running the NCEP Global Spectral Model were initialized using the Bred Vector method, cycling every 6 hours. From 2006-2020, if tropical cyclones were present in the initial conditions, a tropical storm relocation technique was applied to each ensemble member to adjust the initial central location to the observed location (see: Liu and et al., 2006). An extended BV method with Ensemble Transform and Rescaling (BV-ETR; Wei and et al., 2008) was implemented operationally in 2006. In early 2010, GEFS included model uncertainty using the Stochastic Total Tendency Perturbation (STTP) algorithm (see: Hou and et al., 2012). Starting in December 2015, GEFS initial condition perturbations were selected from the operational hybrid Global Data Assimilation System (GDAS) 80-member Ensemble Kalman Filter (EnKF; Whitaker et al., 2008) 6-h forecast, which included tropical storm relocation and centralization of the initial perturbations (Zhao et al., 2016).</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="en-US"><b>2. Recent Changes in Configuration : September 2020 upgrade</b></span></span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">On September 23, 2020, GEFS version 12 was implemented. This was a major upgrade with the following features:
</span></span></p>
<ul>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Replace the Global Spectral Model with the global FV3 dynamical core (<a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs.php">GFSv15.1 version</a>);</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Upgrade the physical parameterization schemes to those implemented with GFSv15.1, including new Geophysical Fluid Dynamics Laboratory (GFDL) microphysics;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Replace the Stochastic Total Tendency Perturbation (STTP) scheme with the new model perturbation techniques including 5-scale Stochastic Perturbation of Physical Tendencies (SPPT) scheme and Stochastic Kinetic Energy Backscatter (SKEB) scheme (Buizza et al. 1999; Berner et al. 2009; Zhu et al. 2019; Zhou et al. 2019);</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Introduce “2-tiered” SST approach for lower boundary conditions over the ocean by considering an evolving ocean SST state with gradual changes with lead time. The 2-tiered SST approach relaxes the SST analysis to a bias-corrected SST prediction from the operational Climate Forecast System v2 (Saha et al., 2010)</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Expand the number of ensemble members from 21 (20 perturbed and 1 unperturbed/control) to 31 (30 perturbed and 1 unperturbed/control) members;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Increase model horizontal resolution to 0.25 degree (~25 km) and maintain the same resolution throughout the forecast period for the atmosphere;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Improved interpolation of grib2 files from the model’s native Gaussian grid;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Removal of lower resolution output, and inclusion of new 0.25deg output onto NCEP web services;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Add forecast guidance for weeks 3-4 for the atmospheric model only. For the 00Z cycle, the forecast length will extend to 35 days with the same 31 ensemble members and uniform horizontal resolution;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Tropical cyclone relocation was removed;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">A 20 year (2000-2019) reanalysis and 31 year (1989-2019) reforecast (Guan et al. 2020; Li et al. 2020) have been produced to support forecast calibration and other applications.</span></span></li>
</ul>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">GEFS version 12 is the first global-scale coupled system at NCEP, as it includes the integration of the Global Wave Ensemble System (GWES) via one-way coupling to the atmospheric model via the NEMS mediator. Additionally, a special 32th GEFS forecast (<a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gefs_aero.php">GEFS-Aerosol</a>) is run to 5 days which includes the integration of the GSDCHEM chemistry component via one-way coupling to the atmospheric model. These two will replace the existing standalone Global Wave Ensemble and the NEMS GFS Aerosol Component (NGAC) systems.</span></span></span></p> 

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">GWES changes in GEFS version 12 include:</span></span></span></p> 

<ul>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Spherical spatial grid with increased resolution from 0.5 to 0.25 degree on average;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Increase in number of members from 21 to 31;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Extended the forecast range from 10 to 16 days;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Increased wind field intake stride from 3h to 1h due to coupling;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Improved physics from source-term coefficients that were tuned using an objective framework;</span></span></li>
</ul>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Details on the coupled Aerosol Model and upgrades over the NGAC system:</span></span></span></p> 

<ul>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">System renamed GEFSv12-Aerosol;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Increase in horizontal resolution from 1 degree to 0.25-degree (25 km) resolution grid;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Update to the latest version of NASA/ESRL GOCART aerosol model;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Implementation of the ARL Fengsha dust emissions model;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Use of Global Biomass Burning Emissions Product extended (GBBEPx) directly on the FV3 grid;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Update the sulfate anthropogenic emissions to the Community Emissions Data System (CEDS) 2014 base version;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Increase from 2 to 4 cycles per day;</span></span></li>
<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Improved interpolation of grib2 files from the model’s native Gaussian grid;</span></span></li>
</ul>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">For details on GEFS version 12 and earlier upgrades, please refer to <a href="https://www.emc.ncep.noaa.gov/gmb/yzhu/html/ENS_IMP.html"> NCEP Global Ensemble Forecast system implementation log</a> for details. Please refer to GEFSv12-Aerosol web page for more details on that system.</span></span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="en-US"><b>3. Horizontal and Vertical Resolution:</b></span></span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">In the September 2020 implementation, the horizontal resolution has increased to ~25 km for the entire GEFS forecast. The vertical resolution remains at 64 hybrid levels for all forecast hours.</span></span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="en-US"><b>4. Membership:</b></span></span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">As of September 2020, there are 30 perturbed members (plus the ensemble control member) for all four forecast cycles.</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="en-US"><b>5. Generation of the Initial Perturbations:</b></span></span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Initial perturbations are generated from the EnKF component of NCEP Global Data Assimilation System. GEFS uses the 6-h 80-member ensemble forecast instead of the EnKF analysis due to timing constraints within the NCEP production suite (Zhou et al., 2016). </span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="en-US"><b>6. Representation of Model Related Uncertainty:</b></span></span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">In Feb. 2010, a Stochastic Total Tendency Perturbation scheme was implemented to represent uncertainties associated with the forecast model. STTP is based on the hypothesis that tendencies of the ensemble perturbations provide a representative sample of the random total model errors (see: Hou et al. 2012). In the latest Dec. 2015 upgrade, an additional tuning process is applied for lower latitudes (tropical area) and no perturbation is applied for tropical surface pressure (Zhou et al., 2016).<span lang="en-US"><b> </b></span></span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><em><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>7. Where to find GEFS data</strong></span></span></em></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Real-time GEFS data is available through the NOAA National Operational Model Archive and Distribution System (<a href="http://nomads.ncep.noaa.gov/index.shtml">NOMADS</a>). NOMADS also contributes GEFS ensemble data to the The Observing System Research and Predictability Experiment (THORPEX) Interactive Grand Global Ensemble (TIGGE) by calculating a dozen World Meteorological Organization (WMO)-required variables and passing them to the National Center for Atmospheric Research (NCAR) for permanent archive. NOMADS also provides an additional tool, the&nbsp;<a href="http://nomads.ncdc.noaa.gov/EnsProb/" id="anch_19" rel="nofollow" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(0, 87, 165); text-decoration: none;">NOMADS Ensemble Probability Tool</a>, which allows a user to query the multiple forecast ensemble to determine the probability that a set of conditions will occur at a given location using all of the GEFS ensemble members in near-real time.</span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Archived GEFS data is available from the NOAA <a href="https://www.ncdc.noaa.gov/data-access/model-data/model-datasets/global-ensemble-forecast-system-gefs">National Centers for Environmental Information (NCEI)</a></span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">For a detailed list of GEFS output available on NCEP NOMADS site and the file inventories, see the <a href="http://www.nco.ncep.noaa.gov/pmb/products/gens/">NCO GEFS Product Inventory Page</a>.</span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><em><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>8. Future Plans</strong></span></span></em></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">GEFS v12 is the final upgrade of a global ensemble system separate from the deterministic GFS at NCEP. The next GEFS upgrade will be merged with the version 17 upgrade of the GFS upgrade planned for 2023-2024.</span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">Other NCEP GEFS web pages:</span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">-<strong> Official GEFS Graphics at the <a href="http://mag.ncep.noaa.gov/model-guidance-model-area.php#">NCEP Model Analysis and Guidance Page : Mean/Spread and Spaghetti Plots</a></strong></span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>- <a href="http://www.emc.ncep.noaa.gov/users/meg/gefs_plumes">Experimental GEFS plume diagram web page</a></strong></span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>- <a href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gefs/faq.php">GEFS FAQ Page</a></strong></span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>- See the "Comprehensive List of Ensemble Web Sites" link above for a list of US (Government/Academic) and international ensemble information</strong></span></span></p>

<p class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px; outline: 0px; background: transparent; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Verdana, Arial, sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>- GEFS Verification Sites:</strong></span></span></p>

<ul>
	<li class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px none; outline: 0px none; background: transparent none repeat scroll 0% 0%; vertical-align: baseline; font-family: &quot;Open Sans&quot;,Helvetica,Verdana,Arial,sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong><big>NCEP <a href="https://www.emc.ncep.noaa.gov/users/verification/global/" style="text-decoration:underline;">Global Model Verification Portal</a>, including GEFS and NAEFS Verification Pages</big></strong></span></span></li>
	<li class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px none; outline: 0px none; background: transparent none repeat scroll 0% 0%; vertical-align: baseline; font-family: &quot;Open Sans&quot;,Helvetica,Verdana,Arial,sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong><big><a href="http://www.emc.ncep.noaa.gov/gmb/yzhu/html/opr/naefs.html" style="text-decoration:underline;">NAEFS Verification Statistics (updated every quarter)</a> ; Include, NCEP/GEFS, CMC/GEFS, FNMOC/GEFS, ECMWF/GEFS, raw and bias corrected forecast for 00UTC initial forecast each day</big></strong></span></span></li>
	<li class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px none; outline: 0px none; background: transparent none repeat scroll 0% 0%; vertical-align: baseline; font-family: &quot;Open Sans&quot;,Helvetica,Verdana,Arial,sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong><a href="http://www.emc.ncep.noaa.gov/gmb/yluo/NUOPC/nuopc.html">NUOPC verification statistics (updated seasonally)</a></strong></span></span></li>
	<li class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px none; outline: 0px none; background: transparent none repeat scroll 0% 0%; vertical-align: baseline; font-family: &quot;Open Sans&quot;,Helvetica,Verdana,Arial,sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong><big><a href="https://www.emc.ncep.noaa.gov/gmb/yluo/html/GFS_m_model/VRFY01_daily.html" style="text-decoration:underline;">Daily Comparisons between Operational Global Model Forecasts</a> : 00Z NCEP, 12Z ECMWF, 00Z UKMet, 00Z MSC, 00Z NOGAPS</big></strong></span></span></li>
	<li class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px none; outline: 0px none; background: transparent none repeat scroll 0% 0%; vertical-align: baseline; font-family: &quot;Open Sans&quot;,Helvetica,Verdana,Arial,sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong><big><a href="https://www.emc.ncep.noaa.gov/gmb/yluo/html/GFS_m_model/VRFY02_daily.html" style="text-decoration:underline;">Daily Comparisons between Operational NCEP Global Model &amp; Experimental Runs</a> </big></strong></span></span></li>
	<li class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px none; outline: 0px none; background: transparent none repeat scroll 0% 0%; vertical-align: baseline; font-family: &quot;Open Sans&quot;,Helvetica,Verdana,Arial,sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong><big><a href="https://www.emc.ncep.noaa.gov/gmb/yluo/html/GFS_m_model/VRFY03_daily.html" style="text-decoration:underline;">Daily Comparisons between GFS/GEFS control &amp; ECMWF/ECMWF control</a> ; 00Z T382/38km GFS, 00Z T190/70km GEFS control<br>
	12Z T1279/16km ECMWF, 12Z T639/30km ECMWF ensemble control </big></strong></span></span></li>
	<li class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px none; outline: 0px none; background: transparent none repeat scroll 0% 0%; vertical-align: baseline; font-family: &quot;Open Sans&quot;,Helvetica,Verdana,Arial,sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong><big><a href="https://www.emc.ncep.noaa.gov/gmb/yluo/html/opr/Z500_PAC_RMS_daily.html" style="text-decoration:underline;">Daily Values of 500 hPa Height AC, RMS, Talagrand &amp; Outliers</a> : Mean of 14 GFS, 10 ECMWF and 16 CMC members<br>
	GFS operational, GEFS control </big></strong></span></span></li>
	<li class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px none; outline: 0px none; background: transparent none repeat scroll 0% 0%; vertical-align: baseline; font-family: &quot;Open Sans&quot;,Helvetica,Verdana,Arial,sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong><big><a href="http://www.emc.ncep.noaa.gov/gmb/yluo/GEFS_VRFY/fdays_longterm.html" style="text-decoration:underline;">Long-term Forecast Skill Comparisons of 500 hPa Height &amp; 850 hPa Temperature AC and CRPSS</a> : NCEP vs CMC vs ECMWF<br>
	00Z, NH only </big></strong></span></span></li>
	<li class="teaser" style="margin: 0px 0px 1.5em; padding: 0px; border: 0px none; outline: 0px none; background: transparent none repeat scroll 0% 0%; vertical-align: baseline; font-family: &quot;Open Sans&quot;,Helvetica,Verdana,Arial,sans-serif; color: rgb(68, 68, 68); line-height: 1.556em; text-rendering: auto;"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><strong><big><a href="http://www.emc.ncep.noaa.gov/gmb/yluo/html/CPQPF_cmc.html" style="text-decoration:underline;">Comparison between NCEP and CMC QPF/PQPF Forecasts</a></big></strong></span></span></li>
</ul>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><big>Please send any comments and suggestions about GEFS to <a href="mailto:Yuejian.Zhu@noaa.gov">Yuejian Zhu. </a></big></span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"></span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify">&nbsp;</p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span lang="en-US"><b>References for GEFS, NAEFS and post processing:</b></span></span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"></span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><a href="http://www.emc.ncep.noaa.gov/gc_wmb/wli/html/doc_journal.html"><b>Link to a comprehensive list of publications since 1995</b></a></span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Berner, J., G.J. Shutts, M. Leutbecher, and T.N. Palmer. 2009. A spectral stochastic kinetic energy backscatter scheme and its impact on flow-dependent predictability in the ECMWF ensemble prediction system. Journal of the Atmospheric Sciences 66 (3): 603–626.</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Buizza, R., M. Miller, and T. Palmer. 1999. Stochastic representation of model uncertainties in the ECMWF ensemble prediction system.Quarterly Journal Royal Meteorological Society 125(560): 2887–2908</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Cui, B., Z. Toth, Y. Zhu and D. Hou, 2012: Bias Correction For Global Ensemble Forecast, Weather and Forecasting, 27, 396-410</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Cui, B., Y. Zhu, Z. Toth and D. Hou, 2018: Development of Statistical Post-processor for NAEFS. To be submitted to Weather and Forecasting</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Guan, H., B. Cui, Y. Zhu, 2015: Improvement of Statistical Postprocessing Using GEFS Reforecast Information, Weather and Forecasting, Vol. 30, 841-854</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Guan, H., Y. Zhu, E. Sinsky, B. Fu, X. Zhou, W. Li, X. Xue, D. Hou, B. Cui, and J. Peng, 2020: The NCEP GEFS-v12 Reforecasts to Support Subseasonal and Hydrometeorological Applications, STI Climate Bulletin, 79-82, <a href="https://doi.org/10.25923/t4qa-ae63">https://doi.org/10.25923/t4qa-ae63</a></span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Hou, D., Z. Toth, Y. Zhu, W. Yang and R. Wobus, 2012: "A Stochastic Total Tendency Perturbation Scheme Representing Model- Related Uncertainties in the NCEP Global Ensemble Forecast System" Submitted to Tellus-A)</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Hou, D., M. Charles, Y. Luo, Z. Toth, Y. Zhu, R. Krzysztofowicz, Y. Lin, P. Xie, D-J. Seo, M. Pena and B. Cui, 2012: Climatology-Calibrated Precipitation Analysis at Fine Scales: Statistical Adjustment of STAGE IV towards CPC Gauge-Based Analysis, Jaurnal of Hydrometeorology Vol. 15 2542-2557 </span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Li, W., H. Guan, Y. Zhu, X. Zhou, B. Fu, D. Hou, E. Sinsky, and X. Xue, 2020: Prediction Skill of the MJO, NAO and PNA in the NCEP FV3-GEFS 35-day Experiments, STI Climate Bulletin, 124-127, <a href="https://doi.org/10.25923/t4qa-ae63">https://doi.org/10.25923/t4qa-ae63</a></span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Liu, Q., S. J. Lord, N. Surgi, Y. Zhu, R. Wobus, Z. Toth and T. Marchok, 2006: Hurricane Relocation in Global Ensemble Forecast System, Preprints, 27th Conf. on Hurricanes and Tropical Meteorology, Monterey, CA, Amer. Meteor. Soc., P5.13.</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Ma, J., Y. Zhu, D. Wobus and P. Wang, 2012: An Effective Configuration of Ensemble Size and Horizontal Resolution for the NCEP GEFS, Advance in Atmospheric Sciences, Vol. 29, No. 4, 782-794</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Ma, J., Y. Zhu, D. Hou, X. Zhou and M. Pena, 2014: Ensemble Transform with 3D Rescaling Initialization Method, Monthly Weather Review, Vol. 142, 4053-4073</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Palmer, T. N., R. Buizza, F. Doblas-Reyes, T. Jung, M. Leutbecher, G. Shutts, M. Steinheimer, and A. Weisheimer, 2009: Stochastic Parametrization and Model Uncertainty. ECMWF Tech. Memo. 598, 44.</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Saha, S., and Coauthors, 2010: The NCEP Climate Forecast System Reanalysis. Bull. Amer. Meteor. Soc., 91, 1015–1057.</span></span></p>


<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Shutts, G., 2005: A kinetic energy backscatter algorithm for use in ensemble prediction systems. Quart. J. Roy. Meteor. Soc., 131, 3079-3102.</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Toth, Z., and E. Kalnay, 1997: Ensemble forecasting at NCEP and the breeding method. Mon. Wea. Rev., 125, 3297-3319.</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Wei, M., Z. Toth, R. Wobus, and Y. Zhu, 2008: Initial Perturbations Based on the Ensemble Transform (ET) Technique in the NCEP Global Operational Forecast System, Tellus 59A, 62-79</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Whitaker, Jeffrey S., Thomas M. Hamill, Xue Wei, Yucheng Song, Zoltan Toth, 2008: Ensemble Data Assimilation with the NCEP Global Forecast System. Mon. Wea. Rev., 136, 463-482.</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Zhou, X., Y. Zhu, D. Hou, Y. Luo, J. Peng and R. Wobus, 2017: The NCEP Global Ensemble Forecast System with the EnKF Initialization. Wea. Forecasting, 32, 1989-2004.&nbsp; </span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Zhou, X., Y. Zhu, B. Fu, D. Hou, J. Peng, Y. Luo and W. Li, 2019: The Development of Next NCEP Global Ensemble Forecast System. STI Climate Bulletin, 159-163.&nbsp; </span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Zhu Y., and Y. Luo, 2014: Precipitation Calibration Based on Frequency Matching Method (FMM), Weather and Forecasting, Vol. 30, 1109-1124</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span lang="en-US">Zhu, Y., W. Li, X. Zhou, and D. Hou, 2019: Stochastic Representation of NCEP GEFS to Improve Subseasonal Forecasts. Current trends in the Representation of Physical Processes in Weather and Climate Models, Editors: Randall, D.A., Srinivasan, J., Nanjundiah, R.A., Mukhopadhyay, P. Springer Atmospheric Sciences, 317-328</span></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"></span></p>

<p class="western" style="margin-top: 0.04in; margin-bottom: 0.08in; line-height: 100%" lang="en-GB" align="justify"><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><a href="http://www.weather.gov/disclaimer"><b><em>National Weather Service Web Page Disclaimer</em></b></a></span></span></p>
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
 
