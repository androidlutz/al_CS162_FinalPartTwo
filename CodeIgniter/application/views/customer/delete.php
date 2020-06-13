<?php echo form_open('customer/delete')?>


<h1>Delete your Customer Info</h1>
      <div class="register">
            <h2> Customer Number </h2>
                  <?php echo validation_errors(); ?> 
                          
                    <label> Customer Number:</label><br />
                          <input
                            type="number"
                            name="AccountNumber"
                            id="num"
                            placeholder="Enter Your Account Number"
                          /><br /><br />
                            
                          <input type="submit" value="Submit" name="" id="sub" />
            <div class="w3-card w3-container" style="min-height:460px">


                      <h3>Your Profile</h3><br>
                      <?php if(isset($message)) echo $message ?>
                      
                      <i class=" w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
                      
            </div>
               
      </div>