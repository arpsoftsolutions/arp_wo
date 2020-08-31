        <div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Dashboard
              </h1>
            </div>
            <div class="row row-cards row-deck">
              <div class="col-lg-6">
                <div class="card card-aside">
                  <a href="#" class="card-aside-column" style="background-image: url(./demo/photos/david-klaasen-54203-500.jpg)"></a>
                  <div class="card-body d-flex flex-column">
                    <h4><a href="#">And this isn't my nose. This is a false one.</a></h4>
                    <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice! …Are you suggesting that coconuts migr...</div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                      <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/female/18.jpg)"></div>
                      <div>
                        <a href="./profile.html" class="text-default">Rose Bradley</a>
                        <small class="d-block text-muted">3 days ago</small>
                      </div>
                      <div class="ml-auto text-muted">
                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-aside">
                  <a href="#" class="card-aside-column" style="background-image: url(./demo/photos/david-marcu-114194-500.jpg)"></a>
                  <div class="card-body d-flex flex-column">
                    <h4><a href="#">Well, I didn't vote for you.</a></h4>
                    <div class="text-muted">Well, we did do the nose. Why? Shut up! Will you shut up?! You don't frighten us, English pig-dog...</div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                      <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/male/16.jpg)"></div>
                      <div>
                        <a href="./profile.html" class="text-default">Peter Richards</a>
                        <small class="d-block text-muted">3 days ago</small>
                      </div>
                      <div class="ml-auto text-muted">
                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bottombar js-bottombar" style="display: none">
            <a href="#" class="bottombar-close js-bottombar-close">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </a>
            <div class="container position-relative d-flex align-items-center">
              <a href="https://gumroad.com/l/tabler-email?utm_source=demo" class="bottombar-image">
                <picture>
                  <source srcset="https://tabler.io/img/bottombar.webp" type="image/webp">
                  <source srcset="https://tabler.io/img/bottombar.png" type="image/jpeg">
                  <img src="https://tabler.io/img/bottombar.png" alt="">
                </picture>
              </a>
              <div class="d-lg-flex flex-fill align-items-center">
                <div class="mr-2">
                  50 eye-catching templates tested in 90+ email clients. Compose your own, mobile optimized email message in less than 5 minutes!
                </div>
                <div class=" ml-auto mt-2 mt-lg-0">
                  <a href="https://gumroad.com/l/tabler-email?utm_source=demo" class="btn btn-sm btn-green text-nowrap" target="_blank">More info</a>
                </div>
              </div>
            </div>
          </div>
          <script>
            require(['jquery'], function () {
            	$(document).ready(function () {
            
            		function setCookie(name,value,days) {
            			var expires = "";
            			if (days) {
            				var date = new Date();
            				date.setTime(date.getTime() + (days*24*60*60*1000));
            				expires = "; expires=" + date.toUTCString();
            			}
            			document.cookie = name + "=" + (value || "")  + expires + "; path=/";
            		}
            
            		function getCookie(name) {
            			var nameEQ = name + "=";
            			var ca = document.cookie.split(';');
            			for(var i=0;i < ca.length;i++) {
            				var c = ca[i];
            				while (c.charAt(0)==' ') c = c.substring(1,c.length);
            				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            			}
            			return null;
            		}
            
            		if (!getCookie('bottombar-hidden')) {
            			$('.js-bottombar').show();
            		}
            
            		$('.js-bottombar-close').on('click', function (e) {
            			$('.js-bottombar').hide();
            			setCookie('bottombar-hidden', 1, 7);
            
            			e.preventDefault();
            			return false;
            		});
            	});
            });
          </script>
        </div>