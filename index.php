<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .color-box {
            width: 30px;
            height: 30px;
            display: inline-block;
            border: 1px solid #ccc;
        }
        #searchInput {
            margin-bottom: 20px;
        }
        /* New elegant loader styles */
        .loader-container {
            padding: 40px;
            text-align: center;
            display: none;
        }
        .loader {
            display: inline-block;
            width: 40px;
            height: 40px;
            position: relative;
        }
        .loader::after {
            content: " ";
            display: block;
            width: 32px;
            height: 32px;
            margin: 4px;
            border-radius: 50%;
            border: 3px solid #3498db;
            border-color: #3498db transparent;
            animation: spin 0.8s linear infinite;
        }
        .loader-text {
            color: #6c757d;
            margin-top: 10px;
            font-size: 14px;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        /* Fade effect for table */
        .table-fade {
            opacity: 0.6;
            transition: opacity 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Task Management Portal</h1>
        
        <div class="row mb-3">
            <div class="col">
                <input type="text" id="searchInput" class="form-control" placeholder="Search tasks...">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModal">
                    Open Image Modal
                </button>
            </div>
        </div>

        <div class="table-responsive">
            <!-- Add loader above table -->
     

            <table class="table table-striped" id="taskTable">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Color</th>
                    </tr>
                </thead>
   
                <tbody id="taskTableBody">
                    <!-- Data will be populated here -->
                </tbody>
            </table>
            <div id="loaderContainer" class="loader-container">
                <div class="loader"></div>
                <div class="loader-text">Fetching elements...</div>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Image Upload</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="file" id="imageInput" accept="image/*" class="form-control mb-3">
                    <div id="imagePreview" class="text-center">
                        <img id="previewImg" style="max-width: 100%; display: none;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
