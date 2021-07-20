<?php
/*
   Copyright 2021 Hiew Jun Ian

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/
// download!
if (isset($_GET['id'])){
    $vidid = $_GET['id'];
    $file_name = $vidid . '.mp4';
    $file_url = 'https://subrock.rocks/dynamic/videos/' . $file_name;
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary"); 
    header("Content-disposition: attachment; filename=\"".$file_name."\""); 
    readfile($file_url);
    exit;

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ian's SubRocks Downloader</title>
    </head>
    <body class="body">
        <div class="titleholder">
            <h3>SubRocks Downloader</h3>
        </div>
        <div class="descriptionholder">
            <p class="description">SubRocks Video Downloader. Saves video files directly to your computer!</p>
            <p class="description">Made with PHP. Source code on <a href="https://github.com/pixdoet/srdl">Github</a>.</p>
        </div>
        <div class="formholder">
            <form class="postform" method="get" action="index.php">
                <label class="idinputlabel">Paste video id (eg: subrock.rocks/watch?v=</b>53vucjYN_49</b></label>
                <input class="idinput" type="text" name="id">
                <input type="submit" value="Download!" name="submit">
            </form>
        </div>
    </body>
</html>
