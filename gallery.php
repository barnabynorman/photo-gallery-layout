<?php

class Gallery
{
    protected $lightBoxName;
    protected $images;

    public function __construct($lightBoxName)
    {
        $this->lightBoxName = $lightBoxName;
        $this->images = array();
    }

    public function addImage($url, $title, $topMargin = 40, $sizeBy = 'width')
    {
        $this->images[] = new GalleryImage($url, $title, $topMargin, $this->lightBoxName, $sizeBy);
    }

    public function render($returnAsString = false)
    {
        $smallImgCount = 0;
        $mediumImgCount = 0;

        $gallery = '<div class="container photo-gallery">' . PHP_EOL;
        $gallery .= '<div class="row">' . PHP_EOL;

        foreach ($this->images as $image) {
            $gallery .= $this->generatePhotoElement($image);

            $smallImgCount++;
            $mediumImgCount++;

            if ($smallImgCount == 2) {
                $gallery .= $this->generateClearFixElement('sm');
                $smallImgCount = 0;
            }

            if ($mediumImgCount == 3) {
                $gallery .= $this->generateClearFixElement('md');
                $mediumImgCount = 0;
            }
        }

        $gallery .= '</div>'  . PHP_EOL;
        $gallery .= '</div>'  . PHP_EOL;

        if ($returnAsString) {
            return $gallery;
        }

        echo $gallery;
    }

    protected function generatePhotoElement($image)
    {
        return sprintf('<div class="col-sm-6 col-md-4 col-lg-3">%s</div>', $image->render()) . PHP_EOL;
    }

    protected function generateClearFixElement($size)
    {
        return sprintf('<div class="clearfix visible-%s-block"></div>', $size) . PHP_EOL;
    }
}

class GalleryImage
{
    protected $url;
    protected $title;
    protected $topMargin;
    protected $lightBoxName;
    protected $sizeBy;

    public function __construct($url, $title, $topMargin, $lightBoxName, $sizeBy)
    {
        $this->url = $url;
        $this->title = $title;
        $this->topMargin = $topMargin;
        $this->lightBoxName = $lightBoxName;
        $this->sizeBy = $sizeBy;
    }

    public function render()
    {
        $render = sprintf('<a href="%s" title="%s" data-lightbox="%s" />%s<img class="center-block" src="%s" alt="%s" %s="250" style="margin-top: %dpx;" />%s</a>%s',
          $this->url, $this->title, $this->lightBoxName, PHP_EOL, $this->url, $this->title, $this->sizeBy, $this->topMargin, PHP_EOL, PHP_EOL);

        return $render;
    }
}
