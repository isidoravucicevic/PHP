<?php
//index.php
$conn = mysqli_connect('localhost', 'root', 'Dor@@@@4444!!!!', "olena's_bookshelf");
$query = "SELECT * FROM clients ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sorting table</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <br />
    <div class="container" style="width:700px;">
        <h3 class="text-center">Sort users</h3><br />
        <div class="table-responsive" id="clients_table">
            <table class="table table-bordered">
                <tr>
                    <th><a class="column_sort" id="id" data_order="' . $order . '" href="#">ID</a></th>
                    <th><a class="column_sort" id="name" data_order="' . $order . '" href="#">Ime</a></th>
                    <th><a class="column_sort" id="lastname" data_order="' . $order . '" href="#">Prezime</a></th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['Ime']; ?></td>
                        <td><?php echo $row['Prezime']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <br />
    <p>
        <a href="index.php#pocetna">Pocetna</a>
    </p>
</body>

</html>
<script>
    $(document).ready(function() {
        $(document).on('click', '.column_sort', function() {
            var column_name = $(this).attr("id");
            var order = $(this).data("order");
            var arrow = '';
            if (order == 'desc') {
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-down"></span>';
            } else {
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-up"></span>';
            }
            $.ajax({
                url: "query.php",
                method: "POST",
                data: {
                    column_name: column_name,
                    order: order
                },
                success: function(data) {
                    $('#clients_table').html(data);
                    $('#' + column_name + '').append(arrow);
                }
            })
        });
    });
</script>