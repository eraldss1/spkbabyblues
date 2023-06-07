<?php
session_start();

// STEP 1
// Proses Retrieve yaitu tahapan mengenali masalah kasus baru dengan kasus yang sudah ada
// Proses ini dilakukan pada submit form page sebelumnya
function CBR($userInput)
{
    $listNilaiCF = $_SESSION['list_gejala'];

    // STEP 2
    // Untuk mencari nilai kemiripan diberikan keyakinan yang masing-masing memiliki nilai. 
    // Jika memiliki kecocokan diberikan nilai true, dan jika tidak memiliki kecocokan maka
    // diberikan nilai false.
    $gejala = findSimiliarity($userInput);

    // STEP 3
    //  Menghitung nilai kemiripan kasus lama dengan kasus baru, dengan rumus Similarity

    // Penyakit dengan kode gejalanya
    $P1 = [1, 2, 3, 4, 9];
    $P2 = [10, 11, 12];
    $P3 = [13, 14, 15];

    $SIMILIARITY_1 = getSimiliarity($gejala, $P1, $listNilaiCF);
    $SIMILIARITY_2 = getSimiliarity($gejala, $P2, $listNilaiCF);
    $SIMILIARITY_3 = getSimiliarity($gejala, $P3, $listNilaiCF);

    if ($SIMILIARITY_1 > $SIMILIARITY_2 && $SIMILIARITY_1 > $SIMILIARITY_3) {
        return 1;
    } else if ($SIMILIARITY_2 > $SIMILIARITY_1 && $SIMILIARITY_2 > $SIMILIARITY_3) {
        return 2;
    } else {
        return 3;
    }
}

function findSimiliarity($gejala)
{
    $defaultValue = array_fill(0, 15, false);

    foreach ($gejala as $ind) {
        $defaultValue[(int) $ind - 1] = true;
    }

    return $defaultValue;
}

function getSimiliarity($gejala, $P, $listNilaiCF)
{
    $sumOfProductFromSimWeight = 0;
    $sumOfWeight = 0;

    foreach ($P as $p) {
        $CF = get_object_vars($listNilaiCF[$p - 1])["CF_pkr"];

        if (checkValueInArray($p, $gejala)) {
            $sumOfProductFromSimWeight += $CF;
        }
        $sumOfWeight += $CF;
    }
    $similiarity = ($sumOfProductFromSimWeight / $sumOfWeight) * 100;

    return $similiarity;
}

function checkValueInArray($value, $array)
{
    if ($array[$value - 1] == true) {
        return true;
    } else {
        return false;
    }
}
