<?php 
require_once 'core/init.php';
if (input::exists()){
	if (token::check(input::get('token'))){
		
				$validate = new validate();
				$validation =$validate->check($_POST,array(
						'email'=> array(
							'required'=>true,
							'unique'=>'student'
						),
						'firstName'=>array(
							'required'=>true,
							'max'=>20,
							'min'=>3),
							
						'password'=> array(
							'required'=>true,
							'min'=>8,
							'matches'=> 'password'),
					));
				if(empty($validation->errors())){
					$user= new user();
					try {
						$user->create(array(



						));

					}catch (exeption $e){
						die($e->getMessage());
					}




					echo '<H3 style=" position: sticky; z-index:99;">Passed </H3>';
					session::flash('success','You registred successfully');
					header('location:index.php');

				}else {
					echo '<H3 style=" position: sticky;color:red; z-index:99;"> Failed!</H3> <p class="small text-muted" style="color:red"';
					foreach ($validation->errors() as $error) {
						echo $error,"<br>";
					}
					echo ' </p>';
}
	}
}
	

?>


 

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/logo 2.ico" type="image/x-icon">	
	<meta name="author" content="Hichem Elwerghi">
<meta name="description" content="Welcome to SEN special school. We strongly believe in developing the whole child and our dedicated team of staff pride themselves in creating a supportive, happy and secure learning environment; providing pupils with the best opportunities possible, to achieve their potential. By joining us, you and your family would become part of a successful, vibrant and caring school community which looks forward to working in partnership with you, to achieve the very highest academic and personal standards for your child. All applications for school places are dealt with by Cheshire East Local Authority. Click here for a link to their website. Please explore our website to find out more about life at Marlborough. Mrs J Mierzejewski is our School Business Manager and would be happy to assist with any queries. Mrs S Pollard is our Headteacher and is available to assist as required">
<meta property="og:image" content="images/sen-design-1.jpg">
<meta property="og:description" content="Join  SEN special school today for free">
<meta property="og:title" content="Register">	
<title>SEN special school</title>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>
	


<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
 
	 <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	

	<script src="js/jquery-3.3.1.min.js"></script>

	<script src="js/FormValidation.js" type="text/javascript"></script>
	<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-1.11.1.min.js"></script>
	<script src="jQueryAssets/jquery.ui-1.10.4.datepicker.min.js"></script>
<style type="text/css">
body,td,th {
    color: #012340;
}
body {
    background-color: #F2F2F2;
}
</style>
<link href="jquery-mobile/jquery.mobile.structure-1.3.0.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>

</head>

<body>
<div onclick="topFunction()" id="myBtn" style="opacity: 0.8;font-size: 36px;border-radius:50%;height: 60px;
  width: 60px;text-align: center"title="Go to top"><i class="fas fa-angle-double-up"></i></div>
