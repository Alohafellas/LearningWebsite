<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Student Details</b></h2></div>
                    <input id="search" name="name" class="input-text js-input" type="text" placeholder="Search " required  /> 
                </div>
            </div>
            <?php
                $query = "SELECT * FROM registration";
                $query_run = mysqli_query($conn, $query);
            ?>
             <table class="table table-bordered">
                <thead>
                    <tr>
                    <th> ID </th>
                    <th> Username </th>
                    <th> Gender </th>
                    <th>Email </th>
                 
                    </tr>
                </thead>
                    <tbody id="cont">
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['ID']; ?></td>
                                <td><?php  echo $row['UName']; ?></td>
                                <td><?php  echo $row['Gender']; ?></td>
                                <td><?php  echo $row['Email']; ?></td>
                            
                                    
                       
                                    
                        </tr>
                           
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                               
                </tbody>
            </table>
        </div>
    </div>
</div>     
</body>
</html>


<style>
body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 700px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
table .table {
    table-layout: fixed;
}

.input-text .js-input{
border-color:none;
border-radius: 1rem;
margin-left:-25%;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    font-size: 13px;
}
table.table th i {
    font-size: 10px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    

table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
 
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}

</style>
<script>
    $(document).ready(function() {
                $("#search").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#cont tr").filter(function() {
                        $(this).toggle($(this).text()
                        .toLowerCase().indexOf(value) > -1)
                    });
                });
            });


</script>


           
        