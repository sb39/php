<?php
$con = mysqli_connect("localhost", "root", "", "srij");
//get id from database
if(isset($_GET['id']))
{
    $sql = "select * from srijtab where id=".$_GET['id'];
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    
}
//update information
if (isset($_POST['btn-update']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    
    $update = "update srijtab set first_name='$first_name', last_name = '$last_name' where member_id=".$_GET['id'];
    
    $up= mysqli_query($con, $update);
    
}


?>

<html>
<body>
   <form method="post">
       <h1>edit form</h1>
       <label>first name:</label><input type="text" name="first_name" placeholder="first_name" value="<?php echo $row['first_name']; ?>">
       <br>
       <label> last name </label><input type="text" name="last_name" placeholder="last_name" value="<?php echo $row['last_name']; ?>">
       <button type="submit" name="btn-update" id="btn-update" onclick="update()">update</button>
       <a href="display.php"><button type="button" value="button">cancel</button></a>
    </form>
    <!-- alert -->
    <script>
        function update()
        {
            var x;
            if (confirm("update data successfull")== true)
                {
                    x = "update";
                }
        }
    </script>    
    </body>
</html>
