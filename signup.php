<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat app-signup</title>
    <link rel="stylesheet" href="css/stylesign.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="d-flex
             justify-content-center
             align-items-center
             vh-100 
             bg-light">
    <div class="w-400 p-5 shadow rounded bg-light">
        <form method="POST" action="app/auth/signup.php">
            <div class="d-flex
                    justify-content-center
                    align-items-center      
                    flex-column">
               
                <h3 class="display-4 fs-1 text-center"><b>SIGN UP</b></h3>
            </div>
            <?php
            if (isset($_GET['error'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php echo htmlspecialchars($_GET['error']); ?>
                </div>
            <?php }
            if (isset($_GET['email'])) {
                $email = $_GET['email'];
            } else {
                $email = '';
            }
            if (isset($_GET['username'])) {
                $name = $_GET['username'];
            } else {
                $name = '';
            }
            if (isset($_GET['u_pwd'])) {
                $pwd = $_GET['u_pwd'];
            } else {
                $pwd = '';
            }
            if (isset($_GET['u_contact'])) {
                $contact= $_GET['u_contact'];
            } else {
                $contact = '';
            }

            ?>
            <div class="mb-3">
                <label class="form-label ">Email</label>
                <input type="email" class="form-control" name="email" value="<?= $email ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">User name</label>
                <input type="text" class="form-control" name="username" value="<?= $name ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="u_pwd" value="<?=$pwd ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">profile</label>
                <input type="file" class="form-control" name="u_pick">
                <div class="mb-3">
                    <label class="form-label">contact</label>
                    <input type="text" class="form-control" name="u_contact" value="<?=$contact?>">
                </div>
                <button type="submit" class="btn btn-primary">signup</button>
                <a href="index.php" class="p-5">already registered?</a>
        </form>
    </div>
</body>

</html>