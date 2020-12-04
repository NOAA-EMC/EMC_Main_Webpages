<?php
global $browser_title;
 $browser_title = 'NCEP BUFR File Structure';
 include '../../portal_header.php';?>

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
     <h2 id="section-title">NCEP BUFR File Structure</h2>
     <center>
        <h3><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:18px;"><strong>NOAA/NWS/NCEP/EMC<br>
        (Last Revised 2/12/2018)</strong></span></span><span style="font-style: italic;"></span></h3>
     </center>

     <div id="description">

<div class="Section1">
<p class="MsoNormal">
<br clear="all">
</p>
<p style="text-align: center;" class="MsoNormal">
<big>
<span style="font-weight: bold; text-decoration: underline;">NCEP BUFR FILE&nbsp;STRUCTURE</span>
</big>
</p>

</p>
<p style="text-align: center;" class="MsoNormal">
<big>
<span style="font-weight: bold; text-decoration: underline;">with emphasis on embedded BUFR table&nbsp;(A,B,D) messages</span>
</big>
</p>

<p style="text-align: center;" class="MsoNormal">Latest&nbsp;Revision - 04/02/2008</p>

Every BUFR file that is presented to the NCEP BUFRLIB
software, either for input
(reading/decoding) or output (writing/encoding) purposes, must have a
BUFR tables (<a target="_blank" href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tablea.htm">A</a>, 
<a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tableb.htm" target="_blank">B</a>,&nbsp;
<a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tabled.htm" target="_blank">D</a>) 
file associated with it.
&nbsp;These&nbsp;tables may be defined within a separate ASCII text file (see <a href="http://www.nco.ncep.noaa.gov/sib/decoders/BUFRLIB/toc/dfbftab/" target="_blank">Description and Format of BUFR Tables</a>
for more information) or, in the case of an existing BUFR file, may be embedded within the first few BUFR messages of the file itself. &nbsp;When an NCEP "flavored"&nbsp;BUFR file is created for the first time, the BUFR
tables are usually read from an&nbsp;external ASCII text file (although it is also possible to read&nbsp;the tables from table messages that
are embedded within another BUFR file). &nbsp;The&nbsp;tables will then be written into the first few BUFR messages at the top of the
new&nbsp;file (using as many messages as needed to encode the complete set of tables). &nbsp;This "feature" allows all NCEP BUFR files to
be&nbsp;self-describing, i.e., anyone using the NCEP BUFRLIB routines can&nbsp;read an NCEP BUFR&nbsp;file without the need for&nbsp;external files containing BUFR tables 
<a target="_blank" href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tablea.htm">A</a>, 
<a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tableb.htm" target="_blank">B</a>,&nbsp;<a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tabled.htm" target="_blank">D</a>.<br>
<br>
This document describes in detail the content of these embedded BUFR
messages&nbsp;containing the BUFR tables, as they appear in NCEP BUFR
files. &nbsp;It then follows with a less-detailed summary of the
contents of the <a target="_blank" href="#actual_data_messages">actual BUFR data&nbsp;messages</a> which follow. &nbsp;The
example shown here is for the NCEP BUFR tables
associated with Table A (message) type 2 [vertical
soundings (other than satellite)] as it appeared on 04/01/2008 (although the basic layout&nbsp;of
the BUFR table messages is the same for all Table A types).
These&nbsp;tables are embedded in the top messages of the
NCEP&nbsp;"adpupa" BUFR data dump file. &nbsp;This file contains
upper-air profile data for rawinsonde, dropwinsonde, PIBAL, ozonesonde,
wind and spectral moment profiler, NEXRAD VAD wind, and&nbsp;RASS
temperature reports.<br>
<br>
<a target="_blank" href="#ASCII_Table">Click here</a> to view the ASCII text file (called /nwprod/fix/bufrtab.002 on the NCEP CCS machines) which is read in by the BUFRLIB software.<br>
<br>
This text file will require&nbsp;three 10,000 byte BUFR messages in
order to hold all of its information. These&nbsp;will be the first
three messages in the&nbsp;"adpupa" BUFR data dump file. &nbsp;The BUFR messages
containing the tables <a target="_blank" href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tablea.htm">A</a>, <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tableb.htm" target="_blank">B</a>,&nbsp;<a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tabled.htm" target="_blank">D</a> are in Table A (message) type 11.<br>
<br>
<o:p>
<br>
&nbsp;
</o:p>
<o:p>&nbsp;</o:p>
<p class="MsoNormal">
<b style="">
<span style="font-size: 16pt;">
<small>
<span style="text-decoration: underline;">BUFR TABLE IN&nbsp;MESSAGE #1</span>
</small>
<o:p/>
</span>
</b>
</p>
<p class="MsoNormal">
<br clear="all">
</p>
<p class="MsoNormal">
<i style="">
<u>Section 0 - Indicator Section:</u>
</i>
</p>

<p class="MsoNormal">
<br clear="all">
</p>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="vertical-align: top; width: 5%;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right;">1-4</td>

<td>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">BUFR</span>
</b>"</td>

<td>start of BUFR message</td>

</tr>

<tr>

<td style="text-align: right;">5-7</td>

<td>9950</td>

<td>total length of BUFR message (including Section 0) in bytes</td>

</tr>

<tr>

<td style="text-align: right;">8</td>

<td>3</td>

<td>BUFR edition number (3 or 4)</td>

</tr>
</tbody>
</table>

<p class="MsoNormal">
<br>

<br>


<a name="Section_1"/>
<br>


<i style="">
<u>Section 1 - Identification Section for BUFR Edition 3:</u>
</i>
</p>

<p class="MsoNormal">
<br clear="all">
</p>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="width: 5%; vertical-align: top;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">1-3</td>

<td style="vertical-align: top;">
<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;"/>
</b>
<span style="font-family: &quot;Courier New&quot;;">
<span style="font-weight: bold;"/>
</span>18</td>

<td style="vertical-align: top;">length of section in bytes</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">4</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">BUFR master table (zero if standard WMO FM 94 BUFR tables are used)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">5</td>

<td style="vertical-align: top;">3 (NCEP
Central Operations)</td>

<td style="vertical-align: top;">originating/generating sub-center: <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/common_tbl_c8-c13.htm#c-12" target="_blank">Code table 0-01-034</a>
</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">6</td>

<td style="vertical-align: top;">7 (US NWS, NCEP)</td>

<td style="vertical-align: top;">originating/generating center: <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/common_tbl_c1-c5.htm#c-1" target="_blank">Code table 0-01-033</a>
</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">7</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">update sequence number (zero for original BUFR messages; incremented
for updates)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">
<a name="Section_1.8.1"/>8, Bit 1</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">= 0 no optional section, = 1 optional section follows</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">8, Bits 2&ndash;8</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">set to zero (reserved)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">9</td>

<td style="vertical-align: top;">11 (BUFR tables, complete replacement or
update)</td>

<td style="vertical-align: top;">
<a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tablea.htm" target="_blank">data category (Table A)</a>
</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">10</td>

<td style="vertical-align: top;">1</td>

<td style="vertical-align: top;">data sub-category [defined by local automatic data processing (ADP)
centers, always 1 here]</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">11</td>

<td style="vertical-align: top;">12</td>

<td style="vertical-align: top;">version number of master table used</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">12</td>

<td style="vertical-align: top;">1</td>

<td style="vertical-align: top;">version number of local tables used to augment the master table in
use, always 1 here</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">13</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">year of century most typical for the BUFR message contents </td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">14</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">month most typical for the BUFR message contents</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">15</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">day most typical for the BUFR message contents</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">16</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">hour most typical for the BUFR message contents</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">17</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">minute most typical for the BUFR message contents</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">18</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">reserved for local use by ADP centers (NCEP: century most typical for
the BUFR message contents)</td>

</tr>
</tbody>
</table>

<p class="MsoNormal"/>

<p class="MsoNormal">
<br clear="all">
<br>

&nbsp;<br>


<i style="">
<u>Section 2 - Optional Section:</u>
</i>
<br></p><p class="MsoNormal">
<br clear="all">
</p><p class="MsoNormal">


(none per <a target="_blank" href="#Section_1.8.1">Byte 8, Bit 1 of Section 1</a>)<br>


</p><br clear="all">
<p class="MsoNormal">
<br clear="all">
</p>
<p class="MsoNormal"/>
<p class="MsoNormal">
<br clear="all">
</p><p class="MsoNormal">
<a name="Section_3"/>
</p><p class="MsoNormal">


<i style="">
<u>Section 3 - Data Description Section:</u>
</i>
</p>

<p class="MsoNormal">
<br clear="all">
</p>

<p class="MsoNormal">(Note: Light shaded cells are replicated, dark shaded cells are nested replication)</p>

<p class="MsoNormal">
<br clear="all">
</p>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="width: 5%; vertical-align: top;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">1-3</td>

<td style="vertical-align: top;">38</td>

<td style="vertical-align: top;">length of section in bytes</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">4</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">set to zero (reserved)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">5-6</td>

<td style="vertical-align: top;">1</td>

<td style="vertical-align: top;">number of data subsets</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">7, Bit 1</td>

<td style="vertical-align: top;">1</td>

<td style="vertical-align: top;">= 1 observed data, = 0 other data</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">7, Bit 2</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">= 1 compressed data, = 0 non-compressed data</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">7, Bits 3&ndash;8</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">set to zero (reserved)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">8&ndash;37</td>

<td style="vertical-align: top;"/>

<td style="vertical-align: top;">a collection of element descriptors, replication descriptors,
operator descriptors and sequence descriptors, which define the form and
contents of individual data elements comprising one data subset in the data
section, each descriptor occupies 2 bytes and contains 3 parts:&nbsp;F: 2 bits X: 6 bits Y: 8 bits</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">8-9<span style=""/>
</td>

<td style="vertical-align: top;">F-X-Y value: 1-03-000</td>

<td style="vertical-align: top;">use delayed replication for the next three data descriptors</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">10-11</td>

<td style="vertical-align: top;">F-X-Y value: 0-31-001</td>

<td style="vertical-align: top;">8-bit
delayed replication factor (number of lines in <a target="_blank" href="#TblA">Table A section</a> of ASCII text file, <a target="_blank" href="#Section_3.1">see <sup>1</sup> below</a>)&nbsp;</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(192, 192, 192);">
<a name="0-00-001"/>12-13</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">F-X-Y value: 0-00-001</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">Table A: entry; 3-characters (parsed from columns&nbsp;17-19 of each line in <a href="#TblA" target="_blank">Table A section</a> of ASCII text file)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(192, 192, 192);">
<a name="0-00-002"/>14-15 </td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">F-X-Y value: 0-00-002</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">Table A: data category description,
line 1; 32-characters&nbsp;(parsed from columns 3-10 and 22-45 of each line in <a href="#TblA" target="_blank">Table A section</a> of ASCII text file)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(192, 192, 192);">16-17</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">F-X-Y value: 0-00-003</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">Table A: data category description,
line 2; 32-characters&nbsp;(parsed from columns 46-77 of each line in <a href="#TblA" target="_blank">Table A section</a> of ASCII text file)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">18-19</td>

<td style="vertical-align: top;">F-X-Y value: 1-01-000</td>

<td style="vertical-align: top;">use delayed replication for
the next one data descriptor</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">20-21</td>

<td style="vertical-align: top;">F-X-Y value: 0-31-001</td>

<td style="vertical-align: top;">8-bit
delayed replication factor [number of lines in either <a href="#TblB1" target="_blank">Table B part 1</a> or
<a href="#TblB2" target="_blank">Table B part 2</a> sections of ASCII text file (should be the same) plus 5 <a target="_blank" href="#Section_4.2.2">additional Table B entries</a> which do not&nbsp;appear in the&nbsp;ASCII text file, <a target="_blank" href="#Section_3.1">see <sup>1</sup> below</a>] </td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(192, 192, 192);">22-23</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">F-X-Y value: 3-00-004</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">sequence containing F, X, Y part descriptors, element name, units name, scale
sign, scale, reference sign, reference value, data width (<a target="_blank" href="#Section_3.2">see <sup>2</sup> below</a>)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">24-25</td>

<td style="vertical-align: top;">F-X-Y value: 1-05-000</td>

<td style="vertical-align: top;">use delayed replication for the next
five data descriptors</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">26-27</td>

<td style="vertical-align: top;">F-X-Y value: 0-31-001</td>

<td style="vertical-align: top;">8-bit delayed replication factor (number of lines in&nbsp;<a href="#TblA" target="_blank">Table A</a> plus <a href="#TblD" target="_blank">Table D</a> sections of ASCII text file<a href="#Section_3.1"/> plus 4 <a target="_blank" href="#Section_4.2.3">additional Table D entries</a> which do not&nbsp;appear in the&nbsp;ASCII text file <a target="_blank" href="#Section_3.1">see <sup>1</sup> below</a>)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(192, 192, 192);">
<a name="3-00-003"/>28-29</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">F-X-Y value: 3-00-003</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">sequence containing F, X and Y part descriptors (<a target="_blank" href="#Section_3.4">see <sup>4</sup> below</a>)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(192, 192, 192);">30-31</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">F-X-Y value: 2-05-064</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">insert 64 characters&nbsp;(parsed from columns 3-10 and 22-77 of each line in&nbsp;<a href="#TblA" target="_blank">Table A</a> or <a href="#TblD" target="_blank">Table D</a> section of ASCII text file)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(192, 192, 192);">32-33</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">F-X-Y value: 1-01-000</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">use delayed replication for the next
one data descriptor</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(192, 192, 192);">34-35</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">F-X-Y value: 0-31-001</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">8-bit
delayed replication factor [number of constituent Table B, C and&nbsp;D
descriptors in the defining sequence for each F-X-Y value defined in <a target="_blank" href="#3-00-003">3-00-003 above</a>, parsed from mnemonic character strings in columns 14-78 of each line in <a href="#TblD1" target="_blank">Table D defining sequence</a> section of ASCII text file (one more more blank characters&nbsp;separate the constituent Table B and C descriptors while <a target="_blank" href="#Section_4.2.3">pairs of parentheses, curly brackets, square brackets or&nbsp;angle brackets denote various constituent Table D descriptors</a>, the mnemonic character sting in columns&nbsp;3-10 (left justified) is used as a <a href="#Section_3.5" target="_blank">line continuation indicator</a>
and is also used to&nbsp;define the sequence based on the matching
mnemonic character&nbsp;string in columns&nbsp;3-10 (left justified) of
the corresponding line in the <a href="#TblA" target="_blank">Table A</a> or <a href="#TblD" target="_blank">Table D</a> section of ASCII text file]&nbsp;</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(153, 153, 153);">36-37</td>

<td style="vertical-align: top; background-color: rgb(153, 153, 153);">F-X-Y value: 0-00-030</td>

<td style="vertical-align: top; background-color: rgb(153, 153, 153);">descriptor defining sequence; 6 characters [each constituent Table B or C mnemonic character string or Table D indicator (<a target="_blank" href="#Section_4.2.3">pairs of parentheses, curly brackets, square brackets or&nbsp;angle brackets</a>) parsed out of columns 14-78 of each line (or lines if there is a <a href="#Section_3.5" target="_blank">continuation</a>) in <a href="#TblD1" target="_blank">Table D defining sequence</a> section of ASCII text file;
the&nbsp;parsed mnemonic character sting&nbsp;is&nbsp;used
to&nbsp;define the Table B or Table D element based&nbsp;on the
matching mnemonic character&nbsp;string in columns&nbsp;3-10 (left
justified) of the corresponding line in Table B <a href="#TblB1" target="_blank">part 1</a> and <a href="#TblB2" target="_blank">part 2</a> or <a href="#TblD" target="_blank">Table D</a> section of ASCII text file]<span style="text-decoration: underline;"/>
</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">38</td>

<td style="vertical-align: top; background-color: rgb(255, 255, 255);">0</td>

<td style="vertical-align: top; background-color: rgb(255, 255, 255);">reserved</td>

</tr>
</tbody>
</table>

<p class="MsoNormal"/><p class="MsoNormal">
<span style="">
<a name="Section_3.1"/>
</span>
<br><sup>1</sup>&nbsp;- Since the length of an NCEP&nbsp;BUFR message has an
upper limit&nbsp;(the default being 10,000 bytes, as used in the
"adpupa" BUFR data dump files, but with a maximum of 2.5
million&nbsp;bytes), this replication factor&nbsp;may&nbsp;be less than
the actual&nbsp;number of lines in this section of the ASCII text file.
&nbsp;In this case, the next BUFR message will resume at point left off
in the replication here, and it will continue the
replication&nbsp;until all lines in this section of the ASCII text file
have been parsed out.</p>

<p class="MsoNormal"/>

<p class="MsoNormal">
<a name="Section_3.2"/>
<br>

</p><p class="MsoNormal">
<span style="">
<sup>2</sup> - Expansion of sequence descriptor 3-00-004 (</span>element name, units name, scale
sign, scale, reference sign, reference value, data width):</p>

<p class="MsoNormal">
<span style="">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</span>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>3-00-003 (Sequence containing F, X and Y
part descriptors) (<a target="_blank" href="#Section_3.3">see <sup>3</sup> below</a>)<br>


&nbsp;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>0-00-013
(Element name, line 1; 32 characters) (parsed from columns 3-10 and
22-45 of each line in <a href="#TblB1" target="_blank">Table B, part 1</a> section of ASCII text file)<br>


&nbsp;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span style=""/> 0-00-014
(Element name, line 2; 32 characters) (parsed from columns 46-77 of each line in <a href="#TblB1" target="_blank">Table B, part 1</a> section of ASCII text file)<br>


&nbsp;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span style=""/>
<span style=""/> 0-00-015 (Units
name; 24 characters) (parsed from columns 41-64 of each line in <a href="#TblB2" target="_blank">Table B, part 2</a> section of ASCII text file)<br>


&nbsp;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span style=""/>
0-00-016
(Units scale sign "<span style="font-weight: bold;">+</span>" or "<span style="font-weight: bold;">-</span>"; 1 character) [parsed from column just
before&nbsp;number parsed out of&nbsp;columns 15-17, right
justified,&nbsp;of each line in <a href="#TblB2" target="_blank">Table B, part 2</a> section of ASCII text
file,&nbsp;blank (" ") is interpreted&nbsp;as "<span style="font-weight: bold;">+</span>"]<br>


&nbsp;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span style=""/>
0-00-017
(Units scale; 3 characters) (parsed from numbers in columns 15-17,
right justified,&nbsp;of each line in <a href="#TblB2" target="_blank">Table B, part 2</a> section of ASCII
text file)<br>


&nbsp;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span style=""/>
<span style=""/> 0-00-018 (Units
reference sign "<span style="font-weight: bold;">+</span>" or "<span style="font-weight: bold;">-</span>"; 1 character) [parsed from column just before&nbsp;number parsed out of&nbsp;columns 22-31,
right justified,&nbsp;of each line in <a href="#TblB2" target="_blank">Table B, part 2</a> section of ASCII text
file,&nbsp;blank (" ") is interpreted&nbsp;as "<span style="font-weight: bold;">+</span>"]<br>


&nbsp;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span style=""/>
0-00-019
(Units reference value; 10 characters) (parsed from numbers in columns
22-31, right justified,&nbsp;of each line in <a href="#TblB2" target="_blank">Table B, part 2</a> section of
ASCII text file)<br>


&nbsp;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;</span>0-00-020
(Element data width; 3 characters) (parsed from numbers in columns
35-37, right justified,&nbsp;of each line in <a href="#TblB2" target="_blank">Table B, part 2</a> section of
ASCII text file)<br>


&nbsp;<br>

</p><p class="MsoNormal">
<span style="">
<a name="Section_3.3"/>
</span>
<span style=""/>
</p>

<p class="MsoNormal">
<span style="">
<sup>3</sup> - Expansion of sequence descriptor 3-00-003 (</span>F, X and Y
part descriptors):</p>

<span style="">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</span>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>0-00-010
(F descriptor to be added or defined; 1 character) (parsed from
character 14&nbsp;of each line in <a href="#TblB1" target="_blank">Table B, part 1</a> section of ASCII text
file)<br>


&nbsp;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;</span>0-00-011
(X descriptor to be added or defined; 2 characters) (parsed from
columns 15-16 of each line in <a href="#TblB1" target="_blank">Table B, part 1</a> section of ASCII text
file)<br>


&nbsp;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;</span>0-00-012
(Y descriptor to be added or defined; 3 characters) (parsed from
columns 17-19 of each line in <a href="#TblB1" target="_blank">Table B, part 1</a> section of ASCII text
file)<br>

<p class="MsoNormal">
<span style=""/>
</p>

<p class="MsoNormal">
<span style="">
<a name="Section_3.4"/>
</span>
<span style=""/>
</p>

<p class="MsoNormal">
<span style="">
<sup>4</sup> - Expansion of sequence descriptor 3-00-003 (</span>F, X and Y
part descriptors):</p>

<span style="">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</span>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>
<span style=""/>0-00-010
(F descriptor to be added or defined; 1 character) (parsed from
character 14&nbsp;of each line in <a href="#TblA" target="_blank">Table A</a> or <a href="#TblD" target="_blank">Table D</a>&nbsp;section of ASCII text
file, for Table A section, the character "<span style="font-weight: bold;">A</span>" is changed to "<span style="font-weight: bold;">3</span>")<br>


&nbsp;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;</span>0-00-011
(X descriptor to be added or defined; 2 characters) (parsed from
columns 15-16 of each line in&nbsp;<a href="#TblA" target="_blank">Table A</a> or <a target="_blank" href="#TblD">Table D</a> section of ASCII text
file)<br>


&nbsp;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;</span>0-00-012
(Y descriptor to be added or defined; 3 characters) (parsed from
columns 17-19 of each line in&nbsp;<a href="#TblA" target="_blank">Table A</a> or <a href="#TblD" target="_blank">Table D</a> section of ASCII text
file)<br>

<span style="">
<a name="Section_3.5"/>
</span>
<br>

<sup>5</sup> - Multiple successive lines may be used in a continuation
fashion by repeating, within columns 3-10 of each continuation line,
the left-justified mnemonic being defined.<br>


<br>


<span style=""/>
<p class="MsoNormal">
<br>

<br>


<i style="">
<u>Section 4 - Data Section:</u>
</i>
</p>

<p class="MsoNormal">
<br clear="all">
</p>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="width: 5%; vertical-align: top;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">1-3</td>

<td style="vertical-align: top;">
<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;"/>
</b>
<span style="font-family: &quot;Courier New&quot;;">
<span style="font-weight: bold;"/>
</span>9882</td>

<td style="vertical-align: top;">length of section in bytes</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">4</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">set to zero (reserved)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">5-9882</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_4.1">see <sup>1</sup> below</a>)<br>

</td>

<td style="vertical-align: top;">binary data as defined by sequence descriptors in Section 3 (repeated
just once since there is one&nbsp;subset in the BUFR message)</td>

</tr>
</tbody>
</table>

<p class="MsoNormal">
<br clear="all">
</p>

<p class="MsoNormal">
<a name="Section_4.1"/>
</p>

<p class="MsoNormal">
<sup>1</sup> - contents of bytes 5-9882</p>

<p class="MsoNormal"/>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="width: 5%; vertical-align: top;">EXPANDED F-X-Y DESCRIPTOR LIST (from Section&nbsp;3)</td>

<td style="vertical-align: top; width: 370px;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top; width: 623px;">Description</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">0-31-001</td>

<td style="vertical-align: top; width: 370px;">17</td>

<td style="vertical-align: top; width: 623px;">number of replications of Table A information (entry itself, text description 1, text description 2)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-001</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">218</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Table A entry, 3 characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-002</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">NC002001 MSG TYPE
002-001&nbsp; RAWIN</span>
</b>
</tt>" </td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Table A: data category description,
line 1; 32-characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-003</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">SONDE - FIXED LAND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Table A: data category description,
line 2; 32-characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">0-00-001</td>

<td style="vertical-align: top; width: 370px;">"<tt>
<b>
<span style="font-size: 14pt;">219</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px;">2nd replication: Table A entry, 3 characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">0-00-002</td>

<td style="vertical-align: top; width: 370px;">"<tt>
<b>
<span style="font-size: 14pt;">NC002002 MSG TYPE
002-002&nbsp; RAWIN</span>
</b>
</tt>" </td>

<td style="vertical-align: top; width: 623px;">2nd&nbsp;replication: Table A: data category description,
line 1; 32-characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">0-00-003</td>

<td style="vertical-align: top; width: 370px;">"<tt>
<b>
<span style="font-size: 14pt;">SONDE - MOBIL
LAND&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px;">2nd&nbsp;replication: Table A: data category description,
line 2; 32-characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-001</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">220</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">3rd replication: Table A entry, 3 characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-002</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">NC002003 MSG TYPE
002-003&nbsp; RAWIN</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">3rd&nbsp;replication: Table A: data category description,
line 1; 32-characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-003</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">SONDE &ndash; SHIP<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">3rd&nbsp;replication: Table A: data category description,
line 2; 32-characters</td>

</tr>

<tr align="center">

<td colspan="3" rowspan="1">****** 4th through 14th&nbsp;replications follow
in the same way ******</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">0-00-001</td>

<td style="vertical-align: top; width: 370px;">"<tt>
<b>
<span style="font-size: 14pt;">208</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px;">15th replication: Table A entry, 3 characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">0-00-002</td>

<td style="vertical-align: top; width: 370px;">"<tt>
<b>
<span style="font-size: 14pt;">NC002015 MSG TYPE
002-015&nbsp; OZONE</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px;">15th&nbsp;replication: Table A: data category description,
line 1; 32-characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">0-00-003</td>

<td style="vertical-align: top; width: 370px;">"<tt>
<b>
<span style="font-size: 14pt;">SONDE (HIGH-RES) (FROM ASCII)<span style="">&nbsp;&nbsp; </span>
</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px;">15th&nbsp;replication: Table A: data category description,
line 2; 32-characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-001</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
&nbsp;"<tt>
<b>
<span style="font-size: 14pt;">206</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">16th replication: Table A entry, 3 characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-002</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">NC002016 MSG TYPE
002-016&nbsp; EUROP</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">16th&nbsp;replication: Table A: data category description,
line 1; 32-characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-003</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
&nbsp;"<tt>
<b>
<span style="font-size: 14pt;">EAN PROFILER WINDS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">16th&nbsp;replication: Table A: data category description,
line 2; 32-characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">0-00-001</td>

<td style="vertical-align: top; width: 370px;">
&nbsp;"<tt>
<b>
<span style="font-size: 14pt;">235</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px;">17th replication: Table A entry, 3 characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">0-00-002</td>

<td style="vertical-align: top; width: 370px;">"<tt>
<b>
<span style="font-size: 14pt;">NC004005 MESSAGE TYPE
004-005&nbsp; R</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px;">17th&nbsp;replication: Table A: data category description,
line 1; 32-characters</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">0-00-003</td>

<td style="vertical-align: top; width: 370px;">"<tt>
<b>
<span style="font-size: 14pt;">ECCO - flight level<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px;">17th&nbsp;replication: Table A: data category description,
line 2; 32-characters</td>

</tr>

<tr>
<td style="text-align: right; vertical-align: top;">0-31-001</td>
<td style="vertical-align: top; width: 370px;">78</td>
<td style="vertical-align: top; width: 623px;">number of replications of Table B information (F, X, Y part descriptors, element name, units name, scale
sign, scale, reference sign, reference value, data width)</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-010</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">0</span>
</b>
</tt>" (<a href="#Section_4.2.2" target="_blank">see <sup>2</sup> below</a>)</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: F descriptor to be added or defined; 1 character</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-011</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">63</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: X descriptor to be added or defined; 2 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-012</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">000</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Y descriptor to be added or defined; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-013</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">

"<tt>
<b>
<span style="font-size: 14pt;">BYTCNT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Element name, line 1; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-014</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">

"<tt>
<b>
<span style="font-size: 14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Element name, line 2; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-015</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">

"<tt>
<b>
<span style="font-size: 14pt;">BYTES<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Units
name; 24 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-016</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">

"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Units scale sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-017</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">

"<tt>
<b>
<span style="font-size: 14pt;">0&nbsp; </span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Units scale; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-018</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">

"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication:&nbsp;Units
reference sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-019</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">

"<tt>
<b>
<span style="font-size: 14pt;">0<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Units reference value; 10 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-020</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">

"<tt>
<b>
<span style="font-size: 14pt;">16 </span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: &nbsp;Element data width; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-010</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">0</span>
</b>
</tt>" (<a href="#Section_4.2.2" target="_blank">see <sup>2</sup> below</a>)</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd&nbsp;replication: F descriptor to be added or defined; 1 character</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-011</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">63</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd replication: X descriptor to be added or defined; 2 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-012</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">255</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd&nbsp;replication: Y descriptor to be added or defined; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-013</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">


"<tt>
<b>
<span style="font-size: 14pt;">BITPAD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd&nbsp;replication: Element name, line 1; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-014</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">


"<tt>
<b>
<span style="font-size: 14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd&nbsp;replication: Element name, line 2; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-015</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">


"<tt>
<b>
<span style="font-size: 14pt;">NONE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd&nbsp;replication: Units
name; 24 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-016</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd replication: Units scale sign; 1 character</td>
</tr>
<tr><td style="text-align: right;">0-00-017</td><td>


"<tt>
<b>
<span style="font-size: 14pt;">0&nbsp; </span>
</b>
</tt>"</td><td>2nd replication: Units scale; 3 characters</td></tr><tr><td style="text-align: right;">0-00-018</td><td>


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td><td>2nd replication:&nbsp;Units
reference sign; 1 character</td></tr><tr><td style="text-align: right;">0-00-019</td><td>


"<tt>
<b>
<span style="font-size: 14pt;">0 &nbsp; &nbsp; &nbsp; &nbsp; </span>
</b>
</tt>"</td><td>2nd replication: Units reference value; 10 characters</td></tr><tr><td style="text-align: right;">0-00-020</td><td>


"<tt>
<b>
<span style="font-size: 14pt;">1&nbsp; </span>
</b>
</tt>"</td><td>2nd replication: &nbsp;Element data width; 3 characters</td></tr><tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-010</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">0</span>
</b>
</tt>"&nbsp;(<a href="#Section_4.2.2" target="_blank">see <sup>2</sup> below</a>)</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">3rd&nbsp;replication: F descriptor to be added or defined; 1 character</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-011</td>
<td style="background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">31</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">3rd replication: X descriptor to be added or defined; 2 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-012</td>
<td style="background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">000</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">3rd replication: Y descriptor to be added or defined; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-013</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">DRF1BIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">3rd replication: Element name, line 1; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-014</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp;&nbsp;</span>
</b>
</tt>"&nbsp;</td>
<td style="background-color: rgb(204, 204, 204);">3rd replication: Element name, line 2; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-015</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">NUMERIC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">3rd replication: Units
name; 24 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-016</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">3rd replication: Units scale sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-017</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">0&nbsp; </span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">3rd replication: Units scale; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-018</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">3rd replication:&nbsp;Units
reference sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-019</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">0 &nbsp; &nbsp; &nbsp; &nbsp; </span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">3rd replication: Units reference value; 10 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-020</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">1&nbsp; </span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">3rd replication: &nbsp;Element data width; 3 characters</td>
</tr>
<tr>
<td style="vertical-align: top; background-color: rgb(255, 255, 255); text-align: right;">0-00-010</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">0</span>
</b>
</tt>"&nbsp;(<a href="#Section_4.2.2" target="_blank">see <sup>2</sup> below</a>)</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">4th&nbsp;replication: F descriptor to be added or defined; 1 character</td>
</tr>
<tr>
<td style="text-align: right;">0-00-011</td>
<td>"<tt>
<b>
<span style="font-size: 14pt;">31</span>
</b>
</tt>"</td>
<td>4th replication: X descriptor to be added or defined; 2 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-012</td>
<td>"<tt>
<b>
<span style="font-size: 14pt;">001</span>
</b>
</tt>"</td>
<td>4th replication: Y descriptor to be added or defined; 3 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-013</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">DRF8BIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</b>
</tt>"</td>
<td>4th replication: Element name, line 1; 32 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-014</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>
</b>
</tt>"</td>
<td>4th replication: Element name, line 2; 32 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-015</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">NUMERIC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</b>
</tt>"</td>
<td>4th replication: Units
name; 24 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-016</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td>4th replication: Units scale sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right;">0-00-017</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">0&nbsp; </span>
</b>
</tt>"</td>
<td>4th replication: Units scale; 3 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-018</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td>4th replication:&nbsp;Units
reference sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right;">0-00-019</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">0 &nbsp; &nbsp; &nbsp; &nbsp; </span>
</b>
</tt>"</td>
<td>4th replication: Units reference value; 10 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-020</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">8&nbsp; </span>
</b>
</tt>"</td>
<td>4th replication: &nbsp;Element data width; 3 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-010</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


&nbsp;"<tt>
<b>
<span style="font-size: 14pt;">0</span>
</b>
</tt>"&nbsp;(<a href="#Section_4.2.2" target="_blank">see <sup>2</sup> below</a>)</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th&nbsp;replication: F descriptor to be added or defined; 1 character</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-011</td>
<td style="background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">31</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">5th replication: X descriptor to be added or defined; 2 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-012</td>
<td style="background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">002</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">5th replication: Y descriptor to be added or defined; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-013</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">DRF16BIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">5th replication: Element name, line 1; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-014</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp; &nbsp;</span>
</b>
</tt>"&nbsp;</td>
<td style="background-color: rgb(204, 204, 204);">5th replication: Element name, line 2; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-015</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">NUMERIC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">5th replication: Units
name; 24 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-016</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">5th replication: Units scale sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-017</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">0&nbsp; </span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">5th replication: Units scale; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-018</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">5th replication:&nbsp;Units
reference sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-019</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">0 &nbsp; &nbsp; &nbsp; &nbsp; </span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">5th replication: Units reference value; 10 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-020</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">16 </span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">5th replication: &nbsp;Element data width; 3 characters</td>
</tr>
<tr>
<td style="vertical-align: top; background-color: rgb(255, 255, 255); text-align: right;">0-00-010</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">0</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th&nbsp;replication: F descriptor to be added or defined; 1 character</td>
</tr>
<tr>
<td style="text-align: right;">0-00-011</td>
<td>


&nbsp;"<tt>
<b>
<span style="font-size: 14pt;">01</span>
</b>
</tt>"</td>
<td>6th replication: X descriptor to be added or defined; 2 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-012</td>
<td>"<tt>
<b>
<span style="font-size: 14pt;">001</span>
</b>
</tt>"</td>
<td>6th replication: Y descriptor to be added or defined; 3 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-013</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">WMOB<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>WMO BLOCK NUMBER<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;</span>
</span>
</b>
</tt>"&nbsp;</td>
<td>6th replication: Element name, line 1; 32 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-014</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp;&nbsp;</span>
</b>
</tt>"</td>
<td>6th replication: Element name, line 2; 32 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-015</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">NUMERIC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</b>
</tt>"</td>
<td>6th replication: Units
name; 24 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-016</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td>6th replication: Units scale sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right;">0-00-017</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">0&nbsp; </span>
</b>
</tt>"</td>
<td>6th replication: Units scale; 3 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-018</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td>6th replication:&nbsp;Units
reference sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right;">0-00-019</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">0 &nbsp; &nbsp; &nbsp; &nbsp; </span>
</b>
</tt>"</td>
<td>6th replication: Units reference value; 10 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-020</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">7<span style="">&nbsp;
</span>
</span>
</b>
</tt>"</td>
<td>6th replication: &nbsp;Element data width; 3 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-010</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">0</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">7th replication: F descriptor to be added or defined; 1 character</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-011</td>
<td style="background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">01</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">7th replication: X descriptor to be added or defined; 2 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-012</td>
<td style="background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">002</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">7th replication: Y descriptor to be added or defined; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-013</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">WMOS<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>WMO STATION NUMBER<span style="">&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;</span>
</span>
</b>
</tt>"&nbsp;</td>
<td style="background-color: rgb(204, 204, 204);">7th replication: Element name, line 1; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-014</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp;&nbsp;</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">7th replication: Element name, line 2; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-015</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">NUMERIC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">7th replication: Units
name; 24 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-016</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">7th replication: Units scale sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-017</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">0&nbsp; </span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">7th replication: Units scale; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-018</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">7th replication:&nbsp;Units
reference sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-019</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">0 &nbsp; &nbsp; &nbsp; &nbsp; </span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">7th replication: Units reference value; 10 characters</td>
</tr>
<tr>
<td style="text-align: right; background-color: rgb(204, 204, 204);">0-00-020</td>
<td style="background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">10<span style="">
</span>
</span>
</b>
</tt>"</td>
<td style="background-color: rgb(204, 204, 204);">7th replication: &nbsp;Element data width; 3 characters</td>
</tr>

<tr>
<td colspan="3" rowspan="1" style="vertical-align: top; background-color: rgb(255, 255, 255); text-align: center;">****** 8th through 76th&nbsp;replications follow
in the same way ******</td>
</tr>
<tr>
<td style="vertical-align: top; background-color: rgb(255, 255, 255); text-align: right;">0-00-010</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">0</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">77th&nbsp;replication: F descriptor to be added or defined; 1 character</td>
</tr>
<tr>
<td style="text-align: right;">0-00-011</td>
<td>"<tt>
<b>
<span style="font-size: 14pt;">12</span>
</b>
</tt>"</td>
<td>77th replication: X descriptor to be added or defined; 2 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-012</td>
<td>"<tt>
<b>
<span style="font-size: 14pt;">107</span>
</b>
</tt>"</td>
<td>77th replication: Y descriptor to be added or defined; 3 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-013</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">TMVR&nbsp;<span style=""> &nbsp;&nbsp; </span>VIRTUAL TEMPERATURE &nbsp; &nbsp;</span>
</b>
</tt>"</td>
<td>77th replication: Element name, line 1; 32 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-014</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;"> &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp;&nbsp;</span>
</b>
</tt>"</td>
<td>77th replication: Element name, line 2; 32 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-015</td>
<td>


"<tt style="font-weight: bold;">
<span style="font-size: 14pt;">DEGREES KELVIN<span style=""> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
</tt>"</td>
<td>77th replication: Units
name; 24 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-016</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td>77th replication: Units scale sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right;">0-00-017</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">2&nbsp; </span>
</b>
</tt>"</td>
<td>77th replication: Units scale; 3 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-018</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td>77th replication:&nbsp;Units
reference sign; 1 character</td>
</tr>

<tr>
<td style="text-align: right;">0-00-019</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">0 &nbsp; &nbsp; &nbsp; &nbsp; </span>
</b>
</tt>"</td>
<td>77th replication: Units reference value; 10 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-020</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">16<span style="">
</span>
</span>
</b>
</tt>"</td>
<td>77th replication: &nbsp;Element data width; 3 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-010</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">0</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">78th&nbsp;replication: F descriptor to be added or defined; 1 character</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-011</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">13</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">78th replication: X descriptor to be added or defined; 2 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-012</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">003</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">78th replication: Y descriptor to be added or defined; 3 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-013</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">REHU<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>RELATIVE HUMIDITY <span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">78th replication: Element name, line 1; 32 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-014</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp;&nbsp;</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">78th replication: Element name, line 2; 32 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-015</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt style="font-weight: bold;">
<span style="font-size: 14pt;">%<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">78th replication: Units
name; 24 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-016</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">78th replication: Units scale sign; 1 character</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-017</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">0&nbsp; </span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">78th replication: Units scale; 3 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-018</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">78th replication:&nbsp;Units
reference sign; 1 character</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-019</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">0 &nbsp; &nbsp; &nbsp; &nbsp; </span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">78th replication: Units reference value; 10 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-020</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">7<span style="">&nbsp;
</span>
</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">78th replication: &nbsp;Element data width; 3 characters</td>
</tr>
<tr><td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-31-001</td><td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">0</td><td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">number
of replications of Table D information (F, X, Y part descriptors, text
description, Table B and D descriptors defining sequence)</td></tr>


</tbody>
</table>


<a name="Section_4.2.2"/>
<span style="font-family: &quot;Times New Roman&quot;;">
<br>


</span>&nbsp;<o:p/>
<sup>2</sup> - Table B entries 0-63-000
(BYTCNT),&nbsp;0-63-255 (BITPAD), 0-31-000 (DRF8BIT), 0-31-001
(DRF8BIT) and&nbsp;0-31-002 (DRF16BIT) do not&nbsp;appear in&nbsp;any
ASCII text files&nbsp;but are encoded into&nbsp;embedded BUFR
messages&nbsp;containing&nbsp;BUFR tables B for all Table A (message)
types. &nbsp;They will later appear in <a target="_blank" href="#Section_4.2.3">special Table D entries</a> used to define delayed replication for a single Table D sequence.<br><br clear="all"><br clear="all"><br><span style="font-style: italic; text-decoration: underline;">Section 5 - End Section:</span><p class="MsoNormal">
<br clear="all">
</p><table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="vertical-align: top; width: 5%;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right;">1-4</td>

<td>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">7777</span>
</b>"</td>

<td>end of BUFR message</td>

</tr>
</tbody>
</table><br clear="all">
<br>
<br clear="all">
<br>
<br clear="all">
<p class="MsoNormal"/>
<br clear="all">
<p class="MsoNormal"/>
<p class="MsoNormal">
<o:p/>
<o:p/>
</p>
<p class="MsoNormal">
<b style="">
<span style="font-size: 16pt;">
<small>
<span style="text-decoration: underline;">BUFR TABLE IN&nbsp;MESSAGE #2</span>
</small>
<o:p/>
</span>
</b>
</p><p class="MsoNormal">
<o:p>&nbsp;</o:p>
</p><p class="MsoNormal">
<i style="">
<u>Section 0 - Indicator Section:</u>
</i>
</p><p class="MsoNormal">
<o:p>&nbsp;</o:p>
</p><table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="vertical-align: top; width: 5%;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right;">1-4</td>

<td>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">BUFR</span>
</b>"</td>

<td>start of BUFR message</td>

</tr>

<tr>

<td style="text-align: right;">5-7</td>

<td>9924</td>

<td>total length of BUFR message (including Section 0) in bytes</td>

</tr>

<tr>

<td style="text-align: right;">8</td>

<td>3</td>

<td>BUFR edition number (3 or 4)</td>

</tr>
</tbody>
</table><p class="MsoNormal">
<o:p>&nbsp;</o:p>
<br clear="all">
</p>
<p class="MsoNormal">
<o:p/>
<br clear="all">
</p><p class="MsoNormal">
<o:p>&nbsp;</o:p>
</p><p class="MsoNormal">
<o:p/>
</p><i style="">
<u>Section 1 - Identification Section for BUFR Edition 3:</u>
</i>
<p class="MsoNormal">
<o:p/>
<br clear="all">
</p><p class="MsoNormal">
<a target="_blank" href="#Section_1">
<o:p>Same as in BUFR&nbsp;Message #1</o:p>
</a>
</p><br>
<br clear="all">
<p class="MsoNormal">
<o:p/>
</p>
<p class="MsoNormal">
<br clear="all">
</p><p class="MsoNormal"/><p class="MsoNormal">
<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;"/>
</b>
<i style="">
<u>Section 2 - Optional Section:</u>
</i>
<br></p><p class="MsoNormal">
<br clear="all">
</p><p class="MsoNormal">


(none per <a target="_blank" href="#Section_1.8.1">Byte 8, Bit 1 of Section 1</a>)<br>
<i style="">
<u/>
</i>
</p><br>
<br clear="all">
<p class="MsoNormal"/>
<p class="MsoNormal">
<br clear="all">
</p><p class="MsoNormal"/><i style="">
<u>Section 3 - Data Description Section:<br><br></u>
</i>
<a target="_blank" href="#Section_3">Same as in BUFR&nbsp;Message #1</a>
<br>

<p class="MsoNormal">
<br clear="all">
</p>
<p class="MsoNormal">
<br clear="all">
</p><p class="MsoNormal"/><p class="MsoNormal">
<br clear="all">
</p><p class="MsoNormal">


<i style="">
<u>Section 4 - Data Section:</u>
</i>


</p><p class="MsoNormal">
<br clear="all">
</p><table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="width: 5%; vertical-align: top;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">1-3</td>

<td style="vertical-align: top;">
<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;"/>
</b>
<span style="font-family: &quot;Courier New&quot;;">
<span style="font-weight: bold;"/>
</span>9856</td>

<td style="vertical-align: top;">length of section in bytes</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">4</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">set to zero (reserved)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">5-9856</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_4.2">see <sup>1</sup> below</a>)<br>