<header>
	<div class="top">
	  <input type="button" value="Blog" onclick="window.location.href = 'blog.html';" class="btn btn-sm topElements" style="margin-left: 80px;">
		<input type="button" onclick="window.location.href = 'login.html#parents';" value="Parent login" class="btn btn-sm topElements">
	  <input type="button" onclick="window.location.href = 'login.html#teacher';" value="Teacher login" class="btn btn-sm">
	  <a class="btn btn-sm dropdown-toggle"  id="access" role="button" href="#google_translate_element" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Accessibility options </a>
      <div class="dropdown-menu">
        <h6 class="dropdown-header">Please select:</h6>
	        <a class="dropdown-item" href="#google_translate_element">Change background color</a> 
			<a class="dropdown-item" href="#google_translate_element">Change font size</a>
        <div class="dropdown-divider"></div>
	        <a class="dropdown-item" href="#google_translate_element">Access vocal menu</a> </div>
      
		<input type="button" value="Privacy" id="privacy" onclick="window.location.href = 'privacy.html';" class="btn btn-sm topElements privacy">
    </div>
	<div class="container-fluid" style="margin-left: 0px;margin-right: 0px">
		<div class="row" >
			
		<div style="display: inline;" class="col-2"> <img style="margin-left: 1%;margin-top:60px" onclick="window.location.href = 'Home.html';"  src="logo.png" width="auto" height="175px" alt="Shool logo"></div>
		<div class="col-2 principles">
			<div id="principles"  style="margin-bottom: 10px">
			<div class="princpleslist2" style="list-style-type: none"><h6 class="mb-0">Shared Goals & Vision </h6><small class="small text-muted ml-0"> We know where we’re going    </small></div>
				<div class=" princpleslist" style="list-style-type: none"><h6 class="mb-0 ">Collegiality</h6><small class=" small text-muted ml-0"> We’re in this Together.   </small> </div>
				<div class="princpleslist2" style="list-style-type: none"><h6 class="mb-0">Continuous Improvement</h6><small class="small text-muted ml-0"> We can Always Get Better. </small> </div>
				<div class=" princpleslist" style="list-style-type: none"><h6 class="mb-0">Risk Taking</h6> <small class="small text-muted ml-0" > We always try something new.</small>   </div>
				<div  class="princpleslist2" style="list-style-type: none"><h6 class="mb-0">Celebration and Humour</h6> <small class="small text-muted ml-0"> We Feel Good about Ourselves </small>   </div>
			</div>
		  </div>	
			
		  <script>
