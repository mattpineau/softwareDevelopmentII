<?php
$debug = true;

#################### Inserts a record into the prints table #######################

function insert_record($dbc, $name, $price) {
  $query = 'INSERT INTO prints(name, price) VALUES ("' . $name . '" , ' . $price . ' )' ;
  show_query($query);

  $results = mysqli_query($dbc,$query) ;
  check_results($results) ;

  return $results ;
}

####################################################################################

####################### Shows the query as a debugging aid #########################
function show_query($query) {
  global $debug;

  if($debug)
    echo "<p>Query = $query</p>" ;
}

#####################################################################################

################### Checks the query results as a debugging aid ######################
function check_results($results) {
  global $dbc;

  if($results != true)
    echo '<p>SQL ERROR = ' . mysqli_error( $dbc ) . '</p>'  ;
}

####################################################################################

########################### Display Records as Links #################################

function show_link_records($dbc) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT stuff_id, update_date, status, item FROM stuff ORDER BY update_date DESC';

	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		echo '<h3>Most Recent Items</h3>';
                 echo '<table border = "1">';
                 echo '<tr>';
                 echo '<th>Date Updtated</th>';
                 echo '<th>Status</th>';
                 echo '<th>Item</th>';
                 echo '</tr>';

  		# For each row result, generate a table row
  		while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  		{
    		echo '<TR>' ;
    		$alink = '<A HREF=item_info.php?id=' . $row['stuff_id'] . '>' . $row['item'] . '</A>';
            echo '<TD>' . $row['update_date'] . '</TD>' ;
    		echo '<TD>' . $row['status'] . '</TD>' ;
            echo '<TD Align=right>' . $alink . '</TD>';
    		echo '</TR>' ;
  		}

  		# End the table
  		echo '</TABLE>';

  		# Free up the results in memory
  		mysqli_free_result( $results ) ;
	}
}

######################################################################################

############################### Display the Entire Record###########################
function show_record($dbc, $id) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT lost_found_date, status, location, item FROM stuff WHERE stuff_id = ' .$id ;

	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		echo '<H1>Is this yours?</H1>' ;
  		echo '<TABLE border= "1">';
  		echo '<TR>';
  		echo '<TH>Lost/Found Date</TH>';
  		echo '<TH>Status</TH>';
        echo '<TH>Location</TH>';
        echo '<TH>Item</TH>';
  		echo '</TR>';

  		# For each row result, generate a table row
  		while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  		{
    		echo '<TR>' ;
    		echo '<TD>' . $row['lost_found_date'] . '</TD>' ;
    		echo '<TD>' . $row['status'] . '</TD>' ;
            echo '<TD>' . $row['location'] . '</TD>' ;
            echo '<TD>' . $row['item'] . '</TD>' ;
    		echo '</TR>' ;
  		}

  		# End the table
  		echo '</TABLE>';

  		# Free up the results in memory
  		mysqli_free_result( $results ) ;
	}
}

##########################################################################################
?>