<?php 
global $browser_title;
 $browser_title = 'GEFS';   
 include '../../portal_header.php';?>
 
 <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="list.php">
              Comprehensive List of Ensemble Websites
            </a>
          </li>
		</ul>
		
		<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Others</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/sref.php">
              Short Range Ensemble Forecast System (SREF)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://mag.ncep.noaa.gov/model-guidance-model-area.php">
              Operational Graphics (NCEP Model and Analysis Graphics site)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://nomads.ncep.noaa.gov/index.shtml">
              Operational Products (NCEP NOMADS site)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.nco.ncep.noaa.gov/pmb/products/gens/">
              Operational Product Inventory
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/emc/pages/emc-research-developmental-graphics.php">
              Experimental Graphics (under "Global/Climate Modeling Systems" list)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/users/verification/global/gefs/ops/">
              GEFS Verification
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/users/verification/global/naefs/ops/">
              NAEFS Verification
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/gmb/yzhu/html/ENS_IMP.html">
              GEFS/NAEFS Implementations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.emc.ncep.noaa.gov/gc_wmb/wli/html/doc.html">
              Documentation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gefs/faq.php">
              FAQ
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.weather.gov/disclaimer">
              Disclaimer
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.emc.ncep.noaa.gov/GEFS/projmenu.html">
              Projects
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/gmb/yzhu/html/ENS_IMP.html">
              Change Log
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.emc.ncep.noaa.gov/GEFS/people.html">
              People
            </a>
          </li>
        </ul>
        
		<!-- The file that contains the Resource links to VLAB & Help -->
		<?php include '../../portal_resources_sidelnks.php';?>
		  
		 
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
     <h2 id="section-title">Comprehensive List of Ensemble Web Sites</h2>
     	<div id="description">
			<p class="link1"><span style="font-size:14px;"><a href="https://www.weather.gov/nwsexit.php?url=https://sites.google.com/a/ucar.edu/model-encyclo-determ">COMET MetEd Operational Models Encyclopedia</a> - multi-agency operational prediction system specifications and configurations.</span></p>

            <p class="link2"><span style="font-size:18px;">US (NOAA/NCEP/NWS, academic institutions)</span></p>
            
            <p class="link1"><span style="font-size:16px;">Point Forecasts </span></p>
            
            <ul class="link">
            	<li class="link1"><a href="https://www.emc.ncep.noaa.gov/users/meg/gefs_plumes/">EMC GEFS plume diagrams</a> - plume diagram viewer for GEFS</li>
            	<li class="link"><a href="http://www.spc.noaa.gov/exper/sref/srefplumes">SPC SREF plume diagrams</a> - plume diagram viewer for SREF</li>
            	<li class="link"><a href="https://nomads.ncdc.noaa.gov/EnsProb/">NOMADS ensemble probability tool</a> - location specific tool to determine probability of variables from GEFS</li>
            	<li class="link"><a href="http://www.nws.noaa.gov/mdl/synop/products/bullform.ens.php">MDL GFS ensemble MOS</a> - GFS ensemble MOS bulletins</li>
            </ul>
            
            <p class="link3"><span style="font-size:16px;">Situational Awareness Tables</span></p>
            
            <ul class="link">
            	<li class="link"><a href="http://ssd.wrh.noaa.gov/satable/">NOAA-NWS Ensemble Situational Awareness Table</a> - ESAT displays probabilistic information (e.g., model climate and reanalysis climate return intervals) for the NAEFS and GEFS from NWS Western Region</li>
            	<li class="link"><a href="http://ssd.wrh.noaa.gov/satable/esrl/">ESRL Ensemble Situational Awareness Table</a> - ESAT displays probabilistic information (e.g., model climate and reanalysis climate return intervals) for the GEFS from NWS Western Region</li>
            </ul>
            
            <p><span style="font-size:16px;">Spatial - Global</span></p>
            
            <ul class="link">
            	<li class="link"><a href="http://ssd.wrh.noaa.gov/naefs/">NAEFS-GEFS-CMC ensemble guidance</a> - ensemble guidance products from NWS Western Region</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://mp1.met.psu.edu/%7Efxg1/ewallmref.html">PSU EWALL medium-range ensemble guidance</a> - GFS and CMC ensemble guidance</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://cms.met.psu.edu/sref/ensembles/gefsp.html">Rich Grumm's ensemble viewer</a> - GEFS, NAEFS, and SREF ensemble guidance</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://www.usno.navy.mil/FNMOC/meteorology-products-1">NAVY FNMOC ensemble guidance</a> - ensemble products from the Navy's FNMOC ensemble system</li>
            	<li class="link"><a href="http://origin.cpc.ncep.noaa.gov/products/people/mchen/CFSv2FCST/weekly">CFSv2 Weekly Climate Anomaly</a> - NCEP CFSv2 weekly model guidance</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://moe.met.fsu.edu/confidence/">FSU ensemble confidence tool</a> - forecasting confidence index based on the GEFS</li>
            </ul>
            
            <p class="link3"><span style="font-size:16px;">Spatial - Regional</span></p>
            
            <ul class="link">
            	<li class="link"><a href="http://www.emc.ncep.noaa.gov/mmb/mpyle/href_v2awips/">EMC HREF guidance</a> - EMC <a href="http://emcwebdev.ncep.noaa.gov/index.php/emc/page/HREF-HiresW/High-Resolution_Ensemble_Forecast_45">HREF</a> guidance for CONUS, Alaska, Hawaii, Puerto Rico</li>
            	<li class="link"><a href="http://www.spc.noaa.gov/exper/sseo">SPC HREF guidance</a> - SPC HREF experimental guidance</li>
            	<li class="link"><a href="http://www.emc.ncep.noaa.gov/mmb/SREF_avia/FCST/NARRE/web_site/html/refl.html">EMC NARRE-TL ensemble</a> - Aviation-focused experimental time-lagged ensemble using ops RAP and NAM nest forecasts</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://mp1.met.psu.edu/%7Efxg1/ewallsref.html">PSU EWALL short-range ensemble guidance</a> - SREF ensemble guidance</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=https://wrf.nssl.noaa.gov/newsite/">NSSL real-time ensemble guidance</a> - experimental WRF ensemble intialized at 00Z for CONUS</li>
            	<li class="link"><a href="http://www.esrl.noaa.gov/psd/map/images/ens/ens.html">ESRL PSD ensemble guidance</a> - NCEP ensemble guidance from ESRL PSD</li>
            	<li class="link"><a href="http://www.emc.ncep.noaa.gov/gmb/yluo/html_pqpf/rmop.html">GEFS Relative Measure of Predictability guidance</a> - GEFS ensemble spread relative to spread over last 30-days</li>
            	<li class="link"><a href="http://www.spc.noaa.gov/exper/sref">SPC SREF ensemble guidance</a> - various SREF forecast guidance</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=https://www.atmos.washington.edu/%7Eens/uwme.cgi">Univ. of Washington WRF ensemble products</a> - 72 h WRF ensemble forecast products for the Pacific NW</li>
            </ul>
            
            <p class="link3"><span style="font-size:16px;">Tropical</span></p>
            
            <ul class="link">
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://forecast.caps.ou.edu">CAPS SSEF products</a> - various dynamic core SSEF (NOTE: data available varies with season)</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://www.hfip.org/products/">HFIP TC products</a> - experimental HFIP Atlantic/E. Pacific deterministic and ensemble products</li>
            	<li class="link"><a href="http://www.emc.ncep.noaa.gov/gmb/jpeng/EMC_TC/index_TC.html">NCEP EMC TC ensemble products (restricted access, login required)</a> - collection of experimental single-model and multi-model TC ensemble guidance</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://www.ral.ucar.edu/guidance/realtime/current">NCAR RAL TC guidance</a> - real-time global TC guidance</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=https://www.nrlmry.navy.mil/coamps-web/web/ens?&amp;spg=1">NAVY COAMPS-TC ensemble guidance</a> - ensemble products from the Navy's COAMPS-TC ensemble system</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=https://www.tropicaltidbits.com/analysis/models/?model=gfs-ens">Tropical Tidbits ensemble products</a> - EPS, GEFS, and GEPS ensemble guidance</li>
            </ul>
            
            <p class="link1"><span style="font-size:16px;">Documentation, research, FAQ, etc.</span></p>
            
            <ul class="link">
            	<li class="link"><a href="https://sites.google.com/a/noaa.gov/nws-wr-stid/projects/forecast-confidence?pli=1">Western Region Forecast Confidence Toolkit</a> - collection of links (some redundant from above" corresponding to forecast confidence</li>
            	<li class="link">For NCEP GEFS/NAEFS/SREF research - See the GEFS, NAEFS, and SREF main pages on the EMC web site</li>
            </ul>
            
            <p class="link2"><span style="font-size:18px;">Canada (MSC)</span></p>
            
            <p class="link1"><span style="font-size:16px;">Guidance</span></p>
            
            <ul class="link">
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=https://weather.gc.ca/ensemble/naefs/index_e.html">NAEFS Canadian diagnostics</a> - NAEFS diagnostics from MSC</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://cms.met.psu.edu/sref/ensembles/gefsp.html">NWS/PSU ensemble forecast viewer</a> - forecast viewer for NCEP ensemble products</li>
            </ul>
            
            <p class="link1"><span style="font-size:16px;">Documentation, research, FAQ, etc.</span></p>
            
            <ul class="link">
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=https://weather.gc.ca/ensemble/index_e.html">Canadian Ensemble Prediction System</a> - description and ensemble guidance from MSC ensemble prediction system</li>
            </ul>
            
            <p class="link2"><span style="font-size:18px;">European (ECMWF)</span></p>
            
            <p class="link1"><span style="font-size:16px;">Guidance</span></p>
            
            <ul class="link">
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=https://www.ecmwf.int/en/forecasts/charts/catalogue/?facets=Range,Medium%20(15%20days)%3BType,Forecasts">Ensemble mean and spread</a> - for four standard parameters (mean sea level pressure, 850 hPa temperature, 850 hPa wind speed and 500 hPa geopotential height)</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=https://www.ecmwf.int/en/forecasts/documentation-and-support/long-range/seasonal-forecast-documentation/eurosip-user-guide/multi-model">EUROSIP public products</a> - description and guidance from EUROSIP multi-model seasonal forecasting system</li>
            </ul>
            
            <p class="link1"><span style="font-size:16px;">Documentation, research, FAQ, etc.</span></p>
            
            <ul class="link">
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=https://www.ecmwf.int/en/forecasts/documentation-and-support/extended-range-forecasts">Extended-range forecast information</a> - description of extended range products</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=https://www.ecmwf.int/en/research/projects/tigge">TIGGE research</a> - information and data pertaining to the onging TIGGE research project</li>
            </ul>
            
            <p class="link2"><span style="font-size:18px;">United Kingdom (UKMET)</span></p>
            
            <p class="link1"><span style="font-size:16px;">Guidance</span></p>
            
            <ul class="link">
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=https://www.metoffice.gov.uk/research/climate/seasonal-to-decadal/gpc-outlooks/ens-mean">UKMET ensemble seasonal guidance</a> - long-term monthly ensemble mean forecasts</li>
            </ul>
            
            <p class="link1"><span style="font-size:16px;">Documentation, research, FAQ, etc.</span></p>
            
            <ul class="link">
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=https://www.metoffice.gov.uk/research/weather/ensemble-forecasting/mogreps">MOGREPS ensemble system</a> - description of UKMET ensemble prediction system</li>
            </ul>
            
            <p class="link2"><span style="font-size:18px;">China (CMA)</span></p>
            
            <p class="link1"><span style="font-size:16px;">Documentation, research, FAQ, etc.</span></p>
            
            <ul class="link">
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://www.cma.gov.cn/en2014/news/Features/201505/t20150505_281493.html">Introduction to CMA EPS</a> - description of operational system</li>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://www.cma.gov.cn/en2014/research/features/201409/t20140924_262374.html">T639 EFS</a> - description of T639 Ensemble Forecast System</li>
            </ul>
            
            <p class="link2"><span style="font-size:18px;">Japan (JMA)</span></p>
            
            <p class="link1"><span style="font-size:16px;">Guidance</span></p>
            
            <ul class="link">
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://ds.data.jma.go.jp/tcc/tcc/products/model/">JMA ensemble prediction system</a> - description and guidance</li>
            </ul>
            
            <p class="link2"><span style="font-size:18px;">Australia (ABM)</span></p>
            
            <p class="link1"><span style="font-size:16px;">Guidance</span></p>
            
            <ul class="link">
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://www.bom.gov.au/climate/poama2.4/about-POAMA-outlooks.shtml">POAMA forecasts</a> - description and general guidance for POAMA forecasting</li>
            </ul>
            
            <p class="link1"><span style="font-size:16px;">Documentation, research, FAQ, etc.</span></p>
            
            <ul>
            	<li class="link"><a href="https://www.weather.gov/nwsexit.php?url=http://poama.bom.gov.au/">POAMA research</a> - POAMA research and data access page</li>
            </ul>
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
 