$(document).ready(function(){
  
  
    $("principles").fadeIn();
  
});
</script>
			<div class="col-5 promotion" style="border-radius: 20px/150px;border-bottom: 15px solid #F2E3B6;border-top: 15px solid #072A40">
			<h1 class="glow" style="margin-top: 5px ;text-align: center; font-size: 55px">A school that value success.</h1>
				
				 <Center ><Div class="lead" style="background-color: rgba(242,227,182,.5);width: 51%; border-left:10px solid rgba(7,42,64,.5)">Get a free 2020 school guide! </Div></Center>
				<hr class="col-8">
				<center><button onclick="window.location.href = 'contact.html';" class="prombtn"><span>Start today</span></button>
				
				</center>
				
			</div>
	
	  <div   class="col-3" style="padding-top: 50px;padding-left: 20px" > 
		<form class="log card loginform" style="padding: 5px 5px 20px 5px; border-radius: 10px 10px 10px 10px; border-right: 10px solid #072A40; border-left: 10px solid #072A40" >
			
		  <input type="email" required="required"  class="form-control" placeholder="Email" style="display: block;" title="Email">
		  
		  <input type="password" style="display: block" class="form-control"  placeholder="Password">
		  <input type="checkbox"   > 
		  <small class="form-check-label">Keep me logged in. <a href="help.html"> Need help?</a></small>
			
		  <button type="button"  style=" background-color: #BFBD9F; " id="login" onclick="document.getElementById('id01').style.display='block'" class="form-control"  >Login</button>
		
	    </form>
		
	</div>
	  </div>
	  
    </div>
	<h2 style="background-color: #012340; color: #F2E3B6; margin-bottom: 2px" ><span style="font-size: 2.1rem; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';">
	  <marquee behavior="scroll" direction="left">Welcoome to SEN Special school official website!</marquee></span></h2>
 	<div>
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#F2E3B6;color:#F2F2F2"> 
			<a class="navbar-brand" href="Home.html">SEN </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse"  style="color:#F2F2F2" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
		    <ul class="navbar-nav mr-auto">
			  <li class="nav-item active"> <a class="nav-link" accesskey="H" href="Home.html">Home </a> </li>
		      <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="classes.html" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Classes</a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
					<a class="dropdown-item" href="classes.html#rcp1">Reciption group 1</a> 
				  <a class="dropdown-item" href="rcp2.html">Reciption group 2</a>
					<a class="dropdown-item" href="classes.html#1CI">Class 1CI</a>
					<a class="dropdown-item" href="classes.html#1GR">Class 1GR</a>
					<a class="dropdown-item" href="classes.html#2G">Class 2G</a>
					<a class="dropdown-item" href="classes.html#2W">Class 2W</a>
					<a class="dropdown-item" href="classes.html#3P">Class 3P</a>
					<a class="dropdown-item" href="classes.html#3R">Class 3R</a>
					<a class="dropdown-item" href="classes.html#4H">Class 4H</a>
					<a class="dropdown-item" href="classes.html#4U">Class 4U</a>
					<a class="dropdown-item" href="classes.html#5H">Class 5H</a>
					<a class="dropdown-item" href="classes.html#5T">Class 5T</a>
					<a class="dropdown-item" href="classes.html#6R">Class 6R</a>
					<a class="dropdown-item" href="classes.html#6M">Class 6M</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="classes.html">View all...</a> </div>
	          </li>
				 <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="school.html" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Our school</a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
					<a class="dropdown-item" href="school.html#admissions">Admissions</a> 
					<a class="dropdown-item" href="school.html#safeguarding">Safeguarding</a>
					<a class="dropdown-item" href="school.html#ofsted">Ofsted</a>
					<a class="dropdown-item" href="school.htmlcurriculum">The school curriculum</a>
					<a class="dropdown-item" href="school.html#perfomance">Performance data</a>
					<a class="dropdown-item" href="school.html#policies">Policies</a>
					<a class="dropdown-item" href="school.html#complaint">Complaint procedure</a>
					<a class="dropdown-item" href="school.html#equality">Public sector equality duty</a>
					<a class="dropdown-item" href="school.html#vacancies">Staff vacancies</a>
					<a class="dropdown-item" href="school.html#britishvalue">British value</a>
					
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="school.html">View all...</a> </div>
	          </li>
			  <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parents</a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
					<a class="dropdown-item" href="#">General letters</a> 
				  <a class="dropdown-item" href="parents.html#holidays">School holiday dates</a>
					<a class="dropdown-item" href="parents.html#meals">School meals</a>
					<a class="dropdown-item" href="parents.html#uniform">School uniform</a>
					<a class="dropdown-item" href="parents.html#privacy">Privacy notice</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="parents.html">View all...</a> </div>
	          </li>	
			  <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="clubs.html" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clubs</a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
					<a class="dropdown-item" href="clubs.html#cookery">Cookery club</a> 
				  <a class="dropdown-item" href="clubs.html#choir">Choir club</a>
					<a class="dropdown-item" href="clubs.html#music">Music club</a>
					<a class="dropdown-item" href="clubs.html#lunch">Lunch club</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="clubs.html">View all...</a> </div>
	          </li>		
		      <li class="nav-item"> <a class="nav-link" href="sports.html">Sports </a> </li>
			  <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="governance.html" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	Governance</a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> 
					<a class="dropdown-item" href="governance.html#members">Members</a> 
				  <a class="dropdown-item" href="governance.html#trust">Trustees</a>
					<a class="dropdown-item" href="governance.html#govbody">Local governing body</a>
		          <div class="dropdown-divider"></div>
	            <a class="dropdown-item" href="governance.html">View all...</a> </div>
	          </li> 
			  <li class="nav-item"> <a class="nav-link" href="contact.html">Contact </a> </li>	
	        </ul>
		    <form class="form-inline my-2 my-lg-0 searchform" action="https://scholar.google.com/scholar" class="searchform" method="get"   name="searchform" target="_blank">
	        <input class="  search " type="search" placeholder="Search..."  
					 autocomplete="on" name="q" required>
	        <button class="btn   btnSearch" type="submit">Search with 
				<img src="images/scholar.png" width="auto" height="30px" style="margin-right: 5px; margin-bottom: 5px"  alt=""/></button>
	        </form>
			  
			  

			  
	      </div>
	  </nav>
    </div>
		
		
</header>
<Section>
<div class="jumbotron" style="background-color: #F2F2F2;padding-top: 5px;padding-bottom: 2px; margin-bottom: 10px" >
	
	<div class="row" style="margin-bottom: 10px;">
	<div class="col-12 mainHeader" ><h1 class="display-4" id="registerheader" >Register</h1></div>
	
    </div>
		
