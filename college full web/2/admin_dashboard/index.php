<!DOCTYPE html>
<html lang="en">

  
<head>
   <?php include("php_include/head.php")?>
 
  </head>

  <body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- Main container start -->
      <div class="main-container">

        <!-- Sidebar wrapper start -->
        <nav id="sidebar" class="sidebar-wrapper">

          <!-- App brand starts -->
          <div class="app-brand px-3 py-2 d-flex align-items-center">
            <a href="index.php">
              <img src="assets/images/logo.svg" class="logo" alt="Bootstrap Gallery" />
            </a>
          </div>
          <!-- App brand ends -->
<?php include("php_include/sidebar.php")?>
          <!-- Sidebar menu ends -->

        </nav>
        <!-- Sidebar wrapper end -->

        <!-- App container starts -->
        <div class="app-container">

          <!-- App header starts -->
          <?php include("php_include/header.php")?>

          <!-- App header ends -->

          <!-- App body starts -->
          <div class="app-body">

            <!-- Container starts -->
            <div class="container-fluid">

              <!-- Row start -->
              <div class="row">
                <div class="col-12 col-xl-12">
                  <h2 class="mb-2">Analytics Dashboard</h2>
                  <h6 class="mb-4 fw-light">
                    A collection of visualizations showing your website data.
                  </h6>
                </div>
              </div>
              <!-- Row end -->

              <!-- Row start -->
              <div class="row">
                <div class="col-xxl-3 col-sm-6 col-12">
                  <div class="card mb-4 border-0 bg-violet">
                    <div class="card-body text-white">
                      <div class="d-flex justify-content-center text-center">
                        <div class="position-absolute top-0 start-0 p-3">
                          <i class="icon-pie-chart fs-1 lh-1"></i>
                        </div>
                        <div class="py-3">
                          <h1>9600</h1>
                          <h6>Weekly new visitors</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4 border-0 bg-primary">
                    <div class="card-body text-white">
                      <div class="d-flex justify-content-center text-center">
                        <div class="position-absolute top-0 start-0 p-3">
                          <i class="icon-shopping-bag fs-1 lh-1"></i>
                        </div>
                        <div class="py-3">
                          <h1>7900</h1>
                          <h6>Weekly new income</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-12">
                  <div class="card mb-4 border-0 bg-purple">
                    <div class="card-body text-white">
                      <div class="d-flex justify-content-center text-center">
                        <div class="position-absolute top-0 start-0 p-3">
                          <i class="icon-shopping-cart fs-1 lh-1"></i>
                        </div>
                        <div class="py-3">
                          <h1>6900</h1>
                          <h6>Weekly new orders</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4 border-0 bg-warning">
                    <div class="card-body text-white">
                      <div class="d-flex justify-content-center text-center">
                        <div class="position-absolute top-0 start-0 p-3">
                          <i class="icon-twitch fs-1 lh-1"></i>
                        </div>
                        <div class="py-3">
                          <h1>9900</h1>
                          <h6>Weekly new reviews</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-6 col-xl-12 col-12">
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title">Revenue</h5>
                    </div>
                    <div class="card-body pt-0">

                      <!-- Row start -->
                      <div class="row">
                        <div class="col-xl-4 col-12">
                          <ul class="list-group">
                            <li class="list-group-item">
                              <h5 class="m-0 fw-bold">
                                $9000
                                <i class="icon-trending-up fs-4 me-1 text-danger"></i>
                              </h5>
                              <h6 class="m-0 small opacity-50">Sales</h6>
                            </li>
                            <li class="list-group-item">
                              <h5 class="m-0 fw-bold">
                                $6000
                                <i class="icon-trending-up fs-4 me-1 text-info"></i>
                              </h5>
                              <h6 class="m-0 small opacity-50">Orders</h6>
                            </li>
                            <li class="list-group-item">
                              <h5 class="m-0 fw-bold">
                                $5000
                                <i class="icon-trending-up fs-4 me-1 text-success"></i>
                              </h5>
                              <h6 class="m-0 small opacity-50">Income</h6>
                            </li>
                            <li class="list-group-item">
                              <h5 class="m-0 fw-bold">
                                $3000
                                <i class="icon-trending-up fs-4 me-1 text-warning"></i>
                              </h5>
                              <h6 class="m-0 small opacity-50">Revenue</h6>
                            </li>
                          </ul>
                        </div>
                        <div class="col-xl-8 col-12">
                          <div class="graph-body-md">
                            <div id="revenueData"></div>
                          </div>
                        </div>
                      </div>
                      <!-- Row end -->

                    </div>
                  </div>
                </div>
              </div>
              <!-- Row end -->

              <!-- Row start -->
              <div class="row">
                <div class="col-xxl-4 col-sm-6">
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title">Orders</h5>
                    </div>
                    <div class="card-body">
                      <div class="scroll300">
                        <ul class="recent-orders">
                          <li>
                            <div class="order-img me-3">
                              <img src="assets/images/products/product1.jpg" class="rounded-3" alt="Bootstrap Gallery">
                              <span class="badge bg-primary">20% OFF</span>
                            </div>
                            <div class="order-details">
                              <h5 class="mb-1">The Speaker</h5>
                              <p class="mb-1 opacity-50">New order received</p>
                              <p class="mb-1 opacity-50">2 mins ago</p>
                            </div>
                          </li>
                          <li>
                            <div class="order-img me-3">
                              <img src="assets/images/products/product2.jpg" class="rounded-3" alt="Bootstrap Gallery">
                              <span class="badge bg-primary">30% OFF</span>
                            </div>
                            <div class="order-details">
                              <h5 class="mb-1">Head Massage</h5>
                              <p class="mb-1 opacity-50">New order placed</p>
                              <p class="mb-1 opacity-50">3 mins ago</p>
                            </div>
                          </li>
                          <li>
                            <div class="order-img me-3">
                              <img src="assets/images/products/product3.jpg" class="rounded-3" alt="Bootstrap Gallery">
                              <span class="badge bg-primary">60% OFF</span>
                            </div>
                            <div class="order-details">
                              <h5 class="mb-1">Game Box</h5>
                              <p class="mb-1 opacity-50">New product received</p>
                              <p class="mb-1 opacity-50">5 mins ago</p>
                            </div>
                          </li>
                          <li>
                            <div class="order-img me-3">
                              <img src="assets/images/products/product4.jpg" class="rounded-3" alt="Bootstrap Gallery">
                              <span class="badge bg-primary">80% OFF</span>
                            </div>
                            <div class="order-details">
                              <h5 class="mb-1">Mac Sticks</h5>
                              <p class="mb-1 opacity-50">New item received</p>
                              <p class="mb-1 opacity-50">10 mins ago</p>
                            </div>
                          </li>
						   
                          <li>
                            <div class="order-img me-3">
                              <img src="assets/images/products/product9.jpg" class="rounded-3" alt="Bootstrap Gallery">
                              <span class="badge bg-primary">20% OFF</span>
                            </div>
                            <div class="order-details">
                              <h5 class="mb-1">Veggie Mix</h5>
                              <p class="mb-1 opacity-50">New order received</p>
                              <p class="mb-1 opacity-50">17 mins ago</p>
                            </div>
                          </li>
                          <li>
                            <div class="order-img me-3">
                              <img src="assets/images/products/product6.jpg" class="rounded-3" alt="Bootstrap Gallery">
                              <span class="badge bg-primary">50% OFF</span>
                            </div>
                            <div class="order-details">
                              <h5 class="mb-1">Tuna Mix</h5>
                              <p class="mb-1 opacity-50">New item received</p>
                              <p class="mb-1 opacity-50">30 mins ago</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-sm-6">
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title">Payment History</h5>
                    </div>
                    <div class="card-body">
                      <div class="scroll300">
                        <div class="my-2">
                          <div class="d-flex align-items-start">
                            <img src="assets/images/user3.png" class="img-4x me-3 rounded-circle activity-user"
                              alt="Admin Dashboards" />
                            <div class="mb-4">
                              <h5 class="mb-1">Christian Ochoa</h5>
                              <p class="mb-1 opacity-50">3 mins ago</p>
                              <p class="mb-1 opacity-50">Paid invoice ref. #26788</p>
                              <span class="badge bg-primary">Delivered</span>
                            </div>
                          </div>
                          <div class="d-flex align-items-start">
                            <img src="assets/images/user1.png" class="img-4x me-3 rounded-circle activity-user"
                              alt="Admin Themes" />
                            <div class="mb-4">
                              <h5 class="mb-1">Socorro Decker</h5>
                              <p class="mb-1 opacity-50">7 mins ago</p>
                              <p class="mb-1 opacity-50">Sent invoice ref. #23457</p>
                              <span class="badge bg-primary">Delivered</span>
                            </div>
                          </div>
                          <div class="d-flex align-items-start">
                            <img src="assets/images/user2.png" class="img-4x me-3 rounded-circle activity-user"
                              alt="Bootstrap Themes" />
                            <div class="mb-4">
                              <h5 class="mb-1">Haywood Sharp</h5>
                              <p class="mb-1 opacity-50">16 hours ago</p>
                              <p class="mb-1 opacity-50">Paid invoice ref. #34546</p>
                              <span class="badge bg-primary">Received</span>
                            </div>
                          </div>
                          <div class="d-flex align-items-start">
                            <img src="assets/images/user4.png" class="img-4x me-3 rounded-circle activity-user"
                              alt="Admin Dashboards" />
                            <div class="mb-4">
                              <h5 class="mb-1">Doug Beard</h5>
                              <p class="mb-1 opacity-50">2 days ago</p>
                              <p class="mb-1 opacity-50">Paid invoice ref. #23459</p>
                              <span class="badge bg-primary">New</span>
                            </div>
                          </div>
                          <div class="d-flex align-items-start">
                            <img src="assets/images/user5.png" class="img-4x me-3 rounded-circle activity-user"
                              alt="Bootstrap Dashboards" />
                            <div class="mb-4">
                              <h5 class="mb-1">Walton Bass</h5>
                              <p class="mb-1 opacity-50">3 days ago</p>
                              <p class="mb-1 opacity-50">Paid invoice ref. #23473</p>
                              <span class="badge bg-primary">New</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-sm-12">
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title">Earnings</h5>
                    </div>
                    <div class="card-body">
                      <div class="scroll300">
                        <div id="earnings"></div>
                        <div class="text-center">
                          <h1>$95,82,500.00</h1>
                          <h6 class="m-0">Monthly Sales Growth</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Row end -->

              <!-- Row start -->
              <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title">Visitors</h5>
                    </div>
                    <div class="card-body">
                      <!-- Row start -->
                      <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6 col-md-12">
                          <div id="world-map-markers3" class="chart-height"></div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-12">
                          <div class="row g-5">
                            <div class="col-6">
                              <div class="d-flex align-items-center">
                                <div class="fs-4 fw-bold">75,900</div>
                                <div class="ms-2 text-primary fw-bold d-flex">
                                  <i class="icon-trending-up fs-4 me-1"></i>
                                  12%
                                </div>
                              </div>
                              <small class="text-dark">Overall Visitors</small>
                            </div>
                            <div class="col-6">
                              <div class="d-flex align-items-center">
                                <div class="fs-4 fw-bold">24,800</div>
                                <div class="ms-2 text-primary fw-bold d-flex">
                                  <i class="icon-trending-up fs-4 me-1"></i>
                                  15%
                                </div>
                              </div>
                              <small class="text-dark">Visitors in USA</small>
                            </div>
                            <div class="col-6">
                              <div class="d-flex align-items-center">
                                <div class="fs-4 fw-bold">21,900</div>
                                <div class="ms-2 text-primary fw-bold d-flex">
                                  <i class="icon-trending-up fs-4 me-1"></i>
                                  15%
                                </div>
                              </div>
                              <small class="text-dark">Visitors in Turkey</small>
                            </div>
                            <div class="col-6">
                              <div class="d-flex align-items-center">
                                <div class="fs-4 fw-bold">16800</div>
                                <div class="ms-2 text-danger fw-bold d-flex">
                                  <i class="icon-trending-down fs-4 me-1"></i>
                                  18%
                                </div>
                              </div>
                              <small class="text-dark">Visitors in Brazil</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Row end -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- Row end -->

              <!-- Row start -->
              <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="table-outer">
                        <div class="table-responsive">
                          <table class="table align-middle text-nowrap">
                            <thead>
                              <tr>
                                <th>Product</th>
                                <th>Link</th>
                                <th>Purchase Date</th>
                                <th>Product Details</th>
                                <th>Views</th>
                                <th>Clicks</th>
                                <th>Reviews</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Order Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="d-flex flex-row align-items-center">
                                    <img src="assets/images/products/product2.jpg"
                                      class="rounded-3 img-4x border p-1 my-1" alt="Admin Dashboards" />
                                    <div class="d-flex flex-column ms-3">
                                      <p class="m-0 fw-semibold">
                                        Bootstrap Themes
                                      </p>
                                      <p class="text-dark small m-0">
                                        (60% Discount)
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="text-primary">#L10010021</a>
                                </td>
                                <td>22/10/2023</td>
                                <td class="text-truncate">
                                  Best admin dashboard theme.
                                </td>
                                <td>
                                  <span class="badge border border-secondary text-secondary">6500</span>
                                </td>
                                <td>
                                  <span class="badge border border-primary text-primary">2600</span>
                                </td>
                                <td>
                                  <div class="rate2 rating-stars"></div>
                                </td>
                                <td>$18.00</td>
                                <td>
                                  <span class="badge bg-primary opacity-50">
                                    Paid</span>
                                </td>
                                <td>
                                  <span class="badge bg-primary">Delivered</span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex flex-row align-items-center">
                                    <img src="assets/images/products/product3.jpg"
                                      class="rounded-3 img-4x border p-1 my-1" alt="Admin Dashboards" />
                                    <div class="d-flex flex-column ms-3">
                                      <p class="m-0 fw-semibold">
                                        Bootstrap Themes
                                      </p>
                                      <p class="text-dark small m-0">
                                        (48% Discount)
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="text-primary">#L10010027</a>
                                </td>
                                <td>21/10/2023</td>
                                <td class="text-truncate">
                                  Best bootstrap admin dashboard theme.
                                </td>
                                <td>
                                  <span class="badge border border-secondary text-secondary">8740</span>
                                </td>
                                <td>
                                  <span class="badge border border-primary text-primary">4390</span>
                                </td>
                                <td>
                                  <div class="rate4 rating-stars"></div>
                                </td>
                                <td>$21.00</td>
                                <td>
                                  <span class="badge bg-primary opacity-50">
                                    Paid</span>
                                </td>
                                <td>
                                  <span class="badge bg-primary">Delivered</span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="d-flex flex-row align-items-center">
                                    <img src="assets/images/products/product5.jpg"
                                      class="rounded-3 img-4x border p-1 my-1" alt="Admin Dashboards" />
                                    <div class="d-flex flex-column ms-3">
                                      <p class="m-0 fw-semibold">
                                        Bootstrap Themes
                                      </p>
                                      <p class="text-dark small m-0">
                                        (34% Discount)
                                      </p>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <a href="#" class="text-primary">#L10010030</a>
                                </td>
                                <td>20/10/2023</td>
                                <td class="text-truncate">
                                  Best bootstrap admin dashboard template.
                                </td>
                                <td>
                                  <span class="badge border border-secondary text-secondary">5590</span>
                                </td>
                                <td>
                                  <span class="badge border border-primary text-primary">3280</span>
                                </td>
                                <td>
                                  <div class="rate5 rating-stars"></div>
                                </td>
                                <td>$24.00</td>
                                <td>
                                  <span class="badge bg-primary opacity-50">
                                    Paid</span>
                                </td>
                                <td>
                                  <span class="badge bg-primary">Delivered</span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Row end -->

              <!-- Row start -->
              <div class="row">
                <div class="col-xxl-6 col-lg-12">
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5 class="card-title">Search Reports</h5>
                    </div>
                    <div class="card-body">
                      <div class="table-outer">
                        <div class="table-responsive">
                          <table class="table align-middle m-0">
                            <thead>
                              <tr>
                                <th>Channel</th>
                                <th>Users</th>
                                <th>Sessions</th>
                                <th>Last week</th>
                                <th>Change %</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="fw-semibold">Organic search</div>
                                </td>
                                <td>38,440</td>
                                <td>65,000(45%)</td>
                                <td>
                                  <span class="badge bg-info">48,950(33%)</span>
                                </td>
                                <td>
                                  <span class="bg-info-subtle p-2 rounded-2">
                                    65.33%
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="fw-semibold">Direct</div>
                                </td>
                                <td>40,390</td>
                                <td>57,500(33%)</td>
                                <td>
                                  <span class="badge bg-warning">39,250(29%)</span>
                                </td>
                                <td>
                                  <span class="bg-warning-subtle p-2 rounded-2">
                                    32.09%
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="fw-semibold">Email</div>
                                </td>
                                <td>29,250</td>
                                <td>18,390(21%)</td>
                                <td>
                                  <span class="badge bg-success">21,120(92%)</span>
                                </td>
                                <td>
                                  <span class="bg-success-subtle p-2 rounded-2">
                                    75.63%
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="fw-semibold">Referal</div>
                                </td>
                                <td>40,333</td>
                                <td>36,440(62%)</td>
                                <td>
                                  <span class="badge bg-danger">29,879(55%)</span>
                                </td>
                                <td>
                                  <span class="bg-danger-subtle p-2 rounded-2">
                                    87.02%
                                  </span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-6 col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="card-title">Browser Reports</h5>
                    </div>
                    <div class="card-body">
                      <div class="table-outer">
                        <div class="table-responsive">
                          <table class="table align-middle m-0">
                            <thead>
                              <tr>
                                <th>Browser</th>
                                <th>Users</th>
                                <th>Sessions</th>
                                <th>Bounce Rate</th>
                                <th>Conversion</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="fw-semibold">Chrome</div>
                                </td>
                                <td>38,440</td>
                                <td>65,000(45%)</td>
                                <td>
                                  <div id="sparkline1"></div>
                                </td>
                                <td>
                                  <span class="bg-info text-white p-2 rounded-2">
                                    65.33%
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="fw-semibold">Firefox</div>
                                </td>
                                <td>40,390</td>
                                <td>57,500(33%)</td>
                                <td>
                                  <div id="sparkline2"></div>
                                </td>
                                <td>
                                  <span class="bg-warning text-white p-2 rounded-2">
                                    32.09%
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="fw-semibold">Microsoft Edge</div>
                                </td>
                                <td>29,250</td>
                                <td>18,390(21%)</td>
                                <td>
                                  <div id="sparkline3"></div>
                                </td>
                                <td>
                                  <span class="bg-success text-white p-2 rounded-2">
                                    75.63%
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="fw-semibold">Opera</div>
                                </td>
                                <td>40,333</td>
                                <td>36,440(62%)</td>
                                <td>
                                  <div id="sparkline4"></div>
                                </td>
                                <td>
                                  <span class="bg-danger text-white p-2 rounded-2">
                                    87.02%
                                  </span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Row end -->

            </div>
            <!-- Container ends -->

          </div>
          <!-- App body ends -->

          <!-- App footer start -->
          <?php include("php_include/footer.php")?>
          <!-- App footer end -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Toastify JS -->
    <script src="assets/vendor/toastify/toastify.js"></script>
    <script src="assets/vendor/toastify/custom.js"></script>

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/home/revenueData.js"></script>
    <script src="assets/vendor/apex/custom/home/sparklines.js"></script>
    <script src="assets/vendor/apex/custom/home/usersData.js"></script>

    <!-- Vector Maps -->
    <script src="assets/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="assets/vendor/jvectormap/world-mill-en.js"></script>
    <script src="assets/vendor/jvectormap/gdp-data.js"></script>
    <script src="assets/vendor/jvectormap/continents-mill.js"></script>
    <script src="assets/vendor/jvectormap/custom/world-map-markers3.js"></script>

    <!-- Rating -->
    <script src="assets/vendor/rating/raty.js"></script>
    <script src="assets/vendor/rating/raty-custom.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
  </body>


</html>