<?php 
    include ('../header-main.php');
    include('../config.php');

   
   
?>




<div x-data="multipleTable">
    <div class="panel">
        <table class="whitespace-nowrap">
            <thead>
                <tr>
                    <th>#</th>
                    <th width="150"> Staff Name </th>
                    <th>Staff Email</th>
                    <th>Staff Phone Number</th>
                    <th>Shop Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php 


$dataA = mysqli_query($conn,"SELECT * FROM user where userEmail ='$userEmail'");
$row = mysqli_fetch_assoc($dataA);
$ownerId = $row['userId'];


$sql = "SELECT user.username,user.phoneNum,user.userEmail,vendor.vendorName
FROM user
JOIN staff 
ON user.userId = staff.userId
JOIN vendor
ON vendor.vendorId= staff.vendorId
WHERE ownerId = '$ownerId'

";

$result= mysqli_query($conn,$sql);



    if($result->num_rows>0){
        $no=1;
        while($row=$result->fetch_assoc()){

    
                ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['userEmail']; ?></td>
            <td><?php echo $row['phoneNum']; ?></td>
            <td><?php echo $row['vendorName']; ?></td>
            <td>
                <button class="btn btn-outline-primary btn-sm">
                    <!-- <a href="editApproval.php?edit_id=<?php echo $infoPending['vendorId'];?>">Edit</button> </a> -->
            </td>
        </tr>
        <?php 
        $no++;
    }
}
     ?>
        
            </tbody>
        </table>
    </div>
</div>
<?php include '../footer-main.php'; ?>