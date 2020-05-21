
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
			<div class="padding-80"></div>
			<div class="container">
				<!-- Row -->
				<div class="row blog-single">
					<!-- Content Area -->
					<div class="col-md-8 col-sm-6 col-xs-12 content-area">
						<!-- Type Post -->
                        <?php
                        $id = $this->uri->segment(3);
                        $this->db->where('id', $id);
						$single_data = $this->db->get('destination');
						// check if destination exist
						$count_destination = $single_data->num_rows();
						if($count_destination==0){
							redirect('main/destination');
						}
                        foreach($single_data->result() as $single_data){
                            $name = $single_data->route_name;
                            $description = $single_data->description;
                        }
                        ?>
						<article class="type-post">
							<div class="entry-cover">
								<a href="#"><img src="<?=base_url('assets/images/blog1.jpg'); ?>" alt="Blog" /></a>
								<h3 class="entry-title"><a href="javascript:void(0);" title="<?=$name;?>"><?=$name;?></a> <a href="<?=base_url('main/contact');?>" class="btn btn-xs btn-info">book now</a></h3>
								
							</div>
							
							<div class="entry-content" style = "padding-top: 20px;">
								<p><?=$description;?></p>
							</div>
							
						</article><!-- Type Post /- -->
						
					</div><!-- Content Area /- -->
					<!-- Widget Area -->
					<div class="col-md-4 col-sm-6 col-xs-12 widget-area">
						
						<!-- Widget Categories -->
						<aside class="widget widget_categories">
							<h3 class="widget-title">DESTINATIONS</h3>
							<ul>
                            <?php
                            $destination = $this->db->get('destination');
                            foreach($destination->result() as $row_data){
                            ?>
								<li><a href="<?=base_url('main/single_destination/');?><?=$row_data->id;?>" title="<?=$row_data->route_name;?>"><?=$row_data->route_name;?></a></li>
                                <?php
                            }
                                ?>
							</ul>
						</aside><!-- Widget Categories /- -->
						
					</div>
					<!-- Widget Area /- -->
				</div><!-- Row /- -->
			</div>
			<div class="padding-80"></div>
		</main>