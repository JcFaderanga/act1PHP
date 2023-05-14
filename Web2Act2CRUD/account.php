<!DOCTYPE html>
<html>
<head>
	<title></title>
     <!--FOTNS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300&display=swap" rel="stylesheet">
    <!--ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
table{
    text-align:center;
}
.btn-account{
    display: flex;
    justify-content: center;
    align-items: center;
    height:50px;
}
.btn-account span{
    padding: 5px 15px;
    color:white;
    margin: 10px;
    display:flex;
    border-radius: 4px;
    font-size: 17px;
    align-items: center;
    font-family: 'Poppins', sans-serif;
}
.btn-account span:first-child{
    background: rgb(0,128,0);
    border:1px solid  #155615;
}
.btn-account span:last-child{
    background: rgb(255,0,0);
    border:1px solid #932323;
}
</style>
<body>
 <?php
   require('connections.php');
      $return = '';
       if(isset($_POST["query"]))
       {
           $search = mysqli_real_escape_string($connections, $_POST["query"]);
           $query = "SELECT * FROM tbl_informations
           WHERE 
          id LIKE '%".$search."%' 
           OR username LIKE '%".$search."%'
           OR password LIKE '%".$search."%'
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
                         <th>#</th>
                         <th>Username</th>
                         <th>Password</th>
                         <th>Action</th>
                         
                      </tr>
                     </thead>';
                    while($row = mysqli_fetch_array($result)){
                        $return .='
                                <tr>
                                  <td>'.$row["id"].'</td>
                                  <td>'.$row["username"].'</td>
                                  <td>'.$row["password"].'</td>
                                  <td>'."<div class='table-btn'><a href='updateaccount.php?id=". $row['id'] ."' class='mr-3' title='Update Record' data-toggle='tooltip'><span style='background: green;' class='fa fa-pencil'></span></a>
                                  <a href='delete.php?id=". $row['id'] ."' class='mr-3' title='Delete Record' data-toggle='tooltip'><span style='background: red;' class='fa fa-trash'></span></a>
                                  </div>".'</td>
                                  
                                </tr>';      
                    }
          echo $return;
          
        }else{
            echo 'No results containing all your search terms were found.';
        }
     ?>
</body>
</html>