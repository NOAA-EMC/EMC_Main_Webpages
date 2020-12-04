<?php
header('X-Frame-Options: GOFORIT');  
global $browser_title;
$browser_title = 'NGAC';   
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
         <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Background</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
         </h6>

          <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#">GEFS-Aerosols development history</a></li>
	    <li class="nav-item"><a class="nav-link" href="#">Rick Saylor’s ICAP 2019 presentation</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Partha Bhatacharjee  AMS 2020 presentation</a></li>
            <li class="nav-item"><a class="nav-link" href="#">GEFS V12 implementation information</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Aerosols Task List</a></li>
          </ul>
       

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
    <span>Evaluation Information</span>
        <a class="d-flex align-items-center text-muted" href="#">
           <span data-feather="plus-circle"></span>
        </a>
</h6>
<ul class="nav flex-column">
	<li class="nav-item"><a class="nav-link" href="#">GEFS V12 Evaluation Letter</a></li>
	<li class="nav-item"><a class="nav-link" href="#">EMC verification statistics web graphics</a></li>
	<li class="nav-item"><a class="nav-link" href="#">EMC Evaluation ftp site graphics</a></li>
	<li class="nav-item"><a class="nav-link" href="#">GEFS Evaluation Plan</a></li> 
	<li class="nav-item"><a class="nav-link" href="#">Old Aerosol evaluation plan</a></li> 
</ul>


<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
    <span>Forecasts and inputs</span>
        <a class="d-flex align-items-center text-muted" href="#">
           <span data-feather="plus-circle"></span>
        </a>
</h6>
<ul class="nav flex-column">
	<li class="nav-item"><a class="nav-link" href="#">FV3GFS Real-time Forecasts</a></li>
	<li class="nav-item"><a class="nav-link" href="#">Soil map for dust</a></li>
</ul>


<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
    <span>Users</span>
        <a class="d-flex align-items-center text-muted" href="#">
           <span data-feather="plus-circle"></span>
        </a>
</h6>
<ul class="nav flex-column">
	<li class="nav-item"><a class="nav-link" href="#">ICAP  (Ed Hyer, Navy/ NRL)</a></li>
	<li class="nav-item"><a class="nav-link" href="#">WMO SDS-WAS (Oriol Joba, Barcelona SuperComp Center)</a></li>
	<li class="nav-item"><a class="nav-link" href="#">Global Air Quality Index project  (Chris Gan, Singapore)</a></li>  
	<li class="nav-item"><a class="nav-link" href="#">WMO VFSP-WASL (Ron Jezequel)</a></li>
	<li class="nav-item"><span style="display: block;padding: .5rem 1rem;font-weight: 500;color: #333">Miami WFO (<a href="mailto:Jeral.Estupinan@noaa.gov">Jeral.Estupinan@noaa.gov</a>)</span></li>
	<li class="nav-item"><span style="display: block;padding: .5rem 1rem;font-weight: 500;color: #333">San Juan WFO (<a href="mailto:Ernesto.Rodriquez@noaa.gov">Ernesto.Rodriquez@noaa.gov</a>)</span></li>
	<li class="nav-item"><span style="display: block;padding: .5rem 1rem;font-weight: 500;color: #333"><a href="https://www.star.nesdis.noaa.gov/star/socd_sst_team.php">NESDIS STAR</a>(<a href ="mailto:andy.harris@noaa.gov">andy.harris@noaa.gov</a>)  SST retrievals</span></li>
	<li class="nav-item"><a class="nav-link" href="#">NCEP/CPC  (Craig Long)  UV Index </a></li>
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
     <h2 id="section-title">NEMS GFS Aerosol Component</h2>
     	<div id="description">
				<p>NCEP's NEMS GFS Aerosol Component (NGAC) is a global in-line aerosol forecast system (Figure 1). The forecast model component of the NGAC is the Global 
				Forecast System (GFS) based on the NOAA Environmental Modeling System (NEMS) which, in turn, is based on the common modeling framework using Earth System 
				Modeling Framework (ESMF). The aerosol component of the NGAC is Goddard Chemistry Aerosol Radiation and Transport Model (GOCART). 
				Funded mainly by NASA Earth Science programs, the GOCART model was developed to simulate atmospheric aerosols (including sulfate, 
				black carbon (BC), organic carbon (OC), dust, and sea-salt), CO, and sulfur gases. The implementation of GSFC's GOCART module into NEMS GFS at 
				NCEP was funded by NOAA-NASA-DOD JCSDA and NASA Applied Sciences Program.</p>

