<?php
global $browser_title;
 $browser_title = 'Observational Data Dumping at NCEP';
 include '../../../portal_header.php';?>

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
            <a class="nav-link sidelnk" href="https://emc.ncep.noaa.gov/emc/pages/infrastructure/bufrlib.php">
              BUFRLIB (BUFRLIB User Guide)
            </a>
          </li>
                  </ul>

                  <!-- The file that contains the Resource links to VLAB & Help -->
                <?php include '../../../portal_resources_sidelnks.php';?>


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
     <h2 id="section-title">Observational Data Dumping at NCEP</h2>
     <center>
        <h3><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:18px;"><strong>NOAA/NWS/NCEP/EMC<br>
        (Last Revised 2/12/2018)</strong></span></span><span style="font-style: italic;"></span></h3>
     </center>

     <div id="description">
<div id="navstyle">
<center>
<h3>Observational Data Dumping
at NCEP
</h3></center><center>
<h3>Dennis Keyser -
NOAA/NWS/NCEP/EMC
<br />(Last Revised 2/12/2018 <span style="font-style: italic;">- should be&nbsp;up to date</span>!)</h3></center><!-- This is a first table -->
<table cellspacing="0">  <tbody>    <tr>      <td class="hed" colspan="4">

      
      <p>Please take a moment to
read the <b><a target="_blank" href="http://weather.gov/disclaimer.php"><span style="color: rgb(0, 0, 255);">
Disclaimer</span></a>
      </b>for this
non-operational web page.
&nbsp; </p>      

      
      <p>The dumping of
observational data is the first step in each <a href="http://www.nco.ncep.noaa.gov/pmb/prod_overview/"><span style="color: rgb(0, 0, 255);">
NCEP
network production suite.</span></a>&nbsp;
At the appropriate network data
cutoff
time, up to two dump jobs&nbsp;are executed simultaneously. &nbsp;Once the two
dump jobs have completed,&nbsp;a separate dump post processing job
is
initiated.</p>      <a name="Job1">&nbsp;</a><br />===&gt;
Dump Job 1&nbsp;performs
the
following steps in sequence:&nbsp;<br />      <br clear="all" />      

      
      <p><span style="text-decoration: underline;"> A</span>
