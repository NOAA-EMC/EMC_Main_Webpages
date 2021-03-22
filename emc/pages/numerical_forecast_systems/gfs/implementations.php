<?php 
global $browser_title;
 $browser_title = 'GFS';   
 include '../../portal_header.php';?>
 
 <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="../gfs.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs/documentation.php">
              Documentation
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs/implementations.php">
              Implementations
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
            <a class="nav-link active" href="http://www.nco.ncep.noaa.gov/pmb/products/gfs/">
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://mag.ncep.noaa.gov/model-guidance-model-parameter.php?group=Model%20Guidance&model=GFS&area=NAMER&ps=area">
              Model Guidance
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="https://www.emc.ncep.noaa.gov/users/verification/global/">
              Performance
            </a>
          </li>
        </ul>
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
     	<div id="description">
				<p style="text-align: center;"><span style="font-size: 26px;">List of GFS Implementations (scroll to the end of this page for a list of all NCEP global model implementations since 1980)</span></p>

<table>
	<tbody>
		<tr>
			<td width="100">
			<h2><u>Date</u></h2>
			</td>
			<td>
			<h2><u>Title</u></h2>
			</td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#e5e4e2"><b>Q2FY21</b></td>
			<td valign="top" bgcolor="#e5e4e2"><b><a href="javascript:void();"><font color="#008000">GFS v16</font></a> - implementated on <font color="#008000">March 22, 2021, 12 UTC</font></b>
			<table id="div7">
				<tbody>
					<tr>
						<td>
						<div><br>
					<span style="font-family: courier new;">On March 17, 2021, beginning with the 1200 Coordinated Universal Time (UTC) run, the National Centers for Environmental Prediction (NCEP) will upgrade the GFS and Global Data Assimilation System (GDAS) from version 15.3 to 16.0. As part of this upgrade, the previously standalone global deterministic WAVEWATCH III wave model Multi_1 will run coupled to the GFS forecast. GFS version 16.0 is the first major upgrade to the Finite Volume Cubed Sphere (FV3) dynamical core-based GFS, which replaced the spectral dynamical core in June 2019. In this upgrade, NCEP is increasing the number of model vertical layers from 64 to 127 and extending the model top from the upper stratosphere (~55 km height) to the mesopause (~80 km height).  Changes include the following:</span>
						<ul>
							<li><span style="font-family: courier new;">Changes to the model components and physics </span></li>
							<li><span style="font-family: courier new;">Changes to the wave model </span></li>
							<li><span style="font-family: courier new;">Changes to the data assimilation</span></li>
							<li><span style="font-family: courier new;">Changes to product output products</span></li>
						</ul>
						<span style="font-family: courier new;"> 1) Changes to the forecast model components and physics<br>
						<br>
						<ul>
							<li><span style="font-family: courier new;">Updated Planetary Boundary Layer (PBL) scheme, namely a scale-aware Turbulent Kinetic Energy Based Moist Eddy-Diffusivity Mass-Flux (sa-TKE-EDMF) parameterization for vertical turbulent mixing.</span></li>
							<li><span style="font-family: courier new;">New parameterization of sub-grid scale gravity-wave physics. </span></li>
							<li><span style="font-family: courier new;">Updated radiation package to improve solar radiation absorption by water clouds and a revised cloud overlap assumption for radiation calculation.</span></li>
							<li><span style="font-family: courier new;">Revised ground heat flux calculation over snowpack. </span></li>
							<li><span style="font-family: courier new;">Improved cloud microphysics for computing ice cloud effective radius </span></li>
						</ul>

						<br>
						<span style="font-family: courier new;"> 2) Changes to the wave model<br>
						<br>
                                                   The current operational standalone global deterministic wave model Multi_1 (wave_multi_1.v3.3) 
                                                   will become a component in the GFS, coupled using a one-way scheme in which the atmospheric model 
                                                   provides winds to the WAVEWATCH III model.  New features include a grid redesign, wave-current 
                                                   interaction and improved physics optimized to more frequent atmospheric forcing.<br>
						<br>
						3) Changes to Data Assimilation </span></p>

						<ul>
							<li><span style="font-family: courier new;">Use observational precipitation to drive and spin up the uncoupled Global Land Data Assimilation System (GLDAS) in the GDAS cycle to provide more realistic land initial conditions </span></li>
							<li><span style="font-family: courier new;">Use a Local Ensemble Kalman Filter (LETKF) with model space localization and linearized observation operator to replace the Ensemble Square Root Filter (EnSRF) </span></li>
							<li><span style="font-family: courier new;">Apply a new 4-Dimensional Incremental Analysis Update (4D-IAU) technique </span></li>
							<li><span style="font-family: courier new;">Turn on Stochastic Kinetic Energy Backscatter (SKEB) scheme in GDAS ensemble forecasts </span></li>
							<li><span style="font-family: courier new;">Update variational Quality Control (QC) </span></li>
							<li><span style="font-family: courier new;">Apply Hilbert curve to aircraft data </span></li>
							<li><span style="font-family: courier new;">Update aircraft bias correction with safeguards </span></li>
							<li><span style="font-family: courier new;">Assimilate additional COSMIC-2 GNSS-RO data (COSMIC-2 E1 and E2) </span></li>
							<li><span style="font-family: courier new;">Apply correlated observation error for CrIS over sea surfaces and IASI over sea and land</span></li>
							<li><span style="font-family: courier new;">Assimilate AMSU-A channel 14 and ATMS channel 15 without bias correction </span></li>
							<li><span style="font-family: courier new;">Assimilate CSR data from ABI_G16, AHI_Himawari8, and SEVIRI_M08 </span></li>
							<li><span style="font-family: courier new;">Assimilate AVHRR from NOAA-19 and Metop-B for near sea-surface temperature (NSST)</span></li>
							<li><span style="font-family: courier new;">Assimilate high-density flight-level wind, temperature, and moisture observations in tropical storm environment </span></li>
							<li><span style="font-family: courier new;">Upgrade to Community Radiative Transfer Model (CRTM) v2.3.0 </span></li>
						</ul>

						<p><span style="font-family: courier new;">4) Changes to directory structures on the NCEP Web services<br>
                                                          <br>
                                                            WAVEWATCH III multi_1 products found on NOMADS/ftpprd in pub/data/nccf/com/wave/prod/<br>
                                                            will be replaced by GFS.v16 Wave products and moved to the GFS directory structure for NOMADS/ftpprd:<br>
                                                            pub/data/nccf/com/gfs/prod/<br>  
                                                          <br>
                                                          With this upgrade, the following changes occur on either the NCEP web services:<br>
                                                           <a href="https://nomads.ncep.noaa.gov/pub/data/nccf/com/">https://nomads.ncep.noaa.gov/pub/data/nccf/com/</a><br> 
                                                           <a href="ftp://ftpprd.ncep.noaa.gov/pub/data/nccf/com/">ftp://ftpprd.ncep.noaa.gov/pub/data/nccf/com/</a><br>
                                                          or on the NWS Web services:<br>
                                                           <a href="https://tgftp.nws.noaa.gov/SL.us008001/ST.opnl/">https://tgftp.nws.noaa.gov/SL.us008001/ST.opnl/</a><br> 
                                                           <a href="ftp://tgftp.nws.noaa.gov/SL.us008001/ST.opnl/">ftp://tgftp.nws.noaa.gov/SL.us008001/ST.opnl/</a><br> 
						</span></p>

						<ul>
                                                     <li><span style="font-family: courier new;">Atmospheric output:</span></li>
                                                      <ul>
							<li><span style="font-family: courier new;">pub/data/nccf/com/gfs/prod/gfs.YYYYMMDD/CC/atmos </span></li>
							<li><span style="font-family: courier new;">pub/data/nccf/com/gfs/prod/gdas.YYYYMMDD/CC/atmos </span></li>
							<li><span style="font-family: courier new;">pub/data/nccf/com/gfs/prod/enkfgdas.YYYYMMDD/CC/atmos </span></li>
                                                      </ul>
                                                     <li><span style="font-family: courier new;">Wave output:</span></li>
                                                      <ul>
							<li><span style="font-family: courier new;">pub/data/nccf/com/gfs/prod/gfs.YYYYMMDD/CC/wave </span></li>
							<li><span style="font-family: courier new;">pub/data/nccf/com/gfs/prod/gdas.YYYYMMDD/CC/wave </span></li>
                                                      </ul>
						</ul>
						<span style="font-family: courier new;">where YYYYMMDD is year, month, and day and CC is cycle.<br>
						<br>
						5) Changes to the output file names on the NCEP Web services </span>

						<ul>
                                                    <li> GFS native grid files: The format of GFS analysis and forecast history files is changed from nemsio 
                                                         (binary) to netcdf, including a change of file extension. For example:
                                                         <ul>
                                                           <li>gfs.tCCz.atmanl.nemsio  --> gfs.tCCz.atmanl.nc
                                                           <li>gfs.tCCz.sfcanl.nemsio  --> gfs.tCCz.sfcanl.nc
                                                           <li>gfs.tCCz.atmfHHH.nemsio --> gfs.tCCz.atmfHHH.nc
                                                           <li>gfs.tCCz.sfcfHHH.nemsio --> gfs.tCCz.sfcfHHH.nc
                                                         </ul>
                                                           Where CC is 00, 06, 12, 18, and HHH is 000-012
                                                    <li> GDAS native grid files: The format of GDAS analysis and forecast history files is changed from nemsio 
                                                         (binary) to netcdf, including a change of file extension.  For example:
                                                         <ul>
                                                           <li>gdas.tCCz.atmanl.nemsio --> gdas.tCCz.atmanl.nc
                                                           <li>gdas.tCCz.sfcanl.nemsio --> gdas.CCz.sfcanl.nc
                                                           <li>gdas.tCCz.atmfHHH.nemsio --> gdas.tCCz.atmfHHH.nc 
                                                           <li>gdas.tCCz.sfcfHHH.nemsio --> gdas.tCCz.sfcfHHH.nc 
                                                         </ul>
                                                           Where CC is 00, 06, 12, 18, and HHH is 000-012
                                                    <li> ENKFGDAS native grid files: The format of EnKF forecast history files is changed from nemsio (binary) 
                                                         to netcdf, including a change of file extension.  For example:  gdas.tCCz.sfcfHHH.nemsio --> gdas.tCCz.sfcfHHH.nc
                                                    <li> WAVE grib2 files: The output grib2 file names change to align with the rest of the GFS.
                                                          <ul>
                                                            <li> Prefix changes from multi_1 to gfswave or gdaswave
                                                            <li> Grid resolution naming convention changes and some products replaced by new output
                                                               <ul>
                                                                  <li> glo_30mext    --> global.0p25
                                                                  <li> glo_30m       --> global.0p16, gsouth.0p25
                                                                  <li> at_10m        --> atlocn.0p16
                                                                  <li> wc_10m        --> wcoast.0p16
                                                                  <li> ak_10m        --> arctic.9km
                                                                  <li> ep_10m        --> epacif.0p16
                                                               </ul>
                                                                 Example: multi_1.glo_30mext.t00z.f000.grib2 ->  gfswave.t00z.global.0p25.f000.grib2 
                                                          </ul>
                                                    <li> GFSWAVE bulletin and spectra tar files: The station output names will change with the prefix 
                                                         going from multi_1 to gfswave for the wave bulletin and spectra tar files. Example:<br>
                                                         multi_1.t12z.spec_tar.gz-> gfswave.t12z.spec_tar.gz
                                                    <li> GTG turbulence: The file that contained the GTG turbulence will be replaced by a file with 
                                                         both GTG turbulence and icing severity:<br> 
                                                         gfs.tCCz.gtg.0p25.fFFF.grib2 -> gfs.tCCz.wafs_0p25.fFFF.grib2
                                                </ul>

						<p><span style="font-family: courier new;">6) Changes to Variables on the NCEP Web services </span></p>

						<ul>
                                                     <li> The following changes will be made to GFS station BUFR soundings:
                                                        <ul> 
                                                           <li> Remove station elevation adjustment from grid terrain to station terrain. 
                                                                When model grid terrain height is different from station elevation, 
                                                                temperature, humidity and pressure were adjusted to the station surface in GFS V15. 
                                                                This adjustment is removed in GFS V16.
                                                           <li> Correct unit and values for surface evaporation. The values and units of the net 
                                                                surface evaporation in GFS V15 is actually the surface latent heat net flux with 
                                                                unit of (W m-2). The values have been changed to net surface evaporation with units of kg/m**2.
                                                           <li> Replace nearest neighbor grid point for bufr station HILO (Hilo, Hawaii) with a better-represented 
                                                                grid point with similar terrain height and profile to the station. This update was made after 
                                                                extensive investigation. The original grid point is located to the west of the station 
                                                               (lat/lon: 19.73967/204.8438); the new grid point is to the south (lat/lon: 19.62252/204.9609).
                                                           <li> Add bufr station character IDs to the sounding files in the header section.
                                                        </ul>
                                                     <li> Update atmospheric pressure GRIB (pgrb2) files as follows: 
                                                        <ul>
                                                           <li> Unify all 3-D fields to have the same 41 standard isobaric layers for all forecast hours, including analysis time.
                                                           <li> Add seven more pressure levels (at 0.01, 0.02, 0.04, 0.07, 0.1, 0.2, 0.7 hPa) for all isobaric fields 
                                                                in the upper stratosphere and the mesosphere
                                                           <li> Add several new variables including cloud ceiling height (HGT), instantaneous total column 
                                                                cloud fraction (TCDC), instantaneous cloud fraction (LCDC/MCDC/HCDC) at low/middle/high cloud, 
                                                                1 and 4 km radar reflectivity (REFD), radar reflectivity (REFD) at model layer 1 and 2, 
                                                                mixed layer convective available potential (CAPE) and convective inhibition (CIN), plant canopy 
                                                                surface water (CWAT), soil moisture (SOILL) at 0-0.1, 0.1-0.4, 0.4-1,1-2 m below ground level, 
                                                                sea ice thickness (ICETK), surface roughness (SFCR), sea ice skin temperature (ICETMP), 
                                                                soil type (SOTYP), vegetation type (VEG) and frictional velocity (FRICV).
                                                           <li> Remove the legacy field 5-wave height (5WAVE), one of the two land-sea masks LANDN, 
                                                                and the icing severity. The icing severity will be moved to the new file: gfs.tHHz.wafs_0p25.fFFF.grib2. 
                                                           <li> Replace the land-sea mask (LAND) obtained via nearest neighbor interpolation with the one 
                                                                interpolated via bi-linear interpolation.
                                                           <li> Replace filtered Shuell Sea Level Pressure with unfiltered one using the same ID (PRMSL). 
                                                                The heavily filtered Shuell Sea Level has caused confusion to users due to its inconsistency 
                                                                with the 10m wind field.  
                                                           <li> Change labeling of time averaged cloud fraction at low/middle/high clouds from TCDC to LCDC, MCDC, HCDC.
                                                           <li> Increase GRIB precision for several variables. A complete list can be found 
                                                                <a href="https://www.nco.ncep.noaa.gov/pmb/changes/GFSv16_sflux_precision.pdf"> here.</a>
                                                           <li> Remove all isobaric specific humidity fields (SPFH) from atmospheric pressure GRIB 
                                                                backup (pgrb2b) files. A subset of these isobaric specific humidity fields have been moved to
                                                                pgrb2 files; SPFH at the following pressure levels have been removed: 125 hPa to 975 hPa every 50 hPa.
                                                           <li> Replace legacy synthetic nadir GOES 12/13 with synthetic nadir ABI GOES-R in the following files: 
                                                                gfs.tCCz.goessimpgrb2fFFF.grd221
                                                           <li> Remove lifted index (LFTX) from the surface flux (sfluxgrb) files; users may get this field from 
                                                                pressure GRIB (pgrb2) files. 
                                                           <li> Change the Grib2 master table version number from 2 to 6 for all variables in gfs.tCCz.wafs_grb45fFF.grib2
							</ul>
							</li>
						</ul>

						<p><span style="font-family: courier new;">7) Additions to Product and Files on NCEP Web Services<br>
						<ul>
                                                    <li> New parameters are included in the gfswave grib2 output files:
                                                      <ul>
                                                        <li> Significant wave height of third swell partition (SWELL:3)
                                                        <li> Mean wave period of third swell partition (SWPER:3)
                                                        <li> Mean wave direction of third swell partition (SWDIR:3)
                                                      </ul>
                                                    <li> Add gdas.tCCz.crisf4.tm00.bufr_d files containing level 1B radiance data from the 
                                                         S-NPP/N20 CrIS instrument. The previously available CrIS data was discontinued by 
                                                         the upstream provider in early 2020.
                                                    <li> Add the new file gfs.tHHz.wafs_0p25_unblended.fFF.grib2 to be used by UK Metoffice 
                                                         to produce blended WAFS products. The file contains icing severity and GTG turbulence on 
                                                         limited ICAO standard levels of exact numbers, as well as CB field.
                                                    <li> Add the station time series BUFR station lists. The new stations are:
                                                       <ul>
                                                          <li> 048327 18.77N  98.96E VTCC CHIANG MAI, THAILAND 
                                                          <li> 048381 16.47N 102.78E VTUK KHON KAEN, THAILAND
                                                          <li> 048400 15.77N 100.14E VTPN NAKHON SAWAN, THAILAND
                                                          <li> 048407 15.25N 104.87E VTUU UBON RATCHATHANI, THAILAND 
                                                          <li> 048453 13.67N 100.61E BKK BANGKOK THAILAND 
                                                          <li> 048568  7.19N 100.61E VTSH 10 SONGKHLA, THAILAND
                                                       </ul>
                                                    <li> Add new consolidated aviation file: gfs.tHHz.wafs_0p25.fFFF.grib2 
                                                         containing GTG turbulence and icing severity.  
                                                    <li> Change the grib2 parameter of icing severity changed from 234 to 37 and the mnemonic from ICSEV to ICESEV.
                                                    <li> Interpolate Icing Severity and Turbulence products onto ICAO standard levels of reference numbers 
                                                         instead of standard pressure levels.
                                                  </ul>
						</ul>

						<p><span style="font-family: courier new;">8) Removal/Replacement from NCEP Web Services: </span></p>

						<ul>
                                                   <li> Replace legacy synthetic nadir GOES 12/13 on global 1 degree grid with synthetic nadir ABI 
                                                        GOES-R products on global .25 degree grid. Remove gfs.tCCz.goessimpgrb2.1p00.fFFF and 
                                                        replace with gfs.tCCz.goessimpgrb2.0p25.fFFF 
                                                   <li> Remove WAFS blended product at 1.25 deg: WAFS_blended_YYYYMMDDHHfFF.grib2
                                                   <li> Remove Wave Products with replacements where noted:
                                                        <ul>
                                                          <li> All products from legacy grids: akw, enp, wna, nww3
                                                          <li> All 4-arcmin grib2 data files: ak_4m, at_4m, wc_4m
                                                          <li> Binary forcing files (icean_5m, gfs_30m, aoc_15m)
                                                          <li> CSV bulletins (csbull)
                                                          <li> multi_1.glo_30m.tCCz.fFFF.grib2 removed, replaced by  
                                                              <ul>
                                                                <li> gdaswave.tCCz.global.0p16.fFFF.grib2,     
                                                                <li> gfswave.tCCz.global.0p16.fFFF.grib2, 
                                                                <li> gdaswave.tCCz.gsouth.0p25.fFFF.grib2, and 
                                                                <li> ggfswave.tCCz.gsouth.0p25.fFFF.grib2
                                                              </ul>
                                                          <li> multi_1.at_10m.tCCz.f???.grib2 removed, replaced by gdaswave.tCCz.atlocn.0p16.fFFF.grib2 
                                                               and gfswave.tCCz.atlocn.0p16.fFFF.grib2
                                                          <li> multi_1.wc_10m.tCCz.f???.grib2 removed, replaced by gdaswave.tCCz.wcoast.0p16.fFFF.grib2 
                                                               and gfswave.tCCz.wcoast.0p16.fFFF.grib2
                                                          <li> multi_1.ep_10m.tCCz.f???.grib2 removed, replaced by gdaswave.tCCz.epacif.0p16.fFFF.grib2 
                                                               and gfswave.tCCz.epacif.0p16.fFFF.grib2
                                                          <li> multi_1.ak_10m.tCCz.fFFF.grib2 removed, replaced by gdaswave.tCCz.arctic.9km.fFFF.grib2 
                                                               and gfswave.tCCz.arctic.9km.fFFF.grib2
                                                          <li> multi_1.glo_30mext.tCCz.fFFF.grib2 removed, replaced by gdaswave.tCCz.global.0p25.fFFF.grib2 
                                                               and gfswave.tCCz.global.0p25.fFFF.grib2 
                                                       </ul>
                                                    </ul>


						<p><span style="font-family: courier new;">9) Product Timing and Volume Changes </span></p>
						<ul>
                                                   <li> Increase in data volume of the pgrb2 files by approximately 55% per file.
                                                   <li> Increase in data volume of sflux files by approximately 29%.
                                                   <li> Increase in data volume of pgrbfull files by approximately 32%
                                                   <li> Decrease data volume of pgrb2b files by approximately 5%
                                                   <li> Increase data volume of each bufr station from 100kb to 190kb; 
                                                        Increase AWIPS collective files size by about 90%.
                                                   <li> Delay in the delivery of the GFS atmos pgrb2 output for all resolutions, 
                                                        starting at 8 minutes for forecast hour 000 and growing to 11 minutes for forecast hour 384
                                                   <li> Delay in the delivery of GDAS atmos pgrb2 output by up to 26 minutes
                                                   <li> Delay in the delivery of GDAS ensemble (ENKF) atmos output 19 to 23 minutes
                                                   <li> Delay in the delivery of Synthetic GOES products gfs.tHHz.goessimpgrb2.0p25.fFFF files by up to 14 minutes
                                                   <li> Delay in the delivery of WAFS product 
                                                        gfs.tHHz.wafs_grb45fFF.grib2 by 21 minutes
                                                   <li> Delay in the delivery of gfs.tCCz.wafs_0p25.fFFF.grib2 by up to 21 minutes, 
                                                        which replaces the GTG turbulence product gfs.tCCz.gtg.0p25.fFFF.grib2
                                                   <li> Delay in the delivery of WAFS wafsgfs_L_tCCz_intdskFF.grib2 and wafsgfs_P_tCCz_intdskFF.grib2
                                                   <li> Delay in the delivery of BUFR sounding products by up to 8 minutes
                                                   <li> Delay in the delivery of the wave spectra and bulletin files (gfswave.tHHz.spec_tar.gz, 
                                                        gfswave.tHHz.bull_tar, gfswave.tHHz.cbull_tar) by up to 85 minutes due to the increase 
                                                        in wave forecast from 180 to 384 hours. 
						</ul>

						<p><span style="font-family: courier new;">10) Removal of products from NOAAPort/SBN  </span></p>
						<ul>
                                                  <li> 5 wave height (5WAVH) legacy variable from AWIPS products: 
                                                       20km grids (CONUS, Alaska, Puerto Rico, Pacific region) and LAT/LON 1.0 degree grid
                                                  <li> U and V winds and temperature in wintemv legacy bulletin format for select levels: 
                                                       850mb, 700mb, 500mb, 400mb, 300mb,250mb, 200mb, 150mb, 100mb
                                                  <li> Ship information in navybull legacy bulletin
                                                  <li> U and V winds, temperature, height, relative humidity in gridbuls legacy bulletin
                                                  <li> Gridded wind-waves from AWIPS products including Alaska 10-arcmin, Alaska 4-arcmin, 
                                                       Atlantic 4-arcmin and West Coast 4-arcmin. The Alaska grids will be replaced by the Arctic 9km grid.
                                                  <li> Gridded wave steepness (wstp) AWIPS products for all domains.
                                                  <li> Legacy NWW3 grids in grib1 format
                                                  <li> All WMO headers proposed for removal are listed <a href="https://www.nco.ncep.noaa.gov/pmb/changes/gfsv16_removal_grids.php">here<a>.
						</ul>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<p><br>
