<?php

class Photo extends Eloquent {
    protected $table = 'photos';

    public function upload_image($file) {
        $filePath = '/uploads/'.$this->model.'/'.$this->object_id;
        $destinationPath = public_path().$filePath;
        $filename = $file->getClientOriginalName();;
        $file->move($destinationPath, $filename);
        $this->file = $filePath.'/'.$filename;
        $this->save();
    }
}