</td>

<td style="vertical-align: top;">binary data as defined by sequence descriptors in Section 3 (repeated
just once since there is one&nbsp;subset in the BUFR message)</td>

</tr>
</tbody>
</table><br clear="all">
<p class="MsoNormal"/>
<p class="MsoNormal">
<a name="Section_4.2"/>
</p>
<sup>


1</sup> - contents of bytes 5-9856<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="width: 5%; vertical-align: top;">EXPANDED F-X-Y DESCRIPTOR LIST (from Section&nbsp;3)</td>

<td style="vertical-align: top; width: 370px;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top; width: 623px;">Description</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">0-31-001</td>

<td style="vertical-align: top; width: 370px;">0</td>

<td style="vertical-align: top; width: 623px;">number of replications of Table A information (entry itself, text description 1, text description 2)</td>

</tr><tr>
<td style="text-align: right; vertical-align: top;">0-31-001</td>
<td style="vertical-align: top; width: 370px;">40</td>
<td style="vertical-align: top; width: 623px;">number of replications of Table B information (F, X, Y part descriptors, element name, units name, scale
sign, scale, reference sign, reference value, data width)</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-010</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">0</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: F descriptor to be added or defined; 1 character</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-011</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">13</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: X descriptor to be added or defined; 2 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-012</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">195</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Y descriptor to be added or defined; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-013</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">STBS5<span style="">&nbsp;&nbsp;&nbsp; </span>MODIFIED SHOWALTER STAB</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Element name, line 1; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-014</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">ILITY INDEX<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Element name, line 2; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-015</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">NUMERIC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</b>
</tt>"&nbsp;</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Units
name; 24 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-016</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">

