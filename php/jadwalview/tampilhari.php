<?php
/*
    Tampilan HTML jadwal per hari
*/
include dirname(__FILE__) . '\..\connect.php';
?>

<div class='col-sm-12 table-title'>
    <h4><b>
        <?php echo $hari;?>
    </b></h4>
    <table class='table text-center table-condensed'>
        <thead class='text-center'>
            <th class='jam'>
                Jam
            </th>
            <th>
                Lab 1
            </th>
            <th>
                Lab 2
            </th>
            <th>
                Lab 3
            </th>
            <th>
                Lab 4
            </th>
            <th>
                Lab 5
            </th>
            <th>
                Lab 6
            </th>
            <th>
                Lab 7
            </th>
            <th>
                Lab 8
            </th>
        </thead>
        <?php
            $sql = "SELECT TIME_FORMAT(jam_awal, '%H:%i'), waktu from blok_waktu ORDER BY jam_awal";
            $jadwal = mysqli_query($conn, $sql);


            $indexjam = 0;
            while ($row = mysqli_fetch_array($jadwal)) {
                include 'tampiljam.php';
                $indexjam++;
            }
        ?>
    </table>
</div>