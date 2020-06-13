<?php echo form_open('booking/index'); ?>
 
 <h1>Book Your Stay Now!</h1>
      <div class="register">
      <?php echo validation_errors(); ?>
            <h2>Book Here</h2>
                  
                  <label> Account Number:</label><br />
                          <input
                            type="number"
                            name="AccountNumber"
                            id="num"
                            placeholder="Enter Your Account Number"
                          /><br /><br />             
                  <label> Start Date:</label><br />
                          <input
                            type="date"
                            name="StartDate"
                            id="name"
                            placeholder="Start Date"
                          /><br /><br />
                  <label> End Date:</label><br />
                          <input
                            type="date"
                            name="EndDate"
                            id="name"
                            placeholder="End Date"
                          /><br /><br />
                        <?php foreach($types as $type) : ?>
                           <input type="radio" id="<?php echo $type['TId']; ?>" name="type" value="<?php echo $type['TId']; ?>"><label><?php echo $type['Type']; ?></label><br>
                        <?php endforeach; ?>
                          <br /><br />
                          <input type="radio" id="full" name="bed" value="1">
                  <label>Full</label><br>
                           <input type="radio" id="queen" name="bed" value="2">
                  <label>Queen</label><br>
                           <input type="radio" id="king" name="bed" value="3">
                  <label>King</label>
                          <br /><br />
                  &nbsp;&nbsp;<br />
                          <input type="submit" value="Submit" />

            <div class="w3-card w3-container" style="min-height:460px">
                        <h3>This is Your Reservation</h3><br>
                        <i class=" w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
                        <!-- echo reservation here -->
            </div>
                  
                                               
                    
            
</div>