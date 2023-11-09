<?php 
    include '../header-main.php';
    require('../config.php');

    if (isset($_POST['submit'])) {

        $vendorId = $_POST["vendorId"];
        $staffName = $_POST["staffName"];
        $staffEmail = $_POST["staffEmail"];
        $staffPhone = $_POST["staffPhone"];
        $staffPassword = $_POST["staffPassword"];
        $role = 'Staff';


        $insertUser = "INSERT INTO user (username, userEmail, phoneNum , userRole, password) 
        VALUES ('$staffName', '$staffEmail', '$staffPhone' , '$role', '$staffPassword')";
        $result2 = mysqli_query($conn, $insertUser);
        $last_id = mysqli_insert_id($conn);


        $insertQuery = "INSERT INTO staff (userId, vendorId) VALUES ('$last_id', '$vendorId')";
        $result = mysqli_query($conn, $insertQuery);




        if ($result) {
            echo "<script>alert('staff added successfully!')
            window.location='viewStaff.php'
            </script>";
            exit;
            } else {
                echo "<script>alert('SQL Error: " .mysqli_error($conn) . "');
                window.location='addStaff.php'</script>";
        }
        
    }

    

?>

    <?php 
    $dataA = mysqli_query($conn,"SELECT * FROM user where userEmail ='$userEmail'");
    $row = mysqli_fetch_assoc($dataA);
    $ownerId = $row['userId'];
    ?>

<div x-data="multipleTable">
    <div class="panel">
        <h2 class="font-bold text-2xl mb-3">Staff Registration Form</h2>
        <p class="mb-7"> Please fill up the form below </p>
        <form method="POST" class="space-y-5">
            <div>

                <label for="name">Staff Name</label>
                <input id= "staffName" type="text" class="form-input" placeholder="Staff Name" name="staffName" required/>
            </div>
            <div>
                <label for="name">Staff Email</label>
                <input id= "staffEmail" type="text" class="form-input" placeholder="Staff Email" name="staffEmail" required/>
            </div>
            <div>
                <label for="name">Phone Number</label>
                <input id= "staffPhone" type="text" class="form-input" placeholder="Phone Number" name="staffPhone" required/>
            </div>
            <div>
                <label for="name">Staff Password</label>
                <input id= "staffPassword" type="text" class="form-input" placeholder="Staff Password" name="staffPassword" required/>
            </div>
            <div>
        <label for="vendor">Shop Name</label>
        <select name = "vendorId"  id="vendorId" class="form-select ">
            <?php 
            $sql=mysqli_query($conn, "SELECT * FROM vendor WHERE ownerId='$ownerId' AND vendorStatus != 'Reject'")
            ?>
            <option>Select Shop</option>
            <?php 
            while ($row=mysqli_fetch_array($sql)) {
                echo '<option value="'.$row['vendorId'].'">'.$row['vendorName'].'</option>';}
            ?>
        </select>
    </div>
            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        </form>
    </div>
</div>
<?php include '../footer-main.php'; ?>