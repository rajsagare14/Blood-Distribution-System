<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../Assets/css/signup-bank.css">
    <title>Sign Up | Blood Bank</title>
  </head>
  <body>
	<h3>Blood BANK REGISTRATION FORM</h3>
  <form action="../Actions/signup-bank.php" method="POST">
    <div class="panel panel-default">
      <div class="panel-body">
        <fieldset>
          <legend>Blood Bank Address</legend>
          <div class="row">
            <div class="col-sm-1"><b>State</b><font color="red">*</font></div>
            <div class="col-sm-3">
              <select
                name="stateCode"
                onchange="loadDistrictList(this.value)"
                class="form-control"
                id="stateCode"
              >
                <option value="-1">Select State</option>

                <option value="35">Andaman &amp; Nicobar Islands</option>
                <option value="28">Andhra Pradesh</option>
                <option value="12">Arunachal Pradesh</option>
                <option value="18">Assam</option>
                <option value="10">Bihar</option>
                <option value="94">Chandigarh</option>
                <option value="22">Chhattisgarh</option>
                <option value="26">Dadra &amp; Nagar Haveli</option>
                <option value="25">Daman &amp; Diu</option>
                <option value="97">Delhi</option>
                <option value="30">Goa</option>
                <option value="24">Gujarat</option>
                <option value="96">Haryana</option>
                <option value="92">Himachal Pradesh</option>
                <option value="91">Jammu and Kashmir</option>
                <option value="20">Jharkhand</option>
                <option value="29">Karnataka</option>
                <option value="32">Kerala</option>
                <option value="37">Ladakh</option>
                <option value="31">Lakshadweep</option>
                <option value="23">Madhya Pradesh</option>
                <option value="27">Maharashtra</option>
                <option value="14">Manipur</option>
                <option value="17">Meghalaya</option>
                <option value="15">Mizoram</option>
                <option value="13">Nagaland</option>
                <option value="21">Odisha</option>
                <option value="34">Puducherry</option>
                <option value="93">Punjab</option>
                <option value="98">Rajasthan</option>
                <option value="11">Sikkim</option>
                <option value="33">Tamil Nadu</option>
                <option value="36">Telangana</option>
                <option value="16">Tripura</option>
                <option value="95">Uttarakhand</option>
                <option value="99">Uttar Pradesh</option>
                <option value="19">West Bengal</option>
              </select>
            </div>

            <div class="col-sm-1">
              <b>District</b><font color="red">*</font>
            </div>
            <div class="col-sm-3">
              <select
                name="districtList"
                id="distList"
                class="form-control"
                onchange=" setSelectedDistrict(this)"
              >
                <option value="-1">Select District</option>
              </select>
            </div>

            <div class="col-sm-1">
              <b>City</b>
            </div>
            <div class="col-sm-3">
              <input
                type="text"
                name="hospCity"
                maxlength="40"
                tabindex="1"
                value=""
                onkeypress="return validateAlphaOnly(event,this)"
                class="form-control"
              />
            </div>
          </div>
          <br />
        </fieldset>
        <br />

        <fieldset>
          <legend>Blood Bank Details</legend>
          <div class="row">
            <div class="col-sm-2">
              <b>Blood Bank Name</b><font color="red">*</font>
            </div>
            <div class="col-sm-3">
              <input
                type="text"
                name="bldbankName"
                maxlength="100"
                tabindex="1"
                value=""
                onkeypress="return validateAlphaOnlyWithDotAndSpace(event,this)"
                class="form-control"
              />
            </div>
            <div class="col-sm-3">
              <b>Parent Hospital Name</b>
            </div>
            <div class="col-sm-4">
              <input
                type="text"
                name="parentHospName"
                maxlength="100"
                tabindex="1"
                value=""
                onkeypress="return validateAlphaOnlyWithDotAndSpace(event,this)"
                class="form-control"
              />
            </div>
          </div>

          <br />

          <div class="row">
            <div class="col-sm-2">
              <b>Short Name</b>
            </div>
            <div class="col-sm-2">
              <input
                type="text"
                name="hospShortName"
                maxlength="10"
                tabindex="1"
                value=""
                onkeypress="return validateAlphaOnlyWithDotAndSpace(event,this)"
                class="form-control"
              />
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
              <input
                type="text"
                name="contactPerson"
                maxlength="50"
                tabindex="1"
                value=""
                onkeypress="return validateAlphaOnlyWithDotAndSpace(event,this)"
                class="form-control"
              />
            </div>
          </div>
          <br />

          <div class="row">
            <div class="col-sm-2">
              <b>Email</b>
            </div>
            <div class="col-sm-2">
              <input
                type="text"
                name="hospEmail"
                maxlength="40"
                tabindex="1"
                value=""
                class="form-control"
              />
            </div>

            <div class="col-sm-2">
              <b>Contact No.</b><font color="red">*</font>
            </div>
            <div class="col-sm-2">
              <input
                type="text"
                name="hospContact"
                maxlength="43"
                tabindex="1"
                value=""
                onkeypress="return validateNumericWithComma(event)"
                class="form-control"
              />
            </div>

            <div class="col-sm-2">
              <b>Fax No.</b>
            </div>
            <div class="col-sm-2">
              <input
                type="text"
                name="hospFax"
                maxlength="20"
                tabindex="1"
                value=""
                onkeypress="return validateNumeric(event)"
                class="form-control"
              />
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-sm-2">
              <b>Licence No.</b>
            </div>
            <div class="col-sm-2">
              <input
                type="text"
                name="licenceNo"
                maxlength="100"
                tabindex="1"
                value=""
                onkeypress="return  validateAlphaNumericWithDotsOnly(event,this)"
                class="form-control"
              />
            </div>
            <div class="col-sm-2">
              <b>From Date&nbsp;&nbsp;&nbsp;</b>
            </div>
            <div class="col-sm-2">
              <input
                type="text"
                id="datepicker"
                name="licenceFromDate"
                class="form-control hasDatepicker"
              />
            </div>

            <div class="col-sm-2">
              <b>To Date&nbsp;&nbsp;&nbsp;</b>
            </div>
            <div class="col-sm-2">
              <input
                type="text"
                id="datepicker1"
                name="licenceToDate"
                class="form-control hasDatepicker"
              />
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-sm-2">
              <b>Component Facility</b>
            </div>
            <div class="col-sm-2">
              <select
                name="componentFacility"
                tabindex="1"
                class="form-control"
              >
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
                name="apheresisFacility"
                tabindex="1"
                class="form-control"
              >
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
                type="text"
                name="helplineNo"
                maxlength="21"
                tabindex="1"
                value=""
                onkeypress="return validateNumericWithComma(event)"
                class="form-control"
              />
            </div>
          </div>
          <br />
        </fieldset>
        <br />

        <div class="row">
          <div class="col-sm-6">
            <fieldset>
              <legend>Postal Address</legend>
              <div class="row">
                <div class="col-sm-2">
                  <b>Address1</b><font color="red">*</font>
                </div>
                <div class="col-sm-10">
                  <input
                    type="text"
                    name="hospAdd1"
                    maxlength="200"
                    tabindex="1"
                    value=""
                    onkeypress="return  validateAlphaNumericWithDotsOnly(event,this)"
                    class="form-control"
                  />
                </div>
              </div>
              <br />

              <div class="row">
                <div class="col-sm-2">
                  <b>Address2</b>
                </div>
                <div class="col-sm-10">
                  <input
                    type="text"
                    name="hospAdd2"
                    maxlength="200"
                    tabindex="1"
                    value=""
                    onkeypress="return  validateAlphaNumericWithDotsOnly(event,this)"
                    class="form-control"
                  />
                </div>
              </div>
              <br />

              <div class="row">
                <div class="col-sm-2">
                  <b>Pincode</b><font color="red">*</font>
                </div>
                <div class="col-sm-4">
                  <input
                    type="text"
                    name="pincode"
                    maxlength="6"
                    tabindex="1"
                    value=""
                    onkeypress="return validateNumeric(event)"
                    class="form-control"
                  />
                </div>
              </div>
              <br />
            </fieldset>

            <fieldset>
              <legend>
                Geographical Coordinates<span style="font-size: 17px"
                  >(<abbr
                    title="Click geocode or use map to fetch latitude/longitude"
                    >?</abbr
                  >)</span
                >
              </legend>
              <div class="row">
                <div class="col-sm-2">
                  <b>Latitude</b>
                </div>
                <div class="col-sm-4">
                  <input
                    type="text"
                    name="hospLatitude"
                    maxlength="6"
                    tabindex="1"
                    value=""
                    onkeypress="return validateNumericwithDot(event)"
                    class="form-control"
                  />
                </div>

                <div class="col-sm-2">
                  <b>Longitude</b>
                </div>
                <div class="col-sm-4" align="left">
                  <input
                    type="text"
                    name="hospLongitude"
                    maxlength="6"
                    tabindex="1"
                    value=""
                    onkeypress="return validateNumericwithDot(event)"
                    class="form-control"
                  />
                </div>
              </div>
              <br />

              <div class="row">
                <div class="col-sm-2">
                  <button
                    type="button"
                    id="submitGeocode"
                    class="btn btn-danger"
                    onclick=""
                  >
                    Geocode
                  </button>
                </div>
                <div class="col-sm-10">
                  <textarea
                    name="address"
                    tabindex="1"
                    rows="2"
                    disabled="disabled"
                    class="form-control"
                  ></textarea>
                </div>
              </div>
              <br />
            </fieldset>

            <div class="row">
              <div class="col-sm-4">
                <b>Website</b>
              </div>
              <div class="col-sm-8">
                <input
                  type="text"
                  name="hospWebsite"
                  tabindex="1"
                  value=""
                  class="form-control"
                />
              </div>
            </div>
            <br />
            <!--Added bY Hemant on 26-07-19  -->
            <div class="row">
              <div class="col-sm-4">
                <b>No of Bed Hospital</b>
              </div>
              <div class="col-sm-4">
                <input
                  type="text"
                  name="noOfBed"
                  tabindex="1"
                  value=""
                  class="form-control"
                />
              </div>
            </div>
            <br />

            <!-- Ends -->
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12" align="center">
            <br />
            <div class="row">
              <div class="col-sm-12">
                <div class="text-center">
                  <input class="button" type="submit" value="Submit" onclick="return validateForm();">
                  <input class="button" type="reset" value="Clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  </body>
</html>
