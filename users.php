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
                    <div class="col-sm-8"><h2>User Details</b></h2></div> <div class="col-sm-4">
                      <input id="search" name="name" class="input-text js-input" type="text" placeholder="Search " required  /> 
           
                     <a href="uadd.php" > <button type="button" class="btn btn-info add-new" ><i class="fa fa-plus"></i> Add New</button></a>
                    </div>
                </div>
            </div>
            <?php
                $query = "SELECT * FROM users";
                $query_run = mysqli_query($conn, $query);
            ?>
             <table class="table table-bordered">
                <thead>
                    <tr>
                    <th> ID </th>
                    <th> Username </th>
                    <th>Email </th>
                    <th>Actions</th>
                 
                    </tr>
                </thead>
                    <tbody id="cont">
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                $_SESSION['ID']=$row['ID'];
                        ?>
                            <tr>
                                <td><?php  echo $_SESSION['ID']; ?></td>
                                <td><?php  echo $row['UName']; ?></td>
                                <td><?php  echo $row['Email']; ?></td>
                            
                                    
                       
                                <td>
                        
                        <a class="edit" href="uum.php" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a class="delete" href="ud.php" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </td>        
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
table.table {
    table-layout: fixed;
    width: 100%;
}

table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    font-size: 13px;
}
.input-text .js-input{
border-color:none;
border-radius: 1rem;
margin-left:5%;
}
.table-title .add-new {
    float: right;

    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
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


           
        