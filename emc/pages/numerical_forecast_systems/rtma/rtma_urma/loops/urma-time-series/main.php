<link rel="stylesheet" type="text/css" href="../css/leaflet.css">
<link rel="stylesheet" type="text/css" href="../css/rtma.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
/*.leaflet-pane .leaflet-popup-pane{
  width: 350px!important;
  height: 350px!important;
}*/
.leaflet-popup-content {
  width: 381px;
  height: 200px;
}
.leaflet-popup{
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -200px;
  margin-top: -200px;
}
</style>
<div class="container-fluid">
<div id="main" style="display:none;"></div>
<input type="button" value="Download plot"  id="download" class="pn"></input>
   <div id="divdropimage1" class="select">
    <div id="afterdropimage1" class="select-styled">
    </div>
   </div>
<!--<div id="map" style="position:absolute; top: 130px; left: 975px; height: 325px; width: 350px"></div>-->
    <div id="map" style="position:none!important;height: 100vh; width: 100vw;"></div>
</div>
<?php require 'utc_retrieval.php';?>
<script src="https://d3js.org/d3.v3.min.js"></script>
<script src="https://d3js.org/d3-queue.v3.min.js"></script>
<script src="https://npmcdn.com/leaflet@1.0.0-rc.3/dist/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.5/bluebird.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/canvg/1.4/rgbcolor.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/stackblur-canvas/1.4.1/stackblur.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/canvg/dist/browser/canvg.min.js"></script>
<script type="text/javascript" src="../js/downloadSVGByClass.js"></script>
<!--<script type="text/javascript" src = "variables.js"></script>-->

<script>
//function to move indices
var phpLats = <?php echo json_encode($hilatsArr); ?>;
var phpLongs = <?php echo json_encode($hilongsArr); ?>;
var phpHinames = <?php echo json_encode($hinamesArr); ?>;

//console.log(phpLats);
//console.log(phpLongs);
//console.log(phpHinames);
var hinames= phpHinames;
var hilats= phpLats;
var hilons= phpLongs;
var stationname="KORD";

Array.prototype.move = function (from, to) {
  this.splice(to, 0, this.splice(from, 1)[0]);
};

//function that moves line to front on mouseover
d3.selection.prototype.moveToFront = function() {
  return this.each(function(){
    this.parentNode.appendChild(this);
  });
};
var monthNames = [
  "January", "February", "March",
  "April", "May", "June", "July",
  "August", "September", "October",
  "November", "December"
];
var currentdate=new Date(Date.UTC(2017,5,6,14,0,0));
var subdate=new Date(Date.UTC(2017,5,6,14,0,0));
var sday=currentdate.getUTCDate();
var smonthindex=currentdate.getUTCMonth();
var syear=currentdate.getUTCFullYear();
var shour=currentdate.getUTCHours();
var strdate=("ending "+("0"+shour).slice(-2)+' UTC '+("0"+sday).slice(-2)+' '+monthNames[smonthindex]+' ' +syear);
var date=("ending "+("0"+shour).slice(-2)+' UTC '+("0"+sday).slice(-2)+' '+monthNames[smonthindex]+' ' +syear);
//var filedate=(syear+("0"+(smonthindex+1)).slice(-2)+("0"+sday).slice(-2)+("0"+shour).slice(-2));
var date_list=[];
var date_objects=[];

//Set number of cycles in dropdown menu
for (i=0; i<57;i++) {
  subdate.setUTCHours(currentdate.getUTCHours()-(6*i));
  subdate=new Date(currentdate-(360*i*60000));
  minusyear=subdate.getUTCFullYear();
  minusmonth=("0"+(subdate.getUTCMonth()+1)).slice(-2);
  minusday=("0"+subdate.getUTCDate()).slice(-2);
  minushour=("0"+subdate.getUTCHours()).slice(-2);
  date_list.push(minusyear+minusmonth+minusday+minushour);
  date_objects.push("ending" +minushour+' UTC '+minusday+' '+monthNames[subdate.getUTCMonth()]+' ' +minusyear);
}
var mymap = L.map('map',{worldCopyJump:true}).setView([38.0,-97.5],2);
L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}',{
        maxZoom:17,minZoom:1,
        attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ, TomTom, Intermap, iPC, USGS, FAO, NPS, NRCAN, GeoBase, Kadaster NL, Ordnance Survey, Esri Japan, METI, Esri China (Hong Kong), and the GIS User Community'}).addTo(mymap);

