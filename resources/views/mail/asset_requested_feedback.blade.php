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

                                <?php

            

                                $decision = $details['final_decision'];

                                ?>

                                @if($decision == "accept")
                                <br />
                                <p>Dear user,</p>

                                <p>We are pleased to inform you that your recent asset request has been approved.
                                    This email serves as confirmation that your request for {{$details['asset_name']}} has been approved.
                                </p>
                                <p><b>Asset Details:</b></p>

                                <div>Asset reference: {{$details['asset_reference']}}</div>
                                <div>Asset Category: {{$details['asset_category']}}</div>
                                <div>Requested Quantity: {{$details['requested_quantity']}}</div>
                                <div>Approval Date: {{$details['requested_updated_at']}}</div>

                                <br />
                                <p><b>Important information regarding {{$details['asset_name']}}:</b></p>
                                <p>Asset intruction: {{$details['asset_instruction']}}</p>
                                <p>Asset Warning Hazard: {{$details['asset_warning_hazard']}}</p>

                                <p><b>Please note the following important information regarding the approved asset request:</b></p>

                                <p> Collection Instructions: Specify the location, date, and time for collecting the asset, if applicable. </p>
                                <p> Return Date: Specify the date by which the asset needs to be returned, if applicable. </p>
                                <p>Terms and Conditions: [Specify any specific terms and conditions associated with the use of the asset, if applicable.]
                                    It is essential that you adhere to the terms and conditions outlined above to ensure proper handling and use of the asset. Additionally, please treat the asset with care to avoid any damage or loss. </p>
                                <br />
                                <br />
                                <p>If you have any further questions or require additional assistance, please do not hesitate to contact {{$details['owner_contact']}}.</p>


                                @else


                                <br />
                                <p>Dear user,</p>
                                <p>We regret to inform you that your recent asset request for {{$details['asset_name']}} has been rejected. We understand that this outcome may cause inconvenience, and we apologize for any disruption it may have caused to your plans. We encourage you to explore alternative options.</p>

                                <br />
                                <br />
                                <p>If you have any further questions or require additional assistance, please do not hesitate to contact {{$details['owner_contact']}}.</p>


                                @endif
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