<p>The initial production implementation of NGAC with global dust only forecast was implemented in Sep 2012. 
The current NGAC operational forecast produces 120-hour global multi-species forecasts including dust, sea salt, sulfate, and carbonaceous aerosols. 
The system runs twice daily within the NCEP Production Job Suite at the 0000Z cycle and 1200Z cycle. Output is posted to a 1x1 degree longitude/latitude 
grid with 3-h forecast interval to 120-h.</p>

<p>Real-time graphics of NGAC forecasts are generated by EMC, see <a href="https://www.emc.ncep.noaa.gov/gmb/NGAC/html/realtime.ngac.html">http://www.emc.ncep.noaa.gov/gmb/NGAC/html/realtime.ngac.html</a></p>

<center><img src="https://www.emc.ncep.noaa.gov/NEMS/NGAC.png" width="600"></center>

<p style="text-align: center;">Figure 1 : Schematic of the in-line NGAC system within the NEMS modeling framework</p>

<p>No further development of NGAC will be done. It will be replaced by a global FV3 run coupled to the GSD Aerosol model, which will run as part of the NCEP Global Ensemble Forecast (GEFS) suite, as part of the GEFS <a href="https://www.emc.ncep.noaa.gov/users/meg/gefsv12/"> Version 12 upgrade</a>. The GEFS v12 implemenetetion is planned for the fall of 2020.</p> 


<p>&nbsp;</p>

<p><strong><span style="font-size:14px;">REFERENCES</span></strong></p>

