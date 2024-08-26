 <nav class="navbar navbar-expand-lg navbar-light">
     <a class="d-xl-none d-lg-none" href="{{ route('dashboard') }}">Dashboard</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
         aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav flex-column">
             <li class="nav-item">
                 <a class="nav-link active" href="{{ route('dashboard') }}"><i
                         class="fas fa-fw fa-file"></i>Dashboard</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('category') }}">Category</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('subcategory') }}">Sub Category</a>
             </li>

             <li class="nav-item">
                 <a class="nav-link" href="{{ route('admin-product') }}">Product</a>
             </li>
             {{--  <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Definition </a>
                <div id="submenu-6" class="collapse submenu" style="">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category') }}">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('subcategory') }}">Sub Category</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product') }}">Product</a>
                        </li>
                        
                    </ul>
                </div>
            </li>  --}}

             <li class="nav-item">
                 <a class="nav-link" href="{{ route('coment') }}">Coment</a>
             </li>

             <li class="nav-item">
                 <a class="nav-link" href="{{ route('customer') }}"><i class="fas fa-fw fa-file"></i>Customer</a>
             </li>

             <li class="nav-item">
                 <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                     data-target="#submenu-9" aria-controls="submenu-9"><i
                         class="fas fa-fw fa-map-marker-alt"></i>Orders</a>
                 <div id="submenu-9" class="collapse submenu" style="">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('pending-order') }}">Pending Orders</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('paid-order') }}">Paid Orders</a>
                         </li>
                         
                     </ul>
                 </div>
             </li>


             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('expenses') }}">Expeses</a>
             </li>

             <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                    data-target="#submenu-8" aria-controls="submenu-8"><i
                        class="fas fa-fw fa-map-marker-alt"></i>HR</a>
                <div id="submenu-8" class="collapse submenu" style="">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employee') }}">Employees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('payroll') }}">Payrolls</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('paid-salary') }}">View Paid Salary</a>
                        </li>
                    </ul>
                </div>
            </li>



         </ul>
     </div>
 </nav>
