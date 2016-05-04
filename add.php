<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Blog</title>
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
                    <li><a href="blog.html">All Blog Items</a></li>
                    <li><a href="blog.html">Work Items</a></li>
                    <li><a href="blog.html">University Items</a></li>
                    <li><a href="blog.html">Family Items</a></li>
                    <li><a href="add.html">Insert a Blog Item</a></li>
                </ul>

            </nav>
            </header>

        <div id="main-section">
        <div class="grid-66" id="margin-auto">
            <h1>Add Blog Item</h1>
            <section class="container" id="contentLeft">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
            <form>
            <label id="label-margin">Entry Title:</label> <input type="text" name="entry_title" required><br />
                <label id="label-margin">Entry Summary:</label> <textarea name="entry_summary" required></textarea><br />
                <label id="label-margin">Category:</label>
                <select name="entry_category" required="required">
                    <option value="" >Select Category</option>
                <option value="Work">Work</option>
                <option value="University">University</option>
                <option value="Family">Family</option>

            </select><br/>
                <label id="label-margin">Submitted By:</label> <input type="text" name="entry_title"><br />
                <input type="submit" name="submit" value="submit">

            </form>
                <?php }
                elseif ($_SERVER[REQUEST_METHOD] === 'POST') {

                    $entryTitle = $_GET['entryTitle'];
                    $entrySummary = $_GET['entrySummary'];
                    $category = $_GET['category'];
                    $submitter = $_GET['submitter'];
                }

                define ('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
                define ('DB_USERNAME', 'b9b4f1f2913587');
                define ('DB_PASSWORD', '81a7c479');
                define ('DB_DATABASE','acsm_3a7bd64b8322cf2');
                $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }

                else{

                    $sql = "INSERT INTO blogView (entryTitle,entrySummary,category,submitter)
                VALUES ($entryTitle,$entrySummary,$category,$submitter)";

                    echo "New blog article added successfully";

                }

                $conn->close();

                Header("Location: blog.php");

                else {
                    Header("Location: index.php");
                }
                ?>
            </section>
        </div>




        </div>



    </div>
    <footer>Designed by Leigh McKenna, 2016</footer>
</main>
</body>
</html>
