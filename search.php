<?php
include("config.php");
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $query = "SELECT * FROM clients WHERE id LIKE '{$input}%' OR Ime LIKE '{$input}%' OR Prezime LIKE '{$input}%'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) { ?>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row  = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['Ime'];
                    $lastname = $row['Prezime'];

                ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $lastname; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
<?php
    } else {
        echo "<h6 class ='text-danger text-center mt-3'>No data found</h6>";
    }
}
?>