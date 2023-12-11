    <?php 
        $title = 'Index';
       require_once 'includes/header.php';
       require_once 'db/conn.php';
       ?>
            <!-- 
            - First Name
            - Last Name
            - DOB (Date Picker)
            - Specialty (Database Admin, Software Developer, Web Administrator)
            - Email Address
            - Contact Number
        -->

<h1 class="text-center"> Registration for IT Conference </h1>


<form method="post" action="success.php">
        <div class="form-group">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group" >
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="specialty" >Area of Expertise</label>
            <select class="form-control" id="specialty" name="specialty">
                <option value="1">Database Admin</option>
                <option value="3">Software Developer</option>
                <option value="5">Web Administrator</option>
                <option value="7">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email Address </label>
            <input type="email" class="form-control" id="email" name="email">

            <small id="emailHelp" class="form-text text-muted"> We'll never share your Email with anyone else</small>

        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone">

            <small id="phoneHelp" class="form-text text-muted">We'll never share your contact with anyone else</small>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
</form>
<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>