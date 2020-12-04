<?php
global $browser_title;
 $browser_title = 'PREPBUFR PROCESSING AT NCEP';
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
     <h2 id="section-title">PREPBUFR PROCESSING AT NCEP</h2>
     <center>
        <h3><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:18px;"><strong>NOAA/NWS/NCEP/EMC<br>
        (Last Revised 2/12/2018)</strong></span></span><span style="font-style: italic;"></span></h3>
     </center>

     <div id="description">
<center><u>PREPBUFR
PROCESSING AT NCEP</u>
<p>Dennis Keyser -
NOAA/NWS/NCEP/EMC
<br>
(Last Revised 2/12/2018 <span style="font-style: italic;">- should be&nbsp;up
to date</span>)</p><p><br><br></p><b>Please take a moment to read
the <a href="http://weather.gov/disclaimer.php">Disclaimer</a>
for this non-operational web page.<br><br></b>
<p><b><u>1.&nbsp;
INTRODUCTION</u></b>
<br>&nbsp;
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
The "PREPBUFR" processing is the final step
in preparing the majority of conventional observational data for
assimilation into the
various NCEP analyses including the <a href="http://www.emc.ncep.noaa.gov/?branch=NAM">North
American
Model (NAM)</a>
unified&nbsp;<a href="http://www.emc.ncep.noaa.gov/gmb/gdas/">grid-point
statistical interpolation (GSI) analysis</a>
(the "NAM"
network), the <a href="http://www.emc.ncep.noaa.gov/index.php?branch=GFS">Global
Forecast
System (GFS) and Global Data Assimilation System (GDAS)</a>
unified&nbsp;<a href="http://www.emc.ncep.noaa.gov/gmb/gdas/">grid-point
statistical interpolation (GSI) analysis</a>&nbsp;
(the "GFS"
and&nbsp;"GDAS" networks), the <a href="http://rapidrefresh.noaa.gov/">Rapid
Refresh (RAP)</a>&nbsp;unified&nbsp;<a href="http://www.emc.ncep.noaa.gov/gmb/gdas/">grid-point
statistical
interpolation (GSI)&nbsp;analysis</a>
[the "RAP" network, shared with
the&nbsp;<a target="_blank" href="http://ruc.noaa.gov/hrrr/"><span style="color: rgb(0, 0, 255);">
High-Resolution
Rapid Refresh (HRRR)</span></a>],
the <a href="http://www.nco.ncep.noaa.gov/pmb/products/rtma/">Real
Time
Mesoscale Analysis (RTMA)
and UnRestricted Mesoscale Analysis (URMA)</a> unified&nbsp;<a href="http://www.emc.ncep.noaa.gov/gmb/gdas/">grid-point
statistical
interpolation (GSI) analysis</a>&nbsp;(the
"RTMA"and "URMA" networks, resp.), the and the <a href="http://www.cpc.ncep.noaa.gov/products/wesley/reanalysis.html">Climate
Data Assimilation System (CDAS) <span class="st">spectral statistical
interpolation (SSI) analysis</span></a><span class="st"> (the</span>
"CDAS" network). This step involves the
execution
of series of programs designed to assemble observations <a href="../data_dumping.doc/document.htm">dumped</a>
from a number of on-line decoder databases, encode information about
the
observational error for each data type as well the background (first
guess)
interpolated to each data location, perform both rudimentary
multi-platform
quality control and more complex platform-specific quality control, and
store the output in a monolithic <a href="http://www.wmo.ch/pages/prog/www/WDM/Guides/BUFRCREXGuide-English.html">BUFR</a>
file, known as PREPBUFR. The background guess information is used by
certain
quality control programs while the observation error is used by the
analysis
to weigh the observations. The structure of the BUFR file is such that
each PREPBUFR processing step which changes a datum (either the
observation
itself, or its quality marker) records the change as an "event" with a
program code and a reason code. Each time an event is stored, the
previous
events for the datum are "pushed down" in the stack. In this way, the
PREPBUFR
file contains a complete history of changes to the data throughout all
of the PREPBUFR processing. The most recent changes are always at the
top
of the stack and are thus read first by any subsequent data decoder
routine.
It is expected that the data at the top of the stack are of the highest
quality.
&nbsp;Once the PREPBUFR&nbsp;job has completed,&nbsp;a
separate
PREPBUFR post processing job
is
initiated.<br>&nbsp;
<br>&nbsp;
</p><p><b><u>2.&nbsp;
PREPBUFR PROCESSING PROGRAMS</u></b>
</p><p><a name="prepdata"></a>
<br>A.&nbsp; <u>PREPOBS_PREPDATA</u>
<br>&nbsp;
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
Purpose: To read in and consolidate
observations
dumped from individual BUFR DATA databases, perform rudimentary checks
on the data, and organize upper-air data by decreasing pressure. For
all
networks except the CDAS, and to some extent the RTMA and URMA, also
performs a
number of tasks under the name GBLEVENTS: 1) Adds forecast background
(first guess) interpolated
to each observation location; 2) Adds observational error (read in from
a
<a href="../obserror.htm" target="_blank">look-up table</a>)
to each
observation; 3) Performs some rough quality
control
checks on surface pressure (vs. the background);&nbsp;and 4)
Converts
dry bulb
temperature to virtual and dewpoint temperature to specific humidity
for
surface data. &nbsp;All of these GBLEVENTS functions
are&nbsp;performed
by the program <a style="font-weight: bold;" href="#prevents">PREPOBS_PREVENTS</a>
in the CDAS network. &nbsp;In the RTMA and URMA networks, the only
GBLEVENT
function performed is item&nbsp;4. &nbsp;Output is stored in a
monolithic BUFR file called
PREPBUFR.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Input: Various <a href="../data_dumping.doc/table_1.htm#b">BUFR
data dump files including</a> (based
on the network):&nbsp;ADPUPA
(rawinsonde, pibal, dropwinsonde,
reconnaissance), AIRCAR (MDCRS-ACARS aircraft), AIRCFT (AIREP,
PIREP,&nbsp;AMDAR, and TAMDAR
aircraft), SATWND (GOES satellite derived cloud winds from NESDIS,
EUMETSAT,
GMS, INSAT as well as POES winds from Aqua/Terra MODIS), PROFLR [wind
profiler and acoustic sounder (SODAR) winds by height], VADWND
(Vertical
Azimuth
Display winds by height at U.S. NEXRAD radar sites), ADPSFC (surface
land
synoptic and METAR), SFCSHP (surface marine ships, buoys, C-MAN
platforms,
tide gauges, and splash-level dropwinsondes),&nbsp;<span style="text-decoration: line-through;"></span><span style="color: rgb(204, 0, 0);"></span>GOESND
(GOES 4-layer
precipitable water retrievals, sounder radiances,
and
cloud-top
data from NESDIS),&nbsp;<span style="text-decoration: line-through;"></span><span style="color: rgb(204, 0, 0);"></span>ATOVS
(temperature soundings
from NESDIS),&nbsp;RASSDA [Radio Acoustic Sounding System (RASS)
vertical profiles of
virtual temperature], GPSIPW (GPS Integrated Precipitable Water
retrievals),&nbsp;MSONET (Mesonet data from a myriad of providers,
mostly over the U.S.),&nbsp;WDSATR [reprocessed, SUPEROBed
(optional)
WindSAT&nbsp;scatterometer
derived oceanic wind speed and direction <span style="color: rgb(204, 0, 0);">(NOTE:
WindSAT data has not been processed since August 2012 due to a format
change in the raw files, in all likelihood these data will not be
restored)</span>],
and ASCATW&nbsp;[reprocessed, SUPEROBed (optional)
ASCAT&nbsp;scatterometer
derived oceanic wind speed and direction].&nbsp;
Also reads in (based on the network) the global nemsio&nbsp;first guess
file valid at the PREPBUFR center&nbsp;time [in the GFS amd GDAS (only)
when tropical storms are present, this guess&nbsp;is updated&nbsp;by
the program
<span style="font-weight: bold;">RELOCATE_MV_NVORTEX</span> in the&nbsp;<a href="../data_dumping.doc/document.htm#relocate">relocation
step</a>
of the&nbsp;<a href="../data_dumping.doc/document.htm#tropcy_qc_reloc">upstream&nbsp;tropical cyclone processing</a>],&nbsp;the
<a href="../obserror.htm" target="_blank">observational error
table (text) file</a>,&nbsp;the BUFR
mnemonic table file
(more about this later), and network-specific parm (data) cards which
control
processing through namelist variable switches.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Output: A file known as
PREPBUFR, containing
observations with state variables,&nbsp;sensible weather element,
and
other ancillary&nbsp;information needed by the analyses, as well
as (depending upon the network)&nbsp;forecast
background and (depending upon the network) observation errors <a href="#1"><sup>1</sup></a>.&nbsp; At this point the only
quality
control on the data are the rudimentary limit checks applied by this
program,
the checks of surface pressure observations compared to the background
(except for&nbsp;CDAS,&nbsp;RTMA and URMA network runs), and those <a href="../data_dumping.doc/document.htm#SDM">applied
in the upstream observational
dumping process</a>: the interactive
<a href="http://www.nco.ncep.noaa.gov/pmb/">NCEP
NCO&nbsp;Implementation and Data Services Branch</a>
purge or keep flags
on data types such as rawinsonde, aircraft, satellite wind, surface
land,
surface marine, wind profiler/SODAR and Vertical Azimuth Display winds,
and
the
interactive&nbsp;quality markers generated by the&nbsp;<a href="http://www.opc.ncep.noaa.gov/">NCEP's Ocean
Prediction Center
(OPC)</a> on marine ship and buoy
data.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Note 1: In the NAM and
RAP networks,
the background used is the global nems first guess <span style="text-decoration: line-through;">(subject to tropical
cyclone
relocation in the NAM&nbsp;network</span>.<span style="color: rgb(255, 0, 0);">; Note: No longer in NAM after March
2017.</span>) This is only used by the
subsequent
quality control programs. No background is encoded in the RTMA or URMA
network
as no quality control programs are run here. Also, observational errors
are <i>not</i>
encoded
in the PREPBUFR file in the RAP,&nbsp;RTMA and URMA networks&nbsp;<a href="document.htm#1"><sup>1</sup></a>.
<br>

