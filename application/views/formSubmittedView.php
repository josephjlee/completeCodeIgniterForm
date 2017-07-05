<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"/>

	<title>CodeIgniter Submitted From</title>
</head>

<body>
<div id="wrapper">
<div id="content">
<div id="form">
<table>

<?php
if(isset($name))
{
    echo '<tr><th>Name </th><td>'.$name.'</td></tr>';
    
    echo '<tr><th>Email </th><td>'.$email.'</td></tr>';
    
    echo '<tr><th>Password </th><td>'.$password.'</td></tr>';
    
    echo '<tr><th>Gender </th><td>'.$gender.'</td></tr>';
    
    echo '<tr><th>Marital Status </th><td>'.$marital.'</td></tr>';
    
    echo '<tr><th>Languages </th><td>';
    
    if(isset($lang) &&  $lang !=NULL)
    {
        foreach($lang as $value)
        {
            echo $value .' ';
        }
    }
    echo '</td></tr>';
    
    echo '<tr><th>Addition Info </th><td>'.$addInfo.'</td></tr>';
    
     echo '<tr><th>Resume </th><td>'.$resume.'</td></tr>';
}
else
{
    redirect(base_url().'index.php/formController');
}
?>
</table>
</div>
</div>
</div>
</body>
</html>