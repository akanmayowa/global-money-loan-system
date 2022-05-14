         <!-- sidebar menu -->
         <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Dashboard</a></li>

  

                <li><a><i class="fa fa-sitemap"></i> Investment </a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('user.investment') }}">Investment</a></li>
                    <li><a href="">All Investment</a></li>
                  </ul>
                </li>
            
                <li><a><i class="fa fa-bug"></i> Savings </a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('user.saving') }}">New Saving</a></li>
            
                  </ul>
                </li>
                <li><a ><i class="fa fa-table"></i> Loan</a>
                  <ul class="nav child_menu">
                  <li><a href="{{ route('user.loan') }}">New Loan</a></li>
               </ul>
                </li>


                <li><a href="{{ route('referrals.index') }}"><i class="fa fa-desktop"></i>Referrals</a></li>
                <li><a><i class="fa fa-desktop"></i>Bonuses</a></li>
                <li><a href="{{ route('subscriptions') }}"><i class="fa fa-pencil"></i>Subscription</a></li>
                <li><a href="{{ route('user.profile') }}"><i class="fa fa-clone"></i>Profile</a></li>
              </ul>
            </div>
          </div>


          <div class="sidebar-footer hidden-small mb-3">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          
        </div>
      </div>