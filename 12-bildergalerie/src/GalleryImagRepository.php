<?php
class GalleryImagRepository{
    public function fetchAll(){
        return [
            new GalleryImageModel('pexels-josh-hild-2629233.jpg', 'Wandern macht Spaß!'),
            new GalleryImageModel('pexels-stein-egil-liland-3408744.jpg', 'Polarlichter im Schnee'),
            new GalleryImageModel('pexels-matthew-montrone-1179229.jpg', 'Ein schöner Wald'),
            new GalleryImageModel('pexels-tobias-bjorkli-2113566.jpg', 'Polarlichter bei Nacht')
        ];
    }
}