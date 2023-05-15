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

.table-btn span:hover{
    transform: scale(1.05);
}
.header-crud{
    height: 50px;
    display:flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    border-bottom: #333;
}
table{
    background:#9ED8DB;
}
table tr{
  background:#1D3354;
}
table td{
    vertical-align: inherit !important;
}
table tr:nth-child(even){
    background:#B5E1E3;
}
table tr:nth-child(odd){
    background:#B5E1E3;
}
.table-btn span{
    font-size: 20px;
    color:#1D3354;
    padding: 10px;
}
table tr:hover{
  
    transform: scale(1.005);
    box-shadow: rgb(14 30 37 / 12%) 0px 2px 4px 0px, rgb(14 30 37 / 32%) 0px 2px 16px 0px;

}
</style>
<body>

<?php
   require('connections.php');
      $return = '';
       if(isset($_POST["query"]))
       {
           $search = mysqli_real_escape_string($connections, $_POST["query"]);
           $query = "SELECT * FROM register
           WHERE id LIKE '%".$search."%'
           OR username LIKE '%".$search."%' 
           OR password LIKE '%".$search."%' 
           OR gmail LIKE '%".$search."%' 
           ";}
       else{
               $query = "SELECT * FROM register";
           }
        $result = mysqli_query( $connections, $query);
       if(mysqli_num_rows($result) > 0){
    $return .='
               <div class="table-wrapper">
                   <table class="table table-striped" id="myTable">
                     <thead>
                       <tr>
                         <th>#</th>
                         <th>Username</th>
                         <th>Password</th>
                         <th>Gmail</th>
                         <th>Action</th>
                      </tr>
                     </thead>';
                    while($row = mysqli_fetch_array($result)){
                        $return .='
                                <tr>
                                  <td>'.$row["id"].'</td>
                                  <td>'.$row["username"].'</td>
                                  <td>'.$row["password"].'</td>
                                  <td>'.$row["gmail"].'</td>
                                  <td>'."<div class='table-btn'>
                                  <a href='readacc.php?id=". $row['id'] ."' class='mr-3' title='Read Record' data-toggle='tooltip'>
                                  <span style=''class='fa fa-eye'></span>
                                  </a>
                                  <a href='updateacc.php?id=". $row['id'] ."' class='mr-3' title='Update Record' data-toggle='tooltip'>
                                  <span style='' class='fa fa-pencil'></span>
                                  </a>
                                  <a href='deleteacc.php?id=". $row['id'] ."' class='mr-3' title='Delete Record' data-toggle='tooltip'>
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
