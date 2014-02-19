<?php

class Post extends Eloquent {
	protected $table = 'posts';
    protected $appends = array('image_large', 'image_thumbs');
	public $timestamps = false;

    public function getImageLargeAttribute()
    {
        $photo = $this->get_main_image();
        $file_photo = $photo[0];
        return $file_photo;
    }
    public function get_main_image()
    {
        $photo = Photo::where('object_id', '=', $this->id)
            ->where('model', '=','posts')->first();
        if($photo == null)
        {
            return array('Imagen por defecto', 0);
        }
        return array($photo->file, $photo->id);
    }

    public function getImageThumbsAttribute()
    {
        try{
            $photo = $this->get_main_image();
            if($photo[1] > 0)
            {
//                return $photo[1];
                try {
                    $thumbnail = Photo::find($photo[1])->photos_details()->get()->toArray()[0];
                    return $thumbnail['file'];
                } catch (Exception $e) {
                    return 'Imagen por defecto';
                }
            }
            return 'Imagen por defecto';
        } catch (Exception $e) {
            return 'Imagen por defecto';
        }
    }


}