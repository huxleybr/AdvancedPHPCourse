<?php

class FileExampleModel {

    public function showTextFile($fileName) {
        //validate
        if (empty($fileName)) {
            echo "<p style='color:red'><b>File name cannot be empty</b></p>";

            return "";
        }

        //directory
        // $fileName = $_SERVER["DOCUMENT_ROOT"] . "/Day4/view/Files/" . $fileName;
        $fileName = htmlspecialchars(getcwd() . "/Files/" . $fileName);

        if (!file_exists($fileName)) {
            echo "<p style='color:red'><b>File does not exist</b></p>";

            return "";
        } else {
            //open the file
            $handle = fopen($fileName, "r") or die("Cannot open the file");

            $content = "";

            //get the content
            while (!feof($handle)) {
                $content .= fgets($handle);
            }

            //close the file
            fclose($handle);

            return $content;
        }
    }

    public function saveFile($fileName, $content) {
        //validate
        if (empty($fileName)) {
            return "<p style='color:red'><b>File name cannot be empty</b></p>";
        } else if (empty($content)) {
            return "<p style='color:red'><b>Content cannot be empty</b></p>";
        } else {
            //save the file
            //directory
            // $fileName = $_SERVER["DOCUMENT_ROOT"] . "/Day4/view/Files/" . $fileName;
            $fileName = getcwd() . "/Files/" . $fileName;

            //security check
            $fileName = htmlspecialchars($fileName);

            //open the file
            $handle = fopen($fileName, "w") or die("Cannot open the file");

            //write the content
            fwrite($handle, $content);

            //close the file
            fclose($handle);

            return "<p style='color:green'><b>File saved successfully</b></p>";
        }
    }

    public function deleteFile($fileName) {
        //validate
        if (empty($fileName)) {
            return "<p style='color:red'><b>File name cannot be empty</b></p>";
        } else {
            //directory
            // $fileName = $_SERVER["DOCUMENT_ROOT"] . "/Day4/view/Files/" . $fileName;
            $fileName = getcwd() . "/Files/" . $fileName;

            //security check
            $fileName = htmlspecialchars($fileName);

            //delete the file
            unlink($fileName);

            return "<p style='color:green'><b>File deleted successfully</b></p>";
        }
    }

    public function showXMLFile($fileName) {
        //validate
        if (empty($fileName)) {
            echo "<p style='color:red'><b>File name cannot be empty</b></p>";

            return "";
        }

        //directory
        // $fileName = $_SERVER["DOCUMENT_ROOT"] . "/Day4/view/Files/" . $fileName;
        $fileName = getcwd() . "/Files/" . $fileName;

        //security check
        $fileName = htmlspecialchars($fileName);

        if (!file_exists($fileName)) {
            echo "<p style='color:red'><b>File does not exist</b></p>";

            return "";
        } else {
            //display the xml file
            $xml = simplexml_load_file($fileName);

            //var_dump($xml);

            echo "Note.xml result";
            echo "<p>To: " . $xml->to . "</p>";
            echo "<p>From: " . $xml->from . "</p>";
            echo "<p>Heading: " . $xml->heading . "</p>";
            echo "<p>Body: " . $xml->body . "</p>";


            echo "Exercise: Display book.xml result";
            echo "<p>Firstname: " . $xml->author->firstname . "</p>";
            echo "<p>Lastname: " . $xml->author->lastname . "</p>";
            echo "<p>Title: " . $xml->title . "</p>";
            echo "<p>Chapter number: " . $xml->chapter["number"] . "</p>";
            echo "<p>Chapter title: " . $xml->chapter->chaptitle . "</p>";
            echo "<p>Chapter content: " . $xml->chapter->p[0] . "</p>";
            echo "<p>Chapter content: " . $xml->chapter->p[1] . "</p>";

            return "";
        }
    }

}
