<html>
<head>
	<title>Datatable Server Side</title>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
</head>
<body>
	<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start Date</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start Date</th>
            </tr>
        </tfoot>
    </table>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
	<script>
    $(document).ready(function() {
	   $('#example').DataTable( {
	        "processing": true,
	        "serverSide": true,
	        "ajax": "load-data.php",
	    } );
	} );
	</script>
</body>
</html>