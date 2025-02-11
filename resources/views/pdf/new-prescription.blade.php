<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Prescription Slip</title>
  <style>
    /* Base reset */
    * {
      margin: 0;
      padding: 0;
    }
    /* Body styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #fff;
      margin: 0;
      padding: 0;
    }
    /* Page settings */
    @page {
      size: A4;
      margin: 10mm;
    }
    /* Container */
    .prescription-container {
      width: 100%;
      max-width: 200mm;
      margin: auto;
      background-color: #fff;
      padding: 20px;
      box-sizing: border-box;
    }
    /* Header styles */
    .header {
      margin-bottom: 20px;
    }
    .hms-logo {
      height: 70px;
      width: 70px;
      margin-bottom: 40px;
    }
    .csc-logo {
      height: 70px;
      width: 75px;
      margin-bottom: 33px;
    }
    /* Title section */
    .title-section {
      text-align: center;
    }
    .title-section h2 {
      font-size: 25px;
      margin-bottom: 5px;
    }
    .title-section h5 {
      font-size: 16px;
      margin-top: 5px;
      text-decoration: underline;
    }
    /* Details section */
    .details {
      margin-bottom: 10px;
      page-break-inside: avoid;
    }
    /* Attributes table */
    .attributes-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
      font-size: 13px;
      page-break-inside: avoid;
    }
    .attributes-table td {
      padding: 12px 5px 3px 5px;
      vertical-align: top;
      line-height: 20px;
      border-bottom: 1px solid dimgray;
    }
    .attributes-table th {
      padding: 12px 5px 3px 5px;
      vertical-align: top;
      line-height: 20px;
      text-align: left;
      width: 15%;
      white-space: nowrap;
    }
    .value-left {
      width: 30%;
    }
    .value-right {
      width: 23%;
    }
    .attributes-table .label-right {
      padding-left: 16px;
    }
    /* Layout using table for content section */
    .layout-table {
      width: 100%;
      table-layout: fixed;
      border-collapse: collapse;
    }
    .layout-table td {
      vertical-align: top;
      padding: 0 10px;
    }
    .left-section {
      width: 35%;
    }
    .right-section {
      width: 65%;
    }
    /* Set font sizes for inner tables */
    .vitals-table,
    .investigations-table,
    .complaints-table,
    .medications-table {
      font-size: 10px;
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
      border: 1px solid dimgray;
    }
    .vitals-table th,
    .investigations-table th,
    .complaints-table th,
    .medications-table th {
      font-size: 10px;
      padding: 7px 5px;
      border: 1px solid dimgray;
    }
    .vitals-table td,
    .investigations-table td,
    .complaints-table td,
    .medications-table td {
      font-size: 10px;
      padding: 7px 5px;
      border: 1px solid dimgray;
    }
    /* Force fixed table layout on all inner tables */
    .attributes-table,
    .vitals-table,
    .investigations-table,
    .complaints-table,
    .medications-table {
      table-layout: fixed;
    }
    /* Apply text wrapping to table cells */
    .attributes-table td,
    .vitals-table td,
    .investigations-table td,
    .complaints-table td,
    .medications-table td {
      white-space: normal !important;
      word-wrap: break-word !important;
      overflow-wrap: break-word !important;
      word-break: break-all !important;
    }
    /* For the investigations table, force two equal-width columns */
    .investigations-table th,
    .investigations-table td {
      width: 50%;
    }
    /* Medications table: explicit column widths for wrapping */
    .medications-table th:nth-child(1) { width: 40%; }
    .medications-table th:nth-child(2) { width: 15%; }
    .medications-table th:nth-child(3) { width: 15%; }
    .medications-table th:nth-child(4) { width: 15%; }
    .medications-table th:nth-child(5) { width: 15%; }
    .medications-table th {
      text-align: left;
    }
    /* Next visit section */
    .next-visit {
      margin-top: 20px;
      page-break-inside: avoid;
    }
    /* Footer */
    .footer {
      font-size: 12px;
      padding-top: 5px;
      text-align: right;
      page-break-inside: avoid;
    }
    /* Media queries */
    @media screen and (max-width: 768px) {
      .attributes-table .label,
      .attributes-table .value {
        display: block;
        width: 100%;
        margin-bottom: 10px;
      }
      .layout-table, .medications-table {
        display: block;
      }
      .left-section,
      .right-section {
        width: 100%;
        display: block;
      }
    }
    /* Print styles */
    @media print {
      .prescription-container {
        padding: 0;
        margin: 0;
      }
      body {
        margin: 0;
        padding: 0;
      }
    }
  </style>
