<?php // Example 26-9: members.php
  require_once 'header.php';
  if (!$loggedin) die();
  echo "<div class='main'>";

$result = queryMysql("SELECT * FROM SOCKET");

if ($result->num_rows > 0) {
    echo "<table id='socket' class='display' cellspacing='0' width='100%'>
    <thead>
        <tr>
            <th>Socket ID</th>
            <th>Cycle Count</th>
            <th>Counts &lt; 20C</th>
            <th>Counts &gt; 85C</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Socket ID</th>
            <th>Cycle Count</th>
            <th>Counts &lt; 20C</th>
            <th>Counts &gt; 85C</th>
        </tr>
    </tfoot>
    <tbody>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["SOCKET_UUID"]."</td><td>".$row["CYCLE_COUNT"]."</td><td>".$row["TEMP_L20C"]."</td><td>".$row["TEMP_G85C"]."</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}

?>
            </div>
            </body>
            </html>
