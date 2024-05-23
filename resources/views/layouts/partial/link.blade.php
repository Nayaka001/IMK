<!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/nucleo-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nucleo-svg.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" /> -->
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link rel="stylesheet" href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css') }}?v=1.0.5">
    <link rel="stylesheet" href="{{ asset('assets/output.css') }}">
    <!-- <link href="./assets/output.css" rel="stylesheet" />   -->
    <!-- <link href="./assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />
    <link href="./assets/output.css" rel="stylesheet" />   -->
    <!-- @vite('resources/css/app.css') -->
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 50;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            border-radius: 0.75rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 90%;
            max-width: 500px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .transparent-bg {
            background-color: rgba(0, 0, 0, 0.5) !important;
        }
    </style>
    
    <!-- <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 50;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            border-radius: 0.75rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 90%;
            max-width: 500px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .transparent-bg {
            background-color: rgba(0, 0, 0, 0.5) !important;
        }
    </style> -->

    <!-- <style>
        .custom-rounded tr {
        overflow: hidden; /* memastikan semua border internal terpotong */
        }

        .custom-rounded td:first-child {
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
        }

        .custom-rounded td:last-child {
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        }

        .custom-table {
  border-collapse: separate;
  border-spacing: 0 10px;  /* Jarak horizontal 0, jarak vertikal 10px */
}

    </style> -->

    <style>
.custom-rounded tr {
  overflow: hidden; /* memastikan semua border internal terpotong */
  box-shadow: 0px 8px 6px -1px rgba(0, 0, 0, 0.4); /* Menambahkan shadow pada setiap baris */
}

.custom-rounded td {
  border-bottom: 2px solid #ccccbd; /* Menambahkan border bawah pada setiap cell */
}

.custom-rounded td:first-child {
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
}

.custom-rounded td:last-child {
  border-top-right-radius: 20px;
  border-bottom-right-radius: 20px;
}

.custom-table {
  border-collapse: separate;
  border-spacing: 0 10px; /* Jarak horizontal 0, jarak vertikal 10px */
}

.custom-size {
  height: 95px; /* Sesuai dengan ukuran yang Anda inginkan */
  width: 115px;  /* Sesuai dengan ukuran yang Anda inginkan */
}

</style>
