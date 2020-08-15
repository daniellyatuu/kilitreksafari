
<?php
$this->db->where('id', $this->uri->segment(3));
$destinations = $this->db->get('destination');

// check if destination exist
$count = $destinations->num_rows();
if($count==0){
    redirect('main/destination');
}
foreach($destinations->result() as $row){
    $title = $row->route_name;
    $content = $row->description;
    $content_len = strlen($content);

?>
<section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2><?=$title;?></h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">destination</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
<section class="details">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="detail-slider">
                        <div class="slider-1 slider-for">
                            <div class="detail-slider-item">
                                <img src="<?=base_url('assets/images/');?><?=$row->image_url;?>" alt="image">
                            </div>
                            
                        </div>
                      
                    </div>
                    <div class="detail-content">
                        <div class="detail-title">
                            <div class="title-left">
                                <h3><?=$title;?></h3>
                                
                            </div>
                            
                        </div>
                        <div id="exTab1">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#1a" data-toggle="tab">Overview</a></li>
                                <li><a href="#2a" data-toggle="tab">Price/Rate</a></li>
                                
                            </ul>
                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="1a">
                                    <div class="detail-overview detail-box">
                                        <h4>Overview</h4>
                                        <?=$content;?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="2a">
                                    <div class="price-table detail-box">
                                        <h4>Route Price</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>Sun</td>
                                                    <td>Mon</td>
                                                    <td>Tues</td>
                                                    <td>Wed</td>
                                                    <td>Thurs</td>
                                                    <td>Fri</td>
                                                    <td>Sat</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>$1200</td>
                                                    <td>$1200</td>
                                                    <td>$1200</td>
                                                    <td>$1200</td>
                                                    <td>$1200</td>
                                                    <td>$1200</td>
                                                    <td>$1200</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="detail-sidebar">
                        <div class="sidebar-support">
                            <h3>Help and Support</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut arnare</p>
                            <p><i class="fa fa-phone"></i> +(255) 787 096 001</p>
                        </div>
                        <div class="sidebar-room">
                            <div class="sr-image">
                                <img src="<?=base_url('assets/images/sr1.jpg'); ?>" alt="image">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>