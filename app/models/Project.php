<?php

class Project extends Eloquent {
    protected $table = 'projects';

    public function toArray()
    {
        $array = parent::toArray();
        $array['main_image'] = $this->get_main_image();
        return $array;
    }

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
        /*
         *  {
         *      id = int
         *      photo_id = int
         *      file = file
         *      thumbnails = []
         *  },
         */
        $data = array();
        $photos = Photo::where('object_id', '=', $this->id)
            ->where('model', '=','projects')->get();

        foreach ($photos as $photo)
        {
            $tmp['id'] = $photo->id;
            $tmp['file'] = $photo->file;
            $tmp['thumbnails'] = $photo->photos_details()->get()->toArray();
            array_push($data,$tmp);
        }
        return $data;
    }

}