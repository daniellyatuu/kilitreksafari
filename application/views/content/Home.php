<section class="banner banner-style-1">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(assets/images/slider/kili_slider1.jpg)">
                        <div class="swiper-content">
                            <h1 data-animation="animated fadeInUp">Enjoy With<span> SENECIOTREK AND SAFARI ADVENTURE</span></h1>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(assets/images/slider/kili_slider2.jpg)">
                        <div class="swiper-content">
                            <h1 data-animation="animated fadeInUp">Spend Your <span>Holidays</span> With Us</h1>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url(assets/images/slider/kili_slider3.jpg)">
                        <div class="swiper-content">
                            <h1 data-animation="animated fadeInUp">EnJoy to the World <span>Travel and Tours</span></h1>
                            
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
            <div class="overlay"></div>
        </div>
    </section>


    <section class="about-us">
        <div class="container">
            <div class="section-title">
                <h2>About <span>seneciotrek and safari adventure</span></h2>
            </div>
            <div class="about-outer">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-content">
                            <h3 class="mar-bottom-30">Finest tourist company in Tanzania</h3>
                            <p style="text-align: justify;text-justify: inter-word;">
                            Seneciotreki and Safari Adventure has an experience of more than 14 years of 
                            experience organizing mountaining climbing tours to mount kilimanjaro, the highest
                             mountain in Africa and a dormant volcano. We can offer you flexible itinerary 
                             options like mountain climbing to mount kilimanjaro and mount meru,luxury safaris
                              tours to the many National parks in Tanzania, hiking treks, day trips and culture
                               tours where  you can see the boma houses of the masai tribes authentic villages,
                                hot water lakes,water  falls and picnic  sites.We can provide rented  mountain
                                  equipment  like,walking  sticks, 
                            head torches, mattress,warm jackets, and more - just ask! Our great  guides,
                             cooks and porters have extensive practical  experience  across Tanzania and
                              you can find many good examples  in our  gallery  and on Instagram. 
                              After your  unforgetable  mountaining climbing or safari Adventure ,you
                               can organize  a trip to the beaches of Zanzibar  for some party  time
                                or to enjoy a few relaxing  day.You can book your  unforgetable trip from us within 24 hours!. 
                            </p>
                            <!-- <a href="#" class="btn btn-orange mar-top-10">KNOW MORE ABOUT US</a> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-image">
                            <div class="image-box">
                                <div class="image-1 abt-image">
                                    <img src="<?=base_url('assets/images/kili_about11.jpg');?>" alt="image">
                                </div>
                                <div class="image-2 abt-image">
                                    <img src="<?=base_url('assets/images/kili_about22.jpg');?>" alt="image">
                                </div>
                            </div>
                            <div class="image-box">
                                <div class="image-3 abt-image">
                                    <img src="<?=base_url('assets/images/kili_about33.jpg');?>" alt="image">
                                </div>
                                <div class="image-4 abt-image">
                                    <img src="<?=base_url('assets/images/kili_about44.jpg');?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="rooms">
        <div class="container">
            <div class="section-title">
                <h2>Mount Climbing Destination</h2>
            </div>
            <div class="room-outer">
                <div class="row">
                    <?php
                    $this->db->order_by('id');
                    $destinations = $this->db->get('destination');
                    foreach($destinations->result() as $row){
                        $content = $row->description;
                        $content_len = strlen($content);
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-6" style="padding: 10px">
                        <div class="room-item">
                            <div class="room-image">
                                <img src="<?=base_url('assets/images/');?><?=$row->image_url;?>" alt="image">
                            </div>
                            <div class="room-content" style="text-align: justify;text-justify: inter-word;">
                                <div class="room-title">
                                    <h4><?=$row->route_name;?></h4>
                                    <p><?=$row->duration;?></p>
                                </div>
                                
                                <p>
                                <?php
                                if($content_len > 230){
                                echo substr($content, 0, 230).'....';
                                }else{
                                echo $content;
                                if($content_len>100){
                                    echo substr($content, 0, 100);
                                }
                                }
                                ?>
                                </p>
                                <div class="room-btns mar-top-20 text-center">
                                    <a href="<?=base_url('main/single_destination');?>/<?=$row->id;?>" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                    <!-- <a href="#" class="btn btn-orange">BOOK NOW</a> -->
                                </div>
                            </div>
                        </div>
                    </div> 
                    <?php
                    }
                    ?>
                </div>
            </div>
           
        </div>
    </section>

    <section class="rooms">
        <div class="container">
            <div class="section-title">
                <h2>Safari Destination</h2>
            </div>
            <div class="room-outer">
                <div class="row">
                    <?php
                    $this->db->order_by('id');
                    $destinations = $this->db->get('safari');
                    foreach($destinations->result() as $row){
                        $content = $row->description;
                        $content_len = strlen($content);
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-6" style="padding: 10px">
                        <div class="room-item">
                            <div class="room-image">
                                <img src="<?=base_url('assets/images/');?><?=$row->image_url;?>" alt="image">
                            </div>
                            <div class="room-content" style="text-align: justify;text-justify: inter-word;">
                                <div class="room-title">
                                    <h4><?=$row->route_name;?></h4>
                                </div>
                                
                                <p>
                                <?php
                                if($content_len > 240){
                                echo substr($content, 0, 240).'....';
                                }else{
                                echo $content;
                                if($content_len>100){
                                    echo substr($content, 0, 100);
                                }
                                }
                                ?>
                                </p>
                                <div class="room-btns mar-top-20 text-center">
                                    <a href="<?=base_url('main/single_safari');?>/<?=$row->id;?>" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                    <!-- <a href="#" class="btn btn-orange">BOOK NOW</a> -->
                                </div>
                            </div>
                        </div>
                    </div> 
                    <?php
                    }
                    ?>
                </div>
            </div>
           
        </div>
    </section>


    <section class="call-to-action call-to-action-new">
        <div class="container">
            <div class="call-content text-center">
                <div class="call-button">
                    <button type="button" class="play-btn js-video-button" data-video-id="152879427"
                        data-channel="vimeo"><i class="fa fa-play"></i></button>
                </div>
                <div class="video-figure"></div>
                <h2 class="white mar-top-25 mar-bottom-0">Tour with <br><span>SENECIOTREK AND SAFARI ADVENTURE</span></h2>
            </div>
        </div>
    </section>


	<section class="content gallery" data-ref="container-1">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                <div class="section-title">
                    <h2>Gallery</h2>
                </div>
                    <div class="mt_filter">
                        <ul class="list-inline text-center filter">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".restro">Mountain Climbing</a></li>
                            <li><a href="#" data-filter=".rooms">Safari</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mar-top-50">
                <div class="isotopeContainer">
				
                    <div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic1.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic1.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector rooms col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic2.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic2.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic3.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic3.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic4.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic4.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic5.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic5.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector rooms col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic6.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic6.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector rooms col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic7.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic7.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic8.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic8.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic21.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic21.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic22.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic22.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic23.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic23.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic24.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic24.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
					<div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic9.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic9.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

					<div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic10.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic10.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

					<div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic11.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic11.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

					<div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic12.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic12.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

					<div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic13.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic13.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

					<div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic14.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic14.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

					<div class="isotopeSelector rooms col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic15.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic15.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

					<div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic16.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic16.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

					<div class="isotopeSelector rooms col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic17.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic17.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

					<div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic18.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic18.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

					<div class="isotopeSelector rooms col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic19.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic19.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

					<div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/pic20.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/pic20.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
