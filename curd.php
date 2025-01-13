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
        <input type="text" name="student" placeholder="Enter Student Name ">
        </div>
        <div class="contact-section">
            <label>Contact</label>
            <br>
            <input type="number" name="contact" placeholder="Enter your contact no" />
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

<h2>A basic HTML table</h2>

<table style="width:100%">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
</table>

<p>To understand the example better, we have added borders to the table.</p>

</body>
</html>

