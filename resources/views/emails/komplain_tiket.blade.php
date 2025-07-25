<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Komplain</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f5f7fa; color: #333333; line-height: 1.6;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f5f7fa; padding: 20px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
                    <!-- Header -->
                    <tr>
                        <td align="center" style="background-color: #003366; padding: 30px 20px;">
                            <h1 style="color: #ffffff; font-size: 24px; font-weight: bold; margin: 0;">Sistem Penanganan Komplain</h1>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <p style="font-size: 16px; color: #2c3e50; margin-bottom: 25px;">
                                Yang Terhormat <strong>{{ $pelapor->nama }}</strong>,
                            </p>

                            <p style="font-size: 15px; color: #555555; margin-bottom: 30px;">
                                Terima kasih telah menghubungi kami. Kami dengan senang hati memberitahukan bahwa komplain Anda telah <strong>berhasil diterima</strong> dan telah dicatat dalam sistem penanganan komplain kami.
                            </p>

                            <!-- Detail Komplain -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid #e1e8ed; border-radius: 8px; margin-bottom: 30px;">
                                <tr>
                                    <td colspan="2" align="center" style="background-color: #003366; color: white; padding: 15px; font-weight: bold; font-size: 16px;">
                                        Detail Komplain Anda
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px; font-weight: bold; color: #2c3e50; width: 40%;">Nomor Tiket:</td>
                                    <td style="padding: 15px; color: #003366; font-weight: bold;">
                                        {{ $komplain->tiket }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px; font-weight: bold; color: #2c3e50;">Status Komplain:</td>
                                    <td style="padding: 15px;">
                                        <span style="display: inline-block; padding: 6px 12px; border-radius: 20px; font-size: 12px; font-weight: bold; text-transform: uppercase; background-color: #fff3cd; color: #856404; border: 1px solid #ffeaa7;">
                                            {{ ucfirst($komplain->status) }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px; font-weight: bold; color: #2c3e50;">Tanggal Pengajuan:</td>
                                    <td style="padding: 15px; color: #555555;">
                                        {{ $komplain->created_at->format('d F Y, H:i') }} WIB
                                    </td>
                                </tr>
                            </table>

                            <!-- Note -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #fff3cd; border-radius: 6px; padding: 20px; margin-bottom: 25px;">
                                <tr>
                                    <td style="color: #856404; font-size: 14px;">
                                        <strong>Penting:</strong> Harap simpan nomor tiket <strong>{{ $komplain->tiket }}</strong> untuk keperluan pelacakan status komplain Anda.
                                    </td>
                                </tr>
                            </table>

                            <p style="font-size: 15px; color: #555555; margin-bottom: 25px;">
                                Tim customer service kami akan segera meninjau dan menindaklanjuti laporan Anda. Kami berkomitmen untuk memberikan penanganan yang cepat, tepat, dan memuaskan.
                            </p>

                            <!-- Footer -->
                            <p style="border-top: 1px solid #e1e8ed; padding-top: 20px; font-size: 15px; color: #2c3e50;">
                                Terima kasih atas kepercayaan Anda kepada layanan kami.<br><br>
                                Hormat kami,<br>
                                <strong>Tim Customer Service</strong><br>
                                <strong>Sistem Penanganan Komplain</strong>
                            </p>
                        </td>
                    </tr>

                    <!-- Bottom Footer -->
                    <tr>
                        <td align="center" style="background-color: #e9ecef; padding: 25px 20px;">
                            <p style="color: #6c757d; font-size: 12px; line-height: 1.5; margin: 0;">
                                &copy; {{ date('Y') }} Sistem Penanganan Komplain. Hak Cipta Dilindungi.<br>
                                Email ini dikirim secara otomatis, mohon tidak membalas email ini.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
