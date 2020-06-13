<?php echo form_open('employee/view'); ?>

    <div class="register" ?>
        <?php echo validation_errors(); ?>

       
            <h2>Enter Your Employee Number Below to View</h2>
              
                  <label> Employee ID:</label><br />
                        <input
                          type="number"
                          name="EmId"
                          id="num"
                          placeholder="Employee ID"
                        /><br /><br />
                <div>
               
                <?php foreach ($employees as $employee):?> 
                        <?php echo $employee['EmId'];?>
                
                 
                <?php endforeach; ?> 
                
                </div>
                
                        &nbsp;&nbsp;<br />
                        <input type="submit" value="Submit"/>
              
    </div>