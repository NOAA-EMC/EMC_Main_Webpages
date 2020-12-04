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

<P>
NCEP CPPA/GAPP/GEWEX related information and fields are also available 
via anonymous ftp at <I>ftp.ncep.noaa.gov</I> :
<UL>

  <LI><A HREF="ftp://ftp.ncep.noaa.gov/pub/gcp/eta">/pub/gcp/eta</A>
  <LI><A HREF="ftp://ftp.ncep.noaa.gov/pub/gcp/edas">/pub/gcp/edas</A>
  <LI><A HREF="ftp://ftp.ncep.noaa.gov/pub/gcp/sfcflds">/pub/gcp/sfcflds</A>
</UL>
<?php include 'footer.php'?>


