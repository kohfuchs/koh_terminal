<div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h3 id="logo">
					<a href="<?php echo Theme::siteUrl() ?>">
						<?php echo $site->title() ?>
					</a>
				</h3>
            </div>
            <div class="col-md-6">
                <div class="list-group list-group-horizontal float-right">
					<?php foreach ($staticContent as $staticPage): ?>
						<ul>
							<a href="<?php echo $staticPage->permalink() ?>">
								<?php echo $staticPage->title() ?>
							</a>
						</ul>
					<?php endforeach ?>

                </div>
            </div>
        </div>
	<hr>
</div>
