@extends('layout.app')

@section('content')

 <form>
  <div class="container my-3 px-5">
      <div class="titleacc">
        {{$title}}
      </div>
      
        <p> Fill out the need information to continue </p>
      <div class="personalinfo">
          <div class="row">
              <div class="col-3 ">
                <div class="input-group-sm mb-3">
                    <label>Surname</label>
                    <span class="input-group-text bg-light">
                      <i class="fas fa-user" aria-hidden="true"></i> 
                      <input type="text" class="form-control" id="surname" placeholder="Enter Surname" value="" required>
                    </span>
                    </div>
                  </div>
              
              <div class="col-3">
                <div class="input-group-sm mb-3">
                  <label>First Name</label>
                  <span class="input-group-text bg-light">
                    <i class="fas fa-user" aria-hidden="true"></i> 
                  <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" value="" required>
                  </span>
                </div>
              </div>

              <div class="col-3">
                  <div class="input-group-sm mb-3">
                      <label>Middle Initial</label>
                      <span class="input-group-text bg-light">
                        <i class="fas fa-user" aria-hidden="true"></i> 
                    <input type="text" class="form-control" id="middle" placeholder="Enter Middile Initial" value="" required>
                      </span>
                  </div>
                </div><br>
            </div>

            <div class="row">
              <div class="col-3">
                  <div class="input-group-sm mb-3">
                      <label>Birthday</label><br>
                      <span class="input-group-text bg-light">
                      <i class="fas fa-calendar" aria-hidden="true"></i>
                      <input placeholder="Select Date" style="color: #3fb9a4" type="text" class="form-control" id="datepicker" required>
                      </span>
                    </div>
              </div>

              <div class="col-3">
                  <div class="input-group-sm mb-3">
                  <label>Age</label>
                  <span class="input-group-text bg-light">
                    <i class="fas fa-user" aria-hidden="true"></i> 
                  <input type="number" id="age" name="age" class="form-control active valid" min="18" max="99" maxlength="2" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" aria-invalid="true" placeholder="How old are you?" required>
                  </span>
                </div>
              </div>
      <div>

      <div class="acch5">
      <h5> Address </h5>
      </div>

      <div class="address">
        <div class="row">
            <div class="col-3">
              <div class="input-group-sm mb-3">
                  <label>Street Name</label>
                  <span class="input-group-text bg-light">
                    <i class="fas fa-map" aria-hidden="true"></i>
                    <input type="text" class="form-control" id="street" placeholder="Block 18 Lot 11 Example Street" value="" required>
                  </span>
                  </div>
            </div>
            
            <div class="col-3">
              <div class="input-group-sm mb-3">
                <label>City</label>
                <span class="input-group-text bg-light">
                  <i class="fas fa-map" aria-hidden="true"></i>
                <input type="text" class="form-control" id="city" placeholder="Enter Municipality" value="" required>
                </span>
              </div>
            </div>

            <div class="col-3">
                <div class="input-group-sm mb-3">
                    <label>Postal Code</label>
                    <span class="input-group-text bg-light">
                      <i class="fas fa-hashtag" aria-hidden="true"></i>
                  <input type="number" class="form-control" id="postal" placeholder="Enter Your Postal Code" value="" required>
                </div>
            </div>
        </div>  
      <div>

      <div class="acch5">
        <h5> Contacts </h5>
        </div>

      <div class="address">
        <div class="row">
            <div class="col-3">
              <div class="input-group-sm mb-3">
                  <label>Phone Number</label>
                  <span class="input-group-text bg-light">
                  <i class="fas fa-phone" aria-hidden="true"></i>
                    <input type="tel" class="form-control" id="phone_number" placeholder="Enter Your Phone Number" value="" required>
                  </span>
                  </div>
            </div>
            
            <div class="col-3">
              <div class="input-group-sm mb-3">
                <label>Mobile Number</label>
                <span class="input-group-text bg-light">
                <i class="fas fa-mobile" aria-hidden="true"></i>
                <input type="tel" class="form-control" id="mobile_number" placeholder="Enter Your Mobile Number" value="" required>
                </span>
              </div>
            </div>

            <div class="col-3">
                <div class="input-group-sm mb-3">
                    <label>Email Address</label>
                    <span class="input-group-text bg-light">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                  <input type="email" class="form-control" id="emailaddress" placeholder="name@example.com" value="" required>
                    </span>
                </div>
            </div>
        </div>  
      <div>
    <div class="acch5">
    <h5> Incase of Emergency Please Contact the following: </h5>
    </div>

    <div class="emergency">
      <div class="row">
          <div class="col-3">
            <div class="input-group-sm mb-3">
                <label>Full Name</label>
                <span class="input-group-text bg-light">
                  <i class="fas fa-user" aria-hidden="true"></i> 
                  <input type="text" class="form-control" id="emergency_name" placeholder="Enter Emergency Person's Full Name" value="" required>
                </span>
                </div>
          </div>
          
          <div class="col-3">
            <div class="input-group-sm mb-3">
              <label>Mobile Number</label>
              <span class="input-group-text bg-light">
              <i class="fas fa-mobile" aria-hidden="true"></i>
              <input type="tel" class="form-control" id="emergency_number" placeholder="Enter Mobile Number" value="" required>
              </span>
            </div>
          </div>

          <div class="col-3">
              <div class="input-group-sm mb-3">
                  <label>Relationship</label>
                  <span class="input-group-text bg-light">
                    <i class="fas fa-user" aria-hidden="true"></i> 
                <input type="text" class="form-control" id="emergency_relationship" placeholder="Enter Relationship" value="" required>
                  </span>
              </div>
          </div>
      </div>  
    <div>

      <div class="btnobt">
    <a id="obtain" onclick="myFunction()" type="submit" style="background-color: #3fb9a4; color:black; border-color: #3fb9a4" class="btn btn-primary w-50 ms-15">Next</a>
    </div>
  </div>
</form>

<div id="confirmation">
    <p id="popout"></p>
  </div>

<script type="text/javascript">
  function myFunction() {
    if (surname.value != '' && firstname.value != ''&&
      middle.value != '' && datepicker.value != '' && age.value != '' && age.value != 15 && age.value > 15
      && age.value <= 99 && street.value != ''
      && city.value != '' && postal.value != '' && phone_number.value != '' && mobile_number.value != ''
      && emailaddress.value != '' && emergency_name.value != '' && emergency_number.value != ''
      && emergency_relationship.value != ''){
    document.getElementById("obtain").href="{{ url('/bookdetails') }}"; 
    return false;
    }
    
    if (age.value > 0 && age.value <= 17){
      firstshake = true
      text = "You must be 18 years old and above"
      }

    else if (age.value >= 100){
      firstshake = true
      text = "Age Field must be 2 digits only"
    }

    else {
      firstshake = true
      text = "Please Fill out the whole form to proceed"
    }
      document.getElementById("popout").style.boxShadow = "3px 3px red, 0em 0 1em red";
      document.getElementById("popout").innerHTML = text; 
  }

    $( document ).click(function() {
      if(firstshake == true){
        $("#popout").delay(1).show(100);
        $( "#popout" ).effect( "shake" );
        $("#popout").delay(2000).hide(400);
      }
      firstshake = false
    
  });
</script>

@endsection

