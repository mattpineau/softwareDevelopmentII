<?php
$debug = true;

# Shows the records in prints
function show_records($dbc) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT update_date, status, stuff_id FROM stuff ORDER BY update_date DESC' ;

	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;


	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		echo '<H1>Most Recent Entries:</H1>' ;
  		echo '<TABLE>';
  		echo '<TR>';
  		echo '<TH>Date/Time</TH>';
  		echo '<TH>Status</TH>';
  		echo '<TH>Item</TH>';
  		echo '</TR>';

  		# For each row result, generate a table row
  		$counter = 0;
        while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) && $counter < 5)
  		{
    		$alink = '<A HREF=limbo.php?id=' . $row['stuff_id'] . '>' . $row['item'] . '</A>' ;
            echo '<TR>' ;
    		echo '<TD>' . $row['update_date'] . '</TD>' ;
    		echo '<TD>' . $row['status'] . '</TD>' ;
    		echo '<TD>' . $alink . '</TD>' ;
    		echo '</TR>' ;
  		    $counter = $counter +1;
        }

  		# End the table
  		echo '</TABLE>';

  		# Free up the results in memory
  		mysqli_free_result( $results ) ;
	}
}
?>