"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Units scale sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-017</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">

"<tt>
<b>
<span style="font-size: 14pt;">0&nbsp; </span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Units scale; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-018</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">

"<tt>
<b>
<span style="font-size: 14pt;">-</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication:&nbsp;Units
reference sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-019</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">

"<tt>
<b>
<span style="font-size: 14pt;">40<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: Units reference value; 10 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(204, 204, 204);">0-00-020</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">

"<tt>
<b>
<span style="font-size: 14pt;">8&nbsp; </span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st replication: &nbsp;Element data width; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-010</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">0</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd&nbsp;replication: F descriptor to be added or defined; 1 character</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-011</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">15</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd replication: X descriptor to be added or defined; 2 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-012</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">003</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd&nbsp;replication: Y descriptor to be added or defined; 3 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-013</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">


"<tt>
<b>
<span style="font-size: 14pt;">MOPP &nbsp; &nbsp; MEASURED OZONE PARTIAL&nbsp;</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd&nbsp;replication: Element name, line 1; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-014</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">


"<tt>
<b>
<span style="font-size: 14pt;">PRESSURE (SOUNDING) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd&nbsp;replication: Element name, line 2; 32 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-015</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">


"<tt>
<b>
<span style="font-size: 14pt;">PA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp; </span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd&nbsp;replication: Units
name; 24 characters</td>
</tr>
<tr>
<td style="text-align: right; vertical-align: top; background-color: rgb(255, 255, 255);">0-00-016</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd replication: Units scale sign; 1 character</td>
</tr>
<tr><td style="text-align: right;">0-00-017</td><td>


"<tt>
<b>
<span style="font-size: 14pt;">4&nbsp; </span>
</b>
</tt>"</td><td>2nd replication: Units scale; 3 characters</td></tr><tr><td style="text-align: right;">0-00-018</td><td>


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td><td>2nd replication:&nbsp;Units
reference sign; 1 character</td></tr><tr><td style="text-align: right;">0-00-019</td><td>


"<tt>
<b>
<span style="font-size: 14pt;">0 &nbsp; &nbsp; &nbsp; &nbsp; </span>
</b>
</tt>"</td><td>2nd replication: Units reference value; 10 characters</td></tr><tr><td style="text-align: right;">0-00-020</td><td>


"<tt>
<b>
<span style="font-size: 14pt;">9&nbsp; </span>
</b>
</tt>"</td><td>2nd replication: &nbsp;Element data width; 3 characters</td></tr><tr>
<td colspan="3" rowspan="1" style="vertical-align: top; background-color: rgb(255, 255, 255); text-align: center;">****** 3rd through 38th&nbsp;replications follow
in the same way ******</td>
</tr>
<tr>
<td style="vertical-align: top; background-color: rgb(255, 255, 255); text-align: right;">0-00-010</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">0</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">39th&nbsp;replication: F descriptor to be added or defined; 1 character</td>
</tr>
<tr>
<td style="text-align: right;">0-00-011</td>
<td>"<tt>
<b>
<span style="font-size: 14pt;">35</span>
</b>
</tt>"</td>
<td>39th replication: X descriptor to be added or defined; 2 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-012</td>
<td>"<tt>
<b>
<span style="font-size: 14pt;">195</span>
</b>
</tt>"</td>
<td>39th replication: Y descriptor to be added or defined; 3 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-013</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">SEQNUM<span style="">&nbsp;&nbsp; </span>CHANNEL SEQUENCE NUMBER</span>
</b>
</tt>"</td>
<td>39th replication: Element name, line 1; 32 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-014</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;"> &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp;&nbsp;</span>
</b>
</tt>"</td>
<td>39th replication: Element name, line 2; 32 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-015</td>
<td>


"<tt style="font-weight: bold;">
<span style="font-size: 14pt;">CCITT IA5 &nbsp; &nbsp; &nbsp;<span style=""> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
</tt>"</td>
<td>39th replication: Units
name; 24 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-016</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td>39th replication: Units scale sign; 1 character</td>
</tr>
<tr>
<td style="text-align: right;">0-00-017</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">0&nbsp; </span>
</b>
</tt>"</td>
<td>39th replication: Units scale; 3 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-018</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td>39th replication:&nbsp;Units
reference sign; 1 character</td>
</tr>

<tr>
<td style="text-align: right;">0-00-019</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">0 &nbsp; &nbsp; &nbsp; &nbsp; </span>
</b>
</tt>"</td>
<td>39th replication: Units reference value; 10 characters</td>
</tr>
<tr>
<td style="text-align: right;">0-00-020</td>
<td>


"<tt>
<b>
<span style="font-size: 14pt;">32 <span style=""/>
</span>
</b>
</tt>"</td>
<td>39th replication: &nbsp;Element data width; 3 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-010</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">0</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">40th&nbsp;replication: F descriptor to be added or defined; 1 character</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-011</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">58</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">40th replication: X descriptor to be added or defined; 2 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-012</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">008</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">40th replication: Y descriptor to be added or defined; 3 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-013</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">RRSTG<span style="">&nbsp;&nbsp;&nbsp; </span>RAW REPORT STRING<span style="">&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;</span>
</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">40th replication: Element name, line 1; 32 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-014</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp; &nbsp;</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">40th replication: Element name, line 2; 32 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-015</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">CCITT IA5<span style="">&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">40th replication: Units
name; 24 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-016</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">40th replication: Units scale sign; 1 character</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-017</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">0&nbsp; </span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">40th replication: Units scale; 3 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-018</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">+</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">40th replication:&nbsp;Units
reference sign; 1 character</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-019</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">0 &nbsp; &nbsp; &nbsp; &nbsp; </span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">40th replication: Units reference value; 10 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-020</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">


