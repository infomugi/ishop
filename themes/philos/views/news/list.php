 <section class="blog_post">
    <div class="container"> 
      
      <!-- row -->
      <div class="row"> 
        
        <!-- Center colunm-->
        <div class="col-xs-12 col-sm-9" id="center_column">
          <div class="center_column">
            <ul class="blog-posts">

            <?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view_detail',
					)); ?>

            </ul>
          </div>
        </div>
        <!-- ./ Center colunm --> 
				<!-- right colunm -->
				<aside class="sidebar col-xs-12 col-sm-3"> 

					<!-- tags -->
					<div class="popular-tags-area block">
						<div class="sidebar-bar-title">
							<h3>Kategori</h3>
						</div>
						<div class="tag">
							<ul>
							<?php foreach (Category::getCategory() as $data) { ?> 
								<li><a href="<?php echo YII::app()->baseUrl."/index.php?r=category/news&name=".$data['name']; ?>"><?php echo $data['name']; ?></a></li>
							<?php } ?> 
							</ul>
						</div>
					</div>

					<!-- ./tags --> 

				</aside>
				<!-- ./right colunm --> 
      </div>
      <!-- ./row--> 
    </div>
  </section>
  <!-- Main Container End --> 
