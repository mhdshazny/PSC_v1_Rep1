<?php
session_destroy();
//session_start();
//$user = $_POST['username'];
//$pass = $_POST['password'];


include("../Common/config.php");
//include("session.php");


if (isset($_POST['username']))
    $user = $_POST['username'];
$pass = $_POST['password'];


$result = mysqli_query($con, "select * from tbl_employee where email = '$user' and password = '$pass' limit 1");
//        while($row = mysqli_fetch_array($result))
//        {
//            print ("Login Successful");
//            exit();
//        }
////        mysql
///
if (mysqli_num_rows($result) == 1) {

    //print ("Login Successful");
    foreach ($result as $row) {
        $_SESSION['loggedUser'] = $row["email"];
        $_SESSION['userID'] = $row["empID"];
        $_SESSION['Role'] = $row["roleID"];
        $_SESSION['userCenterID'] = $row["centerID"];
//        $_SESSION['userStatus'] = $row["Acc_Status"];

        if ($row['roleID'] == "1") {
            header('Location:../Admin/PSC_Admin_Dashboard.php?e=Username or password Success');
        }
        elseif ($row['roleID'] == "2") {
            header('Location:../CM_HO/PSC_CM_HO_Dashboard.php?e=Username or password Success');
        }
        elseif ($row['roleID'] == "3") {
            header('Location:../CM_RO/PSC_CM_Dashboard.php?e=Username or password Success');
        }
        elseif ($row['roleID'] == "4") {
            header('Location:../FO_HO/PSC_FO_HO_Dashboard.php?e=Username or password Success');
        }
        elseif ($row['roleID'] == "5") {
            header('Location:../FO_RO/PSC_FO_RO_Dashboard.php?e=Username or password Success');
        }
        elseif ($row['roleID'] == "6") {
            header('Location:../CO/PSC_CO_Dashboard.php?e=Username or password Success');
        }
        elseif ($row['roleID'] == "7") {
            header('Location:../Clerk_HO/PSC_Clerk_HO_Dashboard.php?e=Username or password Success');
        }
        elseif ($row['roleID'] == "8") {
            header('Location:../Clerk_RO/PSC_Clerk_RO_Dashboard.php?e=Username or password Success');
        }
        elseif ($row['roleID'] == "9") {
            header('Location:../SK/PSC_SK_Dashboard.php?e=Username or password Success');
        }
        else {
            header('Location:Login.php?e= Role Type Failed');
        }

    }

//    header('Location:../Admin/PSC_Admin_Dashboard.php?e=Username or password Success');


} else {
    //print("Error: " . $sql . "<br>" . $con->error);
//            print ("Wrong Credentials.....Maanga Madaya, Don't forget to create popup cookie in jquery ");
//                exit();

    header('Location:Login.php?e=Username or password failed');


}
$con->close();

?>

