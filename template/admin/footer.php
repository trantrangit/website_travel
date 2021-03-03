
<div id="wrapper">
	<script src="components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true,
                lengthMenu: [
                    [ 15, 30, 100, 1000,-1 ],
                    [ '15 rows', '30 rows', '100 rows', '1000 rows', 'Show all' ]
                ]
                
        });
             
	});
    </script>
   
</div>
</body>
</html>