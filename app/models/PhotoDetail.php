<?php

class PhotoDetail extends Eloquent {
    protected $table = 'photos_details';


    public function photo(){
        return $this->belongs_to('Photo', 'id');
    }
}