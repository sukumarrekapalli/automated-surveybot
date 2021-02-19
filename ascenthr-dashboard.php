<!-- php
if (!isset($_SESSION)){
  session_start();

if($_SESSION['logged_in']!=1)
{ 

  header("Location: ./");

}
if($_SESSION['logged_in']==1)
{
?> -->

<!DOCTYPE html>
<html>

<head>
	<title>Kaiwa | Dashboard</title>
	<link rel="icon" href="./assets/images/kaiwa.ico" type="image/png">
	<!--Import Google Icon Font-->
	<link href="material-icon\css\material-icons.css" rel="stylesheet"/>
	
	<!--Import materialize.css-->
	<link rel="stylesheet" href="..\dashboard-kaiwa\materialize-v1.0.0\materialize\css\materialize.min.css">
	<link rel="stylesheet" href="..\dashboard-kaiwa\materialize-v1.0.0\materialize\css\materialize.css">
	<!--Let browser know website is optimized for mobile-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<script src="..\dashboard-kaiwa\jquery-3.5.1.min.js"></script>
	<script src="..\dashboard-kaiwa\popper.min.js"></script>
	
	<script src="./chart/js/Chart.min.js"></script>
  <script src="./chart/css/Chart.css"></script>
  <script src="./chart/css/Chart.min.css"></script>
	 <script src="..\dashboard-kaiwa\materialize-v1.0.0\materialize\js\materialize.min.js"></script>
	 <script src="..\dashboard-kaiwa\materialize-v1.0.0\materialize\js\materialize.js"></script>
	
	
<!-- Resources -->

</head>
<style type="text/css">














	nav{
		/*background-color: #3494a3;
		 /*background-image: linear-gradient(to bottom right, #185a9d, #43cea2);*/
	     background-color: #a405a0;
	}
	.content{
		
		height:100%;
	}
	
	.sidenav{
	    /*background-color: #3494a3;*/
	    background-image: linear-gradient(to bottom right, #fd576b, #a405a0);
	}
	
	/*.card-bg{
		background: rgba(0,0,0,0);
	}*/
	@media only screen and (max-width: 992px){
		.content,nav{
			padding-left: 0;
		}
	}
	

	
	
	.a{
	padding:1px;
	color:white;
	
	}

	@media (max-width: 36em) {
  .radar {
	  height: 100px;
    /* Overrides the above styles on screens larger than 36em */
  }
}

.rating{
	color:black;
	font-weight: 25px;
	font-size: 25px;
}

.num{
background-color: #ffffff00;
 font-style: italic;
 color:orange;
 font-weight: 25px;
 font-size: 18px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 4; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  /*padding: 20px;*/
  border: 1px solid #888;
  width: 90%;
  height:500px;
  z-index: 999;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.tab2,.tab3{
    z-index: -1;

    
}
.fixfixforfloat{
    z-index:-1;
}

.heatmap{
    margin-left:50px;
    padding-top:-20px;
}

@media only screen and (max-width: 600px) {
  .mob{
     padding-top:120px;
  }
}

@media only screen and (max-width: 900px) {
  .heatmap{
     margin-top:-100px;
     
  }
}

@media only screen and (max-width: 800px) {
  .heatmap1{
    text-align:center; 
     
  }
}

.floatbtn{
    z-index:1;
}

</style>
<script type="text/javascript">



	$(document).ready(function(){
		$('.sidenav').sidenav();
	});


/*tabs*/


// Or with jQuery

$(document).ready(function(){
  $('.tabs').tabs();
});

function mandate(){
    

	// Get the modal
	var modal = document.getElementById("myModal");
	
	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");
	
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];
	
	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	  modal.style.display = "block";
	}
	
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
		modal.style.display = "none";
	  }
	}
	}

$(document).ready(function(){
  $('.tabs').tabs();
});



	  
</script>


<body>
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper center-align" style="background-color:white;"><a href="#" class="" style="font-size:15px; color:purple;">BEATS</a><span style="color:purple;"> for</span><img src="./assets/images/ascenthr-logo.png" height="45px" width="auto" >
				<a href="" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons" style="color:purple;">menu</i></a>	
				<button onclick='logout()' class="white-text right hoverable" style="background-color:#ffffff00; border:none;"><i class="material-icons white-icon" style="margin-right:10px; color:purple;">power_settings_new</i></button>
			</div>
		</nav>
	</div>
	<ul class="sidenav bg" id="slide-out">
		<li>
			<div class="user-view">
				<div class="background">
					<img src="./assets/images/sidenav.jpg" width="100%">
				</div>
				<a href="#">
					<img src="./assets/images/kaiwa.png" class="circle">
				</a>	<a href="#" class="white-text name">Ascent HR</a>
				<!--	<a href="#" class="white-text email"></a>-->
			</div>
		</li>
		<li><a href="#home" class="white-text"><i class="material-icons white-icon">home</i>Home</a>
		</li>
		<li><a href="#oltj" class="white-text"><i class="material-icons white-icon">filter_center_focus</i>Overall</a>
		</li>
		<li><a href="#mood" class="white-text"><i class="material-icons white-icon">sentiment_very_satisfied</i>Mood analysis</a>
		</li>
		<li><a href="#word" class="white-text"><i class="material-icons white-icon">filter_drama</i>Text Analysis</a>
		</li>
		<li><a href="mailto:pulse@culturelytics.in" class="white-text"><i class="material-icons white-icon">mail</i>Mail us</a>
		</li>
		<li><a onclick='logout()' class="white-text"><i class="material-icons white-icon">power_settings_new</i>Logout</a>
		</li>
	</ul>
	
		
		<div class="row center-align floatbtn" style="position: fixed; align-content: center; background-color: #ffffff; width: 100%;">
		    
		    <!-- Trigger/Open The Modal -->
          <button id="myBtn" class="btn" onclick='mandate()' style="background-color:#9c27b0;margin:5px 5px">Mandate</button>

          <!-- The Modal -->
          <div id="myModal" class="modal">

             <!-- Modal content -->
             <div class="modal-content">
               <span class="close">&times;</span>
               <h6 style="color:purple" >MANDATE:</h6>
               <p>The organization is one of India's leading HR tech company with over 600 employees acress 11 locations in India. 
With GOI laying down strict lockdown measures because of COVID the management was keen to reassess employee sentiment and start conversation to refine policies around WFH and goal setting(productivity). 
Customer engagement was becoming more challenging and there was a strong sentiment to develop a customer centric culture. </p>
 <h6  style="color:purple" >PROCESS AND CUSTOMIZATION:</h6>
