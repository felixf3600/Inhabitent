<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

		<!-- <button id="search-button" class="search-button"> -->
		<!-- </button>	 -->
			<a id="search-button" class= 'search-button'href="#"><i class="fa fa-search "></i></a>
		<label id= "search-label" class="display search-field">				
			<input id="search-field" type="search" class="search-field display" placeholder="Press Enter" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>		


</form>
