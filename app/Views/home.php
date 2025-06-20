<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container text-center mt-5">
    <h2 class="mb-4">Welcome to School Management System</h2>

    <div class="d-grid gap-3 col-6 mx-auto">
        <a href="<?= site_url('schools') ?>" class="btn btn-primary btn-lg">Manage Schools</a>
        <a href="<?= site_url('students') ?>" class="btn btn-success btn-lg">Manage Students</a>
    </div>
</div>
</body>
</html>
