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

    <div class="container ">
        <br>
        <div class="row p-5 pt-0">
            <div class="border border-danger rounded-3 shadow p-3 mb-3">
                <h5>Instruction for state / UT while filling this Survey:</h5><hr>
                <ol>
                    <li>There are in total 7 parts to this form.</li>
                    <li>Each part has 4 stages.</li>
                    <li>A state / UT can select one or more stage depending on their current status</li>
                    <li>Each stage is incremental in nature (i.e. Stage 1= 1 point, Stage 2= 2 points, Stage 3= 3 points, Stage 4= 4 points, Total= 10). <b>Total score is 70.</b></li>
                    <li>While self-evaluating, it is important to have necessary back up / evidence to support the evaluation.</li>
                    <li>If none of the stage is applicable, it can be left blank and there will be no score allotted to it.</li>
                    <li>The composite score generated from the evaluation will be provided to state immediately after the response is submitted.</li>
                    <li>The response can be submitted only once and cannot be changed. Hence, it is important to ensure accuracy while filling this sheet.</li>
                </ol>
            </div>
            <form action="submit.php" method="post">
                <div class="input-group mb-3 border border-danger-subtle rounded shadow">
                    <label class="input-group-text fs-5" for="inputGroupSelect01">
                        <span class="text-danger">*</span>Select State / Stakeholder
                    </label>
                    <select class="form-select" id="state" name="state" required>
                        <option value="">Select...</option>
                        <option value="<?php echo $state ?>"><?php echo $state ?></option>
                    </select>
                </div><hr class="border rounded border-danger border-2 opacity-50">
                <!-- Question 1 -->
                <div class="col border border-primary rounded mt-3 p-3 mb-2 shadow">
                    <?php $question = question(1); ?>
                    <label for="question1" class="form-label fs-5" id="q1">Part <?php echo $question['qid']; ?>&nbsp;:&nbsp;<?php echo $question['ques']; ?> </label>
                    <hr>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q1a" value="1" name="question1[]" class="form-check-input mt-0" type="checkbox" >
                        </div>
                        <input type="text" class="form-control text-break" readonly value="<?php echo $question['a1']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q1b" value="2" name="question1[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control text-break" readonly value="<?php echo $question['a2']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q1c" value="3" name="question1[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a3']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q1d" value="4" name="question1[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a4']; ?>">
                    </div>
                </div>
                <!-- Question 2 -->
                <div class="col border border-primary rounded mt-3 p-3 mb-2 shadow">
                    <?php $question = question(2); ?>
                    <label for="question1" class="form-label fs-5" id="q2">Part <?php echo $question['qid']; ?>&nbsp;:&nbsp;<?php echo $question['ques']; ?> </label>
                    <hr>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q2a" value="1" name="question2[]" class="form-check-input mt-0" type="checkbox" >
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a1']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q2b" value="2" name="question2[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a2']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q2c" value="3" name="question2[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a3']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q2d" value="4" name="question2[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a4']; ?>">
                    </div>
                </div>
                <!-- Question 3 -->
                <div class="col border border-primary rounded mt-3 p-3 mb-2 shadow">
                    <?php $question = question(3); ?>
                    <label for="question1" class="form-label fs-5" id="q3">Part <?php echo $question['qid']; ?>&nbsp;:&nbsp;<?php echo $question['ques']; ?> </label>
                    <hr>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q3a" value="1" name="question3[]" class="form-check-input mt-0" type="checkbox" >
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a1']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q3b" value="2" name="question3[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a2']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q3c" value="3" name="question3[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a3']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q3d" value="4" name="question3[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a4']; ?>">
                    </div>
                </div>
                <!-- Question 4 -->
                <div class="col border border-primary rounded mt-3 p-3 mb-2 shadow">
                    <?php $question = question(4); ?>
                    <label for="question1" class="form-label fs-5" id="q4">Part <?php echo $question['qid']; ?>&nbsp;:&nbsp;<?php echo $question['ques']; ?> </label>
                    <hr>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4a" value="1" name="question4[]" class="form-check-input mt-0" type="checkbox" >
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a1']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4b" value="2" name="question4[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a2']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4c" value="3" name="question4[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a3']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4d" value="4" name="question4[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a4']; ?>">
                    </div>
                </div>
                <!-- Question 5 -->
                <div class="col border border-primary rounded mt-3 p-3 mb-2 shadow">
                    <?php $question = question(5); ?>
                    <label for="question1" class="form-label fs-5" id="q5">Part <?php echo $question['qid']; ?>&nbsp;:&nbsp;<?php echo $question['ques']; ?> </label>
                    <hr>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4a" value="1" name="question5[]" class="form-check-input mt-0" type="checkbox" >
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a1']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4b" value="2" name="question5[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a2']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4c" value="3" name="question5[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a3']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4d" value="4" name="question5[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a4']; ?>">
                    </div>
                </div>
                <!-- Question 6 -->
                <div class="col border border-primary rounded mt-3 p-3 mb-2 shadow">
                    <?php $question = question(6); ?>
                    <label for="question1" class="form-label fs-5" id="q6">Part <?php echo $question['qid']; ?>&nbsp;:&nbsp;<?php echo $question['ques']; ?> </label>
                    <hr>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4a" value="1" name="question6[]" class="form-check-input mt-0" type="checkbox" >
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a1']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4b" value="2" name="question6[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a2']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4c" value="3" name="question6[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a3']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4d" value="4" name="question6[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a4']; ?>">
                    </div>
                </div>
                <!-- Question 7 -->
                <div class="col border border-primary rounded mt-3 p-3 mb-2 shadow">
                    <?php $question = question(7); ?>
                    <label for="question1" class="form-label fs-5" id="q7">Part <?php echo $question['qid']; ?>&nbsp;:&nbsp;<?php echo $question['ques']; ?> </label>
                    <hr>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4a" value="1" name="question7[]" class="form-check-input mt-0" type="checkbox" >
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a1']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4b" value="2" name="question7[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a2']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4c" value="3" name="question7[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a3']; ?>">
                    </div>
                    <div class="input-group mb-1 ">
                        <div class="input-group-text">
                            <input id="q4d" value="4" name="question7[]" class="form-check-input mt-0" type="checkbox">
                        </div>
                        <input type="text" class="form-control" readonly value="<?php echo $question['a4']; ?>">
                    </div>
                </div>
                <!-- Submit Button -->
                <div align="center">
                    <button type="submit" name="submit" class="btn btn-success fs-5 m-3">Submit&nbsp;<i class="fa fa-check" aria-hidden="true"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- footer -->
    <?php include('footer.php'); ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>