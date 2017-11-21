<?php
$con = mysqli_connect("localhost", "root", "", "srij");
?>
<html>
<body>

        <!-- annother -->
         <div class="manageMember">
                
                <table border="1" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Member id</th>
                            <th>Contact</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM srijtab"; 

                        $result = $con->query($sql);

                        if($result->num_rows>0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                    <td>".$row['id']."</td>
                                    <td>".$row['first_name']." ".$row['last_name']."</td>
                                    <td>".$row['member_id']."</td>
                                    <td>".$row['contact']."</td>
                                    <td>
                                        <a href='Action/edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>


                                        <button onclick='asd(".$row["id"].")'>Delete</button>
                                    </td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
 

</body>
</html>