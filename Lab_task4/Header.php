<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<header>
    <div style="text-align: right;margin: 30px 30px;
	padding-bottom: 60px">
        <div style="display: flex;
	float: right;">
            Logged in as &nbsp; <a href=""> <?php echo $uname; ?></a> &nbsp;|&nbsp; <a href="logout.php">Logout</a>
        </div>
    </div>
    </header>
    <hr>
    <main style="display: flex;">
        <section style="width: 30%;
	float: left;
	padding-left: 35px;
	padding-right: 35px;
	border-right: 1.5px solid black;">
            <h4>Account</h4>
            <hr>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="view.php">View Profile</a></li>
                <li><a href="editprofile.php">Edit Profile</a></li>
                <li><a href="changeprofile.php">Change Profile Picture</a></li>
                <li><a href="changepassword.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </section>

</body>
</html>