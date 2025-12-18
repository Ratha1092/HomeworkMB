<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="h3 mb-0">Edit Teacher</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('teachers.update', $teacher->tid) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="page" value="{{ request('page', 1) }}">
                            <div class="mb-3">
                                <label for="tid" class="form-label">TID</label>
                                <input type="text" class="form-control" id="tid" name="tid" value="{{ $teacher->tid }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="full_name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $teacher->full_name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="male" {{ $teacher->gender == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ $teacher->gender == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ $teacher->gender == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="degree" class="form-label">Degree</label>
                                <input type="text" class="form-control" id="degree" name="degree" maxlength="50" value="{{ $teacher->degree }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="tel" class="form-label">Telephone</label>
                                <input type="tel" class="form-control" id="tel" name="tel" pattern="[0-9\s]+" value="{{ $teacher->tel }}" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update Teacher</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>