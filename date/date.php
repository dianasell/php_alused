<?php
/**
 * Created by PhpStorm.
 * User: Diana Sell
 * Date: 22.03.2019
 * Time: 21:28
 */

?>

<?php
echo date('22.03.2019 21:30' , time());	 //20.03.2013 12:31
echo '<br>';
$time = time();
$months = array('jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');

$day = date('d');
$month = $months[date('n')];
$year = date('Y');
$weekdays = array('esmaspäev', 'teisipäev', 'kolmpaäev', 'neljapäev', 'reede', 'laupäev', 'pühapäev');
$currentDay = $weekdays[date('N', time()) - 1];

echo $currentDay;
echo '<br>';
echo $day.'.'.$month.' '.$year.' '.$currentDay;
echo '<br>';
$date1 = date_create("2019-12-24");
$date2 = date_create("2019-03-23");
$diff = date_diff($date1,$date2, true);

echo $diff->format("%R%a päeva jõuludeni");
echo '<br>';

$metshBirthday = date_create("1980-11-06");

$myBirthday = date_create("1994-06-24");
$difference = $metshBirthday->diff($myBirthday);
echo 'Erinevus: '.$difference->y.' aastat, ' .$difference->m.'kuud, '.$difference->d.' päeva';
echo '<br>';
function tervitus($time) {
    $hour = date('H', $time);
    if ($hour < 13) {
        echo 'Morning!';
    } else if ($hour < 18) {
        echo 'Evening!';
    } else {
        echo 'Good night!';
    }
}
$otherTime = mktime(22, 55, 11, 3, 22, 2001);
tervitus($otherTime);
?>