&nbsp;&nbsp;&nbsp;&nbsp; Note 2: In all networks except
the RTMA and URMA, this
program is multi-tasked amongst 3 nodes on the WCOSS&nbsp;machine to
speed
up processing time.&nbsp; In order to load-balance the run streams,
each
of the input data dump files in this case&nbsp;are divided into 3 equal parts by the
program
<span style="font-weight: bold;">PREPOBS_MPCOPYBUFR</span>.&nbsp;
This is analogous to a card game where all of the cards in the deck are
dealt out to 3 players.&nbsp; Next, <span style="font-weight: bold;">PREPOBS_PREPDATA</span>
runs in 3
parallel run streams, with each run using the mini-dump files as
input.&nbsp;
Each run stream uses all of the dump types, but for each type only
1/3<sup>rd</sup>
of the original dump is processed.&nbsp; A program called <span style="font-weight: bold;">PREPOBS_LISTHEADERS</span>
runs immediately after <span style="font-weight: bold;">PREPOBS_PREPDATA</span>
in run each stream, reordering
all message types in each "mini&rdquo; PREPBUFR file according to
that
specified
in the BUFR mnemonic table.&nbsp; This is necessary because when
all 3
run streams of <span style="font-weight: bold;">PREPOBS_MPCOPYBUFR</span>/<span style="font-weight: bold;">PREPOBS_PREPDATA</span>/
<span style="font-weight: bold;">PREPOBS_LISTHEADERS</span>
have completed, the program <span style="font-weight: bold;">PREPOBS_MONOPREPBUFR</span>
concatenates the
3 mini-PREPBUFR files into a monolithic PREPBUFR file ready for
subsequent
processing.<br>&nbsp; &nbsp; Note 3: In all&nbsp;networks except for the CDAS,
the data read
in from the SATWND dump file and encoded into the PREPBUFR files is not
read by the subsequent&nbsp;analysis. &nbsp;Instead, the
GSI
reads in this same SATWND dump file directly and ignores the SATWND
data&nbsp;in the PREPBUFR files.</p>