<hr class="my-3">

  </div>

	<div class="container ">
		
	  <div class="row offset-2">
    <div class="col-md-8">






      <form class="form-horizontal" method="post" action="" id="register" role="form">

        <fieldset>

          <!-- Form Name -->
          <legend>Personal Information Details</legend>

          <!-- Text input-->
          <div class="form-group row">
            <div class="col-sm-4">
              <input type="text" onfocus="this.value=''"name="firstName" id="firstName" placeholder="First Name*" class="form-control" value=" <?php input::get('firstName'); ?>"required>
				
				<small name="validFirstName" id="validFirstName" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''" name="middleName" id="middleName" value=" <?php input::get('middleName'); ?>" placeholder="Middle Name" class="form-control">
				<small name="validMiddleName"  id="validMiddleName" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-4">
              

<input type="text" name="secondName"  id="secondName" placeholder="SecondName" value="<?php input::get('secondName'); ?>" onfocus="this.value=''"class="form-control">
				<small name="validSecondName"  id="validSecondName" class="form-text " style="color: indianred"></small>
            </div>
          </div>

          
			<div class="form-group row">
            <div class="col-sm-6">
              <input type="text" placeholder="Date Of Birth*" autocomplete="false" name="dateOfBirth" id="dateOfBirth" value=" <?php input::get('dateOfBirth') ;?>" style="height: 41px" class="form-control date" required>
				<small name="validDateOfBirth"  id="validDateOfBirth" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-6" style="margin-top: 20px">
              <select type="gender" id="gender" placeholder="Gender"  name="gender"style="height: 41px" class="form-control" value=" <?php input::get('gender') ;?>" required>
                <option  disabled >Gender*</option>
				  <option value="female">Female</option>
                <option value="male">Male</option>
				  <option value="other">Other</option>
				  <option value="preferNotToSay">Prefer not to say</option>
              </select>
            </div>
          </div>
			<div class="form-group row">
            
            <div class="col-sm-6" style="margin-top: 20px">
              <select   name="disability" value=" <?php input::get('disability'); ?>" id="disability" style="height: 41px" class="form-control" required>
                <option  disabled selected>Disability*</option>
				  <option value="vision">Vision Impairment</option>
                <option value="deaf">Deaf or hard of hearing</option>
				  <option value="mental">Mental health conditions</option>
				  <option value="intellectual">Intellectual disability</option>
				   <option value="braininjury">Acquired brain injury</option>
				  <option value="aitism">Autism spectrum disorder</option>
				  <option value="physical">Physical disability.</option>
				  <option value="other">Other disability</option>
              </select>
            </div>
				<div class="col-sm-6">
              <input type="text" onfocus="this.value=''" placeholder="Please specify" name="specifyOther" id="specifyOther" value=" <?php input::get('specifyOther'); ?>"style="height: 41px"  class="form-control">
				
            </div>
          </div>
			<hr class="my-3">
			<fieldset>
			<legend>Log-in details </legend>
			<div class="form-group row">
            <div class="col-sm-6">
              <input type="email" value=" <?php input::get('email') ;?>" onfocus="this.value=''"id="email" name="email" placeholder="Email*" class="form-control" required><small name="validEmail"  id="validEmail" class="form-text " style="color: indianred"></small>
            </div>
				
				<div class="col-sm-6">
              <input type="email" onfocus="this.value=''"id="comfirmemail"  name="comfirmemail" placeholder="Email*" class="form-control" required><small name="validComfirmEDemail"  id="validComfirmEDemail" class="form-text " style="color: indianred"></small>
            </div>
           
          </div>
			<div class="form-group row">
            <div class="col-sm-6">
              <input type="password"  id="password"onfocus="this.value=''" name="password" style="height: 41px"   required placeholder="Password*" class="form-control"><small name="validPassword"  id="validPassword" class="form-text " style="color: indianred"></small></div>
				
				<div class="col-sm-6">
              <input type="password" onfocus="this.value=''"style="height: 41px" name="comfirmPassword"  id="comfirmPassword" required placeholder="Comfirm password*" class="form-control"><small name="validComfirmedPassword"  id="validComfirmedPassword" class="form-text " style="color: indianred"></small>
          </div>
           

          </div>
			
			<div class="form-group row">
			<div class="col-6"><small id="passwordHelpBlock" class=" text-muted">
  				-Minimum 8 characters<br>
					-Contain letters and numbers<br>	
				</small></div>
				<div class="col-6">
				
				<small id="passwordHelpBlock2" class=" text-muted">
					-At least one uppercase and 1 lowercase letter<BR>
					-Comfirmed<br>
				</small></div>
				
				
				
				</div>
          
