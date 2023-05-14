<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--FOTNS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300&display=swap" rel="stylesheet">
    <!--ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="main.css">
<style>
*{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
/*table{
	width:100%;
    border:none;
    gap:0;

}
th{
	color:white;
	background: #1f1f1f;
	height: 50px;
	font-weight: 400;
    border:none;
}
td{
	padding-left: 10px;
	padding-right: 10px;
    border:none;
}
tr:nth-child(odd){
	background: rgba(18,18,18,0.1);
}*/
</style>
</head>
<body>   
    <div class="container">
        
         <div class="search-content">  
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
else
{
   
    $query = "SELECT * FROM tbl_informations";
}
$result = mysqli_query( $connections, $query);
if(mysqli_num_rows($result) > 0)
{
    $return .='
    <div class="table-wrapper">
    <table class="fl-table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Emp Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Created Date</th>
    </tr>
    </thead>';
    while($row1 = mysqli_fetch_array($result))
    {
        $return .= '
        
        <tr>
        <td>'.$row1["username"].'</td>
        <td>'.$row1["password"].'</td>
        <td>'.$row1["firstname"].'</td>
        <td>'.$row1["surname"].'</td>
        <td>'.$row1["address"].'</td>
        </tr>';
    }
    echo $return;
    }
else
{
    echo 'No results containing all your search terms were found.';
}
?>
</table>
</div>
</div>
        </section>
    </div>
    <script>
    var show = false;
	function expandSideBar(){
	if(show == false){
		document.querySelector('.sidebar').classList.add('active');
		document.querySelector('.sidebar').classList.remove('remove');
		return show = true;
	}else{
		document.querySelector('.sidebar').classList.remove('active');
		document.querySelector('.sidebar').classList.add('remove');
		return show = false;
	}
}	
document.getElementById('menu').onclick = function(){
	expandSideBar();
};

const icons = document.querySelectorAll('.icon');
icons.forEach (icon => {  
  icon.addEventListener('click', (event) => {
   expandSideBar();
  });
});

</script>
</body>
</html>