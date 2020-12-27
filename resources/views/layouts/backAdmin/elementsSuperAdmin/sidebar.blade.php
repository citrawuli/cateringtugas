<div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a href="{!! url('/superAdmin'); !!}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-user-9"></i>
							<span class="nav-text">User</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/UserTable'); !!}">User Table</a></li>
                            <li><a href="{!! url('/UserFormInput'); !!}">User Form (add)</a></li>
                            <li><a href="{!! url('/AddUserRole'); !!}">User Role Form (add)</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-box"></i>
                            <span class="nav-text">Product Category</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/CategoryTable'); !!}">Category Table</a></li>
                            <li><a href="{!! url('/ViewFormCategory'); !!}">Category Form (add)</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notebook-5"></i>
                            <span class="nav-text">Product</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('/ProductTable'); !!}">Product Table</a></li>
                            <li><a href="{!! url('/ViewFormProduct'); !!}">Product Form (add)</a></li>
                        </ul>
                    </li>
                </ul>
            
				<div class="add-menu-sidebar">
					<img src="{{ asset('davur/images/icon1.png') }}" alt=""/>
					<p>Organize your menus through button bellow</p>
					<a href="javascript:void(0);" class="btn btn-primary btn-block light">+ Add Menus</a>
				</div>
				<div class="copyright">
					<p><strong>Davur - Restaurant Admin Dashboard</strong> © 2020 All Rights Reserved</p>
					<p>Made with <i class="fa fa-heart"></i> by DexignZone</p>
				</div>
			</div>
        </div>