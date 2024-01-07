<?php
error_reporting(0);
include "connect.php";

$fname = $_POST['fname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$event = $_POST['event'];
$bdate = $_POST['bdate'];
$cdate = $_POST['cdate'];
$payment = $_POST['payment'];

// mysqli_select_db($con, $db);
$query = "insert into booked (fname, email, contact, address, event, bdate, cdate, payment) 
            values('$fname', '$email', '$contact', '$address', '$event', '$bdate', '$cdate', '$payment')";

$result = mysqli_query($con, $query);
if(!$result){
    echo 'submit fali';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data List</title>
    <style>
        body{
            font-family: 'Roboto', sans-serif;
        }
        table{
            width: 80%;
            margin: 2px auto;
        }
        table,tr,td,th{
            border-collapse: collapse;
            border: 1px solid black;
            padding: 4px;
        }
        th{
            width: fit-content;
            background-color: #362F4B;
            color: white;
        }
        button{
            font-size: 16px;
            border: none;
            padding: 5px;
            border-radius: 5px;
            width: fit-content;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th colspan="9"><h2>Booking List</h2></th>
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
            <th> Other </th>
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
                <td>
                    <button class="btn"><a href="">Edit</a></button>
                </td>
            </tr>

        <?php
        
            }
        ?>

        
            
        </tbody>
            
    </table>
</body>
</html>