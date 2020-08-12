<?php
	function display_db_table( $tablename, $connect) {
		$query = "SELECT * FROM $tablename";
		display_db_query( $query, $connect, True, 2);
	}

	function get_max_db_table( $tablename, $connect, $maxsearch) {
		$query = "SELECT Max($maxsearch) FROM $tablename";
		$result = mysqli_query( $connect, $query);
		while($row = $result->fetch_assoc()) {
			$columns = array_keys($row);
			foreach( $columns as $column ) {
				$max = $row[$column];
				return($max);
			}
		}
	}

	function display_db_query( $query, $connect, $Head, $Border ) {
		$result = mysqli_query( $connect, $query);
		print ("<center>");
		print( "<table border=$Border>\n" );
		If($Head){
			print( "<tr>\n" );
			while ($fieldinfo=mysqli_fetch_field($result))
			printf("<td><b>$fieldinfo->name</b></td>");
			print( "</tr>\n" );
		}
		while( $row = $result->fetch_assoc() ) {
			$columns = array_keys($row);
			foreach( $columns as $column ) {
				print( "<td>{$row[$column]}</td>" );
			}
			print( "</tr>\n" );
		}
		print( "</table>\n" );
		print ("</center>");
	}
?>