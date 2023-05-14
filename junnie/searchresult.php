<!DOCTYPE html>
<html>
<head>
	<title></title>
       
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  :root{
    --dark-violet:rgba(17,0,44);
    --mid-violet:rgba(60,10,109);
    --violet:rgba(157,78,221);
    --light:rgba(224,170,254);
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
    padding: 10px 15px;
    margin: 10px;
    background: var(--dark-violet);
    border: 1px solid var(--dark-violet);
    border-radius: 15px;
    trasition: .2s;
    
}
table{
    border-spacing: 0;  
    }
.table-btn span:hover{
    transform: scale(1.05);
}
table td{
    vertical-align: inherit !important;
}
table tr,th,td{
border-bottom: 1px solid var(--dark-violet);
    white-space: none;
    color: white;
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
                         <th>Name</th>
                         <th>Surname</th>
                         <th>gender</th>
                         <th>Action</th>
                      </tr>
                     </thead>';
                    while($row = mysqli_fetch_array($result)){
                        $return .='
                                <tr>
                                  <td>'.$row["id"].'</td>
                                  <td>'.$row["firstname"].'</td>
                                  <td>'.$row["address"].'</td>
                                  <td>'.$row["surname"].'</td>
                                  <td>'."<div class='table-btn'>
                                  <a href='read.php?id=". $row['id'] ."' class='mr-3' title='Read Record' data-toggle='tooltip'>
                                  <span style=''class='fa fa-eye'></span>
                                  </a>
                                  <a href='update.php?id=". $row['id'] ."' class='mr-3' title='Update Record' data-toggle='tooltip'>
                                  <span style='' class='fa fa-pencil'></span>
                                  </a>
                                  <a href='delete.php?id=". $row['id'] ."' class='mr-3' title='Delete Record' data-toggle='tooltip'>
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
