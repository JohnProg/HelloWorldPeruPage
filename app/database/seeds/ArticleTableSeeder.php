// app/database/seeds/ArticlesTableSeeder.php

<?php

class ArticleTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('articles')->delete();
		Articles::create(array(
			'autor'     => 'John Paul',
			'titulo' => 'Mi Primer Post',
			'texto'    => '	dignissimos soluta dolores ducimus. Quis, ipsa, ipsum.',
		));
		Articles::create(array(
			'autor'     => 'John Paul',
			'titulo' => 'Mi Segundo Post',
			'texto'    => '	dignissimos soluta dolores ducimus. Quis, ipsa, ipsum.',
		));
		Articles::create(array(
			'autor'     => 'John Paul',
			'titulo' => 'Mi Tercer Post',
			'texto'    => '	dignissimos soluta dolores ducimus. Quis, ipsa, ipsum.',
		));
		Articles::create(array(
			'autor'     => 'John Paul',
			'titulo' => 'Mi Cuarto Post',
			'texto'    => '	dignissimos soluta dolores ducimus. Quis, ipsa, ipsum.',
		));
		Articles::create(array(
			'autor'     => 'John Paul',
			'titulo' => 'Mi Quinto Post',
			'texto'    => '	dignissimos soluta dolores ducimus. Quis, ipsa, ipsum.',
		));
	}

}