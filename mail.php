<?php
 
if($_POST) {
    $nombre_contacto = "";
    $correo_contacto = "";
    $mensaje_contacto = "";
    $email_title = "Contacto desde web";
     
    if(isset($_POST['nombre_contacto'])) {
      $nombre_contacto = htmlspecialchars($_POST['nombre_contacto']);
    }
     
    if(isset($_POST['correo_contacto'])) {
        $correo_contacto = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['correo_contacto']);
        $correo_contacto = filter_var($correo_contacto, FILTER_VALIDATE_EMAIL);
    }

    if(isset($_POST['mensaje_contacto'])) {
        $mensaje_contacto = htmlspecialchars($_POST['mensaje_contacto']);
    }

    $email_recibidor = "luisvillalba244@gmail.com";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $correo_contacto . "\r\n";
     
    if(mail($email_recibidor, $email_title, $mensaje_contacto, $headers)) {
        echo "<p>¡Gracias por contactarme, $nombre_contacto.! Te responderé en menos de 24 horas, quedaté atento.</p>";
    } else {
        echo '<p>Ummh, lo siento, algo ha fallado, espero pronto tener todo en orde.</p>';
    }
     
} else {
    echo '<p>¡¿Error?! Algo no funciona como debería...</p>';
}
 
?>