<?php
/*
Template Name: Application
*/
?>

<?php get_header('rent'); ?>

<form action="<?php bloginfo('template_directory'); ?>/formmail.php" method="post" id="msform">
      <!-- progressbar -->
      <ul id="progressbar">
        <li class="active">Step 1</li>
        <li>Step 2</li>
        <li>Step 3</li>
        <li>Step 4</li>
        <li>Step 5</li>
        <li>Step 6</li>
        <li>Step 7</li>
        <li>Finished</li>
      </ul>
      <!-- fieldsets -->
      <fieldset>
        <h2 class="fs-title">Personal Information</h2>
        <h3 class="fs-subtitle">Step 1</h3>
        <!-- Name -->
        <input type="text" name="firstname" maxlength="15" placeholder="First Name" required/>
        <input type="text" name="middlename" maxlength="15" placeholder="Middle Name" required/>
        <input type="text" name="lastname" maxlength="15" placeholder="Last Name" required/>
        <!-- Personal info -->
        <input type="date" name="birthday" placeholder="Birthday Ex: MM-DD-YYYY" required/>
        <input type="text" name="driverlicense" maxlength="15" placeholder="Driver's License No." required/>
        <input type="text" name="licensestate" maxlength="2" placeholder="State Ex: TN" required/>
        <input type="tel" name="phone" maxlength="12" placeholder="Phone Number Ex: XXX-XXX-XXXX" required/>
        <input type="email" name="email" placeholder="Email" required/>
        
        <!-- address -->
        <h3 class="fs-subtitle">Personal Address</h3>
        <input type="text" name="s1address1" placeholder="Street Address" required/>
        <input type="text" name="s1address2" placeholder="Street Address Line 2" />
        <input type="text" name="s1city" placeholder="City" required/>
        <input type="text" name="s1state" maxlength="2" placeholder="State Ex: TN" required/>
        <input type="text" name="s1zipcode" maxlength="5" placeholder="Zip Code" required/>
        <input type="text" name="s1country" value="United States" required/>
        <!-- previous address -->
        <h3 class="fs-subtitle">Prior Address</h3>
        <input type="text" name="landlord" placeholder="Prior Landlord" />
        <input type="tel" name="phone" maxlength="10" placeholder="Prior Landlord's Phone# Ex: XXX-XXX-XXXX" />
        <input type="text" name="s2address1" placeholder="Street Address" required/>
        <input type="text" name="s2address2" placeholder="Street Address Line 2" />
        <input type="text" name="s2city" placeholder="City" required/>
        <input type="text" name="s2state" maxlength="2" placeholder="State Ex: TN" required/>
        <input type="text" name="s2zipcode" maxlength="5" placeholder="Zip Code" required/>
        <input type="text" name="s2country" value="United States" required/>
        <input type="number" name="s2length" placeholder="How many months?" required/>
        <input type="text" name="s2reason" placeholder="Reason Left" required/>
        <!-- nav buttons -->
        <button type="button" class="next action-button" >Next</button>
      </fieldset>

      <fieldset>
        <h2 class="fs-title">Significant Other's Information</h2>
        <h3 class="fs-subtitle">Step 2</h3>
        <!-- Name -->
        <input type="text" name="2firstname" placeholder="First Name" />
        <input type="text" name="2middlename" placeholder="Middle Name" />
        <input type="text" name="2lastname" placeholder="Last Name" />
        <!-- Personal info -->
        <input type="date" name="2birthday" placeholder="Birthday Ex: MM-DD-YYYY" />
        <input type="text" name="2driverlicense" maxlength="15" placeholder="Driver's License No." />
        <input type="text" name="2licensestate" maxlength="2" placeholder="State Ex: TN" />
        <input type="tel" name="2phone" maxlength="12" placeholder="Phone Number Ex: XXX-XXX-XXXX" />

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
      </fieldset>

      <!-- fieldsets -->

      <fieldset>
        <h2 class="fs-title">Proposed Occupant(s)</h2>
        <h3 class="fs-subtitle">Step 3</h3>
        <input type="number" name="adults" placeholder="How many adults will live in this unit?" required/>
        <input type="number" name="kids" placeholder="How many kids will live in this unit?" required/>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
      </fieldset>

      <!-- fieldsets -->

      <fieldset>
        <h2 class="fs-title">Employment</h2>
        <h3 class="fs-subtitle">Step 4</h3>
        <input type="text" name="1presoccupation" placeholder="Present Occupation" required/>
        <input type="text" name="1presemployer" placeholder="Employer's Name" required/>
        <input type="text" name="1presmanager" placeholder="Manager's Name" required/>
        <input type="tel" name="1presphone" maxlength="12" placeholder="Employer's Phone Ex: XXX-XXX-XXXX" required/>
        <textarea type="text" name="1presaddress" placeholder="Employer's Address" required></textarea>
        <input type="number" name="1prestime" placeholder="How many months have you worked there?" required/>

        <h3 class="fs-subtitle">Significant Other's Employer</h3>
        <input type="text" name="2presoccupation" placeholder="Significant Other's Occupation" />
        <input type="text" name="2presemployer" placeholder="Employer's Name" />
        <input type="text" name="2presmanager" placeholder="Manager's Name" />
        <input type="tel" name="2presphone" maxlength="12" placeholder="Employer's Phone Ex: XXX-XXX-XXXX" />
        <textarea type="text" name="2presaddress" placeholder="Employer's Address" ></textarea>
        <input type="number" name="2prestime" placeholder="How many months have they worked there?" />

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
      </fieldset>

      <!-- fieldsets -->

      <fieldset>
        <h2 class="fs-title">Finances</h2>
        <h3 class="fs-subtitle">Step 5</h3>
        <input type="text" name="income" placeholder="Current Gross Income Per Month" required/>
        <input type="text" name="bank" placeholder="Name of Your Bank" required/>
        <textarea type="text" name="bankaddress" placeholder="Bank's Address" required></textarea>
        <input type="tel" name="bankphone" maxlength="12"  placeholder="Bank's Phone Ex: XXX-XXX-XXXX" required/>
        <label for="bankrupt" class="fs-subtitle">Have you ever declared bankruptcy?</label>
        <select name="bankrupt" required>
          <option>yes</option>
          <option>no</option>
        </select>
        <textarea type="text" name="bankruptreason" placeholder="If yes, explain"></textarea>
        <input type="date" name="bankruptdate" placeholder="Date Declared Bankruptcy Ex: MM-DD-YYYY"/>

        <h3 class="fs-subtitle">Credit Grantor</h3>
        <input type="text" name="creditgrantor" placeholder="Credit Grantor" />
        <textarea type="text" name="creditaddress" placeholder="Credit Grantor's Address"></textarea>
        <input type="tel" name="creditphone" maxlength="12" placeholder="Credit Grantor's Phone Ex: XXX-XXX-XXXX" />

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
      </fieldset>

      <!-- fieldsets -->

      <fieldset>
        <h2 class="fs-title">References</h2>
        <h3 class="fs-subtitle">Step 6</h3>
        <input type="text" name="1refname" placeholder="Reference's Name" required/>
        <input type="text" name="1refrelationship" placeholder="Relationship" required/>
        <input type="tel" name="1refphone" maxlength="12" placeholder="Reference's Phone Ex: XXX-XXX-XXXX" required/>

        <h3 class="fs-subtitle">Reference 2</h3>
        <input type="text" name="2refname" placeholder="Reference's Name" required/>
        <input type="text" name="2refrelationship" placeholder="Relationship" required/>
        <input type="tel" name="2refphone" maxlength="12" placeholder="Reference's Phone Ex: XXX-XXX-XXXX" required/>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
      </fieldset>

      <!-- fieldsets -->

      <fieldset>
        <h2 class="fs-title">Vehicle Information</h2>
        <h3 class="fs-subtitle">Step 7</h3>
        <input type="number" name="vehiclecount" placeholder="Number of vehicles?" required/>
        <input type="text" name="1makemodel" placeholder="Make/Model" required/>
        <input type="date" name="1year" maxlength="4" placeholder="Year Ex: YYYY" required/>
        <input type="text" name="1licenseplate" maxlength="10" placeholder="License Plate #" required/>
        <input type="text" name="1licenseplatestate" maxlength="2" placeholder="State Registered Ex: TN" required/>
        <input type="text" name="1color" maxlength="10" placeholder="Vehicle Color" required/>

        <h3 class="fs-subtitle">Second Vehicle</h3>
        <input type="text" name="1makemodel" placeholder="Make/Model" />
        <input type="date" name="1year" placeholder="Year Ex: YYYY" />
        <input type="text" name="1licenseplate" maxlength="10" placeholder="License Plate #" />
        <input type="text" name="1licenseplatestate" maxlength="2" placeholder="State Registered Ex: TN" />
        <input type="text" name="1color" maxlength="10" placeholder="Vehicle Color" />

        <h3 class="fs-subtitle">Third Vehicle</h3>
        <input type="text" name="1makemodel" placeholder="Make/Model" />
        <input type="date" name="1year" placeholder="Year Ex: YYYY" />
        <input type="text" name="1licenseplate" maxlength="10" placeholder="License Plate #" />
        <input type="text" name="1licenseplatestate" maxlength="2" placeholder="State Registered Ex: TN" />
        <input type="text" name="1color" maxlength="10" placeholder="Vehicle Color" />

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
      </fieldset>

      <!-- fieldsets -->

      <fieldset>
        <h2 class="fs-title">Application Authorization</h2>
        <h3 class="fs-subtitle">Final Step</h3>

        <h4><bold>Authorization to Release Information</bold><br>
          Applicant hereby authorizes verification of any and all information set forth on this application, including release of information by any bank, savings and loan, employer (present and former), landlord, and/or other lender. All such information hereon, and released as authorized above, will be kept confidential. APPLICANT REPRESENTS THAT THE INFORMATION SET FORTH ON THIS APPLICATION IS TRUE AND COMPLETE. Material misreprespresentation on this application will constitute defualt under the lease or rental Agreement between parties.
        </h4><br><br>

        <h4>APPLICANTS SIGNATURE PLEASE TYPE IN TO SIGN YOUR NAME</h4>
        <input type="text" name="SIGNATURE" placeholder="Full Name" /><br>

        <h4>By CLICKING SUBMIT you agree that the information herein are true and correct.</h4><br>

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <button type="submit" name="submit" class="submit action-button">Submit</button>
      </fieldset>
    </form>

<!--// WordPress Hook //-->
<?php get_footer('rent'); ?>