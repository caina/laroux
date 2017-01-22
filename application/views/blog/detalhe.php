<div class="container clearfix">
  
  
   
   <!-- Start Single Post -->
   <div class="eleven columns top bottom">
   
     <!-- ==================== Single Post ==================== -->
     <div class="post gallery bottom">
     
        <h2 class="title top-2 bottom-2"><?php echo $post->title ?><span class="line"></span></h2>
        <!-- Title Post -->
        
       <div class="post-meta bottom-2 transparent">
        <div class="meta"><span class="history  icon gray"></span> <?php echo $post->getDate() ?> </div><!-- Date -->
        
      </div><!-- End post-meta -->
       
      <div class="image-post bottom"> 
      
        <div class="flex-container">
         <div class="flexslider3">
          <ul class="slides">
            <li>
            <div class="caption">
            <a href="<?php echo $post->getImage() ?>" rel="prettyPhoto[gallery1]"><img src="<?php echo $post->getImage() ?>">
            <span class="hover-effect big zoom"></span></a>
            </div><!-- hover effect -->
            
          </ul>
         </div>
        </div>
        
      </div><!-- End slider image-post -->
      
      <div class="post-content bottom">
        <?php echo $post->entry ?>
      </div><!-- End post-content -->
      
      
      <hr class="bottom-2"/>
      
      <div class="top bottom">
      <a href="<?php echo $post->nexPost() ?>" class="prev-post"><span class="left_arrow icon color"></span> Anterior</a>
      <a href="<?php echo $post->previousPost() ?>" class="next-post">Próximo &nbsp;<span class="right_arrow icon color"></span></a>
      </div><!-- End next-prev post -->
      
      <br />
      
      
      
  
      
      
      
     </div> 
     <!-- ==================== End single post  ==================== -->
     
     
      
   </div><!-- End column -->  
   
   
   <!-- Start Sidebar Widgets -->
   <div class="five columns bottom">
   
     <!-- Search Widget -->
     <div class="search top bottom">
     <form action="<?php echo site_url("blog/pesquisa") ?>" method="GET">
       <input name="search" type="text" class="search" value="Search in blog" onBlur="if(this.value == '') { this.value = 'Pesquisar'; }" 
       onfocus="if(this.value == 'Pesquisar') { this.value = ''; }" />
       <input type="submit" value="" class="submit-search" />
     </form>
     </div>
     <!-- End -->
     
    
    <h2 class="title bottom-2">Categorias <span class="line"></span></h2>
     
      <ul class="square-list categories bottom">
        <?php foreach ($categorias->list as $categoria): ?>
          <li>
            <a href="<?php echo $categoria->getLink() ?>"><?php echo $categoria->title; ?></a></li>
        <?php endforeach ?>      
      </ul><!-- End square-list -->
   
   
   </div><!-- End Sidebar Widgets -->
   
   
   <div class="clearfix"></div>
   
   
   
       
     
  </div><!-- <<< End Container >>> -->
  