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
                <h1 class="text-center">Olena's - EDIT</h1>
                <hr style="height: 1px;color: black;background-color: black;">
            </div>
        </div>
        <div class="col-md-5 mx-auto">
            <?php

            include 'model.php';
            $model = new Model();
            $id = $_REQUEST['id'];
            $row = $model->edit($id);

            if (isset($_POST['update'])) {
                if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['id_zaduzene_knjige'])) {
                    if (!empty($_POST['id'])  && !empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['id_zaduzene_knjige'])) {

                        $data['id'] = $id;
                        $data['ime'] = $_POST['name'];
                        $data['prezime'] = $_POST['lastname'];
                        $data['id_zaduzene_knjige'] = $_POST['id_zaduzene_knjige'];

                        $update = $model->update($data);

                        if ($update) {
                            echo "<script>alert('client updated succesfully');</script>";
                            echo "<script>window.location.href = 'clients.php';</script>";
                        } else {
                            echo "<script>alert('client update failed');</script>";
                            echo "<script>window.location.href = 'clients.php';</script>";
                        }
                    } else {
                        echo "<script>alert('empty');</script>";
                        header("Location: edit.php?id=$id");
                    }
                }
            }

            ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">id</label>
                    <input type="text" name="id" value="<?php echo $row['id']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ime</label>
                    <input type="text" name="name" value="<?php echo $row['Ime']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Prezime</label>
                    <input type="text" name="lastname" value="<?php echo $row['Prezime']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">id_zaduzene_knjige</label>
                    <input type="text" name="id_zaduzene_knjige" value="<?php echo $row['id_zaduzene_knjige']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" name="update" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>