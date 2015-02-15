<head>
		<link rel="stylesheet" type="text/css" href="./DataTables Bootstrap 3 example_files/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./DataTables Bootstrap 3 example_files/dataTables.bootstrap.css">
		<script type="text/javascript" language="javascript" src="./DataTables Bootstrap 3 example_files/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" language="javascript" src="./DataTables Bootstrap 3 example_files/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="./DataTables Bootstrap 3 example_files/dataTables.bootstrap.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable();
			} );
		</script>
</head>
<body>
<div class="container">
<?php
$link = mysql_connect("localhost", "root", "");
mysql_select_db("investor_poc", $link);
$result = mysql_query("SELECT sid, accNo, fName, mName, lName FROM tb_investor", $link);
?>
        <table id="example" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
            <thead>
                <tr role="row">
                    <th class="sorting ui-state-default sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 248px;">
                        <div class="DataTables_sort_wrapper">SID
                            <span class="DataTables_sort_icon css_right ui-icon ui-icon-triangle-1-n"></span>
                        </div>
                    </th>
                    <th class="sorting ui-state-default" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 380px;">
                        <div class="DataTables_sort_wrapper">Account Number
                            <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
                        </div>
                    </th>
                    <th class="sorting ui-state-default" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 185px;">
                        <div class="DataTables_sort_wrapper">First Name
                            <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
                        </div>
                    </th>
                    <th class="sorting ui-state-default" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 149px;">
                        <div class="DataTables_sort_wrapper">Middle Name
                            <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
                        </div>
                    </th>
					<th class="sorting ui-state-default" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 149px;">
                        <div class="DataTables_sort_wrapper">Last Name
                            <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
                        </div>
                    </th>
					<th class="sorting ui-state-default" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 149px;">
                        <div class="DataTables_sort_wrapper">
                            <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
                        </div>
                    </th>
					<th class="sorting ui-state-default" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 149px;">
                        <div class="DataTables_sort_wrapper">
                            <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
				<?php
					while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
					$sid = $row['sid'];
					echo "<tr>";
					echo "<td>" . $row["sid"] . "</td>";
					echo "<td>" . $row["accNo"] . "</td>";
					echo "<td>" . $row["fName"] . "</td>";
					echo "<td>" . $row["mName"] . "</td>";
					echo "<td>" . $row["lName"] . "</td>";
					echo "<td><a href= delete.php?sid=$sid> Delete </a></td>";
					echo "<td><a href= browse.php?sid=$sid> Detail </a></td>";
					echo "</tr>";
					}
				?>
            </tbody>
        </table>
        <div class="fg-toolbar ui-toolbar ui-widget-header ui-helper-clearfix ui-corner-bl ui-corner-br">
    </div>
	<script type="text/javascript">
	// For demo to fit into DataTables site builder...
	$('#example')
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
</script>
	</div>
</body>