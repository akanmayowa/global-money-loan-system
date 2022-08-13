         <!-- sidebar menu -->
         <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
             <div class="menu_section">
                 <ul class="nav side-menu">
                     <li><a href="{{route('admin.index')}}"><i class="fa fa-home"></i>Dashboard </a></li>
                     <li><a href="{{ route('admin.customer.index')}}"><i class="fa fa-user"></i>Customer</a></li>
                     <li><a><i class="fa fa-envelope"></i> Email </a>
                         <ul class="nav child_menu">
                             <li><a href="{{ route('contacts.create') }}">Send Email</a></li>
                             <li><a href="{{ route('contacts.index') }}">All Email</a></li>
                         </ul>
                     </li>
                     <li><a  href="{{ route('admin.sms.index') }}"><i class="fa fa-commenting-o" aria-hidden="true"></i> Sms </a></li>
                     <li><a><i class="fa fa-folder"></i> Savings <span class="fa fa-chevron-down"></span></a>
                         <ul class="nav child_menu">
                             <li><a href="{{ route('admin.saving.index') }}">Saving</a></li>
                             <li><a href="{{ route('admin.saving.pending') }}">Pending Saving</a></li>
                             <li><a href="{{ route('admin.saving.approved') }}">Approved Saving</a></li>
                             <li><a href="">All Transaction</a></li>
                         </ul>
                     </li>
                     <li><a><i class="fa fa-usd"></i> Payment <span class="fa fa-chevron-down"></span></a>
                         <ul class="nav child_menu">
                             <li><a href="{{ route('admin.paymentindex') }}">All Payment</a></li>
                         </ul>
                     </li>
                     <li><a href="{{ route('admin.investment.index') }}" ><i class="fa fa-btc"></i> Investment </a></li>
                     <li><a><i class="fa fa-money"></i>Loan<span class="fa fa-chevron-down"></span></a>
                         <ul class="nav child_menu">
                             <li><a href="{{ route('admin.loan.index') }}">Loan</a></li>
                             <li><a href="{{ route('admin.loan.create') }}">New Loan</a></li>
                             <li><a href="{{ route('admin.loan.pending')}}">Pending Loan</a></li>
                             <li><a href="{{ route('admin.loan.approved') }}">Approved Loan</a></li>
                             <li><a href="{{ route('admin.loan.agent')}}">Loan Agent</a></li>
                         </ul>
                     </li>
                     <li><a href="{{ route('bank.index') }}"><i class="fa fa-university"></i>Bank</a></li>
                     <li><a href="{{ route('admin.report.savings') }}"><i class="fa fa-file-pdf-o"></i>Report</a></li>
                     <li><a href="{{ route('admin.profile.index', ['id'=>auth()->user()->id]) }}"><i class="fa fa-user-plus"></i>Profile</a></li>
                    </ul>
             </div>
         </div>
         </div>
         </div>
