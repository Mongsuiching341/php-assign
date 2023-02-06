<?php
//commision calculator; answer in percent format
$tutionFee = 8000; //defult tution fee
$commision = ($tutionFee > 20000) ? 0.25 : (($tutionFee > 10000 && $tutionFee < 20000) ? 0.20 : (($tutionFee < 10000 && $tutionFee > 7000) ? 0.15 : (($tutionFee < 7000) ? 'invalid data' : '')));
echo $commision;