.&nbsp; <span style="text-decoration: underline;">Copying Files For
Later
Use By Analyses</span> </p>      
      
      
<p>In the Global Forecast
System (GFS) and Global Data
Assimilation
System
(GDAS) network runs, <a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/Guide-binary-2.html"><span style="color: rgb(0, 0, 255);">
GRIB</span></a>
files containing current analyses of snow depth, ice distribution, and
sea-surface temperature from NESDIS are copied from the <a href="http://www-03.ibm.com/press/us/en/pressrelease/21006.wss"><span style="color: rgb(0, 0, 255);">
NCEP&nbsp;</span><span class="st">Weather and Climate Operational
Supercomputing System</span><span style="color: rgb(0, 0, 255);">
(WCOSS)</span></a>
/dcom database into
network-specific
(&ldquo;/com&rdquo;) directories.&nbsp; These fields will
be read later
by the
Global&nbsp;<a href="http://www.dtcenter.org/com-GSI/users/docs/users_guide/GSIUserGuide_V1.0.pdf"><span style="color: rgb(0, 0, 255);">
Gridpoint&nbsp;Statistical
Interpolation (GSI) analysis</span></a>.&nbsp;
(Note: If the
current
day's files are not available, then files between one-day old and ten-days old, depending upon the product,&nbsp;are copied.) </p>      
     

 <p>In the North American
Model (NAM)&nbsp;network runs, <a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/Guide-binary-2.html"><span style="color: rgb(0, 0, 255);">
GRIB</span></a>
files containing current <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/satellite_ingest.doc/File_Format.doc/IMS_24km_snow_ice.htm"><span style="color: rgb(0, 0, 255);">
16'th
mesh &nbsp;(24 km) analyses of snow/sea ice coverage</span></a>produced
by
the NOAA/NESDIS Interactive Multisensor Snow and Ice Mapping System
(IMS)
and 8'th mesh (48 km) Northern Hemisphere snow-depth/sea-ice produced
by the Air Force are copied from the NCEP WCOSS /dcom database into
network-specific
(&ldquo;/com&rdquo;) 
directories.&nbsp; These fields will be read later by the Regional
Gridpoint Statistical Interpolation (GSI)&nbsp;analysis.&nbsp;
(Note:
If the current day's&nbsp;files are not
available, then one-day old files are copied.) </p>      
      
      
<p>In the full-cycle Rapid
Refresh&nbsp;(RAP) network, <a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/Guide-binary-2.html"><span style="color: rgb(0, 0, 255);">
GRIB</span></a>
files containing current <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/satellite_ingest.doc/File_Format.doc/IMS_4km_snow_ice.htm"><span style="color: rgb(0, 0, 255);">
96'th
mesh (4 km) analyses of snow/sea ice coverage</span></a>
produced by the
NOAA/NESDIS Interactive Multisensor Snow and Ice Mapping System
(IMS)&nbsp;are copied from the
NCEP WCOSS /dcom database into network-specific&nbsp;
(&ldquo;/com&rdquo;) 
directories.&nbsp;
These
fields will be read later by the RAP&nbsp;Gridpoint Statistical
Interpolation (GSI)&nbsp;analysis.&nbsp; (Note:
If
the
current day's files are not available, then one-day old files are
copied.)&nbsp; </p>      <a name="Job1.B"><br />      </a>
      
      
<p><span style="text-decoration: underline;">B</span>.
&nbsp; <span style="text-decoration: underline;">Dumping
of BUFR Observational
Data (excluding WSR-88D
Level II radial wind and reflectivity - see </span><a style="text-decoration: underline;" href="document.htm#Job2"><span style="color: rgb(0, 0, 255);">
Dump
Job 2 </span></a><span style="text-decoration: underline;">
for the dumping of these
data)</span></p>      
      
      
<p>The
process of accessing
the observational database and
retrieving a
select set of observational data is accomplished in several stages by a
number of FORTRAN codes.&nbsp; This retrieval process is run in all
of
the operational networks many times a day to assemble
&ldquo;dump&rdquo; data for
model
assimilation.&nbsp;&nbsp; The script that manages the retrieval
of
observations
provides users with a wide range of options.&nbsp; These include
observational
date/time windows, specification of geographic regions for filtering
(via either a lat/lon box, a center point lat/lon and radius, or a
lat/lon grid point mask), data
specification
and combination, duplicate checking and bulletin
&ldquo;part&rdquo;
merging, and
parallel
processing. </p>      

      
      <p>The
primary retrieval software performs the
initial stage of
all
data
dumping by retrieving subsets of the NCEP WCOSS <a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/Guide-binary-1A.html"><span style="color: rgb(0, 0, 255);">
BUFR</span></a>
/dcom data base that contain all of the data base
messages&nbsp;valid
for
the data type, geographical filter and&nbsp;time window requested
by a
user.
(Recall that the /dcom data base is continuously updated with new data
as the data <a href="http://www.nco.ncep.noaa.gov/sib/decoders/"><span style="color: rgb(0, 0, 255);">
GTS
decoder</span></a>
and <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/satellite_ingest.doc/document.htm"><span style="color: rgb(0, 0, 255);">
satellite
ingest</span></a>
jobs run.)&nbsp; The
retrieval software looks only at the
date
in Section One of the BUFR message to determine which messages to copy
for a particular data type.&nbsp; This results in an observing set
containing
possibly more data than was requested, but allows the software to
function
very efficiently. </p>      
      

      
      <p>The
second stage of the process performs a final 'winnowing'
of the
data to an observing set with the exact time window requested <a href="#1"><sup>1</sup></a>.&nbsp;
This is done within the codes which remove exact- or near-duplicate
reports
(the nature of which is data type dependent) and merge bulletin parts
for
upper-air reports from the TAC-feed. </p>      
      

      
      <p><font size="-1"><sup><a name="1"></a>1</sup><small>Normally,
the six-hour
cycle GFS, GDAS,
and
Climate Data Assimilation System (CDAS) network runs dump BUFR data
globally
over a six-hour time window centered on the analysis time.&nbsp;
The
six-hour
cycle NAM&nbsp;network runs normally dump data within the expanded
WRF-NMM-model
domain over a six-hour time window centered on the analysis time [the
NAM runs six hourly update ("catchup") cycles to&nbsp;assimilate
data
hourly
between&nbsp;6-hours and&nbsp;1-hour prior to cycle
time].&nbsp; The
one-hour
full-cycle&nbsp;RAP,&nbsp;partial-cycle RAP (RAP_PCYC),
early-cycle RAP
(RAP_ERLY), early-HRRR-cycle RAP (RAP_EHRRR), RTMA and URMA
network
runs normally dump BUFR data within the </small></font><small><font size="-1"><small>expanded
WRF-NMM-model
domain (a superset of the </small></font><font size="-1"><small>RAP,&nbsp;RTMA and URMA
domains)
over a one-hour time window centered on the analysis time.
&nbsp;The 15-minute Rapid-Update RTMA (RTMA_RU) network runs normally dump BUFR data with the&nbsp;</small></font></small><small><font size="-1"><small>expanded
WRF-NMM-model
domain&nbsp;</small></font><font size="-1"><small>over a one-hour time window centered on the analysis times of 00,&nbsp;15, 30 and 45-munites past each hour.
&nbsp;&nbsp;</small></font></small><small><font size="-1"><small>The RTMA and URMA dump domain includes Guam and surrounding waters.</small></font>&nbsp;(Note:
The full-cycle and early-cycle RAP shares its PREPBUFR
files with the HRRR. &nbsp;The early-cycle-HRRR RAP dumps WSR-88D Level
II radial wind and reflectivity specifically for the HRRR.)</small><br />      <a name="SDM"><br />      </a>The final stage of the
process is the application of manual
quality
marks to the data extracted.&nbsp; The quality marks are provided
by
personnel
in two groups: the <a href="http://www.nco.ncep.noaa.gov/sib/"><span style="color: rgb(0, 0, 255);">
NCEP/NCO
Systems Integration Branch (SIB)</span></a>
and the <a href="http://www.opc.ncep.noaa.gov/"><span style="color: rgb(0, 0, 255);">
NCEP/Ocean
Prediction Center (OPC)</span></a>.&nbsp;
The NCEP/NCO/SIB Senior Duty
Meteorologists
(SDMs) can apply quality markers to individual variables in many
observational
data types such as rawinsonde, dropwinsonde, PIBAL, aircraft, satellite
wind, surface land (including mesonet), surface marine, wind profiler/SODAR and Vertical
Azimuth
Display (VAD) wind reports.&nbsp; These markers either ensure that
the
datum marked will be assimilated by the particular analysis regardless
of any subsequent quality control on it (called a "keep" flag), or
ensure
that it will NOT be assimilated (called a "purge" flag).&nbsp; The
SDMs
use an interactive program on the WCOSS which initiates the off line
execution
of automated quality control programs run in the subsequent <a href="../prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);">
PREPBUFR
processing steps</span></a>
and then review
the programs&rsquo; decisions
before
making
assessment decisions.&nbsp; The SDMs use satellite pictures,
meteorological
graphics, continuity of data, input from reporting stations, past
station
performance and horizontal data comparisons (buddy checks) to decide
whether
or not to override quality control flags from the automated
programs.&nbsp;
All flags are stored in an ASCII file on the IBM-SP for use during this
data retrieval process.&nbsp; The NCEP/NCO/SIB also maintains a
list
of data that should be rejected based on, among other things, monthly
statistics
provided from the NCEP and other international centers, and feedback
from
data producers.&nbsp; All rejected data receive either a "reject"
or
"purge"
flag here.&nbsp; The flags are appended to the same ASCII file used
for
storing the SDM quality marks.&nbsp; NCEP/OPC personnel perform
real-time
interactive quality control of global surface marine meteorological
data
and sea surface temperature using a graphical interactive program
called <a href="http://www.nco.ncep.noaa.gov/pmb/qap/smstats/readme/"><span style="color: rgb(0, 0, 255);">
CREWSS
(Collect, Review, and Edit Weather data from the Sea Surface)</span></a>.&nbsp;
CREWSS provides an evaluation of the quality of the marine surface data
provided by ships, buoys (drifting and moored), Coastal Marine
Automated
Network (CMAN) stations, and tide gauge stations by comparing the
observations
to GFS model first guess fields for all four synoptic periods. Data
that
differ from the first guess fields by more than certain amounts are
then
examined via techniques that involve buddy checks versus neighboring
platforms,
the platform&rsquo;s track, and a one week history for each
platform.&nbsp;
The
NCEP/OPC personnel can either mark these data according to their
quality,
here applying either a "keep" or "purge" flag, or they can correct
obvious
errors in the data, such as incorrect hemisphere, misplaced decimal,
etc.
(corrected data receive a "good" quality mark in the subsequent <a href="../prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);">
PREPBUFR
processing steps</span></a>.)&nbsp;&nbsp;
Upon completion of interactive
quality
control, an ASCII text file containing all quality control decisions
and
corrections is then uploaded to the WCOSS for use during this data
retrieval
process. </p>      
      

      <p>Each
data type selected for dumping is associated with a
unique
mnemonic
string which represents a particular BUFR type and subtype in the /dcom
database.&nbsp; The complete list of BUFR data types is shown in <a href="table_1.htm"><span style="color: rgb(0, 0, 255);">
Table
1.a</span></a>.&nbsp;
This includes
obsolete data types, future data types,
and
current data types which are currently not dumped in any network
job.&nbsp;
In order to limit the number of output dump files in the operational
network
jobs, like data types are grouped together and represented by sequence
or group mnemonics.&nbsp; The data group mnemonics used to generate
dump
files in the various NCEP networks (including obsolete types)&nbsp;
are
read by either the subsequent <a href="../prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);">
PREPBUFR
processing steps</span></a>
, by the
subsequent analysis codes, or by neither
according
to network.&nbsp; See <a href="table_1.htm#b"><span style="color: rgb(0, 0, 255);">
Table
1.b</span></a>
for a listing of data group
mnemonic dumps read by the PREPBUFR
processing steps and <a href="table_1.htm#c"><span style="color: rgb(0, 0, 255);">
Table
1.c</span></a>
for a listing of data group
mnemonic dumps read by the analysis
codes.&nbsp;</p>      <br clear="all" />      
      

      <p><span style="text-decoration: underline;">C</span>.
&nbsp; <span style="text-decoration: underline;">Re-processing
of <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/NCEP_BUFR_File_Structure.htm"><span style="color: rgb(0, 0, 255);">
BUFR
Observational Data
Dump
Files</span></a>
      </span></p>      

      
      <p>Some
of the BUFR data dump files are re-processed into new
BUFR
files
such that they can be used properly by the subsequent <a href="../prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);">
PREPBUFR
processing</span></a>
or analysis programs. </p>      

      
      <p>&nbsp;1.&nbsp; <span style="text-decoration: line-through;">SSM/I
data - all network runs</span> <span style="color: rgb(204, 0, 0);">(NOTE:
The SSM/I data went bad in
November 2009 resulting in no data being processed. &nbsp;All
processing here was permanently turned off in October 2010)</span>:&nbsp;
      <span style="text-decoration: line-through;">The
&ldquo;reports&rdquo; in
the SSM/I products BUFR dump files (group mnemonics
&ldquo;ssmip&rdquo;
or
&ldquo;ssmipn&rdquo;,
see </span><a style="text-decoration: line-through;" href="table_1.htm#b"><span style="color: rgb(0, 0, 255);">
Table
1.b</span></a><span style="text-decoration: line-through;">) consist of
orbital scans, each of which contain 64 retrieval
footprints
of one or more products.&nbsp; The program </span><b style="text-decoration: line-through;">PREPOBS_PREPSSMI</b><span style="text-decoration: line-through;">
unpacks
selected products out of the scans, superobs them onto a one-degree
latitude/longitude
grid (optional in some network runs) then encodes them as individual
&ldquo;reports&rdquo;
in the output, re-processed, BUFR file which contains only those data
needed
for subsequent </span><a style="text-decoration: line-through;" href="../prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);">
PREPBUFR
processing</span></a><span style="text-decoration: line-through;">.&nbsp;
The
output filename contains the qualifier
&ldquo;spssmi&rdquo;
(see </span><a style="text-decoration: line-through;" href="table_1.htm#b.1"><span style="color: rgb(0, 0, 255);">
Table
1.b, key for superscript 2 in &ldquo;NET&rdquo; column</span></a><span style="text-decoration: line-through;">).&nbsp;
The
GDAS, GFS
and
CDAS network runs superob the &ldquo;operational&rdquo;
rainfall rate
product
generated
at </span><a style="text-decoration: line-through;" href="https://www.fnmoc.navy.mil/"><span style="color: rgb(0, 0, 255);">
FNMOC</span></a><span style="text-decoration: line-through;">, and the
surface
ocean
wind speed and total column precipitable water products generated using
a </span><a style="text-decoration: line-through;" href="http://polar.ncep.noaa.gov/marine.meteorology/marine.winds/NNs/OMBNN3.html"><span style="color: rgb(0, 0, 255);">
Neural-Net
3 algorithm (OMBNN3)</span></a><span style="text-decoration: line-through;">
developed by the </span><a style="text-decoration: line-through;" href="http://polar.ncep.noaa.gov/Welcome.html"><span style="color: rgb(0, 0, 255);">
Marine
Modeling Branch </span></a><span style="text-decoration: line-through;">of
NCEP/EMC.&nbsp; The NAM&nbsp;network runs
superob
the &ldquo;operational&rdquo; surface ocean wind speed and
total column
precipitable
water products generated at </span><a style="text-decoration: line-through;" href="https://www.fnmoc.navy.mil/"><span style="color: rgb(0, 0, 255);">
FNMOC.</span></a><span style="text-decoration: line-through;">&nbsp;
The upper-air RUC network run processes the same products as the
NAM&nbsp;network runs but it does not superob the data.</span>
      </p>      

      
      <p>&nbsp;2. <span style="text-decoration: line-through;">QuikSCAT
data
- NAM,&nbsp;GFS, GDAS and CDAS network runs</span>
      <span style="color: rgb(204, 0, 0);">(NOTE:
The QuikSCAT&nbsp;data went bad
in
November 2009 resulting in no data being processed. &nbsp;All
processing
here was permanently turned off in October 2010)</span>:
      <span style="text-decoration: line-through;">Each
&ldquo;report&rdquo;
in the QuikSCAT BUFR dump file (group mnemonic
&ldquo;qkscat&rdquo;,
see </span><a style="text-decoration: line-through;" href="table_1.htm#b"><span style="color: rgb(0, 0, 255);">
Table
1.b</span></a><span style="text-decoration: line-through;">) consists
of
four
sets of nudged wind vectors and other raw
scatterometer
information.&nbsp; The program </span><b style="text-decoration: line-through;">WAVE_DCODQUIKSCAT</b><span style="text-decoration: line-through;"> unpacks each
report
checking the report date for realism, selecting the proper nudged wind
vector, and excluding reports over land, reports with missing nudged
wind
vector, reports with missing model wind direction and speed, reports
with
probability of rain greater than 10%, and reports at the edges of the
orbital
swath.&nbsp; Reports passing checks are then superobed onto a
one-half
degree lat/lon grid according to satellite id and encoded into the
output,
re-processed BUFR file which contains only those data needed for
subsequent </span><a style="text-decoration: line-through;" href="../prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);">
PREPBUFR
processing</span></a><span style="text-decoration: line-through;">.&nbsp;
The
output filename contains the qualifier
&ldquo;qkswnd&rdquo;
(see </span><a style="text-decoration: line-through;" href="table_1.htm#b.2"><span style="color: rgb(0, 0, 255);">
Table
1.b, key for superscript 1 in &ldquo;NET&rdquo; column</span></a><span style="text-decoration: line-through;">).</span>
      </p>      
      
<p>&nbsp;3. <span style="text-decoration: line-through;">TRMM
TMI data - GFS,
GDAS and CDAS network runs</span>&nbsp;<span style="color: rgb(204, 0, 0);">(NOTE:
The TRMM TMI&nbsp;data went bad
in
April&nbsp;2015 resulting in no data being processed. &nbsp;All
processing
here was permanently turned off at that time)</span>:
      <span style="text-decoration: line-through;">Each
&ldquo;report&rdquo;
in the TRMM TMI BUFR dump file (group mnemonic
&ldquo;trmm&rdquo;, see </span><a href="table_1.htm#c"><span style="color: rgb(0, 0, 255);">
Table
1.c</span></a>)<span style="text-decoration: line-through;">
is at full footprint
resolution.&nbsp; The program
BUFR_SUPERTMI
unpacks each report checking the validity of the satellite id,
observation
date and total precipitation observation.&nbsp; Reports passing
checks
are then superobed onto a one-degree lat/lon grid according to
satellite
id and encoded into the output, re-processed BUFR file.&nbsp; The
output
filename contains the qualifier &ldquo;sptrmm&rdquo; (see </span><a href="table_1.htm#c.2"><span style="color: rgb(0, 0, 255);">
Table
1.c, key for superscript 1 in &ldquo;NET&rdquo; column</span></a>).<span style="text-decoration: line-through;">&nbsp;
The
Global GSI
analysis
(GFS and GDAS network runs only) reads the superobed data directly from
the reprocessed "sptrmm" BUFR dump file (these data do not pass through
the</span> <a href="../prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);">
PREPBUFR
processing</span></a><span style="text-decoration: line-through;">
steps).</span>&nbsp;</p>      
      
<div style="text-align: justify;">4.
WindSat data - NAM,&nbsp;RAP, RAP_PCYC, RAP_ERLY, RTMA, URMA,&nbsp;RTMA_RU, GFS,
GDAS and CDAS network runs: Each
&ldquo;report&rdquo;
in the WindSat&nbsp;BUFR dump file (group mnemonic
&ldquo;wndsat&rdquo;, see <a href="table_1.htm#b"><span style="color: rgb(0, 0, 255);">
Table
1.b</span></a>)
consists of four sets of
nudged wind vectors and other raw
scatterometer
information.&nbsp; The program&nbsp;BUFR_DCODWINDSAT
unpacks each
report
checking the report date for realism, selecting the proper nudged wind
vector, and excluding reports not explicitly over ocean, reports with
missing nudged
wind
vector, reports with missing model wind direction and
speed,&nbsp;and
reports with a "bad" or "no retrieval" EDR quality flag.&nbsp;
Reports
passing checks are then superobed onto a one-degree lat/lon grid
according to satellite id (GFS, GDAS and CDAS networks only) and
encoded into the
output,
re-processed BUFR file which contains only those data needed for
subsequent <a href="../prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);">
PREPBUFR
processing</span></a>.&nbsp;
The output
filename contains the qualifier
&ldquo;wdsatr&rdquo;
(see <a href="table_1.htm#b.3"><span style="color: rgb(0, 0, 255);">
Table
1.b, key for superscript 5 in &ldquo;NET&rdquo; column</span></a>). &nbsp;<span style="color: rgb(204, 0, 0);">(NOTE:
WindSat data has not been processed since August 2012 due to a format
change in the raw files. &nbsp;In all likelihood these data will not be
restored.) <br />
      </span> 
      </div>      

      
<div style="text-align: justify;">5.
ASCAT data - NAM,&nbsp;RAP,
RAP_PCYC, RAP_ERLY, RTMA, URMA,&nbsp;RTMA_RU, GFS, GDAS and CDAS network runs:
Each
&ldquo;report&rdquo;
in the ASCAT&nbsp;BUFR dump file (group mnemonic
&ldquo;ascatt&rdquo;,
see <a href="table_1.htm#b"><span style="color: rgb(0, 0, 255);">
Table
1.b</span></a>)
consists of
two&nbsp;sets of nudged wind vectors and other raw
scatterometer
information.&nbsp; The program WAVE_DCODQUIKSCAT
unpacks each
report
checking the report date for realism, selecting the proper nudged wind
vector, and excluding reports over land, reports with missing nudged
wind
vector, reports with missing model wind direction and speed, and
reports with one or more&nbsp;"critical" wind vector cell quality
flags
set. Reports passing checks are then&nbsp;encoded (without
superobing)
into the
output,
re-processed BUFR file which contains only those data needed for
subsequent <a href="../prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);">
PREPBUFR
processing</span></a>.&nbsp;
The output
filename contains the qualifier
&ldquo;ascatw&rdquo;
(see <a href="table_1.htm#b.6"><span style="color: rgb(0, 0, 255);">
Table
1.b, key for superscript 6 in &ldquo;NET&rdquo; column</span></a>).
      </div>      
      
      <p><a name="Job2"><br />      </a>===&gt; Dump Job 2,
running
simultaneously with <a style="font-weight: bold;" href="document.htm#Job1"><span style="color: rgb(0, 0, 255);">
Dump
Job 1</span></a>,&nbsp;performs
the
following
single step: <br />      </p>      <br />      

      
      <p><span style="text-decoration: underline;"><span style="text-decoration: underline;"><u>Dumping
of&nbsp;WSR-88D
Level II radial wind and reflectivity BUFR&nbsp;Data</u></span></span></p>      

      <p><span style="text-decoration: underline;"><span style="text-decoration: underline;">

      
      <p>This
currently runs in only&nbsp;the NAM&nbsp;network.
&nbsp;The processing is identical to that described in <a href="document.htm#Job1.B"><span style="color: rgb(0, 0, 255);">
Dump Job 1, Step B</span></a>
above. &nbsp;The dumping of WSR-88D Level II radial wind and
reflectivity data is performed in a separate job from the dumping of
all other data in the NAM&nbsp;network in&nbsp;order to save
computation time since it takes almost as long&nbsp;to
dump&nbsp;Level
II data here as it takes&nbsp;to dump all other observational data
in&nbsp;Dump Job 1.</p>      </span></span></p>      <span style="font-weight: bold;"><a name="tropcy_qc_reloc"><br />      </a></span>===&gt;
Tropical
Cyclone
Processing Job, running
simultaneously
with <a ="" href="document.htm#Job1"><span style="color: rgb(0, 0, 255);">
Dump
Job 1</span></a><span style="text-decoration: underline;"> </span><span style="text-decoration: line-through;">and,
in</span><span style="text-decoration: underline line-through;"> </span><span style="text-decoration: line-through;">the
NAM&nbsp;network</span><span =""><span =""><span style="color: rgb(255, 0, 0);"> (NOTE: No longer
in
NAM after March 2017)</span></span></span><span style="text-decoration: line-through;"><span style="font-weight: bold; text-decoration: line-through;">
      </span><span =""><a style="text-decoration: line-through;" ="" href="document.htm#Job2"><span style="color: rgb(0, 0, 255);">Dump
Job 2</span></a>,
      </span></span><span ="">performs the<span ="">
following
steps in sequence:</span></span><span =""><span =""><span style="text-decoration: underline;">

      
      <p></p>      <a name="qctropcy"><br />      </a><span style="text-decoration: underline;">A.</span></span>
&nbsp; <span style="text-decoration: underline;">Quality
Control of Tropical
Cyclone Bulletin Data </span></span></span><span =""><span =""><span style="color: rgb(255, 0, 0);">&nbsp;(NOTE: </span></span></span><span =""><span =""><span style="color: rgb(255, 0, 0);">No
longer runs in the NAM
after March 2017. &nbsp;After July 2017, the GFS and GDAS perform the
quality control of tropical cycle bulletin data in a process that is
now upstream and separate from&nbsp;obs processing.)</span></span></span><br />      <br clear="all" />      <span ="">
      
      
      <div style="text-align: justify;"><span =""><span =""><span style="text-decoration: line-through;">In
the
GFS and&nbsp;GDAS</span><span style="color: rgb(0, 0, 0);"><span style="text-decoration: line-through;">&nbsp;network
runs, </span><a style="text-decoration: line-through;" href="../tcvitals_description.htm"><span style="color: rgb(0, 0, 255);">
tropical
cyclone bulletins</span></a><span style="text-decoration: line-through;">
valid
for
the current cycle from the </span><a style="text-decoration: line-through;" href="https://metocph.nmci.navy.mil/jtwc.php">
      <span style="color: rgb(0, 0, 255);">Joint
Typhoon Warning Center (JTWC)</span></a><span style="text-decoration: line-through;">
and </span><a style="text-decoration: line-through;" href="https://www.fnmoc.navy.mil/"><span style="color: rgb(0, 0, 255);">
Fleet
Numerical Meteorology and Oceanography Center (FNMOC)</span></a><span style="text-decoration: line-through;">
are read from
the NCEP WCOSS /dcom database and merged into the proper record
structure
by the program SYNDAT_GETJTBUL.&nbsp; Next,&nbsp;</span><a style="text-decoration: line-through;" href="../tcvitals_description.htm"><span style="color: rgb(0, 0, 255);">
tropical cyclone
bulletins</span></a><span style="text-decoration: line-through;">
valid for the current cycle from the </span><a style="text-decoration: line-through;" href="http://www.nhc.noaa.gov/"><span style="color: rgb(0, 0, 255);">
NCEP/Tropical
Prediction Cente<span style="text-decoration: line-through;">r</span></span></a>
      <span style="text-decoration: line-through;">(TPC) are read
from the TPC directory on the NCEP
WCOSS (these are already in the proper record format).&nbsp;
Finally,
manually generated&nbsp;</span><a style="text-decoration: line-through;" href="../tcvitals_description.htm"><span style="color: rgb(0, 0, 255);"><span style="text-decoration: line-through;">
      </span>tropical
cyclone bulletins</span></a><span style="text-decoration: line-through;">
are read from
the NCEP
WCOSS
database.&nbsp; The latter can be generated by the NCEP/NCO Senior
Duty
Meteorologist (SDM) in the event that data from other sources are not
available.
      
      </span>

      
      <p><span style="text-decoration: line-through;"> Next,
the program SYNDAT_QCTROPCY runs in order to
merge
the&nbsp;</span><a style="text-decoration: line-through;" href="../tcvitals_description.htm"><span style="color: rgb(0, 0, 255);">
tropical cyclone
records</span></a><span style="text-decoration: line-through;">
from the various sources and perform quality
control
on tropical cyclone position and intensity information.&nbsp; Some
of
the
checks performed include duplicate records, appropriate date/time,
proper
record structure, storm name/id number, records from multiple
institutions,
secondary variables (e.g. central pressure), storm position and
direction/speed.&nbsp;
The emphasis is on internal consistency between the reported storm
location
and prior motion. The output </span><a style="text-decoration: line-through;" href="../tcvitals_description.htm"><span style="color: rgb(0, 0, 255);">
tropical
cyclone vital statistics
(tcvitals)</span></a>
f<span style="text-decoration: line-through;">ile is then copied to the network-specific /com directories in the
NCEP
WCOSS. &nbsp;This file is read in the next</span> <a style="text-decoration: line-through;" href="document.htm#relocate"><span style="color: rgb(0, 0, 255);">
tropical
cyclone relocation step</span></a><span style="text-decoration: line-through;">
in the GFS and GDAS
networks.</span> </p>      </span></span></span></div>      <span =""><span =""><span style="text-decoration: underline; color: rgb(0, 0, 0);">
      </span><a name="relocate"></a></span></span></span><span =""><span =""><span =""><span =""><span =""><span =""><a name="relocate"><br />      </a></span></span></span><span =""><span =""><span =""><span ="">
      <span =""><span =""><span style="text-decoration: underline;">B.</span>
&nbsp;<span style="text-decoration: underline;">Re</span></span><span =""><span style="text-decoration: underline;">locat</span></span><span =""><span style="text-decoration: underline;">ion of
Tropical Cyclone
Vortices in the Global</span></span><span =""><span style="text-decoration: underline;"> Sigma (First)
Guess&nbsp;</span> </span><span =""><span style="color: rgb(255, 0, 0);">(</span></span><span =""><span style="color: rgb(255, 0, 0);">NOTE: After March
2017 the</span></span><span =""><span style="color: rgb(255, 0, 0);"> NAM,
and after July 2017 the GFS and GDAS,&nbsp;performs relocation of its
own first guess in a process that is now&nbsp;separate and separate from obs processing.)</span></span>
      <span =""><span style="color: rgb(255, 0, 0);"><br />      <span =""> </span></span><span =""><span =""><span =""><br />      </span></span>      
      
      
      <div style="text-align: justify;"><span =""><span =""><span style="text-decoration: line-through;">In
the GFS
and&nbsp;GDAS&nbsp;network
runs, the quality-controlled </span><a style="text-decoration: line-through;" href="../tcvitals_description.htm"><span style="color: rgb(0, 0, 255);">
tropical storm
position
and intensity field (tcvitals)
file&nbsp;valid at the current time</span></a><span style="text-decoration: line-through;">
(output by the previous </span><a style="text-decoration: line-through;" href="document.htm#qctropcy"><span style="color: rgb(0, 0, 255);">
tropical
cyclone record
q.c. step</span></a><span style="text-decoration: line-through;">).&nbsp;along
with the </span><a style="text-decoration: line-through;" href="../tcvitals_description.htm"><span style="color: rgb(0, 0, 255);">
tcvitals</span></a><span style="text-decoration: line-through;">
files
valid 12- and 6-hours prior to the current
time, and the "best"&nbsp;global sigma first guess and global
pressure
grib files valid 6-hours prior to the current&nbsp;time, 3-hours
prior
to&nbsp;the current time,
at the current time, and 3-hours after&nbsp;the current time are
input
to a series of programs (SUPVIT,
GETTRK, RELOCATE_MV_NVORTEX).
&nbsp;These&nbsp;programs&nbsp;relocate
one or more tropical cyclone (or hurricane)&nbsp;vortices in the
global
sigma first guess files valid 3-hours prior to the current time, at the
current time, and
3-hours after the current time. &nbsp;The updated&nbsp;global
sigma
guess file for the current time&nbsp;is later read
in the&nbsp;<a href="../prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);">
PREPBUFR
processing</span></a>
      by
the program <a href="../prepbufr.doc/document.htm#prepdata"><span style="color: rgb(0, 0, 255);">
PREPOBS_PREPDATA</span></a>
and used by the various quality control programs in the PREPBUFR
processing stream. &nbsp;In the&nbsp;GFS and GDAS networks, the
updated&nbsp;global sigma guess files&nbsp;for all three times
(current
time, for 3-hours prior to the current time, and for 3-hours after the
current time) are read by the subsequent&nbsp;Global
GSI analysis.
&nbsp; This processing may also (but usually&nbsp;not)
generate&nbsp;an
updated </span><a style="text-decoration: line-through;" href="../tcvitals_description.htm"><span style="color: rgb(0, 0, 255);">
tcvitals</span></a><span style="text-decoration: line-through;">
file valid
at the current time.&nbsp;
This file, if generated,&nbsp;contains only records for "weak"
vortices
which could not be used to update the global sigma first guess here.
&nbsp;It would&nbsp;be read later in the&nbsp;</span><a style="text-decoration: line-through;" href="../prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);">
PREPBUFR
processing</span></a><span style="text-decoration: line-through;">
by the
program&nbsp;</span><a style="text-decoration: line-through;" href="../prepbufr.doc/document.htm#syndata"><span style="color: rgb(0, 0, 255);">
SYNDAT_SYNDATA</span></a><span style="text-decoration: line-through;">
in the GFS and GDAS networks in order to generate tropical cyclone
bogus wind reports. &nbsp;If this file is empty, no bogus reports
will
be generated by </span><a style="text-decoration: line-through;" href="../prepbufr.doc/document.htm#syndata"><span style="color: rgb(0, 0, 255);">
SYNDAT_SYNDATA</span></a><span style="text-decoration: line-through;">.
&nbsp; This updated </span><a style="text-decoration: line-through;" href="../tcvitals_description.htm"><span style="color: rgb(0, 0, 255);">
tcvitals</span></a><span style="text-decoration: line-through;">
file is not considered&nbsp;in the NAM&nbsp;network runs as the
original tcvtials file, output by the previous </span><a style="text-decoration: line-through;" href="document.htm#qctropcy"><span style="color: rgb(0, 0, 255);">tropical
cyclone record q.c. step</span></a><span style="text-decoration: line-through;">,
is always
input to&nbsp;</span><a style="text-decoration: line-through;" href="../prepbufr.doc/document.htm#syndata"><span style="color: rgb(0, 0, 255);">
SYNDAT_SYNDATA</span></a><span style="text-decoration: line-through;">.&nbsp;
Although tropical cyclone relocation is not used in the
NAM&nbsp;runs
(other than to provide a better&nbsp;guess
for&nbsp;PREPBUFR
quality control programs) , the t-06&nbsp;NAM does start
with&nbsp;a
global sigma&nbsp;guess which reflects tropical cyclone
relocation.&nbsp;
      </span>&nbsp; </span></span><br />      <span =""><span =""></span></span></div>      <span =""><span =""><br />      </span></span>
 
      
      <div style="text-align: justify;"><span style="text-decoration: line-through;" =""><span ="">Note1:
This
job&nbsp;runs only in the&nbsp;GFS
and&nbsp;GDAS&nbsp;networks, and
only if TPC and/or JTWC/FNMOC tropical
storm records are
originally present and valid at the current time.</span></span><span =""><span =""></span></span></div>      <span =""><span =""> </span></span>
      <div style="text-align: justify;"><span =""><span =""><a href="../tcvitals_description.htm"><span style="color: rgb(0, 0, 255);"></span></a></span></span></div>      <span =""><span ="">
      
     
<p></p>      <span style="font-weight: bold;"><a name="post-process"><br />      </a></span>===&gt;
Dump Post-Processing
Job, running after both&nbsp;<a style="font-weight: bold;" href="document.htm#Job1"><span style="color: rgb(0, 0, 255);">
Dump
Job 1</span></a>
and <span style="font-weight: bold;"><a href="document.htm#Job2"><span style="color: rgb(0, 0, 255);">
Dump
Job 2</span></a>
      </span>have
completed, performs the following
single step:<br />      <br />       

            
      <p style="text-decoration: underline;">Post-processing
of <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/NCEP_BUFR_File_Structure.htm"><span style="color: rgb(0, 0, 255);">
BUFR
Observational Data Dump
Files</span></a>
      </p>      
       
      
<p> The completion of the data dump&nbsp;job(s) triggers a job which performs post-processing
on the data dump files just created.&nbsp; This job does not produce any output necessary to the successful completion of the analysis/forecast
network [indeed it runs simultaneously with the <a href="../prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);">
PREPBUFR Processing Job</span></a> which is also triggered by the completion of the data dump job(s)]. </p>      
      
      
<p> The
first job step prepares a table of data counts for the various reports just dumped via the execution of the program BUFR_DATACOUNT.&nbsp;
These counts are compared to the running average over the past 30 days for each report type for the particular
network and cycle time.&nbsp; If the current dump count for a particular type is considered abnormally low (for most report types
this means more than 50% below the 30 day average), a dump alert is generated.&nbsp; The action taken for low dump counts depends upon
the report type.&nbsp; For those types considered "critical" to the
subsequent assimilation system, a low dump count generates diagnostics
and triggers a code failure and a return code of 6 in the dump alert
job .&nbsp; For those types considered&nbsp;
"moderately-critical" (all
types that are assimilated which are not in the "critical" category), a
low dump count generates diagnostics and a non-fatal return code of 5
in the dump alert job.&nbsp; For those types considered
"non-critical"
(all types that are not assimilated in the particular network), a low
dump count generates diagnostics and a non-fatal return code of 4 in
the dump alert job.&nbsp; In all cases, a complete listing of dump
counts vs. the 30 day average, along with those types which are either
low or high (for most report types this means more than 200% above the
30 day average) is sent to the SDM.&nbsp; High dump counts do not
generate non-zero return codes in the dump alert job but they do
generate diagnostics.&nbsp; Trends in the 30 day averages vs. those
for
3-, 6-, 9- and 12-months ago are also recorded for the SDM (report
types trend low vs. one of these previous averaging periods if the
current 30 day average is more than 20% below the 30 day average for
that period, or report types trend high vs. one of these previous
averaging periods if
the current 30 day average is more than 20% above the 30 day average
for
that period).&nbsp; Currently this dump count and alert processing
runs
only in the NAM (tm00 only), GFS and GDAS networks.<br />      </p>      
      
      
<p> The&nbsp;next
job step executes the program BUFR_REMOREST
which
removes or masks,
from the appropriate dump files, certain data types that are restricted
(either by the data producers themselves or by the WMO) from
redistribution
outside of NCEP.&nbsp; <a href="http://www.nco.ncep.noaa.gov/sib/restricted_data/restricted_data_pmb/"><span style="color: rgb(0, 0, 255);">
NCEP/NCO
has created a very strict policy on who may or may not have access to
restricted
data</span></a>.&nbsp;&nbsp;
The
resulting dump files, gleaned of all
restricted
data, are given a suffix qualifier of&nbsp; ".nr" in the
network-specific
(*/com*) directories on the NCEP-WCOSS. </p>      
      

<p> The
next dump post-processing job step&nbsp;executes the
program BUFR_LISTDUMPS
which generates files containing text listings of all reports in the
various
BUFR data dump files.&nbsp; These text files are then copied to the
network-specific
("*/com*") directories on the WCOSS in order to provide diagnostic
information
for troubleshooting problems in the data, etc.&nbsp; Files
containing
listings
of dump files that have been stripped of all restricted data are given
the suffix qualifier ".nr". </p>      
      
      
<p><span style="text-decoration: line-through;"> The
post-processing job also contains a step which generates
unblocked versions of the
BUFR
data dump files and copies them to the (/com) directories (again, files
containing
unblocked forms of dump files that have been stripped of all restricted
data are given the suffix qualifier ".nr").&nbsp; The unblocked
files
are
then copied to servers for use by organizations outside of
NCEP.&nbsp;
(The native blocking on the IBM-SP machine is Fortran
77.)&nbsp;&nbsp;
Restricted data are not copied to these servers. &nbsp;</span><span style="color: rgb(204, 0, 0);">(NOTE: No longer invoked after migration to WCOSS because BUFR files are unblocked by default.) </span><br />      </p>      
      
<p> Finally,
in the all networks, the final post-processing job of
the
day performs a data average processing step via the execution of the
program BUFR_AVGDATA.
&nbsp;This updates the 30 day
running average for each report type dumped, for each cycle for which a
dump is generated.&nbsp; These "current" 30 day averages are saved
in
text files, according to the network,&nbsp; in either the
"/com/arch/prod/avgdata" [NAM (tm00 only), RAP], 
<span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span ="">"/com2/arch/prod/avgdata" (RTMA, URMA), or "/gpfs/hps/nco/ops/com/gfs/prod/sdm_rtdm/avgdata" (GFS, GDAS) </span></span></span></span></span></span></span></span></span></span></span></span>directory on the NCEP
WCOSS.&nbsp;&nbsp;
These
files are used by the dump alert processing in the NAM (tm00 only), GFS and GDAS
networks in order to generate alerts for high or low dump counts for
the current dump vs. the current 30 day average (see paragraph two in
this section). &nbsp; For the final post-processing job of a
particular
month, the current 30 day average for the NAM (tm00 only), GFS and GDAS networks is
saved off in a separate file for that month in the same&nbsp;"/com"&nbsp;
directory as the current 30 day average files.&nbsp; These past
month
30 day average files are used to check for high and low trends in the
current NAM (tm00 only), GFS or GDAS 30 day average for a particular report vs. the
30 day average for 3-, 6-, 9- and 12-months ago (again, see paragraph
two in this section).&nbsp; Only the most recent 12 months of 30
day
averages are saved here for the NAM (tm00 only), GFS and GDAS networks.<br />&nbsp; &nbsp; </p>      </span></span>
      
    
<div style="text-align: justify;"><span =""><i>The
NCEP production suite schedule, for those networks which
originate
with a dump of observational data, is shown in <a href="table_2.htm"><span style="color: rgb(0, 0, 255);">
Table
2</span></a>.&nbsp;
&ldquo;DUMP&rdquo; indicates the name of the <a href="document.htm#Job1"><span style="color: rgb(0, 0, 255);">
Dump Job 1</span></a>,
"</i><i>DUMP2&rdquo;
indicates the name
of the <a href="document.htm#Job2"><span style="color: rgb(0, 0, 255);">
Dump
Job 2</span></a>,</i><i>&nbsp;</i><span style="font-style: italic;"><a href="document.htm#tropcy_qc_reloc"><span style="color: rgb(0, 0, 255);"></span></a></span><i>"DPOST&rdquo;
indicates
the name of the <a href="document.htm#post-process"><span style="color: rgb(0, 0, 255);">
Dump
Post-processing Job</span></a>,
"PREP" (and "PREP1" and "PREP2" in the CDAS network)&nbsp;indicates
the
name of the </i><a href="../prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);">
PREPBUFR
Processing Job</span></a><i>,
"ANAL&rdquo; indicates the name of
the Analysis Job, "FCST&rdquo; (and "FCSTH" and "FCSTL" in the GFS
network) indicates the name of the Forecast
Job,&nbsp;"PPOST" (and "PPOST1" and "PPOST2" in the CDAS network)
indicates the name of the PREPBUFR Post-processing Job, "GESS" in the
RTMA and URMA networks indicates the name of the job which retrieves the
first-guess and "APOST" in the RTMA and URMA networks indicates the name if the
Analysis Post-processing Job. &nbsp;The
initiation of the dump jobs ("DUMP" and "DUMP2") and the tropical
cyclone processing job ("TROPCY")
are&nbsp;triggered by the clock at the times
indicated.&nbsp;
All subsequent jobs run in sequence. &nbsp; "RAP_PCYC" refers to
the
partial-cycle Rapid Refresh network runs. &nbsp;&nbsp;</i></span><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><i>"RAP_ERLY" refers to
the
early-cycle Rapid Refresh network runs. &nbsp;</i></span></span></span></span></span></span></span></span></span></span></span><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><i>"RAP_EH" refers to
the
early-cycle-HRRR Rapid Refresh network runs.&nbsp;</i></span></span></span></span></span></span></span></span></span></span></span><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><i> &nbsp;"RTMA_RU"&nbsp;</i></span></span></span></span></span></span></span></span></span></span></span><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><span =""><i>refers to
the
Rapid-Update RTMA runs.</i></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></div>      <span =""></span></span></span></span></span></span></span></span></span></span></span></td>    </tr>  
  
  </tbody>
