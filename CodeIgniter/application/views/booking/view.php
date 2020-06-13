<?php echo form_open('booking/view')?>

<h1>View your Booking</h1>
      <div class="register">
            <h2>Enter Your Booking Number Here to View</h2>

                          
                    <label> Booking Number:</label><br />
                          <input
                            type="number"
                            name="ID"                           
                            placeholder="Enter Your Booking Number"
                          /><br /><br />
                            <div>
                                <!-- echo bookin info here -->
                            </div>
                          <input type="submit" value="Submit" name="" id="sub" />

                      <?php if($booking_info != null) : ?>
            <div class="w3-card w3-container" >
                      <h3>Your Booking</h3><br>                      
                      <?php echo $booking_info[0]['ID'];?>
                      <?php echo $booking_info[0]['EmId'];?>
                      <?php echo $booking_info[0]['StartDate'];?>
                      <?php echo $booking_info[0]['EndDate'];?>
                      <?php echo $booking_info[0]['AccountNumber'];?>
                      <?php echo $booking_info[0]['RoomNumber'];?>
                       <?php echo $booking_info[0]['Notes'];?>
                      <?php echo $booking_info[0]['RId'];?>
                      <?php echo $booking_info[0]['PhoneCharge'];?>                     
                                            
            </div>
               <?php endif;?>
                  
      </div>