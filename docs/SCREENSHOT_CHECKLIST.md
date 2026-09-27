# TFA3 screenshot checklist

Capture these from the actual running TFA3 application. Keep browser URL and relevant content visible. Do not use the screenshots from TFA2 or TSA1. The activity itself requests links, so these figures are optional evidence if a DOCX report or presentation is submitted.

| Figure | Page or file to open | What must be visible | Caption | Short explanation |
| --- | --- | --- | --- | --- |
| 1 | `/` | Ledgerline dashboard and live record counts | TFA3 POS dashboard | The existing POS app still reads customer and user totals from MySQL. |
| 2 | `/customers` | Listing and New customer button | Customer account listing | Each row comes from CustomerModel and has an Edit action. |
| 3 | `/customers/new` | Empty form with required name and email | New customer form | The form accepts contact data before validation and insertion. |
| 4 | `/customers/new` after invalid submission | Typed values and field error message | Customer validation feedback | Invalid input is rejected while the entered values remain visible. |
| 5 | `/customers/1/edit` | Existing name and email already filled in | Prefilled customer edit form | The controller loads the selected record before editing. |
| 6 | `/users` | Listing, placeholder avatars, and New user button | User account listing | Users without an upload receive a placeholder image. |
| 7 | `/users/new` after duplicate username submission | Entered name and username error | Unique username validation | The rule and database index prevent duplicate usernames. |
| 8 | `/users/1/edit` | Prefilled fields and profile picture input | User edit and avatar form | The edit page accepts an optional JPG or PNG file up to 2 MB. |
| 9 | `/users` after a real upload | Prepared avatar visible in its row | Prepared avatar on user listing | The generated display image is served from public uploads. |
| 10 | Database client, `users` table schema | `avatar` VARCHAR column | Avatar database column | The table stores a filename, not binary image contents. |
| 11 | `app/Controllers/Users.php` | Validation and image preparation code | User validation and upload logic | The controller validates the file then creates a 320 × 320 JPEG. |
| 12 | GitHub repository page | README and `database/ledgerline_pos_tfa3.sql` | Published source and database export | The public repository includes setup instructions and the required export. |
| 13 | Hosted application `/users` and an edit form | Live domain and functioning pages | Hosted working application | Verify creation, editing, and avatar display on the deployed site. |
| 14 | Browser in narrow phone viewport | Form labels, inputs, actions without horizontal clipping | Responsive form layout | The form changes from two columns to one on small screens. |
