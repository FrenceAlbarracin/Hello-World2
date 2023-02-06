<?php include('crudies.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
<?php 

while ($row = mysqli_fetch_array($results)) ?> 
            <tr>
                <td><?php echo $row['Name'] ?></td>
                <td><?php echo $row['Personal_id'] ?></td>
                <td><?php echo $row['Birthday'] ?></td>
                <td><?php echo $row['Phone_Number'] ?></td>
                <td><?php echo $row['Address'] ?></td>
                <td><?php echo $row['Postal_Code'] ?></td>
                <td><?php echo $row['Department'] ?></td>
                <td><?php echo $row['Posistion'] ?></td>
                <td><?php echo $row['Gender'] ?></td>
                <td><?php echo $row['Status'] ?></td>
                <td><?php echo $row['Company_id'] ?></td>
                <td><?php echo $row['Employee_id'] ?></td>
            <td>
                    <a class="del_btn" href="server.php?delete=<?php echo $row['employeeidnumber']; ?>">Delete</a>
            </td>
            </tr>
        </thread>
        <tbody>
        
    <div class="cotainer">
            <form method="post" action="crudies.php">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-group"
                placeholder="enter your name"
                name="Name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Perosonal id</label>
                <input type="text" class="form-group"
                placeholder="enter your ID"
                name="Personal_id" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Birthday</label>
                <input type="text" class="form-group"
                placeholder="enter your Birthday"
                name="Birthday" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input type="text" class="form-group"
                placeholder="enter your Phone number"
                name="Phone_number" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-group"
                placeholder="enter your Address"
                name="Address" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Postal Code</label>
                <input type="text" class="form-group"
                placeholder="enter your Postal Code"
                name="Postal_code" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Department</label>
                <input type="text" class="form-group"
                placeholder="enter your name"
                name="Name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Possition</label>
                <input type="text" class="form-group"
                placeholder="enter your Possition"
                name="Possition" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="text" class="form-group"
                placeholder="enter your Gender"
                name="Gender" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Marital Status</label>
                <input type="text" class="form-group"
                placeholder="enter your Status"
                name="Status" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Company ID</label>
                <input type="text" class="form-group"
                placeholder="enter your Company_id"
                name="Company_id" autocomplete="off">
            </div>
            <button type="submit" class="btr btn-primary">submit</button>
        </form>
    </div>
</body>
</html>