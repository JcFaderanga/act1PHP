
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <!--FOTNS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300&display=swap" rel="stylesheet">
    <!--ICONS-->
</head>
<style>
.viewing-page{
  width: 100%;
  height: 100%;/*250px*/
  background:rgba( 0, 0, 0, 0.5 );
  backdrop-filter: blur( 2px );
  position: absolute;
  display: none;
  overflow: hidden;
  right: 0;
}
.page-holder{
    float: right;
    width:50%;
    height:100%;
}
.viewing-page-header{
  height: 50px;
  width: 100%;
  border-bottom: 1px solid rgb(0,0,0,0.1);
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
}
.viewing-page-header span:nth-child(2){
  cursor: pointer;
  color:red;
}
.viewing-page-input-box{
  margin-left: 60px;
  display: flex;
  max-width: 100%;
  width: 100%;
  height: calc(100% - 50px);
}
.viewing-page-input-box span{
  display: block;
  margin: 10px 0;
}
.viewing-page-input-box .details{
  display: flex;
}
.viewing-page-input-box .box {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}.viewing-page-input-box .box:nth-child(2){
  display: block;
  margin: 20px 0;
}
.details label{
  width: 100px;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  height:50px;
}

.details .input-box{
 margin: 10px;

}
textarea {
    width: 200px;
    height: 100px;
     font-size: 17px;
    border: none;
     font-weight: 600;
}
.input-box input{
  height: 30px;
   font-weight: 600;
  font-size: 17px;
  background: white;
  border: none;
}
#view-button{
    font-family: 'Poppins', sans-serif;
    color: blue;
    display: flex;
    align-items: center;
    white-space: nowrap;
    align-self: center;
    color:blue;
    cursor: pointer;
   /* padding:5px 25px;
    color:white;
    border-radius: 5px;
    border: 1px solid blue;
    cursor: pointer;
    background: rgb(0,0,255);*/
}
.btn-view{
    width:100%;
    height: 50px;
    display:flex;
    justify-content: center;
    align-items: center;
}
.btn-crud{
  display: flex;
  justify-content: center;
  align-items: end; 
  height: 100%;
   width: 100%;
}
.btn-crud button{
  padding: 10px 20px;
  margin:20px 10px;
  border:1px solid #333;
  color: white;
  border-radius: 10px;
  cursor: pointer;
}
.btn-crud button:first-child{
  background: green;
}
.btn-crud button:last-child{
  background: red;
}
.table-btn{
    width:100%;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
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
.fl-table tr:hover{
    transform: scale(1.005);
    box-shadow: rgb(14 30 37 / 12%) 0px 2px 4px 0px, rgb(14 30 37 / 32%) 0px 2px 16px 0px;
}
</style>
<body>
    <div class="viewing-page">
      <div class="page-holder">
        <div class="viewing-page-header">
              <span>Viewing page</span>
              <span id="exit-view">Close</button>
            </div>
            <form action="delete.php" method="post"> 
              <div id="output" class="viewing-page-input-box">
                <div class="box">
                <div class="details">
                <label for="id">ID:</label>
                   <div class="input-box">
                     <input id="id" type="text" name="id" value="" >
                  </div>
               </div>
               <div class="details">
                <label for="firstname">First Name</label>
                   <div class="input-box">
                     <input id="firstname" type="text" name="firstname" value="">
                  </div>
               </div> 
               <div class="details">
                <label for="surname">Surname:</label>
                   <div class="input-box">
                     <input id="surname" type="text" name="surname" value="">
                  </div>
               </div>   
              </div> 
              <div class="box">
                <div class="details">
                <label for="address">Address:</label>
                <div class="input-box">
                     <textarea id="address" type="texterea" name="Address"></textarea>
                  </div>
               </div>
              </div>
              <div class="box">
                  <div class="btn-crud">
                  <button id="update" name="update">Update</button>
                  <button name="delete" >Delete</button>
                </div>
              </div>
              </div>
            </form>
        </div>
    </div>

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
                                  <td>'."<div class='table-btn'><a href='update.php?id=". $row['id'] ."' class='mr-3' title='Update Record' data-toggle='tooltip'><span style='background: green;' class='fa fa-pencil'></span></a>
                                  <a href='delete.php?id=". $row['id'] ."' class='mr-3' title='Delete Record' data-toggle='tooltip'><span style='background: red;' class='fa fa-trash'></span></a>
                                  </div>".'</td>
                                </tr>';      
                    }
          echo $return;
          
        }else{
            echo 'No results containing all your search terms were found.';
        }


        /*<td>'."<div class='btn-view'><span id='view-button' name='view'>Click to view</span></div>".'</td>*/
     ?>
    <script>
    /*
      var table = document.getElementById("myTable");
      var rows = table.getElementsByTagName("tr");
      for (var i = 0; i < rows.length; i++) {
        var currentRow = rows[i];
         
        currentRow.addEventListener("click", function() {
           document.querySelector('.viewing-page').style.display = "flex";
          var cells = this.getElementsByTagName("td");
          var output = document.getElementById("output");
        document.getElementById('id').value = cells[0].innerHTML;
        document.getElementById('firstname').value = cells[1].innerHTML;
        document.getElementById('surname').value = cells[2].innerHTML;
        document.getElementById('address').value = cells[3].innerHTML;
        });
      }
      
      document.getElementById('exit-view').onclick = function(){
       document.querySelector('.viewing-page').style.display = "none";
     }
 */

      </script>
</body>
</html>
        <?php 
/*

include("connections.php");

$id = $_POST['id'];

if(isset($_POST['delete'])){
    $delete_Query = "DELETE FROM tbl_informations WHERE id = '$id'";
    try{
        $delete_Result = mysqli_query($connections, $delete_Query);
        
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}
*/  
?>