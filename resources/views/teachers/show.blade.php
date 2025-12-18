<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="h3 mb-0">Teacher Details</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3"><strong>TID:</strong></div>
                            <div class="col-sm-9">{{ $teacher->tid }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3"><strong>Full Name:</strong></div>
                            <div class="col-sm-9">{{ $teacher->full_name }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3"><strong>Gender:</strong></div>
                            <div class="col-sm-9">
                                <span class="badge bg-{{ $teacher->gender == 'male' ? 'primary' : ($teacher->gender == 'female' ? 'success' : 'secondary') }}">
                                    {{ ucfirst($teacher->gender) }}
                                </span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3"><strong>Degree:</strong></div>
                            <div class="col-sm-9">{{ $teacher->degree }}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3"><strong>Telephone:</strong></div>
                            <div class="col-sm-9">{{ $teacher->tel }}</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back to List</a>
                        <a href="{{ route('teachers.edit', $teacher->tid) }}" class="btn btn-secondary ms-2">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>