L.control.scale({position:'topright'}).addTo(mymap);

//Marker Popup
var popup = L.popup();
function onMapClick(e) {
    var html = '<div id="popupCust" class="container" style="position:relative;z-index:1000"><div class="row"><div class="col-sm-4">Station:'+stationname+'</div>'+
               '<div class="col-sm-4">Lat:'+e.latlng.lat.toFixed(2).toString()+'</div>'+
               '<div class="col-sm-3">Lon:'+e.latlng.lng.toFixed(2).toString()+'</div>' +
               '</div></div>'
    var closeHtml = '</div>';
    //#main
    popup
        .setLatLng(e.latlng)
        .setContent(html)
        .openOn(mymap);

    document.getElementsByClassName('leaflet-popup-content-wrapper')[0].appendChild(
    	document.getElementById('divdropimage1')
    );
    document.getElementsByClassName('leaflet-popup-content-wrapper')[0].appendChild(
        document.getElementById('download')
    );
    document.getElementsByClassName('leaflet-popup-content-wrapper')[0].appendChild(
        document.getElementById('main')
    );
   document.getElementsByClassName('leaflet-popup-close-button')[0].style.zIndex="1000";
   document.getElementById('divdropimage1').style.zIndex="1000";
   document.getElementById('download').style.zIndex="1000";
   document.getElementById('download').style.left="380px";
   document.getElementById('main').style.display="block";
   document.getElementById('main').style.width="640px";
   document.getElementById('main').style.height="150px";
}

mymap.on('click', onMapClick);


bstation="";
function onMarkerClick(e){
    transitiontime=750
    clicked=1 
    filename="station_"+e.target.options.name+".csv";
    stationname=e.target.options.name;
    //console.log(filename);
  for ( blah in circlea._layers ) {
    var obj = circlea._layers[blah];
    if (obj.options.name==stationname) {
    obj._path.attributes.fill.value='#f00';
    }
    else{
      if (obj.options.name==bstation && mymap.getZoom()>=5) {
        circlea.removeLayer(obj);
        circlebb.addLayer(obj);
       }
      obj._path.attributes.fill.value='#fff';
    }
   }
  var isb = 0;
  for ( blah in circlebb._layers ) {
    var obj = circlebb._layers[blah];
    if (obj._path) {
    if (obj.options.name==stationname) {
    obj._path.attributes.fill.value='#f00';
    isb=1;
    bstation=obj.options.name;
    circlea.addLayer(obj);
    circlebb.removeLayer(obj);
    mymap.removeLayer(circlea);
    mymap.addLayer(circlea);
  for ( blah in circlea._layers ) {
    var obj = circlea._layers[blah];
    if (obj.options.name==stationname) {
    obj._path.attributes.fill.value='#f00';
      }
    }
    }
    else{
      obj._path.attributes.fill.value='#fff';
    }
   }
   }
    updateData();
}
function onMouseover(e) {
  this._path.attributes.fill.value='#f00';
}
function onMouseout(e) {
  if (this.options.name!=stationname) {
    this._path.attributes.fill.value='#fff';
  }
}
pointdata=[]
function initc() {
circlea= new L.FeatureGroup();
circlebb= new L.FeatureGroup();
customMarker = L.CircleMarker.extend({options: {name:'custom name'}});
for (i=0; i<hilons.length;i++) {
    if (i<141 || hinames[i].slice(0,1)=="P") {
    circlea.addLayer(L.circleMarker([+hilats[i],+hilons[i]],{weight:1,color:'#000',fillColor:'#fff',fillOpacity:1,radius:5,title:hinames[i],name:hinames[i]})
      .on('click',onMarkerClick)
      .on('mouseover',onMouseover)
      .on('mouseout',onMouseout))
      var resflag=0;}
    else {resflag=1;
    circlebb.addLayer(L.circleMarker([+hilats[i],+hilons[i]],{weight:1,color:'#000',fillColor:'#fff',fillOpacity:1,radius:7,title:hinames[i],name:hinames[i]})
      .on('click',onMarkerClick)
      .on('mouseover',onMouseover)
      .on('mouseout',onMouseout))
}
  }
}
initc()
    mymap.addLayer(circlea);
  for ( blah in circlea._layers ) {
    var obj = circlea._layers[blah];
    //console.log('Object Name: '+obj.options.name);
    //console.log('Station Name: '+stationname);
    if (obj.options.name==stationname) {
    //console.log("Hit");
    obj._path.attributes.fill.value='#f00';
    }
x
   }
