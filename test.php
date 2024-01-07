<?php

include "connect.php";

$fname = $_POST['fname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$event = $_POST['event'];
$bdate = $_POST['bdate'];
$cdate = $_POST['cdate'];
$payment = $_POST['payment'];

mysqli_select_db($con, $db);
$query = "insert into booked (fname, email, contact, address, event, bdate, cdate, payment) 
            values('$fname', '$email', '$contact', '$address', '$event', '$bdate', '$cdate', '$payment')";

$result = mysqli_query($con, $query);
if(!$result){
    echo 'submit fali';
}
else{
    header("Location: test.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data List</title>
</head>
<body>
    <table algin="center;" style="width: 600px;" line-height="40px;">
        <tr>
            <th colspan="8"><h2>Booking List</h2></th>
        </tr>
        <t>
            <th> Full Name </th>
            <th> Email </th>
            <th> Contact No. </th>
            <th> Address </th>
            <th> Choose Event </th>
            <th> Booking Date </th>
            <th> Date of Event </th>
            <th> Payment Method </th>
        </t>
        <tbody>
        <?php
            $selectqu = "select * from booked";
            $que = mysqli_query($con, $selectqu);
            $nums = mysqli_num_rows($que);

            while($res = mysqli_fetch_array($que)){

            ?>
            <tr>
                <td><?php echo $res['fname']; ?></td>
                <td><?php echo $res['email']; ?></td>
                <td><?php echo $res['contact']; ?></td>
                <td><?php echo $res['address']; ?></td>
                <td><?php echo $res['event']; ?></td>
                <td><?php echo $res['bdate']; ?></td>
                <td><?php echo $res['cdate']; ?></td>
                <td><?php echo $res['payment']; ?></td>
            </tr>

        <?php
        
            }
        ?>

            
        </tbody>
            
    </table>
</body>
</html>