<hr class="my-3">
<!-- Address Section -->
          <!-- Form Name -->
          <legend>Address Details</legend>
          <!-- Text input-->
          <div class="form-group row">
            <div class="col-sm-12">
              <input type="text" id="addressLine1" value=" <?php input::get('addressLine1'); ?>"onfocus="this.value=''" name="addressLine1" placeholder="Address Line 1*"  maxlength="25"class="form-control"  required>
            </div>
			  
			  
			  
			  
          </div>
          <!-- Text input-->
          <div class="form-group">
            <div class="form-group row">
            <div class="col-sm-12">
              <input type="text"onfocus="this.value=''" value=" <?php input::get('addressLine2') ;?>" name="addressLine2" placeholder="Address Line 2"  id="addressLine2" maxlength="25"class="form-control"  >
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group row">
            <div class="col-sm-5">
              <input type="text"onfocus="this.value=''" value=" <?php input::get('city') ;?>"  id="city" placeholder="City*"  maxlength="10"class="form-control" required>
            </div>
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''"value=" <?php input::get('state') ;?>" name="state" placeholder="State*" maxlength="10" class="form-control" required>
            </div>
            <div class="col-sm-3">
              <input type="text"onfocus="this.value=''" value=" <?php input::get('postalcode'); ?>" name="postalCode" placeholder="Postal Code*"  maxlength="5"class="form-control" required>
            </div>
          </div><hr class="my-3">
<!-- Parent/Guadian Contact Section -->
          <!-- Form Name -->
          <legend>Parent/Guadian Information</legend>
          <!-- Text input-->
          <div class="form-group row">
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''" value=" <?php input::get('pfirstName') ;?>"  id="pfirstName" name="pfistName" placeholder="First Name*"  class="form-control" required><small name="validpFirstName"  id="validpFirstName" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-4">
              <input type="text" onfocus="this.value=''"name="pmiddleName" value=" <?php input::get('pmiddleName'); ?>" id="pmiddleName" placeholder="Middle Name*" class="form-control" ><small name="validpmiddleName"  id="validpmiddleName" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-4">
              <input type="text" onfocus="this.value=''" id="pLastName"value=" <?php input::get('pLastName') ;?>" name="pLastName"placeholder="Last Name*" class="form-control" required><small name="validpLastName"  id="validpLastName" class="form-text " style="color: indianred"></small>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3">
              <select  placeholder="Contact Method" id="pPreferedContact"  value=" <?php input::get('pPreferedContact') ;?>" name="pPreferedContact" style="height: 41px" class="form-control">
                <option disabled >Relation*</option>
                <option value="phone">Mother</option>
                <option value="text">Father</option>
                <option value="email">Other</option>
              </select>
            </div>  
            <div class="col-sm-4">
              <input type="text" onfocus="this.value=''" value=" <?php input::get('parentPhone'); ?>" placeholder="Phone Number*" id="parentPhone" name="parentPhone"  maxlength="10"required style="margin-top: 0px" class="form-control"><small name="validparentPhone"  id="validparentPhone" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-5">
              <input type="email" onfocus="this.value=''"value=" <?php input::get('pEmail') ;?>" name="pEmail" id="pEmail" placeholder="Email*" required class="form-control"><small name="validpEmail"  id="validpEmail" class="form-text " style="color: indianred"></small>
            </div>
           </div>

