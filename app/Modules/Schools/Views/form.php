<!DOCTYPE html>
<html>
<head>
    <title><?= isset($school) ? 'Edit' : 'Add' ?> School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4"><?= isset($school) ? 'Edit' : 'Add' ?> School</h2>

    <?php if ($validation): ?>
        <div class="alert alert-danger">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form method="post" action="<?= site_url(isset($school) ? 'schools/update/'.$school['id'] : 'schools/store') ?>">
        <div class="mb-3">
            <label class="form-label">School Name</label>
            <input type="text" name="school_name" class="form-control" value="<?= esc($school['school_name'] ?? '') ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Contact Person</label>
            <input type="text" name="contact_person" class="form-control" value="<?= esc($school['contact_person'] ?? '') ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?= esc($school['email'] ?? '') ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Number of Students</label>
            <input type="number" name="num_students" class="form-control" value="<?= esc($school['num_students'] ?? '') ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select" required>
                <option value="active" <?= (isset($school) && $school['status'] == 'active') ? 'selected' : '' ?>>Active</option>
                <option value="inactive" <?= (isset($school) && $school['status'] == 'inactive') ? 'selected' : '' ?>>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?= site_url('schools') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
