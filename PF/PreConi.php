   
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    
   <head>


   </head>
   <body style="background-color:#3db9a9;">

       <form enctype="multipart/form-data" action="Continuar.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="200000" />
<input name="uploadedfile" type="file" />
<input type="submit" value="Subir archivo" />

</form>
<body>

</body>
</html>
<script>
    $_FILES['field_name']['name'];
$_FILES['field_name']['size'];
$_FILES['field_name']['type'];
$_FILES['field_name']['tmp_name'];
    php.ini;
    file_uploads = On;
    uploadedfile;
    $target_path;
    $_FILES['uploadedfile']['tmp_name'];
    $_FILES['uploadedfile']['name'];
<?php
$uploadedfileload="true";
$uploadedfile_size=$_FILES['uploadedfile'][size];
echo $_FILES[uploadedfile][name];
if ($_FILES[uploadedfile][size]>200000)
{$msg=$msg."El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
$uploadedfileload="false";}

if (!($_FILES[uploadedfile][type] =="image/pjpeg" OR $_FILES[uploadedfile][type] =="image/gif"))
{$msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
$uploadedfileload="false";}

$file_name=$_FILES[uploadedfile][name];
$add="uploads/$file_name";
if($uploadedfileload=="true"){

if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $add)){
echo " Ha sido subido satisfactoriamente";
}else{echo "Error al subir el archivo";}

}else{echo $msg;}

    </script>


