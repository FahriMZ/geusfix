@extends('layouts.app')

@section('content')
		<div class="container-custom">
		  <div class="row">
			<div class="col-md-8">
			  <center>Promo Utama (Slider)</center>
			  <img src="http://via.placeholder.com/715x200" class="rounded img-fluid" />
			</div>
			<div class="col-md-4">
			  <center>Promo Terpopuler (hanya 1 gambar)</center>
			  <img src="http://via.placeholder.com/380x200" class="rounded img-fluid" />
			</div>
		  </div>
		  <div class="row">
		   <div class="col-md-8 card">
		  <div class="row">
			<div class="col-sm-8 bottom">
			  <center>Kategori</center>
			  <img src="http://via.placeholder.com/467x175" class="rounded img-fluid" />
			</div>
			<div class="col-sm-4 bottom">
			  <center>Pasien yg sdh melakukan service</center>
			  <img src="http://via.placeholder.com/215x175" class="rounded img-fluid" />
			</div>
			<div class="col-sm-4">
			  <h1 class="text-center"> 999+ </h1>
			  <center>Teknisi</center>
			</div>
			<div class="col-sm-4">
			  <h1 class="text-center"> 999+ </h1>
			  <center>Pasien</center>
			</div>
			<div class="col-sm-4">
			  <h1 class="text-center"> 999+ </h1>
			  <center>Gadget Telah di Perbaiki</center>
			</div>
		  </div>
		   </div>
		   <div class="card col-md-3 ml-md-auto">
			<div class="col-sm-12">
			  <center>Teknisi Terpopuler</center>
			  <img src="http://via.placeholder.com/220x330" class="rounded img-fluid" />
			</div>
		   </div>
		  </div>
		  
