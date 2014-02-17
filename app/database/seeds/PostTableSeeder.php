// app/database/seeds/PostTableSeeder.php

<?php

class PostTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('post')->delete();
		Post::create(array(
			'user_id'=> 2,
			'title'=> 'Crea, organiza y comparte con ScissorsFly',
			'slug'=>'Crea, organiza y comparte con ScissorsFly',
			'content'=> 'Siempre es bueno conocer herramientas que nos ayuden a mejorar y acelerar la forma de hacer nuestro trabajo y debemos saber que no somos los únicos que queremos hacer esto, mucha gente en la red busca formas de automatizar o mejorar procesos repetitivos, así que si tienes alguna solución para cualquier cosa no dudes en compartirla seguramente alguien te lo agradecerá.

				ScissorsFly es una herramienta muy útil que te ayuda a recolectar y organizar el contenido que encuentras en internet, algo muy útil si estas haciendo un proyecto de investigación, o incluso si planificas algún viaje o evento.

				Puedes recolectar información de múltiples sitios web y organizarlas en un tablero hay puedes, agregar texto, subir imágenes, organizar tu información y luego compartirla con todos en la red o de forma privada si así lo prefieres.

				ScissorsFly es una de esas herramientas que en las manos correctas puede lograr muy buenos resultados por lo que les recomiendo que la tengan a la mano y la tomen en consideración para cualquier proyecto o investigación que tengan que hacer próximamente.',
			'shortContent' => 'Esta herramienta te permite crear organizar el contenido que encuentres en un solo lugar.',
			'url_image_thumb' => 'http://www.webbizarro.com/images/noticias/2014/02/scissorfly-webbizarro.interno_1392594648000_athumb.jpg',
			'url_image_large' => 'http://www.webbizarro.com/images/noticias/2014/02/scissorfly-webbizarro.interno_1392594648000_alarge.jpg'
		),array(
			'user_id'=> 1,
			'title'=> 'Crea, organiza y comparte con ScissorsFly',
			'slug'=>'Crea, organiza y comparte con ScissorsFly',
			'content'=> 'Siempre es bueno conocer herramientas que nos ayuden a mejorar y acelerar la forma de hacer nuestro trabajo y debemos saber que no somos los únicos que queremos hacer esto, mucha gente en la red busca formas de automatizar o mejorar procesos repetitivos, así que si tienes alguna solución para cualquier cosa no dudes en compartirla seguramente alguien te lo agradecerá.

				ScissorsFly es una herramienta muy útil que te ayuda a recolectar y organizar el contenido que encuentras en internet, algo muy útil si estas haciendo un proyecto de investigación, o incluso si planificas algún viaje o evento.

				Puedes recolectar información de múltiples sitios web y organizarlas en un tablero hay puedes, agregar texto, subir imágenes, organizar tu información y luego compartirla con todos en la red o de forma privada si así lo prefieres.

				ScissorsFly es una de esas herramientas que en las manos correctas puede lograr muy buenos resultados por lo que les recomiendo que la tengan a la mano y la tomen en consideración para cualquier proyecto o investigación que tengan que hacer próximamente.',
			'shortContent' => 'Esta herramienta te permite crear organizar el contenido que encuentres en un solo lugar.',
			'url_image_thumb' => 'http://www.webbizarro.com/images/noticias/2014/02/scissorfly-webbizarro.interno_1392594648000_athumb.jpg',
			'url_image_large' => 'http://www.webbizarro.com/images/noticias/2014/02/scissorfly-webbizarro.interno_1392594648000_alarge.jpg'
		));
	}

}