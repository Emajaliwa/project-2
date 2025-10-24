<?php
require_once('settings.php');
?>


<?php include('inc/header.inc'); ?>

<body>
    <!-- top nav bar -->
    <?php include('inc/topNav.inc'); ?>

    <!--Navigation bar-->
    <?php include('inc/nav.inc'); ?>

    <main>
        <section class="about-us">
            <!-- team name and group details -->
            <?php include('inc/about/teamDetails.inc'); ?>

            <h3 class="about-us-title2">Member Contributions</h3>
            <dl>
                <?php
                
                // Fetch all members from the about table
                $query = "SELECT member_name, contribution FROM about";
                $result = mysqli_query($conn, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $name = $row['member_name'];
                        $contribution = $row['contribution'];
                        echo "<dt><strong>$name</strong></dt>";
                        echo "<dd>contribution: $contribution</dd>";
                        echo "<dd><em>\"\"</em></dd>"; // 
                    }
                } else {
                    echo "<dd>No member contributions found.</dd>";
                }
                ?>
            </dl>


            <?php include('inc/about/facts.inc'); ?>


        </section>

        <?php include('inc/about/id.inc'); ?>


    </main>



    <?php include('inc/footer.inc'); ?>



</body>


</html>