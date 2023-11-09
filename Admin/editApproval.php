<?php 

    include ('../header-main.php');
    include('../config.php');

   
$id=$_GET['edit_id'];
$result=mysqli_query($conn, "SELECT * FROM vendor WHERE vendorId='$id'");
while($res=mysqli_fetch_array($result)){

    $vendorName=$res['vendorName'];
    $vendorAddress=$res['vendorAddress'];
    $vendorSsm=$res['vendorSsm'];
    $vendorPhone=$res['vendorPhone'];
    $vendorStatus=$res['vendorStatus'];
}

?>

<?php
if (isset($_POST['update'])) {

    $vendorStatus = $_POST['vendorStatus'];
    $id = $_POST['id'];
    $updateQuery="UPDATE vendor SET vendorStatus='$vendorStatus' WHERE vendorId='$id'";
    $result = mysqli_query($conn, $updateQuery);

    if ($result) {
        echo "<script>alert('Successfuly update shop status!')
        window.location='vendorApproval.php'
        </script>";
        exit;
        } else {
            echo "<script>alert('SQL Error: " .mysqli_error($conn) . "');
            window.location='editApproval.php'</script>";
    }
}


?>





<div x-data="multipleTable">
    <div class="panel">
    <form class="space-y-5" method="post" action="editApproval.php?edit_id=<?php echo $id; ?>" enctype="multipart/form-data">
    <div>
        <label for="vendorName">Shop Name</label>
        <input id="vendorName" name="name" type="text" class="form-input" value="<?php echo $vendorName ?>" readonly />
    </div>
    <div>
        <label for="vendorAddress">Shop Address</label>
        <input id="vendorAddress" name="name" type="text" class="form-input" value="<?php echo $vendorAddress ?>" readonly />
    </div>
    <div>
        <label for="vendorSsm">Shop SSM</label>
        <input id="vendorSsm" name="name" type="text" class="form-input" value="<?php echo $vendorSsm ?>" readonly />
    </div>
    <div>
        <label for="vendorPhone">Phone Number</label>
        <input id="vendorPhone" name="name" type="text" class="form-input" value="<?php echo $vendorPhone ?>" readonly />
    </div>
    <div>
        <label for="vendorStatus">Approval Status</label>
        <select name = "vendorStatus" id = "vendorStatus"  class="form-select ">
            <option value="<?php echo $vendorStatus ?>"><?php echo $vendorStatus ?></option>
            <option>Select Approval Status</option>
            <option value="Approve">Approve</option>
            <option value="Reject">Reject</option>
        </select>
    </div>
    <td><input type="hidden" name="id" value="<?php echo $_GET['edit_id']; ?>"></td>
    <button type="submit" name="update" class="btn btn-primary !mt-6">Submit</button>

    </div>
</div>
<?php include '../footer-main.php'; ?>