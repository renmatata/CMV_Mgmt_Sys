
<section class="content">
    <nav>
        <i class='bx bx-menu' style="font-size: 24px;"></i>
        <a href="#" class="nav-link">Categories</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="search..." />
                <button class="search-btn">
                    <i class='bx bx-search'></i>
                </button>
            </div>
        </form>

        <input type="checkbox" hidden id="switch-mode" />
        <label for="switch-mode" class="switch-mode"></label>

        <a href="#" class="notification">
            <i class='bx bxs-bell'></i>
            <!-- <span class="num">28</span> -->
        </a>

        <a href="#" class="profile">
            <img src="assets/images/admin.png" />
        </a>
    </nav>

    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <i class='bx bx-chevron-right'></i>
                    <li>
                        <a href="#" class="active">Home</a>
                    </li>
                </ul>
            </div>

            <a href="#" class="download-btn">
                <i class='bx bx-cloud-download'></i>
                <span class="text">Download Report</span>
            </a>
        </div>

        <div class="box-info">
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    <h3>1.5K</h3>
                    <p>New Orders</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group'></i>
                <span class="text">
                    <h3>1M</h3>
                    <p>Clients</p>
                </span>
            </li>
            <li>
                <i class='bx bx-dollar'></i>
                <span class="text">
                    <h3>$900k</h3>
                    <p>Turnover</p>
                </span>
            </li>
        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Recent Orders</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bxs-filter-alt'></i>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Order Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="profile.png" alt="" />
                                <p>User Name</p>
                            </td>
                            <td>07-05-2023</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="profile.png" alt="" />
                                <p>User Name</p>
                            </td>
                            <td>07-05-2023</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="profile.png" alt="" />
                                <p>User Name</p>
                            </td>
                            <td>07-05-2023</td>
                            <td><span class="status process">Process</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="profile.png" alt="" />
                                <p>User Name</p>
                            </td>
                            <td>07-05-2023</td>
                            <td><span class="status process">Process</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="profile.png" alt="" />
                                <p>User Name</p>
                            </td>
                            <td>07-05-2023</td>
                            <td><span class="status complete">Complete</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="todo">
                <div class="head">
                    <h3>Todos</h3>
                    <i class='bx bx-plus'></i>
                    <i class='bx bxs-filter-alt'></i>
                </div>

                <ul class="todo-list">
                    <li class="not-completed">
                        <p>Todo List</p>
                        <i class='bx bx-menu-alt-right'></i>
                    </li>
                    <li class="not-completed">
                        <p>Todo List</p>
                        <i class='bx bx-menu-alt-right'></i>
                    </li>
                    <li class="completed">
                        <p>Todo List</p>
                        <i class='bx bx-menu-alt-right'></i>
                    </li>
                    <li class="completed">
                        <p>Todo List</p>
                        <i class='bx bx-menu-alt-right'></i>
                    </li>
                    <li class="completed">
                        <p>Todo List</p>
                        <i class='bx bx-menu-alt-right'></i>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</section>
