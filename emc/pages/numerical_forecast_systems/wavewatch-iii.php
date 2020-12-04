<?php 
global $browser_title;
 $browser_title = 'WAVEWATCH-III';   
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
     <h2 id="section-title">Global Wave Model (WAVEWATCH III)</h2>
     	<<div id="description">
				<table style="font-family: Helvetica, Arial, sans-serif; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" width="500" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr align="center">
			<td style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal;"><a href="http://polar.ncep.noaa.gov/" style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="NOAA Wave Watch III logo" src="http://polar.ncep.noaa.gov/waves/images/wwmain2.jpg" width="500" height="70" border="0"></a>
			<h2 style="font-size: 19px; font-family: Helvetica, Arial, &quot;San Serif&quot;;" align="center">EMC Operational Wave Models</h2>
			</td>
		</tr>
	</tbody>
</table>

<table style="font-family: Helvetica, Arial, sans-serif; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" width="100%" cellspacing="0" cellpadding="3" border="0">
	<tbody>
		<tr valign="middle" align="center">
			<td class="tiny" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0); border-style: solid; border-width: 1px 0px 1px 1px;">Home</td>
			<td class="tiny" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0); border-style: solid; border-width: 1px 0px 1px 1px;"><a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-" style="color: rgb(0, 51, 153); text-decoration: none;">Product<br>
			Viewer</a></td>
			<td class="tiny" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0); border-style: solid; border-width: 1px 0px 1px 1px;"><a href="http://polar.ncep.noaa.gov/waves/product_table.shtml?-multi_1-" style="color: rgb(0, 51, 153); text-decoration: none;">Product<br>
			Table</a></td>
			<td class="tiny" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0); border-style: solid; border-width: 1px 0px 1px 1px;"><a href="http://polar.ncep.noaa.gov/waves/products.shtml?" style="color: rgb(0, 51, 153); text-decoration: none;">Product<br>
			Descriptions</a></td>
			<td class="tiny" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0); border-style: solid; border-width: 1px 0px 1px 1px;"><a href="http://polar.ncep.noaa.gov/waves/implementations.shtml?" style="color: rgb(0, 51, 153); text-decoration: none;">Model<br>
			Description</a></td>
			<td class="tiny" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0); border-style: solid; border-width: 1px 0px 1px 1px;"><a href="http://polar.ncep.noaa.gov/waves/validation?" style="color: rgb(0, 51, 153); text-decoration: none;">Model<br>
			Validation</a></td>
			<td class="tiny" style="font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0); border-style: solid; border-width: 1px;"><a href="http://polar.ncep.noaa.gov/waves/download.shtml?" style="color: rgb(0, 51, 153); text-decoration: none;">Model Data<br>
			Access</a></td>
		</tr>
	</tbody>
</table>

<table class="reg" style="border: 2px solid blue; padding: 4px; text-align: justify;">
	<tbody>
		<tr>
			<td><b>NOTICE: WAVEWATCH III® v6.07 released on GitHub 21st March 2019</b></td>
		</tr>
		<tr>
			<td>
			<p><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">We have moved to an open development paradigm using GitHub, which means users and developers are no longer required to submit requests for usernames and passwords to access our software package.<br>
			The WAVEWATCH III® <a href="https://github.com/NOAA-EMC/WW3/releases/tag/6.07">project page is here</a>.<br>
			The latest release (currently at 6.07) is available as a compressed tarball or zipfile from the project page. To help users and developers navigate the new repositories, we have created two sets of guidelines in GitHub to help you navigate our community modeling framework, one for users and the other for developers: •</span></span></p>

			<ul>
				<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">If you are a user and would like to access the code for applications and do not plan to engage in development work, see the <a href="https://github.com/NOAA-EMC/WW3/wiki/WAVEWATCH-III-User-Guide">User Guide</a>. •</span></span></li>
				<li><span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;">If you are a developer and would like to add a new feature to the code, see the <a href="https://github.com/NOAA-EMC/WW3/wiki/Developer-Guide">Developer Guide</a>.</span></span></li>
			</ul>
			</td>
		</tr>
	</tbody>
</table>

<p><br>
<span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The <a href="https://github.com/NOAA-EMC/WW3/wiki">WW3 GitHub wiki</a> hosts a description of the model, its main features, output options, user and developer guides, technical documentation and latest news.<br>
<i>Let's Go Modeling!</i><br>
The WAVEWATCH III® Development Group &nbsp;</span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The operational ocean wave predictions of NOAA/NWS/NCEP use the wave model WAVEWATCH III<sup style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica, Arial, sans-serif;">®</sup>&nbsp;using operational NCEP products as input.</span></span></p>

<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: center; font-weight: bold;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://polar.ncep.noaa.gov/waves/wavewatch/" style="color: rgb(0, 51, 153); text-decoration: none;">Detailed description of the WAVEWATCH III<sup style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica, Arial, sans-serif;">®</sup>&nbsp;model<br>
and source code distribution.</a></span></span></p>