mymap.on('zoomend',function() {
  var currentZoom=mymap.getZoom();
  for ( blah in circlea._layers ) {
    var obj = circlea._layers[blah];
    //console.log(obj);
    obj._radius = currentZoom+2;
  }
  if (currentZoom>=5) {
  for ( blah in circlea._layers ) {
    var obj = circlea._layers[blah];
      if (obj.options.name==bstation && obj.options.name!==stationname) {
      //if (bstation.some(elem => elem==obj.options.name)) {
        circlea.removeLayer(obj);
        circlebb.addLayer(obj);
       }
   }
    //mymap.removeLayer(circlebb);
    mymap.addLayer(circlebb);
    //console.log(circlebb);
  for ( blah in circlebb._layers ) {
    var obj = circlebb._layers[blah];
    if (obj._path) {
    if (obj.options.name==stationname) {
    obj._path.attributes.fill.value='#f00';
    }
    else{
      obj._path.attributes.fill.value='#fff';
    }
   }
   }
  }
  if (currentZoom==5) {
  for ( blah in circlebb._layers ) {
    var obj = circlebb._layers[blah];
    obj._radius = 7;
  }
  for ( blah in circlea._layers ) {
    var obj = circlea._layers[blah];
    obj._radius = 7;
  }
  }
  if (currentZoom==6) {
  for ( blah in circlebb._layers ) {
    var obj = circlebb._layers[blah];
    obj._radius = 9;
  }
  for ( blah in circlea._layers ) {
    var obj = circlea._layers[blah];
    obj._radius = 9;
  }
  }
  if (currentZoom<=4) {
    mymap.removeLayer(circlebb);
  }
});



var variable="t";
var varoptions={"t":"2-m T",
  "u":"10-m u wind",
  "v":"10-m v wind",
  "cei":"cloud ceiling",
  "vis":"horizontal visibility",
  "q":"2-m specific humidity",
  "ps":"surface pressure",
  "tca":"total cloud",
  "hwv":"significant wave height",
  "wst":"10-m wind speed"};
var varlist=["t","u","v","wst","cei","vis","q","ps","tca","hwv"]
var varunits={"t":"F",
  "u":"kt",
  "v":"kt",
  "cei":"kft",
  "vis":"miles",
  "q":"g/kg",
  "ps":"hPa",
  "tca":"%",
  "hwv":"ft",
  "wst":"kt"};
var varlabels={"t":"2-m temperature (F)",
  "u":"10-m u wind (kt)",
  "v":"10-m v wind (kt)",
  "cei":"cloud ceiling (kft AGL)",
  "vis":"horizontal visibility (mi)",
  "q":"2-m specific humidity (g/kg)",
  "ps":"surface pressure (hPa)",
  "tca":"total cloud amount or sky cover (%)",
  "hwv":"significant wave height (ft)",
  "wst":"10-m wind speed (kt)"};

var thisylabel=varlabels[variable];
var units=varunits[variable];


//var width = 850;
//var height = 775;
/*var margin = {top: 100, right: 10, bottom: 200, left: 50}
    width = 850 - margin.right - margin.left,
    height = 775 - margin.top - margin.bottom;*/
var margin = {top: 100, right: 10, bottom: 100, left: 30}
    width = 650 - margin.right - margin.left,
    height = 450 - margin.top - margin.bottom;

var linesvg = d3.select("div#main").append("svg")
    .attr("class","svgclass")
    .attr("width", width + margin.right + margin.left)
    .attr("height", height + margin.top + margin.bottom)
   .append("g")
    .attr("id","chartarea")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
//gray background
linesvg.append("rect")
    .attr("width", width + margin.right + margin.left)
    .attr("height", height + margin.top + margin.bottom)
    .attr("x",0)
    .attr("y",0)
    .attr("transform", "translate(-50,-100)")
    .attr("fill","#ffffff");
    
linesvg.append("rect")
    .attr("class", "grid-background")
    .attr("width", width-20)
    .attr("height", height);
