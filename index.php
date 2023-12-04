<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="w-400 p-5 shadow rounded bg-light">
        <form method="POST" action="#" id="loginForm" onsubmit="handleFormSubmission(event)">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h3 class="display-4 fs-1 text-center"><b>LOGIN</b></h3>
            </div>

            <div class="mb-3">
                <label class="form-label">User name</label>
                <input type="text" class="form-control" id="username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>
            </div>

            <!-- Dropdown for user role -->
            <div class="mb-3">
                <label class="form-label">Select Role</label>
                <select class="form-control" id="userRole" onchange="updateAction()">
                    <option value="admin">Admin</option>
                    <option value="staff">Staff</option>
                    <option value="coordinator">Coordinator</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">LOGIN</button>
            <a href="signup.php">Sign up </a>
        </form>

        <script>
            function updateAction() {
                var selectedRole = document.getElementById('userRole').value;
                var loginForm = document.getElementById('loginForm');
                loginForm.action = 'app/auth/auth_' + selectedRole + '.php';
            }

            function handleFormSubmission(event) {
                event.preventDefault();

                var username = document.getElementById('username').value;
                var password = document.getElementById('password').value;
                var selectedRole = document.getElementById('userRole').value;

                var isAuthenticated = false;

                // Check credentials based on the selected role
                if (selectedRole === "admin" && username === "admin" && password === "1234") {
                    isAuthenticated = true;
                } else if (selectedRole === "staff" && username === "staff" && password === "1234") {
                    isAuthenticated = true;
                } else if (selectedRole === "coordinator" && username === "coordinator" && password === "1234") {
                    isAuthenticated = true;
                }

                if (isAuthenticated) {
                    // redirecting thee selected page 
                    window.location.href = 'app/auth/' + selectedRole + '.php';
                } else {
                    alert('Authentication failed. Please check your credentials.');
                }
            }
        </script>
    </div>
</body>

</html>