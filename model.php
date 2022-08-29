<?php

class Model
{

    private $server = "localhost";
    private $username = "root";
    private $password = "Dor@@@@4444!!!!";
    private $db = "olena's_bookshelf";
    private $conn;

    public function __construct()
    {
        try {

            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }
    public function insert()
    {

        if (isset($_POST['submit'])) {
            if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['id_zaduzene_knjige'])) {
                if (!empty($_POST['id'])  && !empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['id_zaduzene_knjige'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $lastname = $_POST['lastname'];
                    $id_zaduzene_knjige = $_POST['id_zaduzene_knjige'];

                    $query = "INSERT INTO clients(id, Ime, Prezime, id_zaduzene_knjige) VALUES ('$id', '$name','$lastname','$id_zaduzene_knjige')";
                    if ($sql = $this->conn->query($query)) {
                        echo "<script>alert('records added successfully');</script>";
                        echo "<script>window.location.href = 'index.php';</script>";
                    } else {
                        echo "<script>alert('failed');</script>";
                        echo "<script>window.location.href = 'index.php';</script>";
                    }
                } else {
                    echo "<script>alert('empty');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }
            }
        }
    }

    public function fetch()
    {
        $data = null;

        $query = "SELECT * FROM clients";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function delete($id)
    {

        $query = "DELETE FROM clients where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function fetch_single($id)
    {

        $data = null;

        $query = "SELECT * FROM clients WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }
    public function edit($id)
    {

        $data = null;

        $query = "SELECT * FROM clients WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }
    public function update($data)
    {

        $query = "UPDATE clients SET ime = '$data[ime]', prezime ='$data[prezime]', id_zaduzene_knjige = '$data[id_zaduzene_knjige]' WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}
