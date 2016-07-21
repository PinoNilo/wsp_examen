< ?php
	//importamos la libreria de pusher
	require('libs/Pusher.php');
	//comprobamos que llego un mensaje por el metodo GET
	if($_GET){
		if(isset($_GET['usuario']) && isset($_GET['mensaje'])){
			/*creamos un objeto pusher que recibe como parametros KEY, SECRET,APP_ID, los cuales recibimos
                        al crear nuestra APP en pusher.com*/
			$pusher = new Pusher('4482c04c5c3d6f95e1cc', '6b695bd40305cadc2719', '227909');
			//enviamos el mensaje recibido a todos los clientes conectados
			$pusher->trigger('test_channel', 'mensaje', array('usuario'=> $_GET['usuario'],'mensaje' => $_GET['mensaje']) );
		}
	}
?>