<ul>
	<li>Lu, C.-H., A. da Silva, J. Wang, S. Moorthi, M. Chin, P. Colarco, Y. Tang, P. S. Bhattacharjee, S.-P. Chen, H.-Y. Chuang, H-M. H. Juang, J. McQueen, and M. Iredell, 2016: The implementation of NEMS GFS Aerosol Component (NGAC) Version 1.0 for global dust forecasting at NOAA/NCEP, Geosci. Model Dev. Discuss., 9, 1-37.</li>
	<li>Lu, S., H-C Huang, Y-T Hou, Y. Tang, J. McQueen, A. da Silva, M. Chin, E. Joseph, and W. Stockwell, 2010: Development of NCEP Global Aerosol Forecasting System: An overview and its application for improving weather and air quality forecasts, NATO Science for Peace and Security Series: Air Pollution Modeling and Its Application XX, 451-454, doi:10.1007/978-90-481-3812-8.</li>
	<li>Lu, S., Iredell, M., Wang, J., Moorthi, S., McQueen, J., Chuang, H.-Y., Hou, Y.-T., H. Juang, H., Yang, W., da Silva, A., Chin, M. 2013: The NEMS GFS Aerosol Component: NCEP's global aerosol forecast system, NCEP Office Note 472, 26 pp</li>
	<li>Benedetti, A., J.M. Baldasano, S. Basart, F. Benincasa, O.Boucher, M. Brooks, J.-P. Chen, P.R. Colarco, S. Gong, N. Huneeus, L. T. Jones, S. Lu, L. Menut, J.-J. Morcrette, J. Mulcahy, S. Nickovic, C. Perez Garcia-Pando, J.S. Reid, T.T. Sekiyama, T.Y. Tanaka, E. Terradellas, D.L. Westphal, X.-Y. Zhang, and C.-H. Zhou, 2014: Operational Dust Forecasting, Chapter 10 in: Knippertz, P.; Stuut, J.-B.(eds.), Mineral Dust: A Key Player in the Earth System, Springer Netherlands, 121-148, ISBN 978-94-017-8977-6. doi:10.1007/978-94-017-8978-3_10.</li>
	<li>Sessions, W. R., J. S. Reid, A. Benedetti, P. R. Colarco, A. da Silva, S. Lu, T. Sekiyama, T.Y. Tanaka, J. M. Baldasano, S. Basart, M. E. Brooks, T. F. Eck, M. Iredell, J. A. Hansen, O. C. Jorba, H.-M. H. Juang, P. Lynch, J-J Morcrette, S. Moorthi, J. Mulcahy, Y. Pradhan, M. Razinger, C. B. Sampson, J. Wang, and D. L. Westphal, 2015: Development towards a global operational aerosol consensus: basic climatological characteristics of the International Cooperative for Aerosol Prediction Multi-Model Ensemble (ICAP-MME), Atmos. Chem. Phys., 15, 355-362, doi:10.5194/acp-15-335-2015.</li>
        <li>Wang, J., Bhattacharjee, P. S., Tallapragada, V., Lu, C.-H., Kondragunta, S., da Silva, A., Zhang, X., Chen, S.-P., Wei, S.-W., Darmenov, A. S., McQueen, J., Lee, P., Koner, P., and Harris, A.: The implementation of NEMS GFS Aerosol Component (NGAC) Version 2.0 for global multispecies forecasting at NOAA/NCEP – Part 1: Model descriptions, Geosci. Model Dev., 11, 2315–2332, <a href="https://doi.org/10.5194/gmd-11-2315-2018"> https://doi.org/10.5194/gmd-11-2315-2018</a>, 2018.</li>
        <li>Bhattacharjee, P. S., Wang, J., Lu, C.-H., and Tallapragada, V.: The implementation of NEMS GFS Aerosol Component (NGAC) Version 2.0 for global multispecies forecasting at NOAA/NCEP – Part 2: Evaluation of aerosol optical thickness, Geosci. Model Dev., 11, 2333–2351, <a href="https://doi.org/10.5194/gmd-11-2333-2018"> https://doi.org/10.5194/gmd-11-2333-2018</a>, 2018.</li>
</ul>

