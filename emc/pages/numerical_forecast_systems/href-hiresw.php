<?php 
global $browser_title;
 $browser_title = 'HREF-HIRESW';   
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
     <h2 id="section-title">High-Resolution Ensemble Forecast</h2>
     	<div id="description">
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The NCEP High-Resolution Window Forecast System (HIRESW) consists of daily runs of the regional version of the Finite Volume Cubed Sphere (FV3) model and two NCAR Advanced Research WRF (WRF-ARW) runs at ~3 km resolution. Currently, five domains are being run, two large domains (CONUS, Alaska) and three small domains (Hawaii, Puerto Rico, and Guam). The second ARW run (ARW2) is not run over Guam. The source of each run's initial (IC) and boundary conditions (BC) follows:</span></span></p>

<ol type="1">
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Alaska FV3/ARW1 : IC/BC from 6-h old GFS</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Alaska ARW2 : IC from current NAM, BC from 6-h old NAM</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">CONUS FV3 : IC/BC from 6-h GFS</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">CONUS ARW1 : IC from current RAP, BC from 6-h old GFS</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">CONUS ARW2 ; IC from current NAM, BC from 6-h old NAM</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Hawaii FV3/ARW1: IC/BC from 6-h old GFS</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Hawaii ARW2 : IC from current NAM, BC from 6-h old NAM</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Puerto Rico FV3: IC/BC from 6-h old GFS</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Puerto Rico ARW1: IC from current RAP, BC from 6-h old GFS</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Puerto Rico ARW2: IC from current NAM, BC from 6-h old NAM</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Guam FV3/ARW1 : IC/BC from 6-h old GFS</span></span></li>
</ol>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">These are the forecast initial times at which the respective HIRESW domains are run:</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">- 0000 and 1200 UTC : CONUS, Hawaii, Guam</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">- 0600 and 1800 UTC : Alaska, Puerto Rico</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">For EMC-generated HIRESW graphics for the latest run go to the EMC <a href="http://www.emc.ncep.noaa.gov/mmb/mmbpll/ncep_hiresw/">HIRESW web site</a>.&nbsp; </span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The NCEP High-resolution Ensemble Forecast system (HREF) aggregates existing deterministic convection-allowing forecasts to create ensemble products. HREF uses current and time-lagged forecasts from the HiresWindow run (ARW/FV3 over CONUS, Alaska, Hawaii, Puerto Rico). For the CONUS domain, the 3km HRRR and 3 km NAM nest is also used. For the Alaska domain, the 3 km HRRR is also used as a member. HREF is considered as a precursor to a true high-resolution ensemble forecast system to be developed using the FV3 model.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The latest graphics generated by EMC for the CONUS, Alaska, Hawaii, and Puerto Rico are accessible at the <a href="http://www.emc.ncep.noaa.gov/mmb/mpyle/hrefv3/">HREF home page</a>.</span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">For more info on the HREF and the HiresW, please contact <a href="mailto:matthew.pyle@noaa.gov">Matthew Pyle</a></span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://www.weather.gov/disclaimer"><strong>Disclaimer</strong></a></span></span></p>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Please note : The EMC-generated web pages listed above are created on the NCEP development computer, and therefore will not be updated when this computer is down or unavailable. For official NCEP forecast/analysis graphics with 24/7 support, please use the operational <a href="http://mag.ncep.noaa.gov">NCEP Model Analysis and Guidance (MAG)</a> web site</span></span></p>

<p>&nbsp;</p>
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
 
