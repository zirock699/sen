<form class="form-horizontal" method="post" action="register.php" id="register" role="form">
        <fieldset>

          <!-- Form Name -->
          <legend>Personal Information Details</legend>

          <!-- Text input-->
          <div class="form-group row">
            <div class="col-sm-4">
              <input type="text" onfocus="this.value=''"name="firstName" id="firstName" placeholder="First Name*" class="form-control" required>
				
				<small name="validFirstName" id="validFirstName" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''" name="middleName" id="middleName" placeholder="Middle Name" class="form-control">
				<small name="validMiddleName"  id="validMiddleName" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-4">
              

<input type="text" name="secondName"  id="secondName" placeholder="SecondName" onfocus="this.value=''"class="form-control">
				<small name="validSecondName"  id="validSecondName" class="form-text " style="color: indianred"></small>
            </div>
          </div>

          
			<div class="form-group row">
            <div class="col-sm-6">
              <input type="text"onfocus="this.value=''" placeholder="Date Of Birth*" name="dateOfBirth" id="dateOfBirth" style="height: 41px" class="form-control date" required>
				<small name="validDateOfBirth"  id="validDateOfBirth" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-6" style="margin-top: 20px">
              <select type="gender" placeholder="Gender"  name="gender"style="height: 41px" class="form-control" required>
                <option  disabled selected>Gender*</option>
				  <option value="female">Female</option>
                <option value="male">Male</option>
				  <option value="other">Other</option>
				  <option value="preferNotToSay">Prefer not to say</option>
              </select>
            </div>
          </div>
			<div class="form-group row">
            
            <div class="col-sm-6" style="margin-top: 20px">
              <select   name="disability"  id="disability" style="height: 41px" class="form-control" required>
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
              <input type="text" onfocus="this.value=''" placeholder="Please specify" name="specifyOther" id="specifyOther" style="height: 41px"  class="form-control">
				
            </div>
          </div>
			<hr class="my-3">
			<fieldset>
			<legend>Log-in details </legend>
			<div class="form-group row">
            <div class="col-sm-6">
              <input type="email" onfocus="this.value=''"id="email" name="email" placeholder="Email*" class="form-control" required><small name="validEmail"  id="validEmail" class="form-text " style="color: indianred"></small>
            </div>
				
				<div class="col-sm-6">
              <input type="email" onfocus="this.value=''"id="comfirmemail" name="comfirmemail" placeholder="Email*" class="form-control" required><small name="validComfirmEDemail"  id="validComfirmEDemail" class="form-text " style="color: indianred"></small>
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
              <input type="text"onfocus="this.value=''" name="addressLine1" placeholder="Address Line 1*"  maxlength="25"class="form-control"  required>
            </div>
			  
			  
			  
			  
          </div>
          <!-- Text input-->
          <div class="form-group">
            <div class="form-group row">
            <div class="col-sm-12">
              <input type="text"onfocus="this.value=''" name="addressLine2" placeholder="Address Line 2"  maxlength="25"class="form-control"  >
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group row">
            <div class="col-sm-5">
              <input type="text"onfocus="this.value=''" name="city" placeholder="City*"  maxlength="10"class="form-control" required>
            </div>
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''" name="state" placeholder="State*" maxlength="10" class="form-control" required>
            </div>
            <div class="col-sm-3">
              <input type="text"onfocus="this.value=''" name="postalCode" placeholder="Postal Code*"  maxlength="5"class="form-control" required>
            </div>
          </div><hr class="my-3">
<!-- Parent/Guadian Contact Section -->
          <!-- Form Name -->
          <legend>Parent/Guadian Information</legend>
          <!-- Text input-->
          <div class="form-group row">
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''" id="pfirstName" name="pfistName" placeholder="First Name*"  class="form-control" required><small name="validpFirstName"  id="validpFirstName" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-4">
              <input type="text" onfocus="this.value=''"name="pmiddleName" id="pmiddleName" placeholder="Middle Name*" class="form-control" ><small name="validpmiddleName"  id="validpmiddleName" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-4">
              <input type="text" onfocus="this.value=''" id="pLastName" name="pLastName"placeholder="Last Name*" class="form-control" required><small name="validpLastName"  id="validpLastName" class="form-text " style="color: indianred"></small>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3">
              <select  placeholder="Contact Method" name="pPreferedContact" style="height: 41px" class="form-control">
                <option disabled selected >Relation*</option>
                <option value="phone">Mother</option>
                <option value="text">Father</option>
                <option value="email">Other</option>
              </select>
            </div>  
            <div class="col-sm-4">
              <input type="text" onfocus="this.value=''" placeholder="Phone Number*" id="parentPhone" name="parentPhone"  maxlength="10"required style="margin-top: 0px" class="form-control"><small name="validparentPhone"  id="validparentPhone" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-5">
              <input type="email" onfocus="this.value=''" name="pEmail" id="pEmail" placeholder="Email*" required class="form-control"><small name="validpEmail"  id="validpEmail" class="form-text " style="color: indianred"></small>
            </div>
           </div>

<!-- Emergency Contact Section --><hr class="my-3">
          <!-- Form Name -->
          <legend>Emergency Contact Information</legend>
          <!-- Text input-->
          <div class="form-group row">
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''" name="eFirstName" id="eFirstName" placeholder="First Name" class="form-control"><small name="valideFirstName"  id="valideFirstName" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''" name="eMiddleName" id="eMiddleName" placeholder="Middle Name" class="form-control"><small name="valideMiddleName"  id="valideMiddleName" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''" name="eLastName" id="eLastName" placeholder="Last Name" class="form-control"><small name="valideLastName"  id="valideLastName" class="form-text " style="color: indianred"></small>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3">
              <select placeholder="Contact Method"  name="emergencyPreferedContact" style="height: 41px" class="form-control">
                <option disabled  selected>Relation</option>
                <option value="phone">Parent</option>
                <option value="text">Sibling</option>
                <option value="email">Other</option>
              </select>
            </div>  
            <div class="col-sm-4">
              <input type="text"onfocus="this.value=''" name="ePhoneNbr" id="ePhoneNbr" style="margin-top: 0px" placeholder="Phone Number" class="form-control"><small name="validePhoneNbr"  id="validePhoneNbr" class="form-text " style="color: indianred"></small>
            </div>
            <div class="col-sm-5">
              <input type="email"onfocus="this.value=''" name="eEmail" id="eEmail" placeholder="Email" class="form-control"><small name="valideEmail"  id="valideEmail" class="form-text " style="color: indianred"></small>
            </div>
           </div>
<hr class="my-3">
            <legend>Registration for class</legend>
            <div class="form-group" style="margin-left:-15px">
                <div class="col-sm-6">
              <select  name="class" placeholder="Class" required class="form-control">
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
      </form>?> ';
      ?>