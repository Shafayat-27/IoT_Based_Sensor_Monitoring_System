<div class="alert alert-success text-center" role="alert">
            Temperature Log
        </div>
        <table class="table text-center">
            <thead class="thead-dark">
                <tr class="mx-auto">
                <th scope="col">Sl No.</th>
                <th scope="col">Temperature</th>
                </tr>
            </thead>
        <?php
        $sql = "SELECT Tempno_,Temp_ FROM temp_log";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Tempno_"]. "</td><td>" . $row["Temp_"] . "</td></tr>";
            }
            echo "</table>";
        } else { echo "0 results"; }
        ?>
        </table>