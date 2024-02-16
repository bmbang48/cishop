<?php

if ($status == 'waiting') {
    $badge_status = 'text-bg-primary';
    $status = 'Menunggu Pembayaran';
} else if ($status == 'paid') {
    $badge_status = 'text-bg-secondary';
    $status = 'Dibayar';
} else if ($status == 'delivered') {
    $badge_status = 'text-bg-success';
    $status = 'Dikirim';
} else if ($status == 'cancel') {
    $badge_status = 'text-bg-danger';
    $status = 'Dibatalkan';
}

?>

<?php if ($status) : ?>

    <span class="badge rounded-pill <?= $badge_status ?>"><?= $status; ?></span>

<?php endif ?>