<p>The interactive Kaiwa chatbot was administered across all 619 employees. 
In addition to the OLTJ framework 3 new dimensions of COVID health, WFH and mood index were incorporated. 
Out of the 8 demographics the client was keen on Age, Tenure, Location, Business unit and Gender.</p>
<h6  style="color:purple" >ADMINISTRATION:</h6>
<p>The dialogue was kept open only for a week with the assumption that "engaged" employees will answer and a healthy 34% response rate was recorded. </p></p>
             </div>

           </div>
		    
		  

         



			
			<!-- Dropdown Trigger --> <a class='btn' onclick="refresh()" style="background-color:#697d91;margin:5px 5px"><i class="material-icons orange-icon">refresh</i></a>
			<a class='btn' id="sort" style="margin:5px 5px;background-color:#697d91;">View by | All</a>
			
			<input class='dropdown-trigger btn #a405a0 purple' onclick="disableothertenure()" id="tenure" type="button" href='#' data-target='dropdown1' value="Tenure" style="margin:5px 5px" />
			<input class='dropdown-trigger btn #a405a0 purple' id="age" type="button" onclick="disableotherage()" href='#' data-target='dropdown2' value="Age" style="margin:5px 5px" />
			<input class='dropdown-trigger btn #a405a0 purple' onclick="disableotherlocation()" id="location" type="button" href='#' data-target='dropdown3' value="Location" style="padding-right:40px;padding-left:40px; margin:5px 5px" />
			<input class='dropdown-trigger btn #a405a0 purple' onclick="disableotherbusiness()" id="business" type="button" href='#' data-target='dropdown4' value="Business unit" style="margin:5px 5px" />
			<input class='dropdown-trigger btn #a405a0 purple' onclick="disableothergender()" id="gender" type="button" href='#' data-target='dropdown5' value="Gender" style="margin:5px 5px" />
			<!-- Dropdown Structure -->
			<ul id='dropdown1' class='dropdown-content'>
				<li><a href="#!" onclick="tenure1()">0 to 1</a>
				</li>
				<li><a href="#!" onclick="tenure2()">2 to 4</a>
				</li>
				<li><a href="#!" onclick="tenure3()">5 to 7</a>
				</li>
				<li><a href="#!" onclick="tenure4()">8 & above</a>
				</li>
			</ul>
			<ul id='dropdown2' class='dropdown-content'>
				<li><a href="#!" onclick="age1()">19 to 23</a>
				</li>
				<li><a href="#!" onclick="age2()">24 to 27</a>
				</li>
				<li><a href="#!" onclick="age3()">28 to 31</a>
				</li>
				<li><a href="#!" onclick="age4()">32 to 35</a>
				</li>
				<li><a href="#!" onclick="age5()">36 to 40</a>
				</li>
				<li><a href="#!" onclick="age6()">40 & above</a>
				</li>
			</ul>
			<ul id='dropdown3' class='dropdown-content'>
				<li><a href="#!" onclick="bangalore()">Bangalore </a>
				</li>
				
				<li><a href="#!" onclick="coimbatore()">Coimbatore</a>
				</li>
				
				<li><a href="#!" onclick="gurugram()">Gurugram</a>
				</li>
				
				
				<li><a href="#!" onclick="mumbai()">Mumbai </a>
				</li>
				
			</ul>
			<ul id='dropdown4' class='dropdown-content'>
				
				<li><a href="#!" onclick="Business1()">Operations</a>
				</li>
				<li><a href="#!" onclick="Business2()">Technology</a>
				</li>
				<li><a href="#!" onclick="Business3()">Support</a>
				</li>
				<li><a href="#!" onclick="Business4()">Staffing</a>
				</li>
			</ul>
			<ul id='dropdown4' class='dropdown-content'>
				<li><a href="#!">one</a>
				</li>
				<li><a href="#!">two</a>
				</li>
			</ul>
			<ul id='dropdown5' class='dropdown-content'>
				<li><a href="#!" onclick="male()">Male</a>
				</li>
				<li><a href="#!"onclick="female()">Female</a>
				</li>
			</ul>
		</div>
		
	</div>
	</div>
	</div>
	<br>
	<br>
	<a id="home"></a>
	
	
	<div class="row mob" style="margin:20px 30px;">
	        
		
		<div class="col s12 m12 l6">
		    <div   class=" card-panel" style="height:50%">
			<div class="col" style="color:black; padding-right: 10px;">
				<img  style="color:black;" src="./assets/images/kaiwa.png" class="circle" height="100px" width="100px"><b>
			</div>
			<h5 class="center-align" style="font-family: Josefin Sans;color:gray;">KAIWA'S INSIGHTS</h5></b>
			<p  style="color: #000000;" class=" left-align num">Sample size | <span class="sample num" id="size" style="color:purple;">619</span>
				&nbsp;	&nbsp;	&nbsp;Response rate | <span class="percentage num " style="color:purple;" id="p" >34</span><span class="num"style="color:purple;">%</span></p>
				<p id="" style="color: #000000;"  class="num">➯ <span style="color:purple;">65%</span> of the respondents call for <span style="color:purple;">immediate improvement</span> across all dimensions 
</p>
				<p id="" style="color: #000000;"  class="num">➯ Employee <span style="color:purple;">tenure 2-4 years</span> need more attention for <span style="color:purple;">WFH scalability</span> and all parameters related to employee engagement
</p>
                <p id="" style="color: #000000;"  class="num">➯ Employees <span style="color:purple;">aged 19-23 years</span> recorded consistent low scores across all dimensions flagging an immediate <span style="color:purple;">need for positive employee experience </span>
</p>
				<p id="" style="color: #000000;"  class="num">➯ Employee engagement seems to be centered in and around HQ thereBy <span style="color:purple;">risking geographical scalability</span> in Mumbai and Gurugram </p>
<p id="" style="color: #000000;"  class="num">➯ <span style="color:purple;">Operations BU</span> shows more <span style="color:purple;">resilience</span> than other business units (BU) which calls for HR leadership to be more pronounced 
</p>

			</div>
		</div>
		
	
		<div class=" col s12 m12 l6" >
		 <div   class="card-panel" style="height:50%">
			<h5 class="center-align" style="font-family: Josefin Sans;color:gray;">RECOMMENDATIONS</h5></b>
			<br>
				<p id=""style="color: #000000;" class="num">➯ <span style="color:purple;">Induction policy</span> to incorporate new module on importance of quality <span style="color:purple;">customer service</span> and it's impact on business
				<p id="" style="color: #000000;"  class="num">➯ <span style="color:purple;">Training workshops to</span> be conducted focussing on <span style="color:purple;">collaboration</span> with in teams and with other functions. Recommended modules: <span style="color:purple;">Belbin, Bruce Tuckman</span> and <span style="color:purple;">Interpersonal skills</span> 
</p>
				<p id="" style="color: #000000;"  class="num">➯ <span style="color:purple;">Rigourous COVID health checks</span> to be administered when reporting back to office owing to <span style="color:purple;">high possibility of a potential covid hotspot</span> and asymptomatic nature of the virus
</p>
<p id="" style="color: #000000;"  class="num">➯ <span style="color:purple;">Counselling support</span> through help lines to be inititated on an <span style="color:purple;">urgent basis.</span></p>
			
			<p style="font-size:7px; color:#ffffff00;">..</p>
			<p style="font-size:7px; color:#ffffff00;">..</p>
			
			<br>
		 </div>
		</div>
		
	
	</div>

    <h5 id="oltj" style="font-family: Josefin Sans;color:gray;text-align:center;">OLTJ DIMENSIONS</h5>
	
	<div class="row">
		<div class="col s12 m12 l5">
			<div class="center-align card-panel heatmap1" style="height: 500px">
				<canvas id="mychart10" style="background-color: #ffffff00;"></canvas>
			    <p class="rating center-align"id="overall">3.25</p>
			    <br><br>
			  <div class="left-align heatmap1" style="margin-left:125px;">  <a href="./assets/images/Ascent Heatmap.jpg" class="heatmap btn purple " target="_blank" font-size="14px">HEAT MAP</a></div>
			</div>
		</div>
		<div class="col s12 m12 l7">
			<div class="card-panel center-align" style="height: 500px">
				<canvas id="mychart9" class="" data-position="top" data-tooltip=" My family members and I are healthy and are not experiencing any symptoms of COVID-19" ></canvas>
				<br>
				<div class="center-align" >  <a href="./assets/files/Recommendations.xlsx" download   class="btn purple " target="_blank" font-size="14px">RECOMMENDATIONS FOOTPRINT<span font-size="8px">(download as .xlsx)</span></a></div>
				<!--<p class="center-align rating"id="2">4.74</p>--><br>
			</div>
		</div>
	</div>
	
	
	
    <h5 style="font-family: Josefin Sans;color:gray;text-align:center;">CUSTOMIZED DIMENSIONS</h5>
	<div class="row">
		<div class="col s12 m4 l4">
			<div class="center-align card-panel">
				<canvas id="mychart" style="background-color: #ffffff00" class="" data-position="top" data-tooltip="I am able to work efficiently from home"></canvas>
			    <p class="rating center-align"id="WFH">4.21</p>
			</div>
		</div>
		<div class="col s12 m4 l4">
			<div class="card-panel center-align">
				<canvas id="mychart2" class="" data-position="top" data-tooltip=" My family members and I are healthy and are not experiencing any symptoms of COVID-19"></canvas>
				<p class="center-align rating"id="2">4.74</p>
			</div>
		</div>
		<div class="col s12 m4 l4 ">
			<div class="card-panel center-align">
				<canvas id="mychart3" class="" data-position="top" data-tooltip="just wanted to checkin, how are you feeling today?"></canvas>
				<p class="center-align rating"id="3">3.75</p>
			</div>
		</div>
	</div>
	</div>
	

	

	<div class="row">
		
		<div class="col s12 m12 l12">
			<div class="center-align #1e88e5 blue darken-1 a z-depth-2" style="margin:5px 5px;border-radius:3px">
				
					
				
			</div>
		</div>
	</div>


		
   <div id="mood" class="card-panel center-align" style="margin:10px;">
	<h5 style="font-family: Josefin Sans;color:gray;">EMPLOYEE FEELINGS </h5>
	
	<canvas class="center-align col s12" id="mychart8" height="100%"></canvas>
   </div>

