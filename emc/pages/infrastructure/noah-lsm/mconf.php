<?php
global $browser_title;
 $browser_title = 'NOAH-LSM';
 include '../../portal_header.php';?>

<?php include 'sidebar.php';?>

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
     <h2 id="section-title">NOAH-Land Surface</h2>
        <div id="description">

<H4>Surface fields (snow, surface type, albedo, vegetation type, greenness fraction):</H4>

<UL>
  <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/sfcimg/web.html">
       README file about the fields</A>
  <LI><A HREF="ftp://ftp.emc.ncep.noaa.gov/mmb/gcp/sfcflds">
                ftp://ftp.emc.ncep.noaa.gov/mmb/gcp/sfcflds</A> directory
  <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/sfcimg/gfrac/index.html">Greenness fraction</A>
  <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/sfcimg/albedo/index.html">4-season snowfree albedo</A>

  <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/sfcimg/albedo.monthly/index.html">New albedos (testing)</A>
  <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/sfcimg/vegtype/index.html">Vegetation types</A>
  <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/gcp/sfcimg/soiltex/index.html">Soil texture</A>
  <LI>Images of Snow files:
    <UL>
     <LI><A HREF="http://www.emc.ncep.noaa.gov/mmb/ylin/snowice/">
                  NAM snow page</A>

     <LI><A HREF="http://www.ssd.noaa.gov/PS/SNOW/index.html">
                  The NESDIS/IMS snow/ice images</A>
     <LI><A HREF="http://www.emc.ncep.noaa.gov/gmb/pan/snow/qcsnow.gif">
                  On Hua-Lu Pan's home page (EMC/NCEP)</A>
     <LI><A HREF="http://www.rap.ucar.edu/weather/surface/snowAFus.gif">
                  On the NCAR/RAP Weather Data Page</A>
    </UL>

</UL>

<HR>
<UL>
   <LI> Related soil moisture web sites
   <UL>
      <LI> <A HREF="http://www.nws.noaa.gov/cgi-bin/nwsexit.pl?url=http://ldas.gsfc.nasa.gov/&blurb=NCEP+/NASA+NDAS">NCEP/NASA NDAS </A>
      <LI> <A HREF="http://www.cpc.ncep.noaa.gov/soilmst">CPC Soil Moisture Monitoring and Prediction </A>
   </UL>      

</UL>
<?php include 'footer.php';?>
