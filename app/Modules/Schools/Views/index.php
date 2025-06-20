<!DOCTYPE html>
<html>
<head>
    <title>School Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>School Partners</h2>
        <a href="<?= site_url('schools/create') ?>" class="btn btn-success">+ Add School</a>
    </div>

    <?php if (session()->getFlashdata('message')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <form class="row g-3 mb-4" method="get">
        <div class="col-md-4">
            <input type="text" class="form-control" name="search" placeholder="Search by name or contact" value="<?= esc($_GET['search'] ?? '') ?>">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <table class="table table-bordered table-hover shadow-sm">
        <thead class="table-light">
            <tr>
                <th>School Name</th>
                <th>Contact Person</th>
                <th>Email</th>
                <th>Students</th>
                <th>Status</th>
                <th width="150">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($schools) > 0): ?>
                <?php foreach ($schools as $school): ?>
                    <tr>
                        <td><?= esc($school['school_name']) ?></td>
                        <td><?= esc($school['contact_person']) ?></td>
                        <td><?= esc($school['email']) ?></td>
                        <td><?= esc($school['num_students']) ?></td>
                        <td>
                            <span class="badge bg-<?= $school['status'] === 'active' ? 'success' : 'secondary' ?>">
                                <?= ucfirst($school['status']) ?>
                            </span>
                        </td>
                        <td>
                            
                            <a href="<?= site_url('schools/edit/'.$school['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= site_url('schools/delete/'.$school['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this school?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="6" class="text-center">No schools found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        <?= $pager->links('default', 'bootstrap') ?>
    </div>
</div>
</body>
</html>