<br> 
<div id="word" class="center-align">
<h5 style="font-family: Josefin Sans;color:gray;">ANALYSIS OF OPEN TEXT</h5>
<h6 style="font-family: Josefin Sans;color:gray; font-size:12px">USING NATURE LANGUAGE PROCESSING</h6>

<div class="row fixforfloat" style="margin-bottom: 10px;">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s0 m0 l1 disabled"><a href="#test1" id="tab1"> </a></li>
        <li class="tab col s6 m6 l6"><a class="active tab2" href="#test2" >The biggest challenge my company will face post COVID-19 lockdown is…</a></li>
        <li class="tab col s6 m6 l4"><a href="#test3" class="tab3">What can we do better? </a></li>
        
      </ul>
	</div>
	
	
    <div id="test1" class="col s12">
		
	</div>
    <div id="test2" class="col s12">
		<div class="row" id="word">
			<div class="col s12 m12 l3">
				<div class="center-align card-panel">
					
					<p style="color:gray;font-size: 25px;"><b>NLP Sentiment<br><span style="color: green;">67.15%</span></b></p>	
					<p style="color:gray;"><b>WFH<br><span style="color: green;">91%</span></b></p>
					<p style="color:gray;"><b>COVID Health<br><span style="color: green;">76%</span></b></p>
					<br>
					<p class="left-align"><b>NLP Sentiment Scale:</b><br><span style="color:red">■</span> Negative [ below 45% ]  <br><span style="color:orange">■</span> Neutral  [ 45% to 60%]<br><span style="color:green">■</span> Positive [ above 60% ]</p>
						
				</div>
			</div>
			<div class="col s12 m12 l6 center-align">
				<br>
				<img class="col s12" src="./assets/images/challenge.jpg" alt="Word cloud" height="80%">
				
				
			</div>
			<div class="col s12 m12 l3 ">
				<div class="card-panel center-align ">
					<!--<h5><u>Dimensions</u></h5>-->
					<p style="color:gray;font-size: 25px;"><b>OTLJ Sentiments</b></p>
					<p style="color:gray;"><b>Organization<br><span style="color: green;">62.53%</span></b></p>	
					<p style="color:gray;"><b>Team<br><span style="color: green;">80.75%</span></b></p>
					<p style="color:gray;"><b>Leadership<br> <span style="color: orange;">54%</span></b></p>
					<p style="color:gray;"><b>Job<br><span style="color: red;">41.48%</span></b></p>
					
					<br>
					<br>
					
				</div>
			</div>
		</div>
	</div>
    <div id="test3" class="col s12">
		<div class="row" id="word">
			<div class="col s12 m4 l3">
				<div class="center-align card-panel">
					
					<p style="color:gray; font-size: 25px;"><b>NLP Sentiment<br><span style="color: green;">60.42%</span></b></p>	
					<p style="color:gray;"><b>WFH Support<br><span style="color: orange;">47.66%</span></b></p>
					<p style="color:gray;"><b>COVID Health<br><span style="color: orange;">57.04%</span></b></p>
					<br>
					<p class="left-align"><b>Sentiments:</b><br><span style="color:red">■</span> Negative [ below 45 ]  <br><span style="color:orange">■</span> Neutral  [ 45 to 60]<br><span style="color:green">■</span> Positive [ above 60 ]</p>	
				</div>
			</div>
			<div class="col s12 m4 l6 center-align">
				<br>
				<img class="col s12" src="./assets/images/better.jpg" alt="Word cloud" height="80%">
				
				
			</div>
			<div class="col s12 m4 l3 ">
				<div class="card-panel center-align ">
					<!--<h5><u>Dimensions</u></h5>-->
					<p style="color:gray;font-size: 25px;"><b>Most Desired</b></p>
					<p style="color:gray;"><b>Technology support<br><span style="color: orange;">57.04%</span></b></p>	
					
					<p style="color:gray;"><b>HR Processes and Policies<br><span style="color: green;">62.61%</span></b></p>
					
					<p style="color:gray;"><b>Culture<br> <span style="color: green;">65.93%</span></b></p>
					<br>
					<br><br><br><br>
					
					
				</div>
			</div>
		</div>
	</div>
    
  </div>
        
 

		<!--JavaScript at end of body for optimized loading-->
		<script>


 

//tooltip

 function mumbai(){
 var WFH_Adaptability= 3.86;
 var COVID_Health=4.86;
 var Mood=3.71;
  var Organization=3.25;
 var Team=3.50;
 var Leadership=3.13;
 var Job=3.25;
 
 var anxiety=14.29;
 var happy=14.29;
 var depression=0.00;
 var fear=0;
 var fun=0;
 var anger=14.29;
 var frustration=28.57;
 var engaged=42.86;
 var managable=71.43;
 var easy=0;
/* 14.29%
14.29%
0.00%
0.00%
0.00%
14.29%
28.57%
42.86%
71.43%
0.00%*/



 document.getElementById("sort").innerHTML = "View by | Location| Mumbai";
//  document.getElementById("kaiwainsight").innerHTML ="➯WFH adaptability among the Mumbai location had the lowest rating (<4 on 5) across all dimensions";
//  document.getElementById("kaiwainsight2").innerHTML ="➯Mumbai resonated least with the leadership dimension. They intend to receive higher levels of communication around decsions and directions from the leadership.";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="17.95";
 document.getElementById("size").innerHTML="39";
 
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;

 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();



 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();
 
 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
 
};

function bangalore(){
 var WFH_Adaptability= 4.15;
 var COVID_Health=4.70;
 var Mood=3.72;
 var Organization=3.19;
 var Team=3.24;
 var Leadership=3.25;
 var Job=3.29;


 var anxiety=19.34;
 var happy=26.52;
 var depression=7.73;
 var fear=25.41;
 var fun=20.99;
 var anger=11.05;
 var frustration=22.10;
 var engaged=39.78;
 var managable=56.91;
 var easy=6.08;

 /*
 19.34%
26.52%
7.73%
25.41%
20.99%
11.05%
22.10%
39.78%
56.91%
6.08%

 */


//  document.getElementById("kaiwainsight").innerHTML ="➯5 among 7 respondents from Bangalore felt either engaged or that the situation was managable while at least 1 among 2 people in Bangalore felt either fear, frustration or anxiety.";
//  document.getElementById("kaiwainsight2").innerHTML ="";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="34.25";
 document.getElementById("size").innerHTML="508";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;

 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 document.getElementById("sort").innerHTML = "View by | Location| Bangalore";
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();


 
 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();
 
 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
 
};

