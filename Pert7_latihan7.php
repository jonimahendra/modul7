<?php
$tanggal=date("d / m / Y");
list($bulan, $tanggal, $tahun) = split('[/.-]', $tanggal);
echo "Tanggal: $tanggal - Bulan: $bulan - Tahun: $tahun<br />\n";
?>