<div class="sidebar">
    <div class="flex-shrink-0 p-3 bg-secondary shadow-lg sidebar__container d-flex flex-column" style="width: 280px;">
        <a href="./index.php" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom ">
            <svg class="bi me-2" width="30" height="24">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-5 fw-semibold">X Shop</span>
        </a>
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed " data-bs-toggle="collapse"
                    data-bs-target="#home-collapse" aria-expanded="true">
                    Home
                </button>
                <div class="collapse show" id="home-collapse">
                    <ul class=" btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark  rounded">Overview</a></li>
                        <li><a href="#" class="link-dark  rounded">Updates</a></li>
                        <li><a href="./index.php?act=reportlist" class="link-dark  rounded">Reports</a></li>
                    </ul>
                </div>
            </li>
            <!-- <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed " data-bs-toggle="collapse"
                    data-bs-target="#dashboard-collapse" aria-expanded="false">
                    Dashboard
                </button>
                <div class="collapse" id="dashboard-collapse">
                    <ul class=" btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark  rounded">Overview</a></li>
                        <li><a href="#" class="link-dark  rounded">Weekly</a></li>
                        <li><a href="#" class="link-dark  rounded">Monthly</a></li>
                        <li><a href="#" class="link-dark  rounded">Annually</a></li>
                    </ul>
                </div>
            </li> -->
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed " data-bs-toggle="collapse"
                    data-bs-target="#menu-collapse" aria-expanded="false">
                    Menu
                </button>
                <div class="collapse" id="menu-collapse">
                    <ul class=" btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="index.php?act=catelist" class="link-dark  rounded">Cates</a></li>
                        <li><a href="index.php?act=productlist" class="link-dark  rounded">Products</a></li>
                        <li><a href="index.php?act=commentlist" class="link-dark  rounded">Comments</a></li>
                        <li><a href="index.php?act=userlist" class="link-dark  rounded">Userlist</a></li>
                        <li><a href="index.php?act=orderlist" class="link-dark  rounded">Orders</a></li>
                        <!-- <li><a href="#" class="link-dark  rounded">Monthly</a></li>
                        <li><a href="#" class="link-dark  rounded">Annually</a></li> -->
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed " data-bs-toggle="collapse"
                    data-bs-target="#orders-collapse" aria-expanded="false">
                    Orders
                </button>
                <div class="collapse" id="orders-collapse">
                    <ul class=" btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark  rounded">New</a></li>
                        <li><a href="#" class="link-dark  rounded">Processed</a></li>
                        <li><a href="#" class="link-dark  rounded">Shipped</a></li>
                        <li><a href="#" class="link-dark  rounded">Returned</a></li>
                    </ul>
                </div>
            </li>
            <li class="border-top my-3"></li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                    data-bs-target="#account-collapse" aria-expanded="false">
                    Account
                </button>
                <div class="collapse" id="account-collapse">
                    <ul class=" btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark  rounded">New...</a></li>
                        <li><a href="#" class="link-dark  rounded">Profile</a></li>
                        <li><a href="#" class="link-dark  rounded">Settings</a></li>
                        <li><a href="#" class="link-dark  rounded">Sign out</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <hr>
        <div class="dropdown mt-auto">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
</div>