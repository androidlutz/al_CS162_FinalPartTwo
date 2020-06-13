<?php echo form_open('customer/view')?>

    <h1>Customer Registration</h1>
    <div class="register">
      <h2>Update Here</h2>

      <?php echo validation_errors(); ?> 
        <label> Update First Name:</label><br />
        <input
          type="text"
          name="FirstName"
          id="name"
          placeholder="Enter Your First Name"
        /><br /><br />
        <label>Update Last Name:</label><br />
        <input
          type="text"
          name="LastName"
          id="name"
          placeholder="Enter Your Last Name"
        /><br /><br />
        <label>Update Phone:</label><br />
        <input
          type="number"
          name="PhoneNumber"
          id="num"
          placeholder="Enter Your Phone Number"
        /><br /><br />
        <label>Update Emergency Contact First Name:</label><br />
        <input
          type="text"
          name="FirstName"
          id="name"
          placeholder="Enter First Name"
        /><br /><br />
        <label> Update Emergency Contact Last Name:</label><br />
        <input
          type="text"
          name="LastName"
          id="name"
          placeholder="Enter Last Name"
        /><br /><br />
        <label>Update Emergency Contact Phone:</label><br />
        <input
          type="number"
          name="PhoneNumber"
          id="num"
          placeholder="Enter Phone Number"
        /><br /><br />
      
        &nbsp;&nbsp;<br />
        <input type="submit" value="Submit" name="" id="sub" />
    
    </div>