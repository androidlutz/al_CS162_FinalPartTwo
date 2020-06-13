<?php echo form_open('customer/index')?>

<h1>Customer Registration</h1>
    <div class="register" ?>
          <h2>Register Here</h2>
           <?php echo validation_errors(); ?> 
              <div>
                    <label> First Name:</label><br />
                        <input
                          type="text"
                          name="FirstName"                          
                          placeholder="Enter Your First Name"
                        /><br /><br />
                    <label> Last Name:</label><br />
                        <input
                          type="text"
                          name="LastName"                          
                          placeholder="Enter Your Last Name"
                        /><br /><br />
                  <label> Phone:</label><br />
                        <input
                          type="number"
                          name="PhoneNumber"                         
                          placeholder="Enter Your Phone Number"
                        /><br /><br />
              </div>        
              <div>
                  <label> Emergency Contact First Name:</label><br />
                        <input
                          type="text"
                          name="FirstName"                          
                          placeholder="Enter First Name"
                        /><br /><br />
                  <label>  Emergency Contact Last Name:</label><br />
                        <input
                          type="text"
                          name="LastName"                        
                          placeholder="Enter Last Name"
                        /><br /><br />
                  <label> Emergency Contact Phone:</label><br />
                        <input
                          type="number"
                          name="PhoneNumber"                         
                          placeholder="Enter Phone Number"
                        /><br /><br />
              </div>  
                      

                        &nbsp;&nbsp;<br />
                        <input type="submit" value="Submit" name="" id="sub" />
            <div>
              <nav>
                <a href="/customer/update/">Update Info</a> |
                <a href="/customer/delete/">Delete Your Profile</a> |                
              </nav>
            </div>
              <div class="w3-card w3-container" style="min-height:460px">
                        <h3>Your Customer Profile</h3><br>
                        <i class=" w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
              </div>
             
  </div>