var x = d3.time.scale.utc().range([0,width-20]);
var y = d3.scale.linear().range([height,0]);
//define voronoi for mousing over lines
var voronoi=d3.geom.voronoi()
  .x(function(d) { return x(d.date); })
  .y(function(d) { return y(d.value); })
  .clipExtent([[0,0],[width-60, height]]);
var xAxis = d3.svg.axis().scale(x).ticks(d3.time.hour.utc,12).tickSize(-height)
var xAxis2 = d3.svg.axis().scale(x).ticks(d3.time.hour.utc,12).tickFormat(d3.time.format.utc("%HZ/%d"));
var yAxis = d3.svg.axis().scale(y)
    .orient("left");
var line = d3.svg.line()
    .interpolate("linear")
    .defined(function(d) {return !isNaN(d.value);})
    .x(function(d) { return x(d.date); })
    .y(function(d) { return y(d.value); });
//update line function
function toline() {
  return d3.svg.line()
    .interpolate("linear")
    .defined(function(d) {return !isNaN(d.value);})
    .x(function(d) { return x(d.date); })
    .y(function(d) { 
         return y(d.value); });
}
function topline() {
  return d3.svg.line()
    .interpolate("linear")
    .x(function(d) { return x(d.time); })
    .y(function(d) { 
         return y(d.precip); });
}


//initial file name
var filename="station_"+stationname+".csv";

var color=d3.scale.ordinal()
    .range(["#303030","#1a79ff","#ff2424"])
var legend=["#303030","#1a79ff","#ff2424"]
var legendtext=["Observed","Analysis","Background","Ob used", "Ob not used"]
var legcolors=["#5dc44f","#edff47"]

var leg=linesvg.append("g")
   .attr("class","legend")
  .selectAll("rect")
  .data(legend)
  .enter().append("rect")
  .attr("x",function(d,i) {return (i*125)+50 })
  .attr("y",550)
  .attr("fill",function(d) {return d})
  .attr("width",15)
  .attr("height",15)
d3.select(".legend").selectAll("text")
  .data(legendtext)
  .enter().append("text")
  .attr("x",function(d,i) {return (i*125)+75 })
  .attr("y",562)
  .attr("font-size",14)
  .text(function(d) { return d });
d3.select(".legend").selectAll("circle")
  .data(legcolors)
  .enter().append("circle")
  .attr("cx",function(d,i) {return (i*125)+435 })
  .attr("cy",557.5)
  .attr("fill",function(d) {return d})
  .attr("stroke","#303030")
   .attr("r",7);