_________________________________________________________________________________________________________________<br>
<br>
&nbsp;</p>

<h1><u>Previous Implementations:</u></h1>

<p>&nbsp;</p>


<table>
	<tbody>
		<tr>
			<td width="100">
			<h2><u>Date</u></h2>
			</td>
			<td>
			<h2><u>Title</u></h2>
			</td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#e5e4e2"><b>Q3FY19</b></td>
			<td valign="top" bgcolor="#e5e4e2"><b><a href="javascript:void();"><font color="#008000">GFS v15.1</font></a> - implementated on <font color="#008000">June 12th, 2019 12 UTC</font></b>
			<table id="div7">
				<tbody>
					<tr>
						<td>
						<div><br>
						<span style="font-family: courier new;">On June 12, 2019, beginning with the 1200 Coordinated Universal Time (UTC) run, the National Centers for Environmental Prediction (NCEP) will upgrade the GFS Analysis and Forecast System as follows:</span>
						<ul>
							<li><span style="font-family: courier new;">Changes to the model components (new dynamic core) </span></li>
							<li><span style="font-family: courier new;">Changes to the data assimilation</span></li>
							<li><span style="font-family: courier new;">Changes to the post-processing</span></li>
							<li><span style="font-family: courier new;">Changes to output products</span></li>
						</ul>
						<span style="font-family: courier new;"> 1) Changes to the Global Forecast System Forecast Model<br>
						<br>
						NOAA/NWS selected the finite volume cubed-sphere (FV3) dynamical core as the Next Generation Global Prediction System (NGGPS). The FV3 was developed by the Geophysical Fluid Dynamics Laboratory (GFDL) under NOAA's Office of Atmospheric Research (OAR). The prevous operational GFS, which has a spectral dynamical core, will be upgraded with the FV3 dynamical core and improved physics parameterizations.<br>
						GFS version 15.1 maintains a horizontal resolution of 13 km, and has 64 levels in the vertical extending up to 0.2 hPa. It uses the same physics package as the current operational GFS except for: </span>

						<ul>
							<li><span style="font-family: courier new;">The replacement of Zhao-Carr microphysics with the more advanced GFDL microphysics </span></li>
							<li><span style="font-family: courier new;">An updated parameterization of ozone photochemistry with additional production and loss terms </span></li>
							<li><span style="font-family: courier new;">A newly introduced parameterization of middle atmospheric water vapor photochemistry </span></li>
							<li><span style="font-family: courier new;">A revised bare soil evaporation scheme, e) a modified convective parameterization scheme to reduce excessive cloud top cooling. </span></li>
						</ul>

						<p><span style="font-family: courier new;">EMC conducted 3-years of retrospective experiments, including the real-time parallel, covering the past three and half years for a comprehensive evaluation of the FV3GFS implementation. It shows equal or improved forecast skills in many areas, especially for 500-hPa height anomaly correlations, precipitation diurnal cycle and ETS score over the CONUS, stratospheric ozone and water vapor, and hurricane intensity over all basins.<br>
						<br>
						2) Changes to Data Assimilation </span></p>

						<ul>
							<li><span style="font-family: courier new;">Add Infrared Atmospheric Sounding Interferometer (IASI) moisture channels </span></li>
							<li><span style="font-family: courier new;">Add Advanced Technology Microwave Sounder (ATMS) all-sky radiances </span></li>
							<li><span style="font-family: courier new;">Add Megha-Tropiques SAPHIR data </span></li>
							<li><span style="font-family: courier new;">Add Advanced Scatterometer (ASCAT) data from MetOp-B </span></li>
							<li><span style="font-family: courier new;">Add Meteosat-11 SEVIRI channels 5 and 6 </span></li>
							<li><span style="font-family: courier new;">Add NPP OMPS profile and total column ozone </span></li>
							<li><span style="font-family: courier new;">Monitor NOAA-19 SBUV/2, Metop-C AMSUA and MHS, GOES-17 AMVs </span></li>
							<li><span style="font-family: courier new;">Add ability to read drifting and moored buoy data </span></li>
							<li><span style="font-family: courier new;">Update quality control for GOES atmospheric motion vector (AMV) winds </span></li>
							<li><span style="font-family: courier new;">Upgrade the use of Cross-Track Infrared Sounder (CrIS) radiances </span></li>
							<li><span style="font-family: courier new;">Upgrade specific humidity perturbation and statistics physics tendency perturbation with new parameter settings in ensemble forecast. Statistical kinetic energy backscattering perturbation is excluded </span></li>
							<li><span style="font-family: courier new;">Remove digital filter and storm relocation </span></li>
							<li><span style="font-family: courier new;">Increase horizontal resolution of the ensemble part of the hybrid data assimilation from 35 km to 25 km </span></li>
							<li><span style="font-family: courier new;">Update the Near Sea Surface Temperature scheme to a) apply Sea Surface Temperature climatology tendency to the foundation temperature and, b) reduce background error correlation length from 450~800 km down to 100 km. </span></li>
						</ul>

						<p><span style="font-family: courier new;">3) Changes to directory structures on the NCEP Web services<br>
						Major change to the GFS, GDAS and EnKF sub-directory structure: </span></p>

						<ul>
							<li><span style="font-family: courier new;">gfs.YYYYMMDDCC -&gt; gfs.YYYYMMDD/CC </span></li>
							<li><span style="font-family: courier new;">gdas.YYYYMMDDCC -&gt; gdas.YYYYMMDD/CC </span></li>
							<li><span style="font-family: courier new;">enkf.YYYYMMDD/CC -&gt; enkfgdas.YYYYMMDD/CC </span></li>
						</ul>
						<span style="font-family: courier new;">where YYYYMMDD is year, month, and day and CC is cycle.<br>
						The EnKF sub-directory structure is changing where each member is a unique directory. enkf.YYYYMMDD/CC/FILE -&gt; enkfgdas.YYYYMMDD/CC/memXXX/FILE<br>
						Where XXX is the member from 001, 002, ...080.<br>
						<br>
						4) Changes to the output file names on the NCEP Web services </span>

						<ul>
							<li><span style="font-family: courier new;">The EnKF files will no longer include memXXX in the file name, that information will now be obtained from the sub-directory. gdas.tCCz.sfcf009.memXXX.nemsio -&gt; memXXX/gdas.tCCz.sfcf009.nemsio </span></li>
							<li><span style="font-family: courier new;">The Surface Flux (sflux) file name will change to include a leading "0" for forecast hours below 100, which will match all other file naming structures. Name changes are as follows: </span></li>
							<li><span style="font-family: courier new;">gfs.tCCz.sfluxgrbfFF.grib2 -&gt; gfs.tCCz.sfluxgrbfFFF </span></li>
							<li><span style="font-family: courier new;">gdas.tCCz.sfluxgrbfFF.grib2 -&gt; gdas.tCCz.sfluxgrbfFFF Where FF and FFF are the two and three digit forecast hours. </span></li>
							<li><span style="font-family: courier new;">The GDAS near sea-surface temperature analysis nemsio file (gdas.tCCz.nstanl.nemsio) will be merged into the surface analysis nemsio file (gdas.tCCz.sfcanl.nemsio). </span></li>
						</ul>

						<p><span style="font-family: courier new;">5) Changes to Variables on the NCEP Web services </span></p>

						<ul>
							<li><span style="font-family: courier new;">Time averaged and accumulated max/min variables will be removed from surface flux (sflux) files at forecast hour 000, as these fields do not have physical meaning at this time step. </span></li>
							<li><span style="font-family: courier new;">The sflux files will have additional variables for forecast 000 only. These variables already exist in later forecast hours. </span></li>
							<li><span style="font-family: courier new;">These pressure GRIB (pgrb) files will have both variable and level additions. </span>
							<ul type="a">
								<li><span style="font-family: courier new;">gfs.tCCz.pgrb2.1p00.fFFF </span></li>
								<li><span style="font-family: courier new;">gfs.tCCz.pgrb2.0p50.fFFF </span></li>
								<li><span style="font-family: courier new;">gfs.tCCz.pgrb2.0p25.fFFF </span></li>
								<li><span style="font-family: courier new;">gfs.tCCz.pgrb2b.0p50.fFFF </span></li>
								<li><span style="font-family: courier new;">gfs.tCCz.pgrb2b.0p25.fFFF </span></li>
								<li><span style="font-family: courier new;">gfs.tCCz.pgrb2b.1p00.fFFF&nbsp;</span><span style="display: none;">&nbsp;</span></li>
							</ul>
							</li>
							<li><span style="font-family: courier new;">The following changes will be made to GFS station BUFR soundings: </span>
							<ul>
								<li><span style="font-family: courier new;">Only non-hydrostatic vertical velocity VVEL (cm/s) will be included. Hydrostatic vertical velocity OMEGA (Pa/s) will be removed. </span></li>
								<li><span style="font-family: courier new;">A new bufr sounding station will be added (999390 40.19N, 113.47W DGWY 11 Dugway Prov Grd Ld 1296). </span></li>
								<li><span style="font-family: courier new;">The elevation at Station (488100 22.82N 104.97E 11 HA GIANG VIETNAM 117) will be changed from 10 m to 117 m. </span></li>
							</ul>
							</li>
						</ul>

						<p><span style="font-family: courier new;">6) Product and File Additions to NCEP Web Services<br>
						NCEP wants to highlight two potentially impactful changes to the vertical velocity (VVEL) and accumulated precipitation (APCP) variables. To keep in line with the direction of the NCEP modeling suite unification these variables are changing. In order to provide users with enough lead time, both the legacy and new variables will be included in GFS V15. We encourage users to migrate to the new variables described below. In the near future, the legacy products will be removed. </span></p>

						<ul>
							<li><span style="font-family: courier new;">A second vertical velocity field will be included in the output files and written out by the model as DZDT (m/s). The FV3 GFS treats DZDT as a prognostic variable. The vertical velocity VVEL (pascal/s) found in the current operational product is now derived from DZDT using the hydrostatic approximation. </span></li>
							<li><span style="font-family: courier new;">New total precipitation and convective precipitation, with continuous accumulation, will be added to the output. Examples of the new variables: </span>
							<ul>
								<li><span style="font-family: courier new;">APCP:surface:0-10 day acc fcst </span></li>
								<li><span style="font-family: courier new;">ACPCP:surface:0-10 day acc fcst </span></li>
							</ul>
							<span style="font-family: courier new;"> </span></li>
							<li><span style="font-family: courier new;">The following output files will have increased temporal resolution from 12-hly to 3-hly after forecast hour 240 (FFF=forecast hour greater than 240): </span>
							<ul>
								<li><span style="font-family: courier new;">gfs.tCCz.pgrb2.1p00.fFFF </span></li>
								<li><span style="font-family: courier new;">gfs.tCCz.pgrb2.0p50.fFFF </span></li>
								<li><span style="font-family: courier new;">gfs.tCCz.pgrb2.0p25.fFFF </span></li>
								<li><span style="font-family: courier new;">gfs.tCCz.pgrb2b.0p50.fFFF </span></li>
								<li><span style="font-family: courier new;">gfs.tCCz.pgrb2b.0p25.fFFF </span></li>
								<li><span style="font-family: courier new;">gfs.tCCz.pgrb2b.1p00.fFFF </span></li>
								<li><span style="font-family: courier new;">gfs.tCCz.sfluxgrbfFFF.grib2 </span></li>
							</ul>
							<span style="font-family: courier new;"> </span></li>
							<li><span style="font-family: courier new;">A new cyclone tracker file will be added to the NCEP Websites. It contains three parameters for depicting cyclone phases based on Hart (2003), where parameter B for cyclone thermal symmetry and parameters -Vt(lower) and -Vt(upper) for cyclone thermal winds. File will be located under directory structure: </span>
							<ul>
								<li><span style="font-family: courier new;">com/ens_tracker/prod/gfs.YYYYMMDD/CC/tctrack, with file name: avnop.tCCz.cyclone.trackatcfunix </span></li>
							</ul>
							</li>
						</ul>

						<p><span style="font-family: courier new;">7) Product Removal from NWS Web Services, with Substitutes on the NCEP Web Services: </span></p>

						<ul>
							<li><span style="font-family: courier new;">The 0.5 degree files labeled for the National Polar-orbiting Operational Environmental Satellite System (NPOESS) will be removed. Users can find replacement files on the NCEP Websites. File names that will be removed match: fh.0FFF_tl.press_gr.0p5deg_pt.npoess. Replacement files on the NCEP Web services: </span>

							<ul>
								<li><span style="font-family: courier new;">gfs/prod/gfs.YYYYMMDD/CC/gfs.tCCz.pgrb2.0p5.fFFF </span></li>
								<li><span style="font-family: courier new;">gfs/prod/gfs.YYYYMMDD/CC/gfs.tCCz.pgrb2b.0p5.fFFF </span></li>
							</ul>
							<span style="font-family: courier new;"> </span></li>
							<li><span style="font-family: courier new;">The GFS NEMSIO files will be removed from NWS Web services. File names that will be removed: </span>
							<ul>
								<li><span style="font-family: courier new;">ST.expr/MT.gfs_CY.CC/RD.YYYYMMDD/PT.bin_DF.of fh.anal_tl.sigma </span></li>
								<li><span style="font-family: courier new;">ST.expr/MT.gfs_CY.CC/RD.YYYYMMDD/PT.bin_DF.of fh.anal_tl.sfsig </span></li>
								<li><span style="font-family: courier new;">Exact replacement files on the NCEP Web services: </span>
								<ul>
									<li><span style="font-family: courier new;">gfs.YYYYMMDD/CC/gfs.tCCz.atmanl.nemsio </span></li>
									<li><span style="font-family: courier new;">gfs.YYYYMMMDD/CC/gfs.tCCz.sfcanl.nemsio </span></li>
								</ul>
								<span style="font-family: courier new;"> </span></li>
							</ul>
							<span style="font-family: courier new;"> </span></li>
							<li><span style="font-family: courier new;">The cyclone tracker file on the NWS Website will be moved to the NCEP Website. This file provides the basic hurricane track information such as location and intensity. The names that will be removed: avn.tCCz.cyclone.trackatcfunix. Exact file replacement path on NCEP Web services: ens_tracker/prod/gfs.YYYYMMDD/CC/tctrack/ </span></li>
						</ul>

						<p><span style="font-family: courier new;">8) Product Removal from NCEP Web Services </span></p>

						<ul>
							<li><span style="font-family: courier new;">The ENKF atmospheric analysis for each ensemble member will be removed from the NCEP Web services with file names like: </span>

							<ul type="a">
								<li><span style="font-family: courier new;">gdas.tCCz.ratmanl.memFFF.nemsio </span></li>
								<li><span style="font-family: courier new;">gdas.tCCz.atmf006s.memFFF.nemsio </span></li>
								<li><span style="font-family: courier new;">gdas.tCCz.atmf009s.memFFF.nemsio </span></li>
							</ul>
							<span style="font-family: courier new;"> </span></li>
						</ul>

						<p><span style="font-family: courier new;">9) Product Timing and Volume Changes </span></p>

						<ul>
							<li><span style="font-family: courier new;">The data volume per file will increase for most output. This includes about 50% increase in the "pgrb2" and "pgrb2b" files and up to a 200% increase in the "nemsio" files. </span></li>
							<li><span style="font-family: courier new;">The previous operational GFS V14 ran at a coarser horizontal resolution beyond forecast hour 240, while GFS V15 run at the same high resolution throughout the entire forecast length up to 384 hours. As a result, the delivery of all GFS products after 240 hours of forecast will be delayed. The last products at forecast hour 384 will be delayed by up to 18 minutes. </span></li>
							<li><span style="font-family: courier new;">Due to restructuring of some model processes, the following timing changes will also take place on the NCEP Web services: </span>
							<ul>
								<li><span style="font-family: courier new;">These files will be up to 80 minutes early: </span>
								<ul type="a">
									<li><span style="font-family: courier new;">gfs.tCCz.goessimpgrb2.1p00.fFFF </span></li>
									<li><span style="font-family: courier new;">gfs.tCCz.goessimpgrb2fFFF.grd221 </span></li>
								</ul>
								<span style="font-family: courier new;"> </span></li>
								<li><span style="font-family: courier new;">These files will be up to 15 minutes early: </span>
								<ul type="a">
									<li><span style="font-family: courier new;">gdas.tCCz.pgrb2.0p25.fFFF </span></li>
									<li><span style="font-family: courier new;">gdas.tCCz.pgrb2.1p00.fFFF </span></li>
									<li><span style="font-family: courier new;">memMMM/gdas.tCCz.sfcfFFF.nemsio for some members </span></li>
									<li><span style="font-family: courier new;">gdas.tCCz.atmfFFF.nemsio </span></li>
									<li><span style="font-family: courier new;">gdas.tCCz.sfcfFFF.nemsio </span></li>
									<li><span style="font-family: courier new;">gdas.tCCz.sfluxgrbfFFF.grib2 </span></li>
								</ul>
								<span style="font-family: courier new;"> </span></li>
							</ul>
							<span style="font-family: courier new;"> </span></li>
						</ul>

						<p><span style="font-family: courier new;">10) Changes to NOAAPORT/SBN </span></p>

						<ul>
							<li><span style="font-family: courier new;">The 20km CONUS grid will be changed to use Grid-relative winds to interpolate (U and V) winds for map projection Lambert-conformal. The resolution and component flags will be changed from 48 to 56, and the latitude of the South Pole will be changed from 0 to 90 degree south (-90.000) in Grid Definition Template section (PDT 3.30). </span></li>
							<li><span style="font-family: courier new;">Additional variables will be created for vertical velocity (DZDT) and continuous precipitation (e.g., APCP, ACPCP). The WMO headers will be the same respectively, but will have different Product Definition Template (PDT) values. </span></li>
							<li><span style="font-family: courier new;">NCEP plans to remove the legacy variables (VVEL and 6 hourly accumulated precipitation, e.g, APCP, ACPCP) as early as the 2021 upgrade. NCEP is providing an overlap period for users to migrate to the new variables with the GFS v15 implementation. </span></li>
							<li><span style="font-family: courier new;">In 2014, NCEP added higher resolution grids to NOAAPORT to replace the legacy lower resolution. Please see <a href="https://www.weather.gov/media/notification/tins/tin14-54gfs_noaaport.pdf%22"><font color="#0066cc"> this notice</font></a> for WMO information on the new grids. As advertised, the following products will now be removed from NOAAPORT/SBN: </span>
							<table border="1">
								<tbody>
									<tr>
										<th><span style="font-family: courier new;">Grid</span></th>
										<th><span style="font-family: courier new;">Resolution</span></th>
										<th><span style="font-family: courier new;">Area</span></th>
										<th><span style="font-family: courier new;">Map Projection</span></th>
									</tr>
									<tr>
										<td><span style="font-family: courier new;">#199</span></td>
										<td><span style="font-family: courier new;">2.5 km</span></td>
										<td><span style="font-family: courier new;">Guam</span></td>
										<td><span style="font-family: courier new;">Mercator</span></td>
									</tr>
									<tr>
										<td><span style="font-family: courier new;">#225</span></td>
										<td><span style="font-family: courier new;">80 km</span></td>
										<td><span style="font-family: courier new;">Hawaii</span></td>
										<td><span style="font-family: courier new;">Mercator</span></td>
									</tr>
									<tr>
										<td><span style="font-family: courier new;">#160</span></td>
										<td><span style="font-family: courier new;">47 km</span></td>
										<td><span style="font-family: courier new;">Alaska</span></td>
										<td><span style="font-family: courier new;">Polar Stereographic</span></td>
									</tr>
									<tr>
										<td><span style="font-family: courier new;">#161</span></td>
										<td><span style="font-family: courier new;">0.5 km</span></td>
										<td><span style="font-family: courier new;">Puerto Rico</span></td>
										<td><span style="font-family: courier new;">Lat/Lon</span></td>
									</tr>
									<tr>
										<td><span style="font-family: courier new;">#213</span></td>
										<td><span style="font-family: courier new;">95 km</span></td>
										<td><span style="font-family: courier new;">Alaska/td&gt; </span></td>
										<td><span style="font-family: courier new;">Polar Stereographic</span></td>
									</tr>
									<tr>
										<td><span style="font-family: courier new;">#254</span></td>
										<td><span style="font-family: courier new;">40 km</span></td>
										<td><span style="font-family: courier new;">Pacific/td&gt; </span></td>
										<td><span style="font-family: courier new;">Mercator</span></td>
									</tr>
								</tbody>
							</table>
							<span style="font-family: courier new;"> </span></li>
							<li><span style="font-family: courier new;">The WMO headers for grid 160, 161, 213, 225 and 254 are listed <a href="https://www.nco.ncep.noaa.gov/pmb/changes/gfs_removal_grids.shtml"><font color="#0066cc"> here</font></a>. </span></li>
							<li><span style="font-family: courier new;">Users of grid 199 (Guam) output are encouraged to use HiresW Guam products as a replacement available on the NCEP Website under "hiresw." A full list of grid 199 WMO headers being removed can be found <a href="https://www.nco.ncep.noaa.gov/pmb/codes/GRIB2/wmo_headers_for_GUAM_199/wmo_headers_awips_guam_grid_199"><font color="#0066cc"> here</font></a>. </span></li>
						</ul>

						<p><span style="font-family: courier new;">For questions regarding these changes, please contact:<br>
						<br>
						Vijay Tallapragada<br>
						NCEP/Global Climate and Weather Modeling Branch<br>
						College Park, MD<br>
						301-683-3672<br>
						Vijay.Tallapragada@noaa.gov<br>
						<br>
						For questions regarding the data flow aspects, please contact:<br>
						<br>
						Carissa Klemmer<br>
						NCEP/NCO Dataflow Team Lead<br>
						College Park, MD<br>
						301-683-0567<br>
						ncep.list.pmb-dataflow@noaa.gov<br>
						<br>
						NWS National Technical Implementation Notices are online at:<br>
						<br>
						http://www.weather.gov/om/notif.htm</span></p>
						</div>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<table>
	<tbody>
		<tr>
			<td width="100">
			<h2><u>Date</u></h2>
			</td>
			<td>
			<h2><u>Title</u></h2>
			</td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#e5e4e2"><b>Q3FY17</b></td>
			<td valign="top" bgcolor="#e5e4e2"><b><a href="javascript:void();"><font color="#008000">GSM v14.0.0</font></a> - implementation tentatively scheduled for <font color="#008000">July 19th, 2017 12 UTC</font></b>
			<table id="div7">
				<tbody>
					<tr>
						<td>
						<div><br>
						<span style="font-family: courier new;">Effective on or about Tuesday June 27, 2017, beginning with the 1200 Coordinated Universal Time (UTC) run, the National Centers for Environmental Prediction (NCEP) will upgrade the GFS Analysis and Forecast System as follows:</span><br>
						&nbsp;
						<ul>
							<li><span style="font-family: courier new;">Changes to the model components</span></li>
							<li><span style="font-family: courier new;">Changes to the data assimilation and tropical storm relocation components</span></li>
							<li><span style="font-family: courier new;">Changes to the post-processing</span></li>
							<li><span style="font-family: courier new;">Changes to output products</span></li>
						</ul>
						<br>
						<span style="font-family: courier new;">1) Changes to the Global Forecast System Global Spectral Model (GSM) components</span><br>
						&nbsp;
						<ul>
							<li><span style="font-family: courier new;">Implement GSM source code in NOAA Environmental Modeling System (NEMS) framework</span></li>
							<li><span style="font-family: courier new;">Upgrade to asynchronous quilting for scalable and efficient write component in NEMS GSM, and replace spectral history file output (sigma files) with new nemsio binary files on model native grid. Documentation of nemsio format including data structure, interface, how to open, read, write, and MPI I/O support are at https://www.emc.ncep.noaa.gov/NEMS/nemsio.php and nemsio library at https://www.nco.ncep.noaa.gov/pmb/codes/nwprod/lib/nemsio </span></li>
							<li><span style="font-family: courier new;">Implement Near Surface Sea Temperature (NSST) to replace Real-Time Global SST (RTGSST) to provide more realistic ocean boundary conditions</span></li>
							<li><span style="font-family: courier new;">Upgrade deep &amp; shallow convection schemes with scale- and aerosol-aware features along with convective cloudiness enhancement</span></li>
							<li><span style="font-family: courier new;">Modify Rayleigh damping to improve temperature and wind forecasts in the upper stratosphere</span></li>
							<li><span style="font-family: courier new;">Upgrade the land surface model to increase ground heat flux under deep snow; and unify snow cover fraction and snow albedo </span></li>
							<li><span style="font-family: courier new;">Use new high-resolution MODIS-based snow-free albedo, maximum snow albedo, soil type and vegetation type</span></li>
							<li><span style="font-family: courier new;">Upgrade surface layer parameterization scheme to modify the roughness-length formulation and introduce a stability parameter constraint in the Monin-Obukov similarity theory to prevent the land-atmosphere system from decoupling.</span></li>
						</ul>
						<br>
						<span style="font-family: courier new;">2) Changes to the Global Data Assimilation System (GDAS) and Tropical Storm Relocation:</span><br>
						&nbsp;
						<ul>
							<li><span style="font-family: courier new;">Implement Near Sea-Surface Temperature (NSST) Analysis</span></li>
							<li><span style="font-family: courier new;">Implement CrIS full resolution data assimilation capability </span></li>
							<li><span style="font-family: courier new;">Implement readiness for new Geostationary Operational Environmental Satellite (GOES-16), Joint Polar Satellite System (JPSS-2) and COSMIC-2 (Constellation Observing System for Meteorology, Ionosphere and Climate) data assimilation capability</span></li>
							<li><span style="font-family: courier new;">Extend Regional Advanced Television Infrared Observation Satellite (TIROS) Operational Vertical Sounder (ATOVS) Retransmission Services (RARS) and Direct Broadcast Network (DBNet) capability</span></li>
							<li><span style="font-family: courier new;">Implement bug fix to cloud water increment in Gridpoint Statistical Interpolation (GSI)</span></li>
							<li><span style="font-family: courier new;">Upgrade land surface type specification in Community Radiative Transfer Model (CRTM)</span></li>
							<li><span style="font-family: courier new;">Update data monitoring for Megha-tropiques Sounder for Probing Vertical Profiles of Humidity (SAPHIR) and Global Precipitation Measurement (GPM) Microwave Imager (GMI) radiances.</span></li>
							<li><span style="font-family: courier new;">Assimilate Visible Infrared Imaging Radiometer Suite (VIIRS) Atmospheric Motion Vectors (AMVs) and implement log-normal wind quality control for AMVs</span></li>
							<li><span style="font-family: courier new;">Assimilate Geostationary Operational Environmental Satellite system (GOES) clear-air water vapor winds</span></li>
							<li><span style="font-family: courier new;">Assimilate additional global navigation satellite system (GNSS) Radio Occultation (RO) observations.</span></li>
							<li><span style="font-family: courier new;">Modify pressure and hybrid coordinates transformation during the storm relocation.</span></li>
							<li><span style="font-family: courier new;">Change relocation of the vorticity and divergence fields to the relocation of u,v wind components</span></li>
							<li><span style="font-family: courier new;">Remove bogus Tropical Storm/Hurricane data for use in Data Assimilation. </span></li>
							<li><span style="font-family: courier new;">Assimilate Global Hawk dropsonde data when available</span></li>
							<li><span style="font-family: courier new;">Upgrade data assimilation monitoring package</span></li>
						</ul>
						<br>
						<span style="font-family: courier new;">3) Changes to the post-processing</span><br>
						&nbsp;
						<ul>
							<li><span style="font-family: courier new;">Upgrade Post-Processing software to use new nemsio model output</span></li>
							<li><span style="font-family: courier new;">Implement continuity equation to derive omega on grid space for new nems model output only</span></li>
							<li><span style="font-family: courier new;">Modify interpolation procedure for all categorical fields including land mask, icing severity and precipitation types products to use nearest neighbor interpolation;</span></li>
							<li><span style="font-family: courier new;">Generate hourly GFS Flux files directly by the post processor instead of GFS model</span></li>
							<li><span style="font-family: courier new;">Visibility and second land mask are being added to pgrb2 files for all resolutions.</span></li>
							<li><span style="font-family: courier new;">2p5 degree resolution pgrb files will no longer be available on the public servers.</span></li>
							<li><span style="font-family: courier new;">Remove category rain and correct Grib2 IDs for soil temperature and total column cloud fraction in GFS flux files.</span></li>
							<li><span style="font-family: courier new;">Time label for SUNSD in GFS Flux files will be changed to instantaneous to be consistent with time label in GFS pressure Grib files.</span></li>
							<li><span style="font-family: courier new;">The packing for GFS Flux files have been changed to complex packing to be consistent with packing method of GFS pressure Grib files.</span></li>
							<li><span style="font-family: courier new;">Change interpolation method for CTP (In-Cloud Turbulence Potential) and CB cover (Horizontal Extent of Cumulonimbus) from 'linear' to 'nearest neighbor' to avoid averaging their own specific negative value with normal values when doing grid conversion</span></li>
						</ul>
						<br>
						<span style="font-family: courier new;">4) Changes to output products<br>
						<br>
						With this upgrade the following changes will be noted on the NWS web services:</span>

						<ul>
							<li><span style="font-family: courier new;">ftp://ftp.ncep.noaa.gov/pub/data/nccf/com/gfs/prod</span></li>
							<li><span style="font-family: courier new;">https://www.ftp.ncep.noaa.gov/data/nccf/com/gfs/prod</span></li>
							<li><span style="font-family: courier new;">https://nomads.ncep.noaa.gov</span></li>
							<li><span style="font-family: courier new;">ftp://tgftp.nws.noaa.gov/SL.us008001/ST.opnl/</span></li>
							<li><span style="font-family: courier new;">https://weather.noaa.gov/pub/SL.us008001/ST.opnl/</span></li>
						</ul>
						&nbsp;

						<ul>
							<li><span style="font-family: courier new;">Increase the frequency of station time-series BUFR data every hour to 120 hours, and then every 3 hours to 240 hours</span></li>
							<li><span style="font-family: courier new;">Modify the list of stations from 1919 to 2021 on NOAAPORT and NCEP servers, for which BUFR data are generated for the GFS. The changes will also modify the lists of stations in the GFS BUFR sounding collectives disseminated on NOAAPORT. For the full list please reference this page: https://docs.google.com/document/d/15exFN-0W36cS4rNULALyh_qTJcl8hBBTBZozdRxM_0s/edit#</span></li>
							<li><span style="font-family: courier new;">Correct a few errors in the original station list. Land/water designations were added for those stations that do not have the designations</span></li>
							<li><span style="font-family: courier new;">Change station bufr sound file name from bufr3.STN_ID.YYYYMMDDHH to bufr.STN_ID.YYYYMMDDHH</span></li>
							<li><span style="font-family: courier new;">Replace copygb2 by WGRIB2 in downstream products and change the basic angle of the initial production domain from 0 to -1 for all 0.25 degree; 0.5 degree; and 1.0 degree grib2 output; AWIPS 20km Puerto Rico grid; </span></li>
							<li><span style="font-family: courier new;">Replace copygb2 by WGRIB2 in all AWIPS products and correct the resolution and component flag from 8 to 48 for AWIPS 160 grid; AWIPS 20km CONUS grid; AWIPS 20km AK grid; AWIPS 20km Puerto Rico grid and AWIPS Grid 213 (National - CONUS - Double Resolution Polar Stereographic 95km)</span></li>
							<li><span style="font-family: courier new;">Add 925 mb for fields: HGT, TMP, VVEL, RH and U and V windows components to AWIPS Global Lat/Lon (1.0 deg) grid</span></li>
							<li><span style="font-family: courier new;">Replace copygb2 by WGRIB2 in all GEMPAK grids and correct the resolution and component flag from 8 to 48 and basic angle of the initial production domain from 0 to -1</span></li>
						</ul>
						<br>
						<span style="font-family: courier new;">List of file name changes:<br>
						<br>
						All files that had filename prefix "gdas1" will be renamed with filename prefix "gdas" (unless they are in the list of files to be discontinued).</span><br>
						&nbsp;
						<table border="1">
							<tbody>
								<tr>
									<td><span style="font-family: courier new;">Current Production File Name</span></td>
									<td><span style="font-family: courier new;">New Production File Name</span></td>
								</tr>
								<tr>
									<td><span style="font-family: courier new;">gfs.tCCz.sgesprep<br>
									gfs.tCCz.sgmHprep<br>
									gfs.tCCz.sgpHprep<br>
									gfs.tCCz.sanl<br>
									gfs.tCCz.sfcanl<br>
									gfs.tCCz.sfHH<br>
									gfs.tCCz.bfHH<br>
									gdas1.tCCz.sanl<br>
									gdas1.tCCz.sfcanl<br>
									gdas1.tCCz.abias<br>
									gdas1.tCCz.abias_pc<br>
									gdas1.tCCz.abias_air<br>
									gdas1.tCCz.radstat<br>
									gdas1.tCCz.sfHH<br>
									gdas1.tCCz.bfHH<br>
									gdas1.tCCz.pgrb2.1p00.anl<br>
									gdas1.tCCz.pgrb2.1p00.anl.idx<br>
									gdas1.tCCz.pgrb2.0p25.anl<br>
									gdas1.tCCz.pgrb2.0p25.anl.idx<br>
									gdas1.tCCz.pgrb2.1p00.fHHH<br>
									gdas1.tCCz.pgrb2.1p00.fHHH.idx<br>
									gdas1.tCCz.pgrb2.0p25.fHHH<br>
									gdas1.tCCz.pgrb2.0p25.fHHH.idx<br>
									gdas1.tCCz.sfluxgrbfHH.grib2<br>
									sfcanl_YYYYMMDDCC_ensmean<br>
									sfcanl_YYYYMMDDCC_memXXX<br>
									sfg_YYYYMMDDCC_fhrHH_memXXX<br>
									bfg_YYYYMMDDCC_fhrHH_memXXX<br>
									sfg_YYYYMMDDCC_fhrHH_ensmean<br>
									bfg_YYYYMMDDCC_fhrHH_ensmean<br>
									sfg_YYYYMMDDCC_fhrHHs_memXXX</span></td>
									<td><span style="font-family: courier new;">gfs.tCCz.atmges.nemsio<br>
									gfs.tCCz.atmgmH.nemsio<br>
									gfs.tCCz.atmgpH.nemsio<br>
									gfs.tCCz.atmanl.nemsio<br>
									gfs.tCCz.sfcanl.nemsio<br>
									gfs.tCCz.atmfHHH.nemsio<br>
									gfs.tCCz.sfcfHHH.nemsio<br>
									gdas.tCCz.atmanl.nemsio<br>
									gdas.tCCz.sfcanl.nemsio<br>
									gdas.tCCz.abias<br>
									gdas.tCCz.abias_pc<br>
									gdas.tCCz.abias_air<br>
									gdas.tCCz.radstat<br>
									gdas.tCCz.atmfHHH.nemsio<br>
									gdas.tCCz.sfcfHHH.nemsio<br>
									gdas.tCCz.pgrb2.1p00.anl<br>
									gdas.tCCz.pgrb2.1p00.anl.idx<br>
									gdas.tCCz.pgrb2.0p25.anl<br>
									gdas.tCCz.pgrb2.0p25.anl.idx<br>
									gdas.tCCz.pgrb2.1p00.fHHH<br>
									gdas.tCCz.pgrb2.1p00.fHHH.idx<br>
									gdas.tCCz.pgrb2.0p25.fHHH<br>
									gdas.tCCz.pgrb2.0p25.fHHH.idx<br>
									gdas.tCCz.sfluxgrbfHH.grib2<br>
									gdas.tCCz.sfcanl.ensmean.nemsio<br>
									gdas.tCCz.sfcanl.memXXX.nemsio<br>
									gdas.tCCz.atmfHHH.memXXX.nemsio<br>
									gdas.tCCz.sfcfHHH.memXXX.nemsio<br>
									gdas.tCCz.atmfHHH.ensmean.nemsio<br>
									gdas.tCCz.sfcfHHH.ensmean.nemsio<br>
									gdas.tCCz.atmfHHHs.memXXX.nemsio</span></td>
								</tr>
							</tbody>
						</table>
						<br>
						<span style="font-family: courier new;">List of files removed:<br>
						<br>
						The following surface analysis, bufr dump and prepbufr files will no longer be generated:</span>

						<ul>
							<li><span style="font-family: courier new;">gdas1.tCCz.*.tm00.bufr_d.unblok</span></li>
							<li><span style="font-family: courier new;">gdas1.tCCz.*.tm00.bufr_d.unblok.nr</span></li>
							<li><span style="font-family: courier new;">gfs.tCCz.prepbufr.unblok</span></li>
							<li><span style="font-family: courier new;">gfs.tCCz.prepbufr.unblok.nr</span></li>
							<li><span style="font-family: courier new;">gfs.tCCz.pgrb2.2p50.fHHH (where HHH is 000 to 384)</span></li>
							<li><span style="font-family: courier new;">gdas1.tCCz.prepbufr.unblok</span></li>
							<li><span style="font-family: courier new;">gdas1.tCCz.prepbufr.unblok.nr</span></li>
							<li><span style="font-family: courier new;">sfcanl_CDATE_ensmean</span></li>
							<li><span style="font-family: courier new;">sfcanl_CDATE_mem001~080</span></li>
						</ul>
						<br>
						<span style="font-family: courier new;">Files with the same content will continue to be available without the "unblok" filename qualifier (and with the change in prefix for gdas files). Eg, file gdas1.t00z.adpupa.tm00.bufr_d.unblok will be available as gdas.t00z.adpupa.tm00.bufr_d and file gfs.t00z.prepbufr.unblok.nr will be available as gfs.t00z.prepbufr.nr. There is one exception to the pattern in that gdas1.tCCz.sfcshp.tm00.bufr_d.unblok will be available as gdas.tCCz.sfcshp.tm00.bufr_d.nr.<br>
						<br>
						NCEP urges all users to ensure their decoders can handle changes in content order, changes in the scaling factor component within the product definition section (PDS) of the GRIB files, and volume changes. These elements may change with future NCEP model implementations. NCEP will make every attempt to alert users to these changes before implementation.<br>
						<br>
						For questions regarding these changes, please contact:<br>
						<br>
						Vijay Tallapragada<br>
						NCEP/Global Climate and Weather Modeling Branch<br>
						College Park, MD<br>
						301-683-3672<br>
						Vijay.Tallapragada@noaa.gov<br>
						<br>
						For questions regarding the data flow aspects, please contact:<br>
						<br>
						Carissa Klemmer<br>
						NCEP/NCO Dataflow Team Lead<br>
						College Park, MD<br>
						301-683-0567<br>
						ncep.list.pmb-dataflow@noaa.gov<br>
						<br>
						NWS National Technical Implementation Notices are online at:<br>
						<br>
						http://www.weather.gov/om/notif.htm</span><br>
						&nbsp;</div>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<p><br>
