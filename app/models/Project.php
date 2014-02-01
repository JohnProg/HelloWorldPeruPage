<?php

class Project extends Eloquent {
    protected $table = 'projects';

    public function get_main_image()
    {
        $photo = Photo::where('object_id', '=', $this->id)
                        ->where('model', '=','projects')->first();
        if($photo == null)
        {
            return 'Imagen por defecto';
        }
        return $photo->file;
    }

    public function get_all_images()
    {
//        $photos = Photo::where('object_id', '=', $this->id)
//            ->where('model', '=','projects')->get()->toArray();
//        foreach ($photos as $photo)
//        {
//
//            $data = $photo->photos_details();
//        }
//        return $data;
    }

}