<!-- Emergency Contact Section --><hr class="my-3">
          <!-- Form Name -->
          <legend>Emergency Contact Information</legend>
          <!-- Text input-->
          <div class="form-group row">
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''" value=" <?php input::get('eFirstName') ;?>" name="eFirstName" id="eFirstName" placeholder="First Name" class="form-control"><small name="valideFirstName"  id="valideFirstName" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''" value=" <?php input::get('eMiddleName'); ?>"  name="eMiddleName" id="eMiddleName" placeholder="Middle Name" class="form-control"><small name="valideMiddleName"  id="valideMiddleName" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''" value=" <?php input::get('eLastName'); ?>" name="eLastName" id="eLastName" placeholder="Last Name" class="form-control"><small name="valideLastName"  id="valideLastName" class="form-text " style="color: indianred"></small>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3">
              <select placeholder="Contact Method"value=" <?php input::get('emergencyPreferedContact') ;?>" id="emergencyPreferedContact"  name="emergencyPreferedContact" style="height: 41px" class="form-control">
                <option disabled  selected>Relation</option>
                <option value="phone">Parent</option>
                <option value="text">Sibling</option>
                <option value="email">Other</option>
              </select>
            </div>  
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''" value="<?php input::get('ePhoneNbr') ;?>" name="ePhoneNbr" id="ePhoneNbr" style="margin-top: 0px" placeholder="Phone Number" class="form-control"><small name="validePhoneNbr"  id="validePhoneNbr" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-5">
              <input type="email"onfocus="this.value=''"value="<?php input::get('eEmail') ;?>"  name="eEmail" id="eEmail" placeholder="Email" class="form-control"><small name="valideEmail"  id="valideEmail" class="form-text " style="color: indianred"></small>
            </div>
           </div>
<hr class="my-3">
            <legend>Registration for class</legend>
            <div class="form-group" style="margin-left:-15px">
                <div class="col-sm-6">
              <select  name="class" value="<?php input::get('class') ;?>" id="class" placeholder="Class" required class="form-control">
				  <option disabled  selected>Class*</option>
                <option value="REC">Reciption Group</option>
                <option value="1CI">1CI</option>
				  <option value="1GR">1GR</option>
				  <option value="2G">2G</option>
				  <option value="2W">2W</option>
                <option value="3P">3P</option>
				  <option value="3R">3R</option>
				  <option value="4H">4H</option>
				  <option value="4U">4U</option>
                <option value="5H">5H</option>
				  <option value="5T">5T</option>
				  <option value="6R">6R</option>
				  <option value="6M">6M</option>
				  
              </select>
            </div>
            <input type="hidden" name="token" value="<?php echo token::generate();?>">
          </div>
			  
			<div class="form-group">
				
    <div class="form-check ">
		<div class="form-group ">
				  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" >
      <label class="form-check-label" for="invalidCheck">
        Please check the box if you would like to receive the newsletter.
      </label></div><div class="form-group"></div>
      <input  type="checkbox" style="margin-left: -20px" value="" id="invalidCheck" required>
      <label  class="form-check-label" for="invalidCheck">
        Agree to <a href="Policies.html" >terms and conditions</a>
      </label></div>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