"<tt>
<b>
<span style="font-size: 14pt;">64<span style="">
</span>
</span>
</b>
</tt>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">40th replication: &nbsp;Element data width; 3 characters</td>
</tr>
<tr><td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-31-001</td><td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">43</td><td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">number
of replications of Table D information (F, X, Y part descriptors, text
description, Table B and D descriptors defining sequence)</td></tr><tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-010</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">3</span>
</b>
</tt>"&nbsp;(<a href="#Section_4.2.3" target="_blank">see <sup>2</sup> below</a>)</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st outer replication: F descriptor to be added or defined; 1 character</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-011</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">60</span>
</b>
</tt>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st outer replication: X descriptor to be added or defined; 2 characters</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-012</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">001</span>
</b>
</tt>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st outer replication: Y descriptor to be added or defined; 3 characters</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">2-05-064</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">DRP16BIT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</span>
</b>"//<br>


"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">
<span style="">&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
</span>
</b>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st outer replication: insert 64 characters</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-31-001</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">2</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st outer replication: number
of replications of&nbsp;descriptor defining sequence</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">101000</span>
</b>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st outer replication; 1st inner replication: descriptor defining sequence; 6 characters</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">031002</span>
</b>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st outer replication; 2nd&nbsp;inner replication: descriptor defining sequence; 6 characters</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-010</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">3</span>
</b>
</tt>"&nbsp;(<a href="#Section_4.2.3" target="_blank">see <sup>2</sup> below</a>)</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd outer replication: F descriptor to be added or defined; 1 character</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-011</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">60</span>
</b>
</tt>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd outer replication: X descriptor to be added or defined; 2 characters</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-012</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">002</span>
</b>
</tt>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd&nbsp;outer replication: Y descriptor to be added or defined; 3 characters</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">2-05-064</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">DRP8BIT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</span>
</b>"//<br>


"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</span>
</b>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd outer replication: insert 64 characters</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-31-001</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">2</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd outer replication: number
of replications of&nbsp;descriptor defining sequence</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">101000</span>
</b>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd outer replication; 1st inner replication: descriptor defining sequence; 6 characters</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">031001</span>
</b>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">2nd outer replication; 2nd&nbsp;inner replication: descriptor defining sequence; 6 characters</td>


</tr>


<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-010</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">3</span>
</b>
</tt>"&nbsp;(<a href="#Section_4.2.3" target="_blank">see <sup>2</sup> below</a>)</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">3rd outer replication: F descriptor to be added or defined; 1 character</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-011</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">60</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">3rd outer replication: X descriptor to be added or defined; 2 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-012</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">003</span>
</b>
</tt>"
</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">3rd&nbsp;outer replication: Y descriptor to be added or defined; 3 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">2-05-064</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">DRPSTAK<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</span>
</b>"//<br>

"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">3rd outer replication: insert 64 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-31-001</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">2<span style=""/>
</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">3rd outer replication: number
of replications of&nbsp;descriptor defining sequence</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">101000</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">3rd outer replication; 1st inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">031001</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">3rd outer replication; 2nd inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-010</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">3</span>
</b>
</tt>"&nbsp;(<a href="#Section_4.2.3" target="_blank">see <sup>2</sup> below</a>)</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">4th outer replication: F descriptor to be added or defined; 1 character</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-011</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">60</span>
</b>
</tt>"
</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">4th outer replication: X descriptor to be added or defined; 2 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-012</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">004</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">4th&nbsp;outer replication: Y descriptor to be added or defined; 3 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">2-05-064</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">DRP1BIT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</span>
</b>"//<br>

"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">4th outer replication: insert 64 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-31-001</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">2<span style=""/>
</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">4th outer replication: number
of replications of&nbsp;descriptor defining sequence</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">101000</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">4th outer replication; 1st inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">031000</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">4th outer replication; 2nd inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">
<a name="3_63_218"/>0-00-010</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">3</span>
</b>
</tt>"<tt>
<b>
<span style="font-size: 14pt;"/>
</b>
</tt>
</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication: F descriptor to be added or defined; 1 character</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-011</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">63</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication: X descriptor to be added or defined; 2 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-012</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">218</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication: Y descriptor to be added or defined; 3 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">2-05-064</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">NC002001 MSG TYPE
002-001<span style="">&nbsp; </span>RAWIN</span>
</b>"//<br>

"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">SONDE &ndash; FIXED&nbsp;LAND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
</span>
</b>"<br>

</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication: insert 64 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-31-001</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">24</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication: number
of replications of&nbsp;descriptor defining sequence</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">301011</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 1st inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">004004</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 2nd inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 3rd inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">352003</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 4th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 5th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">352001</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 6th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">361121</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 7th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 8th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">361122</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 9th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 10th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">361123</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 11th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360004</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 12th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">361129</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 13th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 14th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">361131</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 15th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 16th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">352002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 17th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 18th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">361128</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 19th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360004</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 20th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">361130</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 21th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">001001</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 22nd inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204); color: rgb(0, 0, 0);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204); color: rgb(0, 0, 0);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">001002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204); color: rgb(0, 0, 0);">5th outer replication; 23rd inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">001003</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">5th outer replication; 24th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">
<a name="3_63_219"/>0-00-010</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">3</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication: F descriptor to be added or defined; 1 character</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-011</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">63</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication: X descriptor to be added or defined; 2 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-012</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">219</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication: Y descriptor to be added or defined; 3 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">2-05-064</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">NC002002 MSG TYPE 002-002<span style="">&nbsp; </span>RAWIN</span>
</b>"//<br>

"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">SONDE &ndash; <st1:place w:st="on">
<st1:placename w:st="on">MOBIL</st1:placename>
<st1:placetype w:st="on">LAND</st1:placetype>
</st1:place>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
</span>
</b>"<br>

</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication: insert 64 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-31-001</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>21<span style="">&nbsp;</span>
</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication: number
of replications of&nbsp;descriptor defining sequence</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">301011</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">6th outer replication; 1st inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">004004</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">6th outer replication; 2nd inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">6th outer replication; 3rd inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">352003</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">6th outer replication; 4th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 5th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">352001</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 6th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">361121</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 7th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 8th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">361122</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 9th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 10th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">361123</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 11th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360004</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 12th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">361129</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 13th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 14th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">361131</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 15th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 16th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">352002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 17th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">360002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 18th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">361128</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 19th inner replication: descriptor defining sequence;&nbsp;6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">001197</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 20th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">033024</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">6th outer replication; 21st inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr align="center">

<td colspan="3" rowspan="1" style="vertical-align: top; background-color: rgb(255, 255, 255);">****** 7th through 42nd outer replications follow
in the same way ******</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-010</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">3</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">43rd outer replication: F descriptor to be added or defined; 1 character</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-011</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">61</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">43rd outer replication: X descriptor to be added or defined; 2 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-012</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">134</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">43rd outer replication: Y descriptor to be added or defined; 3 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">2-05-064</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">UAGP10<span style="">&nbsp;&nbsp; </span>RADIOSONDE CLASS 10 GEO</span>
</b>"//<br>

"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">POTENTIAL DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">43rd outer replication: insert 64 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-31-001</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>1<span style=""/>
</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">43rd outer replication: number
of replications of&nbsp;descriptor defining sequence</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">001008</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">43rd outer replication; 1st inner replication: descriptor defining sequence; 6 characters</td>

</tr>


</tbody>
</table><a name="Section_4.2.3"/>

<o:p/>
<sup>
<br>2</sup> - Table D entries 3-60-001 (DRP16BIT), 3-60-002
(DRP8BIT), 3-60-003 (DRPSTAK) and&nbsp;0-60-004 (DRP1BIT)
do not explicitly appear in an any ASCII text files&nbsp;but are
encoded into&nbsp;embedded
BUFR
messages&nbsp;containing&nbsp;BUFR tables D for all Table A (message)
types. &nbsp;Within the ASCII tables,&nbsp;3-60-001 is represented by
parentheses, "<span style="font-weight: bold;">(</span>" and "<span style="font-weight: bold;">)</span>", spanning the single Table D sequence
descriptor that is being replicated from between 0 and 65535 times;
3-60-002 is represented by curly brackets, "<span style="font-weight: bold;">{</span>" and "<span style="font-weight: bold;">}</span>", spanning the
single Table D sequence descriptor that is being replicated from
between 0 and 255 times; 3-60-003 is represented by square brackets,
"<span style="font-weight: bold;">[</span>" and "<span style="font-weight: bold;">]</span>", spanning the
single Table D sequence descriptor that is being replicated from
between 0 and 255 times under a special "event" structure; and 3-60-004
is represented by angle brackets, "<span style="font-weight: bold;">&lt;</span>" and "<span style="font-weight: bold;">&gt;</span>",&nbsp;spanning the
single Table D sequence descriptor that is being replicated
either&nbsp;0 or&nbsp;1 time.<br><br clear="all"><br>&nbsp;
<p class="MsoNormal">
<i style="">
<u>Section 5 - End Section:</u>
</i>
</p>
<p class="MsoNormal">
<br clear="all">
</p>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="vertical-align: top; width: 5%;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right;">1-4</td>

<td>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">7777</span>
</b>"</td>

<td>end of BUFR message</td>

</tr>
</tbody>
</table>

<br clear="all">
<br>
<br clear="all">
<br>
<br clear="all">
<br>
<br clear="all">
<p class="MsoNormal"/>
<p class="MsoNormal">
<br clear="all">
</p>

<p class="MsoNormal">
<span style=""/>
</p>
<p class="MsoNormal">
<span style=""/>
</p>
<p class="MsoNormal">
<span style=""/>
</p>
<p class="MsoNormal">
<b style="">
<span style="font-size: 16pt;">
<small>
<span style="text-decoration: underline;">BUFR TABLE IN MESSAGE #3</span>
</small>
</span>
</b>
</p><p class="MsoNormal">
<o:p>&nbsp;</o:p>
</p><p class="MsoNormal">
<i style="">
<u>Section 0 - Indicator Section:</u>
</i>
</p>
<p class="MsoNormal">
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
</p>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="vertical-align: top; width: 5%;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right;">1-4</td>

<td>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">BUFR</span>
</b>"</td>

<td>start of BUFR message</td>

</tr>

<tr>

<td style="text-align: right;">5-7</td>

<td>2090</td>

<td>total length of BUFR message (including Section 0) in bytes</td>

</tr>

<tr>

<td style="text-align: right;">8</td>

<td>3</td>

<td>BUFR edition number (3 or 4)</td>

</tr>
</tbody>
</table>
<br clear="all">
<br>
<br clear="all">
<p class="MsoNormal"/>
<p class="MsoNormal">
<i style="">
<u>Section 1 - Identification Section for BUFR Edition 3:</u>
</i>
</p>
<p class="MsoNormal">
<o:p/>
<br clear="all">
</p><p class="MsoNormal">
<a target="_blank" href="#Section_1">
<o:p>Same as in BUFR&nbsp;Message #1</o:p>
</a>
</p><br clear="all">
<br clear="all">
<p class="MsoNormal">
<o:p/>
</p>
<p class="MsoNormal">
<br clear="all">
</p>
<p class="MsoNormal"/>
<p class="MsoNormal">
<o:p/>
</p>
<p class="MsoNormal">
<i style="">
<u>Section 2 - Optional Section:</u>
</i>
<br>


</p>
<p class="MsoNormal">
<br clear="all">
</p>


(none per <a target="_blank" href="#Section_1.8.1">Byte 8, Bit 1 of Section 1</a>)
<p class="MsoNormal">
<br clear="all">
</p>
<p class="MsoNormal">
<br clear="all">
</p>
<p class="MsoNormal">
<br clear="all">
</p>
<p class="MsoNormal">
<o:p/>
</p>
<p class="MsoNormal">
<o:p/>
</p><p class="MsoNormal">
<o:p/>
<i style="">
<u>Section 3 - Data Description Section:<br><br></u>
</i>
<a target="_blank" href="#Section_3">Same as in BUFR&nbsp;Message #1</a>
</p><p class="MsoNormal">
<br clear="all">
</p>
<p class="MsoNormal">
<br clear="all">
<i style="">
<u/>
</i>
</p>
<p class="MsoNormal"/>
<p class="MsoNormal">

<br>


<i style="">
<u/>
</i>
<i style="">
<u>Section 4 - Data Section:</u>
</i>
<br>


<i style="">
<u/>
</i>
<br>


</p>
<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="width: 5%; vertical-align: top;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">1-3</td>

<td style="vertical-align: top;">
<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;"/>
</b>
<span style="font-family: &quot;Courier New&quot;;">
<span style="font-weight: bold;"/>
</span>2022</td>

<td style="vertical-align: top;">length of section in bytes</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">4</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">set to zero (reserved)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">5-2022</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_4.3">see <sup>1</sup> below</a>)<br>

</td>

<td style="vertical-align: top;">binary data as defined by sequence descriptors in Section 3 (repeated
just once since there is one&nbsp;subset in the BUFR message)</td>

</tr>
</tbody>
</table>
<p class="MsoNormal">
<a name="Section_4.3"/>
<br>


<i style="">
<u/>
</i>
<sup>


1</sup> - contents of bytes 5-2022</p>
<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="width: 5%; vertical-align: top;">EXPANDED F-X-Y DESCRIPTOR LIST (from Section&nbsp;3)</td>

<td style="vertical-align: top; width: 370px;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top; width: 623px;">Description</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">0-31-001</td>

<td style="vertical-align: top; width: 370px;">0</td>

<td style="vertical-align: top; width: 623px;">number of replications of Table A information (entry itself, text description 1, text description 2)</td>

</tr><tr>
<td style="text-align: right; vertical-align: top;">0-31-001</td>
<td style="vertical-align: top; width: 370px;">0</td>
<td style="vertical-align: top; width: 623px;">number of replications of Table B information (F, X, Y part descriptors, element name, units name, scale
sign, scale, reference sign, reference value, data width)</td>
</tr><tr><td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-31-001</td><td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">19</td><td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">number
of replications of Table D information (F, X, Y part descriptors, text
description, Table B and D descriptors defining sequence)</td></tr><tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-010</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">3</span>
</b>
</tt>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st outer replication: F descriptor to be added or defined; 1 character</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-011</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">61</span>
</b>
</tt>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st outer replication: X descriptor to be added or defined; 2 characters</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-012</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<tt>
<b>
<span style="font-size: 14pt;">162</span>
</b>
</tt>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st outer replication: Y descriptor to be added or defined; 3 characters</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">2-05-064</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">PFLEV<span style="">&nbsp;&nbsp; </span>
<span style="">&nbsp;</span>PROFILER
REPORT LEVEL D</span>
</b>"//<br>
"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">ATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;</span>
</span>
</b>"</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st outer replication: insert 64 characters</td>


</tr>


<tr>


<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-31-001</td>


<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">8</td>


<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st outer replication: number
of replications of&nbsp;descriptor defining sequence</td>


</tr><tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">007007</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st&nbsp;outer replication; 1st inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">025034</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st&nbsp;outer replication; 2nd inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">033195</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st&nbsp;outer replication; 3rd inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">011001</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st&nbsp;outer replication; 4th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">011002</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st&nbsp;outer replication; 5th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">011050</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st&nbsp;outer replication; 6th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">011006</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st&nbsp;outer replication; 7th inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(204, 204, 204);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(204, 204, 204);">
<span style=""/>
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">011051</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(204, 204, 204);">1st&nbsp;outer replication; 8th inner replication: descriptor defining sequence; 6 characters</td>

</tr><tr align="center">

<td colspan="3" rowspan="1" style="vertical-align: top; background-color: rgb(255, 255, 255);">****** 2nd through 18th outer replications follow
in the same way ******</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-010</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">3</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">19th outer replication: F descriptor to be added or defined; 1 character</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-011</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">62</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">19th&nbsp;outer replication: X descriptor to be added or defined; 2 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-012</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<tt>
<b>
<span style="font-size: 14pt;">250</span>
</b>
</tt>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">19th&nbsp;outer replication: Y descriptor to be added or defined; 3 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">2-05-064</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">EPSEQ1 <span style="">&nbsp;&nbsp;</span>EUROPEAN WIND PROFILER </span>
</b>"//<br>
"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">SEQUENCE 1<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">19th&nbsp;outer replication: insert 64 characters</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-31-001</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>8<span style=""/>
</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">19th&nbsp;outer replication: number
of replications of&nbsp;descriptor defining sequence</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>

<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">007007</span>
</b>"</td>

<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">19th&nbsp;outer replication; 1st inner replication: descriptor defining sequence; 6 characters</td>

</tr>

