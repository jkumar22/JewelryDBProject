<?php
include('../DBConnection/DBconnection.php');

$sql = $dbCon ->query("SELECT * FROM USER ORDER BY UserID DESC");
$loginSQL = $dbCon ->query("SELECT * FROM LOGIN ORDER BY UserID DESC");

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/styleSheet.css">
</head>

<body>
<?php $currentPage = 'Registered User'; include 'header.php'; ?>

<form class="modal-content">
    <div class="container">
        <h2>Registered Users</h2>
        <p>List of awesome people</p>

        <form class="modal-content" action="RegisteredUserReport.php">

            <table id = "user_table" >
                <tr >
                    <th>ID</th>                    
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address1</th>
                    <th>Address2</th>
                    <th>City </th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Country</th>
                    <th>Date</th>
                </tr>

                <!-- looping each agency in each row -->
                <?php
                if($sql ->num_rows != 0)
                {
                while ($rows = $sql->fetch_assoc())
                {
                ?>
                <tr id="rows<?php echo $rows['UserID'];?>">

                    <?php
                    $ID = $rows['userID'];                    
                    $Fname = $rows['fname'];
                    $Lame = $rows['lname'];
                    $Email = $rows['email'];
                    $Address1 = $rows['address1'];
                    $Address2 = $rows['address2'];
                    $City = $rows['city'];
                    $State = $rows['state'];
                    $Zip = $rows['zip'];
                    $Country = $rows['country'];
                    $Date = $rows['date'];
                    ?>
                    <td><?php echo $ID?></td>
                    <td><?php echo $Fname?></td>
                    <td><?php echo $Lame?></td>
                    <td><?php echo $Email?></td>
                    <td><?php echo $Address1?></td>
                    <td><?php echo $Address2?></td>
                    <td><?php echo $City?></td>
                    <td><?php echo $State?></td>
                    <td><?php echo $Zip?></td>
                    <td><?php echo $Country?></td>
                    <td><?php echo ($Date)?></td>
                    <?php
                    }
                    }
                    else
                    {
                        echo "No data available at this time";
                    }
                    ?>
            </table>
        </br>
        <h2>Login Table</h2>
        <p>List of user name and password</p>


            <table id = "user_table" >
                <tr >
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>AdminFlag</th>
                </tr>

                <!-- looping each agency in each row -->
                <?php
                if($loginSQL ->num_rows != 0)
                {
                while ($rows = $loginSQL->fetch_assoc())
                {
                ?>
                <tr id="rows<?php echo $rows['UserID'];?>">

                    <?php
                    $ID = $rows['userID'];
                    $Email = $rows['email'];
                    $Password = $rows['password'];
                    $adminFlag = $rows['adminFlag'];
                    ?>
                    <td><?php echo $ID?></td>
                    <td><?php echo $Email?></td>
                    <td><?php echo $Password?></td>
                    <td><?php echo $adminFlag?></td>
                    <?php
                    }
                    }
                    else
                    {
                        echo "No data available at this time";
                    }
                    ?>
            </table>
        </form>

    </Div>
</form>
</body>
</html>