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
- The supplied contact form points to assets/mail/contact.php, but that file was NOT present in the original ZIP. The contact form will need a mail handler/API before it can submit successfully.