var parseDate=d3.time.format.utc("%Y%m%d%H%M").parse;
//var parseobsDate=d3.time.format.utc("%y%m%d/%H00").parse;
var csvstring="YYYYMMDDHHMM"
var nulls=false;
function initial(filename) {
filename = "https://www.emc.ncep.noaa.gov/mmb/rtma/prod_ts/urma/" + filename;
var values=[]
var pp = d3.csv(filename,function(error,data) {
    if (error) {console.log("there was an error"); console.log(error); console.log(filename);};
    color.domain(d3.keys(data[0]).filter(function(key) { return key == variable+"_analysis" || key== variable+"_ob" || key==variable+"_background";}));
    var anals=d3.values(data);
    data.forEach(function(d) {
      d.date=parseDate(d[csvstring]);
   });

    var fields = color.domain().map(function(name) {
      return {
        name: name,
        values: data.map(function(d) {
          //return {city: name, value:+d[name],date: parseDate(d[csvstring])};
          return {city: name, value:+d[name],date: parseDate(d[csvstring]),flag:d[variable+"_flag"]};
      })
    };
   });
  nulls=false;
  for (i=0; i<fields.length;i++) {
    for (j=0; j<fields[i].values.length;j++) {
      if (variable=="t") {
        fields[i].values[j].value=((fields[i].values[j].value-273.15)*1.8)+32.0
      }
      if (isNaN(fields[i].values[j].value)) {
        nulls=true;
      }
    }
  }
  fields.move(0,2)
  fields.move(0,1)
  //var filedate=fields[fields.length-1].values[0].date;
  //console.log(fields[0].values[fields[0].values.length-1]);
  var filedate=fields[2].values[fields[2].values.length-1].date;
  var sday=filedate.getUTCDate();
  var smonthindex=filedate.getUTCMonth();
  var syear=filedate.getUTCFullYear();
  var shour=filedate.getUTCHours();
  var strdate=("ending "+("0"+shour).slice(-2)+' UTC '+("0"+sday).slice(-2)+' '+monthNames[smonthindex]+' ' +syear);
  imagedate=(syear+("0"+(smonthindex+1)).slice(-2)+("0"+sday).slice(-2)+("0"+shour).slice(-2));

    x.domain(d3.extent(data,function(d) { return d.date; }));
    y.domain([d3.min(fields,function(d) { return d3.min(d.values, function(v) { return v.value; })-1; }),d3.max(fields,function(d) { return d3.max(d.values, function(v) { return v.value; })+1; })]);
  var perturbations = linesvg.append("g")
    .attr("class","perturbations")
   .selectAll("path")
     .data(fields)
   .enter().append("path")
    .attr("stroke-width",3)
    .attr("fill","none")
    .attr("clip-path","url(#clip)")
    .attr("d",function(d) {d.line=this; return line(d.values); })
    .style("stroke", function(d) { return color(d.name); })
    .style("stroke-width", function(d) { if (d.name=="mean") {
      return 6;}
      else {return 3;}
      })
    .call(line);

   var circles=linesvg.append("g")
    .attr("class","circles")
    .selectAll("circle")
      .data(fields[2].values)
    .enter().append("circle")
    .attr("class","dot")
    .attr("r",5)
    .attr("cx",function(d) {return x(d.date); })
    .attr("stroke","#303030")
    .attr("fill-opacity",function(d) {
       if (isNaN(d.flag)) {
         return 0.0 }
       else { return 1.0 }
       })
    .attr("stroke-opacity",function(d) {
       if (isNaN(d.flag)) {
         return 0.0 }
       else { return 1.0 }
       })
    //.attr("fill-opacity",1.0)
    .attr("clip-path","url(#clip)")
    .attr("stroke-width",1.0)
    .style("fill",function(d) {
         if (d.flag==1) {
            return "#5dc44f"
            }
          else {
             return "#edff47"}
             }
                )
    .attr("cy",function(d) {return y(d.value); });

   //for (i=0; i<fields.length;i++) {
   //   fields[2-i].line.parentNode.appendChild(fields[2-i].line);
   //   }
    linesvg.append("g")
      .attr("class", "grid")
      .attr("transform", "translate(0," + height + ")")
      .style("stroke-dasharray",("2,2"))
      .call(xAxis)
    linesvg.append("g")
      .attr("class","x axis")
      .attr("transform","translate(0," + height + ")")
      .call(xAxis2);
    /*.append("text")
      .attr("x",335)
      .attr("dy","3.25em")
      .style("font-size","12px")
      .text("Time (UTC)");*/
    linesvg.append("g")
      .attr("class","y axis")
      .call(yAxis)
    linesvg.append("g")
        .attr("class","ylabel")
        .append("text")
        .attr("transform","rotate(-90)")
        .attr("y",6)
        .attr("dy",".9em")
        .style("font-size","12px")
        .style("text-anchor","end")
        .text(thisylabel);
    /*linesvg.append("g")
      .attr("class","title")
      .append("text")
      //.attr("x", (width / 2))             
      .attr("x", 375)             
        .attr("y", 0 - (margin.top / 2))
        .attr("text-anchor", "middle")  
        .style("font-size", "16px") 
        .style("font-weight", "bold") 
        .text("URMA traces for: " +stationname);*/
    /*linesvg.append("g")
      .attr("class","titlesub")
      .append("text")
      //.attr("x", (width / 2))             
      .attr("x", 375)             
        .attr("y", 25 - (margin.top / 2))
        .attr("text-anchor", "middle")  
        .style("font-size", "16px") 
        .text(strdate);*/
    var focus = linesvg.append("g")
      .attr("transform","translate(-100,-100)")
      .attr("class","focus");
    focus.append("circle")
      .attr("stroke","white")
      .attr("stroke-width",1.5)
      .attr("r",5.0);
    focus.append("text")
      .style("font-size","12px")
      .attr("y",-10);
    var voronoiGroup=linesvg.append("g")
      .attr("class","voronoi");
//console.log(fields);
//remove coincident points for voronoi
  var thisdata=d3.nest()
          .key(function(d) { return x(d.date) + "," + y(d.value); })
          .rollup(function(v) {
                  //console.log(v[0]);
                  return v[0]; })
          .entries(d3.merge(fields.map(function(d) { return d.values; })))
          .map(function(d) { return d.values; })
  //console.log(thisdata);

if (nulls) {
  //var voronoiGroup=linesvg.selectAll(".voronoi").selectAll("path").exit().remove();
  linesvg.selectAll(".voronoi").selectAll("path").remove();
  var focus=d3.select(".focus");
  focus.attr("transform", "translate(-100,-100)");
  }
else {
tv=voronoiGroup.selectAll("path")
        .data(voronoi(thisdata),function(d) {return d;})
    tv.enter().append("path")
      .attr("d", function(d) { return "M" + d.join("L") + "Z"; })
      .datum(function(d) { return d.point; })
      .on("mouseover", mouseover)
      .on("mouseout", mouseout);
}

function mouseover(d) {
   for (i=0; i<fields.length;i++) {
       if (d.city==fields[i].name) {
          var j=i;
        }
     }
    var linef = d3.select(fields[j].line);
     linef.style("stroke",color(d.city)).style("stroke-width",6)
    focus.attr("transform", "translate(" + x(d.date) + "," + y(d.value) + ")");
    focus.select("text").text(Math.round(d.value*100)/100+" "+varunits[variable]).style("font-weight","bold");
var sel = d3.select(this);
  linef.moveToFront();
    
  }
  function mouseout(d) {
   for (i=0; i<fields.length;i++) {
       if (d.city==fields[i].name) {
          var j=i;
         }
      //fields[i].line.parentNode.appendChild(fields[i].line);
      fields[2-i].line.parentNode.appendChild(fields[2-i].line);
      }
     var linef=d3.select(fields[j].line);
          linef.style("stroke", function(d) { return color(d.name); })
    .style("stroke-width", function(d) { if (d.name=="mean") {
      return 6;}
      else {return 3;}
      })
     
    focus.attr("transform", "translate(-100,-100)");
  }

  });
 }
