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
                    <th width="150"> Shop Name </th>
                    <th>Shop Address</th>
                    <th>Shop SSM</th>
                    <th>Phone Number</th>
                    <th>Approval Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php 

                 //fetch data from table vendor

    $query = "SELECT * FROM vendor WHERE vendorStatus = 'Approve'";
    $pendingVendor = mysqli_query($conn, $query);
    $no=1;
    while($infoPending=mysqli_fetch_array($pendingVendor)) {
        $vendorName = $infoPending['vendorName'];
        $vendorAddress = $infoPending['vendorAddress'];
        $vendorSsm = $infoPending['vendorSsm'];
        $vendorPhone = $infoPending['vendorPhone'];
        $vendorStatus = $infoPending['vendorStatus'];
    


                ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $vendorName; ?></td>
            <td><?php echo $vendorAddress; ?></td>
            <td><?php echo $vendorSsm; ?></td>
            <td><?php echo $vendorPhone; ?></td>
            <td>
            <span class="badge <?php echo ($vendorStatus == 'Approve') ? 'bg-success' : 'bg-success'; ?>">
            <?php echo ($vendorStatus == 'pending') ? 'Approve' : 'Approve' ; ?>
    </span>
            </td>
            <td>
                <button class="btn btn-outline-primary btn-sm">
                    <a href="editApproval.php?edit_id=<?php echo $infoPending['vendorId'];?>">Edit</button> </a>
            </td>
        </tr>
        <?php 
        $no++;
    } ?>
        
            </tbody>
        </table>
    </div>
</div>
<?php include '../footer-main.php'; ?>