<?php 
    require_once "header.php";
?>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="error-txt">This is a error message</div>
                
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your Password" required>
                    <!-- <i class="fas fa-eye"></i> -->
                </div>
                <div class="field button">
                    <input type="submit"  value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
    </div>
    <script src="javascript/login.js"></script>
</body>
</html>