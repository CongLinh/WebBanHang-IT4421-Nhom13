{{-- <div class="newsletter">
	<div class="container">
		<div class="col-md-6 w3agile_newsletter_left">
			<h3>Newsletter</h3>
			<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
		</div>
		<div class="col-md-6 w3agile_newsletter_right">
			<form action="#" method="post">
				<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div> --}}
<div class="footer">
	<div class="container">
		<div class="w3_footer_grids">
			<div class="col-md-3 w3_footer_grid">
				<h3>Contact</h3>
				<p>Please contact with us for more Information</p>
				<ul class="address">
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>So 4A Thanh Luong <span>Hai Ba Trung, Ha Noi</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="javascript:void(0)">Women'shop@gmail.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0344960839</li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Information</h3>
				<ul class="info"> 
					<li><a href="{{url('/about')}}">About Us</a></li>
					<li><a href="{{url('/')}}">Home</a></li>
					{{-- <li><a href="short-codes.html">Shrt Codes</a></li>
					<li><a href="faq.html">FAQ's</a></li>
					<li><a href="products.html">Special Products</a></li> --}}
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Category</h3>
				<ul class="info">
						@foreach($dressGroup as $group)
						<li><a href="/products/{{$group->name}}">{{$group->name}}</a></li>
						@endforeach
						@foreach($commonGroup as $group)
						<li><a href="/products/{{$group->name}}">{{$group->name}}</a></li>
						@endforeach
						@foreach($beachGroup as $group)
						<li><a href="/products/{{$group->name}}">{{$group->name}}</a></li>
						@endforeach
					{{-- <li><a href="dresses.html">Dresses</a></li>
					<li><a href="sweaters.html">Sweaters</a></li>
					<li><a href="shirts.html">Shirts</a></li>
					<li><a href="sarees.html">Sarees</a></li>
					<li><a href="skirts.html">Shorts & Skirts</a></li> --}}
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Profile</h3>
				<ul class="info"> 
					<li><a href="products.html">Summer Store</a></li>
					<li><a href="checkout.html">My Cart</a></li>
				</ul>
				<h4>Follow Us</h4>
				<div class="agileits_social_button">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="google"> </a></li>
						<li><a href="#" class="pinterest"> </a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	{{-- <div class="footer-copy">
		<div class="footer-copy1">
			<div class="footer-copy-pos">
				<a href="#home1" class="scroll"><img src="{{asset('images_admin/arrow.png')}}" alt=" " class="img-responsive" /></a>
			</div>
		</div>
		<div class="container">
			<p>&copy; 2016 Women's Fashion. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div> --}}
</div>