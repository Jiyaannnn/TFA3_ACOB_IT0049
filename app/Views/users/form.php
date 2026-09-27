<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?php $editing = $user !== null; ?>
<section class="page-heading">
    <span class="eyebrow">Ledger / Users / <?= $editing ? 'Edit' : 'New' ?></span>
    <h1><?= $editing ? 'Edit user' : 'New user' ?></h1>
    <p><?= $editing ? 'Update this staff account and profile picture.' : 'Create a staff account with a unique username.' ?></p>
</section>
<section class="form-card">
    <form method="post" enctype="multipart/form-data" action="<?= $editing ? site_url('users/' . $user['id']) : site_url('users') ?>" novalidate>
        <?= csrf_field() ?>
        <div class="form-grid">
            <div class="field"><label for="username">Username <span aria-hidden="true">*</span></label><input id="username" name="username" type="text" maxlength="50" required value="<?= esc($values['username'] ?? '') ?>" aria-invalid="<?= isset($errors['username']) ? 'true' : 'false' ?>"><small class="field-error"><?= esc($errors['username'] ?? '') ?></small></div>
            <div class="field"><label for="full_name">Full name <span aria-hidden="true">*</span></label><input id="full_name" name="full_name" type="text" maxlength="100" required value="<?= esc($values['full_name'] ?? '') ?>" aria-invalid="<?= isset($errors['full_name']) ? 'true' : 'false' ?>"><small class="field-error"><?= esc($errors['full_name'] ?? '') ?></small></div>
            <?php if ($editing): ?>
                <div class="field field-wide"><label for="avatar">Profile picture <span class="optional">Optional</span></label><input id="avatar" name="avatar" type="file" accept="image/jpeg,image/png" aria-invalid="<?= isset($errors['avatar']) ? 'true' : 'false' ?>"><small>JPG or PNG, up to 2 MB. The image will be cropped to a square thumbnail.</small><small class="field-error"><?= esc($errors['avatar'] ?? '') ?></small></div>
            <?php endif ?>
        </div>
        <div class="form-actions"><button class="button button-primary" type="submit"><?= $editing ? 'Save changes' : 'Create user' ?></button><a class="button button-secondary" href="<?= site_url('users') ?>">Cancel</a></div>
    </form>
</section>
<?= $this->endSection() ?>
