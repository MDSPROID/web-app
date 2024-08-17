<section class="contact testi uitesti">
<div class="contact__form__wrapper component">
    <div class="contact__form container container--editorial">
      <div class="row">
        <div class="box box--large">
			<div class="row roll-i">
				<?php foreach($testi as $h){?>
				<div style="margin-bottom: 100px;">
					<div class="col-md-4 col-xs-12 merger">
						<div class="vtralig">
							<div class="col-md-12 col-xs-12">
								<h3 class="jdl"><?php echo $h->judul?></h3>
								<h5 class="sb_jdl"><?php echo $h->sub_judul?></h5>
								<br><br><br>
								<a style="color: white;text-decoration: none;font-size: 20px;font-family: arial;" href="<?php echo base_url('portfolio');?>" class="hidden-xs">See Portfolio <i class="glyphicon glyphicon-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-xs-12 m_konten">
						<div class="row">
							<div class="col-md-8 col-xs-12 re-mask-video">
								<i class="glyphicon glyphicon-play play-btn hidden"></i>
								<video class="img-responsive responsive-desk" data-video="<?php echo $h->video?>" controls>
									<source src="<?php echo $h->video?>" type="video/mp4">
									Browser anda tidak support HTML5 video.
								</video>
							</div>
							<div class="col-md-4 col-xs-6 re-mask">
								<img src="<?php echo $h->gb1?>" data-image="<?php echo $h->gb1?>" onclick="imgx(this);" id="myImg" class="img-responsive remask">	
							</div>
							<div class="col-md-4 col-xs-6 re-mask">
								<img src="<?php echo $h->gb2?>" data-image="<?php echo $h->gb2?>" onclick="imgx(this);" id="myImg" class="img-responsive remask">
							</div>
							<div class="col-md-8 col-xs-12 re-mask">
								<img src="<?php echo $h->gb3?>" data-image="<?php echo $h->gb3?>" onclick="imgx(this);" id="myImg" class="img-responsive respon-single-image">
							</div>
						</div>
						<div class="btn-port-detail hidden-lg hidden-md"><a style="color: white;text-decoration: none;" href="<?php echo base_url('portfolio');?>">See Portfolio</a></div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<!-- The Modal -->
<div id="myModal" class="modal" style="display: none;">
  <span class="close">X</span>
  <img class="modal-content" id="img01">
</div>

<!-- The Modal -->
<div id="myModalvid" class="modal" style="display: none;">
  <span class="close" onclick="close_vid();">X</span>
  	<div class="modal-content">
	  <video class="img-responsive responsive-desk-vid" autoplay loop controls>
		<source id="img02" type="video/mp4" src="">
	  </video>
	</div>
</div>