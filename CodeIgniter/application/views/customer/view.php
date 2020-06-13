<?php echo form_open('customers')?>


<h1>View your Customer Info</h1>
      <div class="register">
            <h2> Customer Number </h2>
                  <?php echo validation_errors(); ?> 
                          
                    <label> Customer Number:</label><br />
                          <input
                            type="number"
                            name="AccountNumber"
                            id="num"
                            placeholder="Enter Your Customer Number"
                          /><br /><br />                            
             
                          <input type="submit" value="Submit" name="" id="sub" />

                          <?php if($customer_info != null) : ?>
            <div class="w3-card w3-container" >
                      <h3>Your Profile</h3><br>                      
                      <?php echo $customer_info[0]['AccountNumber'];?>
                      <?php echo $customer_info[0]['FirstName'];?>
                      <?php echo $customer_info[0]['LastName'];?>
                      <?php echo $customer_info[0]['PhoneNumber'];?>
                      <h3>Emergency Contact Id</h3>
                      <?php echo $customer_info[0]['EId'];?>                      
            </div>
               <?php endif;?>
      </div>