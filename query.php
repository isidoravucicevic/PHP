<?php
include("sort.php");
$conn = mysqli_connect("localhost", "root", "Dor@@@@4444!!!!", "olena's_bookshelf");
$output = '';
$order = $_POST["order"];
if ($order == 'desc') {
    $order = 'asc';
} else {
    $order = 'desc';
}
$query = "SELECT * FROM clients ORDER BY " . $_POST["column_name"] . " " . $_POST["order"] . "";
$result = mysqli_query($conn, $query);
$output .= '
<table class = "table table-borderd">
        <tr>
            <th><a class="column_sort" id="id" data_order="' . $order . '" href="#">ID</a></th>
            <th><a class="column_sort" id="name" data_order="' . $order . '" href="#">Ime</a></th>
            <th><a class="column_sort" id="lastname" data_order="' . $order . '" href="#">Prezime</a></th>
        </tr>  
';
while ($row = mysqli_fetch_array($result)) {
    $output .= '
    <tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['Ime'] . '</td>
        <td>' . $row['Prezime'] . '</td>
    </tr>
    ';
}
$output .= '</table>';
echo $output;
