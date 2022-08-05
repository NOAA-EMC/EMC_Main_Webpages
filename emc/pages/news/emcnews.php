<?php include '../../header.php';?>

    <link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-about.css" media="all">
	<link rel="stylesheet" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-content-template.css" media="all">
	
	<div class="container-fluid  main-content">
		<section class="main-first-content-row">
			<div class="container">
				<div class="row">
				  <div class="col-lg-12"><center><h1 class="page-title">EMC News Items</h1></center><h2></h2></div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-3 left-side-bar">
							<ul class="list-group">
<li class="list-group-item"><a href="https://emc.ncep.noaa.gov/emc/pages/mdab-description.php" class="see-link">Modeling and Data Assimilation Branch (MDAB)</a></li>
<li class="list-group-item"><a href="https://emc.ncep.noaa.gov/emc/pages/eib-description.php" >Engineering and Implementation Branch (EIB)</a></li>
<li class="list-group-item"><a href="https://emc.ncep.noaa.gov/emc/pages/vpppgb-description.php" >Verification, Post-processing and Product Generation</a></li>
							</ul>
						</div>
						
						<div class="col-lg-9">
							<div class="seminar-content-page">
								<div style="margin-left:.29in;">


<h4>AUGUST 2022 : MDAB Chief Dr. Vijay Tallapragada receives two prestigious recognitions while attending the 2022 AMS Summer Community Meeting.</h4>

<p style="margin-left:0px; margin-right:0px">&nbsp;</p>
<img alt="Vijay Tallapragada" src="https://www.emc.ncep.noaa.gov/emc/images/Vijay_Tallapragada.jpg" style="width: 128px; height: 128px;" align="right">
<h4><strong><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"></span></span></strong><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;"></span></span></h4>

<p style="margin-left:0px; margin-right:0px"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">Dr. Tallapragada was appointed to the Scientific or Professional (ST) position of Senior Scientist at the Environmental Modeling Center, beginning August 14, 2022. This is a testament to his outstanding scientific contributions and collaborative endeavors in the area of numerical modeling, as well as an acknowledgment on the part of DOC/NOAA that the EMC mission requires the highest level of scientific leadership.</span></span></p>

<p style="margin-left:0px; margin-right:0px"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:16px;">The Council of the American Meteorological Society voted to elect Dr. Tallapragada a Fellow of the AMS.</span></span></p>
</div>
</div>
								
 																
 								<div class="container-fluid">
        							<div class="row">
         							           							</div>
     							</div>
     														</div>	
						</div>
						
						
					</div>
					
					
				</div>
			
			</div>
		</section>
	</div>
	
<script type="text/javascript">
 // Configure/customize these variables.
    var showChar = 100;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more >";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
</script>
<?php include '../footer.php';?>
