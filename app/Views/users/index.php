<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<!-- This page receives MySQL records from Users::index() in the controller. -->

<section class="page-heading page-heading-row">
    <div><span class="eyebrow">Ledger / Users</span><h1>User accounts</h1><p>Staff identity records retrieved from the MySQL user ledger.</p></div>
    <div class="heading-actions"><span class="record-count"><?= count($users) ?> accounts</span><a class="button button-primary" href="<?= site_url('users/new') ?>">+ New user</a></div>
</section>

<section class="table-card">
    <div class="table-wrap">
        <table>
            <thead><tr><th>Username</th><th>Full name</th><th>Date created</th><th>Action</th></tr></thead>
            <tbody>
            <?php // The loop turns each user record into one visible table row. ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td data-label="Username"><code>@<?= esc($user['username']) ?></code></td>
                    <td data-label="Full name"><span class="table-person"><img class="user-avatar" src="<?= ! empty($user['avatar']) ? base_url('uploads/avatars/' . rawurlencode($user['avatar'])) : base_url('assets/img/avatar-placeholder.svg') ?>" alt="<?= ! empty($user['avatar']) ? esc($user['full_name'] . ' profile picture') : 'Default profile picture' ?>"><strong><?= esc($user['full_name']) ?></strong></span></td>
                    <td data-label="Created"><time datetime="<?= esc($user['created_at']) ?>"><?= esc(date('M j, Y', strtotime($user['created_at']))) ?></time></td>
                    <td data-label="Action"><a class="table-action" href="<?= site_url('users/' . $user['id'] . '/edit') ?>">Edit</a></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>

<?= $this->endSection() ?>
