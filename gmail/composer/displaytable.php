<style type="text/css">
body {
    width: 800px;
    border: red 1px solid;
    border-style: dashed;
    margin: auto;
    padding: 10px;
}

td {
    text-align: center;
    padding: 10px;
}

table {
    margin: auto;
    border: blue 1px solid;
}

label {
    font-size: 18px;
    color: blue;
    font-weight: bold;
    font-family: cursive;
}

h2 {
    color: red;
    text-align: center;
}

th {
    color: red;
    font-size: 20px;
    font-family: cursive;
}
</style>




<table border="1" cellspacing="5" cellpadding="5" width="100%">


    <thead>
        <tr>
            <th>No.</th>
            <th> Name</th>
            <th>Email</th>

        </tr>
    </thead>
    <tbody>
        <?php
        require_once('dbconnect.php');
        $connection = new DBConnect();
        $conn = $connection->getConnection();
        $result = $conn->prepare("SELECT * FROM emails ORDER BY id ASC");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
        ?>
        <tr>
            <td><label><?php echo $row['id']; ?></label></td>
            <td><label><?php echo $row['name']; ?></label></td>
            <td><label><?php echo $row['email']; ?></label></td>

        </tr>
        <?php } ?>
    </tbody>
</table>