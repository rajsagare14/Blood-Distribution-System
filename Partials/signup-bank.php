<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Assets/css/dash1.css">
    <title>Sign Up | Blood Bank</title>
  </head>
  <body>
    <h3>Blood BANK REGISTRATION FORM</h3>
    <form action="../Actions/signup-bank.php" method="POST">
      <div class="panel panel-default">
        <div class="panel-body">
          <fieldset>
              <legend>Blood Bank Details</legend>
              <div class="row">
                <div class="col-sm-2">
                  <b>Blood Bank Name</b><font color="red">*</font>
                </div>
                <div class="col-sm-3">
                  <input type="text" name="bldbankName" maxlength="100" tabindex="1" value="" onkeypress="return validateAlphaOnlyWithDotAndSpace(event,this)" class="form-control">
                </div>
                <div class="col-sm-3">
                  <b>Parent Hospital Name</b>
                </div>
                <div class="col-sm-4">
                  <input type="text" name="parentHospName" maxlength="100" tabindex="1" value="" onkeypress="return validateAlphaOnlyWithDotAndSpace(event,this)" class="form-control"/>
                </div>
              </div>
                <div class="col-sm-2">
                  <b>Category</b><font color="red">*</font>
                </div>
                <div class="col-sm-2">
                  <select name="hospType" onchange="" class="form-control">
                    <option value="-1">Select type</option>
                    <option value="Govt">Govt.</option>
                    <option value="Red Cross">Red Cross</option>
                    <option value="Charitable">Charitable/Vol</option>
                    <option value="Private">Private</option>
                  </select>
                </div>

                <div class="col-sm-2">
                  <b>Contact Person</b><font color="red">*</font>
                </div>
                <div class="col-sm-2">
                  <input type="text" name="contactPerson" maxlength="50" tabindex="1" value="" onkeypress="return validateAlphaOnlyWithDotAndSpace(event,this)" class="form-control"/>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-2">
                  <b>Email</b>
                </div>
                <div class="col-sm-2">
                  <input type="text" name="hospEmail" maxlength="40" tabindex="1" value="" class="form-control"/>
                </div>

                <div class="col-sm-2">
                  <b>Contact No.</b><font color="red">*</font>
                </div>
                <div class="col-sm-2">
                  <input type="text" name="hospContact" maxlength="43" tabindex="1" value="" onkeypress="return validateNumericWithComma(event)" class="form-control"/>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-2">
                  <b>Licence No.</b>
                </div>
                <div class="col-sm-2">
                  <input type="text" name="licenceNo" maxlength="100" tabindex="1" value="" onkeypress="return  validateAlphaNumericWithDotsOnly(event,this)" class="form-control"/>
                </div>
                <div class="col-sm-2">
                  <b>From Date&nbsp;&nbsp;&nbsp;</b>
                </div>
                <div class="col-sm-2">
                  <input type="date" id="datepicker" name="licenceFromDate" class="form-control hasDatepicker"/>
                </div>

                <div class="col-sm-2">
                  <b>To Date&nbsp;&nbsp;&nbsp;</b>
                </div>
                <div class="col-sm-2">
                  <input
                    type="date" id="datepicker1" name="licenceToDate" class="form-control hasDatepicker"/>
                </div>
              </div>
              <br />
              <div class="row">
                <div class="col-sm-2">
                  <b>Component Facility</b>
                </div>
                <div class="col-sm-2">
                  <select
                    name="componentFacility" tabindex="1" class="form-control">
                    <option value="-1">Select Value</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="col-sm-2">
                  <b>Apheresis Facility</b>
                </div>
                <div class="col-sm-2">
                  <select
                    name="apheresisFacility" tabindex="1" class="form-control">
                    <option value="-1">Select Value</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="col-sm-2">
                  <b>Helpline No.</b>
                </div>
                <div class="col-sm-2">
                  <input
                    type="text"                name="helplineNo" maxlength="21" tabindex="1" value="" onkeypress="return validateNumericWithComma(event)" class="form-control"/>
                </div>
              </div>
              <br />
          </fieldset>
          <fieldset>
          <legend><b>Blood Bank Address</b></legend>
          <div class="hospital-all-text">
              <div class="hospital-lable-text">Address <span style="color:red; font-weight:bold;">*</span></div>
              <div class="hospital-inputs">
                  <input name="address" id="address" type="text" onblur="validateAddress()">
                  <span id="error-mess07"></span>
              </div>
          </div>

          <div class="hospital-all-text">
              <div class="hospital-lable-text">State&nbsp;<span style="color:red; font-weight:bold;">*</span></div>
              <div class="hospital-inputs">
                  <select id="state" name="state" onchange="binddrop(1);" onblur="validateState()">
                      <option value="">Select state</option>
                                  <option value="Andaman & Nicobar Islands">Andaman &amp; Nicobar Islands</option>
                                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                  <option value="Assam">Assam</option>
                                  <option value="Bihar">Bihar</option>
                                  <option value="Chandigarh">Chandigarh</option>
                                  <option value="Chhatisgarh">Chhatisgarh</option>
                                  <option value="Dadra & Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                                  <option value="Daman & Diu">Daman &amp; Diu</option>
                                  <option value="Delhi">Delhi</option>
                                  <option value="Goa">Goa</option>
                                  <option value="Gujarat">Gujarat</option>
                                  <option value="Haryana">Haryana</option>
                                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                  <option value="Jharkhand">Jharkhand</option>
                                  <option value="Karnataka">Karnataka</option>
                                  <option value="Kerala">Kerala</option>
                                  <option value="Lakshadweep">Lakshadweep</option>
                                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                                  <option value="Maharashtra">Maharashtra</option>
                                  <option value="Manipur">Manipur</option>
                                  <option value="Meghalaya">Meghalaya</option>
                                  <option value="Mizoram">Mizoram</option>
                                  <option value="Nagaland">Nagaland</option>
                                  <option value="Odisha">Odisha</option>
                                  <option value="Puducherry">Puducherry</option>
                                  <option value="Punjab">Punjab</option>
                                  <option value="Rajasthan">Rajasthan</option>
                                  <option value="Sikkim">Sikkim</option>
                                  <option value="Tamil Nadu">Tamil Nadu</option>
                                  <option value="Telangana">Telangana</option>
                                  <option value="Tripura">Tripura</option>
                                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                                  <option value="Uttarakhand">Uttarakhand</option>
                                  <option value="West Bengal">West Bengal</option>
                  </select>
                  <span id="error-mess08"></span>        
              </div>
            </div>

          <div class="hospital-all-text">
              <div class="hospital-lable-text">District&nbsp;<span style="color:red; font-weight:bold;">*</span></div>
              <div class="hospital-inputs">
                  <span id="error-mess09"></span>
                  <input id="districttext" name="districttext" type="text" value="">
              </div>
          </div>

          <div class="hospital-all-text">
              <div class="hospital-lable-text">Sub District&nbsp;</div>
              <div class="hospital-inputs">
                  <span id="error-mess10"></span>

                  <input id="subdistricttext" name="subdistricttext" type="text" value="">
              </div>
          </div>

          <div class="hospital-all-text">
              <div class="hospital-lable-text">Town</div>
              <div class="hospital-inputs">
                  <input id="towntext" name="towntext" type="text" value="">
              </div>
          </div>



          <div class="hospital-all-text">
              <div class="hospital-lable-text">Village </div>
              <div class="hospital-inputs">
                  <input id="villagetext" name="villagetext" type="text" value="">
              </div>
          </div>

          <div class="hospital-all-text">
              <div class="hospital-lable-text">Pin Code&nbsp;<span style="color:red; font-weight:bold;">*</span></div>
              <div class="hospital-inputs">
                  <input name="pincode" id="pincode" class="pincode_width" type="text" onblur="validatePincode()" maxlength="6" autocomplete="off" onkeypress="return isNumberKey(event)">
                  <span id="error-mess11"></span>
              </div>
          </div>


          </fieldset>
          <fieldset>
            <legend><b>Create a username and password for registration</b></legend>
            <label>Username<br></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br>
            <label>Password<br></label>
            <input type="password" placeholder="Enter Password" name="password" required> 
          </fieldset>
          <br>
        </div>

          <div class="row">
            <div class="col-md-12" align="center">
              <br />
              <div class="row">
                <div class="col-sm-12">
                  <div class="text-center">
                    <input class="button" type="submit" value="Submit" onclick="return validateForm();">
                    <input class="button" type="reset" value="Clear">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </form>
  </body>
</html>
