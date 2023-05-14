
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
      *{
    padding: 0;
    margin: 0;  
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
    font-family: 'Poppins', sans-serif;
      -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
  }
  *::before, *::after{
    padding: 0;
    margin: 0;  
    box-sizing: border-box;
  }
  .home{
width: 100%;
height: 100%;
overflow:scroll;
display: flex;
align-items: center;
justify-content: center;
webkit-animation: popUpShow .5s ease;  
}
.home label{
  margin-top: -100px;
  font-size: 40px;
  color: rgb(0,0,0, 0.3);

}
.search-content, .account-content, 
.add-account-content, .table-content {
    width: 100%;
    height: 100%;
    overflow:scroll;
    display: none;
    -webkit-animation: popUpShow .6s ease;  
}
@-webkit-keyframes popUpShow{
  from{
    transform: scale(.99);
  }
  to{
    transform: scale(1);
  }
}
.table-wrapper{
    width: 100%;
    margin: 0 auto;
   /* box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );*/
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    cursor: pointer;
    max-width: 100%;
    background-color: white;
    border-top: 1px solid rgb(0,0,0,.2);
}

.fl-table td, .fl-table th {
    padding: 10px 30px;
}

.fl-table td {
    font-size: 15px;
    /*border-top: 1px solid #ddd;*/
}
.fl-table tr{
    height:60px;
}
.fl-table tr:nth-child(odd){
 background:  rgb(60, 60, 253, 0.07);
}
.fl-table tr:nth-child(even){
 background: #ffff;
}
.fl-table thead{
    background: white;
}
.fl-table thead th {
    color: #000;
    background: white;
    border-bottom: 1px solid #ddd;
    white-space: nowrap;
    line-height: 2.1;
    font-size: 15px;
    font-weight: 600;
}
.fl-table thead th:nth-child(odd) {
background: white;
}
.container{
    background:#f6f6f6;
    display: flex;
    max-width: 2000px;
    width: 100%;
    margin:0 auto;
}
.sidebar{
    width: 60px;
    height: 100vh;
    box-shadow: -6px 20px 12px 1px rgb(0,0,0);
    overflow: hidden;
    padding-top: 50px;
}
.sidebar.active{
    width: 270px;
   -webkit-animation: toggleLeft .8s ease ;
    
}
@-webkit-keyframes toggleLeft {
   0% {
      opacity: 1;
      width:60px;
   }
  100% {
      opacity: 1;
         width: 270px;
  }
}
.sidebar.remove{
    width: 60px;
   -webkit-animation: toggleBack .8s ease ;
    
}
@-webkit-keyframes toggleBack {
   0% {
      opacity: 1;
      width:270px;
   }
  100% {
      opacity: 1;
         width: 60px;
  }
}
.inner-content{
    width: 100%;
    height: 100vh;
    border: 1px solid rgb(0,0,0,0.2);
    overflow: hidden;
    margin: 0 auto;
    background: white;
    align-self: center;
    justify-content: center;
    align-items: center;
}
.sidebar ul{
    height: 100%;
    width: 100%;
    

}
.sidebar ul li{
    width: 100%;
    color: #1f1f1f;
    padding-left: 13px;
    display: flex;
    white-space: nowrap;
    align-items: center;
    margin: 30px 0;
    cursor: pointer;
}
.sidebar ul li label{

    cursor: pointer;
}
.sidebar ul li i{
    font-size: 30px;
    margin-right: 20px;

}
.sidebar ul li:hover label{
    position: absolute;
    margin-left: 50px;
    background: #1f1f1f;
    color: white;
    border-radius: 5px;
    padding: 0 10px;
}
.sidebar ul li:hover i{
    transform: scale(1.03);
}
nav{
    width: 100%;
    height: 55px;
    border-bottom: 1px solid rgba(0,0,0,.2);
    display: flex;
    align-items: center;
    justify-content: space-between;
}
nav li{
  padding:10px 5px;
  color: #ddd;
}
nav .search-bar-div{
  height: 40px;
  max-width: 500px;
  width: 100%;
  border: 1px solid rgba(0,0,0, 0.3);
  border-radius: 25px;
  display: flex;
  justify-content: space-between;
  padding:0 10px;
  align-items: center;
  -webkit-animation: search 3s ease;
  display: none;
}
@-webkit-keyframes search{
  0%{
    opacity: 1;
    width: 60px;
  }
  50%{
    opacity: 1;
    max-width: 510px;
    width: 100%;
  }
  100%{
    opacity: 1;
    width: 100%;
  }
}
nav .search-bar-div li{
  display: flex;
  align-items: center;
}
nav .search-bar-div li i{
  opacity: .7;
  padding-right: 5px;
}
nav .search-bar-div input[type=search]{
  width: 100%;
  height: 100%;
  font-size: 17px;
  border: none;
  border-radius: 0 25px 25px 0;

}
nav .search-bar-div input[type=search]:focus{
  outline: none;
}
.inner-content li i{
    font-size: 35px;
    color: rgb(0,0,0, .8);
    cursor: pointer;
}
table{
	width:100%;

}
th{
	color:white;
	background: #1f1f1f;
	height: 30px;
	font-weight: 400;
}
td{
	padding-left: 10px;
	padding-right: 10px;
}
tr:nth-child(odd){
	background: rgba(0,0,0,0.1);
}
@media only screen and (max-width: 800px){
.sidebar{
    width: 0;
    height: 100vh;
    box-shadow:0;
    overflow: hidden;
    background:white;
    padding-top: 50px;
    position: sticky;
}
.sidebar.active{
    width: 140%;
   -webkit-animation: toggleLeft 1.2s ease ;
    
}
@-webkit-keyframes toggleLeft {
   0% {
      opacity: 1;
      width:0;
   }
  100% {
      opacity: 1;
         width: 140%;
  }
}
.sidebar.remove{
    width: 0;
   -webkit-animation: toggleBack .5s ease ;
    
}
@-webkit-keyframes toggleBack {
   0% {
      opacity: 1;
      width:140%;
   }
  100% {
      opacity: 1;
         width: 0;
  }
}
}
.crud-buttons{
    display: flex;
}
.crud-buttons span{
    color: white;
}
.crud-buttons span:nth-child(1){
    background: blue;
}
.crud-buttons span:nth-child(2){
    background: green;
}
.crud-buttons span:nth-child(3){
    background: red;
}
</style>
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
   
            $.ajax({
			url:"account.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('#account-result').html(data);
			}
			});

            $.ajax({
			url:"addAccount.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('#add-account').html(data);
			}
			});
            $.ajax({
			url:"table.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('#table-account').html(data);
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
    <div class="container">
        <div class="sidebar">
            <ul>
                <li id="home-btn" class="icon">
                    <i class='bx bx-home'></i>
                    <label>Home</label>
                </li> 
                <li id="search-btn" class="icon">
                    <i class='bx bx-search-alt'></i>
                    <label>Search</label>
                </li>
                <li id="account-btn" class="icon">
                    <i class='bx bx-user-circle'></i>
                    <label>Accounts</label>
                </li>
                <li id="add-account-btn" class="icon">
                 <i class='bx bx-plus'></i>
                  <label>Add account</label>
                </li>
                <li id="table-btn" class="icon">
                 <i class='bx bx-table' ></i>
                  <label>Table</label>
                </li>
            </ul>
        </div>
    <section class="inner-content">
        <nav>
           <li><i id="menu" class='bx bx-menu-alt-left'></i></li>
           <div class="search-bar-div">
               <li><i class='bx bx-search-alt'></i></li>
               <input type="search" name="search" id="search" placeholder="Search here">
           </div>
           <li><a href="login2.php"><i id="logout" title="logout" class='bx bx-log-in-circle'></i></a></li>
        </nav>
        <div class="home">
          <label>This page is empty.</label>
        </div>
        <div class="search-content" id="result"> 

       </div>
       <div class="account-content" id="account-result">
         
       </div>
       <div class="add-account-content" id="add-account">
         
       </div>
       <div class="table-content" id="table-account">
         
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
document.getElementById('home-btn').onclick = function(){
	document.querySelector('.home').style.display ="flex";
	document.querySelector('.search-content').style.display ="none";
	document.querySelector('.account-content').style.display ="none";
	document.querySelector('.search-bar-div').style.display ="none";
	document.querySelector('.add-account-content').style.display ="none";
    document.querySelector('.table-content').style.display ="none";

};
document.getElementById('search-btn').onclick = function(){
	document.querySelector('.home').style.display ="none";
	document.querySelector('.search-content').style.display ="block";
	document.querySelector('.account-content').style.display ="none";
	document.querySelector('.search-bar-div').style.display ="flex";
	document.querySelector('.add-account-content').style.display ="none";
    document.querySelector('.table-content').style.display ="none";

};
document.getElementById('account-btn').onclick = function(){
	document.querySelector('.home').style.display ="none";
	document.querySelector('.search-content').style.display ="none";
	document.querySelector('.account-content').style.display ="block";
	document.querySelector('.search-bar-div').style.display ="flex";
	document.querySelector('.add-account-content').style.display ="none";
    document.querySelector('.table-content').style.display ="none";

};
document.getElementById('add-account-btn').onclick = function(){
	document.querySelector('.home').style.display ="none";
	document.querySelector('.add-account-content').style.display ="flex";
	document.querySelector('.search-content').style.display ="none";
	document.querySelector('.account-content').style.display ="none";
	document.querySelector('.search-bar-div').style.display ="none";
    document.querySelector('.table-content').style.display ="none";
};
document.getElementById('table-btn').onclick = function(){
	document.querySelector('.home').style.display ="none";
	document.querySelector('.add-account-content').style.display ="none";
	document.querySelector('.search-content').style.display ="none";
	document.querySelector('.account-content').style.display ="none";
	document.querySelector('.search-bar-div').style.display ="flex";
    document.querySelector('.table-content').style.display ="flex";
};

/*
var showViewBtnCrudTable = false;
 document.getElementById('trash').onclick = function(){
	if (showViewBtnCrudTable == false) {
       document.querySelector('.viewing-page').style.display="flex";
       return showViewBtnCrudTable = true;
	}else{
		document.querySelector('.viewing-page').style.display="none";
		return showViewBtnCrudTable = false;
	}
};*/

/*
const icons = document.querySelectorAll('.icon');
icons.forEach (icon => {  
  icon.addEventListener('click', (event) => {
   expandSideBar();
  });
});
*/
</script>
</body>
</html>
