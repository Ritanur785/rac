<?php
declare(strict_types=1);

$currentScript = basename($_SERVER['SCRIPT_NAME'] ?? '');
?>
<aside class="sidebar">
    <div class="brand-header">
        <h1>RAC Monitoring Dashboard</h1>
        <div class="brand-subtitle">Kantor Pusat</div>
    </div>

    <nav>
        <div class="nav-group-title">Menu Utama</div>
        <ul class="nav-menu">
            <li>
                <a href="beranda.php" class="nav-link <?= $currentScript === 'beranda.php' ? 'active' : '' ?>">
                    Beranda
                </a>
            </li>
            <li>
                <a href="todo-harian.php" class="nav-link <?= in_array($currentScript, ['todo-harian.php', 'index.php', ''], true) ? 'active' : '' ?>">
                    STR Alert
                </a>
            </li>
            <li>
                <a href="pep.php" class="nav-link <?= $currentScript === 'pep.php' ? 'active' : '' ?>">
                    PEP
                </a>
            </li>
            <!-- <li>
                <a href="import.php" class="nav-link <?= $currentScript === 'import.php' ? 'active' : '' ?>">
                    Import Data
                </a>
            </li> -->
            <li>
                <a href="job-description.php" class="nav-link <?= $currentScript === 'job-description.php' ? 'active' : '' ?>">
                    Job Description
                </a>
            </li>
        </ul>
    </nav>
</aside>
