<?php

include_once("./conn.php");

if (!empty($_POST["box"]) == true) {
    $box = $_POST["box"];
    $myquery = "INSERT INTO `first_box`(`box`) VALUES ('" . $box . "')";
    $result = mysqli_query($conn, $myquery);
    if (!$result) {
        die("" . mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
    <style>
        .allclass {
            text-align: center;
            background-color: bisque;
            margin: 150px;
            padding: auto;
            height: 500px;
        }
    </style>

</head>

<body>
    <div class="allclass">
        <form action="" method="post">
            <h1>Php Todo List </h1>
            <input type="text" name="box" id="box" placeholder="Enter Somthing">
            <button class="Add">Add</button>
        </form>

        <table style="width: 100%; margin-top: 10px;">
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Todo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `first_box`";
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows >  0) {
                    $index = 1;
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $index ?></td>
                            <td><?php echo $row['box'] ?></td>
                            <td>
                                <a href="<?php echo 'delete.php?delete_id=' . $row['id']; ?>" class="btn btn-danger">Delete</a>
                                <a href="<?php echo 'edit.php?edit_id=' . $row['id']; ?>" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                    <?php
                        $index++;
                    }
                } else { ?>
                    <tr>
                        <td colspan="3">No Data Found</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <!--
      "UPDATE `new_box` SET `id`='[value-1]',`box`='[value-2]' WHERE 1";
     "DELETE FROM `new_box` WHERE 0";

    -->
</body>

</html>