<?php 
global $browser_title;
 $browser_title = 'GFS';   
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
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs/documentation.php">
              Documentation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs/implementations.php">
              Implementations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs/references.php">
              References
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
            <a class="nav-link" href="http://www.nco.ncep.noaa.gov/pmb/products/gfs/">
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://mag.ncep.noaa.gov/model-guidance-model-parameter.php?group=Model%20Guidance&model=GFS&area=NAMER&ps=area">
              Model Guidance
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://vlab.ncep.noaa.gov/web/gfs/performance">
              Performance
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://vlab.ncep.noaa.gov/web/gfs">
              Collaborative VLab Page
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://vlab.ncep.noaa.gov/web/gfs/rfcs">
              Operational GFS system changes since 2016
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
     <h2 id="section-title">GFS</h2>
     	<div id="description">
				<div id="branch" style="-webkit-text-stroke-width:0px; background-color:#ffffff; box-sizing:border-box; color:#34495e; font-family:&quot;Open Sans&quot;,Helvetica,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:normal; letter-spacing:normal; orphans:2; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px"><span style="font-size:12px"><span style="color:#8a8a8a"><span style="font-family:Arial,Helvetica,sans-serif"><strong><span style="color:#000000"></span></strong></span></span></span></div>

<div id="meta" style="-webkit-text-stroke-width:0px; background-color:#ffffff; box-sizing:border-box; color:#34495e; font-family:&quot;Open Sans&quot;,Helvetica,Arial,sans-serif; font-size:14px; font-style:normal; font-variant-caps:normal; font-variant-ligatures:normal; font-weight:normal; letter-spacing:normal; orphans:2; padding:15px; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-indent:0px; text-transform:none; white-space:normal; widows:2; word-spacing:0px">
<table style="background-color:transparent;border-collapse:collapse;border-spacing:0px;box-sizing:border-box;" align="center">
	<tbody>
		<tr>
			<td style="vertical-align: top;">
			<p style="text-align: center;"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"><img src="http://www.emc.ncep.noaa.gov/GFS/gifs/gfs4c.png" style="border:0px; box-sizing:border-box; vertical-align:middle" title="Global Forecast System"></span></span></span></p>

			<hr>
			<p><u style="color: rgb(85, 85, 85); font-family: Montserrat, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; background-color: transparent;"><span style="font-size:16px;">Contacts</span>:</u><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"></span></span></span></p>

			<ul>
				<li>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Modeling and Data Assimilation Branch Chief -&nbsp;<a href="mailto:vijay.tallapragada@noaa.gov?subject=Contact%20from%20GFS%20EMCRZDM%20page" style="color: rgb(0, 153, 216); text-decoration-line: none;">Vijay Tallapragada</a></span></span></p>
				</li>
				<li>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">GFS Project Lead -<a href="mailto:fanglin.yang@noaa.gov"> Fanglin Yang</a></span></span></p>
				</li>
			</ul>

			<p style="color: rgb(52, 73, 94); font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 14px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><u>Operational Links:</u></span></span></p>

			<ul style="color: rgb(52, 73, 94); font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
				<li>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://mag.ncep.noaa.gov/model-guidance-model-parameter.php?group=Model%20Guidance&amp;model=GFS&amp;area=NAMER&amp;ps=area">Official Model Guidance at NCEP MAG page</a></span></span></p>
				</li>
				<li>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.nco.ncep.noaa.gov/pmb/products/gfs/">Model Products Information</a></span></span></p>
				</li>
				<li>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://www.emc.ncep.noaa.gov/users/verification/global/">NCEP Global Model Verification Portal </a></span></span></p>
				</li>
				<li>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.emc.ncep.noaa.gov/gmb/STATS_vsdb/">Global Multi-Model Performance Statistics and GFS 2-D Maps</a></span></span></p>
				</li>
				<li>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://vlab.ncep.noaa.gov/web/gfs/home">GFS VLab Community</a></span></span></p>
				</li>
			</ul>

			<p style="color: rgb(52, 73, 94); font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 14px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><u>GFS Version 15: Initial Implementation of Unified Forecast System (UFS) with FV3 dynamic core NCEP Production Suite:</u></span></span></p>

			<ul style="color: rgb(52, 73, 94); font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 14px;">
				<li>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.emc.ncep.noaa.gov/users/Eric.Rogers/documents/FV3GFS_OD_Briefs_10-01-18_4-1-2019.pdf">Details on changes in GFS V15 (implemented on June 12, 2019) </a></span></span></p>
				</li>
				<li>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://vlab.ncep.noaa.gov/group/fv3gfs">FV3GFS VLab Community</a></span></span></p>
				</li>
				<li>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://github.com/ufs-community/ufs-weather-model/wiki">UFS Weather Model Codes - Github</a></span></span></p>
				</li>
				<li>
				<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://github.com/NOAA-EMC/global-workflow">GFS Workflow - Github</a></span></span></p>
				</li>
			</ul>
			<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="gfs/gfsv16.php">GFS v16 Dashboard (under construction) </a></span></span></p>
			<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://www.emc.ncep.noaa.gov/users/meg/gfsv16/">GFS v16 Official Evaluation Page</a></span></span></p>
			</td>
			<td style="vertical-align: top;">&nbsp;</td>
			<td style="vertical-align: top;">
			<div id="00Z" style="box-sizing:border-box"><span style="font-size:12px"><span style="color:#000000"><span style="font-family:Arial,Helvetica,sans-serif"></span></span></span>
			<p style="color: rgb(52, 73, 94); font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: center;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The Global Forecast System (GFS) is a global numerical weather prediction system containing a global computer model and variational analysis run by the U.S. National Weather Service (NWS).</span></span></p>

			<p style="color: rgb(52, 73, 94); font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: center;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The GFS is run four times a day, and produces forecasts for up to 16 days in advance. The forecast component uses the FV3 model with a resolution of ~13 km. In the vertical, the model is divided into 64 layers and temporally, it produces forecast output every hour for the first 120 hours, then every 3 hours for days 5-16. Details on the June 2019 implementation of the FV3 version of the GFS can be found in the "Implementations" link on the left side of this page.</span></span></p>
 

			<hr> <a href="http://mag.ncep.noaa.gov/data/gfs/00/namer/10m_wnd_precip/gfs_namer_024_10m_wnd_precip.gif" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 0, 0); text-decoration: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><img src="http://mag.ncep.noaa.gov/data/gfs/00/namer/10m_wnd_precip/gfs_namer_024_10m_wnd_precip.gif" style="border:none; box-sizing:border-box; vertical-align:middle; width:100%"></a></div>

			<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Click to view full size</span></span></p>

			<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="https://www.weather.gov/disclaimer">Disclaimer</a></span></span></p>
			</td>
		</tr>
	</tbody>
</table>
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
 
