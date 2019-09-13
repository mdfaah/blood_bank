<?php

$pid = $_GET['PID'];
   echo "$pid";
?>
     
                <form method="post" id="insert_form">  
                          <label>Enter Employee Name</label>  
                          <input type="text" name="name" id="name" class="form-control">  
                          <br>  
                          <label>Enter Employee Address</label>  
                          <textarea name="address" id="address" class="form-control"></textarea>  
                          <br>  
                          <label>Select Gender</label>  
                          <select name="gender" id="gender" class="form-control">  
                               <option value="Male">Male</option>  
                               <option value="Female">Female</option>  
                          </select>  
                          <br>  
                          <label>Enter Designation</label>  
                          <input type="text" name="designation" id="designation" class="form-control">  
                          <br>  
                          <label>Enter Age</label>  
                          <input type="text" name="age" id="age" class="form-control">  
                          <br>  
                          <input type="hidden" name="employee_id" id="employee_id" value="3066">  
                          <input type="submit" name="insert" id="insert" value="Update" class="btn btn-success">  
                     </form>

            </body>