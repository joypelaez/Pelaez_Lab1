<html>
<head>
<title>PHP User Registration Form</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form name="frmRegistration" method="post" action="">
        <div class="demo-table">
        <div class="form-head">Registration Form</div>
            
<?php
if (! empty($errorMessage) && is_array($errorMessage)) {
    ?>	
            <div class="error-message">
            <?php 
            foreach($errorMessage as $message) {
                echo $message . "<br/>";
            }
            ?>
            </div>
<?php
}
?>
            <div class="field-column">
                <label>First Name</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="First Name"
                        value="<?php if(isset($_POST['First Name'])) echo $_POST['First Name']; ?>">
                </div>
            </div>
            
            <div class="field-column">
                <label>Last Name</label>
                <div><input type="Last Name" class="demo-input-box"
                    name="Last Name" value=""></div>
                
            </div>
            <div class="field-column">
                <label>Middle Name</label>
                <div>
                    <input type="Middle Name" class="demo-input-box"
                        name="Middle Name" value="">
                </div>
            </div>
            <div class="field-column">
                <label>Address</label>
                <div>
                    <input type="text" class="demo-input-box"
                        
                </div>

            </div>
            <div class="field-column">
                <label>Date of Birth</label>
                <div>
                    <input type="Date" class="demo-input-box"
                        name="Date of Birth"
                        value="<?php if(isset($_POST['userEmail'])) echo $_POST['Date of Birth']; ?>">
                </div>
            </div>

            <div class="field-column">
                <label>Place of Birth</label>
                <div> 
                    <input type="Place of Birth" class="demo-input-box"
                    name="Place of Birth" value="">
                </div>

                <label>Gender</label><br>
                <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label><br>
                    <input type="radio" id="other" name="gender" value="other">
                 <label for="other">Other</label>

                  <div class="field-column">
                <label>Guardian</label>
                <div><input type="Guardian" class="demo-input-box"
                    name="Guardian" value=""></div>
        
                 <div class="field-column">
                <label>Contact No.</label>
                <div><input type="Contact No." class="demo-input-box"
                    name="Contact No." value=""></div>
            </div>
             </div>

              <label>Civil Status</label><br>
                <input type="radio" id="male"value="Single">
                    <label for="Single">Single  </label><br>
                    <input type="radio" id="female" value="Married">
                    <label for="Married">Married</label><br>

          </div>
          <div class="field-column">
           <label>Year Level</label>
           <div>

            <select id="Year">
                 
                <option value="1">1st Year</option>
                <option value="2">2nd Year</option>
                <option value="3">3rd Year</option>      
                <option value="4">4th Year</option>
            
              </select>

              <div class="field-column">
           <label>Course</label>
           <div>

            <select id="Year">
                 
                <option value="ustp">BS IT</option>
                <option value="ustp">BS TCM</option>
                <option value="ustp">BS CE</option>      
                <option value="ustp">BS ED</option>
            
              </select>


             <div class="field-column">
                <label>School Year</label>
                <div><input type="School Year" class="demo-input-box"
                    name="School Year" value=""></div>
                  

                    <div class="field-column">
                <div class="terms">
                    <input type="checkbox" name="terms"> I accept terms
                    and conditions
                </div>

                <div>
                    <input type="submit"
                        name="register-user" value="submit"
                        class="btnRegister">
                </div>
            </div>
        </div>
    </form>
</body>
</html>