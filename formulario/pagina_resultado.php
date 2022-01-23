<html>

<head>

<title>Esta es la primera página</title>

</head>

<body>

Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
Usted reside en la calle <?php echo htmlspecialchars($_POST['calle']); ?>.
Número <?php echo htmlspecialchars($_POST['direccion']); ?>.
En el país: <?php echo htmlspecialchars($_POST['pais']); ?>.



</form>

</body>

</html>