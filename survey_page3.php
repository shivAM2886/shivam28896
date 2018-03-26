<html>
<head>
<title>Survey Form</title>
<style type="text/css">
body, html {
    height: 100%;
}
.bgimg-1{ 
    background-image: url("https://previews.123rf.com/images/romastudio/romastudio1603/romastudio160300203/54088672-healthy-food-background-studio-photo-of-different-fruits-and-vegetables-on-white-wooden-table-high-r.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.block {
    display: To the Survey;
    width: 20%;
    border: none;
    background-color: #90EE90;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
}
</style>
</head>

<body>
<div class="bgimg-1">
<br>
<fieldset>
<legend>
<h2>Your Response:</h2>
</legend>
<?php
$beverage=$_POST['beverage'];
$salad=$_POST['Salad'];
$soup=$_ POST['Soup'];
$bread=$_POST['Bread'];
$rice=$_POST['Rice'];
$main_course=$_POST['Main Course'];
$dessert=$_POST['Dessert'];
echo 'Your Preferences<br>';
echo 'Beverage: ' .$beverage. '<br>';
echo 'Salad: ' .$salad. '<br>';
echo 'Soup: ' .$soup. '<br>';
echo 'Bread: ' .$bread. '<br>';
echo 'Rice: ' .$rice. '<br>';
echo 'Main Course: ' .$main_course. '<br>';
echo 'Dessert: ' .$dessert. '<br>';
?>
</fieldset>
<button type="button" class="block"><b><font color="white">Proceed to the next page</font></a><b></button>
<br>
<br>
</div>
</body>
</html>