<p style="text-align: center;"><a href="https://www.weather.gov/disclaimer">DISCLAIMER</a></p>
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
<script>
var links = document.getElementsByClassName("nav-link");
var base_url = "https://emc.ncep.noaa.gov/emc/pages/numerical_forecast_systems/ngac/documents";
var iframe = document.createElement('iframe');
iframe.style.width="100%";
iframe.style.height="100vh";
for (var i = 0; i < links.length; i++) {
  //console.log(links[i].text);
  links[i].addEventListener("click", function(){
    console.log(this.text);
    if ("GEFS-Aerosols development history" === this.text){
        var contentDescription = document.getElementById('description');
        contentDescription.innerHTML = "";
        iframe.src = "ngac/documents/background/FV3GFS-Chem_Run_History.pdf";
        contentDescription.appendChild(iframe);        
    } else if ("Rick Saylor’s ICAP 2019 presentation" == this.text){
        var contentDescription = document.getElementById('description');
        contentDescription.innerHTML = "";
        iframe.src = "ngac/documents/background/ICAP2019-NOAAUpdate-FINAL.pptx.pdf";
        contentDescription.appendChild(iframe);
    }else if ("Partha Bhatacharjee  AMS 2020 presentation" == this.text){
       var contentDescription = document.getElementById('description');
       contentDescription.innerHTML = "";
       iframe.src = "ngac/documents/background/AMS2020_PSB.pdf";
       contentDescription.appendChild(iframe);
    }else if ("GEFS V12 implementation information" == this.text){
       var contentDescription = document.getElementById('description');
       contentDescription.innerHTML = "";
       iframe.src = "ngac/documents/background/GEFS_v12-Info.pdf";
       contentDescription.appendChild(iframe);
    }else if ("Aerosols Task List" == this.text){
        var contentDescription = document.getElementById('description');
        contentDescription.innerHTML = "";
        iframe.src = "ngac/documents/background/Aerosols_tasks.xlsx";
        contentDescription.appendChild(iframe);  
    }else if ("GEFS V12 Evaluation Letter" == this.text){
       var contentDescription = document.getElementById('description');
       contentDescription.innerHTML = "";
       iframe.src = "ngac/documents/evaluationInformation/Eval_Letter_GEFSv12.docx.pdf";
       contentDescription.appendChild(iframe);
    }else if ("EMC verification statistics web graphics" == this.text){
       var contentDescription = document.getElementById('description');
       contentDescription.innerHTML = "";
       iframe.src = "https://www.emc.ncep.noaa.gov/gc_wmb/parthab/GEFS-Aerosol/html/fv3_mongridstat_png.html";
       contentDescription.appendChild(iframe);
    }else if ("EMC Evaluation ftp site graphics" == this.text){
       var contentDescription = document.getElementById('description');
       contentDescription.innerHTML = "";
       iframe.src = "https://www.emc.ncep.noaa.gov/gc_wmb/parthab/GSD_Chem/";
       contentDescription.appendChild(iframe);
    }else if ("GEFS Evaluation Plan" == this.text){
       var contentDescription = document.getElementById('description');
       contentDescription.innerHTML = "";
       iframe.src = "ngac/documents/evaluationInformation/GEFS_v12_Evaluation_Plan.pdf";
       contentDescription.appendChild(iframe);
    }else if ("Old Aerosol evaluation plan" == this.text){
       var contentDescription = document.getElementById('description');
       contentDescription.innerHTML = "";
       iframe.src = "https://www.emc.ncep.noaa.gov/gc_wmb/parthab/GSD_Chem/";
       contentDescription.appendChild(iframe);
    }else if ("FV3GFS Real-time Forecasts" == this.text){
       window.location = "https://fim.noaa.gov/FV3chem/";
    }else if ("Soil map for dust" == this.text){
       var contentDescription = document.getElementById('description');
       var img = document.createElement("IMG"); 
       contentDescription.innerHTML = "";
       img.src = "ngac/documents/forecastInputs/12type_isric_soil.jpg";
       img.style.width="100%";
       img.style.height="100%";
       contentDescription.appendChild(img);
    }else if ("ICAP  (Ed Hyer, Navy/ NRL)" == this.text){
       window.location = "http://icap.atmos.und.edu/";
    }else if ("WMO SDS-WAS (Oriol Joba, Barcelona SuperComp Center)" == this.text){
       window.location = "https://public.wmo.int/en/our-mandate/focus-areas/environment/SDS/warnings";
    }else if ("Global Air Quality Index project  (Chris Gan, Singapore)" == this.text){
       window.location = "https://aqicn.org/forecast/models/";
    }else if ("WMO VFSP-WASL (Ron Jezequel)" == this.text){
       window.location = "http://www.weather.gov.sg/vfsp-was/about-vfsp-was/";
    }else if ("Miami WFO (Jeral.Estupinan@noaa.gov)" == this.text){}
    else if ("San Juan WFO (Ernesto.Rodriquez@noaa.gov)" == this.text){}
    else if ("NESDIS STAR (andy.harris@noaa.gov)  SST retrievals" == this.text){}
    else if ("NCEP/CPC  (Craig Long)  UV Index" == this.text){
      window.location = "https://www.cpc.ncep.noaa.gov/products/stratosphere/uv_index/uv_current.shtml";
    }
});
}
</script>
</body>
      
</html>
 