function coimbatore(){
 var WFH_Adaptability= 3;
 var COVID_Health=5;
 var Mood=5;
 var Organization=3.75;
 var Team=3.75;
 var Leadership=3.75;
 var Job=3.75;

 var anxiety=100;
 var happy=0;
 var depression=0;
 var fear=0;
 var fun=100;
 var anger=0;
 var frustration=100;
 var engaged=100;
 var managable=100;
 var easy=0;

 /*100.00%
0.00%
0.00%
0.00%
100.00%
0.00%
100.00%
100.00%
100.00%
0.00%

 */

 

 
//  document.getElementById("kaiwainsight").innerHTML ="";
//  document.getElementById("kaiwainsight2").innerHTML ="";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="20";
 document.getElementById("size").innerHTML="5";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;

 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 document.getElementById("sort").innerHTML = "View by | Location| Coimbatore";
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();

 
 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();
 
 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
 
};

function gurugram(){
 var WFH_Adaptability= 4.00;
 var COVID_Health=4.73;
 var Mood=3.91;
 var Organization=3.08;
 var Team=3.30;
 var Leadership=3.15;
 var Job=3.15;


 var anxiety=18.18;
 var happy=18.18;
 var depression=0.00;
 var fear=27.27;
 var fun=0;
 var anger=0;
 var frustration=0;
 var engaged=54.55;
 var managable=63.64;
 var easy=0;

 /*18.18%	
18.18%	
0.00%	
27.27%	
0.00%	
0.00%	
0.00%	
54.55%	
63.64%	
0.00%	

 */

 


//  document.getElementById("kaiwainsight").innerHTML ="➯Employees from Gurugram rate their resonance with the organization the least compared to all other.";
//  document.getElementById("kaiwainsight2").innerHTML ="➯Gurugram resonated least with the leadership dimension. They intend to receive higher levels of communication around decsions and directions from the leadership.";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="27";
 document.getElementById("size").innerHTML="42";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;

 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 document.getElementById("sort").innerHTML = "View by | Location| Gurugram";
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();


 
 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
  
   updatemycolor(WFH_Adaptability,COVID_Health,Mood);
   updatemycolorbar(chart9,Organization,Leadership,Team,Job);
  
};

function male(){
	var WFH_Adaptability= 4.13;
 var COVID_Health=4.72;
 var Mood=3.75;
 var Organization=3.18;
 var Team=3.27;
 var Leadership=3.23;
 var Job=3.25;
 

/* 4.13
4.72
4.30
4.42
4.38
4.37

3.75

448
152
33.93% */

var anxiety=21.38;
 var happy=23.90;
 var depression=8.18;
 var fear=25.79;
 var fun=20.75;
 var anger=10.69;
 var frustration=23.90;
 var engaged=43.40;
 var managable=60.38;
 var easy=6.92;

 /*
21.38%
23.90%
8.18%
25.79%
20.75%
10.69%
23.90%
43.40%
60.38%
6.92%

 */




 document.getElementById("sort").innerHTML = "View by | Gender | Male";
//  document.getElementById("kaiwainsight").innerHTML ="➯Women are 1.3 times more happier than the men while Men are 1.4 times more engaged in the organization. ";
//  document.getElementById("kaiwainsight2").innerHTML ="";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="33.93";
 document.getElementById("size").innerHTML="448";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;

 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 

 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();



 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();
 
 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
 
};

function female(){
	var WFH_Adaptability= 4.12;
 var COVID_Health=4.68;
 var Mood=3.68;
 var Organization=3.20;
 var Team=3.24;
 var Leadership=3.24;
 var Job=3.35;

/* 4.12
4.68
4.34
4.39
4.39
4.49

3.68
168
41
24.40%*/


var anxiety=12.20;
 var happy=31.71;
 var depression=2.44;
 var fear=19.51;
 var fun=14.63;
 var anger=9.76;
 var frustration=12.20;
 var engaged=31.71;
 var managable=48.78;
 var easy=0;

 /*12.20%
31.71%
2.44%
19.51%
14.63%
9.76%
12.20%
31.71%
48.78%
0.00%
*/

 
 document.getElementById("sort").innerHTML = "View by | Gender | Female";
//  document.getElementById("kaiwainsight").innerHTML ="➯Women are 1.8 times less frustrated compared to the entire organization";
//  document.getElementById("kaiwainsight2").innerHTML ="";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="24.40%";
 document.getElementById("size").innerHTML="168";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;

 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();



 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
 
};

function tenure1(){
	var WFH_Adaptability= 4.11;
 var COVID_Health=4.69;
 var Mood=3.72;
 var Organization=3.14;
 var Team=3.25;
 var Leadership=3.19;
 var Job=3.25;

/* 4.11
4.69
4.23
4.39
4.29
4.30

3.72

414
118
28.50%*/

var anxiety=13.11;
 var happy=30.33;
 var depression=6.56;
 var fear=29.51;
 var fun=23.77;
 var anger=13.11;
 var frustration=22.95;
 var engaged=38.52;
 var managable=57.38;
 var easy=5.74;
/* 13.11%
30.33%
6.56%
29.51%
23.77%
13.11%
22.95%
38.52%
57.38%
5.74%*/


 

 document.getElementById("sort").innerHTML = "View by | Tenure | 0 to 1";
//  document.getElementById("kaiwainsight").innerHTML = "➯During the lockdown, employees with tenure less than 1 year are 1.2 times more happy and 1.5 times more anxious. They are also 1.2 more fear full than the entire organization. (Highest among all tenure demographics).";
//  document.getElementById("kaiwainsight2").innerHTML ="➯Employees tenured less than 1 year rate their resonance with the organization the least compared to all other";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="28.50";
 document.getElementById("size").innerHTML="414";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;

 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 

 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();


 
 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();
 
 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
  
};

function tenure2(){
	var WFH_Adaptability=  4.04;
 var COVID_Health=4.65;
 var Mood=3.65;
 var Organization=3.17;
 var Team=3.22;
 var Leadership=3.17;
 var Job=3.25;

/* 4.04
4.65
4.31
4.38
4.33
4.38

3.65

145
47
32.41% */

var anxiety=27.08;
 var happy=16.67;
 var depression=10.42;
 var fear=22.92;
 var fun=10.42;
 var anger=8.33;
 var frustration=18.75;
 var engaged=39.58;
 var managable=54.17;
 var easy=4.17;

 /*27.08%
16.67%
10.42%
22.92%
10.42%
8.33%
18.75%
39.58%
54.17%
4.17%

 */

 

 document.getElementById("sort").innerHTML = "View by | Tenure | 2 to 4";
//  document.getElementById("kaiwainsight").innerHTML ="➯During the lockdown, employees with tenure between 2 to 4 year are 1.6 times less happy and 1.4 times more anxious compared to the entire organization";
//  document.getElementById("kaiwainsight2").innerHTML ="➯Employees with over 5 years of experience with the company, showed highest resonance toward the team dimension compared to rest of the company";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="32.41";
 document.getElementById("size").innerHTML="145";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;

 
 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 

 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();



 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
};

function tenure3(){
	var WFH_Adaptability= 4.50;
 var COVID_Health=4.88;
 var Mood=4.00;
 var Organization=3.32;
 var Team=3.43;
 var Leadership=3.54;
 var Job=3.54;
 
/* 4.50
4.88
4.38
4.63
4.75
4.75

4.00

30
8
26.67%
*/

var anxiety=12.50;
 var happy=12.50;
 var depression=12.50;
 var fear=0;
 var fun=12.50;
 var anger=12.50;
 var frustration=25.00;
 var engaged=50.00;
 var managable=75.00;
 var easy=0;

/* 12.50%
12.50%
12.50%
0.00%
12.50%
12.50%
25.00%
50.00%
75.00%
0.00%*/


 

 document.getElementById("sort").innerHTML = "View by | Tenure | 5 to 7";
//  document.getElementById("kaiwainsight").innerHTML ="➯Employees tenured 5 years and above showed highest resonances towards Job.";
//  document.getElementById("kaiwainsight2").innerHTML ="";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";

 document.getElementById("p").innerHTML="26.67%";
 document.getElementById("size").innerHTML="30";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;

 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 

 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();



 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
 
};

