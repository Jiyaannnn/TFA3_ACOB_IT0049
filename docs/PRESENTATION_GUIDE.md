# TFA3 presentation guide

## Short project explanation

I extended my TFA2 Ledgerline POS app with editable customer and user accounts. Routes send each request to a controller; the controller validates the submitted fields and uses a Model to save the record in MySQL. If validation fails, the form shows errors and keeps the typed values. On the user edit page, a JPG or PNG upload is checked for type and the 2 MB limit. CodeIgniter's image service makes a 320 × 320 JPEG in the public uploads folder, while the database stores only its filename. The user listing displays that image or a placeholder.

## Demonstrate in this order

1. Open the dashboard and show that the original TFA2 records remain.
2. Open Customers, create a valid customer, then edit that customer.
3. Submit an invalid email and show the error and retained name.
4. Open Users, attempt a duplicate username and show the error.
5. Create a new user with a unique username, then open its prefilled edit page.
6. Try a non-image file or file over 2 MB and show it is rejected.
7. Upload a valid JPG or PNG and show the prepared avatar on the listing.
8. Show the `users.avatar` column contains only a filename.
9. Show the GitHub README and database export, then open the hosted link if available.
10. Show a narrow browser window to demonstrate the one-column mobile form.

## Key concepts to explain

- **Route:** the URL-to-controller mapping.
- **Controller:** validates input and coordinates the save operation.
- **Model:** restricts which columns can be saved and queries MySQL.
- **View:** displays escaped record values and field errors.
- **CSRF token:** protects POST forms from cross-site request forgery.
- **MIME validation:** checks the uploaded file's actual format.
- **Thumbnail:** a smaller prepared copy used for consistent display.

The activity contains no AI conversation requirement. Do not claim one occurred. Be clear that uploaded files on a hosted service require persistent storage to survive redeploys.
