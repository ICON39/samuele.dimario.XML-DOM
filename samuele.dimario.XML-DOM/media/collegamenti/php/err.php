<?php 
session_start();
unset($_SESSION);
session_destroy();
?>

<xml version="1.0" encoding="iso-8859-1">
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
xml:lang="en" lang="en">

<head>
    <title>pagina di errore</title>
</head>

<body>
<h1>Pagina di errore</h1>

<p style="color: red;">non sei autorizzato ad entrare...</p>


</body>
</html>