function tenure4(){
	var WFH_Adaptability= 4.32;
 var COVID_Health=4.91;
 var Mood=3.91;
 var Organization=3.58;
 var Team=3.33;
 var Leadership=3.67;
 var Job=3.42;

/*4.32
4.91
4.73
4.55
4.86
4.82

3.91

28
30
107.14%*/

var anxiety=40.91;
 var happy=22.73;
 var depression=0.00;
 var fear=9.09;
 var fun=18.18;
 var anger=0;
 var frustration=18.18;
 var engaged=54.55;
 var managable=63.64;
 var easy=9.09;

 /*
 40.91%
22.73%
0.00%
9.09%
18.18%
0.00%
18.18%
54.55%
63.64%
9.09%

 */

 

 document.getElementById("sort").innerHTML = "View by | Tenure | 8 & above";
//  document.getElementById("kaiwainsight").innerHTML ="➯During the lockdown, employees with a tenure higher than 8 years are 2.1 times more Anxious than the entire organization and 1.3 times more engaged. ";
//  document.getElementById("kaiwainsight2").innerHTML ="➯Employees with over 8 years of experience with the company showed highest resonance toward the leadership dimension compared to rest of the company.";						
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="100";
 document.getElementById("size").innerHTML="30";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;

 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 

 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();



 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
  
};

function age1(){
	var WFH_Adaptability= 4.11;
 var COVID_Health=4.68;
 var Mood=3.58;
 var Organization=3.05;
 var Team=3.00;
 var Leadership=3.10;
 var Job=3.25;

/* 4.11
4.68
4.16
4.11
4.21
4.32

3.58
85
19
22.35%
*/
var anxiety=5.26;
 var happy=21.05;
 var depression=5.26;
 var fear=21.05;
 var fun=10.53;
 var anger=15.79;
 var frustration=26.32;
 var engaged=10.53;
 var managable=31.58;
 var easy=0;

 /*5.26%
21.05%
5.26%
21.05%
10.53%
15.79%
26.32%
10.53%
31.58%
0.00%

 */

 

//  document.getElementById("kaiwainsight").innerHTML ="➯Employees between the age of 19 to 23 were 4 times less engaged than the overall organization and 7 times less engaged than there senior most colleagues who are 40 & above";
//  document.getElementById("kaiwainsight2").innerHTML ="➯Employees aged below 23 rate their resonance with the organization the least compared to all other demographics.";				
//  document.getElementById("kaiwainsight3").innerHTML ="➯Employees aged below 23 rated least on resonance with team, showing a room for improvement when it comes to working with their respective colleagues";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="22.35";
 document.getElementById("size").innerHTML="85";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;
 
 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 document.getElementById("sort").innerHTML = "View by | Age | 19 to 23";
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();



 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
 updatemycolor(WFH_Adaptability,COVID_Health,Mood);
 updatemycolorbar(chart9,Organization,Leadership,Team,Job);

};

function age2(){
	var WFH_Adaptability= 4.14;
 var COVID_Health=4.66;
 var Mood=3.81;
 var Organization=3.21;
 var Team=3.45;
 var Leadership=3.21;
 var Job=3.27;

/*4.13
4.66
4.25
4.46
4.27
4.37

3.81
211
62
29.38%*/
var anxiety=11.11;
 var happy=39.68;
 var depression=6.35;
 var fear=28.75;
 var fun=26.98;
 var anger=12.70;
 var frustration=15.87;
 var engaged=31.75;
 var managable=57.14;
 var easy=6.35;

 /*11.11%
39.68%
6.35%
28.57%
26.98%
12.70%
15.87%
31.75%
57.14%
6.35%
*/

 

//  document.getElementById("kaiwainsight").innerHTML ="➯Employees between the age of 24 to 27 were 1.6 times more happier than the overall organization";
//  document.getElementById("kaiwainsight2").innerHTML ="";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="29.38%";
 document.getElementById("size").innerHTML="211";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;
 
 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 document.getElementById("sort").innerHTML = "View by | Age | 24 to 27";
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();


 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
 
};

function age3(){
	var WFH_Adaptability= 4.31;
 var COVID_Health=4.64;
 var Mood=3.78;
 var Organization=3.18;
 var Team=3.30;
 var Leadership=3.27;
 var Job=3.36;

/* 4.31
4.64
4.33
4.55
4.40
4.45

3.78
136
38
27.94%*/
var anxiety=20.00;
 var happy=20.00;
 var depression=7.50;
 var fear=32.50;
 var fun=20.00;
 var anger=12.50;
 var frustration=22.50;
 var engaged=40.00;
 var managable=57.50;
 var easy=7.50;

 /*
 20.00%
20.00%
7.50%
32.50%
20.00%
12.50%
22.50%
40.00%
57.50%
7.50%

 */

 
//  document.getElementById("kaiwainsight").innerHTML ="➯Employees between the age of 28 to 31 were 1.4 times more fearful than the overall organization";
//  document.getElementById("kaiwainsight2").innerHTML ="";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="27.94%";
 document.getElementById("size").innerHTML="136";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;
 
 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 document.getElementById("sort").innerHTML = "View by | Age | 28 to 31";
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();



 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);

};

function age4(){
	var WFH_Adaptability= 4.14;
 var COVID_Health=4.79;
 var Mood=3.73;
 var Organization=3.18;
 var Team=3.04;
 var Leadership=3.29;
 var Job=3.50;

/*4.14
4.79
4.36
4.27
4.36
4.61

3.73
78
33
42.31%
*/

var anxiety=21.21;
 var happy=18.18;
 var depression=6.06;
 var fear=21.21;
 var fun=15.15;
 var anger=6.06;
 var frustration=24.24;
 var engaged=45.45;
 var managable=66.67;
 var easy=9.09;

 /*
 21.21%
18.18%
6.06%
21.21%
15.15%
6.06%
24.24%
45.45%
66.67%
9.09%

 */

//  document.getElementById("kaiwainsight").innerHTML ="➯Employees between the age of 32 to 35 were 1.4 times less happier than the overall organization";
//  document.getElementById("kaiwainsight2").innerHTML ="➯Employees aged between 32 to 35 rated least on resonance with team, showing a room for improvement when it comes to working with their respective colleagues";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="42.31";
 document.getElementById("size").innerHTML="78";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;
 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 document.getElementById("sort").innerHTML = "View by | Age | 32 to 35";
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();


 
 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
 
};

function age5(){
	var WFH_Adaptability= 4.16;
 var COVID_Health=4.84;
 var Mood=3.64;
 var Organization=3.10;
 var Team=3.15;
 var Leadership=3.15;
 var Job=3.00;
 
/*4.16
4.84
4.32
4.36
4.45
4.27

3.64
59
22
37.29%*/

var anxiety=13.64;
 var happy=18.18;
 var depression=4.55;
 var fear=13.64;
 var fun=18.18;
 var anger=9.09;
 var frustration=13.64;
 var engaged=59.09;
 var managable=71.73;
 var easy=4.55;

 /*
 13.64%
18.18%
4.55%
13.64%
18.18%
9.09%
13.64%
59.09%
72.73%
4.55%


 */

 

//  document.getElementById("kaiwainsight").innerHTML ="➯Employees between the age of 36 to 40 were 1.5 times more engaged  and felt the situation was managable 1.2 time more than the overall organization";
//  document.getElementById("kaiwainsight2").innerHTML ="➯Employee above the age of 36 resonated least with their Jobs, indicating a stagnation in progress on work projects and Initiatives."			
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="37.29";
 document.getElementById("size").innerHTML="59";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;
 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 document.getElementById("sort").innerHTML = "View by | Age | 36 to 40";
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();



 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
 updatemycolor(WFH_Adaptability,COVID_Health,Mood);
 updatemycolorbar(chart9,Organization,Leadership,Team,Job);
 
};

