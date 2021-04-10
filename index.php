<?php

    require "config.php";
    session_start();
    date_default_timezone_set("Asia/Jakarta");

    $data = findAll("SELECT * FROM plat_nomor ORDER BY id ASC");

?>

<html>

    <head>
    </head>

    <body>

        <h2>Diketahui :</h2>
        <table border="1">
            <tr>
                <td align="center" colspan="7">Riwayat Kendaraan Yang Melewati Garis</td>
            </tr>
            <tr>
                <td>No.</td>
                <td>Kode Wilayah</td>
                <td>Nomor Polisi</td>
                <td>Kode Wilayah Pendaftaran</td>
                <td>Jenis Kendaraan</td>
                <td>Nomor Acak</td>
                <td>Masa Berlaku</td>
            </tr>
            <?php foreach($data as $d) { ?>
                <tr>
                    <td align="center"><?php echo $d['id']; ?></td>
                    <td align="center"><?php echo $d['kode_wilayah']; ?></td>
                    <td align="center"><?php echo $d['nomor_polisi']; ?></td>
                    <td align="center"><?php echo $d['kode_wilayah_pendaftaran']; ?></td>
                    <td align="center"><?php echo $d['jenis_kendaraan']; ?></td>
                    <td align="center"><?php echo $d['nomor_acak']; ?></td>
                    <td align="center"><?php echo $d['masa_berlaku']; ?></td>
                </tr>
            <?php }; ?>
        </table>

        <br/></br>

        <table border="1">
            <tr>
                <td align="center" colspan="7">Kendaraan Yang Melanggar (Genap)</td>
            </tr>
            <tr>
                <td>No.</td>
                <td>Kode Wilayah</td>
                <td>Nomor Polisi</td>
                <td>Kode Wilayah Pendaftaran</td>
                <td>Jenis Kendaraan</td>
                <td>Nomor Acak</td>
                <td>Masa Berlaku</td>
            </tr>
            <?php foreach($data as $d) {
                if($d['nomor_polisi'] % 2 == 0){ ?>
                <tr>
                    <td align="center"><?php echo $d['id']; ?></td>
                    <td align="center"><?php echo $d['kode_wilayah']; ?></td>
                    <td align="center"><?php echo $d['nomor_polisi']; ?></td>
                    <td align="center"><?php echo $d['kode_wilayah_pendaftaran']; ?></td>
                    <td align="center"><?php echo $d['jenis_kendaraan']; ?></td>
                    <td align="center"><?php echo $d['nomor_acak']; ?></td>
                    <td align="center"><?php echo $d['masa_berlaku']; ?></td>
                </tr>
            <?php }
                 }; ?>
        </table>

        <br/><br/>

        <table border="1">
            <tr>
                <td align="center" colspan="7">Kendaraan Yang Melanggar (Ganjil)</td>
            </tr>
            <tr>
                <td>No.</td>
                <td>Kode Wilayah</td>
                <td>Nomor Polisi</td>
                <td>Kode Wilayah Pendaftaran</td>
                <td>Jenis Kendaraan</td>
                <td>Nomor Acak</td>
                <td>Masa Berlaku</td>
            </tr>
            <?php foreach($data as $d) {
                if($d['nomor_polisi'] % 2 != 0){ ?>
                <tr>
                    <td align="center"><?php echo $d['id']; ?></td>
                    <td align="center"><?php echo $d['kode_wilayah']; ?></td>
                    <td align="center"><?php echo $d['nomor_polisi']; ?></td>
                    <td align="center"><?php echo $d['kode_wilayah_pendaftaran']; ?></td>
                    <td align="center"><?php echo $d['jenis_kendaraan']; ?></td>
                    <td align="center"><?php echo $d['nomor_acak']; ?></td>
                    <td align="center"><?php echo $d['masa_berlaku']; ?></td>
                </tr>
            <?php }
                 }; ?>
        </table>

    </body>
</html>