<ul class="clearfix list-blog">
	<?php if (empty($blogs)) : ?>
	<h3><b>Không có bài viết nào danh mục này.</b></h3>
	<?php endif; ?>
	<?php foreach($blogs as $blog): ?>
		<li>
				<h4><b><a href="<?php echo alias($blog['title']).'-b'. $blog['id'].'.html'; ?>"><?php echo $blog['title'] ?></a></b></h4>
				<p><?php echo truncateStr($blog['content'],160,"") ?></p>
		</li>
	<?php endforeach; ?>
</ul>

<div class="text-center" style="float: left;">
	<?php echo $pagination; ?>
</div>