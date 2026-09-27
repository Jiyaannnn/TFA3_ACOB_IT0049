<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<!-- Values such as $name and $section were prepared by Pages::about(). -->

<section class="page-heading">
    <span class="eyebrow">Project file / TFA3</span>
    <h1>About Ledgerline</h1>
    <p>A CodeIgniter POS directory with validated create and edit forms, plus prepared profile pictures for staff accounts.</p>
</section>

<section class="about-grid">
    <article class="story-card">
        <span class="card-tag">PROJECT BRIEF</span>
        <h2>A retail directory built around reliable records.</h2>
        <p>Ledgerline POS follows a clear MVC flow: a route selects a controller method, the controller asks a Model for records, and a view presents the returned data.</p>
        <p>The CustomerModel and UserModel connect the application to MySQL. Validation rejects incorrect entries and redisplays the form with the submitted values so they can be corrected.</p>
        <p>Staff profile pictures are checked as JPG or PNG files up to 2 MB, resized for display, and stored in a public uploads folder. MySQL holds only the generated filename.</p>
    </article>
    <aside class="profile-card">
        <div class="avatar" aria-hidden="true">JA</div>
        <span class="eyebrow">Developer profile</span>
        <h2><?= esc($name) ?></h2>
        <dl>
            <div><dt>Section</dt><dd><?= esc($section) ?></dd></div>
            <div><dt>Course</dt><dd><?= esc($course) ?></dd></div>
            <div><dt>Project</dt><dd>Technical Formative Assessment 3</dd></div>
        </dl>
    </aside>
</section>

<?= $this->endSection() ?>
