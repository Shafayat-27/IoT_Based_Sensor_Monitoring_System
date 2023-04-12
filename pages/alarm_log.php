<div class="alert alert-danger text-center" role="alert">
            Alarm Log
        </div>
        <table class="table text-center">
            <thead class="thead-dark">
                <tr class="mx-auto">
                <th scope="col">Sl No.</th>
                <th scope="col">Temperature</th>
                <th scope="col">Date & Time</th>
                </tr>
            </thead>
        <?php
        $sql = "SELECT Alarmno_,Alarm_,added_at FROM alarm_log";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Alarmno_"]. "</td><td>" . $row["Alarm_"] . "</td><td>" . $row["added_at"] . "</td></tr>";
            }
            echo "</table>";
        } else { echo "0 results"; }
        //$conn->close();
        ?>
        </table>