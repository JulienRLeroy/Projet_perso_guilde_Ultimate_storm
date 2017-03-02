
		<script src="../js/controlPlayer.js"></script>
		<style>
			.carousel-inner > .item > iframe,
			.carousel-inner > .item > a > iframe {
				width: 100%;
				margin: auto;
			}
		</style>
		<br>
		<div id="video" class="carousel slide video" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators video_bulle">
				<li data-target="#video" data-slide-to="0" ></li>
				<li data-target="#video" data-slide-to="1"></li>
			</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">	
				<iframe id="video1" class="video" width="460" height="345" src="https://www.youtube.com/embed/DAuye-0Z_bY" frameborder="0" allowfullscreen></iframe>
				<button onclick="playVid()" type="button">Play Video</button>
				<button onclick="pauseVid()" type="button">Pause Video</button>
			</div> 
			<div class="item" id="video2">
				<iframe class="video" width="460" height="345" src="https://www.youtube.com/embed/DAuye-0Z_bY" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>

		<!-- Left and right controls -->
	</div>
	<div class="col-md-12 video_bouton">
		<a class="left carousel-control" href="#video" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Précédent</span>
		</a>
		<a class="right carousel-control" href="#video" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Suivant</span>
		</a>
	</div>
