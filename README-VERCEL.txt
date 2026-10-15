MARSAD PHP - VERCEL DEPLOYMENT

1. Upload this folder to GitHub.
2. Import the repository into Vercel.
3. Framework Preset: Other.
4. Build Command: leave empty.
5. Output Directory: leave empty.
6. Deploy.

Important:
- PHP pages are in /api for Vercel's PHP runtime.
- Static assets remain in /assets.
- The contact form posts to /send-mail.php (api/send-mail.php, PHPMailer via composer.json) and needs these Vercel env vars: SMTP_USERNAME, SMTP_PASSWORD, CONTACT_RECEIVER_ADDRESS.