<!--CONTENT HERE-->
		  <div class="row">
			<div class="konten-iklan">
				<div class="card-konten">
				  <a href="#">
					<div class="img-card-ct">
					  <img class="img-fluid" src="{{ asset('images/ss.jpg') }}" />
					</div>
					<div class="card-content-ct">
						<p class="text-judul-iklan">Service Software Android</p>
				  </a>
						<p class="text-harga">
						  Mulai <b>Rp 25.000</b>
						</p>
						<p class="text-rating">
						  <i class="fa fa-heart"></i>&nbsp; 486 &nbsp;&nbsp;&nbsp; 
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  (786)
						</p>
					</div>
					<div class="card-read-more">
						<div class="media">
							<a href="#Toko">
						  <img class="image-circle-profile img-fluid align-self-start" src="{{ asset('images/Official Logo.png') }}">
						  <div class="media-body">
							  <span class="card-text-teknisi">resoft_it</span><br>
							</a>
							  <span class="card-text-lokasi">
								<i class="fa fa-map-marker"></i>&nbsp;&nbsp; Bandung Kota <br>
								<i class="fa fa-wrench float-left">&nbsp; 329x</i>
							  </span>
							  <span class="card-text-lokasi float-right">
								<i class="fa fa-diamond" style="color:#2196f3;"></i>
							  </span>
						  </div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="konten-iklan">
				<div class="card-konten">
				  <a href="#">
					<div class="img-card-ct">
					  <img class="img-fluid" src="{{ asset('images/sdf.jpg') }}" />
					</div>
					<div class="card-content-ct">
						<p class="text-judul-iklan">Jasa Service Laptop</p>
				  </a>
						<p class="text-harga">
						  Mulai <b>Rp 50.000</b>
						</p>
						<p class="text-rating">
						  <i class="fa fa-heart"></i>&nbsp; 66 &nbsp;&nbsp;&nbsp; 
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:;"></i>
						  (262)
						</p>
					</div>
					<div class="card-read-more">
						<div class="media">
							<a href="#Toko">
						  <img class="image-circle-profile img-fluid align-self-start" src="{{ asset('images/cc.gif') }}">
						  <div class="media-body">
							  <span class="card-text-teknisi">r_Comp</span><br>
							</a>
							  <span class="card-text-lokasi">
								<i class="fa fa-map-marker"></i>&nbsp;&nbsp; Jakarta Selatan <br>
								<i class="fa fa-wrench float-left">&nbsp; 114x</i>
							  </span>
							  <span class="card-text-lokasi float-right">
								<i class="fa fa-diamond" style="color:#;"></i>
							  </span>
						  </div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="konten-iklan">
				<div class="card-konten">
				  <a href="#">
					<div class="img-card-ct">
					  <img class="img-fluid" src="{{ asset('images/fff.jpg') }}" />
					</div>
					<div class="card-content-ct">
						<p class="text-judul-iklan">Replace LCD & Touchscreen Hp & Laptop</p>
				  </a>
						<p class="text-harga">
						  Mulai <b>Rp 50.000</b>
						</p>
						<p class="text-rating">
						  <i class="fa fa-heart"></i>&nbsp; 646 &nbsp;&nbsp;&nbsp; 
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  (562)
						</p>
					</div>
					<div class="card-read-more">
						<div class="media">
							<a href="#Toko">
						  <img class="image-circle-profile img-fluid align-self-start" src="{{ asset('images/hh.gif') }}">
						  <div class="media-body">
							  <span class="card-text-teknisi">Lembe_comp</span><br>
							</a>
							  <span class="card-text-lokasi">
								<i class="fa fa-map-marker"></i>&nbsp;&nbsp; Papua Barat <br>
								<i class="fa fa-wrench float-left">&nbsp; 629x</i>
							  </span>
							  <span class="card-text-lokasi float-right">
								<i class="fa fa-diamond" style="color:#2196f3;"></i>
							  </span>
						  </div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="konten-iklan">
				<div class="card-konten">
				  <a href="#">
					<div class="img-card-ct">
					  <img class="img-fluid" src="{{ asset('images/dd.jpg') }}" />
					</div>
					<div class="card-content-ct">
						<p class="text-judul-iklan">Jasa Service Hp , Laptop dan PC</p>
				  </a>
						<p class="text-harga">
						  Mulai <b>Rp 100.000</b>
						</p>
						<p class="text-rating">
						  <i class="fa fa-heart"></i>&nbsp; 446 &nbsp;&nbsp;&nbsp; 
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  (352)
						</p>
					</div>
					<div class="card-read-more">
						<div class="media">
							<a href="#Toko">
						  <img class="image-circle-profile img-fluid align-self-start" src="{{ asset('images/dante.gif') }}">
						  <div class="media-body">
							  <span class="card-text-teknisi">danteV</span><br>
							</a>
							  <span class="card-text-lokasi">
								<i class="fa fa-map-marker"></i>&nbsp;&nbsp; Nusa Tenggara Timur <br>
								<i class="fa fa-wrench float-left">&nbsp; 337x</i>
							  </span>
							  <span class="card-text-lokasi float-right">
								<i class="fa fa-diamond" style="color:#2196f3;"></i>
							  </span>
						  </div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="konten-iklan">
				<div class="card-konten">
				  <a href="#">
					<div class="img-card-ct">
					  <img class="img-fluid" src="{{ asset('images/ll.jpg') }}" />
					</div>
					<div class="card-content-ct">
						<p class="text-judul-iklan">SERVICE HP NOKIA LUMIA profesional murah</p>
				  </a>
						<p class="text-harga">
						  Mulai <b>Rp 12.345</b>
						</p>
						<p class="text-rating">
						  <i class="fa fa-heart"></i>&nbsp; 215 &nbsp;&nbsp;&nbsp; 
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#fec112;"></i>
						  <i class="fa fa-star" style="color:#;"></i>
						  (132)
						</p>
					</div>
					<div class="card-read-more">
						<div class="media">
							<a href="#Toko">
						  <img class="image-circle-profile img-fluid align-self-start" src="{{ asset('images/gg.jpg') }}">
						  <div class="media-body">
							  <span class="card-text-teknisi">MRibell</span><br>
							</a>
							  <span class="card-text-lokasi">
								<i class="fa fa-map-marker"></i>&nbsp;&nbsp; Nangroe Aceh Darussalam <br>
								<i class="fa fa-wrench float-left">&nbsp; 153x</i>
							  </span>
							  <span class="card-text-lokasi float-right">
								<i class="fa fa-diamond" style="color:#;"></i>
							  </span>
						  </div>
						</div>
					</div>
				</div>
			</div>
			
		  </div>
        </div>
		<br>
		<br>
@stop