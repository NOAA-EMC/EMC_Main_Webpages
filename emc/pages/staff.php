<?php include '../header.php';?>

    <link type="text/css" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-about.css" media="all">
	<link type="text/css" href="https://www.emc.ncep.noaa.gov/emc/css/main/emc-content-template.css" media="all">
	<link type="text/css" href="https://www.emc.ncep.noaa.gov/emc/js/DataTables/datatables.min.css">
	<link type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
	<link type="text/css" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">
	
	<script type="text/javascript" src="https://www.emc.ncep.noaa.gov/emc/js/DataTables/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>
	
	<style>
	div.alphabet {
        display: table;
        width: 100%;
        margin-bottom: 1em;
    }
     
    div.alphabet span {
        display: table-cell;
        color: #3174c7;
        cursor: pointer;
        text-align: center;
        width: 3.5%
    }
     
    div.alphabet span:hover {
        text-decoration: underline;
    }
     
    div.alphabet span.active {
        color: black;
    }
	</style>
	
	<div class="container-fluid  main-content">
		<section class="main-first-content-row">
			<div class="container">
				<div class="row">
				<ul class="test"></ul>
				
				<div class="col-lg-12" style="padding-top:30px;">
					<table id="dirTable" class="table table-striped table-bordered dt-responsive nowrap">
					 <thead>
                           	<tr>
                               <th>Name</th>
                               <th>Email Address</th>
                               <th>Extension<br>(Base #=301-683-xxxx)</th>
                               <th>Employment Type</th>
                               <th>Branch/Organization</th>
                               <th>Website</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
				</div>
				
				</div>
			</div>
		</section>
	</div>
	
<script type="text/javascript">


var _alphabetSearch = '';

$.fn.dataTable.ext.search.push( function ( settings, searchData ) {
    if ( ! _alphabetSearch ) {
        return true;
    }
 
    if ( searchData[0].charAt(0) === _alphabetSearch ) {
        return true;
    }
 
    return false;
} );

			
			
	$.getJSON('../js/data/phone_dir_v6.json',function(data){
	      
	      $.each(data,function(i,emp){
	            	
	      var website = (emp.website === undefined) ? '' : emp.website;      	
	     $('#dirTable tbody').append('<tr><td>'+emp.name+
	                						'</td><td>'+emp.email+
	                						'</td><td>'+emp.extension+
	                						'</td><td>'+emp.role+
	                						'</td><td>'+emp.branch+
	                						'</td><td>'+website+
	                						'</td></tr>');
	     });
	      var table = $('#dirTable').DataTable({ "lengthMenu": [[25, 50, -1], [25, 50, "All"]]});
	      var alphabet = $('<div class="alphabet"/>').append( 'Search: ' );

		    $('<span class="clear active"/>')
		    .data( 'letter', '' )
		    .html( 'None' )
		    .appendTo( alphabet );
		 
		    for ( var i=0 ; i<26 ; i++ ) {
		        var letter = String.fromCharCode( 65 + i );
		     
		        $('<span/>')
		            .data( 'letter', letter )
		            .html( letter )
		            .appendTo( alphabet );
		    }
		     
		    alphabet.insertBefore( table.table().container() );

		    alphabet.on( 'click', 'span', function () {
		        alphabet.find( '.active' ).removeClass( 'active' );
		        $(this).addClass( 'active' );
		     
		        _alphabetSearch = $(this).data('letter');
		        table.draw();
		    } );
	   }).error(function(e){
	        console.log(e);
	   });
	

	
</script>
<?php include '../footer.php';?>
