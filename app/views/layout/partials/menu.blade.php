<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">Laravel</a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">

    <ul class="right">
	 	<li>{{ link_to('/books', "Books") }}</li>
		<li>{{ link_to('/comments', "Comments") }}</li>
    </ul>

  </section>
</nav>
