	 <!-- jQuery -->
    <script src="<?php echo base_url();?>public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>

    <?php if($role > 0) {
    echo "<script type='text/javascript' language='javascript' src='//code.jquery.com/jquery-1.12.4.js'></script>
    <script type='text/javascript' language='javascript' src='https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js'></script>
    ";
    }?>

    <script type="text/javascript">
	$(document).ready(function() {
    $('#myTable').DataTable( {
    	} );
	} );
	</script>

    <script type="text/javascript">
    $(document).ready(function() {
    $('#myTable2').DataTable( {
        } );
    } );
    </script>
</body>

</html>