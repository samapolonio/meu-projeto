<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bem vindo ao <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>



<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>


<?php
$this->beginWidget('ext.jcarousel.jcarousel');
?>
    <div class="wrapper">
            <h1>Nossos produtos</h1>
 
            <p>Veja o que podemos lhe oferecer</p>
 
            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li><img src="images/carousel/img1.jpg" width="600" height="400" alt=""></li>
                        <li><img src="images/carousel/img2.jpg" width="600" height="400" alt=""></li>
                        <li><img src="images/carousel/img3.jpg" width="600" height="400" alt=""></li>
                        <li><img src="images/carousel/img4.jpg" width="600" height="400" alt=""></li>
                        <li><img src="images/carousel/img5.jpg" width="600" height="400" alt=""></li>
                        <li><img src="images/carousel/img6.jpg" width="600" height="400" alt=""></li>
                    </ul>
                </div>
 
                <p class="photo-credits">
                    Photos by <a href="http://www.mw-fotografie.de">Marc Wiegelmann</a>
                </p>
 
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
 
                <p class="jcarousel-pagination">
 
                </p>
            </div>
        </div>
<?php
$this->endWidget();
?>

<?php
$this->widget('ext.embedYoutube.embedYoutube', array(
    'width'=>'600',
    'height'=>'500',
    'videoId'=>'P1Y-6zPQG9g',
));
?>