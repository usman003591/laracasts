<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pathology Report</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        @page {
            size: A4;
            margin: 0;
        }

        .bg-img {
            position: fixed;
            right: 70;
            bottom: 50px;
            width: 80%;
            height: 80%;
            background-image: url("{{ public_path('logo_without_background_1.png') }}");
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.1;
            z-index: -1;
        }

        .content {
            position: relative;
            z-index: 1;
            /* padding: 30px; */
            margin: 50px;
            border: 1px solid rgb(216, 215, 215);
            height: 90%;
        }

        .header {
            padding: 10px 0px;
            margin: 0px 0px 0px 10px;
            /* background-color: cyan; */
            width: 42rem;
        }

        .red-line {
            background-color: #B40505;
            padding: 4px 0px;
            width: 100%;
        }

        .header td{
            vertical-align: bottom;
        }

        .header-text{
            opacity: 0.8;
            padding: 0 0 5px 5px;
        }
    </style>
</head>

<body>
    <div class="bg-img"></div>
    <div class="content">
        <table class="header">
            <tr>
                <td>
                    <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('logo_without_background_1.png')))}}"
                        alt="HIMS" width="60">
                </td>
                <td class="header-text">
                    <h3>Smart City <br>Healthcare System</h3>
                </td>
                <td width="80"></td>
                <td class="header-text" width="200">
                    <small>Health Directorate, Lake View Heights, Overseas East Sector-C, <br> Capital Smart City, Islamabad</small>
                </td>
            </tr>
        </table>
        <div class="red-line"></div>
    </div>
</body>

</html>