<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">033002</span>
</b>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">19th&nbsp;outer replication; 2nd inner replication: descriptor defining sequence; 6 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">033195</span>
</b>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">19th&nbsp;outer replication; 3rd inner replication: descriptor defining sequence; 6 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">011001</span>
</b>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">19th&nbsp;outer replication; 4th inner replication: descriptor defining sequence; 6 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">011002</span>
</b>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">19th&nbsp;outer replication; 5th inner replication: descriptor defining sequence; 6 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">011006</span>
</b>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">19th&nbsp;outer replication; 6th inner replication: descriptor defining sequence; 6 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">007007</span>
</b>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">19th&nbsp;outer replication; 7th inner replication: descriptor defining sequence; 6 characters</td>
</tr>
<tr>
<td style="vertical-align: top; text-align: right; background-color: rgb(255, 255, 255);">0-00-030</td>
<td style="vertical-align: top; width: 370px; background-color: rgb(255, 255, 255);">
<span style=""/>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">021030</span>
</b>"</td>
<td style="vertical-align: top; width: 623px; background-color: rgb(255, 255, 255);">19th&nbsp;outer replication; 8th inner replication: descriptor defining sequence; 6 characters</td>
</tr>
</tbody>
</table>
<br clear="all">
<br>
<br clear="all">
<p class="MsoNormal"/>
<br>
<p class="MsoNormal">
<o:p>&nbsp;</o:p>
<i style="">
<u>Section 5 - End Section:</u>
</i>
</p>
<p class="MsoNormal">
<br>
</p>
<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="vertical-align: top; width: 5%;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right;">1-4</td>

<td>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">7777</span>
</b>"</td>

<td>end of BUFR message</td>

</tr>
</tbody>
</table>
<p class="MsoNormal"/>
<p class="MsoNormal">
<br>
</p>
<o:p/>
<p class="MsoNormal">
<o:p>&nbsp;</o:p>
</p>
<br>
<p class="MsoNormal">
<o:p>
</o:p>
<br clear="all">
<br>
<br clear="all">
<br>
<br clear="all">
<br>

</p>
<p class="MsoNormal">
<a name="actual_data_messages"/>
<br clear="all">
</p>

<p class="MsoNormal">
<big>
<big>
<span style="font-weight: bold;">Now the actual BUFR data messages ....</span>
</big>
</big>
</p>
<p class="MsoNormal">
<span style=""/>
<br clear="all">

</p>
<p class="MsoNormal">
<span style=""/>
<br clear="all">

</p>
<p class="MsoNormal">
<b style="">
<span style="font-size: 16pt;">
<small>
<span style="text-decoration: underline;">BUFR DATA IN MESSAGES&nbsp;#4 ON (TO&nbsp;END-OF_FILE)</span>
</small>
</span>
</b>
</p><p class="MsoNormal">
<o:p>&nbsp;</o:p>
</p><p class="MsoNormal">
<i style="">
<u>Section 0 - Indicator Section:</u>
</i>
</p>
<p class="MsoNormal">
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
</p>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="vertical-align: top; width: 5%;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right;">1-4</td>

<td>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">BUFR</span>
</b>"</td>

<td>start of BUFR message</td>

</tr>

<tr>

<td style="text-align: right;">5-7</td>

<td>(<a target="_blank" href="#Section_D.0.1">see <sup>1</sup> below</a>)<span style="font-style: italic;"/>
</td>

<td>total length of BUFR message (including Section 0) in bytes</td>

</tr>

<tr>

<td style="text-align: right;">8</td>

<td>3</td>

<td>BUFR edition number (3 or 4)</td>

</tr>
</tbody>
</table>

<a name="Section_D.0.1"/>
<br>

<span style="">
<sup>1</sup> - </span>The total length&nbsp;of the BUFR message&nbsp;varies
from message to message, but is&nbsp;always 54 (bytes)&nbsp;for "dummy" messages
which contain zero subsets (<a target="_blank" href="#Section_D.1.3">see <sup>3</sup> under Section 1 below</a> and&nbsp;<a target="_blank" href="#Section_D.3.1">
<sup>1</sup> under Section 3 below</a>).

<br>

<br>

<br clear="all">

<br>

<i style="">
<u>Section 1 - Identification Section for BUFR Edition 3:</u>
</i><p class="MsoNormal">
<br clear="all">
</p>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="width: 5%; vertical-align: top;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">1-3</td>

<td style="vertical-align: top;">
<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;"/>
</b>
<span style="font-family: &quot;Courier New&quot;;">
<span style="font-weight: bold;"/>
</span>18</td>

<td style="vertical-align: top;">length of section in bytes</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">4</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">BUFR master table (zero if standard WMO FM 94 BUFR tables are used)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">5</td>

<td style="vertical-align: top;">3 (NCEP
Central Operations)</td>

<td style="vertical-align: top;">originating/generating sub-center: <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/common_tbl_c8-c13.htm#c-12" target="_blank">Code table 0-01-034</a>
</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">6</td>

<td style="vertical-align: top;">7 (US NWS, NCEP)</td>

<td style="vertical-align: top;">originating/generating center: <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/common_tbl_c1-c5.htm#c-1" target="_blank">Code table 0-01-033</a>
</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">7</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">update sequence number (zero for original BUFR messages; incremented
for updates)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">
<a name="Section_D.8.1"/>8, Bit 1</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">= 0 no optional section, = 1 optional section follows</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">8, Bits 2&ndash;8</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">set to zero (reserved)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">9</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_D.1.1">see <sup>1</sup> below</a>)</td>

<td style="vertical-align: top;">
<a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tablea.htm" target="_blank">data category (Table A)</a>
</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">10</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_D.1.2">see <sup>2</sup> below</a>)</td>

<td style="vertical-align: top;">data sub-category [defined by local automatic data processing (ADP)
centers]</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">11</td>

<td style="vertical-align: top;">12</td>

<td style="vertical-align: top;">version number of master table used</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">12</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">version number of local tables used to augment the master table in
use, always 0 here</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">13</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_D.1.3">see <sup>3</sup> below</a>)</td>

<td style="vertical-align: top;">year of century most typical for the BUFR message contents </td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">14</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_D.1.3">see <sup>3</sup> below</a>)</td>

<td style="vertical-align: top;">month most typical for the BUFR message contents</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">15</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_D.1.3">see <sup>3</sup> below</a>)</td>

<td style="vertical-align: top;">day most typical for the BUFR message contents</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">16</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_D.1.3">see <sup>3</sup> below</a>)</td>

<td style="vertical-align: top;">hour most typical for the BUFR message contents</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">17</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_D.1.3">see <sup>3</sup> below</a>)</td>

<td style="vertical-align: top;">minute most typical for the BUFR message contents</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">18</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_D.1.3">see <sup>3</sup> below</a>)</td>

<td style="vertical-align: top;">reserved for local use by ADP centers (NCEP: century most typical for
the BUFR message contents)</td>

</tr>
</tbody>
</table>

<br clear="all">

<p class="MsoNormal">
<a name="Section_D.1.1"/>
<span style="">
<sup>1</sup> - The&nbsp;data category here is defined by the digital value stored in&nbsp;characters 3-5 of "</span>Table A: data category description,
line 1<span style="">" in BUFR table message Section 4 (identified in&nbsp;BUFR table message Section 3 by descriptor <a target="_blank" href="#0-00-002">0-00-002</a> for the particular report type represented&nbsp;by the F-X-Y value stored in <a target="_blank" href="#F-X-Y">data message Section 3, bytes 10-11</a>) <span style="font-weight: bold;">ONLY</span> when&nbsp;characters 3-8 in this&nbsp;value are all&nbsp;<span style="font-weight: bold;">digits</span>.
&nbsp;This is the case for all&nbsp;BUFR data dump files, including
"adpupa" where characters 1-5 are "NC002" and characters 6-8 are
digits for all data types, thus the data category here is 2, defined
in <a target="_blank" href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tablea.htm">Table A</a> as "vertical soundings (other than satellite)". &nbsp;For BUFR files where </span>
<span style="">characters 3-8 of "</span>Table A: data category description,
line 1<span style="">"
are&nbsp;not all digits (e.g., PREPBUFR files), the data category here
is defined by the digital&nbsp;value stored in the three-character "</span>Table A: entry" in BUFR table message Section 4 (identified in BUFR table message Section 3 by descriptor <a target="_blank" href="#0-00-001">0-00-001</a>).<br>

</p>

<a name="Section_D.1.2"/>
<br><span style="">
<sup>2</sup> - The&nbsp;data sub-category here is defined by the digital value stored in&nbsp;characters 6-8 of "</span>Table A: data category description,
line 1<span style="">" in BUFR table message Section 4 (identified in&nbsp;BUFR table message Section 3 by descriptor <a target="_blank" href="#0-00-002">0-00-002</a> for the particular report type represented&nbsp;by the F-X-Y value stored in <a target="_blank" href="#F-X-Y">data message Section 3, bytes 10-11</a>) <span style="font-weight: bold;">ONLY</span> when&nbsp;characters 3-8 in this&nbsp;value are all&nbsp;<span style="font-weight: bold;">digits</span>.
&nbsp;This is the case for all&nbsp;BUFR data dump files, including "adpupa"
where for&nbsp;</span>fixed land rawinsonde
reports (F-X-Y value 3-63-218 in&nbsp;<a target="_blank" href="#F-X-Y">data message Section 3, bytes 10-11</a>
<span style="">)&nbsp;characters 1-8 are "NC002001", thus </span>
<span style="">the data category here is 2, defined in <a target="_blank" href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tablea.htm">Table A</a> as "vertical soundings (other than satellite)" and the data sub-category here is 1, defined as&nbsp;</span>fixed land rawinsonde for reports in data category 2.<span style=""> &nbsp;For BUFR files where </span>
<span style="">characters 3-8 of "</span>Table A: data category description,
line 1<span style="">" are&nbsp;not all digits (e.g., PREPBUFR files), the data sub-category here is hardwired to always be 0.</span>
<br><span style=""/>
<a name="Section_D.1.3"/>
<br><span style="">
<sup>3</sup> - This&nbsp;holds the UTC date&nbsp;of the
report time for all subsets (reports) contained in the message.
&nbsp;Minute&nbsp;is always zero.&nbsp; Every subset in this message
will have a UTC report time with the same century, year of century,
month, day and hour as in Section 1, but the report minute can vary
from 00.00&nbsp;through 59.99. &nbsp;This allows reader codes to&nbsp;skip over
messages that are outside a selected time window, without having to
unpack and check the date of every subset in the message.&nbsp;
There&nbsp;is an exception to this date rule. &nbsp;</span>In some BUFR files
(namely data dump files such as "adpupa"), the
first two data messages immediately following the&nbsp;BUFR table
messages
(in this example messages 4 and 5) are "dummy" messages where the date
in Section
1 is the century, year of century, month, day, hour and minute for the
center dump time
(UTC) in the first dummy message, and is the century, year of the
century, month, day, hour and
minute for the file creation time (UTC) in the second dummy message.
&nbsp;Both of these dummy messages have zero subsets (i.e., <a target="_blank" href="#Section_D.5.6">Section 3&nbsp; bytes
5-6 set to zero</a>).&nbsp; This makes it easy for codes reading the dump file
to perform a date check.<br>

&nbsp;<br>

<p class="MsoNormal"/>

<p class="MsoNormal">
<br clear="all">
<br>

&nbsp;<br>


<i style="">
<u>Section 2 - Optional Section:</u>
</i>
<br></p><p class="MsoNormal">
<br clear="all">
</p>


(none per <a target="_blank" href="#Section_D.8.1">Byte 8, Bit 1 of Section 1</a>)<br clear="all">
<p class="MsoNormal">
<br clear="all">
</p>
<p class="MsoNormal">
<br clear="all">

</p>
<p class="MsoNormal">
<br clear="all">
</p>

<p class="MsoNormal">


<i style="">
<u>Section 3 - Data Description Section:</u>
</i>
</p>

<p class="MsoNormal">
<br clear="all">
</p>

<p class="MsoNormal">(Note: Light shaded cells are replicated, dark shaded cells are nested replication)</p>

<p class="MsoNormal">
<br clear="all">
</p>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="width: 5%; vertical-align: top;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">1-3</td>

<td style="vertical-align: top;">20</td>

<td style="vertical-align: top;">length of section in bytes</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">4</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">set to zero (reserved)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">
<a name="Section_D.5.6"/>5-6</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_D.3.1">see <sup>1</sup> below</a>)</td>

<td style="vertical-align: top;">number of data subsets</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">7, Bit 1</td>

<td style="vertical-align: top;">1</td>

<td style="vertical-align: top;">= 1 observed data, = 0 other data</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">7, Bit 2</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_D.3.2">see <sup>2</sup> below</a>)</td>

<td style="vertical-align: top;">= 1 compressed data, = 0 non-compressed data</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">7, Bits 3&ndash;8</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">set to zero (reserved)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">8&ndash;19</td>

<td style="vertical-align: top;"/>

<td style="vertical-align: top;">a collection of element descriptors, replication descriptors,
operator descriptors and sequence descriptors, which define the form and
contents of individual data elements comprising one data subset in the data
section, each descriptor occupies 2 bytes and contains 3 parts:&nbsp;F: 2 bits X: 6 bits Y: 8 bits</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">8-9<span style=""/>
</td>

<td style="vertical-align: top;">F-X-Y value:&nbsp;0-63-000</td>

<td style="vertical-align: top;">byte
count (points to the byte in Section 4&nbsp;locating&nbsp;the beginning
of the&nbsp;data subset; this allows the reader code to be
faster&nbsp;and more efficient)</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">
<a name="F-X-Y"/>10-11</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_D.3.3">see <sup>3</sup> below</a>)</td>

<td style="vertical-align: top;">sequence descriptor representing Table B and Table D layout&nbsp;for the particular type of report in this message&nbsp;(<a target="_blank" href="#Section_D.3.3">see <sup>3</sup> below</a>)</td>

</tr>
<tr>

<td style="text-align: right; vertical-align: top;">12-13</td>

<td style="vertical-align: top;">F-X-Y value: 1-02-000</td>

<td style="vertical-align: top;">use delayed replication for
the next two data descriptors</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">14-15</td>

<td style="vertical-align: top;">F-X-Y value: 0-31-001</td>

<td style="vertical-align: top;">8-bit
delayed replication factor</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(192, 192, 192);">16-17</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">F-X-Y value: 2-06-001</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">the next descriptor is assigned
the width of 1 bit</td>

</tr><tr>

<td style="text-align: right; vertical-align: top; background-color: rgb(192, 192, 192);">18-19</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">F-X-Y value: 0-63-255</td>

<td style="vertical-align: top; background-color: rgb(192, 192, 192);">bit
pad (set to "on", 1; allows the data subset to end on a full machine
word boundary, making the reader code faster and more efficient)</td>

</tr><tr><td style="text-align: right;">20</td><td>0</td><td>reserved</td></tr>

</tbody>
</table>

<p class="MsoNormal"/><p class="MsoNormal">
<a name="Section_D.3.1"/>
<br>

</p><span style="">
<sup>1</sup> - </span>The number of data subsets varies from message to message, but is&nbsp;always zero for "dummy" messages (<a target="_blank" href="#Section_D.1.3">see <sup>3</sup> under Section 1 above</a>).<br><a name="Section_D.3.2"/>
<br>

<span style="">
<sup>2</sup> - </span>Compression may occur for some
types of data, however currently no types in the "adpupa" BUFR data
dump file are compressed, so this value is always 0 here.<br><a name="Section_D.3.3"/>
<br>

