<section class="contact bg-new">
<div class="contact__form__wrapper componentx" style="padding: 130px 0 30px 0;">
    <div class="contact__form container container--editorial paddtesti">
      <div class="row">
        <div class="box box--large">
			<div class="rowx">
				<div class="col-xs-12x col-md-12x">
					<div class="iframe-container iframe-testi">  
				        <iframe width="853" height="480" src="https://www.youtube.com/embed/_7rAELAuYGo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
				    </div>
			   </div>
				<?php 
				$no = 0;
				foreach($testi as $h){
				$no++;
				//if($no == 1)
				?>
				<div class="column_media col-xs-4 col-md-4">
					<div class="row">
						<video style="display: none;" class="img-responsive responsive-desk" data-video="<?php echo $h->video?>" controls>
							<source src="<?php echo $h->video?>" type="video/mp4">
							Browser anda tidak support HTML5 video.
						</video>
						<div class="col-xs-12 col-lg-12">
							<div class="vtralig">
								<h3 class="jdl"><?php echo $h->sub_judul?></h3>
								<h5 class="sb_jdl"><a style="text-decoration: none;color: inherit;" href="<?php echo base_url('portfolio');?>"><b>PREWEDDING</b></a></h5>
								<img src="<?php echo $h->gb1?>" style="image-rendering: -webkit-optimize-contrast;" data-image="<?php echo $h->gb1?>" onclick="imgx(this);" id="myImg" class="img-responsive img-wadah">	
							</div>
						</div>
						<div class="col-xs-12 col-lg-12">
							<div class="vtralig2">
								<img src="<?php echo $h->gb2?>" style="image-rendering: -webkit-optimize-contrast;" data-image="<?php echo $h->gb2?>" onclick="imgx(this);" id="myImg" class="img-responsive">
							</div>
						</div>
						<div class="col-xs-12 col-lg-12">
							<div class="vtralig2">
								<img src="<?php echo $h->gb3?>" style="image-rendering: -webkit-optimize-contrast;" data-image="<?php echo $h->gb3?>" onclick="imgx(this);" id="myImg" class="img-responsive">
							</div>
						</div>
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