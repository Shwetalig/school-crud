<!DOCTYPE html>
<html>
<head>
    <title>Session Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3 class="mb-3">Session Notes for Student ID: <?= esc($student_id) ?></h3>

    <?php if (session()->getFlashdata('message')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
    <?php endif; ?>

    <form method="get" class="mb-3 row">
        <div class="col-auto">
            <input type="text" name="search" class="form-control" placeholder="Search notes..." value="<?= esc($_GET['search'] ?? '') ?>">
        </div>
        <div class="col-auto">
            <button class="btn btn-primary">Search</button>
            <a href="<?= site_url("notes/create/$student_id") ?>" class="btn btn-success">+ Add Note</a>
        </div>
    </form>

    <?php if (count($notes) > 0): ?>
        <ul class="list-group">
            <?php foreach ($notes as $note): ?>
                <li class="list-group-item">
                    <small class="text-muted float-end"><?= date('d M Y, h:i A', strtotime($note['created_at'])) ?></small>
                    <?= esc($note['note_text']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <div class="alert alert-info">No notes found.</div>
    <?php endif; ?>
</div>
</body>
</html>