<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The model is run four times a day: 00Z, 06Z, 12Z, and 18Z. Each run starts with 9-, 6- and 3-hour hindcasts and produces forecasts of every 3 hours from the initial time out to 180 hours (84 hours for the Great Lakes).</span></span></p>

<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The wave model suite consists of global and regional nested grids. As background information, a list of selected&nbsp;<a href="http://polar.ncep.noaa.gov/waves/references.shtml" style="color: rgb(0, 51, 153); text-decoration: none;">references&nbsp;</a>and a chronological list of&nbsp;<a href="http://polar.ncep.noaa.gov/waves/changes.shtml" style="color: rgb(0, 51, 153); text-decoration: none;">model changes</a>&nbsp;are available. Finally,&nbsp;<a href="http://polar.ncep.noaa.gov/waves/validation" style="color: rgb(0, 51, 153); text-decoration: none;">validation data are available for the multigrid model</a>.</span></span></p>

<table style="font-family: Helvetica, Arial, sans-serif; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" width="100%" cellspacing="4" cellpadding="2" border="0" align="center">
	<tbody>
		<tr align="center">
			<td class="std" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0); border-style: solid; border-width: 1px; background-color: lightblue;" width="20%">Global</td>
			<td class="std" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0); border-style: solid; border-width: 1px;" width="20%"><a href="http://polar.ncep.noaa.gov/waves/index.shtml?-multi_2-" style="color: rgb(0, 51, 153); text-decoration: none;">Hurricane Waves</a></td>
			<td class="std" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0); border-style: solid; border-width: 1px;" width="20%"><a href="http://polar.ncep.noaa.gov/waves/index2.shtml?-glw-" style="color: rgb(0, 51, 153); text-decoration: none;">Great Lakes<br>
			(NAM winds)</a></td>
			<td class="std" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0); border-style: solid; border-width: 1px;" width="20%"><a href="http://polar.ncep.noaa.gov/waves/index2.shtml?-glwn-" style="color: rgb(0, 51, 153); text-decoration: none;">Great Lakes<br>
			(NDFD winds)</a></td>
			<td class="std" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0); border-style: solid; border-width: 1px;" width="20%"><a href="http://polar.ncep.noaa.gov/waves/ensemble/index.shtml?" style="color: rgb(0, 51, 153); text-decoration: none;">Global<br>
			Ensemble</a></td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<center class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;"><a href="http://polar.ncep.noaa.gov/waves/images/multi_1.png" style="color: rgb(0, 51, 153); text-decoration: none;"><img alt="WAVEWATCH III Global Regional Views" src="http://polar.ncep.noaa.gov/waves/images/multi_1_sm.png" width="500" height="280" border="0">Click on image to enlarge</a></center>

<h4 style="font-size: 15px; font-family: Helvetica, Arial, &quot;San Serif&quot;; color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" align="center">Forecast Zones<span>&nbsp;</span><span class="std" style="font-size: 13px; font-weight: bold; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;"><br>
Click to open the Product Viewer for the selected zone (latest model run)</span></h4>

<table style="font-family: Helvetica, Arial, sans-serif; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;" cellspacing="0" cellpadding="0" border="0" align="center">
	<tbody>
		<tr valign="top" align="center">
			<th class="reg" style="font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Helvetica, Arial, sans-serif; color: rgb(0, 0, 0);" width="33%">Full Basin</th>
			<th class="reg" style="font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Helvetica, Arial, sans-serif; color: rgb(0, 0, 0);" width="33%">Regional</th>
			<th class="reg" style="font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 13px; line-height: normal; font-family: Helvetica, Arial, sans-serif; color: rgb(0, 0, 0);" width="33%">Local</th>
		</tr>
		<tr valign="top" align="center">
			<td class="reg" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0);"><a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-atlantic-" style="color: rgb(0, 51, 153); text-decoration: none;">Atlantic Ocean</a><br>
			<a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-pacific-" style="color: rgb(0, 51, 153); text-decoration: none;">Pacific Ocean</a><br>
			<a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-indian_o-" style="color: rgb(0, 51, 153); text-decoration: none;">Indian Ocean</a></td>
			<td class="reg" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0);"><a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-NE_atlantic-" style="color: rgb(0, 51, 153); text-decoration: none;">NE Atlantic</a><br>
			<a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-NW_atlantic-" style="color: rgb(0, 51, 153); text-decoration: none;">NW Atlantic</a><br>
			<a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-US_eastcoast-" style="color: rgb(0, 51, 153); text-decoration: none;">US East Coast</a><br>
			<a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-NE_pacific-" style="color: rgb(0, 51, 153); text-decoration: none;">NE Pacific</a><br>
			<a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-alaska-" style="color: rgb(0, 51, 153); text-decoration: none;">Alaskan Waters</a><br>
			<a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-aus_ind_phi-" style="color: rgb(0, 51, 153); text-decoration: none;">Australia-Indonesia</a></td>
			<td class="reg" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; line-height: normal; color: rgb(0, 0, 0);"><a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-gmex-" style="color: rgb(0, 51, 153); text-decoration: none;">Gulf of Mexico</a><br>
			<a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-US_keywest-" style="color: rgb(0, 51, 153); text-decoration: none;">Key West</a><br>
			<a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-US_puertorico-" style="color: rgb(0, 51, 153); text-decoration: none;">Puerto Rico</a><br>
			<a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-US_wc_zm1-" style="color: rgb(0, 51, 153); text-decoration: none;">US West Coast Zoom 1</a><br>
			<a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-US_wc_zm2-" style="color: rgb(0, 51, 153); text-decoration: none;">US West Coast Zoom 2</a><br>
			<a href="http://polar.ncep.noaa.gov/waves/viewer.shtml?-multi_1-hawaii-" style="color: rgb(0, 51, 153); text-decoration: none;">Hawaii</a></td>
		</tr>
	</tbody>
