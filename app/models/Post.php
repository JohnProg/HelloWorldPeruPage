<?php

class Post extends Eloquent {
	protected $table = 'posts';
	public $timestamps = false;

    public function toArray()
    {
        $array = parent::toArray();
        $array['url_image_large'] = $this->get_main_image()[0];
        $array['url_image_thumb'] = $this->get_main_image()[1];
        return $array;
    }

    public function get_main_image()
    {
        $photo = Photo::where('object_id', '=', $this->id)
            ->where('model', '=','posts')->first();
        if($photo == null)
        {
            return array('Imagen por defecto', 'imagen por defecto');
        }
        return array($photo->file, $photo->photos_details()->get()->toArray());
    }


}