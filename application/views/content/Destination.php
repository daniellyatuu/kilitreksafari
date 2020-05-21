<main>
			
			<!-- Page Header -->
			<div class="container-fluid no-padding page-header">
				<div class="container">
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Blog</li>
					</ol>
				</div>
			</div><!-- Page Header /- -->
			
			<!-- Destination Section -->
            <div id="destination-section" class="container-fluid no-left-padding no-right-padding destination-section">
        <!-- Container -->
        <div class="container">
            <!-- Section Header -->
            <div class="section-header">
                <h3>Attractive Travel Plans</h3>
                <h6>our destinations</h6>
            </div><!-- Section Header /- -->
            <?php
            $destination = $this->db->get('destination');
            ?>
            <!-- Row -->
            <div class="row">
                <?php
                foreach($destination->result() as $row_data){
                ?>
                <!-- Destination Box -->
                <div class="col-md-4 col-sm-6 col-xs-6 destination-box">
                    <div class="destination-content">
                        <img src="<?=base_url('assets/images/'); ?><?=$row_data->image_url;?>" alt="Destination" />
                        <h3><span><?=$row_data->route_name;?></span></h3>
                        <div class="destination-content-box">
                            <h4><?=$row_data->route_name;?></h4>
                            <h5>Duration : <span><?=$row_data->duration;?></span></h5>
                            
                            <a href="<?=base_url('main/single_destination/');?><?=$row_data->id;?>" class="btn btn-success btn-outline">view more</a>
                        </div>
                    </div>
                </div><!-- Destination Box /- -->
                <?php
                }
                ?>
            </div><!-- Row /- -->
        </div><!-- Container /- -->
    </div><!-- Destination Section /- -->
		</main>	