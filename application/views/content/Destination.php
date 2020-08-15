<section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>kilitrekisafari destination</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">destination</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <section class="room-list">
        <div class="container">
            
            <div class="list-content">
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