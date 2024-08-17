@extends('header-footer')
@section('judul_halaman', '')
@section('konten')
<section class="container-fluid" style="overflow-y:hidden;">
	<div class="col-md-12 component--herox componentx">
		<div class="heroxxxx" style="position: initial;">
			<div class="hero__cover arx">
				<div class="cover__wrapperx container-fluid"> 
					<div class="cover cdny image image--lazyload"
					data-bgset="<?php echo $s1['gambar']?>" data-sizes="auto"
					style="background-position:  ;"></div>
				</div>
			</div>
			<div class="hero__title">
				<div class="container container--editorial">
					<div class="row">
						<div class="box box--large">
							<div class="column column--large">
								<h2 class="heading heading__m6 text--bold"></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 container--editorial component padcomp">
		<div class="row row--dual">
			<div class="box box--small">
				<div class="text__wrapper column">
					<div style="background-color: green; width: 20%;height: 2px;"></div>
					<h2 class="heading heading__m4 text--bold" style="font-weight: 600;font-family: cambria;"><?php echo $s1['konten1']?></h2>
				</div>
			</div>
			<div class="box box--small">
				<div class="text__wrapper column" style="font-family: AvenirNextPro,Helvetica,Arial sans-serif;font-size:1.3rem;line-height: 2rem;">
					<?php echo $s1['set_konten1']?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 container--editorial component">
		<div class="row row--dual">
			<div class="box box--small">
				<div class="text__wrapper column">
					<div style="background-color: green; width: 20%;height: 2px;"></div>
					<h2 class="heading heading__m4 text--bold" style="font-weight: 600;font-family: cambria;"><?php echo $s1['konten2']?></h2>
				</div>
			</div>
			<div class="box box--small">
				<div class="text__wrapper column" style="font-family: AvenirNextPro,Helvetica,Arial sans-serif;font-size:1.3rem;line-height: 2rem;">
					<?php echo $s1['set_konten2']?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 component--hero component">
		<div class="hero">
			<div class=" hero__cover ar">
				<div class="cover__wrapper">
					<div class="cover image image--lazyload"
					data-bgset="<?php echo $s2['gambar'];?>" data-sizes="auto" style="background-size:contain;background-repeat: no-repeat;"></div>
				</div>
			</div>
			<div class="hero__title">
				<div class="container container--editorial">
					<div class="row">
						<div class="box box--large">
							<div class="column column--large">
								<h2 class="heading heading__m6 text--bold"></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 container--editorial component">
		<div class="row row--dual">
			<div class="box box--small">
				<div class="text__wrapper column">
					<div style="background-color: green; width: 20%;height: 2px;"></div>
					<h2 class="heading heading__m4 text--bold" style="font-weight: 600;font-family: cambria;"><?php echo $s2['konten1'];?></h2>
				</div>
			</div>
			<div class="box box--small">
				<div class="text__wrapper column" style="font-family: AvenirNextPro,Helvetica,Arial sans-serif;font-size:1.3rem;line-height: 2rem;">
					<?php echo $s2['set_konten1'];?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 container--editorial component">
		<div class="row row--dual">
			<div class="box box--small">
				<div class="text__wrapper column">
					<div style="background-color: green; width: 20%;height: 2px;"></div>
					<h2 class="heading heading__m4 text--bold" style="font-weight: 600;font-family: cambria;"><?php echo $s2['konten2']?></h2>
				</div>
			</div>
			<div class="box box--small">
				<div class="text__wrapper column" style="font-family: AvenirNextPro,Helvetica,Arial sans-serif;font-size:1.3rem;line-height: 2rem;">
					<?php echo $s2['set_konten2']?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 component--hero component">
		<div class="hero herox">
			<div class=" hero__cover ar">
				<div class="cover__wrapper">
					<div class="cover image image--lazyload"
					data-bgset="<?php echo $s3['gambar'];?>" data-sizes="auto" style="background-size:contain;background-repeat: no-repeat;"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container container--editorial" style="margin-bottom: 50px;">
		<div class="row row--dual">
			<div class="box box--small">
				<div class="text__wrapper column">
					<h2 class="heading heading__m4 text--bold" style="font-family: cambria;text-align: center;"><?php echo $s3['konten1']?>
					</h2>
					<div style="font-family: AvenirNextPro,Helvetica,Arial sans-serif;font-size:1.3rem;line-height: 2rem;">
						<?php echo $s3['set_konten1']?>
					</div>
				</div>
			</div>
			<div class="box box--small">
				<div class="text__wrapper column">
					<h2 class="heading heading__m4 text--bold" style="text-align:center;"><?php echo $s3['konten2']?></h2>
					<div style="font-family: AvenirNextPro,Helvetica,Arial sans-serif;font-size:1.3rem;line-height: 2rem;">
						<?php echo $s3['set_konten2']?>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection
          