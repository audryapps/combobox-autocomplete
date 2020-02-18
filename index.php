<?php

//index.php

include('database_connection.php');

$query = "SELECT * FROM apps_countries ORDER BY country_name ASC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();


?>
<html>

<head>
    <title>
        Combobox
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link href="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.js"></script>    
    
</head>

<body>

    <div class="container">
        <br />
        <br />
        <br />
        <h2 align="center">Combobox</h2><br />
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form method="post" id="sample_form">
						<div class="form-group">
							<label>Select Country</label>
							<select  name="country" class="form-control" id="country">
                               <?php
                                include('select_input.php');
                                ?>
							</select>
						</div>
					</form>
            <br />
            
        </div>

    </div>
</body>
<script>

    $('#country').editableSelect( );


</script>
</html>

    