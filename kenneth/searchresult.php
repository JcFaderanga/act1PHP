<!DOCTYPE html>
<html>
<head>
	<title></title>
       
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.table-btn{
    width:100%;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
        max-width: 50px;
}
.table-btn span{
    display: flex;
    justify-content: center;
    color: white;
    padding: 10px 15px;
    margin: 10px;
    border-radius: 15px;
    trasition: .2s;
    box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
}
.table-btn span:hover{
    transform: scale(1.05);
}
</style>
<body>
<div class="table-header">
           		<a href="create.php"><button type="submit" name="login" class="btn btn-default">Add Student</button></a>
           	</div>
<div>
<?php
   require('connections.php');
      $return = '';
       if(isset($_POST["query"]))
       {
           $search = mysqli_real_escape_string($connections, $_POST["query"]);
           $query = "SELECT * FROM crud
           WHERE id LIKE '%".$search."%'
           OR firstname LIKE '%".$search."%' 
           OR surname LIKE '%".$search."%' 
           OR address LIKE '%".$search."%' 
           ";}
       else{
               $query = "SELECT * FROM crud";
           }
        $result = mysqli_query( $connections, $query);
       if(mysqli_num_rows($result) > 0){
    $return .='
               <div class="table-wrapper">
                   <table class="table table-striped" id="myTable">
                     <thead>
                       <tr>
                         <th>Id</th>
                         <th>First Name</th>
                         <th>Surname</th>
                         <th>Address</th>
                         <th>Action</th>
                      </tr>
                     </thead>';
                    while($row = mysqli_fetch_array($result)){
                        $return .='
                                <tr>
                                  <td>'.$row["id"].'</td>
                                  <td>'.$row["firstname"].'</td>
                                  <td>'.$row["surname"].'</td>
                                  <td>'.$row["address"].'</td>
                                  <td>'."<div class='table-btn'>
                                  <a href='read.php?id=". $row['id'] ."' class='mr-3' title='Read Record' data-toggle='tooltip'>
                                  <span style='background: blue;'class='fa fa-eye'></span>
                                  </a>
                                  <a href='update.php?id=". $row['id'] ."' class='mr-3' title='Update Record' data-toggle='tooltip'>
                                  <span style='background: green;' class='fa fa-pencil'></span>
                                  </a>
                                  <a href='delete.php?id=". $row['id'] ."' class='mr-3' title='Delete Record' data-toggle='tooltip'>
                                  <span style='background: red;' class='fa fa-trash'></span>
                                  </a>
                                  </div>".'</td>
                                </tr>';      
                    }
          echo $return;
          
        }else{
            echo 'No results containing all your search terms were found.';
        }


        /*<td>'."<div class='btn-view'><span id='view-button' name='view'>Click to view</span></div>".'</td>*/
     ?>
</div>
</body>
</html>
