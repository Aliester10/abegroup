<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari Hubungi Kami</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f8fafc;
            padding: 30px;
            border: 1px solid #e2e8f0;
            border-top: none;
        }
        .footer {
            background: #f1f5f9;
            padding: 20px;
            text-align: center;
            border: 1px solid #e2e8f0;
            border-top: none;
            border-radius: 0 0 10px 10px;
            font-size: 12px;
            color: #64748b;
        }
        .info-box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid #2563eb;
        }
        .message-box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #10b981;
        }
        .label {
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 5px;
        }
        .value {
            color: #4b5563;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Pesan Baru dari Hubungi Kami</h1>
        <p>ABE Group - Contact Form Notification</p>
    </div>
    
    <div class="content">
        <div class="info-box">
            <div class="label">Nama Lengkap:</div>
            <div class="value">{{ $name }}</div>
            
            <div class="label">Email:</div>
            <div class="value">{{ $email }}</div>
            
            @if($phone)
                <div class="label">Nomor Telepon:</div>
                <div class="value">{{ $phone }}</div>
            @endif
            
            <div class="label">Subjek:</div>
            <div class="value">{{ $subject }}</div>
        </div>
        
        <div class="message-box">
            <div class="label">Pesan:</div>
            <div class="value" style="white-space: pre-wrap;">{{ $messageContent }}</div>
        </div>
        
        <p style="margin-top: 30px; text-align: center;">
            <a href="{{ url('/admin/messages') }}" style="background: #2563eb; color: white; padding: 12px 24px; text-decoration: none; border-radius: 6px; display: inline-block;">
                Lihat Semua Pesan
            </a>
        </p>
    </div>
    
    <div class="footer">
        <p>&copy; {{ date('Y') }} ABE Group. All rights reserved.</p>
        <p>Email ini dikirim secara otomatis dari formulir hubungi kami.</p>
    </div>
</body>
</html>
