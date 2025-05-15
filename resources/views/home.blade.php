<!DOCTYPE html>
<html>
<head>
    <title>Voting System - Home</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Background with overlay */
        .hero {
            background: url('https://t3.ftcdn.net/jpg/05/27/14/72/360_F_527147254_oly8dgVuBi0KAY0KM96sxVdtaQw16jpM.jpg') no-repeat center center/cover;
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Move content towards top */
            color: #fff;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .content {
            position: relative;
            text-align: center;
            z-index: 1;
            margin-top: 20vh; /* Adjust how high you want (20vh = 20% from top) */
        }

        h1 {
            font-size: 3.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.5);
        }

        p {
            font-size: 1.2em;
            margin-bottom: 30px;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
        }

        .btn {
            padding: 12px 30px;
            background-color: #ff5722;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 1em;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: #e64a19;
            transform: scale(1.05);
        }

    </style>
</head>
<body>

    <div class="hero">
        <div class="overlay"></div>
        <div class="content">
            <h1>Welcome to the Voting System</h1>
            <p>Make your voice count. Cast your vote now!</p>
            <a href="{{ route('vote') }}" class="btn">Go to Vote</a>
        </div>
    </div>

</body>
</html>