function age6(){
	var WFH_Adaptability= 4.00;
 var COVID_Health=5.00;
 var Mood=3.70;
 var Organization=3.54;
 var Team=3.32;
 var Leadership=3.64;
 var Job=3.00;

/* 4.28
5.00
4.48
4.57
4.74
4.26

3.70
46
19
41.30%
*/
var anxiety=56.52;
 var happy=17.39;
 var depression=13.04;
 var fear=17.39;
 var fun=13.04;
 var anger=4.35;
 var frustration=34.78;
 var engaged=69.57;
 var managable=56.52;
 var easy=0;

 /*56.52%
17.39%
13.04%
17.39%
13.04%
4.35%
34.78%
69.57%
56.52%
0.00%

 */

 

//  document.getElementById("kaiwainsight").innerHTML ="➯Employees between the age of 40 & above were 1.7 times more engaged and felt the most anxious (2.9 times more than the overall organization)";
//  document.getElementById("kaiwainsight2").innerHTML ="➯All employees above the age of 40 have a perfect score on COVID Health";		
//  document.getElementById("kaiwainsight3").innerHTML ="➯Employees aged above 40 years showed highest resonance toward the team dimension compared to rest of the company";				
//  document.getElementById("kaiwainsight4").innerHTML ="➯Employee above the age of 36 resonated least with their Jobs, indicating a stagnation in progress on work projects and Initiatives."
 document.getElementById("p").innerHTML="41.30";
 document.getElementById("size").innerHTML="46";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;
 
 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 document.getElementById("sort").innerHTML = "View by | Age | 40 & above";
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();


 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
 updatemycolor(WFH_Adaptability,COVID_Health,Mood);
 updatemycolorbar(chart9,Organization,Leadership,Team,Job);
 
};

function Business1(){
	var WFH_Adaptability= 3.98;
 var COVID_Health=4.71;
 var Mood=3.72;
 var Organization=3.18;
 var Team=3.24;
 var Leadership=3.26;
 var Job=3.28;

/*
 3.98
4.71
4.25
4.35
4.32
4.37

3.72
446
126
28.25%*/

var anxiety=13.00;
 var happy=30.00;
 var depression=6.15;
 var fear=23.85;
 var fun=18.46;
 var anger=10.77;
 var frustration=19.23;
 var engaged=42.31;
 var managable=58.46;
 var easy=4.62;
 /*
 13.08%
30.00%
6.15%
23.85%
18.46%
10.77%
19.23%
42.31%
58.46%
4.62%

 */



//  document.getElementById("kaiwainsight").innerHTML ="➯WFH adaptability among the Operations department had the lowest rating across all dimensions";
//  document.getElementById("kaiwainsight2").innerHTML ="";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";

 document.getElementById("p").innerHTML="28.25";
 document.getElementById("size").innerHTML="446";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;
 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 document.getElementById("sort").innerHTML = "View by | Business unit | Operations";
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();



 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
};

function Business2(){
	var WFH_Adaptability= 4.47;
 var COVID_Health=4.73;
 var Mood=3.97;
 var Organization=3.43;
 var Team=3.43;
 var Leadership=3.53;
 var Job=3.48;
 
 
/* 4.47
4.73
4.57
4.70
4.57
4.63

3.97
75
30
40.00%*/
var anxiety=26.67;
 var happy=30.00;
 var depression=6.67;
 var fear=23.33;
 var fun=26.67;
 var anger=10.00;
 var frustration=20.00;
 var engaged=46.67;
 var managable=60.00;
 var easy=10.00;
 /*
 26.67%
30.00%
6.67%
23.33%
26.67%
10.00%
20.00%
46.67%
60.00%
10.00%

 */
 

//  document.getElementById("kaiwainsight").innerHTML ="➯Employees from Technology showed highest resonance toward the team dimension compared to rest of the company";
//  document.getElementById("kaiwainsight2").innerHTML ="";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="40";
 document.getElementById("size").innerHTML="75";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;
 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 document.getElementById("sort").innerHTML = "View by | Business unit | Technology";
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();



 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
 
};

function Business3(){
	var WFH_Adaptability= 4.34;
 var COVID_Health=4.71;
 var Mood=3.55;
 var Organization=3.24;
 var Team=3.34;
 var Leadership=3.32;
 var Job=3.20;

/* 4.34
4.71
4.32
4.42
4.45
4.26

3.55
74
35
47.30%
*/
var anxiety=36.84;
 var happy=7.89;
 var depression=10.53;
 var fear=28.95;
 var fun=18.42;
 var anger=10.53;
 var frustration=31.58;
 var engaged=34.21;
 var managable=55.26;
 var easy=5.26;

 /*
 36.84%
7.89%
10.53%
28.95%
18.42%
10.53%
31.58%
34.21%
55.26%
5.26%

 */

 

//  document.getElementById("kaiwainsight").innerHTML ="➯The support team was 1.9 times more anxious and 1.5 times more frustrated compared to the entire organization";
//  document.getElementById("kaiwainsight2").innerHTML ="";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("p").innerHTML="47.30";
 document.getElementById("size").innerHTML="74";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;
 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 document.getElementById("sort").innerHTML = "View by | Business unit | Support";
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();



 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
 updatemycolor(WFH_Adaptability,COVID_Health,Mood);
 updatemycolorbar(chart9,Organization,Leadership,Team,Job);
};

function Business4(){
 
 var WFH_Adaptability= 4.5;
 var COVID_Health=4.5;
 var Mood=4.5;
 var Organization=3.38;
 var Team=3.38;
 var Leadership=3.38;
 var Job=3.75;
/*4.50
4.50
4.50
4.50
4.50
5.00

4.50
21
2
9.52%*/

var anxiety=0;
 var happy=0;
 var depression=0;
 var fear=0;
 var fun=0;
 var anger=0;
 var frustration=0;
 var engaged=0;
 var managable=50.00;
 var easy=0;

 /*0.00%
0.00%
0.00%
0.00%
0.00%
0.00%
0.00%
0.00%
50.00%
0.00%
*/
 

 document.getElementById("p").innerHTML="9.52";
 document.getElementById("size").innerHTML="21";
//  document.getElementById("kaiwainsight").innerHTML ="";
//  document.getElementById("kaiwainsight2").innerHTML ="";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;
 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 2000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 document.getElementById("sort").innerHTML = "View by | Business unit | Staffing";
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();


 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();

//  chart9.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
 updatemycolor(WFH_Adaptability,COVID_Health,Mood);
 
 updatemycolorbar(chart9,Organization,Leadership,Team,Job);
 
 

};
//doughnut vhart color update
function updatemycolor(WFH_Adaptability,COVID_Health,Mood){
    
var WFH_Adaptability = WFH_Adaptability; 
var COVID_Health = COVID_Health; 
var Mood = Mood; 


    if(WFH_Adaptability>=4.6){
     var wfhcol = 'green';
 }
 else if(WFH_Adaptability>=3.6){
     var wfhcol = 'orange';
 }
 else{
     var wfhcol = 'red';
 }
 
 if(COVID_Health>=4.6){
     var covcol = 'green';
 }
 else if(COVID_Health>=3.6){
     var covcol = 'orange';
 }
 else{
     var covcol = 'red';
 }
 
 if(Mood>=4.6){
     var moodcol = 'green';
 }
 else if(Mood>=3.6){
     var moodcol = 'orange';
 }
 else{
     var moodcol = 'red';
 }
 
 
// if(overall>=3.5){
//      var overcol = 'green';
//  }
//  else if(overall>=2){
//      var overcol = 'yellow';
//  }
//  else{
//      var overcol = 'red';
//  }
 
 var overcol = 'red';

 colorupdate(chart1,wfhcol);
 colorupdate(chart2,covcol);
 colorupdate(chart3,moodcol);
 colorupdate(chart10,overcol);
 
 
 
}
function colorupdate(chart,color) {
			  var c =color;
			  
    chart.data.datasets[0].backgroundColor =[c,'#ffffff00'];
    chart.update();
}

