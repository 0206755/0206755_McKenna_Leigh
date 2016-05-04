<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
<main>


    <div class="grid-container" id="no-padding">
        <header>

            <h1>myBlog</h1>
            <h2>because the internet needs to know what I think</h2>
            <nav>
                <ul>
                    <li><a href="blog.php">All Blog Items</a></li>
                    <li><a href="blog.php">Work Items</a></li>
                    <li><a href="blog.php">University Items</a></li>
                    <li><a href="blog.php">Family Items</a></li>
                    <li><a href="add.php">Insert a Blog Item</a></li>
                </ul>

            </nav>
            </header>

        <div id="main-section">
        <div class="grid-66">
            <section class="container blog-item" id="contentLeft">
            <article>
                include("connect2DB.php");
                $sql = "SELECT * from blogView'";

                $result = mysqli_query($db, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


                // keeps getting the next row until there are no more to get
                while($row = mysqli_fetch_array( $result )) {
                // Print out the contents of each row into a table
                echo "<p>";
                    echo $row['entryTitle'];
                    echo "<br /><br />";
                    echo $row['entrySummary'];
                    echo "<br /><br />";
                    echo $row['category'];
                    echo "<br /><br />";
                    echo $row['submitter'];

                    echo "</p>";
                }


            </article>
            </section>
        </div>


        <div class="grid-33">
            <aside id="contentRight">
                <img src="images/blog.png" class="blogFoto" alt="myBlog" title="myBlog">
            </aside>
        </div>

        </div>



    </div>
    <footer>Designed by Leigh McKenna, 2016</footer>
</main>
</body>
</html>
