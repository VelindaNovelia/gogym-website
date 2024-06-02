<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Merchandise</title>
    <link rel="stylesheet" href="CSS/styledashtest.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="img/GO GYM.png" alt="">
                <span class="d-none d-lg-block text-light text-nowrap text-sm">Admin Dashboard</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
    </header><!-- End Header -->
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="dashboardtest.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="admin_member.html">
                    <i class="bi bi-menu-button-wide"></i><span>Kelola Member</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>

            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link" href="admin_merch.html">
                    <i class="bi bi-journal-text"></i><span>Kelola Merchandise<i class="bi bi-chevron-down ms-auto"></i>
                </a>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="admin_approve.html">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Transaksi Approval</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>

            <li class="nav-item">
                <a class="nav-link collapsed" href="admin_transaksi_member.html">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Histori Member</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>

            <li class="nav-item">
                <a class="nav-link collapsed" href="admin_transaksi_merchan.html">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Histori Merchandise</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
            </li><!-- End Tables Nav -->
        </ul>

    </aside><!-- End Sidebar-->
    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <div class="pagetitle">
                    <h1>Kelola Merchandise</h1>
                    <div class="container">
                        <div class="pt-3 pb-3 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary">Tambah Barang</button>
                        </div>
                        <table class="table text-center table-striped table-bordered">
                            <thead class="thead table-dark">
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Harga Satuan</th>
                                <th>Vendor</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img width="100" src="img/merchan2.png" alt=""></td>
                                    <td>T-Shirt Special GO GYM</td>
                                    <td>100</td>
                                    <td>Rp 100000</td>
                                    <td>Toko Raymond</td>
                                    <td>
                                        <button type="button" class="btn btn-warning">Update</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img width="100" src="img/merchan3.png" alt=""></td>
                                    <td>Hoodie Special GO GYM</td>
                                    <td>50</td>
                                    <td>Rp 200000</td>
                                    <td>Toko Semafit</td>
                                    <td>
                                        <button type="button" class="btn btn-warning">Update</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img width="100" src="img/merchan4.png" alt=""></td>
                                    <td>Tote Bag Special GO GYM</td>
                                    <td>300</td>
                                    <td>Rp 125000</td>
                                    <td>Warung Staf</td>
                                    <td>
                                        <button type="button" class="btn btn-warning">Update</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><img width="100" src="img/merchan1.png" alt=""></td>
                                    <td>Tumbler Special GO GYM</td>
                                    <td>200</td>
                                    <td>Rp 125000</td>
                                    <td>Marnat Store</td>
                                    <td>
                                        <button type="button" class="btn btn-warning">Update</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>