<?php

function get_user_browser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $ub = '';
    if(preg_match('/Firefox/i',$u_agent))
    {
        $ub = "firefox";
    }
    else
    {
        $ub = "other";
    }

} 

if (isset($_GET['print']) && $_GET['print'] != "" && $ub = 'firefox') 
{
    $pg = $_GET['print'];
    if (!file_exists('1')) 
    {
        echo '<b>It worked!</b>';
    }
}
else 
{
    echo '';
}

?>
<body>
    <header>
        <ul>
            <li>Home<sup>&copy;</sup><span class="super">&copy;</span>
            </li>
            <li>Login</li>
            <li>About</li>
        </ul>
    </header>
    <!--Block-level element: div, p; inline-level like img, p-->
    <script>
        /*
                    document.getElementById("submit").addEventListener("click", function () {
                var x = document.getElementById("flagyeah").value;
                var arr = ['KPR', '1Z_', 'HERE', 'FUN', '_N0T', '{D30BSC_'];
                if (x == arr[0] + arr[5] + arr[1] + arr[3] + '}') {
                    alert("Yes it is a correct flag! Submit it now. flag: " + arr[0] + arr[5] + arr[1] + arr[3] + '}');
                }
            });
        */

        var bb66 = "/9j/redacted/redacted/4QjdaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49J++7vycgaWQ9J1c1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCc/Pg0KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyI+PHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIi8+PC94OnhtcG1ldGE+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgIDw/eHBhY2tldCBlbmQ9J3cnPz7/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCAAYAGADASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAg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";
    </script>
    <!--Hi! First flag here:) redacted-->
    <!--redacted{redacted}-->
    <div class="container" id="cont2">
        <label> Enter the flag:
            <input type="text" id="flagyeah">
        </label>
        <input type="submit" id="submit">
    </div>

</body>
