<?php
   include('../include/conn.php');
   ?>
   <!DOCTYPE html>
<html>
<head>
    <title>Search for Element by ID</title>
</head>
<body>
    <form method="post">
        <label for="search_id">Enter ID to search:</label>
        <input type="text" name="search_id" id="search_id">
        <button type="submit">Search</button>
    </form>

    <?php
    if (isset($_POST['search_id'])) {
        $search_id = $_POST['search_id'];
        $found = false;

        // Search for element with matching ID
        $elements = get_page_elements();
        foreach ($elements as $element) {
            if ($element->getAttribute('id') === $search_id) {
                echo "Found element with ID '{$search_id}'";
                $found = true;
                break;
            }
        }

        if (!$found) {
            echo "No element found with ID '{$search_id}'";
        }
    }

    function get_page_elements() {
        // Create DOMDocument object from current page
        $doc = new DOMDocument();
        $doc->loadHTML(file_get_contents('http://localhost/mypage.php'));

        // Get all elements in the body of the page
        $body = $doc->getElementsByTagName('body')->item(0);
        $elements = $body->childNodes;

        return $elements;
    }
    ?>
</body>
</html>
