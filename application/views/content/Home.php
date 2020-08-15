<section class="banner banner-style-1">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(assets/images/slider/kili_slider1.jpg)">
                        <div class="swiper-content">
                            <h1 data-animation="animated fadeInUp">Enjoy With<span> KILITREKISAFARI</span></h1>
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
        <!-- <div class="banner-form form-style-2">
            <div class="form-content">
                <div class="form-title">
                    <h4 class="mar-0">Reserve Your Room</h4>
                </div>
                <div class="form-content-inner">
                    <div class="table-item">
                        <div class="form-group">
                            <div class="date-range-inner-wrapper">
                                <input id="date-range2" class="form-control" value="Check In">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-item">
                        <label>Check Out</label>
                        <div class="form-group">
                            <div class="date-range-inner-wrapper">
                                <input id="date-range3" class="form-control" value="Check Out">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-item">
                        <label>Guests</label>
                        <div class="form-group form-icon">
                            <select>
                                <option value="1">0</option>
                                <option value="2">1</option>
                                <option value="3">2</option>
                                <option value="4">3</option>
                                <option value="5">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-item">
                        <label>Nights</label>
                        <div class="form-group form-icon">
                            <select>
                                <option value="1">0</option>
                                <option value="2">1</option>
                                <option value="3">2</option>
                                <option value="4">3</option>
                                <option value="5">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-item">
                        <div class="form-btn">
                            <a class="btn btn-orange">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>


    <section class="about-us">
        <div class="container">
            <div class="section-title">
                <h2>About <span>Us</span></h2>
            </div>
            <div class="about-outer">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-content">
                            <h3 class="mar-bottom-30">Finest tourist company in Tanzania</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius iaculis
                                gravida. Nunc vel maximus libero. Quisque ligula nisi, hendrerit et scelerisque et,
                                scelerisque vitae magna. Integer sollicitudin, ex auctor iaculis tempor, mauris odio
                                accumsan odio.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius iaculis
                                gravida. Nunc vel maximus libero. Quisque ligula nisi, hendrerit et scelerisque et,
                                scelerisque vitae magna. Integer sollicitudin, ex auctor iaculis tempor, mauris odio
                                accumsan odio.</p>
                            <a href="#" class="btn btn-orange mar-top-10">KNOW MORE ABOUT US</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-image">
                            <div class="image-box">
                                <div class="image-1 abt-image">
                                    <img src="<?=base_url('assets/images/kili_about1.jpg');?>" alt="image">
                                </div>
                                <div class="image-2 abt-image">
                                    <img src="<?=base_url('assets/images/kili_about2.jpg');?>" alt="image">
                                </div>
                            </div>
                            <div class="image-box">
                                <div class="image-3 abt-image">
                                    <img src="<?=base_url('assets/images/kili_about3.jpg');?>" alt="image">
                                </div>
                                <div class="image-4 abt-image">
                                    <img src="<?=base_url('assets/images/kili_about4.jpg');?>" alt="image">
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
                <h2>Destination</h2>
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
                            <div class="room-content">
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


    <section class="call-to-action call-to-action-new">
        <div class="container">
            <div class="call-content text-center">
                <div class="call-button">
                    <button type="button" class="play-btn js-video-button" data-video-id="152879427"
                        data-channel="vimeo"><i class="fa fa-play"></i></button>
                </div>
                <div class="video-figure"></div>
                <h2 class="white mar-top-25 mar-bottom-0">Tour with <br><span>KILITREKISAFARI</span></h2>
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
                            <li><a href="#" data-filter=".conference">Conference Room</a></li>
                            <li><a href="#" data-filter=".restro">Restaurant</a></li>
                            <li><a href="#" data-filter=".rooms">Rooms</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mar-top-50">
                <div class="isotopeContainer">
                    <div class="isotopeSelector conference col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/gallery1.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/gallery1.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector rooms col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/gallery2.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/gallery2.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/gallery3.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/gallery3.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector conference col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/gallery4.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/gallery4.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/gallery5.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/gallery5.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector rooms col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/gallery6.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/gallery6.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector rooms col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/gallery7.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/gallery7.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector conference col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/gallery8.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/gallery8.jpg'); ?>" data-lightbox="gallery"
                                            data-title="Title"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="isotopeSelector restro col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="<?=base_url('assets/images/gallery/gallery9.jpg');?>" alt="image">
                            </div>
                            <div class="gallery-content">
                                <ul>
                                    <li><a href="<?=base_url('assets/images/gallery/gallery9.jpg'); ?>" data-lightbox="gallery"
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