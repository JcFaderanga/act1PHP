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
	:root{
    --lighter-blue:#B5E1E3;
  --light-blue:#9ED8DB;
  --mid-blue:#467599;
  --dark-blue:#1D3354;
}
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
  body{
  	background: var(--lighter-blue);
  }
	.continer-fluid{
		height: 100vh;
		display: flex;

	}
	
	.-inner-container{
		width: 100%;
		height: 100%;
		
	}
	nav{
		height: 60px;
		width: 100%;
		display: flex;
		align-items: center;
		justify-content: space-between;
        box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
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
	.sidebar{
		width: 0;
		height: 100%;
		overflow: hidden;
		position: absolute;
		background: white;
		left: 0;
		background: var(--dark-blue);
	}
	.overlay{
		position: absolute;
		background: rgba(0,0,0,.5);
		backdrop-filter: blur(2px);
		display: none;
		height: 100%;
		width: calc(100% - 250px);
		top: 0;
		left: 250px;
		padding: 10px 20px;
	}
	.overlay span{
		font-size: 24px;
		color: white;
		cursor: pointer;
	}
	.sidebar ul{
		margin-top: 100px;
    width: 100%;
   
}
.sidebar ul a{
	text-decoration: none;
}
.sidebar ul li{
    width: 100%;
    color: var(--light-blue);
    padding-left: 13px;
    display: flex;
    align-items: center;
    margin: 20px 0;
    cursor: pointer;
    white-space: nowrap;
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
    background: var(--lighter-blue);
    color: var(--dark-blue);
}
.-content{
	width: 100%;
	height: 100%;
	display: flex;
}
.-content label{
	font-size: 40px;
	color: rgb(0,0,0, 0.3);
}
.add-account{
	width: 30%;
	height: 100%;
	justify-content: center;
	align-items: center;
	display: flex;
	background: var(--lighter-blue);
}
form{

}
.table-div{
	width: 100%;
	height: 100%;
    	box-shadow: var(--dark-blue) -3px 6px 10px -9px;
     

}
 .form-group{
      margin: 20px auto;
      width: 300px;
    }
    .form-group:last-child{
      margin-top: 35px;
    }
    .form-group label{
    font-weight: 400; 
    font-size: 18px;
    color: var(--dark-blue);
    }
  .form-control{
    width: 300px;
    height: 40px;
    color: var(--dark-blue);
    font-size: 16px;
    border-radius: 15px;
    border: 1px solid var(--dark-blue);
  }
  .form-control::placeholder{
    color: var(--dark-blue);

  }
  .form-control:focus{
    color: var(--dark-blue);
    box-shadow: rgba(29, 51, 84, .3) 0px 2px 4px 0px, rgba(29, 51, 84, .4) 0px 2px 16px 0px;
         border: 1px solid var(--dark-blue);
  }
  .btn{
   background-color: var(--mid-blue);
   color:white;  
   width: 100%;
   padding:10px 35px;
   border-radius: 5px;
   border:1px solid var(--mid-blue);
   transition: .1s;
  }
  .btn:hover{
     background-color: var(--dark-blue);
    color:white;

  }
  .searchbar{
  	height: 100px;
  	width: 100%;
  	display: flex;
	justify-content: center;
	align-items: center;
  }
  .searchbar .form-control{
	border-radius: 10px;
	height: 40px;
	width: 600px;
}
.searchbar .form-control:focus{
	color: var(--dark-blue);
	box-shadow: rgba(29, 51, 84, .3) 0px 2px 4px 0px, rgba(29, 51, 84, .4) 0px 2px 16px 0px;
    border: 1px solid var(--dark-blue);
}
.right-side .add-account-btn{
    padding: 10px 20px;
    font-size: 15px;
    border: var(--dark-blue);
    border-radius: 20px;
    color: white;
    background: var(--dark-blue);
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
                <a href="index.php">
                	<li id="home-btn" class="icon">
                    <i class='bx bx-home'></i>
                    <label>Home</label>
                </li> 
                </a>
                <a href="index2.php">
                <li id="add-account-btn" class="icon">
                 <i class='bx bx-plus'></i>
                  <label>CRUD App table</label>
                </li>
                </a>
              </ul>
        </div>
	<div class="-inner-container">  
	  	<nav>
			<div class="left-side">
			   <i id="menu" class='bx bx-menu'></i>
			   <span>Account CRUD Page</span>
			</div>
			<div class="right-side">
					<a href="index2.php"><li>View CRUD</li></a>
                <a href="landingpage.html"><li>Logout</li></a>
				<li>
                  <a href="add account.php" <span class="add-account-btn">
                      Add Account  
                   </span></a>
                </li>
			</div>
		</nav>
		<div class="overlay"><span id="exit">x</span></div>
		<div class="-content">
		
			<div class="table-div">
				<div class="searchbar">
					<input type="search" class="form-control" id="search" placeholder="Search here" name="search">
				</div>
				<div id="result" class="table">
					
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var show = false;
	document.querySelector("#menu").onclick = function(){
		document.querySelector(".sidebar").style.width = "250px";
        document.querySelector(".overlay").style.display = "block";
	}
	document.getElementById('exit'). onclick = function(){
		document.querySelector(".sidebar").style.width = "0";
        document.querySelector(".overlay").style.display = "none";
	}
</script>
</body>
</html>