<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Transaksi</title>
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
                <a class="nav-link collapsed" href="admin_merch.html">
                    <i class="bi bi-journal-text"></i><span>Kelola Merchandise<i class="bi bi-chevron-down ms-auto"></i>
                </a>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="admin_approve.html">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Transaksi Approval</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>

            <li class="nav-item">
                <a class="nav-link" href="admin_transaksi_member.html">
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
        <div class="pagetitle">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="mb-4">
                            <h1>Histori Transaksi Membership</h1>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Membership</th>
                                    <th scope="col">Personal Trainer</th>
                                    <th scope="col">Pembayaran</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ivan Hadiono</td>
                                    <td>1 Month</td>
                                    <td>-</td>
                                    <td>Virtual Account</td>
                                    <td>Rp 250000</td>
                                    <td>2023-10-13</td>
                                </tr>
                                <tr>
                                    <td>Owen Willianto</td>
                                    <td>1 Year</td>
                                    <td>Yemmi Agustin</td>
                                    <td>Virtual Account</td>
                                    <td>Rp 2400000</td>
                                    <td>2023-10-13</td>
                                </tr>
                                <tr>
                                    <td>Jerry Livano</td>
                                    <td>3 Month</td>
                                    <td>-</td>
                                    <td>Virtual Account</td>
                                    <td>Rp 650000</td>
                                    <td>2023-10-13</td>
                                </tr>
                                <tr>
                                    <td>Valencia Samuel</td>
                                    <td>1 Month</td>
                                    <td>Velinda Novelia</td>
                                    <td>Virtual Account</td>
                                    <td>Rp 250000</td>
                                    <td>2023-10-13</td>
                                </tr>
                                <tr>
                                    <td>Tristan Vivaldi</td>
                                    <td>1 Year</td>
                                    <td>-</td>
                                    <td>Virtual Account</td>
                                    <td>Rp 2400000</td>
                                    <td>2022-11-15</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>