_________________________________________________________________________________________________________________<br>
&nbsp;</p>

<table>
	<tbody>
		<tr>
			<td width="100">
			<h2><u>Date</u></h2>
			</td>
			<td>
			<h2><u>Title</u></h2>
			</td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#e5e4e2"><b>Q3FY16</b></td>
			<td valign="top" bgcolor="#e5e4e2"><b><a href="javascript:void();"><font color="#008000">GSM v13.0.2</font></a> - implementation completed <font color="#008000">May 11th, 2016 12 UTC</font></b>
			<table id="div1">
				<tbody>
					<tr>
						<td>
						<div><br>
						<span style="font-family: courier new;">Effective on or about Tuesday May 11, 2016, beginning with the 1200 Coordinated Universal Time (UTC) run, the National Centers for</span><span style="font-family: courier new;"> Environmental Prediction (NCEP) will upgrade the GFS Analysis and Forecast System as follows:</span> <span style="font-family: courier new;">&nbsp; - Changes to the data assimilation components<br>
						&nbsp; - Changes to the model components<br>
						&nbsp; - Addition of hourly gridded output through 120 hours<br>
						&nbsp; - Addition of five layers in the upper stratosphere in gridded output<br>
						&nbsp; - Addition of new product fields<br>
						&nbsp; - Product removals</span><br>
						<br>
						Read full TIN: <a href="http://www.nws.noaa.gov/os/notification/tin16-11gfs_gdasaaa.htm"><span style="font-family: courier new;"><font color="#0066cc">http://www.nws.noaa.gov/os/notification/tin16-11gfs_gdasaaa.htm</font></span></a><br>
						<br>
						<strong><span style="font-family: courier new;">1) Changes to the Global Data Assimilation System (GDAS): </span></strong><br>
						<br>
						<span style="font-family: courier new;">- Upgrade the 3D Hybrid Ensemble-Variational to 4D Hybrid Ensemble-Variational Data Assimilation System 4D increments are constructed by figuring out best combination of</span><span style="font-family: courier new;"> 4D ensemble perturbations. The weights for ensemble members are</span><span style="font-family: courier new;"> kept constant throughout the assimilation window. The 4D-Hybrid uses 50 outer and 150 inner iterations with variational</span><span style="font-family: courier new;"> quality control turned on after 25 iterations. Tangent Linear Normal Mode Constraint (TLNMC) and Digital Filter Initialization (DFI) are used in the ensembles while additive error</span><span style="font-family: courier new;"> inflation is removed. Ozone cross covariances are in the 4D-Hybrid.&nbsp; Localization is recued to 50 percent in the troposphere</span><span style="font-family: courier new;"> and the weights for static and ensemble are kept at 12.5 percent and 87.5 percent respectively.<br>
						- Assimilate all sky Advanced Microwave Sounding Unit (AMSU-A) Radiances<br>
						- Assimilate Advanced Very High Resolution Radiometer (AVHRR) winds</span><span style="font-family: courier new;"> and monitor Visible Infrared Imaging Radiometer Suite (VIIRS) winds<br>
						- Implement Geostationary Operational Environmental Satellites R-series (GOES-R) data readability<br>
						- Update Community Radiative Transfer Model (CRTM) to v2.2.1 with</span><span style="font-family: courier new;"> bug fixes in wind direction, use of FAST Microwave Emissivity Models (FASTEM-6 and FASTEM-X) reflection correction for</span><span style="font-family: courier new;"> cloudy situations<br>
						- Improve bias correction for aircraft observations<br>
						- Modify relocation and storm tracking to allow hourly tropical cyclone</span><span style="font-family: courier new;"> relocation<br>
						- Modify thinning/weight in time for Atmospheric Motion Vectors (AMVs) and radiances<br>
						- Upgrade data assimilation monitoring package</span><br>
						<br>
						<strong><span style="font-family: courier new;">2) Model changes to the GFS Global Spectral Model and post-processing</span><span style="font-family: courier new;"> software:</span></strong><br>
						<br>
						<span style="font-family: courier new;">- Correct the land surface characteristics for grassland and cropland</span><span style="font-family: courier new;"> categories to reduce summertime warm and dry biases over</span><span style="font-family: courier new;"> Great Plains<br>
						- Upgrade convective gravity wave drag<br>
						- Upgrade tracer adjustment in the semi-Lagrangian dynamic core<br>
						- Upgrade the NCEP Unified Post Processing (UPP) software to v7.0<br>
						- Implement Global Current Icing Potential analysis (G-CIP) products</span><br>
						<br>
						<strong><span style="font-family: courier new;">3) Output product changes</span></strong><br>
						<br>
						<span style="font-family: courier new;">All operational products below can be found on any of following NCEP or NWS servers: </span>
						<p><span style="font-family: courier new;"><a href="http://weather.noaa.gov/pub/SL.us008001/ST.opnl/"><font color="#0066cc">ftp://ftp.ncep.noaa.gov/pub/data/nccf/com/gfs/prod</font><br>
						<font color="#0066cc">http://www.ftp.ncep.noaa.gov/data/nccf/com/gfs/prod<br>
						http://nomads.ncep.noaa.gov<br>
						ftp://tgftp.nws.noaa.gov/SL.us008001/ST.opnl/<br>
						http://weather.noaa.gov/pub/SL.us008001/ST.opnl/</font></a></span></p>

						<p><span style="font-family: courier new;">- Add new Global Forecast Icing Severity (G-FIS) icing severity parameter</span><span style="font-family: courier new;"> (ICSEV Icing Severity)</span></p>

						<p><span style="font-family: courier new;">&nbsp; gfs.tCCs.pgrb2.0p25.fFFF<br>
						&nbsp; gfs.tCCs.pgrb2.0p50.fFFF<br>
						&nbsp; gfs.tCCs.pgrb2.1p00.fFFF</span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp; Where CC is 00, 06, 12, 18<br>
						&nbsp;&nbsp;&nbsp; Where FFF is 000 to 384</span></p>

						<p><span style="font-family: courier new;">- Improve Global Forecast Icing Potential (ICIP) products</span></p>

						<p><span style="font-family: courier new;">&nbsp; WAFS_blended_YYYYMMDDCCfFF.grib2</span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp; Where FF is 06 to 36</span></p>

						<p><span style="font-family: courier new;">- Include hourly forecasts out to 120 hr</span></p>

						<p><span style="font-family: courier new;">&nbsp; gfs.tCCz.pgrb2.0p25.fFFF<br>
						&nbsp; gfs.tCCz.pgrb2b.0p25.fFFF</span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp; Where FFF is 000, 001, 002, 003, 004...120</span></p>

						<p><span style="font-family: courier new;">- Add grib filter and GDS/OpenDAP availabilty of the 2.5 deg hourly</span><span style="font-family: courier new;"> forecasts in NOMADS.</span></p>

						<p style="margin-left: 40px;"><span style="font-family: courier new;">- filter_gfs_0p25_1hr.pl (grib filter link)<br>
						- gfs_0p25_1hr (</span><span style="font-family: courier new;">OpenDAP</span>-alt link)</p>

						<p style="margin-left: 40px;"><span style="font-family: courier new;">At this time data will not be available for testing until it goes</span><span style="font-family: courier new;"> into operations.</span></p>

						<p><span style="font-family: courier new;">- Add five more vertical levels (7, 5, 3, 2, and 1 hPa) for the variables</span><span style="font-family: courier new;"> geopotential height (HGT), temperature (TMP), relative humidity</span><span style="font-family: courier new;"> (RH), U- and V- components of wind (UGRD and VGRD) and ozone</span><span style="font-family: courier new;"> mixing ratio (O3MR)</span></p>

						<p><span style="font-family: courier new;">&nbsp; gfs.tCCz.pgrb2.0p25.fFFF, gfs.tCCz.pgrb2b.0p25.fFFF<br>
						&nbsp; gfs.tCCz.pgrb2.0p50.fFFF, gfs.tCCz.pgrb2b.0p50.fFFF<br>
						&nbsp; gfs.tCCz.pgrb2.1p00.fFFF, gfs.tCCz.pgrb2b.1p00.fFFF<br>
						&nbsp; gfs.tCCz.pgrb2.2p50.fFFF&nbsp;&nbsp;&nbsp; </span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp; Where FFF is forecast hours from 000 to 384</span></p>

						<p><span style="font-family: courier new;">- Replace 775 hPa state variables with 750 hPa in the GFS WAFS grids</span><span style="font-family: courier new;"> 37-44 for UGRD, VGRD, TMP, RH, HGT</span></p>

						<p><span style="font-family: courier new;">&nbsp; On NCEP Servers:</span></p>

						<p><span style="font-family: courier new;">&nbsp; wafsgfs_L_tCCz_intdskFFF.grib2<br>
						&nbsp; wafsgfs_P_tCCz_intdskFFF.grib2</span></p>

						<p><span style="font-family: courier new;">&nbsp; On NWS Servers:</span></p>

						<p><span style="font-family: courier new;">&nbsp; fh.0FFF_tl.press_ar.octant(</span>ijklmno)&nbsp;&nbsp;&nbsp;</p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp; Where FFF is 000-120</span></p>

						<p><span style="font-family: courier new;">- Add GDAS ABIAS air BUFR file</span></p>

						<p><span style="font-family: courier new;">&nbsp; gdas1.tCCz.abias_air</span></p>

						<p><span style="font-family: courier new;">- Modify the list of stations on NOAAPORT and NCEP servers, for which</span><span style="font-family: courier new;"> BUFR data are generated for the GFS.&nbsp; The changes will also</span><span style="font-family: courier new;"> modify the lists of stations in the GFS BUFR sounding collectives</span><span style="font-family: courier new;"> disseminated on NOAAPORT. For the full list please reference</span><span style="font-family: courier new;"> this page:</span></p>

						<p><span style="font-family: courier new;"><a href="http://www.nco.ncep.noaa.gov/pmb/changes/gfs_upgrade_2016.shtml"><font color="#0066cc">http://www.nco.ncep.noaa.gov/pmb/changes/gfs_upgrade_2016.shtml</font></a></span></p>

						<p><br>
						<span style="font-family: courier new;">The following changes to NOAAPORT are detailed below with the following</span><span style="font-family: courier new;"> WMO headers for each grid:</span></p>

						<p><span style="font-family: courier new;"><a href="http://www.nco.ncep.noaa.gov/pmb/changes/gfs_20kmAWIPS_grids.shtml"><font color="#0066cc">http://www.nco.ncep.noaa.gov/pmb/changes/gfs_20kmAWIPS_grids.shtml</font></a></span></p>

						<p><span style="font-family: courier new;">- Alaska region grid 217 (20km) has been modified to expand latitude</span><span style="font-family: courier new;"> from 30N to 35N and longitude from 173W to 170W.</span></p>

						<p><span style="font-family: courier new;">- The Maximum and Minimum Temperatures (TMAX, TMIN) Product Definition Template 4.8 will correct a mistake in the second fixed</span><span style="font-family: courier new;"> surface from "255 0 2" to "255 0 0" for the following grids</span><span style="font-family: courier new;">:</span></p>

						<p><span style="font-family: courier new;">&nbsp; Alaska region 20km<br>
						&nbsp; Pacific region 20km<br>
						&nbsp; Puerto Rico 0.25deg<br>
						&nbsp; CONUS 20km</span></p>

						<p><span style="font-family: courier new;">- The Water Equivalent of Accumulated Snow Depth (WEASD) WMO headers</span><span style="font-family: courier new;"> were incorrectly labeled for forecast hours 186, 198, 210, 222 and 234.</span><span style="font-family: courier new;"> The following changes will be applied to each grid</span><span style="font-family: courier new;"> below:</span></p>

						<p><span style="font-family: courier new;">&nbsp; CONUS 20km: LSRU98 -&gt; ZSNZ98<br>
						&nbsp; Alaska 20km: LSRU98 -&gt; ZSBZ98<br>
						&nbsp; Pacific Region 20km: LSRU98 -&gt; ZSEZ98</span><br>
						<span style="font-family: courier new;">&nbsp; Puerto Rico 0.25deg: LSRU98 -&gt; ZSFZ98</span></p>

						<p><span style="font-family: courier new;">- The Alaska region grid 217 (20km) had some incorrectly labeled forecast</span><span style="font-family: courier new;"> hours in the grid identifier WMO header. This will be addressed</span><span style="font-family: courier new;"> so all Alaska WMO products have A1 = B</span></p>

						<p><span style="font-family: courier new;">- Addition of GRIB2 20 km gridded product over Pacific Region (Mercator) to NOAAPORT</span></p>

						<p><span style="font-family: courier new;">&nbsp; Runs 4 times per day at 00z, 06z, 12z and 18z</span></p>

						<p><span style="font-family: courier new;">&nbsp; WMO headers will be as follows: </span></p>

						<p><span style="font-family: courier new;">&nbsp; T1 = Y for forecast hours: 00, 06, 12, 15, 18, 24, 30, 36, 42, 48, 60, 72, 84, 96, 108,120, 132, 144, 156, 168, 180, 192, 204, 216, 228, 240</span></p>

						<p><span style="font-family: courier new;">&nbsp; T1 = Z for forecast hours: 03, 09, 15, 21, 27, 33, 39, 45, 51, 54, 57, 63, 66, 69, 75, 78, 81, 90, 102, 114, 126, 138, 150, 162, 174, 186, 198, 210, 222, 234</span></p>

						<p><span style="font-family: courier new;">&nbsp; T2 specifies the parameters as follows:</span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp;&nbsp; T = Temperature, TMIN, TMAX; H = Height;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 5-wave geopotential height; O = Vertical velocity;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; R = Relative humidity; C = Absolute vorticity;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; U = u-component of wind; V = v-component of wind;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; P = Pressure; Pressure reduce to Mean Sea level;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; B = Vertical speed shear; E = Total precipitation;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; G = Convective precipitation; Q = Best Lifted Index;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; W = Convective Available Potential Energy;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; Y = Convective Inhibition; X = Surface Lifted Index;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; F = Precipitable Water; M = Precipitable Water;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; S = Water Equivalent of Accumulated Snow Depth; </span></p>

						<p><span style="font-family: courier new;">&nbsp; A1 = E* Grid 20 km, Pacific Region</span></p>

						<p><span style="font-family: courier new;">&nbsp; *Was incorrectly labeled "F" in the previous advertised TIN 14-54</span></p>

						<p><span style="font-family: courier new;">&nbsp; A2 specifies the forecast hours as follows:</span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp;&nbsp; A=00; B=06; C=12; D=18; E=24; F=30; G=36; H=42;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; I=48; J=60; K=72; L=84; M=96; N=108; O=120;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; P=132; Q=144; R=156; S=168; T=180; U=192; V=204;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; W=216; X=228; Y=240 (Note: T1 is Y)</span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp;&nbsp; B=03; E=09; H=15; K=21; L=27; O=33; P=39; Q=45;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; R=51; M=54; S=57; Z=63; N=66; Z=69; Z=75; T=78;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; Z=81; U=90; V=102; W=114;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; Z=126; 138; 150; 162; 174; 186; 198; 210; 222;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 234 (Note: T1 is Z)</span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp; ii</span> specifies level as follows:</p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp;&nbsp; 99=1000mb; 93=975mb; 95=950mb; 92=925mb; 90=900mb;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 91=875 mb; 85=850mb; 82=825mb; 80=800mb; 77=775mb;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 75=750mb; 72=725mb; 70=700mb; 67=675 mb; 65=650mb;<br>
						&nbsp;&nbsp; &nbsp; 62=625 mb; 60=600mb; 57=575mb; 55=550mb; 52=525mb;</span><br>
						<span style="font-family: courier new;">&nbsp;&nbsp;&nbsp;&nbsp; 50=500mb; 45=450mb;40=400mb; 35=350mb; 30=300mb;</span><br>
						<span style="font-family: courier new;">&nbsp;&nbsp;&nbsp;&nbsp; 25=250mb; 20=200mb; 15=150mb; 10=100mb;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 73=High, Mid, Low cloud bottom level; 86=Boundary Layer;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 89=Reduced to Sea Level; 94=Level of the 0 deg. C isotherm;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 96=Maximum wind level;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 97=Level of the Tropopause, potential vorticity surface;<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 98=Surface of Earth; 00=Entire Atmosphere</span></p>

						<p><span style="font-family: courier new;">&nbsp; See the following link for a full list of WMO headers:</span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp; <a href="http://www.nco.ncep.noaa.gov/pmb/changes/gfs_pac_wmo.txt"><font color="#0066cc">http://www.nco.ncep.noaa.gov/pmb/changes/gfs_pac_wmo.txt</font></a></span></p>

						<p><br>
						<strong><span style="font-family: courier new;">4) Output product removals</span></strong></p>

						<p><span style="font-family: courier new;">NCEP has been working to remove low resolution legacy products in</span><span style="font-family: courier new;"> lieu of higher resolution grids. Last year NCEP added new higher</span><span style="font-family: courier new;"> resolution grids to NOAAPORT in preparation for removing the</span><span style="font-family: courier new;"> legacy grids. Due to the positive responses received from the</span><span style="font-family: courier new;"> NCEP Public Information Statement 16-04, Removal of Legacy Global Forecast System (GFS) Gridded Output, the following products</span><span style="font-family: courier new;"> will be removed with this upgrade: </span></p>

						<p><span style="font-family: courier new;">- Remove the GFS grid 212, 40km Regional CONUS from NOAAPORT</span></p>

						<p><span style="font-family: courier new;">&nbsp; WMO Headers: </span></p>

						<p><span style="font-family: courier new;"><a href="http://www.nco.ncep.noaa.gov/pmb/changes/gfs_AWIPS_grids.shtml"><font color="#0066cc">http://www.nco.ncep.noaa.gov/pmb/changes/gfs_AWIPS_grids.shtml</font></a></span></p>

						<p><br>
						<span style="font-family: courier new;">To find the replacement products please reference this TIN: </span></p>

						<p><span style="font-family: courier new;"><a href="http://www.nws.noaa.gov/os/notification/tin14-54gfs_noaaport.htm"><font color="#0066cc">http://www.nws.noaa.gov/os/notification/tin14-54gfs_noaaport.htm</font></a></span></p>

						<p><span style="font-family: courier new;">- Removal Vessel Sea Ice and Fog on grid 232, 1 deg</span> Northern</p>

						<p><span style="font-family: courier new;">Hemisphere from NOAAPORT</span></p>

						<p><span style="font-family: courier new;">&nbsp; WMO Headers: </span></p>

						<p><span style="font-family: courier new;"><a href="http://www.nco.ncep.noaa.gov/pmb/changes/omb_AWIPS_grids.shtml"><font color="#0066cc">http://www.nco.ncep.noaa.gov/pmb/changes/omb_AWIPS_grids.shtml</font></a></span></p>

						<p><span style="font-family: courier new;">- Removal of 1.25 deg</span> GRIB1 GFS WAFS products from the NWS</p>

						<p><span style="font-family: courier new;">http/ftp</span><span style="font-family: courier new;"> server:</span></p>

						<p><span style="font-family: courier new;">weather.noaa.gov/pub/SL.us008001/ST.opnl</span>/MT.gfs_CY.CYCLE/RD.YYYY</p>

						<p><span style="font-family: courier new;">MMDD/PT.grid_DF.gr1/fh.FFF_tl.press_ar.octant</span>[ijklmnop]</p>

						<p><span style="font-family: courier new;">ftp://tgftp.nws.noaa.gov/SL.us008001/ST.opnl/MT.gfs_CY.CYCLE/RD.</span></p>

						<p><span style="font-family: courier new;">YYYYMMDD/PT.grid_DF.gr1/fh.FFF_tl.press_ar.octant</span>[ijklmnop]</p>

						<p><span style="font-family: courier new;">&nbsp; where</span> CYCLE is 00, 06, 12, 18<br>
						<span style="font-family: courier new;">&nbsp; where</span> YYYYMMDD is Year, Month, Day<br>
						<span style="font-family: courier new;">&nbsp; where</span> FFF is forecast hour from 000-120<br>
						&nbsp;</p>

						<p><span style="font-family: courier new;">To find the replacement product please reference this TIN: </span></p>

						<p><span style="font-family: courier new;"><a href="http://www.nws.noaa.gov/os/notification/pns16-04gfs_removal.htm"><font color="#0066cc">http://www.nws.noaa.gov/os/notification/pns16-04gfs_removal.htm</font></a></span></p>

						<p><span style="font-family: courier new;">- Removal of 1.25 deg</span> GRIB1 GFS WAFS products from the NCEP</p>

						<p><span style="font-family: courier new;">http/ftp</span><span style="font-family: courier new;"> server:</span></p>

						<p><span style="font-family: courier new;">http://nomads.ncep.noaa.gov/pub/data/nccf/pcom/gfs/xtrn.wfsgfs*<br>
						<a href="ftp://ftp.ncep.noaa.gov/pub/data/nccf/pcom/gfs/xtrn.wfsgfs*"><font color="#0066cc">ftp://ftp.ncep.noaa.gov/pub/data/nccf/pcom/gfs/xtrn.wfsgfs*</font></a><br>
						<br>
						To find the replacement product please reference this TIN: </span></p>

						<p><span style="font-family: courier new;"><a href="http://www.nws.noaa.gov/os/notification/pns16-04gfs_removal.htm"><font color="#0066cc">http://www.nws.noaa.gov/os/notification/pns16-04gfs_removal.htm</font></a></span></p>

						<p><br>
						<strong><span style="font-family: courier new;">5) Parallel data available</span></strong></p>

						<p><span style="font-family: courier new;">Starting in April 1, 2016 all parallel data sets will be available</span><span style="font-family: courier new;"> on the following servers:</span></p>

						<p><span style="font-family: courier new;"><a href="http://para.nomads.ncep.noaa.gov/pub/data/nccf/com/gfs/para"><font color="#0066cc">http://para.nomads.ncep.noaa.gov/pub/data/nccf/com/gfs/para</font></a></span></p>

						<p><br>
						<span style="font-family: courier new;">For more information on this GFS upgrade, please see EMC real-time</span><span style="font-family: courier new;"> and retrospective parallels and verification pages:</span></p>

						<p><span style="font-family: courier new;"><a href="http://www.emc.ncep.noaa.gov/gmb/noor/4dGFS/synergy%20announcementjan08.htm"><font color="#0066cc">http://www.emc.ncep.noaa.gov/gmb/noor/4dGFS/synergy%20announcementjan08.htm</font></a></span></p>

						<p><br>
						<span style="font-family: courier new;">NCEP urges all users to ensure their decoders can handle changes in</span><span style="font-family: courier new;"> content order, changes in the scaling factor component within the</span><span style="font-family: courier new;"> product definition section (PDS) of the GRIB files, and volume</span><span style="font-family: courier new;"> changes. These elements may change with future NCEP model implementations</span><span style="font-family: courier new;">. NCEP will make every attempt to alert users to these</span><span style="font-family: courier new;"> changes before implementation. </span></p>

						<p><span style="font-family: courier new;">For questions regarding these changes, please contact: </span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp;&nbsp; Vijay Tallapragada<br>
						&nbsp;&nbsp;&nbsp;&nbsp; NCEP/Global Climate and Weather Modeling Branch<br>
						&nbsp;&nbsp;&nbsp;&nbsp; College Park, MD<br>
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp; 301-683-3672</span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp;&nbsp; <a href="mailto:Vijay.Tallapragada@noaa.gov"><font color="#0066cc">Vijay.Tallapragada@noaa.gov</font></a></span></p>

						<p><span style="font-family: courier new;">For questions regarding the data flow aspects of these data </span></p>

						<p><span style="font-family: courier new;">sets</span><span style="font-family: courier new;">, please contact: </span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp;&nbsp; Carissa Klemmer<br>
						&nbsp;&nbsp;&nbsp;&nbsp; NCEP/NCO Dataflow Team Lead<br>
						&nbsp;&nbsp;&nbsp;&nbsp; College Park, MD</span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp;&nbsp; 301-683-0567 </span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp;&nbsp;&nbsp; <a href="mailto:ncep.list.pmb-dataflow@noaa.gov"><font color="#0066cc">ncep.list.pmb-dataflow@noaa.gov</font></a></span></p>

						<p><span style="font-family: courier new;">NWS National Technical Implementation Notices are online at: </span></p>

						<p><span style="font-family: courier new;">&nbsp;&nbsp; <a href="http://www.nws.noaa.gov/os/notif.htm"><font color="#0066cc">http://www.nws.noaa.gov/os/notif.htm</font></a></span></p>
						</div>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<table>
	<tbody>
		<tr>
			<td width="200">
			<h2><u>Date</u></h2>
			</td>
			<td>
			<h2><u>Title</u></h2>
			</td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#e5e4e2"><b>2015011512</b></td>
			<td valign="top" bgcolor="#e5e4e2"><b><a href="javascript:void();"><font color="#008000">GSM v12.0.0</font></a> - implementation completed <font color="#008000">January 14th, 2015</font></b><br>
			&nbsp;
			<ul>
				<li><a href="https://www.emc.ncep.noaa.gov/GFS/ppt/GFS%20implementation_Q1FY15_review_v4.pptx"><u><font color="#0066cc">View implementation review from 10/2/14 CCB meeting</font></u></a></li>
				<li><a href="http://www.nws.noaa.gov/om/notification/tin14-46gfs.htm"><u><font color="#0066cc">GFS/GDAS NWS TIN 14-46</font></u></a></li>
			</ul>

			<table id="div2" style="display: none;">
				<tbody>
					<tr>
						<td>The GFS Analysis and Forecast System upgrade includes:
						<ul>
							<li>Changing model components</li>
							<li>Increasing horizontal resolution</li>
							<li>Adding 0.25 degree gridded output</li>
							<li>Adding new product fields</li>
							<li>Changing product naming convention</li>
							<li>Changing product timeliness</li>
						</ul>

						<p>Generating downstream model impacts<br>
						1) Model changes to the GFS Global Spectral Model:</p>

						<ul>
							<li>Increase horizontal resolution of the first segment of the forecast from Eulerian T574 (~27 km) to Semi-Lagrangian T1534 (~13 km), and extend the length of forecast from 192 hours to 240 hours</li>
							<li>Increase horizontal resolution of the second segment of the forecast from Eulerian T192 (~84 km) to semi-Lagrangian T574 (~35km), and set forecast time from 240 hours to 384 hours</li>
							<li>Change from Eulerian dynamics to Semi-Lagrangian dynamics, which uses Hermite interpolation in both vertical and horizontal directions.</li>
							<li>Use 5 minute daily Real-Time Global (RTG) Sea Surface Temperature (SST) to replace 1.0 degree Reynolds 7 day SST analysis</li>
							<li>Initialize ice at small inland lakes in the northern hemisphere with 4 km Interactive Multi-sensor Snow and Ice Mapping System (IMS) ice analysis data from the National Ice Center. For large water bodies, use 5 minute NCEP/MMAB ice analysis data to replace 30 minute ice data</li>
							<li>Use 1982-2012 5 minute SST climatology (replacing 1982-2001 1 degree SST climatology).</li>
							<li>Use 1982-2012 30 minute sea ice concentration climatology (replacing 1982-2001 1 degree climatology).</li>
							<li>Replace update of model snow depth by direct insertion of AFWA depth data with a blend of the model first guess depth and the AFWA depth.</li>
							<li>Use X-number to prepare spectral transform base functions. X-number is a numerical technique. It uses paired numbers to represent real number to avoid computational underflow or overflow that can occur in spectral truncation for wave number larger than T1000.</li>
							<li>Use divergence damping in the stratosphere to reduce noise</li>
							<li>Add a tracer fixer for maintaining global column ozone mass</li>
							<li>Use the Monte-Carlo Independent Column Approximation (McICA) for Rapid Radiative Transfer Model (RRTM) Radiation</li>
							<li>Reduce drag coefficient at high wind speeds</li>
							<li>Use Hybrid Eddy-Diffusivity Mass-Flux Planetary Boundary Layer (EDMF PBL) scheme and Turbulent Kinetic Energy (TKE) dissipative heating</li>
							<li>Retune ice and water cloud conversion rates, orographic gravity-wave forcing and mountain block; and reduce background diffusion of momentum</li>
							<li>Add stationary convective gravity wave drag</li>
							<li>Modify initialization of forecast state variables to reduce a sharp decrease in cloud water in the first model time step</li>
							<li>Correct a bug in the condensation calculation after the digital filter is applied</li>
							<li>Replace 1.0 degree bucket soil moisture climatology with CFS/Global Land Data Assimilation System (GLDAS) climatology at T574 (~27 km)</li>
							<li>Replace 1.0 degree momentum roughness length climatology by using a look-up table based on vegetation type</li>
							<li>Add a dependence of the ratio of the thermal and momentum roughness on vegetation type</li>
						</ul>

						<p>2) Model changes to the GDAS/GFS Hybrid 3D-VAR Ensemble Kalman Filter (EnKF) Data Assimilation:</p>

						<ul>
							<li>Increase EnKF resolution from T254L64 to T574L64</li>
							<li>Assimilate hourly GOES and EUMETSAT atmospheric motion vectors</li>
							<li>Update radiance assimilation:
							<ul>
								<li>Assimilate SSM/IS UPP LAS and Metop-B IASI radiances</li>
								<li>Use enhanced radiance bias correction scheme</li>
								<li>Update to version 2.1.3 of the Community Radiative Transfer Model (CRTM). CRTM v2.1.3 improves specification of microwave sea surface emissivities. This, in turn, improves the analysis of near surface temperature over water, especially in the southern oceans.</li>
								<li>Use stochastic physics in EnKF ensemble forecasts</li>
								<li>The dump window for GOES Satellite Wind (satwnd) data will change from 1 hour to 6 hours. Subtypes will be added for (NOAA/METOP AVHRR SATWIND) infrared cloud motion vector and (NESDIS/GOES 3.9 micron channel) derived cloud motion vector</li>
							</ul>
							</li>
						</ul>

						<p>3) Output product changes<br>
						All filenames given below are on the NCEP ftp server, the NCEP http server, NOMADS or the NWS ftp server respectively via the following URLs (YYYYMMDD is the year, month, and day; CC is the cycle):</p>

						<ul>
							<li>ftp://ftp.ncep.noaa.gov/pub/data/nccf/com/gfs/prod/gfs.YYYYMMDDCC/</li>
							<li>ftp://ftp.ncep.noaa.gov/pub/data/nccf/com/gfs/prod/gdas.YYYYMMDD</li>
							<li>http://www.ftp.ncep.noaa.gov/data/nccf/com/gfs/prod/gfs.YYYYMMDDCC/</li>
							<li>http://www.ftp.ncep.noaa.gov/data/nccf/com/gfs/prod/gdas.YYYYMMDD/</li>
							<li>http://nomads.ncep.noaa.gov</li>
							<li>ftp://tgftp.nws.noaa.gov/nfs/nwstg/ftp/SL.us008001/ST.opnl/MT.gfs_CY.CC/RD.YYYYMMDD/</li>
						</ul>

						<p>Product to be Removed:<br>
						With this upgrade NCEP is removing output files that are obsolete and not widely used. Please reference the link below for explanations and possible replacement products:<br>
						<a href="http://www.nco.ncep.noaa.gov/pmb/changes/gfs_upgrade.shtml"><font color="#0066cc">http://www.nco.ncep.noaa.gov/pmb/changes/gfs_upgrade.shtml</font></a><br>
						The following files will be removed</p>

						<ul>
							<li>gfs.YYYYMMDDCC/gfs.tCCz.sstgrb</li>
							<li>gfs.YYYYMMDDCC/gfs.tCCz.engicegrb</li>
							<li>gfs.YYYYMMDDCC/gfs.tCCz.snogrb</li>
							<li>gdas.YYYYMMDD/gdas1.tCCz.engicegrb.grib2</li>
							<li>gdas.YYYYMMDD/gdas1.tCCz.sstgrb.grib2</li>
							<li>PT.grid_DF.gr2/fh.00xx_tl.press_gr.sstgrb</li>
							<li>gdas.YYYYMMDD/gdas1.tCCz.snogrb.grib2</li>
							<li>gfs.YYYYMMDDCC/gfs_grb211.tCCz.pgrbFH.grib2</li>
							<li>gfs.YYYYMMDDCC/gfs.tCCz.master.grbfFF.10m.uv.grib2</li>
							<li>PT.grid_DF.gr2/fh.xxxx_pa.sw10m_tl.press_gr.0p5deg</li>
							<li>gdas.YYYYMMDD/gdas1.tCCz.satang</li>
							<li>gfs.YYYYMMDDCC/gfs.tCCz.trmm.tm00.bufr_d</li>
							<li>gfs.YYYYMMDDCC/gfs.tCCz.sptrmm.tm00.bufr_d</li>
							<li>gdas.YYYYMMDD/gdas1.tCCz.sptrmm.tm00.bufr_d</li>
							<li>gdas.YYYYMMDD/gdas1.forecmwf.YYYYMMDDCC.grib2</li>
						</ul>

						<p>The following variables from GFS and GDAS pressure GRIB files (*pgrb*) will be removed:</p>

						<ul>
							<li>Geopotential Height Anomaly (GPA)</li>
							<li>5-Wave Geopotential Height Anomaly (5WAVA)</li>
						</ul>

						<p>Current Product Changes:</p>

						<ul>
							<li>The naming convention will change to include the grid and 3 digit forecast hours:</li>
						</ul>

						<p>On the NCEP server:</p>

						<p>GFS FH = "anl" or "f000-f384"<br>
						GDAS FH = "anl" or "f000-f009"</p>

						<ul>
							<li>gfs.tCCz.pgrb2.fFFF -&gt; gfs.tCCz.pgrb2.0p50.FH</li>
							<li>gfs.tCCz.pgrb2b.fFFF -&gt; gfs.tCCz.pgrb2b.0p50.FH</li>
							<li>gfs.tCCz.pgrb.fFFF.grib2 -&gt; gfs.tCCz.pgrb2.1p00.FH</li>
							<li>gfs.tCCz.pgrb2b.fFFF -&gt; gfs.tCCz.pgrb2b.1p00.FH</li>
							<li>gfs.tCCz.pgrb.2p5deg.fFFF.grib2 -&gt; gfs.tCCz.pgrb2.2p50.FH</li>
							<li>gfs.tCCz.pgrb.fFFF.grib2 -&gt; gfs.tCCz.pgrb2.2p50.FH</li>
							<li>gfs.tCCz.goessimpgrb2fFFF.1p0deg -&gt; gfs.tCCz.goessimpgrb2FH.1p0deg</li>
							<li>gfs.tCCz.goessimpgrb2fFFF.grd221 -&gt; gfs.tCCz.goessimpgrb2FH.grd221</li>
							<li>master/gfs.tCCz.mastergrb2fFFF -&gt; gfs.tCCz.pgrb2full.0p50.FH</li>
							<li>gdas1.tCCz.pgrbfFF.grib2 -&gt; gdas1.tCCz.pgrb2.1p00.FH</li>
						</ul>
						On the NWS server:<br>
						<br>
						GFS FH = 000-384<br>
						&nbsp;
						<ul>
							<li>fh.0FH_tl.press_gr.0p5deg -&gt; fh.0FH_tl.press_gr.0p50deg</li>
							<li>fh.0FH_tl.press_gr.1p0deg -&gt; fh.0FH_tl.press_gr.1p00deg</li>
							<li>fh.0FH_tl.press_gr.2p5deg -&gt; fh.0FH_tl.press_gr.2p50deg</li>
						</ul>
						The following files will have decreased forecast hour availability:<br>
						&nbsp;
						<ul>
							<li>gfs.YYYYMMDDCC/gfs.tCCz.bfFF hourly output from 00-12</li>
							<li>gfs.YYYYMMDDCC/gfs.tCCz.sfFF hourly output from 00-12</li>
						</ul>
						There are numerous changes to the operational NOMADS files. For all of the details please reference this page:<br>
						<br>
						<a href="http://www.nco.ncep.noaa.gov/pmb/changes/gfs_upgrade.shtml"><font color="#0066cc">http://www.nco.ncep.noaa.gov/pmb/changes/gfs_upgrade.shtml</font></a><br>
						<br>
						The packing for GRIB2 will be switched to second order complex packing. The changes will result in much faster IO time compared with the existing JPEG packing. The second order packing provides good accuracy, although files will be slightly larger than JPEG packing.<br>
						<br>
						The changes involve modifying the list of stations for which BUFR data is generated for the GFS. The changes will also modify the lists of stations in the GFS BUFR sounding collectives disseminated on NOAAPORT. For the full list please reference this page:<br>
						<br>
						<a href="http://www.nco.ncep.noaa.gov/pmb/changes/gfs_upgrade.shtml"><font color="#0066cc">http://www.nco.ncep.noaa.gov/pmb/changes/gfs_upgrade.shtml</font></a><br>
						<br>
						Use of the enhanced radiance bias correction scheme will change the abias file. The format of the file is being changed to incorporate information from the satang file.<br>
						&nbsp;
						<ul>
							<li>gdas.YYYYMMDD/gdas1.tCCz.abias</li>
						</ul>

						<p>The GFS cyclone tracker file code has changed from "NA" to "AA" for storms in the Arabian Sea.<br>
						PT.text_GP.tratcf/cyclone.trackatcf<br>
						Change variables averaged or accumulated over time, such as precipitation accumulation, will go from 12 hourly to 6 hourly between forecast hours 180 to 240.</p>

						<p>Modify fields to both GFS and GDAS:Add Frozen Precipitation Fraction (CPOFP)</p>

						<ul>
							<li>Add Frozen Precipitation Fraction (CPOFP)</li>
							<li>Add Ozone (O3MR) at 150, 200, 250, 300, 350, and 400 mb</li>
							<li>Add Dew Point (DPT) at 2 meters</li>
							<li>Add Apparent Temperature (APTMP)</li>
							<li>Add instantaneous precipitation type (CICEP, CFRZR, CRAIN, CSNOW)</li>
							<li>Add Membrane SLP in GDAS pressure grib files</li>
							<li>Rename TMP at 0-0.1 m, 0.1-0.4 m, 0.4-1.0 m, and 1-2 m to the more accurate name of Soil Temperature (TSOIL)</li>
							<li>Modify the precision of Relative Humidity (RH) grids</li>
							<li>Modify GRIB encoding level of Total Cloud Cover (TCDC), removing "considered as a single layer"</li>
							<li>Modify GRIB encoding level of Precipitable Water (PWAT) removing "considered as a single layer"</li>
						</ul>

						<p>New Products:<br>
						Produce GRIB2 output at the highest resolution on 0.25 degree latitude-longitude grid 193 (1440x721)</p>

						<ul>
							<li>gfs.YYYYMMDDCC/ gfs.tCCz.pgrb2.0p25.FH</li>
							<li>gfs.YYYYMMDDCC/gfs.tCCz.pgrb2b.0p25.FH</li>
						</ul>
						Product Timeliness:<br>
						<br>
						GFS product delivery timing on NOMADS, the ftp server and NOAAPORT will be delayed for numerous products. Pressure GRIB (*pgrb*) files will be as much as 20 minutes delayed. Please reference this page for a full list of delays:<br>
						<br>
						<a href="http://www.nco.ncep.noaa.gov/pmb/changes/gfs_upgrade.shtml"><font color="#0066cc">http://www.nco.ncep.noaa.gov/pmb/changes/gfs_upgrade.shtml</font></a><br>
						<br>
						NOAAPORT/SBN product changes:<br>
						<br>
						- Additional forecast hours 186, 198, 210, 222, and 234 will be added for the following GRIB2 grids only. There are no new headers to add as these grids use existing headers:<br>
						<br>
						201 - 381km Northern Hemisphere<br>
						212 - 40km CONUS<br>
						213 - 95km CONUS<br>
						160 - 47.5km Alaska<br>
						161 - 0.5 degree lat/lon for Puerto Rico<br>
						254 - 40km Pacific Region<br>
						<br>
						- Variables averaged or accumulated over time, such as precipitation, will now be valid over a 6 hour period for forecast hours 180 through 240, rather than a 12 hour period.<br>
						<br>
						There are no new headers to add as these new grids use existing headers.<br>
						<br>
						4) Downstream model impacts<br>
						<br>
						There are impacts to downstream GFS models and their product output. Please reference this page for more information on the following:<br>
						<br>
						<a href="http://www.nco.ncep.noaa.gov/pmb/changes/gfs_upgrade.shtml"><font color="#0066cc">http://www.nco.ncep.noaa.gov/pmb/changes/gfs_upgrade.shtml</font></a><br>
						&nbsp;
						<ul>
							<li>GFS-based Model Output Statistics (MOS) products</li>
							<li>Global Ensemble Forecast System variable change</li>
							<li>Numerous downstream model output timeliness changes. These changes impact both NOAAPORT/SBN and the NCEP/NWS servers.</li>
						</ul>
						5) Parallel data available<br>
						<br>
						Due to system constraints the parallel GFS will run on the backup supercomputer. This will cause impact to output availability on at least 3 days due to mandatory maintenance. We will notify users when a cycle will not be available through this user list:<br>
						<br>
						https://lstsrv.ncep.noaa.gov/mailman/listinfo/ncep.list.nomads-ftpprd<br>
						<br>
						Starting in late October all parallel data sets will be available on the following servers:<br>
						<br>
						<a href="ftp://ftp.ncep.noaa.gov/pub/data/nccf/com/gfs/para/gfs.YYYYMMDDCC/"><font color="#0066cc">ftp://ftp.ncep.noaa.gov/pub/data/nccf/com/gfs/para/gfs.YYYYMMDDCC/</font></a><br>
						<a href="ftp://ftp.ncep.noaa.gov/pub/data/nccf/com/gfs/para/gdas.YYYYMMDD/"><font color="#0066cc">ftp://ftp.ncep.noaa.gov/pub/data/nccf/com/gfs/para/gdas.YYYYMMDD/</font></a><br>
						<a href="http://www.ftp.ncep.noaa.gov/data/nccf/com/gfs/para/gfs.YYYYMMDDCC/"><font color="#0066cc">http://www.ftp.ncep.noaa.gov/data/nccf/com/gfs/para/gfs.YYYYMMDDCC/</font></a><br>
						<a href="http://www.ftp.ncep.noaa.gov/data/nccf/com/gfs/para/gdas.YYYYMMDD/"><font color="#0066cc">http://www.ftp.ncep.noaa.gov/data/nccf/com/gfs/para/gdas.YYYYMMDD/</font></a><br>
						<a href="http://nomads.ncep.noaa.gov/"><font color="#0066cc">http://nomads.ncep.noaa.gov</font></a><br>
						<br>
						NCEP has a full list of products that will be available for download from both the NCEP and NWS servers as well as NOMADS.<br>
						<br>
						You can find the file names and their inventory through the following http page:<br>
						<br>
						<a href="http://www.nco.ncep.noaa.gov/pmb/products/gfs/index.shtml.upgrade"><font color="#0066cc">http://www.nco.ncep.noaa.gov/pmb/products/gfs/index.shtml.upgrade</font></a><br>
						<br>
						For more information on this GFS upgrade, please see EMC real-time and retrospective parallels and verification pages:<br>
						<br>
						<a href="http://www.emc.ncep.noaa.gov/gmb/wx24fy/vsdb/gfs2015/"><font color="#0066cc">http://www.emc.ncep.noaa.gov/gmb/wx24fy/vsdb/gfs2015/</font></a><br>
						<a href="http://www.emc.ncep.noaa.gov/gmb/wd20rt"><font color="#0066cc">http://www.emc.ncep.noaa.gov/gmb/wd20rt/</font></a><br>
						<a href="http://www.emc.ncep.noaa.gov/gmb/STATS_vsdb"><font color="#0066cc">http://www.emc.ncep.noaa.gov/gmb/STATS_vsdb/</font></a><br>
						<br>
						NCEP urges all users to ensure their decoders can handle changes in content order, changes in the scaling factor component within the product definition section (PDS) of the GRIB files, and volume changes. These elements may change with future NCEP model implementations. NCEP will make every attempt to alert users to these changes before implementation.<br>
						<br>
						For questions regarding these changes, please contact:<br>
						<br>
						Mark Iredell<br>
						NCEP/Global Climate and Weather Modeling Branch<br>
						College Park, MD<br>
						301-683-3739<br>
						Mark.Iredell@noaa.gov<br>
						<br>
						For questions regarding the data flow aspects of these data sets, please contact:<br>
						<br>
						Carissa Klemmer<br>
						NCEP/NCO Dataflow Team<br>
						College Park, MD<br>
						301-683-0567<br>
						ncep.list.pmb-dataflow@noaa.gov
						<p>&nbsp;</p>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#e5e4e2"><b>2012090512</b></td>
			<td valign="top" bgcolor="#e5e4e2"><a href="javascript:void();"><b><font color="#008000">Correction to Land Surface Model in Global Forecast System and associated cool and moist bias in near surface temperature and moisture fields</font></b><font color="#0066cc"> (Click to read more)</font></a>
			<table id="div3" style="display: none;">
				<tbody>
					<tr>
						<td><br>
						Beginning with the <b>1200 Coordinated Universal Time (UTC) model run on Wednesday, September 5, 2012</b>, the National Centers for Environmental Prediction (NCEP) Central Operations will implement a correction to the Land Surface Model used to drive the Global Forecast System (GFS). This correction is expected to improve the cool and moist bias in the near surface air temperature and moisture fields during the warm season.<br>
						<br>
						Starting in mid-June 2012 NCEP was informed about a problem with the GFS near surface temperature and moisture simulations verifying in the late afternoon over the central US where drought conditions existed. Specifically, customers noted that a significant 2m cold and wet bias existed in both the MOS and GFS gridded products. Modelers at the NCEP Environmental Modeling Center (EMC) responsible for development of the GFS and scientists at the Meteorological Development Laboratory (MDL) identified the cause in late June. The problem was traced to a look-up table used in the land surface scheme that modulates evapotranspiration based on vegetation type and root zone depth. Current settings allowed for excessive transpiration and plant-extraction of soil moisture from deeper soil layers causing the lower atmospheric boundary layer to become too moist and cool.<br>
						<br>
						EMC conducted a parallel test of the GFS with corrected land surface parameters starting in early June and running through late August, to determine if appropriate modifications to the LSM look-up table would provide a correction to the cold/wet bias without having an unexpected negative impact on other meteorological fields over the US and the globe. EMC conducted an assessment of the GFS parallel and found the change to the land surface model significantly reduced the cold/wet bias over the US and improved the 0-3 day precipitation forecasts. In addition, MDL conducted an objective evaluation of the GFS MOS guidance generated from the GFS parallel output. MDL concluded that the corrections in the GFS parallel output had the desired effect of reducing the cold/wet bias resulting in improved bias and error scores in the GFS MOS temperature and dewpoint guidance. Slight improvement was also noted in the GFS MOS probability of precipitation guidance generated from the GFS parallel output. A summary of MDL's evaluation and comparisons of GFS MOS text bulletins generated from the GFS parallel output can be viewed at<br>
						<br>
						<a href="http://www.mdl.nws.noaa.gov/~mos/mos/gfs_coolfix/comp_mavmex.php"><font color="#0066cc">http://www.mdl.nws.noaa.gov/~mos/mos/gfs_coolfix/comp_mavmex.php</font></a><br>
						<br>
						NCEP (and MDL) also conducted a 1.5 month GFS parallel evaluation for the period Jan-Feb 2012 to test the land surface model correction during the US cold season. As expected, analysis of results indicate that the change in the land surface model had little impact on the simulated 2m temperature and dewpoint given the low solar forcing during the winter months. MDL's analysis of the MOS guidance from the GFS parallel during the cool season sample also indicated minimal impact on the 2m temperature and dewpoint.<br>
						<br>
						Based on the positive results of the GFS parallel tests and the severity of the cold and wet bias in the near surface air temperature, the NCEP Director has approved implementation of the correction to the land surface model. NCEP Central Operations plans to implement the change beginning with the 1200 UTC cycle on 5 September 2012.<br>
						<br>
						We want to express or thanks to those customers who brought this problem to our attention in June. NCEP also appreciates your patience as we needed time to adequately test the GFS to ensure that correcting the land surface model did not have adverse and unexpected negative impacts on other forecast guidance (i.e., precipitation, hurricane track, hemispheric wave patterns, etc.).<br>
						<br>
						<a href="https://www.emc.ncep.noaa.gov/GFS/GFS/ppt/gfs_lsm_analysis_090412_final.pptx"><font color="#0066cc">Click to view analysis of parallel test results</font></a><br>
						<br>
						For questions regarding the correction to the GFS Land Surface Model and resulting improvement to the near surface cold and moist bias please contact:<br>
						<br>
						Bill Lapenta<br>
						NCEP EMC/College Park, Maryland<br>
						301-683-3700<br>
						Bill.Lapenta@noaa.gov<br>
						<br>
						For questions regarding the impacts on the GFS MOS text and gridded products please contact:<br>
						<br>
						Kathryn Gilbert<br>
						MDL/Silver Spring, Maryland<br>
						301-713-0023, Ext. 130<br>
						Kathryn.Gilbert@noaa.gov<br>
						<br>
						For questions regarding the impacts to the GFS LAMP text and gridded products please contact:<br>
						<br>
						Judy Ghirardelli<br>
						MDL/Silver Spring, Maryland<br>
						301-713-0056, Ext. 194<br>
						Judy.Ghirardelli@noaa.gov<br>
						<br>
						Links to the MOS products and descriptions are online at:<br>
						<br>
						http://www.nws.noaa.gov/mdl/synop<br>
						<br>
						NWS national TINs are online at:<br>
						<br>
						http://www.weather.gov/os/notif.htm</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#e5e4e2"><b>2012052212</b></td>
			<td valign="top" bgcolor="#e5e4e2"><a href="javascript:void();"><b><font color="#008000">Hybrid EnKF - 3DVar GSI data assimilation</font></b><font color="#0066cc"> (Click to read more)</font></a>
			<table id="div4" style="display: none;">
				<tbody>
					<tr>
						<td><br>
						Effective on or about <b>Tuesday, May 22, 2012, beginning with the 1200 Coordinated Universal Time (UTC) run</b>, the National Centers for Environmental Prediction (NCEP) will upgrade the GFS model and its associated data assimilation system (GDAS). The primary changes will be to the analysis system. There will be no major changes to the GFS model itself, but there will be a few modifications to the output products available from the GFS.<br>
						<br>
						The primary change to the operational GFS and GDAS will be in the analysis system. The major component of the analysis change will be the incorporation of a hybrid variational/ensemble assimilation system. In this system, the background error used to project the information in the observations into the analysis is created by a combination of a static background error (as in the prior system) and a new background error produced from a lower resolution (T254) Ensemble Kalman Filter. The development of this system was done in collaboration with PSD at ESRL. The inclusion of this change and the other smaller changes listed below produce significant positive impact on forecasts in both the northern and southern hemispheres and in the tropics. In almost all measures, a positive impact is noted; however, during the summer (convective precipitation) season, a small consistent degradation of the rain/no rain line and an increase in the bias was noted. This problem will be addressed through modifications to the convective parameterization in the next global implementation.<br>
						<br>
						<b><u>Additional changes in this upgrade include:</u></b><br>
						<br>
						<b>Analysis Changes:</b><br>
						&nbsp;
						<ul>
							<li>Use GPS RO bending angle rather than refractivity</li>
							<li>Include compressibility factors for atmosphere</li>
							<li>Retune SBUV ob errors, fix bug at top</li>
							<li>Update radiance usage flags</li>
							<li>Prepare for monitoring NPP and Metop-B satellite data</li>
							<li>Add NPP ATMS satellite data</li>
							<li>Add GOES-13/15 radiance data</li>
							<li>Add SEVERI CSBT radiance product</li>
							<li>Include satellite monitoring statistics code in operations</li>
							<li>Add new satellite wind data and quality control</li>
							<li>Update to current version of analysis trunk for optimization and preparation for future updates</li>
						</ul>
						<b>GFS Model Changes:</b><br>
						<br>
						The global spectral model is restructured, but there are no major physics or dynamics changes except for some bug fixes. The impact of these changes on the forecast is at the machine round off level.<br>
						<br>
						<b>GFS Output Product Changes:</b><br>
						&nbsp;
						<ul>
							<li>CAPE, CIN, and Lifted Index fields will now be calculated from virtual temperature.</li>
							<li>Users will see minor changes in simulated GOES products due to the use of the newer CRTM 2.0.2 library and coefficient files.</li>
							<li>The following fields will be added to the 0.5, 1 and 2.5 degree pressure GRIB files
							<ul>
								<li>Haines index</li>
								<li>Transport U and V</li>
								<li>Ventilation Rate</li>
								<li>Best 300mb Cape and CIN and their source levels</li>
								<li>Temperature, U and V winds at 80 and 100m</li>
								<li>Specific humidity and pressure at 80m</li>
							</ul>
							</li>
						</ul>
						The Haines index will be labeled with a GRIB parameter number of 3 at this time, but with an upcoming change the GRIB parameter number will change to 2. A TIN will be issued announcing this change.<br>
						<br>
						The Best 300mb CAPE and CIN are encoded in GRIB as level 255 due to a limitation in GRIB encoding.<br>
						<br>
						1km helicity will be removed from the 0.5, 1 and 2.5 degree pressure GRIB files. This field was added to these files by mistake during a previous implementation.<br>
						<br>
						<b>Data Availability:</b><br>
						<br>
						The format and content of all current GFS data sets will remain unchanged, with the exception of the addition of the new fields. GFS data are currently available on NOAAPORT, the NWS FTP server, the NCEP server and in NOMADS. The location of these data will remain unchanged. The additional new fields will be available only on the NWS and NCEP FTP servers.<br>
						<br>
						Product delivery timing of the majority of GFS products is not expected to change as a result of this implementation. The GFS Downscaled Guidance (DNG) for Guam will be delayed for all forecast hours from hour 2 to 192. The delay will accumulate through the forecast hours and may be as much as 20 minutes by forecast hour 192.<br>
						<br>
						More information regarding the GFS and associated products can be found at:<br>
						<br>
						http://www.emc.ncep.noaa.gov/GFS/doc.php<br>
						<br>
						A consistent parallel feed of data will become available on the NCEP server once the model is running in parallel on the NCEP Central Computing System by late-April. The parallel data are available via the following URLs:<br>
						<br>
						http://www.ftp.ncep.noaa.gov/data/nccf/com/gfs/para<br>
						<br>
						ftp://ftp.ncep.noaa.gov/pub/data/nccf/com/gfs/para<br>
						<br>
						NCEP urges all users to ensure their decoders can handle changes in content order, changes in the scaling factor component within the product definition section (PDS) of the GRIB files, changes to the GRIB Bit Map Section (BMS), and volume changes. These elements may change with future NCEP model implementations. NCEP will make every attempt to alert users to these changes before implementation.<br>
						<br>
						For questions regarding these changes, please contact:<br>
						<br>
						John Derber<br>
						NCEP/EMC, Global Climate and Weather Modeling Branch<br>
						Camp Springs , Maryland<br>
						301-763-8000 x 7740<br>
						John.Derber@noaa.gov<br>
						<br>
						For questions regarding the dataflow aspects of these data sets, please contact:<br>
						<br>
						Rebecca Cosgrove<br>
						NCEP/NCO Dataflow Team<br>
						Camp Springs , Maryland 20746<br>
						301-763-8000 x 7198<br>
						ncep.list.pmb-dataflow@noaa.gov</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#e5e4e2"><b>2011050914</b></td>
			<td valign="top" bgcolor="#e5e4e2"><a href="javascript:void();"><b><font color="#008000">GFS 9.0.1</font></b><font color="#0066cc"> (Click to read more)</font></a>
			<table id="div5" style="display: none;">
				<tbody>
					<tr>
						<td><br>
						Now effective May 9, 2011, at 1400 UTC. <a href="http://www.nws.noaa.gov/os/notification/tin11-07gfs_update_aab.htm"><u><font color="#0066cc">Read upgraded TIN</font></u></a><br>
						<br>
						Effective May 9, 2011, beginning with the 1200 Coordinated Universal Time (UTC) run, the National Centers for Environmental Prediction (NCEP) will upgrade the GFS. <a href="http://www.nws.noaa.gov/os/notification/tin11-07gfs_update_aaa.htm"><u><font color="#0066cc">Read full TIN</font></u></a><br>
						&nbsp;
						<ul>
							<li>Analysis Changes:
							<ul>
								<li>Improve Ozone Monitoring Instrument (OMI) quality control</li>
								<li>Remove redundant SBUV/2 total ozone</li>
								<li>Retune SBUV/2 ozone observation errors</li>
								<li>Relax AMSU-A Channel 5 quality control</li>
								<li>Update Community Radiative Transfer Model(CRTM) to version 2.0.2</li>
								<li>Include field of view size/shape/power for radiative transfer</li>
								<li>Remove down weighting of collocated radiances</li>
								<li>Limit moisture &gt;= 1.e-10 in each outer iteration and at end of analysis</li>
								<li>Include uniform (higher resolution) thinning for satellite radiances</li>
								<li>Improve location of buoys in vertical (move from 20m to 10m)</li>
								<li>Improve Gridpoint Statistical Interpolation (GSI) code with optimization and additional options</li>
								<li>Recompute background errors</li>
								<li>Include SBUV from NOAA-19</li>
								<li>Ambiguous vector quality control for ASCAT (type 290) data</li>
							</ul>
							</li>
							<li>Model Changes:
							<ul>
								<li>Set new thermal roughness length</li>
								<li>Set minimum moisture value in Stratosphere to 1.0x10-7</li>
								<li>Reduce background diffusion in the Stratosphere</li>
							</ul>
							</li>
							<li>Product Changes:
							<ul>
								<li>Correct error in the 192 hr, 12-hr precipitation bucket</li>
								<li>Addition of a new membrane sea level pressure (SLP) field to the 0.5, 1.0 and 2.5 degree pressure grib (pgrb) files only. This pressure is generated by first relaxing the underground virtual temperature and then integrating the hydrostatic equation downward. The field will be subject to Spectral Gibsing near the coast, but this will be addressed in a future implementation.</li>
							</ul>
							</li>
						</ul>
						The three model changes and the 192 hr precipitation change listed above are designed to address shortfalls introduced with the 27 July 2010 GFS resolution increase. The issues being addressed are:

						<ul>
							<li>increased low level warm bias over land</li>
							<li>negative temperature bias in the stratosphere</li>
							<li>negative wind speed bias in the stratosphere</li>
							<li>error in the calculation of the 12 hr accumulated precipitation at 192 hrs only.</li>
						</ul>
						Data Availability:<br>
						&nbsp;
						<ul>
							<li>The format and content of all GFS data sets will remain unchanged, with the exception of the addition of the new SLP field. GFS data is currently available on NOAAPORT, the NWS FTP server, the NCEP server and in NOMADS. The location of the data will remain unchanged.</li>
							<li>Product delivery timing of the GFS products is not expected to change as a result of this implementation. More information regarding the GFS and associated products can be found at:<br>
							<a href="http://www.emc.ncep.noaa.gov/GFS/doc.php"><font color="#0066cc">http://www.emc.ncep.noaa.gov/GFS/doc.php</font></a></li>
							<li>A consistent parallel feed of data will become available on the NCEP server once the model is running in parallel on the NCEP Central Computing System by mid-March. The parallel data will be available via the following URLs:<br>
							<a href="http://www.ftp.ncep.noaa.gov/data/nccf/com/gfs/para"><font color="#0066cc">http://www.ftp.ncep.noaa.gov/data/nccf/com/gfs/para</font></a><br>
							<a href="ftp://ftp.ncep.noaa.gov/pub/data/nccf/com/gfs/para"><font color="#0066cc">ftp://ftp.ncep.noaa.gov/pub/data/nccf/com/gfs/para</font></a></li>
						</ul>
						NCEP encourages all users to ensure their decoders are flexible and are able to adequately handle changes in content order, changes in the scaling factor component within the product definition section (PDS) of the GRIB files, and also any volume changes which may be forthcoming. These elements may change with future NCEP model implementations. NCEP will make every attempt to alert users to these changes prior to any implementations.<br>
						<br>
						For questions regarding these changes, please contact:<br>
						&nbsp;
						<table>
							<tbody>
								<tr>
									<td width="400"><b>John Derber</b><br>
									<br>
									NCEP/EMC, Global Climate and Weather Modeling Branch<br>
									<br>
									Camp Springs , Maryland<br>
									<br>
									301-763-8000 x 7740<br>
									<br>
									John.Derber@noaa.gov</td>
									<td><b>John H. Ward</b><br>
									<br>
									NCEP/EMC, Global Climate and Weather Modeling Branch<br>
									<br>
									Camp Springs , Maryland<br>
									<br>
									301-763-8000 x 7185<br>
									<br>
									John.Ward@noaa.gov</td>
								</tr>
							</tbody>
						</table>
						<br>
						For questions regarding the dataflow aspects of these data sets, please contact:<br>
						<br>
						<b>Rebecca Cosgrove</b><br>
						<br>
						NCEP/NCO Dataflow Team<br>
						<br>
						Camp Springs , Maryland 20746<br>
						<br>
						301-763-8000 x 7198<br>
						<br>
						ncep.list.pmb-dataflow@noaa.gov</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td valign="top" bgcolor="#e5e4e2"><b>2010072712</b></td>
			<td valign="top" bgcolor="#e5e4e2"><a href="javascript:void();"><b><font color="#008000">T574 W/ NEW PHYSICS - July 27th 2010</font></b><font color="#0066cc"> (Click to read more)</font></a>
			<table id="div6" style="display: none;">
				<tbody>
					<tr>
						<td><br>
						Effective <b>July 27th 2010 12 UTC cycle</b> the National Centers for Environmental Prediction (NCEP) upgraded the Global Forecast System (GFS).<br>
						<br>
						<a href="http://www.nws.noaa.gov/os/notification/tin10-15aaa_gfs.txt"><u><font color="#0066cc">Read the complete TIN</font></u></a><br>
						&nbsp;
						<h2>Model changes:</h2>
						&nbsp;

						<ul>
							<li>Resolution increase: T382 (35 km) -&gt; T574 (27 km)</li>
							<li>High resolution portion of forecast will be extended from 180 hrs -&gt; 192 hrs</li>
							<li>Significant changes in the definition of parameters in the 192 hr pressure grib (pgrb) and flux files</li>
							<li>Also a significant change in model physics associated with this change</li>
							<li>Additional modifications will be made to the contents of the Global Data Assimilation System (GDAS) and GFS pgrb files</li>
							<li>Changes in model physics include:
							<ul>
								<li>Radiation and cloud overlap</li>
								<li>Gravity wave grad</li>
								<li>Hurricane relocation</li>
								<li>New planetary boundary layer scheme</li>
								<li>New mass flux shallow convection</li>
								<li>Updated deep convection scheme</li>
								<li>Positive definite tracer transport scheme</li>
							</ul>
							</li>
							<li>New parameter for the GFS forecast pressure grib file:
							<ul>
								<li>Max wind gust</li>
							</ul>
							</li>
							<li>Several parameters are being deleted from the GDAS analysis pressure grib files because they are not valid for the analysis dataset and have never provided pertinent information:
							<ul>
								<li>4 precipitation types</li>
								<li>Convective precipitation rate</li>
								<li>Land sea mask</li>
								<li>Latent heat flux</li>
								<li>Sensible heat flux</li>
								<li>Precipitation rate</li>
								<li>2 m RH</li>
								<li>2 m specific humidity</li>
								<li>2 m temperature</li>
								<li>Boundary layer cloud cover</li>
								<li>Low cloud cover</li>
								<li>Convective cloud cover</li>
								<li>Skin temperature</li>
								<li>Surface upward long wave flux</li>
								<li>Surface upward short wave flux helicity</li>
							</ul>
							</li>
							<li>These parameters are being deleted from the Global Forecast Model simulated GOES grib file because they were included in error:
							<ul>
								<li>Mean sea level pressure</li>
								<li>WAVE-5 geopotential height</li>
							</ul>
							</li>
							<li>All accumulated or averaged values in the 192 hr pgrb and flux files will now be over a 6 hour period instead of 12 hours</li>
							<li>The format and content of the 3 hourly files from 180 to 192 hours will be the same as the files from 0 to 180</li>
							<li>For the flux file this includes the majority of the parameters in the files</li>
							<li>Parameters changing in the pgrb file:
							<ul>
								<li>2 m above ground max. temperature</li>
								<li>2 m above ground min. temperature</li>
								<li>Surface albedo</li>
								<li>Surface clear air UV-B downward solar flux</li>
								<li>Surface categorical freezing rain</li>
								<li>Surface categorical ice pellets</li>
								<li>Surface convective precipitation rate</li>
								<li>Surface categorical rain</li>
								<li>Surface categorical snow</li>
								<li>Atmospheric column cloud work function</li>
								<li>Surface downward long wave flux</li>
								<li>Surface downward short wave flux</li>
								<li>Surface UV-B downward solar flux</li>
								<li>Surface ground heat flux</li>
								<li>Surface latent heat flux</li>
								<li>Surface precipitation rate</li>
								<li>Low cloud base pressure</li>
								<li>Low cloud top pressure</li>
								<li>Mid-cloud base pressure</li>
								<li>Mid-cloud top pressure</li>
								<li>High cloud base pressure</li>
								<li>High cloud top pressure</li>
								<li>Surface sensible heat flux</li>
								<li>Atmospheric columb total cloud cover</li>
								<li>Boundary cloud layer total cloud cover</li>
								<li>Low cloud cover</li>
								<li>Mid-cloud cover</li>
								<li>High cloud cover</li>
								<li>Low cloud top temperature</li>
								<li>Mid-cloud top temperature</li>
								<li>High cloud top temperature</li>
								<li>Surface zonal gravity wave stress</li>
								<li>Surface zonal momentum flux</li>
								<li>Surface upward long wave flux</li>
								<li>Top of atmosphere upward long wave flux</li>
								<li>Surface upward short wave flux</li>
								<li>Top of atmosphere upward short wave flux</li>
								<li>Surface meridional gravity wave flux</li>
								<li>Surface meridional momentum flux</li>
								<li>Surface convective precipitation</li>
								<li>Surface total precipitation</li>
								<li>Surface large scale precipitation</li>
							</ul>
							</li>
							<br>
							<li>Note: For the 192 hr pgrb products available on NOAAPORT and in AWIPS the accumulations and averages will remain over the previous 12 hour period until AWIPS is modified to accommodate this change.<br>
							<br>
							One additional change to note: The file pgrbf192.grib2 on the NCEP FTP server will change from containing model output on a 2.5 degree grid to containing model output on a 1 degree grid. The 2.5 degree output will be provided in a new file with the name pgrbf192.2p5deg.grib2.<br>
							<br>
							The format of the 1/2 and 1 degree pressure grib files will remain the same except for the changes in variables listed above. The size of these files will nto change significantly. With the increase in model resolution...the size of the sigma coefficient files and the surface flux files will increase significantly.<br>
							<br>
							If you have any questions concerning these changes, please contact:
							<table>
								<tbody>
									<tr>
										<td width="300"><b>John H. Ward</b><br>
										NCEP...Global Modeling Branch<br>
										Camp Springs, Maryland<br>
										Phone: 301-763-8000 X7185<br>
										Email: <a href="mailto:John.Ward@noaa.gov"><u><font color="#0066cc">John.Ward@noaa.gov</font></u></a></td>
										<td width="300"><b>Shrinivas Moorthi</b><br>
										NCEP...Global Modeling Branch<br>
										Camp Springs, Maryland<br>
										Phone: 301-763-8000 X7233<br>
										Email: <a href="mailto:Shrinivas.Moorthi@noaa.gov"><u><font color="#0066cc">Shrinivas.Moorthi@noaa.gov</font></u></a></td>
									</tr>
								</tbody>
							</table>
							<br>
							<a href="http://www.nws.noaa.gov/os/notification/tin10-15aaa_gfs.txt"><u><font color="#0066cc">Read the complete TIN</font></u></a></li>
							<br>
							<br>
							<br>
							<br>
							<br>
							&nbsp;
							<li>&nbsp;</li>
							<li>&nbsp;</li>
							<li>&nbsp;</li>
						</ul>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<p><br>
_________________________________________________________________________________________________________________<br>
&nbsp;</p>

<h1><a href="https://www.emc.ncep.noaa.gov/gmb/STATS/html/model_changes.html"><u>List of Historical GFS upgrades (1980-present)</u></a></h1>
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
 