</table></div><div id="content_bottom">
</div><!-- End Content Body -->
<!-- Begin Foter -->
<div id="footer">
<table border="0" width="100%">  
  <tbody>    
    <tr>      
      <th scope="row">
        <div id="address">
          <a href="http://www.noaa.gov">NOAA</a>
        / <a href="http://www.nws.noaa.gov">National
        Weather Service</a><br />      <a href="http://www.ncep.noaa.gov">National
        Centers for
        Environmental Prediction</a><br />      <a href="http://www.emc.ncep.noaa.gov">Environmental
        Modeling
        Center</a><br />      
        <br />5200 Auth Road<br />Camp Springs, Maryland 20746-4304<br />Page Author: EMC Webmaster<br />      
           <script language="JavaScript">document.write("Page generated:"+Date())</script>
        </div>      
    </th>      
    <th scope="row"><!-- address -->
      <div id="orglinks">
        <div id="orglinksleft">
          <a href="http://www.weather.gov/disclaimer.php">Disclaimer</a><br />      
          <a href="http://www.weather.gov/credits.php">Credits</a><br />      
          <a href="http://www.weather.gov/glossary">Glossary</a>
        </div><!-- orglinksleft -->
        <div id="orglinksright">
          <a href="http://www.weather.gov/privacy.php">Privacy Policy</a><br />      
          <a href="http://www.weather.gov/admin.php">About Us</a><br />      
          <a href="http://www.weather.gov/careers.php">Career Opportunities</a> 
        </div><!-- orglinksright -->
      </div>      
</th>    
</tr>  
  </tbody>
</table><!-- orglinks --> </div></div></div><!-- End Footer Body -->
</body>
</html>
