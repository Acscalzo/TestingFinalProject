<html>
    <body>
        You entered the following account number: 
        <?php
        echo $_POST["AcntNum"];
        $Accnt = $_POST["AcntNum"];
        $url= "https://ptrbankapp2.azurewebsites.net/svculookup.php?acntnumb=$Accnt";
        $response = file_get_contents($url);
        echo "<br>response: ";
        echo $response;
        ?>
        <br><br>
        <a id="enter" href="BankMain.php">Enter Test App</a><br><br>
    </body>

</html>