//bar chart color updates
function updatemycolorbar(chart9,Organization,Leadership,Team,Job){
    
var Organization = Organization; 
var Leadership = Leadership; 
var Team = Team;
var Job = Job ;


    if(Organization>=4.6){
     var o = 'green';
 }
 else if(Organization>=3.6){
     var o = 'orange';
 }
 else{
     var o = 'red';
 }
 
 if(Leadership>=4.6){
     var l = 'green';
 }
 else if(Leadership>=3.6){
     var l = 'orange';
 }
 else{
     var l = 'red';
 }
 
 if(Team>=4.6){
     var t = 'green';
 }
 else if(Team>=3.6){
     var t = 'orange';
 }
 else{
     var t = 'red';
 }
 
 if(Job>=4.6){
     var j = 'green';
 }
 else if(Job>=3.6){
     var j = 'orange';
 }
 else{
     var j = 'red';
 }
 
 
// if(overall>=3.5){
//      var overcol = 'green';
//  }
//  else if(overall>=2){
//      var overcol = 'yellow';
//  }
//  else{
//      var overcol = 'red';
//  }
 


 colorupdatebar(chart9,o,l,t,j);
//  colorupdatea(chart2,covcol);
//  colorupdate(chart3,moodcol);
//  colorupdate(chart10,overcol);
 
 
 
}
function colorupdatebar(chart9,o,l,t,j) {
			  var c1 = o;
			  var c2 = l;
			  var c3 = t;
			  var c4 = j;
			  
    chart9.data.datasets[0].backgroundColor =[c1,c2,c3,c4];
    chart9.update();
}






