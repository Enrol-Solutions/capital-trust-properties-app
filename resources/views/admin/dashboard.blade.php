<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTP | Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa, #e3f2fd);
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .card-section {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1200px;
            width: 100%;
        }

        .dashboard-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease;
            cursor: pointer;
            height: 280px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .dashboard-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .card-header {
            font-size: 24px;
            font-weight: bold;
            margin: 15px 0;

        }

        .icon {
            font-size: 50px;
            color: #1fb934;
            margin-bottom: 10px;
        }

        .count {
            font-size: 48px;
            font-weight: bold;
            animation: countAnimation 2s ease-in-out forwards;
            color: #1fb934;
        }

        @keyframes countAnimation {
            from {
                opacity: 0;
                transform: scale(0.5);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-body p {
            font-size: 14px;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    @include('partials.nav')
    <div class="card-section">

        <div class="dashboard-card">
            <div class="card-header">
                <i class="fas fa-home icon"></i>
                <span>Total Properties</span>
            </div>
            <div class="card-body">
                <div class="count">{{$property}}</div>
                <p>Properties currently available in the System.</p>
            </div>
        </div>


        <div class="dashboard-card">
            <div class="card-header">
                <i class="fas fa-users icon"></i>
                <span>Total Admins</span>
            </div>
            <div class="card-body">
                <div class="count">{{$admins}}</div>
                <p>Total Admin in the system.</p>
            </div>
        </div>


        <div class="dashboard-card">
            <div class="card-header">
                <i class="fas fa-list icon"></i>
                <span>Total Wanted</span>
            </div>
            <div class="card-body">
                <div class="count">{{$wanted}}</div>
                <p>Configuration settings available for the application.</p>
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>