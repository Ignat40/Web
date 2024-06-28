<?php
    include "funcitons.php";
?>


<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">

        <?php
        if ($page == 1) {
        ?>
            <form method="GET">
                <div class="form-group">
                    <h2>Add Partcipants</h2>
                    <input class="form-control" type="text" placeholder="Name of Partcipants" name="names">
                    <small id="namesHelp" class="form-text text-muted">
                        Add the names separated by commas
                    </small>
                </div>

                <button type="submit" class="btn btn-primary">
                    Add Partcipants
                </button>
            </form>

            <?php
            foreach ($errorsArray as $error) {
            ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
        <?php
            }
        }
        ?>

        <?php if ($page == 2) {include "page_2.php";}?>
        <?php if ($page == 3) {include "page_3.php";}?>

    </div>
</body>

</html>