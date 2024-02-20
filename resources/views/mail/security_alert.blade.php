<!DOCTYPE HTML>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="telephone=no">
    <style type="text/CSS"></style>
    <style @import url('https://dopplerhealth.com/fonts/BasierCircle/basiercircle-regular-webfont.woff2');></style>
    <title></title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: 'Basier Circle', 'Roboto', 'Helvetica', 'Arial', sans-serif;
        }

        @media screen and (max-width: 530px) {
            .unsub {
                display: block;
                padding: 8px;
                margin-top: 14px;
                border-radius: 6px;
                text-decoration: none !important;
                font-weight: bold;
            }

            .button {
                min-height: 42px;
                line-height: 42px;
            }

            .col-lge {
                max-width: 100% !important;
            }
        }

        @media screen and (min-width: 531px) {
            .col-sml {
                max-width: 35% !important;
            }

            .col-lge {
                max-width: 73% !important;
            }
        }
    </style>
</head>

<body style="margin:0;padding:0;word-spacing:normal;">
    <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">
        <table role="presentation" style="width:100%;border:none;border-spacing:0;">
            <tr>
                <td align="center" style="padding:0;">

                    <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:'Basier Circle', 'Roboto', 'Helvetica', 'Arial', sans-serif;font-size:1em;line-height:1.37em;color:#384049;">
                        <!--      Logo headder -->
                        <tr>
                            <td style="padding:25px 15px 15px 15px;text-align:center;font-size:2em;font-weight:bold;">
                                <img width="1000" alt="www.sciassethub.com" style="width:1000px;max-width:75%;height:auto;border:none;text-decoration:none;color:#ffffff;" src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1682796412/Logo_Sci_Asset_Hub__hcynxi.png">
                            </td>
                        </tr>
                        <!--      Intro Section -->
                        <tr>
                            <td style="padding:30px;background-color:#ffffff;">
                                <h1 style="margin-top:0;margin-bottom:1.38em;font-size:1.953em;line-height:1.3;font-weight:bold;letter-spacing:-0.02em;">New sign in on {{Jenssegers\Agent\Facades\Agent::platform()}}</h1>
                                <br />
                                <p>Dear valued SciAssetHub account holder {{Auth::user()->email}},</p>

                                <p>Our system has detected that someone is attempting to sign in to your SciAssetHub account using an/a {{Jenssegers\Agent\Facades\Agent::platform()}} device while you are already logged in on another device or browser.</p>
                               
                                <p>Thank you for choosing SciAssetHub for your educational needs.</p>
                                <br />
                                <div>Best regards,</div>
                                <div>SciAssetHub Team</div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:30px;text-align:center;font-size: 0.75em;background-color:#ffeada;color:#384049;border: 1em solid #fff;">
                                <p style="margin:0 0 0.75em 0;line-height: 0;">
                                    <!--      LinkedIn logo            -->
                                    <a href="www.sciassethub.com" style="display:inline-block;text-decoration:none;margin: 0 5px;">
                                        www.sciassethub.com
                                    </a>

                                </p>
                                <p style="margin:0;font-size:.75rem;line-height:1.5em;text-align: center;">
                                    SciAssetHub aims to support your research by granting you access to university assets, helping you to find the resources you need.
                                    <br>
                                </p>
                            </td>
                        </tr>
                    </table>
                    <!--[if mso]>
          </td>
          </tr>
          </table>
          <![endif]-->
                </td>
            </tr>
        </table>
    </div>
</body>

</html>