<?php


?>
<h2>$_SERVER</h2>
<style>
    table {
        border-collapse: collapse;
    }
    td, th{
        border: 1px solid black;
        padding: 5px;
    }
</style>
<table>
    <tr>
        <th>$_SERVER["PHP_SELF"]</th>
        <td>
            <?php echo $_SERVER["PHP_SELF"]; ?>
        </td>
    </tr>
    <tr>
        <th>$_SERVER["SCRIPT_NAME"]</th>
        <td>
            <?php echo $_SERVER["SCRIPT_NAME"]; ?>
        </td>
    </tr>
    <tr>
        <th>$_SERVER["DOCUMENT_ROOT"]</th>
        <td>
            <?php echo $_SERVER["DOCUMENT_ROOT"]; ?>
        </td>
    </tr>
    <tr>
        <th>$_SERVER["HTTP_HOST"]</th>
        <td>
            <?php echo $_SERVER["HTTP_HOST"]; ?>
        </td>
    </tr>
    <tr>
        <th>$_SERVER["HTTP_USER_AGENT"]</th>
        <td>
            <?php echo $_SERVER["HTTP_USER_AGENT"]; ?>
        </td>
    </tr>
    <tr>
        <th>$_SERVER["SCRIPT_FILENAME"]</th>
        <td>
            <?php echo $_SERVER["SCRIPT_FILENAME"]; ?>
        </td>
    </tr>
    <tr>
        <th>$_SERVER["SERVER_NAME"]</th>
        <td>
            <?php echo $_SERVER["SERVER_NAME"]; ?>
        </td>
    </tr>
    <tr>
        <th>$_SERVER["SERVER_PORT"]</th>
        <td>
            <?php echo $_SERVER["SERVER_PORT"]; ?>
        </td>
    </tr>
    <tr>
        <th>$_SERVER["SERVER_SOFTWARE"]</th>
        <td>
            <?php print_r($_SERVER["SERVER_SOFTWARE"]); ?>
        </td>
    </tr>
    <tr>
        <th>$_SERVER["SERVER_PROTOCOL"]</th>
        <td>
            <?php echo $_SERVER["SERVER_PROTOCOL"]; ?>
        </td>
    <tr>
        <th>$_SERVER["REMOTE_ADDR"]</th>
        <td>
            <?php echo $_SERVER["REMOTE_ADDR"]; ?>
        </td>
    </tr>
    <tr>
        <th>$_SERVER["REMOTE_PORT"]</th>
        <td>
            <?php echo $_SERVER["REMOTE_PORT"]; ?>
        </td>
    </tr>
    <tr>
        <th>$_SERVER["REQUEST_METHOD"]</th>
        <td>
            <?php echo $_SERVER["REQUEST_METHOD"]; ?>
        </td>
    </tr>
    <tr>
        <th>$_SERVER["QUERY_STRING"]</th>
        <td>
            <?php if ($_SERVER["QUERY_STRING"]) {
                print_r($_SERVER["QUERY_STRING"]);
            } ?>
        </td>
    </tr>
    <tr>
        <th>$_SERVER["REQUEST_URI"]</th>
        <td>
            <?php echo $_SERVER["REQUEST_URI"]; ?>
        </td>
    </tr>
</table>