<!-- Command --><hr class="my-4">
          <div class="form-group">
            
              <div class="pull-right offset-8">
                <button type="reset" class="btn cancelbtn1  ">Cancel</button>
                <button type="submit" class=" btn btn-lg btn-default registerButton "   title="Make sure all required fields all filled up and all fields are valid"  style="margin-left: 5px">Register</button>
				  <small style="color: red" id="beforSubmit"></small>
              </div>
            
          </div>
        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
		
		
		</ div>
		
	
	
	<hr class="my-4">
	<nav aria-label="breadcrumb" style="margin-bottom: 5px;padding-left: -50;" >
      <ol class="breadcrumb">
		    <hr class="my-4">
      </ol>
    </nav>
	<div class="row">
		<div class=" col-md-1" style="background-color: #F2F2F2"></div>
	<div class="card col-md-4">
	  <div class="card-body" >
	    <a href="events.html"> <div class="card-header mb-2">Events </div></a>
	    <h6 class="  mb-3 text-muted"><a href="events.html#engineersday" class="text-muted">Engineers Day - Mar 6th </a></h6>
		  <h6 class=" mb-3 text-muted"><a href="events.html#mothersday" class="text-muted">Mother's Day - Mar 22nd</a></h6>
		  <h6 class=" mb-3 text-muted"><a href="events.html#autismday" class="text-muted">World Autism Awareness Day - Apr 2nd</a></h6>
		  <h6 class=" mb-3 text-muted"><a href="events.html#deafday" class="text-muted">Deaf AwarenessDay - May 4th</a></h6>
		  <h6 class=" mb-3 text-muted"><a href="events.html#museum" class="text-muted">International Museum Day - May 18th</a></h6>
		  <h6 class=" mb-3 text-muted"><a href="events.html#pride" class="text-muted">Pride Day - Jun 1st</a></h6>
		  
	    
		  <div class="card-footer " style="position: inherit"><center> <a href="events.html">See all...</a> </center></div> </div>
	  </div>
		<div class=" col-md-2" style="background-color: #F2F2F2"></div>
		<div class="card col-md-4">
	  <div class="card-body">
	    <div class="card-header"> Contact </div>
		  <h6>Address:</h6>
	    <p class="card-text"><h6 class="card-subtitle mb-2 text-muted">SEN Special school</h6> 20 kingdom street <br>
	    Macclesfield, cheshire <br>1PES 2SE</p>
		  <h6 > Telephone:</h6><p class="card-text">0156948758</p>
			<div class="card-footer " style="position: inherit" ><center> <a href="mailto:name@website.com">Email Us</a> </center></div>
	      </div>
 
        </div>
	<div class=" col-md-1" style="background-color: #F2F2F2"></div>
	</div>
	<hr class="my-4">
	  <marquee  behavior="alternate" bgcolor="#F2E3B6" onmouseover="stop()" onmouseout="start()" scrollamount="2" scrolldelay="1" direction="top" style="border-radius: 0px 15px 0px 15px">
		  <ul>
		  <li  class="awardsList"  >   <img class="awards" src="images/award/6e815ead-node_1138384330832586.KvdxtyIGWHsStMAhruF6_height640_Large.png" height="120px" alt="TES independent school award"/></li>
		  <li class="awardsList"> <img class="awards" src="images/award/award.png"  height="120px" alt="argus school and education award 2020"/></li>
			  <li class="awardsList"><img  class="awards" src="images/award/Inspire Awards lock-up 2017.png" height="120px"  alt="inspire award"/></li>
			  <li class="awardsList"><img class="awards" src="images/award/ISP-Awards-Rosette-Shortlisted-cropped-233x300.png" height="120px" alt="ISP award independent school of the year 2019"/></li>
			  <li class="awardsList"><img class="awards" src="images/award/unnamed.png"  height="120px" alt="genderaction supporter award"/></li>
			  <li class="awardsList"><img class="awards" src="images/award/WAS (1)-200x206.png" height="120px"  alt="WAS promoting wellbeing and mental health"/></li>
		  </ul>
	  </marquee>
</div>
  </div>	  
