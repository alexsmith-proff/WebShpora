<?php get_header(); ?>

	<section class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 main__sidebar">	

					<?php wp_nav_menu(); ?>

					
					<!-- wp_nav_menu( [
					'theme_location'  => '',
					'menu'            => '', 
					'container'       => 'div', 
					'container_class' => '', 
					'container_id'    => '',
					'menu_class'      => 'menu', 
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
					] ); -->
					

					<!-- <ul class="main__sidebar-tree" id="tree">
						<li class="tree-item">Установка WordPress на OpenServer
							<ul class="tree-child" hidden>
								<li>Скачивание дистрибутива</li>
								<li>Создание БД mySQL</li>
								<li>Установка</li>
							</ul>
						</li>
						<li class="tree-item">Установка WordPress на хостинге
							<ul  class="tree-child" hidden>
								<li>Пункт 1</li>
								<li>Пункт 2</li>
							</ul>
						</li>
						<li class="tree-item">Перенос сайта с сервера на хостинг
							<ul  class="tree-child" hidden>
								<li>Пункт 1</li>
								<li>Пункт 2</li>
							</ul>
						</li>
					</ul> -->



					<!-- <ul class="main__sidebar-list">
						<li class="main__sidebar-item"><a class="main__sidebar-link" href="#">Пункт 1</a></li>
					</ul> -->


				</div>
				<div class="col-md-10 main__content">
					<?php the_content(); ?>
				</div>

			</div>
		</div>
	</section>
	
<?php get_footer(); ?>	