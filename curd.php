<?php
include('conn.php'); ?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
    <form action="savedata.php" method="POST">
        <div class="company-section">
        <label>Student Name</label>
        <br>
        <input type="text" name="student" placeholder="Enter Student Name " required>
        </div>
        <div class="contact-section">
            <label>Contact</label>
            <br>
            <input type="number" name="contact" placeholder="Enter your contact no" required/>
        </div>
        <!-- country chnges -->
        <div class="country-section">
            <label>Country</label>
            <br>
            <select name="country">
                <option value="india">india</option>
                <option value="Australia">Australia</option>
                <option value="nepal">nepal</option>
            </select>
        </div>
        <div class="gender-section">
          <label>Gender</label>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender"  value="Female">Female
        </div>
        <div class="favourite_subject">
          <label>Favourite Subject</label>
          <input type="checkbox" name="subject[]" value="Maths">Maths
          <input type="checkbox" name="subject[]" value="Science">Science
          <input type="checkbox" name="subject[]" value="History">History
          <input type="checkbox" name="subject[]" value="Biology">Biology
         </div>
        <br>
        <div class="button">            
           <input type="submit">
        </div>
    </form>


  <?php

  

      
           
       
  ?>

<h2>Student data table</h2>

<table style="width:100%">

  <tr>
    <th>Student Name</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>

<?php  
$sql_fetchdata = "SELECT * FROM `student_details` ORDER BY `student_id` DESC";
   $result = mysqli_query($mysqli,$sql_fetchdata);

     while($rows = $result->fetch_assoc()) {
 ?>
<tr>
    <td><?php  echo $rows['student_name']; ?></td>
    <td><?php  echo $rows['student_contact']; ?></td>
    <td><?php  echo $rows['country']; ?></td>
  </tr>
<?php } ?>
  

  
</table>

<p>To understand the example better, we have added borders to the table.</p>

</body>
</html>

