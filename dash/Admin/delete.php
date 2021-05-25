<?php

include_once "../../login/config.php";

if (isset($_GET['id'])) {
    $idd = $_GET['id'];

    $sql = "DELETE FROM appointment WHERE appointment.`id` = '$idd'";
    $res = mysqli_query($connect, $sql);
    ?>
    <script>
    confirm('Are you sure you want to delete?');
window.location.replace("appointments.php");
</script>

    <?php

} else {
    echo "<a href='appointments.php'> </a>";
}
