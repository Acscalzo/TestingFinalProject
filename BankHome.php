<?php
        session_start();
?>
<html>
    <body>
        <h1>Account Options</h1><br><br> 
        <?php
        if ($_SESSION["account"] == ""){
            $_SESSION["account"] = $_POST["AcntNum"];
        }
        echo "Account Number: ".$_POST["AcntNum"];
        $Accnt = $_POST["AcntNum"];
        $_SESSION["account"] = $Accnt;
        echo "Account Number: ".$_SESSION["account"];
        $url= "https://ptrbankapp2.azurewebsites.net/svculookup2.php?acntnumb=".$_SESSION["account"];
        $response = file_get_contents($url);
        echo "<br>Account Name: ";
        echo $response;
        $url= "https://ptrbankapp2.azurewebsites.net/getbalance.php?acntnumb=".$_SESSION["account"];
        $response = file_get_contents($url);
        echo "<br><br>Balances: <br>";
        echo $response;
        ?>
        <br><br>
        <h2>Available Account Actions:</h2><br><br>
        <p>
        <form action="paycc.php" method="get">
            Ammount of Payment: <input type="text" name="payment"><br>
            <?php
            echo '<input type="hidden" id="Accnt" name="Accnt" value='.$AcntNum.'>';
            ?>
            <input type="submit">
        </form>

        <br><br>
        <p>
        <button onclick="window.location.href='BankMain.php';">
            Logout
    </body>

</html>
