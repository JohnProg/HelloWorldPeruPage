<?php


class Photo extends Eloquent {
    protected $table = 'photos';

    public function photos_details()
    {
        return $this->hasMany('PhotoDetail');
    }

    public function upload_image($file)
    {
        $filePath = '/uploads/'.$this->model.'/'.$this->object_id;
        $destinationPath = public_path().$filePath;
        $filename = $file->getClientOriginalName();
        $filename = $this->id.'_'.$filename;
        $file->move($destinationPath, $filename);
        $this->file = $filePath.'/'.$filename;
        $this->save();

        $this->insert_thumbnails($destinationPath, $filename, $filePath);
    }

    public function insert_thumbnails($destinationPath, $filename, $filePath)
    {
        $url_thumbnail = '/thumbnail_366_x_275_'.$filename;

        $detail = new PhotoDetail;
        $detail->file = $filePath.$url_thumbnail;
        $this->photos_details()->save($detail);
        Image::make($destinationPath.'/'.$filename)->resize(366, 275)->save($destinationPath.$url_thumbnail);
    }

}