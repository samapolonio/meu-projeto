<?php

class EmbedYoutube extends CWidget
{
    public $videoId;
    public $width = '560';
    public $height = '315';
	
	public function init()
{
    if (empty($this->videoId))
        throw new CException('O parâmetro videoId é obrigatório.');
}


public function run()
{
    $this->renderVideo();
}

protected function renderVideo() //mostra o vídeo
{
     $embedCode = '<iframe width="' . $this->width . '"';
     $embedCode .= ' height="' . $this->height . '"';
     $embedCode .= 'src="http://www.youtube.com/embed/' . $this->videoId . '">';
     $embedCode .= '</iframe>';
 
     echo $embedCode;
}

}
