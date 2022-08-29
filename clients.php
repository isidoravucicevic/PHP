<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Olena's bookshelf</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">Olena's clients</h1>
                <hr style="height: 1px;color: black;background-color: black;">
                <input type="text" class="form-control" id="search" autocomplete="off" placeholder="Search... ">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>ID zaduzene knjige</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include 'model.php';
                        $model = new Model();
                        $rows = $model->fetch();
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                        ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['Ime']; ?></td>
                                    <td><?php echo $row['Prezime']; ?></td>
                                    <td><?php echo $row['id_zaduzene_knjige']; ?></td>
                                    <td>
                                        <a href="read.php?id=<?php echo $row['id']; ?>" class="badge badge-info">Read</a>
                                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a>
                                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="badge badge-success">Edit</a>
                                    </td>
                                </tr>

                        <?php
                            }
                        } else {
                            echo "no data";
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="searchresult"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#search").keyup(function() {
                var input = $(this).val();
                if (input != "") {
                    $.ajax({
                        url: "search.php",
                        async: false,
                        type: "POST",
                        data: {
                            input: input
                        },

                        success: function(data) {
                            $("#searchresult").html(data);

                        }

                    });
                    setInterval('location.reload()', 5000);
                } else {
                    $("#searchresult").css("display", "none");
                }
            });
        });
    </script>
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
</body>

</html>