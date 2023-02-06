
<?php include_once 'dbconfig.php'; ?> 
<?php include_once 'header.php'; ?>

<div class="container">

    <a href="add-data.php" class="btn btn-large btn-info">
        <i class="glyphicon glyphicon-plus"></i> &nbsp; Add New student
    </a>
</div>
<br />
<div class="container"> 
    
	<table class='table table-bordered table-responsive'> 
        <tr>
            <th>Roll NO</th>
            <th>First name </th>
            <th>Surname</th>
            <th>E-mail</th>
            <th>Phone No.</th>
            <th colspan="2" align="center">Actions</th>
        </tr>
        <?php    
		  $crud->dataview("SELECT * FROM tbl_users"); 
	    ?>
    </table> 
</div>
<?php include_once 'footer.php'; ?> 