
<article class="entry">
  <div class="row">
    <div class="col-sm-5">
      <div class="entry-thumb">
        <figure><img class="zoom-img" src="<?php echo YII::app()->baseUrl."/image/news/big/".$data->image; ?>"></figure>
      </div>
    </div>
    <div class="col-sm-7">
      <h3 class="entry-title"><a href="<?php echo YII::app()->baseUrl."/index.php?r=news/detail&id=".$data->id_news; ?>"><?php echo $data->name; ?></a></h3>
      <div class="entry-meta-data"> 
        <span class="cat"> <i class="fa fa-folder"></i>&nbsp; <a href="#"><?php echo $data->Category->name; ?></a></span> 
      </div>
    </div>
  </article>
<HR>