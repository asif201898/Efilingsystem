<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Progress</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <style>
        /* Custom styles here */
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .status-box {
            background-color: #E9edf2;
            /* Blue background color */
            color: white;
            /* Text color on blue background */
            border: 1px solid #007bff;
            /* Border color to match the background */
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .progress-item {
            margin-bottom: 30px;
            cursor: pointer;
            padding: 15px;
            border-left: 5px solid transparent;
            transition: background-color 0.3s, border-left-color 0.3s;
        }

        .progress-item:hover {
            background-color: black;
            border-left-color: #17a2b8;
            /* Teal */
        }

        .progress-item:hover .department-name {
            color: #17a2b8;
            /* Teal */
        }

        .status-accept {
            font-weight: bold;
            color: white;
            /* Green */
        }

        .status-pending {
            font-weight: bold;
            color: #ffc107;
            /* Yellow */
        }

        .status-reject {
            font-weight: bold;
            color: #dc3545;
            /* Red */
        }

        .department-name {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
            /* Dark Gray */
        }

        /* Department-specific colors */
        .deptA {
            border-left-color: black;
            /* Teal */
        }

        .deptB {
            border-left-color: #28a745;
            /* Green */
        }

        .deptC {
            border-left-color: #ffc107;
            /* Yellow */
        }

        .deptD {
            border-left-color: #dc3545;
            /* Red */
        }

        /* Hide details by default */
        .details {
            display: none;
        }

        /* Add space between departments */
        .progress-item+.progress-item {
            margin-top: 20px;
        }

        /* Styling for tables */
        .comments-section table,
        .attached-files ul {
            margin-top: 10px;
            list-style-type: none;
            width: 100%;
            border-collapse: collapse;
        }

        .comments-section th,
        .comments-section td,
        .attached-files li {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
        }

        /* Different background and font colors for tables */
        .comments-section th {
            background-color: #333;
            color: white;
        }

        .comments-section td {
            background-color: #f9f9f9;
            /* Light Gray */
            color: #555;
            /* Gray */
        }

        .attached-files li {
            background-color: #f57438;
            /* Blue */
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
    <div class="page-header">
        <br>
        <small>Status / View Status</small>
    </div>
        <div class="status-box">
            <div style="background-color: #333;" class="progress-bar">
                <div class="progress-item deptA" onclick="toggleDetails('deptA')">
                    <p class="status-accept">&#10004; Accepted</p>
                    <p class="department-name">Department A</p>
                    <p>Approved on: 2023-07-19</p>
                </div>
                <div class="details" id="deptA">
                    <div class="comments-section">
                        <hr>
                        <table>
                            <tr>
                                <th>Department</th>
                                <th>Comment</th>
                                <th>Attached Files</th>
                            </tr>
                            <tr>
                                <td>Department B</td>
                                <td>comment 1: The file looks good.</td>
                                <td>
                                    <ul>
                                        <li>File 1: <a href="#">Download</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
                <hr>
                <div class="progress-item deptB" onclick="toggleDetails('deptB')">
                    <p class="status-accept">&#10004; Accepted</p>
                    <p class="department-name">Department B</p>
                    <p>Approved on: 2023-07-18</p>
                </div>
                <div class="details" id="deptB">
                    <div class="comments-section">
                        <h4>Comments:</h4>
                        <table>
                            <tr>
                                <th>Department</th>
                                <th>Comment</th>
                                <th>Attached Files</th>
                            </tr>
                            <tr>
                                <td>Department C</td>
                                <td>comment 1: Approved. Proceed with caution. <br>comment 2: Make sure to double-check
                                    the figures.

                                </td>
                                
                                <td>
                                    <ul>
                                        <li>File 2: <a href="#">Download</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
                <hr>
                <div class="progress-item deptC" onclick="toggleDetails('deptC')">
                    <p class="status-accept">&#10004; Accepted</p>
                    <p class="department-name">Department C</p>
                    <p>Approved on: 2023-07-17</p>
                </div>
                <div class="details" id="deptC">
                    <div class="comments-section">
                        <h4>Comments:</h4>
                        <table>
                            <tr>
                                <th>Department</th>
                                <th>Comment</th>
                                <th>Attached Files</th>
                            </tr>
                            <tr>
                                <td>Department D</td>
                                <td>comment 1: Pending approval from the Department Head.</td>
                                <td>
                                    <ul>
                                        <li>File 3: <a href="#">Download</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
                <hr>
                <div class="progress-item deptD" onclick="toggleDetails('deptD')">
                    <p class="status-accept">&#10004; Accepted</p>
                    <p class="department-name">Department D</p>
                    <p>Approved on: 2023-07-16</p>
                </div>
                <div class="details" id="deptD">
                    <div class="comments-section">
                        <h4>Comments:</h4>
                        <table>
                            <tr>
                                <th>Department</th>
                                <th>Comment</th>
                                <th>Attached Files</th>
                            </tr>
                            <tr>
                                <td>Department E</td>
                                <td>comment 1: File received and reviewed.</td>
                                <td>
                                    <ul>
                                        <li>File 4: <a href="#">Download</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleDetails(deptId) {
            const details = document.getElementById(deptId);
            if (details.style.display === 'none' || details.style.display === '') {
                details.style.display = 'block';
            } else {
                details.style.display = 'none';
            }
        }
    </script>
</body>

</html>