<p><a name="1"></a><sup>1</sup>The observation errors encoded into the
PREPBUFR files (in the GFS/GDAS and NAM) are no longer read by the GSI.
&nbsp;Instead, the GSI reads observation errors (for all networks)
from&nbsp;an external file in the network fixed file directory.
&nbsp;However, the CDAS SSI still reads in the&nbsp;observation errors encoded into CDAS&nbsp;PREPBUFR file.</p><p><a name="syndata"></a><br>B.&nbsp; <u>SYNDAT_SYNDATA</u>
<span =""><span =""><span style="text-decoration: underline;"></span></span></span><span =""><span =""><span style="color: rgb(255, 0, 0);">(NOTE: </span></span></span><span =""><span =""><span style="color: rgb(255, 0, 0);">No
longer runs
in&nbsp;NAM
after March 2017. Thus it only runs in the GFS and GDAS networks.
&nbsp;However, the synthetic&nbsp;bogus winds it generates are no
longer assimilated by the GFS/GDAS GSI after July 2017, they are only
monitored. &nbsp;At some point SYNDAT_SYNDATA may be modified to no
longer&nbsp;generate&nbsp;bogus winds in the GFS and GDAS in order to
save time.)</span></span></span><br>&nbsp;
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
Purpose: Performs three distinct functions:<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a name="fcn1"></a>1)
&nbsp;Reads in a quality
controlled <a href="../tcvitals_description.htm">tropical
storm position records</a> from the
tcvitals file valid at the PREPBUFR center&nbsp;time
and uses them, along with other observations in the PREPBUFR file, to
generate
synthetic (bogus) wind mandatory level profile reports (throughout the
depth of the storm) in the vicinity of the storm(s) to better define
tropical
systems for the analysis. <span style="text-decoration: line-through;">In
the NAM&nbsp;network, a synthetic
mass
report at all tropical cyclone center locations is also generated with
a surface pressure based on the global sigma first guess pressure (from
the relocated global sigma guess) adjusted according to the storm
category
(from the </span><a style="text-decoration: line-through;" href="http://www.nhc.noaa.gov/aboutsshs.shtml">Saffir-Simpson
Hurricane Scale</a><span style="text-decoration: line-through;">), and
with
specific humidity values generated on
mandatory
levels throughout the depth of the storm from the relocated global
first
guess temperatures and an assumption of 99% relative
humidity.</span>&nbsp;
The
synthetic wind reports are then appended to the PREPBUFR file <span style="text-decoration: line-through;">in all
networks
and assimilated by the analysis</span>.&nbsp; <span style="text-decoration: line-through;">The synthetic mass reports
generated
in the NAM&nbsp;network are currently being tested and are not yet
assimilated by the GSI analysis.</span>&nbsp;&nbsp; The forecast
background
(first guess) interpolated to each observation location and the
observational error, read
in from a look-up table, are&nbsp;also encoded
in the PREPBUFR file in all networks where this runs <span style="color: rgb(204, 0, 0);">(now only GFS and GDAS</span>).<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a name="fcn2"></a>2)
&nbsp;Flags&nbsp;mass data
in&nbsp;observations sufficiently "close" to all storms in the <a href="../tcvitals_description.htm">tcvitals</a>
file list (i.e., within the lat/lon boundary for which bogus reports
are generated). &nbsp;These data will then not be assimilated.<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a name="fcn3"></a>3)
&nbsp;Flags wind data
in&nbsp;dropwinsonde reports&nbsp;sufficiently "close" to all
storms in
the <a href="../tcvitals_description.htm">tcvitals</a>
file list
(i.e., within a distance to storm center of the
larger of 111 km or three times the radius of maximum surface
wind).&nbsp; These data will then not be assimilated.<br>&nbsp; &nbsp; &nbsp;Input: Quality-controlled <a href="../tcvitals_description.htm">tropical storm
position
and intensity field (tcvitals)</a>
file (<span style="text-decoration: line-through;">in the
NAM&nbsp;network
in
functions 1 and 2 above and in all networks</span> in <a href="#fcn3">function 3</a>
above,&nbsp;this
is the so-called operational file generated by the&nbsp;program
<span style="font-weight: bold;">SYNDAT_QCTROPCY</span>
in the <a href="../data_dumping.doc/document.htm#qctropcy">quality
control&nbsp;step</a> of the&nbsp;<a href="../data_dumping.doc/document.htm#tropcy_qc_reloc">upstream tropical cyclone processing</a>,
<span style="text-decoration: line-through;">while in the GFS and GDAS
networks</span> in <a href="#fcn1">function 1</a> and <a href="#fcn2">function 2</a> above this is
the file created by the&nbsp;program&nbsp;<span style="font-weight: bold;">RELOCATE_MV_NVORTEX</span>
in the <a href="../data_dumping.doc/document.htm#relocate">relocation
step</a>
of the&nbsp;<a href="../data_dumping.doc/document.htm#tropcy_qc_reloc">upstream tropical cyclone processing</a>)
valid at the PREPBUFR center&nbsp;time.&nbsp; Also, the PREPBUFR file output from the previous
program <a style="font-weight: bold;" href="#prepdata">PREPOBS_PREPDATA</a>,
network-specific parm (data) cards which control processing through
namelist
variable switches, the global nems&nbsp;first guess file valid at the
PREPBUFR center&nbsp;time [in the GFS amd GDAS (only) when tropical
storms are present, this guess&nbsp;is updated&nbsp;by the program
<span style="font-weight: bold;">RELOCATE_MV_NVORTEX</span> in the&nbsp;<a href="../data_dumping.doc/document.htm#relocate">relocation
step</a>
of the&nbsp;<a href="../data_dumping.doc/document.htm#tropcy_qc_reloc">upstream&nbsp;tropical cyclone processing</a>],&nbsp;<span style="font-weight: bold;"></span>and the&nbsp;<a href="../obserror.htm" target="_blank">observational
error
table (text) file</a>.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Output: A PREPBUFR file with
synthetic reports
added (observations as well as the background first guess and
observation
errors), as well as mass reports (from all sources) and dropwinsonde
wind reports flagged in the vicinity of each storm in the <a href="../tcvitals_description.htm">tcvitals</a>
file.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Note: This program does not
run in the
CDAS, RAP,&nbsp;RTMA and URMA,&nbsp;<span style="color: rgb(255, 0, 0);">and
after
March 2017, NAM</span>&nbsp;networks.&nbsp; It will only run&nbsp;to
generate bogus data
and flag mass data near storms in the GFS and GDAS networks if tropical
storm data are available
in the input <a href="../tcvitals_description.htm">tcvitals</a>
file
created by the program&nbsp;<span style="font-weight: bold;">RELOCATE_MV_NVORTEX</span>
in the&nbsp;<a href="../data_dumping.doc/document.htm#relocate">relocation
step</a> of the&nbsp;<a href="../data_dumping.doc/document.htm#tropcy_qc_reloc">upstream&nbsp;tropical cyclone processing</a>
(most likely not the case). &nbsp;It will only run <span style="text-decoration: line-through;">to generate
bogus
data and flag mass data near storms in the NAM&nbsp;network and</span>
to&nbsp;flag dropwinsonde wind data near storms in the GFS, GDAS <span style="text-decoration: line-through;">and&nbsp;NAM</span> networks if
tropical storm data are available in the input
<a href="../tcvitals_description.htm">tcvitals</a>
file generated by
the program
<span style="font-weight: bold;">SYNDAT_QCTROPCY</span>
in the&nbsp;<a href="../data_dumping.doc/document.htm#qctropcy">quality
control&nbsp;step</a> of the&nbsp;<a href="../data_dumping.doc/document.htm#tropcy_qc_reloc">upstream&nbsp;tropical cyclone processing.</a></p><p><a name="glerladj"></a>
<br>C.&nbsp; <u>PREPOBS_GLERLADJ</u>
<br>&nbsp;
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
Purpose: This runs only in the URMA&nbsp;network
to perform the NOAA Great Lakes Environmental Research
Laboratory&nbsp;(GLERL) adjustment to surface land and marine data
in&nbsp;the Great Lakes region. The goal is to create a smooth wind
analysis
over the Great Lakes that can be used to initialize the Great Lakes
Wave
model. &nbsp;New, GLERL-adjusted&nbsp;(pseudo-) reports are generated
based on certain&nbsp;exisitng report observations as well
as&nbsp;water temperature&nbsp;(if existing report is over water, new
report is over land and vice-versa).&nbsp; The original,
existing&nbsp;report is retained at its original location. Other
reports are moved from land to water&nbsp;(or vice versa) in order to
align properly with the RTMA land/sea mask over the&nbsp;Great Lakes
region. In this case, only latitude and longitude are changed. Here, the
original report is not retained.<br>&nbsp;&nbsp;&nbsp;&nbsp; Input: The PREPBUFR file
output from the
previous
program <a style="font-weight: bold;" href="document.htm#prepdata">PREPOBS_PREPDATA</a>
(if the program&nbsp;<a style="font-weight: bold;" href="document.htm#syndata">SYNDAT_SYNDATA</a>
did not run and recall that it does not run in the URMA network).&nbsp;
Observations in PREPBUFR
message types "ADPSFC",&nbsp;"SFCSHP" and "SFCSHP" are read.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Output: A&nbsp;PREPBUFR file
containing adjusted surface reports over, and inland of, the&nbsp;Great Lakes.
<br><br></p><p><a name="prevents"></a>
<br>D.&nbsp; <u>PREPOBS_PREVENTS</u>
<br>&nbsp;
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
Purpose: This runs only in the CDAS network
to add the forecast background (first guessvfrom the CDAS itself) interpolated to each
observation
location and the observational error (read in from a look-up table)
associated
with each observation to the PREPBUFR file. It also performs some rough
quality control checks on surface pressure (vs. the background), and
converts
dry bulb temperature to virtual and dewpoint temperature to specific
humidity
for surface data.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Input: The PREPBUFR file
output from the
previous
program <a style="font-weight: bold;" href="#prepdata">PREPOBS_PREPDATA</a>
(if the programs <a style="font-weight: bold;" href="#syndata">SYNDAT_SYNDATA</a>
and <a style="font-weight: bold;" href="#glerladj">PREPOBS_GLERLADJ</a> did not run and recall that neither runs&nbsp;in the CDAS network).&nbsp;
Observations in all PREPBUFR message types are read. Also reads in the
CDAS&nbsp;spectral (sigma) first guess file valid at the PREPBUFR center&nbsp;time and
the&nbsp;<a href="../obserror.htm" target="_blank">observational error
table (text) file</a>, as well as
network-specific parm (data) cards
which control processing through namelist variable switches.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Output: A PREPBUFR file
containing the
forecast
background and observation errors along with surface virtual
temperature
and specific humidity added.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Note: In all networks other
than CDAS, the
"PREVENTS" function is performed within the <a style="font-weight: bold;" href="#prepdata">PREPOBS_PREPDATA</a>
and <a style="font-weight: bold;" href="#syndata">SYNDAT_SYNDATA</a>
programs.
</p><p><a name="cqcbufr"></a>
<br>E.&nbsp; <u><a href="http://www.emc.ncep.noaa.gov/mmb/papers/collins/preprints/obsqc2.htm">PREPOBS_CQCBUFR</a></u>
<br>&nbsp;
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
Purpose: Performs complex quality control
on
rawinsonde height and temperature data to identify or correct erroneous
observations that arise from location, transcription or communications
errors.&nbsp; Attempts are made, when appropriate, to correct
commonly
occurring types of errors.&nbsp; Erroneous data that cannot be
corrected
are flagged and will not be considered by the analyses.&nbsp; The
checks
used are: hydrostatic, increment, horizontal statistical, vertical
statistical,
temporal (in the CDAS network only), baseline and lapse rate. These
multiple
checks are based upon differences from the six-hour Global Data
Assimilation
System (GDAS) forecast (the usual background first guess).&nbsp;
This
program
also applies <a href="http://www.ncep.noaa.gov/officenotes/NOAA-NPM-NCEPON-0005/01408987.pdf">intersonde
(radiation) corrections</a> to the
quality
controlled
rawinsonde height and temperature data. The degree of correction is a
function
of the rawinsonde instrument type, the sun angle and the vertical
pressure
level. Finally, this program converts rawinsonde and dropwinsonde dry
bulb
temperature to virtual and rawinsonde and dropwinsonde dewpoint
temperature
to specific humidity.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Input: The PREPBUFR file
output from the
previous
program <a style="font-weight: bold;" href="#prepdata">PREPOBS_PREPDATA</a>
(if the program&nbsp;<a style="font-weight: bold;" href="document.htm#syndata">SYNDAT_SYNDATA</a>
did not run), or from the previous program <a style="font-weight: bold;" href="#syndata">SYNDAT_SYNDATA</a>,
or from the previous program <a style="font-weight: bold;" href="#prevents">PREPOBS_PREVENTS</a>
in
the case of the CDAS network (recall that the upstream program&nbsp;<a style="font-weight: bold;" href="document.htm#glerladj">PREPOBS_GLERLADJ</a> runs only in the URMA network where <span style="font-weight: bold;">PREPOBS_CQCBUFR</span> does not run). &nbsp;In all cases, observations in PREPBUFR
message
type "ADPUPA" and their background guess are read. (In the case of the
CDAS network, where temporal checking is performed, PREPBUFR files
valid
24-hours previous, 12-hours previous, 12-hours subsequent, and 24-hours
subsequent are also input.)&nbsp; Also reads in network-specific
parm
(data)
cards which control processing through namelist variable switches
<br>&nbsp;&nbsp;&nbsp;&nbsp; Output: A PREPBUFR file with
quality
controlled
rawinsonde data, intersonde corrections applied to rawinsonde
temperature
and height, and virtual temperature and specific humidity added to
rawinsonde
and dropwinsonde data. Text files are also output containing various
informative
results from the running of this program. These files are made
available
to the NCEP SDM.<br>&nbsp;&nbsp;&nbsp;&nbsp; Note: This program does not
run in
the&nbsp;RTMA or URMA network.&nbsp;
</p><p><a name="profcqc"></a>
<br>F.&nbsp; <u>PREPOBS_PROFCQC</u>
<br>&nbsp;
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
Purpose: Performs complex quality control
on
wind profiler&nbsp;and&nbsp;acoustic sounder (SODAR) data in
order to
identify erroneous data and remove it
from
consideration by the analyses.&nbsp; The checks used are:
increment,
vertical
statistical, temporal statistical, and combined
vertical-temporal.&nbsp;
These multiple checks are based upon differences from the six-hour
Global
Data Assimilation System (GDAS) forecast (the usual background first
guess).
<br>&nbsp;&nbsp;&nbsp;&nbsp; Input: The PREPBUFR file
output from the
previous
program <a style="font-weight: bold;" href="#cqcbufr">PREPOBS_CQCBUFR</a>
(observations in PREPBUFR
message type "PROFLR" and their background guess are read), and
network-specific
parm (data) cards which control processing through namelist variable
switches.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Output: A PREPBUFR file with
quality
controlled
wind profiler/SODAR data.<br>&nbsp;&nbsp;&nbsp;&nbsp; Note: This program does not
run in
the&nbsp;RTMA or URMA network.&nbsp;
</p><p><a name="cqcvad"></a>
<br>G.&nbsp; <u><a href="http://www.emc.ncep.noaa.gov/mmb/papers/collins/preprints/vadqc.htm">PREPOBS_CQCVAD</a></u>
<br>&nbsp;
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
Purpose: Performs complex quality control
on
Vertical Azimuth Display (VAD) winds from WSR-88D radars in order to
identify
erroneous data and remove it from consideration by the
analyses.&nbsp;
The checks used are: increment, vertical statistical, temporal
statistical,
and combined vertical-temporal.&nbsp; These multiple checks are
based
upon
differences from the six-hour Global Data Assimilation System (GDAS)
forecast
(the usual background first guess).&nbsp; In addition, there is an
algorithm
to account for contamination due to the seasonal migration of birds.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Input: The PREPBUFR file
output from the
previous
program <a style="font-weight: bold;" href="#profcqc">PREPOBS_PROFCQC</a>
(observations in PREPBUFR
message type "VADWND" and their background guess are read).
<br>&nbsp;&nbsp;&nbsp;&nbsp; Output: A PREPBUFR file with
quality
controlled
VAD wind data.<br>&nbsp;&nbsp;&nbsp;&nbsp; Note: This program does not
run in
the&nbsp;RTMA or URMA network.&nbsp;</p><p><a name="prepacqc"></a>
<br>H.&nbsp; <a href="../NRL%20PREPACQC%20Docs/index.html" target="_blank"><u>PREPOBS_PREPACQC</u></a>
<br>&nbsp;
</p>
&nbsp;&nbsp;&nbsp;&nbsp;Purpose:&nbsp;Performs&nbsp;comprehensive&nbsp;quality&nbsp;control&nbsp;on&nbsp;conventional&nbsp;AIREP,&nbsp;PIREP,&nbsp;AMDAR&nbsp;(Aircraft&nbsp;Report,&nbsp;Pilot&nbsp;Report,&nbsp;Aircraft&nbsp;Meteorological&nbsp;Data&nbsp;Relay),&nbsp;TAMDAR&nbsp;(Tropospheric
Airborne Meteorological Data
Reporting) and MDCRS (Meteorological Data Collection and Reporting
System)&nbsp;aircraft wind,&nbsp;temperature and, where
applicable, moisture data.&nbsp; Checks include: duplicate, spike,
invalid report, stuck value, gross value,&nbsp;inconsistent
position, ordering, suspect data, reject list. &nbsp;A detailed
flight track check is performed. The basic quality
control
algorithms&nbsp;were written by Dr. Patricia Pauley at the Naval
Research Laboratory (NRL). &nbsp;Optionally, also creates a
pseudo-PREPBUFR file containing quality
controlled aircraft profiles (ascents and descents) constructed from
the single&nbsp;level&nbsp;reports, along with an estimated
instantaneous altitude rate on each profile level.
&nbsp;Flight&nbsp;level reports are
also&nbsp;included here. &nbsp;In this&nbsp;pseudo-PREPBUFR
profile&nbsp;file,&nbsp;the mass and wind information are combined.
&nbsp;<a href="table_21.htm">Table
21</a> contains the code tables of
pseudo-PREPBUFR aircraft profile report types currently valid
in all applicable networks.<br>&nbsp;&nbsp;&nbsp;&nbsp;
Input: The PREPBUFR file output from the
previous
program <a style="font-weight: bold;" href="#cqcvad">PREPOBS_CQCVAD</a>
(observations in PREPBUFR
message type "AIRCFT" and "AIRCAR"&nbsp;are read),&nbsp;and
network-specific
parm
(data) cards which control processing through namelist variable
switches.<br>&nbsp;&nbsp;&nbsp;&nbsp; Output: A PREPBUFR file with
quality
controlled
conventional (AIREP, PIREP, AMDAR, TAMDAR, MDCRS) aircraft data.
&nbsp;A pseudo-PREPBUFR file containing quality
controlled aircraft profiles (ascents and descents) as well as flight
level reports where the mass and wind information are combined. &nbsp;A
text
file listing all reports (output to both the&nbsp;PREPBUFR file and
the&nbsp;the mini-PREPBUFR file containing profiles) with detailed
quality mark infromation. &nbsp;Listings from each individual quality
control check as well as an overall log of the complete quality control
check.&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp; Note: This program does not
run in
the&nbsp;RTMA or URMA network. <br><br><p>I.&nbsp; <u>PREPOBS_OIQCBUFR</u>
<br>&nbsp;
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
Purpose: Performs an optimum interpolation
based quality control on the complete set of observations in the
PREPBUFR
file.&nbsp; As with the complex quality control procedures, this
program
operates in a parallel rather than a serial mode.&nbsp; That is, a
number
of independent checks (horizontal, vertical, geostrophic) are performed
using all admitted observations.&nbsp; Each observation is
subjected to
the optimum interpolation formalism using all observations except
itself
in each check.&nbsp; A final quality decision (keep, toss, or
reduced
confidence
weight) is made based on the results from all prior platform-specific
quality
checks (see B.-I. above) and from any <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/data_dumping.doc/document.htm#SDM">manual</a>
quality marks attached to the data.&nbsp; The results from all the
checks
are kept in an annotated observational database.&nbsp; One other
responsibility
of this program is to perform a multivariate surface wind analysis and
assign the analyzed direction to the SSM/I oceanic wind speed
observation
in order to produce a wind vector for these data.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Input: The PREPBUFR file
output by the
previous
program <a style="font-weight: bold;" href="#prepacqc">PREPOBS_PREPACQC</a>
(observations in all PREPBUFR
message types and their background guess are read). Also, an
observational
error table (text file) tuned specifically for this program.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Output: A PREPBUFR file with
final OI-based
quality control applied to all data. Text files are also output
containing
various informative results from the running of this program. These
files
are made available to the NCEP SDM.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Note: This program runs only
in the&nbsp;CDAS network. &nbsp;The GFS/GDAS, NAM,&nbsp;RAP,&nbsp;RTMA
and URMA GSI&nbsp;run their&nbsp;own
internal&nbsp;variational quality control on the observations (in
additional to other quality control&nbsp;within
the
GSI itself).
<span style="font-weight: bold; font-style: italic;"></span><br>&nbsp;
<br>&nbsp;
</p><p><b><u>3.&nbsp;
THE STRUCTURE OF THE PREPBUFR FILE</u></b>
<br>&nbsp;
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
The <span style="font-weight: bold;">PREPOBS_PREPDATA</span>
program reads in a BUFR
table text file which lays out the BUFR descriptors and their defined
sequence
for each type of report. Every descriptor and sequence is represented
by
a unique mnemonic in order to make the NCEP form of BUFR more
user-friendly.
This BUFR table is stored in the first messages of the output PREPBUFR
file. The PREPBUFR file is thus self-defining - all subsequent codes
that
read it are able to parse the table directly out of the PREPBUFR file
itself.
The current BUFR mnemonic table is found in <a href="table_1.htm">Table
1.a-1.e.</a>
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
The highest level mnemonic sequences in the
PREPBUFR file are known as the "Table A Entries" because they refer to
a unique <a href="../bufrtab_tablea.htm">BUFR
Table A</a> data
category as defined in Section 1 of the BUFR
message. These mnemonic sequences will be referred to as PREPBUFR
"message
types". See <a href="table_1.htm">Table
1.a</a> for the current list of
message types along with their number
(BUFR
descriptor) and description. The last 3 digits in the descriptor number
are the Table A data entries in Section 1.
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
Each PREPBUFR message type consists of
either
mnemonic sequences known as "<a href="../bufrtab_tabled.htm">Table D</a>"
entries, or mnemonics
representing
a single datum known as "<a href="../bufrtab_tableb.htm">Table B</a>"
entries. Each Table D sequence
consists
of either other Table D sequences or of Table B data descriptors. Thus,
every PREPBUFR message type can be broken down finer and finer until it
consists of a string of Table B descriptors. See <a href="table_1.htm#b">Table
1.b</a> for the current list of
Table D entries, their descriptor
number
and description. <a href="table_1.htm#c">Table
1.c</a> contains the current list of
Table B entries along with their
descriptor
number and description.
<a href="table_1.htm#c">Table
1.c</a> also contains the scaling,
reference value, number of bits and
units associated with each Table B entry.
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
The current layout of Table D and Table B
entries
that comprise each report by PREPBUFR message type is shown in <a href="table_1.htm#d">Table
1.d</a>. There are special
characters around some of the Table D
sequences
in <a href="table_1.htm#d">Table
1.d</a>. These refer to replication
descriptors.
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
- Curly
brackets
"{" and "}" around a sequence mnemonic indicate that 8-bit delayed
replication
is possible on the sequence. This is generally found for sequences
which
replicate as levels, such as in upper-air data. The replication is
delayed
because the number of levels is not known ahead of time.
&nbsp;There is
a maximum of 255 replicated levels here.</p><p>&nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; - Parentheses&nbsp;"(" and ")"
around a sequence mnemonic indicate that 16-bit delayed replication
is possible on the sequence. This is generally found for sequences
which
replicate as radiance channels, such as in AIRS 1B satellite
radiance&nbsp;data. The replication is delayed
because the number of levels is not known ahead of time.
&nbsp;There is
a maximum of 65535 replicated levels here.
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
- Angle
brackets
"&lt;" and "&gt;" around a sequence indicate that a 1-bit
replication
descriptor
is acting on this sequence. If every Table B descriptor in the sequence
is missing, then only one bit is needed to represent the data (and the
bit is set to zero). If one or more Table B descriptors in the sequence
are present, the bit is set to one indicating that all of the Table B
descriptors
in the sequence are represented bit-wise. This is useful for sequences
which may often be missing, since only one bit is needed in this case.
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
- Square
brackets
"[" and "]" around a sequence indicate that this sequence is subset to
events stacking. Here, the replication is the number of events
associated
with the sequence. Recall from the first paragraph of this document
that
the PREPBUFR file is structured such that each PREPBUFR processing step
which changes a datum (either the observation itself, or its quality
marker)
records the change as an "event" with a program code and a reason code.
Each time an event is stored, the previous events for the datum are
"pushed
down" in the stack. In this way, the PREPBUFR file contains a complete
history of changes to the data throughout all of the PREPBUFR
processing.
<a href="table_1.htm#d">Table
1d </a>shows that square brackets
are only found around sequences
which
consist the observation value itself (either pressure, specific
humidity,
temperature, height wind, and total or layer precipitable water), the
observation
value's quality marker, the program code for the event changing either
the observation or its quality marker and the reason code within this
program
code. &nbsp;There is a maximum of 255 replicated events here.
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="table_1.htm#e">Table
1.e</a> contains the list of Table D
entries that define the PREPBUFR
processing
steps that can act to generate events. It should be noted that a step
is
not necessarily the same as a program here. Some programs consist of
more
than one step, while some steps can appear in more than one program.
The
description defines the program(s) associated with each Table D entry
here.
The "program code" mentioned in the previous paragraph is unique for a
particular step here and is determined by the last 3 digits in the
descriptor
number.
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
The PREPBUFR file contains a number of
Table B
entries which are code or flag tables (see <a href="table_1.htm#c">Table
1.c</a>).&nbsp;
Links are provided to web pages which define these tables. &nbsp;In
general, the code and flag tables for those variables defined with WMO
descriptors
can be found in the <a href="http://www.wmo.int/pages/prog/www/WMOCodes/WMO306_vI2/LatestVERSION/WMO306_vI2_BUFRCREX_CodeFlag_en.pdf">WMO
BUFR Code and Flag Tables</a>
and&nbsp;<a href="http://www.wmo.int/pages/prog/www/WMOCodes/WMO306_vI2/LatestVERSION/WMO306_vI2_CommonTable_en.pdf">Common
Code Tables</a>.
&nbsp;The&nbsp;code&nbsp;tables for
most of the more common variables
defined with local descriptors&nbsp;are discussed
next.
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
The reports in the PREPBUFR file are
differentiated
by both the PREPBUFR report type (mnemonic &ldquo;TYP&rdquo; in
the
PREPBUFR file)
and by an input "dump" report type, loosely based on the obsolete <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/on29.htm">NMC
Office Note 29</a> and <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/on124.htm">NMC
Office Note 124</a> report types
(mnemonic &ldquo;T29" in the PREPBUFR
file).&nbsp;
Reports are split into mass and wind pieces at the current
time.&nbsp;
All mass reports contain PREPBUFR report types in the range 100-199,
while
all wind reports contain PREPBUFR report types in the range
200-299.&nbsp;
These report types are used by the various assimilation systems to
identify
the reports in the PREPBUFR file.&nbsp; <a href="table_2.htm">Table
2</a>,
<a href="table_3.htm">Table
3</a>, <a href="table_4.htm">Table
4</a>,&nbsp;<a href="table_5.htm">Table
5</a>
and <a href="table_19.htm">Table
19</a> contain the code tables of
PREPBUFR report types currently valid
in the GFS/GDAS, CDAS, NAM, RAP and RTMA/URMA networks,
respectively.&nbsp;
In addition, more detailed information on the usage of each variable in
each PREPBUFR report&nbsp;type can be found <a href="PREPBUFR_obs_usage_GBL-GSI,_ops.doc">HERE
for the GFS/GDAS</a> and <a href="PREPBUFR_obs_usage_NAM-GSI,_ops.doc">HERE
for the NAM</a> <span style="color: rgb(204, 0, 0);">(Note: this information may need to be updated)</span>. &nbsp;The
input "dump" report type defines the report more precisely than the
PREPBUFR report
type (e.g., PREPBUFR report type 180 consists of marine ship, buoy and
C-MAN platform reports, all of which contain a unique input report
type).
<a href="table_6.htm">Table
6</a> defines the code table of
input "dump" report types (the same
for all networks).&nbsp; The input report type is not used by any
assimilation
system at the current time.
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
Most of the observation types in the
PREPBUFR
file are associated with quality markers (e.g., mnemonics
&ldquo;PQM,
&ldquo;TQM&rdquo;,
&ldquo;WQM&rdquo;, etc.).&nbsp; These are used by the
various analyses
to place a weight
on the data based on its quality.&nbsp; <a href="table_7.htm">Table
7</a> contains the code table of
quality markers.&nbsp; These quality
markers
apply to all observation types in the PREPBUFR file.
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
The program codes (e.g., mnemonics
&ldquo;PPC&rdquo;, &ldquo;TPC&rdquo;,
&ldquo;WPC&rdquo;, etc.) associated with the PREPBUFR
processing steps
in <a href="table_1.htm#e">Table
1.e</a> and the reason codes
associated with a particular program code
(e.g., mnemonics &ldquo;PRC&rdquo;, &ldquo;TRC&rdquo;,
&ldquo;WRC&rdquo;, etc.) together define the
&ldquo;events&rdquo;
associated with changes in the observation itself or in its quality
marker
in the course of the PREPBUFR processing.&nbsp; <a href="table_8.htm">Table
8.a</a> contains the code table of
reason codes for step
&ldquo;PREPRO&rdquo; (program
code &ldquo;001").&nbsp; <a href="table_8.htm#b">Table
8.b</a> contains a code table of
possible future reason codes based on
events currently occurring in the PREPRO step.&nbsp; <a href="table_8.htm#c">Table
8.c</a> contains a list of other
unrecorded events in the PREPRO step
that
result in originally reported observational data not being encoded into
the PREPBUFR file. <a href="table_9.htm">Table
9</a> contains the code table of
reason codes for step
&ldquo;SYNDATA&rdquo; (program
code &ldquo;002").&nbsp; <a href="table_10.htm">Table
10</a> contains the code table of
reason codes for step
&ldquo;PREVENT&rdquo; (program
code &ldquo;004").&nbsp; <a href="table_11.htm">Table
11</a> contains the code table of
reason codes for step
&ldquo;CQCHT&rdquo; (program
code &ldquo;005").&nbsp; <a href="table_12.htm">Table
12</a> contains the code table of
reason codes for step
&ldquo;RADCOR&rdquo; (program
code &ldquo;006").&nbsp; <a target="_blank" href="table_20_NRLACQC.htm">Table
20</a> contains the code table of
reason codes for step "NRLACQC"
(program
code &ldquo;015").&nbsp; <a href="table_14.htm">Table
14</a> contains the code table of
reason codes for step
&ldquo;VIRTMP&rdquo; (program
code &ldquo;008").&nbsp; <a href="table_15.htm">Table
15</a> contains the code table of
reason codes for step
&ldquo;CQCPROF&rdquo; (program
code &ldquo;009") .&nbsp; <a href="table_16.htm">Table
16</a> contains the code table of
reason codes for step
&ldquo;OIQC&rdquo;&nbsp; (program
code &ldquo;010"). <a href="table_17.htm">Table
17</a>
contains the code table of reason codes for step
&ldquo;CQCVAD&rdquo;
(program
code &ldquo;011").&nbsp; <a href="table_22.htm">Table
22</a>
contains the code table of reason codes for step
&ldquo;GLERL&rdquo;
(program
code &ldquo;017") . The steps
&ldquo;CLIMO&rdquo;, "SSI", &nbsp;and "R3DVAR"&nbsp;currently do not
run, and the
step&nbsp;"GSI"&nbsp;currently does not generate or store
reason codes.
&nbsp;The step "PREPACQC" pertains to the aircraft quality&nbsp;control
step that was used prior to 17 July 2012. &nbsp;&nbsp;Step "DEFAULT" is
designed to&nbsp;handle events written
out by
any non-defined program/step (useful for non-operational
runs).&nbsp;</p><p>&nbsp; &nbsp;
&nbsp;Additional documentation on the structure of
NCEP BUFR files in general can be found at&nbsp;&nbsp; <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/">http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/</a>,
while additional documentation on the structure of PREPBUFR files in
particular
can be found at <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/toc/prepbufr/">http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/toc/prepbufr/</a>.
<br>&nbsp;
<br>&nbsp;
</p><p><b><u>4.&nbsp;
OPERATIONAL DATA THAT DO NOT PASS THROUGH PREPBUFR
PROCESSING</u></b>
<br>&nbsp;
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
The NAM,&nbsp;GFS/GDAS,&nbsp;RAP and RTMA/URMA GSI
analyses&nbsp;also&nbsp;assimilate (or at least monitor)
many&nbsp;observation types&nbsp;directly from their BUFR dump files or
from
other non-PREPBUFR sources. Such&nbsp;types include satellite
radiances
(including RARS and DBRTN), satellite retrieved products
(including ozone and GOES cloud data
from NESDIS and LaRC), GPS radio occultation, WSR-88D NEXRAD radial
wind data,&nbsp;lightning and satellite-derived winds and other
products.&nbsp;</p><p>&nbsp; &nbsp; &nbsp;<a href="table_18.htm">Table
18</a> summarizes the current
usage&nbsp;of these data in the various
NCEP assimilation
systems. &nbsp;It also lists data types that are monitored (but not
used) in either the NAM,&nbsp;GFS/GDAS,&nbsp;RAP or RTMA/URMA GSI. <br>&nbsp;
<br>&nbsp;
</p><p><b><u>5.&nbsp;
EXAMPLE PROGRAM TO DECODE NCEP PREPBUFR FILES</u></b>
<br>&nbsp;
</p><p>&nbsp;&nbsp;&nbsp;&nbsp;
A sample program at <a href="decode_prepbufr_example.htm">http://www.emc.ncep.noaa.gov/mmb/data_processing/prepbufr.doc/decode_prepbufr_example</a>
demonstrates how the contents of the PREPBUFR file can be decoded using
routines in the NCEP BUFR library.&nbsp; In this particular
example,&nbsp;
every report is decoded and listed to output files specific to the BUFR
Table A message type.&nbsp; This program also merges the mass and
wind
report "pieces" into a common output report for listing.&nbsp; In
subroutine
<b>READPB</b>,
there is a logical variable <b><i><a href="decode_prepbufr_example.htm#single_msgtyp">single_msgtyp</a></i></b>
which controls the amount of processing.&nbsp; If it is set to <b>FALSE</b>,
then the entire PREPBUFR file is decoded.&nbsp; If it is set to <b>TRUE</b>,
then only reports in the Table A message type indicated by the variable
<b><i><a href="decode_prepbufr_example.htm#msgtyp_process">msgtyp_process</a></i></b>
are decoded.&nbsp;</p>&nbsp;
<br>&nbsp;
<p><b><u>6.&nbsp;
POST-PROCESSING OF NCEP PREPBUFR FILES</u></b>
<br>&nbsp;
</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The
completion of the PREPBUFR&nbsp;job triggers a job
which
performs
post-processing
on the PREPBUFR&nbsp;files just created.&nbsp; This job does
not
produce
any
output necessary to the successful completion of the analysis/forecast
network (indeed,&nbsp;it runs either simultaneously with, or
after,&nbsp;the analysis job<a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/prepbufr.doc/document.htm"><span style="color: rgb(0, 0, 255);"></span></a>
which is also
triggered by the completion of the
PREPBUFR&nbsp;job). <span ="">
<p>&nbsp; &nbsp;
&nbsp;The
first job step&nbsp;executes the program BUFR_REMOREST
which
removes or masks,
from the PREPBUFR&nbsp;file, certain data types that are restricted
(either by the data producers themselves or by the WMO) from
redistribution
outside of NCEP.&nbsp; <a href="http://www.nco.ncep.noaa.gov/sib/restricted_data/restricted_data_pmb/"><span style="color: rgb(0, 0, 255);">
NCEP/NCO
has created a very strict policy on who may or may not have access to
restricted
data</span></a>.&nbsp;&nbsp;
The
resulting PREPBUFR&nbsp;file, gleaned of all
restricted
data, is&nbsp;given a suffix qualifier of&nbsp; ".nr" in the
network-specific
/com directories on the NCEP-WCOSS.<span =""></span></p><p>&nbsp; &nbsp;
&nbsp;The
next PREPBUFR&nbsp;post-processing job step
identifies&nbsp;upper-air
"TimeTwins" (duplications in current rawinsonde, pibal
or&nbsp;dropwinsonde wind report "parts" vs. those over
the&nbsp;past
35 days). &nbsp;This is only executed in the GDAS network (but for
every cycle).</p><p>&nbsp; &nbsp;
&nbsp;The next job step reformats&nbsp;received,
selected, and assimilated data counts (for both&nbsp;satellite and
non-satellite types) for all four GDAS
network&nbsp;cycles&nbsp;for the
current day and&nbsp;saves the&nbsp;result in the monthly
archive
directory. &nbsp;<span ="">On
the second day of each month,
a&nbsp;monthly summary is run, for the previous month, and posted
to
the web. &nbsp;</span>This job
step&nbsp;is only executed in the 18z
GDAS network.</p>&nbsp; &nbsp; &nbsp;The next&nbsp;job
step
generates a&nbsp;table of&nbsp;received, selected, and
assimilated
satellite data&nbsp;counts for all four&nbsp;GDAS network
cycles.
&nbsp;This is&nbsp;</span><span ="">only executed in the GDAS network
(but for every cycle).<br>

<br>

</span><span ="">
&nbsp; &nbsp; &nbsp;The&nbsp;final PREPBUFR post-processing job
step
updates the Master Ship Station List </span><span ="">based on any new </span><span ="">information&nbsp;read from the updated VOS ship</span><span ="">&nbsp;</span><span ="">list from NDBC. &nbsp;</span><span ="">The Master Ship Station list in read&nbsp;</span><span =""></span><span =""></span><span ="">within job JRW1 at 12z on&nbsp;</span><span =""></span><span ="">the first day of each month in order to </span><span ="">generate marine monthly statistics. &nbsp;</span><span ="">This is&nbsp;</span><span ="">only executed in the 18z GDAS network.<br>

<br>

<br>

<br>

<br>

</span><span ="">
<br></span>
</body>
</html>
