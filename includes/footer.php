        <!--dropzone-->
<!--        <script src="dist/dropzone.js"></script>-->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datetimepicker.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>        
		<script src="js/custom.js"></script>
		<script>
            
            
            $(function () {
			$('#date_hired').datetimepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
			});
			
			$('#fromDate,#toDate').datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
			});
		});
		</script>
		
	</body>
</html>