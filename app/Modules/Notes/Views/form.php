<!DOCTYPE html>
<html>
<head>
    <title>Add Note</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Add Session Note for Student ID: <?= esc($student_id) ?></h3>

    <?php if ($validation): ?>
        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
    <?php endif; ?>

    <form method="post" action="<?= site_url("notes/store/$student_id") ?>">
        <div class="mb-3">
            <label for="note_text" class="form-label">Note</label>
            <textarea name="note_text" class="form-control" rows="4" required><?= esc(set_value('note_text')) ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Note</button>
        <a href="<?= site_url("notes/$student_id") ?>" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