</head>
<body>
  <div class="prescription-container">
    <header class="header">
      <table style="width: 100%; table-layout: fixed;">
        <tr>
          <td style="width: 20%; text-align: left;">
            <img src="{{ public_path('assets/logo_without_background_1.png') }}" alt="Logo" class="hms-logo">
          </td>
          <td class="title-section">
            <div style="margin-top: 20px">
              <h2>City Hospital</h2>
              <h2>(CH)</h2>
              <h5><strong>Health Directorate</strong></h5>
            </div>
          </td>
          <td style="width: 20%; text-align: right;">
            <img src="{{ public_path('assets/samrtcitylogo.png') }}" alt="Capital Smart City Logo" class="csc-logo">
          </td>
        </tr>
      </table>
    </header>
    <!-- Details Section -->
    <div class="tables">
      <section class="details">
        <table class="attributes-table">
          <tbody>
            <tr>
              <th class="label-left">Consultant:</th>
              <td class="value-left" colspan="3">Dr. John Smith</td>
              <th class="label-right">Department:</th>
              <td class="value-right">Cardiology</td>
            </tr>
            <tr>
              <th class="label-left">Patient Name:</th>
              <td class="value-left" colspan="3">James Wilson</td>
              <th class="label-right">Category:</th>
              <td class="value-right">General</td>
            </tr>
            <tr>
              <th class="label-left">Gender:</th>
              <td class="value-left">Male</td>
              <th style="width: 8%; padding-left: 18px;">Age:</th>
              <td style="width: 15%">45 years</td>
              <th class="label-right">Date:</th>
              <td class="value-right">07-02-2025</td>
            </tr>
            <tr>
              <th class="label-left">CNIC No:</th>
              <td class="value-left" colspan="3">35202-1234567-8</td>
              <th class="label-right">MR No:</th>
              <td class="value-right">MR-2024-001</td>
            </tr>
          </tbody>
        </table>
      </section>
      <!-- Content section using table-based layout -->
      <table class="layout-table">
        <tr>
          <!-- Left section (35% width): Vitals, Investigations, and Complaints -->
          <td class="left-section">
            <!-- Vitals Table -->
            <table class="vitals-table">
              <thead>
                <tr>
                  <th colspan="2" style="font-size: 13px;">Vitals</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Pulse/min</th>
                  <td>88</td>
                </tr>
                <tr>
                  <th>BP (mmHg)</th>
                  <td>140/90</td>
                </tr>
                <tr>
                  <th>Temp (°F)</th>
                  <td>98.6</td>
                </tr>
                <tr>
                  <th>RR/min</th>
                  <td>18</td>
                </tr>
              </tbody>
            </table>
            <!-- Investigations Table (two columns: type and value) -->
            <table class="investigations-table">
              <thead>
                <tr>
                  <th colspan="2" style="font-size: 13px;">Investigations</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Radiology</th>
                  <td>Chest X-ray, ECG</td>
                </tr>
                <tr>
                  <th>Pathology</th>
                  <td>CBC, Cardiac EnzymesiuahudahiNKJEHKHAOIASHDOIUEasdy8oiwjeljiushdkjsdakjskjdhasgwgbkjdsb</td>
                </tr>
                <tr>
                  <th>Rehabilitation</th>
                  <td>Cardiac Rehabilitation</td>
                </tr>
              </tbody>
            </table>
            <!-- Complaints Table -->
            <table class="complaints-table">
              <thead>
                <tr>
                  <th colspan="2" style="font-size: 13px;">Complaints</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Complaints</th>
                  <td>Chest Pain</td>
                </tr>
                <tr>
                  <th>Duration</th>
                  <td>3 days</td>
                </tr>
                <tr>
                  <th>Additional</th>
                  <td>Shortness of breath, Fatigue</td>
                </tr>
              </tbody>
            </table>
          </td>
          <!-- Right section (65% width): Medications -->
          <td class="right-section">
            <!-- Medications Table with fixed layout and explicit column widths -->
            <table class="medications-table" style="table-layout: fixed;">
              <thead>
                <tr>
                  <th colspan="5" style="text-align:center; font-size: 13px;">Medications</th>
                </tr>
                <tr>
                  <th style="width:40%;">Medicine</th>
                  <th style="width:15%;">Dosage</th>
                  <th style="width:15%;">Interval</th>
                  <th style="width:15%;">Duration</th>
                  <th style="width:15%;">Instructions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    Aspirinodjoasifjal;ojpoqeja;sldjapojaspoju0pweq[paei0weiwejoweuweuw9e
                  </td>
                  <td>75mg</td>
                  <td>Once daily</td>
                  <td>30 daysadfijfaiojiowjiosjdaksnkjczkzxchioxczhoihdaiojsadiosjdoisjdiosdjs</td>
                  <td>Take after meals</td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </table>
    </div>
    <!-- Next visit section -->
    <section class="next-visit">
      <p><strong>Next Visit:</strong> ____________________</p>
    </section>
    <!-- Footer -->
    <div class="footer">
         <!-- QR Code Section: Positioned on the left, but shifted upward (negative margin) -->
    <div style="text-align: right; margin-top: -80px; margin-right:15px">
        <img src="{{ public_path('assets/qr-code.png') }}" alt="QR Code" style="width:65px; height:65px;">
        <div style="font-size:10px;">SNAP-2024-001</div>
      </div>
      <footer>
        <p>(NOT VALID FOR COURT OF LAW)</p>
      </footer>
    </div>
  </div>
</body>
</html>
