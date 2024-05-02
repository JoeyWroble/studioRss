<?php /* Template Name: joeytest */ ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

get_header();

// Function to handle form submission
function handle_form_submission() {
    // Get the form data
    $episodeTitle = isset($_POST['episodeTitle']) ? $_POST['episodeTitle'] : '';
    $author = isset($_POST['author']) ? $_POST['author'] : '';
    $episodeDescription = isset($_POST['episodeDescription']) ? $_POST['episodeDescription'] : '';
    $series = isset($_POST['series']) ? $_POST['series'] : '';
    $podcastFile = isset($_FILES['podcastFile']) ? $_FILES['podcastFile'] : null;
    $coverImage = isset($_FILES['coverImage']) ? $_FILES['coverImage'] : null;
    $duration = isset($_POST['duration']) ? $_POST['duration'] : '';
    
    // Podcast form data
    $podcastTitle = isset($_POST['podcastTitle']) ? $_POST['podcastTitle'] : '';
    $podcastAuthor = isset($_POST['podcastAuthor']) ? $_POST['podcastAuthor'] : '';
    $podcastImage = isset($_FILES['podcastImage']) ? $_FILES['podcastImage'] : null;
    $podcastDescription = isset($_POST['podcastDescription']) ? $_POST['podcastDescription'] : '';


    // Create the upload directory if it doesn't exist
    $upload_dir = wp_upload_dir();
    $podcast_upload_dir = $upload_dir['basedir'] . '/podcast_uploads';
    if (!is_dir($podcast_upload_dir)) {
        mkdir($podcast_upload_dir, 0755, true);
    }

    // Handle cover image upload
    if ($coverImage && $coverImage['error'] === UPLOAD_ERR_OK) {
        $coverImagePath = handle_file_upload($coverImage, $podcast_upload_dir);
    } else {
        $coverImagePath = '';
    }

    // Handle podcast file upload
    if ($podcastFile && $podcastFile['error'] === UPLOAD_ERR_OK) {
        $podcastFilePath = handle_file_upload($podcastFile, $podcast_upload_dir);
    } else {
        $podcastFilePath = '';
    }

    // Handle cover image upload
    if ($podcastImage && $podcastImage['error'] === UPLOAD_ERR_OK) {
        $podcastImagePath = handle_file_upload($podcastImage, $podcast_upload_dir);
    } else {
        $podcastImagePath = '';
    }

    // Create the RSS XML
    $rssXml = generateRssXml($episodeTitle, $author, $episodeDescription, $podcastFilePath, $coverImagePath, $duration, $series);

    // Save the RSS XML to a file
    $rss_file_path = $podcast_upload_dir . '/rss_feed4.xml';
    // $rss_file_path = $podcast_upload_dir . '/'.$podcastTitle.'.xml';


    // If file does not exist it adds top template to top of XML file
    if (!file_exists($rss_file_path)) {
        $rssTemplateTop = topOfRss($podcastTitle, $podcastAuthor, $podcastDescription, $podcastImagePath);
        file_put_contents($rss_file_path, $rssTemplateTop);
    }

    // Appends RSS template to file
    file_put_contents($rss_file_path, $rssXml, FILE_APPEND);

    // To add closing tags
    $file_content = file_get_contents($rss_file_path);
    $closing_tags = "</channel> </rss>";

    // Check if the closing tags are present in the file content
    if (strpos($file_content, $closing_tags) !== false) {
        // If present, remove the closing tags from the file content
        $file_content = str_replace($closing_tags, '', $file_content);
    }
    // Append the closing tags to the end of the file content
    $file_content .= $closing_tags;

    // Write the updated content back to the file
    file_put_contents($rss_file_path, $file_content);

    
    
    if (is_dir($podcast_upload_dir)) {
    if ($dh = opendir($podcast_upload_dir)) {
        while (($file = readdir($dh)) !== false) {
            echo "filename: .".$file."<br />";
        }
        closedir($dh);
    }
}
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    handle_form_submission();
}