</Section>
	<Footer>
	  <div class="container" >
		  
		<div class="row back"style="padding-top: 5px" >
		  <div class="col-4" style="color: antiquewhite; margin-top: 0px">
                        <form>
                            <div class="text-center">
                                <h3>Sign up to our newsletter</h3>
                            </div>
                          <div class="form-group">
                                <input type="text" name="name" placeholder="Name" class="form-control">
                                <input type="email" name="email" placeholder="Email" class="form-control">
                          </div>
                            <div class="form-group">
                              <button type="button" class="btn btn-success"   style="width:100%;display: block; background-color: #BFBD9F">Sign Up!</button>
                          </div>
                        </form>              
          </div>  
			<div class="col-2" style="color: antiquewhite; margin-top: 5px">
			 Our school<br>
				<a href="school.html#team"> <small class="small " style="color: antiquewhite;">Meet our team </small></a> <br>
				<a href="school.html#vacancies"><small class="small " style="color: antiquewhite;">Job vacancies </small></a> <br>
				<a href="school.html#policies"><small class="small " style="color: antiquewhite;">School Policies </small></a> <br>
				<a href="school.html#history"><small class="small " style="color: antiquewhite;">School history </small></a> <br>
				<a href="contact.html"><small class="small " style="color: antiquewhite;">Get in touch </small></a> <br>
				<a href="school.html#address"><small class="small " style="color: antiquewhite;">Address </small></a> <br>
				<a href="school.html#apprentice"><small class="small " style="color: antiquewhite;">Apprentice </small></a> <br>
			
			</div>
			<div class="col-3" style="color: antiquewhite; margin-top: 5px">
	Follow us:
		    <img src="images/social.png" width="auto" height="200" alt=""/> </div>
			
		 <div class="col-3" style="color: antiquewhite; margin-top: 5px" name="accessible" id="google_translate_element">
			 Languages:
		  
		  
		  </div>


			  
			
			
			
			
		</div>
	    <div class="row" style="background-color: #012340">
		  <div class="col-5"style="color: antiquewhite;" >
		  
		  <small class="small text-muted"> Copyright © SEN SPEACIAL SCHOOL 2020- All rights reserved</small></div>
		  <div class="col-7" style="color: antiquewhite; margin-top: 0px">
				
			<ul style="text-align: center;margin-top: 5px">
				
					<li class="footerlist "  style="border-left: 10px;" ><a href="policies.html"> <small class="small text-muted">Policies</small></a></li>
					<li  class="footerlist"><a href="terms.html"><small class="small text-muted" style="margin-left: 5px;">Terms & Conditions</small></a></li>
					<li  class="footerlist"><a href="privacy.html"><small class="small text-muted"  style="margin-left: 5px">Privacy</small></a></li>
			  <li   class="footerlist"><a href="sitemap.html"><small class="small text-muted"  style="margin-left: 5px">Site map</small></a></li>
	
		    </ul>
			  
	     		 
        </div>
			
		  
	    </div>
			
			
			
	  </div>
		
		
	  </div>
		
		
		
	  
	</Footer>
	  


<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" >
    <div class="container" style="padding-bottom: 10px;padding-top: 10px">
      <div style="background-color: #F2E3B6;margin-left: 0px;margin-right: 0px;border-left: 10px solid #012340; "><h1  > <i class="fas fa-cogs"></i> Oops! Sorry i have a headache today!</h1></div>
		
      <h2 style="background-color: #BFBD9F;border-left: 10px solid #012340">Feature is not available at the moments</h2>
		<hr class="my-4">
		<h3>Q/A:</h3>
		<p><strong>Question: </strong> Wait, is this an error? <br>
		<strong>Answer: </strong>No, our developers are updating the website and that effect some of the website features.</p>
    <p><strong>Question: </strong>What can i do? <br>
		<strong>Answer: </strong> Please try again later or get in touch.</p>
		<hr class="my-4">
      <div class="clearfix" >
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class=" btn   btnSearch cancelbtn" style="border-right: 0;border-left: 2px solid #012340;border-top-left-radius: 7px;border-bottom-left-radius: 7px;border-top-right-radius: 0px;border-bottom-right-radius: 0px;border: 1px 1px 1px 1px;"> Close</button>
        <button type="button"  onclick="window.location.href = 'contact.html';" class=" btn   btnSearch deletebtn" style="border: 1px 1px 1px 1px;" >Contact us</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
	
	
	
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
	
	
	
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	
//<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
$(function() {
	$( "#Datepicker1" ).datepicker(); 
});
</script>
	


</body>
</html>
