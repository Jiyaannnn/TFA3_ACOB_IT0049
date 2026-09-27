<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<!-- extend() reuses the shared layout; this section fills its main content area. -->

<section class="hero" aria-labelledby="dashboard-title">
    <div class="hero-copy-block">
        <span class="eyebrow"><i></i> Ledger connected to MySQL</span>
        <h1 id="dashboard-title">Every account.<br><span>On the record.</span></h1>
        <p class="hero-copy">Ledgerline keeps customer contacts and staff accounts in one persistent directory. Create or edit records with validated forms, and add profile pictures for staff.</p>
        <div class="hero-actions">
            <a class="button button-primary" href="<?= site_url('customers') ?>">Open customer list <span aria-hidden="true">→</span></a>
            <a class="button button-secondary" href="<?= site_url('users') ?>">View staff access</a>
        </div>
    </div>
    <aside class="terminal" aria-label="System summary">
        <div class="terminal-bar"><span><i></i><i></i><i></i></span><b>LIVE LEDGER</b><small>DB-01</small></div>
        <div class="terminal-display">
            <span class="scan-line" aria-hidden="true"></span>
            <div class="terminal-kicker">CURRENT DIRECTORY</div>
            <div class="terminal-total"><strong><?= esc($customerCount + $userCount) ?></strong><span>total<br>records</span></div>
            <div class="terminal-stats">
                <div><span>Customers</span><b><?= esc(str_pad((string) $customerCount, 2, '0', STR_PAD_LEFT)) ?></b></div>
                <div><span>Staff users</span><b><?= esc(str_pad((string) $userCount, 2, '0', STR_PAD_LEFT)) ?></b></div>
                <div><span>Core pages</span><b>08</b></div>
            </div>
            <div class="terminal-status"><span><i></i> Database connection active</span><code>CI 4.7.4</code></div>
        </div>
        <span class="terminal-shadow" aria-hidden="true"></span>
    </aside>
</section>

<section class="directory-section" aria-labelledby="directory-title">
    <div class="section-label"><span>Directory index / 03</span><h2 id="directory-title">Choose a record set.</h2></div>
    <div class="feature-grid">
    <a class="feature-card" href="<?= site_url('customers') ?>">
        <span class="feature-icon" aria-hidden="true">C</span><span class="card-tag">CUSTOMERS / <?= esc(str_pad((string) $customerCount, 2, '0', STR_PAD_LEFT)) ?></span><h3>Customer accounts</h3>
        <p>Names, email addresses, and phone numbers for the store directory.</p><span class="card-link">Open records <span aria-hidden="true">→</span></span>
    </a>
    <a class="feature-card" href="<?= site_url('users') ?>">
        <span class="feature-icon" aria-hidden="true">U</span><span class="card-tag">USERS / <?= esc(str_pad((string) $userCount, 2, '0', STR_PAD_LEFT)) ?></span><h3>User accounts</h3>
        <p>Usernames, employee names, and creation dates stored in MySQL.</p><span class="card-link">Open accounts <span aria-hidden="true">→</span></span>
    </a>
    <a class="feature-card" href="<?= site_url('about') ?>">
        <span class="feature-icon" aria-hidden="true">A</span><span class="card-tag">PROJECT / TFA3</span><h3>About this build</h3>
        <p>The database structure, MVC flow, and developer behind Ledgerline POS.</p><span class="card-link">View project <span aria-hidden="true">→</span></span>
    </a>
    </div>
</section>

<?= $this->endSection() ?>
