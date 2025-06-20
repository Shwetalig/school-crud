<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Add Student</h3>

    <?php if ($validation): ?>
        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
    <?php endif; ?>

    <form method="post" action="<?= site_url('students/store') ?>">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?= esc(set_value('name')) ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= esc(set_value('email')) ?>" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="<?= esc(set_value('phone')) ?>">
        </div>

        <button type="submit" class="btn btn-primary">Add Student</button>
        <a href="<?= site_url('students') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
