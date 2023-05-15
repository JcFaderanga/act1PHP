<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--FOTNS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300&display=swap" rel="stylesheet">
  <!--ICONS-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!--BOOTSRAP-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	*{
    padding: 0;
    margin: 0;  
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
    font-family: 'Poppins', sans-serif;
  }
  *::before, *::after{
    padding: 0;
    margin: 0;  
    box-sizing: border-box;
  }
  html{
    scroll-behavior: smooth;
  }
  :root{
		--dark-violet:rgba(17,0,44);s
		--violet:rgba(157,78,221);
	}
	body{
	 background-image: url("https://wallpapercave.com/wp/wp5126947.jpg");
	 background-size: cover;
	}
	.continer-fluid{
		height: 100vh;
		display: flex;

	}
	.sidebar{
		width: 300px;
		height: 100%;
		border-right: 1px solid black;
		display: none;
	}
	.-inner-container{
		width: 100%;
		height: 100%;
		
	}
	nav{
		height: 60px;
		width: 100%;
		border-bottom: 1px solid #333;
		backdrop-filter: blur(20px);
		background: rgba(255,255,255,0.5);
		display: flex;
		align-items: center;
		justify-content: space-between;
	}
	nav span{
		font-size: 20px;
	}
	nav i{
		font-size: 40px;
		cursor: pointer;
		margin: 0 20px;
			}

	.left-side{
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.right-side{
        display: flex;
        align-items: center;
	}
	.right-side li{
		margin: 20px;
		cursor: pointer;
	}
	.sidebar ul{
		margin-top: 100px;
    width: 100%;
   
}
.sidebar{
	backdrop-filter: blur(20px);
		background: rgba(255,255,255,0.5);
}
.sidebar ul a{
	text-decoration: none;
}
.sidebar ul li{
    width: 100%;
    color: #1f1f1f;
    padding-left: 13px;
    display: flex;
    align-items: center;
    margin: 20px 0;
    cursor: pointer;
}
.sidebar ul li label{
    cursor: pointer;
    font-weight: 400;
    font-size: 20px;
    margin-bottom: 0;

}

.sidebar ul li i{
    font-size: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 20px;
    height: 50px;

}
.sidebar ul li:hover{
    background: #1f1f1f;
    color: white;
}
.-content{
	width: 100%;
	height: calc(100% - 60px);
}
.-content label{
	font-size: 40px;
	color: rgb(0,0,0, 0.3);
}
.seacrh-header{
	width: 100%;
	height: 100px;
	display: flex;
	justify-content: center;
	align-items: center;
	background: rgba(0,0,0, .07);
}
.search-bar-div{
  height: 50px;
  max-width: 600px;
  width: 100%;
  border-radius: 25px;
  display: flex;
  justify-content: space-between;
  padding:0 25px 0 20px ;
  align-items: center;
  -webkit-animation: search 3s ease;
  display: flex;
}
.search-bar-div li{
	display: flex;
}
.search-bar-div li i{
	font-size: 30px;
	color: #333;
}
.table-header{
	width: 100%;
	height: 100px;
    display: flex;
    margin-left: 10px;
    align-items: center;
}
.table-div{
	max-width: 1100px;
	width: 100%;
	margin:0 auto;
	box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
}
</style>
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
                
                <li id="search-btn" class="icon">
                    <i class='bx bx-search-alt'></i>
                    <label>Search</label>
                </li>
                <a href="create.php">
                <li id="add-account-btn" class="icon">
                 <i class='bx bx-plus'></i>
                  <label>Add Person</label>
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
				<a href="index.html">
                	<li>Home</li>
                </a>
				<li>Log Out</li>
			</div>
		</nav>
		<div class="-content">
			<div class="seacrh-header">
				<div class="search-bar-div">
               <li><i class='bx bx-search-alt'></i></li>
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
			document.querySelector(".sidebar").style.display = "block";
			return show = true;
		}else{
            document.querySelector(".sidebar").style.display = "none";
            return show = false;
		}
       
	}
</script>
</body>
</html>