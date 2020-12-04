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
            <a class="nav-link active" href="https://www.emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/gfs/references.php">
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
            <a class="nav-link" href="https://vlab.ncep.noaa.gov/group/gfs/home">
              Developers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://vlab.ncep.noaa.gov/web/gfs">
              Collaborative VLab Page
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://vlab.ncep.noaa.gov/web/gfs/rfcs">
              RFCs
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
     <h2 id="section-title">GFS References</h2>
<P>
     	<div id="description">
     		<span style="font-size:15px;"><center><strong>References (A-Z)</strong></center></span>
<ul>
<li>For references on the FV3 dynamic core implemented in the GFS in June 2019, go to the <a href="https://www.gfdl.noaa.gov/fv3/">FV3 Home Page</a> at GFDL
<p>
<li>Alpert, J., 2006 Sub-Grid Scale Mountain Blocking at NCEP, 20th Conf. WAF/16 Conf. NWP P2.4</li>
<li>Alpert, J. C., S-Y. Hong and Y-J. Kim: 1996, Sensitivity of cyclogenesis to lower troposphere enhancement of gravity wave drag using the EMC MRF, Proc. 11 Conf. On NWP, Norfolk, 322-323.</li>
<li>
Alpert,J,, M. Kanamitsu, P. M. Caplan, J. G. Sela, G. H. White, and E. Kalnay, 1988: Mountain induced gravity wave drag parameterization in the NMC medium-range forecast model.  Pre-prints, Eighth Conf. on Numerical Weather Prediction, Baltimore, MD, Amer. Meteor. Soc., 726-733.
</li>
<li>
Arakawa, A. and W. H. Shubert, 1974: Interaction of a Cumulus Ensemble with the Large-Scale Environment, Part I. J. Atmos. Sci., 31, 674-704.
</li>
<li>
Asselin, R., 1972: Frequency filter for time integrations. Mon. Wea. Rev., 100, 487-490.
</li>
<li>
Betts, A.K., S.-Y. Hong and H.-L. Pan, 1996: Comparison of NCEP-NCAR Reanalysis with 1987 FIFE data. Mon. Wea. Rev., 124, 1480-1498
</li>
<li>
Briegleb, B. P., P. Minnus, V. Ramanathan, and E. Harrison, 1986: Comparison of regional clear-sky albedo inferred from satellite observations and model computations. J. Clim. and Appl. Meteo., 25, 214-226.
</li>
<li>
Buehner, M., J. Morneau, and C. Charette, 2013: Four-dimensional ensemble-variational data assimilation for global deterministic weather prediction. Nonlinear Processes Geophys., 20, 669-682.
</li>
<li>
Campana, K. A., Y-T Hou, K. E. Mitchell, S-K Yang, and R. Cullather, 1994: Improved diagnostic cloud parameterization in NMC's global model. Preprints of the Tenth Conference on Numerical Weather Prediction, Portland, OR, American Meteorological Society, 324-325.
</li>
<li>
Charnock, H., 1955: Wind stress on a water surface. Quart. J. Roy. Meteor. Soc., 81, 639-640.
</li>
<li>
Chen, F., K. Mitchell, J. Schaake, Y. Xue, H.-L. Pan, V. Koren, Q. Y. Duan, M. Ek, and A. Betts, 1996: Modeling of land surface evaporation by four schemes and comparison with FIFE observations. J. Geophys. Res., 101, D3, 7251-7268.
</li>
<li>
Chou, M-D, 1990: Parameterizations for the absorption of solar radiation by O2 and CO2 with application to climate studies. J. Climate, 3, 209-217.
</li>
<li>
Chou, M-D, 1992: A solar radiation model for use in climate studies. J. Atmos. Sci., 49, 762-772.
</li>
<li>
Chou, M-D and K-T Lee, 1996: Parameterizations for the absorption of solar radiation by water vapor and ozone. J. Atmos. Sci., 53, 1204-1208.
</li>
<li>
Chou, M.D., M. J. Suarez, C. H. Ho, M. M. H. Yan, and K. T. Lee, 1998: Parameterizations for cloud overlapping and shortwave single scattering properties for use in general circulation and cloud ensemble models. J. Climate, 11, 202-214.
</li>
<li>
Chun, H.-Y., and J.-J. Baik, 1998: Momentum Flux by Thermally Induced Internal Gravity Waves and Its Approximation for Large-Scale Models. J. Atmos. Sci., 55, 3299-3310.
</li>
<li>
Chun, H.-Y., Song, I.-S., Baik, J.-J. and Y.-J. Kim. 2004: Impact of a Convectively Forced Gravity Wave Drag Parameterization in NCAR CCM3. J. Climate, 17, 3530-3547.
</li>
<li>
Chun, H.-Y., Song, M.-D., Kim, J.-W., and J.-J. Baik, 2001: Effects of Gravity Wave Drag Induced by Cumulus Convection on the Atmospheric General Circulation. J. Atmos. Sci., 58, 302-319.
</li>
<li>
Clough, S.A., M.J. Iacono, and J.-L. Moncet, 1992: Line-by-line calculations of atmospheric fluxes and cooling rates: Application to water vapor. J. Geophys. Res., 97, 15761-15785.
</li>
<li>
Clough, S.A., M.W. Shephard, E.J. Mlawer, J.S. Delamere, M.J. Iacono, K.Cady-Pereira, S. Boukabara, and P.D. Brown, 2005: Atmospheric radiative transfer modeling: A summary of the AER codes, J. Quant. Spectrosc. Radiat. Transfer, 91, 233-244, doi:10.1016/ j.jqsrt.2004.05.058.J. Geophys. Res., 97, 15761-15785
</li>
<li>
Coakley, J. A., R. D. Cess, and F. B. Yurevich, 1983: The effect of tropospheric aerosols on the earth's radiation budget: a parameterization for climate models. J. Atmos. Sci., 42, 1408-1429.
</li>
<li>
Dorman, J.L., and P.J. Sellers, 1989: A global climatology of albedo, roughness length and stomatal resistance for atmospheric general circulation models as represented by the Simple Biosphere model (SiB). J. Appl. Meteor., 28, 833-855.
</li>
<li>
Ebert, E.E., and J.A. Curry, 1992: A parameterization of ice cloud optical properties for climate models. J. Geophys. Res., 97, 3831-3836.
</li>
<li>
Environmental Modeling Center, 2003: The GFS Atmospheric Model. NCEP Office Note 442, Global Climate and Weather Modeling Branch, EMC, Camp Springs, Maryland.
</li>
<li>
Fanglin Yang, Kenneth Mitchell, Yu-Tai Hou, Yongjiu Dai, Xubin Zeng, Zhou Wang, and Xin-Zhong Liang, 2008: Dependence of land surface albedo on solar zenith angle: observations and model parameterizations. Journal of Applied Meteorology and Climatology. No.11, Vol 47, 2963-2982.
</li>
<li>
Fanglin Yang, Hua-Lu Pan, Steve Krueger, Shrinivas Moorthi, Stephen Lord, 2006: Evaluation of the NCEP Global Forecast System at the ARM SGP Site. Monthly Weather Review. 134, No. 12, 3668-3690.
</li>
<li>
Frohlich, C. and G. E. Shaw, 1980: New determination of Rayleigh scattering in the terrestrial atmosphere. Appl. Opt., 14, 1773-1775.
</li>
<li>
Fu, Q., 1996: An Accurate Parameterization of the Solar Radiative Properties of Cirrus Clouds for Climate Models. J. Climate, 9, 2058-2082.
</li>
<li>
Hess, M., P. Koepke, and I. Schult, 1998: Optical properties of aerosols and clouds: The software package OPAC. Bull. Am. Meteor. Soc., 79, 831-844.
</li>
<li>
Grell, G. A., 1993: Prognostic Evaluation of Assumprions Used by Cumulus Parameterizations. Mon. Wea. Rev., 121, 764-787.
</li>
<li>
Grumbine, R. W., 1994: A sea-ice albedo experiment with the NMC medium range forecast model. Weather and Forecasting, 9, 453-456.
</li>
<li>
Han, J., and H.-L. Pan, 2006: Sensitivity of hurricane intensity forecast to convective momentum transport parameterization. Mon. Wea. Rev., 134, 664-674.
</li>
<li>
Han, J., and H.-L. Pan, 2011: Revision of convection and vertical diffusion schemes in the NCEP global forecast system. Weather and Forecasting, 26, 520-533.
</li>
<li>
Han, J., M. Witek, J. Teixeira, R. Sun, H.-L. Pan, J. K. Fletcher, and C. S. Bretherton, 2016: Implementation in the NCEP GFS of a hybrid eddy-diffusivity mass-flux (EDMF) boundary layer parameterization with dissipative heating and modified stable boundary layer mixing. Weather and Forecasting, 31, 341-352.
</li>
<li>
Hong, S.-Y. and H.-L. Pan, 1996: Nonlocal boundary layer vertical diffusion in a medium-range forecast model. Mon. Wea. Rev., 124, 2322-2339.
</li>
<li>
Hong, S.-Y., 1999: New global orography data sets. NCEP Office Note #424.
</li>
<li>
Hou, Y-T, K. A. Campana and S-K Yang, 1996: Shortwave radiation calculations in the NCEP's global model. International Radiation Symposium, IRS-96, August 19-24, Fairbanks, AL.
</li>
<li>
Hou, Y.-T., S. Moorthi, and K.A. Campana, 2002: Parameterization of solar radiation transfer in the NCEP models. NCEP Office Note 441.
</li>
<li>
Hu, Y.X., and K. Stamnes, 1993: An accurate parameterization of the radiative properties of water clouds suitable for use in climate models. J. Climate, 6, 728-742.
</li>
<li>
Iacono, M.J., E.J. Mlawer, S.A. Clough, and J.-J. Morcrette, 2000: Impact of an improved longwave radiation model, RRTM, on the energy budget and thermodynamic properties of the NCAR community climate model, CCM3, J. Geophys. Res., 105(D11), 14,873-14,890.2.
</li>
<li>
Johansson, Ake, 2008: Convectively Forced Gravity Wave Drag in the NCEP Global Weather and Climate Forecast Systems, SAIC/Environmental Modelling Center internal report.
</li>
<li>
Joseph, D., 1980: Navy 10' global elevation values. National Center for Atmospheric Research notes on the FNWC terrain data set, 3 pp.
</li>
<li>
Juang, H.-M. H., and M. Kanamitsu, 2001: The computational performance of the NCEP seasonal forecast model on Fujitsu VPP5000 at ECMWF. Proc. Ninth ECMWF Workshop on the use of high performance computing in Meteorology, Reading, UK, ECMWF, 338-347.
</li>
<li>
Juang, H.-M. H., 2004: A reduced spectral transform for the NCEP seasonal Forecast Global Spectral Atmospheric Model. Monthly Weather Review, 132, 1019-1035.
</li>
<li>
Juang, H.-M. H., 2005: Discrete generalized hybrid vertical coordinates by a mass, energy, and angular momentum conserving finite-difference scheme. NCEP Office Note 455, 35pp.
</li>
<li>
Juang, H.-M. H., and S.-Y. Hong, 2010: Forward semi-Lagrangian advection with mass conservation and positive definiteness for falling hydrometeors. Monthly Weather Review, 138, 1778-1791.
</li>
<li>
Juang, H.-M. H., 2011:A multiconserving discretization with enthalpy as a thermodynamic prognostic variable in generalized hybrid vertical coordinates for the NCEP global forecast system. Monthly Weather Review, 139, 1583-1607.
</li>
<li>
Juang, H-M, et al. 2014:Regional Spectral Model workshop in memory of John Roads and Masao Kanamitsu, BAMS, A. Met. Soc, ES61-ES65.
</li>
<li>
Juang, H.-M. H., 2014: A discretization of deep-atmospheric nonhydrostatic dynamics on generalized hybrid vertical coordinates for NCEP global spectral model. NCEP Office Note 477, 40pp.
</li>
<li>
Kalnay, E. and M. Kanamitsu, 1988: Time Scheme for Stronglyt Nonlinear Damping Equations. Mon. Wea. Rev., 116, 1945-1958.
</li>
<li>
Kalnay, M. Kanamitsu, and W.E. Baker, 1990: Global numerical weather prediction at the National Meteorological Center. Bull. Amer. Meteor. Soc., 71, 1410-1428.
</li>
<li>
Kanamitsu, M., 1989: Description of the NMC global data assimilation and forecast system. Wea. and Forecasting, 4, 335-342.
</li>
<li>
Kanamitsu, M., J.C. Alpert, K.A. Campana, P.M. Caplan, D.G. Deaven, M. Iredell, B. Katz, H.-L. Pan, J. Sela, and G.H. White, 1991: Recent changes implemented into the global forecast system at NMC. Wea. and Forecasting, 6, 425-435.
</li>
<li>
Kiehl, J.T., J. J. Hack, G. B. Bonan, B. A. Boville, D. L. Williamson, and P. J. Rasch, 1998: The national center for atmospheric research community climate model CCM3. J. Climate, 11,1131-1149.
</li>
<li>
Kim, Y-J and A. Arakawa, 1995: Improvement of orographic gravity wave parameterization using a mesoscale gravity wave model. J. Atmos. Sci. 52, 11, 1875-1902.
</li>
<li>
Kleist, D.T., D.F. Parrish, J.C. Derber, R. Treadon, R.M. Errico, and R. Yang, 2008: Improving incremental balance in the GSI 3DVAR analysis system. Mon. Wea. Rev., 137, 1046-1060.
</li>
<li>
Kleist, D.T., D.F. Parrish, J.C. Derber, R. Treadon, W.-S. Wu, and S. Lord, 2008: Implementation of a new 3DVAR analysis as part of the NCEP global data assimilation system. Wea. Forecasting., 24, 1691-1705.
</li>
<li>
Kleist, D. T., 2012: An evaluation of hybrid variational-ensemble data assimilation for the NCEP GFS , Ph.D. Thesis, Dept. of Atmospheric and Oceanic Science, University of Maryland-College Park, 149 pp.
</li>
<li>
Koepke, P., M. Hess, I. Schult, and E.P. Shettle, 1997: Global aerosol data set. MPI Meteorologie Hamburg Report No. 243, 44 pp.
</li>
<li>
Lacis, A.A., and J. E. Hansen, 1974: A parameterization for the absorption of solar radiation in the Earth's atmosphere. J. Atmos. Sci., 31, 118-133.
</li>
<li>
Leith, C.E., 1971: Atmospheric predictability and two-dimensional turbulence. J. Atmos. Sci., 28, 145-161.
</li>
<li>
Lindzen, R.S., 1981: Turbulence and stress due to gravity wave and tidal breakdown. J. Geophys. Res., 86, 9707-9714.
</li>
<li>
Lott, F and M. J. Miller: 1997, A new subgrid-scale orographic drag parameterization: Its formulation and testing, QJRMS, 123, pp101-127.
</li>
<li>
Matthews, E., 1985: "Atlas of Archived Vegetation, Land Use, and Seasonal Albedo Data Sets.", NASA Technical Memorandum 86199, Goddard Institute for Space Studies, New York.
</li>
<li>
Mitchell, K. E. and D. C. Hahn, 1989: Development of a cloud forecast scheme for the GL baseline global spectral model. GL-TR-89-0343, Geophysics Laboratory, Hanscom AFB, MA.
</li>
<li>
Mlawer, E.J., S.J. Taubman, P.D. Brown, M.J. Iacono, and S.A. Clough, 1997: Radiative transfer for inhomogeneous atmospheres: RRTM, a validated correlated-k model for the longwave. J. Geophys. Res., 102, 16663-16682.
</li>
<li>
Miyakoda, K., and J. Sirutis, 1986: Manual of the E-physics. [Available from Geophysical Fluid Dynamics Laboratory, Princeton University, P.O. Box 308, Princeton, NJ 08542.]
</li>
<li>
NMC Development Division, 1988: Documentation of the research version of the NMC Medium-Range Forecasting Model. NMC Development Division, Camp Springs, MD, 504 pp.
</li>
<li>
Pan, H-L. and L. Mahrt, 1987: Interaction between soil hydrology and boundary layer developments. Boundary Layer Meteor., 38, 185-202.
</li>
<li>
Pan, H.-L. and W.-S. Wu, 1995: Implementing a Mass Flux Convection Parameterization Package for the NMC Medium-Range Forecast Model. NMC Office Note, No. 409, 40pp. [ Available from NCEP, 5200 Auth Road, Washington, DC 20233 ]
</li>
<li>
Pierrehumbert, R.T., 1987: An essay on the parameterization of orographic wave drag. Observation, Theory, and Modelling of Orographic Effects, Vol. 1, Dec. 1986, European Centre for Medium Range Weather Forecasts, Reading, UK, 251-282.
</li>
<li>
Ramsay, B.H., 1998: The interactive multisensor snow and ice mapping system. Hydrol. Process. 12, 1537-1546.
</li>
<li>
Reynolds, R. W. and T. M. Smith, 1994: Improved global sea surface temperature analyses. J. Climate, 7, 929-948.
</li>
<li>
Roberts, R.E., J.A. Selby, and L.M. Biberman, 1976: Infrared continuum absorption by atmospheric water vapor in the 8-12 micron window. Appl. Optics., 15, 2085-2090.
</li>
<li>
Rodgers, C.D., 1968: Some extension and applications of the new random model for molecular band transmission. Quart. J. Roy. Meteor. Soc., 94, 99-102.
</li>
<li>
Schwarzkopf, M.D., and S.B. Fels, 1985: Improvements to the algorithm for computing CO2 transmissivities and cooling rates. J. Geophys. Res., 90, 10541-10550.
</li>
<li>
Schwarzkopf, M.D., and S.B. Fels, 1991: The simplified exchange method revisited: An accurate, rapid method for computation of infrared cooling rates and fluxes. J. Geophys. Res., 96, 9075-9096.
</li>
<li>
Sela, J., 1980: Spectral modeling at the National Meteorological Center, Mon. Wea. Rev., 108, 1279-1292.
</li>
<li>
Sela, J., 2009: The implementation of the sigma-pressure hybrid coordinate into the GFS.  NCEP Office Note #461, pp25.
</li>
<li>
Sela, J., 2010: The derivation of sigmapressure hybrid coordinate semi-Lagrangian model equations for the GFS. NCEP Office Note #462 pp31.
</li>
<li>
Slingo, A., 1989: A GCM parameterization for the shortwave radiative properties pf water clouds. J. Atmos. Sci.,46, 1419-1427.
</li>
<li>
Slingo, J.M., 1987: The development and verification of a cloud prediction model for the ECMWF model. Quart. J. Roy. Meteor. Soc., 113, 899-927.
</li>
<li>
Slingo, A., 1989: A GCM parameterization for the shortwave radiative properties pf water clouds. J. Atmos. Sci.,46, 1419-1427.
</li>
<li>
Stephens, G. L., 1984: The parameterization of radiation for numerical weather prediction and climate models. Mon. Wea. Rew., 112, 826-867.
</li>
<li>
Staylor, W. F. and A. C. Wilbur, 1990: Global surface albedoes estimated from ERBE data. Preprints of the Seventh Conference on Atmospheric Radiation, San Francisco CA, American Meteorological Society, 231-236.
</li>
<li>
Sundqvist, H., E. Berge, and J. E. Kristjansson, 1989: Condensation and cloud studies with mesoscale numerical weather prediction model. Mon. Wea. Rev., 117, 1641- 1757.
</li>
<li>
Tiedtke, M., 1983: The sensitivity of the time-mean large-scale flow to cumulus convection in the ECMWF model. ECMWF Workshop on Convection in Large-Scale Models, 28 November-1 December 1983, Reading, England, pp. 297-316.
</li>
<li>
Troen, I. and L. Mahrt, 1986: A simple model of the atmospheric boundary layer; Sensitivity to surface evaporation. Bound.-Layer Meteor., 37, 129-148
</li>
<li>
Xu, K. M., and D. A. Randall, 1996: A semiempirical cloudiness parameterization for use in climate models. J. Atmos. Sci., 53, 3084-3102.
</li>
<li>
Yang, F., 2009: On the Negative Water Vapor in the NCEP GFS: Sources and Solution. 23rd Conference on Weather Analysis and Forecasting/19th Conference on Numerical Weather Prediction, 1-5 June 2009, Omaha, NE.
</li>
<li>
Yang, F., K. Mitchell, Y. Hou, Y. Dai, X. Zeng, Z. Wang, and X. Liang, 2008: Dependence of land surface albedo on solar zenith angle: observations and model parameterizations. Journal of Applied Meteorology and Climatology.No.11, Vol 47, 2963-2982
</li>
<li>
Zeng, X., M. Zhao, and R.E. Dickinson, 1998: Intercomparison of bulk aerodynamical algorithms for the computation of sea surface fluxes using TOGA COARE and TAO data. J. Climate, 11, 2628-2644.
</li>
<li>
Zhao, Q. Y., and F. H. Carr, 1997: A prognostic cloud scheme for operational NWP models. Mon. Wea. Rev., 125,1931-1953.
</li>
<li>
Zheng, W., H. Wei, Z. Wang, X. Zeng, J. Meng, M. Ek, K. Mitchell, and J. Derber, 2012: Improvement of daytime land surface skin temperature over arid regions in the NCEP GFS model and its impact on satellite data assimilation. J. Geophys. Res., 117, D06117, doi:10.1029/2011JD015901.
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
 
