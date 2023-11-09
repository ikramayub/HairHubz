<?php 
    include '../header-main.php';
    require('../config.php');

    
    $dataA = mysqli_query($conn,"SELECT * FROM user where userEmail ='$userEmail'");
    $row = mysqli_fetch_assoc($dataA);
    

    if (isset($_POST['submit'])) {
        $vendorName = $_POST["vendorName"];
        $vendorAddress = $_POST["vendorAddress"];
        $vendorSsm = $_POST["vendorSsm"];
        $vendorPhone = $_POST["vendorPhone"];
        $vendorStatus = 0;
        $ownerId = $row['userId'];

        $insertQuery = "INSERT INTO vendor (vendorName, vendorAddress, vendorSsm, VendorPhone, ownerId) VALUES ('$vendorName', '$vendorAddress', '$vendorSsm', '$vendorPhone', '$ownerId')";
        $result = mysqli_query($conn, $insertQuery);

        if ($result) {
            echo "<script>alert('Vendor added successfully!');
            window.location='viewAllShop.php'</script>";
            exit;
            } else {
                echo "<script>alert('SQL Error: " .mysqli_error($conn) . "');
                window.location='addVendor.php'</script>";
        }
    }

    

?>

<div x-data="multipleTable">
    <div class="panel">
        <h2 class="font-bold text-2xl mb-3">Shop Registration Form</h2>
        <p class="mb-7"> Please fill up the form below </p>
        <form method="post" class="space-y-5">
            <div>

                <label for="name">Shop Name</label>
                <input type="text" class="form-input" placeholder="Shop Name" name="vendorName" required/>
            </div>
            <div>
                <label for="name">Shop Address</label>
                <input type="text" class="form-input" placeholder="Shop Address" name="vendorAddress" required/>
            </div>
            <div>
                <label for="name">SSM Number</label>
                <input type="text" class="form-input" placeholder="SSM Number" name="vendorSsm" required/>
            </div>
            <div>
                <label for="name">Phone Number</label>
                <input type="text" class="form-input" placeholder="Phone Number" name="vendorPhone" required/>
            </div>
            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        </form>
    </div>
</div>
<?php include '../footer-main.php'; ?>