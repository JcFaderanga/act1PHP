<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="search.css">
  
  
</head>

<script>
	$(document).ready(function(){
		load_data();
		function load_data(query)
		{
			$.ajax({
			url:"searchresult.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
			});

		}

		$('#search').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
		});
	});
	</script>
<body>
<div class="continer-fluid ">
	<div class="sidebar">
            <ul>
                <a href="index.html">
                	<li id="home-btn" class="icon">
                    <i class='bx bx-home'></i>
                    <label>Home</label>
                </li> 
                </a>
                <a href="create.php">
                <li id="" class="icon">
                <i class='bx bx-user-plus' ></i>
                  <label>Create</label>
                </li>
                </a>
            </ul>
        </div>
	<div class="-inner-container">
		<nav>
			<div class="left-side">
			   <i id="menu" class='bx bx-menu'></i>
			   <span>Search</span>
			</div>
            
			<div class="right-side">
				<li></li>
				<li>Log Out</li>
			</div>
		</nav>
		<div class="-content">
			<div class="seacrh-header">
				<div class="search-bar-div">
               <input type="search" class="form-control" id="search" placeholder="Search here" name="search">
                </div>
           </div>
           <div id="result" class="table-div">
           	
           	
           </div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var show = false;
	document.querySelector("#menu").onclick = function(){
		if(show == false){
			document.querySelector(".sidebar").style.width = "300px";
			return show = true;
		}else{
            document.querySelector(".sidebar").style.width = "0";
            return show = false;
		}
       
	}
</script>
</body>
</html>