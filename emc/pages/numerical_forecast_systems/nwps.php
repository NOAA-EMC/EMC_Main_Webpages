<?php 
global $browser_title;
 $browser_title = 'NWPS';   
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
     <h2 id="section-title">Nearshore Wave Prediction System</h2>
     	<div id="description">
				<table style="width:100%;font-family: Helvetica, Arial, sans-serif; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" width="500" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;">
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
				<tbody>
					<tr align="center">
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a href="http://polar.ncep.noaa.gov/" style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="NOAA Wave Watch III logo" src="http://polar.ncep.noaa.gov/waves/images/wwmain2.jpg" width="500" height="70" border="0"></a>
						<h2 style="font-size: 19px; font-family: Helvetica, Arial, &quot;San Serif&quot;; width: 500px;" align="center">Nearshore Wave Prediction System</h2>
						</td>
					</tr>
				</tbody>
			</table>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">The Nearshore Wave Prediction System (NWPS) provides on-demand, high-resolution nearshore wave model guidance to U.S. coastal WFOs, triggered in real time by forecast wind grids prepared and submitted by the individual offices. NWPS is maintained and developed by NCEP's Environmental Modeling Center (EMC) in collaboration with a number of Weather Forecast Offices (WFOs), as well as partners at NOAA/NOS, USGS and USACE.</p>

			<p class="std" style="font-size: larger; font-weight: bold; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;" align="center"><a href="http://polar.ncep.noaa.gov/nwps/viewer.shtml" style="color: rgb(0, 51, 153); text-decoration: none;">Access the NWPS Model Viewer<br>
			<img alt="NWPS interactive interface" src="http://polar.ncep.noaa.gov/nwps/images/nwps_webgraph_esri.png" width="500" height="249" border="0"></a><br clear="left">
			<a href="http://polar.ncep.noaa.gov/nwps/para/viewer.shtml" style="color: rgb(0, 51, 153); text-decoration: none;">Access the development parallel here</a><br>
			&nbsp;</p>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">NWPS is driven by forecaster-developed wind grids produced in AWIPS, and wave boundary conditions from the operational<span>&nbsp;</span><a href="http://polar.ncep.noaa.gov/waves/index2.shtml" style="color: rgb(0, 51, 153); text-decoration: none;">WAVEWATCH III</a><span>&nbsp;</span>model. The nearshore wave model used is<span>&nbsp;</span><a href="http://www.weather.gov/nwsexit.php?url=http://www.swan.tudelft.nl" style="color: rgb(0, 51, 153); text-decoration: none;">SWAN</a>. Wave-current interaction is included using surface currents from the Real-Time Ocean Forecast System (<a href="http://polar.ncep.noaa.gov/global/index.shtml" style="color: rgb(0, 51, 153); text-decoration: none;">RTOFS-Global</a>). Tides and storm surge are accounted for using the Extratropical Surge and Tide Operational Forecast System (<a href="http://www.opc.ncep.noaa.gov/coastal_guidance.shtml" style="color: rgb(0, 51, 153); text-decoration: none;">ESTOFS</a>, extratropical conditions), or the probabilistic model<span>&nbsp;</span><a href="http://slosh.nws.noaa.gov/psurge2.0/" style="color: rgb(0, 51, 153); text-decoration: none;">P-SURGE</a><span>&nbsp;</span>(tropical conditions). The computational grids have a nearshore resolution of 1.8 km-500 m. NWPS produces fields of integral wave parameters, wave spectra, and individually tracked wave systems (Gerling-Hanson plots). Experimental rip current and total water level guidance is produced at 5 pilot WFOs.</p>

			<p class="std" style="font-size: larger; font-weight: bold; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;" align="center"><a href="http://www.nco.ncep.noaa.gov/pmb/spa/nwps/" style="color: rgb(0, 51, 153); text-decoration: none;">Access the NWPS Model Status Page<br>
			<img alt="NWPS interactive interface" src="http://polar.ncep.noaa.gov/nwps/images/nwps_model_status_text3.png" width="500" height="249" border="0"></a></p>

			<hr width="75%" size="1" noshade="noshade" align="center">
			<h3 style="font-size: 17px; font-family: Helvetica, Arial, &quot;San Serif&quot;;">Coastal Hazards: Total Water Level Viewer</h3>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">This tool displays experimental total water level and coastal change model guidance for select regions of the U.S. coastline using NWPS output and local beach characteristics (<i>Courtesy of<span>&nbsp;</span><a href="http://www.weather.gov/nwsexit.php?url=http://www.usgs.gov" style="color: blue; text-decoration: none;">U.S. Geological Survey)</a></i></p>
			<a href="http://www.weather.gov/nwsexit.php?url=http://coastal.er.usgs.gov/hurricanes/research/twlviewer/" style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="USGS Total Water Level and Coastal Change Forecast Viewer" src="http://polar.ncep.noaa.gov/nwps/images/USGS_CoastalHazards_icon.png" width="500" height="220" border="0"></a>

			<hr width="75%" size="1" noshade="noshade" align="center">
			<h3 style="font-size: 17px; font-family: Helvetica, Arial, &quot;San Serif&quot;;">Monthly Validation - Southern and Eastern Regions</h3>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">Below are the combined monthly validation statistics at all coastal data buoys in the NWS Southern and Eastern Regions respectively, computed as a 30-day, moving-window retrospective. For real-time validation, as well as buoy-specific validation statistics, please see the model validation viewer above.</p>

			<table width="400" cellspacing="5" cellpadding="0" border="0">
				<tbody>
					<tr>
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="SR NDBC buoy validation" src="http://polar.ncep.noaa.gov/nwps/images/rtimages/val_monthly/nwps_sr_scatter.png" width="250" border="0"></a>

						<center>Southern Region Validation Statistics<br>
						<i>Click to enlarge</i></center>
						</td>
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="key west example forecast" src="http://polar.ncep.noaa.gov/nwps/images/rtimages/val_monthly/nwps_er_scatter.png" width="250" border="0"></a>
						<center>Eastern Region Validation Statistics<br>
						<i>Click to enlarge</i></center>
						</td>
					</tr>
				</tbody>
			</table>

			<table width="400" cellspacing="5" cellpadding="0" border="0">
				<tbody>
					<tr>
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="SR NDBC buoy validation" src="http://polar.ncep.noaa.gov/nwps/images/rtimages/val_monthly/nwps_stats_sr_ts.png" width="250" border="0"></a>

						<center>Southern Region Statistics History<br>
						<i>Click to enlarge</i></center>
						</td>
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="key west example forecast" src="http://polar.ncep.noaa.gov/nwps/images/rtimages/val_monthly/nwps_stats_er_ts.png" width="250" border="0"></a>
						<center>Eastern Region Statistics History<br>
						<i>Click to enlarge</i></center>
						</td>
					</tr>
				</tbody>
			</table>

			<h3 style="font-size: 17px; font-family: Helvetica, Arial, &quot;San Serif&quot;;">Monthly Validation - Western, Pacific and Alaska Regions</h3>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">Below are the combined monthly validation statistics at all coastal data buoys in the NWS Western, Pacific and Alaska Regions, computed as a 30-day, moving-window retrospective. For real-time validation, please see the model validation viewer above.</p>

			<table width="400" cellspacing="5" cellpadding="0" border="0">
				<tbody>
					<tr>
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="WR NDBC buoy validation" src="http://polar.ncep.noaa.gov/nwps/images/rtimages/val_monthly/nwps_wr_scatter.png" width="250" border="0"></a>

						<center>Western Region Validation Statistics<br>
						<i>Click to enlarge</i></center>
						</td>
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="PR/AR NDBC buoy validation" src="http://polar.ncep.noaa.gov/nwps/images/rtimages/val_monthly/nwps_prar_scatter.png" width="250" border="0"></a>
						<center>Pacific/Alaska Region Validation Statistics<br>
						<i>Click to enlarge</i></center>
						</td>
					</tr>
				</tbody>
			</table>

			<table width="400" cellspacing="5" cellpadding="0" border="0">
				<tbody>
					<tr>
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="WR NDBC buoy validation" src="http://polar.ncep.noaa.gov/nwps/images/rtimages/val_monthly/nwps_stats_wr_ts.png" width="250" border="0"></a>

						<center>Western Region Statistics History<br>
						<i>Click to enlarge</i></center>
						</td>
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="PR/AR NDBC buoy validation" src="http://polar.ncep.noaa.gov/nwps/images/rtimages/val_monthly/nwps_stats_prar_ts.png" width="250" border="0"></a>
						<center>Pacific/Alaska Region Statistics History<br>
						<i>Click to enlarge</i></center>
						</td>
					</tr>
				</tbody>
			</table>

			<h3 style="font-size: 17px; font-family: Helvetica, Arial, &quot;San Serif&quot;;">Follow Us</h3>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">Sign up for the<span>&nbsp;</span><b style="font-weight: bold;"><a href="https://www.lstsrv.ncep.noaa.gov/mailman/listinfo/ncep.list.emc.nwps" style="color: rgb(0, 51, 153); text-decoration: none;">NWPS mailing list</a></b><span>&nbsp;</span>for updates and information on this system.</p>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; text-align: justify;">Follow the system development on our<span>&nbsp;</span><b style="font-weight: bold;"><a href="https://collaborate.nws.noaa.gov/trac/awipsSpecialProjects/" style="color: rgb(0, 51, 153); text-decoration: none;">Wiki Page</a></b><span>&nbsp;</span>(authorization required).</p>

			<h3 style="font-size: 17px; font-family: Helvetica, Arial, &quot;San Serif&quot;;">References</h3>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">Gibbs A., G. Dusek, A. J. van der Westhuysen, P. Santos, S. Stripling, S. Huddleston, E. Rivera-Acevedo, J. Estupinan, and H. Seim. Numerical Validation of a Coupled Probabilistic Rip Current Model and Nearshore Wave Prediction System for South Florida.<span>&nbsp;</span><i>Proc. 95th AMS Annual Meeting</i>, Am. Meteor. Soc., Phoenix, 2015.<span>&nbsp;</span><a href="https://ams.confex.com/ams/95Annual/webprogram/Manuscript/Paper265327/AMS_ripcurrent_2015_ext-abs_Final.pdf" style="color: rgb(0, 51, 153); text-decoration: none;">Available here</a></p>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">Dusek G., A. J. Van der Westhuysen, A. Gibbs, D. King, S. Kennedy, R. Padilla, H. Seim, and D. Elder. Coupling a Rip Current Forecast Model to the Nearshore Wave Prediction System.<span>&nbsp;</span><i>Proc. 94th AMS Annual Meeting</i>, Am. Meteor. Soc., Atlanta, 2014.<span>&nbsp;</span><a href="https://ams.confex.com/ams/94Annual/webprogram/Manuscript/Paper238859/Dusek%20et%20al.%20-%20Coupling%20rip%20current%20forecast%20model%20to%20NWPS.pdf" style="color: rgb(0, 51, 153); text-decoration: none;">Available here</a></p>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">Van der Westhuysen, A. J., A. A. Taylor, R. Padilla-Hernandez, A. Gibbs, P. Santos, D. Gaer, H. D. Cobb III, J. R. Lewitsky, and J. R. Rhome. Enhancements to the Nearshore Wave Prediction System to provide Coastal and Overland Hurricane Wave Guidance.<span>&nbsp;</span><i>Proc. 94th AMS Annual Meeting</i>, Am. Meteor. Soc., Atlanta, 2014.<span>&nbsp;</span><a href="https://ams.confex.com/ams/94Annual/webprogram/Manuscript/Paper241277/2646518_AMS2014_Westhuysen-etal_ext_abstr_paper3-1.pdf" style="color: rgb(0, 51, 153); text-decoration: none;">Available here</a></p>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">Van der Westhuysen, A. J., R. Padilla-Hernandez, P. Santos, A. Gibbs, D. Gaer, T. Nicolini, S. Tjaden, E. M. Devaliere and H. L. Tolman. Development and validation of the Nearshore Wave Prediction System.<span>&nbsp;</span><i>Proc. 93rd AMS Annual Meeting</i>, Am. Meteor. Soc., Austin, 2013.<span>&nbsp;</span><a href="https://ams.confex.com/ams/93Annual/webprogram/Manuscript/Paper222877/AMS2013_Westhuysen-etal_ext_abstr_paper4-5.pdf" style="color: rgb(0, 51, 153); text-decoration: none;">Available here</a></p>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">Gibbs, A., P. Santos, A. J. van der Westhuysen and R. Padilla-Hernandez. NWS Southern Region Numerical Optimization and Sensitivity Evaluation in Non-Stationary SWAN Simulations.<span>&nbsp;</span><i>Proc. 92nd AMS Annual Meeting</i>, Am. Meteor. Soc., New Orleans, 2012.<span>&nbsp;</span><a href="https://ams.confex.com/ams/92Annual/webprogram/Manuscript/Paper200322/2012_AMS_Extended%20Abstract_SWAN_final.pdf" style="color: rgb(0, 51, 153); text-decoration: none;">Available here</a></p>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">Settelmaier, J. B., A. Gibbs, P. Santos, T. Freeman, D. Gaer. Simulating Waves Nearshore (SWAN) Modeling Efforts at the National Weather Service (NWS) Southern Region (SR) Coastal Weather Forecast Offices (WFOs).<span>&nbsp;</span><i>Proc. 91st AMS Annual Meeting</i>, Am. Meteor. Soc., Seattle, 2011.<span>&nbsp;</span><a href="https://ams.confex.com/ams/91Annual/webprogram/Manuscript/Paper183540/Settelmaier_13A.4.pdf" style="color: rgb(0, 51, 153); text-decoration: none;">Available here</a></p>

			<h3 style="font-size: 17px; font-family: Helvetica, Arial, &quot;San Serif&quot;;">Upcoming features: Unstructured meshes</h3>

			<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;">SWAN and WW3's unstructured grid functionality is currently being incorporated into NWPS. With flexible unstructured grids, computational time can be optimized by concentrating computational grid points only in those nearshore regions where it is required to adequately resolve physical processes at small spatial scales, as shown in the examples below. This new functionality is scheduled for September 2017.</p>

			<table cellspacing="0" cellpadding="0" border="0">
				<tbody>
					<tr>
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="key west mesh" src="http://polar.ncep.noaa.gov/nwps/images/small/mesh.png" width="250" border="0"></a>

						<center>Unstructured mesh over WFO Key West domain.<br>
						<i>Click to enlarge</i></center>
						</td>
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="key west example forecast" src="http://polar.ncep.noaa.gov/nwps/images/small/KEY_Hsig_20130913_anim.png" width="250" border="0"></a>
						<center>Forecast guidance produced using NWPS (with SWAN wave model).<br>
						<i>Click to animate</i></center>
						</td>
					</tr>
					<tr>
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="key west mesh zoom" src="http://polar.ncep.noaa.gov/nwps/images/small/mesh_zoom.png" width="250" border="0"></a>
						<center>Zoom of unstructured mesh over Key West.<br>
						<i>Click to enlarge</i></center>
						</td>
						<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="key west example forecast zoom" src="http://polar.ncep.noaa.gov/nwps/images/small/KEY_Hsig_20130913_zoom_anim.png" width="250" border="0"></a>
						<center>Forecast guidance over zoomed-in domain.<br>
						<i>Click to animate.</i></center>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<table style="font-family: Helvetica, Arial, sans-serif; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; border-top: 1px solid black; border-bottom: 1px solid black; padding-top: 3px; padding-bottom: 3px;" width="500" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr align="center">
			<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;">
			<p><a href="https://www.weather.gov/disclaimer">DISCLAIMER</a></p>

			<p>Information Topics:<br>
			<a href="http://polar.ncep.noaa.gov/waves/#ww3products" style="color: rgb(0, 51, 153); text-decoration: none;">WAVEWATCH III<sup style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica, Arial, sans-serif;">®</sup><span>&nbsp;</span>Products</a>,<span>&nbsp;</span><a href="http://polar.ncep.noaa.gov/waves/#allproducts" style="color: rgb(0, 51, 153); text-decoration: none;">All Products</a>,<span>&nbsp;</span><a href="http://polar.ncep.noaa.gov/waves/#mmabinfo" style="color: rgb(0, 51, 153); text-decoration: none;">About Us</a>,<span>&nbsp;</span><a href="mailto:ncep.list.waves@noaa.gov" style="color: rgb(0, 51, 153); text-decoration: none;">Contact Us</a></p>
			</td>
		</tr>
	</tbody>
</table>
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
 