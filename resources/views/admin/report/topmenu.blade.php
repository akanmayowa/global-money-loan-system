<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" href="{{ route('admin.report.savings') }}">Savings</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('admin.report.investment') }}">Investment</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('admin.report.payment') }}">Payment</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Loan</a></li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown"
           href="#" role="button" aria-haspopup="true"
           aria-expanded="false">Summary</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('admin.report.profit-loss') }}">Profit/loss</a>
        </div>
    </li>
</ul>
