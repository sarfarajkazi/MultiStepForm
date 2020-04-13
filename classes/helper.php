<?php

/**
 * Printing data in pre tag
 *
 * @param array $data
 * @param bool $die
 * @param bool $display
 */
function pr($data = false, $flag = false, $display = false)
{
    if (empty($display)) {
        echo "<pre class='direct_display'>";
        if ($flag == 1) {
            print_r($data);
            die;
        } else {
            print_r($data);
        }
        echo "</pre>";
    } else {
        echo "<div style='display:none' class='direct_display'><pre>";
        print_r($data);
        echo "</pre></div>";
    }
}
function email_template($title = '', $name = '', $msg = '', $url = '')
{
    $return_html = '
    <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" class="backgroundTable">
        <tbody>
        <tr>
            <td>
                <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                    <tbody>
                    <tr>
                        <td width="100%">
                            <table width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0"
                                   align="center"
                                   class="devicewidth">
                                <tbody>
                                <tr>
                                    <td>
                                        <table bgcolor="#f5f5f5" width="100%" align="center" border="0" cellpadding="0"
                                               cellspacing="0" class="devicewidth">
                                            <tbody>
                                            <tr>
                                                <td align="center">
                                                    <div class="imgpop">
                                                      <a class="d-block" target="_blank" href="'.site_url().'">
                                                      <img src="https://ruempel.hauke-social-media.de/wp-content/uploads/2020/04/Asset-2.png" alt="Rümpel König" style="display:block; border:none; outline:none; text-decoration:none;margin: 30px 0" />
                                                      </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" class="backgroundTable">
        <tbody>
        <tr>
            <td>
                <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                    <tbody>
                    <tr>
                        <td width="100%">
                            <table width="600" align="center" cellspacing="0" cellpadding="0" border="0"
                                   class="devicewidth">
                                <tbody>
                                <tr>
                                    <td align="left">
                                        <h1 style="font-family:\'Poppins\', serif;font-weight:bolder;margin:20px 0 50px 0;font-size: 36px;letter-spacing: 1px">' . $title . '</h1>
                                        <p style="font-family:\'Poppins\', serif;text-align: left;font-size: 18px;font-weight: 600;letter-spacing: 1px">
                                            Hello, ' . $name . '</p>
                                        <p style="font-family:\'Poppins\', serif;text-align: left;font-size: 14px;font-weight: lighter;margin-top: 20px">' . $msg . '</p>
                                    </td>
                                </tr>' . $url . '</tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" class="backgroundTable">
        <tbody>
        <tr>
            <td>
                <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                    <tbody>
                    <tr>
                        <td align="center" height="25" style="font-size:1px;line-height:1px;">
                             
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" class="backgroundTable">
        <tbody>
        <tr>
            <td>
                <table width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" align="center"
                       class="devicewidth">
                    <tbody>
                    <tr>
                        <td width="100%" style="padding: 10px 0;">
                            <table bgcolor="#000000" width="600" cellpadding="0" cellspacing="0" border="0"
                                   align="center"
                                   class="devicewidth">
                                <tbody>
                                <tr>
                                    <td height="10" style="font-size:1px;line-height:1px;mso-line-height-rule:exactly;">
                                         
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 50px 0 0 0;">
                                        <table width="600" align="center" border="0" cellpadding="0" cellspacing="0"
                                               class="devicewidth">
                                            <tbody>
                                            <tr>
                                                <td align="center">
                                                    <h1 style="font-family:\'Poppins\', serif;font-weight:lighter;color:#ffffff;">
                                                        Stay In Touch</h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center">
                                                    <a href="https://www.facebook.com"
                                                       style="font-size: 24px;margin: 20px 10px;color: #ffffff"
                                                       target="_blank"><img style="width: 40px"
                                                                            src="' . MSF_IMAGES . 'facebook-logo-button.png"
                                                                            alt="social icons"></a>
                                                    <a href="https://twitter.com"
                                                       style="font-size: 24px;margin: 20px 10px;color: #ffffff"
                                                       target="_blank"><img style="width: 40px"
                                                                            src="' . MSF_IMAGES . 'instagram-logo.png"
                                                                            alt="social icons"></a>
                                                    <a href="https://www.instagram.com/"
                                                       style="font-size: 24px;margin: 20px 10px;color: #ffffff"
                                                       target="_blank"><img style="width: 40px"
                                                                            src="' . MSF_IMAGES . 'twitter-logo-button.png"
                                                                            alt="social icons"></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="font-family:\'Poppins\', serif;font-size: 10px;color: #ffffff;text-align: center;letter-spacing: 1px;margin-top: 30px;font-weight: 100">
                                                        © | Rümpel König.</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="10" style="font-size:1px;line-height:1px;mso-line-height-rule:exactly;">
                                         
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>';
    return $return_html;
}
