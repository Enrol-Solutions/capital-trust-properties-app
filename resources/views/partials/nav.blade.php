<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTP | Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>

        .navbar-modern {
            background-color: #1e1e2f;
            padding: 15px;
            transition: background-color 0.5s ease, box-shadow 0.5s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .navbar-modern.scrolled {
            background-color: #10101a;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        }
        .navbar-brand {
            font-weight: bold;
            color: #ffcc00;
            transition: color 0.3s ease;
        }
        .navbar-brand:hover {
            color: #ffffff;
        }
        .nav-link {
            font-size: 16px;
            color: #ffffff;
            margin-left: 15px;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .nav-link:hover {
            color: #ffcc00;
            transform: scale(1.1);
        }
        .navbar-toggler {
            border: none;
            background-color: transparent;
        }
        .navbar-toggler:focus {
            outline: none;
            box-shadow: none;
        }
        /* Icon Styling */
        .nav-icon {
            margin-right: 8px;
        }
        /* Dropdown Menu Customization */
       
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @media (max-width: 768px) {
            .navbar-modern {
                text-align: center;
            }
            .nav-link {
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-modern fixed-top">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}"></i><img width="80px" height="40px" src="https://ctp.lk/wp-content/uploads/CTP-NEW-LOGO.png"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" style="color: white;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="/"><i class="fas fa-dashboard nav-icon"></i>Web view</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-home nav-icon"></i>Home</a>
                </li>
                @if(@auth()->user()->superAdmin)
                <li class="nav-item">
                    <a class="nav-link" href="/newAdminfrm"><i class="fas fa-plus nav-icon"></i>new Admin</a>
                </li>  
                @endauth
                <li class="nav-item">
                    <a class="nav-link"href="{{ route('admin.pendingProperties') }}"><i class="fas fa-building nav-icon"></i>Pending Properties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"href="{{ route('admin.approvedProperties') }}"><i class="fas fa-building nav-icon"></i>Approved Properties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.wanted') }}"><i class="fas fa-list nav-icon"></i>Wanted List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.homebanner') }}"><i class="fas fa-image nav-icon"></i>Banner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.newNews') }}"><i class="fas fa-image nav-icon"></i>Add news</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.adminNews') }}"><i class="fas fa-image nav-icon"></i>All news</a>
                </li>
            </ul>
        </div>
    </nav>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-modern');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
