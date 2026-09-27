<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?php $editing = $customer !== null; ?>
<section class="page-heading">
    <span class="eyebrow">Ledger / Customers / <?= $editing ? 'Edit' : 'New' ?></span>
    <h1><?= $editing ? 'Edit customer' : 'New customer' ?></h1>
    <p><?= $editing ? 'Update this customer’s contact details.' : 'Add a customer to the POS ledger.' ?></p>
</section>
<section class="form-card">
    <form method="post" action="<?= $editing ? site_url('customers/' . $customer['id']) : site_url('customers') ?>" novalidate>
        <?= csrf_field() ?>
        <div class="form-grid">
            <div class="field"><label for="full_name">Full name <span aria-hidden="true">*</span></label><input id="full_name" name="full_name" type="text" maxlength="100" required value="<?= esc($values['full_name'] ?? '') ?>" aria-invalid="<?= isset($errors['full_name']) ? 'true' : 'false' ?>"><small class="field-error"><?= esc($errors['full_name'] ?? '') ?></small></div>
            <div class="field"><label for="email">Email address <span aria-hidden="true">*</span></label><input id="email" name="email" type="email" maxlength="100" required value="<?= esc($values['email'] ?? '') ?>" aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>"><small class="field-error"><?= esc($errors['email'] ?? '') ?></small></div>
            <div class="field"><label for="phone">Phone number <span class="optional">Optional</span></label><input id="phone" name="phone" type="tel" maxlength="20" value="<?= esc($values['phone'] ?? '') ?>" aria-invalid="<?= isset($errors['phone']) ? 'true' : 'false' ?>"><small class="field-error"><?= esc($errors['phone'] ?? '') ?></small></div>
        </div>
        <div class="form-actions"><button class="button button-primary" type="submit"><?= $editing ? 'Save changes' : 'Create customer' ?></button><a class="button button-secondary" href="<?= site_url('customers') ?>">Cancel</a></div>
    </form>
</section>
<?= $this->endSection() ?>
