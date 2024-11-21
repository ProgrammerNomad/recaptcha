# reCAPTCHA v3 PHP Example

This repository provides a simple example of how to implement reCAPTCHA v3 in a PHP web form.

## Features

* Basic form with name and email fields.
* reCAPTCHA v3 integration for bot protection.
* Server-side validation of reCAPTCHA response.
* Adjustable score threshold for customization.

## Files

* **index.php:** Contains the HTML form with reCAPTCHA v3.
* **validate.php:** Handles form submission and reCAPTCHA validation.

## How to Use

1. **Get reCAPTCHA v3 Keys:**
   - Go to the [reCAPTCHA admin console](https://www.google.com/recaptcha/admin/create).
   - Create a new reCAPTCHA v3 site.
   - Copy your site key and secret key.

2. **Update the Code:**
   - In `index.php`, replace `YOUR_SITE_KEY` with your actual site key.
   - In `validate.php`, replace `YOUR_SECRET_KEY` with your actual secret key.
   - Adjust the score threshold in `validate.php` if needed.

3. **Test the Form:**
   - Upload the files to your web server.
   - Open `index.php` in your browser.
   - Fill out the form and submit.
   - Check the response on the page to see if reCAPTCHA was successful.

## Important Notes

* **Security:** Keep your secret key confidential!
* **Score Threshold:** Adjust the threshold in `validate.php` based on your security needs.
* **Error Handling:** Implement more robust error handling in `validate.php`.
* **Action:** Use the `data-action` attribute in the reCAPTCHA button to describe the user's action.

## Contributing

Contributions are welcome! Feel free to open issues or submit pull requests.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
