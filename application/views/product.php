 

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Sort by</label>
                  <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Name</option>
                    <option value="3">Price</option>
                    <option value="4">Date</option>
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Show</label>
                  <select name="">
                    <option value="1" selected="12">12</option>
                    <option value="2">24</option>
                    <option value="3">36</option>
                  </select>
                </form>
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>

            <div class="aa-product-catg-body">
              <?php foreach($product as $p):?>
              <ul class="aa-product-catg">
                <!-- start single product item -->
                <li>
                  <figure>
                    <a class="aa-product-img" href="#"><img src="<?php echo base_url().'/assets/img/img_product/'.$p->foto;?>" alt="polo shirt img" height="150"></a>
                    <a class="aa-add-card-btn" href="<?php echo site_url().'/Shopping/add?id='.$p->kode;?>"> <span class="fa fa-shopping-cart"></span>Add To Cart</a>
                    <figcaption>
                      <h4 class="aa-product-title"><a href="#"><?=$p->merk?></a></h4>
                      <span class="aa-product-price">Rp. <?php echo number_format($p->hargajual,2,',','.')?></span>
                      <p class="aa-product-descrip"><?=$p->deskripsi?></p>
                    </figcaption>
                  </figure>                         

                  <div class="aa-product-hvr-content">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                    <a href="" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#<?=$p->kode;?>"><span class="fa fa-search"></span></a>                            
                  </div>
                  <!-- product badge -->
                  <span class="aa-badge aa-sale" href="#">SALE!</span>
                </li>
              </ul>
              <!-- quick view modal -->                  
              
              <div class="modal fade" id="<?=$p->kode;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">                      
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <div class="row">
                        <!-- Modal view slider -->
                        <div class="col-md-6 col-sm-6 col-xs-12">                              
                          <div class="aa-product-view-slider">                                
                            <div class="simpleLens-gallery-container" id="demo-1">
                              <div class="simpleLens-container">
                                  <div class="simpleLens-big-image-container">
                                      <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                          <img src="<?php echo base_url().'/assets/img/img_product/'.$p->foto;?>" class="simpleLens-big-image" height="70">
                                      </a>
                                  </div>
                              </div>
                              <div class="simpleLens-thumbnails-container">
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="<?php echo base_url().'/assets/img/img_product/'.$p->foto;?>"
                                     data-big-image="<?php echo base_url().'/assets/img/img_product/'.$p->foto;?>">
                                      <img src="<?php echo base_url().'/assets/img/img_product/'.$p->foto;?>" height="50">
                                  </a>                                    
                                  </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal view content -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="aa-product-view-content">
                            <h3><?=$p->merk?></h3>
                            <div class="aa-price-block">
                              <span class="aa-product-view-price">Rp. <?php echo number_format($p->hargajual,2,',','.')?></span>
                              <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                            </div>
                            <p><?=$p->deskripsi?></p>
                            <h4>Size</h4>
                            <div class="aa-prod-view-size">
                              <a href="#">S</a>
                              <a href="#">M</a>
                              <a href="#">L</a>
                              <a href="#">XL</a>
                            </div>
                            <div class="aa-prod-quantity">
                              <form action="">
                                <select name="" id="">
                                  <option value="0" selected="1">1</option>
                                  <option value="1">2</option>
                                  <option value="2">3</option>
                                  <option value="3">4</option>
                                  <option value="4">5</option>
                                  <option value="5">6</option>
                                </select>
                              </form>
                              <p class="aa-prod-category">
                                Category: <a href="#"><?=$p->kategori?></a>
                              </p>
                            </div>
                            <div class="aa-prod-view-bottom">
                              <a href="<?php echo site_url().'/Shopping/add?id='.$p->kode;?>" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <a href="#" class="aa-add-to-cart-btn">View Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                        
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
              <?php endforeach;?>
              <!-- / quick view modal -->    
            </div>

            <div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Category</h3>
              <ul class="aa-catg-nav">
                <?php foreach($kategori as $k):?>
                <li><a href="<?php echo site_url().'/Product/product_kategori/'.$k->kategori; ?>"><?php echo $k->kategori; ?></a></li>
                <?php endforeach;?>
              </ul>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Tags</h3>
              <div class="tag-cloud">
                <a href="#">Ecommerce</a>
                <a href="#">Shop</a>
                <a href="#">Laptop</a>
                </div>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Product By Color</h3>
              <div class="aa-color-tag">
                <a class="aa-color-gray" href="#"></a>
                <a class="aa-color-black" href="#"></a>
                <a class="aa-color-white" href="#"></a>
                </div>                            
            </div>
            </aside>
        </div>
        </div>
    </div>
  </section>
  <!-- / product category -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->