<!doctype html>
<html>
<body>
<header>
    <h1>PHP pages</h1>
    <menu>
        <a href="index.php">Home</a>
        <a href="index.php?page=page1">1. leht</a>
        <a href="index.php?page=page2">2. leht</a>
        <a href="index.php?page=page3">3. leht</a>
    </menu>
</header>
<div>
<?php
if(!empty($_GET['page'])){
    $page = htmlspecialchars($_GET['page']);
    $allowed = array('page1','page2','page3');
    $check = in_array($page, $allowed);
    if($check==true){
        include($page.'.php');
    } else {
        echo '404 EI LEITUD!';
    }
} else {
?>
<h2>H2 pealkiri</h2>
<p>p tekst</p>
</div>

<?php
}
?>
</body>
</html>