initial(filename);


function updateData() {
if ( filename.indexOf('mmb') == -1 ){
filename = "https://www.emc.ncep.noaa.gov/mmb/jcarley/rtma_urma/prod_ts/urma/" + filename;
}
var pp = d3.csv(filename,function(error,data) {
    if (error) {console.log("there was an error"); console.log(error);};
    color.domain(d3.keys(data[0]).filter(function(key) { return key == variable+"_analysis" || key== variable+"_ob" || key==variable+"_background";}));
    var anals=d3.values(data);
    data.forEach(function(d) {
      d.date=parseDate(d[csvstring]);
   });

    var fields = color.domain().map(function(name) {
      return {
        name: name,
        values: data.map(function(d) {
          return {city: name, value:+d[name],date: parseDate(d[csvstring]),flag:d[variable+"_flag"]};
      })
    };
   });
  nulls=false;
  for (i=0; i<fields.length;i++) {
    for (j=0; j<fields[i].values.length;j++) {
      if (variable=="t") {
        fields[i].values[j].value=((fields[i].values[j].value-273.15)*1.8)+32.0
      }
      if (variable=="u" || variable=="v" || variable=="wst") {
        fields[i].values[j].value=fields[i].values[j].value*1.94
      }
      if (variable=="cei") {
        // convert from meters to kilofeet
        fields[i].values[j].value=fields[i].values[j].value*3.28/1000.0
      }
      if (variable=="hwv") {
        // convert from meters to feet
        fields[i].values[j].value=fields[i].values[j].value*3.28
      }
      if (variable=="vis") {
        // convert from meters to miles
        fields[i].values[j].value=fields[i].values[j].value*0.000621371
      }

      if (isNaN(fields[i].values[j].value)) {
        nulls=true
       }
    }
  }
  fields.move(0,2)
  fields.move(0,1)
  //var filedate=fields[fields.length-1].values[0].date;
  //var filedate=fields[0].values[values.length-1].date;
  var filedate=fields[2].values[fields[2].values.length-1].date;
  var sday=filedate.getUTCDate();
  var smonthindex=filedate.getUTCMonth();
  var syear=filedate.getUTCFullYear();
  var shour=filedate.getUTCHours();
  var strdate=("ending "+("0"+shour).slice(-2)+' UTC '+("0"+sday).slice(-2)+' '+monthNames[smonthindex]+' ' +syear);
  imagedate=(syear+("0"+(smonthindex+1)).slice(-2)+("0"+sday).slice(-2)+("0"+shour).slice(-2));

    x.domain(d3.extent(data,function(d) { return d.date; }));
    y.domain([d3.min(fields,function(d) { return d3.min(d.values, function(v) { return v.value; })-1; }),d3.max(fields,function(d) { return d3.max(d.values, function(v) { return v.value; })+1; })]);
     var linesvg = d3.select("div#main");
     var t0 = linesvg.transition().duration(1);
     t0.selectAll(".x.axis").call(xAxis2);
     t0.selectAll(".grid").call(xAxis);
     var t1 = linesvg.transition().duration(transitiontime);
     t1.selectAll(".ylabel").selectAll("text").text(varlabels[variable]);
     t1.selectAll(".y.axis").call(yAxis);
     linesvg.selectAll("path")
     //transition lines for new data
     //console.log(perts);
     var dp = linesvg.selectAll(".perturbations").selectAll("path")
        .data(fields);
       dp.exit().remove();
       dp.enter().append("path")
            .attr("clip-path","url(#clip)")
            .attr("fill","none")
            .attr("stroke-width",3)
            .attr("clip-path","url(#clip)")
            .attr("d",function(d) {d.line=this; return line(d.values); })
            //.style("stroke", function(d) { return color(d.name); })
            .style("stroke", function(d) { return color(d.name); })
            .style("stroke-width", function(d) { if (d.name=="mean") {
              return 6;}
              else {return 3;}
              });
     var transition = dp.transition()
          .duration(transitiontime)
            .attr("clip-path","url(#clip)")
            .attr("class","line")
            .attr("d",function(d) { d.line=this; return toline()(d.values); })
            //.style("stroke", function(d) { return color(d.name); })
            .style("stroke", function(d) { return color(d.name); })
            .style("stroke-width", function(d) { if (d.name=="mean") {
              return 6;}
              else {return 3;}
              });
   var thesecircles=linesvg.select(".circles").selectAll("circle")
      .data(fields[2].values);
   thesecircles.exit().remove();
   thesecircles
     .attr("cx",function(d) {return x(d.date); })
     .attr("cy",function(d) {return y(d.value); })
    .attr("stroke-opacity",0.0)
    .attr("fill-opacity",0.0)
    .attr("stroke-width",1.0)
    .style("fill",function(d) {
         if (d.flag==1) {
            return "#5dc44f"
            }
          else {
             return "#edff47"}
             }
                );
   thesecircles.enter().append("circle")
     .attr("cx",function(d) {console.log(d);return x(d.date); })
     .attr("cy",function(d) {return y(d.value); })
    .attr("r",5)
    .attr("stroke","#303030")
    .attr("stroke-opacity",0.0)
    .attr("fill-opacity",0.0)
    .attr("stroke-width",1.0)
    .style("fill",function(d) {
         if (d.flag==1) {
            return "#5dc44f"
            }
          else {
             return "#edff47"}
             }
                );
   
     var ctransition = thesecircles.transition()
          .duration(transitiontime)
    .attr("fill-opacity",function(d) {
       if (isNaN(d.flag)) {
         return 0.0 }
       else { return 1.0 }
       })
    .attr("stroke-opacity",function(d) {
       if (isNaN(d.flag)) {
         return 0.0 }
       else { return 1.0 }
       });

    var newname=linesvg.selectAll(".title").selectAll("text")
        //.text("EMC's GEFS plumes for: " +stationname);
        .text("URMA traces for: " +stationname);
    /*var newtitle=linesvg.selectAll(".titlesub").selectAll("text")
        .text(strdate);*/
    var focus=d3.select(".focus");
  var thisdata=d3.nest()
          .key(function(d) { return x(d.date) + "," + y(d.value); })
          .rollup(function(v) {
                  //console.log(v[0]);
                  return v[0]; })
          .entries(d3.merge(fields.map(function(d) { return d.values; })))
          .map(function(d) { return d.values; })
if (nulls) {
  linesvg.selectAll(".voronoi").selectAll("path").remove();
  var focus=d3.select(".focus");
  focus.attr("transform", "translate(-100,-100)");
  }
else {
var voronoiGroup=linesvg.selectAll(".voronoi").selectAll("path")
        .data(voronoi(thisdata),function(d) {return d;})
    voronoiGroup.exit().remove();
    voronoiGroup.enter().append("path")
      .attr("d", function(d) {  return "M" + d.join("L") + "Z"; })
      .datum(function(d) {  return d.point; })
      .on("mouseover", mouseover)
      .on("mouseout", mouseout);
}
function mouseover(d) {
   for (i=0; i<fields.length;i++) {
       if (d.city==fields[i].name) {
          var j=i;
        }
     }
    var linef = d3.select(fields[j].line);
     linef.style("stroke",color(d.city)).style("stroke-width",6)
    focus.attr("transform", "translate(" + x(d.date) + "," + y(d.value) + ")");
    focus.select("text").text(Math.round(d.value*100)/100+" "+varunits[variable]).style("font-weight","bold");
var sel = d3.select(this);
  linef.moveToFront();
    
  }
  function mouseout(d) {
   for (i=0; i<fields.length;i++) {
       if (d.city==fields[i].name) {
          var j=i;
         }
      fields[i].line.parentNode.appendChild(fields[i].line);
      }
     var linef=d3.select(fields[j].line);
          linef.style("stroke", function(d) { return color(d.name); })
    .style("stroke-width", function(d) { if (d.name=="mean") {
      return 6;}
      else {return 3;}
      })
     
    focus.attr("transform", "translate(-100,-100)");
  }


})
}

