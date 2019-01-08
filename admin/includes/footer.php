		
	
		<?php
			
			include './modal/deleteEmployee.php';
			include './modal/successDelete.php';
			include './modal/successLogout.php';
			include './modal/errorLogout.php';
			
			
			include './script/logout.php';
		?>
		
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		
		<script src="js/moment-with-locales.js"></script>
		<script src="js/bootstrap-datetimepicker.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/custom.js"></script>

		 <script src="js/jquery.dataTables.min.js"></script>
    	<script src="js/dataTables.bootstrap.min.js"></script>
		
    	<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

		
		<script type="text/javascript">
		$(function () {
			$('#date_hired').datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
			});
			
			function addDatepickerInTable(){
				$('.birth_date_table').datepicker({
					format: 'yyyy-mm-dd',
					autoclose: true,
				});
			}
			addDatepickerInTable();
			
			$('#birthday').datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
			});
			
			$('#from_date').datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
			});
			$('#to_date').datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
			}); 
			
			$('.date_picker').datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
			});
			
			$('.year_picker').datepicker({
				format: 'yyyy',
				autoclose: true,
			});
			
			$('#date_interview').datetimepicker({
				format: 'yyyy-mm-dd H:i:s',
				autoclose: true,
			});
			/* $('#to_date').datetimepicker({
				format: 'yyyy-mm-dd H:i:s',
				autoclose: true,
				useCurrent: false
			});
			$('#from_date').datetimepicker({
				format: 'yyyy-mm-dd H:i:s',
				autoclose: true,
				useCurrent: false
			});
			$("#from_date").on("dp.change", function (e) {
				$('#to_date').data("DateTimePicker").minDate(e.date);
			});
			$("#to_date").on("dp.change", function (e) {
				$('#from_date').data("DateTimePicker").maxDate(e.date);
			}); */ 
		});
	</script>
	
		<script type="text/javascript">
			
			/* window.onload = function () {
				var chart1 = document.getElementById("line-chart").getContext("2d");
				window.myLine = new Chart(chart1).Line(lineChartData, {
				responsive: true,
				scaleLineColor: "rgba(0,0,0,.2)",
				scaleGridLineColor: "rgba(0,0,0,.05)",
				scaleFontColor: "#c5c7cc"
				});
			}; */
		</script>
		
	</body>
</html>