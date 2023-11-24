<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TO-DO LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;1,200&display=swap" rel="stylesheet">
    <style>
        tr {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="ubah">
        <h5>Feeling bored with this theme?</h5>
        <input type="checkbox" onclick="ubahMode()">
    </div>


    <form action="insert.php" method="post">
        <div class="container">
            <div class="roww">
                <div class="row justify-content-center">
                    <h1 class="text-center font-monospace p-2 ">What I'm Goin' To Do</h1>
                    <div class="col-8 pb-4">
                        <input type="text" name="list" class="form-control shadow border-warning text-warning" placeholder="Type here...">
                    </div>
                    <div class="col-2 pb-4">
                        <button class="btn btn-warning shadow"><i class="fa-solid fa-plus fa-beat"></i></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- get data from local host -->
    <?php
    include "config.php";
    $sql = mysqli_query($con, "SELECT * FROM `tabel todo`");
    $i = 1;
    ?>

    <!-- tampilkan data -->
    <div class="wrapper">
        <?php while ($row = mysqli_fetch_array($sql)) { ?>
            <div class="box">

                <div class="nomor"><?php echo $i++ ?></div>
                <div class="act"> <?php echo $row['Act List'] ?></div>
                <div class="button">
                    <div class="update"><a href="update.php? id=<?php echo $row['id'] ?>" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square fa-bounce"></i>Update?</a></div>
                    <div class="delete"><a href="delete.php? id= <?php echo $row['id'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can fa-shake"></i>Delete?</a></div>
                </div>
            </div>
        <?php } ?>
    </div>



    <!-- ngambil bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function ubahMode() {
            const ubah = document.body;
            ubah.classList.toggle("yellow");
        }
    </script>
</body>

</html>