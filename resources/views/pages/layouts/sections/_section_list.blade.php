<section class="section-list" id="lista">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="title-list">Praesent volutpat consequat odio</h1>
			</div>
			<div class="col-12 col-lg-4">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
							<span class="link-top">Viverra</span>
							<span class="link-down"></span>
						</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
							<span class="link-top">Pretium</span>
							<span class="link-down"></span>
						</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
							<span class="link-top">Mauris</span>
							<span class="link-down"></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-12 col-lg-8">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<ul class="list-itself row">
							@for($i=0; $i<12; $i++)
							<div class="col-12 col-lg-6">
								<li class="list-itself-item">
									<p class="list-itself-item-name">Fringilia</p>
									<small class="list-itself-item-function">Euismood</small>
								</li>
							</div>
							@endfor
						</ul>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<ul class="list-itself row">
							@for($i=0; $i<12; $i++)
							<div class="col-12 col-lg-6">
								<li class="list-itself-item">
									<p class="list-itself-item-name">Fringilia</p>
									<small class="list-itself-item-function">Euismood</small>
								</li>
							</div>
							@endfor
						</ul>
					</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<ul class="list-itself row">
							@for($i=0; $i<12; $i++)
							<div class="col-12 col-lg-6">
								<li class="list-itself-item">
									<p class="list-itself-item-name">Fringilia</p>
									<small class="list-itself-item-function">Euismood</small>
								</li>
							</div>
							@endfor
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>