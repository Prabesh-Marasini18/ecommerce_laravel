<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop Credential Notification</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9fafb; margin: 0; padding: 0;">
    <table align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" role="presentation"
                        style="background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1); margin: 20px 0;">

                    <!-- Header -->
                    <tr>
                        <td style="background-color: #642571; padding: 20px; text-align: center; color: white;">
                            <h1 style="margin: 0; font-size: 22px; font-weight: bold;">Shop Credential</h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 30px; color: #333;">
                            <p style="font-size: 16px; margin-bottom: 20px;">
                                Hello {{$shop->name}}, <br><br>
                                Your shop has been successfully created. Here are your credentials:
                            </p>

                            <table width="100%" cellpadding="0" cellspacing="0"
                                    style="font-size: 15px; color: #444; margin-bottom: 20px;">

                                <tr>
                                    <td style="padding: 8px; font-weight: bold; color: #642571;">📧 Email:</td>
                                    <td style="padding: 8px;">{{ $shop->email }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-weight: bold; color: #642571;">Password</td>
                                    <td style="padding: 8px;">{{ $password }}</td>
                                </tr>

                            </table>

                            <p style="font-size: 15px; margin-bottom: 20px;">
                                Please review this request in your <strong>Shop Dashboard</strong>.
                            </p>

                            <!-- Button -->
                            <div style="text-align: center; margin: 25px 0;">
                                <a href="{{ url('/shop') }}"
                                    style="background-color: #e6227b; color: #fff; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: bold; display: inline-block;">
                                    Login to Your Shop Dashboard
                                </a>
                            </div>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f3f4f6; text-align: center; padding: 15px; font-size: 13px; color: #888;">
                            © {{ date('Y') }} Your Multi-Vendor Platform. All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
