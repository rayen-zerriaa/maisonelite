<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <title></title>
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">les Reservation </h2>
        <div class="table-responsive">
            <table id="reservationTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date d'arrivee</th>
                        <th>Date de depart</th>
                        <th>Numero de telephone</th>
                        <th>Maison</th>
                        <th>Gmail</th>
                        <th>Approver ou supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "website");

                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Fetch data from the "reservation" table
                    $sql = "SELECT * FROM reservation";
                    $result = mysqli_query($conn, $sql);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <td>{$row['name']}</td>
                                    <td>{$row['secondname']}</td>
                                    <td>{$row['arrival date']}</td>
                                    <td>{$row['Date of departure']}</td>
                                    <td>{$row['telephone']}</td>
                                    <td>{$row['house']}</td>
                                    <td>{$row['gmail']}</td>
                                    <td>
                                        <form method='post' action='delete.php'>
                                            <input type='hidden' name='reservationName' value='{$row['name']}'>
                                            <button type='submit' class='btn btn-approver'>supprimer</button>
                                        </form>
                                    </td>
                                  </tr>";
                        }
                    }

                    // Close connection
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>


    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>