d3.select("#download").on("click", function(){
  d3.select("body").append("canvas")
    .attr("id","canvas");

      source=downloadSVG("svgclass");


    canvg('canvas',source.source[0]);
    binaryblob();
//If IE construct different blob
if (navigator.appVersion.toString().indexOf('.NET') > 0) {
        var blob=canvas.msToBlob();
        window.navigator.msSaveBlob(blob, stationname+"_"+imagedate+".png");
  }
else
{
    var a = document.createElement("a");
	  a.download = stationname+"_"+imagedate+".png";
	  a.href = canvas.toDataURL("image/png");
          var event=new MouseEvent('click');
	  a.dispatchEvent(event)
}
d3.select("canvas").remove()
//don't think I event need this becasue dataView is never even defined so what does it do
function binaryblob(){
	var byteString = atob(document.querySelector("canvas").toDataURL().replace(/^data:image\/(png|jpg);base64,/, "")); 
	var ab = new ArrayBuffer(byteString.length);
	var ia = new Uint8Array(ab);
	for (var i = 0; i < byteString.length; i++) {
        ia[i] = byteString.charCodeAt(i);
    }
    var dataView = new DataView(ab);
    try {
	blob = new Blob([dataView], {type: "image/png"});
    }
    catch(e) {
           window.BlobBuilder = window.BlobBuilder ||
                                window.WebKitBlobBuilder ||
                                window.MozBlobBuilder ||
                                window.MSBlobBuilder;
           if (window.BlobBuilder) {
               var bb = new BlobBuilder();
               bb.append(dataView);
               blob = bb.getBlob("image/png");
           }
      }


	var DOMURL = self.URL || self.webkitURL || self;
	newurl = DOMURL.createObjectURL(blob);

}
});
var droppedimage1=false;
function showdropimage1() {
    afterdropimage1.attr("class","select-styled active");
    uldropimage1.style("display","block")
    droppedimage1=true;
}
function hidedropimage1() {
    droppedimage1=false;
    uldropimage1.style("display","none")
    afterdropimage1.attr("class","select-styled");
}
function changedropimage1() {
  if (!droppedimage1) {
    showdropimage1()
  }
  else {
    hidedropimage1()
  }
}

var afterdropimage1=d3.select("#afterdropimage1")
  .text(varoptions[variable])
  .on("mousedown",changedropimage1);
afterdropimage1.property('value',variable);
var uldropimage1=d3.select("#divdropimage1").append("ul")
  .attr("class","uldropimage");
uldropimage1.selectAll("li")
  .data(varlist)
  .enter().append("li")
    .attr("class","mainli")
    .text(function(d) { return varoptions[d]; })
    .attr("id",function(d) { return "MDimage1"+String(d);});
uldropimage1.style("display","none");
var subdropimage1click="";
uldropimage1.selectAll(".mainli").on("click",function(d) {
  subdropimage1click=d;
  variable=d;
  hidedropimage1()
  updateData()
var afterdropimage1=d3.select("#afterdropimage1")
  .text(varoptions[variable]);
});
transitiontime=750;

</script> 
