<div class="box">
            <h4>Hello, <?php echo $_SESSION['userdata']['firstname']; ?></h4><br>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_SESSION['userdata']['firstname']; ?>'s Menu
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="/profile.php">My Profile</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Reservations</li>
                    <li><a href="/makeAReservation.php"><strong>Make a Reservation</strong></a></li>
                    <li><a href="#">View Reservations History</a></li>
                </ul>
            </div>
        </div>