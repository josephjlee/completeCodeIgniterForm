<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"/>

	<title>CodeIgniter Form</title>
</head>

<body>
<div id="wrapper">
<div id="content">
<div id="form">
<?php

//create form opening tag with it's action controler/method
echo form_open('formController/submitForm'); 

//create form label
echo form_label('User Name :');
echo '<br/>';
//create form text input field
//create array of atributes first
$data=array(
'name'=>'username',
'placeholder'=>'type your name here',
'class'=>'inputField'
);

echo form_input($data);
echo '<br/>';

//create email field
//create array of attributes to set type =email
$data=array(
'type'=>'email',
'name'=>'email',
'placeholder'=>'type your email here',
'class'=>'inputField'
);
echo form_label('User Email :');
echo '<br/>';
echo form_input($data);

echo '<br/>';
//create password field
echo form_label('User Password :');
echo '<br/>';
$data=array(
'name'=>'password',
'placeholder'=>'type your password here',
'class'=>'inputField'
);

echo form_password($data);
echo '<br/>';

echo form_label('Gender');
echo '<br/>';

//create gender dropbox

$data=array(
'Male'=>'male',
'Female'=>'female');
echo form_dropdown('gender',$data,'male','class="dropbox"');
echo '<br/>';

//create redio fields
echo form_label('Marital Status');
echo '<br/>';

//create array of attributes for each radio field
//first radio 
$data=array(
'name'=>'maritalStatus',
'value'=>'unmarried',
'checked'=>true
);

echo form_radio($data);
echo form_label('Unmarried');
echo '<br/>';

//second radio
$data=array(
'name'=>'maritalStatus',
'value'=>'married'
);

echo form_radio($data);
echo form_label('Married');
echo '<br/>';


//create checkbox
echo form_label('Programming Languages');
echo '<br/>';

//first checkbox
$data1=array(
'name'=>'lang[]',
'value'=>'php'
);
echo form_checkbox($data1);
echo form_label('php');
echo '<br/>';

//second checkbox
$data1=array(
'name'=>'lang[]',
'value'=>'cpp'
);
echo form_checkbox($data1);
echo form_label('C++');
echo '<br/>';

//third checkbox
$data1=array(
'name'=>'lang[]',
'value'=>'java'
);
echo form_checkbox($data1);
echo form_label('Java');
echo '<br/>';


//create textarea
echo form_label('Additional Information');
echo '<br/>';
$data=array(
'name'=>'addInfo',
'rows'=>5,
'cols'=>20
);
echo form_textarea($data);
echo '<br/>';
//file upload
echo form_label('Your Resume');
echo '<br/>';
$data=array(
'type'=>'file',
'name'=>'resume',
'value'=>'upload Resume'
);

echo form_upload($data);

echo '<br/>';
//create submit button it take (name,vlaue,others)
echo form_submit('submit','Submit');

echo '<br/>';

//create reset button
echo form_reset('reset','Reset');

//close form tag
echo form_close();


?>
</div>
</div>
</div>
</body>
</html>