?>
<!-- Form for podcast submission -->
<div style="display: flex;">
    <div style="flex: 1;">
        <h4>Podcast Information</h4>
        <form id="podcastFormHead" method="post" style="block" enctype="multipart/form-data">
            <div id="form" class="right-aligned">
                <label for="podcastTitle">Title:</label><br>
                <input type="text" id="podcastTitle" name="podcastTitle" ><br><br>
    
                <label for="podcastAuthor">Author:</label><br>
                <input type="text" id="podcastAuthor" name="podcastAuthor" ><br><br>

                <label for="podcastDescription">Description:</label><br>
                <input type="text" id="podcastDescription" name="podcastDescription" ><br><br>

                <label for="podcastImage">Cover Image File:</label><br>
                <input type="file" class="center" id="podcastImage" name="podcastImage" accept="image/png, image/jpg" ><br><br>

                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <!-- Form for episode submission -->
    <div style="flex: 1;">
        <h4>Episode Information</h4>
        <form id="podcastForm" method="post" enctype="multipart/form-data">
            <div id="form" class="left-aligned">
                <label for="episodeTitle">Title:</label><br>
                <input type="text" id="episodeTitle" name="episodeTitle" ><br><br>

                <label for="series">Series:</label><br>
                <input type="text" id="series" name="series" ><br><br>

                <label for="summary">Description:</label><br>
                <input type="text" id="episodeDescription" name="episodeDescription" ><br><br>

                <label for="author">Author:</label><br>
                <input type="text" id="author" name="author" ><br><br>

                <label for="podcastFile">Audio File:</label><br>
                <input type="file" class="center" id="podcastFile" name="podcastFile" accept=".mp3" required><br><br>

                <label for="coverImage">Cover Image File:</label><br>
                <input type="file" class="center" id="coverImage" name="coverImage" accept="image/png, image/jpg" ><br><br>

                <input type="hidden" id="duration" name="duration" value="">
                <input type="hidden" id="podcastTitle" name="podcastTitle" >


                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>



<script>


    // Function to handle file selection and get duration
    document.getElementById('podcastForm').addEventListener('submit', function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Get the selected file
        var file = document.getElementById('podcastFile').files[0];

        // Create a file reader object
        var reader = new FileReader();

        // When the file reader loads, set the src of the audio element
        reader.onload = function(event) {
            var audioSrc = event.target.result;
            var audio = new Audio(audioSrc);

            // Wait for the metadata to load 
            audio.addEventListener('loadedmetadata', function() {
                // Access the duration of the audio file 
                var duration = audio.duration;

                // Set the duration value in the hidden input field
                document.getElementById('duration').value = duration;

                // Submit the form
                document.getElementById('podcastForm').submit();
            });
        };

        // Read the file as a data URL
        reader.readAsDataURL(file);
    
    });
</script>

<?php

function handle_file_upload($file, $upload_dir) {
    // Move the uploaded file to the upload directory
    $file_name = basename($file['name']);
    $file_path = $upload_dir . '/' . $file_name;
    if (move_uploaded_file($file['tmp_name'], $file_path)) {
        return $file_path;
    } else {
        return '';
    }
}

// Generates XML template for whole podcast
function topOfRss($podcastTitle, $podcastAuthor, $podcastDescription, $podcastImagePath){
    $podcastImagePathFinal = "https://" . $_SERVER['SERVER_NAME'] . "/ethan_sixties/wp-content/uploads/podcast_uploads/" . basename($podcastImagePath);
    $rssTemplateTop = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd">
    <channel>
        <title>{$podcastTitle}</title>
        <author>{$podcastAuthor}</author>
        <description>{$podcastDescription}</description>
        <image>
            <url>{$podcastImagePathFinal}</url>
        </image>    
XML;

return $rssTemplateTop;

}

// Generates XML template for each episode
function generateRssXml($episodeTitle, $author, $episodeDescription, $podcastFilePath, $coverImagePath, $duration, $series) {
    $guid = md5(uniqid());
    $currentDate = gmdate('D, d M Y H:i:s T');
    $podcastFileLink = "https://" . $_SERVER['SERVER_NAME'] . "/ethan_sixties/wp-content/uploads/podcast_uploads/" . basename($podcastFilePath);
    $podcastCoverLink = "https://" . $_SERVER['SERVER_NAME'] . "/ethan_sixties/wp-content/uploads/podcast_uploads/" . basename($coverImagePath);
    $rssTemplate = <<<XML
        <item>
            <title>{$episodeTitle}</title>
            <series>{$series}</series>
            <description>{$episodeDescription}</description>
            <author>{$author}</author>
            <enclosure url="{$podcastFileLink}" type="audio/mpeg" />
            <duration>{$duration}</duration>
            <image href="{$podcastCoverLink}" />
            <pubDate>{$currentDate}</pubDate>
            <guid>{$guid}</guid>
        </item>
XML;

    return $rssTemplate;
}
?>
