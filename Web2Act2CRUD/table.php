<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php 
require('connections.php');
      $return = '';
       if(isset($_POST["query"]))
       {
           $search = mysqli_real_escape_string($connections, $_POST["query"]);
           $query = "SELECT * FROM tbl_informations
           WHERE id LIKE '%".$search."%'
           OR username LIKE '%".$search."%'
           OR firstname LIKE '%".$search."%' 
           OR surname LIKE '%".$search."%' 
           OR address LIKE '%".$search."%' 
           ";}
       else{
               $query = "SELECT * FROM tbl_informations";
           }
        $result = mysqli_query( $connections, $query);
       if(mysqli_num_rows($result) > 0){
    $return .='
               <div class="table-wrapper">
                   <table class="fl-table" id="myTable">
                     <thead>
                       <tr>
                         <th>Id</th>
                         <th>Username</th>
                         <th>Password</th>
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
                                  <td>'.$row["username"].'</td>
                                  <td>'.$row["password"].'</td>
                                  <td>'.$row["firstname"].'</td>
                                  <td>'.$row["surname"].'</td>
                                  <td>'.$row["address"].'</td>
                                  <td>'."<div style='display: flex; justify-content:center; align=items:center;'>
                                            <a href='read.php?id=". $row['id'] ."' class='mr-3' title='Update Record' data-toggle='tooltip'><span style='padding: 10px 20px; color: white; background: blue; border-radius:15px'>View</span></a>
                                        </div>".'</td>
                                </tr>'; 
                    }
          echo $return;
         
        }else{
            echo 'No results containing all your search terms were found.';
        }

  
        /*<td>'."<div class='btn-view'><span id='view-button' name='view'>Click to view</span></div>".'</td>*/
     ?>
</body>
</html>

