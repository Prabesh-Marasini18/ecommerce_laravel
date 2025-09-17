<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop Request Notification</title>
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
                            <h1 style="margin: 0; font-size: 22px; font-weight: bold;">📢 New Shop Request</h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 30px; color: #333;">
                            <p style="font-size: 16px; margin-bottom: 20px;">
                                Hello Admin, <br><br>
                                A new shop has requested to open on your platform. Here are the details:
                            </p>

                            <table width="100%" cellpadding="0" cellspacing="0"
                                    style="font-size: 15px; color: #444; margin-bottom: 20px;">
                                <tr>
                                    <td style="padding: 8px; font-weight: bold; color: #642571;">🏪 Shop Name:</td>
                                    <td style="padding: 8px;">{{ $shop->name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-weight: bold; color: #642571;">📧 Email:</td>
                                    <td style="padding: 8px;">{{ $shop->email }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-weight: bold; color: #642571;">📞 Phone:</td>
                                    <td style="padding: 8px;">{{ $shop->phone }}</td>
                                </tr>
                                @if($shop->photo)
                                <tr>
                                    <td style="padding: 8px; font-weight: bold; color: #642571;">🖼 Shop Photo:</td>
                                    <td style="padding: 8px;">
                                        <img src="{{asset (Storage::url($shop->photo))}}" alt="Shop Photo" width="120"
                                            style="border-radius: 8px; border: 1px solid #ddd;">
                                    </td>
                                </tr>
                                @endif
                            </table>

                            <p style="font-size: 15px; margin-bottom: 20px;">
                                Please review this request in your <strong>Admin Dashboard</strong>.
                            </p>

                            <!-- Button -->
                            <div style="text-align: center; margin: 25px 0;">
                                <a href="{{ url('/admin/shops') }}"
                                    style="background-color: #e6227b; color: #fff; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: bold; display: inline-block;">
                                    🔍 View Shop Requests
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