</table>

<h4 style="font-size: 15px; font-family: Helvetica, Arial, &quot;San Serif&quot;; color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">NOAA WAVEWATCH III<sup style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica, Arial, sans-serif;">®</sup>&nbsp;Hindcast and Reanalysis Archives</span></span></h4>

<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">EMC currently maintains two classes of WAVEWATCH III<sup style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica, Arial, sans-serif;">®</sup>&nbsp;hindcasts.</span></span></p>

<ul class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">A thirty-year hindcast generated from the NCEP Climate Forecast System Reanalysis and Reforecast (CFSRR) homogeneous dataset of hourly high-resolution winds. The time period covers from 1979 through 2009. This is a true hindcast generated with a single version of the model and a statistically consistent forcing wind field, and is suitable for use in climate studies.</span></span></li>
	<li><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">An ongoing data set produced by rerunning the model from the operational wind fields to produce best-estimate nowcast datasets. This is a statistically inhomogeneous hindcast data set, because the underlying models are periodically updated. Therefore this data set should not be used for climate studies.</span></span></li>
</ul>

<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Detailed descriptions of the hindcasts and reanalyses, with links to the datasets, validation statistics from buoy match-ups, and visualizations of the model data fields, can be found in the&nbsp;<a href="http://polar.ncep.noaa.gov/waves/hindcasts" style="color: blue; text-decoration: none;">WAVEWATCH III<sup style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica, Arial, sans-serif;">®</sup>&nbsp;Hindcast and Reanalysis Archives</a></span></span></p>

<h4 style="font-size: 15px; font-family: Helvetica, Arial, &quot;San Serif&quot;; color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">WAVEWATCH III<sup style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica, Arial, sans-serif;">®</sup>&nbsp;Tutorials</span></span></h4>

<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Two&nbsp;<a href="http://www.weather.gov/nwsexit.php?url=http://www.comet.ucar.edu/" style="color: rgb(0, 51, 153); text-decoration: none;">COMET</a>&nbsp;modules are available regarding WAVEWATCH III<sup style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica, Arial, sans-serif;">®</sup>&nbsp;and analysis of ocean swell:</span></span></p>

<ul style="color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;">
	<li class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.weather.gov/nwsexit.php?url=http://www.meted.ucar.edu/oceans/wavewatch3/" style="color: rgb(0, 51, 153); text-decoration: none;">Operational Use of WAVEWATCH III<sup style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica, Arial, sans-serif;">®</sup></a></span></span></li>
	<li class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><a href="http://www.weather.gov/nwsexit.php?url=http://www.meted.ucar.edu/oceans/ocean_swell/" style="color: rgb(0, 51, 153); text-decoration: none;">Analyzing Ocean Swell</a></span></span></li>
</ul>

<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"><span style="color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Registration is free for the courses.</span></span></span></p>

<h4 style="font-size: 15px; font-family: Helvetica, Arial, &quot;San Serif&quot;; color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Disclaimer</span></span></h4>

<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">While WAVEWATCH III<sup style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica, Arial, sans-serif;">®</sup>&nbsp;is an operational model, we cannot guarantee the timeliness or accuracy of the model data and figures offered on this site.&nbsp;<a href="http://weather.gov/disclaimer.php" style="color: rgb(0, 51, 153); text-decoration: none;">Please see our disclaimer for more information.</a></span></span></p>

<h4 style="font-size: 15px; font-family: Helvetica, Arial, &quot;San Serif&quot;; color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Questions or Comments?</span></span></h4>

<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">We welcome any questions or comments you may have on the WAVEWATCH III<sup style="font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Helvetica, Arial, sans-serif;">®</sup>system.</span></span></p>

<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Sign up for the <b style="font-weight: bold;"><a href="http://polar.ncep.noaa.gov/mmab/mailing.shtml" style="color: rgb(0, 51, 153); text-decoration: none;">EMC Marine Modeling mailing list</a></b>&nbsp;for updates and information on these products.</span></span></p>

<p class="reg" style="font-size: 13px; color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">For questions or problems with the website please&nbsp;<a href="mailto:Todd.Spindler@noaa.gov?subject=WW3%20Website%20Question" style="color: rgb(0, 51, 153); text-decoration: none;">contact us</a>.</span></span></p>
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
 