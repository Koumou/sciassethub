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
                                <img width="1000" alt="www.sciassethub.com" style="width:500px;max-width:50%;height:auto;border:none;text-decoration:none;color:#ffffff;" src="https://res.cloudinary.com/dzdngxtqx/image/upload/v1682796412/Logo_Sci_Asset_Hub__hcynxi.png">
                            </td>
                        </tr>
                        <!--      Intro Section -->
                        <tr>
                            <td style="padding:30px;background-color:#ffffff;">
                                <br />
                                <p>Dear {{$details['supervisor_title']}}. {{$details['supervisor_name']}},</p>

                                <p>This email serves to inform you that {{Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->title)}}. {{Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->firstname)}} {{Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->lastname)}} has indicated in our system that you are currently
                                    supervising their research project titled "{{$details['research_title']}}".</p>
                                <div>
                                    Starting now, you will be responsible for reviewing and approving any asset requests made by {{Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->title)}}. {{Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->firstname)}} {{Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->lastname)}} through SciAssetHub platform.
                                </div>
                                <br />
                                <p>
                                    Do you recognize this student as one of your current supervisees?
                                </p>
                                
                                <p style="text-align: center;margin: 2.5em auto;">
                                    <a class="button" href="supervisor_confirmation/{{Illuminate\Support\Facades\Crypt::encryptString($details['supervisor_email'])}}/{{Illuminate\Support\Facades\Crypt::encryptString(Auth::user()->email)}}" style="background: #DE4D3B; 
                       text-decoration: none; 
                       padding: 1em 1.5em;
                       color: #ffffff; 
                       border-radius: 48px;">
                                        <span style="font-weight:bold;">Yes</span>
                                    </a>
                                </p>
                                <div>Regards,</div>
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