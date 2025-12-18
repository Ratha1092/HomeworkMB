<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .pagination {
            justify-content: center;
        }
        .pagination svg {
            width: 16px;
            height: 16px;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h1 class="h4 mb-0">Teachers List</h1>
                    <a href="{{ route('teachers.create') }}" class="btn btn-primary">
                        Add New Teacher
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>TID</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>Degree</th>
                                    <th>Telephone</th>
                                    <th width="185">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                    <tr>
                                        <td>{{ $teacher->tid }}</td>
                                        <td>{{ $teacher->full_name }}</td>
                                        <td>
                                            <span class="badge bg-{{ 
                                                $teacher->gender === 'male' ? 'primary' :
                                                ($teacher->gender === 'female' ? 'success' : 'secondary')
                                            }}">
                                                {{ ucfirst($teacher->gender) }}
                                            </span>
                                        </td>
                                        <td>{{ $teacher->degree }}</td>
                                        <td>{{ $teacher->tel }}</td>
                                        <td>
                                            <a href="{{ route('teachers.show', $teacher->tid) }}?{{ request()->getQueryString() }}"class="btn btn-sm btn-primary"> View </a>
                                            <a href="{{ route('teachers.edit', $teacher->tid) }}?{{ request()->getQueryString() }}"class="btn btn-sm btn-secondary"> Edit </a>
                                            <form action="{{ route('teachers.destroy', $teacher->tid) }}"method="POST"class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $teachers->appends(request()->query())->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
