cat <<EOF > procesar.php
<?php
// Verificamos que lleguen datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    \$username = isset(\$_POST['username']) ? trim(\$_POST['username']) : '';
    \$password = isset(\$_POST['password']) ? trim(\$_POST['password']) : '';

    // Validación simple
    if (!empty(\$username) && !empty(\$password)) {
        echo "OK: Datos recibidos correctamente.";
    } else {
        echo "ERROR: Faltan datos.";
    }
} else {
    echo "ERROR: Método no permitido.";
}
?>
EOF