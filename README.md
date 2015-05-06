# Vaughan Capital Partners

## Content Updating Instructions
- Content is maintained from the [wordpress admin](http://vcapadvisors.com/wp-admin)

### Pages & Posts
- The contents of **pages** (intros, header images, etc) can be edited in the "Pages" area of Wordpress
- Some pages have sub-content (like *Team* members and *Transaction* items) which are managed in the “Posts” area
- To facilitate editing, you can filter posts by category on the admin dashboard (i.e., see only team members by selecting "team")
- Every **Page** can have an optional header image. To enable/disable/edit it, go to `WP Admin > Pages > [your page]` and use the "featured image" function.

### Team
- To create a new team member, simply add a post and select the “team” category, and fill out the forms
- Members are ordered by the “order number” field (you have adjust manually)
- To create a new transaction, make a new post, select “transactions” and appropriate sub-category; fill out the appropriate fields.

### Transactions
- Transactions are ordered by date. Replace each transaction's post date by the actual date when the project was completed

---

## How to go live
- Visit `Godaddy > Hosting > Hosted Domains`
- Move the `vcapadvisors.com` entry to `/vcapadvisors`
- Remove the `vaughan.nan.do` entry
- Visit `WP Admin > Settings > General`
- Change both the `Wordpress Address (URL)` and `Site Address (URL)` to `http://vcapadvisors.com`