<span style="">
<sup>3</sup> -&nbsp;</span>In the "adpupa" BUFR data dump file, the current list of possible
report type sequences is:<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-63-218 :&nbsp;sequence containing fixed land rawinsonde
reports (<a target="_blank" href="#3_63_218">defined in Message # 2, Section 4, 5'th outer replication</a>)<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-63-219 :&nbsp;sequence containing mobile land rawinsonde
reports (<a target="_blank" href="#3_63_219">defined in Message # 2, Section 4, 6'th outer replication</a>)<br>
&nbsp;&nbsp;&nbsp; F-X-Y value 3-63-220 :&nbsp;sequence containing
rawinsonde ship reports (defined in Message # 2, Section 4, 7'th outer
replication)<br>
&nbsp;&nbsp;&nbsp; F-X-Y value 3-63-221 :&nbsp;sequence containing
dropwinsonde reports (defined in Message # 2, Section 4, 8'th outer
replication)<br>
&nbsp;&nbsp;&nbsp; F-X-Y value 3-63-222 :&nbsp;sequence containing
PIBAL reports (defined in Message # 2, Section 4, 9'th outer
replication)<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-62-207 :&nbsp;sequence containing Met Office low-resolution
ozonesonde reports&nbsp;arriving in BUFR (defined in Message # 2, Section 4, 10'th outer replication)<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-63-223 :&nbsp;sequence containing NOAA Profiler Network
(NPN) wind reports (defined in Message # 2, Section 4, 11'th outer replication)<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-63-224 :&nbsp;sequence containing NeXRaD Vertical Azimuth
Display (VAD) wind reports (defined in Message # 2, Section 4, 12'th outer replication)<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-61-200 :&nbsp;sequence containing profiler wind reports
arriving in PILOT (PIBAL) format (defined in Message # 2, Section 4, 13'th outer replication)<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-61-204 :&nbsp;sequence containing NOAA Profiler Network (NPN) and Cooperative Agency
Profiler (CAP) profiler
spectral moment reports (defined in Message # 2, Section 4, 14'th outer replication)<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-52-201 :&nbsp;sequence containing Cooperative Agency
Profiler (CAP) wind reports (defined in Message # 2, Section 4, 15'th outer replication)<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-52-202 :&nbsp;sequence containing NOAA Profiler Network (NPN) and Cooperative Agency
Profiler (CAP) Radar
Acoustic Sounding System (RASS) temperature reports (defined in Message # 2, Section 4, 16'th outer replication)<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-52-203 :&nbsp;sequence containing Japanese Meteorological
Agency (JMA) profiler wind reports (defined in Message # 2, Section 4, 17'th outer replication)<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-52-205 :&nbsp;sequence containing Hong Kong profiler wind
reports (defined in Message # 2, Section 4, 18'th outer replication)<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-62-208 :&nbsp;sequence containing high-resolution
ozonesonde reports&nbsp;arriving in ASCII format (defined in Message # 2, Section 4, 19'th outer replication)<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-52-206 :&nbsp;sequence containing European profiler wind
reports (defined in Message # 2, Section 4, 20'th outer replication)<br>


&nbsp;&nbsp;&nbsp; F-X-Y value 3-63-235 :&nbsp;sequence containing flight level
reconnaissance aircraft reports (defined in Message # 2, Section 4, 21'st outer replication)<br>&nbsp; &nbsp; Note: In "dummy" messages&nbsp;(<a target="_blank" href="#Section_D.1.3">see <sup>3</sup> under Section 1 above</a>)
this is usually set to the F-X-Y value of the first report type in the
BUFR message, in this case 3-63-218. &nbsp;Since there are
zero&nbsp;subsets in the dummy messages (<a target="_blank" href="#Section_D.3.1">see <sup>1</sup> above</a>) this is really meaningless.<br>

<i style="">
<u>
<br><br><br>Section 4 - Data Section:</u>
</i>

<p class="MsoNormal">
<br clear="all">
</p>

<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="width: 5%; vertical-align: top;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">1-3</td>

<td style="vertical-align: top;">
<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;"/>
</b>
<span style="font-family: &quot;Courier New&quot;;">
<span style="font-weight: bold;"/>
</span>(<a target="_blank" href="#Section_D.4.1">see <sup>1</sup> below</a>)<span style="font-style: italic;"/>
</td>

<td style="vertical-align: top;">length of section in bytes</td>

</tr>

<tr>

<td style="text-align: right; vertical-align: top;">4</td>

<td style="vertical-align: top;">0</td>

<td style="vertical-align: top;">set to zero (reserved)</td>

</tr>

<tr>

<td style="vertical-align: top; text-align: left;">5-end of section (as defined in bytes 1-3)</td>

<td style="vertical-align: top;">(<a target="_blank" href="#Section_D.4.2">see <sup>2</sup> below</a>)

</td>

<td style="vertical-align: top;">binary
data as defined by sequence descriptors in Section 3 (repeated based on
the number of subsets in the BUFR message obtained from <a href="#Section_D.5.6" target="_blank">Section 3, bytes 5-6</a>)</td>

</tr>
</tbody>
</table><a name="Section_D.4.1"/>
<br>

<span style="">
<sup>1</sup> - </span>The length&nbsp;of Section
4&nbsp;varies from message to message, but is&nbsp;always 4
(bytes)&nbsp;for "dummy" messages which contain zero subsets (<a target="_blank" href="#Section_D.3.1">see <sup>1</sup> under Section 3 above</a>) (meaning there are no binary data in Section 4 for the dummy messages).<br><p class="MsoNormal">
<a name="Section_D.4.2"/>
<br>

</p><span style="">
<sup>2</sup> - Applies to non-"dummy" messages only: </span>The binary data&nbsp;varies
from message to message [it&nbsp;does not exist for&nbsp;"dummy" messages
which contain zero subsets (<a target="_blank" href="#Section_D.3.1">see <sup>1</sup> under Section 3 above</a>)].<br><br><br><br>

<i style="">
<u>Section 5 - End Section:</u>
</i>


<p class="MsoNormal">
<br>
</p>
<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">

<tbody>

<tr>

<td style="vertical-align: top; width: 5%;">BYTES</td>

<td style="width: 20%; vertical-align: top;">CONTENT (bold face font inside of quotes indicates character, otherwise numeric)</td>

<td style="vertical-align: top;">Description</td>

</tr>

<tr>

<td style="text-align: right;">1-4</td>

<td>"<b style="">
<span style="font-size: 14pt; font-family: &quot;Courier New&quot;;">7777</span>
</b>"</td>

<td>end of BUFR message</td>

</tr>
</tbody>
</table><br><br><br><br><hr style="width: 100%; height: 2px;">&nbsp;
<p/><p class="MsoNormal">
<o:p>&nbsp;</o:p>
</p><p class="MsoNormal">
<o:p>&nbsp;</o:p>
</p><p class="MsoNormal">
<o:p>&nbsp;</o:p>
</p><p class="MsoNormal">
<o:p>&nbsp;<a name="ASCII_Table"/>
</o:p>
</p>

<p class="MsoNormal"/><p class="MsoNormal">Here is the&nbsp;NCEP BUFR tables <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tablea.htm" target="_blank">A</a>, <a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tableb.htm" target="_blank">B</a>,&nbsp;<a href="http://www.emc.ncep.noaa.gov/mmb/data_processing/bufrtab_tabled.htm" target="_blank">D</a> in&nbsp;ASCII format&nbsp;for
BUFR Table A type 2 <span style="font-family: Times New Roman;">[v</span>ertical
soundings (other than satellite)] as it appeared on the NCEP CCS machines on 04/01/2008.<span style=""/>
</p>

<p class="MsoNormal">
<br clear="all">
</p>

<p class="MsoNormal">/nwprod/fix/bufrtab.002</p><p class="MsoNormal">
<o:p>&nbsp;</o:p>
</p><p class="MsoNormal">
<o:p/>
<span style="color: rgb(255, 0, 0);">Lines containing Table A section&nbsp;in RED (these contain both Table A and Table D information)</span>
</p><p class="MsoNormal">
<span style="color: rgb(255, 0, 0);">
<span style="color: rgb(0, 153, 0);">Lines containing Table B, part 1 section in GREEN</span>
</span>
</p><p class="MsoNormal">
<span style="color: rgb(255, 0, 0);">
<span style="color: rgb(153, 102, 51);">Lines containing Table B, part 2 section in BROWN</span>
</span>
</p><p class="MsoNormal">
<span style="color: rgb(255, 0, 0);">
<span style="color: rgb(51, 102, 255);">Lines containing Table D section in BLUE</span>
</span>
</p>

<p class="MsoNormal">
<span style="color: rgb(255, 0, 0);">
<span style="color: rgb(51, 102, 255);">
<span style="color: rgb(204, 102, 204);">Lines containing Table D defining sequence section in PURPLE </span>
</span>
</span>
</p><p class="MsoNormal">
<br clear="all">
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">.------------------------------------------------------------------------------.<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
------------<span style="">&nbsp;&nbsp; </span>USER DEFINITIONS FOR TABLE-A
TABLE-B TABLE D<span style="">&nbsp;&nbsp; </span>-------------- |<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|------------------------------------------------------------------------------|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MNEMONIC | NUMBER | DESCRIPTION<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|----------|--------|----------------------------------------------------------|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;<a name="TblA"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002001 | A63218 | MSG TYPE 002-001<span style="">&nbsp;
</span>RAWINSONDE - FIXED LAND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002002 | A63219 | MSG TYPE 002-002<span style="">&nbsp;
</span>RAWINSONDE - <st1:place w:st="on">
<st1:placename w:st="on">MOBIL</st1:placename>
<st1:placetype w:st="on">LAND</st1:placetype>
</st1:place>
<span style="">&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002003 | A63220 | MSG TYPE 002-003<span style="">&nbsp;
</span>RAWINSONDE - SHIP<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002004 | A63221 | MSG TYPE 002-004<span style="">&nbsp;
</span>DROPWINSONDE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002005 | A63222 | MSG TYPE 002-005<span style="">&nbsp;
</span>PIBAL<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002006 | A62207 | MSG TYPE 002-006<span style="">&nbsp;
</span>OZONESONDE (LOW-RES) (FROM METO BUFR)<span style="">&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002007 | A63223 | MSG TYPE 002-007<span style="">&nbsp;
</span>NOAA PROFILER NETWORK (NPN) WINDS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002008 | A63224 | MSG TYPE 002-008<span style="">&nbsp; </span>
<span class="SpellE">NeXRaD</span> VAD WINDS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002009 | A61200 | MSG TYPE 002-009<span style="">&nbsp;
</span>PROFILER WINDS IN PILOT(PIBAL) FORMAT<span style="">&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002010 | A61204 | MSG TYPE 002-010<span style="">&nbsp; </span>NPN
AND CAP PROFILER SPECTRAL MOMENTS<span style="">&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002011 | A52201 | MSG TYPE 002-011<span style="">&nbsp;
</span>COOP. AGENCY PROFILER (CAP) WINDS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002012 | A52202 | MSG TYPE 002-012<span style="">&nbsp; </span>NPN
AND CAP RASS TEMPERATURES<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002013 | A52203 | MSG TYPE 002-013<span style="">&nbsp;
</span>JAPANESE MET AGENCY PROFILER WINDS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002014 | A52205 | MSG TYPE 002-014<span style="">&nbsp; </span>
<st1:place w:st="on">HONG KONG</st1:place> PROFILER WINDS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002015 | A62208 | MSG TYPE 002-015<span style="">&nbsp;
</span>OZONESONDE (HIGH-RES) (FROM ASCII)<span style="">&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p>

<p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002016 | A52206 | MSG TYPE 002-016<span style="">&nbsp;
</span>EUROPEAN PROFILER WINDS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|</span>
</p><p style="color: rgb(255, 0, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;; color: rgb(0, 0, 0);">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|</span>
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<o:p/>
<span style=""/>
<span style=""/>
<span style=""/>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(255, 0, 0);">|
NC004005 | A63235 | MESSAGE TYPE 004-005&nbsp;
RECCO - flight level&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;</span>
</span>
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="">
<a name="TblD"/>
</span>
</span>
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WMOBLKST | 301001 | IDENTIFICATION - WMO BLOCK AND STATION NUMBER<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
YYMMDD<span style="">&nbsp;&nbsp; </span>| 301011 | DATE -- YEAR, MONTH,
DAY<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HHMM<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 301012 | TIME -- HOUR,
MINUTE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
LALOLV<span style="">&nbsp;&nbsp; </span>| 301024 | LOCATION -- LATITUDE,
LONGITUDE, ELEVATION<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 0, 0);">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;|</span>
<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OZSNDFLT | 309030 | OZONESONDE FLIGHT DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 0, 0);">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
BID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>| 352001 | BULLETIN ID DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RAWRPT <span style="">&nbsp;&nbsp;</span>| 352002 | RAW REPORT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RCPTIM<span style="">&nbsp;&nbsp; </span>| 352003 | REPORT RECEIPT TIME
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 0, 0);">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OZONELV1 | 361103 | OZONESONDE REPORT LEVEL DATA #1<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OZONELV2 | 361104 | OZONESONDE REPORT LEVEL DATA #2<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 0, 0);">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UASID<span style="">&nbsp;&nbsp;&nbsp; </span>| 361121 | RADIOSONDE/OZONESONDE
STATION ID DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UARID<span style="">&nbsp;&nbsp;&nbsp; </span>| 361122 | RADIOSONDE REPORT ID
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UARLV<span style="">&nbsp;&nbsp;&nbsp; </span>| 361123 | RADIOSONDE REPORT
LEVEL DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UATMP<span style="">&nbsp;&nbsp;&nbsp; </span>| 361125 | RADIOSONDE
TEMPERATURE DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UAWND<span style="">&nbsp;&nbsp;&nbsp; </span>| 361126 | RADIOSONDE WIND
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UAWSH<span style="">&nbsp;&nbsp;&nbsp; </span>| 361127 | RADIOSONDE WIND SHEAR
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UACLD<span style="">&nbsp;&nbsp;&nbsp; </span>| 361128 | RADIOSONDE CLOUD
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UASDG<span style="">&nbsp;&nbsp;&nbsp; </span>| 361129 | RADIOSONDE SOUNDING
SYSTEM DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UAADF<span style="">&nbsp;&nbsp;&nbsp; </span>| 361130 | RADIOSONDE 101AA
"ADDITIONAL DATA" DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UARDCS<span style="">&nbsp;&nbsp; </span>| 361131 | RADIOSONDE REPORT
DIAGNOSTIC DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UAGP07<span style="">&nbsp;&nbsp; </span>| 361133 | RADIOSONDE CLASS 7
GEOPOTENTIAL DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UAGP10<span style="">&nbsp;&nbsp; </span>| 361134 | RADIOSONDE CLASS 10
GEOPOTENTIAL DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 0, 0);">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PFLEV<span style="">&nbsp;&nbsp;&nbsp; </span>| 361162 | PROFILER REPORT LEVEL
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PFLID<span style="">&nbsp;&nbsp;&nbsp; </span>| 361163 | PROFILER REPORT ID
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 0, 0);">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NXVADD<span style="">&nbsp;&nbsp; </span>| 361170 | NEXRAD PART B WIND
LEVEL DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NXRID<span style="">&nbsp;&nbsp;&nbsp; </span>| 361172 | NEXRAD REPORT ID
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 0, 0);">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RTID<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 361173 | RASS TEMPERATURE ID
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RTSEQ1<span style="">&nbsp;&nbsp; </span>| 361174 | RASS TEMPERATURE
SEQUENCE 1<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 0, 0);">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
AFRID<span style="">&nbsp;&nbsp;&nbsp; </span>| 362030 | AIRCRAFT REPORT ID
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
AFTMP<span style="">&nbsp;&nbsp;&nbsp; </span>| 362032 | AIRCRAFT TEMPERATURE
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
AFWND<span style="">&nbsp;&nbsp;&nbsp; </span>| 362033 | AIRCRAFT WIND
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
AFMST<span style="">&nbsp;&nbsp;&nbsp; </span>| 362034 | AIRCRAFT MOISTURE
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
AFICG<span style="">&nbsp;&nbsp;&nbsp; </span>| 362035 | AIRCRAFT ICING
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
AFCLD<span style="">&nbsp;&nbsp;&nbsp; </span>| 362036 | AIRCRAFT CLOUD
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
ARPHT<span style="">&nbsp;&nbsp;&nbsp; </span>| 362039 | RECCO MANDATORY LEVEL
PRESSURE/HEIGHT DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
ARSWD<span style="">&nbsp;&nbsp;&nbsp; </span>| 362040 | RECCO SURFACE WIND
DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 0, 0);">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MPSEQ1<span style="">&nbsp;&nbsp; </span>| 362241 | MOMENT PROFILE
ANTENNA SEQUENCE 1<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">| MPSEQ2<span style="">&nbsp;&nbsp; </span>| 362242 | MOMENT PROFILE ANTENNA SEQUENCE
2<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 0, 0);">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
JPID<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 362243 | JAPAN/HONG KONG WIND
PROFILER ID DATA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
JPSEQ1<span style="">&nbsp;&nbsp; </span>| 362247 | JAPAN/HONG KONG WIND
PROFILER SEQUENCE 1<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(51, 102, 255);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 0, 0);">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(51, 102, 255);">|
EPSEQ1&nbsp;&nbsp; | 362250 | EUROPEAN WIND
PROFILER SEQUENCE
1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;</span>
</span>
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="">
<a name="TblB1"/>
</span>
</span>
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WMOB<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 001001 | WMO BLOCK NUMBER<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WMOS<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 001002 | WMO STATION
NUMBER<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WMOR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 001003 | WMO REGION
NUMBER<span style="">&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
BPID<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 001005 | BUOY/PLATFORM
IDENTIFIER<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
SSTN<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 001018 | SHORT STATION OR SITE
NAME<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UAPART<span style="">&nbsp;&nbsp; </span>| 001192 | RADIOSONDE PART
NAME<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RSML<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 001197 | RADIOSONDE SHIP,
DROP, OR MOBIL STATION ID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
RPID&nbsp;&nbsp;&nbsp;&nbsp; | 001198 | REPORT
IDENTIFIER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TOST<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 002001 | TYPE OF STATION<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TIWM<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 002002 | TYPE OF
INSTRUMENTATION FOR WIND MEASUREMENT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
A4ME<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 002003 | TYPE OF MEASURING
EQUIPMENT USED<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RATP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 002011 | RADIOSONDE TYPE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
SIRC<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 002013 | SOLAR AND INFRARED
RADIATION CORRECTION<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TTSS<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 002014 | TRACKING
TECHNIQUE/STATUS OF SYSTEM USED<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
ANTYP<span style="">&nbsp;&nbsp;&nbsp; </span>| 002101 | TYPE OF ANTENNA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
BEAMW<span style="">&nbsp;&nbsp;&nbsp; </span>| 002106 | 3-DB BEAMWIDTH<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MEFR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 002121 | MEAN FREQUENCY<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
ANAZ<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 002134 | ANTENNA BEAM
AZIMUTH<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
ANEL<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 002135 | ANTENNA BEAM
ELEVATION<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OISN<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 002142 | OZONE INSTRUMENT
SERIAL NUMBER/IDENTIFICATION<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
OITP&nbsp;&nbsp;&nbsp;&nbsp; | 002143 | OZONE INSTRUMENT
TYPE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
YEAR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 004001 | YEAR<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MNTH<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 004002 | MONTH<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
DAYS<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 004003 | DAY<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HOUR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 004004 | HOUR<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MINU<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 004005 | MINUTE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TIMI<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 004015 | TIME INCREMENT (SINCE
LAUNCH TIME) IN MINUTES<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TPMI<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 004025 | TIME PERIOD OR
DISPLACEMENT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TPSE<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 004026 | TIME PERIOD OR
DISPLACEMENT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
DAYW<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 004193 | DAY OF THE WEEK<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RCYR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 004200 | YEAR<span style="">&nbsp;&nbsp; </span>- TIME OF RECEIPT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RCMO<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 004201 | MONTH<span style="">&nbsp; </span>- TIME OF RECEIPT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RCDY<span style="">&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;</span>| 004202 | DAY<span style="">&nbsp;&nbsp;&nbsp; </span>- TIME OF RECEIPT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RCHR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 004203 | HOUR<span style="">&nbsp;&nbsp; </span>- TIME OF RECEIPT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RCMI<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 004204 | MINUTE - TIME OF
RECEIPT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UALNHR<span style="">&nbsp;&nbsp; </span>| 004210 | RADIOSONDE LAUNCH
HOUR<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
UALNMN&nbsp;&nbsp; | 004211 | RADIOSONDE LAUNCH
MINUTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
CLAT&nbsp;&nbsp;&nbsp;&nbsp; | 005002 | LATITUDE (COARSE
ACCURACY)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
CLON&nbsp;&nbsp;&nbsp;&nbsp; | 006002 | LONGITUDE (COARSE
ACCURACY)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
SELV<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 007001 | HEIGHT OF
STATION<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PRLC<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 007004 | PRESSURE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HEIT<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 007007 | HEIGHT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
GP07<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 007008 | GEOPOTENTIAL<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
XMPRLC<span style="">&nbsp;&nbsp; </span>| 007195 | EXTRAPOLATED
MANDATORY LEVEL PRESSURE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PSAL<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 007196 | PRESSURE ALTITUDE
RELATIVE TO MEAN SEA LEVEL<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
FLVL&nbsp;&nbsp;&nbsp;&nbsp; | 007197 | FLIGHT
LEVEL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
VSIG<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 008001 | VERTICAL SOUNDING
SIGNIFICANCE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OVSS <span style="">&nbsp;&nbsp;&nbsp;&nbsp;</span>| 008006 | OZONE VERTICAL
SOUNDING SIGNIFICANCE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TSIG<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 008021 | TIME
SIGNIFICANCE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
ACAV<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 008022 | TOTAL NUMBER W/
RESPECT TO ACCUM. OR AVERAGE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
RCTS&nbsp;&nbsp;&nbsp;&nbsp; | 008202 | RECEIPT TIME
SIGNIFICANCE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
GP10<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 010008 | GEOPOTENTIAL<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PMSL<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 010051 | PRESSURE AT MEAN SEA
LEVEL<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
XMGP10&nbsp;&nbsp; | 010196 | EXTRAPOLATED
MANDATORY LEVEL GEOPOTENTIAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WDIR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 011001 | WIND DIRECTION<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WSPD<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 011002 | WIND SPEED<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WCMP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 011006 | W COMPONENT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
DGOT<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 011031 | DEGREE OF
TURBULENCE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MWDL<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 011044 | MEAN WIND DIRECTION
FOR SURFACE-1500M LAYER<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MWSL<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 011045 | MEAN WIND SPEED FOR
SURFACE-1500M LAYER<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
SDHS<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 011050 | STANDARD DEVIATION
HORIZONTAL WIND SPEED<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
SDVS<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 011051 | STANDARD DEVIATION
VERTICAL WIND SPEED<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
AWSB<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 011061 | ABSOLUTE WIND SHEAR
IN 1 KM LAYER BELOW<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
AWSA<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 011062 | ABSOLUTE WIND SHEAR
IN 1 KM LAYER ABOVE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">| WDIR1<span style="">&nbsp;&nbsp;&nbsp; </span>| 011200 | SURFACE WIND DIRECTION<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WSPD1<span style="">&nbsp;&nbsp;&nbsp; </span>| 011201 | SURFACE WIND
SPEED<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RMSW<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 011210 | ROOT MEAN SQUARE
VECTOR WIND ERROR<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MWDH<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 011221 | MEAN WIND DIRECTION
FOR 1500M-3000M LAYER<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
MWSH&nbsp;&nbsp;&nbsp;&nbsp; | 011222 | MEAN WIND SPEED FOR
1500M-3000M
LAYER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TMDB<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 012101 | TEMPERATURE/DRY BULB
TEMPERATURE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TMDP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 012103 | DEW POINT
TEMPERATURE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
TMVR&nbsp;&nbsp;&nbsp;&nbsp; | 012107 | VIRTUAL
TEMPERATURE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
REHU<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 013003 | RELATIVE
HUMIDITY<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
STBS5&nbsp;&nbsp;&nbsp; | 013195 | MODIFIED SHOWALTER
STABILITY
INDEX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MOPP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 015003 | MEASURED OZONE
PARTIAL PRESSURE (SOUNDING)<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OSCF<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 015004 | OZONE SOUNDING
CORRECTION FACTOR<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OZOP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 015005 | OZONE P<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
OZMR&nbsp;&nbsp;&nbsp;&nbsp; | 015192 | OZONE MIXING
RATIO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HOVI<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 020001 | HORIZONTAL
VISIBILITY<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PRWE<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 020003 | PRESENT WEATHER<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
CLAM<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 020011 | CLOUD AMOUNT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
CLTP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 020012 | CLOUD TYPE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HOCB<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 020013 | HEIGHT OF BASE OF
CLOUD<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HOCT<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 020014 | HEIGHT OF TOP OF
CLOUD<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
AFIC<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 020041 | AIRFRAME ICING<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HBOI<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 020194 | HEIGHT OF BASE OF
ICING<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HTOI<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 020195 | HEIGHT OF TOP OF
ICING<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
HBLCS&nbsp;&nbsp;&nbsp; | 020201 | HEIGHT ABOVE SURFACE
OF BASE OF LOWEST CLOUD SEEN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
DMVR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 021014 | DOPPLER MEAN VELOCITY
(RADIAL)<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
DVSW<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 021017 | DOPPLER VELOCITY
SPECTRAL WIDTH<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
STNR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 021030 | SIGNAL TO NOISE
RATIO<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
SPP0&nbsp;&nbsp;&nbsp;&nbsp; | 021091 | RADAR SIGNAL DOPPLER
SPECTRUM 0TH MOMENT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
SST1&nbsp;&nbsp;&nbsp;&nbsp; | 022043 | SEA
TEMPERATURE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RAGL<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 025001 | RANGE-GATE
LENGTH<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MSPE<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 025020 | MEAN SPEED
ESTIMATION<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WICE<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 025021 | WIND COMPUTATION
ENHANCEMENT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
NPQC&nbsp;&nbsp;&nbsp;&nbsp; | 025034 | NOAA WIND PROFILER
Q/C TEST
RESULTS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QMRK<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 033002 | QUALITY
INFORMATION<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QCEVR<span style="">&nbsp;&nbsp;&nbsp; </span>| 033024 | STATION ELEVATION
QUALITY MARK (FOR MOBIL STATIONS)<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QMGP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 033192 | SDMEDIT QUALITY MARK
FOR GEOPOTENTIAL<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QMAT<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 033193 | SDMEDIT QUALITY MARK
FOR TEMPERATURE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QMDD<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 033194 | SDMEDIT QUALITY MARK
FOR MOISTURE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QMWN<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 033195 | SDMEDIT QUALITY MARK
FOR WIND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UARDC<span style="">&nbsp;&nbsp;&nbsp; </span>| 033202 | RADIOSONDE REPORT
DIAGNOSTIC CODE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QMPR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 033207 | SDMEDIT QUALITY MARK
FOR PRESSURE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
CORN<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 033215 | CORRECTED REPORT
INDICATOR<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
QMST&nbsp;&nbsp;&nbsp;&nbsp; | 033218 | </span>
<st1:place style="color: rgb(0, 153, 0);" w:st="on">
<st1:placename w:st="on">SDMEDIT</st1:placename>
<st1:placename w:st="on">QUALITY</st1:placename>
<st1:placename w:st="on">MARK</st1:placename>
<st1:placename w:st="on">FOR</st1:placename>
<st1:placetype w:st="on">SEA</st1:placetype>
</st1:place>
<span style="color: rgb(0, 153, 0);"> SURFACE
TEMPERATURE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
BUHD<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 035021 | BULLETIN BEING
MONITORED (<span class="SpellE">TTAAii</span>)<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
BULTIM<span style="">&nbsp;&nbsp; </span>| 035022 | BULLETIN BEING
MONITORED (<span class="SpellE">YYGGgg</span>)<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
BORG<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| 035023 | BULLETIN BEING
MONITORED (CCCC)<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(0, 153, 0);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
BBB<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>| 035194 | BULLETIN BEING
MONITORED (BBB)<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
SEQNUM&nbsp;&nbsp; | 035195 | CHANNEL SEQUENCE
NUMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(0, 153, 0);">|
RRSTG&nbsp;&nbsp;&nbsp; | 058008 | RAW REPORT
STRING&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|------------------------------------------------------------------------------|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MNEMONIC | SEQUENCE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|----------|-------------------------------------------------------------------|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;</span>
</span>
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="">
<a name="TblD1"/>
</span>
</span>
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002001 | YYMMDD<span style="">&nbsp; </span>HOUR<span style="">&nbsp; </span>{RCPTIM}<span style="">&nbsp;
</span>{BID}<span style="">&nbsp; </span>UASID<span style="">&nbsp; </span>{UARID}<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002001 | {UARLV}<span style="">&nbsp; </span>&lt;UASDG&gt;<span style="">&nbsp; </span>{UARDCS}<span style="">&nbsp;
</span>{RAWRPT}<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002001 | {UACLD}<span style="">&nbsp; </span>&lt;UAADF&gt;<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002001 | WMOB&nbsp; WMOS&nbsp;
WMOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002002 | YYMMDD<span style="">&nbsp; </span>HOUR<span style="">&nbsp; </span>{RCPTIM}<span style="">&nbsp;
</span>{BID}<span style="">&nbsp; </span>UASID<span style="">&nbsp; </span>{UARID}<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002002 | {UARLV}<span style="">&nbsp; </span>&lt;UASDG&gt;<span style="">&nbsp; </span>{UARDCS}<span style="">&nbsp;
</span>{RAWRPT}<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002002 | {UACLD}<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002002 | RSML&nbsp;
QCEVR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002003 | YYMMDD<span style="">&nbsp; </span>HOUR<span style="">&nbsp; </span>{RCPTIM}<span style="">&nbsp;
</span>{BID}<span style="">&nbsp; </span>UASID<span style="">&nbsp; </span>{UARID}<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002003 | {UARLV}<span style="">&nbsp; </span>&lt;UASDG&gt;<span style="">&nbsp; </span>{UARDCS}<span style="">&nbsp;
</span>{RAWRPT}<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002003 | {UACLD}<span style="">&nbsp; </span>&lt;UAADF&gt;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002003 | RSML&nbsp;
WMOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002004 | YYMMDD<span style="">&nbsp; </span>HOUR<span style="">&nbsp; </span>{RCPTIM}<span style="">&nbsp;
</span>{BID}<span style="">&nbsp; </span>UASID<span style="">&nbsp; </span>{UARID}<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002004 | {UARLV}<span style="">&nbsp; </span>&lt;UASDG&gt;<span style="">&nbsp; </span>{UARDCS}<span style="">&nbsp;
</span>{RAWRPT}<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002004 | &lt;UAADF&gt;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002004 | RSML
&nbsp;WMOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002005 | YYMMDD<span style="">&nbsp; </span>HOUR<span style="">&nbsp; </span>{RCPTIM}<span style="">&nbsp;
</span>{BID}<span style="">&nbsp; </span>UASID<span style="">&nbsp; </span>{UARID}<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002005 | {UARLV}<span style="">&nbsp; </span>&lt;UASDG&gt;<span style="">&nbsp; </span>{UARDCS}<span style="">&nbsp;
</span>{RAWRPT}<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002005 | {UACLD}<span style="">&nbsp; </span>&lt;UAADF&gt;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002005 | RSML&nbsp; QCEVR&nbsp; WMOB&nbsp;
WMOS&nbsp;
WMOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002006 | WMOBLKST BPID<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>LALOLV<span style="">&nbsp;&nbsp; </span>TSIG<span style="">&nbsp;&nbsp;&nbsp;&nbsp;
</span>YYMMDD<span style="">&nbsp;&nbsp; </span>HHMM<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002006 | RATP&nbsp;&nbsp;&nbsp;&nbsp; OITP&nbsp;&nbsp;&nbsp;&nbsp;
OISN&nbsp;&nbsp;&nbsp;&nbsp;
OZSNDFLT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002007 | YYMMDD<span style="">&nbsp;&nbsp; </span>HHMM<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>RCPTIM<span style="">&nbsp;&nbsp;
</span>BID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>PFLID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002007 | TSIG&nbsp;&nbsp;&nbsp;&nbsp; TPSE&nbsp;&nbsp;&nbsp;
{PFLEV}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002008 | YYMMDD&nbsp;&nbsp; HHMM&nbsp;&nbsp;&nbsp;&nbsp; RCPTIM&nbsp;&nbsp;
BID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NXRID&nbsp;&nbsp; {NXVADD}&nbsp;
{RAWRPT}&nbsp;&nbsp;&nbsp; |</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002009 | YYMMDD<span style="">&nbsp; </span>HOUR<span style="">&nbsp; </span>{RCPTIM}<span style="">&nbsp;
</span>{BID}<span style="">&nbsp; </span>UASID<span style="">&nbsp; </span>{UARID}<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">| NC002009
| {UARLV}<span style="">&nbsp; </span>&lt;UASDG&gt;<span style="">&nbsp; </span>{UARDCS}<span style="">&nbsp;
</span>{RAWRPT}<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002009 | {UACLD}<span style="">&nbsp; </span>&lt;UAADF&gt;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002009 | RSML&nbsp; QCEVR&nbsp; WMOB&nbsp;
WMOS&nbsp;
WMOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002010 | YYMMDD<span style="">&nbsp;&nbsp; </span>HHMM<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>RCPTIM<span style="">&nbsp;&nbsp;
</span>BID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>PFLID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002010 | TSIG&nbsp;&nbsp;&nbsp;&nbsp; TPSE&nbsp;&nbsp;&nbsp;
{MPSEQ1}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002011 | YYMMDD<span style="">&nbsp;&nbsp; </span>HHMM<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>RCPTIM<span style="">&nbsp;&nbsp;
</span>BID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>PFLID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002011 | TSIG&nbsp;&nbsp;&nbsp;&nbsp; TPSE&nbsp;&nbsp;&nbsp;
{PFLEV}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002012 | YYMMDD<span style="">&nbsp;&nbsp; </span>HHMM<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>RCPTIM<span style="">&nbsp;&nbsp;
</span>BID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>RTID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002012 | TSIG&nbsp;&nbsp;&nbsp;&nbsp; TPSE&nbsp;&nbsp;&nbsp;
{RTSEQ1}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002013 | YYMMDD<span style="">&nbsp;&nbsp; </span>HHMM<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>RCPTIM<span style="">&nbsp;&nbsp;
</span>BID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>JPID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002013 | TSIG&nbsp;&nbsp;&nbsp;&nbsp; TPMI&nbsp;&nbsp;&nbsp;
{JPSEQ1}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002014 | YYMMDD<span style="">&nbsp;&nbsp; </span>HHMM<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>RCPTIM<span style="">&nbsp;&nbsp;
</span>BID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>JPID<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002014 | TSIG&nbsp;&nbsp;&nbsp;&nbsp; TPMI&nbsp;&nbsp;&nbsp;
{JPSEQ1}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002015 | TSIG&nbsp; YYMMDD&nbsp;&nbsp; HHMM&nbsp;
UASID&nbsp;
(OZONELV2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002016 | YYMMDD<span style="">&nbsp; </span>HHMM<span style="">&nbsp;&nbsp; </span>RCPTIM<span style="">&nbsp;&nbsp;
</span>BID<span style="">&nbsp; </span>CORN<span style="">&nbsp;&nbsp; </span>WMOBLKST<span style="">&nbsp;&nbsp;
</span>LALOLV<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002016 | 201130<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>BEAMW<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>201000<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002016 | 201133<span style="">&nbsp; </span>202129<span style="">&nbsp; </span>RAGL<span style="">&nbsp;
</span>202000<span style="">&nbsp; </span>201000<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC002016 | 201149<span style="">&nbsp; </span>202135<span style="">&nbsp; </span>MEFR<span style="">&nbsp;
</span>202000<span style="">&nbsp; </span>201000<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC002016 | TOST&nbsp; A4ME&nbsp; ANTYP&nbsp;
MSPE&nbsp;&nbsp; WICE&nbsp;&nbsp; TSIG&nbsp;&nbsp;&nbsp;
TPMI&nbsp;&nbsp; {EPSEQ1}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC004005 | YYMMDD<span style="">&nbsp;&nbsp; </span>HHMM<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>RCPTIM<span style="">&nbsp;
</span>BID<span style="">&nbsp; </span>AFRID<span style="">&nbsp; </span>{RAWRPT}<span style="">&nbsp;
</span>AFTMP<span style="">&nbsp; </span>AFWND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NC004005 | {AFCLD}<span style="">&nbsp; </span>&lt;AFICG&gt;<span style="">&nbsp; </span>AFMST<span style="">&nbsp; </span>&lt;ARSWD&gt;<span style="">&nbsp; </span>ARPHT<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NC004005 | DGOT&nbsp; PRWE&nbsp; HOVI&nbsp;
PMSL&nbsp; QMST&nbsp; SST1&nbsp;
DAYW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
BID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | SEQNUM&nbsp; BUHD&nbsp;
BORG&nbsp; BULTIM&nbsp; BBB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
RAWRPT&nbsp;&nbsp; |
RRSTG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
RCPTIM&nbsp;&nbsp; | RCTS&nbsp; RCYR&nbsp;
RCMO&nbsp; RCDY&nbsp; RCHR&nbsp;
RCMI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
UASID&nbsp;&nbsp;&nbsp; | RPID&nbsp; CLAT&nbsp;
CLON&nbsp;
SELV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
UARID&nbsp;&nbsp;&nbsp; | RATP&nbsp; A4ME&nbsp;
CORN&nbsp; UAPART&nbsp;
TIWM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UARLV<span style="">&nbsp; </span>
<span style="">&nbsp;&nbsp;</span>| VSIG<span style="">&nbsp;
</span>QMPR<span style="">&nbsp; </span>PRLC<span style="">&nbsp; </span>QMGP<span style="">&nbsp;
</span>&lt;UAGP07&gt;<span style="">&nbsp;
</span>&lt;UAGP10&gt;<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
UARLV&nbsp;&nbsp;&nbsp; | &lt;UATMP&gt;&nbsp; &lt;UAWND&gt;&nbsp;
&lt;UAWSH&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
UAGP07&nbsp;&nbsp; | GP07&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
UAGP10&nbsp;&nbsp; |
GP10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
UATMP&nbsp;&nbsp;&nbsp; | QMAT&nbsp; TMDB&nbsp;
QMDD&nbsp;
TMDP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
UAWND&nbsp;&nbsp;&nbsp; | QMWN&nbsp; WDIR&nbsp;
WSPD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
UAWSH&nbsp;&nbsp;&nbsp; | AWSB&nbsp;
AWSA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
UACLD&nbsp;&nbsp;&nbsp; | CLTP&nbsp; CLAM&nbsp;
HBLCS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
UASDG&nbsp;&nbsp;&nbsp; | QMST&nbsp; SST1&nbsp;
SIRC&nbsp; TTSS&nbsp; UALNHR&nbsp;
UALNMN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
UAADF&nbsp;&nbsp;&nbsp; | MWDL&nbsp; MWSL&nbsp;
MWDH&nbsp; MWSH&nbsp; STBS5&nbsp;
XMPRLC&nbsp;
XMGP10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
UARDCS&nbsp;&nbsp; |
UARDC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PFLID<span style="">&nbsp;&nbsp;&nbsp; </span>| WMOB<span style="">&nbsp; </span>WMOS<span style="">&nbsp;
</span>RPID<span style="">&nbsp; </span>TOST<span style="">&nbsp; </span>SSTN<span style="">&nbsp;
</span>A4ME<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PFLID<span style="">&nbsp;&nbsp;&nbsp; </span>| 201132<span style="">&nbsp; </span>202130<span style="">&nbsp;
</span>MEFR<span style="">&nbsp; </span>202000<span style="">&nbsp; </span>201000<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
PFLID&nbsp;&nbsp;&nbsp; | CLAT&nbsp; CLON&nbsp;
SELV&nbsp;
CORN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PFLEV<span style="">&nbsp;&nbsp;&nbsp; </span>| HEIT<span style="">&nbsp; </span>NPQC<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PFLEV<span style="">&nbsp;&nbsp;&nbsp; </span>| QMWN<span style="">&nbsp; </span>WDIR<span style="">&nbsp;
</span>WSPD<span style="">&nbsp; </span>SDHS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
PFLEV&nbsp;&nbsp;&nbsp; | WCMP&nbsp;
SDVS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NXVADD&nbsp;&nbsp; | HEIT&nbsp; QMWN&nbsp;
WDIR&nbsp; WSPD&nbsp;
RMSW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
NXRID&nbsp;&nbsp;&nbsp; | RPID&nbsp; CORN&nbsp;
CLAT&nbsp; CLON&nbsp;
SELV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
AFRID&nbsp;&nbsp;&nbsp; | RPID&nbsp; CORN&nbsp;
CLAT&nbsp; CLON&nbsp; FLVL&nbsp;
PSAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
AFICG&nbsp;&nbsp;&nbsp; | AFIC&nbsp; HBOI&nbsp;
HTOI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
AFCLD&nbsp;&nbsp;&nbsp; | CLAM&nbsp; CLTP&nbsp;
HOCB&nbsp;
HOCT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
AFTMP&nbsp;&nbsp;&nbsp; | QMAT&nbsp;
TMDB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
AFWND&nbsp;&nbsp;&nbsp; | QMWN&nbsp; WDIR&nbsp;
WSPD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
AFMST&nbsp;&nbsp;&nbsp; | QMDD&nbsp; TMDP&nbsp;
REHU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
ARPHT&nbsp;&nbsp;&nbsp; | VSIG&nbsp; PRLC&nbsp;
GP10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
ARSWD&nbsp;&nbsp;&nbsp; | WDIR1&nbsp;
WSPD1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
MPSEQ1&nbsp;&nbsp; | ANAZ&nbsp;&nbsp;&nbsp;&nbsp;
ANEL&nbsp;&nbsp;&nbsp;&nbsp;
{MPSEQ2}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MPSEQ2<span style="">&nbsp;&nbsp; </span>| HEIT<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>NPQC<span style="">&nbsp;&nbsp;&nbsp;&nbsp;
</span>ACAV<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>SPP0<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>STNR<span style="">&nbsp;&nbsp;&nbsp;
</span>202129<span style="">&nbsp;&nbsp; </span>DMVR<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
MPSEQ2&nbsp;&nbsp; | 201132&nbsp;&nbsp; DVSW&nbsp;&nbsp;&nbsp;&nbsp;
201000&nbsp;&nbsp;
202000&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RTID<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| WMOB<span style="">&nbsp; </span>WMOS<span style="">&nbsp;
</span>RPID<span style="">&nbsp; </span>TOST<span style="">&nbsp; </span>SSTN<span style="">&nbsp;
</span>A4ME<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
RTID&nbsp;&nbsp;&nbsp;&nbsp; | CLAT&nbsp; CLON&nbsp;
SELV&nbsp;
CORN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
RTSEQ1&nbsp;&nbsp; | HEIT&nbsp; QMAT&nbsp;
TMVR&nbsp;
NPQC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
JPID<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>| WMOB<span style="">&nbsp; </span>WMOS<span style="">&nbsp;
</span>RPID<span style="">&nbsp; </span>A4ME<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
JPID&nbsp;&nbsp;&nbsp;&nbsp; | CLAT&nbsp; CLON&nbsp;
SELV&nbsp;
CORN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
JPSEQ1&nbsp;&nbsp; | HEIT&nbsp; QMRK&nbsp;
QMWN&nbsp; WDIR&nbsp; WSPD&nbsp;
WCMP&nbsp;
STNR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
EPSEQ1&nbsp;&nbsp; | HEIT&nbsp; QMRK&nbsp;
QMWN&nbsp; WDIR&nbsp; WSPD&nbsp;
QMRK&nbsp; WCMP&nbsp;
STNR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
OZSNDFLT | OSCF&nbsp;&nbsp;&nbsp;&nbsp; OZOP&nbsp;&nbsp;&nbsp;&nbsp;
{OZONELV1}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
WMOBLKST | WMOB&nbsp;&nbsp;&nbsp;&nbsp;
WMOS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
YYMMDD&nbsp;&nbsp; | YEAR&nbsp;&nbsp;&nbsp;&nbsp;
MNTH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
DAYS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
HHMM&nbsp;&nbsp;&nbsp;&nbsp; | HOUR&nbsp;&nbsp;&nbsp;&nbsp;
MINU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
LALOLV&nbsp;&nbsp; | CLAT&nbsp;&nbsp;&nbsp;&nbsp;
CLON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
SELV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
OZONELV1 | TIMI&nbsp;&nbsp;&nbsp;&nbsp;
OVSS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PRLC&nbsp;&nbsp;&nbsp;&nbsp;
MOPP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OZONELV2 | 201131<span style="">&nbsp; </span>202130<span style="">&nbsp; </span>TPMI<span style="">&nbsp;
</span>202000<span style="">&nbsp; </span>202129<span style="">&nbsp; </span>PRLC<span style="">&nbsp;
</span>202000<span style="">&nbsp; </span>201000<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<o:p/>
</span>
</p><p style="color: rgb(204, 102, 204);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OZONELV2 | HEIT<span style="">&nbsp;&nbsp;&nbsp; </span>TMDB<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>201132<span style="">&nbsp; </span>202129<span style="">&nbsp;
</span>REHU<span style="">&nbsp; </span>202000<span style="">&nbsp; </span>201000<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(204, 102, 204);">|
OZONELV2 | 201133 202130&nbsp;&nbsp; MOPP&nbsp; 202000&nbsp;
201000&nbsp; OZMR&nbsp; WDIR&nbsp;&nbsp;&nbsp;
WSPD&nbsp; GP07&nbsp;&nbsp;&nbsp; |</span>
<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|------------------------------------------------------------------------------|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MNEMONIC | SCAL | REFERENCE<span style="">&nbsp;&nbsp; </span>| BIT |
UNITS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|----------|------|-------------|-----|--------------------------|-------------|<o:p/>
</span>
</p><p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;</span>
</span>
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="">
<a name="TblB2"/>
</span>
</span>
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;</span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WMOB<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>7 | NUMERIC<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WMOS<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>10 | NUMERIC<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WMOR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>3 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
BPID<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>17 | NUMERIC<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
SSTN<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>40 | CCITT IA5<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UAPART<span style="">&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>32 | CCITT IA5<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
BUHD<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>48 | CCITT IA5<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RSML<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>64 | CCITT IA5<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RPID<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>64 | CCITT IA5<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TOST<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>2 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
A4ME<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RATP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>8 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
SIRC <span style="">&nbsp;&nbsp;&nbsp;&nbsp;</span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TTSS<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>7 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
ANTYP<span style="">&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
BEAMW<span style="">&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1 | <span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>0 |<span style="">&nbsp;&nbsp;
</span>6 | DEGREES<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MEFR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp; </span>-8 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>7 | HZ<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
ANAZ<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>2 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>16 | DEGREE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
ANEL<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>2 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-9000 |<span style="">&nbsp; </span>15 | DEGREE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OISN<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>32 | CCITT IA5<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OITP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>7 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
SEQNUM<span style="">&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>32 | CCITT IA5<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
BORG<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>32 | CCITT IA5<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TIWM<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | FLAG TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
YEAR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>12 | YEAR<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MNTH<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | MONTH<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
DAYS<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>6 | DAY<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HOUR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>5 | HOUR<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MINU<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>6 | MINUTE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TIMI<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-2048 |<span style="">&nbsp; </span>12 | MINUTES<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TPMI<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-2048 |<span style="">&nbsp; </span>12 | MINUTES<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">| TPSE<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;
</span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>-4096 |<span style="">&nbsp; </span>13 | SECONDS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
DAYW<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>3 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RCYR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>12 | YEAR<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RCMO<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | MONTH<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RCDY<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>6 | DAY<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RCHR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>5 | HOUR<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RCMI<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>6 | MINUTE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UALNHR<span style="">&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>5 | HOUR<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UALNMN<span style="">&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>6 | MINUTE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
CLAT<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>2 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-9000 |<span style="">&nbsp; </span>15 | DEGREES<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
CLON<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>2 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-18000 |<span style="">&nbsp; </span>16 | DEGREES<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
SELV<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-400 |<span style="">&nbsp; </span>15 | METERS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PRLC<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp; </span>-1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>14 | PASCALS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HEIT<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-1000 |<span style="">&nbsp; </span>17 | METERS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
GP07<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-10000 |<span style="">&nbsp; </span>20 |
(METERS/SECOND)**2<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
XMPRLC<span style="">&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp; </span>-1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>14 | PASCALS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PSAL<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-4000 |<span style="">&nbsp; </span>20 | METERS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
FLVL<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-4000 |<span style="">&nbsp; </span>20 | METERS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
VSIG<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>7 | FLAG TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OVSS<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>9 | FLAG TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TSIG<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>5 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
ACAV<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>16 | NUMERIC<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RCTS<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp; </span>
<span style="">&nbsp;&nbsp;</span>0
|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp; </span>6 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
GP10<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-10000 |<span style="">&nbsp; </span>20 |
(METERS/SECOND)**2<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PMSL<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp; </span>-1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>14 | PASCALS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
XMGP10<span style="">&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-10000 |<span style="">&nbsp; </span>20 |
(METERS/SECOND)**2<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WDIR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>9 | DEGREES TRUE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WSPD<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>12 | METERS/SECOND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
DGOT<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WCMP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>2 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-4096 |<span style="">&nbsp; </span>13 | METERS/SECOND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MWDL<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>9 | DEGREES TRUE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MWSL<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>12 | METERS/SECOND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
SDHS<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>12 | METERS/SECOND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
SDVS<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>8 | METERS/SECOND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
AWSB<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>12 | METERS/SECOND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
AWSA<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>12 | METERS/SECOND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WDIR1<span style="">&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>9 | DEGREES TRUE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WSPD1<span style="">&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>12 | METERS/SECOND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RMSW<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>12 | METERS/SECOND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MWDH<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>9 | DEGREES TRUE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MWSH<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>12 | METERS/SECOND<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TMDB<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>2 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>16 | DEGREES KELVIN<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TMDP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>2 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>16 | DEGREES KELVIN<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
TMVR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>2 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>16 | DEGREES KELVIN<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
REHU<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>0 |<span style="">&nbsp;&nbsp; </span>7 | %<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
STBS5<span style="">&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-40 |<span style="">&nbsp;&nbsp; </span>8 | NUMERIC<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MOPP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>4 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>9 | PA<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OSCF<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>3 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>11 | NUMERIC<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OZOP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>10 | DU<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
OZMR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>4 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>17 | CM**3/M**3<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HOVI<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp; </span>-1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>13 | METERS<span style="">&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|-------------|<o:p/>
</span>
</p><p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
PRWE<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>9 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>

<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
CLAM<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>

<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
CLTP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>6 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HOCB<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp; </span>-1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-40 |<span style="">&nbsp; </span>11 | METERS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p>

<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HOCT<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp; </span>-1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-40 |<span style="">&nbsp; </span>11 | METERS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p>

<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HBLCS<span style="">&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>

<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
AFIC<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HBOI<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp; </span>-1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-40 |<span style="">&nbsp; </span>16 | METERS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
HTOI<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp; </span>-1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-40 |<span style="">&nbsp; </span>16 | METERS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
DMVR<span style="">&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;</span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1
|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>-4096 |<span style="">&nbsp; </span>13 | M/S<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
DVSW<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>8 | M/S<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
SPP0<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>-100 |<span style="">&nbsp;&nbsp; </span>8 | DB<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
STNR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>-32 |<span style="">&nbsp;&nbsp;
</span>8 | DB<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
SST1<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>2 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>15 | DEGREES KELVIN<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
RAGL<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp; </span>-1 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>6 | METERS<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
MSPE<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 | <span style="">&nbsp;&nbsp;</span>2 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
WICE<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>8 | FLAG TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
NPQC<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | FLAG TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QCEVR<span style="">&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QMGP<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QMAT<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QMDD<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>|-------------|<o:p/>
</span>
</p>

<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QMWN<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
UARDC<span style="">&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>8 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QMPR<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QMRK<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>2 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
QMST<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>4 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
CORN<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;
</span>3 | CODE TABLE<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
BULTIM<span style="">&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>48 | CCITT IA5<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|-------------|<o:p/>
</span>
</p>
<p style="color: rgb(153, 102, 51);" class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|
BBB<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp; &nbsp; </span>0 |<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>0 |<span style="">&nbsp;
</span>48 | CCITT IA5<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>
<p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">
<span style="color: rgb(153, 102, 51);">|
RRSTG&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp; 0 |&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0 |&nbsp;
64 | CCITT IA5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
|-------------|</span>
<o:p/>
</span>
</p>
<p class="MsoNormal">
<span style="font-size: 9pt; font-family: &quot;Courier New&quot;;">|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp; </span>|<span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>|-------------|<o:p/>
</span>
</p>

</div>
</body>
</html>
