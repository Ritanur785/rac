<?php
declare(strict_types=1);

$pageTitle = 'Job Description & SOP';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<main class="main-content">
    <div class="page-header">
        <h2 class="page-title">Job Description & Matriks Kewenangan AMLO</h2>
        <div class="page-subtitle">Standar Operasional Prosedur penanganan transaksi keuangan mencurigakan</div>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(320px, 1fr));gap:20px;">
        <div style="background:#fff;border:1px solid #e2e8f0;border-radius:8px;padding:20px;">
            <h3 style="font-size:15px;font-weight:700;margin-bottom:8px;color:#0f172a;">1. Petugas Frontliner / UKER (CS & Teller)</h3>
            <p style="color:#475569;font-size:13px;line-height:1.6;margin-bottom:12px;">
                Bertanggung jawab melakukan identifikasi awal (CDD/EDD) nasabah saat transaksi di counter atau pembukaan rekening.
            </p>
            <ul style="padding-left:18px;color:#334155;font-size:12px;line-height:1.7;">
                <li>Melakukan verifikasi identitas, profil usaha, dan underlying transaksi nasabah.</li>
                <li>Mengisi status dan rekomendasi UKER pada sistem To-Do Harian dalam waktu 1x24 jam.</li>
                <li>Menghubungi nasabah secara profesional jika diperlukan klarifikasi data KYC.</li>
            </ul>
        </div>

        <div style="background:#fff;border:1px solid #e2e8f0;border-radius:8px;padding:20px;">
            <h3 style="font-size:15px;font-weight:700;margin-bottom:8px;color:#0f172a;">2. Branch Manager / Pimpinan Cabang</h3>
            <p style="color:#475569;font-size:13px;line-height:1.6;margin-bottom:12px;">
                Memvalidasi hasil analisis alert dari staf operasional cabang sebelum diteruskan ke tingkat regional atau kantor pusat.
            </p>
            <ul style="padding-left:18px;color:#334155;font-size:12px;line-height:1.7;">
                <li>Menyetujui rekomendasi klasifikasi transaksi: STR atau Transaksi Wajar.</li>
                <li>Memastikan kepatuhan pelaporan cabang terhadap ketentuan regulasi APU-PPT.</li>
                <li>Memantau ketepatan waktu penyelesaian alert harian cabang.</li>
            </ul>
        </div>

        <div style="background:#fff;border:1px solid #e2e8f0;border-radius:8px;padding:20px;">
            <h3 style="font-size:15px;font-weight:700;margin-bottom:8px;color:#0f172a;">3. UKK (Unit Kerja Khusus Kepatuhan)</h3>
            <p style="color:#475569;font-size:13px;line-height:1.6;margin-bottom:12px;">
                Melakukan investigasi mendalam lanjutan atas alert yang dieskalasi oleh cabang.
            </p>
            <ul style="padding-left:18px;color:#334155;font-size:12px;line-height:1.7;">
                <li>Menganalisis jaringan transaksi (network transaction analysis) dan profiling PEP/Watchlist.</li>
                <li>Menentukan rekomendasi tindak lanjut eskalasi ke regulator / PPATK.</li>
                <li>Menginput status penelaahan UKK dan catatan kepatuhan di AMLO Dashboard.</li>
            </ul>
        </div>

        <div style="background:#fff;border:1px solid #e2e8f0;border-radius:8px;padding:20px;">
            <h3 style="font-size:15px;font-weight:700;margin-bottom:8px;color:#0f172a;">4. RAC (Risk & Compliance Division)</h3>
            <p style="color:#475569;font-size:13px;line-height:1.6;margin-bottom:12px;">
                Memberikan disposisi final terkait mitigasi risiko operasional, pemblokiran rekening, atau pelaporan eksternal.
            </p>
            <ul style="padding-left:18px;color:#334155;font-size:12px;line-height:1.7;">
                <li>Menetapkan disposisi RAC (Clearance, Monitoring Lanjutan, atau Lapor STR).</li>
                <li>Membuat laporan berkala kepatuhan AML ke Direksi.</li>
            </ul>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
