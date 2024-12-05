<?php /**
 // Template Name: Homepage
 */
get_header();?>


<div class="consultup-slider-inner" style="background:">
<div style="overflow:hidden;height:100vh;width:100%">	
<video autoplay="" style="width:100%;
    display: block;" muted="" loop="" playsinline="" id="vid" preload="auto">

              <source src="intro.mp4" type='video/mp4; codecs="avc1.4D401E, mp4a.40.2"'>
    </video>
	</div>
	
          <div  style="    position: absolute;
    
    background: rgba(0, 0, 0, 0.75);
    height: 100vh;
    top: 0;
    align-items: center;
    display: flex;
    justify-content: center;
    width: 100%;
    text-align: center;
    color: #fff;" class="container inner-table">
            <div class="inner-table-cell">
              <!--slide content area-->
              <div class="slide-caption slide-c">
                <!--slide box style-->
                <div>
                 					<h1 style="color:#fff;font-weight:bold;">Tecrübe ve Birikim</h1>
					                  <div class="description">
                    <p>Yapımcılık ve reklam sektöründe 20 yılı aşkın tecrübe ve birikim!</p>
                  </div>
				                
				 	
                  <!--/slide box style-->
				</div>
              <!--/slide content area-->
            </div>
          </div>
        </div>
        <!--/slide inner-->
      </div>
	  
	  

<?php

do_action( 'icycp_consultup_homepage_sections', false ); 
?>



<section class="consultup-portfolio consultup-section grey-bg no-padding text-center" id="portfolio-section">
    <div class="container">
      <div class="row">
        		<!-- Section Title -->
		<div class="col-md-12 wow fadeInDown animated padding-bottom-20">
            <div class="consultup-heading">
              <h3 class="consultup-heading-inner">Yapımlar</h3>
			  <p>Yapımlar</p>
			</div>
            
         </div>
		<!-- /Section Title -->
		      </div>
    </div>
    <!--container-->
    <div class="container">
      <!--row-->
      <div class="row">
        <!--portfolio-->
        <div id="portfolio">
          <!--item-->
			<!--col-md-12-->
            <div class="col-md-4 project-one">
              <!--portfolio-->
              <div class="consultup-portfolio-block">
                  <img src="http://z10media.com/new/wp-content/uploads/2019/12/image-diziler.jpg" alt="">
                  <div class="inner-content">
                    <div class="text clearfix">
                      <div class="text-left">
                        <h5><a href="<?=get_site_url()?>/diziler">Diziler</a></h5>
                        <div class="consultup-portfolio-category"><p>Tüm Diziler</p></div>
                      </div>
                    </div> <!-- /.text -->
                  </div> <!-- /.hover-content -->
                </div>
              <!--/portfolio-->
            </div>
            <!--col-md-12-->
		  <div class="col-md-4 project-two">
              <!--portfolio-->
              <div class="consultup-portfolio-block">
                  <img src="http://z10media.com/new/wp-content/uploads/2019/12/image-cocuk.jpg" alt="">
                  <div class="inner-content">
                    <div class="text clearfix">
                      <div class="text-left">
                        <h5><a href="<?=get_site_url()?>/cocuk-programlari">Çocuk Programları</a></h5>
                        <div class="consultup-portfolio-category"><p>Çocuk Programları</p></div>
                      </div>
                    </div> <!-- /.text -->
                  </div> <!-- /.hover-content -->
                </div>
              <!--/portfolio-->
            </div>
			<div class="col-md-4 project-three">
              <!--portfolio-->
              <div class="consultup-portfolio-block">
                  <img src="http://z10media.com/new/wp-content/uploads/2019/12/image-filmler2.jpg" alt="">
                  <div class="inner-content">
                    <div class="text clearfix">
                      <div class="text-left">
                        <h5><a href="<?=get_site_url()?>/filmler">Filmler</a></h5>
                        <div class="consultup-portfolio-category"><p>Filmler</p></div>
                      </div>
                    </div> <!-- /.text -->
                  </div> <!-- /.hover-content -->
                </div>
              <!--/portfolio-->
            </div>
			</div>
          <!--/item-->
          <!--item-->
          <!--/item-->
        </div>
        <!--/portfolio-->
      </div>
      <!--/row-->
    </section>
	
<?php

get_footer();
?>