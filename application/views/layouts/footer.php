		
	</div>
	<div class="col-md-3">
		<ul class="list-group">
			<?php foreach ($menu as $key => $value): ?>
			<li class="list-group-item">
				<span class="badge"><?= $value; ?></span>
				<a href="<?= base_url(strtolower($key)); ?>"><?= $key; ?></a>
			</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>
</article>
</body>
</html>