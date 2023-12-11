<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NCERT VSK Survey 2023 | Form</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        window.history.forward();
    </script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Function for Questions -->
    <?php include('function.php') ?>
    <!-- Header -->
    <?php include('header.php') ?>
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary shadow">
        <div class="container">
            <h2 class="text-center " style="color: orangered;">VSK Maturity Assessment 2023</h2>
            <form class="d-flex">
                <?php include('login.php'); ?>
                <p class="me-5">Logged In as&nbsp;
                    <span class="fs-5" style="color: orangered;">
                        "<?php echo $_SESSION['username'];
                            $state = $_SESSION['username']; ?>"
                    </span>
                </p>
                <a href="index.php" class="btn btn-danger fs-5">Logout&nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </form>
        </div>
    </nav>

    <div class="container p-5 ">
        <div class="shadow border-warning border rounded-3 ">
            <div align="center" class="m-5">
                <?php $score = response($state); ?>
                <h3 class="score">Your Score : <?php echo $score['total']; ?> out of 70</h3>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php'); ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>