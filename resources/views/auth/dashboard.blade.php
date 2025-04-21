<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f8fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .dashboard-container {
            max-width: 900px;
            margin: 60px auto;
            padding: 20px;
        }

        .profile-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            text-align: center;
        }

        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .stats, .notifications, .posts {
            background: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }

        .btn-twitter {
            background-color: #1da1f2;
            color: white;
            border-radius: 999px;
            font-weight: bold;
            padding: 10px 24px;
            margin-top: 15px;
        }

        .btn-twitter:hover {
            background-color: #1991da;
        }

        .stat-box {
            text-align: center;
        }

        .stat-box h3 {
            font-size: 22px;
            margin-bottom: 0;
        }

        .stat-box p {
            color: #657786;
            margin: 0;
        }

        .post-item {
            border-bottom: 1px solid #e6ecf0;
            padding: 10px 0;
        }

        .post-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>

<div class="dashboard-container">

    <!-- Profile Card -->
    <div class="profile-card">
        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="User">
        <h2>{{ auth()->user()->name }}</h2>
        <p>{{ auth()->user()->email }}</p>
        <form method="POST" action="{{ url('/logout') }}">
            @csrf
            <button type="submit" class="btn btn-twitter">Logout</button>
        </form>
    </div>

    <!-- Stats -->
    <div class="row stats">
        <div class="col-md-4 stat-box">
            <h3>1,204</h3>
            <p>Followers</p>
        </div>
        <div class="col-md-4 stat-box">
            <h3>325</h3>
            <p>Following</p>
        </div>
        <div class="col-md-4 stat-box">
            <h3>58</h3>
            <p>Tweets</p>
        </div>
    </div>

    <!-- Notifications -->
    <div class="notifications">
        <h5><i class="bi bi-bell-fill"></i> Notifications</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Jepss followed you</li>
            <li class="list-group-item">New message from Jepss</li>
            <li class="list-group-item">Jepss mentioned you in a post</li>
        </ul>
    </div>

    <!-- Posts -->
    <div class="posts">
        <h5><i class="bi bi-file-binary-fill"></i> Recent Posts</h5>
        <div class="post-item">
            <strong>{{ auth()->user()->name }}</strong>: Eheeyy!
        </div>
        <div class="post-item">
            <strong>{{ auth()->user()->name }}</strong>: Bagangg
        </div>
        <div class="post-item">
            <strong>{{ auth()->user()->name }}</strong>: Hi sir!
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
