<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for styling */
        body {
            padding: 20px;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            margin-bottom:15%;
        }
        .demo-image {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .button-with-image {
            text-align: center;
        }
    </style>
</head>
<body>
<header>
        <h1>Welcome to Staff Dashboard</h1>
    </header>
    <div class="container">
        <!-- View Button with Image -->
        <div class="button-container">
            <div class="button-with-image">
                <img src="./asstes/dflt_img.png" alt="View Image" class="img-fluid demo-image">
                <button class="btn btn-primary" onclick="viewData()">View</button>
            </div>

            <!-- Sort Button with Image -->
            <div class="button-with-image">
                <img src="./asstes/sort.jpg" alt="Sort Image" class="img-fluid demo-image">
                <button class="btn btn-secondary" onclick="sortData()">Sort</button>
            </div>

            <!-- View Graph Button with Image -->
            <div class="button-with-image">
                <img src="./asstes/graph.jpg" alt="Graph Image" class="img-fluid demo-image">
                <button class="btn btn-info" onclick="viewGraph()">View Graph</button>
            </div>
        </div>

        <!-- Dynamic Content Container -->
        <div id="dynamic-content">
            <!-- This is where your dynamic content will be displayed -->
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        // Add your JavaScript functions for handling button clicks and dynamic content here
        function viewData() {
            // Example: Replace this with your logic to display data
            document.getElementById('dynamic-content').innerHTML = '<p>Viewing Data...</p>';
        }

        function sortData() {
            // Example: Replace this with your logic to sort data
            document.getElementById('dynamic-content').innerHTML = '<p>Sorting Data...</p>';
        }

        function viewGraph() {
            // Example: Replace this with your logic to display a graph
            document.getElementById('dynamic-content').innerHTML = '<p>Viewing Graph...</p>';
        }
    </script>
</body>
</html>