//tooltip

  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
        
			
			
		//counteranimation
			$({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 1000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 1000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});
			
			
			function refresh(){
			    document.getElementById("tenure").disabled = false;
			    document.getElementById("age").disabled = false;
			    document.getElementById("location").disabled = false;
			    document.getElementById("business").disabled = false;
			    document.getElementById("gender").disabled = false;
				document.getElementById("sort").innerHTML = "View by | All";

				var WFH_Adaptability= 4.21;
			    var COVID_Health=4.74;
 var Mood=3.75;
 var Organization=3.24;
 var Team=3.28;
 var Leadership=3.18;
 var Job=3.26;

/* 4.21
4.74
4.32
4.43
4.39
4.40

3.75*/

var anxiety=19.14;
 var happy=25.84;
 var depression=6.70;
 var fear=23.92;
 var fun=19.14;
 var anger=10.05;
 var frustration=21.05;
 var engaged=40.67;
 var managable=59.33;
 var easy=5.74;

 /*19.14%
25.84%
6.70%
23.92%
19.14%
10.05%
21.05%
40.67%
59.33%
5.74%


 */

//  document.getElementById("kaiwainsight").innerHTML ="➯WFH adaptability has the lowest rating of 4.21 on 5 among all 6 parameters.";
//  document.getElementById("kaiwainsight2").innerHTML ="➯COVID health, has the highest rating of 4.74 on 5 among all 6 parameters.";
//  document.getElementById("kaiwainsight3").innerHTML ="";
//  document.getElementById("kaiwainsight4").innerHTML ="";
 document.getElementById("WFH").innerHTML= WFH_Adaptability;
 document.getElementById("2").innerHTML= COVID_Health;
 document.getElementById("3").innerHTML= Mood;
 
 document.getElementById("p").innerHTML="34";
 document.getElementById("size").innerHTML="619";
 $({ Counter: 0 }).animate({
			  Counter: $('.sample').text()
			}, {
			  duration: 1000,
			  easing: 'swing',
			  step: function() {
			    $('.sample').text(Math.ceil(this.Counter));
			  }
			});
			
			$({ Counter: 0 }).animate({
			  Counter: $('.percentage').text()
			}, {
			  duration: 1000,
			  easing: 'swing',
			  step: function() {
			    $('.percentage').text(Math.ceil(this.Counter));
			  }
			});

 
 
 
 chart1.data.datasets[0].data=[WFH_Adaptability,WFH_Adaptability-5];
 chart1.update();
 
 chart2.data.datasets[0].data=[COVID_Health,COVID_Health-5];
 chart2.update();
 
 chart3.data.datasets[0].data=[ Mood,Mood-5];
 chart3.update();



 chart8.data.datasets[0].data=[easy,engaged,fun,happy,managable,anger,anxiety,depression,fear,frustration];
 chart8.update();
 
//  chart9.data.datasets[0].data=[Organisation,Team,Leadership,Job];
//  chart9.update();

 chart9.data.datasets[0].data=[Organization,Leadership,Team,Job];
 chart9.update();
 
  updatemycolor(WFH_Adaptability,COVID_Health,Mood);
  updatemycolorbar(chart9,Organization,Leadership,Team,Job);
 
			};
			
			function disableothertenure(){
			    document.getElementById("age").disabled = true;
			    document.getElementById("location").disabled = true;
			    document.getElementById("business").disabled = true;
			    document.getElementById("gender").disabled = true;
				document.getElementById("sort").innerHTML = "View by | Tenure";
			    
			};
			
			function disableotherage(){
			    document.getElementById("tenure").disabled = true;
			    document.getElementById("location").disabled = true;
			    document.getElementById("business").disabled = true;
			    document.getElementById("gender").disabled = true;
			    document.getElementById("sort").innerHTML = "View by | Age";
			};
			
			function disableotherlocation(){
			    document.getElementById("tenure").disabled = true;
			    document.getElementById("age").disabled = true;
			    document.getElementById("business").disabled = true;
			    document.getElementById("gender").disabled = true;
			    document.getElementById("sort").innerHTML = "View by | Location";
			};
			
			function disableotherbusiness(){
			    document.getElementById("tenure").disabled = true;
			    document.getElementById("age").disabled = true;
			    document.getElementById("location").disabled = true;
			    document.getElementById("gender").disabled = true;
			    document.getElementById("sort").innerHTML = "View by | Business";
			};
			
			function disableothergender(){
			    document.getElementById("tenure").disabled = true;
			    document.getElementById("age").disabled = true;
			    document.getElementById("location").disabled = true;
			    document.getElementById("business").disabled = true;
			    document.getElementById("sort").innerHTML = "View by | Gender";
			};
			
			
			
			
			/*function banglore()
			{
			chart2.data.labels=["Banglore"];
			chart2.data.datasets[0].data=[12];
			chart2.update();
			};
			
			function m()
			{
			chart2.data.labels=["Mysore"];
			chart2.data.datasets[0].data=[24];
			chart2.update();
			};
			
			function a()
			{
			chart2.data.labels=["Banglore","Mysore"];
			chart2.data.datasets[0].data=[ 12,24 ];
			chart2.update();
			};*/
			
			
		
			
			var mychart=document.getElementById('mychart').getContext('2d');
			
			var chart1=new Chart(mychart, 
			{
			type:'doughnut',
			data:{
			/*labels:['WFH Adaptability'],*/
			datasets:[{
			label:['WFH Adaptability','improvement'],
			data:[ '4.21','0.79' ],
		    backgroundColor:['orange','#ffffff00'],
			
			
			borderColor:['#ffffff','#ffffff'],
			}]
			},
			options:{
			tooltips: {
            // Disable the on-canvas tooltip
            enabled: false,},
			cutoutPercentage:75,
			title:{
			display:true,
			text:'WFH Adaptability',
			fontSize:15,
			},
			legend:{
			position:'right',
			}
			}
			
			});
			
			
			
			var mychart=document.getElementById('mychart2').getContext('2d');
			//var odcr2 = [ 12,24 ];
			var ndcr2 = [12];
			var x =3.6;
			var chart2=new Chart(mychart, 
			{
		    type:'doughnut',
			data:{
			/*labels:['COVID Health'],*/
			datasets:[{
			label:['COVID Health','improvement'],
			data:[ '4.74','0.26' ],
		
			backgroundColor:['green','#ffffff00'],
			
			borderColor:['#ffffff','#ffffff'],
			}]
			},
			options:{
			    tooltips: {
            // Disable the on-canvas tooltip
            enabled: false,},
			cutoutPercentage:75,
			title:{
			display:true,
			text:'COVID Health',
			fontSize:15,
			},
			legend:{
			position:'right',
			}
			}
			
			});
			
			
			var mychart=document.getElementById('mychart3').getContext('2d');
		/*	var gradientStroke = mychart.createLinearGradient(500, 0, 100, 0);
            gradientStroke.addColorStop(0, "#FF0000");
            gradientStroke.addColorStop(0.5, "#FF0000");
            gradientStroke.addColorStop(0.7, "#FF0000");
			gradientStroke.addColorStop(0.9, "#20B2AA");
            gradientStroke.addColorStop(1, "#3CB371");*/
			
			var chart3=new Chart(mychart, 
			{
		    type:'doughnut',
			data:{
			/*labels:['Mood Index'],*/
			datasets:[{
			label:['Mood Index','improvement'],
			data:[ '3.75','1.25' ],
			backgroundColor:['orange','#ffffff00'],
			
			borderColor:['#ffffff','#ffffff'],
			}]
			},
			options:{
			    tooltips: {
            // Disable the on-canvas tooltip
            enabled: false,},
			cutoutPercentage:75,
			title:{
			display:true,
			text:'Mood index',
			fontSize:15,
			},
			legend:{
			position:'right',
			}
			}
			});
			
			
		

			
			
		/*	var mychart=document.getElementById('mychart8').getContext('2d');
			
			var chart8=new Chart(mychart,
			
			{
		    type:'bar',
			labels:['Anxiety 😓 ','Happy😀','Depression😖','Fear 😰 ','Fun 🤗 ','Anger 😡 ','Frustration 😤 ','Engaged 🧐 ','Managable 🙂 ','Easy 😇 '],
			data:{
			labels:['Anxiety 😓 ','Happy😀','Depression😖','Fear 😰 ','Fun 🤗 ','Anger 😡 ','Frustration 😤 ','Engaged 🧐 ','Managable 🙂 ','Easy 😇 '],
			datasets:[{
			labels:['Anxiety 😓 ','Happy😀','Depression😖','Fear 😰 ','Fun 🤗 ','Anger 😡 ','Frustration 😤 ','Engaged 🧐 ','Managable 🙂 ','Easy 😇 '],
			data:[ '19.14','25.84','6.70','23.92','19.14','10.05','21.05','40.67','59.33','5.74' ],
			backgroundColor:['#1e88e5','red','yellow','green','violet','orange','pink','grey','indigo','cyan'],
			borderWidth:10,
			/*borderColor:['#ffffff','#ffffff'],*/
		/*}]
			},

			options:{
			cutoutPercentage:100,
			title:{
			display:true,
			text:'Employee Feelings',
			fontSize:15,
			},
			legend:{
			position:'right',
			}
			}
			}); 
			*/
			
			
			
			var mychart=document.getElementById('mychart8').getContext('2d');
			
			
			
			var chart8=new Chart(mychart,
			
			{
		    type:'radar',
			
			data:{
			labels:['EASY 😇 ','ENGAGED 🧐 ','FUN 🤗 ','HAPPY 😀','MANAGABLE 🙂 ','ANGER 😡 ','ANXIETY 😓 ','DEPRESSION 😖','FEAR 😰 ','FRUSTRATION 😤 '],
			datasets:[{
            labels:["EASY 😇 ","ENGAGED 🧐 ","FUN 🤗 ","HAPPY 😀","MANAGABLE 🙂 ","ANGER 😡 ","ANXIETY 😓 ","DEPRESSION 😖","FEAR 😰 ","FRUSTRATION 😤 "],
			data:['5.74','40.67','19.14','25.84','59.33','10.05','19.14','6.70','23.92','21.05'],
			
			backgroundColor:['#074B6E'],
			pointBackgroundColor:['green','green','green','green','green','red','red','red','red','red'],
			borderWidth:10
		
			
			/*borderColor:['#ffffff','#ffffff'],*/
			}]
			},
			
			
            
			options:{
			    			    scale: {
                 pointLabels: {
                 fontSize: 12
                }
              },
			 tooltips: {
            // Disable the on-canvas tooltip
            enabled: true,},
			title:{
			display:false,
			text:'Employee Feelings',
			fontSize:30,
			fontColor: 'gray',
			defaultFontStyle: 'normal'
			
			},
			legend:{
			position:'right',
			}
			}
			});
			
			
			//Bar Chart for OTLJ 
			var mychart=document.getElementById('mychart9').getContext('2d');
			
			//
			Chart.defaults.scale.ticks.beginAtZero= true;
			
			
			var chart9=new Chart(mychart,
			
			{
		    type:'horizontalBar',
			
			data:{
			    labels:['Organization','Leadership','Team','Job'],
			    datasets:[
			        {
			            data:[3.24,3.29,3.32,3.30],
			            backgroundColor:['red','red','red','red']
			        }]
			},
			options:{
			 
			    
			scales: {
            xAxes: [{
                ticks: {
                   max: 5,
                min: 0,
                stepSize: 0.250
                
                }
            }]
        },
					legend:{
			display:false,
			}
			}
		
			});
			
			// Chart for over all
			
			var mychart=document.getElementById('mychart10').getContext('2d');
			
			var chart10=new Chart(mychart,
			{
		    type:'doughnut',
			data:{
			/*labels:['Overall'],*/
			datasets:[{
			label:['Over All','improvement'],
			data:[ '3.25','1.75' ],
			backgroundColor:['red','#ffffff00'],
		
			borderColor:['#ffffff','#ffffff'],
			}]
			},
			options:{
			    	tooltips: {
            // Disable the on-canvas tooltip
            enabled: false,},
			cutoutPercentage:75,
			title:{
			display:true,
			text:'BEATS Quotient',
			fontSize:15,
			},
			legend:{
			position:'right',
			}
			}
			}); 
			
		
			chart8.options.legend.display=false;
			
			
			  document.addEventListener('DOMContentLoaded', function() {
			    var elems = document.querySelectorAll('.dropdown-trigger');
			    var instances = M.Dropdown.init(elems, options);
			  });
			
			  // Or with jQuery
			
			  $('.dropdown-trigger').dropdown();
			  
			/*  function banglore()
			{
			chart2.data.labels=["Banglore"];
			chart2.data.datasets[0].data=[12];
			chart2.update();
			};
			
			function m()
			{
			chart2.data.labels=["Mysore"];
			chart2.data.datasets[0].data=[24];
			chart2.update();
			};
			
			function a()
			{
			chart2.data.labels=["Banglore","Mysore"];
			chart2.data.datasets[0].data=[ 12,24 ];
			chart2.update();
			};*/
				
					

			
			
			
			
			
			
			
			
			
			function logout(){

			     <?php $_SESSION['logged_in']==0;
			       session_destroy(); 
			     ?>                    
			        window.location.href = "./";
			    }
		</script>
		 
</body>

</html>


<!--php
include './footer.php';
}

  else
  {
           function function_alert($message) { 
      
             // Display the alert box  
          echo "<script>alert('$message');</script>";
              }
 
  
  
          // Function call 
         function_alert("You are logged out, login again!");
         include('index.php');
      
  }


}
else
{
header("Location: ./");
   exit();
   session_destroy();
}

?>









