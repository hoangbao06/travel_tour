<div class="sidebar" data-background-color="brown" data-active-color="danger">

    <div class="logo">
        <a href="" class="simple-text logo-mini">
            CT
        </a>

        <a href="" class="simple-text logo-normal">
            TRAVEL TOUR
        </a>
    </div>
    <div class="sidebar-wrapper">
        <!-- phần đầu side-bar -->
        <div class="user">
            <div class="photo">
                <img src="../assets/img/faces/face-2.jpg" />
            </div>
            <div class="info">
                <a href="" class="collapsed">
                    <span>
                        {{ Session::get('nameADMIN') }}
                    </span>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <!------------------------------------------>


        <ul class="nav">
            <li>
                <a href="{{ route('position.index')}}">
                    <i class="ti-panel"></i>
                    <p>Vị Trí</p>
                </a>
            </li>
            <li>
                <a href="{{ route('staff.index') }}">
                    <i class="ti-panel"></i>
                    <p>Nhân Viên</p>
                </a>
            </li>

            <li>
                <a href="{{ route('customer.index') }}">
                    <i class="ti-panel"></i>
                    <p>Khách Hàng</p>
                </a>
            </li>

            <li>
                <a href="{{ route('manageTour.index') }}">
                    <i class="ti-panel"></i>
                    <p>Quản Lý Tour</p>
                </a>
            </li>
            <li>
                <a href="{{ route('imageDetail.index') }}">
                    <i class="ti-panel"></i>
                    <p>Ảnh Tour</p>
                </a>
            </li>
            <li>
                <a href="{{ route('plane.index') }}">
                    <i class="ti-panel"></i>
                    <p>Chuyến Bay</p>
                </a>
            </li>
            <li>
                <a href="{{ route('hotel.index') }}">
                    <i class="ti-panel"></i>
                    <p>Khách Sạn</p>
                </a>
            </li>
            <li>
                <a href="{{ route('destination.index') }}">
                    <i class="ti-panel"></i>
                    <p>Địa Điểm</p>
                </a>
            </li>
            <li>
                <a href="{{ route('contract.index') }}">
                    <i class="ti-panel"></i>
                    <p>Hóa Đơn</p>
                </a>
            </li>
            <li>
                <a href="{{ route('post.index') }}">
                    <i class="ti-panel"></i>
                    <p>Bài Viết</p>
                </a>
            </li>
            <li>
                <a href="{{ route('profit.index') }}">
                    <i class="ti-panel"></i>
                    <p>Thống Kê</p>
                </a>
            </li>
            <li>
                <a href="{{ route('ThongkeSL')}}">
                    <span class="sidebar-mini">SL</span>
                    <span class="sidebar-normal">Thống Kê Doanh Thu</span>
                </a>
            </li>
            <li>
                <a href="{{ route('TourDatNhieu')}}">
                    <span class="sidebar-mini">SL</span>
                    <span class="sidebar-normal">Thống Kê Doanh Thu 2</span>
                </a>
            </li>
        </ul>
    </div>
</div>
