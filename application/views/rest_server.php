<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>REST Server Tests</title>

    <style>

    ::selection { background-color: #E13300; color: white; }
    ::-moz-selection { background-color: #E13300; color: white; }

    body {
        background-color: #FFF;
        margin: 40px;
        font: 16px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
        word-wrap: break-word;
    }

    a {
        color: #039;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #444;
        background-color: transparent;
        /*border-bottom: 1px solid #D0D0D0;*/
        font-size: 24px;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
    }

    code {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 16px;
        background-color: #f9f9f9;
        border: 1px solid #D0D0D0;
        color: #002166;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }

    #body {
        margin: 0 15px 0 15px;
    }

    p.footer {
        text-align: right;
        font-size: 16px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
    }

    #container {
        margin: 10px;
        border: 1px solid #D0D0D0;
        box-shadow: 0 0 8px #D0D0D0;
    }

    #header {
        width: 100%;height:90px;border-bottom: 1px solid #D0D0D0;
    }

    #logo {
        float: left; margin-left: 10px; margin-top: 15px;
    }

    #title {
        float:right; margin-right: 10px; margin-top: 25px;
    }
    </style>
</head>
<body>
<div id="container">
    <div id="header">
        <div id="logo">
            <img src="img/onwhite-logo.png">
        </div>
        <div id="title">
            <h1>Patient API Mock Data - REST Server Tests</h1>
        </div>
    </div>
    <div id="body">

      <!--  <h2><a href="<?php echo site_url(); ?>">Home</a></h2> -->

        <img src="http://nautilus.baruch.sc.edu/twiki_dmcc/pub/Main/ObsCatalog/green_operational_icon.png" style="float: left; height: 25px; margin: -3px; margin-right: 5px;"><h2>Patient Identity</h2>

        <p>
            Click on the links to check whether the REST server is working.
        </p>

        <ol>
            <li><a href="<?php echo site_url('api/example/patients'); ?>">Patients</a> - defaulting to JSON</li>
            <li><a href="<?php echo site_url('api/example/patients/format/csv'); ?>">Patients</a> - get it in CSV</li>
            <li><a href="<?php echo site_url('api/example/patients/id/1'); ?>">Patient #1</a> - defaulting to JSON  (patients/id/1)</li>
            <li><a href="<?php echo site_url('api/example/patients/id/1.xml'); ?>">Patient #1</a> - get it in XML (patients/id/1.xml)</li>
            <li><a href="<?php echo site_url('api/example/patients/id/1/format/xml'); ?>">Patient #1</a> - get it in XML (patients/id/1/format/xml)</li>
            <li><a href="<?php echo site_url('api/example/patients/id/1?format=xml'); ?>">Patient #1</a> - get it in XML (patients/id/1?format=xml)</li>
            <li><a id="ajax_identity" href="<?php echo site_url('api/example/patients/format/json'); ?>">Patients</a> - get it in JSON (AJAX request)</li>
            <li><a href="<?php echo site_url('api/example/patients.html'); ?>">Patients</a> - get it in HTML (patients.html)</li>
            <li><a href="<?php echo site_url('api/example/patients/format/html'); ?>">Patients</a> - get it in HTML (patients/format/html)</li>
            <li><a href="<?php echo site_url('api/example/patients?format=html'); ?>">Patients</a> - get it in HTML (patients?format=html)</li>
        </ol>

        <img src="http://nautilus.baruch.sc.edu/twiki_dmcc/pub/Main/ObsCatalog/green_operational_icon.png" style="float: left; height: 25px; margin-right: 5px;"><h2>Patient Instance</h2>

        <p>
            Click on the links to check whether the REST server is working.
        </p>

        <ol>
            <li><a href="<?php echo site_url('api/example/instances'); ?>">Patient Instances</a> - defaulting to JSON</li>
            <li><a href="<?php echo site_url('api/example/instances/format/csv'); ?>">Patient Instances</a> - get it in CSV</li>
            <li><a href="<?php echo site_url('api/example/instances/id/1'); ?>">Patient Instance #1</a> - defaulting to JSON  (instances/id/1)</li>
            <li><a href="<?php echo site_url('api/example/instances/id/1.xml'); ?>">Patient Instance #1</a> - get it in XML (instances/id/1.xml)</li>
            <li><a href="<?php echo site_url('api/example/instances/id/1/format/xml'); ?>">Patient Instance #1</a> - get it in XML (instances/id/1/format/xml)</li>
            <li><a href="<?php echo site_url('api/example/instances/id/1?format=xml'); ?>">Patient  Instance #1</a> - get it in XML (instances/id/1?format=xml)</li>
            <li><a id="ajax_instance" href="<?php echo site_url('api/example/instances/format/json'); ?>">Patient Instances</a> - get it in JSON (AJAX request)</li>
            <li><a href="<?php echo site_url('api/example/instances.html'); ?>">Patient Instances</a> - get it in HTML (instances.html)</li>
            <li><a href="<?php echo site_url('api/example/instances/format/html'); ?>">Patient Instances</a> - get it in HTML (instances/format/html)</li>
            <li><a href="<?php echo site_url('api/example/instances?format=html'); ?>">Patient Instances</a> - get it in HTML (instances?format=html)</li>
        </ol>

         <img src="http://nautilus.baruch.sc.edu/twiki_dmcc/pub/Main/ObsCatalog/green_operational_icon.png" style="float: left; height: 25px; margin-right: 5px;"><h2>Patient Diagnosis</h2>

        <p>
            Click on the links to check whether the REST server is working.
        </p>

        <ol>
            <li><a href="<?php echo site_url('api/example/diagnoses'); ?>">Patient Diagnoses</a> - defaulting to JSON</li>
            <li><a href="<?php echo site_url('api/example/diagnoses/format/csv'); ?>">Patient Diagnoses</a> - get it in CSV</li>
            <li><a href="<?php echo site_url('api/example/diagnoses/id/97211'); ?>">Patient Diagnosis #97211</a> - defaulting to JSON  (diagnoses/id/97211)</li>
            <li><a href="<?php echo site_url('api/example/diagnoses/id/97211.xml'); ?>">Patient Diagnosis #97211</a> - get it in XML (diagnoses/id/97211.xml)</li>
            <li><a href="<?php echo site_url('api/example/diagnoses/id/97211/format/xml'); ?>">Patient Diagnosis #97211</a> - get it in XML (diagnoses/id/97211/format/xml)</li>
            <li><a href="<?php echo site_url('api/example/diagnoses/id/97211?format=xml'); ?>">Patient  Diagnosis #97211</a> - get it in XML (diagnoses/id/97211?format=xml)</li>
            <li><a id="ajax_diagnosis" href="<?php echo site_url('api/example/diagnoses/format/json'); ?>">Patient Diagnoses</a> - get it in JSON (AJAX request)</li>
            <li><a href="<?php echo site_url('api/example/diagnoses.html'); ?>">Patient Diagnoses</a> - get it in HTML (diagnoses.html)</li>
            <li><a href="<?php echo site_url('api/example/diagnoses/format/html'); ?>">Patient Diagnoses</a> - get it in HTML (diagnoses/format/html)</li>
            <li><a href="<?php echo site_url('api/example/diagnoses?format=html'); ?>">Patient Diagnoses</a> - get it in HTML (diagnoses?format=html)</li>
        </ol>

        <!--

         <img src="http://nautilus.baruch.sc.edu/twiki_dmcc/pub/Main/ObsCatalog/red_offline_icon.png" style="float: left; height: 25px; margin-right: 5px;"><h2>Patient Procedure</h2>

        <p>
            Click on the links to check whether the REST server is working.
        </p>

        <ol>
            <li><a href="<?php echo site_url('api/example/procedures'); ?>">Patient Procedures</a> - defaulting to JSON</li>
            <li><a href="<?php echo site_url('api/example/procedures/format/csv'); ?>">Patient Procedures</a> - get it in CSV</li>
            <li><a href="<?php echo site_url('api/example/procedures/id/1'); ?>">Patient Procedure #1</a> - defaulting to JSON  (procedures/id/1)</li>
            <li><a href="<?php echo site_url('api/example/procedures/id/1.xml'); ?>">Patient Procedure #1</a> - get it in XML (procedures/id/1.xml)</li>
            <li><a href="<?php echo site_url('api/example/procedures/id/1/format/xml'); ?>">Patient Procedure #1</a> - get it in XML (procedures/id/1/format/xml)</li>
            <li><a href="<?php echo site_url('api/example/procedures/id/1?format=xml'); ?>">Patient  Procedure #1</a> - get it in XML (procedures/id/1?format=xml)</li>
            <li><a id="ajax" href="<?php echo site_url('api/example/procedures/format/json'); ?>">Patient Procedures</a> - get it in JSON (AJAX request)</li>
            <li><a href="<?php echo site_url('api/example/procedures.html'); ?>">Patient Procedures</a> - get it in HTML (procedures.html)</li>
            <li><a href="<?php echo site_url('api/example/procedures/format/html'); ?>">Patient Procedures</a> - get it in HTML (procedures/format/html)</li>
            <li><a href="<?php echo site_url('api/example/procedures?format=html'); ?>">Patient Procedures</a> - get it in HTML (procedures?format=html)</li>
        </ol>

         <img src="http://nautilus.baruch.sc.edu/twiki_dmcc/pub/Main/ObsCatalog/red_offline_icon.png" style="float: left; height: 25px; margin-right: 5px;"><h2>Patient Provider</h2>

        <p>
            Click on the links to check whether the REST server is working.
        </p>

        <ol>
            <li><a href="<?php echo site_url('api/example/providers'); ?>">Patient Providers</a> - defaulting to JSON</li>
            <li><a href="<?php echo site_url('api/example/providers/format/csv'); ?>">Patient Providers</a> - get it in CSV</li>
            <li><a href="<?php echo site_url('api/example/providers/id/97211'); ?>">Patient Provider #97211</a> - defaulting to JSON  (providers/id/1)</li>
            <li><a href="<?php echo site_url('api/example/providers/id/97211.xml'); ?>">Patient Provider #97211</a> - get it in XML (providers/id/1.xml)</li>
            <li><a href="<?php echo site_url('api/example/providers/id/97211/format/xml'); ?>">Patient Provider #97211</a> - get it in XML (providers/id/1/format/xml)</li>
            <li><a href="<?php echo site_url('api/example/providers/id/97211?format=xml'); ?>">Patient  Provider #97211</a> - get it in XML (providers/id/1?format=xml)</li>
            <li><a id="ajax" href="<?php echo site_url('api/example/providers/format/json'); ?>">Patient Providers</a> - get it in JSON (AJAX request)</li>
            <li><a href="<?php echo site_url('api/example/providers.html'); ?>">Patient Providers</a> - get it in HTML (providers.html)</li>
            <li><a href="<?php echo site_url('api/example/providers/format/html'); ?>">Patient Providers</a> - get it in HTML (providers/format/html)</li>
            <li><a href="<?php echo site_url('api/example/providers?format=html'); ?>">Patient Providers</a> - get it in HTML (providers?format=html)</li>
        </ol>

        -->

    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

<script>
    $(function() {

        $('#ajax_identity, #ajax_instance, #ajax_diagnosis').on('click', function (event) {

            event.preventDefault();

            $.ajax({

                // URL from the link that was clicked on.
                url: $(this).attr('href')

            }).done(function (data) {

                // The 'data' parameter is an array of objects that can be looped over.

                alert(JSON.stringify(data));

            }).fail(function () {

                alert('Oh no! A problem with the Ajax request!');

            });
        });

    });
</script>

</body>
</html>