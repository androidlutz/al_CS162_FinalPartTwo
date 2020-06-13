<?php echo form_open('employee/view'); ?>

<h1>Update Employee info</h1>
    <div class="register" ?>
          <h2>Enter Your Information Below</h2>
              <?php echo validation_errors(); ?>
                    <label> Employee ID</label><br />
                        <input
                          type="number"
                          name="Rname"
                          id="name"
                          placeholder="Enter Employee Number"
                          value="<?php echo $this->input->post('EId'); ?>"
                        /><br /><br />
                    <label> Fiirst Name:</label><br />
                        <input
                          type="text"
                          name="Rname"
                          id="name"
                          placeholder="Enter Your First Name"
                          value="<?php echo $this->input->post('FirstName'); ?>"
                        /><br /><br />
                    <label> Last Name:</label><br />
                        <input
                          type="text"
                          name="MNum"
                          id="num"
                          placeholder="Enter Your Last Name"                         
                        /><br /><br />
                    <label> Title :</label><br />
                        <input
                          type="text"
                          name="MNum"
                          id="num"
                          placeholder="Enter Your Title"                         
                        /><br /><br />
        
                
                        &nbsp;&nbsp;<br />
                        <input type="submit" value="Submit" name="" id="sub" />
              
  </div>