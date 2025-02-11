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
            bottom: 0;
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
            margin: 30px 30px 10px 30px;
            /* border: 1px solid rgb(216, 215, 215); */
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

        .header td {
            vertical-align: bottom;
        }

        .header-text {
            opacity: 0.8;
            padding: 0 0 5px 5px;
        }

        .tables-section {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 1px solid rgb(216, 215, 215);
            /* background-color: wheat; */
            table-layout: fixed;
            height: 15%;
            padding-bottom: 10px;
        }

        .tab-sec-col {
            width: 30%;
            vertical-align: top;
        }

        .column-table {
            width: 100%;
            /* margin: 10px; */
            padding: 10px;
            border-collapse: collapse;
            /* background-color: yellow; */

        }

        .column-table td,
        .column-table th {
            padding: 5px;
            vertical-align: bottom;
            /* border: 1px solid black; */
        }

        .tab-1 td {
            padding: 0;
        }

        .mid-sec{
            padding-left: 30px;
            padding-top: 5px;
            padding-right: 30px;
            /* background-color: yellowgreen; */
            height: 93%;
            border-left: 1px solid rgb(216, 215, 215);
            border-right: 1px solid rgb(216, 215, 215);
        }

        .right-sec{
            text-align: right;
            padding-right: 10px;
            padding-top: 5px;
            /* background-color: yellowgreen; */
            height: 93%;
        }

        .right-sec-components{
            padding-bottom: 9px;
        }

        .qr-code {
            text-align: center;
            /* padding-top: 5px; */
            vertical-align: middle;
        }

        .qr-code img {
            height: 90px;
            width: auto;
            padding-left: 5px;
        }

        .report-details {
            width: 100%;
            font-size: 12pt;
            padding: 5px 10px 20px 10px;
            border-bottom: 1px solid rgb(216, 215, 215);
        }

        .report-details th,
        td {
            text-align: left;
            padding: 5px 0px;
        }

        #cbc {
            text-align: center;
            font-size: larger;
            padding: 10px 0px;
        }

        #main-cols {
            font-size: large
        }

        .footer-line {
            width: 100%;
            border-collapse: collapse;
            background-color: #0d47a1;
            margin-top: auto;
            margin-bottom: 0;
        }

        .left-side {
            /* background-color: #e91e63; */
            color: white;
            padding: 18px 30px;
            font-family: Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
            text-align: left;
            width: 60%;
        }

        .right-side {
            color: white;
            padding: 18px 30px;
            font-family: Arial, sans-serif;
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            width: 40%;
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
                    <small>Health Directorate, Lake View Heights, Overseas East Sector-C, Capital Smart City,
                        Islamabad</small>
                </td>
            </tr>
        </table>
        <div class="red-line"></div>
        <div class="tables-section">
            <table>
                <tr>
                    <td class="tab-sec-col">
                        <div class="column-table tab-1">
                            <table>
                                <tr>
                                    <th style="padding-left: 0; text-align: left; font-size: large;" colspan="2">John Doe</th>
                                </tr>
                                <tr>
                                    <td>Age: 21 Years</td>
                                    <td class="qr-code" rowspan="3">
                                        <img src="{{ public_path('/QR_code.png') }}" alt="QR Code">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sex: Male</td>
                                </tr>
                                <tr>
                                    <td>PID: 555</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td class="tab-sec-col" style="width: 40%;">
                        <div class="mid-sec">
                                <h4>Sample Collected At: </h4>
                                <div style="height: 65%; padding-top: 5px;">
                                    <p>Health Directorate, Lake View Heights, Overseas East Sector, Capital Smart City, Islamabad</p>
                                </div>
                                <div>
                                    <p>Ref. By: <strong>Dr. Hiren Shah</strong></p>
                                </div>
                        </div>
                    </td>
                    <td class="tab-sec-col" style="width: 25%;">
                        <div class="right-sec">
                            <div class="right-sec-components">
                                <h4>Registered on: </h4>
                                <p>02:31 PM 02 Dec, 21</p>
                            </div>
                            <div class="right-sec-components">
                                <h4>Collected on: </h4>
                                <p>02:31 PM 02 Dec, 21</p>
                            </div>
                            <div class="right-sec-components">
                                <h4>Reported on:</h4>
                                <p>02:31 PM 02 Dec, 21</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <table class="report-details">
            <thead>
                <tr>
                    <th colspan="4" id="cbc">Complete Blood Count (CBC)</th>
                </tr>
            </thead>
            <tbody>
                <tr id="main-cols">
                    <th>Investigation</th>
                    <th>Result</th>
                    <th>Ref. Value</th>
                    <th>Unit</th>
                </tr>
                <tr>
                    <td>Primary Sample Type:</td>
                    <td>Blood</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th colspan="4">HEMOGLOBIN</th>
                </tr>
                <tr>
                    <td>Hemoglobin (Hb)</td>
                    <td>12.5</td>
                    <td>13.0-17.0</td>
                    <td>g/dL</td>
                </tr>
                <tr>
                    <th colspan="4">RBC COUNT</th>
                </tr>
                <tr>
                    <td>Total RBC Count</td>
                    <td>5.2</td>
                    <td>4.5-5.5</td>
                    <td>mill/cumm</td>
                </tr>
                <tr>
                    <th colspan="4">BLOOD INDICES</th>
                </tr>
                <tr>
                    <td>Packed Cell Volume (PCV)</td>
                    <td>37.5</td>
                    <td>40-50</td>
                    <td>%</td>
                </tr>
                <tr>
                    <td>Mean Corpuscular Volume</td>
                    <td>72.12</td>
                    <td>50-62</td>
                    <td>%</td>
                </tr>
                <tr>
                    <td>RDW</td>
                    <td>13.6</td>
                    <td>11.6-14.0</td>
                    <td>%</td>
                </tr>
                <tr>
                    <th colspan="4">WBC COUNT</th>
                </tr>
                <tr>
                    <td>Total WBC Count</td>
                    <td>9000</td>
                    <td>4000-11000</td>
                    <td>cumm</td>
                </tr>
                <tr>
                    <th colspan="4">DIFFERENTIAL WBC COUNT</th>
                </tr>
                <tr>
                    <td>Neutrophils</td>
                    <td>60</td>
                    <td>50-62</td>
                    <td>%</td>
                </tr>
                <tr>
                    <td>Lymphocytes</td>
                    <td>31</td>
                    <td>20-40</td>
                    <td>%</td>
                </tr>
                <tr>
                    <td>Eosinophils</td>
                    <td>1</td>
                    <td>00-06</td>
                    <td>%</td>
                </tr>
                <tr>
                    <td>Monocytes</td>
                    <td>7</td>
                    <td>00-10</td>
                    <td>%</td>
                </tr>
                <tr>
                    <td>Basophils</td>
                    <td>1</td>
                    <td>00-02</td>
                    <td>%</td>
                </tr>
                <tr>
                    <th colspan="4">PLATELET COUNT</th>
                </tr>
                <tr>
                    <td>Platelet Count</td>
                    <td>320000</td>
                    <td>150000-410000</td>
                    <td>cumm</td>
                </tr>
            </tbody>
        </table>

        {{-- <div class="arrow-left">fsdfasdf</div> --}}
    </div>
    <table class="footer-line">
        <tr>
            <td class="left-side">For More Services, Contact Us:</td>
            <td class="right-side">051 5579528</td>
        </tr>
    </table>
</body>

</html>
