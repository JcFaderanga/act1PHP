<!DOCTYPE html>
<html>
<head>
	<title></title>
       
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

  :root{
    --blue:#FF4B2B;
    --green: #FF4B2B;
    --dark-green:#FF4B2B;
  }
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
    background: var(--blue);
    padding: 10px 15px;
    margin: 10px;
    border: 1px solid var(--blue);
    border-radius: 15px;
    trasition: .2s;
    
}
.table{
  background: transparent;
}
.table-btn span:hover{
    transform: scale(1.05);
}
table{
  border-spacing: 0;
}
table td{
    vertical-align: inherit !important;
}
table tr,th,td{
    white-space: none;
    color: var(--blue);

}
.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: transparent;
}
</style>
<body>
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
                         <th>Middle Name</th>
                         <th>Last Name</th>
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
                                  <a href='readcrud.php?id=". $row['id'] ."' class='mr-3' title='Read Record' data-toggle='tooltip'>
                                  <span style=''class='fa fa-eye'></span>
                                  </a>
                                  <a href='updatecrud.php?id=". $row['id'] ."' class='mr-3' title='Update Record' data-toggle='tooltip'>
                                  <span style='' class='fa fa-pencil'></span>
                                  </a>
                                  <a href='deletecrud.php?id=". $row['id'] ."' class='mr-3' title='Delete Record' data-toggle='tooltip'>
                                  <span style='' class='fa fa-trash'></span>
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
