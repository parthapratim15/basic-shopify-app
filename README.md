# basic-shopify-app
 Basic Shopify app assignment
# Steps To Install

1. Copy .env.example to root and rename to .env
2. Install Composer & generate app key
    - php artisan key:generate
    - Add SHOPIFY_API_KEY, SHOPIFY_API_SECRET, SHOPIFY_SHOP in .env file
3. Run the migration command
   - php artisan migrate
4. Add two urls in your Shopify APP Setup >> Navigation section
   - https://<yoururl>/shop
   - https://<yoururl>/collections
5. Setup your base App URL and Allowed redirection URL(s) in Shopify App Setup Section

6. Install your app in store and run the application
