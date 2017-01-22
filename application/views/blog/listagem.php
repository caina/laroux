
  <div class="container clearfix">
  

   
   <!-- Start Posts -->
   <div class="eleven columns top bottom">
   
    <?php foreach ($posts->list as $post): ?>
     <div class="post bottom">
     
      <h2 class="title bottom top-2">
        <a href="<?php echo $post->getLink() ?>"><?php echo $post->title ?></a> <span class="line"></span>
      </h2>
      <!-- Title Post -->
       
      <div class="image-post bottom left"> 
          <a href="<?php echo $post->getLink() ?>">
            <img src="<?php echo $post->getImage() ?>" max-width="330px">
          </a>  
      </div><!-- End slider image-post -->
      
      <div class="post-content">
        <?php echo $post->getEye() ?>
        <a href="<?php echo $post->getLink() ?>" class="button small color">Leia mais</a>
      </div><!-- End post-content -->
      
      <hr class="bottom-2" />
      
      <div class="post-meta bottom-2 transparent">
        <div class="meta"><span class="history  icon gray"></span> <?php echo $post->getDate() ?> </div><!-- Date -->
      </div><!-- End post-meta -->
      
     </div> 
    <?php endforeach ?>
     <!-- ==================== End  ==================== -->
     
    
     <!-- ==================== End  ==================== -->
     
     
     
     <hr />
     
     <!-- <ul class="pagination color">
          <li><a href="#" class="prev">previous</a></li>
          <li><a href="#">1</a></li>
          
          <li><a href="#" class="current">3</a></li>
        
          <li><a href="#" class="next">Next</a></li>
        </ul> -->
      
   </div>
   
   
   <!-- Start Sidebar Widgets -->
   <div class="five columns bottom">
   
     <div class="search top bottom">
     <form action="<?php echo site_url("blog/pesquisa") ?>" method="GET">
       <input name="search" type="text" class="search" value="Search in blog" onBlur="if(this.value == '') { this.value = 'Pesquisar'; }" 
       onfocus="if(this.value == 'Pesquisar') { this.value = ''; }" />
       <input type="submit" value="" class="submit-search" />
     </form>
     </div>
     
     <!-- Categories -->
     <h2 class="title bottom-2">Categorias <span class="line"></span></h2>
     
      <ul class="square-list categories bottom">
        <?php foreach ($categorias->list as $categoria): ?>
          <li>
            <a href="<?php echo $categoria->getLink() ?>"><?php echo $categoria->title; ?></a></li>
        <?php endforeach ?>      
      </ul><!-- End square-list -->
    <!-- End -->
    
    <!-- Most Posts -->
   </div><!-- End Sidebar Widgets -->
   
   
   <div class="clearfix"></div>
  
  </div><!-- <<< End Container >>> -->
  