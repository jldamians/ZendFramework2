<?php
// module/Album/src/Album/Model/Album.php
namespace Album\Model;

class Album
{
    public $id;
    public $artist;
    public $title;

    // setea los propiedades de la clase con los valores del array
    public function exchangeArray($data)
    {
        $this->id     = (isset($data['id'])) ? $data['id'] : null;
        $this->artist = (isset($data['artist'])) ? $data['artist'] : null;
        $this->title  = (isset($data['title'])) ? $data['title'] : null;
    }

    // devulve una copia de todas las propiedades de la clase
    public function getArrayCopy() {
        return get_object_vars($this);
    }
}