# TFA3 screenshot order

The screenshots below were captured from the running local TFA3 app and are embedded in the Word report. They are in `docs/evidence/`. They show a real demo upload with a generated initials image, not a personal photograph.

| Figure | Page | Visible evidence | Caption | Explanation |
| --- | --- | --- | --- | --- |
| 1 | `/` | TSA1 refill shop Today page and current task counts | Today page in the preserved refill shop design | TFA3 continues from TSA1. |
| 2 | `/tasks` | Full task list | Complete task schedule | The read-only task feature remains available. |
| 3 | `/customers` | Customer records and New customer | Customer directory with create action | Existing records remain and editing is available. |
| 4 | `/customers/new` | Empty form | New customer form | Required name and email fields are visible. |
| 5 | `/customers/new` after invalid entry | Invalid email error and retained name | Customer validation and retained values | Bad input is rejected without discarding typed data. |
| 6 | `/customers/1/edit` | Prefilled values | Prefilled customer edit form | Existing database values load into the form. |
| 7 | `/users` | Staff list and avatars | Staff directory | A prepared avatar and placeholders are displayed. |
| 8 | `/users/new` | Empty form | New staff user form | Username and name are required. |
| 9 | `/users/new` after duplicate | Duplicate username error | Username uniqueness validation | The duplicate is rejected and text remains. |
| 10 | `/users/1/edit` | Prefilled values and upload field | User edit and avatar form | The optional upload accepts JPG or PNG up to 2 MB. |
| 11 | `/users` after upload | Generated initials avatar | Prepared avatar on staff listing | The real uploaded PNG was converted to a JPEG for display. |
| 12 | `/users/1/edit` at 390 px | Narrow one-column form | Mobile user edit layout | The page has no horizontal overflow at 390 px. |
| 13 | `/profile` | Demo task-system user | Preserved demo profile | The TSA1 profile remains separate from staff records. |
| 14 | `/about` | Developer and updated project text | About page | TFA3 details fit within the TSA1 visual system. |
