
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('admin/assets/favicon/favicon.ico') }}" type="image/x-icon" />

  <!-- Map CSS -->
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />

  <!-- Libs CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/libs.bundle.css') }}" />

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/theme.bundle.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/js/quill/quill.snow.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/js/prismjs/plugins/toolbar/prism-toolbar.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/js/prismjs/themes/prism-okaidia.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/js/vanillajs-datepicker/css/datepicker-bs4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}" />

  <!-- Title -->
  <title>Dashboard</title>
  <style>
    @media screen and (min-width: 1000px) {
      .navbar-brand-img {
        max-height: 80px !important; 
      }
      .navbar-brand {
        padding-top: 10px !important;
      }
    }
  </style>
</head>

<body>

  <!-- NAVIGATION -->
  <nav class="navbar navbar-vertical fixed-start navbar-expand-md navbar-light" id="sidebar">
    <div class="container-fluid">

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse"
        aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="{{ url('/admin/home') }}">
        <img src="{{ asset('/assets/logo.jpeg') }}" class="navbar-brand-img mx-auto" alt="...">
      </a>

      <!-- User (xs) -->
      <div class="navbar-user d-md-none">

        <!-- Dropdown -->
        <div class="dropdown">

          <!-- Toggle -->
          <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-sm avatar-online">
              <img src="{{ asset('admin/assets/img/avatars/profiles/avatar-2.jpg') }}" class="avatar-img rounded-circle" alt="...">
            </div>
          </a>

          <!-- Menu -->
          <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarIcon">
            <a href="./profile-posts.html" class="dropdown-item">Profile</a>
            <a href="./account-general.html" class="dropdown-item">Settings</a>
            <hr class="dropdown-divider">
            <a href="./sign-in.html" class="dropdown-item">Logout aa</a>
          </div> -->
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a id="navbarDropdown" class="dropdown-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>    
                <hr class="dropdown-divider" />

                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
             </div>

        </div>

      </div>

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidebarCollapse">

        <!-- Form -->
        <!-- <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge input-group-reverse">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-text">
              <span class="fe fe-search"></span>
            </div>
          </div>
        </form> -->

        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link @if(Request::url() == url('/home')) active @endif">
              <i class="fe fe-home"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/blog') }}" class="nav-link @if(Request::url() == url('/blog')) active @endif">
              <i class="fe fe-list"></i> Blog
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/analytics') }}" class="nav-link @if(Request::url() == url('/analytics')) active @endif">
              <i class="fe fe-pie-chart"></i> analytics
            </a>
          </li>
        </ul>

        <!-- Divider -->
        <!-- <hr class="navbar-divider my-3">


        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fe fe-file"></i> Pages
            </a>

          </li>
        </ul> -->


        <hr class="navbar-divider my-3">

        <!-- Navigation -->

        <!-- Push content down -->
        <div class="mt-auto"></div>


        <!-- User (md) -->


      </div> <!-- / .navbar-collapse -->

    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <div class="main-content">
  <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
      <div class="container-fluid">
    
        <!-- Form -->
        <form class="form-inline me-4 d-none d-md-flex">
          <div class="input-group input-group-flush input-group-merge input-group-reverse" data-list='{"valueNames": ["name"]}'>
    
            <!-- Input -->
            <!-- <input type="search" class="form-control dropdown-toggle list-search" data-bs-toggle="dropdown" placeholder="Search" aria-label="Search" /> -->
    
            <!-- Prepend -->
            <!-- <div class="input-group-text">
              <i class="fe fe-search"></i>
            </div> -->
    
            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-card">
              <div class="card-body">
    
               
              </div>
            </div> <!-- / .dropdown-menu -->
    
          </div>
        </form>
    
        <!-- User -->
        <div class="navbar-user">
    
          <!-- Dropdown -->
    
    
            
    
          <!-- Dropdown -->
          <div class="dropdown">
    
            <!-- Toggle -->
            <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="{{ asset('admin/assets/img/avatars/profiles/avatar-2.jpg') }}" alt="..." class="avatar-img rounded-circle" />
            </a>
                  

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a id="navbarDropdown" class="dropdown-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>    
                <hr class="dropdown-divider" />

                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
             </div>
    
          </div>
    
        </div>
    
      </div>
    </nav>
    @yield('content')
  </div><!-- / .main-content -->
  <!-- JAVASCRIPT -->
  <script src="{{ asset('admin/assets/js/app.js') }} "></script>

  <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script>
  <!-- Data Tables-->
  <script src="{{ asset('admin/assets/js/cms-post.js') }}"></script>
  <!-- Vendor JS -->
  <script src="{{ asset('admin/assets/js/vendor.bundle.js') }}"></script>
  <script src="{{ asset('admin/assets/js/quill/quill.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/vanillajs-datepicker/js/datepicker-full.min.js') }}"></script>
  <!-- Theme JS -->
  <script src="{{ asset('admin/assets/js/cms-post-new.js') }}"></script>
  <script src="{{ asset('admin/assets/js/theme.bundle.js') }}"></script>

  <script src="{{ asset('admin/assets/js/prismjs/prism.js') }}"></script>
  <script src="{{ asset('admin/assets/js/prismjs/plugins/normalize-whitespace/prism-normalize-whitespace.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/prismjs/plugins/toolbar/prism-toolbar.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js') }}"></script>
  @yield('post-footer')
  @include('sections/alerts')
  <script>
    $(function () {
      // Bar chart
      new Chart(document.getElementById("chartjs-dashboard-bar-devices"), {
        type: "bar",
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Mobile",
            backgroundColor: window.theme.primary,
            borderColor: window.theme.primary,
            hoverBackgroundColor: window.theme.primary,
            hoverBorderColor: window.theme.primary,
            data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79]
          }, {
            label: "Desktop",
            backgroundColor: "#E8EAED",
            borderColor: "#E8EAED",
            hoverBackgroundColor: "#E8EAED",
            hoverBorderColor: "#E8EAED",
            data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68]
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          scales: {
            yAxes: [{
              gridLines: {
                display: false
              },
              stacked: false,
              ticks: {
                stepSize: 20
              }
            }],
            xAxes: [{
              barPercentage: .75,
              categoryPercentage: .5,
              stacked: false,
              gridLines: {
                color: "transparent"
              }
            }]
          }
        }
      });
    });
  </script>
  <script>
    $(function () {
      $("#world_map").vectorMap({
        map: "world_mill",
        normalizeFunction: "polynomial",
        hoverOpacity: .7,
        hoverColor: false,
        regionStyle: {
          initial: {
            fill: "#e3eaef"
          }
        },
        markerStyle: {
          initial: {
            "r": 9,
            "fill": window.theme.primary,
            "fill-opacity": .95,
            "stroke": "#fff",
            "stroke-width": 7,
            "stroke-opacity": .4
          },
          hover: {
            "stroke": "#fff",
            "fill-opacity": 1,
            "stroke-width": 1.5
          }
        },
        backgroundColor: "transparent",
        zoomOnScroll: false,
        markers: [{
          latLng: [31.230391, 121.473701],
          name: "Shanghai"
        },
        {
          latLng: [39.904202, 116.407394],
          name: "Beijing"
        },
        {
          latLng: [28.704060, 77.102493],
          name: "Delhi"
        },
        {
          latLng: [6.524379, 3.379206],
          name: "Lagos"
        },
        {
          latLng: [39.343357, 117.361649],
          name: "Tianjin"
        },
        {
          latLng: [24.860735, 67.001137],
          name: "Karachi"
        },
        {
          latLng: [41.008240, 28.978359],
          name: "Istanbul"
        },
        {
          latLng: [35.689487, 139.691711],
          name: "Tokyo"
        },
        {
          latLng: [23.129110, 113.264381],
          name: "Guangzhou"
        },
        {
          latLng: [19.075983, 72.877655],
          name: "Mumbai"
        },
        {
          latLng: [40.7127837, -74.0059413],
          name: "New York"
        },
        {
          latLng: [34.052235, -118.243683],
          name: "Los Angeles"
        },
        {
          latLng: [41.878113, -87.629799],
          name: "Chicago"
        },
        {
          latLng: [29.760427, -95.369804],
          name: "Houston"
        },
        {
          latLng: [33.448376, -112.074036],
          name: "Phoenix"
        },
        {
          latLng: [51.507351, -0.127758],
          name: "London"
        },
        {
          latLng: [48.856613, 2.352222],
          name: "Paris"
        },
        {
          latLng: [55.755825, 37.617298],
          name: "Moscow"
        },
        {
          latLng: [40.416775, -3.703790],
          name: "Madrid"
        }
        ]
      });
      setTimeout(function () {
        $(window).trigger('resize');
      }, 250)
    });
  </script>
  <script>
    $(function () {
      // Pie chart
      new Chart(document.getElementById("chartjs-dashboard-pie"), {
        type: "pie",
        data: {
          labels: ["Direct", "Affiliate", "E-mail", "Other"],
          datasets: [{
            data: [2602, 1253, 541, 1465],
            backgroundColor: [
              window.theme.primary,
              window.theme.warning,
              window.theme.danger,
              "#E8EAED"
            ],
            borderColor: "transparent"
          }]
        },
        options: {
          responsive: !window.MSInputMethodContext,
          maintainAspectRatio: false,
          legend: {
            display: false
          }
        }
      });
    });
  </script>
  <script>
    $(function () {
      // Radar chart
      new Chart(document.getElementById("chartjs-dashboard-radar"), {
        type: "radar",
        data: {
          labels: ["Technology", "Sports", "Media", "Gaming", "Arts"],
          datasets: [{
            label: "Interests",
            backgroundColor: "rgba(0, 123, 255, 0.2)",
            borderColor: "#2979ff",
            pointBackgroundColor: "#2979ff",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "#2979ff",
            data: [70, 53, 82, 60, 33]
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false
          }
        }
      });
    });
  </script>
  <script>
    $(function () {
      $("#datatables-dashboard-traffic").DataTable({
        pageLength: 8,
        lengthChange: false,
        bFilter: false,
        autoWidth: false,
        order: [
          [1, "desc"]
        ]
      });
    });
  </script>
</body>

</html>