		<script type="text/javascript" src="/PathToYourFile/cookie.js"></script>
		
		<?php 
		if( isset($_COOKIE['25spaceCookieInfoOK']) ) { 
			$showPopup = false;
		} else {
			$showPopup = true;
		}
		?>		
		
		<?php if($showPopup) { ?>
			<div id="cookie-spacepopup">
				<div class="cookie-spacepopup-inner">
					<div class="cookie-hinweis">					
						<p>
							<nodesktop><b>Cookies on this site</b><br><br></nodesktop>
							<nomobile><b>Your choices regarding cookies on this site</b><br><br></nomobile/>
							Cookies are important to the proper functioning of a site.
							To improve your experience, we use cookies to remember log-in details and provide secure log-in, 
							collect statistics and to optimize site functionality.
							<nomobile>
							Click Agree and Proceed to accept cookies and go directly to the site or click on change cookie preferences to see detailed descriptions 
							of the types of cookies and choose whether to accept certain cookies while on the site.
							</nomobile>
							<br>
						</p>
					</div> 
					<br>
					<div class="row">
						<div class="col-md-6">
							<button onclick='cookieOk()'>I accept all cookies</button>
						</div>			
						<div class="col-md-6 text-right">
							<span class="cookie-more">
								<a href="https://PathToYourCookieSettings">View and change cookie preferences</a>
							</span>
						</div>				

					</div>
				</div>
			</div>
		<?php  }; ?>		
