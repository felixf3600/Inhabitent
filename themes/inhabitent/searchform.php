<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

		<button id="search-button" class="search-button">
				<i class="fa fa-search"></i>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>	
		<label>
			<input id="search-field" type="search" class="search-field display" placeholder="Press Enter" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>		


</form>
